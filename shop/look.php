<?php
	session_start();
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../CSS/product-info.css" />
<link rel="stylesheet" type="text/css" href="../CSS/index.css" />
<title>商品评论</title>
</head>

<body>

	<?php 
		include("head.php");
	?>
    <div id="main2">
	
	<?php
		$i=$_GET['id'];
		$sql="select * from product where p_id='$i' ";
		$rs=mysql_query($sql);
		while($result=mysql_fetch_array($rs))
		{
	?> 
    
    
    <div class="llft">
    	<li style="color:#FFF; height:30px; line-height:30px; font-size:14px; letter-spacing:2px; background:-webkit-gradient(linear, left top, left bottom, from(#DC0A0D), to(#9F2115));
　　　　background:-moz-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:-o-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:linear-gradient(top, #DC0A0D, #9F2115);}">&nbsp;产品分类</li>
		
        <li style="margin-top:5px; margin-left:5px; color:#666; height:30px; line-height:30px; font-size:16px;">蛋糕系列</li>
        <ul style="list-style:disc; text-decoration:none; color:#666; margin-left:60px; font-size:14px;">
        	<li style="height:20px; line-height:20px;">生日蛋糕</li>
            <li style="height:20px; line-height:20px;">婚礼蛋糕</li>
            <li style="height:20px; line-height:20px;">儿童蛋糕</li>
            <li style="height:20px; line-height:20px;">水果蛋糕</li>
            <li style="height:20px; line-height:20px;">巧克力蛋糕</li>
        </ul>
        
        <li style="margin-top:5px; margin-left:5px; color:#666; height:30px; line-height:30px; font-size:16px;">鲜花系列</li>
        <ul style="list-style:disc; text-decoration:none; color:#666; margin-left:60px; font-size:14px;">
        	<li style="height:20px; line-height:20px;">生日蛋糕</li>
            <li style="height:20px; line-height:20px;">婚礼蛋糕</li>
            <li style="height:20px; line-height:20px;">儿童蛋糕</li>
            <li style="height:20px; line-height:20px;">水果蛋糕</li>
            <li style="height:20px; line-height:20px;">巧克力蛋糕</li>
        </ul>
        
        <li style="margin-top:5px; margin-left:5px; color:#666; height:30px; line-height:30px; font-size:16px;">书本系列</li>
        <ul style="list-style:disc; text-decoration:none; color:#666; margin-left:60px; font-size:14px;">
        	<li style="height:20px; line-height:20px;">生日蛋糕</li>
            <li style="height:20px; line-height:20px;">婚礼蛋糕</li>
            <li style="height:20px; line-height:20px;">儿童蛋糕</li>
            <li style="height:20px; line-height:20px;">水果蛋糕</li>
            <li style="height:20px; line-height:20px;">巧克力蛋糕</li>
        </ul>
        
    </div><!--llft-->
    
    <?php
	$sql="select * from product order by p_time desc limit 0,1";
	$rs=mysql_query($sql);
	while($result=mysql_fetch_array($rs))
		{
	?> 
    
    <div class="lft-mid">
    	<li style="color:#FFF; height:30px; line-height:30px; font-size:14px; letter-spacing:2px; background:-webkit-gradient(linear, left top, left bottom, from(#DC0A0D), to(#9F2115));
　　　　background:-moz-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:-o-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:linear-gradient(top, #DC0A0D, #9F2115);}">&nbsp;热卖商品</li>
		<img style="height:115px; width:110px; border:1px solid #CCC; margin-top:10px; margin-left:7px; float:left;" src="<?php echo $result['p_image']; ?>" />
        <li><a href="product-info.php?id=<?php echo $result['p_id']?>"><?php echo $result['p_name'];?></a></li>
        <li style="height:30px; width:66px; margin-top:30px; color:#666; float:left; letter-spacing:2px; font-size:16px; margin-left:5px; line-height:30px;">¥<?php echo $result['p_price'];?></li>

    </div><!--lft-mid-->
    
    <?php } ?>
    
    
    
    <div class="lft-bot">
    	<li style="color:#FFF; height:30px; line-height:30px; font-size:14px; letter-spacing:2px; background:-webkit-gradient(linear, left top, left bottom, from(#DC0A0D), to(#9F2115));
　　　　background:-moz-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:-o-linear-gradient(top, #DC0A0D, #9F2115);
　　　　background:linear-gradient(top, #DC0A0D, #9F2115);}">&nbsp;精品产品</li>
	<?php
	$sql="select * from product order by p_time desc limit 0,3";
	$rs=mysql_query($sql);
	while($result=mysql_fetch_array($rs))
		{
	?> 
        <div class="jingpin">
        	<div class="jing-pic"><img width="110" height="125" src="<?php echo $result['p_image'];?>"</div> 
            <div class="jing-name"><a href="product-info.php?id=<?php echo $result['p_id']?>"><?php echo $result['p_name'];?></a></div>
            <div class="jing-price">¥<?php echo $result['p_price'];?></div>
        </div><!--jingpin-->
    </div><!--lft-bot-->
    
    <?php } ?>
    
      <?php
    	$i=$_GET['id'];
		$_SESSION['id']=$i;
		$sql="select * from product,main_type where p_id='$i' and product.p_type=main_type.t_id ";
		$rs=mysql_query($sql);
		while($result=mysql_fetch_array($rs))
			{
		?>
    
    <div class="name">&nbsp;<?php echo $result['t_type']?>&nbsp;<?php echo $result['p_name'];?></div>
    	<div class="pic"><img src="<?php echo $result['p_image']; ?>"/>
        </div> 
        
        <div class="xiang">
        	<table border="0" width="100%">
                <tr>
                	<td style="border-bottom:1px solid #CCC;" width="60px">原价：</td>
					<td style="border-bottom:1px solid #CCC;">¥<?php 
						if($result['p_is_discount']<1){
							echo $result['p_price'];
						}else{
							?><s><?php echo $result['p_price'];?></s>
                  <tr>
                	<td style="border-bottom:1px solid #CCC;">促销价：</td>
                    <td style="border-bottom:1px solid #CCC;"><font color="#FF0000" size="+2">¥<?php echo $result['p_price']*$result['p_discount'];
					}
					?></font></td>
                </tr>
                   
				 	</td>
                </tr>
                

                <tr>
                	<td colspan="2">尺寸：</td>
                </tr>
                
                <tr>
                	<td colspan="2" style="border-bottom:1px solid #CCC;">
                    	<form action="" method="get"> 
&nbsp;<input width="100%" name="Fruit" type="radio" value="" />6英寸,2-3人食用,¥88<br />
&nbsp;<input name="Fruit" type="radio" value="" />10英寸，5-8人食用，¥199<br />
&nbsp;<input name="Fruit" type="radio" value="" />16英寸，12-15人食用，¥348<br />
</form>
                    </td>
                </tr>
                
                <tr>
                	<td style="border-bottom:1px solid #CCC;">餐具：</td>
                	<td style="border-bottom:1px solid #CCC;">
                    	<select>
                        	<option value="three">1-3人用</option>
                            <option value="eight">5-8人用</option>
                            <option value="fifty">12-15人用</option>
                        </select>
                    </td>
                </tr>       
                
                <tr>
                	<td colspan="2" style="border-bottom:1px solid #CCC;">温馨提示：此蛋糕需提前两天17：30之前订购，每天8:30-17:30为网上订货时间，网单及汇款问题请致电XXX咨询.送货服务时间8:30-17:30.</td>
                </tr>
   
            </table>
            
            <?php	}	?>
            
            	<div class="liji">
                	<li>立即购买</li>
                </div>
                
				<div class="tianjia">
                    <li>加入购物车</li>
                </div>
        </div>
        
        <div class="shoucang">
        	<li>加入收藏</li>
        </div>
        <div class="tuijian">
        	<li>推荐给好友</li>
        </div>
        

    
   
 	
	
	
    
	<?php } ?>
	</div><!--main2-->
	
	<?php 
		include("footer2.php");
	?>

<script type="text/javascript" src="../CSS/AB.js"></script>

</body>

</html>