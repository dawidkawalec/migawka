<?php
/**
 * Template Name: Opinie
 */

get_header(); ?>

<section class="referencje"
    style="background: url(<?php echo get_field('tlo_dla_sekcji_z_referencjami', 'options'); ?>) center center; background-size:cover;">
    <div class="container-fluid">
        <div class="col-md-12 text-center">

            <?php

            // WP_Query arguments
            $args = array(
                'post_type'              => array( 'opinie' ),
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>


            <div class="referencje__item">
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
                <p><?php the_content() ?></p>
                <?php if ( get_field('referencje_imie') ) : ?>
                <p class="name"><?php echo get_field('referencje_imie'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('referencje_zawod') ) : ?>
                <p class="proffesion"><?php echo get_field('referencje_zawod'); ?></p>
                <?php endif; ?>
            </div>


            <?php
                }
            } else {
                // no posts found
                echo 'nie ma opinii';
            }

            // Restore original Post Data
            wp_reset_postdata();

            ?>


        </div>
    </div>
</section>

<?php
get_footer();