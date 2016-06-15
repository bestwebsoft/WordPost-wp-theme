<?php
/**
 * The template used for displaying page content in page.php
 *
 * @subpackage wordpost
 * @since      wordpost
 */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php the_content(); ?>
		<div class="pagination_list">
			<?php wp_link_pages(); ?>
		</div><!-- end .pagination_list -->
	</div><!-- end .entry-content -->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'wordpost' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- end .entry-meta -->
	<hr />
	<?php comments_template(); ?>
</div><!-- end #post -->
