<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
<link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,600,700' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <nav class="site-nav">
            <?php
            $args = array(
                'theme_location' => 'primary'
            );

            wp_nav_menu($args);
            ?>
        </nav>  
        <!-- header -->
        <header>
            <div class="header">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
                </div>
                <a class="menu-btn"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/menu.png"></a>
                <nav class="nav">
                <?php
                $args = array(
                    'theme_location' => 'primary'
                );

                wp_nav_menu($args);
                ?>
                </nav> 
            </div>             
        </header>
    <!-- Container -->
    <div class="container">
