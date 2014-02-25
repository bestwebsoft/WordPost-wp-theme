<?php
/**
 * The template for displaying search forms
 *
 * @subpackage wordpost
 * @since wordpost
 */
?>
<form id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
	<div class="input_div"><label for="s"></label>
		<input class="s" type="text" name="s" value="<?php _e( 'Enter search keyword', 'wordpost' ) ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
	</div><!-- end .input_div -->
	<div class="input_div">
		<input id="searchsubmit" type="submit" value="<?php _e( 'Search', 'wordpost' ) ?>"></input>
	</div><!-- end .input_div -->
</form><!-- end #searchform -->
