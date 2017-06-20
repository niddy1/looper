<?php
if($_POST["comment"] && $_POST["name"] && $_POST["email"]) {
    mail("ryan.looper.website@gmail.com", "Form to email message", $_POST["comment"]." Name: ".$_POST["name"]." Email: ".$_POST["email"], "From:webmaster@ryanlooper.com");
}
?>