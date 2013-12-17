

 
<?php include(TEMPLATEPATH.'/headerpage.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <div class="maincolumn">
	
		<div class="left-column">
			<div class="font-BebasRegular" id="pagelisttitle">
			<?php 
$parent_title = get_the_title($post->post_parent);?>
<?php echo $parent_title;?>
</div> 
			<div class="font-body post-tags">
				<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>
			</div>
		</div>

		<div class="right-column">
			
			<?php the_content('<p>See More/Read More</p>'); ?>
			</div>


</div>
</div>
</div>
<hr class="length">
<div class="page">
<div class="maincolumn">
<div class="left-column" style="border:0px; height:auto;"></div>
<div class="right-column">
<div id="slideshow-bottom">
     <div id="pagetitle" class="font-BebasRegular"><?php wp_title("",true); ?></div>
     <div id="slideshow-control" class="font-body"><span id="nav"></span><a id="prevphoto" href="#">Prev</a> <a id="nextphoto"  href="#">Next</a></div>

</div>
<p class="font-body" id="output"></p>
</div>


</div>
</div>
			
	</div> 
		</div>
	</div>


<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php include(TEMPLATEPATH.'/footerpage.php'); ?>