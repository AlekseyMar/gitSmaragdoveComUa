<section class="no-results not-found pb-4">
	<header class="page-header">
		<h1 class="display-1"><?php echo esc_html__( 'Nothing Found', 'stp-accessibility' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php esc_html_e( 'Ready to publish your first post?', 'stp-accessibility' ); ?> <a href="<?php esc_url( admin_url( 'post-new.php' ) ) ?>"> <?php esc_html_e( 'Get started here', 'stp-accessibility' ); ?></a> </p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'stp-accessibility' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'stp-accessibility' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
