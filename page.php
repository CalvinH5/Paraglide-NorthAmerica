<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Paraglide_NorthAmerica
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="black-bar"></div>
			<!-- /.black-bar -->
				<div class="page-container">
				<div class="white-box"></div>
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}else{
						echo "<div class=\"page-background\"></div>";
					} 
				?>
				</div>
			
			<!-- /.page-img -->
			<div class="container page-layout">
			<!-- /.container -->
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					/*// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;*/

				endwhile; // End of the loop.
				?>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
