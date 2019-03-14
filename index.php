
                <?php get_header(); ?>


                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile;
                else : ?>
                    <h3>No Content Found</h3>

                <?php endif;
                ?>


                <?php get_footer(); ?>
