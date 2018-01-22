<?php
	include("database.php");
	session_start();
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$n=$_POST["username"];
	$p=$_POST["password"];
	$sql="select * from customer where c_name='$n' and c_pass='$p' ";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)){
		$r=mysql_fetch_array($rs);
		$_SESSION['n']=$r['c_name'];
		echo "<script language='javascript'> ";
		echo "alert('登陆成功');";
		echo "window.location.href='customer.php'; ";
		echo "</script>";
	}else{
		echo "<script language='javascript'> ";
		echo "alert('登陆失败');";
		echo "window.location.href='index.php'; ";
		echo "</script>";
	}

?>