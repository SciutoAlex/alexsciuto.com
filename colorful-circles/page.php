<?php function page_header() { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>AlexSciuto.com</title>
    <link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    
    <script type="text/javascript">
      
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-10951674-4']);
      _gaq.push(['_trackPageview']);
      
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      
    </script>
  </head>
  <body>
    <div id="container">
      <div id="top-info">
        <div class="fleft">
          <p>Alex Sciuto
            <span class="small">&nbsp; Data Visualization and Web Design</span></p>
        </div>
        
        <div class="fright">
          <p class="small"><button id="buttonAbout">About/Contact</button></p>
        </div>
        <?php
}
  
  function page_bottom() { ?>
        <script type="text/javascript">
          (function($){
            $(document).ready(function() {
              $('.box').hover(function() {
                $('body').append();
                $(this).children('.off').animate({'opacity':0}, 100);
              }, function() {
                $(this).children('.off').animate({'opacity':1}, 300);
              });
              
              $('#shadow').css({
                width:$(window).width(),
                height:$(window).height()
              });
              
              $('#buttonAbout').click(function() {
                $('#shadow').fadeIn();
                $('#about').css({
                  top:($('#shadow').height()-$('#about').height())/2,
                  left:($('#shadow').width()-$('#about').width())/2
                })
                  .fadeIn(); 
              });
              
              $('.closewindow')
                .html('<strong>&times;<\/strong>')
                .css({
                  float:"right",
                  "text-decoration":"none",
                  "margin":0,
                  "padding":10,
                  "background-color":"white",
                  "border":"1px solid white",
                  "cursor":"pointer",
                  "font-size":18
                })
                .click(function() {
                  $(this).parent().parent().fadeOut();
                });
            });
            
            $(window).resize(function() {
              $('#shadow').css({
                width:$(window).width(),
                height:$(window).height()
              });       
              $('#about').css({
                top:($('#shadow').height()-$('#about').height())/2,
                left:($('#shadow').width()-$('#about').width())/2
              });              
            });
            
          })(jQuery);
        </script>
      </div>
      <script type="text/javascript">
        
      </body>
      </html>
        <?php 
}
  
  function page_about() { ?>
        <div id="shadow">
          <div id="about">
            <button class="closewindow"></button>
            <h1>Hi, I'm Alex Sciuto.</h1>
            
            <div class="col-l">
              
              <p> I design and code websites. I love thinking about user-centered design, and I really like playing with sets of data.</p>
              <p>A few facts about me:
                <ul>
                  <li>I lived for a year in Shanghai China. My favorite dish there was cows stomach, pickled radish, and a tea egg.</li>
                  <li>I'm from St. Louis. I went to college in Minnesota. I live in New York City.</li>
                  <li>I design for the great people at Finn Partners</li>
                  <li>I have a younger sister. Her name is Ellen, and she's pretty great.</li>
                </ul>
              </p>
              <p>Some people have written nice things about my work: <a href="http://ftalphaville.ft.com/blog/2012/07/18/1088201/happy-2nd-birthday-dodd-frank/">Financial Times</a> and <a href="http://www.forbes.com/sites/prishe/2012/05/09/the-correlation-between-impulse-nfl-ticket-purchases-and-2012-nfl-draft-selections/">Forbes</a>. 
              </p>
            </div>
            <div class="col-r">
              <h3>Contact Me</h3>
              <ul>
                <li><a href="mailto:SciutoAlex@gmail.com">Email</a></li>
                <li><a href="http://www.twitter.com/SciutoAlex">Twitter</a></li>
                <li class="last"><a href="http://www.linkedin.com/pub/alex-sciuto/33/57/a56">LinkedIn</a></li>
              </ul>
            </p>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <?}?>