<?php
/**
 * The single template file.
 *
 * @subpackage wordpost
 * @since      wordpost
 */
get_header();
get_sidebar(); ?>
	<div id="wordpost_content"><a id="top"></a>
		<?php while ( have_posts() ) {
			the_post();
			get_template_part( 'post_format', 'page' );
		} // end of the loop. ?>
	</div><!-- end #content -->
<?php get_footer();
