
<style>
  .ssb_tagline{
    margin: 5px 0 !important;
    color: <?php if( get_option('ssbp_sb_tagline_color') == ''){ echo ''; }{echo get_option('ssbp_sb_tagline_color');} ?>;
    font-family: "<?php if(get_option('ssbp_sb_font_family')!=''){echo get_option('ssbp_sb_font_family');} ?>";
    font-size: <?php if(get_option('ssbp_sb_font_size')=='0'){echo '12px';}
    else if(get_option('ssbp_sb_font_size')=='1'){echo get_option('ssbp_sb_custom_font_size').'px';}
    else{ echo get_option('ssbp_sb_font_size'); }
    ?>;
    text-align: <?php if(get_option('ssbp_sb_alignment')=='0'){echo 'left';}
    else if(get_option('ssbp_sb_alignment')=='1'){echo 'left';}
    else if(get_option('ssbp_sb_alignment')=='2'){echo 'center';}
    else{ echo 'right'; }
    ?>;
  }
  .ssbp_selected_theme{
    text-align: <?php if(get_option('ssbp_sb_alignment')=='0'){echo 'left';}
    else if(get_option('ssbp_sb_alignment')=='1'){echo 'left';}
    else if(get_option('ssbp_sb_alignment')=='2'){echo 'center';}
    else{ echo 'right'; }
    ?>;
  }
</style>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    font_name = "<?php echo get_option('ssbp_sb_font_family');?>";
    var tagline_font = font_name.split(' ').join('+');
    function addGoogleFont(FontName) {
      $("head").append("<link href='https://fonts.googleapis.com/css?family=" + tagline_font + "' rel='stylesheet' type='text/css'>");
    }
addGoogleFont(tagline_font); // for example

setTimeout( function(){ 
  var ssbp_show_facebook_icon_sb = '<?php echo get_option('ssbp_show_facebook_icon_sb') ?>';
  var ssbp_show_twitter_icon_sb = '<?php echo get_option('ssbp_show_twitter_icon_sb') ?>';
  var ssbp_show_google_icon_sb = '<?php echo get_option('ssbp_show_google_icon_sb') ?>';
  var ssbp_show_pinterest_icon_sb = '<?php echo get_option('ssbp_show_pinterest_icon_sb') ?>';
  var ssbp_show_linkedin_icon_sb = '<?php echo get_option('ssbp_show_linkedin_icon_sb') ?>';

  if(ssbp_show_facebook_icon_sb != '1'){
    $('.ssbp_selected_theme .ssbp_facebook_icon').remove();
  }
  if(ssbp_show_twitter_icon_sb != '1'){
    $('.ssbp_selected_theme .ssbp_twitter_icon').remove();
  }
  if(ssbp_show_google_icon_sb != '1'){
    $('.ssbp_selected_theme .ssbp_googleplus_icon').remove();
  }
  if(ssbp_show_pinterest_icon_sb != '1'){
    $('.ssbp_selected_theme .ssbp_pinterest_icon').remove();
  }
  if(ssbp_show_linkedin_icon_sb != '1'){
    $('.ssbp_selected_theme .ssbp_linkedin_icon').remove();
  }

}  , 0.1 );
});
</script>