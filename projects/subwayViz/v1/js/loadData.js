function loadData(callback) {
  async([getBoroughs, getSubwayLines, getRoutes, getStops, getTimeTable], callback);

  function getSubwayLines(cb) {
    d3.json("data/subwayLines.json", function(data){
      subwayLinesGeoJson = data;
      cb();
    });
  }

  function getBoroughs(cb) {
    d3.json("data/boroughs.json", function(data){
      boroughShapesGeoJson = data;
      cb();
    });
  }

  function getRoutes(cb) {
    d3.csv("data/routes.csv", function(data){
      routeMetaData = data;
      cb();
    });
  }

  function getStops(cb) {
    d3.csv("data/stops.csv", function(data){
      stopsMetaData = data;
      cb();
    });
  }

  function getTimeTable(cb) {
    d3.json("data/shapes-and-trains-and-times.json", function(data){
      var finalData = []; //converting object to array
      var counter = 0;
      for(var i in data) {
        if(!data[i].shape) {
          data[i].shape = [[3,4]];
        }

        if(!data[i].rides) {
          data[i].rides = [];
        }

        data[i].index = counter;
        data[i].label = i;
        var lineNumber = i.substring(0,1);

        if(lineNumber == "S") {
          lineNumber = i.substring(0,2);
        }

        routeMetaData.map(function(element) {
          if(lineNumber == element.route_id) {
            data[i].routeMetaData = element;
          }

        })

        counter++;

        for (var j = 0; j < data[i].rides.length; j++) {
          var thisRide = data[i].rides[j];
          data[i].rides[j].index = j;
          data[i].rides[j].endTime = convertToSeconds(thisRide.endTime);
          data[i].rides[j].startTime = convertToSeconds(thisRide.startTime);
        }
        //for testing purposes, only load subset
        // if(finalData.length < 1) {
        //   finalData.push(data[i]);
        // }

        //for production
        finalData.push(data[i]);

      }

      timeTable = finalData;
      console.log(timeTable);
      cb();
    });
  }

  function convertToSeconds(dateObject) {
    dateObject = dateObject.split(':');
    // really slow make sure to fix
    return parseInt(dateObject[0]) * 3600 + parseInt(dateObject[1]) * 60 + parseInt(dateObject[2]);


}




}


// Execute an array of functions syncronously in
// order and callback when they're all done
// ---------

function sync(list, callback) {
  i = 0;
  nextData();
  function nextData(){
    if ( i == list.length) {
      callback();
      return;
    }
    else {
      list[i++](nextData);
      return;
    }
  }
}


// Execute an array of functions asyncronously and
// callback when they're all done
// ---------

function async(list, callback) {
  remaining = list.length;
  list.forEach(function(f, i){ list[i](done); });
  function done(){
    remaining--;
    if (remaining === 0) {
      callback();
    }
  }
}
