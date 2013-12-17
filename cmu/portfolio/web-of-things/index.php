<?php include_once "../../../page.php";
  
  page_header();
  ?>
<div class="section">
  <div class="col3">
    <div class="littlesection">
    <img src="img/sketch3.jpg" alt="">
      </div>
    <div>
     
      <div class="zoom" data-large="img/web-poster.jpg" width="1500" height="2400" data-width="2573" data-height="4200"><img src="img/web-poster.jpg" alt=""></div><p class="zoomcaption"><a href="zoom.php" target="_blank">view larger image</a></p>
  </div>
  </div>
  <div class="col2 last" >
    <div class="brief" >
    <p class="red slab">DESIGN BRIEF</p>
    <h1>Designing for Practices</h1>
    <p>Creative problem-solving and decision-making require reframing a problem in new ways. One novel frame interaction designers can use is to think about a person's groups of things, values, and skills&mdash;a practice. Find a way to visualize all your things and how they interact with your practices.</p>
 
  </div>
    <div class="text-section" style="margin-top:40px;">
     <h6>Conceptual Development</h6>
      <img src="img/concept.jpg" style="border:1px solid #ddd;" alt="">
    <p>I've moved from city-to-city a lot, so I don't own too many things. Still, I have at least a few hundred things that I now own. After cataloging all of them, I began to analyze how the interact with my life and how my life interacts with practices.</p>
      <p>I developed a few conceptual models that I liked. Each model emphasized a different perspective of my relationship to my things. The more I played with my concepts, the more I was interested in how practices intersect and how designed things enable and disable these intersections.</p>
  </div>
    <div class="text-section" style="margin-top:40px;">
     <h6>Sketching Ideas</h6>
    <p>It was a challenge to show such a large amount of data while still telling a linear narrative. I tried a number of different styles through rapid sketches. These attempts included embedded circles, waves of arcs, free-form graphs, and conceptual flows.</p>
      <p>Each sketch told a slightly different story. I ended up choosing a spaghetti-plate approach because I wanted to show how all of my practices are actually intertwined together. I also liked that the spaghetti graph showed a clear progression from top to bottom.</p>
  </div>
  <div class="text-section" style="margin-top:40px;">
     <h6>Javascript Coding</h6>
    <p>I guess you could hand-layout a graph like this one, but it'd be so time-consuming and any edits would be impossible. Instead I used Javascript and the D3.js library to create the spaghetti graph. I created an interactive version that allowed me to move around the different practice areas. This interactivity helped me to get a final shape that really looked good.</p>
  </div>
  <div class="text-section" style="margin-top:40px;">
     <h6>Final Design</h6>
    <p>I had a lot of theoretical help from Cameron Tonkinwise (He's pretty active on <a href="https://twitter.com/camerontw">Twitter</a> and good follow) about what was most important to emphasize in the chart. We came to see that although all my things are twisted together, some practices are strongly related to particular places while others are more spread out.</p>
    <p>Taking this insight, I also thought about alternative futures where certain practices that were closely connected a place were no longer so closely bound. You can read more about this at the bottom of the poster.</p>
  </div>

  <div class="clear"></div>
</div>    
<script src="<?=ROOT_URL;?>/js/photoZoom.js"></script>
  <div class="clear"></div>

<?php page_about();?>
<?php page_bottom();?>