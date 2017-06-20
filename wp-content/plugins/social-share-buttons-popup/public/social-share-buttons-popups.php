<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'wp_footer', 'ssbp_public_script_top_level' );
function ssbp_public_script_top_level() {
	if(get_option('ssbp_enable_social_popup') == '1'){
		if(get_option('ssbp_show_on_posts') == '1' && is_single()){

			include_once( plugin_dir_path( __FILE__ ) . '../templates/socialpopups/public_popup_template.php' );

		}
		if(get_option('ssbp_show_on_pages') == '1' && is_page()){

			include_once( plugin_dir_path( __FILE__ ) . '../templates/socialpopups/public_popup_template.php' );

		}
		if(get_option('ssbp_show_on_home') == '1' && is_home()){

			include_once( plugin_dir_path( __FILE__ ) . '../templates/socialpopups/public_popup_template.php' );

		}
		if(get_option('ssbp_show_on_front_page') == '1' && is_front_page()){

			include_once( plugin_dir_path( __FILE__ ) . '../templates/socialpopups/public_popup_template.php' );

		}
	}
}
