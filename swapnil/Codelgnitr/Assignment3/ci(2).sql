-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 03:18 PM
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
  `role` varchar(50) DEFAULT 'Customer',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `age`, `role`, `image`) VALUES
(3, 'Swapnil', 'Naikwade', 'swapnil.naikwade', 'swapnilnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 21, 'Admin', NULL),
(36, 'ragini', 'mahale', 'ragini.mahale', 'ragini@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', 21, 'Customer', NULL),
(40, 'swapnil', 'naikwade', 'swapnil.naikwade', 'swapnilnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 21, 'Customer', NULL),
(41, 'suchita', 'nikam', 'suchita.nikam', 'nikam@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', 22, 'Customer', NULL),
(45, 'apurv', 'gunjal', 'apurv.gunjal', 'gunjalapurv1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 24, 'Customer', NULL),
(46, 'sachin', 'pawar', 'sachin.pawar', 'sachinpawar1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 23, 'Customer', NULL),
(47, '1', '1', '1', '1@1', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 1, 'Customer', NULL),
(48, 'swapnil', 'Naikwade', 'swapnil.naikwade', 'swapnilnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 21, 'Customer', NULL),
(49, 'harshal', 'sonawane', 'sachin.pawar', 'swapnilnaikwade1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 22, 'Customer', NULL),
(52, '2', '2', '2', '2@2', 'c81e728d9d4c2f636f067f89cc14862c', 'male', 2, 'Customer', NULL),
(53, '3', '3', '3', '3@3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'male', 3, 'Customer', NULL),
(54, '4', '4', '4', '4@4', 'a87ff679a2f3e71d9181a67b7542122c', 'male', 4, 'Customer', NULL);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
