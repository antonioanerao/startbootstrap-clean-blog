<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <?php
            if (has_custom_logo()) {
                    the_custom_logo();
            } else {
                echo '<a class="navbar-brand" href=" '. get_bloginfo('home') .' ">' . get_bloginfo( "name" ) . '</a>';
            }
        ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav ml-auto',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
            ) );
            ?>
        </div>
        <?php if( class_exists( 'WooCommerce' ) ): ?>
            <div class="cart text-right">
                <a href="<?php echo wc_get_cart_url(); ?>"><span class="fa fa-shopping-cart"></span></a>
                <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </div>
        <?php endif; ?>
    </div>
</nav>