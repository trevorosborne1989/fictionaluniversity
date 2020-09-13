<?php

function university_post_types() {
  register_post_type('event', array(
    'show_in_rest' => true,
    'supports' => array(
      'title', 'editor', 'excerpt', // Regular blogs already have this and the dit function is in admin site. This adds excerpt modifying tool to this custom post in admin as well.
    ), 
    'rewrite' => array(
      'slug' => 'events'
    ),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'university_post_types');

