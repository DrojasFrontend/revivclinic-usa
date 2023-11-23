<?php
  function enqueue_style_scripts() {
    global $post;
    $isHome = is_front_page() || is_home();

    // Style WP remove
    wp_deregister_style('wp-block-library');

    // Styles
    wp_enqueue_style('mainCss',  CSS_BASE . 'main.css', array(), '1.0.0');

    if ($isHome) {
      wp_enqueue_style('homeCss',  CSS_BASE . 'home.css', array(), '1.0.0');
    } else if (!empty($post) && $post->post_type == 'page') {
      if ($post->post_name == 'soluciones') {
        wp_enqueue_style('solutionsCss',  CSS_BASE . 'solutions.css', array(), '1.0.0');
      } 
    }

    // Scripts
    wp_enqueue_script('mainJs', JS_BASE . 'main.js', array('jquery'), '1.0.0', true);

    wp_localize_script('mainJs', 'scriptObj',
      array(
        'ajaxurl' => ADMIN_AJAX,
        'nonce' => wp_create_nonce(AJAX_NONCE),
        // 'url_base' => base_url('/')
      )
    );
  }
  add_action('wp_enqueue_scripts', 'enqueue_style_scripts');
?>