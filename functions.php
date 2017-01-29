<?php

add_action('after_setup_theme','generate_copyright_remove_default_message');
function generate_copyright_remove_default_message()
{
		
	remove_action( 'generate_credits', 'generate_add_footer_info' );
	remove_action( 'generate_copyright_line','generate_add_login_attribution' );
}

/**
 * Add the Leivonmäki copyright
 * @since 0.1
 */
add_action('generate_credits','generate_copyright_add_custom_message');
function generate_copyright_add_custom_message()
{
?>
	Copyright © <?php echo date('Y'); ?> Leivonmäki
<?php
}