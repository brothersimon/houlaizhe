<?php
$con=@mysql_connect("localhost","root","root");
if(!$con)
	die('Connect the sql server error,please check! ');
@mysql_select_db("sgdata")
or die("database is not exist! ");
?>