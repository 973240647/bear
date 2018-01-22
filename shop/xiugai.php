<?php
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xiugai</title>
<link type="text/css" rel="stylesheet" href="CSS/search.css" />
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>

<body>

<div id="main">
   	<table border="1" width="100%" height="100" style="text-align:center">
        	<tr height="50">
            	<td width="20%"></td>
                <td width="20%">用户名</td>
                <td width="20%">联系电话</td>
                <td width="20%">邮箱</td>
                <td width="20%">基本操作</td>
            </tr>
       </table>
<?php
$a=$_GET["id"];
$sql="select * from userregister where username='$a' ";
$re=mysql_query($sql);
while($result=mysql_fetch_array($re))
{ 
?>

<form method="post" action="xiugai_ok.php">
     <table border="1" width="100%" height="100">
     <tr>
     <td width="20%"></td>
     <td width="20%"><input name="username" type="text" value="<?php echo $result['username'];?>" /></td>
     <td width="20%"><input name="phone" type="text" value="<?php echo $result['telphone'];?>"/></td>
     <td width="20%"><input name="email" type="text" value="<?php echo $result['Email'];?>" /></td>
     <td width="20%"><input type="submit" value="提交" /></td>
     </tr>
     </table>
     </form>
         
         
         
       <?php 
}?>

</body>
</html>