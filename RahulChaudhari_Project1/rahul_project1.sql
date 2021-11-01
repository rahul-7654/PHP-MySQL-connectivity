-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 02:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahul_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `BookID` int(11) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `BookImage` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`BookID`, `BookName`, `BookImage`, `Quantity`) VALUES
(6, 'Programming in C', 'https://images-na.ssl-images-amazon.com/images/I/61jRrvKXV0L.jpg', 9),
(7, 'PHP: The Complete Reference', 'https://images-na.ssl-images-amazon.com/images/I/41QgxNP8WmL._SX403_BO1,204,203,200_.jpg', 18),
(8, 'Java 8 Programming Black Book', 'https://www.wileyindia.com/pub/media/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/9/7/9789351197584.jpg', 14),
(9, 'Programming with Java | 6th Edition', 'https://images-na.ssl-images-amazon.com/images/I/5172ZMKIMfL.jpg', 7),
(10, 'Beginning Programming with Java for Dummies, 5ed', 'https://images-na.ssl-images-amazon.com/images/I/518EPxh5gxL._SX258_BO1,204,203,200_.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `bookinventoryorder`
--

CREATE TABLE `bookinventoryorder` (
  `orderID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `PaymentOption` varchar(255) NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventoryorder`
--

INSERT INTO `bookinventoryorder` (`orderID`, `FirstName`, `LastName`, `Address`, `Telephone`, `EmailAddress`, `PaymentOption`, `BookID`) VALUES
(1, 'Rahul', 'Chaudhari', '333 King street North\r\nWaterloo', '5199713005', 'rahul7654.chaudhari@gmail.com', 'creditCard', 7),
(2, 'Rahul', 'Chaudhari', 'Unit 405 333 King street North\r\nWaterloo', '15199713005', 'rahul7654.chaudhari@gmail.com', 'debitCard', 7),
(3, 'Ishan', 'Mehta', '255 Lester Street ', '5199756008', 'ishanmehta@gmail.com', 'payPal', 8),
(4, 'Pujal', 'Barot', '256 Albert St ', '5194567890', 'pujalbarot@yahoo.com', 'cash', 6),
(5, 'Shweta ', 'Gamit', '566 Moon Palace Rd ', '6485197846', 'shwetagamit@gmail.com', 'creditCard', 9),
(6, 'Arjun', 'Chaudhari', '765 Gurukrupa Row House ', '5197564897', 'arjunchaudhari@gmail.com', 'debitCard', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `bookinventoryorder`
--
ALTER TABLE `bookinventoryorder`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookinventoryorder`
--
ALTER TABLE `bookinventoryorder`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
