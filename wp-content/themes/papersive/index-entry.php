
<div id="post-<?php the_ID(); ?>" <?php post_class('article-preview'); ?>>
	<div class="article-thumb-wrap">
		<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	</div>
	<div class="article-preview-txt">
		<div class="article-preview-title"><?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?></div>
		<div class="article-preview-line"></div>
		<div class="article-preview-tag"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 

	</div>
</div> 

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