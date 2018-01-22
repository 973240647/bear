<?php
	include("database.php");
	session_start();
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$u=$_SESSION['n'];
	$cp1=$_POST["password2"];
	$cp2=$_POST["password3"];
	$tx1=$_POST["reg_userpic"];
	$tp1=$_POST["telphone"];
	$q1=$_POST["question"];
	$a1=$_POST["anwser"];
	$add1=$_POST["address"];
	$e1=$_POST["e-mail"];
	$sql="select * from customer where c_name='$u' ";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		$sql1="update customer set c_pass='$cp1',c_header='$tx1',c_phone='$tp1',c_question='$q1',c_answer='$a1',c_address='$add1',c_email='$e1' where c_name='$u' ";
		$rs1=mysql_query($sql1);
		echo "<script language='javascript'> ";
		echo "alert('修改完成，请重新登陆');";
		echo "window.location.href='loginout.php'; ";
		echo "</script>";
	}

?>