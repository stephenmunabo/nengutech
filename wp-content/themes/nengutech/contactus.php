<?php
/**
 * Template Name: Contact Us 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

 get_header();

?>


<!-- Hero area start -->

<div class="hero-area">
       <span class="ptrn-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/pattarn-img.png);"></span>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-texts">
                        <h2>Drop us a line </h2>
                        <p>Whether you are looking for staffing service, software development, or training, our team is ready to answer any questions you may have.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero area end -->
    
    <!-- Inner form area start -->
    
    <div class="inner-form-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="inner-form-blk">
                    <?php gravity_form_enqueue_scripts( 3, true ); gravity_form( 3, false, false, false, '', true ); ?>
                        <form style="display: none;" action="">
                            <input type="text" placeholder="Full Name">
                            <input type="text" placeholder="Email Address">
                            <input type="text" placeholder="Company (Optional)">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Let's Talk</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <div class="rt-man-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Inner form area end -->
    
 


    <?php include get_theme_file_path( '/templateparts/testimonials.php' ); ?>

    <!-- call to action start -->

    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="action-bk">
                        <div class="row">
                            <div class="col-lg-7 d-flex align-items-center">
                                <div class="call-to-action-texts">
                                    <h2>Let’s start working together on your amazing project.</h2>
                                    <p>Challenge us. We want to work with you to create the really cool stuff.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="call-top-ac-btn">
                                    <a href="" class="site-btn">Let's Talk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- call to action end -->

    <?php get_footer(); ?>