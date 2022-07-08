-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 10:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `display`
--

-- --------------------------------------------------------

--
-- Table structure for table `other_device`
--

CREATE TABLE `other_device` (
  `id` int(10) NOT NULL,
  `device_no` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `device_status` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_device`
--

INSERT INTO `other_device` (`id`, `device_no`, `device_name`, `device_type`, `device_status`, `create_at`) VALUES
(2, '4584444', 'ASDEFCVRTDW', 'Mouse', 'Active', '2022-06-06 04:49:00'),
(3, '4582576', 'FFFEFCVRTDW', 'Keyboard', 'Active', '2022-06-06 04:49:21'),
(4, '7896525', 'PSDEFCVRTDW', 'Mouse', 'Active', '2022-06-06 04:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_device`
--
ALTER TABLE `other_device`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_device`
--
ALTER TABLE `other_device`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
