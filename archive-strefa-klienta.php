<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section class="herobanner" style="background: url(<?php echo get_field('strefa_klienta_zdjecie_w_tle','options'); ?>) center center;
    background-size:cover;">
    <div class="container-fluid">
        <h1><?php post_type_archive_title() ;?></h1>
    </div>
</section>





<section class="historiefeed">
    <div class="container">
        <div class="col-md-12 section-title">
            <h2><?php echo get_field('strefa_klienta_podtytul','options'); ?></h2>
            <?php echo get_field('strefa_klienta_opis','options'); ?>
        </div>
        <div class="row">


            <?php 
                        query_posts(array( 
                            'post_type' => 'strefa-klienta',
                        ) );  
                        ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php the_permalink() ;?>">
                        <div class="historie__post--content">
                            <h3><?php the_title() ?></h3>
                        </div>

                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" zdjęcie <?php the_title() ?>">
                    </a>
                </div>
            </div>

            <?php endwhile;
                    wp_reset_query(); 
                    ?>

        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/referencje' ) ?>

<?php
get_footer();