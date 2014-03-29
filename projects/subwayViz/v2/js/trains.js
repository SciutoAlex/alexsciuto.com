// Train Object
// -----------

function lineObject(linedata) {
  if(linedata.shape && linedata.rides) {
    var routePath = viz.append("path")
        .data([linedata.shape])
        .attr('class', 'line')
        .attr("d", d3.svg.line()
              .y(function(d) { return projection([d[1],d[0]])[1];})
              .x(function(d) { return projection([d[1],d[0]])[0];})
        );

    var trainArray = [];

    for (var i = 0; i < linedata.rides.length; i++) {
      trainArray.push(trainObject(linedata.rides[i], routePath, linedata.shape[0]));
    }
  }
};
