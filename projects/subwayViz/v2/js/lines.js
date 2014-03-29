// Line Object
// -----------

function lineObject(linedata) {


  // Public Methods
  // --------------

  this.updateTrainPositions = updateTrainPositions;

  // Private Variables
  // --------------
  var lineName = linedata.label;
  var lineIndex = linedata.index;
  var lineColor = linedata.routeMetaData.route_color;
  var listofTrains = linedata.rides;
  var listofCurrentTrains = [];
  var shapeData = linedata.shape;
  errorOutput = $('.error');


  // Initialize
  // --------------



  var routePath = viz.append("path")
      .data([shapeData])
      .attr('class', 'line')
      .style('opacity', 0)
      .attr("d", d3.svg.line()
            .y(function(d) { return projection([d[1],d[0]])[1];})
            .x(function(d) { return projection([d[1],d[0]])[0];})
      );

  listofCurrentTrains = updateTrainsVisibleList(simTime, listofTrains);


  var trainCircles = viz.selectAll('.circle-'+lineIndex)
    .data(listofCurrentTrains, function(d) {return d.index;});

  trainCircles
    .enter()
    .append('circle')
    .attr('class', 'circle-'+lineIndex)
    .attr('r', 1.5)
    .style('fill', lineColor)
    .attr("transform", function(d) {  return translateAlong(routePath.node(), getPercentFinished(d,0)); } );


  function updateTrainPositions() {


    listofCurrentTrains = updateTrainsVisibleList(simTime, listofTrains);
    //console.log(listofCurrentTrains.map(function(d){return d.index;}))


    trainCircles = viz.selectAll('.circle-'+lineIndex)
      .data(listofCurrentTrains, function(d) {return d.index;});

    trainCircles.exit().transition().duration(updateInterval*.5).style('opacity', 0).remove();


    trainCircles.transition().duration(updateInterval-10).ease('linear').attrTween("transform", translateAlongTween(routePath.node()));


    trainCircles
      .enter()
      .append('circle')
      .attr('class', 'circle-'+lineIndex)
      .style('fill', lineColor)
      .attr('r',1.5)
      .attr("transform", "translate(" + projection(shapeData[0]) + ")");



}


  // Takes the complete list of each track's train times, then prunes them to only show
  // the ones that are active at a given time
  // Input time(seconds) and traintime array
  // Output traintime array
  // --------------
  function updateTrainsVisibleList(simTime, trainlist) {
    var returnArray = [];
    trainlist.map(function(trainTime){

      if((trainTime.startTime < simTime) && (trainTime.endTime > simTime)) {
          returnArray.push(trainTime);


      }
    });
    return returnArray;
  }

  // Attempting to animate with tweens. Perhaps will help perofrmance
  // ------



  // Take an SVG path and return the point X% of the way
  // --------------
  //
  function translateAlong(path, percentToGoTo) {
    var l = path.getTotalLength();
    var p = path.getPointAtLength(percentToGoTo*l);
    return "translate(" + p.x + "," + p.y + ")";
  }

  // Make at attrTween for path--alternative to above function
  // ---------

  function translateAlongTween(path, d) {
    var l = path.getTotalLength();
    return function(d, i, a) {
      var currentPercent = getPercentFinished(d, 0);
      var newPercent = getPercentFinished(d, timeIncrement);
      $('.error').html(newPercent + " - " + currentPercent)
      return function(t) {
        var p = path.getPointAtLength(l*(currentPercent + (newPercent-currentPercent)*t));
        return "translate(" + p.x + "," + p.y + ")";
      };
    };
  }

  // Take a time and return the percent finished
  // -------------------

  function getPercentFinished(traintime, offset) {

      var result = (simTime + offset - traintime.startTime) / (traintime.endTime - traintime.startTime);

      return result;

  }


};
