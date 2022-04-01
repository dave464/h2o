-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 11:31 AM
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
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `message`, `date`) VALUES
(1, 'sadasdhua dahsdhasdas dashudhasuda bdhasdhas dbshadbhsa dsahduhas dhsahdsad sbdhasbdha dhabdhas bdhsabhdsabhdsa bsahdbhabdhsabd bdhasbdhasbhda bdhasbdhabdhabdhas bdhsabdhasbhdasbdsa bdhasbdhasbdhasbdhsa dbhsabdhasbdhasb bdhsabdhsabdhsabhda bdhsabdhabdhas ', '2022-03-01 14:19:04'),
(2, '  dasYes, I am not sure how to build the link string that would pass the prop_id=[current_id_value] variable. I typed the prop_id=5 as an example, technically it could be any number. I am guessing there is a way to get the variable from the MySQL database, but once I get it, how do it build the link. Thanks again :)vsadsabdhsabhdashdvasvdgavda dgashsdghag dgashgdha d ghasgdhaj d', '2022-03-02 10:37:10'),
(3, '  hi', '2022-03-01 12:26:57'),
(7, '      dasdas                      ', '2022-03-18 12:52:51');

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
(1, 1, 'Passed', '2022-03-19 19:29:27'),
(2, 2, 'Passed', '2022-03-19 02:05:12');

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
  `contact_number` varchar(255) NOT NULL,
  `c_latitude` varchar(255) NOT NULL,
  `c_longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `contact_number`, `c_latitude`, `c_longitude`) VALUES
(3, 'dave', '111', 'Dave', 'Sevilla', 'Brgy.Talangan Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '09051934015', '14.035020', '120.652878'),
(4, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty@gmail.com', '09666473909', '14.0722928', '120.6308971'),
(5, 'qwerty2', 'qwerty', 'qwerty2', 'qwerty2', '123 street', 'qwerty2@gmail.com', '12345', '14.0722928', '120.6308971');

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
  `contact_number` varchar(255) NOT NULL,
  `vaccination_status` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `d_latitude` varchar(255) NOT NULL,
  `d_longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`deliveryman_id`, `merchant_id`, `name`, `username`, `password`, `plate_number`, `contact_number`, `vaccination_status`, `photo`, `d_latitude`, `d_longitude`) VALUES
(5, 3, 'Dave Bryan Sevilla', 'driver123', 'driver', 'DBS666', '09051934015', '', '', '', ''),
(6, 1, 'qwerty', 'del1', 'del1', '123', '123', 'Unvaccinated', 'customer.png', '14.073195', '120.635208'),
(7, 2, 'del3', 'del3', 'del3', '123', '123', '', '', '', ''),
(11, 1, 'Dave Sevilla', 'driver123', '123', 'DBS666', '905193401', '', '', '', ''),
(12, 1, 'Dave Bryan Sevilla', 'driver4', '123', 'DBS666', '0905193401', '', '', '', ''),
(15, 3, 'Dave Bryan Sevilla', 'dave2131', '123', 'DBS666', '905193401', '', '', '', ''),
(17, 1, 'das', 'sasa', '123', '3fsd1', '132321', '', 'accset.webp', '', ''),
(18, 1, '312', 'davee', '123', 'kjoa3', 'e16318', '', 'register.webp', '', ''),
(20, 1, 'lala', 'lala', '123', 'gagas', '391391', '', 'vcard.jpeg', '14.3114', '121.0554');

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
(1, 1, '2022-02-28 03:15:52', 'Passed'),
(2, 1, '2022-03-19 07:22:11', 'Passed');

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
  `image` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `opening` time NOT NULL,
  `closing` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`merchant_id`, `username`, `password`, `business_name`, `owner`, `address`, `email`, `contact_number`, `image`, `latitude`, `longitude`, `opening`, `closing`) VALUES
(1, 'merchant', 'merchant', 'Aquabest', 'Dave Bryan P. Sevilla', 'Brgy.4 Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'a1.jfif', '14.040672893673618', '120.6573486328125', '08:00:00', '17:00:00'),
(2, 'merchant1', 'merchant2', 'Triple S Water Refilling Station', 'Dave Bryan P. Sevilla', 'Brgy.Wawa Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'a2.jpg', '14.6760413', '121.0437003', '00:00:00', '00:00:00'),
(3, 'bryan23', '123', 'tutubig g', 'dave bryan sevilla', 'brgy 4. Nasugbu, Batangas', 'davebryan.sevilla@yahoo.com', '09051934015', 'a3.jpg', '14.073133', '120.63533', '00:00:00', '00:00:00'),
(8, 'br', '1', 'Water for Less', 'Ivane Kielle Rangel', 'Brgy.Wawa Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '09051934315', 'h2logo.png', '14.073165', '120.635223', '08:00:00', '17:00:00'),
(9, 'dave123', '123', 'N/A', 'Dave Bryan Sevilla', 'Brgy.Malapad na Bato Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '9051934014', 'a1.jfif', '14.584937', '120.977936', '12:37:00', '14:37:00');

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
(1, 1, 3, 1, NULL, 'accepted', '7', 175, 'cod', NULL, '2022-03-26 01:56:20'),
(2, 1, 3, 1, 6, 'delivered', '7', 175, 'gcash', 'inbound2059477790076521533.jpg', '2022-03-27 02:07:28'),
(3, 4, 3, 1, 6, 'delivered', '10', 300, 'cod', NULL, '2022-03-28 07:08:31'),
(4, 1, 3, 1, 6, 'delivered', '1', 25, 'cod', NULL, '2022-03-24 16:00:00'),
(5, 1, 3, 1, 6, 'delivered', '1', 25, 'cod', NULL, '2022-03-23 16:00:00'),
(6, 1, 3, 1, 6, 'dispatched', '1', 25, 'cod', NULL, '2022-03-22 16:00:00'),
(7, 4, 3, 1, 6, 'dispatched', '1', 25, 'cod', NULL, '2022-03-21 16:00:00'),
(8, 1, 3, 1, 6, 'dispatched', '2', 30, 'cod', NULL, '2022-03-20 16:00:00'),
(9, 1, 3, 1, 6, 'delivered', '2', 30, 'cod', NULL, '2022-03-25 16:00:00');

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
(1, 1, 'Aquabest 25 liters', 'Purified Water', 25, 'images (4).jpeg', '25 liters'),
(2, 2, 'WAWA', 'WAWA', 20, 'roundgal.png', 'FJDHJF'),
(3, 2, 'WAWA', 'WAWA', 20, 'images (4).jpeg', 'FJDHJF'),
(4, 1, 'Round Container', 'Mineral Water', 30, 'roundgal.png', '5 gallons');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `rate_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` varchar(11) NOT NULL,
  `comment` text NOT NULL,
  `w_facemask` varchar(255) NOT NULL,
  `c_uniform` varchar(255) NOT NULL,
  `on_time` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`rate_id`, `customer_id`, `merchant_id`, `product_id`, `rating`, `comment`, `w_facemask`, `c_uniform`, `on_time`, `date`) VALUES
(1, 3, 1, 1, '5', 'Wow Amazing', '', '', '', '2022-03-21 09:26:28'),
(2, 3, 1, 1, '1', 'Great', '', '', '', '2022-03-21 09:22:46'),
(3, 3, 1, 1, '2', 'Lasang tubig', '', '', '', '2022-03-21 09:27:04'),
(4, 3, 1, 1, '3', 'Bibili ulit ako mga 10', '', '', '', '2022-03-21 09:27:25'),
(5, 3, 1, 1, '4', 'Let pacquiao lead the prayer', '', '', '', '2022-03-21 09:28:20'),
(6, 3, 1, 4, '2', 'eqweq', 'Yes', 'Yes', 'Yes', '2022-03-23 10:11:56');

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
(1, 1, 3, 1, 6, 7, 175, '2022-03-22 02:14:09'),
(2, 1, 3, 1, 6, 7, 175, '2022-03-22 02:14:13');

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
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`rate_id`);

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
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `badge`
--
ALTER TABLE `badge`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `deliveryman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `inspection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
