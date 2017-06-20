<?php
add_shortcode('ssbp-social-likes', 'ssbp_social_likes_shortcode');
add_shortcode('ssbp-theme1', 'ssbp_social_buttons_theme1_shortcode');


function ssbp_social_likes_shortcode($atts,$content,$tag){

	ob_start();
	$value = '';
	$ssbp_social_likes_shortcode_atts = shortcode_atts( array(
		'float' => 'left'
		), $atts );
	if($ssbp_social_likes_shortcode_atts['float'] == 'left' ){
		$value = 'left';
	}
	if($ssbp_social_likes_shortcode_atts['float'] == 'right' ){
		$value = 'right';
	}
	?>
	<div class="social-likes" data-counters="no" data-title=" " style="float:<?php echo $value; ?>">
		<div class="facebook" title="Share link on Facebook">Facebook</div>
		<div class="twitter" data-via=" " title="Share link on Twitter">Twitter</div>
		<div class="plusone" title="Share link on Google+">Google+</div>
		<div class="pinterest" title="Share image on Pinterest" data-media=" ">Pinterest</div>
	</div>
	<?php

	return ob_get_clean();
	ob_end_clean();
}

function ssbp_social_buttons_theme1_shortcode($atts,$content,$tag){

	ob_start();
	$value = '';
	$ssbp_social_likes_shortcode_atts = shortcode_atts( array(
		'float' => 'left'
		), $atts );
	if($ssbp_social_likes_shortcode_atts['float'] == 'left' ){
		$value = 'left';
	}
	if($ssbp_social_likes_shortcode_atts['float'] == 'right' ){
		$value = 'right';
	}
	?>
	<div class="mn-social-bottom-c">
		<a class="mn-social-bottom-facebook-theme1"><i class="fa fa-facebook"></i></a>
		<a class="mn-social-bottom-twitter-theme1"><i class="fa fa-twitter"></i></a>
		<a class="mn-social-bottom-linkedin-theme1"><i class="fa fa-linkedin"></i></a>
		<a class="mn-social-bottom-google-theme1"><i class="fa fa-google-plus"></i></a>
		<a class="mn-social-bottom-pinterest-theme1"><i class="fa fa-pinterest-p"></i></a>
	</div>
	<?php

	return ob_get_clean();
	ob_end_clean();
}




function twitter_share_custom_options( $options, $defaults, $attributes )
{
  $options['count'] = 'verticle';
  print_r($options);
  return $options;
}
add_filter( 'shortcode_atts_twitter_share', 'twitter_share_custom_options', 10, 3 );