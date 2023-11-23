<?php
  function site_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',
      array(
        'width' => 156,
        'height' => 50,
        'flex-width' => true,
        'flex-height' => true
      )
    );

    register_nav_menus(
      array(
        'menu-principal' => 'Menu Principal',
        'menu-footer' => 'Menu Footer'
      )
    );

    // Enable SVG file uploads
    function mytheme_allow_svg_upload($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      $mimes['svgz'] = 'image/svg+xml';
      return $mimes;  
    }
    add_filter('upload_mimes', 'mytheme_allow_svg_upload');

    function mytheme_remove_jquery_migrate($scripts) {
      if (is_admin()) return;
      $scripts->remove('jquery');
      $scripts->add('jquery', false, array('jquery-core'), '3.6.0');
    }
    add_action('wp_default_scripts', 'mytheme_remove_jquery_migrate');

    function my_deregister_jquery() {
      if (!is_admin()) {
          wp_deregister_script('jquery');
      }
    }
    add_action('wp_enqueue_scripts', 'my_deregister_jquery');

    function enqueue_scripts_with_jquery_cdn() {
      // Desregistra la versión integrada de jQuery
      wp_deregister_script('jquery');
  
      // Registra y encola jQuery desde el CDN de Google
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
      wp_enqueue_script('jquery');
  }
  
  // Añade la acción para cargar los scripts con jQuery desde el CDN
  add_action('wp_enqueue_scripts', 'enqueue_scripts_with_jquery_cdn');
  
  }

  add_action('after_setup_theme', 'site_setup');
?>