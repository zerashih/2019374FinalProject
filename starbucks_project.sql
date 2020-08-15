-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 11:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbucks_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Create a table for admin';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `username`, `password`) VALUES
(1, 'admin1@gmail.com', 'Zera', '0412');

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `beverage_id` int(11) NOT NULL,
  `beverage_name` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `add-ins` varchar(45) DEFAULT NULL,
  `price` float NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`beverage_id`, `beverage_name`, `size`, `add-ins`, `price`, `type`, `image`) VALUES
(2, 'Caffè Americano', 'Tall', NULL, 3, 'Hot Coffees ', ''),
(3, 'Caramel Macchiato', 'Tall', NULL, 4.1, 'Hot Coffees ', ''),
(4, 'Smores Frappuccino', 'Tall', NULL, 4.3, 'Blended Beverages', ''),
(5, 'Iced Tea Lemonade', 'Grande', NULL, 4.1, 'Iced Teas', ''),
(6, 'English Breakfast Tea', 'Venti', NULL, 3.1, 'Hot Teas', ''),
(7, 'Cold Brew Coffee', 'Venti', NULL, 4.85, 'Iced Coffees', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `customer_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table cart for sorting customer orders';

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='information of our customers';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Darragh', 'customer1@gmail.com', 871179156, 'customer1'),
(2, 'Millie', 'customer2@gmail.com', 873861151, 'customer2');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Open',
  `type` varchar(45) NOT NULL DEFAULT 'Others',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `deleted`) VALUES
(1, 'Item 1', 25, 1),
(2, 'Item 2', 45, 0),
(3, 'Item 3', 20, 0),
(4, 'Item 4', 15, 1),
(5, 'Item 5', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(10) NOT NULL,
  `cust_name` varchar(45) NOT NULL,
  `cust_email` varchar(45) NOT NULL,
  `cust_mobile` varchar(45) NOT NULL,
  `cust_msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='customers message when doing their orders';

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `price` double DEFAULT NULL,
  `invoice_id_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob_phone` varchar(45) NOT NULL,
  `job_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='information of our partners';

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `password`, `email`, `mob_phone`, `job_title`) VALUES
(1, 'Ionela', 'Phoneix', 'staff1', 'staff1@gmail.com', '0851271963', 'Senior Barista'),
(2, 'Giuseppe ', 'Immanose', 'staff2', 'staff2@gmail.com', '0871121345', 'Supervisior'),
(3, 'Catalina', 'Diego', 'staff3', 'staff3@gmail.com', '0893459987', 'Supervisor'),
(4, 'Diana', 'Mexi', 'staff4', 'staff4@gmail.com', '0863349845', 'Barista');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'Customer',
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact` bigint(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `email`, `contact`, `verified`, `deleted`) VALUES
(1, 'Admin', 'Admin1', 'Zera', '0412', NULL, 873861151, 1, 0),
(2, 'Customer', 'Customer1', 'User1', 'pass1', 'customer1@gmail.com', 891679156, 1, 0),
(3, 'Customer', 'Customer2', 'User2', 'pass2', 'customer2@gmail.com', 891679456, 1, 0),
(4, 'Customer', 'Customer3', 'User3', 'pass3', 'customer3@gmail.com', 0, 0, 0),
(5, 'Customer', 'Customer4', 'User4', 'pass4', 'customer4@gmail.com', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `beverage`
--
ALTER TABLE `beverage`
  ADD PRIMARY KEY (`beverage_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
