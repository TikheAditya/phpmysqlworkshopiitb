  
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 11:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` char(25) NOT NULL,
  `adname` varchar(25) NOT NULL,
  `ademail` varchar(30) NOT NULL,
  `adpswd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `adname`, `ademail`, `adpswd`) VALUES
('Aditya Tikhe', 'script_kiddie', 'Adityatikhe.8@gmail.com', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` char(25) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phpm` int(11) NOT NULL,
  `mysqlm` int(11) NOT NULL,
  `htmlm` int(11) NOT NULL,
  `tmo` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `uname`, `email`, `password`, `phpm`, `mysqlm`, `htmlm`, `tmo`, `tm`, `percentage`) VALUES
('Rams', 'Rams1212', 'Ramsout@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 80, 80, 85, 245, 300, 81.6667),
('Ajinkya', 'iaj18', 'Aj18@gmail.com', '202cb962ac59075b964b07152d234b70', 100, 100, 100, 300, 300, 100),
('Avishet', 'Avishetji', 'shetjibaba@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 50, 100, 50, 200, 300, 66.6667),
('Aditya Tikhe', 'script_kiddie', 'adityatikhe.8@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 100, 100, 100, 300, 300, 100),
('sidu', 'siddy0', 'siddesh@gmail.com', '557ad407c100ac502e00469539504f8e', 90, 89, 90, 269, 300, 89.6667),
('swara', 'swara', 'swara69@gmail.com', '202cb962ac59075b964b07152d234b70', 80, 80, 80, 240, 300, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;