<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="input-group input-group-newsletter">
        <input type="text" required class="form-control form-control-lg col-10" placeholder="Buscar..." aria-label="Faça uma busca" aria-describedby="basic-addon" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <div class="input-group-append">
            <button class="btn btn-sm btn-primary btn-block" type="submit"><i class="fa fa-search"></i> Buscar</button>
        </div>
    </div>
</form>