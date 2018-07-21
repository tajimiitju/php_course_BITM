-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 09:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `busness`
--

CREATE TABLE `busness` (
  `Product_title` varchar(230) NOT NULL,
  `Product_price` int(233) NOT NULL,
  `Category` varchar(567) NOT NULL,
  `Description` varchar(323) NOT NULL,
  `image` varchar(230) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busness`
--

INSERT INTO `busness` (`Product_title`, `Product_price`, `Category`, `Description`, `image`, `id`) VALUES
('aaaaaa', 11, 'Male', 'a11mm', 'a (1).jpg', 1),
('bbbb', 22, 'Female', 'b222fff', 'images.jpg', 2),
('cccc', 333, 'Baby', 'cc33bbb', 'a (2).jpg', 3);

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
  `c_teacher` varchar(222) NOT NULL,
  `students` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_title`, `c_code`, `c_duration`, `c_credit`, `c_teacher`, `students`) VALUES
(7, 'aaa', 'IT-1105', '6 months', '3', 'aaaaa', ''),
(8, 'Circuit', 'IT-1105', '6 months', '3', 'gggggggggggggg', ''),
(9, 'bbb', 'bbb', 'bbbbb', 'bbbbbbb', 'bbbbbbbb', ''),
(10, 'ccc', 'ccccc', 'ccccc', 'cccccc', 'cccccc', ''),
(13, 'php', 'pppp', 'ppppp', 'pppp', 'ppppp', ''),
(14, 'zz', 'zz', 'zz', 'zzzz', 'zzzz', ''),
(15, 'html', 'aa', 'aaaaa', 'aa', 'aa', ' aaa, aa, aa');

-- --------------------------------------------------------

--
-- Table structure for table `oop_students`
--

CREATE TABLE `oop_students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oop_students`
--

INSERT INTO `oop_students` (`id`, `name`, `department`, `address`) VALUES
(2, 'tajim', 'CSE', 'djkgfzjf');

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
  `dob` varchar(255) NOT NULL,
  `subjectcs` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`, `subjectcs`) VALUES
(2, 'hjdsgkjh', 'nazifa@GGGG.AAA', '455877', 'KSAKJD', '333333333333', 'female', 'singing', '', '19 - 12 - 2010', 'aaa'),
(4, 'enan', 'nazifa@GGGG.AAA', '455877', 'dhaka', '0000000000000000', 'male', 'cricket, singing, dancing', '20120616_stp511.jpg', '19 - 06 - 2005', ''),
(7, 'tajim', 'nazifa@GGGG.AAA', '455877', 'jhsfgdhj', '88888888', 'male', 'cricket, singing', '', '29 - 09 - 2001', 'Circuit, php, html'),
(8, 'aaaaaaa', 'nazifa@GGGG.AAA', '455877', 'aaaaaaaaaaaaa1111111', '111111111111111111', 'female', 'singing', '', '19 - 12 - 2010', ''),
(9, 'bbbbb', 'nazifa@GGGG.AAA', '455877', 'bbbbbbbbbb', 'bbbbbbbbbb', 'female', 'singing, dancing', '', '19 - 12 - 2010', ''),
(10, 'ccccc', 'nazifa@GGGG.AAA', '455877', 'cccccccc', 'ccccccccc', 'male', 'cricket', '', '05 - 05 - 2005', ''),
(11, 'dddd', 'nazifa@GGGG.AAA', '455877', 'dddddddd', 'dddddddd', 'male', 'cricket, singing, dancing', '', '01 - 01 - 2001', ''),
(12, 'zzzzz', 'zzz@zzz.com', 'zzzz', 'zzzz', 'zzzz', 'male', 'cricket, singing, dancing', '', '19 - 12 - 2010', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busness`
--
ALTER TABLE `busness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oop_students`
--
ALTER TABLE `oop_students`
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
-- AUTO_INCREMENT for table `busness`
--
ALTER TABLE `busness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `oop_students`
--
ALTER TABLE `oop_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
