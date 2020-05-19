<?php if( is_active_sidebar( 'sidebar-home' ) ): ?>
    <div class="col-md-4 col-lg-4 mx-auto" style="margin-top: 15px">
        <div class="card">
            <div class="card-body">
                <?php dynamic_sidebar( 'sidebar-home' ); ?>
            </div>
        </div>
    </div>
<?php endif; ?>