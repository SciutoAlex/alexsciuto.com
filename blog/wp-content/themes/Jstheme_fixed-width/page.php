<?php get_header(); ?>



 <div id="pages" class="w100">
    	<div id="pri" class="w-left">
        
                <div id="current-content" class="hfeed">
        
                <?php while (have_posts()): the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" class="<?php k2_post_class(); ?>">
        
                        <div class="page-head">
                            <h2><?php the_title(); ?></h2>
                            <?php edit_post_link(__('Edit','k2_domain'), '<span class="entry-edit">','</span>'); ?>
                        </div>
            
                        <div class="entry-content">
                            <?php the_content(); ?>
        
                            <?php link_pages('<p><strong>'.__('Pages:','k2_domain').'</strong> ', '</p>', 'number'); ?>
                        </div>
        
                    </div> <!-- #post-ID -->
                <?php endwhile; ?>
        
                </div> <!-- #current-content -->
        
                <div id="dynamic-content"></div>

        </div><!--pri-->
        

        
    </div><!--pages-->

	<div id="side" class="w100">
    
		<?php include (TEMPLATEPATH . '/sub.php'); ?>
    
    </div><!--side-->
    




<?php get_footer(); ?>