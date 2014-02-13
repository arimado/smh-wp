<?php get_header(); ?>

<?php get_template_part ( 'featured' ); ?>
<section id="content" role="main">
<div class="content">
<?php $the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php get_template_part( 'index-entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div> 

<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



