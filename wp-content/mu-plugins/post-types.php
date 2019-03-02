<?php

function portfolio_post_types() {

  register_post_type('projects', array(
    'public' => true,
    'supports' => array('title','author','thumbnail','excerpt'),
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));

  register_post_type('Experience', array(
    'public' => true,
    'labels' => array(
      'name' => 'Experience',
      'add_new_item' => 'Add New Job',
      'edit_item' => 'Edit Job',
      'all_items' => 'All Jobs',
      'singular_name' => 'Job'
    ),
    'menu_icon' => 'dashicons-businessman'
  ));

  register_post_type('education', array(
    'public' => true,
    'supports' => array('title','author','thumbnail','excerpt'),
    'labels' => array(
      'name' => 'Education',
      'add_new_item' => 'Add New',
      'edit_item' => 'Edit',
      'all_items' => 'Education',
      'singular_name' => 'Education'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
}

add_action('init', 'portfolio_post_types');