

<div id="main"><!--主体main-->
     <div id="navbar"><!--导航-->
    	<div class="container">
            <div class="Left"><!--左菜单-->
                <div id="Candy"><!--Logo名-->
                    <h1 class="candy">Candy</h1>
                </div><!--Logo名结束-->
                
                <ul>
                	<li style="width:14%;background:#F07818"><a href="index.php">主页</a></li>
                    <li><a href="dangao.php">蛋糕</a></li>
                    <li><a href="zhiwu.php">植物</a></li>
                    <li><a href="tushu.php">图书</a></li>
                    <li><a href="../admin/adminlogin.php">后台管理</a></li>
                </ul>
            </div><!--左菜单结束-->
            
            <div class="Right"><!--右菜单-->

<form id="form1" name="form1" method="post" action="search_res.php" >

                <div class="serch">
                	<a id="_s">搜索</a>
                    <div class="kkk" id="sc">
                        <input  style="width:172px; margin-left: 15px; float: left; margin-top: 20px; height:25px; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px;" type="text" name="serch" id='se'>
                        <button style="margin-top:18px; height:33px; letter-spacing:2px; width:60px; margin-left:-4px; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px; background:#EE933F; color:#FFF; " type="submit" id="sub">搜索</button>
                    </div>
                </div>
</form> 
 
                   
            <form id="form1" name="form1" method="post" action="login_ok.php">

                <div class="yonghu">
                	<a id="_a">用户</a>
                    <div class="denglu" id='dl'>
               	        <div class="den-top">
                        	<li>用户名</li>
                            <input style="width:100%; height:20px; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px;" type="text" name="username" />
                         	<li style="margin-top:5px;">密码</li>
                            <input style="width:100%; height:20px; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px;" type="password" name="password" />
                            <button value="denglu">登陆</button>
                        </div>
                        
                        <div class="den-bot">
                            	<li style="color:#666; font-size:16px; height:30px; float:left; line-height:30px;">新用户？</li>
                                <div class="zhuce"><a href="register.php">注册</a></div>
                                <div class="forget"><a href="forget_mima.php">忘记密码？</a></div>
                        </div>
                    </div>
                    
                </div>
            	
            </form>

                <div class="gouwuche">
                	<a href="mycart.php">购物车</a>
                </div>
            
            </div><!--右菜单结束-->
    	</div>
    
    </div><!--导航栏结束-->
	<script type="text/javascript">
     var se=document.getElementById('se');  var sub=document.getElementById('sub'); var form1=document.getElementById('form1');
     sub.onclick=function funtion_name(){
        if (se.value.length<1) {alert("请输入查找内容"); form1.setAttribute("action","index.php");}
        else{form1.setAttribute("action","search_ok.php");}
     };

    </script>	
         
