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
                
                    $count;
                   
                
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