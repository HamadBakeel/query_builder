-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 11:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding-academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(10) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Address` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmpName`, `Age`, `Email`, `PhoneNo`, `Address`) VALUES
(1, 'Hamad', 21, 'hamad@g.c', 12344, 'taiz'),
(2, 'ali', 24, 'email@c.c', 34342, 'sanaa'),
(3, 'ali', 24, 'email@c.c', 34342, 'sanaa'),
(4, 'saeed', 24, 'email@c.c', 21212, 'nyc'),
(5, 'jack', 27, 'jack@c.c', 1111, 'sanaa'),
(6, 'sam', 21, 'sam@c.c', 2222, 'arizona'),
(7, 'Mark', 29, 'mark@gmail.com', 88888, 'Texa');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(10) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `ClientID` int(10) NOT NULL,
  `ProjectName` varchar(50) NOT NULL,
  `ProjectStartDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `EmpID`, `ClientID`, `ProjectName`, `ProjectStartDate`) VALUES
(1, 1, 1, 'query builder', '2022-03-01'),
(2, 2, 2, 'whatsapp_clone_2', '2022-11-11'),
(3, 2, 3, 'tariq app', '2021-03-02'),
(4, 2, 4, 'weather app', '2020-12-12'),
(5, 3, 5, 'restaurant app', '2021-04-04'),
(6, 4, 6, 'instagram clone', '2019-03-12'),
(7, 4, 7, 'twitter clone', '2019-03-12'),
(8, 88, 8, 'snapchat clone', '2019-03-12'),
(9, 99, 9, 'facebook clone', '2019-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`),
  ADD KEY `Employee_Project` (`EmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
