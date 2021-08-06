<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get">
	<input type="text" id="s" name="s" value="<?php _e('To search type and hit enter', 'unicon') ?>" onfocus="if(this.value=='<?php _e('To search type and hit enter', 'unicon') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('To search type and hit enter', 'unicon') ?>';" autocomplete="off" />
	<input type="submit" value="<?php _e('Search', 'unicon') ?>" id="searchsubmit" />
</form>