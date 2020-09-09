<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div class="inner-blog-page">
        <div class="container">
            <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="article-clean">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                                <div class="intro">
                                    <h1 class="text-center"><?php the_title(); ?></h1>
                                    <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date"><?php echo get_the_date(); ?> </span></p><?= get_the_post_thumbnail(); ?></div>
                                    <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
    </div>
</div>

    <?php
get_footer();
