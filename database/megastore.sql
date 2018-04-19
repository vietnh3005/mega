-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3360
-- Generation Time: Apr 03, 2018 at 05:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megastore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_parent_id` int(11) DEFAULT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_parent_id`, `category_name`, `description`) VALUES
(1, 0, 'Science fiction', 'Science fiction'),
(6, 0, 'Drama', 'Drama'),
(7, 0, 'Romance', 'Romance'),
(8, 0, 'Mystery', 'Mystery'),
(9, 0, 'Horror', 'Horror'),
(10, 0, 'Travel', 'Travel'),
(11, 0, 'Children\'s', 'Children\'s'),
(12, 0, 'Science', 'Science'),
(13, 0, 'History', 'History'),
(14, 0, 'Math', 'Math'),
(15, 0, 'Encyclopedias', 'Encyclopedias'),
(18, 0, 'Dictionaries', 'Dictionaries'),
(19, 0, 'Comics', 'Comics'),
(20, 0, 'Art', 'Art'),
(21, 0, 'Cookbooks', 'Cookbooks'),
(22, 0, 'Diaries', 'Diaries'),
(23, 0, 'Journals', 'Journals'),
(24, 0, 'Biographies', 'Biographies'),
(25, 0, 'Fantasy', 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `product_id`, `content`, `status_id`, `create_at`) VALUES
(1, 1, 1, 'test 1', 1, '2017-11-11 00:00:00'),
(2, 1, 1, 'test 2', 1, '2017-11-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment_statuses`
--

CREATE TABLE `comment_statuses` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_statuses`
--

INSERT INTO `comment_statuses` (`status_id`, `status`) VALUES
(1, 'Actived'),
(2, 'Disabled');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `discount_rating` decimal(2,2) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manufacture_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manufacture_id`, `name`, `description`, `image`) VALUES
(14, 'Amazon', 'Amazon', 'http://localhost/megastore/assests/image/publisher/amazon.png');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `membership_id` int(11) NOT NULL,
  `membership_title` varchar(50) NOT NULL,
  `discount_rating` decimal(2,2) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`membership_id`, `membership_title`, `discount_rating`, `description`) VALUES
(1, 'Bronze', '0.00', 'Basic memberhip for new user.Point starting form 1-100'),
(2, 'Siver', '0.05', 'Next after bronze,user with Sivermembership have point between 100-500.'),
(3, 'Gold', '0.07', 'Next after Siver.Gold meber have point between 501-1000.Receive more discount rate.'),
(4, 'Plantinum', '0.10', 'The 2nd highest membership.Plantium user can receive more discount rating than Gold and take part in Coupon event. Poin from 1001-2000'),
(5, 'Diamond', '0.12', 'The highest membership of MegaStore.User with active time >3 months and have point larger than 2000 will archived this.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_phone` varchar(120) NOT NULL,
  `receiver_address` varchar(200) NOT NULL,
  `description` text,
  `open_date` timestamp NULL DEFAULT NULL,
  `close_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `status_id`, `user_id`, `total_price`, `receiver_name`, `receiver_phone`, `receiver_address`, `description`, `open_date`, `close_date`) VALUES
(27, 1, 1, '52800000.00', 'vietbkpro', '098888888', 'test', '', '1999-11-09 00:19:18', '2009-11-09 00:19:18'),
(29, 1, 1, '184800000.00', 'vietbkpro', '098888888', 'test', 'rẻ quá', '2017-05-26 02:11:24', NULL),
(30, 1, 1, '52800000.00', 'vietbkpro', '098888888', 'test', '', '2017-05-31 19:44:13', '0000-00-00 00:00:00'),
(31, 5, 1, '36300000.00', 'vietbkpro', '098888888', 'test', '', '2017-06-03 20:14:06', '0000-00-00 00:00:00'),
(35, 1, 0, '16500000.00', 'Unregistered  Unregistered ', 'Unregistered ', 'Unregistered  --- Unregistered  ---  ---  ---  --- Hà Nội', 'Unregistered ', '2017-06-04 01:10:10', '0000-00-00 00:00:00'),
(36, 1, 0, '36300000.00', 'Aero Aero', '01675899424', ' --- 139/35 Tam Trnh Hai Ba Trung Ha Noi ---  --- Ha Noi --- 10000 --- Hà Nội', '', '2017-06-04 01:25:25', '0000-00-00 00:00:00'),
(37, 1, 0, '99000.00', 'Nguyen Huy Viet', '01675899424', ' --- 139/35 Tam Trnh Hai Ba Trung Ha Noi ---  --- Ha Noi --- 10000 --- Hà Nội', '', '2017-06-03 19:46:30', '0000-00-00 00:00:00'),
(38, 1, 0, '52899000.00', 'vietbkpro', '098888888', 'test', 'Mua', '2017-06-03 22:31:02', '0000-00-00 00:00:00'),
(39, 1, 0, '101200000.00', 'Nguyen  Huy Viet', '01675899424', ' --- 139/35 Tam Trinh --- Ha Noi --- Ha Noi --- undefined --- Đà Nẵng', 'Giao hang vao luc 10h', '2017-06-04 19:00:33', '0000-00-00 00:00:00'),
(40, 2, 0, '16500000.00', 'vietbkpro', '098888888', 'test', '', '2017-06-04 19:01:51', '0000-00-00 00:00:00'),
(41, 2, 0, '220000.00', 'Nguyen Huy Viet', '01675899424', '139/35 Tam Trnh Hai Ba Trung Ha Noi', '', '2017-11-09 01:58:25', '0000-00-00 00:00:00'),
(42, 1, 3, '220000.00', 'Nguyen Huy Viet', '01675899424', '139/35 Tam Trnh Hai Ba Trung Ha Noi', '', '2017-11-09 02:02:18', NULL),
(43, 1, 3, '440000.00', 'Nguyen Huy Viet', '01675899424', '139/35 Tam Trnh Hai Ba Trung Ha Noi', 'Majors', '2017-11-09 02:51:22', NULL),
(44, 1, 3, '220000.00', 'Nguyen Huy Viet', '01675899424', '139/35 Tam Trnh Hai Ba Trung Ha Noi', '', '2017-11-09 04:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `unit_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `unit_price`, `unit_quantity`) VALUES
(28, 29, 10, '33000000.00', 1),
(31, 29, 5, '11000000.00', 1),
(32, 29, 4, '35000000.00', 1),
(33, 29, 3, '13000000.00', 2),
(34, 29, 2, '15000000.00', 1),
(35, 30, 2, '15000000.00', 1),
(36, 30, 10, '33000000.00', 1),
(37, 31, 10, '33000000.00', 1),
(38, 31, 2, '15000000.00', 1),
(39, 31, 10, '33000000.00', 1),
(40, 31, 8, '24000000.00', 1),
(41, 31, 2, '15000000.00', 1),
(42, 31, 10, '33000000.00', 1),
(43, 31, 10, '33000000.00', 1),
(44, 35, 2, '15000000.00', 1),
(45, 36, 10, '33000000.00', 1),
(46, 37, 13, '90000.00', 1),
(47, 38, 2, '15000000.00', 1),
(48, 38, 10, '33000000.00', 1),
(49, 38, 13, '90000.00', 1),
(50, 39, 8, '24000000.00', 1),
(51, 39, 12, '34000000.00', 2),
(52, 40, 2, '15000000.00', 1),
(53, 41, 8, '200000.00', 1),
(54, 42, 2, '200000.00', 1),
(55, 43, 10, '200000.00', 1),
(56, 43, 8, '200000.00', 1),
(57, 44, 10, '200000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`status_id`, `status`) VALUES
(1, 'Waiting'),
(2, 'Approved'),
(3, 'Delivering'),
(4, 'Finished'),
(5, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `buy_price` decimal(15,2) NOT NULL,
  `sell_price` decimal(15,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rating` decimal(2,2) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `manufacture_id`, `product_name`, `buy_price`, `sell_price`, `quantity`, `rating`, `description`, `image1`, `image2`, `image3`, `image4`) VALUES
(2, 1, 14, 'Example Book', '200000.00', '200000.00', 100, '0.99', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(3, 1, 14, 'Example Book', '200000.00', '200000.00', 50, '0.80', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(4, 1, 14, 'Example Book', '200000.00', '200000.00', 30, '0.70', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(5, 1, 14, 'Example Book', '200000.00', '200000.00', 80, '0.60', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(6, 6, 14, 'Example Book', '200000.00', '200000.00', 30, '0.70', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(7, 6, 14, 'Example Book', '200000.00', '200000.00', 50, '0.50', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(8, 1, 14, 'Example Book', '200000.00', '200000.00', 20, '0.90', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(9, 1, 14, 'Example Book', '200000.00', '200000.00', 20, '0.60', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(10, 6, 14, 'Example Book', '200000.00', '200000.00', 20, '0.90', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(11, 6, 14, 'Example Book', '200000.00', '200000.00', 20, '0.82', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(12, 6, 14, 'Example Book', '200000.00', '200000.00', 20, '0.87', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png'),
(13, 7, 14, 'Example Book', '200000.00', '200000.00', 400, '0.90', 'Example Book', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png', 'http://localhost/megastore/assests/image/product/book.png');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `banner1` varchar(500) DEFAULT NULL,
  `banner2` varchar(500) DEFAULT NULL,
  `banner3` varchar(500) DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `youtube` varchar(500) DEFAULT NULL,
  `customCms` varchar(500) DEFAULT NULL,
  `slide1` varchar(500) DEFAULT NULL,
  `slide2` varchar(500) DEFAULT NULL,
  `slide3` varchar(500) DEFAULT NULL,
  `footer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `banner1`, `banner2`, `banner3`, `facebook`, `twitter`, `youtube`, `customCms`, `slide1`, `slide2`, `slide3`, `footer`) VALUES
(1, 'http://localhost/megastore/assests/image/logo.png', 'http://localhost/megastore/assests/image/banner/sample-banner-3-400x200.jpg', 'http://localhost/megastore/assests/image/banner/sample-banner-1-400x200.jpg', 'http://localhost/megastore/assests/image/banner/sample-banner-2-400x200.jpg', 'https://www.facebook.com/dhbkhanoi/', 'twitter', '1prhCWO_518', '<tr>             <td><h2>Nguyễn Huy Việt</h2></td>           </tr>           <tr>             <td><img alt=\"\" src=\"assests/image/banner/cms-block.jpg\"></td>           </tr>           <tr>             <td>Hanoi university of science and technology</td>           </tr>           <tr>             <td><strong><a href=\"#\">Read More</a></strong></td>           </tr>', 'http://localhost/megastore/assests/image/slider/banner-1.jpg', 'http://localhost/megastore/assests/image/slider/banner-2.jpg', 'http://localhost/megastore/assests/image/slider/banner-3.jpg', 'Nguyễn Huy Việt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `avatar`, `username`, `password`, `name`, `email`, `phone`, `address`, `point`, `membership_id`, `status_id`) VALUES
(0, 'Unregistered ', 'Unregistered customer', '0', 'Unregistered ', 'Unregistered ', '0', 'Unregistered ', 0, 1, 1),
(1, 'user.jpg', 'vietnh', '123456', 'vietbkpro', 'vietbkpro@hust.edu.vn', '098888888', 'test', 0, 1, 1),
(3, 'avatar.png', 'vietnh2', '36361532', 'Nguyen Huy Viet', 'nhv222222@gmail.com', '01675899424', '139/35 Tam Trnh Hai Ba Trung Ha Noi', 0, 1, 2),
(6, 'avatar4.png', 'admin', 'admin', 'Admin ', 'admin@gmail.com', '01675899424', 'Neifheilm', 0, 1, 3),
(7, 'Sketch001.jpg', 'nhv22222', '1', 'Nguyen Huy Viet', 'nhv222222@gmail.com', '01675899424', 'Somewhere i belong', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_statuses`
--

CREATE TABLE `user_statuses` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_statuses`
--

INSERT INTO `user_statuses` (`status_id`, `status`) VALUES
(1, 'Admin'),
(2, 'Active'),
(3, 'Disabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `comment_id` (`comment_id`);

--
-- Indexes for table `comment_statuses`
--
ALTER TABLE `comment_statuses`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_id` (`status_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`),
  ADD UNIQUE KEY `discount_id` (`discount_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manufacture_id`),
  ADD UNIQUE KEY `manufacture_id` (`manufacture_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`membership_id`),
  ADD UNIQUE KEY `membership_id` (`membership_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_id` (`status_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `manufacture_id` (`manufacture_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`),
  ADD UNIQUE KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `user_statuses`
--
ALTER TABLE `user_statuses`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment_statuses`
--
ALTER TABLE `comment_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_statuses`
--
ALTER TABLE `user_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `order_statuses` (`status_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`manufacture_id`) REFERENCES `manufactures` (`manufacture_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `user_statuses` (`status_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`membership_id`) REFERENCES `memberships` (`membership_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
