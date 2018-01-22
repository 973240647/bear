<?php
	session_start();
	include("../shop/database.php");
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$pro_search=$_POST["serch"];
	$_SESSION['pr_sc']=$pro_search;
	$sql="select count(*) as amount from product where p_name like '%$pro_search%' ";
	$rs=mysql_query($sql);
	echo "<script language='javascript'>";
	echo "window.location.href='search_res.php';";
	echo "</script>";
?>