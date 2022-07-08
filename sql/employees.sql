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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `fname_thai` varchar(255) NOT NULL,
  `lname_thai` varchar(255) NOT NULL,
  `fname_eng` varchar(255) NOT NULL,
  `lname_eng` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `floor_` int(20) NOT NULL,
  `extn` varchar(25) NOT NULL,
  `usermail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `workgroup` varchar(255) NOT NULL,
  `workline` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_eng` varchar(255) NOT NULL,
  `status_user` varchar(255) NOT NULL,
  `station` varchar(255) NOT NULL,
  `times` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `fname_thai`, `lname_thai`, `fname_eng`, `lname_eng`, `nickname`, `floor_`, `extn`, `usermail`, `phone`, `sex`, `workgroup`, `workline`, `department`, `department_eng`, `status_user`, `station`, `times`) VALUES
(9, '999996', 'กรธัสส์', 'พาพา', 'kornthas', 'panichhhh', 'แม้ก', 16, '456', 'maxmax@dmd.com', '+66-259-987-7', 'male', '1', '1', '1', 'Financial', 'Active', 'Head-Station', '2022-06-29 06:51:03'),
(10, '999999', 'พฤกษ์', 'พาพา', 'nattasitt', 'panichhhh', 'ณฐ', 24, '569', 'zeecool@dmd.com', '+66-259-987-3', 'male', '2', '1', '5', 'segarehth', 'Active', 'Co-Station', '2022-06-29 08:37:56'),
(11, '999999', 'พฤกษ์', 'พานิช', 'pruek22', 'panichhhh', 'ซี', 15, '456', 'zeecool@dmd.com', '+66-259-987-4', 'male', '1', '3', '8', 'Human-resource', 'Active', 'Head-Station', '2022-06-29 08:48:48'),
(12, '456789', 'อัญชัญ', 'จำปา', 'pruek22', 'ำดฟำพดก', 'ซี', 15, '569', 'maxmax@dmd.com', '+66-259-987-0', 'male', '1', '2', '2', 'ดก\"ฎโ\"ฎฌโ', 'Active', 'Head-Station', '2022-06-29 09:05:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
