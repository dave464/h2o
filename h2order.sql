-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 11:24 AM
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
(1, 'rangel', 'rangel', 'ivane', 'rangel', 'Brgy. Wawa Nasugbu,Batangas', 'rangelivane@gmail.com', '09051934015'),
(2, 'rangel', 'rangel', 'ivane', 'rangel', 'Brgy. Wawa Nasugbu,Batangas', 'rangelivane@gmail.com', '09051934015'),
(3, 'dave', '111', 'Dave', 'Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@g.batstate-u.edu.ph', '09051934015');

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
(3, 1, 'Dave Bryan Sevilla', 'wewe', 'wewe', 'DBS666', '09051934015'),
(4, 1, 'Dave Bryan Sevilla', 'wawa', 'wawa', 'DBS666', '09051934015'),
(5, 3, 'Dave Bryan Sevilla', 'driver', 'driver', 'DBS666', '09051934015');

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
(1, 'merchant', 'merchant', 'gibuts', 'Dave Bryan P. Sevilla', 'Brgy.4 Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'DM.gif'),
(2, 'merchant', 'merchant', 'gibuts', 'Dave Bryan P. Sevilla', 'Brgy.4 Nasugbu, Batangas', 'sevilladavebryan@gmail.com', '09557350551', 'DM.gif'),
(3, 'seller', 'seller', 'gibuts', 'Kurt Michael Relano', 'Brgy.Bucana Nasugbu, Batangas', 'kurtrelano@gmail.com', '09982334561', 'DM.gif'),
(4, 'seller', 'seller', 'gibuts', 'Kurt Michael Relano', 'Brgy.Bucana Nasugbu, Batangas', 'kurtrelano@gmail.com', '09982334561', 'DM.gif'),
(5, 'seller1', '123', 'mineral', 'Ivane Kielle Rangel', 'Brgy.Wawa Nasugbu, Batangas', 'ivanekielle.rangel@g.batstate-u.edu.ph', '09051934015', 'DM.gif'),
(6, 'seller2', '123', 'TUBIG', 'Dave Bryan Sevilla', 'Brgy.4 Nasugbu, Batangas', 'davebryan.sevilla@gmail.com', '09051934015', 'DM.gif');

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
(1, 1, 'wineral', 'Mineral Water', 150, 'mineralwater_logo.JPG', '1 liters'),
(2, 1, 'asf', 'Purified Water', 120, 'DM.gif', 'jakjsdas'),
(3, 1, 'asf', 'Purified Water', 200, 'DM.gif', 'DSAD'),
(4, 3, 'wineral', 'Distilled Water', 100, 'DM.gif', 'dkja');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `deliveryman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
