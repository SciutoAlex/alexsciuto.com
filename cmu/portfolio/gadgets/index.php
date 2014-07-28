<?php include_once "../../../page.php";


    include_once "../../../page.php";


        $params = array();
        $params['title'] = "Room Sensors";
        $params['page_name'] = "topic page";

        $params["css"] = array();
        $params["js"] = array();

        page_header($params);
  ?>
<div class="section border-bottom">
  <div class="col5 topImg">
    <img src="img/top.jpg" alt="">
  </div>
  <div style="  margin-top:10px;" class="brief col3">
    <p class="red slab">DESIGN BRIEF</p>
    <h1>Create sensors to understand human activity</h1>
    <p>New technologies are giving more people the ability to create low-powered gadgets that can sense their environment and communicate it to other devices. How can interaction designers use these technologies to create new systems and applications?</p>
    <div class="deliverables"><span>deliverables</span>&nbsp;&nbsp;&nbsp;&nbsp;Functioning prototype including four sensors, and a working UI.</div>
  </div>
  <div class="col2 last mobile-hide">
    <img src="img/tv.jpg" alt="">
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col5 text-section hover" style="position:relative;">
    <img src="img/set-up-off.jpg">
    <img src="img/set-up-on.jpg" class="off">
  </div>
  <div class="clear height"></div>
  <div class="col2 text-section">
    <h5 class="red">Creating Physical Sensors</h5>
    <h6>Using Arduino technology to power sensors that record human movement.</h6>
    <p>I created four sensors to measure human in a room and communicate it to a computer. Three of the sensors use an IR sensor to record human movement. A fourth sensor acts as a base station that listens for the other sensors and sends that information to the computer. </p>
  </div>
  <script type="text/javascript">
  $(function(){
    var offset = $(".hover").offset().top;
    var activated = false;
    $('.hover').children('.off').animate({'opacity':0})
    $(window).scroll(function() {
      if(!activated) {
        if ($(window).scrollTop() > offset - 200) {
          $('.hover').children('.off').animate({'opacity':1})
          activated = true;
        }
      }
    });
    $('.hover').hover(function() {
      $('body').append();
      $(this).children('.off').animate({'opacity':0}, 400);
    }, function() {
      $(this).children('.off').animate({'opacity':1}, 400);
    });
  });
  </script>

  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="steps" >
    <div class="step">
      <video autoplay loop poster="posterimage.jpg">
        <source src="mov/instant_1.webmsd.webm" type="video/webm">
        <source src="mov/instant_1.mp4.mp4" type="video/quicktime">
      </video>
      <p>Instantaneous activity</p>
    </div>
    <div class="step">
      <video autoplay loop poster="posterimage.jpg">
        <source src="mov/medium_1.webmsd.webm" type="video/webm">
        <source src="mov/medium_1.mp4.mp4" type="video/quicktime">
      </video>
      <p>Activity in the previous fifteen minutes</p>
    </div>
    <div class="step last">
      <video autoplay loop poster="posterimage.jpg">
        <source src="mov/allday_1.webmsd.webm" type="video/webm">
        <source src="mov/allday_1.mp4.mp4" type="video/quicktime">
      </video>
      <p>Entire day's cumulative activity</p>

    </div>
  </div>
  <div class="clear height"></div>
  <div class="col2 text-section">
    <h5 class="red">Senors inputs for an ambient UI</h5>
    <h6>Using Arduino technology to power sensors that record human movement.</h6>
    <p>Simple sensors like the ones in this project record so much information at once that understanding it becomes a huge challenge. If we try to show all the information at once, it becomes meaningless data.</p>
    <p>To avoid this information overload, I created an ambient system that used simple bubbles to show activity for each sensor. The goal wasn't to have people understand exactly what was going on, but instead to understand whether or not activity was taking place in general.</p>
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2-1">
    <img src="img/far.jpg">
    <p>UI when no viewers are near the screen.</p>
  </div>
  <div class="col2-1">
    <img src="img/close.jpg">
    <p>The UI morphs as the range finder detects that viewers are approaching.</p>
  </div>
  <div class="clear height"></div>
  <div class="col2 text-section">
    <h5 class="red">A UI that senses where its viewers are</h5>
    <h6>Using Arduino technology to power sensors that record human movement.</h6>
    <p>Instead of just having a single UI that told viewers about room activity in general, I created a second UI that showed a detailed graph of the day's activity. This more specific UI is activated when a viewer comes near to the display.</p>
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
    <div class="col2 text-section">
    <h5 class="red">Installation</h5>
    <h6>Testing out the system for a day in the design studio.</h6>
    <p>In order to test out the system, I installed the sensors in the CMU graduate studio for a few days. Students were intrigued that the display&mdash;normally just showing a slideshow of images&mdash;was showing real time information about the studio they were in. It gave visitors an interesting introduction to the studio. </p>
    <p>If I were to continue with this project, I'd work on making the system more robust, have better battery life, and a more appealing industrial design.</p>
  </div>
  <div class="col3 last"><img src="img/installation.jpg"  alt=""></div>


  <script>

  </script>
  <div class="clear"></div>

<?php page_about();?>
<?php page_bottom();?>
