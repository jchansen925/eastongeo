<?php

// Add theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('page-attributes');


function enqueue_ionicons_module_in_head() {
  echo '<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>';
}
add_action( 'wp_head', 'enqueue_ionicons_module_in_head' );
// Enqueue CSS
function my_theme_scripts() {

  wp_enqueue_style( 'eastongeo-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap', array(), null );
    
  

    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/menu.js', array(), '1.0', true );

}
add_action('wp_enqueue_scripts', 'my_theme_scripts');



// For backwards compatability with older versions of WordPress: 
if(! function_exists('wp_body_open') ) {
  function wp_body_open() {
      do_action('wp_body_open');
  }
}
