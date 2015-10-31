<?php


/**
 *  Blog setup functionality
 */
function blog_setup() 
{
    // Add theme feature title tag
    add_theme_support('title-tag');

	// Add feature image support
	add_theme_support('post-thumbnails');
	add_image_size('post-image', 420, 420, true);
    add_image_size('single-image', 420, 420, true);

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'categories' => __('Categories')
    ));
}

add_action('after_setup_theme', 'blog_setup');


/**
 *  Blog scripts
 */
function blog_scripts() 
{
	wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'blog-js', get_template_directory_uri() . '/js/main.js', array(), '19092015', true );
}

add_action('wp_enqueue_scripts', 'blog_scripts');


// Excerpt length
function custom_excerpt_length() 
{
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);


function theme_enqueue_script() 
{
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_script');
