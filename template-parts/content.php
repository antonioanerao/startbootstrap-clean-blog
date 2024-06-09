<div <?php post_class('post-preview'); ?>>
<?php
    if (is_sticky()) {
        echo "<div class='mt-3 card' style='background-color: #FFF5D2'>
            <div class='card-body'>
                <div style='margin-bottom: -20px; color: #777777' class='card-text'><i style='color: #777777;' class='fa fa-sticky-note'></i> Post Fixado</div>";
    }
?>
    <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
            echo "<br>";
            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail']);
        }  ?>
        <h2 class="post-title mt-4">
            <?php echo get_the_title(); ?>
        </h2>
        <h3 class="post-subtitle">
            <?php the_excerpt(); ?>
        </h3>
    </a>
    <p class="post-meta">
        Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
    </p>
<?php if (is_sticky()) { echo "</div></div>"; } ?>
</div>
<hr>
