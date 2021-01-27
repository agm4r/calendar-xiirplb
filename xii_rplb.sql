-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 08:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xii_rplb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllMurid` ()  BEGIN
SELECT * FROM murid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getMurid` (IN `jk` VARCHAR(100))  BEGIN

select * from murid where jenis_kelamin=jk;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `Notes` char(225) NOT NULL,
  `NISN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `Notes`, `NISN`) VALUES
(1, 'Ngoding', '2020-11-06', '14:12:25', '-Laravel <br>\r\n\r\n-front End\r\n\r\n\r\n\r\n', 0),
(2, 'Pes', '2020-11-07', '00:00:00', '', 0),
(3, 'Masak', '2020-11-06', '07:27:20', '', 0),
(6, 'NAON', '2020-11-30', '19:07:00', 'sugan we dude', NULL),
(9, 'Pemrograman Berbasis Web', '2020-11-23', '07:00:00', 'Belajar HTML dan CSS', NULL),
(12, 'Belajar Bahasa Golang', '2020-11-23', '13:00:00', 'Belajar dasar Bahasa Golang', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `nisn` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nisn`, `nama`, `jenis_kelamin`, `password`, `alamat`) VALUES
(0029871101, 'Agmar Putra', 'Lelaki', '', 'BBC'),
(0029871102, 'Dinda Adiningsih Putri', 'Perempuan', '', 'Kp. Cihaliwung'),
(0029871123, 'Muhammad Rizky Subagja', 'Lelaki', '', 'Kp. Cihaliwung'),
(0029871126, 'Lingga Andika Setiabudi', 'Lelaki', '', 'Kp. Cihaliwung'),
(0029871145, 'Rafli Z. Fikri', 'Lelaki', '', 'Kp. Ciburuy'),
(0029871201, 'Muhammad Akbar Pratama Simatupang', 'Lelaki', '', 'Kp. batujajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
