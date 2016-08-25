<?php
add_theme_support('menus');

//Scripts and styles
function coderslab_scripts() {
	//Bootstrap JS
	wp_enqueue_script('boot', get_stylesheet_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	//Map JS
	wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBzT2Gw2t_jzZb5B6rYrSofdCbyI-zfxMs', array(), '1.0.0', true);
	wp_enqueue_script('maps', get_stylesheet_directory_uri() . '/js/map.js', array('jquery', 'map'), '1.0.0', true);

	//Main JS
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'));


	}
add_action( 'wp_enqueue_scripts', 'coderslab_scripts' );

function coderslab_styles() {
	//Bootstrap JS
	wp_enqueue_style('boot', get_stylesheet_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css');


	//Main CSS
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css');

	}
add_action( 'wp_enqueue_scripts', 'coderslab_styles' );




// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(
    	'header' => __( 'Gorne menu' ),
    	'footer' => __( 'Dolne menu' ),
			'side' => __( 'Menu boczne' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
