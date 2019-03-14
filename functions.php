<?php 

if (!function_exists('canada_setup')) :
    function canada_setup()
    {
        load_textdomain('canada', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(150, 150);
        register_nav_menus(array(
            'menu-1' => __('Primary Menu', 'canada'),
            'menu-2' => __('Footer Menu', 'canada'),
        ));
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('custom logo', array(
            'height' => 190,
            'width' => 190,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array(
                'site-title',
                'site-description'
            ),

        ));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');
        add_theme_support('style-editor.css');
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_theme_setup', 'canada_setup');

// ? Add Menus
function register_canada_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'canada'),
        'secondary' => __('Secondary Menu', 'canada'),
        'social' => __('Social Media Menu', 'canada')
    ));
}
add_action('init', 'register_canada_menus');



// ? Add Widgets
function canada_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Header Menu', 'canada'),
        'id' => 'header-menu',
        'description' => esc_html__('Add Widgets Here', 'canada'),
        'before-widget' => '<section id="%1$s" class-"widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Social Media', 'canada'),
        'id' => 'social-media',
        'description' => esc_html__('Add Widgets Here', 'canada'),
        'before-widget' => '<section id="%1$s" class-"widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'canada'),
        'id' => 'sidebar',
        'description' => esc_html__('Add Widgets Here', 'canada'),
        'before-widget' => '<section id="%1$s" class-"widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Menu', 'canada'),
        'id' => 'footer-menu',
        'description' => esc_html__('Add Widgets Here', 'canada'),
        'before-widget' => '<section id="%1$s" class-"widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>',
    ));
}
add_action('widgets_init', 'canada_widgets_init');





// function canada_content_width() {

// }
// add_action( 'after_setup_theme', 'canada_content_width', 0 );

















// ? Enqueue Styles & Scripts
function canada_scripts()
{
    wp_enqueue_style('default_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'canada_scripts');



















require get_template_directory() . '/inc/customizer.php';
