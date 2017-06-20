<?php
// Registering css. (Added outside shortcode script for w3validation and seo solution
add_action('wp_enqueue_scripts', 
    function () {
        wp_enqueue_style('insta-gallery', INSGALLERY_URL . '/assests/style.css');
    });
add_shortcode('Insta-Gallery', 'instaGallery');

// Insta-Gallery shortcode handler
function instaGallery($atts)
{
    $av = shortcode_atts(
        array(
            'user' => '',
            'limit' => '12',
            'type' => '',
            'gal_cols' => '3',
            'gal_imgpopup' => true,
            'gal_imghover' => true,
            'sli_effect' => 'fade',
            'sli_timeout' => 5000,
            'sli_navarrows' => true,
            'sli_dots' => true,
            'sli_scroll' => true
        ), $atts);
    
    $av['gal_imgpopup'] = filter_var($av['gal_imgpopup'], FILTER_VALIDATE_BOOLEAN);
    $av['gal_imghover'] = filter_var($av['gal_imghover'], FILTER_VALIDATE_BOOLEAN);
    $av['sli_navarrows'] = filter_var($av['sli_navarrows'], FILTER_VALIDATE_BOOLEAN);
    $av['sli_dots'] = filter_var($av['sli_dots'], FILTER_VALIDATE_BOOLEAN);
    $av['sli_scroll'] = filter_var($av['sli_scroll'], FILTER_VALIDATE_BOOLEAN);
    
    if (empty($av['user']))
        return 'Please enter valid Instagram Account';
    $results = '';
    global $INSTAGAL_Results;
    
  
    
    $instagram_user = $av['user'];
    $instagram_user = trim($instagram_user);
    if (substr($instagram_user, 0, 1) == '@')
        $instagram_user = substr($instagram_user, 1);
    if (! empty($INSTAGAL_Results[$instagram_user])) {
        $instaItems = $INSTAGAL_Results[$instagram_user];
    } else {
        
        $inURL = 'https://www.instagram.com/' . $instagram_user . '/media/';
        $instaItems = '';
        if (function_exists('curl_version')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $inURL);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $contents = curl_exec($ch);
            if (curl_error($ch)) {
                // for debugging
                // echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
            $instaItems = $contents;
        } else {
            if (ini_get('allow_url_fopen')) {
                $instaItems = @file_get_contents($inURL);
            } else {
                if (current_user_can('administrator')) {
                    $results .= '<p>Your server does\'t have enabled the required extensions/functions.</p>';
                } else {
                    // nothing to show
                }
            }
        }
        
        $INSTAGAL_Results[$instagram_user] = $instaItems;
    }
    
    $instaItems = @json_decode($instaItems);
    if (! empty($instaItems->items)) {
        if ($av['type'] == 'gallery') {
            include (INSGALLERY_PATH . '/templates/gallery.php');
        } else {
            include (INSGALLERY_PATH . '/templates/slider.php');
        }
    } else {
        if (current_user_can('administrator')) {
            $results .= '<p>ERROR: unable to get results. your instagram account may be private OR other issue. </p>';
        }
    }
    return $results;
}
	
    
