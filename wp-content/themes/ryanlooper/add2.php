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
Template Name: Add2
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
        <script type="text/javascript">
            var feed = new Instafeed({
                get: "user"
                , userId: '331511947'
                , accessToken: '331511947.44a5744.8442d5b882654e60b8d1e6c5bd8c20f8'
                , limit: '4'
                , target: 'instafeed'
                , resolution: 'low_resolution'
                , after: function () {
                    var el = document.getElementById('instafeed');
                    if (el.classList) el.classList.add('showinsta');
                    else el.className += ' ' + 'showinsta';
                }
            });
            feed.run();
        </script>
        <div class="green-borders" id="green-borders">
            <div class="row" style="text-align:center;">
                <div class="add">
                    <div id="instafeed" class="showinsta"></div>
                </div>
                <div>
                    <h2 style="color: #bbbbbb;">|</h2>
                    <h3 style="font-family: Edmondsans;font-weight: 500;"><a href="https://www.instagram.com/iamlooper" style="font-family: Edmondsans;font-weight: 100;">FOLLOW ME ON INSTAGRAM</a></h3>
                </div>
            </div>
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