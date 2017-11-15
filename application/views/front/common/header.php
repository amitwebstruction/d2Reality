<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D2Reality</title>
        <!--<title><?php //echo $page_title;                ?></title>-->
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <!-- Style CSS -->
        <?php loadCss(); ?>
        <link rel="icon" href="<?php echo getImageUrl(); ?>favicon.png" type="image/x-icon"/>
    </head>
    <!--header-->
    <body class="home"> 
        <div id="wrapper">
            <header id="header" class="site-header">
                <div class="container">
                    <div class="site-brand">
                        <a href="<?= base_url(); ?>"><img src="<?php echo getImageUrl(); ?>assets/logo.png" alt=""></a>
                    </div><!-- .site-brand -->
                    <div class="right-header">					
                        <nav class="main-menu">
                            <button class="c-hamburger c-hamburger--htx"><span></span></button>
                            <ul>
                                <li><a href="<?= base_url(); ?>">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url(); ?>">Launch Project</a></li>
                                <li><a href="<?= base_url(); ?>">All Project<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url(); ?>">Technology Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Lifestyle Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Arts &amp; Music Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Publications Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Games Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Events Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Food Project</a></li>
                                        <li><a href="<?= base_url(); ?>">Documentary Project</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#">Contact</a></li> -->
                            </ul>
                        </nav><!-- .main-menu -->


                        <div class="login login-button">
                            <a href="#" class="btn-primary" data-toggle="modal" data-target="#userlogin">Login</a>
                            <a href="#" class="btn-danger" data-toggle="modal" data-target="#usersignup">Sign Up</a>
                        </div><!-- .login -->

                        <!-- <div class="login login-button">
                                <a href="login.html" class="btn-danger" data-toggle="modal" data-target="#usersignup">Sign Up</a>
                        </div><!-- .login --> 
                        <div class="search-icon">
                            <a href="#" class="ion-ios-search-strong"></a>
                            <div class="form-search"></div>
                            <form action="#" method="POST" id="searchForm">
                                <input type="text" value="" name="search" placeholder="Search..." />
                                <button type="submit" value=""><span class="ion-ios-search-strong"></span></button>
                            </form>
                        </div>
                    </div><!--. right-header -->
                </div><!-- .container -->
            </header>
            <!--/ header-->

