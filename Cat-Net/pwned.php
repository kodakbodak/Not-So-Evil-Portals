<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html>
    <body>
        <center>
            <h1>Pride Cat</h1>
            <img src="images/pride_cat.jpg" style="width:500px;height:500px">
            <h1>Bottom Text</h1>
        </center>
    </body>
</html>