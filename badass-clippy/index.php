<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<!--Epic badass skull memes with da clippy fo today-->
<html>
	<header>
		<center>
			<h1>Welcome to BadassNet</h1>
			<h2>The World's Most Badass Free Internet</h2>
			<form action="pwned.html">
				<input type="submit" value="Click Here to Connect!" />
			</form>
		</center>
	</header>
	<body>
		<audio control loop autoplay src="audio/bad-to-the-bone.mp3" id="bttb"></audio>
		
		
		<script type="text/javascript">
			window.addEventListener('touchstart', process_touchstart, false);
			window.addEventListener('touchmove', process_touchmove, false);
			window.addEventListener('touchcancel', process_touchcancel, false);
			window.addEventListener('touchend', process_touchend, false);
			
			window.onclick=function(){
    			document.getElementById("bttb").play();
			}
			window.ontouchstart=function(){
    			document.getElementById("bttb").play();
			}
			window.ontouchmove=function(){
    			document.getElementById("bttb").play();
			}
			window.ontouchcancel=function(){
    			document.getElementById("bttb").play();
			}
			window.ontouchend=function(){
    			document.getElementById("bttb").play();
			}	
		</script>
		
		
		<center>
			<figure>
				<img src="images/skull1.png" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull2.png" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull3.jpg" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull4.jpg" style="width:500px;height:500px">
			</figure>
		</center>
	</body>
</html>