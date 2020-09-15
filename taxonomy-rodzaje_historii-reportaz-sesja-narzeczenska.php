<?php
/**
 * The template for displaying taxonomy rodzaje historii
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


get_header(); ?>

<section class="herobanner" style="background: url(<?php echo get_field('historie_zdjecie_w_tle_sekcji_3','options'); ?>) center center;
    background-size:cover;">
    <div class="container-fluid">
        <h1><?php echo get_field('historie_tytul_sekcji_3','options'); ?></h1>
    </div>
</section>

<section class="historiefeed">
    <div class="container">
        <div class="col-md-12 section-title">
            <?php echo get_field('historie_opis','options'); ?>
        </div>
        <div class="row">

            <?php 

$query = new WP_Query( array(
    'post_type' => 'historie',          // name of post type.
    'tax_query' => array(
        array(
            'taxonomy' => 'rodzaje_historii',   // taxonomy name
            'terms' => 3,                  // term id, term slug or term name
        )
    )
) );

while ( $query->have_posts() ) : $query->the_post();
?>

            <div class="col-lg-4 col-md-6">
                <div class="historie__post">
                    <a href="<?php the_permalink();?>">
                        <div class="historie__post--content">
                            <h3><?php echo get_field('historie_tytul_sekcji_3','options'); ?></h3>
                        </div>
                        <img src="<?php echo get_field('historie_zdjecie_3','options'); ?>"
                            alt=" zdjęcie <?php echo get_field('historie_tytul_sekcji_3','options'); ?>">
                    </a>
                </div>
            </div>


            <?php endwhile;

/**
 * reset the orignal query
 * we should use this to reset wp_query
 */
wp_reset_query();

?>


        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/referencje' ) ?>

<?php
get_footer();