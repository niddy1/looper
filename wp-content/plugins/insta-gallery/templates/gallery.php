<?php
$insta_limit    = $av['limit'];
$gal_cols       = $av['gal_cols'];
$gal_imgpopup   = $av['gal_imgpopup'];
$gal_imghover   = $av['gal_imghover'];

global $instagal_COUNT;
if(empty($instagal_COUNT))$instagal_COUNT = 0;
$instagal_COUNT++;
// Registering scripts.
if ($gal_imgpopup) {
    // wp_enqueue_style('magnific', INSGALLERY_URL . '/assests/magnific-popup/magnific-popup.css');
    wp_enqueue_script('magnific', INSGALLERY_URL . '/assests/magnific-popup/jquery.magnific-popup.min.js');
}
$i = 1;

$results .= '<div class="instagallery-items" id="instagallery-'.$instagal_COUNT.'">';
foreach ($instaItems->items as $item) {
    if (! empty($item->images)) {
        $img_src = ($gal_cols == 1) ? $item->images->standard_resolution->url : $item->images->low_resolution->url;
        $hovered = $gal_imghover ? 'ighover' : '';
        $results .= '<div class="ig-item '.$hovered.' cols-' . $gal_cols . '" style="width:' . (100 / $gal_cols) . '%;">';

        $results .= '<a href="' . $item->images->standard_resolution->url . '">';
        $results .= '<img src="' . $img_src . '" />';
        $results .= '</a>';
        $results .= '</div>';
    }
    $i ++;
    if (($insta_limit != 0) && ($i > $insta_limit))
        break;
}
$results .= '</div>';

if ($gal_imgpopup) {

    $JSIGSelector = '#instagallery-'.$instagal_COUNT.' .ig-item a';
   $rs = <<<JS
    <script>
    jQuery(document).ready(function ($) {
      jQuery('$JSIGSelector').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        zoom: {
            enabled: true, 
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        },
        gallery: {
            enabled: true
        },    
      });
    });
    </script>
JS;
   $results .= $rs;
}
return $results;
