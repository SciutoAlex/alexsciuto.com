<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<!-- Styles  -->
<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Javascripts  -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.2.6.min.js"></script>
<?php if (is_front_page()) { ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.innerfade.js"></script>
<?php } ?>

<?php if (is_front_page()) { ?>
<!-- Begin slideshow scripts -->
<script type="text/javascript">
	   $(document).ready(
				function(){

					$('ul#portfolio').innerfade({
						speed: 1000,
						timeout: 5000,
						type: 'sequence',
						containerheight: '435px'
					});
			});
  	</script>
<?php } ?>
<?php wp_head(); ?>
</head>

<body>
<div class="container">
<div class="container-inner">

<!-- Begin rss -->
<div id="inside-subscribe"><a href="<?php bloginfo('rss2_url'); ?>" class="feed">subscribe to entries</a> or <a href="<?php bloginfo('comments_rss2_url'); ?>" class="feed">subscribe to comments</a></div>
<div class="clear"></div>

<!-- Begin Masthead -->
<div id="masthead">
    <h4 class="left"><a href="<?php echo get_settings('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a> <span class="description"><?php bloginfo('description'); ?></span><span class="contact">1-800-867-5309<br /><a href="mailto:name@email.com">name@email.com</a></span></h4>
<div class="clear"></div>

<?php /* If this is home */ if (is_front_page()) { ?>
<?php include (TEMPLATEPATH . '/slideshow.php'); ?>
<?php } ?>

<?php if ( $paged > 1 ) { ?>
<?php } ?>

<!-- Begin Navigation -->
	<div id="navcontainer">
		<ul id="navlist">
		<li><a href="<?php echo get_settings('home'); ?>/" title="Return to the the frontpage">Home</a></li>
		<li><a href="#" title="Link title">Link</a></li>
		<li><a href="#" title="Link title">Link</a></li>
		<li><a href="#" title="Link title">Link</a></li>
	</ul>
</div>
</div>