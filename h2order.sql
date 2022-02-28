-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 04:19 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h2order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `photo`) VALUES
(63, 'Dave Bryan Sevilla', 'admin', 'admin', 'admin.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `message`) VALUES
(1, 'dasdsada'),
(2, 'dasdsada'),
(3, 'sdsds'),
(4, 'xsxsxsxs'),
(5, 'zazaza'),
(6, 'xsxsxsxssss ssdd'),
(7, ' pre-oral'),
(8, ''),
(9, ''),
(10, ''),
(11, 'nvcvv cfxfcf fg yg gh ghgh ghv gu '),
(12, 'jjj'),
(13, ' Announcement: INC muna tayo ngayon'),
(14, 'hghg'),
(15, 'hghg'),
(16, 'yuyu'),
(17, ''),
(18, ''),
(19, 'dbfnsnfsndfnsdfnds'),
(20, ''),
(21, '  dasd');

-- --------------------------------------------------------

--
-- Table structure for table `badge`
--

CREATE TABLE `badge` (
  `badge_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badge`
--

INSERT INTO `badge` (`badge_id`, `merchant_id`, `status`, `date`) VALUES
(1, 1, 'Passed', '2022-02-28 03:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number_of_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `number_of_items`) VALUES
(2, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `contact_number`) VALUES
(3, 'dave', '111', 'Dave', 'Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '09051934015'),
(4, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty@gmail.com', '09666473909'),
(5, 'qwerty2', 'qwerty', 'qwerty2', 'qwerty2', '123 street', 'qwerty2@gmail.com', '12345'),
(8, 'Bryan', '123', '', '', 'Brgy.4 Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09051934015'),
(9, 'Bryan123', '123', 'Dave', 'Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '09051934015'),
(10, 'dave', '', 'Dave', 'Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '905193401'),
(11, 'dave', 'dave', 'Kurt', 'Relano', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '0905193401'),
(12, 'dave', '2222', 'Dave', 'Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '905193401'),
(13, '', '', '', '', '', '', ''),
(14, 'dave', '', 'Dave', 'Bryan', 'Brgy.4 Nasugbu, Batangas', 'admin@gmail.com', '0905193401'),
(15, 'dave123', '123', 'Dave', 'Bryan', 'Brgy.4 Nasugbu, Batangas', 'admin@gmail.com', '09051934015');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `deliveryman_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`deliveryman_id`, `merchant_id`, `name`, `username`, `password`, `plate_number`, `contact_number`) VALUES
(5, 3, 'Dave Bryan Sevilla', 'driver123', 'driver', 'DBS666', '09051934015'),
(6, 1, 'qwerty', 'del1', 'del1', '123', '123'),
(7, 2, 'del3', 'del3', 'del3', '123', '123'),
(11, 0, 'Dave Sevilla', 'driver123', '123', 'DBS666', '905193401'),
(12, 0, 'Dave Bryan Sevilla', 'driver4', '123', 'DBS666', '0905193401'),
(15, 3, 'Dave Bryan Sevilla', 'dave2131', '123', 'DBS666', '905193401');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `critea_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `merchant_id`, `date`, `critea_1`) VALUES
(1, 1, '2022-02-28', '3');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `inspection_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`inspection_id`, `merchant_id`, `date`, `status`) VALUES
(1, 1, '2022-02-28 03:15:52', 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `merchant_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`merchant_id`, `username`, `password`, `business_name`, `owner`, `address`, `email`, `contact_number`, `image`) VALUES
(1, 'merchant', 'merchant', 'Aquabest', 'Dave Bryan P. Sevilla', 'Brgy.4 Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'DM.gif'),
(2, 'merchant1', 'merchant2', 'gibuts', 'Dave Bryan P. Sevilla', 'Brgy.Wawa Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'DM.gif');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `deliveryman_id` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  `quantity` text NOT NULL,
  `total` int(11) NOT NULL,
  `type` text,
  `photo` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`order_id`, `product_id`, `customer_id`, `merchant_id`, `deliveryman_id`, `status`, `quantity`, `total`, `type`, `photo`, `date`) VALUES
(1, 1, 3, 1, 6, 'delivered', '3', 75, 'cod', NULL, '2022-02-14 05:57:55'),
(2, 1, 3, 1, 6, 'delivered', '7', 175, 'cod', NULL, '2022-02-14 06:45:04'),
(3, 1, 3, 1, 6, 'delivered', '2', 50, 'cod', NULL, '2022-02-14 09:04:16'),
(4, 1, 3, 1, 6, 'ready', '2', 50, 'cod', NULL, '2022-02-14 14:19:19'),
(5, 1, 3, 1, 6, 'delivered', '3', 75, 'gcash', 'a2.jpg', '2022-02-15 02:38:28'),
(6, 1, 3, 1, NULL, 'pending', '2', 50, 'gcash', 'a1.jfif', '2022-02-15 02:43:52'),
(7, 1, 3, 1, NULL, 'pending', '3', 75, 'gcash', 'water.jpg', '2022-02-15 02:44:41'),
(8, 1, 3, 1, 6, 'delivered', '9', 225, 'gcash', 'images (4).jpeg', '2022-02-15 03:49:52'),
(9, 1, 3, 1, NULL, 'pending', '5', 125, 'gcash', 'a1.jfif', '2022-02-15 03:53:31'),
(10, 1, 3, 1, 6, 'ready', '2', 50, 'cod', NULL, '2022-02-16 09:20:41'),
(11, 1, 3, 1, 6, 'delivered', '2', 50, 'gcash', 'a2.jpg', '2022-02-16 14:45:56'),
(12, 1, 3, 1, NULL, 'pending', '10', 250, 'cod', NULL, '2022-02-22 02:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `merchant_id`, `product_name`, `product_type`, `price`, `image`, `description`) VALUES
(1, 1, 'Aquabest 25 liters', 'Purified Water', 25, 'images (4).jpeg', '25 liters');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `deliveryman_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `product_id`, `customer_id`, `merchant_id`, `deliveryman_id`, `quantity`, `total`, `date`) VALUES
(1, 1, 3, 1, 6, 3, 75, '2022-02-14 05:59:33'),
(2, 1, 3, 1, 6, 7, 175, '2022-02-14 13:14:23'),
(3, 1, 3, 1, 6, 2, 50, '2022-02-14 13:17:38'),
(4, 1, 0, 1, 6, 9, 225, '2022-02-16 03:21:54'),
(5, 1, 0, 1, 6, 3, 75, '2022-02-16 03:22:02'),
(6, 1, 3, 1, 6, 2, 50, '2022-02-16 14:46:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `badge`
--
ALTER TABLE `badge`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`deliveryman_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`inspection_id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `badge`
--
ALTER TABLE `badge`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `deliveryman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `inspection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
