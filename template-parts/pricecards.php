<?php
/**
 * Template part: pricecards
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="pricecards" style="background: url('<?php echo get_field('zdjecie_w_tle_priceboxy'); ?>') center center;
    background-size:cover;">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class=" pricecards__card">
                    <p class="intro"><?php echo get_field('oferta_tekst_nad_tytulem_1'); ?></p>
                    <h3><?php echo get_field('oferta_tytul_pricebox_1'); ?></h3>
                    <ul>
                        <?php if ( have_rows('oferta_lista_pricebox_1') ) : ?>
                        <?php while( have_rows('oferta_lista_pricebox_1') ) : the_row(); ?>
                        <li><?php the_sub_field('item'); ?></li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="/kontakt/" class="btn__dark"><?php echo get_field('btn_pricebox_tekst_1'); ?></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class=" pricecards__card">
                    <p class="intro"><?php echo get_field('oferta_tekst_nad_tytulem_2'); ?></p>
                    <h3><?php echo get_field('oferta_tytul_pricebox_2'); ?></h3>
                    <ul>
                        <?php if ( have_rows('oferta_lista_pricebox_2') ) : ?>
                        <?php while( have_rows('oferta_lista_pricebox_2') ) : the_row(); ?>
                        <li><?php the_sub_field('item'); ?></li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="/kontakt/" class="btn__dark"><?php echo get_field('btn_pricebox_tekst_2'); ?></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class=" pricecards__card">
                    <p class="intro"><?php echo get_field('oferta_tekst_nad_tytulem_3'); ?></p>
                    <h3><?php echo get_field('oferta_tytul_pricebox_3'); ?></h3>
                    <ul>
                        <?php if ( have_rows('oferta_lista_pricebox_3') ) : ?>
                        <?php while( have_rows('oferta_lista_pricebox_3') ) : the_row(); ?>
                        <li><?php the_sub_field('item'); ?></li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="/kontakt/" class="btn__dark"><?php echo get_field('btn_pricebox_tekst_3'); ?></a>
                </div>
            </div>
        </div>

    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php echo get_field('oferta_pod_pb_tytul'); ?></h2>
                <span class="devider"></span>
                <?php echo get_field('oferta_pod_pb_tekst'); ?>
            </div>
        </div>
    </div>
</section>