<?php
	include("database.php");
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/register.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/index.css">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<title>修改资料</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>

<body>
<?php
header("Content-Type:text/html;charset=utf-8");
        if(!isset($_SESSION['n']))
        {
            include("head.php");
        }else{
            include("head2.php");
        }
?>

<form action="modified_ok.php" method="post">
<div id="rrr">

	<div class="main3">
		
        <table border="1" width="100%">
        
        	<tr>
            	<td colspan="2" style="text-align:center; font-size:22px; letter-spacing:2px;">用户资料修改</td>			
            </tr>
            
            
            <tr>
            	<td width="110" style="font-size:18px; letter-spacing:2px;">密码：</td>
              <td><span id="sprypassword1">
              <input style="margin-bottom:8px; font-size:14px;" type="password" name="password2" id="pass">
              <span class="passwordRequiredMsg">长度为8-16位的数字或字符组成。</span><span class="passwordInvalidStrengthMsg"></span><span class="passwordMinCharsMsg">最小字符数不小于8位。</span><span class="passwordMaxCharsMsg">最大字符数不超过16位。</span></span></td>         
            </tr>
            
            <tr>
            	<td width="110" style="font-size:18px; letter-spacing:2px;">确认密码：</td>
              <td><span id="spryconfirm1">
                <input style="margin-bottom:8px; font-size:14px;" type="password" name="password3" id="password3" />
              <span class="confirmRequiredMsg">请再次确认密码。</span><span class="confirmInvalidMsg">两次密码输入不一致。</span></span></td>         
            </tr>
            
<?php
	$u=$_SESSION['n'];
	$sql="select * from customer where c_name='$u' ";
	$rs=mysql_query($sql);
	while($result=mysql_fetch_array($rs))
	{
?>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">头像：</td>
                <td>
                    &nbsp;&nbsp;<img src="<?php echo $result["c_header"]; ?>" alt=个人形象代表 name="avatar" width="90" height="60" id=avatar>
                    <select style="margin-bottom:20px;" name=reg_userpic size=1 onchange="document.images['avatar'].src=options[selectedIndex].value;">
                      <option value="../img/tx/1.jpeg">Images1
                      <option value="../img/tx/2.jpeg">Images2
                      <option value="../img/tx/3.jpeg">Images3
                      <option value="../img/tx/4.jpeg">Images4
                      <option value="../img/tx/5.jpeg">Images5
                      <option value="../img/tx/6.jpg">Images6
                      <option value="../img/tx/7.jpeg">Images7
                      <option value="../img/tx/8.jpeg">Images8
                      <option value="../img/tx/9.jpeg">Images9
                    </select>
                    
                </td>         
            </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">电话号码：</td>
              <td><span id="sprytextfield2">
              <input style="margin-bottom:8px; font-size:14px;" type="text" name="telphone" value="<?php echo $result["c_phone"]; ?>">
              <span class="textfieldRequiredMsg">请输入您的电话号码。</span><span class="textfieldMinCharsMsg">不符合最小字符数要求。</span><span class="textfieldMaxCharsMsg">已超过最大字符数。</span><span class="textfieldInvalidFormatMsg">格式无效。</span></span></td>
          </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">密保问题：</td>
                <td>
               	  <select name="question" size="1" id="question" style="width:50%; height:40px; font-size:14px; letter-spacing:2px;">
                  <option selected="selected"><?php echo $result["c_question"];?></option>
                    	<option>您母亲的姓名是？</option>
                        <option>您父亲的姓名是？</option>
                        <option>您配偶的姓名是？</option>
                        <option>您的出生地是？</option>
                        <option>您的小学校名是？</option>
                    </select>
              </td>             
            </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">密保答案：</td>
              <td><span id="sprytextfield4">
                <input style="margin-bottom:8px; font-size:14px;" type="text" name="anwser" value="<?php echo $result["c_answer"];?>">
              <span class="textfieldRequiredMsg">请输入您的密保答案。</span></span></td>      
            </tr>
            
             <tr>
            	<td style="font-size:18px; letter-spacing:2px;">地址：</td>
               	<td><span id="sprytextfield5">
               	  <input style="margin-bottom:8px; font-size:14px;"  type="text" name="address" value="<?php echo $result["c_address"]; ?>" >
           	    <span class="textfieldRequiredMsg">请输入您的住址。</span></span></td>      
            </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">邮箱：</td>
               	<td><span id="sprytextfield3">
                <input style="margin-bottom:8px; font-size:14px;"  type="text" name="e-mail" value="<?php echo $result["c_email"]; ?>" >
                <span class="textfieldRequiredMsg">请输入您的邮箱地址。</span><span class="textfieldInvalidFormatMsg">格式无效。</span></span></td>      
            </tr>
            
            <tr>
            	<td colspan="2"><button style="width:180px; height:45px; margin-left:17%; font-size:18px;" type="submit" name="zzz">修改</button>
                <button style="width:180px; height:45px; margin-left:5%; font-size:18px;" type="reset" name="ccc" >重置</button>
                </td>
            </tr>
            
        </table> 

	</div>

</div>

<?php
	}
?>


</form>



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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:3, maxChars:7, hint:"请输入您的用户名"});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:8, maxChars:16});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {minChars:11, maxChars:11});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass");
</script>
</body>
</html>