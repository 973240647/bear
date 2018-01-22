<?php
	include("database.php");
	session_start();
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$user=$_SESSION["c_fn"];
	$newpass=$_POST["newpass"];
	$sql="select * from customer where c_name='$user' ";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		$sql1="update customer set c_pass='$newpass' where c_name='$user' ";
		$rs1=mysql_query($sql1);
		echo "<script language='javascript'> ";
		echo "alert('修改成功');";
		echo "window.location.href='index.php'; ";
		echo "</script>";
	}else{
		echo "<script language='javascript'> ";
		echo "alert('修改失败');";
		echo "window.location.href='forget_mima.php'; ";
		echo "</script>";
	}

?>