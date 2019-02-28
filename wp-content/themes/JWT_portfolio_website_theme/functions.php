<?php

function portfoli_files() {
    wp_enqueue_script('main-university-js', '/code.jquery.com/jquery-3.3.1.min.js', NULL, microtime(), true);
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('boostrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts-saira', '//fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700');
    wp_enqueue_style('google-fonts-Muli', '///fonts.googleapis.com/css?family=Muli:400,400i,800,800i');
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'portfoli_files');

function portfolio_setup() {
    add_theme_support('title-tag');
}
  
add_action('after_setup_theme', 'portfolio_setup');

?>