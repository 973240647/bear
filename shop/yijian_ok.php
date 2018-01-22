<?php
	include("database.php");
	session_start();
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$yijian=$_POST["yijian"];
	$yj_id=rand(0,9).rand(0,9).rand(0,9);
	$yj_time=date("Y-m-d h:i:s",time());
	$sql="select * from customer where c_name='".$_SESSION['n']."' ";
	$rs=mysql_query($sql);
	$result=mysql_fetch_array($rs);
	if(mysql_num_rows($rs)>0&&!empty($yijian)){
		$sql1="insert into idea(id,c_name,c_header,new_message,new_time) values('$yj_id','".$_SESSION['n']."','".$result["c_header"]."','$yijian','$yj_time')";
		$rs1=mysql_query($sql1);
		echo "<script language='javascript'> ";
		echo "alert('意见反馈成功');";
		echo "window.location.href='index.php';";
		echo "</script>";
	}else{
		echo "<script language='javascript'> ";
		echo "alert('意见反馈失败');";
		echo "window.location.href='index.php';";
		echo "</script>";
	}
?>