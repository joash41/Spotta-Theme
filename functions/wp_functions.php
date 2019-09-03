<?php
    add_theme_support( 'post-thumbnails' );
    //Register Menu
    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu' ),
            )
        );
    }
    add_action( 'init', 'register_my_menus' );

    //Widgets
	add_action( 'widgets_init', 'ntice_widgets_init' );
    function ntice_widgets_init() {
        register_sidebar(array(
            'name' => 'Footer Menu',
            'id'   => 'footer_menu',
            'before_widget' => '',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
            'after_widget'  => '',
        ));
    }
