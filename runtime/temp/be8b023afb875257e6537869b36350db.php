<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:119:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/order/order_confirm.html";i:1586061751;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订单确认</title>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
    <link rel="stylesheet" href="__PUBLIC__/index/css/index.css">
    <link rel="stylesheet" href="__PUBLIC__/index/css/order.css">
    <link rel="stylesheet" href="__PUBLIC__/index/css/order_confirm.css">
    <script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="head">
        <span class="head_lf"><a href="<?php echo url('User/user_center'); ?>">返回</a></span>
        <span>订单确认</span>
    </div>

    <!--订单确认页-->
    <div class="order_confirm">
        <span style="margin-bottom: 5px;color:rgba(100,207,250,1)">请确认商品信息</span>
        <hr style="margin-top:5px;border-color:rgba(100,207,250,1)">
        <!--商品信息-->
        <div class="goods_info">
            <div class="goods_img">
                <img src="__PUBLIC__/index/img/wt.jpg" alt="">
                <div class="goods_name">
                    <div style="margin-bottom: 10px;">名称:男士夹克</div>
                    <div style="margin-bottom: 10px;">价格: <span style="color:red;font-weight: bold;">¥ 333</span></div>
                    <div>数量：x 1</div>
                </div>
            </div>
        </div>

        <!--收货信息-->
        <div class="user_info">
            <div style="padding-top: 35%;color:rgba(100,207,250,1)">填写收货信息：</div>
            <hr style="margin-top:5px;border-color:rgba(100,207,250,1)">
            <div>
                <div class="zhuce" style="margin-top: 0%;text-align: left;width:94%;margin-left: 3%;">
                    <form action="<?php echo url('index/regist'); ?>" method="post">
                        <div class="text" style="margin-left:-10%;">
                            <span>收件人</span>
                            <input type="text" name="mobile" placeholder="请输入收件人姓名" class="input">
                        </div>
                        <div class="text" style="margin-left:-7%;">
                            <span>联系电话</span>
                            <input type="text" name="username" placeholder="请输入联系电话" class="input">
                        </div>
                        <div class="text" style="margin-left:-7%;">
                            <span>收件地址</span>
                            <input type="text" name="user_pwd" placeholder="请输入收件地址" class="input">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div style="margin-top: 50%;background: papayawhip;height: 30px;line-height: 30px;text-align: right;width: 110%;margin-left: -5%;">
           <span style="margin-right: 20px;">订单需支付信息：<span style="color:red;">¥ 333</span> </span>
        </div>
    </div>
    <!--底部导航-->
    <div style="text-align:center;">
        <div class="footer">

            <div class="buy">
                <a href="<?php echo url('order/orderConfirm'); ?>">立即支付</a>
            </div>
        </div>
    </div>

</body>
<style>
    .footer{
        height:35px;
        line-height: 35px;
        width: 100%;
        background-color: #ddd;
        position: fixed;
        bottom: 0;
    }
    .buy{
        width: 100%;
        float: left;
        background: rgba(100,207,250,1);

        text-align: center;
        color:white;
    }
    .buy a {

        text-align: center;
        color:white;
    }

</style>

</html>
