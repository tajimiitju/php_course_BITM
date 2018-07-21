-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 09:25 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

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
  `id` int(12) NOT NULL,
  `Category` varchar(567) NOT NULL,
  `Description` varchar(323) NOT NULL,
  `image` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busness`
--

INSERT INTO `busness` (`Product_title`, `Product_price`, `id`, `Category`, `Description`, `image`) VALUES
('baby dress', 123, 6, 'Baby', 'this is good for baby', 'IX2WGSv.jpg'),
('jinc pant', 0, 7, 'Male', 'the pant for  man  who can not easily up and down', '7tOEH1u.jpg'),
('wl', 2233, 8, 'Male', 'wllw', '7tOEH1u.jpg'),
('sumon', 123, 10, 'Male', 'ertytrewsa', 'IX2WGSv.jpg');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
