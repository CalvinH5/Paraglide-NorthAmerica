<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Paraglide_NorthAmerica
 */

get_header(); ?>

    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                
                     <?php $i = 1; while (have_posts() && $i < 3) : the_post(); ?>

                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_content(); ?>
                        <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

                     <?php $i++; endwhile;  ?>
                        
                </div>
            </div>
        </div>
    </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			 <section class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="about-us-content col-md-6">
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="about-us-content col-md-6">
                        <h3><?php echo get_theme_mod('about_us_title'); ?></h3>

                        <p><?php echo get_theme_mod('about_us_content'); ?></p>

                        <a class="main-cta" href="#"><?php echo get_theme_mod('about_tom_btn_title'); ?></a>
                    </div>
                    <!-- /.col-md-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.about-us -->

        <section class="events-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="feed-plugin">
                            <h4>Follow Us</h4>
                        </div>
                        <!-- /.feed-plugin -->
                    </div> 
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="feed-plugin">
                            <h4>Follow Us</h4>
                        </div>
                        <!-- /.feed-plugin -->
                    </div> 
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="feed-plugin">
                            <h4>Follow Us</h4>
                        </div>
                        <!-- /.feed-plugin -->
                    </div> 
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="feed-plugin">
                            <h4>Follow Us</h4>
                        </div>
                        <!-- /.feed-plugin -->
                    </div> 
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.events-info -->

        <section class="pilot-service">
            <div class="container">
                <p class="lead"><?php echo get_theme_mod('shop_tagline_1'); ?></p>

                <p><em><?php echo get_theme_mod('shop_tagline_2'); ?></em></p>

                <a class="main-cta" href="#"><?php echo get_theme_mod('shop_btn_title'); ?></a>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.pilot-service -->


        <section class="brands">
            <div class="container">
                <ul class="brand-list">
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image1'); ?>" alt="" width="100"></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image2') ?>" alt="" width ="100"></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image3') ?>" alt="" width="100"></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image4') ?>" alt="" width="100"></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image5') ?>" alt="" width="100"></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_mod('shop_image6') ?>" alt="" width="100"></a></li>
                </ul>
                <!-- /.brand-list -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.brands -->

        <section class="latest-videos">
            <div class="container">
                <h3><?php echo get_theme_mod('latest_videos_title'); ?></h3>

                <iframe width="650" height="410"
                src="http://www.youtube.com/embed/QGfJdzNNHgY?autoplay=0">
                </iframe>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.latest-videos -->

        <section class="about-owner">
            <div class="container">
                <div class="col-md-6">
                    <img src="<?php echo get_theme_mod('about_tom_image'); ?>" alt="Tom Sliepen" height="<?php echo get_theme_mod('about_tom_image_size'); ?>">
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <h3><?php echo get_theme_mod('about_tom_title'); ?></h3>

                    <p><?php echo get_theme_mod('about_tom_content'); ?></p>

                    <a href="" class="main-cta"><?php echo get_theme_mod('about_tom_btn_title'); ?></a>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.about-owner -->

        <section class="contact-us">
            <div class="container">
                <h3><?php echo get_theme_mod('contact_title'); ?></h3>

                <p class="lead"><?php echo get_theme_mod('contact_content'); ?></p>
                <a href="#" class="main-cta"><?php echo get_theme_mod('contact_btn_title'); ?></a>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-us -->
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();