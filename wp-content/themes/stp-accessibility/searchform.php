<?php $unique_id =  uniqid( 'search-form-' ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row ">
        <div class="col">
        <input type="search" id="<?php echo esc_attr($unique_id); ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'stp-accessibility' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" aria-label="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'stp-accessibility' ); ?>"/>
        </div>
        <div class="col">
        <button type="submit" class="search-submit btn btn-primary"><?php echo esc_html__( 'Search', 'stp-accessibility' ); ?></span></button>
        </div>
    </div>
</form>