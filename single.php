<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Paraglide_NorthAmerica
 */

get_header(); ?>
	<div class="black-bar"></div>
	<!-- /.black-bar -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
		<!-- /.container -->
			<?php
			while ( have_posts() ) : the_post();

				/*get_template_part( 'template-parts/content', get_post_format() );*/
				the_title('<h1>','</h1>');
				the_content();

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
