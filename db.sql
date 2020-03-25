# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: clothing_manage
# Generation Time: 2020-03-24 14:11:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) DEFAULT NULL COMMENT '管理员账号',
  `admin_pwd` varchar(32) DEFAULT NULL COMMENT '管理员密码',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table goods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods` (
  `goods_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(32) DEFAULT NULL COMMENT '商品名称',
  `goods_price` varchar(32) DEFAULT NULL COMMENT '商品价格',
  `goods_detail` text COMMENT '商品详情',
  `goods_total` int(11) DEFAULT NULL COMMENT '商品进货量',
  `sale_number` int(11) DEFAULT NULL COMMENT '销量',
  `inventory` int(11) DEFAULT NULL COMMENT '库存',
  `store_id` int(11) DEFAULT NULL COMMENT '所属门店',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `store_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(32) DEFAULT NULL COMMENT '订单号',
  `user_id` int(11) DEFAULT NULL COMMENT '下单用户ID',
  `consignee` varchar(32) DEFAULT NULL COMMENT '收件人',
  `consignee_mobile` varchar(32) DEFAULT NULL COMMENT '收件人电话',
  `goods_id` int(11) DEFAULT NULL COMMENT '商品ID',
  `ship_status` int(11) DEFAULT NULL COMMENT '发货状态 0:代发货；1：已发货',
  `createe_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '下单时间',
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table store
# ------------------------------------------------------------

DROP TABLE IF EXISTS `store`;

CREATE TABLE `store` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `store_name` varchar(32) DEFAULT NULL COMMENT '连锁店名称',
  `store_manage` varchar(32) DEFAULT NULL COMMENT '连锁店负责人',
  `manage_mobile` varchar(32) DEFAULT NULL COMMENT '负责人电话',
  `store_address` varchar(32) DEFAULT NULL COMMENT '连锁店地址',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL COMMENT '用户名',
  `user_pwd` varchar(32) DEFAULT NULL COMMENT '密码',
  `mobile` varchar(32) DEFAULT NULL COMMENT '手机号',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
