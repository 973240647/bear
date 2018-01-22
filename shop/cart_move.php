<?php
	session_start();
	include("database.php");
?>
<?php 
header("Content-Type:text/html;charset=utf-8");
	$id=$_GET["ID"];
	$arr=$_SESSION["mycart"];
	foreach($arr as $key)
	{
		if($key["pid"]==$id)
		{
			unset($arr[$key["pid"]]);	
		}	
	}
	$_SESSION["mycart"]=$arr;
	ob_clean();
	echo "<script language='javascript'>";
	echo "alert('删除成功');";
	echo "window.location.href='mycart.php' ";
	echo "</script>";
?>