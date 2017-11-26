-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 01:39 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haranahtours`
--

-- --------------------------------------------------------

--
-- Table structure for table `engager`
--

CREATE TABLE `engager` (
  `eng_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `department` enum('sales','tours','transportation','accounting','management') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(18) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `status` enum('banned','active','offline') DEFAULT NULL,
  `image` mediumblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `last_name`, `first_name`, `department`, `email`, `password`, `contact_no`, `status`, `image`) VALUES
(2, 'Viloria', 'Kristine', 'management', 'viloriakristine@gmail.com', 'MaViKr417', '09951032417', 'offline', NULL),
(3, 'langit', 'ismael', 'sales', 'ismaellangit@gmail.com', 'Salais417', '09951032417', 'offline', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engager`
--
ALTER TABLE `engager`
  ADD PRIMARY KEY (`eng_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
