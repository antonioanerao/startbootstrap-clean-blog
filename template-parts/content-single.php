<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php header_image(); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?php the_title(); ?></h1>
                    <span class="post-meta">
                        Publicado por <?php the_author(); ?> em <?php echo get_the_date(); ?>
                    </span>
                </div>
            </div>
        </div>
</header>

<!-- Post Content -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <?php the_content(); ?>
                <hr>
            </div>
        </div>
    </div>
</article>