-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(432, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_img` text NOT NULL,
  `item_register` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_img`, `item_register`) VALUES
(1, 'samsung', 'samsung galaxy A10', 150, 'https://i1.wp.com/www.mobilebd.co/wp-content/uploads/2019/12/Samsung-Galaxy-M21-Official-image-500x500.jpg', '2020-11-24 14:09:01'),
(3, 'xiomi', 'redmi', 100, 'https://download.appmifile.com/11_updatepdf_in/28/02/2019/f54d25ad-5c0a-4a69-b4cf-07f849d17250.png', '2020-11-24 14:10:02'),
(5, 'xiomi', 'redmi note 5 pro', 135, 'https://global.appmifile.com/webfile/globalimg/in/cms/78986F32-B186-1319-AA4A-0F54E7E6CA59.jpg', '2020-11-24 14:11:04'),
(6, 'apple', 'iphone 11 pax pro', 1000, 'https://i1.wp.com/www.mobilebd.co/wp-content/uploads/2019/12/Samsung-Galaxy-M21-Official-image-500x500.jpg', '2020-11-24 14:12:18'),
(7, 'apple', ' iphone x', 855, 'data:image/jpeg;base64,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', '2020-11-24 14:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `register_date`) VALUES
(1, 'ehasan ', 'robin', '2020-12-10 08:02:08'),
(2, 'maruf', 'hossen', '2020-12-10 08:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
