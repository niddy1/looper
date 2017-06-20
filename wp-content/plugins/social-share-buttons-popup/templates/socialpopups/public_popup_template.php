<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$heading_font = str_replace(' ','+',get_option('ssbp_popup_heading_font'));
$subheading_font = str_replace(' ','+',get_option('ssbp_popup_subheading_font'));
$popup_location = get_option('ssbp_popup_location');
$popup_height_set = get_option('ssbp_popup_height');
?>
<script type="text/javascript">
    jQuery(document).ready(function($){

        var heading_font = "<?php echo $heading_font ?>";
        var subheading_font = "<?php echo $subheading_font ?>";
        var popup_location = "<?php echo $popup_location ?>";

        if(heading_font !='' || subheading_font != ''){

            WebFontConfig = { google: { families: [ <?php if ($heading_font != '') {echo "'".$heading_font."'".',';}  ?> <?php if ($subheading_font != '') {echo "'".$subheading_font."'";}  ?> ] } , active : function() { 
                if(popup_location == 'left_bottom' || popup_location == 'right_bottom'){

                    if($('#ssbp_popup_cookie_value').val() == 'once_per_page'){
                        if($.cookie('ssbp_popup_cookie') != 'seen'){
                            if($('#ssbp_popup_auto_show').val() != ''){
                                setTimeout(function(){
                                    $('#ssbp_social_popup').fadeIn( "slow",function (){
                                        $('#ssbp_social_popup').show();
                                        $('#ssbp_social_popup').css('bottom','0');

                                    } );
                                },$('#ssbp_popup_auto_show').val());
                                if($('#ssbp_popup_show_after_days').val() != '')
                                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                                else
                                    {$.cookie('ssbp_popup_cookie','seen');}
                            }else{
                                $('#ssbp_social_popup').fadeIn( "slow",function (){
                                    $('#ssbp_social_popup').show();
                                    $('#ssbp_social_popup').css('bottom','0');

                                } );
                                if($('#ssbp_popup_show_after_days').val() != '' && $.cookie('ssbp_popup_cookie') !='')
                                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                                else
                                    {$.cookie('ssbp_popup_cookie','seen');}
                            }
                        }
                    }
                    if($('#ssbp_popup_cookie_value').val() == 'everytime'){
                        if($('#ssbp_popup_auto_show').val() != ''){
                            setTimeout(function(){
                                $('#ssbp_social_popup').fadeIn( "slow",function (){
                                    $('#ssbp_social_popup').show();
                                    $('#ssbp_social_popup').css('bottom','0');

                                } );
                            },$('#ssbp_popup_auto_show').val());
                            $.removeCookie('ssbp_popup_cookie');
                        }else{
                            $('#ssbp_social_popup').fadeIn( "slow",function (){
                                $('#ssbp_social_popup').show();
                                $('#ssbp_social_popup').css('bottom','0');

                            } );
                            $.removeCookie('ssbp_popup_cookie');
                        }
                    }
//document.getElementById('ssbp_social_popup').style.display = 'block';
}
else{
    if($('#ssbp_popup_cookie_value').val() == 'once_per_page'){
        if($.cookie('ssbp_popup_cookie') != 'seen'){
            if($('#ssbp_popup_auto_show').val() != ''){
                setTimeout(function(){
                    $('#popup_template').fadeIn( "slow",function (){
                        $('#popup_template').show();
                        $('#popup_template').css('bottom','0');
                    } );
                },$('#ssbp_popup_auto_show').val());
                if($('#ssbp_popup_show_after_days').val() != '')
                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                else
                    {$.cookie('ssbp_popup_cookie','seen');}
            }else{
                $('#popup_template').fadeIn( "slow",function (){
                    $('#popup_template').show();
                    $('#popup_template').css('bottom','0');

                } );
                if($('#ssbp_popup_show_after_days').val() != '' && $.cookie('ssbp_popup_cookie') !='')
                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                else
                    {$.cookie('ssbp_popup_cookie','seen');}
            }
        }
    }
    if($('#ssbp_popup_cookie_value').val() == 'everytime'){

        if($('#ssbp_popup_auto_show').val() != ''){

            setTimeout(function(){
                $('#popup_template').fadeIn( "slow",function (){
                    $('#popup_template').show();

                } );
            },$('#popup_template').val());
            $.removeCookie('popup_template');
        }else{
            $('#popup_template').show();
            $('#ssbp_close_button').addClass('slideInDown');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
/* $('#popup_template').fadeIn( "slow",function (){
$('#popup_template').show();
} );
$.removeCookie('ssbp_popup_cookie');*/
}
}
//document.getElementById('popup_template').style.display = 'block';

}
} };
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();


}

else{

    if(popup_location == 'left_bottom' || popup_location == 'right_bottom'){

        if($('#ssbp_popup_cookie_value').val() == 'once_per_page'){
            if($.cookie('ssbp_popup_cookie') != 'seen'){
                if($('#ssbp_popup_auto_show').val() != ''){
                    setTimeout(function(){
                        $('#ssbp_social_popup').fadeIn( "slow",function (){
                            $('#ssbp_social_popup').show();
                            $('#ssbp_social_popup').css('bottom','0');

                        } );
                    },$('#ssbp_popup_auto_show').val());
                    if($('#ssbp_popup_show_after_days').val() != '')
                        {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                    else
                        {$.cookie('ssbp_popup_cookie','seen');}
                }else{
                    $('#ssbp_social_popup').fadeIn( "slow",function (){
                        $('#ssbp_social_popup').show();
                        $('#ssbp_social_popup').css('bottom','0');

                    } );
                    if($('#ssbp_popup_show_after_days').val() != '' && $.cookie('ssbp_popup_cookie') !='')
                        {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                    else
                        {$.cookie('ssbp_popup_cookie','seen');}
                }
            }
        }
        if($('#ssbp_popup_cookie_value').val() == 'everytime'){
            if($('#ssbp_popup_auto_show').val() != ''){
                setTimeout(function(){
                    $('#ssbp_social_popup').fadeIn( "slow",function (){
                        $('#ssbp_social_popup').show();
                        $('#ssbp_social_popup').css('bottom','0');

                    } );
                },$('#ssbp_popup_auto_show').val());
                $.removeCookie('ssbp_popup_cookie');
            }else{
                $('#ssbp_social_popup').fadeIn( "slow",function (){
                    $('#ssbp_social_popup').show();
                    $('#ssbp_social_popup').css('bottom','0');

                } );
                $.removeCookie('ssbp_popup_cookie');
            }
        }
//document.getElementById('ssbp_social_popup').style.display = 'block';
}
else{
    if($('#ssbp_popup_cookie_value').val() == 'once_per_page'){
        if($.cookie('ssbp_popup_cookie') != 'seen'){
            if($('#ssbp_popup_auto_show').val() != ''){
                setTimeout(function(){
                    $('#popup_template').fadeIn( "slow",function (){
                        $('#popup_template').show();
                        $('#popup_template').css('bottom','0');
                    } );
                },$('#ssbp_popup_auto_show').val());
                if($('#ssbp_popup_show_after_days').val() != '')
                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                else
                    {$.cookie('ssbp_popup_cookie','seen');}
            }else{
                $('#popup_template').fadeIn( "slow",function (){
                    $('#popup_template').show();
                    $('#popup_template').css('bottom','0');

                } );
                if($('#ssbp_popup_show_after_days').val() != '' && $.cookie('ssbp_popup_cookie') !='')
                    {$.cookie('ssbp_popup_cookie','seen', { expires: parseInt($('#ssbp_popup_show_after_days').val() )});}
                else
                    {$.cookie('ssbp_popup_cookie','seen');}
            }
        }
    }
    if($('#ssbp_popup_cookie_value').val() == 'everytime'){

        if($('#ssbp_popup_auto_show').val() != ''){

            setTimeout(function(){
                $('#popup_template').fadeIn( "slow",function (){
                    $('#popup_template').show();

                } );
            },$('#popup_template').val());
            $.removeCookie('popup_template');
        }else{
            $('#popup_template').show();
            $('#ssbp_close_button').addClass('slideInDown');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
            $('#popup_template').addClass('zoomIn');
/* $('#popup_template').fadeIn( "slow",function (){
$('#popup_template').show();
} );
$.removeCookie('ssbp_popup_cookie');*/
}
}
//document.getElementById('popup_template').style.display = 'block';

}


}




$('#ssbp_close_button').click(function (){
    <?php if(get_option('ssbp_popup_location') == 'center'){ ?>
        $('#popup_template').fadeOut( "slow",function (){
            $('#popup_template').remove();
        } );
        <?php }else{ ?>
            $('#ssbp_social_popup').css('bottom','');
            $('#ssbp_social_popup').css('bottom','<?php echo '-'.$popup_height_set.'-20'; ?>px');
            <?php  } ?>
        });
});

</script>
<script>
  $(document).ready(function () {
   
setTimeout( function(){ 
  var ssbp_show_facebook_icon_sp = '<?php echo get_option('ssbp_show_facebook_icon_sp') ?>';
  var ssbp_show_twitter_icon_sp = '<?php echo get_option('ssbp_show_twitter_icon_sp') ?>';
  var ssbp_show_google_icon_sp = '<?php echo get_option('ssbp_show_google_icon_sp') ?>';
  var ssbp_show_pinterest_icon_sp = '<?php echo get_option('ssbp_show_pinterest_icon_sp') ?>';
  var ssbp_show_linkedin_icon_sp = '<?php echo get_option('ssbp_show_linkedin_icon_sp') ?>';

  if(ssbp_show_facebook_icon_sp != '1'){
    $('.ssbp_social_popup_style .ssbp_facebook_icon').remove();
  }
  if(ssbp_show_twitter_icon_sp != '1'){
    $('.ssbp_social_popup_style .ssbp_twitter_icon').remove();
  }
  if(ssbp_show_google_icon_sp != '1'){
    $('.ssbp_social_popup_style .ssbp_googleplus_icon').remove();
  }
  if(ssbp_show_pinterest_icon_sp != '1'){
    $('.ssbp_social_popup_style .ssbp_pinterest_icon').remove();
  }
  if(ssbp_show_linkedin_icon_sp != '1'){
    $('.ssbp_social_popup_style .ssbp_linkedin_icon').remove();
  }

}  , 0.1 );
});
</script>
<style type="text/css">

    #popup_template{
        position: fixed;
        z-index: 99;
        width: 100%;
        display: inline-block;
        top: 0;
        background: rgba(0,0,0,0.6);
        height: 100%;
    }

    #ssbp_social_popup{
        width: <?php echo esc_attr(get_option('ssbp_popup_width') ); ?>px !important;
        height:<?php echo esc_attr(get_option('ssbp_popup_height') ); ?>px !important;
        border-style: <?php echo esc_attr(get_option('ssbp_popup_border_style') ); ?> !important;
        border-width: <?php echo esc_attr(get_option('ssbp_popup_border_size') ); ?>px !important;
        border-radius: <?php echo esc_attr(get_option('ssbp_popup_border_radius') ); ?>px !important;
        border-color: <?php echo esc_attr(get_option('ssbp_popup_border_color') ); ?> !important;
        background-color: <?php echo esc_attr(get_option('ssbp_popup_background_color') ); ?> !important;
        background-image: url('<?php echo esc_attr(get_option('ssbp_popup_background_image_url') ); ?>') !important;
        background-repeat: no-repeat;
        background-size: cover;
        position: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "right_bottom"){ echo 'fixed'; } else { echo 'absolute'; }?>;
        margin: auto;
        top: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "right_bottom"){ echo ''; } else { echo '0'; }?>;
        right: <?php if (get_option('ssbp_popup_location') == "right_bottom" || get_option('ssbp_popup_location') == "center"){ echo '0'; }  else { echo ''; }
        ?>;
        bottom: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "right_bottom") {echo '-'.get_option('ssbp_popup_height')-20;} else{ echo '0'; } ?>px;
        left: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "center"){ echo '0'; } else { echo ''; }?>;
    }
    #ssbp_popup_heading_top_image{
        background-repeat: no-repeat;
        background-size: 100%;
        display: <?php if (get_option('ssbp_popup_heading_top_image_url') != ""){ echo 'block'; } else { echo 'none'; }?>;
    }
    #ssbp_popup_heading{
        background-color: <?php echo esc_attr(get_option('ssbp_popup_heading_text_container_color') ); ?>;
        height: <?php echo esc_attr(get_option('ssbp_popup_heading_text_container_height') ); ?>px !important;
        color: <?php echo esc_attr(get_option('ssbp_popup_heading_text_color') ); ?> !important;
        font-family: '<?php echo esc_attr(get_option("ssbp_popup_heading_font") ); ?>' !important;
        font-size: <?php echo esc_attr(get_option('ssbp_popup_heading_font_size') ); ?>px !important;
        margin-top: <?php echo esc_attr(get_option('ssbp_popup_heading_margin_top') ); ?>px !important;
        padding-left: <?php echo esc_attr(get_option('ssbp_popup_heading_margin_left') ); ?>px !important;
        text-align: <?php if(get_option('ssbp_popup_heading_text_center') == '1') {echo 'center';}?> !important;
        line-height: <?php if(get_option('ssbp_popup_heading_text_container_height') == '') {echo get_option('ssbp_popup_heading_text_container_height');}?>px !important;
    }
    #ssbp_popup_subheading_top_image{
        background-repeat: no-repeat;
        background-size: 100%;
        display: <?php if (get_option('ssbp_popup_subheading_image_url') != ""){ echo 'block'; } else { echo 'none'; }?>;
    }
    #ssbp_popup_subheading{
        background-color: <?php echo esc_attr(get_option('ssbp_popup_subheading_text_container_color') ); ?>;
        height: <?php echo esc_attr(get_option('ssbp_popup_subheading_text_container_height') ); ?>px !important;
        color: <?php echo esc_attr(get_option('ssbp_popup_subheading_text_color') ); ?> !important;
        font-family: '<?php echo esc_attr(get_option("ssbp_popup_subheading_font") ); ?>' !important;
        font-size: <?php echo esc_attr(get_option('ssbp_popup_subheading_font_size') ); ?>px !important;
        margin-top: <?php echo esc_attr(get_option('ssbp_popup_subheading_margin_top') ); ?>px !important;
        margin-left: <?php echo esc_attr(get_option('ssbp_popup_subheading_margin_left') ); ?>px !important;
        text-align: <?php if(get_option('ssbp_popup_subheading_text_center') == '1') {echo 'center';}?> !important;
    }
    #ssbp_social_popup_selected_user_theme{
        width: 100%;
        position: absolute;
        bottom: <?php if (get_option('ssbp_popup_social_theme_stick_to_bottom') == "1"){ echo '0'; } else { echo ''; }?>;;
        text-align: <?php if (get_option('ssbp_popup_social_theme_center') == "1"){ echo 'center'; } else { echo 'left'; }?>;
        margin-top: <?php echo esc_attr(get_option('ssbp_popup_social_theme_margin_top') ); ?>px !important;
        margin-left: <?php echo esc_attr(get_option('ssbp_popup_social_theme_margin_left') ); ?>px !important;
    }
    #ssbp_close_button{
        width: 30px;
        height: 30px;
        position: absolute;
        left: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "center"){ echo ''; } else { echo '0'; }?>;
        right: <?php if (get_option('ssbp_popup_location') == "left_bottom" || get_option('ssbp_popup_location') == "center"){ echo '0'; } else { echo ''; }?>;
        margin-top: -20px;
        margin: -20px;
        cursor: pointer;
    }
</style>

<?php
if( get_option('ssbp_popup_location') == 'center'){
    ?>
    <div id="popup_template" class="animated" style="display:none;">
        <div id="ssbp_social_popup" class="ssbp_social_popup_style animated">
            <a class="animated"><img id="ssbp_close_button" class="ssbp_close_button_class animated" src="<?php echo plugins_url('../../images/close_button.png', __FILE__); ?>"></a>
            <iframe class="animated" id="ssbp_popup_video_pan" width="100%" height="315" src="" style="display:none;"></iframe>
            <img class="animated" id="ssbp_popup_heading_top_image" src="<?php echo esc_attr(get_option('ssbp_popup_heading_top_image_url') ); ?>" width="100%" />
            <p class="animated" id="ssbp_popup_heading"><?php echo esc_attr(get_option('ssbp_popup_heading_text') ); ?></p>
            <img class="animated" id="ssbp_popup_subheading_top_image" src="<?php echo esc_attr(get_option('ssbp_popup_subheading_image_url') ); ?>" width="100%" />
            <p class="animated" id="ssbp_popup_subheading"><?php echo esc_attr(get_option('ssbp_popup_subheading_text') ); ?></p>
            <img class="animated" id="ssbp_popup_icons_top_image" src="" width="100%" style="display:none;"/>
            <?php include_once( plugin_dir_path( __FILE__ ) .''.get_option('ssbp_popup_social_selected_theme').'.php' ); ?>
        </div>
    </div>
    <?php } else{ ?>
        <div id="ssbp_social_popup" class="ssbp_social_popup_style" style="display:none;">
            <a><img id="ssbp_close_button" class="ssbp_close_button_class" src="<?php echo plugins_url('../../images/close_button.png', __FILE__); ?>"></a>
            <iframe id="ssbp_popup_video_pan" width="100%" height="315" src="" style="display:none;"></iframe>
            <img id="ssbp_popup_heading_top_image" src="<?php echo esc_attr(get_option('ssbp_popup_heading_top_image_url') ); ?>" width="100%" />
            <p id="ssbp_popup_heading"><?php echo esc_attr(get_option('ssbp_popup_heading_text') ); ?></p>
            <img id="ssbp_popup_subheading_top_image" src="<?php echo esc_attr(get_option('ssbp_popup_subheading_image_url') ); ?>" width="100%" />
            <p id="ssbp_popup_subheading"><?php echo esc_attr(get_option('ssbp_popup_subheading_text') ); ?></p>
            <img id="ssbp_popup_icons_top_image" src="" width="100%" style="display:none;"/>
            <div id="ssbp_popup_social_theme">
                <?php 
                if(get_option('ssbp_popup_social_selected_theme') != ''){
                    include_once( plugin_dir_path( __FILE__ ) .''.get_option('ssbp_popup_social_selected_theme').'.php' ); 
                }
                ?>
            </div>
        </div>
        <?php } ?>
        <input type="hidden" id="ssbp_popup_cookie_value" value="<?php echo esc_attr(get_option('ssbp_once_per_website') ); ?>"/>
        <input type="hidden" id="ssbp_popup_auto_show" value="<?php echo esc_attr(get_option('ssbp_auto_show_popup') ); ?>"/>
        <input type="hidden" id="ssbp_popup_auto_close" value="<?php echo esc_attr(get_option('ssbp_auto_close_popup') ); ?>"/>
        <input type="hidden" id="ssbp_popup_show_after_days" value="<?php echo esc_attr(get_option('ssbp_show_popup_after_days') ); ?>"/>