<div class="col">
				<h2 class="text-center">Resources</h2>
			
					<?php 
					
						$posts = get_posts(array(
							'posts_per_page'	=> -1,
							'post_type'			=> 'resource',
							'orderby'				=> 'title', 
							'order' 				=> 'ASC'
						));

						if( $posts ): ?>
	
							<?php foreach( $posts as $post ): 
		
								setup_postdata( $post )
		
								?>
								
								<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
															<a href="<?php the_permalink(); ?>">
															<?php
															the_post_thumbnail('thumb', array( 'class'	=> "img-responsive img-center"));
														}  ?></a>


									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php the_excerpt(); ?></p>
									
									

							</a>
							
							<?php endforeach; ?>
								
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>
			</div><!-- end span 6-->