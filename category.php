<?php
/**
 * The template for displaying Category pages.
 * @subpackage wordpost
 * @since wordpost
 */
get_header();
		get_sidebar(); $count_posts = 1;?>
		<div id="wordpost_content"><a id="top"></a>
			<div class="post">
				<h2 class="entry-title">
					<?php printf( __( 'Archive of the categories: %s', 'wordpost' ), '<span>' . single_cat_title( '', false ) . '</span>' ); 
					if ( category_description() ) { // Show an optional category description ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
					<?php } ?>
				</h2>
			</div><!-- end.post for name of archive category -->
			<?php if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post();
					get_template_part( 'post_format', get_post_format() );
					$count_posts++;
				} // end of the loop. ?>
				<div class="nav_post_link">
					<div class="alignleft"><?php next_posts_link( __('&laquo; Older posts ', 'wordpost' ),'' ) ?></div>
					<div class="alignright"><?php previous_posts_link( __('Newer posts &raquo;', 'wordpost' ) ) ?></div>
				</div>
			<?php } else { //end have_posts() check, when posts are present
				get_template_part( 'post_format', 'none' ); 
			} ?>
		</div><!-- end #content -->
<?php get_footer(); ?>
