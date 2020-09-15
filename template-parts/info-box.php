<?php
/**
 * Template part: info box
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="info-box bg_section">
    <div class="container">

        <div class="row align-items-top text-center">
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('omnie_ikona_1') ) : $image = get_field('omnie_ikona_1'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('o_mnie_strona_tytul_1'); ?></h3>
                    <p><?php echo get_field('o_mnie_strona_opis_1'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('omnie_ikona_2') ) : $image = get_field('omnie_ikona_2'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('o_mnie_strona_tytul_2'); ?></h3>
                    <p><?php echo get_field('o_mnie_strona_opis_2'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="homeoffer__items">
                    <?php if ( get_field('omnie_ikona_3') ) : $image = get_field('omnie_ikona_3'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3><?php echo get_field('o_mnie_strona_tytul_3'); ?></h3>
                    <p><?php echo get_field('o_mnie_strona_opis_3'); ?>
                </div>
            </div>
        </div>

    </div>
</section>