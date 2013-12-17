<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php wp_head(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<!-- include Cycle plugin --> 
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script> 
<script type="text/javascript"> 
$(document).ready(function() {
    $('.slideshow')
    .cycle({
		fx:		'fade', 
		next:   '#nextphoto', 
        prev:   '#prevphoto',
        pager:  '#nav', 
        speed:   250,
        timeout: 0,
        after:   onAfter,
	});
	function onAfter() { 
    $('#output').html(this.alt);
}
});


</script> 
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico" />
<link rel="stylesheet" href="http://alexsciuto.com/blog/wp-content/themes/blue-minimal/style.css" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="fb:admins" content="19102067" />
<meta property="og:description" content="Alex Sciuto's personal blog of things he has seen." /> 
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
</head>

<body>
<div class="centerer">
<div class="page">
<div class="maincolumn">
	<div id="header">
		<div id="logo"><a href="http://www.alexsciuto.com/"><img src="<?php bloginfo('template_directory'); ?>/img/alex-sciuto-head.jpg" alt="alexsciuto.com" /></a>
		</div>
		<div id="links" class="font-BebasRegular"><ul>
<?php wp_list_pages('title_li=&depth=1&exclude=1406'); ?>
</ul>
		</div>
	</div>
</div>


<hr id="color-gradient" />

