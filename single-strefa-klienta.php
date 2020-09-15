<?php
/**
 * Template Name: Strefa Klienta
 */

get_header(); ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">





                <?php
		while ( have_posts() ) : the_post();

			the_content();


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>





            </div>
        </div>
    </div>
</section>
<?php
get_footer();