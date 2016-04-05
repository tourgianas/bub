-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 06:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b4_u_buy`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `tpt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `role`) VALUES
(1, 'giorgos@gmail.com', '12345', 'admin'),
(2, 'stavros@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Screen Size` varchar(255) NOT NULL,
  `Processor` varchar(255) NOT NULL,
  `Internal Memory` int(11) NOT NULL,
  `Card Slot` int(11) NOT NULL,
  `Ram` int(11) NOT NULL,
  `Camera` int(11) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `Battery` varchar(255) NOT NULL,
  `Manufacturer` varchar(250) NOT NULL,
  `Resolution` varchar(255) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Mobile phone table with specs';

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`ID`, `Name`, `Screen Size`, `Processor`, `Internal Memory`, `Card Slot`, `Ram`, `Camera`, `OS`, `Battery`, `Manufacturer`, `Resolution`, `Photo`) VALUES
(1, 'Galaxy S4', '5.0', 'Quad-core 1.9 GHz Krait 300', 16, 1, 2, 15, 'Android OS, v4.2.2 (Jelly Bean)', '2600 mAh', 'Samsung', '1080 x 1920', '/images/Mobile/1.jpeg'),
(2, 'iPhone 5S', '4.0', 'Dual-core 1.3 GHz Cyclone (ARM v8-based)', 16, 0, 1, 8, 'iOS 7', '1560 mAh', 'Apple', '640 x 1136 pixels', '/images/Mobile/2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`ID`,`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
