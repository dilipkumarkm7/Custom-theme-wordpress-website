<?php
function script_homepage_enqueue_styles()
{
  wp_enqueue_style('dk-theme', get_stylesheet_uri());
  wp_enqueue_script('dk-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'script_homepage_enqueue_styles');
function create_testimonial_cpt() {
    register_post_type('testimonial', array(
        'label' => 'Testimonials',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-quote',
    ));
}
add_action('init', 'create_testimonial_cpt');