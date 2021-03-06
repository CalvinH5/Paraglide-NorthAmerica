<?php
/**
 * Template Name: News                     
 */

get_header(); ?>
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
    <div class="news page-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="entry-header">
                        <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                    </header><!-- .entry-header -->
    
                    <?php query_posts('cat=0'); ?> 
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                       <!-- <?php the_excerpt(); ?>
                       <a href="<?php echo get_permalink(); ?>"> Read More...</a>
                       
                       <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p> -->
                    <?php endwhile; endif; ?>

                     <?php $i = 1; while (have_posts() && $i < 10) : the_post(); ?>

                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_permalink(); ?>"> Read More...</a>

                        <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

                     <?php $i++; endwhile;  ?>
                        
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();
