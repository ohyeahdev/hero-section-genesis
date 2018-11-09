<?php
/**     
 * Plugin Name: Hero Section for Genesis
 * Plugin URI: https://www.ohyeahdev.es/plugin/hero-section-genesis
 * Version: 1.0
 * Description: Add a new hero section after the header of your web page.
 * Author: Oh! Yeah Dev
 * Tested up to: 4.9.2
 * Author URI: http://www.ohyeahdev.es
 * Text Domain: vhwp-hsfg
 * Domain Path: /languages/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Go away!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function vhwp_hsfg_inter() {
	load_plugin_textdomain( 'vhwp_hsfg', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'vhwp_hsfg_inter' );

include_once 'includes/vhwp-hsfg-customizer.php';

function vhwp_hsfg_genesis_add_hero1_section() {

	if ( get_option ( 'vhwp_hsfg_section1_title_text' ) ) {

		$vhwp_hsfg_section1_title_text = get_option ( 'vhwp_hsfg_section1_title_text' );
	} 

	if ( get_option ( 'vhwp_hsfg_section1_subtitle_text' ) ) {

		$vhwp_hsfg_section1_subtitle_text = get_option ( 'vhwp_hsfg_section1_subtitle_text' );
	} 

	if (get_option ('vhwp_hsfg_section1_image' ) != '' ) {
		if ( is_home() || is_front_page() ) {
			echo '	<div id="vhwp-hsfg-hero1">
						<div id="vhwp-hsfg-hero1-header">
							<h1>' . $vhwp_hsfg_section1_title_text . '</h1>
							<h3>' . $vhwp_hsfg_section1_subtitle_text . '</h3>
						</div>
					</div>';
		}
	} 

	?>  

	<style>
		#vhwp-hsfg-hero1{
			background-image:url(<?php if ( get_option( 'vhwp_hsfg_section1_image' ) ) { echo get_option( 'vhwp_hsfg_section1_image' ); } ?> );
			background-size:cover;
			position:relative;

		<?php
			if ( get_option( 'vhwp_hsfg_section1_image_height' ) )
			{
				echo 'height: ' . get_option( 'vhwp_hsfg_section1_image_height' ) . 'px;';
			} else {
				echo 'height: 500px;';
			}
		?>

		}

		#vhwp-hsfg-hero1-header{
	  		position: relative;
	  		top:50%;
	  		text-align:center;
	  		width:100%;
	  		color:#fff;
	  		-ms-transform: translate(0,-50%); /* IE 9 */
	   		-webkit-transform: translate(0,-50%); /* Safari */
	    	transform: translate(0,-50%);  
	    	
		}

		#vhwp-hsfg-hero1-header h1{

			<?php
				if ( get_option ( 'vhwp_hsfg_section1_title_font_size' ) ) 
				{

					$vhwp_hsfg_section1_title_font_size = get_option ( 'vhwp_hsfg_section1_title_font_size' );

					echo 'font-size: ' . $vhwp_hsfg_section1_title_font_size . 'px;';
				}

				if ( get_option ( 'vhwp_hsfg_section1_title_font_color' ) ) 
				{

					$vhwp_hsfg_section1_title_font_color = get_option ( 'vhwp_hsfg_section1_title_font_color' );

					echo 'color: ' . $vhwp_hsfg_section1_title_font_color . ';';
				}

			?>
		}

		#vhwp-hsfg-hero1-header h3{
			<?php
				if ( get_option ( 'vhwp_hsfg_section1_subtitle_font_size' ) ) 
				{

					$vhwp_hsfg_section1_subtitle_font_size = get_option ( 'vhwp_hsfg_section1_subtitle_font_size' );

					echo 'font-size: ' . $vhwp_hsfg_section1_subtitle_font_size . 'px;';
				}

				if ( get_option ( 'vhwp_hsfg_section1_subtitle_font_color' ) ) 
				{

					$vhwp_hsfg_section1_subtitle_font_color = get_option ( 'vhwp_hsfg_section1_subtitle_font_color' );

					echo 'color: ' . $vhwp_hsfg_section1_subtitle_font_color . ';';
				}

			?>
		}

	</style>

	<?php
}
		
add_action ('genesis_after_header' , 'vhwp_hsfg_genesis_add_hero1_section', 20);