<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <LINK REL=StyleSheet HREF="styles/style.css" TYPE="text/css" MEDIA=screen>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,700' rel='stylesheet' type='text/css'>
    <script>
      $(function(){
        var win = $(window),
            content = $("#wrapper");
        win.resize(function(){
          
          content.css({
            top : win.height() / 2 - content.outerHeight() / 2,
            left : win.width() / 2 - content.outerWidth() / 2
          });
          if(content.offset().top < 0) {content.css("top",0);}
          if(content.offset().left < 0) {content.css("left",0);}
          
        }).trigger("resize");
        
        $('#about').click(function() {
          $('#abouttext').fadeIn();
        });
        
        $('.close').click(function() {
          $(this).parent().hide();
        });
        
         $(".thumb").css('cursor','pointer').click(function(){
           $this = $(this);
           var path = $(this).attr("src").replace("-thumb","").replace("img/thumb","");
           path = "img/big" + path;
         
         $("#detail").attr("src",path);
           
           $('#pointer').animate({
             left: $('#selector img').index($this)*90+37
           });
           $('.close').trigger('click');
       });
        
        
        
      });
    </script>
    
    <style>
      body {
        background: url('img/bg-grain.jpg');
        color:white;
        font-family: 'Josefin Sans', sans-serif;
      }
      
      #wrapper {
        width:900px;
        height:700px;
        position:absolute;
        font-size:12px;
      }
      
      /*Classes*/
      
      h1 {
        font-size:4em;
      }
      
      strong {
        font-weight:700;
      }
       .clear {
        clear:both;
      }
      
      a, a:visited, a:hover, a:focus {
        color:white;
        text-decoration:none;
      }
      
     
      
      /*Home section*/
      #selector {
        background:white;
      }
      
      #mainphoto {
        width:900px;
        height:600px;
        background:white;
        position:relative;
      }
      
      #shadow{
        box-shadow: 0px 0px 30px 3px #222;
      }
      
      #buttons {
        margin:28px 0px 0px 0px;
        float:right;
      }
      
      #buttons a {
        margin-left:10px;
      }
      #title {
        float:left;
      }
      
      #selector {
        position:relative;
      }
      
      #pointer {
        position:absolute;
        width:16px;
        height:9px;
        background:url('img/pointer.png');
        bottom:0px;
        left:38px;
      }
        
      
      /*About section*/
      #abouttext {
        display:none;
        position:absolute;
        top:0px;
        left:0px;
        width:800px;
        height:500px;
        background: url('img/transparent.png');
        padding:50px;
      }
      
      #abouttext h2 {
        font-weight:500;
        font-size:3em;
      }
      
      #abouttext p {
        font-size:1.2em;
        width:400px;
        line-height:1.5em;
      }
      
      .close {
        font-weight:700;
        font-size:4em;
        position:absolute;
        top:0px;
        right:14px;
      }
      
    </style>
  </head>
  <body>
    <div id="wrapper">
      <div id="title">
      <h1><strong>IE</strong>PHOTOGRAPHY</h1>
      </div>
      <div id="buttons">
        <a id="about" href="#">ABOUT</a>
        <a id="cat" href="#"><strong>PHOTOS</strong></a>
      </div>
      <div class="clear"></div>
        <div id="shadow">
          <div id="mainphoto">
            <div id="abouttext">
              <a href="#" class="close">×</a>
              <h2>About Lorem Ipsum</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            
        <img id="detail" src="img/big/1.jpg"></div>
        <div id="selector">
          <div id="pointer"></div>
          <?php
            $files = glob("img/thumb/*");
            
            foreach($files as $file){
              echo "<img class='thumb' src='$file' />";
            }        
            ?>
        </div>
      </div>
    </div>
  </body>
</html>