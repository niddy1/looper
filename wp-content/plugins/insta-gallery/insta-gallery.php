<?php
/*
 * Plugin Name: Instagram Gallery
 * Description: Display pictures on your website from Instagram.
 * Author: Karan Singh
 * Version: 1.1.3
 */

// plugin global constants
define('INSGALLERY_PATH', plugin_dir_path(__FILE__));
define('INSGALLERY_URL', plugins_url('', __FILE__));
// define('INSGALLERY_PLUGIN_DIR', plugin_basename(dirname(__FILE__)));
// define('INSGALLERY_DEBUG', false);
class INSGALLERY
{

    public function __construct()
    {
        register_activation_hook(__FILE__, array(
            $this,
            'activate'
        ));
        register_deactivation_hook(__FILE__, 
            array(
                $this,
                'deactivate'
            ));
        
        if (is_admin()) {
            add_action('admin_menu', array(
                $this,
                'loadMenus'
            ));
        }
        include_once (INSGALLERY_PATH . '/libs/wp-front.php');
    }

    public function activate()
    {}

    public function deactivate()
    {}

    function loadMenus()
    {
        add_options_page('Instagram Gallery', 'Instagram Gallery', 'manage_options', 'insta_gallery', 
            array(
                $this,
                'loadPanel'
            ));
        // add_menu_page();
    }

    function loadPanel()
    {
        require_once (INSGALLERY_PATH . '/libs/wp-panel.php');
    }
}
new INSGALLERY();
