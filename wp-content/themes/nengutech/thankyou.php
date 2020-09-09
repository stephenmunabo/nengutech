<?php
/**
 * Template Name: Thankyou 
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
                        <h2>Thank you for you submission</h2>
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
                    <h2 style="color: #4A90E2;">A member of our training staff will reach out to you within 72hour for a discovery call.</h2>
                    <br>
                    <p style="color: #4A90E2;">Whether you are looking for staffing service, software development, or training, our team is ready to answer any questions you may have.</p>
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




<?php get_footer(); ?>