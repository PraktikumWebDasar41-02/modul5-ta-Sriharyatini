-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 11:18 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta5`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Nim` int(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tanggal Lahir` varchar(20) NOT NULL,
  `Program Studi` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Komentar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Nim`, `Nama`, `Email`, `Tanggal Lahir`, `Program Studi`, `Fakultas`, `Komentar`) VALUES
(0, '', '', '', '', '', ''),
(0, '', '', '', '', '', ''),
(0, '', '', '', '', '', ''),
(2147483647, 'sri', 'sh@gmail.com', '2018-10-10', 'Sistem Informasi', 'FIT', 'AAAAAAA'),
(2147483647, 'yasaiswara', 'ys@gmail.com', '2018-10-09', 'Sistem Informasi', 'FIT', 'yeeee'),
(2147483647, 'jimin', 'jimin@gmail.com', '2018-10-04', 'Sistem Informasi', 'FIT', 'apaa'),
(2147483647, 'sriharyatini', 'sh@gmail.com', '2018-10-03', 'Sistem Informasi', 'FIT', 'weee'),
(2147483647, 'wanda', 'wd@gmail.com', '2018-10-10', 'Sistem Informasi', 'FIT', 'hemmm'),
(2147483647, 'sri', 'sh@gmail.com', '2018-10-02', 'Sistem Informasi', 'FIT', 'hem'),
(2147483647, 'sri', 'sh@gmail.com', '2018-10-03', 'Komputerisasi Akuntansi', 'INFORMATIKA', 'makasih'),
(2147483647, 'wanda', 'sww@gmail.com', '2018-10-22', 'MBTI', 'FEB', 'aku cantik'),
(2147483647, 'wanda', 'sww@gmail.com', '2018-10-22', 'MBTI', 'FEB', 'aku cantik'),
(2147483647, 'sri', 'sh@gmail.com', '2018-10-01', 'Manajemen Pemasaran', 'FIT', 'heheh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
