<?php
	session_start();
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/index.css" />
<title>小熊杂货居</title>
</head>

<body>

    <?php
        if($_SESSION['n']=="")
        {
            include("head.php");
        }else{
            include("head2.php");
        }
    ?>
    
<div id="main"><!--主体main-->    
    <div id="cake">
    	<div class="cont"><li>The Best Surprise for U</li></div>
        <div class="cicont"><li>Our best cakes make your day special</li></div>
    	<div class="maincake"></div>
        <div class="show">
        	<li>SHOP NOW</li>
        </div>
    </div>
    
    <div id="big"><!--第三部分大框架-->
    	<div class="middle"><!--次框架-->
        	
            <div class="middle-top"><!--上半部分两个展示蛋糕-->
            	<div class="onequan">
                    <div class="one">
                    	<img height="420" width="100%" src="../img/big.jpg" />
                        <span>
                        <div class="eye"></div>
                        <li>View</li>
                        <div class="sh"><a href="#">SHOP NOW</a></div>
                        </span>
                    </div>
                    <div class="con">
                    	<div class="one-name">Candy Candy</div>
                        <div class="one-price">¥199</div>
                    </div>                 
                </div>
                
                <div class="twoquan">
                    <div class="two">
                    	<img height="420" width="100%" src="../img/two.jpg" />
                     	<span>
                        <div class="teye"></div>
                        <li>View</li>
                        <div class="tsh"><a>SHOP NOW</a></div>
                        </span>
                    </div>
                    <div class="tcon">
                    	<div class="two-name">Candy Candy</div>
                        <div class="two-price">¥199</div>
                    </div>
                </div>
            </div>

          
            <div id="little"><!--下半部分蛋糕商品-->
<?php
	$sql="select * from product order by p_time desc limit 0,6";
	$rs=mysql_query($sql);
	while($result=mysql_fetch_array($rs))
		{
?>             
	<form action="product-info.php" id="form1" name="form1" method="get"> 	
				<div class="dangao">
                	<div class="cakepic"><img src="<?php echo $result['p_image']; ?>"/>
                    	<span>
                        	 <div class="deye"><img src="../img/eye.png" /></div>
                            <li>View</li>
                            <div class="dsh"><a href="product-info.php?id=<?php echo $result['p_id']?>">SHOP NOW</a></div>
                        </span>
                    </div>
                    <div class="cakecon">
                    	<div class="cakename"><?php echo $result['p_name']; ?></div>
                        <div class="cakeprice"><?php 
							if($result['p_is_discount']<1){
							echo "¥".$result['p_price']."";
							}else{
								?><s>¥<?php echo $result['p_price'] ?></s><font color="#FF0000" size="+2">¥<?php echo $result['p_price']*$result['p_discount'];
							}?></font></div>
                    </div>
                </div>
                
<?php }	?>
            
	</form>
             
            </div>
        </div>
    </div>
</div><!--主体main结束-->
	<?php
        include("footer.php");
	?>

<script type="text/javascript" src="../CSS/AB.js"></script>


</body>
</html>
