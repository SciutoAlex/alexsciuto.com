<div id="recent_comment"><!--comment-->
			
			

   <?php if (function_exists('get_recent_comments')) { ?>
  <div class="line2"><h3><span><span class="b">Recent</span>Comment</span></h3></div>
  
 <div id="recent_comment">
        <ul>
        <?php get_recent_comments(); ?>
        </ul>
        </div>
   
   <?php } ?> 
			
			<div class="clean"></div>
			<hr/>
			 
			<!-- get recent trackbacks-->		
			<?php /* get recent trackbacks */   if (function_exists('get_recent_trackbacks')) { ?>
			
		<?php /*?>	<div class="title">
			<br/><br/><span class="w1">Recent</span><span class="w2"> Trackbacks</span></div>
		  	<div class="tb">
			<ul><?php get_recent_trackbacks(); ?></ul>
			</div>		   <?php */?>
			<?php } ?>
			
			</div><!--end comment-->
			