<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package testwp
 */

get_header();?>
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-background-1.png');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Post</h1>
                    <span class="text-white-2 opacity6 alt-font">test</span>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
<!-- <?php get_sidebar();?> -->


    <main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
                    <div class="col-12 blog-details-text last-paragraph-no-margin">
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'testwp' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'testwp' ) . '</span> <span class="nav-title">%title</span>',
                )
            );



        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
            </div>
        </div>
    </div>
<?php

get_footer();
