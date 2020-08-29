<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testwp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside class="col-12 col-lg-3 float-right">

    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
        <ul class="list-style-6 margin-50px-bottom text-small">
            <li><a href="blog-masonry.html">Arts and Entertainment</a><span>12</span></li>
            <li><a href="blog-masonry.html">Blog</a><span>05</span></li>
            <li><a href="blog-masonry.html">Blog Full width</a><span>08</span></li>
            <li><a href="blog-masonry.html">Blog Grid</a><span>10</span></li>
            <li><a href="blog-masonry.html">Branding</a><span>21</span></li>
            <li><a href="blog-masonry.html">Design Tutorials</a><span>09</span></li>
            <li><a href="blog-masonry.html">Designing</a><span>07</span></li>
            <li><a href="blog-masonry.html">Feature</a><span>06</span></li>
            <li><a href="blog-masonry.html">Home Blog</a><span>10</span></li>
            <li><a href="blog-masonry.html">Onepage Fashion</a><span>11</span></li>
            <li><a href="blog-masonry.html">Sample</a><span>06</span></li>
        </ul>
    </div>
    <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
        <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
        <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
        <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
    </div>
    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
        <ul class="latest-post position-relative">
            <li class="media">
                <figure>
                    <a href="blog-masonry.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/back-image2.png" alt=""></a>
                </figure>
                <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
            </li>
            <li class="media">
                <figure>
                    <a href="blog-masonry.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/back-image2.png" alt=""></a>
                </figure>
                <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
            </li>
            <li class="media">
                <figure>
                    <a href="blog-masonry.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/back-image2.png" alt=""></a>
                </figure>
                <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
            </li>
            <li class="media">
                <figure>
                    <a href="blog-masonry.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/back-image2.png" alt=""></a>
                </figure>
                <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
            </li>
        </ul>
    </div>
    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
        <ul class="list-style-6 margin-20px-bottom text-small">
            <li><a href="blog-grid.html">July 2017</a><span>12</span></li>
            <li><a href="blog-grid.html">June 2017</a><span>05</span></li>
            <li><a href="blog-grid.html">May 2017</a><span>08</span></li>
            <li><a href="blog-grid.html">April 2017</a><span>10</span></li>
            <li><a href="blog-grid.html">March 2017</a><span>21</span></li>
            <li><a href="blog-grid.html">February 2017</a><span>09</span></li>
            <li><a href="blog-grid.html">January 2017</a><span>07</span></li>
        </ul>
    </div>
    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
        <div class="d-inline-block width-100">
            <form>
                <div class="position-relative">
                    <input type="email" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your email...">
                    <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope ml-0"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
        <div class="instagram-follow-api">
            <ul id="instaFeed-aside"></ul>
        </div>
    </div>
    <div class="margin-45px-bottom sm-margin-25px-bottom">
        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-banner-01.png" alt="" class="width-100"/></a>
    </div>
</aside>





