<?php
/**
 * Template Name: Jobseekers 
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

<div class="hero-area hero-2-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-texts">
                        <h2>Get the skills you
                            need to flourish your
                            career</h2>
                        <p>Learn Aws, Google, Cloud, Azure, and many other booming technologies to grow your career.</p>
                        <a href="" data-toggle="modal" data-target="#cta-modal" class="site-btn">Let's Talk</a>
                    </div>
                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <div class="hero-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero area end -->




    <!-- our services area start -->

    <div class="our-services-area training-section">
        <img class="spp-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shap-1.png" alt="">
        <img class="spp-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/shap-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Our Training</h4>
                        <h2>We offer hands-on <br> training</h2>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="para-texts">
                        <p>Our hand-on training program equips students for a future in the in-demand tech jobs market, our program doesn't end with training, we coach our student pre and post job attainment.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-70">

            <?php 
            $args = array( 'post_type' => 'programs', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-lg-4 col-md-6">
                <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                        <a href="" data-toggle="modal" data-target="#modal-aws" class="see-more-btn">Register <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>

            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>





                
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Google Cloud</h4>
                            <p>Get hands-on practical experience on Google Cloud through labs and exams while pushing yourself and your enterprise to the next level.</p>
                        </div>
                        <a href="" data-toggle="modal" data-target="#modal-google-cloud" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Azure</h4>
                            <p>Our certification course will improve your knowledge and skills of implementing, monitoring, and maintaining Microsoft Azure services, including compute, storage, networking, and security.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Oracle Fusion <br> Middleware</h4>
                            <p>Our certification will improve your knowledge and give you hands-on projects to enable you to rapidly build scalable high-performance applications for the Web.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>SAP Finance</h4>
                            <p>The certification will advance your SAP skills, improve your performance, and earn you global recognition in this field.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Business Analyst</h4>
                            <p>Learn the six knowledge areas business analysis planning & monitoring, elicitation, requirements management & communication, enterprise analysis, requirements analysis, and solution assessment.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Scrum Master</h4>
                            <p>Our certification will empower you with servant leadership skills that are essential for the successful performance of a scrum team.</p>
                        </div>
                        <a href="" class="see-more-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-blk">
                        <div class="single-services-blk-content-inner">
                            <h4>Power Bi</h4>
                            <p>Learn how to optimize cloud-based services to facilitate the visualization and sharing of insights based entirely on data. </p>
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
        <img class="inner-img-main" src="<?php echo get_template_directory_uri(); ?>/assets/img/inner-img-2.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-texts">
                        <h2>Jumpstart a new career
                            in cloud computing
                            today! </h2>
                        <p>We will train you, provide hands-on projects as well as coaching pre and post-employment.</p>
                        <a href="" class="site-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inner action area end -->


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
                        
                        
                        <?php gravity_form_enqueue_scripts( 1, true ); gravity_form( 1, false, false, false, '', true ); ?>
                        <form style="display: none" action="">
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




    <?php include get_theme_file_path( '/templateparts/testimonials.php' ); ?>


    <!-- Blog area css start -->

    <?php include get_theme_file_path( '/templateparts/blogpart.php' ); ?>


    <!-- Blog area css end -->

    
    

    <!--Modals-->

    <!-- Modal aws -->
<div id="modal-aws" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">AWS Solutions Architect</h4>
      </div>
      <div class="modal-body">
        <p> AWS Solution Architect course is aimed at empowering you with skills that will help you in the design of fault-tolerant, cost efficient & scalable distributed systems on platforms such as AWS. More importantly, with skills leanred you will be proficient the crafting of advanced cloud-based solutions and migrating data to the cloud.</p> 
        <p>Based on the recommendations by Amazon, as an architect, you will be able to make plans for, design and scale AWS cloud implementations. Taking this course empowers you to be a AWS Solution architect, who can receive an average salary of $126,000 annually.  	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal aws -->
<div id="modal-google-cloud" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Google Cloud Architect</h4>
      </div>
      <div class="modal-body">
        <p> AWS Solution Architect course is aimed at empowering you with skills that will help you in the design of fault-tolerant, cost efficient & scalable distributed systems on platforms such as AWS. More importantly, with skills leanred you will be proficient the crafting of advanced cloud-based solutions and migrating data to the cloud.</p> 
        <p>Based on the recommendations by Amazon, as an architect, you will be able to make plans for, design and scale AWS cloud implementations. Taking this course empowers you to be a AWS Solution architect, who can receive an average salary of $126,000 annually.  	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




    <!-- call to action end -->
    <?php get_footer(); ?>