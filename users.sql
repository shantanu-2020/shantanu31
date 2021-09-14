-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 01:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `inquiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `occupation`, `gender`, `inquiry`) VALUES
(82, 'golu maske', 'golu@gmail.com', 9856478547, 'department', '', 'Book a table for four persons'),
(83, 'rahul manwatkar', 'rahul@gmail.com', 9856785478, 'web developer', '', 'Book a table for four persons'),
(84, 'ram badguwar', 'ram18@gmail.com', 8521458526, 'regional manager', '', 'Book a table for four persons'),
(85, 'shantanu panday', 'sumit@gmail.com', 8007155203, 'chef', '', 'Book a table for four persons'),
(86, 'shantanu panday', 'shantanu18@gmail.com', 9854785478, 'department', '', 'Book a table for four persons'),
(87, 'shantanu panday', 'ram18@gmail.com', 9623704078, 'web developer', '', 'Book a table for four persons'),
(88, 'ram badguwar', 'ram18@gmail.com', 8521458526, 'chef', '', 'Book a table for four persons'),
(89, 'ram badguwar', 'ram18@gmail.com', 8521458526, 'regional manager', '', 'Book a table for four persons'),
(90, 'shantanu18', 'shantanupanday18@gmail.com', 8007155203, 'department', '', 'Book a table for four persons'),
(91, 'sarang khare', 'sarang@gmail.com', 8007155203, 'regional manager', 'male', 'Book a table for four persons');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
