
<?php

/***************************************************************************************************************/
// Widget to show varying list categories depending on login status  //

function tolka_categories_load_widget() {
    register_widget( 'tolka_categories_widget' );
}
add_action( 'widgets_init', 'tolka_categories_load_widget' );

// Creating the widget
class tolka_categories_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'tolka_categories_widget',

// Widget name will appear in UI
__('List of Categories', 'tolka_categories_widget_domain'),

// Widget description
array( 'description' => __( 'Show list of categories depending on login status', 'tolka_recent_posts_widget_domain' ), )
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

//before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
echo '<ul>';


if(is_user_logged_in()) { }

$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 if(is_user_logged_in()) {
foreach( $categories as $category ) {
    $category_link = sprintf(
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
    $cat_id = $category->cat_ID;
    echo '<li class="cat-item cat-item-' . $cat_id . '">' . sprintf( $category_link ) . '<li> ';
}
}
else {
 foreach( $categories as $category ) {
    $cat_id = $category->cat_ID;

switch ($cat_id) {
    case 24:
        break;
    default:
            $category_link = sprintf(
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
        );
        echo '<li class="cat-item cat-item-' . $cat_id . '">' . sprintf( $category_link ) . '</li> ';
}
}
}
echo '</ul>';
wp_reset_query();
echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'tolka_recent_posts_widget_domain' );
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
}



