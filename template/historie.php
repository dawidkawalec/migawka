<?php
/**
* Template Name: Historie
 */

get_header(); ?>

<section class="herobanner" style="background: url(<?php echo get_field('historie_zdjecie_w_tle','options'); ?>) center center;
    background-size:cover;">
    <div class="container-fluid">
        <!--<h1><?php the_title() ;?></h1>-->
    </div>
</section>

<section class="historiefeed">
    <div class="container">
        <div class="col-md-12 section-title">
            <h2><?php echo get_field('historie_podtytul','options'); ?></h2>
            <?php echo get_field('historie_opis','options'); ?>
        </div>
        <div class="row">

            <?php if ( get_field('historie_tytul_sekcji_1','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_1','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_1','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_1','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_1','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('historie_tytul_sekcji_2','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_2','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_2','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_2','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_2','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('historie_tytul_sekcji_3','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_3','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_3','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_3','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_3','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('historie_tytul_sekcji_4','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_4','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_4','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_4','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_4','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('historie_tytul_sekcji_5','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_5','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_5','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_5','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_5','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('historie_tytul_sekcji_6','options') ) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php echo get_field('historie_link_sekcji_6','options'); ?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_6','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_6','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_6','options'); ?>">
                    </a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/referencje' ) ?>

<?php
get_footer();