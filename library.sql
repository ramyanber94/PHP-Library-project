-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2021 at 12:26 AM
-- Server version: 8.0.23
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `BookID` int NOT NULL AUTO_INCREMENT,
  `Authour_Name` varchar(45) NOT NULL,
  `Book_Title` varchar(45) NOT NULL,
  `ISBN` bigint NOT NULL,
  `Category` varchar(50) NOT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `Authour_Name`, `Book_Title`, `ISBN`, `Category`) VALUES
(1, 'Travel', 'Around the world', 1216156, 'Action and Adventure'),
(4, 'Ramy', 'sameer', 25412541, 'Classics'),
(5, 'test4', 'test2', 678839506903, '[Ljava.lang.Object;@57aa666');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Passoward` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Customer_Name`, `Email`, `Passoward`) VALUES
(19, 'Ramy Anber', 'ramyanber@gmail.com', 'Ra01153832544'),
(20, 'ahmed moataaz', 'ahmed@gmail.com', 'ahmed'),
(22, 'noni', 'Norhan@gmail.com', '123'),
(23, 'samia', 'samia@gmail.com', '2154'),
(24, 'Koko', 'Koko@gmail.com', '2556'),
(25, 'Sara', 'sara@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `Book_BookID` int NOT NULL,
  `Customer_CustomerID` int NOT NULL,
  PRIMARY KEY (`Book_BookID`,`Customer_CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
