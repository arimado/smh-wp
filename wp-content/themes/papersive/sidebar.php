<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>

</br>

</br>

</br>
asd
<?php

// The Query

$args = array(’cat’ => 2);

$demo_query = new WP_Query( 'cat=2' );

// The Loop
if ( $demo_query->have_posts() ) {
        echo '<ul>';
	while ( $demo_query->have_posts() ) {
		$demo_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
        echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */



wp_reset_postdata();

?> 