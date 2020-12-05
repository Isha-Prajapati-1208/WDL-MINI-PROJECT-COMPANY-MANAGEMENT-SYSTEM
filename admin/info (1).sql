-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 08:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `emailid` varchar(20) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `contact_number` int(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `degree` varchar(15) DEFAULT NULL,
  `salary` int(8) NOT NULL,
  `date_of_joining` date NOT NULL,
  `aadhar_card_number` int(12) DEFAULT NULL,
  `martial_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `emailid`, `date_of_birth`, `gender`, `contact_number`, `address`, `department`, `degree`, `salary`, `date_of_joining`, `aadhar_card_number`, `martial_status`) VALUES
(2, 'Isha', 'Prajapati', 'ishap@gmail.com', '2020-09-10', 'Female', 1213455666, 'Blsidf/012e', 'Data', 'BE', 25000, '2020-09-10', 2147483647, 'maritial_s'),
(4, 'Shreya', 'Patil', 'sp@gmail.com', '2020-09-04', 'Female', 2147483647, 'Blsidf/012e', 'Data', 'BE', 25000, '2020-10-01', 2147483647, 'maritial_s'),
(6, 'Shubham', 'Patil', 'shubham@patil.com', '2020-09-02', 'Male', 2147483647, 'asde3455/gt', 'Accounts', 'Bcom', 15000, '2022-08-25', 2147483647, 'maritial_s'),
(7, 'Harsh', 'Patel ', 'hp@gmail.com', '2013-01-15', 'Male', 2147483647, 'Dlahye5/kjgd', 'Finance', 'Bcom', 30000, '2020-09-30', 2147483647, 'maritial_s'),
(8, 'Vrunda', 'Patel', 'vp@vmail.com', '2011-07-15', 'Female', 2147483647, 'Vlo098/ksh', 'Data clean', 'BE', 25000, '2020-10-09', 2147483647, 'maritial_s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
