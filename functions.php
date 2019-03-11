<?php 

function canada_setup() {
    load_textdomain( 'canada', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' 150, 150, array(
        'center', 'center'
    ));
    register_nav_menus( array(
        'menu-1' => __( 'Primary Menu', 'canada' ),
        'menu-2' => __( 'Footer Menu', 'canada' ),
    ));
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support( 'custom logo', array(
        'height' => 190,
        'width' => 190,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array(
            'site-title',
            'site-description'
        ),

    ));
    
}
add_action( 'after_theme_setup', 'canada_setup' );

require get_template_directory() . '/inc/customizer.php';