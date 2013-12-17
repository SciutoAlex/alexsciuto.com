<?php include(TEMPLATEPATH.'/header.php'); ?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<hr class="length">

<div class="maincolumn">
	<div class="post">
		<div class="left-column">
			<div class="font-bold"><?php the_time('F j, Y'); ?></div> 
			<div class="font-bold post-tags">
				<?php the_tags('<li>','</li><li>','</li>'); ?> 
			</div>
		</div>

		<div class="right-column">
			<div class="title font-bold"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
			<div style="float:right;"><?php next_image_link() ?></div><?php previous_image_link() ?><br />
      <div style="text-align: center;"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></div>
      
		</div>
	</div>
</div>


<?php endwhile; else: ?>


 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
 
 <hr style="margin-bottom:8px;" class="length">
<div id="nextlast" class="maincolumn">
	<div class="font-bold">
		 <?php previous_post_link(); ?>  :: <?php next_post_link(); ?> 
	</div>
</div>

<?php include(TEMPLATEPATH.'/footer.php'); ?>



