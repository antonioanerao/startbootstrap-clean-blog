<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php header_image(); ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
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
            <div class="<?php if( is_active_sidebar( 'sidebar-post' ) ) { echo "col-md-8 col-lg-8"; } else { echo "col-md-10 col-lg-10"; } ?> mx-auto">

	            <?php if ( has_post_thumbnail() ) {
		            echo "<br>";
		            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail']);
	            }  ?>

                <?php the_content(); ?>
                <hr>
                <?php is_active_sidebar('pesquisar-post'){dynamic_sidebar('pesquisar-post')} ?>
                <hr>
                <p>
                    <b>Categorias: </b><?php the_category(', '); ?> <br>
                    <?php the_tags('<b>Tags:</b> ', ', '); ?>
                </p>
                <hr>
            </div>

            <?php get_sidebar('post'); ?>
        </div>
    </div>
</article>
