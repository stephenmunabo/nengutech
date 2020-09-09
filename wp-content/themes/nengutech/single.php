<?php
/**
 * The template for displaying all single posts
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

        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article-clean">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                                <div class="intro">
                                    <h1 class="text-center"><?php the_title(); ?></h1>
                                    <?php 
                                        $author_id = get_the_author_meta( 'ID' );
                                        $author_name = get_the_author_meta( 'nicename', $author_id ); 
                                    ?>
                                    <p class="text-center"><span class="by">by</span> <a href="#"><?= $author_name; ?></a><span class="date"><?php echo get_the_date(); ?> </span></p><?= get_the_post_thumbnail(); ?></div>
                                    <?php //the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
</div>
            
</div>
 <?php get_footer(); ?>
