<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Page Title</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="site-header">
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="<?php echo home_url(); ?>" class="brand-logo" title="<?php bloginfo('title') ?>"><?php bloginfo('title') ?></a>
                <?php
                    $main_menu = array(
                        'theme_location' => 'Main Menu',
                        'menu' => 'ul',
                        'container' => 'div',
                        'container_id' => 'main-menu',
                        'menu_class' => 'right hide-on-med-and-down'
                    );

                    wp_nav_menu( $main_menu );
                ?>

                <?php
                    $mobile_menu = array(
                        'theme_location' => 'Mobile Menu',
                        'menu' => 'ul',
                        'container' => 'div',
                        'container_id' => 'main-menu',
                        'menu_class' => 'side-nav',
                        'menu_id' => 'nav-mobile'
                    );

                    wp_nav_menu( $mobile_menu );
                ?>
                
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
            <!-- END div.nav-wrapper container -->
        </nav>
    </header>
    <!-- END header#site-header -->
