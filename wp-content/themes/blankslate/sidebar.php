<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>
asd
<?php

// The Query

$args = array(
        ’cat’ => ’-1’);

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
        echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
        echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>