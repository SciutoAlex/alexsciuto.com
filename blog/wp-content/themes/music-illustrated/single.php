<DIV class="centerersingle"><?php get_header(); ?><DIV class="wrapppersingle">
<?php $options = get_option('inove_options'); ?>
<DIV class="singlepost">
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>



<?php include( TEMPLATEPATH . '/postheader.php' ); ?>
	
                   
		<div class="content">
			<?php the_content(); ?>
            <?php wp_link_pages(); ?>
<div class="under">
                        <?php if ($options['categories']) : ?><span class="categories"><?php _e('Categories: ', 'inove'); ?></span><span><?php the_category(', '); ?></span><?php endif; ?><br />
                        <?php if ($options['tags']) : ?><span class="tags"><?php _e('Tags: ', 'inove'); ?><?php the_tags('', ', ', ''); ?></span><?php endif; ?>
                    </div>
			<div class="fixed"></div>
		</div>
</div>

	
	</div>



	<!-- related posts START -->
	
	<!-- related posts END -->
</DIV>
<DIV class="lefttrianglesingle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleleft.png"></DIV>
<DIV class="righttrianglesingle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleright.png"></DIV>
<DIV class="wrapppercomments">

<?php comments_template(); ?>
</div>
	<div id="postnavi">
		<span class="prev"><?php next_post_link('%link') ?></span>
		<span class="next"><?php previous_post_link('%link') ?></span>
		<div class="fixed"></div>
	</div>

<?php else : ?>
	<div class="errorbox">
		<?php _e('Sorry, no posts matched your criteria.', 'inove'); ?>
	</div>
<?php endif; ?>
<DIV class="lefttriangle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleleft.png"></DIV>
<DIV class="righttriangle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleright.png"></DIV>
<?php get_footer(); ?></DIV>
