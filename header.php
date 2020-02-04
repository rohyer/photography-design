<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="home" class="section-site">
        <div class="container-h-custom">
            <div class="row">
                <div id="logo" class="d-flex justify-content-start col-9 col-md-4 col-lg-4 col-xl-3">
                    <?php $value = get_theme_mod( 'type_of_logo', 0 ); ?>
                    <h1>
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <?php if ($value == 'value1') { ?>
                            <img src="<?php echo get_theme_mod( 'm1_logo' ) ?>" alt="">
                            <?php } else if ($value == 'value2') { ?>
                                <?php echo get_theme_mod( 'logo_text') ?>
                            <?php } ?>
                        </a>
                    </h1>
                </div>

                <div id="header-menu" class="d-none d-md-flex col-md-8 col-lg-7 offset-lg-1 col-xl-7 offset-xl-2 justify-content-md-end">

                    <ul>
                        <li class="header-menu-item"><a href="#home" id="menu-home" class="header-menu-no-selected">Home</a></li>
                        <li class="header-menu-item"><a href="#about" id="menu-about" class="header-menu-no-selected">About</a></li>
                        <li class="header-menu-item"><a href="#services" id="menu-services">Services</a></li>
                        <li class="header-menu-item"><a href="#work" id="menu-work">Work</a></li>
                        <li class="header-menu-item"><a href="#clients" id="menu-clients">Clients</a></li>
                        <li class="header-menu-item"><a href="#contact" id="menu-contact">Contact</a></li>
                    </ul>

                    <!-- <?php

                    wp_nav_menu( array(
                        'menu' => 'menu',
                        'theme_location' => 'menu'
                    ));

                    ?> -->
                </div>

                <div id="main-icon" class="d-flex justify-content-end align-items-center col-3 d-md-none">
                    <div id="btn-icon" class="menu-closed">
                        <span class="hamburger"></span>
                    </div>
                </div>

                <nav id="responsive-menu" class="d-md-none">
                    <ul id="menu-list">
                        <h6>Menu</h6>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <ul id="menu-social-medias">
                        <?php $facebook = get_theme_mod("facebook", 0); ?>
                        <?php $instagram = get_theme_mod("instagram", 0); ?>
                        <?php $twitter = get_theme_mod("twitter", 0); ?>
                        <?php $linkedin = get_theme_mod("linkedin", 0); ?>
                        
                        <?php if ($facebook != '') { ?>
                            <a href="<?php echo get_theme_mod( 'facebook' ) ?>">
                            <i class="fab fa-facebook-f"></i></a>
                        <?php } ?>
                        <?php if ($instagram != '') { ?>
                            <a href="<?php echo get_theme_mod( 'instagram' ) ?>">
                            <i class="fab fa-instagram"></i></a>
                        <?php } ?>
                        <?php if ($linkedin != '') { ?>
                            <a href="<?php echo get_theme_mod( 'linkedin' ) ?>">
                            <i class="fab fa-linkedin-in"></i></a>
                        <?php } ?>
                        <?php if ($twitter != '') { ?>
                            <a href="<?php echo get_theme_mod( 'twitter' ) ?>">
                            <i class="fab fa-twitter"></i></a>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    