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
-- Table structure for table `workline`
--

CREATE TABLE `workline` (
  `id` int(20) NOT NULL,
  `workgroup_id` int(20) NOT NULL,
  `workline_id` int(20) NOT NULL,
  `workline_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workline`
--

INSERT INTO `workline` (`id`, `workgroup_id`, `workline_id`, `workline_name`) VALUES
(1, 1, 1, 'สายงานบัญชีและการเงิน'),
(2, 1, 2, 'สายงานการเงินและธุรการ'),
(3, 1, 3, 'สายงานทรัพยากรบุคคล'),
(4, 1, 4, 'สายงานเทคโนโลยีสารสนเทศ	'),
(5, 1, 5, 'สายงานธุรการ	'),
(6, 2, 1, 'สายงานสินไหม	'),
(7, 2, 2, 'สายงานบัญชี  และวางแผน  และงบประมาณ'),
(8, 2, 3, 'สายงานบริหารความเสี่ยง'),
(9, 3, 1, 'สายงานการตลาดธุรกิจ ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workline`
--
ALTER TABLE `workline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workline`
--
ALTER TABLE `workline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
