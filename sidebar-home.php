<?php if( is_active_sidebar( 'sidebar-home' ) ): ?>
    <aside class="col-lg-4 col-md-10 mx-auto">
        <div class="card" style="margin-top: 30px">
            <div class="card-body">
                <?php dynamic_sidebar( 'sidebar-home' ); ?>
            </div>
        </div>
    </aside>
<?php endif; ?>