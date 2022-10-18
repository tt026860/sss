-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 1980 at 09:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `voter_id` varchar(20) NOT NULL,
  `cand_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`voter_id`, `cand_id`, `firstname`, `lastname`, `comment`, `position`, `image`, `result`) VALUES
('asd', 'sssssssssssssssss', 'sd', 'sdfs', 'sdd', 'sdsdd', '', '1'),
('ddddd', 'ddd', 'ddd', 'ddd', 'dddd', 'sdsdd', '', ''),
('eee', 'eee', 'eee', 'eee', 'eee', 'eeeee', '', ''),
('ssf', 'ds', 'fw', 'wew', 'weer', 'sdds', '', ''),
('vv', 'v', 'vvc', 'vvvvvvvvvvv', 'Nothing to say', 'sdsdd', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE IF NOT EXISTS `counts` (
  `voter_id` varchar(555) NOT NULL,
  `cand_id` varchar(222) NOT NULL,
  `position` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`voter_id`, `cand_id`, `position`) VALUES
('p', '', 'submited'),
('vv', 'sssssssssssssssss', 'sdsdd');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `priority` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`, `priority`) VALUES
(3, 'sdds', '5'),
(4, 'sdsdd', '4'),
(5, 'eeeee', '7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `voter_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`voter_id`, `username`, `password`) VALUES
('ccccccc', 'c', 'ccccc'),
('ddddd', 'ddd', 'ddd'),
('eee', 'eee', 'ewe'),
('p', 'p', 'p'),
('sdssdddd', 'ssd', 'sds'),
('ssf', 'wew', 'eww'),
('vv', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `voter_id` varchar(20) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(555) NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `firstname`, `lastname`, `username`, `password`, `photo`, `status`) VALUES
('ccccccc', 'h', 'cocccccc', 'c', 'ccccc', '', ''),
('ddddd', 'ddd', 'ddd', 'ddd', 'ddd', '', ''),
('eee', 'eee', 'eee', 'eee', 'ewe', '', ''),
('p', 'p', 'p', 'p', 'p', '', 'voted'),
('sdssdddd', 'sss', 'ss', 'ssd', 'sds', '', ''),
('ssf', 'fw', 'wew', 'wew', 'eww', '', ''),
('vv', 'vvc', 'vvvvvvvvvvv', 'v', 'v', '', 'voted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`voter_id`);

--
-- Indexes for table `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`voter_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`voter_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
