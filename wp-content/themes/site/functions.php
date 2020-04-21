<?php
  add_action('wp_enqueue_scripts', 'site_scripts');

  function site_scripts(){
    wp_enqueue_style('site-style', get_stylesheet_uri());
    wp_enqueue_script('site-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
  };

  add_theme_support( 'custom-logo' ); 
?>