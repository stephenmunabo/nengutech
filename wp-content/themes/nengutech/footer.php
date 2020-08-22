<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

?><!-- call to action start -->

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


<!-- Footer area start -->

<div class="footer-area-wrp">
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-logo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Collaboration</a></li>
                            <li><a href="">Carrers</a></li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="footer-bottom-left">
                        <p>©copyright Nengu Tech 2020 - All Right Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 order-first order-md-last">
                    <div class="footer-rt">
                        <div class="footer-bottom-menu">
                            <ul>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer area end -->





<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Popper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

<!--CTA MODAL-->

<!-- Modal -->
<div id="cta-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-8">
               <!-- Register area start -->

    <div class="register-area">
        <img class="r-sp-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shap-1.png" alt="">
        <img class="r-sp-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/shap-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="resgister-form-blk">
                        <div class="resiter-top-texts">
                            <h2>Let's help you on the path to a new career</h2>
                            <h4>Register here and we will do the rest. </h4>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-inpt-blk">
                                        <input type="text" placeholder="First Name">
                                        <span>Please provide your first name</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-inpt-blk">
                                        <input type="text" placeholder="Last Name">
                                        <span>Please provide your last name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-inpt-blk">
                                        <input type="text" placeholder="Email Address">
                                        <span>Please provide your email address</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-inpt-blk">
                                        <input type="text" placeholder="Phone Numaber">
                                        <span>Please provide your phone number</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="select-opt">
                                        <select name="" id="">
                                            <option value="">Career Path</option>
                                            <option value="">Amazon Web Services (AWS)</option>
                                            <option value="">Azure Cloud</option>
                                            <option value="">Google Cloud</option>
                                            <option value="">Scrum Master</option>
                                            <option value="">Power BI</option>
                                        </select>
                                    </div>
                                    <div class="sub-btn">
                                        <button type="submit" class="site-btn">Sign me up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register area end -->
           </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>

</html>