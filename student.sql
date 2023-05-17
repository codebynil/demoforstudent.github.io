-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 05:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `english` float NOT NULL,
  `hindi` float NOT NULL,
  `math` float NOT NULL,
  `science` float NOT NULL,
  `history` float NOT NULL,
  `geography` float NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `first_name`, `last_name`, `batch`, `email`, `english`, `hindi`, `math`, `science`, `history`, `geography`, `remarks`, `total`) VALUES
(10, 'mak', 'peter', 'b5', 'mak@gmail.com', 14.12, 40, 15, 49, 15.15, 52, 'cdccdc15dc', 185.27),
(11, 'sam', 'dek', 'b7', 'sam@gmail.com', 45, 15, 84.62, 45.5, 45.59, 45, 'vcxdscsdcdcdcdcdcdcl15ccdcdcdc', 280.71),
(12, 'nilesh', 'prasad', 'b1', 'nilesh@gmail.com', 45.48, 84, 15.45, 52.19, 85, 64, 'Lorem Ipsum has been the indus', 346.12),
(13, 'user', 'user', 'b12', 'user@gmail.com', 45, 62, 52, 15, 54, 62, 'It is a long established fact ', 290),
(14, 'nil', 'prasad', 'b4', 'nil@gmail.com', 84, 95, 64, 87, 62, 74.5, 'It is a long established fact ', 466.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
