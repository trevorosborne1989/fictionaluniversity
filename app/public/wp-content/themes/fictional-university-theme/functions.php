<?php

function university_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {
  wp_enqueue_script('main-university-js', 
  'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.920bf068e75aa8ef387f.js'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.58e8cf144c54b01b47fc.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('bundled-assets/styles.css'));
  }
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');