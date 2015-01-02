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
      "gadgets",
      "webThings",
      "neighborhood-data",
      "afganistan",
      "scienceBooks",
      "timeKeepr",
      "pruitt-igoe",
      "voyager",
      "tmc",
      "historicalSentate",
      "personal-movement",

      "pa-school-data"

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


<?php page_about();?>
<?php page_bottom();?>
