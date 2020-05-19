<br><div <?php post_class('post-preview'); ?>>
    <h2 class="post-title">
        <?php the_title(); ?>
        <h5 class="post-subtitle">
            <?php the_excerpt(); ?>
        </h5>
    </h2>
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail']);
    }  ?>
    <p class="post-meta">
        Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
    </p>
</div>
<hr>