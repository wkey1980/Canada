<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-links screen-reader-text" href="#content"><?php _e( 'Skip to content', 'canada' ) ?></a>

            <header id="masthead" class="site-header">
                <h1>Header Content</h1>
            </header><!-- /#masthead /.site-header -->

            <div id="content" class="site-content">
            