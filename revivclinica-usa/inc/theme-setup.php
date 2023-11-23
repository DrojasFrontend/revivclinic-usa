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

    function generate_category_color() {
      return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

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
  
  }

  add_action('after_setup_theme', 'site_setup');
?>