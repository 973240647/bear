<?php
header("Content-Type:text/html;charset=utf-8");
	session_start();
	$_SESSION['n']="";
	unset($_SESSION);
	session_destroy();
	echo "<script language='javascript'>";
	echo "window.location.href='index.php' ";
	echo "</script>";
?>