-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `border`
--

CREATE TABLE `border` (
  `id` int(200) NOT NULL,
  `month` text NOT NULL,
  `data` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `border`
--

INSERT INTO `border` (`id`, `month`, `data`) VALUES
(1, 'january', 200),
(2, 'february', 300),
(3, 'march', 400);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `coid` int(11) NOT NULL,
  `username` int(100) NOT NULL,
  `password` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`coid`, `username`, `password`) VALUES
(1, 0, 22222),
(2, 0, 222);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`, `message`) VALUES
(1, 'kevin', 'niyigenabel@gmail.com', 'wta222', 'mananananana'),
(2, 'kevin', 'niyigenabel@gmail.com', 'wta222', 'mananananana'),
(3, 'kevin', 'niyigenabel@gmail.com', 'wta222', 'mananananana'),
(4, 'kevin', 'niyigenabel@gmail.com', 'wta222', 'mananananana');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `business` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `transport` text NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `business`, `email`, `transport`, `amount`) VALUES
(2, 'rutenderi bean collect', 'bushugukevin02@gmail.com', 'air transport', '24444444444'),
(3, 'kinuma furniture', 'bushugukevin02@gmail.com', 'water transport', '23333333'),
(4, 'abelt enstein', 'edmondplb@gmail.com', 'landtransport', '12000'),
(5, 'inyange', 'edmondplb@gmail.com', 'air transport', '20000000000');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(250) NOT NULL,
  `dateofbirth` text NOT NULL,
  `nationality` text NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `transport` text NOT NULL,
  `vehicle` text NOT NULL,
  `border` text NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `secondname`, `email`, `password`, `phone`, `dateofbirth`, `nationality`, `gender`, `transport`, `vehicle`, `border`, `cv`) VALUES
(1, 'fils', 'niyonzima', 'bushugukevin02@gmail.com', '2222\r\n', 721474836, '2024-01-05', 'rwanda', 'male', 'land transport', 'airplane', 'kagitumba', 0x31796f5978394d30334e702e6a732e646f776e6c6f6164),
(2, 'elyse', 'niyonzima', 'bushugukevin02@gmail.com', '1212', 2147483647, '2024-01-05', 'rwanda', 'male', 'land transport', 'long car', 'Gatuna', 0x6268676867686e2e6a7067),
(6, 'ben', 'ruzima', 'edmondplb@gmail.com', '', 782941443, '2024-01-02', 'venezuela', 'male', 'land transport', 'long car', 'Gatuna', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `border`
--
ALTER TABLE `border`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `border`
--
ALTER TABLE `border`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
