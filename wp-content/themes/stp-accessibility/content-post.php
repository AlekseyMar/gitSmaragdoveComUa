<article id="post-<?php the_ID(); ?>" <?php post_class('pi-box p-4 mb-4'); ?>>
	
	<header>
	<?php if(has_post_thumbnail()): ?>
	<picture>
	<?php the_post_thumbnail( 'full',array('class'=>'img-fluid mb-4') ); ?>
	</picture>
	<?php endif; ?>
		<?php
			the_title( '<h1 class="title page-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->
	<div>
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
