-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 08:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oil_availability`
--

-- --------------------------------------------------------

--
-- Table structure for table `oil_stock`
--

CREATE TABLE `oil_stock` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `oil_type` varchar(20) NOT NULL,
  `availability` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oil_stock`
--

INSERT INTO `oil_stock` (`id`, `location`, `oil_type`, `availability`) VALUES
(1, 'nuweraeliya', 'crude', 5000),
(2, 'kandy', 'diesel', 4000),
(3, 'nuweraeliya', 'petrol', 5075),
(4, 'kandy', 'petrol', 4000),
(5, 'nuweraeliya', 'deisel', 2736),
(6, 'kandy', 'diesel', 4000),
(7, 'colombo', 'petrol', 4000),
(8, 'colombo', 'crude', 8287),
(9, 'trinco', 'diesel', 4567),
(10, 'colombo', 'deisel', 4000),
(11, 'trinco', 'petrol', 6476),
(12, 'Trinco', 'crude', 64537),
(13, 'gampaha', 'diesel', 4786),
(14, 'Gampaha', 'petrol', 6357),
(15, 'Gampaha', 'crude', 4367),
(16, 'badhulla', 'diesel', 8675),
(17, 'badhulla', 'petrol', 46500),
(18, 'badhulla', 'crude', 87465),
(19, 'jaffna', 'diesel', 6258),
(20, 'jaffna', 'petrol', 8762),
(21, 'jaffna', 'crude', 99837),
(22, 'galle', 'diesel', 2774),
(23, 'galle', 'petrol', 6738),
(24, 'galle', 'crude', 103899),
(25, 'matara', 'diesel', 63788),
(26, 'matara', 'petrol', 77838),
(27, 'matara', 'crude', 78893),
(28, 'polannaruwa', 'diesel', 6677),
(29, 'polannaruwa', 'crude', 0),
(30, 'batticalo', 'diesel', 1234),
(31, 'batticalo', 'petrol', 54523),
(32, 'batticalo', 'crude', 4000),
(33, 'mannar', 'diesel', 300),
(34, 'mannar', 'petrol', 9876),
(35, 'mannar', 'crude', 10000),
(36, 'polannaruwa', 'petrol', 7798),
(37, 'vavuniya', 'diesel', 300),
(38, 'vavuniya', 'petrol', 7367),
(39, 'mannar', 'crude', 10000),
(40, 'matale', 'petrol', 7798),
(41, 'vavuniya', 'crude', 75884),
(42, 'matale', 'deisel', 8986),
(43, 'matale', 'crude', 100098);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oil_stock`
--
ALTER TABLE `oil_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oil_stock`
--
ALTER TABLE `oil_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
