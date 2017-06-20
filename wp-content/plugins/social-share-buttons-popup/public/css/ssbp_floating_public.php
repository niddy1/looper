<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
   
setTimeout( function(){ 
  var ssbp_show_facebook_icon_sf = '<?php echo get_option('ssbp_show_facebook_icon_sf') ?>';
  var ssbp_show_twitter_icon_sf = '<?php echo get_option('ssbp_show_twitter_icon_sf') ?>';
  var ssbp_show_google_icon_sf = '<?php echo get_option('ssbp_show_google_icon_sf') ?>';
  var ssbp_show_pinterest_icon_sf = '<?php echo get_option('ssbp_show_pinterest_icon_sf') ?>';
  var ssbp_show_linkedin_icon_sf = '<?php echo get_option('ssbp_show_linkedin_icon_sf') ?>';

  if(ssbp_show_facebook_icon_sf != '1'){
    $('.ssbp_selected_floating_theme .ssbp_facebook_icon').remove();
  }
  if(ssbp_show_twitter_icon_sf != '1'){
    $('.ssbp_selected_floating_theme .ssbp_twitter_icon').remove();
  }
  if(ssbp_show_google_icon_sf != '1'){
    $('.ssbp_selected_floating_theme .ssbp_googleplus_icon').remove();
  }
  if(ssbp_show_pinterest_icon_sf != '1'){
    $('.ssbp_selected_floating_theme .ssbp_pinterest_icon').remove();
  }
  if(ssbp_show_linkedin_icon_sf != '1'){
    $('.ssbp_selected_floating_theme .ssbp_linkedin_icon').remove();
  }

}  , 0.1 );
});
</script>