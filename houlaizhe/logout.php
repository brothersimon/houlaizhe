<html>
<body>
<?php
require '/db/db.php';
if(isset($_COOKIE['cookie']))
{
$cook=$_COOKIE['cookie'];
$query=mysql_query("update admin set cookieflag=0 where cookie='$cook'")
or die("database error:1 ");
echo "ע���ɹ�������2�����ת����½ҳ��";
}
Header('Refresh: 2;url=index.php');
?>

</body>
</html>