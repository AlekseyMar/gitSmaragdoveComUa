<?php get_header(); ?>
<div class="container my-4" >
<div class="row">
<main class="col" id="content" role="main">
<?php if ( have_posts() ) { ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content','loop'); ?>
			<?php endwhile; ?>
			<?php }else{ ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php } ?>
			<div class="row">			
<div class="col-12 text-center">
	<?php stp_accessibility_Paging(); ?>
</div>
</div>
</main>
<?php get_template_part('sidebar'); ?>
</div>
</div>
<?php get_footer(); ?>