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

<div class="col2">
  <img src="img/old-time.png" alt="">
  <p class="caption align-center">An example of typical corporate time tracking websites.</p>
</div>
<div class="col3 last">
  <div style="margin-top:40px;" class="brief">

    <h1>Time Keepr <a href="v6"><div class="launch">Launch Website</div></a></h1>
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
      </div>

      <div class="clear"></div>
      </div>



      <?php page_about();?>
      <?php page_bottom();?>
