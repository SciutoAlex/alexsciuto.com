
				<div class="line2"><h3><span><span class="b">Recent</span>Posts</span></h3></div>
				
				
				<ul>
				
				 <?php query_posts('author=1&showposts=6'); // exclude the first category ?>
				
				 <?php while (have_posts()) : the_post(); // start your Loop ?>
				
				 
				 <li><a href="<?php the_permalink(); ?>"><span style="color:#CCCCCC; padding-right:7px;"><?php echo get_the_time('dM'); ?></span><span><?php the_title(); ?></span></a></li>
				
				 <?php  endwhile; ?>
				
				
				</ul>
				
				<div class="line2"><h3><span><span class="b">Adam.C </span>BMW Z3</span></h3></div>
				
				<ul>
				
				 <?php query_posts('author=2&showposts=5'); // exclude the first category ?>
				
				 <?php while (have_posts()) : the_post(); // start your Loop ?>
				
				 
				 <li><a href="<?php the_permalink(); ?>"><span style="color:#CCCCCC; padding-right:7px;"><?php echo get_the_time('dM'); ?></span><span><?php the_title(); ?></span></a></li>
				
				 <?php  endwhile; ?>
					 
				<?php /*?><?php
					 $myposts = get_posts('numberposts=5&offset=0&category=60');
					 foreach($myposts as $post) :
					 ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					 <?php endforeach; ?><?php */?>

				
				</ul>
					

			
			
		
