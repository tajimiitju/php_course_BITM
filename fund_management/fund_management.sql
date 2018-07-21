-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 04:01 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fund_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(11) NOT NULL,
  `t_id` int(33) NOT NULL,
  `agent_no` int(33) NOT NULL,
  `received_money` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `t_id`, `agent_no`, `received_money`) VALUES
(15, 11111, 1412531253, '2352');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `event_id` varchar(33) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phon` varchar(33) NOT NULL,
  `amount` decimal(12,0) NOT NULL,
  `gateway` varchar(255) NOT NULL,
  `t_id` varchar(33) NOT NULL,
  `agent_no` varchar(33) NOT NULL,
  `event_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `event_id`, `donor_name`, `donor_mail`, `address`, `phon`, `amount`, `gateway`, `t_id`, `agent_no`, `event_name`) VALUES
(7, '1d0d46fda1c88c469d6ee27111c745c2', 'Tajim', 't@t', 'dhaka', '64758234', '2352', 'Bkash', '11111', '1412531253', 'Katrina');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(11) NOT NULL,
  `target` decimal(10,0) NOT NULL,
  `location` varchar(333) NOT NULL,
  `pay_method` varchar(333) NOT NULL,
  `start_date` varchar(333) NOT NULL,
  `end_date` varchar(333) NOT NULL,
  `image` varchar(333) NOT NULL,
  `name` varchar(333) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `rcv_money` decimal(12,0) NOT NULL,
  `deleted_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `target`, `location`, `pay_method`, `start_date`, `end_date`, `image`, `name`, `unique_id`, `rcv_money`, `deleted_at`) VALUES
(40, '400000', 'Dhaka', 'Bkash, Mkash', '1 - August - 2018', '1 - July - 2019', 'f5523ca17e.jpg', 'Flood', '9c253d713ca299991b086d33469b3a25', '0', '0000-00-00 00:00:00.000000'),
(41, '500000', 'Sylhet', 'Bkash, DBBL', '1 - June - 2016', '1 - May - 2017', '602fd7f66c.jpg', 'Tran', '6c423e5ed2a89de0a96b63c19e00e445', '0', '0000-00-00 00:00:00.000000'),
(42, '100000', 'Coxbazar', 'Bkash, SureCash', '1 - April - 2017', '1 - January - 2021', '1c118bb1b2.jpg', 'Rohinga', 'e81b54580c6a47fe7f041bdf84904d5f', '0', '0000-00-00 00:00:00.000000'),
(43, '100000', 'Gazipur', 'DBBL, SureCash', '1 - March - 2016', '1 - March - 2017', '088078dffe.jpg', 'Flood 2', '7e09d13cf6704c779e19c66493128897', '0', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `user` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `registration_area` varchar(12) NOT NULL,
  `city` varchar(12) NOT NULL,
  `zip` varchar(12) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `user`, `password`, `email`, `phone`, `gender`, `registration_area`, `city`, `zip`, `message`) VALUES
(1, 'j', 'j', 'js', '823', 'jjj@gmail.co', 678, 'male', 'cause ', 'hhj', '56', 'nm'),
(2, 'djjdsl', 'ks', 'ksj', '123', 'amomincse@gm', 134456789, 'male', 'startup', 'dhaka', '123', 'dhjsjs'),
(3, 'Abdul', 'Momin', 'momin', '123', 'momin@gmail.', 1795973608, 'male', 'startup', 'dhaka', '1215', 'sdkj'),
(4, 'al ', 'amin', 'amin', '1234', 'alamin@gmail.com', 2147483647, 'male', 'startup', 'dhaka', '1234', 'sjdjks'),
(5, 'Tajim', 'Tajim', 'tajim', 'Tajim', 'Tajim@Tajim', 0, 'male', 'startup', 'Tajim', 'Tajim', 'Tajim'),
(6, '', '', 'Imran', '123', 'imran@gmail.com', 0, '', '', '', '', ''),
(7, '', '', 'Imran', '123', 'imran@gmail.com', 0, '', '', '', '', ''),
(8, '', '', 'Imran', '123', 'imran@gmail.com', 0, '', '', '', '', ''),
(9, '', '', 'Imran', '123', 'imran@gmail.com', 0, '', '', '', '', ''),
(10, '', '', 'Imran', '123', 'imran@gmail.com', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `target` decimal(50,0) NOT NULL,
  `location` varchar(255) NOT NULL,
  `pay_method` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(29) NOT NULL,
  `registration_area` varchar(50) NOT NULL,
  `city` varchar(60) NOT NULL,
  `zip` varchar(45) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `firstname`, `lastname`, `user`, `password`, `email`, `phone`, `gender`, `registration_area`, `city`, `zip`, `message`) VALUES
(1, 'momin', 'Ahmed', 'hh', '123', 'amomincse@gmail.com', 7890, 'male', 'cause ', 'dhaka', '1233', 'sdisd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
