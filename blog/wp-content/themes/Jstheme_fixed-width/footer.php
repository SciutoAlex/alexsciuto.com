	<div class="clear"></div>

 <div id="footpage" class="w100" align="center">
		<ul>
         
                   <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
                   
                   <?php wp_register('<li>','</li>'); ?><li><a href="#">Back to Top</a></li>
   </ul>
       
  </div><!--footpage-->
  
        

<div id="footer" class="w100">

  <a href="<?php $blog_title = get_bloginfo('rss2_url'); ?>" title="RSS Feeds" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ICO_FEED.gif" /></a>
        
        <a href="http://jsbox.net" title="Theme Design By Jay Kwong" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ICO_JS.gif" /></a>
        
        <a href="http://wordpress.org/" title="Wordpress <?php $blog_title = get_bloginfo('version'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ICO_WP.gif" /></a>
        
        <a href="http://www.mozilla.com/en-US/firefox/" target="_blank" title="FireFox : The Best Web Bbrowse"><img src="<?php bloginfo('template_directory'); ?>/images/ICO_FF.gif" /></a><br />


<?php /*?><p class="rss"><?php printf(__('<a href="%1$s">RSS Entries</a> and <a href="%2$s">RSS Comments</a>','k2_domain'), get_bloginfo('rss2_url'), get_bloginfo('comments_rss2_url')) ?></p><?php */?>

Theme Design by<a href="http://jsbox.net"> Jay Kwong</a>  .  
<?php printf(__(' Powered by %2$s and %3$s','k2_domain'), get_bloginfo('name') , '<a href="http://wordpress.org/" title="Where children sing songs of binary bliss">WordPress ' . get_bloginfo('version') . '</a>', '<a href="http://getk2.com/" title="Loves you like a kitten.">K2<!--' . get_k2info('version') . '--></a>' ) ?><br /> 
  
	
	<!-- <?php printf(__('%d queries. %.4f seconds.','k2_domain'), $wpdb->num_queries , timer_stop()) ?> -->
</div>

<?php wp_footer(); ?>



</body>
</html> 
