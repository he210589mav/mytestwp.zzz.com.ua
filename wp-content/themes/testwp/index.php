<?php acf_form_head(); ?>
<?php
get_header();
?>
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-background-1.png');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog</h1>
                <span class="text-white-2 opacity6 alt-font">test</span>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
<!-- start post content section -->
<main id="primary" class="site-main">
    <?php get_sidebar();?>



</main><!-- #main -->
<div class="container">
    <div class="row">
        <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
            <div class="col-12 blog-details-text last-paragraph-no-margin">
<?php
if ( have_posts() ) :

if ( is_home() && ! is_front_page() ) :
?>
<?php
endif;

    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_type() );
        acf_form(array(

            'post_title' => true,
            'post_content' => true,
            'submit_value' => 'Обновить пост!',
            
        ));
        ?><div class="container">
    <div class="row">
        <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
            <div class="col-12 blog-details-text last-paragraph-no-margin">
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/homepage-option15-image-3.png" alt="" class="width-100 margin-45px-bottom">
            </div>
    </div>
        </div>

<?php
    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?> </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
            <div class="col-12 blog-details-text last-paragraph-no-margin">
                <header>
                    <?php /* The loop */ ?>

                        <?php acf_form(array(
                            'post_id'		=> 'new_post',
                        'post_title' => true,
                        'post_content' => true,
                            'new_post'		=> array(

                                'post_type'		=> 'post',
                                'post_status'		=> 'publish',
                            ),

                            'submit_value'		=> 'Создать новый пост'
                        )); ?>


                </header>

            </div>
    </div>
</div>

                <div class="col-12 d-flex flex-wrap p-0">
                            <div class="col-12 mx-auto text-center margin-80px-tb md-margin-50px-tb sm-margin-30px-tb">
                                <div class="position-relative overflow-hidden width-100">
                                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Related Posts</span>
                                </div>
                            </div>
                            <!-- start post item -->
                            <div class="col-12 col-lg-4 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                                <div class="blog-post blog-post-style1 text-center text-md-left">
                                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                        <a href="blog-post-layout-01.html">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_penpot.png" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">17 july 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a></span>
                                        <a href="blog-post-layout-01.html" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">I try to look at design from a more conceptual standpoint.</a>
                                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end post item -->
                            <!-- start post item -->
                            <div class="col-12 col-lg-4 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post blog-post-style1 text-center text-md-left">
                                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                        <a href="blog-post-layout-02.html">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_penpot.png" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">03 July 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a></span>
                                        <a href="blog-post-layout-02.html" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">Good design accelerates the adoption of new ideas.</a>
                                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end post item -->
                            <!-- start post item -->
                            <div class="col-12 col-lg-4 col-md-6 last-paragraph-no-margin sm-margin-30px-bottom wow fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post blog-post-style1 text-center text-md-left">
                                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                        <a href="blog-post-layout-03.html">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_penpot.png" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">22 June 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a></span>
                                        <a href="blog-post-layout-03.html" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">Design is inherently optimistic. That is its power.</a>
                                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end post item -->
                        </div>

                    </main>

                </div>
            </div>
        </section>
        <!-- end blog content section -->

<?php
get_footer();?>
