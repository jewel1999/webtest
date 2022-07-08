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
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(10) NOT NULL,
  `com_sn` varchar(255) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `harddisk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelcom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(25) NOT NULL,
  `license` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `com_owner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `com_status` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `com_sn`, `com_name`, `com_type`, `cpu`, `ram`, `harddisk`, `brand`, `modelcom`, `price`, `license`, `com_owner`, `com_status`, `create_at`) VALUES
(1, 'ADFTGED000785GGsss', 'LENOVO-LEGION-Y5', 'All-in-one', 'sgagarh', 'srfbghARh', 'sdregrhrh', 'rgARGsrg', 'gdfsgg', 'rsgsrg', 'kjoiufit', 'Natasit', 'Active', '2022-06-02 08:39:39'),
(2, 'GFTVVVSLOR8744IO', 'ACER-TTY-MOD37', '', '', '', '', '', '', '', '', 'Maxx', 'Active', '2022-06-02 08:40:29'),
(25, 'HJURRDW952574RE', 'LENOVO-LEGION-Y3', '', '', '', '', '', '', '', '', 'ZEE', 'Non-Active', '2022-06-02 08:59:43'),
(27, 'fgargarh', 'efSEgrg', 'pc-laptop', 'eafEF', '', 'fefefe', 'fsefefe', 'efsefe', 'feFef', 'sfAwfw', 'rgargargrg', 'active', '2022-06-22 09:54:36'),
(28, 'fgargarh', 'hhhhhh', 'All-in-one', 'eafEF', 'sefgewg', 'fefefe', 'dell', 'efsefe', '12000', 'sfAwfw', 'tuuuu', 'Active', '2022-07-04 04:40:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
