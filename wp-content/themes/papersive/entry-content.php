<section class="entry-content">
<?php 
if (class_exists('MultiPostThumbnails')) : 
MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
endif;
?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>