<?php
$msgs = array();
?>
<div id="ig-wp-panel">
	<style>
#ig-wp-panel .ig-logo {
	float: left;
	margin-right: 20px;
	max-height: 55px;
}

.ig-btn-choose {
	border: 1px solid grey;
	padding: 5px 15px;
	background: #d6d6d6;
}

.ig-btn-choose.active {
	border: 1px solid #fff;
	background: #2196F3;
	color: #fff;
}

.ig-btn-choose .dashicons-yes {
	vertical-align: middle;
	margin-right: 5px;
}

.ig-btn-choose.active .dashicons-yes {
	color: #fff;
}

.ig-tab-content {
	display: none;
}

.ig-tab-content.active {
	border: 1px solid #fff;
}

.ig-generate-msgs {
	color: red;
}

.wp-core-ui .button-primary.ig-generate {
	background: #2196f3;
	font-size: 20px;
	padding: 6px 15px;
	height: auto;
	margin: 15px 0px;
	box-shadow: none;
	text-shadow: none;
}

.wp-core-ui .button-primary.ig-generate:hover {
	background: #0073aa;
}

.ig-generate .dashicons-arrow-right-alt2 {
	vertical-align: middle;
}

.ig-results {
	display: none;
}

.ig-results textarea {
	font-size: 150%;
}
#ig-wp-panel th {
    vertical-align: middle;
}
#ig-wp-panel table input[type="checkbox"] {
    zoom: 1.5;
}
</style>
	<div class="wrap">
		<header>
			<img src="<?php echo INSGALLERY_URL; ?>/assests/media/icon-128x128.jpg" class="ig-logo" />
			<h2>Instagram Gallery:</h2>
			<p>fillup the below details and and click on 'Generate ShortCode' button. Then use the generated code in your
				posts/pages.</p>
		</header>
		<hr />
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">Instagram User Name:</th>
					<td><input name="insta_user" type="text" placeholder="MyUsername" /> <span class="description">e.g.
							https://www.instagram.com/<strong style="font-size: 120%; color: #0085ba;">MyUsername</strong>/
					</span></td>
				</tr>
				<tr>
					<th scope="row">Pictures Limit:</th>
					<td><input name="insta_limit" type="number" min="1" max="20" value="12" /> <span class="description">no. of pics to
							display. use 0 for all. (max: 20)</span></td>
				</tr>
				<tr>
					<th scope="row">Show As:</th>
					<td><label id="btn-as-gallery" class="ig-btn-choose"><span class="dashicons dashicons-yes"></span>Galllery</label>
						<label id="btn-as-slider" class="ig-btn-choose"><span class="dashicons dashicons-yes"></span>Slider</label></td>
				</tr>
				<tr id="section-as-galllery" class="ig-tab-content">
					<td colspan="2">
						<table>
							<tr>
								<th scope="row">No. of Pics Columns:</th>
								<td><input name="insta_gal-cols" type="number" min="1" max="20" value="3" /> <span class="description">no. of
										pics in a row. </span></td>
								<td rowspan="3"><img src="<?php echo INSGALLERY_URL; ?>/assests/media/demo-gallery.jpg" alt="demo gallery"
									width="500" /></td>
							</tr>
							<tr>
								<th scope="row">Popup image on click:</th>
								<td><input name="insta_gal-popup" type="checkbox" value="1" checked /> <span class="description">show popup
										gallery by clicking on image <br />( disable this if it conflicts with other plugins)</span></td>
							</tr>
							</tr>
							<tr>
								<th scope="row">image hover effect:</th>
								<td><input name="insta_gal-hover" type="checkbox" value="1" checked /> <span class="description">animation
										effectby hovering on image </span></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr id="section-as-slider" class="ig-tab-content">
					<td colspan="2">
						<table>
							<tr>
								<th scope="row">Slide effect:</th>
								<td><select name="insta_sli-effect">
										<option value="fade">fade</option>
										<option value="slide">slide</option>
								</select> <span class="description">sliding effect/animation. </span></td>
								<td rowspan="5"><img src="<?php echo INSGALLERY_URL; ?>/assests/media/demo-slider.jpg" alt="demo slider"
									width="500" /></td>
							</tr>
							<tr>
								<th scope="row">Slide timeout:</th>
								<td><input name="insta_sli-timeout" type="number" min="100" max="20000" value="5000" /> <span
									class="description">slide duration in seconds. </span></td>
							</tr>
							<tr>
								<th scope="row">Navigation arrows:</th>
								<td><input name="insta_sli-navarrows" type="checkbox" value="1" checked /> <span class="description">show
										prev-next navigation arrows. </span></td>
							</tr>
							<tr>
								<th scope="row">Dotted navigation:</th>
								<td><input name="insta_sli-dots" type="checkbox" value="1" checked /> <span class="description">show dotted
										navigation buttons. </span></td>
							</tr>
							<tr>
								<th scope="row">Scrollbar:</th>
								<td><input name="insta_sli-scroll" type="checkbox" value="1" checked /> <span class="description">show scrollbar
										on slider bottom. </span></td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<div>
			<button class="button-primary ig-generate">
				Generate ShortCode <span class="dashicons dashicons-arrow-right-alt2"></span>
			</button>

		</div>
		<hr />
		<br />
	</div>
	<div class="wrap ig-results">
		<p>
			<strong>copy/paste below shortcode in your page.</strong>
		</p>
		<textarea rows="3" cols="100" onclick="this.focus();this.select()"></textarea>
	</div>
	<script>
    jQuery(document).ready(function($){
    	$('#btn-as-gallery').click(function(){
        	if($(this).hasClass('active'))return true;
			$(this).addClass('active');
			$('#btn-as-slider').removeClass('active');
			$('#section-as-slider').hide("slow", function() {
				$('#section-as-galllery').show( "slow" ).addClass('active');
			  }).removeClass('active');
        });
    	$('#btn-as-slider').click(function(){
    		if($(this).hasClass('active'))return true;
			$(this).addClass('active');
			$('#btn-as-gallery').removeClass('active');
			$('#section-as-galllery').hide("slow", function() {
				$('#section-as-slider').show( "slow" ).addClass('active');
			  }).removeClass('active');
        });
        $('.ig-generate').click(function(ev){
        	$('.ig-results').hide();
        	$('.ig-results textarea').text('');
        	$('.ig-generate-msgs').remove();
        	
        	var $insta_user = $('input[name="insta_user"]');
            if($insta_user.val() == ''){
            	$insta_user.parent().append('<p class="ig-generate-msgs">Please enter Instagram User Name.</p>');
            	$insta_user.focus();
				return;
            }
            if(! $('.ig-btn-choose').hasClass('active')){
            	$('#btn-as-slider').parent().append('<p class="ig-generate-msgs">Please select output type.</p>');
				return;
            }

        	$('.ig-results').show();
            var code = '[Insta-Gallery user="' + $insta_user.val() +'" ';
            code += ' limit="'+ $('[name="insta_limit"]').val() +'"';

            if($('#btn-as-gallery').hasClass('active')){
                code += ' type="gallery"';
                code += ' gal_cols="'+ $('[name="insta_gal-cols"]').val() +'"';
                code += ' gal_imgpopup="'+ $('[name="insta_gal-popup"]').is(':checked') +'"';
                code += ' gal_imghover="'+ $('[name="insta_gal-hover"]').is(':checked') +'"';
                
            }else{
            	code += ' type="slider"';
            	code += ' sli_effect="'+ $('[name="insta_sli-effect"]').val() +'"';
            	code += ' sli_timeout="'+ $('[name="insta_sli-timeout"]').val() +'"';
            	code += ' sli_navarrows="'+ $('[name="insta_sli-navarrows"]').is(':checked') +'"';
            	code += ' sli_dots="'+ $('[name="insta_sli-dots"]').is(':checked') +'"';
            	code += ' sli_scroll="'+ $('[name="insta_sli-scroll"]').is(':checked') +'"';
            }
            code += ']'
			$('.ig-results textarea').text(code);
        });
    });
</script>
</div>

