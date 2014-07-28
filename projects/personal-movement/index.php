<?php include_once "../../page.php";



        $params = array();
        $params['title'] = "Personal Movement";
        $params['page_name'] = "topic page";

        $params["css"] = array();
        $params["js"] = array();

        page_header($params);  ?>
<div class="col3" class="section">
  <div>


      <div width="1500" height="2400"><img class='zoom' src="img/move-poster-large.png" alt="">
      </div>
  </div>
  </div>
  <div class="col2 last" >
    <div class="brief" >
    <p class="red slab">DESIGN BRIEF</p>
    <h1>Tracking Personal Movement</h1>
    <p>Personal movement data is messy and patterns are often obfuscated by the shear amount of data. Using my iPhone and other devices, I've tracked my personal location for the past half year. I created this poster to show the key points about my own life told through my movement data.</p>

  </div>
    <div class="text-section" style="margin-top:40px;">
     <h6>Development Process</h6>
      <img src="img/data.png" style="border:1px solid #ddd;" alt="">
    <p>This project was originally intended as a mapping exercise to see how I could take latitude and longitude coordiates and create maps from them. I took the data in and processed it using Javascript.</p>
      <p>The data itself was very dirty, and the many different places I went made the data even more confusing. I knew I needed a way to present and contextualize the information. I decided that in addition to showing movement, I could also show the locations of places I visited and that would help give the movement more meaning.</p>
      <p>I also wanted to show my daily movement patterns. I used Edward Tufte's concept of <a href="https://www.google.com/search?q=small+multiples+tufte&safe=off&espv=210&es_sm=91&tbm=isch&tbo=u&source=univ&sa=X&ei=4_AhU-X0BoioyAHUyYCoBg&ved=0CCoQsAQ&biw=1440&bih=758">small multiples</a> to show my movement divided into different days of the week and times of the day. The benefit of Tufte's small multiples is that the viewer can quickly understand each single chart, and can also make sense of the multitude of small charts.</p>
  </div>


  <div class="clear"></div>
</div>

  <div class="clear"></div>

<?php page_about();?>
<?php page_bottom();?>
