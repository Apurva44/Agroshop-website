-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usernm` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `profile_picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`user_id`, `name`, `usernm`, `passwd`, `dob`, `address`, `phone`, `profile_picture`) VALUES
(2, 'dipti', 'dipalibsawant2001@gmail.com', '123', '2001-05-10', 'Om sai bhavan,ravet', 2147483647, 0x75706c6f6164732f646970732e6a7067),
(3, 'kajal', 'kajal@gmail.com', '123', '', '', 0, ''),
(4, 'prajakta', 'prajakta@gmail.com', '123', '', '', 0, ''),
(5, 'kajal', 'kajal@gmail.com', '123', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `agro_material`
--

CREATE TABLE `agro_material` (
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `stock` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `farmer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agro_material`
--

INSERT INTO `agro_material` (`name`, `price`, `discount`, `category`, `images`, `stock`, `product_id`, `farmer_id`) VALUES
('Hapus Mango', 250, 10, 'fresh', 0x6d616e676f2e6a706567, 'In stock', 1, NULL),
('Cow', 80000, 10, '', 0x636f772e77656270, 'In stock', 3, NULL),
('cow', 80000, 15, 'Animals', 0x636f772e77656270, 'In stock', 4, NULL),
('cow', 80000, 15, 'Animals', 0x636f772e77656270, 'In stock', 5, NULL),
('cow', 80000, 15, 'Animals', 0x636f772e77656270, 'In stock', 6, NULL),
('kajal', 4000, 20, 'Animals', 0x64697073312e6a7067, 'In stock', 7, NULL),
('cow', 50000, 10, 'Animals', 0x636f772e77656270, 'In stock', 8, NULL),
('cow', 50000, 10, 'Animals', 0x636f772e77656270, 'In stock', 9, NULL),
('cow', 50000, 10, 'Animals', 0x636f772e77656270, 'In stock', 10, NULL),
('Hapus Mango', 250, 10, 'Fresh', 0x6d616e676f2e6a706567, 'In stock', 11, NULL),
('Hapus Mango', 250, 10, 'Fresh', 0x6d616e676f2e6a706567, 'In stock', 12, NULL),
('Hapus Mango', 4000, 30, 'Fresh', 0x6d616e676f2e6a706567, 'In stock', 13, NULL),
('honey', 4000, 30, 'Honey', 0x686f6e65792e6a706567, 'In stock', 14, 18),
('honey', 250, 5, 'Honey', 0x686f6e65792e6a706567, 'In stock', 15, 19),
('Hapus Mango', 250, 5, 'Fresh', 0x6d616e676f2e6a706567, 'In stock', 16, 20),
('Hapus Mango', 250, 2, 'Fresh', 0x6d616e676f2e6a706567, 'In stock', 17, 21);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_info`
--

CREATE TABLE `farmer_info` (
  `farmer_id` int(255) NOT NULL,
  `farmer_nm` varchar(255) NOT NULL,
  `farmer_email` varchar(255) NOT NULL,
  `farmer_ph` varchar(255) NOT NULL,
  `farmer_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_info`
--

INSERT INTO `farmer_info` (`farmer_id`, `farmer_nm`, `farmer_email`, `farmer_ph`, `farmer_add`) VALUES
(16, '', '', '', ''),
(17, 'dipali sawant', 'dipalibsawant2001@gmail.com ', '9847456372', 'Om sai bhavan,ravet'),
(18, 'dipali sawant', 'dipalibsawant2001@gmail.com ', '9847456372', 'Om sai bhavan,ravet'),
(19, 'anuja', 'anuja.suryawanshi_entc22@pccoer.in ', '9233876623', 'Om sai bhavan,ravet'),
(20, 'anuja', 'anuja.suryawanshi_entc22@pccoer.in ', '9233876623', 'Om sai bhavan,ravet'),
(21, 'anuja', 'anuja.suryawanshi_entc22@pccoer.in ', '9233876623', 'Om sai bhavan,ravet');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `user_id1` int(11) DEFAULT NULL,
  `product_id1` int(11) DEFAULT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `user_id1`, `product_id1`, `quantity`) VALUES
(1, 2, 1, 1),
(2, 2, 4, 1),
(3, 2, 6, 1),
(4, 2, 1, 1),
(5, 3, 1, 1),
(6, 2, 1, 1),
(7, 2, 5, 1),
(8, 4, 1, 1),
(9, 4, 4, 1),
(10, 5, 4, 1),
(11, 5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `agro_material`
--
ALTER TABLE `agro_material`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `farmer_info`
--
ALTER TABLE `farmer_info`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id1` (`user_id1`),
  ADD KEY `product_id1` (`product_id1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agro_material`
--
ALTER TABLE `agro_material`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `farmer_info`
--
ALTER TABLE `farmer_info`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`user_id1`) REFERENCES `admindetails` (`user_id`),
  ADD CONSTRAINT `user_cart_ibfk_2` FOREIGN KEY (`product_id1`) REFERENCES `agro_material` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
