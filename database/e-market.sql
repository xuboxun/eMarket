-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-07-11 02:37:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-market`
--

-- --------------------------------------------------------

--
-- 表的结构 `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `b_username` (`username`),
  UNIQUE KEY `b_email` (`email`),
  UNIQUE KEY `b_tel` (`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `business`
--

INSERT INTO `business` (`bid`, `username`, `password`, `email`, `tel`) VALUES
(2, 'username', 'password', 'email', 'tel');

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`gid`),
  KEY `FK_cart2` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`uid`, `gid`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `collect_goods`
--

CREATE TABLE IF NOT EXISTS `collect_goods` (
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`gid`),
  KEY `FK_collect_goods2` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `collect_shop`
--

CREATE TABLE IF NOT EXISTS `collect_shop` (
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`sid`),
  KEY `FK_collect_shop2` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `evaluate`
--

CREATE TABLE IF NOT EXISTS `evaluate` (
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`uid`,`gid`),
  KEY `FK_evaluate2` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `g_img` varchar(200) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL,
  `g_classa` varchar(50) DEFAULT NULL,
  `g_classb` varchar(50) DEFAULT NULL,
  `g_evaluate` varchar(50) DEFAULT NULL,
  `sold` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`gid`),
  KEY `FK_shop_goods` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`gid`, `sid`, `g_name`, `price`, `g_img`, `count`, `g_classa`, `g_classb`, `g_evaluate`, `sold`) VALUES
(1, 1, '苹果', '55', 'fruit.jpg', '55', '瓜果蔬菜', '鲜果', '33%', '3333'),
(2, 1, '苹果', '55', 'fruit.jpg', '55', '瓜果蔬菜', '鲜果', '33%', '3333');

-- --------------------------------------------------------

--
-- 表的结构 `goodsorder`
--

CREATE TABLE IF NOT EXISTS `goodsorder` (
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`gid`),
  KEY `FK_goodsorder2` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `s_img` varchar(200) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `FK_business_shop` (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`sid`, `bid`, `s_address`, `s_img`, `sname`) VALUES
(1, 2, '华中农业大学', 'fruit.jpg', 'b号店');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `headimg` varchar(200) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tel` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`, `headimg`, `nickname`, `sex`, `address`, `tel`) VALUES
(1, 'username', 'password', 'email', NULL, NULL, NULL, NULL, 'tel'),
(3, 'username66', 'password', 'emailsss', NULL, NULL, NULL, NULL, '6666'),
(6, '22', '899999', '2896935608@qq.com', NULL, NULL, NULL, NULL, '2222222222');

--
-- 限制导出的表
--

--
-- 限制表 `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `FK_cart2` FOREIGN KEY (`gid`) REFERENCES `goods` (`gid`);

--
-- 限制表 `collect_goods`
--
ALTER TABLE `collect_goods`
  ADD CONSTRAINT `FK_collect_goods` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `FK_collect_goods2` FOREIGN KEY (`gid`) REFERENCES `goods` (`gid`);

--
-- 限制表 `collect_shop`
--
ALTER TABLE `collect_shop`
  ADD CONSTRAINT `FK_collect_shop` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `FK_collect_shop2` FOREIGN KEY (`sid`) REFERENCES `shop` (`sid`);

--
-- 限制表 `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `FK_evaluate` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `FK_evaluate2` FOREIGN KEY (`gid`) REFERENCES `goods` (`gid`);

--
-- 限制表 `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `FK_shop_goods` FOREIGN KEY (`sid`) REFERENCES `shop` (`sid`);

--
-- 限制表 `goodsorder`
--
ALTER TABLE `goodsorder`
  ADD CONSTRAINT `FK_goodsorder` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `FK_goodsorder2` FOREIGN KEY (`gid`) REFERENCES `goods` (`gid`);

--
-- 限制表 `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `FK_business_shop` FOREIGN KEY (`bid`) REFERENCES `business` (`bid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
