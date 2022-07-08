-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 10:31 AM
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
-- Table structure for table `repair_notices`
--

CREATE TABLE `repair_notices` (
  `id` int(10) NOT NULL,
  `rn_no` varchar(255) NOT NULL,
  `rn_dn` varchar(255) NOT NULL,
  `rn_date` varchar(255) NOT NULL,
  `rn_status` varchar(255) NOT NULL,
  `rn_des` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repair_notices`
--

INSERT INTO `repair_notices` (`id`, `rn_no`, `rn_dn`, `rn_date`, `rn_status`, `rn_des`, `create_at`) VALUES
(1, 'SEGeGBBRB', 'WWWWWGRGAG', '45-85-99', 'EMPTY', 'ERRROE55', '2022-06-06 04:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repair_notices`
--
ALTER TABLE `repair_notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repair_notices`
--
ALTER TABLE `repair_notices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
