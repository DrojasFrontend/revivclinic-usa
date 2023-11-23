<?php

function enqueue_assets() {

  // Registrar los archivos JS y CSS
  wp_register_script( 'main-js', JS_BASE . 'main.js', array('jquery'), '1.0.0', true );
  wp_register_style( 'main-css', CSS_BASE . 'main.css', array(), '1.0.0' );

  // Home page CSS
  wp_register_style( 'home-css', CSS_BASE . 'home.css', array(), '1.0.0' );
  
  // Encolar los archivos en el frontend
  wp_enqueue_script( 'main-js' );
  wp_enqueue_style( 'main-css' );

  if ( is_front_page() || is_home() ) {
    wp_enqueue_style( 'home-css' ); 
  }

}
add_action( 'wp_enqueue_scripts', 'enqueue_assets' );