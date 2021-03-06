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
      var counter = 0, countershape = 0, counterride = 0;
      for(var i in data) {

        // Convert to array for d3
        // -------
        finalData.push(data[i]);

        //for testing purposes, only load subset
        // if(finalData.length < 2) {
        //   finalData.push(data[i]);
        // }


        var thisData = finalData[finalData.length-1];


        // add metadata
        // --------

        thisData.index = counter;
        thisData.label = i;
        var lineNumber = i.substring(0,1);

        if(lineNumber == "S") {
          lineNumber = i.substring(0,2);
        }

        // Fill in empty and disconnected cells
        // -------

        if(!thisData.shape) {
          $('<p>', {'html' : thisData.label}).appendTo('body');
          //console.log(countershape); countershape++;
          thisData.shape = [[40.723598,-74.1],[40.87243,-74]];
        }

        if(!thisData.rides) {
          //$('<p>', {'html' : thisData.label}).appendTo('body');
          //console.log(thisData)
          //console.log(counterride); counterride++;
          thisData.rides = [];
        }

        //filter out weekend rides
        thisData.rides = thisData.rides.filter(function(e){
          return e.trip_id.substr(9,3) == "SAT";
        })



        routeMetaData.map(function(element) {
          if(lineNumber == element.route_id) {
            thisData.routeMetaData = element;
          }

        })

        counter++;



        for (var j = 0; j < thisData.rides.length; j++) {

          var thisRide = thisData.rides[j];
          thisData.rides[j].index = j;
          thisData.rides[j].endTime = convertToSeconds(thisRide.endTime);
          thisData.rides[j].startTime = convertToSeconds(thisRide.startTime);
          thisData.rides[j].currentPercent = 0;
          thisData.rides[j].nextPercent = 0;
        }


        //filter out weekend rides


        //for testing purposes, only load subset
        // if(finalData.length < 1) {
        //   finalData.push(data[i]);
        // }

        //for production


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
