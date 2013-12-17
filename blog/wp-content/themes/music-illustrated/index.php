<?php get_header(); ?>
<?php
	$options = get_option('inove_options');
	if (function_exists('wp_list_comments')) {
		add_filter('get_comments_number', 'comment_count', 0);
	}
?>

			<?php if ($options['notice'] && $options['notice_content']) : ?>
                <div class="post" id="notice">          
                    <div class="content">
                        <?php echo($options['notice_content']); ?>
                        <div class="fixed"></div>
                    </div>
                </div>
            <?php endif; ?>
            

<?php if (have_posts()) : while (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="wrappper" align:"center">
<?php include( TEMPLATEPATH . '/postheader.php' ); ?>

                    
                   



    <div class="content">
                        <?php the_content(__('Read more...', 'inove')); ?>
<CENTER><div style="margin:0px auto; text-decoration:strike-through;"><h2><?php comments_popup_link(__('Post a Comment', 'inove'), __('Post a Comment', 'inove'), __('Post a Comment', 'inove'), '', __('Comments off', 'inove')); ?></h2></div></CENTER>
                        <?php wp_link_pages(); ?>
                        <div class="fixed"></div>
    </div>
    <div class="under">
                        <?php if ($options['categories']) : ?><span class="categories"><?php _e('Categories: ', 'inove'); ?></span><span><?php the_category(', '); ?></span><?php endif; ?><br />
                        <?php if ($options['tags']) : ?><span class="tags"><?php _e('Tags: ', 'inove'); ?><?php the_tags('', ', ', ''); ?></span><?php endif; ?>
     </div>
</div>
</div>
<DIV class="lefttriangle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleleft.png"></DIV>
<DIV class="righttriangle"><img src="http://alexsciuto.com/blog/wp-content/themes/music-illustrated/img/triangleright.png"></DIV>
            <?php endwhile; else : ?>
                <div class="errorbox">
                    <?php _e('Sorry, no posts matched your criteria.', 'inove'); ?>
               </div>

            <?php endif; ?>
            


<?php get_footer(); ?>
</div>
