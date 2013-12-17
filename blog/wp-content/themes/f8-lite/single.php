<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h6 class="underlined"><?php the_title(); ?></h6>
<?php
	$values = get_post_custom_values("multimedia");
	if (isset($values[0])) {
	?>
<div class="multimedia">
	<?php $values = get_post_custom_values("multimedia"); echo $values[0]; ?>
</div>
<div class="clear"></div>
<?php } ?>

<div class="content">
<?php the_content(); ?>
</div>

<p class="postmetadata"><?php the_time('M d, Y') ?> | Filed under <?php the_category(', ') ?><?php if (get_the_tags()) the_tags(' and tagged with '); ?>. <?php edit_post_link('Edit', '| ', ''); ?> </p>
<p class="postmetadata"><?php the_tags(); ?></p>

<div class="nav prev left"><?php next_post_link('%link', '&larr;', TRUE); ?></div>
<div class="nav next right"><?php previous_post_link('%link', '&rarr;', TRUE); ?></div>
<div class="clear"></div>

			<?php endwhile; else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>

			<?php endif; ?>
<?php comments_template(); ?>
<?php include (TEMPLATEPATH . "/bottom.php"); ?>
<?php get_footer(); ?>