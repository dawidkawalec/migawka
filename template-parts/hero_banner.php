<?php
/**
 * Template part: hero banner
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>


<section class="herobanner" style="background: url(<?php echo get_field('herobanner_zdjecie_w_tle'); ?>) center center;
    background-size:cover;">
    <div class="container-fluid">
        <?php if ( ! is_page_template('template/kontakt.php')):
    ?>
        <h1><?php the_title() ;?></h1>
        <?php
        endif;
        ?>
    </div>
</section>