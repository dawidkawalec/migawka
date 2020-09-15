<?php
/**
 * Template part: banner home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="referencje"
    style="background: url(<?php echo get_field('tlo_dla_sekcji_z_referencjami', 'options'); ?>) center center; background-size:cover;">
    <div class="container-fluid">
        <div class="col-md-12 text-center">
            <div class="swiper-referencje">
                <div class="swiper-wrapper">
                    <?php 
                        query_posts(array( 
                            'post_type' => 'opinie',
                        ) );  
                        ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="swiper-slide">
                        <div class="referencje__item">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                            <p><?php the_content() ?></p>
                            <?php if ( get_field('referencje_imie') ) : ?>
                            <p class="name"><?php echo get_field('referencje_imie'); ?></p>
                            <?php endif; ?>
                            <?php if ( get_field('referencje_zawod') ) : ?>
                            <p class="proffesion"><?php echo get_field('referencje_zawod'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_query(); 
                    ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper('.swiper-referencje', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 4500,
            disableOnInteraction: true,
        },
    }

);
</script>