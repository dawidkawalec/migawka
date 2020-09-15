<?php
/**
 * Template part: banner offer
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>
<?php if ( get_field('home_oferta_tyul_1') ) : ?>
<section class="homeoffer">
    <div class="container">
        <div class="row align-items-top text-center">
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('home_oferta_ikona_1') ) : $image = get_field('home_oferta_ikona_1'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('home_oferta_tyul_1'); ?></h3>
                    <p><?php echo get_field('home_oferta_opis_1'); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('home_oferta_ikona_2') ) : $image = get_field('home_oferta_ikona_2'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('home_oferta_tyul_2'); ?></h3>
                    <p><?php echo get_field('home_oferta_opis_2'); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('home_oferta_ikona_3') ) : $image = get_field('home_oferta_ikona_3'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('home_oferta_tyul_3'); ?></h3>
                    <p><?php echo get_field('home_oferta_opis_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>