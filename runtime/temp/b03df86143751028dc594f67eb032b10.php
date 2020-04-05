<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:116:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/order/order_info.html";i:1586049889;}*/ ?>
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
    <link rel="stylesheet" href="__PUBLIC__/index/css/order.css">
    <script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>

<body>

    <div class="head">
        <span class="head_lf"><a href="<?php echo url('User/user_center'); ?>">返回</a></span>
        <span>订单详情</span>
    </div>
    <div style="margin-top: 60px;">
        <div class="order_num">
           <span style="margin-left: 40px;">已发货:12 单</span>
           <span style="float: right;margin-right: 40px;">待发货:4 单</span>
        </div>
        <!--开始循环-->
        <div name="center" class="order">
            <div name="info" class="order_info" >
                <!--订单头信息-->
                <div class="order_base_info">
                    <div class="order_sn">订单编号：1234567</div>
                    <div class="order_time">下单时间：2020-03-04 12:12:12</div>
                </div>
                <!--订单商品信息-->
                <div class="order_info_center">
                    <div class="order_image">
                        <img src="__PUBLIC__/index/img/wt.jpg" alt=""/>
                    </div>
                    <div class="goods_info">
                        <div class="goods_name">商品名称：精品男装</div>
                        <div class="goods_price">商品价格：¥599 <span class="order_status">已发货</span></div>
                    </div>
                </div>
                <!--收件信息-->
                <div class="user_info">
                    <div class="user">
                        <span>收件人：常乐</span>
                        <span class="mobile">电话：13716024041</span>
                    </div>
                    <div class="address">
                        收货地址：北京市海淀区西四环北路
                    </div>
                </div>

            </div>
        </div>
        <!--循环结束-->


        <div name="center" class="order">
            <div name="info" class="order_info" >
                <!--订单头信息-->
                <div class="order_base_info">
                    <div class="order_sn">订单编号：1234567</div>
                    <div class="order_time">下单时间：2020-03-04 12:12:12</div>
                </div>
                <!--订单商品信息-->
                <div class="order_info_center">
                    <div class="order_image">
                        <img src="__PUBLIC__/index/img/wt.jpg" alt=""/>
                    </div>
                    <div class="goods_info">
                        <div class="goods_name">商品名称：精品男装</div>
                        <div class="goods_price">商品价格：¥599 <span class="order_status">已发货</span></div>
                    </div>
                </div>
                <!--收件信息-->
                <div class="user_info">
                    <div class="user">
                        <span>收件人：常乐</span>
                        <span class="mobile">电话：13716024041</span>
                    </div>
                    <div class="address">
                        收货地址：北京市海淀区西四环北路
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>
