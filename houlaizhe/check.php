<?php
if(isset($_COOKIE['cookie']))
{
	include '/db/db.php';
	$cook=$_COOKIE['cookie'];
	$query=@mysql_query("select username,userflag,cookieflag from admin where cookie='$cook'")
	or die('401 unauthorized');
	$row=mysql_fetch_array($query);
	if($row['cookieflag']==0)
		die('401 unauthorized');
	echo "<br/> &nbsp&nbsp&nbsp&nbsp&nbspwelcome! ".$row['username'];
	if($row['userflag']>=0)
		echo "You can login the system only ".$row['userflag']." times";
}
else
{
	die("401 unauthorized");
}
?>