<?php 
/*
Plugin Name: Social Share Buttons & Popup
Plugin URI: https://wordpress.org/plugins/social-share-buttons-popup/
Description: Show Social Share Buttons & Popup on every Post, Page or on Home page to grow your network
Author: Arrow Plugins
Author URI: https://profiles.wordpress.org/arrowplugins
Copyright: 2016 Arrow Plugins
Version: 1.2
License: GplV2
*/ 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'admin_enqueue_scripts', 'ssbp_admin_scripts'  );
add_action( 'wp_enqueue_scripts', 'ssbp_public_scripts' );

/*Adding style sheets and scripts*/
function ssbp_load_media_files() {
  wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'ssbp_load_media_files' );
function ssbp_admin_scripts() {

  wp_register_style( 'ssbp_style', plugin_dir_url( __FILE__ )  . 'css/style.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_style' );

  wp_register_style( 'ssbp_font_picker_css', plugin_dir_url( __FILE__ )  . 'css/font_picker.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_font_picker_css' );

  wp_register_style( 'ssbp_count_styles', plugin_dir_url( __FILE__ )  . 'css/count_styles.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_count_styles' );

  wp_enqueue_script('jQuery' );

  wp_register_script( 'ssbp_script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_script' );

  wp_register_script( 'ssbp_social-likes', plugin_dir_url(__FILE__) . 'js/social-likes.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_social-likes' );

  wp_register_script( 'ssbp_font_picker', plugin_dir_url(__FILE__) . 'js/font_picker.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_font_picker' );

  wp_enqueue_style( 'wp-color-picker' ); 
  wp_enqueue_script( 'my-script-handle', plugins_url('js/color_picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );


}
function ssbp_public_scripts() {

  wp_register_style( 'ssbp_style', plugin_dir_url( __FILE__ )  . 'css/style.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_style' );
 wp_register_style( 'ssbp_count_styles', plugin_dir_url( __FILE__ )  . 'css/count_styles.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_count_styles' );
  wp_register_style( 'ssbp_fa', plugin_dir_url( __FILE__ )  . 'css/font-awesome.min.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_fa' );

  wp_register_style( 'ssbp_animate', plugin_dir_url( __FILE__ )  . 'css/animate.css', false, '1.0.0' );
  wp_enqueue_style( 'ssbp_animate' );



  wp_register_script( 'ssbp_cookie', plugin_dir_url(__FILE__) . 'js/cookiejq.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_cookie' );

  wp_enqueue_script('jQuery' );

  wp_register_script( 'ssbp_social-likes', plugin_dir_url(__FILE__) . 'js/social-likes.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_social-likes' );


  wp_register_script( 'ssbp_load_themes', plugin_dir_url(__FILE__) . 'js/load_themes.js', array('jquery'), '1.0', true );
  wp_enqueue_script('ssbp_load_themes' );

}

add_action('admin_menu', 'ssbp_admin_menu');

function ssbp_admin_menu() {

//create new top-level menu
  add_menu_page('Social Share Buttons & Popup', 'Social Share Buttons & Popup', 'administrator', 'ssbp_options_page', 'ssbp_plugin_settings_page' , 'dashicons-share' , 68 );
  add_submenu_page('ssbp_options_page', 'Shortcodes', 'Shortcodes', 'manage_options','ssbp_shortcode_page', 'ssbp_shortcode_page');
  add_submenu_page('ssbp_options_page', 'Support', 'Support', 'manage_options','ssbp_support_page', 'ssbp_support_page');


//call register settings function
  add_action( 'admin_init', 'ssbp_settings' );
}



function ssbp_sanitize_options($value){
  $value = stripslashes($value);
  $value = filter_var($value,FILTER_SANITIZE_STRING);
  $value = sanitize_text_field($value);
  return $value;
}

function ssbp_plugin_settings_page(){
  ?>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <form method="post" action="options.php">
    <?php settings_fields('ssbp_settings_group'); ?>
    <div id="ssbp-side-wrapper">
      <div class="sfba-premium-heading">Get More Awesome Features</div>

      <ul>
        <li>- Unlock All Social Themes</li>
        <li>- Unlock Shortcode Support for All Themes</li>
        <li>- Unlock 200+ Google Fonts for Tagline</li>
        <li>- Unlock All Floating Themes</li>
        <li>- Unlock All Popup Builder Features</li>
        <li>- Unlock All Social Share Counter Themes</li>
        <li>- Unlock All Social Share Counter Features</li>
        <li>- Unlock Shortcodes for Social Counter Themes</li>
        <li>- Fast & Premium Support</li>
        <li>- Unlimited Updates</li>
      </ul>
      <a href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" target="_blank" class="sfbp-premium-button">Get Premium Version $15 Only</a>
    </div>
    <div id="ssbp-side-wrapper-featured">
      <div class="sfba-premium-heading">WordPress Popup Plugin <spam style="font-size: 11px;
    vertical-align: top;">(Featured Plugin)</spam></div>
     <a href="http://www.arrowplugins.com/ultimate-popup/" target="_blank"><img src="<?php echo plugins_url('images/featured-popup.png' , __FILE__); ?>" width="100%"></a>
 
     <strong> <ul>
        
        <li>- 14 Pre Designed Popups</li>
        <li>- Live Preview to see the changes</li>
        <li>- Save subscribers to local database</li>
        <li>- Export Subscribers to CSV file to import in MailChimp or other mailing services</li>
        <li>- MailChimp Integration</li>
        <li>- Fast & Premium Support</li>
        <li>- Mobile Friendly and much more... </li>
      </ul></strong>
      <a style="margin-bottom: 10px !important;" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&plugin=ultimate-popup-creator&TB_iframe=true&width=772&height=805" target="_blank" class="sfbp-premium-button">Try lite Version - It's amazing</a>
      <a href="http://www.arrowplugins.com/ultimate-popup/" target="_blank" class="sfbp-premium-button">Get Premium Version $23 Only</a>
    </div>
    <div class="ssbpmain_wrapper">
      <div class="ssbptab">
        <input type="radio" id="ssbptab-1" name="ssbptab-group-1" checked>
        <label id="ssbptab1" for="ssbptab-1"><strong>Social Share Buttons</strong></label>
        <div class="ssbpcontent">
          <table class="ssbp_settings_table">
            <tr>
              <td>
                <h2>Enable Social Share Buttons: </h2>
              </td>
              <td >
                <input type='checkbox' name="ssbp_enable_social_buttons" class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_social_buttons' value="1" <?php checked('1', get_option('ssbp_enable_social_buttons')); ?>>
                <label id="ssbp_enable_label" for='ssbp_enable_social_buttons' class="ssbp_checkbox_label"></label>
              </td>
            </tr>
            <tr>
              <td>
                <h2>Show Social Share Buttons: </h2>
              </td>
              <td>
                <input type='checkbox' name="ssbp_enable_post" class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_post' value="1" <?php checked('1', get_option('ssbp_enable_post')); ?>>
                <label id="ssbp_enable_label" for='ssbp_enable_post' class="ssbp_checkbox_label">on Posts</label>
              </td>
            </tr>
            <tr>
              <td>
                <h2></h2>
              </td>
              <td>
                <input type='checkbox' name="ssbp_enable_page" class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_page' value="1" <?php checked('1', get_option('ssbp_enable_page')); ?>>
                <label id="ssbp_enable_label" for='ssbp_enable_page' class="ssbp_checkbox_label">on Pages</label>
              </td>
            </tr>
            <tr>
              <td>
                <h2> </h2>
              </td>
              <td>
                <input type='checkbox' name="ssbp_enable_home" class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_home' value="1" <?php checked('1', get_option('ssbp_enable_home')); ?>>
                <label id="ssbp_enable_label" for='ssbp_enable_home' class="ssbp_checkbox_label">on Home</label>
              </td>
            </tr>
            <tr>
              <td>
                <h2> </h2>
              </td>
                <td style="width:500px;">
                <input name="ssbp_enable_front_page" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_front_page' value="1" <?php checked('1', get_option('ssbp_enable_front_page')); ?>>
                <label id="ssbp_enable_label" for='ssbp_enable_front_page' class="ssbp_checkbox_label">on Front Page</label> <br/> <p style="    padding: 0;
                padding-left: 65px;
                padding-top: 15px;
                font-weight: bold;">(If you have static front page)</p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>Sharing Tag Line: </h2>
                 <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <select id="ssbp_sb_tagline_dd" name="">
                    <option value="0" <?php selected( get_option(''),'0'); ?>>Select Sharing Tag Line</option>
                    <option value="1" <?php selected( get_option(''),'1'); ?>>Sharing is Caring!</option>
                    <option value="2" <?php selected( get_option(''),'2'); ?>>Share this article</option>
                    <option value="3" <?php selected( get_option(''),'3'); ?>>Show us some love!</option>
                    <option value="4" <?php selected( get_option(''),'4'); ?>>Show us some love!</option>
                    <option value="5" <?php selected( get_option(''),'5'); ?>>Spread the Love!</option>
                    <option value="6" <?php selected( get_option(''),'6'); ?>>Share Knowledge!</option>
                    <option value="7" <?php selected( get_option(''),'7'); ?>>Happy Sharing!</option>
                    <option value="8" <?php selected( get_option(''),'8'); ?>>Custom Tagline</option>
                  </select>
                  <input id="ssbp_sb_custom_tagline" name=""  type="text" placeholder="Custom Tag Line" value="<?php echo esc_attr(get_option('') ); ?>"/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <h2> </h2>
              </td>
              <td style="width: 450px;">
                <select id="ssbp_sb_font_size_dd" name="">
                  <option value="0" <?php selected( get_option(''),'0'); ?>>Font Size</option>
                  <option value="12px" <?php selected( get_option(''),'12px'); ?>>12px</option>
                  <option value="15px" <?php selected( get_option(''),'15px'); ?>>15px</option>
                  <option value="17px" <?php selected( get_option(''),'17px'); ?>>17px</option>
                  <option value="20px" <?php selected( get_option(''),'20px'); ?>>20px</option>
                  <option value="22px" <?php selected( get_option(''),'22px'); ?>>22px</option>
                  <option value="25px" <?php selected( get_option(''),'25px'); ?>>25px</option>
                  <option value="27px" <?php selected( get_option(''),'27px'); ?>>27px</option>
                  <option value="32px" <?php selected( get_option(''),'32px'); ?>>32px</option>
                  <option value="1" <?php selected( get_option(''),'1'); ?>>Custom Font Size</option>
                </select>
                <input id="ssbp_sb_custom_font_size" name="" type="number" placeholder="Custom Font Size" value="<?php echo esc_attr(get_option('') ); ?>"/>px
              </td>
            </tr>
            <tr>
              <td>
                <h2> </h2>
              </td>
              <td style="width: 450px; padding: 10px 0px;">
                <input id="ssbp_tagline_color" name="" data-alpha="true" class="color-picker" type="text" placeholder="Color" value="<?php echo esc_attr(get_option('') ); ?>"/>
                <input name="" id="ssbp_sb_font_family" class="ssbp_sb_font_family" type="text" value="<?php echo esc_attr(get_option('') ); ?>"/>
              </td>
            </tr>
            <tr>
              <td>
                <h2 style="margin-top: 6px;">Select Location for Buttons: </h2>
              </td>
              <td>
                <select name="ssbp_sb_location">
                  <option value="0" <?php selected( get_option('ssbp_sb_location'),'0'); ?>>Select Location</option>
                  <option value="1" disabled="disabled" <?php selected( get_option(''),'1'); ?>>Top of the post</option>
                  <option value="2" <?php selected( get_option('ssbp_sb_location'),'2'); ?>>At Bottom</option>
                  <option value="3" disabled="disabled" <?php selected( get_option(''),'3'); ?>>Both (Top & Bottom)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <h2 style="margin-top: 6px;">Select Alignment for Buttons: </h2>
              </td>
              <td>
                <select id="ssbp_sb_alignment_dd" name="ssbp_sb_alignment">
                  <option value="0" <?php selected( get_option('ssbp_sb_alignment'),'0'); ?>>Select Location</option>
                  <option value="1" <?php selected( get_option('ssbp_sb_alignment'),'1'); ?>>Align Left</option>
                  <option value="2" disabled="disabled" <?php selected( get_option(''),'2'); ?>>Center Aligned</option>
                  <option value="3" disabled="disabled" <?php selected( get_option(''),'3'); ?>>Align Right</option>
                </select>
              </td>
            </tr>
               <tr>
              <td>
                <h2>Select Social Networks: </h2>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <input name="ssbp_show_facebook_icon_sb" class="ssbp_checbox_settings" type='checkbox'  id='ssbp_show_facebook_icon_sb' value="1" <?php checked('1', get_option('ssbp_show_facebook_icon_sb')); ?>/>
                  <span for="">Facebook</span>
                  <br/>
                  <input name="ssbp_show_twitter_icon_sb" class="ssbp_checbox_settings" type='checkbox' id='ssbp_show_twitter_icon_sb' value="1" <?php checked('1', get_option('ssbp_show_twitter_icon_sb')); ?>/>
                  <span for="">Twitter</span>
                  <br/>
                  <input name="ssbp_show_google_icon_sb" class="ssbp_checbox_settings" type='checkbox'  id='ssbp_show_google_icon_sb' value="1" <?php checked('1', get_option('ssbp_show_google_icon_sb')); ?>/>
                  <span for="">Google+</span>
                  <br/>
                  <input name="ssbp_show_pinterest_icon_sb" class="ssbp_checbox_settings" type='checkbox'  id='ssbp_show_pinterest_icon_sb' value="1" <?php checked('1', get_option('ssbp_show_pinterest_icon_sb')); ?>/>
                  <span for="">Pinterest</span>
                  <br/>
                  <input name="ssbp_show_linkedin_icon_sb" class="ssbp_checbox_settings" type='checkbox'  id='ssbp_show_linkedin_icon_sb' value="1" <?php checked('1', get_option('ssbp_show_linkedin_icon_sb')); ?>/>
                  <span for="">LinkedIn</span>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="width:100% !important">
                <h2>Select Social Buttons Style: (Hover over on icons to see animation effects)</h2>
                 
              </td>
              
            </tr>
            <tr style="height:60px;">
              <td style="width:2%;padding-top:18px;">
                <input id="ssbp_sb_social_selected_theme1" type="radio" name="ssbp_sb_social_selected_theme" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme1" <?php checked('ssbp_sb_social_selected_theme1', get_option('ssbp_sb_social_selected_theme')); ?>"/>
              </td>
              <td style="width:92%">
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme1.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:13px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme2" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme2" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme2.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme3" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme3" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme3.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:28px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme4" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme4" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:14px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme4.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:28px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme5" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme5" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:14px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme5.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:28px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme6" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme6" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:14px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme6.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:28px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme7" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme7" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:14px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme7.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme8" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme8" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme8.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme9" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme9" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme9.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme10" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme10" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme10.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme11" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme11" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme11.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme12" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme12" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme12.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme13" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme13" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme13.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme14" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme14" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme14.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme15" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme15" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme15.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme16" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme16" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme16.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme17" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme17" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme17.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme18" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme18" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme18.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme19" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme19" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme19.php' ); ?>
              </td>
            </tr>
            <tr>
              <td style="width:2%;padding-top:33px;">
                <input disabled="disabled" id="ssbp_sb_social_selected_theme20" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sb_social_selected_theme20" <?php checked('', get_option('')); ?>"/>
              </td>
              <td style="width:92%;padding-top:15px;">
              <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
                <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme20.php' ); ?>
              </td>
            </tr>
          </table>

          <div style="        position: fixed;
          bottom: 61px;
          background: white;
          width: 62%;
          left: 179px;
          text-align: center;
          margin: 0;
          padding: 6px;
          border-top: 2px solid #00a3ab;
          border-bottom: 2px solid #00a3ab;
          ">


          Live Preview
          <p id="live_preview_tagline" style="margin: 0;
          padding: 0;line-height: 1;margin:10px 0;">
        </p>
        <div id="live_preview_social_selected_theme" style="margin: 0;
        padding: 0;line-height: 1;">
        <?php 
        if(get_option('ssbp_sb_social_selected_theme') != ''){
          include( plugin_dir_path( __FILE__ ) .'templates/socialbuttons/'.get_option('ssbp_sb_social_selected_theme').'.php' ); 
        }
        ?>

      </div>

    </div>
    <p class="submit" style="    position: fixed;
    bottom: 0;
    background: rgba(0, 163, 171, 0.22);
    width: 62%;
    left: 179px;
    text-align: center;
    margin: 0;
    padding: 6px;">
    <input id="ssbp_save_settings_button" type="submit" class="" value="Save Changes">
  </p>
</div> 
</div>


<!-- =========================================== SOCIAL FLOATING ICONS ==================================================== -->

<div class="ssbptab">
  <input type="radio" id="ssbptab-2" name="ssbptab-group-1">
  <label id="ssbptab2" for="ssbptab-2"><strong>Social Floating Buttons</strong></label>           
  <div class="ssbpcontent">
    <table class="ssbp_settings_table">
      <tr>
        <td>
          <h2>Enable Floating Buttons: </h2>
        </td>
        <td>
          <input type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' name="ssbp_enable_social_floating" id='ssbp_enable_social_floating' value="1" <?php checked('1', get_option('ssbp_enable_social_floating')); ?>>
          <label id="ssbp_enable_label" for='ssbp_enable_social_floating' class="ssbp_checkbox_label"></label>
        </td>
      </tr>
         <tr>
              <td>
                <h2>Select Social Networks: </h2>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <input name="ssbp_show_facebook_icon_sf" type='checkbox'  id='ssbp_show_facebook_icon_sf' value="1" <?php checked('1', get_option('ssbp_show_facebook_icon_sf')); ?>/>
                  <span for="">Facebook</span>
                  <br/>
                  <input name="ssbp_show_twitter_icon_sf" type='checkbox' id='ssbp_show_twitter_icon_sf' value="1" <?php checked('1', get_option('ssbp_show_twitter_icon_sf')); ?>/>
                  <span for="">Twitter</span>
                  <br/>
                  <input name="ssbp_show_google_icon_sf" type='checkbox'  id='ssbp_show_google_icon_sf' value="1" <?php checked('1', get_option('ssbp_show_google_icon_sf')); ?>/>
                  <span for="">Google+</span>
                  <br/>
                  <input name="ssbp_show_pinterest_icon_sf" type='checkbox'  id='ssbp_show_pinterest_icon_sf' value="1" <?php checked('1', get_option('ssbp_show_pinterest_icon_sf')); ?>/>
                  <span for="">Pinterest</span>
                  <br/>
                  <input name="ssbp_show_linkedin_icon_sf" type='checkbox'  id='ssbp_show_linkedin_icon_sf' value="1" <?php checked('1', get_option('ssbp_show_linkedin_icon_sf')); ?>/>
                  <span for="">LinkedIn</span>
                </div>
              </td>
            </tr>
          <tr>
        <td colspan="2" style="width:100% !important">
          <h2>Select Social Buttons Style:  (Hover over on icons to see animation effects)</h2>
           Disbled themes are included in <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Version</a>
        </td>

      </tr>
    </table>
    <div class="ssbp_floating_selection">
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input id="ssbp_floating_theme_selection1" type="radio" name="ssbp_floating_theme_selection" value="ssbp_floating_theme_selection1" <?php checked('ssbp_floating_theme_selection1', get_option('ssbp_floating_theme_selection')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection1.php' ); ?>
      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection2" type="radio" name="" value="ssbp_floating_theme_selection2" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection2.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection3" type="radio" name="" value="ssbp_floating_theme_selection3" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection3.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection4" type="radio" name="" value="ssbp_floating_theme_selection4" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection4.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection5" type="radio" name="" value="ssbp_floating_theme_selection5" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection5.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection6" type="radio" name="" value="ssbp_floating_theme_selection6" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection6.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection7" type="radio" name="" value="ssbp_floating_theme_selection7" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection7.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection8" type="radio" name="" value="ssbp_floating_theme_selection8" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection8.php' ); ?>

      </div>
      <div class="ssbp_floating_theme">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection9" type="radio" name="" value="ssbp_floating_theme_selection9" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection9.php' ); ?>

      </div>
    </div>
    <div class="ssbp_floating_selection">
      <div class="ssbp_floating_theme theme12-floating">
        <img src="<?php echo plugins_url('images/left_shade.png',__FILE__); ?>"/>
        <div><input disabled="disabled" id="ssbp_floating_theme_selection11" type="radio" name="" value="ssbp_floating_theme_selection11" <?php checked('', get_option('')); ?>"/></div>
        <?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialfloating/ssbp_floating_theme_selection11.php' ); ?>

      </div>
      <p class="submit" style="    position: fixed;
      bottom: 0;
      background: rgba(0, 163, 171, 0.22);
      width: 62%;
      left: 179px;
      text-align: center;
      margin: 0;
      padding: 6px;">
      <input id="ssbp_save_settings_button" type="submit" class="" value="Save Changes">
    </p>
  </div>
</div> 

</div>


<!-- =========================================== SOCIAL BUTTONS POPUP ==================================================== -->
<style>
#ssbp_social_popup{ 
  width: <?php if(get_option('ssbp_popup_width') !=''){echo get_option('ssbp_popup_width');} ?>px; 
  height: <?php if(get_option('ssbp_popup_height') !=''){echo get_option('ssbp_popup_height');} ?>px; 
  border-width: <?php if(get_option('ssbp_popup_border_size') !=''){echo get_option('ssbp_popup_border_size');} ?>px; 
  border-style: <?php if(get_option('ssbp_popup_border_style') !=''){echo get_option('ssbp_popup_border_style');} ?>; 
  border-color: <?php if(get_option('ssbp_popup_border_color') !=''){echo get_option('ssbp_popup_border_color');} ?>; 
  border-radius: <?php if(get_option('ssbp_popup_border_radius') !=''){echo get_option('ssbp_popup_border_radius');} ?>px; 
  background-color: <?php if(get_option('ssbp_popup_background_color') !=''){echo get_option('ssbp_popup_background_color');} ?>; 
  background-image : url('<?php if(get_option('ssbp_popup_background_image_url') !=''){echo get_option('ssbp_popup_background_image_url');} ?>');
  background-repeat: no-repeat; 
  background-size: cover;
}
#ssbp_popup_heading_top_image{
background-image : url('<?php if(get_option('ssbp_popup_heading_top_image_url') !=''){echo get_option('ssbp_popup_heading_top_image_url');} ?>');
background-repeat: no-repeat; 
background-size: cover;
}
#ssbp_popup_subheading_top_image{
background-image : url('<?php if(get_option('ssbp_popup_subheading_image_url') !=''){echo get_option('ssbp_popup_subheading_image_url');} ?>');
background-repeat: no-repeat; 
background-size: cover;
}
#ssbp_popup_heading{
background-color: <?php if(get_option('ssbp_popup_heading_text_container_color') !=''){echo get_option('ssbp_popup_heading_text_container_color');} ?>; 
height: <?php if(get_option('ssbp_popup_heading_text_container_height') !=''){echo get_option('ssbp_popup_heading_text_container_height');} ?>px; 
color: <?php if(get_option('ssbp_popup_heading_text_color') !=''){echo get_option('ssbp_popup_heading_text_color');} ?>; 
font-family: <?php if(get_option('ssbp_popup_heading_font') !=''){echo get_option('ssbp_popup_heading_font');} ?>; 
font-size: <?php if(get_option('ssbp_popup_heading_font_size') !=''){echo get_option('ssbp_popup_heading_font_size');} ?>px; 
margin-top: <?php if(get_option('ssbp_popup_heading_margin_top') !=''){echo get_option('ssbp_popup_heading_margin_top');} ?>px !important; 
line-height: <?php if(get_option('ssbp_popup_heading_text_container_height') !=''){echo get_option('ssbp_popup_heading_text_container_height');} ?>px; 
}
#ssbp_popup_subheading{
background-color: <?php if(get_option('ssbp_popup_subheading_text_container_color') !=''){echo get_option('ssbp_popup_subheading_text_container_color');} ?>; 
height: <?php if(get_option('ssbp_popup_subheading_text_container_height') !=''){echo get_option('ssbp_popup_subheading_text_container_height');} ?>px; 
color: <?php if(get_option('ssbp_popup_subheading_text_color') !=''){echo get_option('ssbp_popup_subheading_text_color');} ?>; 
font-family: <?php if(get_option('ssbp_popup_subheading_font') !=''){echo get_option('ssbp_popup_subheading_font');} ?>; 
font-size: <?php if(get_option('ssbp_popup_subheading_font_size') !=''){echo get_option('ssbp_popup_subheading_font_size');} ?>px; 
margin-top: <?php if(get_option('ssbp_popup_subheading_margin_top') !=''){echo get_option('ssbp_popup_subheading_margin_top');} ?>px !important; 
line-height: <?php if(get_option('ssbp_popup_subheading_text_container_height') !=''){echo get_option('ssbp_popup_subheading_text_container_height');} ?>px; 
}
#ssbp_popup_social_theme{
margin-top: <?php if(get_option('ssbp_popup_social_theme_margin_top') !=''){echo get_option('ssbp_popup_social_theme_margin_top');} ?>px !important; 
margin-left: <?php if(get_option('ssbp_popup_social_theme_margin_left') !=''){echo get_option('ssbp_popup_social_theme_margin_left');} ?>px !important; 
}

</style>
<script>
  jQuery(document).ready(function($) {
    if($('#ssbp_popup_video_url').val() !=''){
      $('#ssbp_popup_video_pan').attr('src',$('#ssbp_popup_video_url').val());
    }
    if($('#ssbp_popup_heading_text').val() !=''){
      $('#ssbp_popup_heading').val($('#ssbp_popup_heading_text').val());
    }
    if(document.getElementById('ssbp_popup_heading_center').checked) {
      $("#ssbp_popup_heading").css('text-align','center');
    } else {
      if($('#ssbp_popup_heading_margin_left').val() !=''){
        $('#ssbp_popup_heading').css('padding-left',$('#ssbp_popup_heading_margin_left').val()+'px');
      }
    }
    if($('#ssbp_popup_subheading_text').val() !=''){
      $('#ssbp_subpopup_heading').val($('#ssbp_popup_subheading_text').val());
    }
    if(document.getElementById('ssbp_popup_subheading_center').checked) {
      $("#ssbp_popup_subheading").css('text-align','center');
    } else {
      if($('#ssbp_popup_subheading_margin_left').val() !=''){
        $('#ssbp_popup_subheading').css('padding-left',$('#ssbp_popup_subheading_margin_left').val()+'px');
      }
    }

    if(document.getElementById('ssbp_popup_social_icons_center').checked) {
      $("#ssbp_popup_social_theme").css('text-align','center');
    } else {
      if($('#ssbp_popup_social_theme_margin_left').val() !=''){
        $('#ssbp_popup_social_theme').css('margin-left',$('#ssbp_popup_social_theme_margin_left').val()+'px');
      }
    }

    if(document.getElementById('ssbp_popup_social_icons_bottom').checked) {
      $("#ssbp_popup_social_theme").css('bottom','0');
      $("#ssbp_popup_social_theme").css('position','absolute');
      $("#ssbp_popup_social_theme").css('width','100%');
      $("#ssbp_popup_social_theme div").css('display','block');

    } 
  });
</script>
<div class="ssbptab">
  <input type="radio" id="ssbptab-3" name="ssbptab-group-1">
  <label id="ssbptab3" for="ssbptab-3"><strong>Social Buttons Popup</strong></label>
  <div class="ssbpcontent">
    <table class="ssbp_settings_table">
      <tr>
        <td>
          <h2>Enable Scoial Popup: </h2>
        </td>
        <td style="width:500px;">
          <input name="ssbp_enable_social_popup" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_social_popup' value="1" <?php checked('1', get_option('ssbp_enable_social_popup')); ?>>
          <label id="ssbp_enable_social_popup" for='ssbp_enable_social_popup' class="ssbp_checkbox_label"></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2>Show Social Popup: </h2>
        </td>
        <td style="width:500px;">
          <input name="ssbp_show_on_posts" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_popup_post' value="1" <?php checked('1', get_option('ssbp_show_on_posts')); ?>>
          <label id="ssbp_enable_label" for='ssbp_enable_popup_post' class="ssbp_checkbox_label">on Posts</label>
        </td>
      </tr>
      <tr>
        <td>
          <h2></h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_popup_page' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_enable_popup_page' class="ssbp_checkbox_label">on Pages <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2> </h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_popup_home' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_enable_popup_home' class="ssbp_checkbox_label">on Home <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2> </h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_popup_front' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_enable_popup_front' class="ssbp_checkbox_label">on Front Page <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></label> <br/> <p style="    padding: 0;
          padding-left: 65px;
          padding-top: 15px;
          font-weight: bold;">(If you have static front page)</p>
        </td>
      </tr>
      <tr>
        <td>
          <h2 style="margin-top: 6px;">Show Popup: </h2>
        </td>
        <td style="width:500px;">
          <select name="ssbp_once_per_website">
            <option value="once_per_page" <?php selected( get_option('ssbp_once_per_website'),'once_per_page'); ?>>Only once per page</option>

            <option disabled="disabled" value="everytime" <?php selected( get_option(''),''); ?>>Everytime page reloads</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <h2 style="margin-top: 6px;">Show Popup After How Many Days: </h2>
        </td>
        <td style="width:500px;">
          <input  disabled="disabled" type="number"  name="" placeholder="" value="<?php echo esc_attr(get_option('') ); ?>"/>
          <p style="padding:0;font-weight:bold;"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Leave empty if you don't want to show popup again</p>
        </td>
      </tr>
      <tr>
        <td>
          <h2 style="margin-top: 6px;">Select Location for Popup: </h2>
        </td>
        <td style="width:500px;">
          <select name="ssbp_popup_location">
            <option value="0" <?php selected( get_option('ssbp_popup_location'),'0'); ?>>Select Location</option>
            <option disabled="disabled" value="left_bottom" <?php selected( get_option(''),'left_bottom'); ?>>Left Bottom</option>
            <option disabled="disabled" value="right_bottom" <?php selected( get_option(''),'right_bottom'); ?>>Right Bottom</option>
            <option value="center" <?php selected( get_option('ssbp_popup_location'),'center'); ?>>Center in the page</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan='2' style="    width: 100%;">
          <h2>Stylize your Popup: </h2><strong>(You'll see live changes as you change styling options)</strong>
        </td>
      </tr>
    </table>
    <div id="ssbp_social_popup_styling">
      <div id="ssbp_social_popup" class="ssbp_social_popup_style">
        <iframe id="ssbp_popup_video_pan" width="100%" height="315" src="" style="display:none;"></iframe>
        <img id="ssbp_popup_heading_top_image" src="" width="100%" style="display:none;"/>
        <p id="ssbp_popup_heading">Show us some love!</p>
        <img id="ssbp_popup_subheading_top_image" src="" width="100%" style="display:none;"/>
        <p id="ssbp_popup_subheading">Share this post to your friends and family</p>
        <img id="ssbp_popup_icons_top_image" src="" width="100%" style="display:none;"/>
        <div id="ssbp_popup_social_theme">
         <?php 
         if(get_option('ssbp_popup_social_selected_theme') != ''){
          include_once( plugin_dir_path( __FILE__ ) .'templates/socialpopups/'.get_option('ssbp_popup_social_selected_theme').'.php' ); 
        }
        ?>
      </div>
    </div>

    <table id="ssbp_social_popup_settings">
      <tr>
        <td width="180px;"><h4>Popup Width:</h4></td>
        <td><input id="ssbp_popup_width" type="number" name="ssbp_popup_width" placeholder="px" value="<?php echo esc_attr(get_option('ssbp_popup_width') ); ?>"/> </td>
      </tr>
      <tr>
        <td><h4>Popup Height:</h4></td>
        <td><input id="ssbp_popup_height" type="number" name="ssbp_popup_height" placeholder="px" value="<?php echo esc_attr(get_option('ssbp_popup_height') ); ?>"/> </td>
      </tr>
      <tr>
        <td><h4>Border Size:</h4></td>
        <td><input id="ssbp_popup_border_size" type="number" name="ssbp_popup_border_size" placeholder="Border size (px)" value="<?php echo esc_attr(get_option('ssbp_popup_border_size') ); ?>"/> </td>
      </tr>
      <tr>
        <td>
          <h4>Border Style:</h4>
        </td>
        <td>
          <select id="ssbp_popup_border_style" name="ssbp_popup_border_style" >
            <option value="0" <?php selected( get_option('ssbp_popup_border_style'),'0'); ?>>Select Border Style</option>
            <option value="solid" <?php selected( get_option('ssbp_popup_border_style'),'solid'); ?>>Solid</option>
            <option value="dashed" <?php selected( get_option('ssbp_popup_border_style'),'dashed'); ?>>Dashed</option>
            <option value="dotted" <?php selected( get_option('ssbp_popup_border_style'),'dotted'); ?>>Dotted</option>
            <option value="groove" <?php selected( get_option('ssbp_popup_border_style'),'groove'); ?>>Groove</option>
            <option value="inset" <?php selected( get_option('ssbp_popup_border_style'),'inset'); ?>>Inset</option>
            <option value="outset" <?php selected( get_option('ssbp_popup_border_style'),'outset'); ?>>Outset</option>
            <option value="ridge" <?php selected( get_option('ssbp_popup_border_style'),'ridge'); ?>>Ridge</option>
            <option value="double" <?php selected( get_option('ssbp_popup_border_style'),'double'); ?>>Doubled</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <h4>Border Color:</h4>
        </td>
        <td>
          <input id="ssbp_popup_bcolor" data-alpha="true" class="color-picker" type="text" placeholder="Color" name="ssbp_popup_border_color" value="<?php echo esc_attr(get_option('ssbp_popup_border_color') ); ?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <h4>Border Radius:</h4>
        </td>
        <td>
          <input id="ssbp_popup_border_radius" type="number" name="ssbp_popup_border_radius" placeholder="Border Radius (px)" value="<?php echo esc_attr(get_option('ssbp_popup_border_radius') ); ?>"/>
        </td>
      </tr>
      <tr style="height:120px;">
        <td>
          <h4>Background Color:</h4>
        </td>
        <td>
          <input id="ssbp_popup_bgcolor" type="text" data-alpha="true" class="color-picker" placeholder="Color" name="ssbp_popup_background_color" value="<?php echo esc_attr(get_option('ssbp_popup_background_color') ); ?>"/>
          <p style="padding:0;margin:0;"><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Background color will not show if Background image is set as background image</strong></p>
        </td>
      </tr>
      <tr style="height:150px;">
        <td>
          <h4>Background Image URL: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
        </td>
        <td>
          <input id="ssbp_popup_bgimage_url" type="text" name="" placeholder="Click HERE to Upload Background Image"/ style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_background_image_url') ); ?>">
          <p style="padding:0;margin:0;"><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Click on the Text Field to select popup background image</strong></p>
          <p style="padding:0;margin:0;    margin-top: 10px;"><input type="button" id="ssbp_popup_bgimage_remove" value="Remove Image" /> </p>
        </td>
      </tr>
      <tr style="height:150px;">
        <td>
          <h4>Heading Top Image: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
          <p style="padding:0;margin:0;"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> This will allow to add image above the heading text</p>
        </td>
        <td>
          <input id="ssbp_popup_htimage_url" type="text" name="" placeholder="Click HERE to Upload Image"/ style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_heading_top_image_url') ); ?>">
          <p style="padding:0;margin:0;"><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Click on the Text Field to select Heading Top Image</strong></p>
          <p style="padding:0;margin:0;    margin-top: 10px;"><input type="button" id="ssbp_popup_himage_remove" value="Remove Image" /> </p>
        </td>
      </tr>
      <tr style="height:150px;">
        <td>
          <h4>Sub Heading Top Image: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
          <p style="padding:0;margin:0;"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> This will allow to add Image above the sub heading text</p>
        </td>
        <td>
          <input id="ssbp_popup_shtimage_url" type="text" name="" placeholder="Click HERE to Upload Image"/ style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_image_url') ); ?>">
          <p style="padding:0;margin:0;"><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Click on the Text Field to select Heading Top Image</strong></p>
          <p style="padding:0;margin:0;    margin-top: 10px;"><input type="button" id="ssbp_popup_shimage_remove" value="Remove Image" /> </p>
        </td>
      </tr>
      <tr style="height:150px;">
        <td>
          <h4>Add YouTube, Vimeo Video: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
          <p style="padding:0;margin:0;"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> This will allow to add Videos at the top of popup</p>
        </td>
        <td>
          <input id="ssbp_popup_video_url" type="text" name="" placeholder="Paste YouTube or Vimeo only URL from broswer here" style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_video_url') ); ?>">
          <p style="padding:0;margin:0;"><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Paste URL in the field from your browser "https://www.youtube.com/watch?v=563lnCF_71s" or like this "https://vimeo.com/163412957"</strong></p>
          <p style="padding:0;margin:0;    margin-top: 10px;"><input type="button" id="ssbp_popup_video_url_remove" value="Remove Video" /> </p>
        </td>
      </tr>
      <tr>
        <td>
          <h4>Heading Text:</h4>
        </td>
        <td>
          <input id="ssbp_popup_heading_text" type="text" name="ssbp_popup_heading_text" placeholder="Share this post" style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_heading_text') ); ?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <h4>Heading Text Container Background Color: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
        </td>
        <td>
          <input id="ssbp_popup_heading_container_bcolor" type="text" data-alpha="true" class="color-picker" placeholder="Color" name="" value="<?php echo esc_attr(get_option('ssbp_popup_heading_text_container_color') ); ?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <h4>Heading Text Container Height: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
        </td>
        <td>
          <input id="ssbp_popup_heading_container_height" type="number" name="" placeholder="px" value="<?php echo esc_attr(get_option('ssbp_popup_heading_text_container_height') ); ?>"/>
        </td>
      </tr>
      <tr>
        <td>
         <h4>Heading Color:</h4>
       </td>
       <td>
        <input id="ssbp_popup_heading_color" data-alpha="true" class="color-picker"  type="text" placeholder="Color" name="ssbp_popup_heading_text_color" value="<?php echo esc_attr(get_option('ssbp_popup_heading_text_color') ); ?>"/>
      </td>
    </tr>
    <tr>
      <td>
        <h4>Heading Font: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
      </td>
      <td>
        <input name="" id="ssbp_popup_heading_font" class="ssbp_popup_heading_font" type="text" value="<?php echo esc_attr(get_option('ssbp_popup_heading_font') ); ?>"/>
      </td>
    </tr>
    <tr>
      <td>
        <h4>Heading Font Size:</h4>
      </td>
      <td>
        <input id="ssbp_popup_heading_font_size" type="number" name="ssbp_popup_heading_font_size" placeholder="Font size (px)" value="<?php echo esc_attr(get_option('ssbp_popup_heading_font_size') ); ?>"/>
      </td>
    </tr>
    <tr>
      <td>
        <h4>Heading Margin Top:</h4>
      </td>
      <td>
       <input id="ssbp_popup_heading_margin_top" type="number" name="ssbp_popup_heading_margin_top" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_heading_margin_top') ); ?>"/>
     </td>
   </tr>
   <tr>
    <td>
      <h4>Heading Margin Left:</h4>
    </td>
    <td>
      <input id="ssbp_popup_heading_margin_left" type="number" name="ssbp_popup_heading_margin_left" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_heading_margin_left') ); ?>"/><br/>
      <input id="ssbp_popup_heading_center" type="checkbox" name="ssbp_popup_heading_text_center" value="1" <?php checked('1', get_option('ssbp_popup_heading_text_center')); ?> />
      <label id="ssbp_popup_heading_center_label" for='ssbp_popup_heading_center'>Make it Center Aligned</label>
    </td>
  </tr>
  <tr>
    <td>
      <h4>Sub-Heading Text Container Background Color: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
    </td>
    <td>
      <input id="ssbp_popup_subheading_container_bcolor" type="text" data-alpha="true" class="color-picker" placeholder="Color" name="" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_text_container_color') ); ?>"/>
    </td>
  </tr>
  <tr>
    <td>
      <h4>Sub-Heading Text Container Height: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
    </td>
    <td>
      <input id="ssbp_popup_subheading_container_height" type="number" name="" placeholder="px" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_text_container_height') ); ?>"/>
    </td>
  </tr>
  <tr>
    <td>
      <h4>Sub-Heading Text:</h4>
    </td>
    <td>
      <input id="ssbp_popup_subheading_text" type="text" name="ssbp_popup_subheading_text" placeholder="Share this post to your friends and family." style="width:90%" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_text') ); ?>"/>
    </td>
  </tr>
  <tr>
    <td>
     <h4>Sub-Heading Color: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
   </td>
   <td>
    <input id="ssbp_subheading_color" data-alpha="true" class="color-picker" name="" type="text" placeholder="Color" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_text_color') ); ?>"/>
  </td>
</tr>
<tr>
  <td>
    <h4>Sub-Heading Font: <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></h4>
  </td>
  <td>
    <input name="" id="ssbp_popup_subheading_font" class="ssbp_popup_subheading_font" type="text" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_font') ); ?>"/>
  </td>
</tr>
<tr>
  <td>
    <h4>Sub-Heading Font Size:</h4>
  </td>
  <td>
    <input id="ssbp_popup_subheading_font_size" type="number" name="ssbp_popup_subheading_font_size" placeholder="Font size (px)" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_font_size') ); ?>"/>
  </td>
</tr>
<tr>
  <td>
    <h4>Sub-Heading Margin Top:</h4>
  </td>
  <td>
   <input id="ssbp_popup_subheading_margin_top" type="number" name="ssbp_popup_subheading_margin_top" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_margin_top') ); ?>"/>
 </td>
</tr>
<tr>
  <td>
    <h4>Sub-Heading Margin Left:</h4>
  </td>
  <td>
    <input id="ssbp_popup_subheading_margin_left" type="number" name="ssbp_popup_subheading_margin_left" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_subheading_margin_left') ); ?>"/><br/>
    <input id="ssbp_popup_subheading_center" name="ssbp_popup_subheading_text_center" type="checkbox" value="1" <?php checked('1', get_option('ssbp_popup_subheading_text_center')); ?>/>
    <label id="ssbp_popup_subheading_center_label" for='ssbp_popup_subheading_center'>Make it Center Aligned</label>
  </td>
</tr>
</table>
<table>
  <tr>
    <td colspan="2" style="width:100% !important">
      <h2>Select Social Buttons Style:  (Hover over on icons to see animation effects)</h2>
      Disabled themes are included in  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Version</a>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <h4 style="margin:0;">Social Buttons Margin Top:</h4>
      <input id="ssbp_popup_social_icons_margin_top" type="number" name="ssbp_popup_social_theme_margin_top" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_social_theme_margin_top') ); ?>"/>
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <h4>Social Buttons Margin Left:</h4>
     <input id="ssbp_popup_social_icons_margin_left" type="number" name="ssbp_popup_social_theme_margin_left" placeholder="(px)" value="<?php echo esc_attr(get_option('ssbp_popup_social_theme_margin_left') ); ?>"/>
     <p style="    padding-left: 0;padding-top: 30px;">
      <input id="ssbp_popup_social_icons_center" name="ssbp_popup_social_theme_center" type="checkbox" value="1" <?php checked('1', get_option('ssbp_popup_social_theme_center')); ?>/>
      <label id="ssbp_popup_social_icons_center_label" for='ssbp_popup_social_icons_center'>Make Social Icons Center Aligned</label>
    </p>
    <p style="    padding-left: 0;padding-top: 0;margin:0;">
      <input id="ssbp_popup_social_icons_bottom" type="checkbox" name="ssbp_popup_social_theme_stick_to_bottom" value="1" <?php checked('1', get_option('ssbp_popup_social_theme_stick_to_bottom')); ?>/>
      <label id="ssbp_popup_social_icons_bottom_label" for='ssbp_popup_social_icons_bottom'>Stick icons to bottom</label>
    </p>
  </td>
</tr>
   <tr>
              <td>
                
              </td>
              <td style="width: 450px;">
              <h2>Select Social Networks: </h2>
                <div class="select-style">
                  <input name="ssbp_show_facebook_icon_sp" type='checkbox'  id='ssbp_show_facebook_icon_sp' value="1" <?php checked('1', get_option('ssbp_show_facebook_icon_sp')); ?>/>
                  <span for="">Facebook</span>
                  <br/>
                  <input name="ssbp_show_twitter_icon_sp" type='checkbox' id='ssbp_show_twitter_icon_sp' value="1" <?php checked('1', get_option('ssbp_show_twitter_icon_sp')); ?>/>
                  <span for="">Twitter</span>
                  <br/>
                  <input name="ssbp_show_google_icon_sp" type='checkbox'  id='ssbp_show_google_icon_sp' value="1" <?php checked('1', get_option('ssbp_show_google_icon_sp')); ?>/>
                  <span for="">Google+</span>
                  <br/>
                  <input name="ssbp_show_pinterest_icon_sp" type='checkbox'  id='ssbp_show_pinterest_icon_sp' value="1" <?php checked('1', get_option('ssbp_show_pinterest_icon_sp')); ?>/>
                  <span for="">Pinterest</span>
                  <br/>
                   <input name="ssbp_show_linkedin_icon_sp" type='checkbox'  id='ssbp_show_linkedin_icon_sp' value="1" <?php checked('1', get_option('ssbp_show_linkedin_icon_sp')); ?>/>
                  <span for="">LinkedIn</span>
                </div>
              </td>
            </tr>
<tr style="height:60px;">
  <td style="width:2%;padding-top:18px;">
    <input id="ssbp_selected_popup_skin1" type="radio" name="ssbp_popup_social_selected_theme" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme1" <?php checked('ssbp_social_popup_theme1', get_option('ssbp_popup_social_selected_theme')); ?>/>
  </td>
  <td style="width:92%">
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme1.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:13px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin2" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme2" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme2.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin3" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme3" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme3.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin8" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme4" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme4.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin9" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme5" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme5.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin10" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme6" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme6.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin11" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme7" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme7.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin12" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme8" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme8.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin13" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme9" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme9.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin14" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme10" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme10.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin15" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme11" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme11.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin16" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme12" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme12.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin17" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme13" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme13.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin18" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme14" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme14.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin19" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme15" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme15.php' ); ?>
  </td>
</tr>
<tr>
  <td style="width:2%;padding-top:33px;">
    <input disabled="disabled" id="ssbp_selected_popup_skin20" type="radio" name="" class="ssbp_popup_radio_selection" style="display: block;margin-top: -15px;" value="ssbp_social_popup_theme16" <?php checked('', get_option('')); ?>/>
  </td>
  <td style="width:92%;padding-top:15px;">
  <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
    <?php include( plugin_dir_path( __FILE__ ) . 'templates/socialpopups/ssbp_social_popup_theme16.php' ); ?>
  </td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<p class="submit" style="    position: fixed;
bottom: 0;
background: rgba(0, 163, 171, 0.22);
width: 62%;
left: 179px;
text-align: center;
margin: 0;
padding: 6px;">
<input id="ssbp_save_settings_button" type="submit" class="" value="<?php _e( 'Save Changes' ); ?>" />
</p>
</div>
</div> 

</div>
<div class="ssbptab">
  <input type="radio" id="ssbptab-4" name="ssbptab-group-1">
  <label id="ssbptab4" for="ssbptab-4"><strong>Simple Social Share Buttons with Counters</strong></label>
  <div class="ssbpcontent">
     <table class="ssbp_settings_table">
      <tr>
        <td>
          <h2>Enable Social Share Buttons: </h2>
        </td>
        <td style="width:500px;">
          <input name="ssbp_enable_social_likes" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_enable_social_likes' value="1" <?php checked('1', get_option('ssbp_enable_social_likes')); ?>>
          <label id="ssbp_enable_social_likes" for='ssbp_enable_social_likes' class="ssbp_checkbox_label"></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2>Show Social Share  Buttons: </h2>
        </td>
        <td style="width:500px;">
          <input name="ssbp_show_sl_on_post" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_show_sl_on_post' value="1" <?php checked('1', get_option('ssbp_show_sl_on_post')); ?>>
          <label id="ssbp_enable_label" for='ssbp_show_sl_on_post' class="ssbp_checkbox_label">on Posts</label>
        </td>
      </tr>
      <tr>
        <td>
          <h2></h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_show_sl_page' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_show_sl_page' class="ssbp_checkbox_label">on Pages <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2> </h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_show_sl_home' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_show_sl_home' class="ssbp_checkbox_label">on Home <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></label>
        </td>
      </tr>
      <tr>
        <td>
          <h2> </h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_show_sl_front_page' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_enable_label" for='ssbp_show_sl_front_page' class="ssbp_checkbox_label">on Front Page</label> <br/> <p style="    padding: 0;
          padding-left: 65px;
          padding-top: 15px;
          font-weight: bold;">(If you have static front page) <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 10px;">Premium Feature</a></p>
        </td>
      </tr>
      <tr>
        <td>
          <h2>Show Counter: </h2>
        </td>
        <td style="width:500px;">
          <input name="" type='checkbox' class='ssbp_checkbox ios8-switch ios8-switch-lg' id='ssbp_show_sl_counter' value="1" <?php checked('1', get_option('')); ?>>
          <label id="ssbp_show_sl_counter" for='ssbp_show_sl_counter' class="ssbp_checkbox_label"></label> <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 12px;margin-top:17px;display:block;">Premium Feature</a>
        </td>
      </tr>
             <tr>
              <td>
                <h2>Select Social Networks: </h2>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <input name="ssbp_show_facebook_icon" type='checkbox'  id='ssbp_show_facebook_icon' value="1" <?php checked('1', get_option('ssbp_show_facebook_icon')); ?>/>
                  <span for="">Facebook</span>
                  <br/>
                  <input name="ssbp_show_twitter_icon" type='checkbox' id='ssbp_show_twitter_icon' value="1" <?php checked('1', get_option('ssbp_show_twitter_icon')); ?>/>
                  <span for="">Twitter</span>
                  <br/>
                  <input name="ssbp_show_google_icon" type='checkbox'  id='ssbp_show_google_icon' value="1" <?php checked('1', get_option('ssbp_show_google_icon')); ?>/>
                  <span for="">Google+</span>
                  <br/>
                  <input name="ssbp_show_pinterest_icon" type='checkbox'  id='ssbp_show_pinterest_icon' value="1" <?php checked('1', get_option('ssbp_show_pinterest_icon')); ?>/>
                  <span for="">Pinterest</span>
                  <br/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <h2>Twitter via: </h2>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <input id="ssbp_sl_twitter_handle" name="ssbp_sl_twitter_handle"  type="text" placeholder="wordpress" value="<?php echo esc_attr(get_option('ssbp_sl_twitter_handle') ); ?>"/><br/> e.g @wordpress (Without "@" sign)
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <h2>Pinterest Image URL: </h2>
              </td>
              <td style="width: 450px;">
                <div class="select-style">
                  <input id="ssbp_sl_pinterest_url" name="ssbp_sl_pinterest_url"  type="text" placeholder="" value="<?php echo esc_attr(get_option('ssbp_sl_pinterest_url') ); ?>"/><br/> Leave empty if you want to use post's feature image
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <h2 style="margin-top: 6px;">Select Location for Like Buttons: </h2>
              </td>
              <td>
                <select name="ssbp_sl_location">
                  <option value="0" <?php selected( get_option('ssbp_sl_location'),'0'); ?>>Select Location</option>
                  <option value="1" disabled="disabled" <?php selected( get_option(''),'1'); ?>>Top of the post</option>
                  <option value="2" <?php selected( get_option('ssbp_sl_location'),'2'); ?>>At Bottom</option>
                  <option value="3" disabled="disabled" <?php selected( get_option(''),'3'); ?>>Both (Top & Bottom)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <h2 style="margin-top: 6px;">Select Alignment for Like Buttons: </h2>
              </td>
              <td>
                <select id="ssbp_sl_alignment_dd" name="ssbp_sl_alignment">
                  <option value="0" <?php selected( get_option('ssbp_sl_alignment'),'0'); ?>>Select Location</option>
                  <option value="1" <?php selected( get_option('ssbp_sl_alignment'),'1'); ?>>Align Left</option>
                  <option value="2" disabled="disabled" <?php selected( get_option(''),'2'); ?>>Center Aligned</option>
                  <option value="3" disabled="disabled" <?php selected( get_option(''),'3'); ?>>Align Right</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <h2>Select Social Share Button Style: </h2>
              </td>
              <td style="width: 450px;">
              </td>
            </tr>
            
      </table>
      <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Classic Horizontal</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 32px;margin-right: 10px;">
          <input id="ssbp_sl_selected_theme1" type="radio" name="ssbp_sl_selected_theme" class="ssbp_radio_selection" value="ssbp_sl_selected_theme1" <?php checked('ssbp_sl_selected_theme1', get_option('ssbp_sl_selected_theme')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/classicle_horizontal.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Flat Horizontal</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 28px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme2" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme2" <?php checked('ssbp_sl_selected_theme2', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>

              <img src="<?php echo plugins_url( 'images/flat_horizontal.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Opaque Horizontal</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 27px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme3" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme3" <?php checked('ssbp_sl_selected_theme3', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/opaque_horizontal.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Clear Horizontal</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 25px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme4" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme4" <?php checked('ssbp_sl_selected_theme4', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/clear_horizontal.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Clear Verticle</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 25px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme5" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme5" <?php checked('ssbp_sl_selected_theme5', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/clear_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
      <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
      <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Flat Verticle</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 28px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme6" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme6" <?php checked('ssbp_sl_selected_theme6', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/flat_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Opaque verticle</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 27px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme7" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme7" <?php checked('ssbp_sl_selected_theme7', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/opaque_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Classic Verticle</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 25px;margin-right: 10px;">
           <input disabled="disabled" id="ssbp_sl_selected_theme8" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme8" <?php checked('ssbp_sl_selected_theme8', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/classic_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
        <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
        <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Clear Verticle (Sharing Icons will show on click)</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 25px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme9" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme9" <?php checked('ssbp_sl_selected_theme9', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/clear_share_collapse_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
      <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
      <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Flat Verticle (Sharing Icons will show on click)</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 28px;margin-right: 10px;">
           <input disabled="disabled" id="ssbp_sl_selected_theme10" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme10" <?php checked('ssbp_sl_selected_theme10', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/flat_share_collapse_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Opaque verticle (Sharing Icons will show on click)</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 27px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme11" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme11" <?php checked('ssbp_sl_selected_theme11', get_option('')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/opaque_share_collapse_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
       <div id="ssbp_social_like_theme1" class="ssbp_social_like_theme_wrapper" style="border: 1px dashed black;padding: 5px;margin: 5px;">
       <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Theme</a>
        <span id="ssbp_social_like_theme_name" style="display: block;font-weight: bold;">Classic Verticle (Sharing Icons will show on click)</span>
        <div class="ssbp_social_like_theme_inner_wrapper" style="display:inline-block;">
          <span style="float: left;margin-top: 25px;margin-right: 10px;">
            <input disabled="disabled" id="ssbp_sl_selected_theme12" type="radio" name="" class="ssbp_radio_selection" value="ssbp_sl_selected_theme12" <?php checked('ssbp_sl_selected_theme12', get_option('ssbp_sl_selected_theme')); ?>" style="display:block;"/>
          </span>
          <span style="float: left;margin-top: 5px;display: block;">
            <div>
              <img src="<?php echo plugins_url( 'images/classic_share_collapse_verticle.png', __FILE__ ); ?>"/>
            </div>
          </span>
        </div>
      </div>
  </div>
  <p class="submit" style="z-index:999999999;position: fixed;bottom: 0;background: rgba(0, 163, 171, 0.22);width: 62%;left: 179px;text-align: center;margin: 0;padding: 6px;">
  <input id="ssbp_save_settings_button" type="submit" class="" value="Save Changes">
</p>
</div> 
</div>


</div>
</form>
<?php 


}

function ssbp_support_page(){
  ?>

<div id="container">
        <div id="upc_contact-form" class="clearfix">
            <h1>Get 24/7 Support!</h1>
            <h2>Contact us anytime, we'll do our best to answer and resolve all your questions as soon as possible</h2>

            <?php
            //init variables
            $cf = array();
            $sr = false;
            
            if(isset($_SESSION['cf_returndata'])){
                $cf = $_SESSION['cf_returndata'];
                $sr = true;
            }
            ?>
            <ul id="upc_errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="upc_info">There were some problems with your form submission:</li>
                <?php 
                if(isset($cf['errors']) && count($cf['errors']) > 0) :
                    foreach($cf['errors'] as $error) :
                ?>
                <li><?php echo $error ?></li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <p id="upc_success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
            <form method="post" action="<?php echo plugins_url('/includes/upc_process.php',__FILE__); ?>">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required autofocus />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />
                
                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                
                <label for="enquiry">Enquiry: </label>
                <select id="enquiry" name="enquiry">
                    <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                    <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Support</option>
                </select>
                
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="Submit!" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </div>
    </div>

  <?php

}   

function ssbp_shortcode_page(){
  ?>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <h1>Shortcodes</h1>
  <h2>>> Copy these shortcodes to add various social themes into your posts, pages or in widget area</h2>
  <h2>>> If Shortcode won't work in your text widget install <a target="_blank" href="https://wordpress.org/plugins/enable-shortcode-and-php-support-in-text-widget/">Enable Shortcode in Widget (free)</a> plugin it will start working </h2>
  <div>
  <h3><span style="text-decoration:underline;">Note</span>: Activate Plugin and Enable the Social Share Buttons and Social Share Counter to make shortcode work correctly</h3>
  <img src="<?php echo plugins_url('images/enable.png',__FILE__); ?>"/>
</div>
  <table id="shortcodes_table_ssbp" width="98%" style="text-align:left;font-size:17px;" border="0">
    <tr>
      <th>Shortcode</th>
      <th>Theme</th>
    </tr>
    <tr>
      <td><strong>[ssbp-theme1] (FREE)</strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme1.php' ); ?></td>
    </tr>
    <tr>
      <td><strong>[ssbp-theme2] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme2.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme3] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme3.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme4] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme4.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme5] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme5.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme6] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme6.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme7] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme7.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme8] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme8.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme9] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme9.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme10] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme10.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme11] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme11.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme12] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme12.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme13] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme13.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme14] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme14.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme15] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme15.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme16] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme16.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme17] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme17.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme18] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme18.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme19] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme19.php' ); ?></td>
    </tr>

<tr>
      <td><strong>[ssbp-theme20] <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></strong></td>
      <td><?php include_once( plugin_dir_path( __FILE__ ) . 'templates/socialbuttons/ssbp_sb_social_selected_theme20.php' ); ?></td>
    </tr>

  </table>
  <hr style="margin-top:20px; margin-bottom:20px;color:black;border: 2px solid black;"/>
<h1>Shortcodes for Social Share Counter Theme</h1>
<div>
  <h3>Enable Social Share Counters to use shortcode </h3>
  <img src="<?php echo plugins_url('images/enable-sl.png',__FILE__); ?>"/>
</div>
<div>
  <h3>>> [ssbp-social-likes] << Will generate social icons like this (FREE)</h3>
  <img src="<?php echo plugins_url('images/sss-simple.png',__FILE__); ?>"/>
</div>
<div>
  <h3>>> [ssbp-social-likes float="left"] << Left positioning <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></h3>
  <img src="<?php echo plugins_url('images/sss-float-left.png',__FILE__); ?>"/>
</div>

<div>
  <h3>>> [ssbp-social-likes float="right"] << Right positioning <a target="_blank" href="http://sites.fastspring.com/arrowplugins/product/socialsharebuttonspopuppremium" style="font-size: 15px;">Premium Feature</a></h3>
  <img src="<?php echo plugins_url('images/sss-float-right.png',__FILE__); ?>"/>
</div>
  <?php

}   
register_uninstall_hook( __FILE__, 'ssbp_uninstall_plugin' ); 
require('public/social-share-buttons.php');
require('public/social-share-buttons-popups.php');
require('public/social-floating-buttons.php');
require('public/social-like-buttons.php');
require('includes/ssbp_settings.php');
require('includes/ssbp_shortcodes.php');



require('includes/ssbp_uninstall.php');
