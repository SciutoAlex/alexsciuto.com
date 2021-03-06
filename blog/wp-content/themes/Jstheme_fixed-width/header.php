<?php
	// Load localizatons
	load_theme_textdomain('k2_domain');

	// Replace bundled scripts with our own
	K2::replace_wp_scripts();

	// Load our scripts
	wp_enqueue_script('k2functions');

	if (get_option('k2rollingarchives') == 1) {
		wp_enqueue_script('k2rollingarchives');
	}

	if (get_option('k2livesearch') == 1) {
		wp_enqueue_script('k2livesearch');
	}

	if ((get_option('k2livecommenting') == 1) and ((is_page() or is_single()) and (!isset($_GET['jal_edit_comments'])) and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) )) {
		wp_enqueue_script('k2comments');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">



		
    
    


      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" >
      <link rel="icon" href="<?php bloginfo('template_url'); ?>/animated_favicon1.gif" type="image/gif" >



	<title><?php wp_title(''); if (function_exists('is_tag') and is_tag()) { ?>Tag Archive for <?php echo get_query_var('tag'); } if (is_archive()) { ?> archive<?php } elseif (is_search()) { ?> Search for <?php echo get_query_var('s'); } if ( !(is_404()) and (is_search()) or (is_single()) or (is_page()) or (function_exists('is_tag') and is_tag()) or (is_archive()) ) { ?> at <?php } ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="template" content="K2 <?php k2info('version'); ?>" />
 	<meta name="description" content="<?php bloginfo('description'); ?>" />
  
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_url'); ?>/css/print.css" />
	<?php /* Rolling Archives */ if (get_option('k2rollingarchives') == 1) { ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/rollingarchives.css" />
	<?php } ?>
	<?php /* Custom Style */ if (get_option('k2scheme') != '') { ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php k2info('style'); ?>" />
	<?php } ?>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<?php if (is_single() or is_page()) { ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php } ?>

	<?php wp_head(); ?>	

	<script type="text/javascript">
	//<![CDATA[
		var K2 = {};

		<?php /* LiveSearch */ if (get_option('k2livesearch') == 1) { ?>
		K2.LiveSearch = new Livesearch("searchform", "dynamic-content", "current-content",
			<?php
				if (get_option('k2rollingarchives') == 1) {
					output_javascript_url('rollingarchive.php');
				} else {
					output_javascript_url('theloop.php');
				}
			?>,
			"<?php echo attribute_escape(__('Type and Wait to Search','k2_domain')); ?>",
			"<?php echo attribute_escape(__('go','k2_domain')); ?>");
		<?php } ?>

		<?php /* Rolling Archives */ if (get_option('k2rollingarchives') == 1) { ?>
		K2.RollingArchives = new RollingArchives("rollingarchives", "rollingcontent",
			<?php output_javascript_url('theloop.php'); ?>,
			"<?php echo attribute_escape(__('Page %1$d of %2$d',k2_domain)); ?>");
		<?php } ?>

		<?php /* Hide Author Elements */ if (!is_user_logged_in() and (is_page() or is_single()) and ($comment_author = $_COOKIE['comment_author_'.COOKIEHASH]) and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) ) { ?>
		FastInit.addOnLoad( OnLoadUtils );
		<?php } ?>
	//]]>
	</script>

	<?php wp_get_archives('type=monthly&format=link'); ?>
    
<?php /*?>   <script src="<?php bloginfo('template_directory'); ?>/js/scripts/scriptaculous.js" type="text/javascript"></script>

<script type="text/javascript">


    window.onload = function() {
		 Element.hide("navigation2");
    };


</script>

<script type="text/javascript">
fadeBox = function(eleID)
{
new Effect.toggle(eleID,'blind');

}

</script><?php */?>
    
    
</head>

<body class="<?php k2_body_class(); ?>" <?php k2_body_id(); ?>>

    
        
<div id="header" class="w100">
	
		<div class="top_line"></div><!--top_line-->
        
		
	  <div id="menu_page" class="w100">
      
            <div class="left  w203">
            	
                    <div class="tit"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></div>
                    <div class="des"><?php bloginfo('description'); ?></div>
          
            </div><!--left-->
            
            <div class="right  wfull">
               <ul>
                    <?php if ('page' != get_option('show_on_front')) { ?>
                    <li class="<?php if ( is_home() or is_archive() or is_single() or is_paged() or is_search() or (function_exists('is_tag') and is_tag()) ) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>/" title="<?php echo get_option('k2blogornoblog'); ?>"><?php echo get_option('k2blogornoblog'); ?></a></li>
                    <?php } ?>
                    <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
             <?php /*?>       <li><a  id="toggle" onClick="fadeBox('navigation2')"  title="Categories tags & Search" >Browse by Category</a></li><?php */?>
               </ul>
            </div><!--right-->
                        	
      </div><!--menu page-->

        <div id="navigation2">
      <div id="menu_cata" class="w100" >
       
     
     
               <ul style=" padding-left:20px">
					<?php wp_list_categories('hierarchical=0&title_li=0') ?>
               </ul>
          </div>     
     
              
                        	
      </div><!--menu page-->
	

	</div><!--header-->
        
 
        
        