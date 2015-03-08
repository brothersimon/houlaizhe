<?php
require "/db/db.php";
$cook='';
$radonarray=array('a','s','d','f','g','h','j','k','l','p','o','i','u','y','t','r','e','w','q','1','2','3','4','5','6','7','8','9','0','z','x','c','v','b','n','m','Z','X','C','V','B','N','M','L','K','J','H','G','F','D','S','A','Q','W','E','R','T','Y','U','I','O','P');
for($i=0;$i<20;$i++)
{
	$cook=$cook.$radonarray[rand(0,61)];
}
setcookie('cookie',$cook);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;  />
<title>login</title>

<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
</head>
<body id="login">		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				
				<a href="#"><img id="logo" src="images/logo.png" alt="logo" /></a>
			</div>
			
			<div id="login-content">
				
    <form name="form1" method="post" action="login.php">
     
				
					</br>
					</br>
					</br>
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="username" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
                    <div class="clear"></div>
					                
					
					
					<p>
						<input class="button" type="submit" name="submit" value="Login" />
					</p>
					
				</form>
				
			</div> 
			
			
		</div> 
		
  
</body>
</html>