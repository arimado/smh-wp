<?php
/*
Plugin Name: Site Plugin for smh-wp
Description: Site specific code changes for smh-wp
*/
/* Start Adding Functions Below this Line */

?>

<!--
	********************************************
	CUSTOM WIDGETS
	********************************************
 -->

 <!-- RECOMMENDED READING  -->

<?php

// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('Recommended Reading', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Lists everything tagged with "recommend"', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo '<div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div>';

?>

<?php
// This is where you run the code and display the output
get_template_part( 'recommended' ); 
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


/* Stop Adding Functions Below this Line */
?>

<!-- LATEST COOL THING  -->

<?php

// Creating the widget 
class cool_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'cool_widget', 

// Widget name will appear in UI
__('Latest Cool Thing', 'cool_widget_domain'), 

// Widget description
array( 'description' => __( 'Displays posts in the categort of "Cool Thing".', 'cool_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo '<div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div>';

?> 

<?php
// This is where you run the code and display the output
get_template_part( 'cool-thing' ); 
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'cool_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function cool_load_widget() {
	register_widget( 'cool_widget' );
}
add_action( 'widgets_init', 'cool_load_widget' );


/* Stop Adding Functions Below this Line */
?> 


<!--
	********************************************
	MULTIPLE POST THUMBNAILS
	********************************************
 -->

<?php 

if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Secondary Image',
	'id' => 'secondary-image',
	'post_type' => 'post'
	 ) );

	new MultiPostThumbnails(array(
	'label' => 'Cool Thing Image',
	'id' => 'cool-thing-image',
	'post_type' => 'post'
	 ) );

 }

?>

