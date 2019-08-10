-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 06:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `role` varchar(50) DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `age`, `role`) VALUES
(3, 'Swapnil', 'Naikwade', 'swapnil.naikwade', 'swapnilnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 21, 'Admin'),
(4, 'Vaibhav', 'Naikwade', 'vaibhav.naikwade', 'vaibhavnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 19, 'Customer'),
(5, 'sachin', 'pawar', 'sachin.pawar', 'sachinpawar1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 23, 'Customer'),
(6, 'ragini', 'mahale', 'ragini.mahale', 'raginimahale1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 22, 'Customer'),
(7, 'apurv', 'gunjal', 'apurv.gunjal', 'gunjalapurv1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 24, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
