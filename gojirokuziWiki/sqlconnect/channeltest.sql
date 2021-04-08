-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `channeltest`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `aki`
--

CREATE TABLE `aki` (
  `number` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL,
  `rip` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `aki`
--

INSERT INTO `aki` (`number`, `userID`, `date`, `contents`, `rip`) VALUES
(1, '--', '2020-01-30 15:44:24', 'KCG', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `inuitoko`
--

CREATE TABLE `inuitoko` (
  `number` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL,
  `rip` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `inuitoko`
--

INSERT INTO `inuitoko` (`number`, `userID`, `date`, `contents`, `rip`) VALUES
(1, 'kusozako', '0000-00-00 00:00:00', 'とことことことこ戌亥とこ', NULL),
(2, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(3, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(4, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(5, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(6, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(7, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(8, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(9, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(10, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(11, 'toko', '0000-00-00 00:00:00', 'とっとことこ', NULL),
(12, 'toko', '0000-00-00 00:00:00', 'ハムタロサァンハムタロサァン', NULL),
(13, 'toko', '0000-00-00 00:00:00', 'ハム太郎', NULL),
(14, 'toko', '0000-00-00 00:00:00', 'ファファファ', NULL),
(15, 'toko', '0000-00-00 00:00:00', 'さん', NULL),
(16, 'toko', '2020-01-22 16:29:57', 'da', NULL),
(17, 'toko', '2020-01-22 16:30:28', 'da', NULL),
(18, 'toko', '2020-01-22 16:32:44', 'とことこ', NULL),
(19, 'toko', '2020-01-22 16:32:58', 'とっとことこ', NULL),
(20, 'toko', '2020-01-23 09:05:11', 'ほにゅぅ', NULL),
(21, 'toko', '2020-01-23 12:05:28', 'あはぁ～', 'Yes'),
(22, 'toko', '2020-01-23 12:06:52', 'あはぁ～', NULL),
(23, 'toko', '2020-01-23 12:12:04', 'マシュマロ', NULL),
(24, 'toko', '2020-01-23 12:19:52', 'マシュマロ', NULL),
(25, 'toko', '2020-01-23 12:20:30', 'マシュマロ', NULL),
(26, 'toko', '2020-01-23 12:24:42', 'あはぁ～\r\n', NULL),
(27, 'toko', '2020-01-29 13:59:55', 'ttt', NULL),
(28, 'toko', '2020-01-29 14:00:16', 'かなかな', NULL),
(29, 'toko', '2020-01-29 14:51:29', '【豆知識】\r\nまだ全員分のページはできてない', NULL),
(30, 'toko', '2020-01-29 15:53:16', 'Aimer', NULL),
(31, 'toko', '2020-01-30 10:04:35', 'Aimer', NULL),
(32, 'toko', '2020-01-30 10:04:43', 'Aimer', 'Yes'),
(33, 'toko', '2020-01-30 10:06:53', 'Aimer', 'Yes'),
(46, '--', '2020-01-30 15:25:39', 'あいうえお', NULL),
(47, '--', '2020-01-30 15:28:23', 'あいうえお', NULL),
(48, 'toko', '2020-02-04 15:24:43', 'ko', 'Yes'),
(49, 'toko', '2020-02-04 15:30:55', 'ko', 'Yes'),
(50, 'toko', '2020-02-04 15:31:16', 'ko', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `repaki`
--

CREATE TABLE `repaki` (
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `repinuitoko`
--

CREATE TABLE `repinuitoko` (
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `repinuitoko`
--

INSERT INTO `repinuitoko` (`number`, `date`, `contents`) VALUES
(21, '2020-01-30 10:55:13', 'Aimer'),
(32, '2020-01-30 11:01:55', 'あｈぁ'),
(33, '2020-01-30 11:09:45', 'とっとここ'),
(48, '2020-02-04 15:28:28', 'ko'),
(49, '2020-02-04 15:31:23', 'ko'),
(49, '2020-02-04 15:35:11', 'koko');

-- --------------------------------------------------------

--
-- テーブルの構造 `reprituki`
--

CREATE TABLE `reprituki` (
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `reproa`
--

CREATE TABLE `reproa` (
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `rituki`
--

CREATE TABLE `rituki` (
  `number` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL,
  `rip` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `roa`
--

CREATE TABLE `roa` (
  `number` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `contents` varchar(100) NOT NULL,
  `rip` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `roa`
--

INSERT INTO `roa` (`number`, `userID`, `date`, `contents`, `rip`) VALUES
(1, '--', '2020-01-30 14:36:58', '公序良俗に即したコメントをお願い致します。', NULL),
(2, '--', '2020-01-30 14:40:48', 'お！', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aki`
--
ALTER TABLE `aki`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `inuitoko`
--
ALTER TABLE `inuitoko`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `repinuitoko`
--
ALTER TABLE `repinuitoko`
  ADD KEY `number` (`number`) USING BTREE;

--
-- Indexes for table `rituki`
--
ALTER TABLE `rituki`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `roa`
--
ALTER TABLE `roa`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aki`
--
ALTER TABLE `aki`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inuitoko`
--
ALTER TABLE `inuitoko`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `rituki`
--
ALTER TABLE `rituki`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roa`
--
ALTER TABLE `roa`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
