<?php
  
  include_once "../../../page.php";
  page_header();
  ?>
<div class="section border-bottom">
  <div class="col2">
    <img src="img/chomp-screen.jpg" alt="">
  </div>
  <div style="  margin-top:50px;" class="col3 last">
    <div class="brief">
      <p class="red slab">DESIGN BRIEF</p>
      <h1>Reinventing Mobile Work</h1>
      <p>Choose a group of mobile workers, and design a mobile application for the iPhone that will dramatically change how they do their job. Be bold, and pick a problem worth solving.</p>
      <div class="deliverables"><span>project details</span>&nbsp;&nbsp;&nbsp;&nbsp;Team of three project for Basic Interaction Design at Carnegie Mellon University
        <br/>
        <span>deliverables</span>&nbsp;&nbsp;&nbsp;&nbsp;Pitch Presentation&nbsp;&nbsp;&nbsp;&nbsp;Designed Screens&nbsp;&nbsp;&nbsp;&nbsp;Personas &amp; Scenarios&nbsp;&nbsp;&nbsp;&nbsp;Design Spec Documents</div>
    </div>
    
    <div class="text-section">
      <h5 class="red">Our Solution</h5>
      <h6>Unleash the enthusiasm of locals to cook and serve food (and earn money) to create dining out experiences not centered around restaurants.</h6>
      <p>We started by looking at the catering industry and workers who travel to provide others with food. We began by looking at how teams of caters cooperate and how they schedule their time. But as we took our field work into the design studio and began creating new possible apps and futures, we decided to create an app that would allow ordinary food enthusiasts to sell their own catering services to others.</p>
      <p>Our app, <strong>Chomp</strong>, creates a new marketplace for dining experiences that are neither entirely private nor entirely public. Negotiating this new kind of space was a key challenge and made the project really exciting.</p>
    </div>
  </div>
  <div class="clear"></div>
</div>  

<div class="section border-bottom">
  <h5 class="red">Design Process</h5>
  <div class="steps" >
    <div class="step">
      <strong>1. Basic Research</strong>
      <p>We began by learning about the catering profession. The typical size of catering operations and the type of people who work as caters.</p>
    </div>
    <div class="step">
      <strong>2. Interviews</strong>
      <p>We talked to caters and shadowed them in their places of work. We learned about their problems, but more importantly we observed how they worked.</p>
    </div>
    <div class="step">
      <strong>3. Personas</strong>
      <p>We condensed our research into two optimal users of our service, a caterer and a person using the service.</p>
    </div>
    <div class="clear"></div>
  </div>
  
  
  <div class="steps">
    <div class="step">
      <strong>4. Ideation</strong>
      <p>With our optimal user and our research we began a process of creating as many potential ideas as possible. Catering for the Homeless?</p>
    </div>
    <div class="step">
      <strong>5. Scenarios</strong>
      <p>As we narrowed on our final concept, we began to devise how to communicate with others about our idea. We chose to create a set of scenarios we could walk other interested people through.</p>
    </div>
    <div class="step">
      <strong>5. Delivery</strong>
      <p>We created and delivered a pitch presentation of our concept. The pitch included the relevant parts of our research, our personas, our scenarios, design guidelines and example screens.</p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Research and <br/>Ideation</h5>
    <h6>Talking to food service professionals and thinking about possible new solutions.</h6>
    <p>We began by talking to food service workers. Family-owned restaurant cooks, large hotel catering managers, cafe owners. These interviews and site visits gave us a great sense of the current state-of-the-art&mdash;which is that the food service industry doesn't use that much technology.</p>
    <p>
      Our scope wasn't defined by our interviews, and the fact that technology has not penetrated much into the industry made us realize that perhaps thinking about more radical ideas would be a good start.
    </p>
  </div>
  <div class="col3 last">
    <h6 class="align-center">Different possible concepts based on field research</h6>
    <ul class="half align-right">
      <li>Dumpster Dive Finder</li>
      <li class="selected">Food Bulletin Board</li>
      <li>Food for Social Company</li>
      <li class="selected">Non-profit Food for Work</li>
      <li class="selected">Shared Professional Kitchens</li>
      <li class="selected">Loyalty Program for Lemonade Stand</li>
    </ul>
    <ul class="half last">
      <li class="selected">Digital Food Truck</li>
      <li>Rent-A-Meal</li>
      <li>Catering for Homeless</li>
      <li>Real-time Restaurant Tracker</li>
      <li class="selected">Amateur to Professional Chef</li>
      <li>Time Tracking for Caterers</li>
      <li>Inventory Tracking for Caterers</li>
      
    </ul>
    <div class="clear"></div>
  </div> 
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Interface Design</h5>
    <h6>Tailoring a mobile experience to create opportunities for users to explore new food in their neighborhood</h6>
    <p>We knew we wanted the neighborhood map to be the central interface focal point of Chomp. But we found the challenge to be allowing Chomp users to easily move between the map, the event overview, and the deeper event details. We solved this problem by using a series of sliding cards that show different levels of details as the user shows more interest in a particular food event.</p>
    <p>
      We were working in a novel space of trying to encourage users to start frequenting food events that were neither entirely private nor entirely public. Because of this, we ran into many issues around trust and privacy and how to encourage that through using an app. We found that the kinds of information the app displays about its users hugely affects how the users see and interact with each other.
    </p>
  </div>
  <div class="col1">
    <img src="img/chomp-sketch1.jpg" alt="">
    <p class="caption">Detailed sketch of event page.</p>
  </div>
  <div class="col1">
    <img src="img/chomp-sketch2.jpg" alt="">
    <p class="caption">Starting to think about using the card-pattern to show large amounts of event data.</p>
  </div>
  <div class="col1 last">
    <img src="img/chomp-sketch3.jpg" alt="">
    <p class="caption">Figuring out exactly what filters are necessary for the map, and what is the best way to show the filters.</p>
  </div>
  
  
  
  
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="littlesection">
    <div class="col2 text-section">
      <h5 class="red">Visual Design</h5>
      <h6>Create an appropriate visual design for all devices.</h6>
      <p>With so many different mobiles devices on the market all with different dimensions and screen resolutions, we needed to make sure our visual design looked good on all devices. We made sure our design conformed to an overall 4 by 4 pixel grid that gracefully degrades to 2 by 2 or even 1 by 1 on lower resolution screens.
      </p>
    </div>
    <div class="col3 last">
      <img src="img/chomp-visual1.jpg" alt="">
    </div>
    
    <div class="clear"></div>
  </div>
  
  
  <div class="clear"></div>
</div>

<div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">Motion Design</h5>
    <h6>Designing for iOS</h6>
    <p>We knew that motion would play a key role in clarifying the relationship between map, event information, and event details. In order to begin to play and experiment, we used a number of different systems to prototype motion. This included HTML/CSS/Javascript, Keynote Animation, and FramerJS a novel JS library from some designers at Facebook.</p>
    <p>
    </div>
      <div class="col1">
        <iframe width="100%" height="350" src="//www.youtube.com/embed/uzdWdEAyOgg" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col1">
        <img src="img/motion2.jpg" alt="">
      </div>
      <div class="col1 last">
        <img src="img/motion3.gif" alt="">
        <p class="caption">A failed experiment in motion. We experimented with different ways of moving map markers to make them more meaningful as the app transitioned from lists and details pages to the primary map screen.</p>
      </div>
      <div class="clear"></div>
      
    </div>
      
      <div class="section border-bottom">
  <div class="col2 text-section">
    <h5 class="red">System Dashboard and Feedback</h5>
    <h6>Displaying the key variables to ensure the Chomp ecosystem stays health.</h6>
    <p>Creating a flexible marketplace for online eating would only be successful if the ecosystem of users and providers was well balanced and that each group had plenty of access to the other.</p>
    <p>In order to help the managers of Chomp keep track of this critical information, we created a dashboard for displaying these pieces of data. Because we were focused on the health of the entire ecosystem, the dashboard shows how many events eaters have access to and how many eaters event creators have access to. In order to support local versions of the app, we also have a map so we can see where the different users are located.</p>
    
    </div>
      <div class="col3 last">
        <img src="img/chomp-dashboard.jpg" alt="">
      </div>
      
      <div class="clear"></div>
      
      <?php page_about();?>
      <?php page_bottom();?>