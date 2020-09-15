<?php
/**
 * Template part: formularz kontaktowy
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*/
?>

<section class="formularz_kontaktowy">
    <div class="container">
        <?php if ( get_field('str_kontakt_opis_tytul') ) : ?>
        <div class="col-md-12 section-title">
            <h2>
                <?php echo get_field('str_kontakt_opis_tytul'); ?>
            </h2>
            <?php echo get_field('str_kontakt_opis'); ?>
        </div>
        <?php endif; ?>

        <div class="col-md-12">
            <div class="formularz">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#sesja-slubna" role="tab">
                            <?php if ( get_field('str_kontakt_ikona_tab_1') ) : $image = get_field('str_kontakt_ikona_tab_1'); ?>
                            <!-- Thumbnail image -->
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <p><?php echo get_field('str_kontakt_tytul_tab_1'); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sesja-rodzinna" role="tab">
                            <?php if ( get_field('str_kontakt_ikona_tab_2') ) : $image = get_field('str_kontakt_ikona_tab_2'); ?>
                            <!-- Thumbnail image -->
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <p><?php endif; ?> <?php echo get_field('str_kontakt_tytul_tab_2'); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#inne-sesje" role="tab">
                            <?php if ( get_field('str_kontakt_ikona_tab_3') ) : $image = get_field('str_kontakt_ikona_tab_3'); ?>
                            <!-- Thumbnail image -->
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <p><?php echo get_field('str_kontakt_tytul_tab_3'); ?></p>
                        </a>
                    </li>
                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="sesja-slubna" role="tabpanel">
                        <?php echo do_shortcode('[contact-form-7 id="52" title="Sesja ślubna"]');?>
                    </div>
                    <div class="tab-pane" id="sesja-rodzinna" role="tabpanel">
                        <?php echo do_shortcode('[contact-form-7 id="56" title="Sesja rodzinna"]');?>
                    </div>
                    <div class="tab-pane" id="inne-sesje" role="tabpanel">
                        <?php echo do_shortcode('[contact-form-7 id="57" title="Inna sesja"]');?>
                    </div>
                </div>



            </div>
        </div>


    </div>
</section>