<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:118:"/Applications/XAMPP/xamppfiles/htdocs/wb/2019/clothing_manage/public/../application/index/view/goods/goods_detail.html";i:1586053468;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品详情页</title>
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
	<meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="__PUBLIC__/index/css/gongyong.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/goods_detail.css">
</head>
<body>
<div class="head">
	<span class="head_lf"><a href="<?php echo url('/index/index'); ?>">返回</a></span>

	用户登录

	<span class="head_rg"><a href="<?php echo url('index/regist'); ?>"></a></span>
</div>

<div class="login">
	<div class="goods_detail">
		<!--商品大图-->
		<div class="goods_img">
			<img src="__PUBLIC__/index/img/wt.jpg"/>
		</div>
		<!--商品价格、名称-->
		<div class="goods_info">
			<!--商品名称-->
			<div class="goods_name">2020新品 西装外套</div>
			<!--商品价格-->
			<div class="goods_price">¥ 399</div>
			<!--销量、库存-->
			<div class="sales_info">
				<span class="kucun">库存:3000</span>
				<span class="sales">销量:458</span>
			</div>
		</div>
		<!--商品详情-->
		<div class="detail">
			<div class="title">商品详情</div>
			<!--商品详情内容-->
			<div class="detail_content">
				我是商品详情信息
			</div>
		</div>
	</div>
	<!--底部导航-->
	<div style="text-align:center;">
		<div class="footer">
			<div class="cart">
				<a href="<?php echo url('goods/cart'); ?>">加入购物车</a>
			</div>
			<div class="buy">
				<a href="<?php echo url('order/orderConfirm'); ?>">立即购买</a>
			</div>
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
	.cart{
		width: 50%;
		float: left;
		background: lightcoral;
		text-align: center;
		color:white;
	}
	.buy{
		 width: 50%;
		 float: left;
		 background: rgba(100,207,250,1);

		 text-align: center;
		 color:white;
	 }
	.buy a {

		text-align: center;
		color:white;
	}
	.cart a {

		text-align: center;
		color:white;
	}
</style>

</html>
