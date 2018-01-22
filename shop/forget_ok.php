<?php
	include("database.php");
	session_start();
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$cn1=$_POST["username3"];
	$_SESSION["c_fn"]=$cn1;
	$tp1=$_POST["telphone2"];
	$q1=$_POST["question2"];
	$a1=$_POST["anwser2"];
	$sql="select * from customer where c_name='$cn1' and c_phone='$tp1' and c_question='$q1' and c_answer='$a1' ";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		echo "<script language='javascript'> ";
		echo "alert('提交成功');";
		echo "window.location.href='updatemima.php'; ";
		echo "</script>";
	}else{
		echo "<script language='javascript'> ";
		echo "alert('提交失败，请检查信息是否正确');";
		echo "window.location.href='forget_mima.php'; ";
		echo "</script>";
	}

?>