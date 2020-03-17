-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 10:11 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datab`
--
CREATE DATABASE IF NOT EXISTS `datab` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `datab`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Password`, `FName`, `LName`) VALUES
('admin', '159753', 'X', 'X'),
('eiei', 'eiei', 'eiei', 'eiei'),
('mini', '123', 'wow', 'eiei'),
('pudjapu', '123', 'p', 'w'),
('sosad', '123', 'PP', 'TT'),
('w33', 'w33', 'w33', 'w33');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `ID` varchar(20) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `ProductID` varchar(30) NOT NULL,
  `Status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`ID`, `FName`, `LName`, `ProductName`, `ProductID`, `Status`) VALUES
('eiei', 'eiei', 'eiei', 'TY', '123', 'W'),
('mini', 'wow', 'eiei', 'TV', '459874562', 'W'),
('mini', 'wow', 'eiei', 'TV', 'mama', 'W'),
('eiei', 'eiei', 'eiei', 'RPG', 'RPG', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status`, `Name`) VALUES
('P', 'พร้อมรับสินค้า'),
('S', 'รับสินค้าแล้ว'),
('T', 'กำลังจัดส่ง'),
('W', 'กำลังซ่อม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `Status` (`Status`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_1` FOREIGN KEY (`Status`) REFERENCES `status` (`Status`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
