<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Sign-In</title> 
		<link rel="stylesheet" type="text/css" href="signedup.css"> 
	</head> 
	<body> 
	<div id="body-color">
		<div class="topmost">
			<h1 >MY DESIGNED PAGE</h1>
			<p id="topright">BY- Dhruv Sharma</p> 
		</div>
		

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'dh_signup');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['formGender'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  md5($_POST['pass']);
	$query = "INSERT INTO websiteusers (firstname,lastname,gender,userName,email,pass) VALUES ('$firstname','$lastname','$gender','$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	echo '<div><a href="Sign-In.php">Sign-In</a></div><div><a href="sign-up.php">Sign-Up</a></div>';  
	}
}

function SignUp()
{
if(!empty($_POST['user']) and !empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['email']) and !empty($_POST['pass']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...ALREADY THIS USERNAME IS REGISTERED ...PLEASE TRY SOME OTHER USERNAME";
		echo '<div><a href="Sign-In.php">Sign-In</a></div><div><a href="sign-up.php">Sign-Up</a></div>'; 
	}
}
else
{
	echo "PLEASE FILL ALL THE DETAILS";
	echo '<div><a href="Sign-In.html">Sign-In</a></div><div><a href="sign-up.php">Sign-Up</a></div>'; 
}
}
if(isset($_POST['submit'])) 
{ 
session_start();
if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

SignUp();
} 
?>

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
	</div>
	</body> 	
</html>
