<?php
/* Template Name: Home Page Store */
get_header();
?>
<!-- Page Header -->
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

<?php if(class_exists('WooCommerce')): ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">

            <section class="popular-products">
                <?php
                    $popular_limit		= get_theme_mod( 'set_popular_max_num', 4 );
                    $popular_col		= get_theme_mod( 'set_popular_max_col', 4 );
                    $arrivals_limit		= get_theme_mod( 'set_new_arrivals_max_num', 4 );
                    $arrivals_col		= get_theme_mod( 'set_new_arrivals_max_col', 4 );
                ?>
                <div class="container">
                    <h3>Popular Products</h3>
                    <?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
                </div>
            </section>

        </div>
    </div>
</div>

<?php
$showdeal			= get_theme_mod( 'set_deal_show', 0 );
$deal 				= get_theme_mod( 'set_deal' );
$currency			= get_woocommerce_currency_symbol();
$regular			= get_post_meta( $deal, '_regular_price', true );
$sale 				= get_post_meta( $deal, '_sale_price', true );

if( $showdeal == 1 && ( !empty( $deal ) ) ):
    $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );
    ?>
    <section class="deal-of-the-week">
        <div class="container">
            <h2>Deal of the Week</h2>
            <div class="row d-flex align-items-center">
                <div class="deal-img col-md-6 ml-auto col-12 text-center">
                    <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
                </div>
                <div class="deal-desc col-md-4 mr-auto col-12 text-center">
                    <?php if( !empty( $sale ) ): ?>
                        <span class="discount">
												<?php echo $discount_percentage . '% OFF'; ?>
											</span>
                    <?php endif; ?>
                    <h3>
                        <a href="<?php echo get_permalink( $deal ); ?>"><?php echo get_the_title( $deal ); ?></a>
                    </h3>
                    <p><?php echo get_the_excerpt( $deal ); ?></p>
                    <div class="prices">
											<span class="regular">
												<?php
                                                echo $currency;
                                                echo $regular;
                                                ?>
											</span>
                        <?php if( !empty( $sale ) ): ?>
                            <span class="sale">
													<?php
                                                    echo $currency;
                                                    echo $sale;
                                                    ?>
												</span>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">

            <section class="section-separator new-arrivals">
                <div class="container">
                    <h3>New Arrivals</h3>
                    <?php echo do_shortcode( '[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]' ); ?>
                </div>
            </section>

        </div>
    </div>
</div>

<?php endif; ?>



<?php get_footer(); ?>
