-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 09:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `DateOfBirth` varchar(100) DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `userno` int(50) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `DateOfBirth`, `Gender`, `Age`, `Phone`, `userno`) VALUES
(1, 'prat', '08242022', 'male', 18, '9999999999', 24),
(3, 'Prathamesh', '2222222222', 'math', 65, '0008292022', 27),
(4, 'me', '12121212', 'kijuhyg', 653, '1212121212', 28);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `DateOfBirth`, `Gender`, `Age`, `Phone`) VALUES
(1, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(2, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(3, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(4, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(5, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(6, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(7, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(8, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(9, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(10, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(11, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(12, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(13, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(14, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(15, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(16, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(17, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(18, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(19, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(20, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(21, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(22, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(23, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(24, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(25, 'bhagat', '33333333', 'female', 54, '3333333333'),
(26, 'knlknl', '46465', 'hvjhv', 54, 'kjhkfhxh\r\n'),
(27, 'knlknl', '46465', 'hvjhv', 54, 'kjhkfhxh\r\n'),
(28, 'Hello', '21212121', 'uyh', 56, '2121212121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
