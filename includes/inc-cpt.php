<?php
function jollibee_custom_post(){
    $food_label = array(
    'name'     => __('Foods', 'textdomain'),
    'singular_name' => __('Food', 'textdomain'),
    'add_new'    => __('Add Food', 'textdomain'),
    'edit_item'   => __('Edit Food', 'textdomain'),
    'add_new_item' => __('Add New Food', 'textdomain'),
    'all_items'   => __('Foods', 'textdomain'),
    );
    $foods_args = array(
    'labels' => $food_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui' => true,
    'supports' => array('title')
    );
    register_post_type('foods', $foods_args);

}
        
        
add_action('init', 'jollibee_custom_post');