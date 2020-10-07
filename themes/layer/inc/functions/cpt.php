<?php
function create_posttype() {

  $lables = [
    'name' => __('Testimonials'),
    'singular_name' => __('Testimonial'),
    'add_new' => __('Add Testimonial')
  ];

  $args = [
    'labels' => $lables,
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt']
  ];

  register_post_type('testimonials', $args);
}
add_action('init', 'create_posttype');
