-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 11:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-63`
--

-- --------------------------------------------------------

--
-- Table structure for table `day_16_taj`
--

CREATE TABLE `day_16_taj` (
  `id` int(11) NOT NULL,
  `ct` varchar(33) NOT NULL,
  `cc` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_16_taj`
--

INSERT INTO `day_16_taj` (`id`, `ct`, `cc`) VALUES
(11, 'cse', '1122'),
(12, 'EDC', 'IT-2105'),
(13, 'MC', 'IT-3105'),
(14, 'circuit', 'IT-1105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
