<?php
	session_start();
	include("database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘记密码</title>
<link rel="stylesheet" type="text/css" href="../CSS/index.css">
<link rel="stylesheet" type="text/css" href="../CSS/forget.css">
<link rel="stylesheet" type="text/css" href="../CSS/register.css">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<title>register</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>
<?php
header("Content-Type:text/html;charset=utf-8");
	include("head.php");
?>

<form action="forget_ok.php" method="post">
<div id="fff">

	<div class="main4">
		
        <table width="100%" border="1" cellspacing="0" bordercolor="#F07818">
        
        	<tr>
            	<td colspan="2" style="text-align:center; font-size:22px; letter-spacing:2px;">忘记密码</td>			
            </tr>
            
            <tr>
            	<td width="110" style="font-size:18px; letter-spacing:2px;">用户名：</td>			 				
                <td><span id="sprytextfield1">
                <input style="margin-bottom:8px; font-size:14px; letter-spacing:2px;" type="text" name="username3" id="username3">
              <span class="textfieldRequiredMsg">请输入您的用户名</span><span class="textfieldMinCharsMsg"></span><span class="textfieldMaxCharsMsg"></span></span></td>
            </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">电话号码：</td>
              <td><span id="sprytextfield2">
              <input style="margin-bottom:8px; font-size:14px;" type="text" name="telphone2" id="telphone2">
              <span class="textfieldRequiredMsg">请输入您的电话号码。</span><span class="textfieldMinCharsMsg">不符合最小字符数要求。</span><span class="textfieldMaxCharsMsg">已超过最大字符数。</span><span class="textfieldInvalidFormatMsg">格式无效。</span></span></td>
          </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">密保问题：</td>
                <td>
               	  <select name="question2" size="1" id="question2" style="width:50%; height:40px; font-size:14px; letter-spacing:2px;">
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
                <input style="margin-bottom:8px; font-size:14px;" type="text" name="anwser2" id="anwser2">
              <span class="textfieldRequiredMsg">请输入您的密保答案。</span></span></td>      
            </tr>
        
            <tr>
            	<td colspan="2"><button style="width:180px; height:45px; margin-left:17%; font-size:18px;" type="submit" name="zzz">提交</button>
                <button style="width:180px; height:45px; margin-left:5%; font-size:18px;" type="reset" name="ccc" >重置</button>
                </td>
            </tr>
            
        </table> 

	</div>

</div>

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
</script>
</body>
</html>