
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.useso.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
<!--body-->
<div class="toptoptop">
<?php
require 'check.php'
?>
<a href="logout.php">注销&nbsp&nbsp&nbsp</a>
<div>
<div id="home" class="banner">
	 <div class="container">
		 <div class="top-header">		  
				<div class="logo">
					<a href="main.php"><img src="images/mainlogo.png" alt="" /></a>
				</div>
			  <div class="top-menu">
					<span class="menu"> </span>
				  <ul>
				      <nav class="cl-effect-5">
							<li><a class="active scroll"  href="database.php"><span data-hover="社工库">社工库&nbsp</span></a></li> 
							<li>/</li>
							<li><a class="scroll" href="tools.php"><span data-hover="工具">工具&nbsp</span></a></li> 
							<li>/</li>
							<li><a class="scroll" href="connect.php"><span data-hover="常用链接">常用链接&nbsp</span></a></li> 
							<li>/</li>
							<li><a class="scroll" href="project.php"><span data-hover="项目">项目&nbsp</span></a></li>
					 </nav>
				  </ul>			 	 
			  </div>	
		 </div>	 
		 <div class="clearfix"></div>	
		<div class="banner-info">	
			<h1>WELCOME !</h1>
			<br/>
			<h3>QUITE And Study!</h3>
			<a class="downarrow scroll" href="#service"><span> </span></a>
		 </div>
	 </div>
</div>
</body>
</html>