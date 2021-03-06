<?php include_once "../page.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
      
      window.onload = function() {
        
        
        var canvas = document.getElementById("paper"),
            c = canvas.getContext("2d");
        
        
        function Orbit(px, py, rad) {
          this.x = px;
          this.y = py;
          this.radius = rad + Math.random()*100;
          this.speed = Math.random()*.01+.02;
          this.theta = 0;
          this.r =  Math.random()*1;
          this.clr = "hsl(" + parseInt(Math.random()*360, 10) + ",50%, 50%)";
        }
        
        Orbit.prototype.move = function() {
          
          this.theta += this.speed;
          
          c.fillStyle = this.clr;
          c.beginPath();
          c.arc(this.x + this.radius * Math.cos(this.theta), 
                this.y + this.radius * Math.sin(this.theta), this.r, 0, Math.PI * 2,true);
          c.closePath();
          c.fill();
          this.radius += Math.random()*2-1;
          
        };
        
        var planets = {};
        var planetcounter = 0;
        for (var i = 1; i <= 3; i++) {
          for (var j = 1; j <= 3; j++) {
            planets[planetcounter] = new Orbit(i*200, j*200, 0);
            planets[planetcounter].id = planetcounter;
            planetcounter++;
            planets[planetcounter] = new Orbit(i*200, j*200, 0);
            planets[planetcounter].id = planetcounter;
            planetcounter++;
            planets[planetcounter] = new Orbit(i*200, j*200, 0);
            planets[planetcounter].id = planetcounter;
            planetcounter++;
          }
        }
        
        var mouseX = 0, mouseY = 0;
        document.onmousemove = function(e){
          mouseX= e.pageX;
          mouseY= e.pageY;
        };
        
        $(document).mousedown(function() {
          c.fillStyle = "rgba(255,255,255,1)";
          c.fillRect(0,0, canvas.width, canvas.height);
        });
        
        setInterval(function() {
          
          
          for(var i in planets) {
            var planet = planets[i];
            
            planet.move();
          }
          
          c.fillStyle = "red";
          
          
        },2);
        
      };
      
    </script>
    <style>
      #menu li a {
        text-decoration:none;
      }
      
      #menu li a:hover {
        text-decoration:underline;
      }
      
      #container {
        width:800px;
        margin:10px auto;
      }
      #paper {
        width:800px;
        border:0px solid black;
        box-shadow: 0px 0px 10px gray;
        margin:10px auto;
      }
      body {
        width:100%;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <?php page_menu(); ?>
    <canvas id="paper" height="900" width="800">
      Text if canvas isn't supported.
    </canvas> 
    </div>
  </body>
</html>
