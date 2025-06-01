<?php 
  add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
});

add_action( 'init', function() {
  register_nav_menus(
  array('mainNav' => 'Menu Oben',)
  );
});

function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($atts, $item, $args) {
    if (isset($args->add_li_class)) {
	$atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $args->add_a_class : $args->add_a_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);



wp_enqueue_style('bt-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css');
wp_enqueue_script('bt-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js');
wp_enqueue_script('my-script', get_theme_file_uri('/scripts.js'));
