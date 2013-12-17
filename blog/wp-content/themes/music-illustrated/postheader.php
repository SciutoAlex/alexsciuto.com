<div class="date"><span>Posted: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></span></div>
     <div class="infor"><span><?php if ($options['author']) : ?><span class="author">:: posted by <?php the_author_posts_link(); ?> :: </span><?php endif; ?>
                        <?php edit_post_link(__('Edit', 'inove'), '<span class="editpost">', ' :: </span>'); ?>
                        <span class="comments"><?php comments_popup_link(__('No comments', 'inove'), __('1 comment', 'inove'), __('% comments', 'inove'), '', __('Comments off', 'inove')); ?>::</span>
     </div>    
<div class="post" id="post-<?php the_ID(); ?>">
    <div class="info">
                          </span>
        <div class="fixed"></div>




   <DIV class="titleback"> <div id="titlecategory"><P><?php the_category(','); ?></P></div><img src="http://www.alexsciuto.com/blog/wp-content/themes/music-illustrated/img/categoryarrow.png"><span id="titletitle"><a class="title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></span></a></DIV></DIV>