<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @subpackage wordpost
 * @since      wordpost
 */
global $count_posts; ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="format_status_title">
			<h3><?php the_author(); ?></h3>
			<span class="meta-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'wordpost' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_time( 'j F, Y' ); ?></a></span>
		</div><!-- end .format_status_title-->
		<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'wordpost_status_avatar', '48' ) ); ?>
	</div><!-- end .entry-header-->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- end .entry-content -->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'wordpost' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( 1 < $count_posts ) { ?>
			<div class="top-link">
				<small>
					<a href="#top">[<?php _e( 'Top', 'wordpost' ); ?>]</a>
				</small>
			</div><!-- end .top-link -->
		<?php } // end if ( 1 < $count_posts ) ?>
	</div><!-- end .entry-meta -->
</div><!-- end #post -->
