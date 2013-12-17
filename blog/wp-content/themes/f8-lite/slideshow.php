<!-- Begin slideshow -->
<?php query_posts('showposts=4'); ?>
<ul id="portfolio">
<?php while (have_posts()) : the_post(); ?>
<?php
	$values = get_post_custom_values("image");
	if (isset($values[0])) {						
?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php $values = get_post_custom_values("image"); echo $values[0]; ?>" alt="" /></a></li>
<?php } ?>
<?php endwhile; wp_reset_query(); ?>
</ul>