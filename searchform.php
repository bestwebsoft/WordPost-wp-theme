<?php
/**
 * The template for displaying search forms
 *
 * @subpackage wordpost
 * @since      wordpost
 */
?>
<form id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
	<div class="input_div"><label for="s"></label>
		<input class="s" type="text" name="s" placeholder="<?php echo esc_attr_x( 'Enter search keyword', 'placeholder', 'wordpost' ); ?>" value="<?php echo get_search_query(); ?>" onfocus="if(this.value==this.defaultValue){this.value='';
}" onblur="if(this.value==''){this.value=this.defaultValue;
}" />
	</div><!-- end .input_div -->
	<div class="input_div">
		<input id="searchsubmit" type="submit" value="<?php _e( 'Search', 'wordpost' ) ?>" />
	</div><!-- end .input_div -->
</form><!-- end #searchform -->
