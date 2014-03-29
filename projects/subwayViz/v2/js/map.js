function Map(el) {
  var self = this;

  // Layers
  // ------

  viz        = d3.select(el).append('svg'),
  shapeLayer = viz.select(".boroughs"),
  lineLayer  = viz.select(".lines"),
  trainLayer = viz.select(".trains");
  errorOut = $('.error');

  // D3 Variables
  // ------------

  projection = d3.geo.mercator()
      .center([-73.93, 40.74])
      .scale(100000)
      .translate([(width) / 2, (height)/2]);

  path = d3.geo.path()
      .projection(projection);

  timeFormat = d3.time.format('%H:%M:%S');

  viz.attr('width', width)
      .attr('height', height)
      .append('g');

  // Public Functions
  // ----------------

  this.updateTime = updateTime;


  // Create the static map
  // --------

  viz.append("path")
    .datum(boroughShapesGeoJson)
    .attr("d", path)
    .style("stroke" , function(d) { return "#ddd"; })
    .style("stroke-width", 1)
    .style("fill", "#fff")
    .attr('class', 'boroughs');

    viz.append("path")
      .datum(subwayLinesGeoJson)
      .attr("d", path)
      .attr("class", "line")
      .style("stroke" , function(d) { return "#999"; });




  // Create the lines objects
  // -----------
  viz.selectAll('.train-lines')
  .data(timeTable)
    .enter()
    .append('circle')
    .attr('class', 'train-lines')
    .each(function(d, i) {
      //console.log(i + '- line created');
      d.lineObject = new lineObject(d);
    });

  // update the time and instruct the lines to update the trains
  // ----------
  function updateTime(newTime) {

    simTime = newTime;
    viz.selectAll('.train-lines')
    .each(function(d, i) {
      //console.log(i + '- line updated');
      d.lineObject.updateTrainPositions();
    });
  }


  var time = 30000;
  updateInterval = 5000;
  timeIncrement = 50;
  //updateTime(time);

  // setTimeout(function() {
  //   console.log(time+1000)
  //   updateTime(time+1000);
  // }, 2000);
  setInterval(function() {
    updateTime(time);
    time+=timeIncrement;
    errorOut.html(time);
    //console.log(time);
    if(time > 86000) {
      time = 0;
    }
  },updateInterval)





}
