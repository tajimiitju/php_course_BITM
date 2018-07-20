-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 04:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
  `c_title` varchar(222) NOT NULL,
  `c_code` varchar(222) NOT NULL,
  `c_duration` varchar(222) NOT NULL,
  `c_credit` varchar(222) NOT NULL,
  `c_teacher` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_title`, `c_code`, `c_duration`, `c_credit`, `c_teacher`) VALUES
(7, 'aaa', 'IT-1105', '6 months', '3', 'aaaaa'),
(8, 'Circuit', 'IT-1105', '6 months', '3', 'gggggggggggggg'),
(9, 'bbb', 'bbb', 'bbbbb', 'bbbbbbb', 'bbbbbbbb'),
(10, 'ccc', 'ccccc', 'ccccc', 'cccccc', 'cccccc'),
(13, 'php', 'pppp', 'ppppp', 'pppp', 'ppppp');

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
(2, 'hjdsgkjh', 'nazifa@GGGG.AAA', '455877', 'KSAKJD', '333333333333', 'female', 'singing', '', '19 - 12 - 2010'),
(4, 'enan', 'nazifa@GGGG.AAA', '455877', 'dhaka', '0000000000000000', 'male', 'cricket, singing, dancing', '20120616_stp511.jpg', '19 - 06 - 2005'),
(7, 'tajim', 'nazifa@GGGG.AAA', '455877', 'jhsfgdhj', '88888888', 'male', 'cricket, singing', '', '29 - 09 - 2001'),
(8, 'aaaaaaa', 'nazifa@GGGG.AAA', '455877', 'aaaaaaaaaaaaa1111111', '111111111111111111', 'female', 'singing', '', '19 - 12 - 2010'),
(9, 'bbbbb', 'nazifa@GGGG.AAA', '455877', 'bbbbbbbbbb', 'bbbbbbbbbb', 'female', 'singing, dancing', '', '19 - 12 - 2010'),
(10, 'ccccc', 'nazifa@GGGG.AAA', '455877', 'cccccccc', 'ccccccccc', 'male', 'cricket', '', '05 - 05 - 2005'),
(11, 'dddd', 'nazifa@GGGG.AAA', '455877', 'dddddddd', 'dddddddd', 'male', 'cricket, singing, dancing', '', '01 - 01 - 2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
