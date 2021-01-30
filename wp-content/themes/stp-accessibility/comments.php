<div id="comments" class="pi-box p-4">
	<?php if ( post_password_required() ) : ?>
	<p><?php esc_html_e( 'This post is password protected. Enter the password to view any comments','stp-accessibility' ); ?></p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

	<h2><?php comments_number(); ?></h2>

	<ol class="medias px-0 mx-0 px-sm-0 mx-sm-0">
	<?php 
	

	wp_list_comments( array(
		'style'         => 'ol',
		'max_depth'     => 4,
		'short_ping'    => true,
		'avatar_size'   => '50',
		'walker'        => new stp_accessibility_Bootstrap_Comment_Walker(),
	) );
	?>
	</ol>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p><?php esc_html_e( 'Comments are closed','stp-accessibility' ); ?></p>
	
	<?php endif; ?>

	<?php
	/*
	 * Adding bootstrap support to comment form,
	 * and some form validation using javascript.
	 */
	
	
	$commenter = wp_get_current_commenter();
	$req = true;
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$comments_arg = array(
		'form'	=> array(
			'class' => 'form-horizontal'
			),
		'fields' => apply_filters( 'comment_form_default_fields', array(
				'autor' 				=> '<div class="form-group">' . '<label for="author">' . __( 'Name', 'stp-accessibility' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
										'<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' />'.
										'<p id="d1" class="text-danger"></p>' . '</div>',
				'email'					=> '<div class="form-group">' .'<label for="email">' . __( 'Email', 'stp-accessibility' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
										'<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' />'.
										'<p id="d2" class="text-danger"></p>' . '</div>',
				'url'					=> '')),
				'comment_field'			=> '<div class="form-group">' . '<label for="comment">' . __( 'Comment', 'stp-accessibility' ) . '</label><span>*</span>' .
										'<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true"></textarea><p id="d3" class="text-danger"></p>' . '</div>',
				'comment_notes_after' 	=> '',
				'class_submit'			=> 'btn btn-default '
			); ?>
			<?php paginate_comments_links(); ?>
	<?php comment_form($comments_arg); ?>
	
</div><!-- #comments -->