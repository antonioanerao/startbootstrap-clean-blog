<?php
/* Template Name: General Template */
get_header();
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php header_image(); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            <?php else : ?>
                <h2>Ops...nenhum conteúdo encontrado</h2>
            <?php endif; ?>
        </div>
    </div>
</div>

<hr>

<?php get_footer(); ?>
