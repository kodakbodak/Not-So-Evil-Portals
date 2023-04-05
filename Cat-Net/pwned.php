<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html>
    <body>
        <center>
            <h1>You Like Beef?</h1>
            <img src="images/bitches.jpg" style="width:500px;height:500px">
        </center>
    </body>
</html>