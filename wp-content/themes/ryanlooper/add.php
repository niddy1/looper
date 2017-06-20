<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>
    <?php
/*
Template Name: Add
*/
?>
        <!-- \\\\\\\\\\\\\\\\ START POSTS ////////////////-->
        <!-- \\\\\\\\\\\\\\\\ START POSTS ////////////////-->
        <script>
            $(document).ready(function (e) {
                $("#confirmed").hide();
                $('#contact').submit(function (e) {
                    $("#contact_form").hide();
                    $("#confirmed").show();
                    //e.preventDefault();
                    $("#contact").attr('method', 'post', enctype = 'text/plain');
                    //method="post" enctype="text/plain"
                    //$("#contact").attr('action', 'mailto:donnie.bugden@gmail.com');
                    $.ajax({
                        type: "POST"
                        , cache: false
                        , url: '<?php echo(get_template_directory_uri()) ?>/send.php'
                        , data: $(this).serialize()
                    });
                    event.preventDefault();
                    //$('#contact').submit();
                });
                $('.name').on('focus', function () {
                    if ($(this).val() == 'Name') {
                        $(this).val('');
                    }
                });
                $('.name').on('blur', function () {
                    if ($(this).val() == "") {
                        $(this).val("Name");
                    }
                });
                $('.email').on('focus', function () {
                    if ($(this).val() == 'Email') {
                        $(this).val('');
                    }
                });
                $('.email').on('blur', function () {
                    if ($(this).val() == "") {
                        $(this).val("Email");
                    }
                });
                $('.comment').on('focus', function () {
                    if ($('.comment').text() == " Let's talk juice...") {
                        $('.comment').text('');
                    }
                });
                $('.comment').on('blur', function () {
                    if ($('.comment').text() == "") {
                        $('.comment').text(" Let's talk juice...");
                    }
                });
            });
        </script>
        <div class="green-borders" id="green-borders">
            <div class="row" style="text-align:center;">
                <div class="col-sm-2"></div>
                <div class="col-sm-8" id="confirmed">
                    <div class="space"></div>
                    <div class="space"></div>
                    <h1 style="color:#C8D737;">Thank you! Talk soon.</h1>
                    <div class="space"></div>
                    <div class="space"></div>
                </div>
                <div class="col-sm-8" id="contact_form" style="text-align:center;padding:30px;">
                    <form id="contact" name="contact" class="contact">
                        <input type="text" class="name" name="name" value="Name" style="width:100%;padding-left:30px;">
                        <br>
                        <br>
                        <input type="text" class="email" name="email" value="Email" style="width:100%;padding-left:30px;">
                        <br>
                        <br>
                        <textarea rows="8" class="comment" name="comment" form="contact" style="width:100%;padding:30px;">Let's talk juice...</textarea>
                        <p style="text-align:right;padding:0px;">
                            <button class="button">Send</button>
                        </p>
                    </form>
                    <br> </div>
            </div>
            <!-- \\\\\\\\\\\\\\\\ END POSTS ////////////////-->
            <?php //get_sidebar(); ?>
                <?php get_footer(); ?>