-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 11:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `PID` int(10) NOT NULL,
  `UID` int(10) NOT NULL,
  `quantity` int(20) NOT NULL,
  `amount` int(50) NOT NULL,
  `CID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`PID`, `UID`, `quantity`, `amount`, `CID`) VALUES
(1, 1, 1, 70, 1),
(1, 1, 2, 140, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CID` int(10) NOT NULL,
  `categoryname` varchar(25) NOT NULL,
  `categorydescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CID`, `categoryname`, `categorydescription`) VALUES
(1, 'snakes', 'frweshg'),
(2, 'Beverages', 'get a best Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `name`, `email`, `COMMENT`) VALUES
(1, 'Roshan Chouhan', 'roshanchouhan29@gmail.com', 'its to good');

-- --------------------------------------------------------

--
-- Table structure for table `order table`
--

CREATE TABLE `order table` (
  `OID` int(10) NOT NULL,
  `paymentmethod` varchar(40) NOT NULL,
  `ordertime` date NOT NULL,
  `billingid` int(40) NOT NULL,
  `amount` int(10) NOT NULL,
  `shipping` text NOT NULL,
  `UID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(10) NOT NULL,
  `product_name` varchar(56) NOT NULL,
  `units` int(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `weight` int(10) NOT NULL,
  `CID` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `product_name`, `units`, `image`, `weight`, `CID`, `price`, `product_description`) VALUES
(1, 'Apple', 100, 'apple.webp', 1, 2, 70, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `AID` int(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `first_name`, `last_name`, `username`, `AID`, `emailid`, `mobile_number`, `password`) VALUES
(1, 'roshan', 'chouhan', '', 1, 'roshanchouhan29@gmail.com', 2147483647, 'd6dfb33a2052663df81c35e5496b3b1b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `order table`
--
ALTER TABLE `order table`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order table`
--
ALTER TABLE `order table`
  MODIFY `OID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
