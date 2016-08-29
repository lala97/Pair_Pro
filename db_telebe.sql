-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 04:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telebe`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign-up`
--

CREATE TABLE `sign-up` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sign-up`
--

INSERT INTO `sign-up` (`id`, `name`, `email`, `password`) VALUES
(1, 'sf', 'sf', 'sf'),
(2, 'gunel', 'gunel', 'gun'),
(3, 'gunel', 'gunel', 'gun'),
(4, 'sf', 'sg', 'sf'),
(5, 'sf', 'sg', 'sf'),
(6, 'erf', 'esrf', 'fs'),
(7, 'erf', 'esrf', 'fs'),
(8, 'gunel', 'gunel', 'gun'),
(9, 'test', 'test@test.', '123456'),
(10, 'fdg', 'g', 'fs'),
(11, 'gunel', 'gunel', 'gun'),
(12, 'sg', 's', 'rdg');

-- --------------------------------------------------------

--
-- Table structure for table `telebe`
--

CREATE TABLE `telebe` (
  `id` int(11) NOT NULL,
  `src` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `telebe`
--

INSERT INTO `telebe` (`id`, `src`, `text`) VALUES
(17, 'img/team-1.jpg', 'team-1'),
(18, 'img/team-4.jpg', 'team-2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign-up`
--
ALTER TABLE `sign-up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telebe`
--
ALTER TABLE `telebe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign-up`
--
ALTER TABLE `sign-up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `telebe`
--
ALTER TABLE `telebe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
