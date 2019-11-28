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
    <header>
        <div class="container-custom">
            <div class="row">
                <div id="logo" class="d-flex justify-content-center justify-content-md-start col-md-3 col-lg-3 col-xl-2">
                    <h1><a href="<?php echo esc_url( home_url('/') ); ?>">Logotipo</a></h1>
                </div>

                <div id="header-menu" class="d-none d-md-flex col-md-9 col-lg-7 offset-lg-2 col-xl-7 offset-xl-3 justify-content-md-end">

                    <ul>
                        <li id="menu-home"><span>Home</span></li>
                        <li id="menu-about"><span>About</span></li>
                        <li id="menu-services"><span>Services</span></li>
                        <li id="menu-work"><span>Work</span></li>
                        <li id="menu-clients"><span>Clients</span></li>
                        <li id="menu-contact"><span>Contacts</span></li>
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

    