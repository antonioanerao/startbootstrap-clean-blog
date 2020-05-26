<?php get_header(); ?>

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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h2>404</h2>
                <h5>Ops...não encontramos o que você procura</h5>
                <br>
                <?php get_template_part('template-parts/content', 'search'); ?>
            </div>
        </div>
    </div>

    <hr>

<?php get_footer(); ?>