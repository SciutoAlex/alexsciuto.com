// Hello, welcome to your new Framer project. This is where you should 
// start coding. Feel free to remove all of this code.
// 
// Just to rehash: Framer just converted all your layer groups into framer
// views. Just drop index.html (next to this file) on your browser to see
// the result. Every view is available under the global PSD object, so if you
// had a layer group called MyPhoto you can find it under PSD["MyPhoto"].
// 
// You can safely re-run the Framer app any time and this code will stay 
// intact. Framer will only update the graphics.
// 
// Some links that could come in handy:
// 
// 	- Docs: 	http://www.framer.com/documentation
// 	- Examples: http://www.framer.com/examples


// ==============================================================
// Example: bounce all the views!


// Simple reusable function that binds a bounce to a click on a view

var pageopenspring = "spring(300,30,200)";

PSD.HomeScreen.x = 0;
PSD.HomeScreen.y = 0;
PSD.Histogram.x = 0;
PSD.Histogram.y = 0;
PSD.Dashboard.x = 0;
PSD.Dashboard.y = 0;

PSD.HomeScreen.width=100;

var height = PSD.Screen.height;
var width = PSD.Screen.width;

PSD.HomeScreen.superView = PSD.Screen;
PSD.Histogram.superView = PSD.Screen;
PSD.Dashboard.superView = PSD.Screen;

var homeinitialized = false;
var histograminitialized = false;
var dashboardinitialized = false;

//active states


home();

function histogram() {
	
	var drawertoggle = false;
	PSD.histogramDrawer.x = width;
	PSD.histogramDrawer.y = 0;
	PSD.histogramDrawer.visible = false;

	PSD.Dashboard.visible = false;
	PSD.HomeScreen.visible = false;
	PSD.histogrambuttonon.visible = false;

	PSD.elevationClip.visible = false;
	PSD.lengthClip.visible = false;
	
	PSD.Histogram.opacity = 1;
	PSD.Histogram.scale = .5;
	PSD.Histogram.visible = true;
	PSD.Histogram.animate({
		properties: {scale:1},
		curve: pageopenspring,
		origin: "50% 50%"

	})
	.on('end', function() {

		PSD.histogramDrawer.visible = true;
		PSD.elevationClip.visible = true;
		PSD.lengthClip.visible = true;
		var originalyelevation = PSD.elevationClip.subViews[0].y;
		var originalynlegth = PSD.lengthClip.subViews[0].y;
		PSD.elevationClip.subViews[0].y = 500;
		PSD.lengthClip.subViews[0].y = 400;
		PSD.lengthClip.subViews[0].y += 10;
		PSD.elevationClip.subViews[0].animate({
			properties: {y : originalyelevation},
			curve: "spring(400,30,200)",
			origin: "50% 50%",
		});
		PSD.lengthClip.subViews[0].animate({
			properties: {y : originalynlegth},
			curve: "spring(400,30,200)",
			origin: "50% 50%",

		});
		PSD.Histogram.opacity = 1;
	});	
	if (histograminitialized == false) {
		PSD.elevationClip.clip = true;
		PSD.lengthClip.clip = true;
		PSD.histogrambutton.on('click', function() {
			PSD.histogrambuttonon.visible = true;
			PSD.Histogram.animate({
				properties: {opacity:0},
				curve: "ease",
				time:300
			});
			dashboard();
		});
	
		PSD.histogrambackbutton.on('click', function() {
			PSD.Histogram.animate({
				properties: {opacity:0},
				curve: "ease",
				time:300
			});
			home();
		});
		
		PSD.filterButton.on('click', function() {
			if(drawertoggle == false) {
				PSD.Histogram.animate({
					properties : {x : "-271"},
					curve: "spring(400,30,200)",
				});
				drawertoggle = true;
			} else {
				PSD.Histogram.animate({
					properties : {x : 0},
					curve: "spring(400,30,200)",
				});
				drawertoggle = false;
			}
		});
		
		histograminitialized = true;
	}

}


function home() {
	PSD.Dashboard.visible = false;
	PSD.homebutton.visible = false;
    var originalxbutton = PSD.destinations.x +30; 
	PSD.destinations.x += 300;
	PSD.destinations.opacity = 0;
	PSD.sideBar.opacity = 0;
	PSD.Histogram.visible = false;
	PSD.HomeScreen.visible = true;
	PSD.HomeScreen.opacity = 1;
	
	
	PSD.HomeScreen.scale = .5;
	PSD.HomeScreen.animate({
		properties: {scale:1},
		curve: pageopenspring,
		origin: "50% 50%",
	})
	.on('end', function() {
		PSD.sideBar.animate({
			properties: {opacity:1},
			curve: "ease-in",
			time:100
		})
		.on('end', function() {
			PSD.destinations.opacity = 1;
			var index = 0;
			for(var i in PSD.destinations.subViews) {

				PSD.destinations.subViews[i].animate({
					properties: {x : -originalxbutton},
					curve: "spring("+parseInt(index*30+200)+",30,200)"
					
				});

				index++;
			}
			
		});
	});
	
	if (homeinitialized == false) {
		PSD.one.on('click', function() {
				PSD.one.animate({
					properties: {x : 300},
					curve: "ease",
					time:300
				});
				PSD.homebutton.visible = true;
				PSD.HomeScreen.animate({
					properties: {opacity:0},
					curve: "ease",
					time:300
				})
				.on('end', function() {
					
					PSD.one.x = originalxbutton;
					PSD.homebutton.visible = false;
					
					histogram();
				});
			});
			homeinitialized = true;
			console.log('inits');
		}
		
}

function dashboard() {
	PSD.Dashboard.visible = false;
	PSD.HomeScreen.visible = false;
	PSD.Histogram.visible = false;
	
	PSD.optionTaken.visible = false;
	PSD.milesUpdated.visible = false;
	PSD.arrowupdated.visible = false;
	PSD.option.visible = false;
	
	var optionx = PSD.option.x;
	var optiony = PSD.option.y;
	PSD.option.x = -500;
	PSD.optionTaken.y -= 40;
	
	
	PSD.Dashboard.scale = .5;
	PSD.Dashboard.visible = true;
	PSD.Dashboard.animate({
		properties: {scale:1},
			curve: pageopenspring,
			origin: "50% 50%",
	})
	.on('end', function() {
		
	});
	
	if (dashboardinitialized == false) {
		dashboardinitialized = true;
		PSD.arrows.on('click', function() {
			PSD.option.visible = true;
			PSD.option.animate({
				properties: {x : optionx},
			curve: "spring(400,30,200)",
			origin: "50% 50%",
			});
		});
		PSD.option.on('click', function() {
			PSD.optionTaken.visible = true;
			PSD.option.visible = false;
			PSD.optionTaken.animate({
				properties: {opacity:1, y: optiony},
				curve: "spring(400, 20, 300)"
			}).on('end', function() {
				PSD.optionTaken.animate({
					properties: {x : 1000},
					curve: "ease-in",
					origin: "50% 50%",
					time: 500
				});
			});
			PSD.arrowupdated.visible = true;
				PSD.arrows.animate({
					properties: {opacity : 0},
					curve: "ease-in",
					time:500
				});
				PSD.miles.animate({
					properties: {opacity : 0},
					curve: "ease-in",
					time:500
				}).on('end', function() {
					PSD.milesUpdated.visible = true;
				});
			});
		PSD.dashboardbackbutton.on('click', function() {
			histogram();
		});	
	 }		
}
	
