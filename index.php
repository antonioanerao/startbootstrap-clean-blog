<?php get_header(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php header_image(); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Blog Simples</h1>
                    <span class="subheading">Blog inicial usando Startbootstrap</span>
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
                        get_template_part('template-parts/content', get_post_format() );
                    endwhile;
            ?>
            <!-- Pager -->
            <div class="clearfix">
                <div class="pages text-left col-6"><?php previous_posts_link("<< Newer posts");?></div>
                <div class="pages text-right col-6"><?php next_posts_link("Older posts"); ?></div>
            </div>

            <?php else : ?>
                    <h2>Ops...nenhum conteúdo encontrado</h2>
            <?php endif; ?>
        </div>
    </div>
</div>

<hr>

<?php get_footer(); ?>