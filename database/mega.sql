-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3360
-- Generation Time: May 07, 2018 at 06:06 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`) VALUES
(1, 'Laptop', 'Laptop thường'),
(6, 'PC', 'Personal computer'),
(7, 'Phụ kiện laptop', 'Phụ kiện laptop'),
(8, 'Linh kiện PC', 'PC Accessory'),
(9, 'Điện thoại', 'Phone'),
(10, 'Phụ kiện điện thoại', 'Phụ kiện điện thoại'),
(11, 'Linh kiện laptop', 'Linh kiện laptop'),
(12, 'Video graphics card', 'Video graphics card'),
(13, 'RAM', 'RAM'),
(14, 'CPU', 'CPU'),
(15, 'HDD', 'HDD');

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

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`discount_id`, `description`, `discount_rating`, `date_start`, `date_end`) VALUES
(1, 'test', '0.50', '2017-12-14', '2017-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manufacture_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manufacture_id`, `name`, `description`, `image`) VALUES
(1, 'Acer', 'Sennheiser has created the world’s first intuitive, compact and mobile binaural recording headset.', 'http://www.hi-techitaly.com/images/stories/news/telefonia/Acer_logo.jpg'),
(2, 'Samsung ', 'Samsung helps you discover a wide range of home electronics with cutting-edge technology including smartphones, tablets, TVs, home appliances and more.', 'samsung.jpg'),
(5, 'Dell', 'Dell provides technology solutions, services &amp; support. Buy Laptops, Touch Screen PCs, Desktops, Servers, Storage, Monitors, Gaming &amp; Accessories.', 'dell_logo_md.gif'),
(6, 'HP', 'Tầm nhìn của chúng tôi là sáng tạo công nghệ mang lại cuộc sống tốt đẹp hơn cho mọi người ở khắp mọi nơi—mọi cá nhân, tổ chức và mọi cộng đồng trên toàn thế giới.', 'hpi-hp-logo-pr.gif'),
(7, 'Apple', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'apple.png'),
(8, 'Sony', 'Sony Corporation is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, gaming...', 'images.png'),
(9, 'Asus', 'AsusTek Computer Inc. is a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.', 'asus_logo2-60x60.jpg'),
(10, 'LG', 'LG Electronics Inc. is a South Korean multinational electronics company headquartered in Yeouido-dong, Seoul, South Korea, and is part of the LG Group', 'LG_logo-60x60.jpg'),
(11, 'Intel', 'Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California, in the Silicon Valley.', 'apple-touch-icon-60x60.png'),
(13, 'Microsoft', 'Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer ...', 'microsoft_logo.jpg'),
(14, 'The happy goat', 'The happy goat provide all kind of toys. The chairman is Mr. Kuma.', 'thg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `membership_id` int(11) NOT NULL,
  `membership_title` varchar(50) NOT NULL,
  `discount_rating` decimal(2,2) NOT NULL,
  `description` varchar(2000) DEFAULT NULL
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
(27, 1, 1, '52800000.00', 'vietbkpro', '098888888', 'test', '', '1999-11-08 17:19:18', '2009-11-08 17:19:18'),
(29, 1, 1, '184800000.00', 'vietbkpro', '098888888', 'test', 'rẻ quá', '2017-05-25 19:11:24', NULL),
(30, 1, 1, '52800000.00', 'vietbkpro', '098888888', 'test', '', '2017-05-31 12:44:13', NULL);

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
(29, 29, 9, '24000000.00', 1),
(30, 29, 8, '24000000.00', 1),
(31, 29, 5, '11000000.00', 1),
(32, 29, 4, '35000000.00', 1),
(33, 29, 3, '13000000.00', 2),
(34, 29, 2, '15000000.00', 1),
(35, 30, 2, '15000000.00', 1),
(36, 30, 10, '33000000.00', 1);

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
(1, 'Chờ xử lí'),
(2, 'Đã chấp thuận'),
(3, 'Đang chuyển hàng'),
(4, 'Kết thúc'),
(5, 'Từ chối');

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
(2, 1, 6, 'HP Envy dv6', '12000000.00', '15000000.00', 100, '0.99', 'HP Envy dv6', 'http://localhost/megastore/assests/image/product/macbook_air_1-200x200.jpg', 'Test product', 'Test product', 'Test product'),
(3, 1, 5, 'Dell Vostro 3560', '10000000.00', '13000000.00', 50, '0.80', 'Dell Vostro 3560', 'http://notebook.co.za/itempics/IS3543-I55200-4500-CAR.jpg', '', '', ''),
(4, 1, 7, 'Macbook pro 2017', '30000000.00', '35000000.00', 30, '0.70', 'Macbook pro 2017', 'https://media2.vatgia.vn/pictures/thumb/200x200/2015/06/jgh1433235140.jpg', '', '', ''),
(5, 1, 1, 'Acer eMachine e510', '9000000.00', '11000000.00', 80, '0.60', 'Acer eMachine e510', 'http://localhost/megastore/assests/image/product/macbook_air_1-200x200.jpg', '', '', ''),
(6, 6, 7, 'iMac Retina 32\"', '30000000.00', '35000000.00', 30, '0.70', '<p><strong>Intel Core 2 Duo processor</strong></p>\n\n<p>Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.</p>\n\n<p><strong>1GB memory, larger hard drives</strong></p>\n\n<p>The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.</p>\n\n<p><strong>Sleek, 1.08-inch-thin design</strong></p>\n\n<p>MacBook makes it easy to ', 'https://www.adorama.com/images/product/acmk473la11.jpg', '', '', ''),
(7, 6, 5, 'Dell Optiplex 780', '7000000.00', '9000000.00', 50, '0.50', 'Dell Optiplex 780', 'http://media.vatgia.vn/pictures_medium/small_krt1356433414.png', '', '', ''),
(8, 1, 6, 'HP Spectre', '20000000.00', '24000000.00', 20, '0.90', 'HP Spectre', 'http://cdn.megabuy.com.au/images/products/medium/372/372221_med.jpg', '', '', ''),
(9, 1, 2, 'Samsung Notebook 7', '20000000.00', '24000000.00', 20, '0.60', 'Samsung Notebook 7 Spin', 'https://images-na.ssl-images-amazon.com/images/I/51DQvs6L4BL._AA200_QL65_.jpg', '', '', ''),
(10, 6, 6, 'HP Envy 34', '30000000.00', '33000000.00', 20, '0.90', '<p><strong>Intel Core 2 Duo processor</strong></p>  <p>Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.</p>  <p><strong>1GB memory, larger hard drives</strong></p>  <p>The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.</p>  <p><strong>Sleek, 1.08-inch-thin design</strong></p>  <p>MacBook makes it easy to ', 'https://images-na.ssl-images-amazon.com/images/I/4161+ECuRKL._AA200_QL65_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/4161+ECuRKL._AA200_QL65_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/4161+ECuRKL._AA200_QL65_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/4161+ECuRKL._AA200_QL65_.jpg'),
(11, 6, 1, 'Dell XPS Tower ', '20000000.00', '24000000.00', 20, '0.82', 'Dell XPS Tower ', 'https://www.adorama.com/images/product/dexps89109bk.jpg', '', '', ''),
(12, 6, 13, 'Surface Studio', '30000000.00', '34000000.00', 20, '0.87', 'Surface Studio', 'http://c773974.r74.cf2.rackcdn.com/476574_266619_03_front_thumbnail.jpg', '', '', '');

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
(1, 'http://localhost/megastore/assests/image/logo.png', 'http://localhost/megastore/assests/image/banner/sample-banner-3-400x200.jpg', 'http://localhost/megastore/assests/image/banner/sample-banner-1-400x200.jpg', 'http://localhost/megastore/assests/image/banner/sample-banner-2-400x200.jpg', 'https://www.facebook.com/dhbkhanoi/', 'twitter', 'HFexVcCrN94', '<tr>             <td><h2>Nguyễn Huy Việt</h2></td>           </tr>           <tr>             <td><img alt=\"\" src=\"assests/image/banner/cms-block.jpg\"></td>           </tr>           <tr>             <td>Hanoi university of science and technology</td>           </tr>           <tr>             <td><strong><a href=\"#\">Read More</a></strong></td>           </tr>', 'http://localhost/megastore/assests/image/slider/banner-1.jpg', 'http://localhost/megastore/assests/image/slider/banner-2.jpg', 'http://localhost/megastore/assests/image/slider/banner-3.jpg', 'Nguyễn Huy Việt');

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
(1, 'user.jpg', 'vietnh', '123456', 'vietbkpro', 'vietbkpro@hust.edu.vn', '098888888', 'test', 0, 1, 1),
(4, 'img/chat-avatar2.jpg', 'admin', 'admin', 'Siegfried', 'siegfried@gmail.com', '01675899424', 'Ireland', 90, 1, 4),
(5, '', 'vietnh3001', '1', 'Cu Chulain', 'cu@gmail.com', '01675899494', 'Ireland', 1, 5, 5),
(6, '', 'rei', 'rei', 'Rei', 'rei@gmail.com', '01928755814', 'Rei', 0, 1, 5),
(7, '', 'hei', 'hei', 'Hei', 'hei@gmail.com', '01928755814', 'Rei', 0, 1, 5),
(8, '', 'lee', 'lee', 'Lee Shengshun', 'lee@gmail.com', '01928755814', 'DTB', 0, 1, 5);

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
(3, 'Disabled'),
(4, 'High Admin'),
(5, 'New');

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_statuses`
--
ALTER TABLE `user_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
