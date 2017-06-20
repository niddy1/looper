try {
    Typekit.load({
        async: true
    });
}
catch (e) {}
$(document).ready(function () {
    $('.sub-menu').dropit({
afterLoad: function(){}, // Triggers when plugin has loaded
beforeShow: function(){ console.log("Opening...");$(".social-icon").hide();$(".show_all").hide();}, // Triggers before submenu is shown
afterShow: function(){console.log("Closing...");$(".social-icon").hide();$(".show_all").hide();}, // Triggers after submenu is shown
beforeHide: function(){ console.log("Closing...");$(".social-icon").show();$(".show_all").show();}, // Triggers before submenu is hidden
afterHide: function(){console.log("Opening...");$(".social-icon").show();$(".show_all").show();} // Triggers before submenu is hidden
});
});
$(document).ready(function () {
    $("#myBtn").click(function () {
        $("#myModal").modal();
    });
});
$(document).ready(function () {
    $('.header').animateCss('fadeIn');
    $('#green-borders').animateCss('fadeIn');
    $("#ft1").hide();
    $("#ft2").hide();
    $("#ft3").hide();
    $("#ft4").hide();
    $("#ft5").hide();
    $("#ft6").hide();
    $("#ft7").hide();
    $(".show_all").on('click', function () {
        if ($(this).css("transform") == 'none') {
            $(this).css("transform", "rotate(180deg)");
        }
        else {
            $(this).css("transform", "");
        }
    });
});

function show_all() {
    // $('.show_all').animateCss('bounce');
    //$('.show_all').animateCss('flipover');
    $("#ft1").toggle();
    $("#ft2").toggle();
    $("#ft3").toggle();
    $("#ft4").toggle();
    $("#ft5").toggle();
    $("#ft6").toggle();
    $("#ft7").toggle();
    $('#ft1').animateCss('fadeIn');
    $('#ft2').animateCss('fadeIn');
    $('#ft3').animateCss('fadeIn');
    $('#ft4').animateCss('fadeIn');
    $('#ft5').animateCss('fadeIn');
    $('#ft6').animateCss('fadeIn');
    $('#ft7').animateCss('fadeIn');
    var winHeight = $(window).height()
        , docHeight = $(document).height()
        , progressBar = $('progress')
        , max, value;
    /* Set the max scrollable area */
    max = docHeight - winHeight;
    progressBar.attr('max', max);
    $(document).on('scroll', function () {
        value = $(window).scrollTop();
        progressBar.attr('value', value);
    });
}

function show(whichdiv) {
    $(whichdiv).toggle();
    $(whichdiv).animateCss('fadeIn');
    var winHeight = $(window).height()
        , docHeight = $(document).height()
        , progressBar = $('progress')
        , max, value;
    /* Set the max scrollable area */
    max = docHeight - winHeight;
    progressBar.attr('max', max);
    $(document).on('scroll', function () {
        value = $(window).scrollTop();
        progressBar.attr('value', value);
    });
}
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function () {
            $(this).removeClass('animated ' + animationName);
        });
    }
});