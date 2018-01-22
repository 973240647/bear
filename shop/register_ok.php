<?php
	include("database.php");
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	$cn=$_POST["username2"];
	$cp=$_POST["password2"];
	$tx=$_POST["reg_userpic"];
	$tp=$_POST["telphone"];
	$q=$_POST["question"];
	$a=$_POST["anwser"];
	$add=$_POST["address"];
	$e=$_POST["e-mail"];
	$sql="select * from customer where c_name='$cn' or c_phone='$tp' or c_email='$e' ";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		echo "<script language='javascript'> ";
		echo "alert('用户名或邮箱已注册');";
		echo "window.location.href='register.php'; ";
		echo "</script>";
	}else{
		$sql1="insert into customer(c_name,c_pass,c_header,c_phone,c_question,c_answer,c_address,c_email) values('$cn','$cp','$tx','$tp','$q','$a','$add','$e')";
		$rss=mysql_query($sql1);
		echo "<script language='javascript'> ";
		echo "alert('注册成功，请登录');";
		echo "window.location.href='index.php'; ";
		echo "</script>";
	}
?>