<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\goods\index.html";i:1585548807;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\header.html";i:1585467897;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\footer.html";i:1585138152;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>服装连锁店管理系统</title>
    <link rel="stylesheet" href="__PUBLIC__/css/public.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
    <script src="__PUBLIC__/kd/kd/kindeditor-min.js"></script>
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
            <span>商品管理页面</span>
        </div>
        <form action="<?php echo url('Goods/index'); ?>" method="post">
        <div class="search">
            <span>名称：</span>
            <input type="text" placeholder="请输入商品的名称" name="name"/>
            <input type="submit" value="查询" id="chaxun"/>
            <a href="<?php echo url('Goods/add'); ?>">添加商品</a>
        </div>
        </form>
        <!--供应商操作表格-->
        <table class="providerTable" cellpadding="0" cellspacing="0">
            <tr class="firstTr">
                <th width="5%">商品ID</th>
                <th width="10%">商品名称</th>
                <th width="10%">商品价格</th>
                <th width="10%">商品图片</th>
                <th width="10%">商品详情</th>
                <th width="10%">商品进货量</th>
                <th width="5%">销量</th>
                <th width="5%">库存</th>
                <th width="10%">所属门店</th>
                <th width="10%">添加时间</th>
                <th width="15%">操作</th>
            </tr>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $vo['goods_id']; ?></td>
                <td><?php echo $vo['goods_name']; ?></td>
                <td><?php echo $vo['goods_price']; ?></td>
                <td id="goods_img"><?php echo $vo['goods_img']; ?></td>
                <td><?php echo $vo['goods_detail']; ?></td>
                <td><?php echo $vo['goods_total']; ?></td>
                <td><?php echo $vo['sale_number']; ?></td>
                <td><?php echo $vo['inventory']; ?></td>
                <td><?php echo $vo['store_name']; ?></td>
                <td><?php echo $vo['create_time']; ?></td>
                <td>
                    <a href="<?php echo url('goods/edit',['id'=>$vo['goods_id']]); ?>"><img src="__PUBLIC__/img/xiugai.png" alt="修改" title="修改"/></a>
                    <a href="<?php echo url('goods/del',['id'=>$vo['goods_id']]); ?>"><img src="__PUBLIC__/img/schu.png" alt="删除" title="删除"/></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>

    </div>
</section>

<!--&lt;!&ndash;点击删除按钮后弹出的页面&ndash;&gt;-->
<!--<div class="zhezhao"></div>-->
<!--<div class="remove" id="removeProv">-->
   <!--<div class="removerChid">-->
       <!--<h2>提示</h2>-->
       <!--<div class="removeMain" >-->
           <!--<p>你确定要删除该供应商吗？</p>-->
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