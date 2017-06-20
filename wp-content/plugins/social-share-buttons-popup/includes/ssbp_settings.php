<?php 
function ssbp_settings() {
// ====================================== Social Share Popup Settings =================================== //

	register_setting('ssbp_settings_group', 'ssbp_enable_social_popup','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_on_posts','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_on_pages','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_on_home','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_on_front_page','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_once_per_website','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_auto_close_popup','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_auto_show_popup','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_popup_after_days','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_location','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_appear_animation','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_closing_animation','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_width','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_height','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_border_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_border_style','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_border_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_border_radius','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_background_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_background_image_url','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_top_image_url','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_image_url','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_video_url','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_text','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_text_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_text_container_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_text_container_height','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_font','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_margin_top','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_margin_left','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_text_container_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_text_container_height','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_text','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_text_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_font','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_margin_top','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_margin_left','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_heading_text_center','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_subheading_text_center','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_social_theme_margin_top','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_social_theme_margin_left','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_social_selected_theme','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_social_theme_center','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_popup_social_theme_stick_to_bottom','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_facebook_icon_sp','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_twitter_icon_sp','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_google_icon_sp','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_pinterest_icon_sp','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_linkedin_icon_sp','ssbp_sanitize_options');



// ====================================== Social Share Buttons Settings =================================== //

	register_setting('ssbp_settings_group', 'ssbp_enable_social_buttons','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_enable_post','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_enable_page','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_enable_home','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_enable_front_page','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_tagline','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_custom_tagline','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_custom_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_tagline_color','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_font_family','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_location','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_alignment','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sb_social_selected_theme','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_facebook_icon_sb','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_twitter_icon_sb','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_google_icon_sb','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_pinterest_icon_sb','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_linkedin_icon_sb','ssbp_sanitize_options');

// ====================================== Social Share Floating Settings =================================== //

	register_setting('ssbp_settings_group', 'ssbp_enable_social_floating','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_social_floating_location','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_social_floating_appear_animation','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_floating_theme_selection','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_facebook_icon_sf','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_twitter_icon_sf','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_google_icon_sf','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_pinterest_icon_sf','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_linkedin_icon_sf','ssbp_sanitize_options');


// ====================================== Social Like Buttons Settings =================================== //

	register_setting('ssbp_settings_group', 'ssbp_enable_social_likes','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_on_post','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_page','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_home','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_front_page','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_counter','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_tagline','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_custom_tagline','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_tagline_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_tagline_custom_font_size','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_sl_title','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sl_twitter_handle','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sl_pinterest_url','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sl_selected_theme','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sl_location','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_sl_alignment','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_facebook_icon','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_twitter_icon','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_google_icon','ssbp_sanitize_options');
	register_setting('ssbp_settings_group', 'ssbp_show_pinterest_icon','ssbp_sanitize_options');


}