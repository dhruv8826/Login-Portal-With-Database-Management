<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Sign-In</title> 
		<link rel="stylesheet" type="text/css" href="style-sign.css"> 
	</head> 
	<body id="body-color">
		<div class="topmost">
			<h1 ><?php 
				echo "<b>M</b>";
                     	echo "<b>Y</b><b> </b>DESIGNED PAGE";
			?></h1>
			<p id="topright">BY- Dhruv Sharma</p> 
		</div>
		<div id="Sign-In"> 
			<fieldset style="width:30%"><legend>LOG-IN HERE</legend> 
				<form method="POST" action="connectivity.php"> User <br><input type="text" name="user" size="40"><br> Password <br><input type="password" name="pass" size="40"><br> 
<p><img id="captcha" src="captcha.php" width="160" height="45" border="1" alt="CAPTCHA">
<small><a href="#" onclick="
  document.getElementById('captcha').src = 'captcha.php?' + Math.random();
  document.getElementById('captcha_code').value = '';
  return false;
">refresh</a></small></p>
<p>CAPTCHA:<input id="captcha_code" type="text" name="captcha" size="6" maxlength="5" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"></p> <p><small>copy the digits from the image into this box</small></p>

 <input id="button" type="submit" name="submit" value="Log-In"> </form> 
<div>
			
			<div class="signup">
			Don't have an account <a href="sign-up.php" class="signupb">Sign-Up</a>
			</div>
			</fieldset> 
		</div>

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
	</body> 	
</html>

