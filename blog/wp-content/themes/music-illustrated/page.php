<?php get_header(); ?>

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
    <div class="dated"><span><?php the_time('d') ?></span></div><div class="datem"><span> <?php the_time('M') ?></span></div>
		<h2><?php the_title(); ?></h2>
                <hr class="mainhr">
		<div class="info">
			
			<?php edit_post_link(__('Edit', 'inove'), '<span class="editpost">', '</span>'); ?>
			<?php if ($comments || comments_open()) : ?>
				<span class="addcomment"><a href="#respond"><?php _e('Leave a comment', 'inove'); ?></a></span>
				<span class="comments"><a href="#comments"><?php _e('Go to comments', 'inove'); ?></a></span>
			<?php endif; ?>
			<div class="fixed"></div>
		</div>
		<div class="content">
			<?php the_content(); ?>
            <?php wp_link_pages(); ?>
			<div class="fixed"></div>
		</div>
	</div>

	<?php include('templates/comments.php'); ?>

<?php else : ?>
	<div class="errorbox">
		<?php _e('Sorry, no posts matched your criteria.', 'inove'); ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
