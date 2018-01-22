<?php
	session_start();
	include("database.php");
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	ob_start();
	$od_user=$_SESSION["n"];
	$od_id=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$_SESSION['odid']=$od_id;
	$time=date("Y-m-d h:i:s");
	$sp_id=$_POST["shangpin_id"];
	$sp_name=$_POST["shangpin_name"];
	$sp_price=$_POST["shangpin_price"];
	$sp_num=$_POST["shangpin_num"];
	$sp_sum=$_POST["shangpin_sum"];
	$sql="insert into orderdetails(order_id,p_id,p_price,p_number) values('".$_SESSION["odid"]."','$sp_id','$sp_price','$sp_num')";
	$rss=mysql_query($sql);
	$sql2="select * from customer where c_name='$od_user' ";
	$rss2=mysql_query($sql2);
	while($result=mysql_fetch_array($rss2)){
	$sql1="insert into orders(order_id,order_address,order_phone,order_user,order_time,order_sum) values('".$_SESSION["odid"]."','".$result["c_address"]."','".$result["c_phone"]."','$od_user','$time','$sp_sum')";
	$rss1=mysql_query($sql1);
	}
	echo "<script language='javascript'>";
	echo "alert('结算成功');";
	echo "window.location.href='order.php' ";
	echo "</script>";
?>