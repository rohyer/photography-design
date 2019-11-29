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
    <header id="home">
        <div class="container-custom">
            <div class="row">
                <div id="logo" class="d-flex justify-content-center justify-content-md-start col-md-3 col-lg-3 col-xl-2">
                    <h1><a href="<?php echo esc_url( home_url('/') ); ?>">Logotipo</a></h1>
                </div>

                <div id="header-menu" class="d-none d-md-flex col-md-9 col-lg-7 offset-lg-2 col-xl-7 offset-xl-3 justify-content-md-end">

                    <ul>
                        <li class="header-menu-item"><a href="#home" id="menu-home">Home</a></li>
                        <li class="header-menu-item"><a href="#about" id="menu-about">About</a></li>
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
            </div>
        </div>
    </header>

    