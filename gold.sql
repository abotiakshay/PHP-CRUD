-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 07:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silver`
--

-- --------------------------------------------------------

--
-- Table structure for table `ball`
--

CREATE TABLE `ball` (
  `Date` date NOT NULL,
  `size` int(50) NOT NULL,
  `weight` int(50) NOT NULL,
  `value` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ball`
--

INSERT INTO `ball` (`Date`, `size`, `weight`, `value`) VALUES
('2020-10-08', 8, 500, 200),
('2020-10-16', 8, 500, 200),
('2020-11-03', 8, 1100, 440);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ball`
--
ALTER TABLE `ball`
  ADD PRIMARY KEY (`Date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
