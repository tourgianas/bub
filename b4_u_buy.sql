-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Απρ 2016 στις 22:29:58
-- Έκδοση διακομιστή: 10.1.10-MariaDB
-- Έκδοση PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `b4_u_buy`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `tpt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `role`) VALUES
(1, 'giorgos@gmail.com', '12345', 'admin'),
(2, 'stavros@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `mobile`
--

CREATE TABLE `mobile` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Screen_Size` varchar(255) NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `CPU_type` varchar(25) NOT NULL,
  `Internal_Memory` int(11) NOT NULL,
  `Card_Slot` int(11) NOT NULL,
  `Ram` int(20) NOT NULL,
  `Camera` int(11) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `Battery` varchar(255) NOT NULL,
  `Manufacturer` varchar(250) NOT NULL,
  `Resolution` varchar(255) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Mobile phone table with specs';

--
-- Άδειασμα δεδομένων του πίνακα `mobile`
--

INSERT INTO `mobile` (`ID`, `Name`, `Screen_Size`, `CPU`, `CPU_type`, `Internal_Memory`, `Card_Slot`, `Ram`, `Camera`, `OS`, `Battery`, `Manufacturer`, `Resolution`, `Photo`) VALUES
(1, 'Galaxy S4', '5.0', '1.9 GHz Krait 300', 'Quad-core', 16, 1, 2, 15, 'Android OS, v4.2.2 (Jelly Bean)', '2600 mAh', 'Samsung', '1080 x 1920', '/images/Mobile/1.jpeg'),
(2, 'iPhone 5S', '4.0', '1.3 GHz Cyclone (ARM v8-based)', 'Dual-core', 16, 0, 1, 8, 'iOS 7', '1560 mAh', 'Apple', '640 x 1136', '/images/Mobile/2.jpeg'),
(3, 'Lumia 520', '4.0', '1.0 GHz', 'Dual-core', 8, 1, 512, 5, 'Microsoft Windows Phone 8', '1430 mAh', 'Nokia', '480 x 800', '/images/Mobile/3.jpg'),
(4, 'LG G5', '5.3', '2.15 GHz Kryo ', 'Dual-core', 32, 1, 4, 16, 'Android OS, v6.0.1 (Marshmallow)', '2800 mAh ', 'LG', '1440 x 2560', '/images/Mobile/4.jpg'),
(5, 'Galaxy S6', '5.1', '1.5 GHz Cortex-A53', 'Quad-core', 128, 0, 3, 16, 'Android OS, v5.0.2 (Lollipop)', '2550 mAh ', 'Samsung', '1440 x 2560', '/images/Mobile/5.jpg'),
(6, 'Galaxy S5', '5.1', '2.5 GHz Krait 400', 'Quad-core', 32, 1, 2, 16, 'Android OS, v4.4.2 (KitKat)', '2800 mAh', 'Samsung', '1080 x 1920', '/images/Mobile/6.jpg');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Ευρετήρια για πίνακα `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`ID`,`Name`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `mobile`
--
ALTER TABLE `mobile`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
