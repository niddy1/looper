<?php
$insta_limit = $av['limit'];
$sli_effect = $av['sli_effect'];
$sli_timeout = (int) $av['sli_timeout'];
$sli_navarrows = $av['sli_navarrows'];
$sli_dots = $av['sli_dots'];
$sli_scroll = $av['sli_scroll'];

global $instasli_COUNT;
if(empty($instasli_COUNT))$instasli_COUNT = 0;
$instasli_COUNT++;

// Registering scripts.
// wp_enqueue_style('swiper', INSGALLERY_URL . '/assests/swiper/swiper.min.css');
wp_enqueue_script('swiper', INSGALLERY_URL . '/assests/swiper/swiper.jquery.min.js');

$i = 1;

$results .= '<div class="swiper-container" id="instaslider-'.$instasli_COUNT.'">';
$results .= '<div class="swiper-wrapper">';
foreach ($instaItems->items as $item) {
    if (! empty($item->images->standard_resolution->url)) {
        $results .= '<div class="swiper-slide" >';
        $results .= '<img src="' . $item->images->standard_resolution->url . '" /></div>';
    }
    $i ++;
    if (($insta_limit != 0) && ($i > $insta_limit))
        break;
}
$results .= '</div>';
$results .= '<div class="swiper-pagination"></div>';
if ($sli_navarrows) {
$results .= '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';
}
if ($sli_scroll) {
$results .= '<div class="swiper-scrollbar"></div>';
}
$results .= '</div>';

$JSISSelector = '#instaslider-'.$instasli_COUNT;
    
$results .= "<script> 
  jQuery(document).ready(function () {
  var mySwiper = new Swiper ('$JSISSelector', {
    loop: true,";
if ($sli_dots) {
    $results .= "pagination: '.swiper-pagination',
    ";
}
if ($sli_navarrows) {
    $results .= "nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',";
}
if ($sli_scroll) {
    $results .= "scrollbar: '.swiper-scrollbar',";
}

$results .= "effect: '$sli_effect',autoplay: '$sli_timeout',
}); 
  });
  </script>";

return $results;