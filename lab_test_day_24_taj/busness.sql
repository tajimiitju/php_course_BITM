-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 09:48 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busness`
--
ALTER TABLE `busness`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busness`
--
ALTER TABLE `busness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
