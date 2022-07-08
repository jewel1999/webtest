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
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `firstname`, `lastname`, `department`, `email`, `password`, `user_role`, `create_time`) VALUES
(5, 'nunew', 'pertpiriyawong', 'human-resource', 'abc@hotmail.com', '$2y$10$.ZGB3WXY7IM.NDA7HwRYiO73gUbmkDUEIeBwOI0lp.nZrPVdN8JPO', 'user', '2022-06-01 04:07:19'),
(6, 'preuk', 'panich', 'human-resource', 'zeemee@gmail.com', '$2y$10$DJmWJIiwavETqVB7yq8gLukdiWWopN0YYUkQVTZ3VQpQxz8rToO8a', 'user', '2022-06-01 04:09:06'),
(9, 'aoftionz', 'dmd', 'human-resource', 'ab55555c@hotmail.com', '$2y$10$QhmcFaSFj0pfYqjNk5Yoz.ij8VG6xVn/l9Va0uzZW8d.AITdIXRbi', 'admin', '2022-06-01 04:14:11'),
(11, 'maxmax', 'kornthas', 'it', 'maxmax@hotmail.com', '$2y$10$Y9epe/OHJRqB12fggbm16.DjyIqunswnyTQVeKO0vi/cPA7SrpPqq', 'admin', '2022-06-01 06:48:59'),
(12, 'nat', 'natasitt', 'finance', 'cutienatt@hotmail.com', '$2y$10$VjM9kw7eFz5KEsQ5ZuluhuaYIYa06E.SM9/1Y067BOw8d6GjdkDRK', 'user_fin', '2022-06-01 07:14:22'),
(13, 'preuk', 'korapat', 'it', 'abc123@hotmail.com', '$2y$10$LfyIiJQSZ9pQeBekKvZUF.G7V/yLYLCLA6LC0MGA.7DdcUr.BMSce', 'admin', '2022-06-13 01:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
