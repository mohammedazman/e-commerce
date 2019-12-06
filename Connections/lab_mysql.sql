-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 12:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE IF NOT EXISTS `prod` (
`pro_id` int(4) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_des` text NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_imag` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(3) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `dgree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
`id_sub` int(11) NOT NULL,
  `name_sub` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usert`
--

CREATE TABLE IF NOT EXISTS `usert` (
`id` int(3) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `email` text,
  `type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usert`
--

INSERT INTO `usert` (`id`, `name`, `pass`, `email`, `type`) VALUES
(1, 'usdfhuh', 'uhdudh', 'usdhiusdh', ''),
(2, 'admin', 'admin', NULL, 'admin'),
(3, 'ali', 'ali', NULL, 'stud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
 ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
 ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `usert`
--
ALTER TABLE `usert`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
MODIFY `pro_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usert`
--
ALTER TABLE `usert`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
