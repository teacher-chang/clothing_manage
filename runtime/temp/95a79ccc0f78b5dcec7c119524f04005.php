<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\xampp\htdocs\clothing_manage\public/../application/index\view\index\index.html";i:1585999106;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>服装连锁商城</title>
	<meta name="keywords" content="服装连锁商城" />
	<meta name="description" content="服装连锁商城" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/index/newmobile/model13/common/css/common.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/index/css/index.css" />
</head>
<body>
<div>
	<!--顶部图片-->
	<div id="top">
		<img src="__PUBLIC__/index/img/tab.jpg" alt="">
	</div>
	<!--模块-->
	<div id="tuijian" style="margin-bottom: 10px;">
		<div class="tuijian_item">
			<img src="__PUBLIC__/index/img/wt.jpg" alt="">
			<span>新品</span>
		</div>
		<div class="tuijian_item">
			<img src="__PUBLIC__/index/img/wt2.jpg" alt="">
			<span>热销</span>
		</div>
		<div class="tuijian_item">
			<img src="__PUBLIC__/index/img/wt3.jpg" alt="">
			<span>人气</span>
		</div>
		<div class="tuijian_item">
			<img src="__PUBLIC__/index/img/wt4.jpg" alt="">
			<span>促销</span>
		</div>
	</div>
	<!--商品模块-->
	<div class="goods" style="margin-top: 10%;">
		<div class="goods_item">
			<div style="width: 90%;margin-left: 5%;margin-top: 35%;border-bottom: 1px solid red;padding-bottom: 4px;font-weight: bold">2020春季新品</div>

			<?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<div class="goods_info">
				<div class="goods_imgs"><?php echo $vo['goods_img']; ?></div>
				<div class="goods_name"><?php echo $vo['goods_name']; ?></div>
				<div class="goods_price">
					<span>价格<?php echo $vo['goods_price']; ?></span>
					<span>销量<?php echo $vo['sale_number']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

	</div>
	<div class="goods" style="margin-top: 115%;margin-bottom: 120%;">
		<div class="goods_item" style="margin-top: 20%;">
			<div style="width: 90%;margin-left: 5%;margin-top: 35%;border-bottom: 1px solid red;padding-bottom: 4px; padding-top:7px;font-weight: bold">2020人气热销</div>
			<?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="goods_info">
				<?php echo $vo['goods_img']; ?>
				<div class="goods_name"><?php echo $vo['goods_name']; ?></div>
				<div class="goods_price">
					<span><?php echo $vo['goods_price']; ?></span>
					<span><?php echo $vo['sale_number']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<!--底部导航-->
	<div style="text-align:center;">
		<div class="footer">
			<div class="item">首页</div>
			<div class="item">首页</div>
			<div class="item">
				<?php if($user_id != 0): ?>
					<a href="<?php echo url('user/user_center'); ?>">我的</a>
				<?php else: ?>
					<a href="<?php echo url('index/login'); ?>">我的</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</body>
<style>
	.footer{
		height:35px;
		width: 100%;
		background-color: #ddd;
		position: fixed;
		bottom: 0;
	}
	.item{
		float: left;
		width: 33%;
		line-height: 35px;

	}
</style>
</html>