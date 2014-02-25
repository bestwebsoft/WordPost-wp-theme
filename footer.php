<?php
/**
 * The template for displaying the footer.
 * @subpackage wordpost
 * @since wordpost
 */
?>
			<div class="clear"></div>
		</div><!-- end #main -->
</div><!-- end #wrapper -->
	<div id="footer">
		<div id="foot_top">
			<p>&#169; 
				<?php echo date( 'Y' ) . ' ';
				bloginfo( 'name' ) ?>
			</p>
			<div id="foot_author">
				<p><?php _e( ' Powered by ', 'wordpost' ); ?><a href="<?php echo esc_url( 'http://bestwebsoft.com/' ); ?>"><?php printf( 'BestWebSoft team' ); ?></a></p>
			</div><!-- end #foot_author -->
		</div><!-- end #foot_top -->
	</div><!-- end #footer -->
<?php wp_footer(); ?>
</body>
</html>
