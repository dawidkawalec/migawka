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
            <div class="col-md-4">
                <div class="blogfeed__post">
                    <a href="#">
                        <div class="blogfeed__post--content">
                            <h3>Mroźny poranek</h3>
                        </div>
                        <img src="/wp-content/uploads/2020/03/square.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blogfeed__post">
                    <a href="#">
                        <div class="blogfeed__post--content">
                            <h3>Mroźny poranek</h3>
                        </div>
                        <img src="/wp-content/uploads/2020/03/square.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blogfeed__post">
                    <a href="#">
                        <div class="blogfeed__post--content">
                            <h3>Mroźny poranek</h3>
                        </div>
                        <img src="/wp-content/uploads/2020/03/square.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>