<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>System login</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="/Public/System/Js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/Public/System/Js/login.js"></script>
<link href="/Public/System/Css/login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>System login<sup>2016</sup></h1>

<div class="login" style="margin-top:50px;">
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">
        <!--登录-->
        <div class="web_login" id="web_login">
            <div class="login-box">
				<div class="login_form">
					<form action="<?php echo U('System/Index/index');?>" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
	               <input type="hidden" name="to" value="log"/>
	                <div class="uinArea" id="uinArea">
	                <label class="input-tips" for="u">帐号：</label>
	                <div class="inputOuter" id="uArea">
	                    
	                    <input type="text" id="u" name="username" class="inputstyle"/>
	                </div>
	                </div>
	                <div class="pwdArea" id="pwdArea">
	               <label class="input-tips" for="p">密码：</label> 
	               <div class="inputOuter" id="pArea">
	                    
	                    <input type="password" id="p" name="p" class="inputstyle"/>
	                </div>
	                </div>
	               
	                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
	              </form>
	            </div>
            </div>
        </div>
        <!--登录end-->
  	</div>
</div>

<div class="jianyi">*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问</div>
</body></html>