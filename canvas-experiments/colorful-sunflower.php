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
        
        c.fillStyle = "HSL(40,0%,20%)";
        c.fillRect(0,0,canvas.width,canvas.height);
        
        var w = 800,
            h = 500,
            p = 5,
            n = 2000,
            scale = .2,
            GOLDEN_ANGLE = Math.PI * (3 - Math.sqrt(5)),
            count = 0,
            angleinc = 0;
        
        c.translate(w/2,h/2);
        
        
        
        c.fillStyle = "white";
        
        setInterval(function(){
          c.fillStyle = "HSL(40,0%,20%)";
          c.fillRect(-w/2,-h/2,canvas.width,canvas.height);
          angleinc+=.000001;
         
          for (var i = 0; i < 3000; i++){
            c.fillStyle = "HSL("+parseInt(20*i)+",20%,90%)";
            c.beginPath();
            c.arc(i*scale*Math.cos((GOLDEN_ANGLE+angleinc)*i), i*scale*Math.sin((GOLDEN_ANGLE+angleinc)*i), Math.sqrt(i)*scale*1.2, 0, Math.PI*2, true); 
           
               c.fill();     
          }
           
          
          
        }, 50);
        
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
       
    <canvas width=900 height=500 id="paper"></canvas>
  </div>
  </body>
</html>