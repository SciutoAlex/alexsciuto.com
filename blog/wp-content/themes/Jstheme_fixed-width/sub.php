

<div style="overflow:hidden; display:block; padding:0 20px">

	<div style="width:100%;" >
        	
        <?php /* Widgets/SBM Check */ if ( !(function_exists('dynamic_sidebar') and get_option('k2sidebarnumber') > 0 and dynamic_sidebar(1)) ) { ?>
       
             
            <div  class="flick">
                <h2>Recent Flickrs</h2>
                <ul>
                    <?php include (TEMPLATEPATH . '/addon/flickr.php'); ?>
                </ul>
            </div><!--flickr-->
        

		<?php } /* End Widgets/SBM check */ ?>
        
        
        </div>
        
        <div style="float:left;width:48%; ">
        
        <?php /* Widgets/SBM Check */ if ( !(function_exists('dynamic_sidebar') and get_option('k2sidebarnumber') > 0 and dynamic_sidebar(2)) ) { ?>
        
        
          <div> 		 
          <?php include (TEMPLATEPATH . '/addon/music.php'); ?>  
          </div>
		  
		  <?php } /* End Widgets/SBM check */ ?>
        
        
        </div>

     
        
        
       <div style="float:left;width:48%; margin-left:2%">
  
        
		<?php /* Widgets/SBM Check */ if ( !(function_exists('dynamic_sidebar') and get_option('k2sidebarnumber') > 0 and dynamic_sidebar(3)) ) { ?>
		  <h2>Recent Listening</h2>
          <?php if (function_exists('get_scrobbler')) {get_scrobbler(); } ?>
 
		
		<?php } /* End Widgets/SBM check */ ?>
        
        </div>
  
  </div>   
