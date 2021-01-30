<article id="post-<?php the_ID(); ?>" <?php post_class('pi-box p-4 mb-4'); ?> aria-label="<?php echo esc_attr(empty(get_the_title()) ? get_the_id() : get_the_title()); ?>">
	
	<header class="entry-header col-12">
	<?php if(has_post_thumbnail()): ?>
	<picture>
	<?php the_post_thumbnail( 'full',array('class'=>'img-fluid mb-4') ); ?>
	</picture>
	<?php endif; ?>
		<?php
			the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content col-12">
		<?php
			the_excerpt();
			printf('<div><a href="%s">%s%s</a></div>',esc_url( get_permalink()), esc_html__('Read more..', 'stp-accessibility'),'<span class="screen-reader-text">  '.get_the_title().'</span>');
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
