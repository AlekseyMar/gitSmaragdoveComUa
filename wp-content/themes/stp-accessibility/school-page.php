<?php
/** Template name: school шаблон */
?>

<?php get_header(); ?>

<div class="grid-center-block-wrapper">
    <main class="grid-center-block-element">
        <?php if ( have_posts() ) { ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php
                get_template_part( 'content','page');
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>
        <?php }else{ ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php } ?>
    </main>
    <sidebar class="grid-center-block-element">
        <?php if ( is_active_sidebar( 'right_side' ) ) : ?>
            <?php dynamic_sidebar( 'right_side' ); ?>
        <?php endif; ?>
    </sidebar>
</div>
<?php get_footer(); ?>
