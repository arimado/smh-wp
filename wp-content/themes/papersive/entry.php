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
											<div class="ft-tag-txt table-cell"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
											<div class="ft-tag table-cell">
												<div class="ft-tag-main-line"></div> 
											</div>
											<div class="ft-tag table-cell empty"></div>
										</div> 
						<div class="ft-tag-author">By <?php the_author_meta( first_name ); ?> <?php the_author_meta( last_name ); ?> </div> 
					</div><!-- end ft-title-txt-wrap -->
<?php the_content(); ?>

<!--

<div class="article-preview">
						<div class="article-thumb-wrap">
							<img src="images/at-4.jpg" class="article-thumb"/> 
						</div>
						<div class="article-preview-txt">
							<div class="article-preview-title"></div>
							<div class="article-preview-line"></div>
							<div class="article-preview-tag"></div> 
						</div>
</div> 


-->