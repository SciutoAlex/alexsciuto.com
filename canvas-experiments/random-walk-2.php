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
        
        c.fillStyle = "white";
        c.fillRect(0,0,canvas.width,canvas.height);
        

        function Rect(){
          this.x = Math.random()*canvas.width;
          this.y = Math.random()*canvas.height;
          this.px;
          this.py;
          this.qx;
          this.qy;
          this.o = 100+parseInt(Math.random()*130);
          this.speed = Math.random()*20;
        }
        Rect.prototype.draw = function(){
          c.strokeStyle = "rgb("+this.o+","+this.o+","+this.o+")";
          c.fillStyle = "rgb("+this.o+","+this.o+","+this.o+")";
          c.beginPath();
          c.moveTo(this.x,this.y);
          c.lineTo(this.px,this.py);
          c.lineTo(this.qx,this.qy);
          c.fill();
          this.qx = this.px;
          this.qy = this.py;
          this.px = this.x;
          this.py = this.y;
          this.x = this.x + Math.random()*this.speed-this.speed*.5;
          this.y = this.y + Math.random()*this.speed-this.speed*.5;
          if(this.x > canvas.width) {
            this.x = 0;
            this.px = 0;
            this.qx = 0;
          }
          if(this.x < 0) {
            this.x = canvas.width;
            this.px = canvas.width;
            this.qx = canvas.width;
          }
          if(this.y > canvas.height) {
            this.y = 0;
            this.py = 0;
            this.qy = 0;
          }
          if(this.y < 0) {
            this.y = canvas.height;
            this.py = canvas.height;
             this.qy = canvas.height;
          }
           if (Math.random() <= .02) {
       c.strokeStyle = "rgba("+255+","+this.o+","+this.o+",1)";   c.rect(this.px-this.speed*.5,this.py-this.speed*.5,this.speed,this.speed);
          c.stroke();
        }
          
          
          
          
          
        };
        
        var rects = [];
        var rectNum = 700;
        for(var i = 0; i < rectNum; i++){
          rects[i] = new Rect();
        }
        
        
        setInterval(function(){
          c.fillStyle = "rgba(255,255,255,.05)";
          if (Math.random() <= .05) {
            c.fillStyle = "rgba(255,255,255,.2)";
          }
          c.fillRect(0,0,canvas.width,canvas.height);
          for(var i = 0; i < rects.length; i++){
            rects[i].draw();
          }
          
          
          
          
          
        }, 40);
        
        
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
    <?php page_menu();  ?>
   
      <canvas style="display:block;" id="paper" width="800" height="500">
      anything you put in here... 
    </canvas>
</div> 
    
  </body>
</html>