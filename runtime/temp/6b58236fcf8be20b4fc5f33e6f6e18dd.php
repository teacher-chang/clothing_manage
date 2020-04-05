<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:114:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/user/user_info.html";i:1586046185;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人信息编辑</title>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
<meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>

<body>

<div class="head">
<span class="head_lf"><a href="<?php echo url('User/user_center'); ?>">返回</a></span>

<span>个人信息编辑</span>

</div>

<div class="zhuce" style="width: 90%;margin-left: 5%">
    <form action="<?php echo url('User/save'); ?>" method="post">
        <div class="text">
            <span>手机号</span>
            <input type="text" name="mobile" class="input" value="<?php echo $data['mobile']; ?>">
        </div>
        <div class="text">
            <span>用户名</span>
            <input type="text" name="username" class="input" value="<?php echo $data['username']; ?>">
        </div>
        <div class="text">
            <span>密码</span>
            <input type="text" name="user_pwd" class="input" value="<?php echo $data['user_pwd']; ?>">
        </div>
        <div class="btndl"><input type="submit" value="保 存"></div>
    </form>
</div>

</body>

</html>
