<?php get_header(); ?>



 <div id="pages" class="w100">
    	<div id="pri" class="w-left">
        
               <div class="page-head">
					<h2><?php _e('Error 404 - Not Found','k2_domain'); ?></h2>
				</div>

				<div class="entry-content">
					<p><?php _e('Oh no! You\'re looking for something which just isn\'t here! Fear not however, errors are to be expected, and luckily there are tools on the sidebar for you to use in your search for what you need.','k2_domain'); ?></p>
				</div>


        </div><!--pri-->
        
        <div id="sec" class="w-right">
        
       		 <?php get_sidebar(); ?>
        
        </div><!--sec = Side bar-->
        
    </div><!--pages-->

	<div id="side" class="w100">
    
		<?php include (TEMPLATEPATH . '/sub.php'); ?>
    
    </div><!--side-->
    




<?php get_footer(); ?>