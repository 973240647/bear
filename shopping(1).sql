-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 20 日 01:15
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shopping`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_name` varchar(30) NOT NULL COMMENT '管理员账号',
  `a_pass` varchar(30) NOT NULL COMMENT '管理员密码',
  `a_header` varchar(30) NOT NULL COMMENT '头像',
  `a_phone` char(15) DEFAULT NULL COMMENT '联系电话',
  `a_email` varchar(40) DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`a_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存储管理员基本信息';

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`a_name`, `a_pass`, `a_header`, `a_phone`, `a_email`) VALUES
('123', '456', '45', '5423', '756@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_name` varchar(30) NOT NULL COMMENT '用户名',
  `c_pass` varchar(30) NOT NULL COMMENT '密码',
  `c_header` varchar(30) NOT NULL COMMENT '头像',
  `c_phone` varchar(15) NOT NULL COMMENT '电话号码',
  `c_question` varchar(30) NOT NULL COMMENT '问题提示',
  `c_answer` varchar(30) NOT NULL COMMENT '问题答案',
  `c_address` varchar(50) DEFAULT NULL COMMENT '地址',
  `c_email` varchar(50) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存储用户的基本信息';

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`c_name`, `c_pass`, `c_header`, `c_phone`, `c_question`, `c_answer`, `c_address`, `c_email`) VALUES
('777', '66666666', '../img/tx/8.jpg', '13659842154', '您母亲的姓名是？', 'eee', 'www', '125984623@qq.com'),
('ppp', '55555555', '../img/tx/1.jpg', '45698364711', '您的小学校名是？', 'ddd', 'sss', '4521356454@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `c_name` varchar(30) NOT NULL COMMENT '留言者',
  `c_header` varchar(30) NOT NULL COMMENT '留言者头像',
  `new_message` varchar(1000) NOT NULL COMMENT '留言信息',
  `re_message` varchar(1000) DEFAULT NULL COMMENT '回复信息',
  `new_time` datetime NOT NULL COMMENT '留言时间',
  `re_time` datetime DEFAULT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='存储用户的留言信息' AUTO_INCREMENT=772 ;

--
-- 转存表中的数据 `idea`
--

INSERT INTO `idea` (`id`, `c_name`, `c_header`, `new_message`, `re_message`, `new_time`, `re_time`) VALUES
(769, 'ppp', '../img/tx/1.jpg', '123456789', 'wee', '2017-06-20 12:14:25', '2017-06-20 01:13:32');

-- --------------------------------------------------------

--
-- 表的结构 `main_type`
--

CREATE TABLE IF NOT EXISTS `main_type` (
  `t_id` char(10) NOT NULL COMMENT '编号',
  `t_type` varchar(30) NOT NULL COMMENT '菜单',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='添加菜单';

--
-- 转存表中的数据 `main_type`
--

INSERT INTO `main_type` (`t_id`, `t_type`) VALUES
('1', '生日蛋糕'),
('2', '巧克力蛋糕'),
('506', '植物'),
('697', '图书');

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `n_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `n_message` varchar(1000) NOT NULL COMMENT '公告信息',
  `n_admin` varchar(30) NOT NULL COMMENT '发布者',
  `n_time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`n_id`),
  KEY `n_admin` (`n_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存储公告信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `order_id` char(10) NOT NULL COMMENT '订单号',
  `p_id` char(10) NOT NULL COMMENT '商品编号',
  `p_price` float NOT NULL COMMENT '价格',
  `p_number` int(4) NOT NULL COMMENT '数量',
  PRIMARY KEY (`order_id`,`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细表';

--
-- 转存表中的数据 `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `p_id`, `p_price`, `p_number`) VALUES
('646409705', '', 0, 0),
('686855472', '8', 122, 1);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` char(10) NOT NULL COMMENT '编号',
  `order_address` varchar(200) NOT NULL COMMENT '地址',
  `order_phone` varchar(50) NOT NULL COMMENT '邮箱',
  `order_user` varchar(30) NOT NULL COMMENT '订购者',
  `order_time` datetime NOT NULL COMMENT '订购时间',
  `order_sum` float NOT NULL COMMENT '总价值',
  PRIMARY KEY (`order_id`),
  KEY `order_user` (`order_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存储订单信息';

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`order_id`, `order_address`, `order_phone`, `order_user`, `order_time`, `order_sum`) VALUES
('646409705', 'sss', '45698364711', 'ppp', '2017-06-19 11:03:09', 0),
('686855472', 'sss', '45698364711', 'ppp', '2017-06-19 11:03:09', 109.8);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_type` char(10) NOT NULL COMMENT '商品类型',
  `p_id` varchar(10) NOT NULL COMMENT '商品编号',
  `p_name` varchar(40) NOT NULL COMMENT '商品名称',
  `p_price` float NOT NULL COMMENT '商品价格',
  `p_quantity` int(4) NOT NULL COMMENT '商品数量',
  `p_image` varchar(100) NOT NULL COMMENT '商品图片',
  `p_description` varchar(2000) NOT NULL COMMENT '描述信息',
  `p_time` datetime DEFAULT NULL COMMENT '添加时间',
  `p_is_discount` int(4) DEFAULT NULL COMMENT '是否是打折商品',
  `p_discount` float DEFAULT NULL COMMENT '折扣',
  PRIMARY KEY (`p_id`),
  KEY `p_type` (`p_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存储商品信息';

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`p_type`, `p_id`, `p_name`, `p_price`, `p_quantity`, `p_image`, `p_description`, `p_time`, `p_is_discount`, `p_discount`) VALUES
('1', '1', '巧克力蛋糕', 199, 5, '../img/1.jpg', '巧克力蛋糕', '2017-04-28 16:47:00', 1, 0.9),
('2', '11', '巧克力', 222, 23, '../img/1.jpg', '巧克力', '2017-06-19 21:20:30', 0, 1),
('506', '1258', '毛海星', 32, 5, '../img/zw/10.jpg', '毛海星', '2017-06-19 10:50:58', 0, 1),
('506', '1453', '翡翠珠', 55, 44, '../img/zw/8.jpg', '翡翠珠', '2017-06-19 10:49:31', 0, 1),
('1', '2', '樱花之恋蛋糕', 233, 3, '../img/2.jpg', '樱花之恋', '2017-04-29 13:16:00', 0, 1),
('1', '3', '姹紫嫣红蛋糕', 199, 2, '../img/3.jpg', '姹紫嫣红', '2017-04-29 13:44:00', 0, 1),
('506', '3265', '虹之玉', 66, 15, '../img/zw/9.jpg', '虹之玉', '2017-06-19 10:50:20', 1, 0.8),
('697', '4125', '世间的猫', 32, 15, '../img/ts/3.jpg', '世间的猫', '2017-06-19 11:02:38', 0, 1),
('506', '4523', '大卫', 88, 30, '../img/zw/6.jpg', '大卫', '2017-06-19 10:47:39', 0, 1),
('697', '4596', '阿狸', 25.6, 36, '../img/ts/1.jpg', '治愈系', '2017-06-19 10:56:48', 1, 0.9),
('1', '5', '草莓蛋糕', 233, 2, '../img/6.jpg', '草莓蛋糕', '2017-04-29 13:45:00', 0, 1),
('506', '5478', '冬美人', 77, 30, '../img/zw/7.jpg', '冬美人', '2017-06-19 10:48:36', 1, 0.9),
('1', '6', '小清新蛋糕', 233, 1, '../img/5.jpg', '小清新', '2017-04-29 13:46:00', 0, 1),
('1', '8', '花朵蛋糕', 122, 12, '../img/7.jpg', '花朵蛋糕', '2017-06-18 02:08:56', 1, 0.9),
('697', '8955', '月亮狗', 32, 75, '../img/ts/2.jpg', '月亮狗', '2017-06-19 10:58:56', 0, 1);

--
-- 限制导出的表
--

--
-- 限制表 `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`n_admin`) REFERENCES `admin` (`a_name`);

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_user`) REFERENCES `customer` (`c_name`);

--
-- 限制表 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`p_type`) REFERENCES `main_type` (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
