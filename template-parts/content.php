<div <?php post_class('post-preview'); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail']);
        }  ?>
        <h2 class="post-title">
            <?php the_title(); ?>
        </h2>
        <h3 class="post-subtitle">
            <?php the_excerpt(); ?>
        </h3>
    </a>
    <p class="post-meta">
        Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
    </p>
</div>
<hr>