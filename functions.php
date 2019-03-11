<?php 

function canada_theme_setup() {

}
add_action( 'after_theme_setup', 'canada_theme_setup' );

require get_template_directory() . '/inc/customizer.php';