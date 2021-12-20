-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 10:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npl`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `name` varchar(60) NOT NULL,
  `style` int(11) NOT NULL,
  `record` text NOT NULL,
  `age` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `id` int(11) NOT NULL,
  `capped` tinyint(1) NOT NULL DEFAULT '0',
  `year` int(11) NOT NULL,
  `team` int(1) DEFAULT NULL,
  `registime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picname` text NOT NULL,
  `pool` varchar(5) NOT NULL,
  `order_num` int(11) NOT NULL,
  `team_went` int(11) DEFAULT NULL,
  `points` int(11) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `pool_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
