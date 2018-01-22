<?php
header("Content-Type:text/html;charset=utf-8");
	if(empty($_SESSION["n"]))
	{
		echo "<script language='javascript'>";
		echo "alert('请先登录');";
		echo "window.location.href='index.php' ";
		echo "</script>";
	}
?>