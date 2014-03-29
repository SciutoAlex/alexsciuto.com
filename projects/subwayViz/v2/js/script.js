var timeTable,
stopsMetaData,
routeMetaData,
boroughShapesGeoJson,
subwayLinesGeoJson;

var simTime = 10 * 3600,
projection,
path,
timeFormat,
viz,
updateInterval;

var errorOutput;

var width = 800,
    height = 800;

// Begin the party
// ---------------

$(function(){
  loadData(setup); // Run setup when data is loaded
});

// Setup
// -----

function setup() {
  errorOutput = $('.error');
  spinner = new Spinner();
  map = new Map("#map");

  spinner.hide(); // When loading is complete
}


// Spinner
// -------

function Spinner() {
  this.show = function() {
    $("body").addClass("loading");
  };
  this.hide = function() {
      $("body").removeClass("loading");
  };
}
