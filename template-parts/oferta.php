<?php
/**
 * Template part: oferta
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>
<?php if ( get_field('oferta_headling') ) : ?>
<section class="oferta">
    <div class="container">
        <h2><?php echo get_field('oferta_headling'); ?></h2>
        <div class="ofertawrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="oferta__card">
                        <?php if ( get_field('oferta_ikona_oferta_1') ) : $image = get_field('oferta_ikona_oferta_1'); ?>

                        <!-- Full size image -->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                        <h3><?php echo get_field('oferta_tytul_oferty_1_'); ?></h3>
                        <p><?php echo get_field('oferta_opis_oferty_1'); ?></p>
                    </div>
                    <div class="oferta__card--bg"
                        style="background: url('<?php echo get_field('oferta_oferta_zdjecie_w_tle_1'); ?>') center center;background-size:cover;">

                    </div>
                </div>

                <div class="col-md-7">
                    <img class="oferta__img" src="<?php echo get_field('oferta_oferta_zdjecie_w_tle_2'); ?>" alt="test">
                    <div class="oferta__card">
                        <?php if ( get_field('oferta_ikona_oferta_2') ) : $image = get_field('oferta_ikona_oferta_2'); ?>

                        <!-- Full size image -->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                        <h3><?php echo get_field('oferta_tytul_oferty_2'); ?></h3>
                        <p><?php echo get_field('oferta_opis_oferty_2'); ?></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row ofertafix">
            <div class="col-md-5">
                <div class="oferta__card">
                    <?php if ( get_field('oferta_ikona_oferta_3') ) : $image = get_field('oferta_ikona_oferta_3'); ?>

                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                    <h3><?php echo get_field('oferta_tytul_oferty_3'); ?></h3>
                    <p><?php echo get_field('oferta_opis_oferty_3'); ?></p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="oferta__card--bg"
                    style="background: url('<?php echo get_field('oferta_oferta_zdjecie_w_tle_3'); ?>') center center;background-size:cover;">
                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>