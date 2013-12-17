<?php
/*
Template Name: Splash
*/
?>

<?php include(TEMPLATEPATH.'/header.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.splashshow')
    .cycle({
		fx:		'fade', 
		next:   '#nextphoto', 
        prev:   '#prevphoto',
        pager:  '#nav', 
        speed:   1,
        timeout: 6,
        after:   onAfter,
	});
	function onAfter() { 
    $('#output').html(this.alt);
}
});
</script> 
         <div style="position: relative; margin-top:-4px; margin-left:440px; font-size:20px; text-align:right;" class="maincolumn font-BebasRegular">
	<?php the_content('<p>See More/Read More</p>'); ?>
	</div>

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php include(TEMPLATEPATH.'/footer.php'); ?>


