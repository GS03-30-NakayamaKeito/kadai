-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 1 月 29 日 06:00
-- サーバのバージョン： 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gskadai_1_16`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gskadai_1_16_table`
--

CREATE TABLE `gskadai_1_16_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gskadai_1_16_table`
--

INSERT INTO `gskadai_1_16_table` (`id`, `name`, `email`, `age`, `password`, `indate`) VALUES
(1, 'a', 'a', 'a', 'a', '2016-01-23 06:07:07'),
(2, 'b', 'ab', 'ab', 'V', '2016-01-20 02:32:18'),
(3, 'k', 'k', 'k', 'f9210add9ecab9a7ddd124e3ea00c0ec', '2016-01-23 06:08:04'),
(4, 'g', 'g', '24', '21a0f07ce0ef2bc54cda1b6d13f5f402', '2016-01-29 05:20:29');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(10) NOT NULL,
  `life_flg` int(10) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `email`, `age`, `password`, `kanri_flg`, `life_flg`, `indate`) VALUES
(1, 'k', 'k', '20', 'k', 1, 0, '2016-01-01 00:00:00'),
(2, 'n', 'n', '20', 'n', 0, 0, '2016-01-29 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gskadai_1_16_table`
--
ALTER TABLE `gskadai_1_16_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gskadai_1_16_table`
--
ALTER TABLE `gskadai_1_16_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
