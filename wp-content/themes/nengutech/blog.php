<?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

 get_header();

?>

<div class="inner-blog-page">


<div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Blog</h2>
                <p class="text-center">Featuring articles for creative professionals about current industry marketing trends, the freelance lifestyle, and thought leadership content for the creative staffing business, all written by our freelance copywriters, whom we are pleased
                    to represent. </p>
            </div>
                    
                
                    
                        
            <div class="row projects">

                <?php 
                    // the query
                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                    
                    <?php if ( $wpb_all_query->have_posts() ) : ?>
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                            
                        <div class="col-sm-6 item">
                            <div class="row">
                                <a href="<?php the_permalink(); ?>">
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="<?= $featured_img_url; ?>"></a></div>
                                <div class="col">
                                    <h3 class="name"><?php  the_title(); ?></h3>
                                    <p class="description"><?= substr(get_the_content(), 0, 160); ?></p>
                                </div>
                                </a>
                            </div>
                        </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>


        </div>
    </div>
</div>

    <?php get_footer(); ?>