-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 10:05 AM
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
-- Database: `ravi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sir` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Massage` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sir`, `name`, `Email`, `Massage`, `datetime`) VALUES
(1, 'ravi', 'gaudravi16@gmail.com', 'hi i am ravi', '2021-09-26 03:22:13'),
(2, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii', '2021-09-26 03:36:58'),
(3, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii', '2021-09-26 03:38:05'),
(4, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'helow', '2021-09-26 03:39:16'),
(5, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii i am ravi\r\n', '2021-09-26 04:21:11'),
(6, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii', '2021-09-26 07:41:09'),
(7, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hi i am ravi', '2021-09-26 08:08:47'),
(8, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hiii', '2021-09-26 08:38:59'),
(9, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii', '2021-10-01 00:57:22'),
(10, 'Ravi Ramashankar Gaud', 'gaudravi16@gmail.com', 'hii', '2021-10-06 00:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
