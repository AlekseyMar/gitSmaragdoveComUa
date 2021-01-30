<article id="post-<?php the_ID(); ?>" <?php post_class('pi-box p-4 mb-4'); ?>>
	<header>
		<?php
			the_title( '<h1 class="title page-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->
	<div>
		<?php
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'stp-accessibility' ),
					'after'  => '</div>',
				)
			);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
