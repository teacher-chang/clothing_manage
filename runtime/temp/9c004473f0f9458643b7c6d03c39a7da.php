<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\xampp\htdocs\clothing_manage\public/../application/index\view\user\user_info.html";i:1585984003;}*/ ?>
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
<link rel="stylesheet" href="__PUBLIC__/index/css/index.css">
<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <style>
        p{

        }
    </style>
</head>

<body>
<div class="head">
<span class="head_lf"><a href="<?php echo url('index/index'); ?>">返回</a></span>

<span>用户中心</span>

<!--<span class="head_rg"><a href="<?php echo url('index/login'); ?>">登录</a></span>-->
</div>

<div style="margin-top: 60px;" id="edit">
    <span id="edit_top" >个人信息编辑</span>
    <div class="text">
        <span>用户名：</span>
        <input type="text">
    </div>
    <div class="text">
        <span>手机号：</span>
        <input type="text">
    </div>
    <div class="text">
        <span>旧密码：</span>
        <input type="text">
    </div>
    <div class="text">
        <span>新密码：</span>
        <input type="password">
    </div>
    <div class="baocun">
        <input type="submit" value="保存">
    </div>

</div>

<div class="zhuce" style="margin-top: 60px;">
    <div style="width:96%;margin-left: 2%;background: lightblue;height: 120px;border-radius: 8px;font-size: 13px;">

             <div style="margin-left: 20px;padding-top: 30px;float: left;">用户名：</div>
             <div style="margin-right: 20px;margin-top: 30px;float: right;">手机号：</div>
        <div style="margin-top: 30px;float: left;margin-left: 20px;">
            订单数：
        </div>
    </div>
    <form action="<?php echo url('index/regist'); ?>" method="post">
        <div class="text">
            <a href="<?php echo url('User/edit'); ?>"><span>个人信息</span></a>
        </div>
        <div class="text">
            <a href=""><span>我的订单</span></a>
        </div>
        <div class="text">
            <a href="<?php echo url('index/logout'); ?>"><span>退出系统</span></a>
        </div>
    </form>
</div>

<div style="text-align:center;">
    <div class="footer">
        <div class="item">
            <a href="<?php echo url('index/index'); ?>">首页</a>
        </div>
        <div class="item">首页</div>
        <div class="item">
            <?php if($user_id != 0): ?>
            <a href="<?php echo url('user/user_center'); ?>">我的</a>
            <?php else: ?>
            <a href="<?php echo url('index/login'); ?>">我的</a>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
<style>
    .footer{
        height:35px;
        width: 100%;
        background-color: #ddd;
        position: fixed;
        bottom: 0;
    }
    .item{
        float: left;
        width: 33%;
        line-height: 35px;

    }
</style>
</html>