<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @subpackage wordpost
 * @since      wordpost
 */
?>
<div id="sidebar" class="widget-area">
	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) {
		the_widget( 'WP_Widget_Categories' );
	} ?>
</div><!-- end #sidebar .widget-area -->
