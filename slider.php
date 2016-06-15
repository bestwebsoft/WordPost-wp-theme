<?php
/**
 * File with code of slider.
 * @subpackage wordpost
 * @since      wordpost
 */
// Query arguments
global $wpdb;
$array_postid_of_slide = $wpdb->get_col( "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = 'wordpost_slide_image' AND meta_value = 'yes'" );
$number_slides         = count( $array_postid_of_slide );
if ( 0 == $number_slides ) {
	return;
}

$args = array(
	'post_type'           => 'post',
	'post__in'            => $array_postid_of_slide,
	'posts_per_page'      => $number_slides,
	'ignore_sticky_posts' => 1,
);
// Apply a new global variable The Query
$the_query = new WP_Query( $args );
// Check The Query, if any posts - we show a slider
if ( $the_query->have_posts() ) { // show a slider ?>
	<div id="slider-wrap">
		<div id="slider">
			<?php while ( $the_query->have_posts() ) {
				$the_query->the_post(); // The Loop?>
				<div class="slide">
					<?php the_post_thumbnail(); // show one slide ?>
					<div class="title_slide">
						<h1>
							<?php if ( '' != get_post_meta( $post->ID, 'wordpost_image_url', true ) ) {
								echo '<a href="' . esc_url( get_post_meta( $post->ID, 'wordpost_image_url', true ) ) . '">';
							} // link in title of the slide
							echo get_post_meta( $post->ID, 'wordpost_image_title', true ); // title of the slide
							if ( '' != get_post_meta( $post->ID, 'wordpost_image_url', true ) ) {
								echo '</a>';
							} ?>
						</h1>
						<?php if ( '' != get_post_meta( $post->ID, 'wordpost_image_description', true ) ) { // text of the slide
							echo '<p>' . get_post_meta( $post->ID, 'wordpost_image_description', true ) . '</p>';
						} ?>
					</div><!--end .title_slide-->
				</div><!-- end .slide-->
			<?php } // end of The Loop ?>
		</div><!-- end #slider-->
	</div><!-- end #slider-wrap-->
<?php } // end of custom loop
wp_reset_postdata();
