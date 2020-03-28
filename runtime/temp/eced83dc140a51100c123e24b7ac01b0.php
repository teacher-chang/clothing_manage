<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\user\index.html";i:1585272916;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\header.html";i:1585273666;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\footer.html";i:1585138152;}*/ ?>
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
        <a href="<?php echo url('index/logout'); ?>">退出</a>
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
                <li><a href="<?php echo url('store/index'); ?>">店铺管理</a></li>
                <li><a href="<?php echo url('goods/index'); ?>">商品管理</a></li>
                <li><a href="<?php echo url('order/index'); ?>">订单管理</a></li>
                <li><a href="<?php echo url('index/login'); ?>">退出系统</a></li>
            </ul>
        </nav>
    </div>
        <div class="right">
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>用户管理页面</span>
            </div>
            <form action="<?php echo url('user/index'); ?>" method="post">
            <div class="search">
                <span>用户名：</span>
                <input type="text" placeholder="请输入用户名"/>
                <input type="button" value="查询"/>
            </div>
            </form>
            <!--用户-->
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">用户ID</th>
                    <th width="20%">用户名称</th>
                    <th width="20%">电话</th>
                    <th width="20%">添加时间</th>
                    <th width="30%">操作</th>
                </tr>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $vo['user_id']; ?></td>
                    <td><?php echo $vo['username']; ?></td>
                    <td><?php echo $vo['mobile']; ?></td>
                    <td><?php echo $vo['create_time']; ?></td>
                    <td>
                        <a href="userView.html"><img src="__PUBLIC__/img/read.png" alt="查看" title="查看"/></a>
                        <a href="userUpdate.html"><img src="__PUBLIC__/img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="<?php echo url('User/del',['id'=>$vo['user_id']]); ?>" ><img src="__PUBLIC__/img/schu.png" alt="删除" title="删除"/></a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </section>

<!--点击删除按钮后弹出的页面-->
<!--<div class="zhezhao"></div>-->
<!--<div class="remove" id="removeUse">-->
    <!--<div class="removerChid">-->
        <!--<h2>提示</h2>-->
        <!--<div class="removeMain">-->
            <!--<p>你确定要删除该用户吗？</p>-->
            <!--<a href="#" id="yes">确定</a>-->
            <!--<a href="#" id="no">取消</a>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<footer class="footer">
</footer>
<script src="__PUBLIC__/js/time.js"></script>
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/js.js"></script>

<!--<div style="text-align:center; height:300px;background: white;">-->
<!--</div>-->
</body>
</html>