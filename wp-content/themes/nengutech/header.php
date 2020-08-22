<?php
/**
 * Header file for the Nengu tech WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Title Here</title>


    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<?php echo $slug = basename(get_permalink()); 

if($slug == 'for-jobseekers') :
?>

<body class="jobs">
<?php else: ?>
<body>
<?php endif;?>


    <!-- Header bar section start -->
    <div class="header-bar-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="site-logo">
                        <a href="index.html"><img class="non-stc" src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo.svg" alt=""><img class="sticky-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-gray.svg" alt=""></a>
                        <span class="menu-open"><i class="fal fa-align-right"></i></span>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="site-main-menu">
                       <span class="menu-close"><i class="fal fa-times"></i></span>
                       <?php
        
                                wp_nav_menu( array(
                                    'menu' => 'header-menu'
                                ) );
                                                    
                            ?>
                        <ul style="display: none;">
                            
                            <li><a class="active-menu" href="">Home</a></li>
                            <li><a href="">For Empoyers</a></li>
                            <li><a href="">For Jobseekers</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header bar section complate -->