-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 11:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `price` mediumint(9) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `productname`, `price`, `code`, `image`) VALUES
(30, 'Patanjali Honey', 280, 'p2', 0x75706c6f6164732f706174616e6a616c69686f6e65792e6a7067),
(31, 'Patanjali Eye Drops', 80, 'p3', 0x75706c6f6164732f706174616e6a616c6965796564726f70732e6a7067),
(32, 'Patanjali Face Wash', 250, 'p4', 0x75706c6f6164732f706174616e6a616c6966616365776173682e6a7067),
(33, 'MDH Laal Mirch', 120, 'm1', 0x75706c6f6164732f6d64686c61616c2e6a7067),
(34, 'MDH Chunky Chaat Masala', 150, 'm2', 0x75706c6f6164732f6d64686368756e6b792e6a7067),
(35, 'MDH Pav Bhaji Masala', 120, 'm3', 0x75706c6f6164732f6d64687061762e6a7067),
(36, 'MDH Meat Masala', 160, 'm4', 0x75706c6f6164732f6d64686d6561742e6a7067),
(37, 'India Gate Basmati Rice', 180, 'r1', 0x75706c6f6164732f696e646961676174652e6a7067),
(38, 'Daawat Basmati Rice', 180, 'r2', 0x75706c6f6164732f6461617761742e6a7067),
(39, 'Zeeba Basmati Rice', 180, 'r3', 0x75706c6f6164732f7a656562612e706e67),
(40, 'Kohinoor Basmati Rice', 220, 'r4', 0x75706c6f6164732f6b6f68696e6f6f722e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `productname`, `image`, `price`, `quantity`) VALUES
(15, 'MDH Laal Mirch', 0x75706c6f6164732f6d64686c61616c2e6a7067, '120', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('John Doe', 'jd@gmail.com', 'I want special Discounts!'),
('Rahul Shrivastav', 'rs@gmail.com', 'I want home delivery!');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`email`) VALUES
('abc@gmail.com'),
('harry@gmail.com'),
('jd@gmail.com'),
('rs@gmail.com'),
('sunil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`ID`, `Name`, `Address`, `Quantity`, `Bill`) VALUES
(1, 'Rahul', 'feroz gandhi market', 7, 670),
(2, 'John ', 'Jamalpur', 7, 450),
(3, 'harry', 'samrala chowk,ludhaina,punjab,india', 8, 790),
(4, 'harry', 'samrala chowk,ludhaina,punjab,india', 8, 790);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `date_of_birth`, `gender`, `mobile`, `password`) VALUES
('John Doe', 'Johnd@gmail.com', '2001-01-01', 'male', 9828314567, '$2y$10$QZREEfufemColV9DgR9H1.DIQXar9PV9kvmJKRvA5MWBX2lqCa.fe'),
('Rahul Srivastav', 'rs@gmail.com', '2003-01-01', 'male', 4596785241, '$2y$10$1hra92cAYM9U/sEo85HG8u4ZHOIDb7sh8LE98xz0dkM6G9gJzf40y'),
('Harry', 'harry@gmail.com', '2021-12-01', 'male', 9828785695, '$2y$10$YELK1Fd6pXvscFkaN.lfuOyFVMnI7fam/iphQd6SZnSm/EZvsIV1G'),
('Sunil', 'sunil@gmail.com', '2001-01-01', 'male', 9828785695, '$2y$10$TYKXh286CIvIpvYR0UrrDu6bwouJ43OB0pB1U2aQbfcfsTLJbkiu6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
