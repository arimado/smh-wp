
<div id="post-<?php the_ID(); ?>" <?php post_class('article-preview'); ?>>
	<div class="article-thumb-wrap">
		<?php MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');?>
	</div>
	<div class="article-preview-txt">
		<div class="article-preview-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
		<div class="article-preview-line"></div>
		<div class="article-preview-tag"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
	</div>
</div> 