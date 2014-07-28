<?php

  include_once "../../../page.php";


      $params = array();
      $params['title'] = "GrassRoots";
      $params['page_name'] = "topic page";

      $params["css"] = array();
      $params["js"] = array();

      page_header($params);
  ?>
<div class="section border-bottom">
  <div class="col3">
    <div class="offLeftContainer">
      <div class="offLeftImg">
        <img src="img/device-top.jpg" alt="">
      </div>
    </div>
  </div>
  <div style="  margin-top:0px;" class="col2 last">
    <div class="brief">
      <p class="red slab">DESIGN BRIEF</p>
      <h1>How will the world of a billion sensors look?</h1>
        <div class="deliverables"><span>project details</span>&nbsp;&nbsp;&nbsp;&nbsp;Team of three project for Graduate Studio II at CMU
        <br/>
        <span>deliverables</span>&nbsp;&nbsp;&nbsp;&nbsp;Concept Presentation&nbsp;&nbsp;&nbsp;&nbsp;Video Sketch of Concept</div>
    </div>

    <div class="text-section">
      <h5 class="red">Our Solution</h5>
      <h6>Introducing GrassRoots</h6>
      <p>GrassRoots is a neighborhood sensor system that gives the power back to neighbors to measure the parts of their neighborhood that they care about. It gives them the information to get closer to the places and people they live around</p>

      <iframe src="//player.vimeo.com/video/101175552?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="700" height="227" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="clear"></div>
</div>


<div class="section border-bottom">
  <div class="col1">&nbsp;</div>
  <div class="col3 last">
    <img src="img/levels-of-sensors.jpg">
  </div>
  <div class="clear"></div>
  <div class="col5 last">
    <h2 class="align-center">Introducing Sensors for get you back to your Neighborhood</h3>
      <div class="clear"></div>
    </div>
    <div class="col1">&nbsp;</div>
    <div class="col3 last">
    <p class="align-center">Sensors in 2014 are all about individuals&nbsp;what you weight, where you go, and how much you exercise. GrassRoots makes sensors a shared experience. You can use your neighbors sensors and everyone can get to know each other better.</p>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2-1">
    <img src="img/3d-sensors.png">
    <h5 class="red">Install Sensors</h5>
    <h6>You choose where you use sensors</h6>
    <p>Use GrassRoots twelve types of sensors to measure neighborhood events such as plants, animals, cars, and pedestrians</p>
  </div>
  <div class="col2-1">
    <img src="img/recipe-maker.png">
    <h5 class="red">Make Sense of Your Neighborhood</h5>
    <h6>Turn data into information you want to use</h6>
    <p>Create sensor recipes&mdash;small sets of instructions for processing the data you collectU&mdash;and share them with your neighbors.</p>
  </div>
  <div class="clear"></div>
</div>



<div class="section border-bottom">
  <h5 class="red">Design Process</h5>
  <div class="steps" >
    <div class="step">
      <div><img class='zoom' src="img/territory-map.jpg" alt=""></div>
      <strong>1. Define the Design Space</strong>
      <p>As long as it involed numerous sensors, we were given free reign to explore. In order to make sense of the terrain, my three teammates and I defined our individual interests, found common connections, then began to sketch out how neighborhoods could intersect with our interests.</p>
    </div>
    <div class="step">
      <img src="img/workshop.jpg">
      <strong>2. Talk to Neighbors</strong>
      <p>In order to learn more about neighborhoods, we held interviews, led directed story-telling exercises, sent out surveys, and held a ten-person co-design workshop.</p>
    </div>
    <div class="step last">
      <img src="img/ideate.jpg">
      <strong>3. Ideate and Design</strong>
      <p>With all our information, we ideated numerous solutions, then combined and recombined ideas until we found something that felt right.</p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Sensor Kit</h5>
    <h6></h6>
    <p>We knew that motion would play a key role in clarifying the relationship between map, event information, and event details. In order to begin to play and experiment, we used a number of different systems to prototype motion. This included HTML/CSS/Javascript, Keynote Animation, and FramerJS a novel JS library from some designers at Facebook.</p>
    <p>
  </div>
  <div class="col3 last">
    <img src="img/sensor-kit.jpg">
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Sensor Kit</h5>
    <h6></h6>
    <p>We knew that motion would play a key role in clarifying the relationship between map, event information, and event details. In order to begin to play and experiment, we used a number of different systems to prototype motion. This included HTML/CSS/Javascript, Keynote Animation, and FramerJS a novel JS library from some designers at Facebook.</p>
    <p>
  </div>
  <div class="col3 last">
    <img src="img/ui.jpg">
  </div>
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Presentation at Microsoft</h5>
    <h6></h6>
    <p>We knew that motion would play a key role in clarifying the relationship between map, event information, and event details. In order to begin to play and experiment, we used a number of different systems to prototype motion. This included HTML/CSS/Javascript, Keynote Animation, and FramerJS a novel JS library from some designers at Facebook.</p>
    <p>
  </div>
  <div class="col3 last">
    <iframe src="//player.vimeo.com/video/101175551?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="700" height="267" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="clear"></div>
</div>


      <?php page_about();?>
      <?php page_bottom();?>
