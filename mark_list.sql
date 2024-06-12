-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 07:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mark_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `rollno` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `year` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `subjects` int(10) NOT NULL,
  `coremark1` int(10) NOT NULL,
  `coremark2` int(10) NOT NULL,
  `alliedmark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`rollno`, `name`, `dept`, `year`, `sem`, `subjects`, `coremark1`, `coremark2`, `alliedmark`) VALUES
(1, 'gfdg', 'B.sc.maths', 2, 2, 3, 67, 67, 67),
(2, 'thangpandian', 'B.sc.cs', 2, 3, 3, 87, 87, 87),
(3, 'fddfd', 'B.sc.maths', 1, 1, 3, 77, 77, 77),
(4, 'thangpandian', 'B.sc.cs', 2, 2, 3, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
