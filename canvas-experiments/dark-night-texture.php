<?php include_once "../page.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
       $(function(){
        
        var canvas = $("#paper")[0],
            c = canvas.getContext("2d");
        
        c.fillStyle = "black";
        c.fillRect(0,0,canvas.width,canvas.height);
        
        function Line(){
          this.x = Math.random()*canvas.width;
          this.y = Math.random()*canvas.height;
          this.px;
          this.py;
          this.qx;
          this.qy;
          this.o = 100+parseInt(Math.random()*130);
        }
        Line.prototype.draw = function(){
          c.strokeStyle = "rgba(0,0,0, "+Math.random()*.4+")";
          c.lineWidth = Math.random() * 10;
          c.beginPath();
          c.moveTo(this.x,this.y);
          c.lineTo(this.px,this.py);
          c.stroke();
          this.px = this.x;
          this.py = this.y;
          this.x = this.x + Math.random()*50+ 20;
          this.y = this.y + Math.random()*50+ 20;
          if(this.x > canvas.width) {
            this.x = 0;
            this.px = 0;
          }
          if(this.x < 0) {
            this.x = canvas.width;
            this.px = canvas.width;
          }
          if(this.y > canvas.height) {
            this.y = 0;
            this.py = 0;
          }
          if(this.y < 0) {
            this.y = canvas.height;
            this.py = canvas.height;
          }
        }
        
        function Rect(){
          this.speed = Math.random() * 60 + 10;
          this.w = Math.random() * 60 + 10;
          this.h = Math.random() * 60 + 10;
          this.color = "hsla("+parseInt(Math.random() * 2000)+", 20%,50%,"+Math.random()*.25+")";
          this.setPosition();
          this.startTimer = 0;
          this.startTime = Math.random() * 100;
          this.rotInc = Math.random()* .1 - 0.05;
          this.rot = 0;
        }
        Rect.prototype.setPosition = function(){
          this.x = Math.cos(Math.random() * 6) * 400 + 250;
          this.y = Math.sin(Math.random() * 6) * 400 + 250;
        };
        Rect.prototype.draw = function(){
          if (this.startTimer > this.startTime){
            c.save();
            c.translate(this.x, this.y);
            c.rotate(this.rot);
            this.rot += this.rotInc;
          c.fillStyle = this.color;
          c.fillRect(this.w , this.h, 
                     this.w * -.5,
                     this.h * -.5);
          this.thetaX += 0.1;
          this.thetaY += 0.1;
          this.x += (250 - this.x) / 36;
          this.y += (250 - this.y) / 36;
            if (Math.abs(this.x - 250) < 100 &&
               Math.abs(this.y - 250) < 100){
              this.startTimer = 0;
              this.setPosition();
               
            }
            c.restore();
        }
          
          this.startTimer ++;
        };
        
        var rects = [];
        var rectNum = 1000;
        for(var i = 0; i < rectNum; i++){
          rects[i] = new Rect();
        }
        
        var lines = [];
        var lineNum = 2000;
        for(var i = 0; i < lineNum; i++){
          lines[i] = new Line();
        }
        
        
        setInterval(function(){
          c.fillStyle = "rgba(0,0,0,0.1)";
          c.fillRect(0,0,canvas.width,canvas.height);
          for(var i = 0; i < rects.length; i++){
            rects[i].draw();
          }
          },20);
        
          setInterval(function(){
            
          for (var i = 0; i <lines.length; i++) {
            lines[i].draw(); 
          }
          
        }, 20);
        
        
      });
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
         //width:800px;
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
    <canvas id="paper" width="300" height="300">
      anything you put in here... 
    </canvas>
    </div>
  </body>
</html>