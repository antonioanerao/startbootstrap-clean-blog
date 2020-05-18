<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">

                    <?php if (!empty(get_theme_mod('add_twitter')) and (get_theme_mod('add_twitter') <> "#")) : ?>
                    <li class="list-inline-item">
                        <a href="<?php echo get_theme_mod('add_twitter'); ?>" target="_blank">
                            <span class="fa-stack fa-lg">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty(get_theme_mod('add_facebook')) and (get_theme_mod('add_facebook') <> "#")) : ?>
                    <li class="list-inline-item">
                        <a href="<?php echo get_theme_mod('add_facebook'); ?>" target="_blank">
                            <span class="fa-stack fa-lg">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty(get_theme_mod('add_github')) and (get_theme_mod('add_github') <> "#")) : ?>
                    <li class="list-inline-item">
                        <a href="<?php echo get_theme_mod('add_github'); ?>" target="_blank">
                            <span class="fa-stack fa-lg">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty(get_theme_mod('add_linkedin')) and (get_theme_mod('add_linkedin') <> "#")) : ?>
                        <li class="list-inline-item">
                            <a href="<?php echo get_theme_mod('add_linkedin'); ?>" target="_blank">
                            <span class="fa-stack fa-lg">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <p class="copyright text-muted">Copyright &copy; <?php echo bloginfo('name') . ' ' . date('Y'); ?> </p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
