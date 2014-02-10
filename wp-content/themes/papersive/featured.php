<?php 

// Custom loop for featured items in the slider on the front page. 
// Slider will show up to 6 posts marked as "sticky"

?>
					
<div class="feature">
						
		<?php 
		// Get all sticky posts, but only sticky posts
		$sticky = get_option( 'sticky_posts' );
		$args = array( 
			'numberposts' => 1, // Display up to 6 posts. Change at will
			'post__in'  => $sticky
		);
		$postQuery = get_posts($args);
							
		foreach( $postQuery as $post ) : setup_postdata($post);

			if ( has_post_thumbnail() ) { ?>
				

					<div class="logo">
						<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
						<div class="logo-line"></div>
						<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
					</div>
					
					<div class="ft-img">
						<div class="dark-overlay"></div>
						<?php the_post_thumbnail('feature-slider'); ?>
					</div> <!-- end ft-img --> 

					<div class="ft-title-txt-wrap">
						<div class="ft-date"><?php the_time( 'l' ); ?> the <?php the_time( 'd' ); ?><?php the_time( 'S' ); ?> of <?php the_time( 'F Y' ); ?></div>
						<div class="ft-title"><a href="<?php echo get_permalink(); ?>" title="Go to <?php echo the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div> 
						<div class="ft-tag-wrapper">
											<div class="ft-tag table-cell empty"></div>
											<div class="ft-tag table-cell">
												<div class="ft-tag-main-line"></div>
											</div>
											<div class="ft-tag-txt table-cell"><?php _e( 'Categories: ', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
											<div class="ft-tag table-cell">
												<div class="ft-tag-main-line"></div> 
											</div>
											<div class="ft-tag table-cell empty"></div>
										</div> 
						<div class="ft-tag-author"><?php the_author_posts_link(); ?></div> 
					</div><!-- end ft-title-txt-wrap -->


			<?php 

			}
		endforeach; ?>  
							
</div> <!-- end feature --> 



