<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div id="pi-sidebar-right" class="widget-area">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>