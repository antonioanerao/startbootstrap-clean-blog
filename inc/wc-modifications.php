<?php

function fancy_lab_wc_modify(){
    add_action( 'woocommerce_before_main_content', 'fancy_lab_open_container_row', 5 );
    function fancy_lab_open_container_row(){
?>
<header class="masthead" style="background-image: url(<?php header_image(); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php bloginfo('name'); ?></h1>
                    <span class="subheading"><?php bloginfo('description'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
        echo '<div class="container shop-content"><div class="row">';
    }

    add_action( 'woocommerce_after_main_content', 'fancy_lab_close_container_row', 5 );
    function fancy_lab_close_container_row(){
        echo '</div></div>';
    }

    add_action( 'woocommerce_before_main_content', 'fancy_lab_add_shop_tags', 9 );
    function fancy_lab_add_shop_tags(){
        if(is_shop()){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        } else{
            echo '<div class="col">';
        }
    }

    add_action( 'woocommerce_after_main_content', 'fancy_lab_close_shop_tags', 4 );
    function fancy_lab_close_shop_tags(){
        echo '</div>';
    }

    if(is_shop()){
        add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

        add_action( 'woocommerce_before_main_content', 'fancy_lab_add_sidebar_tags', 6 );
        function fancy_lab_add_sidebar_tags(){
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

        add_action( 'woocommerce_before_main_content', 'fancy_lab_close_sidebar_tags', 8  );
        function fancy_lab_close_sidebar_tags(){
            echo '</div>';
        }

        //Add product description on shop page
        add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

}
add_action('wp', 'fancy_lab_wc_modify');