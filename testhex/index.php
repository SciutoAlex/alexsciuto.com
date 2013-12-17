<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Hex Play: Painting with Shapes</title>
  <meta property="og:title" content="Hex Play: Painting with Shapes" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.alexsciuto.com/hexplay" />
  <meta property="og:image" content="http://www.alexsciuto.com/hexplay/facebook.jpg" />
  <meta property="og:site_name" content="AlexSciuto.com" />
  <meta property="fb:admins" content="SciutoAlex" />
  <meta property="og:description" content="A little app to play with color and make interesting shapes." />
  <link rel="SHORTCUT ICON" href="http://www.alexsciuto.com/hexplay/favicon.ico" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
  <script type="text/javascript" src="https://raw.github.com/DmitryBaranovskiy/raphael/master/raphael-min.js">
</script>
  <script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> 
  <script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script>
  <style type="text/css">
/*<![CDATA[*/
                       body {
       margin: 20px auto;
       background: url("bgslice.jpg") repeat-x;
       font-family: Tahoma, Arial, san-serif;
  }

  #top {
       width: 900px;
       margin: 0px auto;
  }

  #logo {
       margin-top: -10px;
  }

  #social {
       float: right;
       margin-top: 27px;
  }

  #bottom {
       margin-top: -28px;
       padding-top: 20px;
  }

  #canvas_container {
  	   position:relative;
       width: 900px;
       height: 500px;
       margin: 10px auto;
  }
  
#button_container {
  	   position:relative;
       width: 620px;
       height: 100px;
       float:left;
       margin-top:3px;
  }

  .hexlink {
       width: 51px;
       height: 60px;
       float: left;
       background: #000;
       margin-right: 10px;
  }

  .hexlinkr {
       width: 51px;
       height: 60px;
       float: right;
       margin-right: 5px;
  }

  #buttons {
       width: 900px;
       margin: 10px auto;
  }

  #shapeLine {
       background: url("menu.jpg") no-repeat scroll -704px -61px transparent;
  }

  #shapeLine:hover {
       background: url("menu.jpg") no-repeat scroll -704px 0px transparent;
  }

  #shapeSingle {
       background: url("menu.jpg") no-repeat scroll -644px -61px transparent;
  }

  #shapeSingle:hover {
       background: url("menu.jpg") no-repeat scroll -644px 0px transparent;
  }

  #shapeSeven {
       background: url("menu.jpg") no-repeat scroll -764px -61px transparent;
  }

  #shapeSeven:hover {
       background: url("menu.jpg") no-repeat scroll -764px 0px transparent;
  }

  #actionClear {
       background: url("menu.jpg") no-repeat scroll -824px -61px transparent;
  }

  #actionClear:hover {
       background: url("menu.jpg") no-repeat scroll -824px 0px transparent;
  }
  
  
   #small-image {
    position: absolute;
    top: 20px;
    left:100px;
  }
  
  #fb form {
  position: absolute;
  width:900px;
  top:420px;
  left:98px;
  }
  
  #fb p {
  	color:#aaa;
  	font-size:10px;
  	position:absolute;
  	top:420px;
  	left:550px;
  	width:210px;
  }
  
  #fb #btn {
    position: absolute;
  top:476px;
  left:550px;
  }
  
   #fb #btn a {
  margin-right:10px;
  }
  
  /*]]>*/
  </style>
</head>

<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '173521372752053', // App ID
      channelUrl : '//WWW.alexsciuto.com/hexplay', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName('head')[0].appendChild(js);
   }(document));
</script>

  <div id="top">
    <div id="social">
      <div style="float:right;">
        <div class="fb-like" data-href="http://alexsciuto.com/hexplay/" data-send="true" data-layout="button_count" data-width="100" data-show-faces="false"></div>
      </div>

      <div style="float:right; width:90px; padding-top:0px">
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="SciutoAlex">Tweet</a> <script type="text/javascript">
//<![CDATA[
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        //]]>
        </script>
      </div>
    </div>

    <div id="logo">
      <img src="logo.jpg" />
    </div>
  </div>

  <div id="bottom">
    <div id="canvas_container"></div>
	
    <div id="buttons">
    	<div id="button_container"></div>
      <div style="float:right;">
        <a href="#" id="actionPrint" class="hexlinkr" name="actionPrint"><img style="margin:8px 5px 0px 0px;" src="facebookbtn.jpg"></a><a href="#" class="hexlinkr" id="shapeLine" name="shapeLine"></a> <a href="#" class="hexlinkr" id="shapeSingle" name="shapeSingle"></a> <a href="#" class="hexlinkr" id="shapeSeven" name="shapeSeven"></a> <a href="#" class="hexlinkr" id="actionClear" name="actionClear"></a>
      </div>
        <div style="clear:both"></div>
       <div class="fb-comments" data-href="http://www.alexsciuto.com/hexplay" data-num-posts="2" data-width="500"></div>
      
      </div>

    
     
    </div>
  </div><script type="text/javascript">
//<![CDATA[
  $(document).ready( function() {
       var r = 10;
       var paperwidth = 900;
       var paperheight = 500;
       
       
       var bgcolor = "#eee";
       var shadow = "#ddd";
       
       
       var hexwidth = r*2*(Math.sin(60 * Math.PI / 180));
       var hexheight = 2*r;
       var xoffset = 0;
       var yoffset = 0;
       var xdif = r*2*(Math.sin(60 * Math.PI / 180));
       var ydif = r*2*(Math.cos(41 * Math.PI / 180));
       var width = Math.floor(paperwidth/hexwidth)+1;
       var height = Math.floor(paperheight/hexheight)+8;
       
       
        paper = new Raphael("canvas_container", paperwidth, paperheight);
        button = new Raphael("button_container", 620, 100);
               
       Raphael.fn.hexagon = function(radius, locx, locy, hx, hy) {
               this.hx = hx;
               this.hy = hy;
               var path = ""
               for (var i = 0; i <= 6; i++) {
                       var a = i * 60,
               x = radius * Math.cos(a * Math.PI / 180),
               y = radius * Math.sin(a * Math.PI / 180)
               path += (i == 0 ? "M" : "L") + (locx + x) + "," + (locy + y)
               }
               path += "Z";
               return this.path(path);
       }
       
       function hex(x, y) {
               this.x=x;
               this.y=y;       
       }
       
       
       
       var arr = new Array(width);
       for (i=0; i < width; i++) {
               arr[i] = new Array(height);
               for (j=0; j < height; j++) {
                       if (j % 2) {
                               var valx = xoffset + i*xdif + .25*xdif;
                       } else {
                               var valx = xoffset + i*xdif - .25*xdif;
                               }
                       var valy = yoffset + j*ydif;
                       arr[i][j] = new hex(valx, valy);
               }
       }
       
       
       
      
       
               

       for (i = 0; i < arr.length; i++) {
               for (j = 0; j < arr[i].length; j++) {
                       arr[i][j].hexagon = paper.hexagon(r, arr[i][j].x, arr[i][j].y).rotate(30).attr({
                               "fill" : bgcolor,
                               "stroke" : "#fff",
                               "stroke-width" : 1
                       });             
                       arr[i][j].hexagon.i = i;
                       arr[i][j].hexagon.j = j;
                       arr[i][j].hexagon.color = bgcolor;                      
                       //paper.text(arr[i][j].x, arr[i][j].y, i + ", " + j).attr({"fill" : "#000"});
                       if (j === 0 || i === 0) {
                               arr[i][j].hexagon.attr({"opacity" : 0});
                       }
               }
       }       

       $.each(arr, function() {
               $.each(this, function() {
                       this.hexagon.mouseover( function() { 
                       		this.node.style.cursor = 'pointer';   
                               if (mouseDown == 1) {
                                fill(this.i, this.j);
                                       draw(this.i, this.j);
                               } else {
                                       attributes = {"fill" : shadow}
                                       draw(this.i, this.j);
                               }
                       });
                               
                       this.hexagon.mouseout( function() {
                       			this.node.style.cursor = 'pointer';   
                               refill(this.i, this.j);
                       });
                               
                       this.hexagon.mousedown( function() {
                       			this.node.style.cursor = 'pointer';   
                               fill(this.i, this.j);
                               draw(this.i, this.j);
                       });                     
               });
       });
       
       var mouseDown = 0;
       document.body.onmousedown = function() { 
               ++mouseDown;
       }
       document.body.onmouseup = function() {
               --mouseDown;
       }
       var shape = "single";
       $("#shapeSingle").click(function() {
               shape = "single";       
               $(this).siblings().css("background-position-y", "-61px").end().css("background-position-y", "00px");
       });
       
       $("#shapeLine").click(function() {
               shape = "line"; 
               $(this).siblings().css("background-position-y", "-61px").end().css("background-position-y", "00px");
       });
       
       $("#shapeSeven").click(function() {
               shape = "seven";        
               $(this).siblings().css("background-position-y", "-61px").end().css("background-position-y", "00px");
       });
       
        $("#shapeSeven").click(function() {
               shape = "seven";        
               $(this).siblings().css("background-position-y", "-61px").end().css("background-position-y", "00px");
       });
       
       $("#actionClear").click(function() {
               $.each(arr, function() {
                       $.each(this, function() {
                               this.hexagon.color = bgcolor;
                               this.hexagon.attr({
                                       "fill" : bgcolor
                               });
                       });
               });
       });
       
       $('#actionPrint').click(function() {
       	print();
       	});
       
       var buttons = new Array(9);
       colorPicker(30, 29, "#FF78FF", "#FEE6FF", 245, 43, 198, "#ffffff");
       colorPicker(90, 29, "#6ECD01", "#DAFFA9", 102, 204, 10, "#ffffff");
       colorPicker(150, 29, "#BF1313", "#FCCDCD", 102, 10, 10, "#ffffff");
       colorPicker(210, 29, "#FD6A00", "#FCD0B1", 255, 102, 14, "#ffffff");
       colorPicker(270, 29, "#FF1058", "#FCD0DE", 204, 10, 51, "#ffffff");
       colorPicker(330, 29, "#2928FF", "#D7D7FF", 30, 30, 159, "#ffffff");
       colorPicker(390, 29, "#961EDC", "#EED7FF", 90, 20, 139, "#ffffff");
       colorPicker(450, 29, "#37F4F4", "#C5FCFC", 70, 220, 239, "#ffffff");
       colorPicker(510, 29, "#ffffff", "#efefef", 245, 245, 245, "#eeeeee");
       colorPicker(570, 29, "#FFFF2E", "#FFFDBB", 235, 215, 30, "#ffffff");
       

       var rgb = "afd";
       var r = 3;
       var g = 2;
       var b = 1;
       function rgbset(x, y, z) {
               r = x;
               g = y;
               b = z;
               rgb = "rgb(" + r + ", " + g + ", "  + b + ")";
       }
	   function rgbvariance() {
	   			// dr = Math.floor(r + Math.random()*r - .5*r); Crazy Colors!
               dr = Math.floor(r + Math.random()*r);
               dg = Math.floor(g + Math.random()*g);
               db = Math.floor(b + Math.random()*b);
               if (dr > 255) { dr = 255; }
               if (dg > 255) { dg = 255; }
               if (db > 255) { db = 255; }
               //$('#test').append("rgb(" + dr + ", " + dg + ", "  + db + ")");
               return "rgb(" + dr + ", " + dg + ", "  + db + ")";
               
       }
       function draw(i, j) {
       
               arr[i][j].hexagon.attr(attributes);
               if (shape === "line" || shape === "seven") {
                       if (j % 2) {
                               arr[i][j-1].hexagon.attr(attributes);
                               arr[i+1][j+1].hexagon.attr(attributes);
                       } else {
                               arr[i-1][j-1].hexagon.attr(attributes);
                               arr[i][j+1].hexagon.attr(attributes);
                       };
               };
               
               if (shape === "seven") {
                       if (j % 2) {
                               arr[i][j+1].hexagon.attr(attributes);
                               arr[i+1][j-1].hexagon.attr(attributes);
                       } else {
                               arr[i-1][j+1].hexagon.attr(attributes);
                               arr[i][j-1].hexagon.attr(attributes);
                       };
                               arr[i-1][j].hexagon.attr(attributes);
                               arr[i+1][j].hexagon.attr(attributes);
               };
       }       
       function fill(i, j) {
               var c = rgbvariance();
                       arr[i][j].hexagon.color = c;
                       if (shape === "line" || shape === "seven") {
                               if (j % 2) {
                                       arr[i][j-1].hexagon.color = c;
                                       arr[i+1][j+1].hexagon.color = c;
                               } else {
                                       arr[i-1][j-1].hexagon.color = c;
                                       arr[i][j+1].hexagon.color = c;
                               };
                       };
                       
                       if (shape === "seven") {
                               if (j % 2) {
                                       arr[i][j+1].hexagon.color = c;
                                       arr[i+1][j-1].hexagon.color = c;
                               } else {
                                       arr[i-1][j+1].hexagon.color = c;
                                       arr[i][j-1].hexagon.color = c;
                               };
                               arr[i-1][j].hexagon.color = c;
                               arr[i+1][j].hexagon.color = c;
                       };
       }
       function refill(i, j) {
               attributes = {"fill" : arr[i][j].hexagon.color}
               arr[i][j].hexagon.attr(attributes);
               if (shape === "line" || shape === "seven") {
                       if (j % 2) {
                               attributes = {"fill" : arr[i][j-1].hexagon.color}
                               arr[i][j-1].hexagon.attr(attributes);
                               attributes = {"fill" : arr[i+1][j+1].hexagon.color}
                               arr[i+1][j+1].hexagon.attr(attributes);
                       } else {
                               attributes = {"fill" : arr[i-1][j-1].hexagon.color}
                               arr[i-1][j-1].hexagon.attr(attributes);
                               attributes = {"fill" : arr[i][j+1].hexagon.color}
                               arr[i][j+1].hexagon.attr(attributes);
                       };
               };
               
               if (shape === "seven") {
                       if (j % 2) {
                               attributes = {"fill" : arr[i][j+1].hexagon.color}
                               arr[i][j+1].hexagon.attr(attributes);
                               attributes = {"fill" : arr[i+1][j-1].hexagon.color}
                               arr[i+1][j-1].hexagon.attr(attributes);
                       } else {
                               attributes = {"fill" : arr[i-1][j+1].hexagon.color}
                               arr[i-1][j+1].hexagon.attr(attributes);
                               attributes = {"fill" : arr[i][j-1].hexagon.color}
                               arr[i][j-1].hexagon.attr(attributes);
                       };
                       attributes = {"fill" : arr[i-1][j].hexagon.color}
                       arr[i-1][j].hexagon.attr(attributes);
                       attributes = {"fill" : arr[i+1][j].hexagon.color}
                       arr[i+1][j].hexagon.attr(attributes);
               };
       }
    
       var img;
       var svg;
       var time = new Date();
       var id =  time.getTime();
       var outputname;
       
    function saveDaPicture(){
    	img = document.getElementById('canvas').toDataURL("image/png"); 
	}
	
	function postPic() {
		$.post("process_fb.php", {image:img, time:id}, function() {
			outputname = "output" + id + ".png";
			$('#loading img').hide().remove();
			$('#loading').append("<div id='fb'><img id='small-image' src='" + outputname + "'><form action='submit-to-facebook.php' id='submit-form'><textarea name='submit-text' cols=60 rows=5></textarea><input style='display:none;' name='submit-picture' value='" + outputname + "'></form><p>You'll have to authorize a facebook app to post your photo. If you don't want to do this, you can just copy and paste the picture above!</p><div id='btn'><a href='#' id='post-to-facebook'>Post to Facebook</a><a href='#' id='close'>Close</a></div>");
		});
	}
	
	$('#close').live('click', function() {
		$('#loading').remove();
	});
		
	$('#post-to-facebook').live('click', function() {
		 FB.login(function(response) {
		   if (response.authResponse) {
			 console.log('Welcome!  Fetching your information.... ');
			 FB.api('/me', function(response) {
			   console.log('Good to see you, ' + response.name + '.');
			   $.post("submit-to-facebook.php", $("#submit-form").serialize(), function(response) {$('body').append(response.photo);});
			   window.alert("Posted to Facebook!");
		       $('#loading').remove();
			 });
		   } else {
			 console.log('User cancelled login or did not fully authorize.');
		   }
		 }, {scope: 'publish_stream'});
		 
	});
	

	function print() {
		$('#bottom').append('<canvas id="canvas"></canvas>');
		$('#canvas').hide();
		svg = $('#canvas_container').html().replace(/>\s+/g, ">").replace(/\s+</g, "<");
		$('#canvas_container').append("<div id='loading'></div>");
		$('#loading')
			.css({
				"background" : "url('http://alexsciuto.com/wp-content/themes/Alex/Alex/img/background-transparent.png')",
				"width" : "900px",
				"height" : "600px",
				"position" : "absolute",
				"top" : "0",
				"left" : "0"
			})	
			.append("<img src='http://alexsciuto.com/wp-content/themes/Alex/Alex/img/ajax-loader.gif'>");
		$('#loading img')
			.css({
				"position" : "absolute",
				"top" : "250",
				"left" : "450"
			});
			
    	canvg('canvas', svg, {renderCallback: saveDaPicture, ignoreMouse: true, ignoreAnimation: true});
    	postPic();
}
	
	
	
	var i = 0;
	
	function colorPicker(ix, iy, icolorOn, icolorOff, ir, ig, ib, istrokeColor) {
		buttons[i] = new Object();
		buttons[i].x = ix;
		buttons[i].y = iy;
		buttons[i].colorOn = icolorOn;
		buttons[i].colorOff = icolorOff;
		buttons[i].r = ir;
		buttons[i].g = ig;
		buttons[i].b  = ib;
		buttons[i].strokeColor = istrokeColor;
		buttons[i].on = false;
		buttons[i].number = i;
		i++;
	}
		
	$.each(buttons, function() {	
		var colorOn = this.colorOn;
		var colorOff = this.colorOff;
		var r = this.r;
		var g = this.g;
		var b = this.b;
		var strokeColor = this.strokeColor;
		var i = this.number;
		this.btn = button.hexagon(30, this.x, this.y)
			.rotate(30)
			.attr({
			   "fill" : colorOff,
			   "stroke" : strokeColor,
			   "stroke-width" : 1
			})
		   .mouseover(function() {
				this.animate({
					"fill": colorOn
				}, 400);
				this.node.style.cursor = 'hand';
			})
			.mouseout(function() {
				if (buttons[i].on == true) {
					this.animate({
						"fill": colorOn
					}, 400);
				} else {
					this.animate({
						"fill": colorOff
					}, 400);
				}
				this.node.style.cursor = 'auto';
			})
			.click(function() {
				 rgbset(r, g, b);
				 $.each(buttons, function() {
				 	var colorOff = this.colorOff;
				 	this.btn.attr({
				 		"fill" : colorOff
				 	});
				 	this.on = false;
				 });
				 buttons[i].btn.animate({
				 		"fill" : colorOn
				 }, 400);
	
				 buttons[i].on = true;	 
			});	   	
	   });
	   
	   
	   
	 
  

  


   
  
 
       
  });
  
  





               
               
  //]]>
  </script>
</body>
</html>
