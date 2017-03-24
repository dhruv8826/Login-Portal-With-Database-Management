<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Sign-Up</title> 
		<link rel="stylesheet" type="text/css" href="stylesignup.css">
	</head> 
	<body id="body-color"> 
		<div class="topmost">
			<h1 >MY DESIGNED PAGE</h1>
			<p id="topright">BY- Dhruv Sharma</p> 
		</div>
		<div id="Sign-Up"> 
			<fieldset style="width:30%"><legend class="head">Registration Form</legend> 
				<table border="0"> 
				<tr> 
				<form method="POST" action="connectivity-sign-up.php"> 
				<td>First Name</td>
				<td> <input type="text" name="firstname"></td> 
				</tr>
				<tr> 
				<td>Last Name</td>
				<td> <input type="text" name="lastname"></td> 
				</tr> 
				<tr> 
				<td>Email</td>
				<td> <input type="text" name="email"></td> 
				</tr>
				<tr>
				<td>Gender</td>
				<td><select name="formGender">
  					<option value="">Select...</option>
  					<option value="M">Male</option>
  					<option value="F">Female</option>
				</select></td>
				</tr> 
				<tr> 
				<td>UserName</td>
				<td> <input type="text" name="user"></td> 
				</tr> 
				<tr> 
				<td id="section">Password<p>&nbsp;</p></td>
				<td id="section"> <input type="password" name="pass" id="pass">
				</td> 
				</tr> 
				<tr> 
				<td>Confirm Password </td>
				<td><input type="password" name="cpass"></td> 
				</tr> 
</table>
				<p><img id="captcha" src="captcha.php" width="160" height="45" border="1" alt="CAPTCHA">
<small><a href="#" onclick="
  document.getElementById('captcha').src = 'captcha.php?' + Math.random();
  document.getElementById('captcha_code').value = '';
  return false;
">refresh</a></small></p>
<p>CAPTCHA:<input id="captcha_code" type="text" name="captcha" size="6" maxlength="5" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"></p> <p><small>copy the digits from the image into this box</small></p>
				<td><input id="button" type="submit" name="submit" value="Sign-Up"></td> 
				</form> 
				
				<p class="back">Back to <a href="Sign-In.php" class="backb">LOGIN-IN</a> page</p>  
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
