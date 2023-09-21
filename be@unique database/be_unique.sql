-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 08:31 AM
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
-- Database: `be@unique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `index` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(244) NOT NULL,
  `mobilenum` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`index`, `firstname`, `lastname`, `email`, `mobilenum`, `password`) VALUES
(1, 'vivek', 'kalariya ', 'vivekkalariya12345@gmail.com', '7984327447', '123'),
(2, 'dhiren', 'devganiya ', 'dhiren@gmail.com', '1234567890', '123');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `index` int(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Pending',
  `email` varchar(244) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `zip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`index`, `product_id`, `quantity`, `total_amount`, `Status`, `email`, `fname`, `lname`, `address`, `zip`) VALUES
(85, '32', 1, '1299', 'Pending', 'vivekkalariya12345@gmail.com', 'vivek', 'kalariya', 'xxx', 395010),
(86, '34', 1, '2250', 'Pending', 'vivekkalariya12345@gmail.com', 'vivek', 'kalariya', 'xxx', 395010),
(87, '29', 10, '12990', 'Pending', 'vivekkalariya12345@gmail.com', 'vivek', 'kalariya', 'xxx', 395010),
(88, '29', 10, '12990', 'Pending', 'dhiren@gmail.com', 'dhiren', 'devganiya', 'xxx', 395010),
(89, '32', 1000, '1299000', 'Pending', 'dhiren@gmail.com', 'dhiren', 'devganiya', 'xxx', 395010);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `index` int(100) NOT NULL,
  `watch_name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date_add` date NOT NULL,
  `quantity` int(100) NOT NULL,
  `dial_color` varchar(100) NOT NULL,
  `dial_glass_material` varchar(100) NOT NULL,
  `case_shape` varchar(100) NOT NULL,
  `case_material` varchar(100) NOT NULL,
  `case_diameter` int(100) NOT NULL,
  `band_color` varchar(100) NOT NULL,
  `band_material` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`index`, `watch_name`, `catagory`, `Description`, `color`, `price`, `brand`, `img`, `date_add`, `quantity`, `dial_color`, `dial_glass_material`, `case_shape`, `case_material`, `case_diameter`, `band_color`, `band_material`) VALUES
(29, 'Noise Vivid', 'Smart Watch ', 'Noise Vivid Call Bluetooth Calling Smartwatch with Metallic dial, 550 nits Brightness, AI Voice Assistant, Heart Rate Monitoring, 7 Days Battery & 100+ watchfaces (Jet Black)', 'black', 1299, 'Noice', '1.png', '2023-08-04', 5, 'black', 'Watch Display', 'Squer', 'Plastic', 3, 'black', 'Silicone Band'),
(32, 'Fire-Boltt Ninja', 'Smart Watch ', 'Fire-Boltt Ninja Call Pro Plus 1.83\" Smart Watch with Bluetooth Calling, AI Voice Assistance, 100 Sports Modes IP67 Rating, 240 * 280 Pixel High Resolution', 'black', 1299, 'Fire-Boltt', '2.png', '2023-08-08', 0, 'black', 'Watch Display', 'Squer', 'Plastic', 0, 'black', 'Silicone Band'),
(34, 'xxx', 'Smart Watch ', 'xxx', 'xxx', 2250, 'xxx', '64d271b3f2d2e.png', '0000-00-00', 0, 'xxx', 'Acrylic Crystal', 'Squer', 'Stainless steel', 0, 'xxx', 'Mesh Watch Band');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `index` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenum` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`index`, `firstname`, `lastname`, `email`, `mobilenum`, `password`) VALUES
(1, 'vivek', 'kalariya', 'vivekkalariya12345@gmail.com', '7984327447', '123'),
(3, 'dhiren', 'devganiya ', 'dhiren@gmail.com', '1234567890', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`index`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`index`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `index` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `index` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `index` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `index` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
