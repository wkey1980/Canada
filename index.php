
                <?php get_header(); ?>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'Primary Menu'
                    )); ?>

                <?php wp_nav_menu(array(
                        'theme_location' => 'Secondary Menu'
                    )); ?>

                <?php dynamic_sidebar( 'header-menu' ); ?>



                <?php get_footer(); ?>
