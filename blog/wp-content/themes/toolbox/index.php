<?php
  /**
  * The main template file.
  *
  * This is the most generic template file in a WordPress theme
  * and one of the two required files for a theme (the other being style.css).
  * It is used to display a page when nothing more specific matches a query.
  * E.g., it puts together the home page when no home.php file exists.
  * Learn more: http://codex.wordpress.org/Template_Hierarchy
  *
  * @package Toolbox
  * @since Toolbox 0.1
  */
  
  get_header();
  $showYear = 2011;
  ?>

<div id="primary" class="full-width">
  <div id="content" role="main">
    <?php
  query_posts( array( 
    'post_type' => 'post',
    'posts_per_page' => -1 ) 
              );
  
  
  ?>
    <?php if ( have_posts() ) : ?>
    
    <?php toolbox_content_nav( 'nav-above' ); ?>
    
    <?php /* Start the Loop */ ?>
    <?php $fullPost = true; ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php $currentYear = get_the_time( 'Y' ); ?>
    <?php
  /* Include the Post-Format-specific template for the content.
  * If you want to overload this in a child theme then include a file
  * called content-___.php (where ___ is the Post Format name) and that will be used instead.
  */ ?>
    
    <?php if ( $fullPost ) : ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php $fullPost = false; ?>
     <div class="list-article">
    <?php else : ?>
    
    
    <?php if ($currentYear !== $showYear) : ?>
  </div>
       <?php $showYear = $currentYear; ?>
    <h2><?php echo $currentYear; ?></h2>
    <div class="list-article">
      <?php endif; ?>
      
      <?php echo ($wp_query->current_post % 2) ? '<div class="col-2">' : ''; ?>
      
      
      <div class="<?php echo ($wp_query->current_post % 2) ? 'col-l' : 'col-r' ?>">
        <p><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></p>
      </div>
      
      <?php echo ($wp_query->current_post % 2) ? '' : '</div><div class="clearit"></div>'; ?>
      
    
    
    
    <?php endif; ?>
    
    <?php endwhile; ?>
  </ul>
    
    
    <?php else : ?>
    
    <article id="post-0" class="post no-results not-found">
      <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
      </header><!-- .entry-header -->
      
      <div class="entry-content">
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
        <?php get_search_form(); ?>
      </div><!-- .entry-content -->
    </article><!-- #post-0 -->
    
    <?php endif; ?>
    
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>