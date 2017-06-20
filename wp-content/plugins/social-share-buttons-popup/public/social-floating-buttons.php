<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(get_option('ssbp_enable_social_floating') ==  1 ){
	add_action( 'wp_head', 'ssbp_social_floating_icons' );



	

}
function ssbp_social_floating_icons() {
	include( plugin_dir_path( __FILE__ ) . '../templates/socialfloating/public_social_floating_template.php' );
	require('css/ssbp_floating_public.php');

}
