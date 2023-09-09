-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-05-05 13:05:32
-- 服务器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `admin_platform`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_mobile` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL,
  `admin_passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_mobile`, `admin_email`, `admin_role`, `admin_passwords`) VALUES
(1, 'AB', '11111111111', '11111111111@AB.com', 'AB', 'AB11111111111'),
(2, 'BC', '22222222222', '22222222222@BC.com', 'BC', 'BC22222222222'),
(3, 'CD', '33333333333', '33333333333@CD.com', 'CD', 'CD33333333333'),
(4, 'DE', '44444444444', '44444444444@DE.com', 'DE', 'DE44444444444');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Food', 'Covers all kinds of food'),
(2, 'Clothes', 'Covers all kinds of clothes\r\n'),
(3, 'Shoes', 'Covers all kinds of shoes\r\n'),
(4, 'Makeup', 'Covers all kinds of makeup\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_paymethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_mobile`, `customer_email`, `customer_password`, `customer_paymethod`) VALUES
(1, 'AA', '12345678901', '12345678901@AA.com', 'AA12345678901', 'AA12345678901'),
(2, 'BB', '12345678902', '12345678902@BB.com', 'BB12345678902', 'Visa'),
(3, 'CC', '12345678903', '12345678903@CC.com', 'CC12345678903', 'Visa'),
(4, 'DD', '12345678904', '12345678904@DD.com', 'DD12345678904', 'Visa');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT current_timestamp(),
  `order_price` float NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_paymethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_time`, `order_price`, `order_address`, `order_status`, `order_paymethod`) VALUES
(1, 1, '2023-05-04 15:42:46', 99.99, '221B Baker Street, London', 'Shipped', 'ApplePay'),
(2, 2, '2023-05-04 15:42:46', 99.99, '221B Baker Street, London', 'shipped', 'Visa'),
(3, 3, '2023-05-04 15:44:02', 99.99, '221B Baker Street, London', 'Shipped', 'Visa'),
(4, 4, '2023-05-04 15:44:02', 99.99, '221B Baker Street, London', 'Shipped', 'Visa');

-- --------------------------------------------------------

--
-- 表的结构 `order_product`
--

CREATE TABLE `order_product` (
  `op_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `order_product`
--

INSERT INTO `order_product` (`op_id`, `order_id`, `product_id`, `product_quantity`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 4);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_stock`, `product_description`, `product_image`, `product_status`) VALUES
(1, 1, 'Banana', 9.9, 99, 'Pure banana', NULL, NULL),
(2, 2, 'Jacket', 999.99, 999, 'Levis Jacket', NULL, NULL),
(3, 3, 'Boots', 9999.99, 9999, 'Balenciaga Boots', NULL, NULL),
(4, 4, 'Lipstick\r\n', 99.99, 99, 'Makeupforever Lipstick', NULL, NULL);

--
-- 转储表的索引
--

--
-- 表的索引 `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- 表的索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- 表的索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- 表的索引 `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`op_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `order_product`
--
ALTER TABLE `order_product`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 限制导出的表
--

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- 限制表 `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- 限制表 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
