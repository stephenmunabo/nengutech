<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

get_header();


?>


<style>
    .register-area {
        background: #fff;
        padding: 4px 0;
    }
</style>


<!-- Hero area start -->

<div class="hero-area">
        <img class="hero-bg-main" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-texts">
                        <h2>We find, train, and coach
                            the workforce leaders of
                            tomorrow </h2>
                        <p>At Nengu tech, we aim to become the bridge between talented professionals and industry-leading companies.</p>
                        <a href="" data-toggle="modal" data-target="#cta-modal" class="site-btn">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero area end -->


    <!-- clients area start -->

    <div class="clients-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-all-texts">
                        <h3>Our Client</h3>
                        <div class="clients-logos">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-1.svg" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-2.svg" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-3.svg" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-4.svg" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-5.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- clients area end -->


    <!-- About us area start -->

    <div class="about-us-area">
        <img class="sp-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-1.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>About Us</h4>
                        <h2>We Are a Cutting Edge Digital Agency</h2>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="para-texts">
                        <p>At Nengu Tech, we are a group of engineers and technology enthusiasts who understand every aspect of the software development lifecycle. This gives us a unique perspective when it comes to training, preparing, and placing professionals across mid to large scales organizations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-slider-wrp">
                        <div class="sldier-top-title">
                            <h3>What sets us apart for the rest?</h3>
                        </div>
                        <div class="about-slider owl-carousel">
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We understand the ask</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We have worked with the technology</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We know what it takes</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We understand the ask</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We have worked with the technology</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-single-sldier-item">
                                <div class="about-slider-inner">
                                    <h4>We know what it takes</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/e-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About us area end -->


    <!-- our services area start -->

    <div class="our-services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Our Services</h4>
                        <h2>We offer a wide range of services</h2>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="para-texts">
                        <p>We are able to help you with the latest high tech solutions, thanks to our company culture, which is built by everyday learning and self - improvement from each and every single task.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Training & <br>Staffing</h4>
                            <p>We find and train technology professionals for the leading jobs in the market.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Mobile and Web <br> Development</h4>
                            <p>We are ready to modernize or completely redesign web interfaces to align them with the evolving needs of the end-users and industry standards.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Brand <br> Designer</h4>
                            <p>We develop engaging, innovative, out-of-the-box ideas, and user experiences that spark powerful consumer-brand relationships.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- our services area end -->


    <!-- Inner action area start -->

    <div class="inner-action-area">
        <img class="inner-img-main" src="<?php echo get_template_directory_uri(); ?>/assets/img/inner-img.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-texts">
                        <h2>Jumpstart a new career
                            in cloud computing
                            today! </h2>
                        <p>We will train you, provide hands-on projects as well as coach you during pre and post-employment.</p>
                        <a href="" data-toggle="modal" data-target="#cta-modal" class="site-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inner action area end -->


    <!-- Our team area start -->

    <div class="our-team-area-wrp">
        <div class="our-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <h4>Our Team</h4>
                            <h2>Meet our <br> Awesome Team</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="tm-btn">
                            <a href="for-jobseekers/" class="site-btn">Join Our Awesome Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-sdlier-wrp owl-carousel">
            <div class="single-team-item">
                <div class="sigle-team-main-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyril.png" alt="">
                    <div class="team-content-blk">
                        <h4>Cyril Nambangi <span>CFO</span></h4>
                        <div class="tm-sc-link">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-team-item">
                <div class="sigle-team-main-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stephenm.png" alt="">
                    <div class="team-content-blk">
                        <h4>Stephen Munabo <span>Business Development</span></h4>
                        <div class="tm-sc-link">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-team-item">
                <div class="sigle-team-main-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giorno.png" alt="">
                    <div class="team-content-blk">
                        <h4>Giorno Tientcheu <span>CEO</span></h4>
                        <div class="tm-sc-link">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-team-item">
                <div class="sigle-team-main-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ashish-Jain.png" alt="">
                    <div class="team-content-blk">
                        <h4>Ashish Jain <span>CTO of Nengu Tech</span></h4>
                        <div class="tm-sc-link">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-team-item">
                <div class="sigle-team-main-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="">
                    <div class="team-content-blk">
                        <h4>Jenifer <span>Marketing Director</span></h4>
                        <div class="tm-sc-link">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- Our team area end -->


    <?php include get_theme_file_path( '/templateparts/testimonials.php' ); ?>


    <!-- Blog area css start -->

    <div class="blog-area">
       <img class="dt-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/dot-shape.png" alt="">
       <img class="sp-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Blogs</h4>
                        <h2>We want to know <br> so we learn </h2>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="para-texts">
                        <p>As a good digital agency Nengu Tech also always share new things that we learn with you from our blogs.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-80">
            
                <div class="col-lg-5">
                <?php
                $q = new WP_Query( 'posts_per_page=4' );
                 if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); 
                 ?>

                <?php 
                
                    $count = 0;
                   
                
                ?>

                <?php if($count == 0): ?>
                    <div class="signle-blog-items">
                        <div class="signle-blog-inner">
                            <div class="blog-img">
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                <img src="<?= $featured_img_url; ?>" alt="">
                            </div>
                            <div class="blog-texts">
                                <h3><?php the_title(); ?></h3>
                                <p><?= substr(get_the_content(), 0, 90); ?></p>
                                
                                <a href="<?php echo get_permalink(); ?>">Read More <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-7">
                    <?php else : ?>
                    <div class="right-blog-all">
                        <div class="r-signle-blog">
                            <div class="r-signle-blog-inner">
                                <div class="r-blog-img">
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                    <img src="<?= $featured_img_url; ?>" alt="">
                                </div>
                                <div class="r-blog-texts">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?= substr(get_the_content(), 0, 90); ?></p>
                                    <a href="<?php echo get_permalink(); ?>">Read More <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                <?php $count++; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog area css end -->




<?php

get_footer();