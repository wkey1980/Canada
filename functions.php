<?php 

if ( ! function_exists( 'canada_setup' )) :
    function canada_setup() {
        load_textdomain( 'canada', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 );
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
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'style-editor.css' );
        add_theme_support( 'responsive-embeds' );

        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => __( 'Small', 'canada' ),
                'shortName' => __( 'S', 'canada' ),
                'size' => 19.5,
                'slug' => 'small'
            ),
            array(
                'name' => __( 'Normal', 'canada' ),
                'shortName' => __( 'M', 'canada' ),
                'size' => 22,
                'slug' => 'normal'
            ),
            array(
                'name' => __( 'Large', 'canada' ),
                'shortName' => __( 'L', 'canada' ),
                'size' => 36.5,
                'slug' => 'large'
            ),
            array(
                'name' => __( 'Huge', 'canada' ),
                'shortName' => __( 'XL', 'canada' ),
                'size' => 49.5,
                'slug' => 'huge'
            ),
        ));
    }
endif;
add_action( 'after_theme_setup', 'canada_setup' );


function register_canada_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'canada' ),
        'secondary' => __( 'Secondary Menu', 'canada' ),
        'social' => __( 'Social Media Menu', 'canada' )
    ));
}
add_action( 'init', 'register_canada_menus' );













function canada_scripts() {
    wp_enqueue_style( 'default_style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'canada_scripts' );



















require get_template_directory() . '/inc/customizer.php';











