-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 01:23 PM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_code` varchar(33) NOT NULL,
  `c_duration` varchar(33) NOT NULL,
  `c_credit` varchar(33) NOT NULL,
  `c_teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_title`, `c_code`, `c_duration`, `c_credit`, `c_teacher`) VALUES
(1, 'Circuit', 'IT-1105', '6 month', '3', 'ZIC'),
(2, 'Circuit', 'IT-1105', '6 month', '3', 'ZIC'),
(3, 'EDC', 'IT-2105', '6 month', '3', 'ZIC');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`) VALUES
(10, 'abcdef', 'jahangirwpsi@gmail.com', '145211111111', 'fgdnf', '00000000000000000000', 'male', 'cricket, singing, dancing', '', ' -  - '),
(11, 'Tajim', 'ttt@gmail.com', '12345', 'dhaka', '111111111111111111111111', 'male', 'cricket, singing', 'basis.png', '29 - 09 - 2009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
