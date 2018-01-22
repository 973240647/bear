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
<title>意见反馈</title>
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
<form action="yijian_ok.php" method="post">
<div id="fff">

	<div class="main4">
		
        <table width="100%" border="1" cellspacing="0" bordercolor="#F07818">
        
        	<tr>
            	<td colspan="2" style="text-align:center; font-size:22px; letter-spacing:2px;">意见反馈</td>			
            </tr>
            
            <tr>
            	<td colspan="2" style="font-size:18px; letter-spacing:2px;"><textarea style="width:99%; height:200px; font-size:16px;" name="yijian" id="yijian"></textarea></td>       
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
</body>
</html>