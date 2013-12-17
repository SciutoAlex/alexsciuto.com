<?php 
  
  include_once "page.php";
  
  $opts = array();
  
  $opts['page_name'] = "index";
  
  
  page_header($opts);
  ?>



<div class="bottomboxes"></div>

<script>
  
  $(function() {
    var template = Mustache.compile($('#boxTemplate').html());
    
    var currprojects = [
      "pghneighborhood",
      "timeKeepr",
      "stateSize",
      "scienceBooks",
      "webThings"
    ];
    
    var allProjects = [
      "gardenpot",
      "pghneighborhood",
      "chomp",
      
      "webThings",
      "voyager",
      "microwave",
      
      "scienceBooks",
      "timeKeepr",
      
      "hexPlay",
      "historicalSentate"
      
    ];
    
    $.getJSON("<?=ROOT_URL;?>/js/project-data.json", function(root) {
      var i = 1;
      for(var i = 0; i < allProjects.length; i++) {
        
        var currentProject = root[allProjects[i]];
        
        var box = $(template(currentProject)).appendTo('.bottomboxes');
        
        if(i%5 == 4) {
          //box.find('.box').addClass('last');
          //$('<div class="clear">').appendTo('.bottomboxes');
        }
        
        
        
      }
      
      $('.box').hover(function() {
        $('body').append();
        $(this).children('.off').animate({'opacity':0}, 100);
      }, function() {
        $(this).children('.off').animate({'opacity':1}, 300);
      });
      
    });
    
  });
</script>

<script id="boxTemplate" type="text/html">
  
  <a href="<?=ROOT_URL;?>/{{url}}">
    <div class="box fleft">
      <img src="<?=ROOT_URL;?>/{{onImage}}">
      <img class="off" src="<?=ROOT_URL;?>/{{offImage}}">
      
      <div class="clear"></div>
      <p class="cat">{{{category}}}</p>
      <p class="title">{{{title}}}</p>
      <p class="medium">{{{medium}}}</p>
      <p class="date">{{{date}}}</p>
      
      <p class="body">{{{description}}}</p>
    </div>
  </a>
</script>
<?/*


<div id="bottomboxes">
<h2>Interaction Design and Development</h2>
<a href="/projects/timekeepr/">
<div style="" class="box fleft">
<img src="img/timekeepron.jpg">
<img class="off" src="img/timekeeproff.jpg">


<p class="title">Time Keepr</p>

<p class="body">At my work, we have to keep track of clients and time. I never liked the interface that the official time-tracking program developed, so I made my own program to keep track of time.</p>
</div>
</a>


<a href="/canvas-experiments/random-walk-1.php">
<div class="box fleft">
<img src="img/canvas-on.jpg">
<img class="off" src="img/canvas-off.jpg">

<div class="clear"></div>
<p class="title">Canvas Experiments</p>

<p class="body">Experiments in creating visuals using JavaScript to draw shapes on the HTML canvas object.</p>
</div>
</a>

<a href="/weather">
<div class="box fleft">
<img src="img/weatheron.jpg">
<img class="off" src="img/weatheroff.jpg">


<p class="title">Government Data: <br/>Adless Weather Info</p>

<p class="body">In order to learn more and xml and how PHP parses that data, and in order to never have to go on weather.com again, I made a weather forecasting website.</p>
</div>
</a>

<a href="/cmu/interaction-design/microwave/">
<div class="box fleft">
<img src="img/microwaveon.jpg">
<img class="off" src="img/microwaveoff.jpg">


<p class="title">A Better Microwave Control Scheme</p>

<p class="body">In order to learn more and xml and how PHP parses that data, and in order to never have to go on weather.com again, I made a weather forecasting website.</p>
</div>
</a>



</div>
<div class="clear"></div>
<div id="bottomboxes">

<h2>Interactive Visualizations</h2>
<a href="/projects/state-size">
<div class="box fleft">
<img src="img/state-sizeon.jpg">
<img class="off" src="img/state-sizeoff.jpg">

<div class="clear"></div>
<p class="title">State Sizes</p>

<p class="body">The United States has taken a decenial census since 1780. Well, now you can see how the United States has grown in size.</p>
</div>
</a>

<a href="/hexplay">
<div class="box fleft">
<img src="img/box1on.jpg">
<img class="off" src="img/box1off.jpg">


<p class="title">HexPlay</p>

<p class="body">A small Javascript made to pass the time when you are bored. Features Facebook integration that creates final image and saves it your Facebook photo album.</p>
</div>
</a>

<a href="/historicalsenate">
<div class="box fleft">
<img src="img/box2on.jpg">
<img class="off" src="img/box2off.jpg">


<p class="title">Senate Ideology</p>

<p class="body">Interactive graphic charting the swings of ideology in the US Senate. See the ideological rank of every Senator who has ever served.</p>
</div>
</a>

<a href="http://fpdigi.com/stubhubCA/">
<div class="box fleft">
<img src="img/box3on.jpg">
<img class="off" src="img/box3off.jpg">


<p class="title">Ticket Sales in LA</p>

<p class="body">Who buys hockey tickets in LA? Using purchase data, we find out what parts of Los Angeles County has the most hockey fans.</p>
</div>
</a>




<a href="http://fpdigi.com/stubhub/2012draft.html">
<div style="margin:0px;" class="box fleft">
<img src="img/box5on.jpg">
<img class="off" src="img/box5off.jpg">


<p class="title">NFL Draft and Ticket Sales</p>

<p class="body">Does getting the first draft choice increase the value of a team's tickets? This chart looks at the relationship between ticket prices and draft picks.</p>
</div>

</a>
</div>
<div class="clear"></div>


<div id="bottomboxes">
<h2>Static Visualizations</h2>
<a href="/nyc2012">
<div class="box fleft">
<img src="img/nycon.jpg">
<img class="off" src="img/nycoff.jpg">


<p class="title">Travel Map</p>

<p class="body">One week's worth of data on a trip to New York City. A small gift to my dad.</p>
</div>
</a>

<a href="/davispolk-infographic">
<div class="box fleft">
<img src="img/dpon.jpg">
<img class="off" src="img/dpoff.jpg">
<p class="title">Dodd-Frank Infographic</p>
<p class="body">On the two-year anniversary of the signing of the Dodd-Frank financial reform bill, the law firm asked me to make an infographic summarizing the history of the bill.</p>
</div>
</a>

<a href="/clients/icsc-infographic">
<div class="box fleft">
<img src="img/icscon.jpg">
<img class="off" src="img/icscoff.jpg">
<p class="title">Retail Fairness Infographic</p>
<p class="body">In order to spread the word that internet retailers pay less taxes than their brick-and-mortar counterparts, I designed this infographic for the International Council of Shopping Centers</p>
</div>
</a>

<a href="/projects/science-books/">
<div class="box fleft">
<img src="img/sciencebookon.jpg">
<img class="off" src="img/sciencebookoff.jpg">


<p class="title">Childrens' Infographic Science Books</p>

<p class="body">Bill Owens for Congress needed a digital postcard that could be shared with its volunteers. I made a small design showing the great work they have done.</p>
</div>
</a>


<a href="/projects/afgan">
<div style="margin:0px;" class="box fleft">
<img src="img/afganon.jpg">
<img class="off" src="img/afganoff.jpg">


<p class="title">Boots on the Ground:<br/> Troop Levels in Afganistan</p>

<p class="body">This graph broke down the number of troops in Afghanistan over the past decade while also noting the number of troops who have died while serving in that country.</p>
</div>
</a>
<div class="clear"></div>
</div>

*/?>


<?php page_about();?>
<?php page_bottom();?>

