<html>
<body>
<?php
require '/db/db.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=@mysql_query("select username,userflag from admin where username='$username' and password='$password'")
or die("database error,error code: 1");
$cook=$_COOKIE['cookie'];
if($row=mysql_fetch_array($query))
{
	switch($row['userflag'])
	{
		case -1:
		$query=@mysql_query("update admin set cookie='$cook' where username='$username'")
		or die('database error,error code:1');
		$query=@mysql_query("update admin set cookieflag=1 where username='$username'")
		or die('database error,error code:2');
		break;
		case 0:
		die('The user is exist but not allowed to entry the system! ');
		break;
		default:
		$query=@mysql_query("update admin set userflag=userflag-1 where username='$username'")
		or die('database error,error code: 3');
		$query=@mysql_query("update admin set cookie='$cook' where username='$username'")
		or die('database error,error code:4');
		$query=@mysql_query("update admin set cookieflag=1 where username='$username'")
		or die('database error,error code:5');
		break;
	}
	header("location:main.php");
}
else	
	echo "401 unauthorized! wrong username or password! ";
	Header('Refresh: 2;url=index.php');
?>
</body>
</html>