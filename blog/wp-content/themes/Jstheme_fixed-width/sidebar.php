<hr />
<div id="sidebar-main" class="secondary">


	<?php /* Menu for subpages of current page */
		global $notfound;
		if (is_page() and ($notfound != '1')) {
			$current_page = $post->ID;
			while($current_page) {
				$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
				$current_page = $page_query->post_parent;
			}
			$parent_id = $page_query->ID;
			$parent_title = $page_query->post_title;

			$page_menu = wp_list_pages('echo=0&sort_column=menu_order&title_li=&child_of='. $parent_id);
			if ($page_menu) {
	?>

	<div class="sb-pagemenu">
		<h2><?php echo $parent_title; ?> <?php _e('Subpages','k2_domain'); ?></h2>
		
		<ul>
			<?php echo $page_menu; ?>
		</ul>
			
		<?php if ($parent_id != $post->ID) { ?>
			<a href="<?php echo get_permalink($parent_id); ?>"><?php printf(__('Back to %s','k2_domain'), $parent_title ) ?></a>
		<?php } ?>
	</div>
	<?php } } ?>

	
	<?php if (is_attachment()) { ?>
		<div class="sb-pagemenu">
			<a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php printf(__('Back to \'%s\'','k2_domain'), get_the_title($post->post_parent) ) ?></a>
		</div>
	<?php } ?>

	<?php /* If there is a custom about message, use it on the frontpage. */ $k2about = get_option('k2aboutblurp'); if ((is_home() and $k2about != '') or !is_home() and !is_page() and !is_single() or is_paged()) { ?>
		
	<div class="sb-about">
		<h2><?php _e('About','k2_domain'); ?></h2>
		
		<?php /* Frontpage */ if (is_home() and !is_paged()) { ?>
		<p><?php echo stripslashes($k2about); ?></p>
		
		<?php /* Category Archive */ } elseif (is_category()) { ?>
		<p><?php printf(__('You are currently browsing the %1$s weblog archives for the %2$s category.','k2_domain'), '<a href="' . get_settings('siteurl') .'">' . get_bloginfo('name') . '</a>', single_cat_title('', false) ) ?></p>

		<?php /* Day Archive */ } elseif (is_day()) { ?>
		<p><?php printf(__('You are currently browsing the %1$s weblog archives for the day %2$s.','k2_domain'), '<a href="' . get_settings('siteurl') .'">' . get_bloginfo('name') . '</a>', get_the_time(__('l, F jS, Y','k2_domain'))) ?></p>

		<?php /* Monthly Archive */ } elseif (is_month()) { ?>
		<p><?php printf(__('You are currently browsing the %1$s weblog archives for the month %2$s.','k2_domain'), '<a href="'.get_settings('siteurl').'">'.get_bloginfo('name').'</a>', get_the_time(__('F, Y','k2_domain'))) ?></p>

		<?php /* Yearly Archive */ } elseif (is_year()) { ?>
		<p><?php printf(__('You are currently browsing the %1$s weblog archives for the year %2$s.','k2_domain'), '<a href="'.get_settings('siteurl').'">'.get_bloginfo('name').'</a>', get_the_time('Y')) ?></p>
		
		<?php /* Search */ } elseif (is_search()) { ?>
		<p><?php printf(__('You have searched the %1$s weblog archives for \'<strong>%2$s</strong>\'.','k2_domain'),'<a href="'.get_settings('siteurl').'">'.get_bloginfo('name').'</a>', wp_specialchars($s)) ?></p>

		<?php /* Author Archive */ } elseif (is_author()) { ?>
		<p><?php printf(__('Archive for <strong>%s</strong>.','k2_domain'), get_the_author()) ?></p>
		<p><?php the_author_description(); ?></p>

		<?php } elseif (function_exists('is_tag') and is_tag()) { ?>
		<p><?php printf(__('You are currently browsing the %1$s weblog archives for \'%2$s\' tag.','k2_domain'), '<a href="'.get_settings('siteurl').'">'.get_bloginfo('name').'</a>', get_query_var('tag') ) ?></p>
		
		<?php /* Paged Archive */ } elseif (is_paged()) { ?>
		<p><?php printf(__('You are currently browsing the %s weblog archives.','k2_domain'), '<a href="'.get_settings('siteurl').'">'.get_bloginfo('name').'</a>') ?></p>

		<?php /* Permalink */ } elseif (is_single()) { ?>
		<p><?php next_post('%', __('Next: ','k2_domain'),'yes') ?><br/>
		<?php previous_post('%', __('Previous: ','k2_domain') ,'yes') ?></p>

		<?php } ?>

		<?php if (!is_home() and !is_paged() and !in_category($k2asidescategory) or is_day() or is_month() or is_year() or is_author() or is_search() or (function_exists('is_tag') and is_tag())) { ?>
			<p><?php _e('Longer entries are truncated. Click the headline of an entry to read it in its entirety.','k2_domain'); ?></p>
		<?php } ?>
	</div>
			
	<?php } ?>
    
    
    			<div id="recent-posts" style="width:49%; margin-right:1%; overflow:hidden; float:left" class="widget widget_recent_entries">
                <h2>Recent <span class="a">Posts</span></h2>
                 <?php query_posts('showposts=10'); // exclude the first category ?>
				 <?php while (have_posts()) : the_post(); // start your Loop ?>
				 <ul>
                     <li><a href="<?php the_permalink(); ?>">
                     <span class="date"><?php echo get_the_time('dM'); ?></span>
                     <span class="comments"><?php comments_number('0', '1', '%'); ?></span>
                     <span><?php the_title(); ?></span>
                     </a></li>
                 </ul>
				 <?php  endwhile; ?>
             </div><!--recent-posts-->



	<?php /* Brian's Latest Comments */ if ((function_exists('blc_latest_comments')) and is_home()) { ?> 
	<div id="recent_comment"  style="width:49%; margin-left:1%; float:left; clear:right; overflow:hidden;"  class="sb-comments sb-comments-blc">
		<h2>Recent <span class="a">Comments</span></h2>	
		<span class="metalink"><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('RSS Feed for all Comments','k2_domain'); ?>" class="feedlink"><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="RSS" /></a></span>
		<ul>
			<?php blc_latest_comments('5','3','false'); ?>
		</ul>
	</div>
	<?php } ?>
    
     <?php if (function_exists('get_recent_comments')) { ?>
                 
                  
                 <div id="recent_comment"  style="width:49%; margin-left:1%; overflow:hidden; float:left; clear:right">
                  <h2>Recent <span class="a">Comments</span></h2>	
                        <ul>
                        <?php get_recent_comments(); ?>
                        </ul>
                 </div>
                   
     <?php } ?> 
                



	<?php /* Archives */ if ( (is_archive()) or (is_search()) or (is_paged()) or ($notfound == '1') or (function_exists('is_tag') and is_tag()) ) { ?>
	<div class="sb-months">
		<h2><?php _e('Archives','k2_domain'); ?></h2>
		
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>

	
	<?php } ?>


<div id="meta_rss" style="clear:both">
    	<span class="s1">RSS : </span>
    	<span class="s1"><a href="<?php bloginfo_rss('rss2_url') ?>"> Entries</a></span>
<span class="s2"><a href="<?php bloginfo_rss('comments_rss2_url') ?>">Comments</a></span>
    	
    </div>
    
    
    	<div id="search"><h2><?php _e('Search','k2_domain'); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>


</div> <!-- #sidebar-main -->





<div class="clear"></div>
