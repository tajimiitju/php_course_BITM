-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 12:16 PM
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
('aaaaaa', 0, 'Male', 'aaaaaaaaa', 'images.jpg', 8),
('aaaaaa', 22, 'Male', 'ewrewq', 'images.jpg', 9),
('a', 112, 'Male', 'ewrewqr', 'basis.png', 10),
('', 0, 'Select One', '', '', 11);

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
  `name` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `target`, `location`, `pay_method`, `start_date`, `end_date`, `image`, `name`) VALUES
(9, '1111111', 'Bangladesh', 'Bkash, DBBL, Mkash, SureCash', '1 - December - 2016', '1 - December - 2017', 'e050f531fe.PNG', 'a'),
(10, '5555', 'Bangladesh', 'Bkash, DBBL, Mkash, SureCash', '1 - Select One - 2016', '1 - Select One - 2017', 'f61663e613.jpg', 'Bonna'),
(14, '5555', 'fdsgfg', 'Bkash, DBBL, Mkash', '1 - Select One - 2016', '1 - Select One - 2017', 'c423235cf8.jpg', 'dfyt'),
(15, '546546', '5467546', 'Bkash, DBBL', '1 - Select One - 2016', '1 - Select One - 2017', '678e4e9de6.jpg', 'ghjhgf');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_18_094312_create_professions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oop_students`
--

CREATE TABLE `oop_students` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `department` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oop_students`
--

INSERT INTO `oop_students` (`id`, `name`, `department`, `address`) VALUES
(2, 'Tajim', 'EEE', 'savar'),
(3, 'Fahim', 'CSE', 'rstygrygt4egt'),
(4, 'drt', 'BBA', 'rtes'),
(5, 'fdgfd', 'CSE', 'dgffdgfdg'),
(6, 'aaaaaaa', 'CSE', 'aaaaaaaaaaa'),
(7, 'aaaaaaa', 'CSE', 'aaaaaaaaa'),
(8, 'zzzzzz', 'CSE', 'zzzzzzzzzz'),
(9, 'gcvh', 'BBA', 'gfdh');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(333) NOT NULL,
  `price` varchar(33) NOT NULL,
  `description` varchar(333) NOT NULL,
  `image_name` varchar(333) NOT NULL,
  `name` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `price`, `description`, `image_name`, `name`) VALUES
(1, 'ewtr', 'qewrt', 'ewq', 'erwq', 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Student', '2017-10-18 04:14:05', '2017-10-18 04:14:05'),
(2, 'Teacher', '2017-10-18 04:14:05', '2017-10-18 04:14:05'),
(3, 'Programmer', '2017-10-18 04:14:05', '2017-10-18 04:14:05'),
(4, 'Doctor', '2017-10-18 04:14:05', '2017-10-18 04:14:05'),
(5, 'Engineer', '2017-10-18 04:14:05', '2017-10-18 04:14:05'),
(6, 'Student', '2017-10-18 04:14:11', '2017-10-18 04:14:11'),
(7, 'Teacher', '2017-10-18 04:14:11', '2017-10-18 04:14:11'),
(8, 'Programmer', '2017-10-18 04:14:11', '2017-10-18 04:14:11'),
(9, 'Doctor', '2017-10-18 04:14:11', '2017-10-18 04:14:11'),
(10, 'Engineer', '2017-10-18 04:14:11', '2017-10-18 04:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Tajim', 'tajim@gmail.com', '455877', 'KSAKJD', '333333333333', 'male', 'cricket, singing', '1.jpg', '19 - 12 - 2010', 'zz, html'),
(4, 'enan', 'nazifa@GGGG.AAA', '455877', 'dhaka', '000000', 'male', 'cricket, singing, dancing', '19397130_1739132292781722_837823012491152713_n.jpg', '19 - 6 - 2005', 'aaa, Circuit, bbb'),
(7, 'mmmmm', 'nazifa@GGGG.AAA', '455877', 'jhsfgdhj', '88888888', 'male', 'cricket, singing', 'Basis_173919.jpg', '29 - 9 - 2001', 'Circuit, php, html'),
(8, 'aaaaaaa', 'nazifa@GGGG.AAA', '455877', 'aaaaaaaaaa', '1111', 'female', 'singing', '20431413_1472395686141721_1126534812478305070_n.jpg', '19 - 12 - 2010', 'Circuit, bbb, ccc, php, html'),
(9, 'bbbbb', 'nazifa@GGGG.AAA', '455877', 'bbbbbbbbbb', 'bbbbbbbbbb', 'female', 'singing, dancing', 'i.jpg', '19 - 12 - 2010', 'php, zz'),
(10, 'ccccc', 'nazifa@GGGG.AAA', '455877', 'cccccccc', 'ccccccccc', 'male', 'cricket', 'h.jpg', '5 - 5 - 2005', 'Circuit, php'),
(11, 'dddd', 'nazifa@GGGG.AAA', '455877', 'dddddddd', 'dddddddd', 'male', 'cricket, singing, dancing', '14572773_1320279491318251_7604877284929059290_n.jpg', '1 - 1 - 2001', 'php, html'),
(12, 'zzzzz', 'zzz@zzz.com', 'zzzz', 'zzzz', 'zzzz', 'male', 'cricket, singing, dancing', 'Bismillah_Hir_Rahman_Nir_Raheem.svg.png', '19 - 12 - 2010', 'Circuit, bbb, ccc'),
(13, 'aa', 'asdfsafd@gmail.com', 'aaaa', 'aaaaaaaa', 'aaaaaaaa', 'male', 'cricket, singing', 'item8.png', '19 - 12 - 2010', ''),
(14, 'aaaa', 'asdfsafd@gmail.com', 'aaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', 'female', 'singing, dancing', 'basis.png', '19 - 12 - 2010', '');

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
-- Indexes for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oop_students`
--
ALTER TABLE `oop_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `oop_students`
--
ALTER TABLE `oop_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
