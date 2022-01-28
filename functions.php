<?php 

/* registrera meny */

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Huvudmeny')
    ));
}
/*aktivera stöd för dynamisk header*/
$args = array(
    'width' => 1920,
    'height' => 646,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);
add_theme_support('custom-header', $args);

/* Enable post thumbnails */
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 400, 400, true );

/* Custom sizes */
//add_image_size( 'notis-thumb', 80, 80, true); 
//add_image_size( 'notis-wide', 960, 240, array('center', 'center'));
//add_image_size( 'notis-hero', 300, 300, false);

add_action( 'init', function() {
    add_image_size( 'wpcm_my_custom_listing_image_size', 350, 150, true );
  } );
  
  add_filter( 'wpcm_listings_vehicle_thumbnail_size', function( $image_size ) {
    return 'wpcm_my_custom_listing_image_size';
  } );

  get_template_part('content', 'template_columns');

  // aktivera widget-area
 
  function register_custom_widget_area() {
      register_sidebar(array(
          'id' => 'widget',
          'name' => 'Widget',
           'description' => 'Widget area',
           'before_widget' => '<div id="widget">',
           'after_widget' => '</div>',
           'before_title' => '<h2>',
           'after_title' => '</h2>'
      ));
  }
  add_action( 'widgets_init', 'register_custom_widget_area' );