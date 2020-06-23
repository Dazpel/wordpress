<?php


//CSS and JS files

function gt_setup()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, '1.0', 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

//Adding Theme Support

function gt_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array(
            'comment-list', 'comment-form', 'search-form'
        )
    );
}

add_action( 'after_setup_theme', 'gt_init');
