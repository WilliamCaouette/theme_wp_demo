<?php

    // lier les feuilles de styles et les fonts au projet

    function simplenews_enqueu_styles(){

        wp_enqueue_style( 'latofont', "'https://fonts.googleapis.com/css2?family=Lato&display=swap'" );
        wp_enqueue_style( 'merryweatherfont', "'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap'" );
        wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont', 'merryweatherfont') );
    }

    add_action( 'wp_enqueue_scripts', 'simplenews_enqueu_styles' );

    function simplenews_add_theme_support(){
        add_theme_support( "post-thumbnails" );
        add_theme_support( "title-tag" );
    }

    add_action( 'after_setup_theme', 'simplenews_add_theme_support' );

    function simplenews_register_menus(){
        register_nav_menus(array('main-menu' => __('Menu principal')));
    }

    add_action('after_setup_theme', 'simplenews_register_menus' );
?>