-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3360
-- Generation Time: May 29, 2018 at 04:32 AM
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
(14, 'CPU', 'CPU Máy tính'),
(15, 'HDD', 'HDD'),
(23, 'Pin sạc dự phòng', 'Pin sạc dự phòng'),
(24, 'Cáp sạc', 'Cáp sạc cho máy điện thoại'),
(25, 'Thẻ nhớ', 'Thẻ nhớ SD, micro SD'),
(26, 'Tai nghe', 'Tai nghe android, ios, bluetooth....'),
(27, 'USB', 'Thiết bị lưu trữ di động'),
(28, 'Chuột', 'Chuột máy tính, chuột không dây'),
(29, 'Bàn phím', 'Bàn phím máy tính, bàn phím không dây ...'),
(30, 'Loa', 'Loa ngoài, loa di động, loa mini'),
(31, 'Đồng hồ', 'Smartwatch và các loại đồng hồ điện tử khác...'),
(32, 'Ốp lưng', 'Ốp lưng điện thoại, máy tính bảng'),
(33, 'Các phụ kiện khác', 'Các loại phụ kiện khác không nằm trong các danh mục trên.\r\n'),
(34, 'Pin', 'Pin thay thế cho điện thoại, laptop');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reviewer` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `short_review` varchar(100) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `reviewer`, `product_id`, `short_review`, `content`, `status_id`, `create_at`) VALUES
(4, 0, 'Archer', 6, 'Good', '1', 2, '2018-05-23 00:00:00'),
(5, 0, 'Archer', 10, 'Good', 'Good', 2, '2018-05-23 00:00:00'),
(6, 0, 'Việt', 10, 'Tốt', 'Sản phẩm tương đối tốt, giá cả tương đối hợp lí, cần thêm sốt cà chua.', 1, '2018-05-23 00:00:00'),
(7, 0, 'Kuma Bear', 10, 'Tạm được', 'Tạm được, cần thêm nhiều sốt cà chua.', 1, '2018-05-23 00:00:00'),
(9, 1, 'vietnh', 8, 'Shiroguma', 'Một ngày bình luận cùn shiroguma. Sản phẩm không thực sự tốt.', 1, '2018-05-23 00:00:00'),
(10, 1, 'vietnh', 3, 'Cũ quá', 'Măt hàng hơi cũ, hết hạn bảo hành', 1, '2018-05-23 00:00:00');

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
(1, 'New'),
(2, 'Disabled'),
(3, 'Actived');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `discount_code` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `discount_rating` decimal(2,2) NOT NULL,
  `discount_value` bigint(20) NOT NULL,
  `discount_type` int(11) NOT NULL,
  `on_product` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`discount_id`, `discount_code`, `description`, `discount_rating`, `discount_value`, `discount_type`, `on_product`, `date_start`, `date_end`) VALUES
(1, '', 'test', '0.50', 0, 0, 0, '2017-12-14', '2017-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

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
(1, 'Acer', 'Sennheiser has created the world’s first intuitive, compact and mobile binaural recording headset.', 'acer_logo.jpg'),
(2, 'Samsung ', 'Samsung helps you discover a wide range of home electronics with cutting-edge technology including smartphones, tablets, TVs, home appliances and more.', 'samsung.jpg'),
(5, 'Dell', 'Dell provides technology solutions, services &amp; support. Buy Laptops, Touch Screen PCs, Desktops, Servers, Storage, Monitors, Gaming &amp; Accessories.', 'dell_logo_md.gif'),
(6, 'HP', 'Tầm nhìn của chúng tôi là sáng tạo công nghệ mang lại cuộc sống tốt đẹp hơn cho mọi người ở khắp mọi nơi—mọi cá nhân, tổ chức và mọi cộng đồng trên toàn thế giới.', 'hpi-hp-logo-pr.gif'),
(7, 'Apple', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'apple.png'),
(8, 'Sony', 'Sony Corporation is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, gaming...', 'images.png'),
(9, 'Asus', 'AsusTek Computer Inc. is a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.', 'asus_logo2-60x60.jpg'),
(10, 'LG', 'LG Electronics Inc. is a South Korean multinational electronics company headquartered in Yeouido-dong, Seoul, South Korea, and is part of the LG Group', 'LG_logo-60x60.jpg'),
(11, 'Intel', 'Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California, in the Silicon Valley.', 'apple-touch-icon-60x60.png'),
(13, 'Microsoft', 'Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer ...', 'microsoft_logo.jpg'),
(14, 'The happy goat', 'The happy goat provide all kind of toys. The chairman is Mr. Kuma.', 'thg.jpg'),
(16, 'Various Brand', 'Các hãng phân phối khác', 'various.jpg');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `status_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `receiver_id`, `title`, `content`, `status_id`, `is_deleted`, `created_date`) VALUES
(1, 1, 'Đang chờ xử lí', 'Đơn hàng của bạn hiện đang chờ xử lí', 1, 0, '2018-05-24'),
(2, 0, 'Đang chuyển hàng', 'Đơn hàng của bạn sẽ được chuyển đến trong thời gian sớm nhất', 1, 0, '2018-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `message_status`
--

CREATE TABLE `message_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `message_status`
--

INSERT INTO `message_status` (`status_id`, `status`) VALUES
(1, 'New'),
(2, 'Read');

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
  `receiver_email` varchar(100) NOT NULL,
  `receiver_phone` varchar(120) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
  `description` text,
  `open_date` timestamp NULL DEFAULT NULL,
  `close_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `status_id`, `user_id`, `total_price`, `receiver_name`, `receiver_email`, `receiver_phone`, `receiver_address`, `description`, `open_date`, `close_date`) VALUES
(135, 1, 1, '25400000.00', '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(136, 1, 1, '25400000.00', '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(137, 3, 0, '59000000.00', 'Seigfried', 'sieg@gmail.com', '0192837459', 'Midgard', 'Giao hàng trong ngày', '0000-00-00 00:00:00', NULL),
(138, 1, 1, '15000000.00', '', '', '', '', '', '2018-05-20 17:00:00', NULL);

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
(62, 135, 8, '24000000.00', 1),
(63, 135, 17, '200000.00', 2),
(64, 135, 18, '1000000.00', 1),
(65, 136, 8, '24000000.00', 1),
(66, 136, 17, '200000.00', 2),
(67, 136, 18, '1000000.00', 1),
(68, 137, 4, '35000000.00', 1),
(69, 137, 8, '24000000.00', 1),
(70, 138, 2, '15000000.00', 1);

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
(3, 1, 5, 'Dell Vostro 3560', '10000000.00', '13000000.00', 50, '0.80', 'Dell Vostro 3560', '3056.png', '3056-2.jpg', '3056_3.jpg', '3056_4.jpg'),
(4, 1, 7, 'Macbook pro 2017', '30000000.00', '35000000.00', 30, '0.70', 'Macbook pro 2017', 'mac_20171.jpg', 'mac_20172.jpg', 'mac_20173.jpg', 'mac_20174.jpg'),
(5, 1, 1, 'Acer eMachine e510', '9000000.00', '11000000.00', 80, '0.60', 'Acer eMachine e510', 'E510_1.jpg', 'E510_2.jpg', 'E510_3.jpg', 'E510_4.jpg'),
(6, 6, 7, 'iMac Retina 32', '30000000.00', '35000000.00', 30, '0.70', '&lt;p&gt;&lt;strong&gt;Intel Core 2 Duo processor&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1GB memory, larger hard drives&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.&lt;/p&gt;&lt;p&gt;&lt;stron', 'imac_1.jpg', 'imac_2.jpg', 'imac_3.jpg', 'imac_4.jpg'),
(8, 1, 6, 'HP Spectre', '20000000.00', '24000000.00', 20, '0.90', 'HP Spectre', 'spectre_1.png', 'spectre_2.png', 'spectre_3.png', 'spectre_4.jpg'),
(9, 1, 2, 'Samsung Notebook 7', '20000000.00', '24000000.00', 20, '0.60', 'Samsung Notebook 7 Spin', 'note7_1.jpg', 'note7_2.jpg', 'note7_3.jpg', 'note7_4.jpg'),
(10, 6, 6, 'HP Envy 34', '30000000.00', '33000000.00', 20, '0.90', '&lt;p&gt;&lt;strong&gt;Intel Core 2 Duo processor&lt;/strong&gt;&lt;/p&gt;  &lt;p&gt;Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.&lt;/p&gt;  &lt;p&gt;&lt;strong&gt;1GB memory, larger hard drives&lt;/strong&gt;&lt;/p&gt;  &lt;p&gt;The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.&lt;/p&gt;  &lt;p&gt;&', 'envy34_1.jpg', 'envy34_2.jpg', 'envy34_3.png', 'envy34_4.jpg'),
(12, 6, 13, 'Surface Studio', '30000000.00', '34000000.00', 20, '0.87', 'Surface Studio', 'sstudio_1.jpg', 'sstudio_2.jpg', 'sstudio_3.jpg', 'sstudio_4.jpg'),
(15, 9, 7, 'iPhone X', '30000000.00', '34800000.00', 999, '0.00', 'Iphone', 'iphonex1.jpg', 'iphonex2.jpg', 'iphonex3.jpg', 'iphonex4.jpg'),
(16, 9, 2, 'Samsung Galaxy S8 Plus', '15000000.00', '18000000.00', 999, '0.00', 'Samsung Galaxy S8 Plus ', 'sss81.jpg', 'sss82.jpg', 'sss83.jpg', 'sss84.jpg'),
(17, 28, 1, 'Gaming Cliptec Meteor RGS502', '150000.00', '200000.00', 444, '0.00', 'Gaming Cliptec Meteor RGS502', 'mouse_gcm1.png', 'mouse_gcm2.png', 'mouse_gcm4.jpg', 'mouse_gmc3.jpg'),
(18, 29, 16, 'Gaming Cliptec RGK817', '8000000.00', '1000000.00', 444, '0.00', 'Gaming Cliptec RGK817', 'gcr1.jpg', 'gcr2.jpg', 'gcr3.jpg', 'gcr4.jpg');

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
(0, '', '', '', '', '', '', '', NULL, NULL, 2),
(1, 'user.jpg', 'vietnh', '123456', 'vietbkpro', 'vietbkpro@hust.edu.vn', '098888888', 'test', 0, 1, 1),
(4, 'img/chat-avatar2.jpg', 'admin', 'admin', 'Siegfried', 'siegfried@gmail.com', '01675899424', 'Ireland', 90, 1, 4),
(6, '', 'rei', 'rei', 'Rei', 'rei@gmail.com', '01928755814', 'Rei', 0, 1, 5),
(7, '', 'hei', 'hei', 'Hei', 'hei@gmail.com', '01928755814', 'Rei', 0, 1, 5),
(8, '', 'lee', 'lee', 'Lee Shengshun', 'lee@gmail.com', '01928755814', 'DTB', 0, 1, 5),
(12, 'thg.jpg', 'goat', '12345', 'The most wanted goat', 'goat@gmail.com', '019384575834', '120 Goat Cage', 0, 1, 5),
(14, '', 'miu', '1', 'Miu', 'miu@gmail.com', '01928475638', 'Just the other place', 0, 1, 5);

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
  ADD UNIQUE KEY `comment_id` (`comment_id`),
  ADD KEY `comments_ibfk_1` (`user_id`),
  ADD KEY `comments_ibfk_2` (`product_id`),
  ADD KEY `comments_ibfk_3` (`status_id`);

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
-- Indexes for table `discount_types`
--
ALTER TABLE `discount_types`
  ADD PRIMARY KEY (`type_id`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `messages_ibfk_1` (`receiver_id`),
  ADD KEY `messages_ibfk_2` (`status_id`);

--
-- Indexes for table `message_status`
--
ALTER TABLE `message_status`
  ADD PRIMARY KEY (`status_id`);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comment_statuses`
--
ALTER TABLE `comment_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message_status`
--
ALTER TABLE `message_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_statuses`
--
ALTER TABLE `user_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `comment_statuses` (`status_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `message_status` (`status_id`);

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
