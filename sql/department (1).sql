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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(20) NOT NULL,
  `workline_id` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `department_thai` varchar(255) NOT NULL,
  `department_eng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `workline_id`, `department_id`, `department_thai`, `department_eng`) VALUES
(1, 1, 1, 'ส่วนการเงิน', 'Finance'),
(2, 1, 2, 'ส่วนการเงิน และส่วนธุรการ', 'Financial and Administration'),
(3, 2, 1, 'ส่วนการจ่ายสินไหม', 'Claim Payment'),
(4, 3, 1, 'ส่วนการตลาดธุรกิจ 1', 'Business Development 1'),
(5, 3, 2, 'ส่วนการตลาดธุรกิจ 2', 'Business Development 2'),
(6, 3, 3, 'ส่วนการตลาดธุรกิจ 3', 'Business Development 3'),
(7, 3, 4, 'ส่วนการตลาดธุรกิจ 4', 'Business Development 4'),
(8, 1, 3, 'ส่วนทรัพยากรบุคคล', 'Human Resource');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
