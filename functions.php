<?php

    // lier les feuilles de styles et les fonts au projet

    function simplenews_enqueu_styles(){

        wp_enqueue_style( 'latofont', "'https://fonts.googleapis.com/css2?family=Lato&display=swap'" );
        wp_enqueue_style( 'merryweatherfont', "'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap'" );
        wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont', 'merryweatherfont') );

        wp_enqueue_style( 'splidecss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css');
        wp_enqueue_script( 'splidejs','https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js');
        wp_enqueue_script( 'mainjs',    get_template_directory_uri().'/js/main.js', array('splidejs'));

        wp_enqueue_script( 'lightboxjs', get_template_directory_uri().'/js/simpleLightbox.min.js');
        wp_enqueue_style( 'lightboxcss', get_template_directory_uri().'/styles/simpleLightbox.min.css');
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

    function simplenews_widgets_init($id){

        register_sidebar( array(
            'name'=>'Widget 1',
            'id' => 'widget-1',
            'description' => 'Widget affiché en haut du Sidebar',
            'before_widget' => '<div class="side-widget">',
            'after_widget'=>'</div>'
        ) );
        register_sidebar( array(
            'name'=>'Widget 2',
            'id' => 'widget-2',
            'description' => 'Widget affiché en haut du Sidebar',
            'before_widget' => '<div class="side-widget">',
            'after_widget'=>'</div>'
        ) );
    }

    add_action('widgets_init', 'simplenews_widgets_init' );

?>