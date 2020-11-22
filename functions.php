<?php

    function theme_support() {
        // add_theme_support function registers theme support for given features
        // adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support( 'post-thumbnails' );
    }
    
    add_action('after_setup_theme', 'theme_support');

    //add menu option
    function theme_menus() {
        $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );
        register_nav_menus($locations);
    }
    add_action('init', 'theme_menus');

    function enqueue_style() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('custom_style', get_stylesheet_uri(), array('bootstrap_style'), $version, 'all');
        wp_enqueue_style('bootstrap_style', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", '4.4.1', 'all');
        wp_enqueue_style('fontawesome_cdn', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", '5.13.0', 'all');
    }
add_action('wp_enqueue_scripts', 'enqueue_style');


    function enqueue_script() {
        
        wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
        wp_enqueue_script('custom-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0.0', true);
    }

add_action('wp_enqueue_scripts', 'enqueue_script');

function area_for_widgets() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title'  => '',
            'before_widget'=>'',
            'after_widget' => '',
            'name'          => 'Sidebar Area',
            'id'            => 'sidebar-1',
            'description'   => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title'  => '',
            'before_widget'=>'',
            'after_widget' => '',
            'name'          => 'Footer Area',
            'id'            => 'sidebar-2',
            'description'   => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'area_for_widgets');