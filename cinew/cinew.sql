-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 12:06 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinew`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `long_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `project_name`, `short_description`, `long_description`) VALUES
(1, 'Aurora', 'Design dynamic website for school which should be very attractive  ', 'The website frontend should be design in angular 7, backend should done suing php laravel MVC based framework and database must be in mysql '),
(2, 'Laravel', 'This project is about MVC framework', 'This project is about MVC framework This project is about MVC framework This project is about MVC framework');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(50) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `age`, `type`) VALUES
(1, 'harshal', 'sonawane', 'harshal123', 'harshal@gmail.com', 123456, 'male', 21, 'admin'),
(2, 'swapnil', 'naikwade', 'swapnil12', 'swapnil@gmail.com', 123456, 'male', 21, 'customer'),
(3, 'pravin', 'singh', 'parvin123', 'pravin@gmail.com', 0, 'male', 21, 'customer'),
(4, 'sachin', 'pawar', 'sahin123', 'sachin@gmail.com', 123456, 'male', 21, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
