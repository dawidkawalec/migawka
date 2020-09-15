<?php
/**
 * Template Name: Opinie
 */

get_header(); ?>

<section class="herobanner" style="background: url(<?php echo get_field('zdjecie_w_tle_horyzontalny_prostokat'); ?>) center center;
    background-size:cover;">
    <div class="container-fluid">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<?php get_template_part( 'template-parts/historie-nav' ) ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if ( get_field('poj_historia_opis') ) : ?>
                <?php echo get_field('poj_historia_opis'); ?>
                <?php endif; ?>
                <div class="poj-historia-galeria">




                    <?php

// Check value exists.
if( have_rows('galeria_elementy') ):

    // Loop through rows.
    while ( have_rows('galeria_elementy') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'galeria_zdjec_pojedyncze' ):
           

                $images = get_sub_field('poj_historia_galeria_zdjec');

                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endforeach; ?>
                    <?php endif; 
        // Case: Download layout.
        elseif( get_row_layout() == 'film_mp4_zamiast_gif' ): 
            
            // Do something...

?>
                    <video width="100%" loop autoplay muted style="margin-bottom:-5px">
                        <source src="<?php echo get_sub_field('film_galeria_gif'); ?>" type="video/mp4">
                        Twoja przeglądarka nie obsługuje html5 video. Pobierz nowszą przeglądarkę.
                    </video>
                    <?php
            


 // Case: Download layout.
        elseif( get_row_layout() == 'zdjecie_podwojne' ): 
            // Do something...

?>




                    <div class="historie-poj-zdj-podwojne">
                        <?php if ( get_sub_field('zdjecie_po_lewej') ) : $image = get_sub_field('zdjecie_po_lewej'); ?>
                        <!-- Full size image -->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="left"
                            style="width: 50%" />
                        <?php endif; ?>

                        <?php if ( get_sub_field('zdjecie_po_prawej') ) : $image = get_sub_field('zdjecie_po_prawej'); ?>
                        <!-- Full size image -->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="right"
                            style="width: 50%" />
                        <?php endif; ?>


                    </div>



                    <?php





        endif;

        


        

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>






                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();