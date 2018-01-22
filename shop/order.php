<?php
	session_start();
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的订单</title>
<link rel="stylesheet" type="text/css" href="../CSS/index.css" />
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

<table width="930" height="260" style="margin:auto; margin-top:60px;" border="1" cellspacing="0" bordercolor="#F07818">
 		<?php
			$u=$_SESSION['n'];
        	$sql="select * from orders,orderdetails,product where orders.order_id=orderdetails.order_id and product.p_id=orderdetails.p_id and order_user='$u' ";
			$rs=mysql_query($sql);
			while($result1=mysql_fetch_array($rs)){
				
		?>
        
    	<tr>
        	<td style="height:30px; line-height:30px; font-size:18px; letter-spacing:2px;" colspan="6">订单号：<?php echo $result1["order_id"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单时间：<?php echo $result1["order_time"];?></td>
        </tr>

      <tr style="text-align:center;">
        	<td style="height:50px; line-height:50px; width:200px; letter-spacing:2px; text-align:center; font-size:16px;"><img width="150" height="80" src="<?php echo $result1["p_image"];?>" /></td>
            <td style="height:50px; line-height:50px; width:200px; letter-spacing:2px; text-align:center; font-size:16px;"><?php echo $result1["p_name"];?></td>
            <td style="height:50px; line-height:50px; width:200px; letter-spacing:2px; text-align:center; font-size:16px;">￥<?php echo $result1["p_price"]*$result1["p_discount"];?></td>
            <td style="height:50px; line-height:50px; width:120px; letter-spacing:2px; text-align:center; font-size:16px;"><?php echo $result1["p_number"];?></td>
            <td><?php echo $result1["p_price"]*$result1["p_number"]*$result1["p_discount"];?></td>
        </tr>

        <tr>
        	<td style="height:30px; line-height:30px; width:150px; letter-spacing:2px; font-size:16px;" colspan="6">合计总金额:￥<?php echo $result1["order_sum"];?></td>
        </tr>
           
   
    
<?php
	}
?>
 </table>
    
<hr style="margin-top:85px;" />

<div id="footer3">
      <div class="foot-let">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">海南省海口市美兰区桂林洋高校区琼台师范学院,客服邮箱:XXXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">@<?php echo date("Y");?> 小熊杂货居 版权所有. 并保留所有权利。</li>
        </div>
        
        <div class="foot-rit">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px;">客服电话 XXXXXX  XXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px;">网单及汇款问题请致电XXXXXXXXXX</li>
        </div>
    </div>

<script type="text/javascript" src="../CSS/AB.js"></script>

</body>
</html>