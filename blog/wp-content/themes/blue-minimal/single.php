<?php include(TEMPLATEPATH.'/header.php'); ?>

<div id="main-gradient">
	<div id="tags" class="maincolumn font-BebasRegular">
		<div class="left-column font-bold">Some Categories</div> <div class="right-column font-body"><?php wp_tag_cloud('smallest=9&largest=9&number=9&&orderby=count&&separator= :: '); ?></div>
		<div class="left-column font-bold">Random Post</div> <div class="right-column font-body">
		<?php
			$args = array( 'numberposts' => 4, 'orderby' => 'rand' );
			$rand_posts = get_posts( $args );
			foreach( $rand_posts as $post ) : ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> ::</li>
<?php endforeach; ?>

</div>
		<div class="left-column font-bold">Websites I Like</div> <div class="right-column font-body"><a href="http://custom-lettering.blogspot.com/">THE ART OF HAND LETTERING</a> :: <a href="http://statemottosproject.com/">50 and 50: The State Mottos</a> :: <a href="http://picturebookreport.com/">Picture Book Report</a></div>
	</div>
</div>
 
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
			<div class="title font-BebasRegular"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
			<?php the_content(); ?>
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
<div class="maincolumn">
<div class="right-column">
<div id="nextlast">
	<div class="font-bold">
		 <?php previous_post_link(); ?>  :: <?php next_post_link(); ?> 
	</div>
	</div>
	<div style="float:right;" class="font-bold">
		<? if(function_exists('Count_Button')) {  echo Short_Button();    } ?>
		
	</div>
</div>
</div>

<?php include(TEMPLATEPATH.'/footer.php'); ?>



