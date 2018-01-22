<?php
	include("database.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/register.css">
<link rel="stylesheet" type="text/css" href="../CSS/index.css">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<title>修改密码</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>
<body>

<?php
header("Content-Type:text/html;charset=utf-8");
	include("head.php");
?>
<form action="updatemima_ok.php" method="post">
<div id="fff">

	<div class="main4">
		
        <table width="100%" border="1" cellspacing="0" bordercolor="#F07818">
        
        	<tr>
            	<td colspan="2" style="text-align:center; font-size:22px; letter-spacing:2px;">修改密码</td>			
            </tr>
            
            <tr>
            	<td style="font-size:18px; letter-spacing:2px;">新密码：</td>
              <td><span id="sprypassword1">
              <input name="newpass" type="password" id="newpass" style="margin-bottom:8px; font-size:14px;">
              <span class="passwordRequiredMsg">长度为8-16位的数字或字符组成。</span><span class="passwordInvalidStrengthMsg"></span><span class="passwordMinCharsMsg">最小字符数不小于8位。</span><span class="passwordMaxCharsMsg">最大字符数不超过16位。</span></span></td>         
          </tr>
          <tr>
            	<td style="font-size:18px; letter-spacing:2px;">确认新密码：</td>
              <td><span id="spryconfirm1">
                <input name="newpass2" type="password" id="newpass2" style="margin-bottom:8px; font-size:14px;">
              <span class="confirmRequiredMsg">请再次确认密码。</span><span class="confirmInvalidMsg">两次输入不一致。</span></span></td>         
          </tr>
            
            <tr>
            	<td colspan="2"><button style="width:180px; height:45px; margin-left:17%; font-size:18px;" type="submit" name="zzz">修改</button>
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
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "newpass");
</script>
</body>
</html>