<html>
<head>
<title>社工库</title>
</head>

<?php 
require 'top.php';
?>
<body class="banner">


<div class="main9">
 <div class="center9">
 <form enctype="multipart/form-data"  method="post">
 关键字：<input name="key" id="key" class="key9" />
 <select name="sele" class="stype9">
 <option value="username">用户名，账户名</option>
 <option value="email">邮箱</option>
 <option value="name">姓名</option>
 <option value="mobile">手机</option>
 <option value="qq">QQ</option>
 <option value="cardno">身份证</option>
 <option value="stuid">nk stuid</option>
 <option value="nkname">nk name</option>
 <option value="sfzh">nk身份证</option>
 <option value="xy">nk 学院</option>
 <option value="classroom">monitor</option>
 </select>
 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;模糊查找
 <input name="check[]" type="checkbox" value="9" align="absmiddle" class="ck"/>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input name="" type="submit" value="查询" style=color:black; height="30" width="80"/>
  </form>
  </div>

<div class="result9">

<?php 
if($_POST)
{
	$tables=array('info_hote_some','info_hotel_sky','nkgn','nkgnadmin','nkmonitor','nkurp','stuinfo','t_17173_com','t_212300_com','t_51cto_com','t_52pk_com','t_aipai_com','t_b2c_member','t_baofeng_com','t_co188_com',
't_csdn_net','t_digi4x_com','t_emland_net','t_emland_net','t_hackbase_com','t_ispeak_cn','t_jiayuan_com','t_kuke_com','t_lonlife',
't_pconline_com_cn','t_qiannao_com','t_qq_10','t_qq_5','t_qq_6','t_qq_7','t_qq_8','t_qq_9','t_shooter_cn','t_teacherclub_com_cn','t_xiaomi_com',
't_xit_uc_members','t_ys168_com','t_yy_com','t_zhenai_com');
	$type=$_POST['sele'];
	$key=$_POST['key'];
	for($i=0;$i<count($tables);$i++)
	{
		if(isset($_POST['check']))
		{
			$se=$type.' like '."'".'%'.$key.'%'."'";
		}
		else 
		{
			$s="'".$key."'";
			$se=$type.'='.$s;
		}
		
		
		$sql='select * from '.$tables[$i].' where '.$se;
	
		
		$result=@mysql_query($sql);
		error_reporting(0);
		if(mysql_num_rows($result)>=1)
		{
			echo '<table border=1>';
			
			$ss='<caption>'.$tables[$i].'的查询结果</caption>';
			echo $ss;
			echo '<tr>';
			while($row=mysql_fetch_array($result,MYSQL_NUM))
			{
				foreach($row as $col_value)
				{
					echo"<td>&nbsp;$col_value&nbsp;</td>";
				}
				echo'</tr><tr>';
			}
			echo "<br/><br/><hr>";
		}
		echo "</tr></table>";
	}
}
?>
</body>
</html>