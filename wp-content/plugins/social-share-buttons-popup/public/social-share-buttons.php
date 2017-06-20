<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function hook_social_buttons_script() {

require('css/ssbp_style_public.php');

}
function ssbp_show_sb_on_post($content) {

	if (get_option('ssbp_enable_post') == '1' && is_single()) {
		$social_buttons ='';
		$social_buttons_tagline;
		if(get_option('ssbp_sb_custom_tagline') !=''){
			$social_buttons_tagline = get_option('ssbp_sb_custom_tagline');
		}
		else{
			if(get_option('ssbp_sb_tagline') == '0')
				$social_buttons_tagline = '';
			if(get_option('ssbp_sb_tagline') == '1')
				$social_buttons_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_sb_tagline') == '2')
				$social_buttons_tagline = 'Share this article';
			if(get_option('ssbp_sb_tagline') == '3')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '4')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '5')
				$social_buttons_tagline = 'Spread the Love!';
			if(get_option('ssbp_sb_tagline') == '6')
				$social_buttons_tagline = 'Share Knowledge!';
			if(get_option('ssbp_sb_tagline') == '7')
				$social_buttons_tagline = 'Happy Sharing!';
		}
		global $post;
		$url = get_permalink($post->ID);
		$url = esc_url($url);
		$social_buttons = '<p id="ssbp_tagline" class="ssb_tagline">'.$social_buttons_tagline.'</p><div id="'.get_option('ssbp_sb_social_selected_theme').'" class="ssbp_selected_theme"></div>';
	}
	if(get_option('ssbp_sb_location') == '2'){
		return $content = $content . $social_buttons;
	}

	if(get_option('ssbp_sb_location') == '1'){
		return $content = $social_buttons .$content;
	}

	if(get_option('ssbp_sb_location') == '3'){
		$latestContent =  $social_buttons.=$content.=$social_buttons;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_buttons') ==  '1' ){
	add_action('wp_footer','hook_social_buttons_script');
	add_filter('the_content', 'ssbp_show_sb_on_post');

}









function ssbp_show_sb_on_page($content) {

	if (get_option('ssbp_enable_page') == '1' && is_page()) {
		$social_buttons ='';
		$social_buttons_tagline;
		if(get_option('ssbp_sb_custom_tagline') !=''){
			$social_buttons_tagline = get_option('ssbp_sb_custom_tagline');
		}
		else{
			if(get_option('ssbp_sb_tagline') == '0')
				$social_buttons_tagline = '';
			if(get_option('ssbp_sb_tagline') == '1')
				$social_buttons_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_sb_tagline') == '2')
				$social_buttons_tagline = 'Share this article';
			if(get_option('ssbp_sb_tagline') == '3')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '4')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '5')
				$social_buttons_tagline = 'Spread the Love!';
			if(get_option('ssbp_sb_tagline') == '6')
				$social_buttons_tagline = 'Share Knowledge!';
			if(get_option('ssbp_sb_tagline') == '7')
				$social_buttons_tagline = 'Happy Sharing!';
		}
		global $post;
		$url = get_permalink($post->ID);
		$url = esc_url($url);
		$social_buttons = '<p id="ssbp_tagline" class="ssb_tagline">'.$social_buttons_tagline.'</p><div id="'.get_option('ssbp_sb_social_selected_theme').'" class="ssbp_selected_theme"></div>';
	}
	if(get_option('ssbp_sb_location') == '2'){
		return $content = $content . $social_buttons;
	}

	if(get_option('ssbp_sb_location') == '1'){
		return $content = $social_buttons .$content;
	}

	if(get_option('ssbp_sb_location') == '3'){
		$latestContent =  $social_buttons.=$content.=$social_buttons;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_buttons') ==  1 ){
	add_action('wp_footer','hook_social_buttons_script');

	add_filter('the_content', 'ssbp_show_sb_on_page');

}







function ssbp_show_sb_on_home($content) {

	if (get_option('ssbp_enable_home') == '1' && is_home()) {
		$social_buttons ='';
		$social_buttons_tagline;
		if(get_option('ssbp_sb_custom_tagline') !=''){
			$social_buttons_tagline = get_option('ssbp_sb_custom_tagline');
		}
		else{
			if(get_option('ssbp_sb_tagline') == '0')
				$social_buttons_tagline = '';
			if(get_option('ssbp_sb_tagline') == '1')
				$social_buttons_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_sb_tagline') == '2')
				$social_buttons_tagline = 'Share this article';
			if(get_option('ssbp_sb_tagline') == '3')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '4')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '5')
				$social_buttons_tagline = 'Spread the Love!';
			if(get_option('ssbp_sb_tagline') == '6')
				$social_buttons_tagline = 'Share Knowledge!';
			if(get_option('ssbp_sb_tagline') == '7')
				$social_buttons_tagline = 'Happy Sharing!';
		}
		global $post;
		$url = get_permalink($post->ID);
		$url = esc_url($url);
		$social_buttons = '<p id="ssbp_tagline" class="ssb_tagline">'.$social_buttons_tagline.'</p><div id="'.get_option('ssbp_sb_social_selected_theme').'" class="ssbp_selected_theme"></div>';
	}
	if(get_option('ssbp_sb_location') == '2'){
		return $content = $content . $social_buttons;
	}

	if(get_option('ssbp_sb_location') == '1'){
		return $content = $social_buttons .$content;
	}

	if(get_option('ssbp_sb_location') == '3'){
		$latestContent =  $social_buttons.=$content.=$social_buttons;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_buttons') ==  '1' ){
	add_action('wp_footer','hook_social_buttons_script');

	add_filter('the_content', 'ssbp_show_sb_on_home');

}






function ssbp_show_sb_on_front_page($content) {

	if (get_option('ssbp_enable_front_page') == '1' && is_front_page()) {
		$social_buttons ='';
		$social_buttons_tagline;
		if(get_option('ssbp_sb_custom_tagline') !=''){
			$social_buttons_tagline = get_option('ssbp_sb_custom_tagline');
		}
		else{
			if(get_option('ssbp_sb_tagline') == '0')
				$social_buttons_tagline = '';
			if(get_option('ssbp_sb_tagline') == '1')
				$social_buttons_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_sb_tagline') == '2')
				$social_buttons_tagline = 'Share this article';
			if(get_option('ssbp_sb_tagline') == '3')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '4')
				$social_buttons_tagline = 'Show us some love!';
			if(get_option('ssbp_sb_tagline') == '5')
				$social_buttons_tagline = 'Spread the Love!';
			if(get_option('ssbp_sb_tagline') == '6')
				$social_buttons_tagline = 'Share Knowledge!';
			if(get_option('ssbp_sb_tagline') == '7')
				$social_buttons_tagline = 'Happy Sharing!';
		}
		global $post;
		$url = get_permalink($post->ID);
		$url = esc_url($url);
		$social_buttons = '<p id="ssbp_tagline" class="ssb_tagline">'.$social_buttons_tagline.'</p><div id="'.get_option('ssbp_sb_social_selected_theme').'" class="ssbp_selected_theme"></div>';
	}
	if(get_option('ssbp_sb_location') == '2'){
		return $content = $content . $social_buttons;
	}

	if(get_option('ssbp_sb_location') == '1'){
		return $content = $social_buttons .$content;
	}

	if(get_option('ssbp_sb_location') == '3'){
		$latestContent =  $social_buttons.=$content.=$social_buttons;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_buttons') ==  1 ){
	add_action('wp_footer','hook_social_buttons_script');
	
	add_filter('the_content', 'ssbp_show_sb_on_front_page');

}
