<?php
/**
 * Template part: banner o mnie
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>
<?php if ( get_field('home_o_mnie_tytul_sekcji') ) : ?>
<section class="homeomnie bg_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2><?php echo get_field('home_o_mnie_tytul_sekcji'); ?></h2>
                <span class="devider"></span>
                <?php echo get_field('home_o_mnie_opis'); ?>
                <?php if ( get_field('home_o_mnie_zdjecie_pod_tekstem') ) : $image = get_field('home_o_mnie_zdjecie_pod_tekstem'); ?>
                <!-- Full size image -->
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-5">
                <div class="homeomnie__img"
                    style="background:url(<?php echo get_field('home_o_mnie_zdjecie_po_prawej'); ?>) center center; background-size:cover">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>