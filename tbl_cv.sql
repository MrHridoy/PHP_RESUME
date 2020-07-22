-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 03:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cv`
--

CREATE TABLE `tbl_cv` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `location` varchar(150) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `summary` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `company` varchar(80) NOT NULL,
  `texts` text NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cv`
--

INSERT INTO `tbl_cv` (`id`, `name`, `location`, `phone`, `email`, `summary`, `title`, `company`, `texts`, `dates`) VALUES
(9, 'MD ABDUL MANNAN HRIDOY', 'Sylhet', 1772434208, 'employee@gmail.com', 'Hello', 'web', 'freelancer', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cv`
--
ALTER TABLE `tbl_cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cv`
--
ALTER TABLE `tbl_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
