<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:111:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/index/index.html";i:1585135905;s:113:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/public/header.html";i:1585136006;s:113:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/public/footer.html";i:1585122367;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>服装连锁店管理系统</title>
    <link rel="stylesheet" href="__PUBLIC__/css/public.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
</head>
<body style="height: 800px;">
<!--头部-->
<header class="publicHeader">
    <h1>服装连锁店管理系统</h1>

    <div class="publicHeaderR">
        <p><span>下午好！</span><span style="color: #fff21b"> Admin</span> , 欢迎你！</p>
        <a href="login.html">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian">
    <div class="left">
        <h2 class="leftH2"><span class="span1"></span>功能列表 <span></span></h2>
        <nav>
            <ul class="list">
                <li ><a href="<?php echo url('user/index'); ?>">用户管理</a></li>
                <li><a href="providerList.html">店铺管理</a></li>
                <li><a href="userList.html">商品管理</a></li>
                <li><a href="password.html">订单管理</a></li>
                <li><a href="login.html">退出系统</a></li>
            </ul>
        </nav>
    </div>
    <div class="right">
        <img class="wColck" src="__PUBLIC__/img/clock.jpg" alt=""/>
        <div class="wFont">
            <h2>Admin</h2>
            <p>服装连锁店管理系统</p>
			<span id="hours"></span>
        </div>
    </div>
</section>
<footer class="footer">
</footer>
<script src="__PUBLIC__/js/time.js"></script>
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/js.js"></script>

<!--<div style="text-align:center; height:300px;background: white;">-->
<!--</div>-->
</body>
</html>
