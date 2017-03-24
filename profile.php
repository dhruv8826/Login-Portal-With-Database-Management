<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Sign-In</title> 
		<link rel="stylesheet" type="text/css" href="signedin.css"> 
	</head> 
	<body> 
	<div id="body-color">
		<div class="topmost">
			<h1 >MY DESIGNED PAGE</h1>
			<p id="topright">BY- Dhruv Sharma</p> 
		</div>
		<?php
		session_start();
			$p = $_SESSION['p'];
			$nam = $_SESSION['nam'];
			$usenam = $_SESSION['usenam'];
			$emale = $_SESSION['emale'];
			$_SESSION['p'] = $p;
			$_SESSION['usenam'] = $usenam;
		?>
		<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn"><small><?php     echo "WELCOME ".$nam." [v]"         ?></small></button>
  		<div id="myDropdown" class="dropdown-content">
    			<a href="reconnectivity.php">Home</a>
			<a href="sign-out.php?e=$emale">Sign-out</a>
  		</div>
		</div>

		<script>
		/* When the user clicks on the button,
		toggle between hiding and showing the dropdown content */
		function myFunction() {
    			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
  		if (!event.target.matches('.dropbtn')) {

    		var dropdowns = document.getElementsByClassName("dropdown-content");
    		var i;
    		for (i = 0; i < dropdowns.length; i++) {
      			var openDropdown = dropdowns[i];
      			if (openDropdown.classList.contains('show')) {
        			openDropdown.classList.remove('show');
      				}
    			}
  		}
		}
		</script>


		<?php
			echo "<div><p><h3><strong>PROFILE</strong></h3></p></div>";
			echo "<div>NAME : ".$nam."<br>"."USERNAME : ".$usenam."<br>"."EMAIL ADDRESS : ".$emale."<br>"."</div>";

		?>
		
		<div class="botmost">
<div id="social-icons">
  		<a href="https://www.twitter.com/YOUR_USER_NAME"><img src="social_media_icons_gray_icons_set_512x512_0002_twitter.png" width="36" height="36" alt="Twitter" /></a>
  		<a href="http://www.pinterest.com/YOUR_FEED_URL"><img src="social_media_icons_gray_icons_set_512x512_0001_pinterest.png" width="36" height="36" alt="Pinterset" /></a>
  		<a href="http://www.linkedin.com/in/YOUR_DISPLAY_NAME"><img src="social_media_icons_gray_icons_set_512x512_0010_linkedin.png" width="36" height="36" alt="LinkedIn" /></a>
		<a href="http://www.tumbler.com/in/YOUR_DISPLAY_NAME"><img src="social_media_icons_gray_icons_set_512x512_0006_tumblr.png" width="36" height="36" alt="Tumbler" /></a>
		<a href="http://www.youtube.com/in/YOUR_DISPLAY_NAME"><img src="social_media_icons_gray_icons_set_512x512_0004_youtube.png" width="36" height="36" alt="Youtube" /></a>
		<a href="http://www.googleplus.com/in/YOUR_DISPLAY_NAME"><img src="social_media_icons_gray_icons_set_512x512_0003_google+.png" width="36" height="36" alt="GooglePlus" /></a>
  		<a href="http://www.facebook.com/YOUR_FB_IDENTIFIER"><img src="social_media_icons_gray_icons_set_512x512_0000_facebook.png" width="36" height="36" alt="Facebook" /></a>
  		</div>
	</div>
	</body> 	
</html>