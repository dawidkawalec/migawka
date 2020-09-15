<?php
/**
 * Template part: banner home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<?php if ( get_field('home_faq_tytul_sekcji') ) : ?>



<section class="homefaq">
    <div class="container">
        <div class="col-md-12 text-center">


            <h2><?php echo get_field('home_faq_tytul_sekcji'); ?></h2>
            <span class="devider"></span>
            <?php echo get_field('home_faq_opis_secji'); ?>
        </div>
        <div class="homefaq_wrapper">
            <div class="homefaq__content">
                <div id="accordion">


                    <?php if ( have_rows('home_faq_pytania') ) : ?>

                    <?php while( have_rows('home_faq_pytania') ) : the_row(); ?>


                    <div class="faq">
                        <div class="faq-header" id="heading<?php the_sub_field('liczba_porzadkowa'); ?>">
                            <h5 class="mb-0">
                                <a class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapse<?php the_sub_field('liczba_porzadkowa'); ?>"
                                    aria-expanded="true"
                                    aria-controls="collapse<?php the_sub_field('liczba_porzadkowa'); ?>">
                                    <?php the_sub_field('pytanie'); ?>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse<?php the_sub_field('liczba_porzadkowa'); ?>" class="collapse"
                            aria-labelledby="heading<?php the_sub_field('liczba_porzadkowa'); ?>"
                            data-parent="#accordion">
                            <div class="faq-body">
                                <?php the_sub_field('odpowiedz'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>



                </div>

            </div>
            <?php if ( get_field('home_faq_zdjecie') ) : $image = get_field('home_faq_zdjecie'); ?>

            <!-- Full size image -->
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>