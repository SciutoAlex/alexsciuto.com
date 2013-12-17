<?php /* Related Posts Plugin */ if ((function_exists('related_posts')) and is_single() and ($notfound != '1')) { ?> 
	
	<div class="title"><span class="w1">Related </span><span class="w2"> Posts</span></div>
		
				<ul>
					<?php related_posts(10, 0, '<li>', '</li>', '', '', false, false); ?>
				</ul>
	
			<?php } ?>
			


			

	
			

			
			
			
			
		
			
			

		