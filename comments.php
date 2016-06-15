<?php
/**
 * The template for displaying Comments.
 * @subpackage wordpost
 * @since      wordpost
 */
if ( post_password_required() ) {
	return;
}
if ( have_comments() ) { ?>
	<div id="comments" class="comments-area">
		<h2 class="comments-title">
			<?php $number_comments = get_comments_number(); // Get number of comments for post
			if ( 1 == $number_comments ) { // If one comment
				echo __( 'One thought on &ldquo;', 'wordpost' ) . get_the_title() . '&rdquo;';
			} elseif ( 1 < $number_comments ) { // If more than one message
				echo number_format_i18n( $number_comments ) . __( '&nbsp;thoughts on &ldquo;', 'wordpost' ) . get_the_title() . '&rdquo;';
			} ?>
		</h2><!-- end .comments-title -->
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'wordpost_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- end .commentlist -->
		<?php previous_comments_link();
		next_comments_link(); ?>
	</div><!-- end #comments .comments-area -->
<?php } // end have_comments()
comment_form();
