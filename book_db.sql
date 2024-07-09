-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 09:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `book_db`
--
CREATE DATABASE IF NOT EXISTS `book_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `book_db`;

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name_of_firm` varchar(25) NOT NULL,
  `address1` varchar(35) NOT NULL,
  `delivery` varchar(30) NOT NULL,
  `date1` date NOT NULL,
  `app_product` varchar(20) NOT NULL,
  `contact_nu` varchar(10) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name1`, `name_of_firm`, `address1`, `delivery`, `date1`, `app_product`, `contact_nu`, `email`) VALUES
(2, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'dgsdgs', '2022-08-31', '', '2147483647', 'dharmik.y.thanki@gmail.com'),
(3, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'dgsdgs', '2022-08-31', '', '2147483647', 'dharmik.y.thanki@gmail.com'),
(4, 'Krunal Raichura', 'KK MINERALS', 'Gidc, Porbandar', 'kambhadiya', '2022-08-25', '', '2147483647', 'kkmin@gmail.com'),
(5, 'Krunal Raichura', 'KK MINERALS', 'Gidc, Porbandar', 'kambhadiya', '2022-08-25', '', '2147483647', 'kkmin@gmail.com'),
(6, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'unknown', '2022-08-26', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(7, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'unknown', '2022-08-26', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(8, 'sample', 'sample', 'Panchwati Society ,Porbandar', 'somewhere', '2022-08-26', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(9, 'sample', 'sample', 'Panchwati Society ,Porbandar', 'somewhere', '2022-08-26', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(10, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'dgsdgs', '2022-12-15', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(13, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'Panchwati Society ,Porbandar', '2022-08-25', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(14, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'Panchwati Society ,Porbandar', '2022-08-18', '', '9825387631', 'dharmik.y.thanki@gmail.com'),
(16, 'ada', 'abc', 'ajhd', 'aefaf', '2022-09-17', '', '9825387631', 'ada@gmail.com'),
(17, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'dss', '2022-09-18', 'Refractory Castables', '9825387631', 'dharmik.y.thanki@gmail.com'),
(18, 'Dharmik Yogeshbhai T', 'Dharmik Yogeshbhai Thanki', 'Panchwati Society ,Porbandar', 'skdiv', '2022-09-23', 'Calandium Cement', '9825387631', 'dharmik.y.thanki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name1` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address1` varchar(35) NOT NULL,
  `description1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name1`, `phone`, `mobile`, `email`, `address1`, `description1`) VALUES
(1, 'Dharmik Yogeshb', '2147483647', '2147483647', 'dharmik.y.thanki@gma', 'Panchwati Society ,Porban', 'this is description'),
(3, 'Dharmik Yogeshb', '9898494430', '9898494430', 'dharmik.y.thanki@gma', 'Panchwati Society ,Porban', 'this is description'),
(4, 'Dharmik Yogeshb', '9825387631', '9825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'this is description');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photo` varchar(25) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `transport_and_other` int(11) NOT NULL,
  `description1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `photo`, `name1`, `price`, `quantity`, `transport_and_other`, `description1`) VALUES
(32, '631ad0cc5a440.jpg', 'High Aluminum', 10, 10, 10, 'This is High Aluminum'),
(33, '631ad21ab2aec.jpg', 'Refactory Castables', 100, 10, 56, 'This is refactory castabl'),
(34, '631cb9d4068f5.jpg', 'test', 10, 10, 10, 'desc'),
(35, '6323e9812dadc.jpg', 'sample', 100, 100, 100, 'tyvy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(8, 'dharmik', 'dharmik.y.thanki@gma', '21232f297a57a5a74389', '2022-09-15 06:59:33'),
(9, 'root', 'root@gmail.com', '63a9f0ea7bb98050796b', '2022-09-15 07:06:24'),
(10, 'yogi', 'yogi@gmail.com', '938e14c074c45c62eb15', '2022-09-15 07:16:02'),
(11, 'yogi123', 'yogi@gmail.com', '5621be1f2352574f7a48', '2022-09-15 07:17:01'),
(12, 'dharmikthanki', 'Dhx@gmail.com', 'e2d88260cec3cb0e2519', '2022-09-15 07:18:09'),
(13, 'admin', 'admin@gmail.com', '21232f297a57a5a74389', '2022-09-15 07:26:00'),
(14, 'admin1', 'dharmik.y.thanki@gma', 'e00cf25ad42683b3df67', '2022-09-15 07:27:08'),
(15, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab7', '2022-09-15 07:28:45'),
(16, 'user123', 'user123@gmail.com', '6ad14ba9986e3615423d', '2022-09-15 07:39:46'),
(17, 'mainuser', 'mainuser@abc', '8aa0606b7e3547a234c8', '2022-09-15 07:50:58'),
(18, 'xyzadmin', 'xyzadmin@abc', 'xyzadmin', '2022-09-15 07:53:04'),
(19, 'dharmik', 'dharmik@abc', 'dharmik', '2022-09-15 07:54:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`,`mobile`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
