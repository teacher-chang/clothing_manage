<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\xampp\htdocs\clothing_manage\public/../application/index\view\order\order_info.html";i:1586062321;}*/ ?>
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
           <span style="margin-left: 40px;">已发货:<?php echo $shipped_num; ?>单</span>
           <span style="float: right;margin-right: 40px;">待发货:<?php echo $no_num; ?> 单</span>
        </div>
        <!--开始循环-->
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div name="center" class="order">
            <div name="info" class="order_info" >
                <!--订单头信息-->
                <div class="order_base_info">
                    <div class="order_sn">订单编号：<?php echo $vo['order_sn']; ?></div>
                    <div class="order_time">下单时间：<?php echo $vo['create_time']; ?></div>
                </div>
                <!--订单商品信息-->
                <div class="order_info_center">
                    <div class="order_image">
                        <?php echo $vo['goods_img']; ?>
                        <!--<img src="__PUBLIC__/index/img/wt.jpg" alt=""/>-->
                    </div>
                    <div class="goods_info">
                        <div class="goods_name">商品名称：<?php echo $vo['goods_name']; ?></div>
                        <div class="goods_price">商品价格：¥<?php echo $vo['goods_price']; ?>
                            <span class="order_status">
                                <?php if($vo['ship_status'] == 0): ?>待发货
                                <?php else: ?>已发货
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <!--收件信息-->
                <div class="user_info">
                    <div class="user">
                        <span>收件人：<?php echo $vo['consignee']; ?></span>
                        <span class="mobile">电话：<?php echo $vo['consignee_mobile']; ?></span>
                    </div>
                    <div class="address">
                        收货地址：<?php echo $vo['address']; ?>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--循环结束-->
    </div>



</body>

</html>
