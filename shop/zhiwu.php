<?php
	session_start();
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../CSS/forget.css" />
<link rel="stylesheet" type="text/css" href="../CSS/index.css" />
<link rel="stylesheet" type="text/css" href="../CSS/search.css" />
<title>植物</title>
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

<div id="ddd">
	<div class="nei">
    	<?php
header("Content-Type:text/html;charset=utf-8");
	$page_size=6;
	$sql1="select count(*) as amount from product,main_type where main_type.t_id=product.p_type and main_type.t_type like '%植物%' ";
	$rs1=mysql_query($sql1);
	$result1=mysql_fetch_array($rs1);
	$amount=$result1["amount"];
	if($amount>0)
	{
		$page_count=($amount%$page_size!=0)?(int)($amount/$page_size)+1:($amount/$page_size);
	}else{
		$page_count=0;
	}
	if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}else{
		$page=1;
	}
	if($page<1)
	{
		$page=1;
	}
	if($page>$page_count)
	{
		$page=$page_count;
	}
?>
<?php
			if($amount>0)
			{
				$start=($page-1)*$page_size;
				$sql="select distinct * from product,main_type where main_type.t_id=product.p_type and main_type.t_type like '%植物%' order by p_time desc limit $start,$page_size";
				$rs=mysql_query($sql);
				if(mysql_num_rows($rs)>0)
				{
					while($result=mysql_fetch_array($rs)){
		?>

	<div class="bigkuang">
    	<div class="tu"><img style="-moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px;" width="240" height="200" src="<?php echo $result["p_image"]; ?>" /></div>
        <div class="mingzi"><?php echo $result["p_name"]; ?></div>
        <div class="neirong">简介:<?php echo $result["p_description"]; ?></div>
        <div class="jiage"><?php 
			if($result['p_is_discount']<1){
							echo "¥".$result['p_price'];
							}else{
								?><s>¥<?php echo $result['p_price'] ?></s><br />
                                <font color="#FF0000">折扣价:¥<?php echo $result['p_price']*$result['p_discount'];
							?></font>
							<?php }?>
			</div>
    	<div class="xiangqing"><a href="product-info.php?id=<?php echo $result["p_id"];?>">查看详情</a></div>
    
    </div>
        
<?php
			}
		}
	}
?>
	<ul style="height:40px; width:900px; position:absolute; margin-top:830px; list-style:none;">
			<li><a href="?page=1" style="margin-left:20px;">首页</a></li>
            <li><a href="?page=<?php echo ($page-1)?>">上一页</a></li>
            <li><a href="?page=<?php echo ($page+1)?>">下一页</a></li>
            <li><a href="?page=<?php echo $page_count?>" style="margin-right:0px;">尾页</a></li>
     </ul>
    
    </div>

<hr style="position:absolute; margin-top:920px;" width="100%" />

<div style="margin-top:920px; position:absolute; margin-left:140px;" id="footer3">
      <div class="foot-let">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">海南省海口市美兰区桂林洋高校区琼台师范学院,客服邮箱:XXXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px; margin-left:8px;">@2017 小熊杂货居 版权所有. 并保留所有权利。</li>
        </div>
        
        <div class="foot-rit">
          <li style="line-height:35px; height:35px; color:#666; font-size:14px;">客服电话 XXXXXX  XXXXXXX</li>
            <li style="line-height:35px; height:35px; color:#666; font-size:14px;">网单及汇款问题请致电XXXXXXXXXX</li>
        </div>
    </div>

</div>




    <script type="text/javascript" src="../CSS/AB.js"></script>
</body>
</html>