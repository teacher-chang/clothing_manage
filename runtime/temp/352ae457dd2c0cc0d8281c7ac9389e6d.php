<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:110:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/user/index.html";i:1585058987;s:113:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/public/header.html";i:1585123046;s:113:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/admin/view/public/footer.html";i:1585122367;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>服装连锁店管理系统</title>
    <link rel="stylesheet" href="__PUBLIC__/css/public.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
</head>
<body>
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
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>用户管理页面</span>
            </div>
            <div class="search">
                <span>用户名：</span>
                <input type="text" placeholder="请输入用户名"/>
                <input type="button" value="查询"/>
                <a href="<?php echo url('user/add'); ?>">添加用户</a>
            </div>
            <!--用户-->
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">用户编码</th>
                    <th width="20%">用户名称</th>
                    <th width="10%">性别</th>
                    <th width="10%">年龄</th>
                    <th width="10%">电话</th>
                    <th width="10%">用户类型</th>
                    <th width="30%">操作</th>
                </tr>
                <tr>
                    <td>hanlu</td>
                    <td>韩露</td>
                    <td>女</td>
                    <td>20</td>
                    <td>15918230478</td>
                    <td>经理</td>
                    <td>
                        <a href="userView.html"><img src="__PUBLIC__/img/read.png" alt="查看" title="查看"/></a>
                        <a href="userUpdate.html"><img src="__PUBLIC__/img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="#" class="removeUser"><img src="__PUBLIC__/img/schu.png" alt="删除" title="删除"/></a>
                    </td>
                </tr>
                <tr>
                    <td>PRO-CODE—001</td>
                    <td>测试供应商001</td>
                    <td>韩露</td>
                    <td>15918230478</td>
                    <td>15918230478</td>
                    <td>2015-11-12</td>
                    <td>
                        <a href="userView.html"><img src="__PUBLIC__/img/read.png" alt="查看" title="查看"/></a>
                        <a href="userUpdate.html"><img src="__PUBLIC__/img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="#" class="removeUser"><img src="__PUBLIC__/img/schu.png" alt="删除" title="删除"/></a>
                    </td>
                </tr>
            </table>

        </div>
    </section>

<!--点击删除按钮后弹出的页面-->
<div class="zhezhao"></div>
<div class="remove" id="removeUse">
    <div class="removerChid">
        <h2>提示</h2>
        <div class="removeMain">
            <p>你确定要删除该用户吗？</p>
            <a href="#" id="yes">确定</a>
            <a href="#" id="no">取消</a>
        </div>
    </div>
</div>

<footer class="footer">
</footer>
<script src="__PUBLIC__/js/time.js"></script>
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/js.js"></script>

<!--<div style="text-align:center; height:300px;background: white;">-->
<!--</div>-->
</body>
</html>