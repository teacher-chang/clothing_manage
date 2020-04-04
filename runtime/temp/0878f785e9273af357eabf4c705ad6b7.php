<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:112:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/index/regist.html";i:1585403651;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
<meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>

<body>

<div class="head">
<span class="head_lf"><a href="index.html">返回</a></span>

用户注册

<span class="head_rg"><a href="<?php echo url('index/login'); ?>">登录</a></span>
</div>

<div class="zhuce">
    <form action="<?php echo url('index/regist'); ?>" method="post">
        <div class="text">
            <span>手机号</span>
            <input type="text" name="mobile" placeholder="请输入手机号" class="input">
        </div>
        <div class="text">
            <span>用户名</span>
            <input type="text" name="username" placeholder="请输入用户名" class="input">
        </div>
        <div class="text">
            <span>密 码</span>
            <input type="text" name="user_pwd" placeholder="请输入密码" class="input">
        </div>
        <div class="text">
            <span>确认密码</span>
            <input type="text" placeholder="请输入确认密码" class="input">
        </div>
        <div class="btndl"><input type="submit" value="注 册"></div>
    </form>
</div>

</body>

</html>
