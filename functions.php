<?php 
  add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
});


wp_enqueue_style('bt-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css');
wp_enqueue_script('bt-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js');
wp_enqueue_script('my-script', get_theme_file_uri('/scripts.js'));
