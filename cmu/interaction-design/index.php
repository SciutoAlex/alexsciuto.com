<?php include_once "../../page.php";



          $params = array();
          $params['title'] = "Infographic Books";
          $params['page_name'] = "topic page";

          $params["css"] = array();
          $params["js"] = array();

          page_header($params);
  ?>

<img src="science-book-header.jpg">

<div id="project-page">
  <div class="col-l">
    <p class="title">Childrens' Infographic Books</p>
    <p class="big">I worked with a children's book publisher to create two books of graphics that taught grade school children about energy and waves and natural disasters throughout history. Cool, I know.</p>
    <p>One of the interesting aspects of the project was discovering the role of the of the data designer within the book publishing process. Was I an author? Was I an illustrator? The publishers came to me with text already prepared and basic art direction. I think the value I added was seeing the publisher and author's ideas and concepts in more useful visual ways.
    </p>
    <p>And yes, you can buy them on Amazon.com!</a>
  </div>
  <div class="col-r">
  <img src="science-books-combined.jpg" alt="">
     <img src="science-books-mock.jpg" alt="">
  </div>
  <div class="clear"></div>
</div>



<?php page_about();?>
<?php page_bottom();?>
