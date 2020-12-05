-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `firstname`, `lastname`, `emailid`, `contact_number`, `company`, `product`, `product_description`) VALUES
(2, 'Client', 'name', 'abc@gmail.com', '1234567890', 'company', 'product 1', 'descriptionnn'),
(3, 'Vrunda', 'Patel', 'vrunda.patel@gmail.com', '34566324', 'Google', 'Itemsss', 'Itemmsss Description.......'),
(4, 'First', 'Lastname', 'email@email.com', '123456789', 'xyzabc', 'abc', 'abcdefgh'),
(6, 'First', 'Last', 'email1@email.com', '123245678', 'xyz', 'bcd', 'abcdefgh'),
(7, 'client name', 'surname1', 'test@gmail.com', '91234567', 'tets1234', 'product2', 'abcdefgh'),
(8, 'Shreya', 'Patil', 'shreya@gmail.com', '234567', 'Company', 'Papers', 'description...');

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
  `department` varchar(50) DEFAULT NULL,
  `degree` varchar(15) DEFAULT NULL,
  `salary` int(20) NOT NULL,
  `date_of_joining` date NOT NULL,
  `aadhar_card_number` int(20) DEFAULT NULL,
  `martial_status` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'xyz123#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `emailid`, `date_of_birth`, `gender`, `contact_number`, `address`, `department`, `degree`, `salary`, `date_of_joining`, `aadhar_card_number`, `martial_status`, `password`) VALUES
(2, 'Isha', 'Prajapati', 'ishap@gmail.com', '2020-09-10', 'Female', 1213455666, 'Blsidf/012e', 'Data', 'BE', 250000, '2020-09-10', 2147483647, 'unmarried', 'xyz123#'),
(4, 'Shreya', 'Patil', 'sp@gmail.com', '2020-09-04', 'Female', 2147483647, 'Blsidf/012e', 'Data', 'BE', 25000, '2020-10-01', 2147483647, 'Unmarried', 'xyz123#'),
(6, 'Shubham', 'Patil', 'shubham@patil.com', '2020-09-02', 'Male', 2147483647, 'asde3455/gt', 'Accounts', 'Bcom', 15000, '2022-08-25', 2147483647, 'Unmarried', 'xyz123#'),
(7, 'Harsh', 'Patel ', 'hp@gmail.com', '2013-01-15', 'Male', 2147483647, 'Dlahye5/kjgd', 'Finance', 'Bcom', 30000, '2020-09-30', 2147483647, 'maritial_s', 'xyz123#'),
(8, 'Vrunda', 'Patel', 'vp@vmail.com', '2011-07-15', 'Female', 2147483647, 'Vlo098/ksh', 'Data clean', 'BE', 25000, '2020-10-09', 2147483647, 'maritial_s', 'xyz123#'),
(14, 'First', 'Lastname', 'email@email.com', '2000-12-08', 'Female', 1234567890, 'address', 'Accounts', 'xyz', 20000, '2020-11-06', 2147483647, 'Unmarried', 'xyz123#'),
(21, 'First', 'Ln', 'b@g.com', '2020-10-26', 'Female', 2147483647, 'address', 'Supplier', 'xyz', 12345, '2020-11-23', 2147483647, 'Unmarried', 'supplier'),
(22, 'name', 'surname', 'name@gmail.com', '2020-11-25', 'Female', 123456789, 'address123', 'Supplier', 'xyz', 234567, '2020-11-25', 2147483647, 'Unmarried', 'supplier1'),
(23, 'Tanvi', 'Mehta', 'tanvi@gmail.com', '2000-02-25', 'Female', 1234567809, 'abc building, 304, kt village road , vasai west', 'Supplier', 'Bcom', 15000, '2020-11-05', 2147483647, 'Unmarried', 'xyz123#');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `batteries` int(255) NOT NULL,
  `bulbs` int(255) NOT NULL,
  `lanterns` int(255) NOT NULL,
  `total_sales` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `emp_id`, `client_id`, `batteries`, `bulbs`, `lanterns`, `total_sales`) VALUES
(1, 1, 4, 0, 0, 0, 0),
(2, 2, 5, 0, 0, 0, 0),
(3, 3, 6, 0, 0, 0, 0),
(4, 2, 3, 4, 4, 4, 12),
(5, 3, 2, 6, 6, 6, 18),
(6, 2, 4, 7, 8, 9, 24);

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `trigger_total_sales` BEFORE INSERT ON `sales` FOR EACH ROW set New.total_sales = New.bulbs + New.batteries + New.lanterns
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_id`, `name`, `product`, `product_desc`, `client_name`, `quantity`, `amount`, `proof`) VALUES
(11, 21, 'Isha Prajapati', 'abc', 'abcdef', 'Vrunda Patel', 10, 1000, 'proof/images.jfif'),
(12, 22, 'name surname', 'abc', 'abcdef', 'client name surname1', 10, 1000, 'proof/receipt.png'),
(13, 21, 'Isha Prajapati', 'bcd', 'abcdef', 'Shreya Patil', 10, 1000, 'proof/receipt.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
