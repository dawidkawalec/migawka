<?php
/**
 * Template part: oferta home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>
<?php if ( get_field('oferta_tytul_sekcji') ) : ?>
<section class="ofertah">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2> <?php echo get_field('oferta_tytul_sekcji'); ?></h2>
            <span class="devider"></span>
            <?php echo get_field('oferta_opis_sekcji'); ?>
        </div>
        <div class="row">
            <div class="col-lg-6 p-t-b-15">
                <div class="row">
                    <div class="col-md-6 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_1'); ?>">
                            <div class="ofertah_smallwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_1'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_1'); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_2'); ?>">
                            <div class="ofertah_smallwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_2'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_2'); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_3'); ?>">
                            <div class="ofertah_bigwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_3'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_3'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-t-b-15">
                <div class="row">
                    <div class="col-md-12 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_4'); ?>">
                            <div class="ofertah_bigwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_4'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_4'); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_5'); ?>">
                            <div class="ofertah_smallwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_5'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_5'); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 p-t-b-15">
                        <a href="<?php echo get_field('oferta_link_6'); ?>">
                            <div class="ofertah_smallwrapper"
                                style="background:url(<?php echo get_field('oferta_zdjecie_6'); ?>) center center; background-size:cover">
                                <p><?php echo get_field('oferta_tekst_6'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>