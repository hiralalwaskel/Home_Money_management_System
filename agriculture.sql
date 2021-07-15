-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 08:20 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_table`
--

CREATE TABLE `a_table` (
  `name` varchar(20) NOT NULL,
  `rate` int(20) NOT NULL,
  `money` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_table`
--

INSERT INTO `a_table` (`name`, `rate`, `money`, `date`) VALUES
('machine', 50, 250, '2018-12-01'),
('machine', 50, 12, '2018-12-02'),
('krke', 66, 2500, '2018-12-02'),
('kapas', 50, 55888, '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `g_table`
--

CREATE TABLE `g_table` (
  `username` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `working` varchar(50) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `money` int(20) NOT NULL,
  `byaj` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_table`
--

INSERT INTO `g_table` (`username`, `age`, `address`, `working`, `mobile_number`, `money`, `byaj`, `date`) VALUES
('waskel', 30, 'umarban', 'study', 2147483647, 250005, 5, '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `h_table`
--

CREATE TABLE `h_table` (
  `name` varchar(30) NOT NULL,
  `kg` int(30) NOT NULL,
  `rate` int(30) NOT NULL,
  `money` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_table`
--

INSERT INTO `h_table` (`name`, `kg`, `rate`, `money`, `date`) VALUES
('kapas', 5, 100, 55, '2018-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`username`, `password`) VALUES
('0hiralal', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `t_table`
--

CREATE TABLE `t_table` (
  `username` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `working` varchar(20) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `money` int(20) NOT NULL,
  `byaj` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_table`
--

INSERT INTO `t_table` (`username`, `age`, `address`, `working`, `mobile_number`, `money`, `byaj`, `date`) VALUES
('rtrj', 21, 'lawani', 'study', 2147483647, 2500, 2, '2018-12-10'),
('hiralal', 20, 'nayapura', 'formar', 2147483647, 10000, 0, '2018-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
