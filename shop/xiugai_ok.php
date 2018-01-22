<?php
include('database.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$u=$_POST["username"];
	$e=$_POST['email'];
	$p=$_POST['phone'];
	$sql="update userregister set Email='$e',telphone='$p' where username='$u'";
	$re=mysql_query($sql);
	if($re)
	{
		echo "修改成功";
		}
		else
		{
			echo "修改失败";
		}
?>
</body>
</html>