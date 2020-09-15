<?php
/**
* Template Name: Oferta
 */

get_header(); ?>

<?php echo get_field('field_name'); ?>

<section class="herobanner" style="background: url('<?php echo get_field('oferta_zdjecie_w_tle'); ?>') center center;
    background-size:cover;">
    <div class="container-fluid">
        <h1><?php the_title() ;?></h1>
    </div>
</section>

<?php get_template_part( 'template-parts/oferta' ) ?>

<?php get_template_part( 'template-parts/pricecards' ) ?>

<?php get_template_part( 'template-parts/home_omnie' ) ?>

<?php get_template_part( 'template-parts/referencje' ) ?>

<?php get_template_part( 'template-parts/blog-feed' ) ?>

<?php
get_footer();