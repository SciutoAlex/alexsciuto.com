<?php 
  
  if ($_SERVER['SERVER_NAME'] === "localhost") {
    define("ROOT_URL", "/github-alex");
  } else {
    define("ROOT_URL", ""); 
  }
  
  
  
  function page_header($opts) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>AlexSciuto.com</title>
    <meta name="viewport" content="width=device-width, user-scalable=false;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?=ROOT_URL;?>/styles/main.css" />
    <script type="text/javascript" src="//use.typekit.net/vwe0ulk.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="<?=ROOT_URL;?>/js/mustache.js"></script>
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
      
      <?php nav($opts); ?>
      
      
      
      <?php
}
  
  
  function nav($opts) {
   ?>
      <div id="top-info-mobile">
      <h1 class="logo">
                <a href="/">
                  <img src="<?=ROOT_URL;?>/img/alex-logo.jpg"><br/>
                  <span>&nbsp; Interaction Design and Prototyping</span></a></h1>
      </div>
        <div id="top-info-container">
        <div id="top-info">
          <div style="background-color:#fff; width:1030px;">
            <div class="fleft">
              
              <h1 class="logo">
                <a href="/">
                  <span>&nbsp; Interaction Design and Prototyping</span><img src="<?=ROOT_URL;?>/img/alex-logo.jpg" width="90"></a></h1>
            </div>
            
            <div class="fright">
              <ul class="nav">
               
                <li>
                  <a href="http://www.dribbble.com/sciutoalex/"><img src="<?=ROOT_URL;?>/img/dribbble.jpg" alt="" width="23"/></a>
                </li> 
                 <li>
                   <a href="http://www.twitter.com/sciutoalex/"><img src="<?=ROOT_URL;?>/img/twitter.jpg" alt="" width="29" /></a>
                </li> 
                <li>
                  <p class="small"><a href="<?=ROOT_URL;?>/blog">Blog</a></p>
                </li>
                <?php if( $opts['page_name'] != "index" ) { ?>
                <li>
                  <p class="small"><a href="<?=ROOT_URL;?>/">Projects</a></p>
                </li>
                <? } ?>
                <li class="last">
                  <p class="small"><a href="<?=ROOT_URL;?>/about.php">About/Resume</a></p>
                </li>
              </ul>
            </div>
           <div class="clear"></div>  
            
          </div>
          <div class="gradient" style="display:none; height:4px; width:1030px;"></div>   
         <div class="clear"></div>  
        </div>
         
      </div>
      
      
     
     <?php
    
  }
      
  function page_bottom() { 
    
    
    ?>
  
      
      
    </div>
    
    
    <script type="text/javascript">
       
        $(document).ready(function() {
          var logoTransition = false;
          var clone;
          var $topInfo = $('#top-info').attr('class', 'clone');
          var $nav = $topInfo.find('.nav');
          var $logo = $topInfo.find('.logo');
          var $logoimg = $logo.find('img');
          var $logospan = $logo.find('span');
          var speed = 200;
          
          $(window).scroll(function() {
            if(($(window).scrollTop() > 110) && logoTransition == false) {
              $('.gradient').fadeIn();
              logoTransition = true;
              
              
              $topInfo.css('margin', 0);
              $logo.css('margin-top', 5);
              $topInfo.css('position', 'fixed');
              $topInfo.css('z-index', '9999');
              $topInfo.css('top', 0);
              $topInfo.css('margin', 0);
              $topInfo.css('width', 1030);
              $logospan.fadeOut(speed, function() {
                
                 $nav.animate({
                'padding': '20px 00px 40px 00px'
              }, speed);
                $logospan.html('<strong>Alex Sciuto<\/strong>&nbsp;&nbsp;&nbsp;Interaction Design and Prototyping').fadeIn();
                $logoimg.animate({
                  width : 30,
                  height : 30
                }, speed, function() {
                  $logoimg.attr('src', '<?=ROOT_URL;?>/img/alex-logo-off.jpg');
                  
                });
              });

              $logospan.animate({
                'padding': '4px'
              }, speed);
              
              
            } else if(($(window).scrollTop() < 110) && logoTransition == true) {
              
              logoTransition = false;
              $('.gradient').fadeOut();
              $topInfo.css('position', 'static');
              $topInfo.css('z-index', '9999');
              $topInfo.css('top', 0);
              $topInfo.css('margin', 0);
              $topInfo.css('width', 1030);
              
              $logospan.fadeOut(speed, function() {
                
                 $nav.animate({
                'padding': '45px 00px 40px 00px'
              }, speed);
                
                $logospan.html('&nbsp;&nbsp;Interaction Design and Prototyping').fadeIn();
                $logoimg.animate({
                  width : 93,
                  height : 93
                }, speed, function() {
                  $logoimg.attr('src', '<?=ROOT_URL;?>/img/alex-logo.jpg');
                  
                });
              });
              $logospan.animate({
                'padding': '37px 0px'
              }, speed);
            } 
          });
           });
        
        
        
    </script>
      
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
              <li class="e"></li>
              <li><a href="http://dribbble.com/SciutoAlex">Dribbble</a></li>
              <li><a href="http://www.twitter.com/SciutoAlex">Twitter</a></li>
              <li class="last"><a href="http://www.linkedin.com/pub/alex-sciuto/33/57/a56">LinkedIn</a></li>
            </ul>
          </p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <?php 
}
  
  function page_menu() { 
    
    $files = glob("*.php");
    
    echo "<pre>";
    
    
    echo "<ul id='menu'>";
    foreach($files as $file) {
      $display_name = str_replace("-"," ",$file);
      $display_name = str_replace(".php","",$display_name);
      echo "<li><a href='".$file."'>".$display_name."</a></li>";
    }
    echo "</ul></pre>";
    
  }
  
  function instagram_stream() {
    $id = "fd130264fc134ca8985338045d59f845";
    $CLIENT_SECRET = "18d5378bad4b4ff8a66cfbd6c33c0a44"; 
    $auth_token = "243814811.ab103e5.4042aa59a025416eaefb165561e44471";  
    $user = "243814811";
    $count = 7;
    
    $url = "https://api.instagram.com/v1/users/$user/media/recent/?access_token=$auth_token&count=$count";
    
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    //echo $data;
    $data = json_decode($data);
    
    
    
    foreach ($data->data as $post) {
      echo "<a target=_blank class='instagramphoto' href=".$post->link."><img width='144' heigh='144' src=".$post->images->thumbnail->url."></a>";
    }
    
  }
  
  ?>