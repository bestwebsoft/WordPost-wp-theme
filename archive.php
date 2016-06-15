<?php
/**
 * The template for displaying Archive pages.
 * @subpackage wordpost
 * @since      wordpost
 */
get_header(); ?>
<?php get_sidebar();
$count_posts = 1; ?>
<div id="wordpost_content"><a id="top"></a>
	<div class="post">
		<h2 class="entry-title">
			<?php if ( is_day() ) {
				printf( __( 'Daily Archives: %s', 'wordpost' ), get_the_date() );
			} elseif ( is_month() ) {
				printf( __( 'Monthly Archives: %s', 'wordpost' ), get_the_date( 'F Y' ) );
			} elseif ( is_year() ) {
				printf( __( 'Yearly Archives: %s', 'wordpost' ), get_the_date( 'Y' ) );
			} else {
				printf( __( 'Archive of the tags: %s', 'wordpost' ), single_tag_title( '', false ) );
			} ?>
		</h2>
	</div><!--.post for name of archive -->
	<?php if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'post_format', get_post_format() );
			$count_posts ++;
		} // end of the loop. ?>
		<div class="nav_post_link">
			<div class="alignleft"><?php next_posts_link( __( '&laquo; Older posts ', 'wordpost' ), '' ) ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer posts &raquo;', 'wordpost' ) ) ?></div>
		</div>
	<?php } else { //end have_posts() check, when posts are present
		get_template_part( 'post_format', 'none' );
	} ?>
</div><!-- end #content -->
<?php get_footer();
