<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
   <?php include( TEMPLATEPATH . '/postheader.php' ); ?>
		<div class="content">
			<?php
				if (function_exists('wp_easyarchives')) {
					wp_easyarchives();
				} else {
					echo '<ul>';
					wp_get_archives('type=monthly&show_post_count=1');
					echo '</ul>';
				}
			?>
		</div>
	</div>

	<?php include( TEMPLATEPATH . '/comments.php' ); ?>

<?php else : ?>
	<div class="errorbox">
		<?php _e('Sorry, no posts matched your criteria.', 'inove'); ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
