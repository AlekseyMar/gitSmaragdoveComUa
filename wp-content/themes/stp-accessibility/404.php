<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();
?>
		<div class="row">
			<div class="col-12 mb-5">
				<div class="text-center">
					<h2 class="display-1"><?php esc_html_e('404','stp-accessibility'); ?></h2>
					<span class="subtitle-404 pt-2 pb-2"><?php esc_html_e('Page not found','stp-accessibility'); ?></span>
					<br /><span class="description-404 pt-2 pb-2"><?php  esc_html_e('The page you are looking for does not exist.','stp-accessibility'); ?></span>
					<br/><a href="
<?php
	echo esc_url( get_home_url() );
?>
" class="mt-2 btn btn-primary"><?php esc_html_e('Return to the home page','stp-accessibility'); ?></a>
				</div>
			</div>
		</div>
<?php
	get_footer();
