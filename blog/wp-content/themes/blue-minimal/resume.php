<?php
/*
Template Name: Blank Page
*/
?>

<?php include(TEMPLATEPATH.'/headerpage.php'); ?>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.splashshow')
    .cycle({
		fx:		'fade', 
		next:   '#nextphoto', 
        prev:   '#prevphoto',
        pager:  '#nav', 
        speed:   1,
        timeout: 1000,
        after:   onAfter,
	});
	function onAfter() { 
    $('#output').html(this.alt);
}
});
</script> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="single-column">
       <?php the_content('<p>See More/Read More</p>'); ?>
       </div>
       <?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>




<?php include(TEMPLATEPATH.'/footerpage.php'); ?>


