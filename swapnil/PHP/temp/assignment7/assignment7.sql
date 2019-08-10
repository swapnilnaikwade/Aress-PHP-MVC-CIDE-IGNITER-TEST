-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 10:57 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment7`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) NOT NULL,
  `myid` int(10) NOT NULL,
  `friendid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `myid`, `friendid`) VALUES
(35, 11, 4),
(36, 4, 11),
(37, 11, 6),
(38, 6, 11),
(39, 11, 7),
(40, 7, 11),
(41, 11, 8),
(42, 8, 11),
(43, 11, 9),
(44, 9, 11),
(45, 11, 10),
(46, 10, 11),
(47, 6, 1),
(48, 1, 6),
(49, 6, 10),
(50, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `imageName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `contact`, `mail`, `password`, `address`, `imageName`) VALUES
(1, 'amol', '7852647423', 'amol@gmail.com', '34754f2e7d395b4b26577121aa9b03e6', 'nashik', ''),
(4, 'Pooja', '8600275656', 'pooja', '202cb962ac59075b964b07152d234b70', 'Nashik', ''),
(6, 'vaibhav', '9752654875', 'vaibhav', '310a87565a48526e9d096f917007dbfe', 'fthfth', ''),
(7, 'vatvtfg', '7126584593', 'jhon', '202cb962ac59075b964b07152d234b70', 'bhfcfb', ''),
(8, 'Neha', '9865143223', 'neha', '202cb962ac59075b964b07152d234b70', 'jksandm,s', ''),
(9, 'Namrata', '786549213', 'namrata', '202cb962ac59075b964b07152d234b70', 'sfasdf', ''),
(10, 'Avinash', '8576412304', 'avinash', '202cb962ac59075b964b07152d234b70', 'kasjfkjds', ''),
(11, 'Pawan', '123456789', 'pawan.rote@gmail.com', '40eb95572d967a62183292ef5f78bf9a', 'Test23.', ''),
(13, 'mayuri', '7845415815', ' mayuri', '202cb962ac59075b964b07152d234b70', 'xyz', 'C:/xampp/htdocs/php/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
