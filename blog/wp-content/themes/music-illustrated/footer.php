    </div>
	<!-- main END -->

	
	<div class="fixed"></div>
</div>
<!-- content END -->

<!-- footer START -->

            <div id="pagenavi">
                <?php if(function_exists('wp_pagenavi')) : ?>
                    <?php wp_pagenavi() ?>
                <?php else : ?>
                    <span class="newer"><?php previous_posts_link(__('Newer Entries', 'inove')); ?></span>
                    <span class="older"><?php next_posts_link(__('Older Entries', 'inove')); ?></span>
                <?php endif; ?>
                <div class="fixed"></div>
            </div> 

<div class="wrappperfooter">

       <div id="bottominfo">

                <div id="footercol">
                     <div id="footersection">
                          <h4 id="footertitle">Popular Tags</h4>
                           <span id="cloud"><?php wp_tag_cloud('smallest=8&largest=14&number=30&orderby=count&order=RAND'); ?></span>
                      </div>
                     
                </div>

                  <div id="footercol">
                      <div id="footersection">
                           <h4 id="footertitle">Latest Posts</h4>
                           <?php
 $postslist = get_posts('numberposts=10&order=DESC&orderby=date');
 foreach ($postslist as $post) : 
    setup_postdata($post);
 ?> 
 <div class="pasttitles">


  <a href="<?php the_permalink(); ?>"><?php the_date(); ?>:  <span id="title"><?php the_title(); ?></span></a>

 </div>
 <?php endforeach; ?>

                      </div>
                 </div>



                  <div id="footercol">
                 <div id="footersection">
                          <h4 id="footertitle">About Alex</h4>
                         <Div class="perstitle">Location: <span id="persinfo">Shanghai China</span></div>
                         <Div class="perstitle">Favorite Food: <span id="persinfo">Bread</span></div>
                         <Div class="perstitle"><a href="mailto:SciutoAlex@gmail.com?subject=Hello!">Ask Alex!</A></div>
                      </div>




          </div>


<BR>
<div class="crumble">
<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> | &copy; 2009, Alex | Powered by <a href="http://www.wordpress.org">WordPress</a> | Fonts Freely Licensed From <a href="htttp://www.theleagueofmoveabletype.com/">The League of Moveable Type</a>.
</div>


<!-- footer END -->

</div>
<!-- container END -->
</div>
</div>
<!-- wrap END -->

<?php
	wp_footer();

	$options = get_option('inove_options');
	if ($options['analytics']) {
		echo($options['analytics_content']);
	}
?>

</body>
</html>

