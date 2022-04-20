-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220418.7005844990
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2022 at 02:09 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_210079573_AstonCV`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyprogramming` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `URLlinks` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `password`, `keyprogramming`, `profile`, `education`, `URLlinks`) VALUES
(2, 'Ismail Hussain', 'ihussain@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Java', 'Student at aston university', '9 GCSE\'s\r\n3 A Level\'s\r\nLvl 3 award in EPQ', 'linkedin.com/ihussain'),
(3, 'James Patrick', 'jpatrick@gmail.com', '202cb962ac59075b964b07152d234b70', 'C++', 'Student at Aston University who has contributed to multiple projects. Extensive portfolio with different programming languages', '4 A Level\'s\r\n10 GCSE\'s\r\nGrade A* in EPQ\r\nDofE Award', 'github.com/patrickj'),
(4, 'Mary Jane', 'mj123@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Python', 'Undergraduate student at Aston university studying  Software Engineering Bsc', '7 GCSE\'s\r\nBTEC IT & A Level Maths', 'linkedin.com/mj123'),
(5, 'Ikram Hassan', 'ih@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Pascal', 'Undergraduate student looking for software engineering roles based in birmingham, wide range of expertise not limited to what i have been taught.', '2 A Level\'s\r\nBTEC Health & Social care\r\n', 'linkedin.com/ih'),
(7, '123', '1233@gmail.com', '202cb962ac59075b964b07152d234b70', 'Test1', 'I am a student', '3 a levels', 'linkedin.com/test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
