jQuery(document).ready(function($) {
// Get Facebook Counts Using the new v2.7 API //

var token = '255762121484654|64126c67a8aca76c1bb3323c4647a48f'; // learn how to obtain it above
var page_url = 'http://www.w3schools.com/';//window.location;
url = page_url;

$.ajax({
	url: 'https://graph.facebook.com/v2.7/',
	dataType: 'jsonp',
	type: 'GET',
	data: {access_token: token, id: url},
	success: function(data){
		console.log(data);
		$('#ssbp_tagline').append(data.share.share_count);
	},
	error: function(data){
console.log(data.share.share_count); // send the error notifications to console
}

// End of Get Facebook Counts Using the new v2.7 API //
});

// Convert Thousand into K's like 10000 into 10K
function kFormatter(value) {
    var newValue = value;
    if (value >= 1000) {
        var suffixes = ["", "k", "m", "b","t"];
        var suffixNum = Math.floor( (""+value).length/3 );
        var shortValue = '';
        for (var precision = 2; precision >= 1; precision--) {
            shortValue = parseFloat( (suffixNum != 0 ? (value / Math.pow(1000,suffixNum) ) : value).toPrecision(precision));
            var dotLessShortValue = (shortValue + '').replace(/[^a-zA-Z 0-9]+/g,'');
            if (dotLessShortValue.length <= 2) { break; }
        }
        if (shortValue % 1 != 0)  shortNum = shortValue.toFixed(1);
        newValue = shortValue+suffixes[suffixNum];
    }
    return newValue;
}
});