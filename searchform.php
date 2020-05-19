<div class="col-md-10 col-lg-8 <?php if(is_single()) { echo "col-xl-12"; } else { echo "col-xl-8"; } ?> mx-auto">
    <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')) ?>">
        <div class="input-group input-group-newsletter">
            <input type="text" class="form-control form-control-lg col-10" placeholder="Faça uma busca" aria-label="Faça uma busca" aria-describedby="basic-addon" value="<?php echo get_search_query(); ?>" name="s" id="s">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary btn-block" type="button"><i class="fa fa-search"></i> Buscar</button>
            </div>
        </div>
    </form>
</div>