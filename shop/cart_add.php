<?php
	session_start();
	include("database.php");
?>

<?php
header("Content-Type:text/html;charset=utf-8");
	if(empty($_SESSION['n'])){
		echo "<script language='javascript'>";
		echo "alert('请先登录');";
		echo "window.location.href='index.php' ";
		echo "</script>";
	}else{
		ob_start();
		$id=$_GET["id"];
		$sql="select * from product where p_id='".$_GET["id"]."'";
		$rs=mysql_query($sql);
		$result=mysql_fetch_array($rs);
		if(is_array($_SESSION["mycart"]))
		{
			$arr=$_SESSION["mycart"];
		}
		if(array_key_exists($id,$arr))
		{
			$uu=$arr[$id];
			$uu["num"]=$uu["num"]+1;
			$arr[$id]=$uu;
		}
		else
		{
			$arr[$id]=array("pid"=>$id,"name"=>$result["p_name"],"price"=>$result["p_price"],"num"=>1,"pdis"=>$result["p_discount"]);	
		}
		$_SESSION["mycart"]=$arr;
		ob_clean();
		echo "<script language='javascript'>";
		echo "window.location.href='mycart.php' ";
		echo "</script>";
	}
?>