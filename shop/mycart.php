<?php
	session_start();
	include("database.php");
	include("checklogin.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的购物车</title>
<link rel="stylesheet" type="text/css" href="../CSS/index.css" />
<link rel="stylesheet" type="text/css" href="../CSS/mycart.css" />
</head>

<body>
<?php
        if(!isset($_SESSION['n']))
        {
            include("head.php");
        }else{
            include("head2.php");
        }
?>

<form action="order_ok.php" id="form1" name="form1" method="post">

	<table width="930" height="260" style="margin:auto; margin-top:60px;" border="1" cellspacing="0" bordercolor="#F07818">
    	<tr>
        	<td style="height:30px; line-height:30px; text-align:center; font-size:20px; letter-spacing:2px;" colspan="6">我的购物车</td>
        </tr>
        
        <tr>
        	<td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;">商品编号</td>
            <td style="height:30px; line-height:30px; width:250px; letter-spacing:2px; text-align:center; font-size:16px;">商品名称</td>
            <td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;">单价</td>
            <td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;">数量</td>
            <td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;">金额</td>
            <td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;"></td>
        </tr>
        
        <?php
        	$sum=0;
			$a=$_SESSION["mycart"];
			foreach($a as $arr)
			{
		?>
        
        
        <tr style="text-align:center;">
        	<td ><input style="height:60px; line-height:30px; width:100%; border:0px; letter-spacing:2px; text-align:center; font-size:16px;" name="shangpin_id" id="shangpin_id" value="<?php echo $arr["pid"];?>" /></td>
            <td><input style="height:60px; line-height:30px; width:100%; border:0px; letter-spacing:2px; text-align:center; font-size:16px;" name="shangpin_name" id="shangpin_name" value="<?php echo $arr["name"];?>" /></td>
            <td>￥<input style="height:60px; line-height:30px; width:30%; border:0px; letter-spacing:2px; text-align:center; font-size:16px;" name="shangpin_price" id="shangpin_price" value="<?php echo $arr["price"];?>" /></td>
            <td><input style="height:60px; line-height:30px; width:100%; border:0px; letter-spacing:2px; text-align:center; font-size:16px;" name="shangpin_num" id="shangpin_num" value="<?php echo $arr["num"];?>" /></td>
            <td><input style="height:60px; line-height:30px; width:100%; border:0px; letter-spacing:2px; text-align:center; font-size:16px;" name="shangpin_sumprice" id="shangpin_sumprice" value="<?php echo $arr["price"]*$arr["pdis"]*$arr["num"];?>" /></td>
            <td><a href="cart_move.php?ID=<?php echo $arr["pid"];?>">删除</a></td>
            <?php
            	$sum=$sum+$arr["price"]*$arr["num"]*$arr["pdis"];
				$_SESSION["sum"]=$sum;
				}
			?>
        </tr>
        
        <tr>
        	<td colspan="6">合计总金额:￥<input style="height:20px; line-height:20px; position: width:100%; border:0px; letter-spacing:2px; font-size:16px;" name="shangpin_sum" id="shangpin_sum" value="<?php echo $sum;?>" /></td>
        </tr>
        
        <tr>
        	<td style="height:40px; line-height:30px; width:150px; letter-spacing:2px; text-align:center; font-size:16px;" colspan="6">
            <button style="-moz-border-radius:4px; -webkit-border-radius:4px; width:100px; height:30px; font-size:16px; letter-spacing:2px; border-radius:4px;" name="next" id="next" onClick="window.location.href='index.php'">继续购物</button>
            <button style="-moz-border-radius:4px; -webkit-border-radius:4px; width:100px; height:30px; font-size:16px; margin-left:60px; letter-spacing:2px; border-radius:4px;" name="sum" id="sum" onClick="window.location.href='order_ok.php'">结算</button>
            </td>
        </tr>

    
    </table>
</form>
    
<hr style="margin-top:85px;" />

<div id="footer3">
      <div class="foot-let">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">海南省海口市美兰区桂林洋高校区琼台师范学院,客服邮箱:XXXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">@2017 小熊杂货居 版权所有. 并保留所有权利。</li>
        </div>
        
        <div class="foot-rit">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px;">客服电话 XXXXXX  XXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px;">网单及汇款问题请致电XXXXXXXXXX</li>
        </div>
    </div>



<script type="text/javascript" src="../CSS/AB.js"></script>
</body>
</html>