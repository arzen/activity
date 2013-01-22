-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 01 月 22 日 13:22
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dev_activity`
--

-- --------------------------------------------------------

--
-- 表的结构 `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL COMMENT '类别',
  `a_id` int(11) NOT NULL COMMENT '区域',
  `title` varchar(256) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '介绍',
  `start_time` int(11) NOT NULL COMMENT '时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `address` varchar(256) NOT NULL COMMENT '地点',
  `public` tinyint(1) NOT NULL DEFAULT '1' COMMENT '公开/私有',
  `gps` varchar(40) NOT NULL COMMENT '地图标示',
  `peoples` int(11) NOT NULL COMMENT '允许人数',
  `attends` int(11) NOT NULL COMMENT '已报名人数',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0待审核，1已审核，2已下架',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`,`a_id`,`state`),
  KEY `end_time` (`end_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `act_categories`
--

CREATE TABLE IF NOT EXISTS `act_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL COMMENT '分类名称',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动分类' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL COMMENT '名称',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='区域' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL COMMENT '类别',
  `a_id` int(11) NOT NULL COMMENT '区域',
  `title` varchar(256) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '介绍',
  `start_time` int(11) NOT NULL COMMENT '时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `address` varchar(256) NOT NULL COMMENT '地点',
  `public` tinyint(1) NOT NULL DEFAULT '1' COMMENT '公开/私有',
  `gps` varchar(40) NOT NULL COMMENT '地图标示',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0待审核，1已审核，2已下架',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`,`a_id`,`state`),
  KEY `end_time` (`end_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `disc_categories`
--

CREATE TABLE IF NOT EXISTS `disc_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL COMMENT '分类名称',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='打折分类' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
