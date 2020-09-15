<?php
/**
 * Template part: o mnie
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>
<?php if ( get_field('o_mnie_strona_tytul_sekcji') ) : ?>
<section class="o-mnie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <?php if ( get_field('o_mnie_strona_zdjecie') ) : $image = get_field('o_mnie_strona_zdjecie'); ?>
                <!-- Full size image -->
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-8">





                <h1><?php echo get_field('o_mnie_strona_tytul_sekcji'); ?></h1>
                <p class="small">
                    <?php echo get_field('o_mnie_strona_opis_maly_1'); ?>
                </p>
                <p class="big">
                    <?php echo get_field('o_mnie_strona_opis_duzy'); ?>
                </p>
                <p class="small">
                    <?php echo get_field('o_mnie_strona_opis_maly_2'); ?>
                </p>
                <a href="<?php echo get_field('o_mnie_strona_cta_link'); ?>" class="btn__dark">
                    <?php echo get_field('o_mnie_strona_cta_tekst'); ?></a>
            </div>
        </div>



    </div>
    <div class="container-fluid">
        <div class="row align-items-start gallery">



            <?php 

$images = get_field('o_mnie_strona_galeria');

if( $images ): ?>

            <?php foreach( $images as $image ): ?>
            <div class="col-lg-2 col-md-3 col-4">
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>