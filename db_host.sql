-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 19 日 03:32
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mysql`
--

-- --------------------------------------------------------

--
-- 表的结构 `db_host`
--

CREATE TABLE IF NOT EXISTS `db_host` (
  `id` varchar(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `db_host`
--

INSERT INTO `db_host` (`id`, `product_name`, `price`, `cost`, `stock`) VALUES
('A0001', 'SONY X8 NB', 30000, 45000, 9),
('A0002', 'Acer win8 NB', 10000, 13000, 9),
('A0003', 'GB linux NB', 12000, 14000, 3),
('A0004', 'SONY NB', 20000, 18000, 7),
('A0005', 'SONY X7 NB', 30000, 25000, 5),
('A0006', 'ASUS i7 NB', 40000, 20000, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
