<?php
/**
*	Fired when plugin is uninstalled.
*	@link	http://www.valhallawp.com
*/

// If uninstall not called from WordPress, then exit.
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/* ******  delete options  ****** */
delete_option( 'vhwp_hsfg_section1_image' );
delete_option( 'vhwp_hsfg_section1_image_height' );
delete_option( 'vhwp_hsfg_section1_title_text' );
delete_option( 'vhwp_hsfg_section1_title_font_size' );
delete_option( 'vhwp_hsfg_section1_title_font_color' );
delete_option( 'vhwp_hsfg_section1_subtitle_text' );
delete_option( 'vhwp_hsfg_section1_subtitle_font_size' );
delete_option( 'vhwp_hsfg_section1_subtitle_font_color' );
