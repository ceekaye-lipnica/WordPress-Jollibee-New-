<?php
function blog_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('title');
    add_theme_support('custom-logo');
    
    add_image_size('banner-sm', 220, 150, true );

    register_nav_menu( 'header_menu', 'Header Menu');
    register_nav_menu( 'footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'blog_support');
