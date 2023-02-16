-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-16 18:47:04
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `wenjie`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `No` int(100) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Role` varchar(40) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL COMMENT 'Email@gmail.com',
  `PhoneNumber` varchar(12) NOT NULL COMMENT '012-3456789',
  `Summary` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`No`, `Name`, `Date`, `Role`, `Status`, `Email`, `PhoneNumber`, `Summary`, `Password`, `Image`) VALUES
(27, '', '0000-00-00', '', '', 'teng2507@gmail.com', '', '', '123', 'profile.jpg'),
(29, 'Teng', '0000-00-00', '', '', 'dehui7051@gmail.com', '', '', '123', 'profile.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`No`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
