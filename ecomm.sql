-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 05:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pant', '2021-05-07 15:24:28', '2021-05-07 15:24:28'),
(2, 'shirt', '2021-05-07 17:02:21', '2021-05-07 17:02:21'),
(5, 't shirt', '2021-05-29 06:56:07', '2021-05-29 06:56:07'),
(6, 'bag', '2021-06-25 14:19:40', '2021-06-25 14:19:40'),
(8, 'sunglass', '2021-07-03 05:58:07', '2021-07-03 05:58:07'),
(9, 'owajed', '2021-07-03 15:36:14', '2021-07-03 15:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'ashish@gmail.com', 'this is  msg....', '2021-05-07 11:55:17', '2021-05-07 11:55:17'),
(2, 'ashish@gmail.com', 'this is  msg....', '2021-05-07 12:31:29', '2021-05-07 12:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `password`, `username`, `updated_at`) VALUES
(1, 'ashish@gmail.com', 'ashish', 'ashish', '2021-05-31 15:42:35'),
(3, 'ashish1@gmail.com', 'ash', 'ashish1', '2021-05-31 15:54:35'),
(4, 'debjeet@gmail.com', 'deb', 'deb', '2021-05-31 15:56:28'),
(5, 'ash123@gmail.com', 'ash123', 'ash123', '2021-06-01 19:19:46'),
(6, 'ashish123@gmail.com', 'asd', 'ashish124', '2021-06-22 17:55:18'),
(7, 'deb1@gmail.com', 'deb1', 'deb1', '2021-06-26 05:48:21'),
(8, 'debjeet1@gmail.com', 'deb', 'debjeet1', '2021-06-26 06:40:23'),
(13, 'ADDDSF@GMAIL.COM', 'A', 'ASD', '2021-07-03 13:40:13'),
(14, 'admin@gmail.coM', '', '', '2021-07-03 15:27:01'),
(15, 'asfdgf@GMAIL.COM', '', '', '2021-07-03 15:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `payment_id` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `total` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `address`, `phone`, `payment_id`, `payment_status`, `total`, `created_at`, `updated_at`) VALUES
(45, 1, 'uttarpara', '8981314060', 'pay_HRPy8U8a1K1Pyw', 'complete', 2000, '2021-06-25 20:03:58', '2021-06-25 20:03:58'),
(46, 1, 'uttarapara', '8981314060', '', 'pending', 2100, '2021-06-25 20:11:48', '2021-06-25 20:11:48'),
(47, 1, 'uttarapara', '8981314060', '', 'pending', 2100, '2021-06-25 20:12:49', '2021-06-25 20:12:49'),
(48, 1, 'uttarapara', '8981314060', 'pay_HRQ8EU6TMH4u5V', 'complete', 2100, '2021-06-25 20:12:52', '2021-06-25 20:12:52'),
(49, 1, 'uttarpara', '8981314060', 'pay_HRZiP1EopAUuKa', 'complete', 2000, '2021-06-26 05:36:16', '2021-06-26 05:36:16'),
(50, 1, 'chandannagar', '3242525123', '', 'pending', 150, '2021-06-26 05:40:45', '2021-06-26 05:40:45'),
(51, 1, 'chandannagar', '3242525123', '', 'pending', 150, '2021-06-26 05:41:10', '2021-06-26 05:41:10'),
(52, 1, 'chandannagar', '3242525123', 'pay_HRZnsax4gbGZWX', 'complete', 150, '2021-06-26 05:41:17', '2021-06-26 05:41:17'),
(53, 7, 'chandannagar', '9897653513', 'pay_HRZw4bYAKG4u8P', 'complete', 150, '2021-06-26 05:49:12', '2021-06-26 05:49:12'),
(54, 8, 'chandannagar', '8983421234', '', 'pending', 250, '2021-06-26 06:41:31', '2021-06-26 06:41:31'),
(55, 8, 'chandannagar', '8983421234', 'pay_HRaqxjJ2F0Ce3x', 'complete', 250, '2021-06-26 06:42:25', '2021-06-26 06:42:25'),
(56, 1, 'uttarpara', '4789565474', '', 'pending', 100, '2021-06-27 18:14:30', '2021-06-27 18:14:30'),
(57, 1, 'uttarpara', '4789565474', '', 'pending', 100, '2021-06-27 18:17:32', '2021-06-27 18:17:32'),
(58, 1, 'uttarpara', '4789565474', '', 'pending', 100, '2021-06-27 18:18:42', '2021-06-27 18:18:42'),
(59, 1, 'uttarpara', '4789565474', '', 'pending', 100, '2021-06-27 18:19:46', '2021-06-27 18:19:46'),
(60, 1, 'uttarpara', '4789565474', '', 'pending', 100, '2021-06-27 18:20:57', '2021-06-27 18:20:57'),
(64, 1, 'uttarpara', '8981314060', 'pay_HTMpDKVBUOdbQQ', 'complete', 100, '2021-06-30 18:17:46', '2021-06-30 18:17:46'),
(65, 1, 'uttarpara', '8981314060', 'pay_HTN0kO0esobHvc', 'complete', 100, '2021-06-30 18:26:27', '2021-06-30 18:26:27'),
(66, 11, 'mednipur', '4789565474', 'pay_HTk5LfnIqkjlyK', 'complete', 100, '2021-07-01 17:01:58', '2021-07-01 17:01:58'),
(67, 3, 'uttarpara', '8981314060', 'pay_HUMKJID6iGZ4iK', 'complete', 2000, '2021-07-03 06:27:27', '2021-07-03 06:27:27'),
(68, 3, 'uttarpara', '8981314060', 'pay_HUMdN9VKA3s2Eu', 'complete', 2150, '2021-07-03 06:45:07', '2021-07-03 06:45:07'),
(69, 3, 'cfddhbf', '4789565474', '', 'pending', 100, '2021-07-03 07:11:34', '2021-07-03 07:11:34'),
(70, 3, 'cfddhbf', '4789565474', 'pay_HUN8BtIQEWygdF', 'complete', 100, '2021-07-03 07:13:33', '2021-07-03 07:13:33'),
(71, 3, 'mednipur', '8987878765', 'pay_HUVdqf3cIiNVEM', 'complete', 2150, '2021-07-03 15:34:09', '2021-07-03 15:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(58, 45, 4, 1, '2021-06-25 20:03:58', '2021-06-25 20:03:58'),
(59, 46, 4, 1, '2021-06-25 20:11:48', '2021-06-25 20:11:48'),
(60, 46, 5, 1, '2021-06-25 20:11:48', '2021-06-25 20:11:48'),
(61, 47, 4, 1, '2021-06-25 20:12:49', '2021-06-25 20:12:49'),
(62, 47, 5, 1, '2021-06-25 20:12:49', '2021-06-25 20:12:49'),
(63, 48, 4, 1, '2021-06-25 20:12:52', '2021-06-25 20:12:52'),
(64, 48, 5, 1, '2021-06-25 20:12:52', '2021-06-25 20:12:52'),
(65, 49, 4, 1, '2021-06-26 05:36:16', '2021-06-26 05:36:16'),
(66, 50, 6, 1, '2021-06-26 05:40:45', '2021-06-26 05:40:45'),
(67, 51, 6, 1, '2021-06-26 05:41:10', '2021-06-26 05:41:10'),
(68, 52, 6, 1, '2021-06-26 05:41:17', '2021-06-26 05:41:17'),
(69, 53, 6, 1, '2021-06-26 05:49:12', '2021-06-26 05:49:12'),
(70, 54, 6, 1, '2021-06-26 06:41:31', '2021-06-26 06:41:31'),
(71, 54, 5, 1, '2021-06-26 06:41:31', '2021-06-26 06:41:31'),
(72, 55, 6, 1, '2021-06-26 06:42:25', '2021-06-26 06:42:25'),
(73, 55, 5, 1, '2021-06-26 06:42:25', '2021-06-26 06:42:25'),
(74, 56, 5, 1, '2021-06-27 18:14:30', '2021-06-27 18:14:30'),
(75, 57, 5, 1, '2021-06-27 18:17:32', '2021-06-27 18:17:32'),
(76, 58, 5, 1, '2021-06-27 18:18:42', '2021-06-27 18:18:42'),
(77, 59, 5, 1, '2021-06-27 18:19:46', '2021-06-27 18:19:46'),
(78, 60, 5, 1, '2021-06-27 18:20:57', '2021-06-27 18:20:57'),
(82, 64, 5, 1, '2021-06-30 18:17:46', '2021-06-30 18:17:46'),
(83, 65, 5, 1, '2021-06-30 18:26:27', '2021-06-30 18:26:27'),
(84, 66, 5, 1, '2021-07-01 17:01:58', '2021-07-01 17:01:58'),
(85, 67, 4, 1, '2021-07-03 06:27:27', '2021-07-03 06:27:27'),
(86, 68, 4, 1, '2021-07-03 06:45:07', '2021-07-03 06:45:07'),
(87, 68, 6, 1, '2021-07-03 06:45:07', '2021-07-03 06:45:07'),
(88, 69, 5, 1, '2021-07-03 07:11:34', '2021-07-03 07:11:34'),
(89, 70, 5, 1, '2021-07-03 07:13:33', '2021-07-03 07:13:33'),
(90, 71, 4, 1, '2021-07-03 15:34:09', '2021-07-03 15:34:09'),
(91, 71, 6, 1, '2021-07-03 15:34:09', '2021-07-03 15:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'coton t-shirt', 1500, 'uploads/about-02.jpg', '  a good quality cotton tshirt', 5, '2021-05-21 09:46:59', '2021-05-21 09:46:59'),
(4, 'cotton pant', 2000, 'uploads/product-detail-01.jpg', '  good cotton pant', 1, '2021-05-21 10:01:32', '2021-05-21 10:01:32'),
(5, 'full pant', 100, 'uploads/gallery-08.jpg', 'very good full pant', 1, '2021-06-25 13:54:25', '2021-06-25 13:54:25'),
(6, 'full shirt ', 150, 'uploads/product-11.jpg', 'very good full shirt', 2, '2021-06-25 13:55:06', '2021-06-25 13:55:06'),
(7, 'full t shirt', 200, 'uploads/about-02.jpg', 'good t shirt\r\n', 5, '2021-06-25 14:19:26', '2021-06-25 14:19:26'),
(8, 'half tshirt', 150, 'uploads/product-08.jpg', 'good tshirt', 5, '2021-06-25 14:20:48', '2021-06-25 14:20:48'),
(9, 'bag', 250, 'uploads/banner-06.jpg', 'good bag', 6, '2021-06-25 14:22:08', '2021-06-25 14:22:08'),
(10, 'bag', 250, 'uploads/gallery-01.jpg', 'a good quality bag.', 6, '2021-07-03 05:56:03', '2021-07-03 05:56:03'),
(11, 'bag (black)', 300, 'uploads/bag2.jpg', 'good quality bag.', 6, '2021-07-03 05:56:47', '2021-07-03 05:56:47'),
(12, 'sunglass', 450, 'uploads/sg1.jpg', 'These glasses are very light weight that will make you feel comfortable while adding up to your looks and style.', 8, '2021-07-03 05:58:33', '2021-07-03 05:58:33'),
(13, 'premium sunglass', 600, 'uploads/sg1.jpg', 'These glasses are very light weight that will make you feel comfortable while adding up to your looks and style.', 8, '2021-07-03 05:59:08', '2021-07-03 05:59:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
