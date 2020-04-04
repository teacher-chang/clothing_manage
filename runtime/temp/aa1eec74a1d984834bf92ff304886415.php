<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:111:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/index/login.html";i:1585391509;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
<meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
</head>
<body>
<div class="head">
<span class="head_lf"><a href="index.html">返回</a></span>

用户登录

<span class="head_rg"><a href="<?php echo url('index/regist'); ?>">注册</a></span>
</div>

<div class="login">
    <form action="<?php echo url('index/login'); ?>" method="post">
        <div class="text name"><input type="text" name="username" placeholder="请输入账号"></div>
        <div class="text pwd"><input type="password" name="user_pwd" placeholder="请输入密码"></div>
        <div class="btndl"><input type="submit" value="登 录"></div>
    </form>
</div>

</body>

</html>
