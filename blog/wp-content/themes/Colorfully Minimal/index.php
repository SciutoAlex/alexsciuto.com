 <?php get_header(); ?>


 <!-- Start the Loop. -->
<?php $count = 1; ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- The following tests if the current post is in category 3. -->
 <!-- If it is, the div box is given the CSS class "post-cat-three". -->
 <!-- Otherwise, the div box will be given the CSS class "post". -->
 <?php if ( in_category('Photography') ) { ?>
           <div class="photography">
 <?php } elseif ( in_category('internet') ) { ?>
           <div class="internet">
 <?php } elseif ( in_category('China') ) { ?>
           <div class="china">
<?php } elseif ( in_category('Food') ) { ?>
           <div class="food">
 <?php } elseif ( in_category('design') ) { ?>
           <div class="design">
 <?php } else { ?>
           <div class="post">
 <?php } ?>

 <div class="date"><?php the_time('F j, Y'); ?></div>

 <div class="content">
 <!-- Display the Title as a link to the Post's permalink. -->

 <?php if ( in_category('Photography') ) { ?>
       


 <!-- Display the Post's Content in a div box. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>
<div class="bottom">
<div class="bottomtitle">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>: 
Posted in <?php the_category(', '); ?>. <span class="commentlink"><a href="<?php comments_link(); ?>">
<?php comments_number('Post a Comment','One Comment','% Comments'); ?></a></span></div>
<div class="bottomtags"><?php the_tags('Tagged as: ', ', ', ''); ?> 
</div>
</div>
 <!-- Display a comma separated list of the Post's Categories. -->
</div></div>
 <?php } else { ?>
          

 <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

 <!-- Display the Post's Content in a div box. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>

 <!-- Display a comma separated list of the Post's Categories. -->
 <div class="bottom">
<div class="bottomtitle">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>: 
Posted in <?php the_category(', '); ?>. <span class="commentlink"><a href="<?php comments_link(); ?>">
<?php comments_number('Post a Comment','One Comment','% Comments'); ?></a></span></div>
<div class="bottomtags"><?php the_tags('Tagged as: ', ', ', ''); ?> 
</div>
</div></div>
 </div> <!-- closes the first div box -->
 <?php } ?>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
 <div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
          
  <?php get_footer(); ?>

