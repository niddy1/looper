<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ryan Looper</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6994334/6318772/css/fonts.css" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:image" content="<?php echo(get_template_directory_uri()) ?>/img/share.png">
    <link rel="icon" type="image/png" href="<?php echo(get_template_directory_uri()) ?>/img/icon.png" />
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()) ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()) ?>/css/custom.css"/>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()) ?>/css/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()) ?>/css/dropit.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo(get_template_directory_uri()) ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo(get_template_directory_uri()) ?>/js/dropit.js"></script>
    <!-- FONT -->
<script src="<?php echo(get_template_directory_uri()) ?>/js/top.js"></script>
    
    <!-- Social Share Kit JS -->
<script type="text/javascript" src="<?php echo(get_template_directory_uri()) ?>/js/social-share-kit.js"></script>
    
<script type="text/javascript" src="<?php echo(get_template_directory_uri()) ?>/js/instafeed.min.js"></script>
    
<script type="text/javascript">
SocialShareKit.init();
</script>
    
<script>
    var myVar;

    function myLoadAnim() {
           // alert("loaded");
            myVar = setTimeout(showPage, 2000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    
    function loadPage() {
        document.getElementById("loader").style.display = "block";
        document.getElementById("myDiv").style.display = "none";
    }
    window.onload = myLoadAnim();
</script>
</head>

<body>
    <div id="loader"><img src="<?php echo(get_template_directory_uri()) ?>/img/load.gif" class="loader"></div>

    <div style="display:none;" id="myDiv" class="animate">
        <div class="vertical-line"></div>
    <div class="vertical-line-left"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" style="text-align: center;background:white;">
            <!-- Modal content-->
            <div class="modal-transparent">
                <div class="space"></div>
                <div class="nav-mobile"> <b>RE</b> <a href="http://ryanlooper.com/re" class="navlink">RYAN LOOPER</a> </div>
                <div class="nav-mobile">
                    <ul class="sub-menu">
                        <li class="text-center"> <b>LINGER</b> <a href="http://ryanlooper.com/" class="navlink">WITH RYAN LOOPER</a>
                            <ul class="navlink"  style="padding-top:5px;">
                                <li class="navlink" style="padding-top:5px;"><a href="http://ryanlooper.com/category/the-reorder/" class="navlink">THE REORDER</a></li>
                                <li class="navlink" style="padding-top:5px;"><a href="http://ryanlooper.com/category/splash-decant/" class="navlink" >SPLASH DECANT</a></li>
                                <li class="navlink" style="padding-top:5px;"><a href="http://ryanlooper.com/category/five-questions/" class="navlink">FIVE QUESTIONS</a></li>
                                <li class="navlink" style="padding-top:5px;"><a href="http://ryanlooper.com/category/one-minute-sommelier/" class="navlink">ONE MINUTE SOMMELIER</a></li>
                                <li class="navlink" style="padding-top:5px;"><b>ADD</b> <a href="http://ryanlooper.com/add/" class="navlink">TO RYAN LOOPER</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-mobile"><b>ADD</b> <a href="http://ryanlooper.com/add/" class="navlink">TO RYAN LOOPER</a></div>
                <div class="space"></div>
                  <div class="row" style="padding-top:15px;">
                        <div class="col-sm-12 ssk-group social-hide">
                            <a href="https://twitter.com/IAMLOOPER"><span class="social-icon" aria-hidden="true" data-icon="&#xe0ab;"></span></a>
                            <a href="https://www.facebook.com/ryanlooper"><span class="social-icon" aria-hidden="true" data-icon="&#xe0aa;"></span></a>
                            <a href="https://www.instagram.com/iamlooper"><span class="social-icon" aria-hidden="true" data-icon="&#xe09a;"></span></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 0px;margin: 0px;z-index: 1000;" id="top">
            
           <?php
          $url =  "{$_SERVER['REQUEST_URI']}";
          $escaped_url2 = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
          //echo($escaped_url);
          if($escaped_url2 == "/" || $escaped_url2 == "/category/five-questions/" || $escaped_url2 == "/category/splash-decant/" || $escaped_url2 == "/category/one-minute-sommelier/" || $escaped_url2 == "/category/the-reorder/")
          {
                   echo '<progress value="0"></progress>';    
              } else {
                   echo '';
          }
    ?>         
            
            <!-- \\\\\\\\\\\\\\\\ START HEADER ////////////////-->
            <div class="header">
                <div id="hamburgler" class="hamburgler-icon-wrapper"> <span class="hamburgler-icon"></span> </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6" style="text-align:center;">
                        <a href="http://ryanlooper.com/"><img src="<?php echo(get_template_directory_uri()) ?>/img/ryanlooper.svg" class="logo"></a>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="col-sm-12">
                    <div class="nav-main"> <b>RE</b> <a href="http://ryanlooper.com/re" class="navlink">RYAN LOOPER</a> </div>
                    <div class="nav-main" style="background-color: #fff;">
                        <ul class="sub-menu" style="background-color: #fff;">
                            <li class="text-center"> <b>LINGER</b> <a href="http://ryanlooper.com/" class="navlink">WITH RYAN LOOPER</a>
                                <ul class="hide-nav">
                                    <li><a href="http://ryanlooper.com/category/the-reorder">THE REORDER</a></li>
                                    <li><a href="http://ryanlooper.com/category/splash-decant/">SPLASH DECANT</a></li>
                                    <li><a href="http://ryanlooper.com/category/five-questions/">FIVE QUESTIONS</a></li>
                                    <li><a href="http://ryanlooper.com/category/one-minute-sommelier/">ONE MINUTE SOMMELIER</a></li>
                                    <li class="nav-main"><b>ADD</b> <a href="http://ryanlooper.com/add/" class="navlink">TO RYAN LOOPER</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-main"> <b>ADD</b> <a href="http://ryanlooper.com/add/" class="navlink">TO RYAN LOOPER</a> 
                        <div class="space-sm2"></div>
                        <div class="col-sm-12 ssk-group social-icon">
                            <a href="https://twitter.com/IAMLOOPER"><span class="social-icon" aria-hidden="true" data-icon="&#xe0ab;"></span></a>
                            <a href="https://www.facebook.com/ryanlooper"><span class="social-icon" aria-hidden="true" data-icon="&#xe0aa;"></span></a>
                            <a href="https://www.instagram.com/iamlooper"><span class="social-icon" aria-hidden="true" data-icon="&#xe09a;"></span></a>
                        </div>
                    </div>
    <?php
          $url =  "{$_SERVER['REQUEST_URI']}";
          $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
          //echo($escaped_url);
          if($escaped_url == "/add" || $escaped_url == "/re" )
          {
                echo '';
              } else {
                   echo '
                   <div class="nav-arrow">
                        <a href="javascript:show_all()" id="show_all" class="show_all"><img src="'. get_template_directory_uri().'/img/arrow.svg" id="show_all" class="show_all"></a>
                    </div>';  
          }
    ?>
    
                </div>
            </div>
        </div>
        <!-- \\\\\\\\\\\\\\\\ END HEADER ////////////////-->    
       <!-- \\\\\\\\\\\\\\\\ START POSTS ////////////////-->
        <div class="container-fluid" style="padding: 0px;margin: 0px;z-index: 1000;">
            <div class="space"></div>
            <div class="green-borders" id="green-borders">
