-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 07:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pumphouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `role`, `city`, `msg`) VALUES
(37, 'umair', 'admin@xyz.com', '+923107544409', 'Student', 'lahore', ''),
(38, 'umair', 'chumair78612@gmail.com', '+923107544409', 'Student', 'lahore', ''),
(39, 'Umair', 'hello@gmail.com', '+92737373737', 'Student', 'lahore', ''),
(40, 'Umair', 'chumair78612@gmail.com', '+923107544409', 'Student', 'lahore', ''),
(41, 'umair', 'chumair78612@gmail.com', '+923107544409', 'Student', 'lahore', ''),
(42, 'umair', 'admin@xyz.com', '+923107544409', 'Student', 'lahore', ''),
(43, 'umair', 'admin@xyz.com', '+923107544409', 'Student', 'lahore', ''),
(44, 'Umair', 'admin@xyz.com', '+92737373737', 'Student', 'lahore', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pass`) VALUES
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345'),
('umair@xyz.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(3) NOT NULL,
  `prodname` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `prodimg` varchar(100) DEFAULT NULL,
  `proddes` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prodname`, `price`, `prodimg`, `proddes`) VALUES
(2, 'barbell', 10000, '../pics/rod.png', 'HELLO  my name'),
(3, ' Multifunctional machine', 85000, '../pics/machine.png', 'HELLO '),
(4, 'Treadmill', 85000, '../pics/ttr.png', 'HELLO '),
(5, 'BCCA', 4500, '../pics/bcc.png', 'HELLO '),
(6, 'DumBell', 5000, '../pics/1st.png', '  These adjustable dumbbells have weights that adjust from 4 kg (10 lbs) to 41 kg (90 lbs) in 5 lb.\r\n                increments. Easy-to-use selection dials for adjusting weights. Replaces up to 17 pairs of dumbbells.\r\n                They are sold as a pair. Great for toning and strength training exercises for both upper and lower body\r\n                including heavy leg lifts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `prodname` (`prodname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
