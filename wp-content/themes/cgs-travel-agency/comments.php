<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
        <h2 class="comments-title">
			<?php
			$cgs_travel_agency_comment_count = get_comments_number();
			if ( '1' === $cgs_travel_agency_comment_count ) {
				printf(
				/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'cgs-travel-agency' ),
					'<span>' . esc_html(get_the_title(),'cgs-travel-agency') . '</span>'
				);
			} else {
				printf( // WPCS: sanitization ok
				/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $cgs_travel_agency_comment_count, 'comments title', 'cgs-travel-agency' ) ),
					esc_html(number_format_i18n( $cgs_travel_agency_comment_count ),'cgs-travel-agency'),
					'<span>' . esc_html(get_the_title(),'cgs-travel-agency') . '</span>'
				);
			}
			?>
        </h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

        <ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
        </ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cgs-travel-agency' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
