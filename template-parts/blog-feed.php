<?php
/**
 * Template part: blog feed
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="blogfeed bg_section">
    <div class="container">
        <div class="col-md-12 section-title">

            <h2><?php echo get_field('ostatnie_historie_tytul', 'options'); ?> </h2>
            <?php echo get_field('ostatnie_historie_opis', 'options'); ?>
        </div>


        <div class="row">

            <?php 
                        query_posts(array( 
                            'post_type' => 'historie',
                        ) );  
                        ?>
            <?php while (have_posts()) : the_post(); ?>


            <div class="col-md-4">
                <div class="blogfeed__post">
                    <a href="<?php the_permalink() ;?>">
                        <div class="blogfeed__post--content">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                    </a>
                </div>
            </div>
            <?php endwhile;
                    wp_reset_query(); 
                    ?>
        </div>
    </div>
</section>