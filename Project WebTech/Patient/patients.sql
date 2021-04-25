-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patients`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `Serial No` int(50) NOT NULL,
  `Patient Name` varchar(70) NOT NULL,
  `Patient Problem` text NOT NULL,
  `Patient Email` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Cinfirm Password` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Email`, `Username`, `Password`, `Cinfirm Password`, `Age`, `Gender`, `Date`) VALUES
(1, 'Mahin', 'mahin@gmail.com', 'Mahin', 'mahin@#$%', 'mahin@#$%', 0, 'Male', '2021-04-13 06:52:46'),
(2, 'Mahdi', 'mahdi@gmail.com', 'mahdi', 'mahdi@#$%', 'mahdi@#$%', 0, 'Male', '2021-04-13 07:40:47'),
(3, 'Ahmed Miah', 'ahmed@gmail.com', 'Ahmed', 'ahmed%$#@', 'ahmed%$#@', 0, 'Male', '2021-04-13 07:43:41'),
(4, 'Rahim', 'rahim@gmail.com', 'Mahdi', 'rahim@#$%', 'rahim@#$%', 0, 'Male', '2021-04-15 10:31:34'),
(6, '', '', '', '', '', 0, '', '2021-04-15 12:24:29'),
(7, 'Ramim', 'ramim@gmail.com', 'Ramim', 'ramim@#$%', 'ramim@#$%', 0, 'Male', '2021-04-15 12:27:51'),
(8, 'Rahim', 'rahim@gmail.com', 'Rahim', 'rahim@#$%', 'rahim@#$%', 0, 'Male', '2021-04-15 14:17:30'),
(9, 'Ramjan', 'ramjan@gmail.com', 'Ramjan', 'ramjan@#$%', 'ramjan@#$%', 0, 'Male', '2021-04-18 06:23:24'),
(10, 'Rahman', 'rahman@gmail.com', 'Rahman', 'rahman@#$%', 'rahman@#$%', 0, 'Male', '2021-04-20 01:01:26'),
(11, 'Shahria', 'shahria@gmail.com', 'Shahria', 'shahria@#$%', 'shahria@#$%', 0, 'Male', '2021-04-20 14:55:39'),
(12, 'Shahria', 'shahria@gmail.com', 'Shahria', 'shahria@#$%', 'shahria@#$%', 0, 'Male', '2021-04-20 15:41:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`Serial No`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `Serial No` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
