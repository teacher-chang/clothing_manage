<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\xampp\htdocs\clothing_manage\public/../application/index\view\order\order_info.html";i:1586007069;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订单详情</title>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
    <link rel="stylesheet" href="__PUBLIC__/index/css/index.css">
    <script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>

<body>

    <div class="head">
        <span class="head_lf"><a href="<?php echo url('User/user_center'); ?>">返回</a></span>
        <span>订单详情</span>
    </div>
    <div name="center" class="order">
        <div name="info" class="order_info" >
            <div>订单编号：1234567</div>
            <div class="order_info_center">
                <div class="order_image">
                    <img src="__PUBLIC__/index/img/wt.jpg" alt=""/>
                </div>
                <div style="float: left;">
                    <div>商品名称</div>
                    <div>商品价格</div>
                </div>
            </div>
            <div>已发货</div>

        </div>
        <div name="info" class="order_info">
            <span></span>
            <span>商品名称</span>
            <span>商品价格</span>
            <div><span>未发货</span></div>

        </div>
    </div>



</body>

</html>
