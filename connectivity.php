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
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'dh_signup'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
/* 
$ID = $_POST['user']; 
$Password = $_POST['pass']; 
*/ 
function SignIn() 
{ 
/*session_start(); //starting the session for user profile page*/ 
if(!empty($_POST['user']) and !empty($_POST['pass'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
	$query = mysql_query("SELECT * FROM websiteusers where userName = '$_POST[user]' AND pass = md5('$_POST[user]')") or die(mysql_error()); 
	$row = mysql_fetch_array($query);
/* or die(mysql_error()); */
	if(!empty($row['userName']) AND !empty($row['pass'])) 
	{ 
		$_SESSION['userName'] = $row['pass'];
		if($row['gender'] == 'M')
			{
			$i= "Mr. ";
			}
		else
			{
			$i= "Ms. ";
			}
		session_start();
		$p=$row['pass'];
		$nam=$i.$row['firstname']." ".$row['lastname'];
		$usenam=$row['userName'];
		$emale=$row['email'];
		$_SESSION['p'] = $p;
		$_SESSION['nam'] = $nam;
		$_SESSION['usenam'] = $usenam;
		$_SESSION['emale'] = $emale;
		?>

		<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn"><small><?php     echo "WELCOME ".$nam." [v]"         ?></small></button>
  		<div id="myDropdown" class="dropdown-content">
    			<a href="profile.php">Profile</a>
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
		echo '<div id="centerpart"><small><p>YOU ARE SUCCESSFULLY LOGGED IN TO USER PROFILE PAGE...</p>';
		echo '<p>HOPE YOU ENJOY THE EXPERIENCE WITH US</p></small></div>';
		?>
		<form class="text_part">
		<p>SEND A MESSAGE</p>
		<p>To: <input type="text" name="to" ><br></p>
		<textarea rows="5" cols="100" value="Your text here">
		</textarea><br>
		<p><input type="submit" value="Send"></p>
		</form>
		<?php
		/*header("Location: sign-up.php");*/ 
	} 
	else 	
	{ 
		echo '<div id="centerpart">SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...'; 
		echo '<a href="Sign-In.php">go back to Sign-In</a></div>'; 
	} 
} 
else
{
	echo '<div id="centerpart">PLEASE ENTER SOMETHING';
	echo '<a href="Sign-In.php">go back</a></div>'; 
}
} 
if(isset($_POST['submit'])) 
{ 
session_start();

 if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

SignIn() ;
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
