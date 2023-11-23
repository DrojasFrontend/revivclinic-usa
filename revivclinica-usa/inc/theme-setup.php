<?php
  function site_setup() {
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

    function deregister_qjuery () {
      if (! is_admin ()) {wp_deregister_script ('jquery'); 
    }} 
    add_action ('wp_enqueue_scripts', 'deregister_qjuery');

    function stop_heartbeat () {
      wp_deregister_script ('latido'); 
    }
    add_action ('init', 'stop_heartbeat', 1); 

    function remove_block_library() {
      wp_deregister_style('wp-block-library'); 
    } 
    add_action('wp_enqueue_scripts', 'remove_block_library');

    remove_action ('wp_head', 'rsd_link');
    remove_action ('wp_head', 'print_emoji_detection_script', 7); 
    remove_action ('wp_print_styles', 'print_emoji_styles'); 
    remove_action ('admin_print_scripts', 'print_emoji_detection_script'); 
    remove_action ('admin_print_styles', 'print_emoji_styles');
    remove_action ('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action ('wp_head', 'wp_generator');
  }

  add_action('after_setup_theme', 'site_setup');
?>