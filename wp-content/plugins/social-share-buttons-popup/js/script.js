jQuery(document).ready(function($) {

    $('#ssbp_popup_bgimage_url').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
// mutiple: true if you want to upload multiple files at once
multiple: false
}).open()
        .on('select', function(e){
// This will return the selected image from the Media Uploader, the result is an object
var uploaded_image = image.state().get('selection').first();
// We convert uploaded_image to a JSON object to make accessing it easier
// Output to the console uploaded_image
var image_url = uploaded_image.toJSON().url;
// Let's assign the url value to the input field
$('#ssbp_social_popup').css('background-image','url('+image_url+')');

$('#ssbp_popup_bgimage_url').val(image_url);

});
    });


    $('#ssbp_popup_htimage_url').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
// mutiple: true if you want to upload multiple files at once
multiple: false
}).open()
        .on('select', function(e){
// This will return the selected image from the Media Uploader, the result is an object
var uploaded_image = image.state().get('selection').first();
// We convert uploaded_image to a JSON object to make accessing it easier
// Output to the console uploaded_image
var image_url = uploaded_image.toJSON().url;
// Let's assign the url value to the input field
$('#ssbp_popup_heading_top_image').css('display','block');
$('#ssbp_popup_heading_top_image').attr('src',image_url);

$('#ssbp_popup_htimage_url').val(image_url);

});
    });


    $('#ssbp_popup_shtimage_url').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
// mutiple: true if you want to upload multiple files at once
multiple: false
}).open()
        .on('select', function(e){
// This will return the selected image from the Media Uploader, the result is an object
var uploaded_image = image.state().get('selection').first();
// We convert uploaded_image to a JSON object to make accessing it easier
// Output to the console uploaded_image
var image_url = uploaded_image.toJSON().url;
// Let's assign the url value to the input field
$('#ssbp_popup_subheading_top_image').css('display','block');
$('#ssbp_popup_subheading_top_image').attr('src',image_url);

$('#ssbp_popup_shtimage_url').val(image_url);

});
    });


    var s = $("#ssbp_social_popup_styling");
    var pos = s.position();                    
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
        if (windowpos >= pos.top) {
            $('.ssbp_social_popup_style').addClass("ssbp_stick");
        } else {
            $('.ssbp_social_popup_style').removeClass("ssbp_stick"); 
        }
    });

    $('#ssbp_popup_width').on('input',function(e){
        $('#ssbp_social_popup').css('width',$('#ssbp_popup_width').val()+"px");
    });

    $('#ssbp_popup_height').on('input',function(e){
        $('#ssbp_social_popup').css('height',$('#ssbp_popup_height').val()+"px");
    });

    $('#ssbp_popup_border_size').on('input',function(e){
        $('#ssbp_social_popup').css('border-width',$('#ssbp_popup_border_size').val()+"px");
    });

    $( "#ssbp_popup_border_style" ).change(function() {
        if( this.value == 'solid'){
            $('#ssbp_social_popup').css('border-style','solid');
        }
        if( this.value == 'dashed'){
            $('#ssbp_social_popup').css('border-style','dashed');
        }
        if( this.value == 'dotted'){
            $('#ssbp_social_popup').css('border-style','dotted');
        }
        if( this.value == 'groove'){
            $('#ssbp_social_popup').css('border-style','groove');
        }
        if( this.value == 'inset'){
            $('#ssbp_social_popup').css('border-style','inset');
        }
        if( this.value == 'outset'){
            $('#ssbp_social_popup').css('border-style','outset');
        }
        if( this.value == 'ridge'){
            $('#ssbp_social_popup').css('border-style','ridge');
        }
        if( this.value == 'double'){
            $('#ssbp_social_popup').css('border-style','double');
        }

    });
    $('#ssbp_popup_border_radius').on('input',function(e){
        $('#ssbp_social_popup').css('border-radius',$('#ssbp_popup_border_radius').val()+"px");
    });

    $('#ssbp_popup_heading_text').keyup(function(){
        $('#ssbp_popup_heading').html($('#ssbp_popup_heading_text').val());
    });
if($('#ssbp_popup_heading_text').val() != ''){
    $('#ssbp_popup_heading').html($('#ssbp_popup_heading_text').val());
}
if($('#ssbp_popup_subheading_text').val() != ''){
    $('#ssbp_popup_subheading').html($('#ssbp_popup_subheading_text').val());
}
    $('#ssbp_popup_heading_font_size').change(function(){
        $('#ssbp_popup_heading').css('font-size',$('#ssbp_popup_heading_font_size').val()+'px');
    });

    $('#ssbp_popup_heading_margin_top').change(function(){
        $('#ssbp_popup_heading').css('margin-top',$('#ssbp_popup_heading_margin_top').val()+'px');
    });

    $('#ssbp_popup_heading_margin_left').change(function(){
        $('#ssbp_popup_heading').css('margin-left',$('#ssbp_popup_heading_margin_left').val()+'px');
    });

    $('#ssbp_popup_subheading_text').keyup(function(){
        $('#ssbp_popup_subheading').html($('#ssbp_popup_subheading_text').val());
    });

    $('#ssbp_popup_subheading_font_size').change(function(){
        $('#ssbp_popup_subheading').css('font-size',$('#ssbp_popup_subheading_font_size').val()+'px');
    });

    $('#ssbp_popup_subheading_margin_top').change(function(){
        $('#ssbp_popup_subheading').css('margin-top',$('#ssbp_popup_subheading_margin_top').val()+'px');
    });

    $('#ssbp_popup_subheading_margin_left').change(function(){
        $('#ssbp_popup_subheading').css('margin-left',$('#ssbp_popup_subheading_margin_left').val()+'px');
    });

    $('#ssbp_popup_heading_container_height').change(function(){
        $('#ssbp_popup_heading').css('height',$('#ssbp_popup_heading_container_height').val()+'px');
        $('#ssbp_popup_heading').css('line-height',$('#ssbp_popup_heading_container_height').val()+'px');
    });

    $('#ssbp_popup_subheading_container_height').change(function(){
        $('#ssbp_popup_subheading').css('height',$('#ssbp_popup_subheading_container_height').val()+'px');
        $('#ssbp_popup_subheading').css('line-height',$('#ssbp_popup_subheading_container_height').val()+'px');
    });

    $("#ssbp_popup_heading_center").on("click", function(){
        if(ssbp_popup_heading_center.checked) {
            $('#ssbp_popup_heading').css('text-align','center');
            $("#ssbp_popup_heading_margin_left").prop('disabled', true);
        } else {
            $('#ssbp_popup_heading').css('text-align','left');
            $("#ssbp_popup_heading_margin_left").prop('disabled', false);

        }
    });

    $("#ssbp_popup_subheading_center").on("click", function(){
        if(ssbp_popup_subheading_center.checked) {
            $('#ssbp_popup_subheading').css('text-align','center');
            $("#ssbp_popup_subheading_margin_left").prop('disabled', true);
        } else {
            $('#ssbp_popup_subheading').css('text-align','left');
            $("#ssbp_popup_subheading_margin_left").prop('disabled', false);

        }
    });



    $('#ssbp_popup_social_icons_margin_top').change(function(){
        $('#ssbp_popup_social_theme').css('margin-top',$('#ssbp_popup_social_icons_margin_top').val()+'px');
    });

    $('#ssbp_popup_social_icons_margin_left').change(function(){
        $('#ssbp_popup_social_theme').css('margin-left',$('#ssbp_popup_social_icons_margin_left').val()+'px');
    });


    $("#ssbp_popup_social_icons_center").on("click", function(){
        if(ssbp_popup_social_icons_center.checked) {
            $('#ssbp_popup_social_theme').css('text-align','center');
            $("#ssbp_popup_social_icons_margin_left").prop('disabled', true);
        } else {
            $('#ssbp_popup_social_theme').css('text-align','left');
            $("#ssbp_popup_social_icons_margin_left").prop('disabled', false);

        }
    });

    $("#ssbp_popup_social_icons_bottom").on("click", function(){
        if(ssbp_popup_social_icons_bottom.checked) {
            $('#ssbp_popup_social_theme').css({
                'bottom':'0',
                'position':'absolute',
                'width':'100%'
            });
            $("#ssbp_popup_social_icons_margin_left").prop('disabled', true);
            $("#ssbp_popup_social_icons_margin_top").prop('disabled', true);

        } else {
            $('#ssbp_popup_social_theme').css({
                'bottom':'none',
                'position':'relative',
                'width':'100%'
            });
            $('#ssbp_popup_social_theme').css('text-align','left');
            $("#ssbp_popup_social_icons_margin_left").prop('disabled', false);
            $("#ssbp_popup_social_icons_margin_top").prop('disabled', false);

        }
    });




    $('#ssbp_selected_popup_skin1').click(function() {
        if($('#ssbp_selected_popup_skin1').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c"><a class="mn-social-bottom-facebook-theme1"><i class="fa fa-facebook"></i></a><a class="mn-social-bottom-twitter-theme1"><i class="fa fa-twitter"></i></a><a class="mn-social-bottom-linkedin-theme1"><i class="fa fa-linkedin"></i></a><a class="mn-social-bottom-google-theme1"><i class="fa fa-google-plus"></i></a><a class="mn-social-bottom-pinterest-theme1"><i class="fa fa-pinterest-p"></i></a></div>');
        }
    });

    $('#ssbp_selected_popup_skin2').click(function() {
        if($('#ssbp_selected_popup_skin2').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme2"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme2"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme2"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme2"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme2"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin3').click(function() {
        if($('#ssbp_selected_popup_skin3').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c theme3"> <a class="mn-social-bottom-facebook-theme3"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme3"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme3"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme3"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme3"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });



    $('#ssbp_selected_popup_skin8').click(function() {
        if($('#ssbp_selected_popup_skin8').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme7"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme7"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme7"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme7"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme7"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin9').click(function() {
        if($('#ssbp_selected_popup_skin9').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme8"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme8"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme8"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme8"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme8"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin10').click(function() {
        if($('#ssbp_selected_popup_skin10').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_buttons"> <a href="#" class="btn facebook"> <span class="label">Facebook</span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label">Google+</span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label">Twitter</span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label">Linkedin</span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label">Pinterest</span> <span class="icon fa fa-pinterest-p"></span> </a> </div> ');
        }
    });

    $('#ssbp_selected_popup_skin11').click(function() {
        if($('#ssbp_selected_popup_skin11').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_buttons2"> <a href="#" class="btn facebook"> <span class="label"><i id="ssbp_top_fa" class="fa fa-facebook" aria-hidden="true"></i></span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label"><i id="ssbp_top_fa" class="fa fa-google-plus" aria-hidden="true"></i></span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label"><i id="ssbp_top_fa" class="fa fa-twitter" aria-hidden="true"></i></span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label"><i id="ssbp_top_fa" class="fa fa-linkedin" aria-hidden="true"></i></span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label"><i id="ssbp_top_fa" class="fa fa-pinterest-p" aria-hidden="true"></i></span> <span class="icon fa fa-pinterest-p"></span> </a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin12').click(function() {
        if($('#ssbp_selected_popup_skin12').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_buttons3"> <a href="#" class="btn facebook"> <span class="label"><i id="ssbp_top_fa" class="fa fa-facebook" aria-hidden="true"></i></span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label"><i id="ssbp_top_fa" class="fa fa-google-plus" aria-hidden="true"></i></span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label"><i id="ssbp_top_fa" class="fa fa-twitter" aria-hidden="true"></i></span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label"><i id="ssbp_top_fa" class="fa fa-linkedin" aria-hidden="true"></i></span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label"><i id="ssbp_top_fa" class="fa fa-pinterest-p" aria-hidden="true"></i></span> <span class="icon fa fa-pinterest-p"></span> </a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin13').click(function() {
        if($('#ssbp_selected_popup_skin13').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c theme12"> <a class="mn-social-bottom-facebook-theme12"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme12"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme12"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme12"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme12"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin14').click(function() {
        if($('#ssbp_selected_popup_skin14').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="mn-social-bottom-c theme13"> <a class="mn-social-bottom-facebook-theme13"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme13"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme13"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme13"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme13"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin15').click(function() {
        if($('#ssbp_selected_popup_skin15').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme14"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin16').click(function() {
        if($('#ssbp_selected_popup_skin16').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme15"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin17').click(function() {
        if($('#ssbp_selected_popup_skin17').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme16"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin18').click(function() {
        if($('#ssbp_selected_popup_skin18').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme17"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div> ');
        }
    });

    $('#ssbp_selected_popup_skin19').click(function() {
        if($('#ssbp_selected_popup_skin19').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme18"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });

    $('#ssbp_selected_popup_skin20').click(function() {
        if($('#ssbp_selected_popup_skin20').is(':checked')) { 
            $('#ssbp_popup_social_theme').html('<div class="ssbp_social_icon_theme19"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });
    $('#ssbp_popup_bgimage_remove').click(function() {
        $('#ssbp_social_popup').css('background-image','none');
        $('#ssbp_popup_bgimage_url').val("");
    });

    $('#ssbp_popup_himage_remove').click(function() {
        $('#ssbp_popup_heading_top_image').attr('src','');
        $('#ssbp_popup_heading_top_image').css('display','none');
        $('#ssbp_popup_htimage_url').val("");
    });

    $('#ssbp_popup_shimage_remove').click(function() {
        $('#ssbp_popup_subheading_top_image').attr('src','');
        $('#ssbp_popup_subheading_top_image').css('display','none');
        $('#ssbp_popup_shtimage_url').val("");
    });



    $('#ssbp_popup_video_url_remove').click(function() {
        $('#ssbp_popup_video_pan').attr('src','');
        $('#ssbp_popup_video_pan').css('display','none');
        $('#ssbp_popup_video_url').val("");
    });
    $('#ssbp_popup_video_url').focusout(function() {
        if($('#ssbp_popup_video_url').val() != ''){
            if ( $('#ssbp_popup_video_url').val().indexOf("=") > -1 )  { 

                var str = $('#ssbp_popup_video_url').val();
                var res = str.split("=");
                $('#ssbp_popup_video_pan').attr('src','https://www.youtube.com/embed/'+res[1]);
                $('#ssbp_popup_video_pan').css('display','block');
                $('#ssbp_popup_video_url').val('https://www.youtube.com/embed/'+res[1]);

            }
            else{
                var str = $('#ssbp_popup_video_url').val();
                var last = str.substring(str.lastIndexOf("/") + 1, str.length);
                $('#ssbp_popup_video_pan').attr('src','https://player.vimeo.com/video/'+last);
                $('#ssbp_popup_video_pan').css('display','block');
                $('#ssbp_popup_video_url').val('https://player.vimeo.com/video/'+last);

            }
        }
    });

$( "#ssbp_sb_tagline_dd" ).change(function() {
        if( this.value == '0'){
            $('#live_preview_tagline').css('display','none');
            $('#live_preview_tagline').html('');
            $('#ssbp_sb_custom_tagline').val('');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);

        }
        if( this.value == '1'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Sharing is Caring!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '2'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Share this article');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '3'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Show us some love!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '4'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Show us some love!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '5'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Spread the Love!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '6'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Share Knowledge!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').html('');


        }
        if( this.value == '7'){
            $('#live_preview_tagline').css('display','block');
            $('#live_preview_tagline').html('Happy Sharing!');
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $('#ssbp_sb_custom_tagline').val('');


        }
        if( this.value == '8'){
            $('#ssbp_social_popup').val('border-style','double');
            $("#ssbp_sb_custom_tagline").prop('disabled', false);
            $('#live_preview_tagline').html('');
            $('#ssbp_sb_custom_tagline').val('');
            $('#ssbp_sb_custom_tagline').focus();

        }

});


$( "#ssbp_sb_font_size_dd" ).change(function() {
        if( this.value == '0'){
            $('#live_preview_tagline').css('font-size','12px');
            $('#ssbp_sb_custom_font_size').val('');
            $("#ssbp_sb_custom_font_size").prop('disabled', true);

        }else if(this.value == '1'){
            $("#ssbp_sb_custom_font_size").prop('disabled', false);
            $('#ssbp_sb_custom_font_size').focus();
        }
        else{
             $('#live_preview_tagline').css('font-size',this.value);
            $('#ssbp_sb_custom_font_size').val('');
        }
});
$( "#ssbp_sb_alignment_dd" ).change(function() {
        if( this.value == '0'){
            $('#live_preview_tagline').css('text-align','left');
            $('#live_preview_social_selected_theme').css('text-align','left');

        }
        if( this.value == '1'){
            $('#live_preview_tagline').css('text-align','left');
            $('#live_preview_social_selected_theme').css('text-align','left');

        }
        if( this.value == '2'){
            $('#live_preview_tagline').css('text-align','center');
            $('#live_preview_social_selected_theme').css('text-align','center');

        }
        if( this.value == '3'){
            $('#live_preview_tagline').css('text-align','right');
            $('#live_preview_social_selected_theme').css('text-align','right');

        }
});
$('#ssbp_sb_custom_tagline').keyup(function(){
        $('#live_preview_tagline').html($('#ssbp_sb_custom_tagline').val());
    });
 $('#ssbp_sb_custom_font_size').on('input',function(e){
        $('#live_preview_tagline').css('font-size',$('#ssbp_sb_custom_font_size').val()+"px");
    });

if($("#ssbp_sb_tagline_dd option:selected").val() != 8){
            $("#ssbp_sb_custom_tagline").prop('disabled', true);
            $("#ssbp_sb_custom_tagline").val('');
            
}
else{
            $("#ssbp_sb_custom_tagline").prop('disabled', false);


}

$('#ssbp_sb_social_selected_theme1').click(function() {
        if($('#ssbp_sb_social_selected_theme1').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme1"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme1"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme1"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme1"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme1"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme2').click(function() {
        if($('#ssbp_sb_social_selected_theme2').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme2"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme2"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme2"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme2"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme2"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme3').click(function() {
        if($('#ssbp_sb_social_selected_theme3').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c theme3"> <a class="mn-social-bottom-facebook-theme3"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme3"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme3"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme3"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme3"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme4').click(function() {
        if($('#ssbp_sb_social_selected_theme4').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme4"><i class="fa fa-facebook"></i><span>facebook</span></a> <a class="mn-social-bottom-twitter-theme4"><i class="fa fa-twitter"></i><span>twitter</span></a> <a class="mn-social-bottom-linkedin-theme4"><i class="fa fa-linkedin"></i><span>linkedIn</span></a> <a class="mn-social-bottom-google-theme4"><i class="fa fa-google-plus"></i><span>google+</span></a> <a class="mn-social-bottom-pinterest-theme4"><i class="fa fa-pinterest-p"></i><span>pinterest</span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme5').click(function() {
        if($('#ssbp_sb_social_selected_theme5').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme45"><i class="fa fa-facebook"></i><span>facebook</span></a> <a class="mn-social-bottom-twitter-theme45"><i class="fa fa-twitter"></i><span>twitter</span></a> <a class="mn-social-bottom-linkedin-theme45"><i class="fa fa-linkedin"></i><span>linkedIn</span></a> <a class="mn-social-bottom-google-theme45"><i class="fa fa-google-plus"></i><span>google+</span></a> <a class="mn-social-bottom-pinterest-theme45"><i class="fa fa-pinterest-p"></i><span>pinterest</span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme6').click(function() {
        if($('#ssbp_sb_social_selected_theme6').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme5"><i class="fa fa-facebook"></i><span>facebook</span></a> <a class="mn-social-bottom-twitter-theme5"><i class="fa fa-twitter"></i><span>twitter</span></a> <a class="mn-social-bottom-linkedin-theme5"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a> <a class="mn-social-bottom-google-theme5"><i class="fa fa-google-plus"></i><span>google+</span></a> <a class="mn-social-bottom-pinterest-theme5"><i class="fa fa-pinterest-p"></i><span>pinterest</span></a> </div> ');
        }
    });
$('#ssbp_sb_social_selected_theme7').click(function() {
        if($('#ssbp_sb_social_selected_theme7').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme6"><i class="fa fa-facebook"></i><span>facebook</span></a> <a class="mn-social-bottom-twitter-theme6"><i class="fa fa-twitter"></i><span>twitter</span></a> <a class="mn-social-bottom-linkedin-theme6"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a> <a class="mn-social-bottom-google-theme6"><i class="fa fa-google-plus"></i><span>google+</span></a> <a class="mn-social-bottom-pinterest-theme6"><i class="fa fa-pinterest-p"></i><span>pinterest</span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme8').click(function() {
        if($('#ssbp_sb_social_selected_theme8').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme7"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme7"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme7"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme7"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme7"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme9').click(function() {
        if($('#ssbp_sb_social_selected_theme9').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c"> <a class="mn-social-bottom-facebook-theme8"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme8"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme8"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme8"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme8"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme10').click(function() {
        if($('#ssbp_sb_social_selected_theme10').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_buttons"> <a href="#" class="btn facebook"> <span class="label">Facebook</span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label">Google+</span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label">Twitter</span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label">Linkedin</span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label">Pinterest</span> <span class="icon fa fa-pinterest-p"></span> </a> </div> ');
        }
    });
$('#ssbp_sb_social_selected_theme11').click(function() {
        if($('#ssbp_sb_social_selected_theme11').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_buttons2"> <a href="#" class="btn facebook"> <span class="label"><i id="ssbp_top_fa" class="fa fa-facebook" aria-hidden="true"></i></span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label"><i id="ssbp_top_fa" class="fa fa-google-plus" aria-hidden="true"></i></span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label"><i id="ssbp_top_fa" class="fa fa-twitter" aria-hidden="true"></i></span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label"><i id="ssbp_top_fa" class="fa fa-linkedin" aria-hidden="true"></i></span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label"><i id="ssbp_top_fa" class="fa fa-pinterest-p" aria-hidden="true"></i></span> <span class="icon fa fa-pinterest-p"></span> </a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme12').click(function() {
        if($('#ssbp_sb_social_selected_theme12').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_buttons3"> <a href="#" class="btn facebook"> <span class="label"><i id="ssbp_top_fa" class="fa fa-facebook" aria-hidden="true"></i></span> <span class="icon fa fa-facebook"></span> </a> <a href="#" class="btn google-plus"> <span class="label"><i id="ssbp_top_fa" class="fa fa-google-plus" aria-hidden="true"></i></span> <span class="icon fa fa-google-plus"></span> </a> <a href="#" class="btn twitter"> <span class="label"><i id="ssbp_top_fa" class="fa fa-twitter" aria-hidden="true"></i></span> <span class="icon fa fa-twitter"></span> </a> <a href="#" class="btn linkedin"> <span class="label"><i id="ssbp_top_fa" class="fa fa-linkedin" aria-hidden="true"></i></span> <span class="icon fa fa-linkedin"></span> </a> <a href="#" class="btn pinterest"> <span class="label"><i id="ssbp_top_fa" class="fa fa-pinterest-p" aria-hidden="true"></i></span> <span class="icon fa fa-pinterest-p"></span> </a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme13').click(function() {
        if($('#ssbp_sb_social_selected_theme13').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c theme12"> <a class="mn-social-bottom-facebook-theme12"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme12"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme12"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme12"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme12"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme14').click(function() {
        if($('#ssbp_sb_social_selected_theme14').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="mn-social-bottom-c theme13"> <a class="mn-social-bottom-facebook-theme13"><i class="fa fa-facebook"></i></a> <a class="mn-social-bottom-twitter-theme13"><i class="fa fa-twitter"></i></a> <a class="mn-social-bottom-linkedin-theme13"><i class="fa fa-linkedin"></i></a> <a class="mn-social-bottom-google-theme13"><i class="fa fa-google-plus"></i></a> <a class="mn-social-bottom-pinterest-theme13"><i class="fa fa-pinterest-p"></i></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme15').click(function() {
        if($('#ssbp_sb_social_selected_theme15').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme14"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme16').click(function() {
        if($('#ssbp_sb_social_selected_theme16').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme15"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme17').click(function() {
        if($('#ssbp_sb_social_selected_theme17').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme16"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme18').click(function() {
        if($('#ssbp_sb_social_selected_theme18').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme17"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div> ');
        }
    });
$('#ssbp_sb_social_selected_theme19').click(function() {
        if($('#ssbp_sb_social_selected_theme19').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme18"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });
$('#ssbp_sb_social_selected_theme20').click(function() {
        if($('#ssbp_sb_social_selected_theme20').is(':checked')) { 
            $('#live_preview_social_selected_theme').html('<div class="ssbp_social_icon_theme19"> <a href="" class="ssbp_facebook"><span class="fa fa-facebook"></span></a> <a href="" class="ssbp_twiter"><span class="fa fa-twitter"></span></a> <a href="" class="ssbp_google-plus"><span class="fa fa-google-plus"></span></a> <a href="" class="ssbp_linkedin"><span class="fa fa-linkedin"></span></a> <a href="" class="ssbp_pinterest-p"><span class="fa fa-pinterest-p"></span></a> </div>');
        }
    });

if($("#ssbp_sb_tagline_dd option:selected").val() == '0'){
    $('#live_preview_tagline').html('');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '1'){
    $('#live_preview_tagline').html('Sharing is Caring!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '2'){
    $('#live_preview_tagline').html('Share this article');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '3'){
    $('#live_preview_tagline').html('Show us some love!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '4'){
    $('#live_preview_tagline').html('Show us some love!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '5'){
    $('#live_preview_tagline').html('Spread the Love!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '6'){
    $('#live_preview_tagline').html('Share Knowledge!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '7'){
    $('#live_preview_tagline').html('Happy Sharing!');
}
if($("#ssbp_sb_tagline_dd option:selected").val() == '8'){
    $('#live_preview_tagline').html($('#ssbp_sb_custom_tagline').val());
}
if($("#ssbp_sb_font_size_dd option:selected").val() == '0'){
    $('#live_preview_tagline').css('font-size','12px');
}else if($("#ssbp_sb_font_size_dd option:selected").val() == '1'){
    $('#live_preview_tagline').css('font-size',$('#ssbp_sb_custom_font_size').val()+'px');

}
else{
    $('#live_preview_tagline').css('font-size',$("#ssbp_sb_font_size_dd option:selected").val());

}
if($('#ssbp_tagline_color') != ''){
    $('#live_preview_tagline').css('color',$('#ssbp_tagline_color').val());
}
if($('#ssbp_sb_font_family').val() !=''){
    $('#live_preview_tagline').css('font-family',$('#ssbp_sb_font_family').val());

}
if($('#ssbp_sb_alignment_dd').val() == '0'){
    $('#live_preview_tagline').css('text-align','left');
    $('#live_preview_social_selected_theme').css('text-align','left');
}
if($('#ssbp_sb_alignment_dd').val() == '1'){
    $('#live_preview_tagline').css('text-align','left');
    $('#live_preview_social_selected_theme').css('text-align','left');
}
if($('#ssbp_sb_alignment_dd').val() == '2'){
    $('#live_preview_tagline').css('text-align','center');
    $('#live_preview_social_selected_theme').css('text-align','center');
}
if($('#ssbp_sb_alignment_dd').val() == '3'){
    $('#live_preview_tagline').css('text-align','right');
    $('#live_preview_social_selected_theme').css('text-align','right');
}
});
