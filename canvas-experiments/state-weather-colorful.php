<?php include_once "../page.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="data/weatherstationscoord-state.js"></script>
    <script>
   
      $(function(){
        
        var zoom = 12,
            life = 100;
        
        
        
        
        
        var canvas = $("#paper")[0],
            c = canvas.getContext("2d");
        
        var map_width = 430;
        var map_height = 332;
        var longitude_shift = -55;
        var x_pos = 10;
        var y_pos = 95;
        
        
        c.fillStyle = "black";
        c.fillRect(0,0,canvas.width,canvas.height);
        c.fillStyle = "rgba(0,0,0,.5)";
        
        function Spot(x, y, i) {
          this.x = x;
          this.y = y;
          this.start = i;
        }
        
        var spots = [];
        for (var i = 0; i < data.length; i++){
          var xy = convert(data[i][0], data[i][1]);
          
          spots[i] = new Spot(xy.x, xy.y, i);
        }
        
        
        
        
        
        
        
        Spot.prototype.draw = function(){
          if (this.start === counter) {
            c.fillStyle = "hsl("+counter/10+",80%,40%)";
            c.fillRect(this.x, this.y, 1, 1);
            console.log(this.x+ ", "+ this.y);
          }
        }
          
          
          
          
          
          
          var counter = 0;
       var interval = setInterval(function() {
          
          for (var i = 0; i < spots.length; i++){
            spots[i].draw();
          }         
         
         if (counter >= spots.length) {
          clearInterval(interval); 
         } 
          
          c.fill();
          counter++;
        }, 0);
        
        
        function convert(lat, lng){
          var x = (map_width * (180 + lng) / 360) % map_width + longitude_shift;
          
          // latitude: using the Mercator projection
          var lat = lat * Math.PI / 180;  // convert from degrees to radians
          var y = Math.log(Math.tan((lat/2) + (Math.PI/4)));  // do the Mercator projection (w/ equator of 2pi units)
          y = (map_height / 2) - (map_width * y / (2 * Math.PI));   // fit it to our map
          
         
          x -= x_pos;
          y -= y_pos;
          
          x *= zoom;
          y *= zoom;
          
          
          
          return {x:x,y:y};
        }
        
        
        
      });
    
    </script>
       <style>
      #paper {
        height:500px;
        width:900px; 
        border:1px solid black;
        background-color:black;
        padding:50px;
          
      }
        
        a, a:visited, a:hover {
          color:white;
        }
      
      body {
        background-color:black;
        color:white;
            }
        
        .caption {
           font-size:10px;
          font-family:arial;
        }
        
        
        #container {
          width:900px;
          margin:0px auto;
        }
    </style>
  </head>
  <body>
     <div id="container">
      <?php page_menu(); ?>
       <div class="caption"><p>NOAA's National Climatic Data Center maintains a number of <a href="http://www.ncdc.noaa.gov/homr/">historical weather station history databases</a>. I took the geo-coordinates from 10,000+ stations in the continental US, and mapped them. I used Paul A Jungwirth' <a href="http://stackoverflow.com/questions/1019997/convert-lat-longs-to-x-y-co-ordinates">algortithm</a> to convert latitude/longitude coordinates to a Mercator Projection.</p>
         </div>
    <canvas width=900 height=500 id="paper"></canvas>
  </div>
  </body>
</html>