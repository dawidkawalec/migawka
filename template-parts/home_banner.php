<?php
/**
 * Template part: banner home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="banner">
    <div class="container-fluid">
        <div class="banner__holder">
            <?php if ( get_field('banner_img') ) : $image = get_field('banner_img'); ?>

            <!-- Full size image -->
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="banner__holder--img" />

            <?php endif; ?>

        </div>
    </div>
</section>