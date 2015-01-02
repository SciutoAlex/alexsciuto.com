<?php include_once "../../page.php";



          $params = array();
          $params['title'] = "Infographic Books";
          $params['page_name'] = "topic page";

          $params["css"] = array();
          $params["js"] = array();

          page_header($params);
  ?>
<div class="littlesection">
  <div class="col5 align-center">
    <img src="img/time-keepr.png" style="width:75%;">
  </div>
  <div class="clear"></div>
</div>
<div class="section border-bottom">
<div class="col2">
  <img src="img/old-time.png" alt="">
  <p class="caption align-center">An example of typical corporate time tracking websites.</p>
</div>
<div class="col3 last">
  <div style="margin-top:40px;" class="brief">

    <h1>Time Keepr <!--<a href="v6"><div class="launch">Launch Website</div></a>--></h1>
      <p>In advertising/design agencies, keeping track of your time is a pain, and corporate software suites are even worse. How can I make time keeping easier and more helpful?</p>

    <div  class="text-section">
        <p>
          I got tired of using the software that the agency I worked for bought ages ago to track and bill time. Looking at what they were using, it was clear that no one had ever thought if the people using the software would enjoy the experience or even could make sense of it. This made entire sense since it was <em>required-to-use</em> software, but I took a crack at reimagining the front-end interface that would meet just my needs and not every corporation-in-the-world's needs.
        </p>

       <p>
          Thus was born Time Keepr, a small app that lets you track your time and visually see what tasks you dedicate most of your day too. The best thing about this project was that I was able to get the entire office to start using it. I only wish our accounting vendor had an API so we could have allowed automatic time sheet entering!
        </p>

      </div>
      </div>

    <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
    <div class="section margin-bottom">

      <div class="col2 text-section">
        <h5 class="red">Successful Implementation</h5>
        <h6>Getting Designers to Use the Application</h6>
        <p>At the firm I worked at, I created TimeKeepr for myself, but as other saw me using my webapp, they too wanted to use it. By the time I left, many of my coworkers were using TimeKeepr in creative ways.</p>
        <p>Some used the app to plan their weeks. Some used it to keep track of things they wanted to do. Others used it more like I expected, as a better way to track time and projects. Seeing my work in the wild, was a great learning experience. A designer only has so much power, and my users are as creative as me sometimes.</p>

      </div><!-- /col2 -->
      <div class="col3 last">
        <img src="img/keepr1.png" alt="">
      </div><!-- /col3 -->
      <div class="clear"></div>
    </div><!-- /section -->
    <div class="section margin-bottom">

      <div class="col2 text-section ">
        <h5 class="red">Give users maximum control</h5>
        <h6>Whenver possible, TimeKeepr lets the user make decisions on how they'd like to organize their time.</h6>
        <p>A big problem with corporate time tracking software is that the user has to conform their practices to the software's interface. The user must bow to the interface. With TimeKeepr, I tried to make the interface as flexible as possible. List names are user-defined, categories too are user defined. This flexibility lets the application be used in different ways.</p>

      </div><!-- /col2 -->
      <div class="col3 last">
        <img src="img/keepr2.png" alt="">
      </div><!-- /col3 -->
      <div class="clear"></div>
    </div><!-- /section -->
    <div class="section margin-bottom">

      <div class="col2 text-section">
        <h5 class="red">Different Channels to understanding data</h5>
        <h6>Time Keepr shows time-usage through spatial, color, and textual channels</h6>
        <p>What is a more effective method of conveying information? A list of times&mdash;2:45, 1:15, 6:30&madash;or seeing a series of proportionally shaped rectangles? For quick comprehension, the rectangles use the brain and eye's natural processing capabilities to give the user information.</p>
        <p>The best method for conveying information always depends on the context. Because of this TimeKeepr gives users visual cues such as color and rectangle size, and also gives textual cues when more specifity is required.</p>

      </div><!-- /col2 -->
      <div class="col3 last">
        <img src="img/keepr3.png" alt="">
      </div><!-- /col3 -->
      <div class="clear"></div>
    </div><!-- /section -->


    <div class="section margin-bottom">

      <div class="col2 text-section ">
        <h5 class="red">Fast Access</h5>
        <h6>Spend as little time as possible updating the app</h6>
        <p>Most time tracking and calendar applications have dozens of bells and whistles. But most people never take advantage of them. I created TimeKeepr to collect the bare minimum information: category, time, and description.</p>
        <p>Because I collected so little information, I could include an input form multiple times on the page. With multiple forms on the page, the layout clearly conveys the different uses for each form.</p>

      </div><!-- /col2 -->
      <div class="col3 last">
        <img src="img/keepr4.png" alt="">
      </div><!-- /col3 -->
      <div class="clear"></div>
    </div><!-- /section -->


      <?php page_about();?>
      <?php page_bottom();?>
