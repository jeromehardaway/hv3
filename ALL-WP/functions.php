<?php
function aall_enqueue_assets() {
  wp_enqueue_style( 'aall-core', get_template_directory_uri() . '/style.css', array('aall-app') );
  wp_enqueue_style( 'aall-app', get_template_directory_uri() . '/css/app.css', array() );
  wp_enqueue_style( 'aall-app', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic', array() );

  wp_enqueue_script( 'aall-jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), null, true );
  wp_enqueue_script( 'aall-what-js', get_template_directory_uri() . '/bower_components/what-input/what-input.js', array('aall-jquery', 'aall-foundation-js'), null, true );
  wp_enqueue_script( 'aall-foundation-js', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('aall-jquery'), null, true );
  wp_enqueue_script( 'aall-app-js', get_template_directory_uri() . '/js/app.js', array('aall-jquery', 'aall-foundation-js', 'aall-map-js'), null, true );
  wp_enqueue_script( 'aall-map-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array('aall-jquery', 'aall-foundation-js'), null, true );
   wp_enqueue_script( 'aall-typekit-js', 'https://use.typekit.net/osg0qde.js', array('aall-jquery', 'aall-foundation-js'), null, true );
}


add_action( 'wp_enqueue_scripts', 'aall_enqueue_assets' );

function create_posttype() {
    register_post_type( 'aall_service',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'service'),
            'menu_icon' => 'dashicons-products',
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes')
        )
    );

    register_post_type( 'aall_locations',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Locations' ),
                'singular_name' => __( 'location' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'location'),
            'menu_icon' => 'dashicons-location',
            'supports' => array( 'title', 'thumbnail', 'page-attributes')
        )
    );

  }
  add_action( 'init', 'create_posttype' );

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Settings',
    'menu_title'  => 'Settings',
  ));

}

add_action( 'init', 'create_posttype' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Site Settings ES',
        'menu_title'  => 'Site Settings ES',
    ));

}

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
) );

class AALL_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class='menu vertical nested'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n</ul>\n";
    }
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= "<li><a ". ($depth > 0 ? "class='sub' " : "") ."href='". $item->url ."'". (!empty($item->target) ? " target='". esc_attr($item->target) ."'" : "") .">". $item->title ."</a>";
    }
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
  ?>
