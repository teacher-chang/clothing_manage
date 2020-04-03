<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\Goods\edit.html";i:1585492264;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\header.html";i:1585467897;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\footer.html";i:1585138152;}*/ ?>
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
            <span>商品管理页面 >> 商品编辑页面</span>
        </div>
        <div class="providerAdd">
            <form action="<?php echo url('Goods/update'); ?>" method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div class="">
                    <input type="hidden" value="<?php echo $data['goods_id']; ?>" name="goods_id">
                    <label for="providerId">商品名称：</label>
                    <input type="text" name="goods_name" id="providerId" value="<?php echo $data['goods_name']; ?>"/>
                    <span>*请输入商品名称</span>
                </div>
                <div>
                    <label for="providerName">商品价格：</label>
                    <input type="text" name="goods_price" id="providerName" value="<?php echo $data['goods_price']; ?>"/>
                    <span >*请输入商品价格</span>
                </div>
                <div >
                    <label for="people" >商品图片：</label>
                    <div style="padding-left: 204px; margin-top: -25px">
                        <input type="text" class="picture" name="goods_img" value='<?php echo $data['goods_img']; ?>' />
                    </div>
                </div>
                <div >
                    <label for="people">商品详情：</label>
                    <div style="padding-left: 204px; margin-top: -25px">
                        <input type="text" class="pic1" name="goods_detail" id="people" value="<?php echo $data['goods_detail']; ?>" />
                    </div>

                </div>
                <div>
                    <label for="phone">商品进货量：</label>
                    <input type="text" name="goods_total" id="phone" value="<?php echo $data['goods_total']; ?>"/>
                    <span>*请输入商品进货量</span>
                </div>
                <div>
                    <label for="phone">所属门店：</label>
                    <select name="store_id">
                        <?php if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" <?php if($data['store_id'] == $vo['id']): ?> selected="selected" <?php endif; ?>><?php echo $vo['store_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span>*请选择所属门店</span>
                </div>
                <div class="providerAddBtn">
                    <input style="line-height: 20px" type="submit" value="保存" />
                    <a href="<?php echo url('goods/index'); ?>">
                        <input type="button" value="返回" onclick="history.back(-1)"/>
                    </a>
                </div>
            </form>
        </div>

    </div>
</section>
<script>
    KindEditor.ready(function(K) {
        editor = K.create('.pic1', {
            resizeType : 1,
            items : [
                'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
                'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
                'anchor', 'link', 'unlink', '|', 'about']
        });
    });
    KindEditor.ready(function(K) {
        editor = K.create('.picture', {
            resizeType : 1,
            items : ['image']
        });
    });
</script>
<footer class="footer">
</footer>
<script src="__PUBLIC__/js/time.js"></script>
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/js.js"></script>

<!--<div style="text-align:center; height:300px;background: white;">-->
<!--</div>-->
</body>
</html>