<?php get_header(); ?>



 <div id="pages" class="w100">
    	<div id="pri" class="w-left">
        
        	<?php if (get_option('k2rollingarchives') == 1) { ?>
			<div id="dynamic-content">

			<?php include (TEMPLATEPATH . '/rollingarchive.php'); ?>
            <?php comments_template(); ?>

			</div> <!-- #dynamic-content -->
			<?php } else { ?>
			<div id="current-content" class="hfeed">

			<?php include (TEMPLATEPATH . '/theloop.php'); ?>
            <?php comments_template(); ?>
            

			</div> <!-- #current-content -->

		<div id="dynamic-content"></div>
		<?php } ?>

        </div><!--pri-->
        

        
    </div><!--pages-->

	<div id="side" class="w100">
    
		<?php include (TEMPLATEPATH . '/sub.php'); ?>
    
    </div><!--side-->
    




<?php get_footer(); ?>