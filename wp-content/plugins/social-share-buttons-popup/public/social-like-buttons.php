<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post;



function hook_css() {
	if(get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme1'|| get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme8' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme12')
	$output='<link rel="stylesheet" href="'.plugins_url( '../css/social-likes_classic.css', __FILE__ ).'">';

	if(get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme2')
	$output='<link rel="stylesheet" href="'.plugins_url( '../css/social-likes_flat.css', __FILE__ ).'">';

	if(get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme3' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme7' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme11')
	$output='<link rel="stylesheet" href="'.plugins_url( '../css/social-likes_birman.css', __FILE__ ).'">';

	if(get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme4' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme5'  || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme6' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme9' || get_option('ssbp_sl_selected_theme') == 'ssbp_sl_selected_theme10')
	$output='<link rel="stylesheet" href="'.plugins_url( '../css/social-likes_flat.css', __FILE__ ).'">';



	echo $output;

}
function hook_social_like_script() {
require('js/ssbp_js_public.php');


}
function ssbp_show_sl_on_post($content) {
$post_id = $post->ID;
$url =  get_the_post_thumbnail($post_id, 'thumbnail');
	if (get_option('ssbp_show_sl_on_post') == '1' && is_single()) {
		$social_likes ='';
		$social_likes_tagline;
		if(get_option('ssbp_show_sl_custom_tagline') !=''){
			$social_likes_tagline = get_option('ssbp_show_sl_custom_tagline');
		}
		else{
			if(get_option('ssbp_show_sl_tagline') == '0')
				$social_likes_tagline = '';
			if(get_option('ssbp_show_sl_tagline') == '1')
				$social_likes_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_show_sl_tagline') == '2')
				$social_likes_tagline = 'Share this article';
			if(get_option('ssbp_show_sl_tagline') == '3')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '4')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '5')
				$social_likes_tagline = 'Spread the Love!';
			if(get_option('ssbp_show_sl_tagline') == '6')
				$social_likes_tagline = 'Share Knowledge!';
			if(get_option('ssbp_show_sl_tagline') == '7')
				$social_likes_tagline = 'Happy Sharing!';
		}
		$social_likes = '<div id="ssbp_social_like_container" class="ssbp_social_like_container"></div>';
	}
	if(get_option('ssbp_sl_location') == '2'){
		return $content = $content .' '. $social_likes;
	}

	if(get_option('ssbp_sl_location') == '1'){
		return $content = $social_likes .' '.$content;
	}

	if(get_option('ssbp_sl_location') == '3'){
		$latestContent =  $social_likes.' '.$content.' '.$social_likes;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_likes') ==  '1' ){
	add_filter('the_content', 'ssbp_show_sl_on_post');
	add_action('wp_head','hook_css');
	add_action('wp_footer','hook_social_like_script');
}
function ssbp_show_sl_on_page($content) {
$post_id = $post->ID;
$url =  get_the_post_thumbnail($post_id, 'thumbnail');
	if (get_option('ssbp_show_sl_page') == '1' && is_page()) {
		$social_likes ='';
		$social_likes_tagline;
		if(get_option('ssbp_show_sl_custom_tagline') !=''){
			$social_likes_tagline = get_option('ssbp_show_sl_custom_tagline');
		}
		else{
			if(get_option('ssbp_show_sl_tagline') == '0')
				$social_likes_tagline = '';
			if(get_option('ssbp_show_sl_tagline') == '1')
				$social_likes_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_show_sl_tagline') == '2')
				$social_likes_tagline = 'Share this article';
			if(get_option('ssbp_show_sl_tagline') == '3')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '4')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '5')
				$social_likes_tagline = 'Spread the Love!';
			if(get_option('ssbp_show_sl_tagline') == '6')
				$social_likes_tagline = 'Share Knowledge!';
			if(get_option('ssbp_show_sl_tagline') == '7')
				$social_likes_tagline = 'Happy Sharing!';
		}
		$social_likes = '<div id="ssbp_social_like_container" class="ssbp_social_like_container"></div>';
	}
	if(get_option('ssbp_sl_location') == '2'){
		return $content = $content .' '. $social_likes;
	}

	if(get_option('ssbp_sl_location') == '1'){
		return $content = $social_likes .' '.$content;
	}

	if(get_option('ssbp_sl_location') == '3'){
		$latestContent =  $social_likes.' '.$content.' '.$social_likes;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_likes') ==  '1' ){
	add_filter('the_content', 'ssbp_show_sl_on_page');
	add_action('wp_head','hook_css');
	add_action('wp_footer','hook_social_like_script');
}
function ssbp_show_sl_on_home($content) {
$post_id = $post->ID;
$url =  get_the_post_thumbnail($post_id, 'thumbnail');
	if (get_option('ssbp_show_sl_home') == '1' && is_home()) {
		$social_likes ='';
		$social_likes_tagline;
		if(get_option('ssbp_show_sl_custom_tagline') !=''){
			$social_likes_tagline = get_option('ssbp_show_sl_custom_tagline');
		}
		else{
			if(get_option('ssbp_show_sl_tagline') == '0')
				$social_likes_tagline = '';
			if(get_option('ssbp_show_sl_tagline') == '1')
				$social_likes_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_show_sl_tagline') == '2')
				$social_likes_tagline = 'Share this article';
			if(get_option('ssbp_show_sl_tagline') == '3')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '4')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '5')
				$social_likes_tagline = 'Spread the Love!';
			if(get_option('ssbp_show_sl_tagline') == '6')
				$social_likes_tagline = 'Share Knowledge!';
			if(get_option('ssbp_show_sl_tagline') == '7')
				$social_likes_tagline = 'Happy Sharing!';
		}
		$social_likes = '<div id="ssbp_social_like_container" class="ssbp_social_like_container"></div>';
	}
	if(get_option('ssbp_sl_location') == '2'){
		return $content = $content .' '. $social_likes;
	}

	if(get_option('ssbp_sl_location') == '1'){
		return $content = $social_likes .' '.$content;
	}

	if(get_option('ssbp_sl_location') == '3'){
		$latestContent =  $social_likes.' '.$content.' '.$social_likes;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_likes') ==  '1' ){
	add_filter('the_content', 'ssbp_show_sl_on_home');
	add_action('wp_head','hook_css');
	add_action('wp_footer','hook_social_like_script');

}

function ssbp_show_sl_on_front_page($content) {
$post_id = $post->ID;
$url =  get_the_post_thumbnail($post_id, 'thumbnail');
	if (get_option('ssbp_show_sl_front_page') == '1' && is_front_page()) {
		$social_likes ='';
		$social_likes_tagline;
		if(get_option('ssbp_show_sl_custom_tagline') !=''){
			$social_likes_tagline = get_option('ssbp_show_sl_custom_tagline');
		}
		else{
			if(get_option('ssbp_show_sl_tagline') == '0')
				$social_likes_tagline = '';
			if(get_option('ssbp_show_sl_tagline') == '1')
				$social_likes_tagline = 'Sharing is Caring!';
			if(get_option('ssbp_show_sl_tagline') == '2')
				$social_likes_tagline = 'Share this article';
			if(get_option('ssbp_show_sl_tagline') == '3')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '4')
				$social_likes_tagline = 'Show us some love!';
			if(get_option('ssbp_show_sl_tagline') == '5')
				$social_likes_tagline = 'Spread the Love!';
			if(get_option('ssbp_show_sl_tagline') == '6')
				$social_likes_tagline = 'Share Knowledge!';
			if(get_option('ssbp_show_sl_tagline') == '7')
				$social_likes_tagline = 'Happy Sharing!';
		}
		$social_likes = '<div id="ssbp_social_like_container" class="ssbp_social_like_container"></div>';
	}
	if(get_option('ssbp_sl_location') == '2'){
		return $content = $content .' '. $social_likes;
	}

	if(get_option('ssbp_sl_location') == '1'){
		return $content = $social_likes .' '.$content;
	}

	if(get_option('ssbp_sl_location') == '3'){
		$latestContent =  $social_likes.' '.$content.' '.$social_likes;
		return $latestContent;
	}

	else{
		return $content;
	}


}

if(get_option('ssbp_enable_social_likes') ==  '1' ){
	add_filter('the_content', 'ssbp_show_sl_on_front_page');
	add_action('wp_head','hook_css');
	add_action('wp_footer','hook_social_like_script');

}

