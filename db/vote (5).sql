-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 1980 at 10:53 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(222) NOT NULL,
  `user` varchar(222) NOT NULL,
  `pass` varchar(222) NOT NULL,
  `image` varchar(22) NOT NULL,
  `school` varchar(222) NOT NULL,
  `comm` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `image`, `school`, `comm`, `date`) VALUES
('mengo', 'admin@admin', '$2y$10$TDA2.V/pFNE9NENTbezBveNxhjiUlnqBf.bVbkkTB7iwZgSaldGuK', '', 'beris high school', '', '2022-09-22 15:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `voter_id` varchar(20) NOT NULL,
  `cand_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `class` varchar(222) NOT NULL,
  `stream` varchar(222) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `rank` varchar(222) NOT NULL,
  `image` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`voter_id`, `cand_id`, `firstname`, `lastname`, `class`, `stream`, `comment`, `position`, `rank`, `image`, `result`) VALUES
('A', 'a', 'a', 'a', 'a', '', 'a', 'nsubuga house prefect', '1', '', '0'),
('B', 'b', 'b', 'b', 'bb', 'b', 'b', 'head prefect', '1', 'x.PNG', '2'),
('EIGHT', 'eight', 'Candidate', 'Eight', '', '', 'eight', 'armitage house prefect', '1', 'j.jpg', '2'),
('EIGHTEEN', 'eighteen', 'eighteen', 'eighteen', '', '', 'eighteen', 'chapel prefect', '1', 'u.jpg', '1'),
('ELEVEN', 'eleven', 'eleven', 'eleven', '', '', 'eleven', 'armitage house prefect', '1', 'n.jpg', '2'),
('FIFTEEN', 'fifteen', 'fifteen', 'fifteen', '', '', 'fifteen', 'protocol prefect', '1', 'r.jpg', '3'),
('FIFTY', 'fifty', 'fifty', 'fifty', '', '', 'fifty', 'mess minister', '1', 'i.jpg', '3'),
('FIFTYFIVE', 'fiftyfive', 'fiftyfive', 'fiftyfive', '', '', 'fiftyfive', 'sempa house prefect', '1', 'zz.jpg', '2'),
('FIFTYFOUR', 'fiftyfour', 'fiftyfour', 'fiftyfour', '', '', 'fiftyfour', 'sempa house prefect', '1', 'q.jpg', '2'),
('FIFTYONE', 'fiftyone', 'fiftyone', 'fiftyone', '', '', 'fiftyone', 'entertainment minister', '1', 'y.jpg', '2'),
('FIFTYSIX', 'fiftysix', 'fiftysix', 'fiftysix', '', '', 'fiftysix', 'entertainment minister', '1', 'h.jpg', '1'),
('FIFTYTHREE', 'fiftythree', 'fiftythree', 'fiftythree', '', '', 'fiftythree', 'sempa house prefect', '1', 'u.jpg', '0'),
('FIFTYTWO', 'fiftytwo', 'fiftytwo', 'fiftytwo', '', '', 'fiftytwo', 'entertainment minister', '1', 'index.jpg', '1'),
('FIVE', 'five', 'five', 'five', '', '', 'five', 'nsubuga house prefect', '1', 'index.jpg', '1'),
('FORTYEIGHT', 'fortyeight', 'fortyeight', 'fortyeight', '', '', 'fortyeight', 'mess minister', '1', 'z.jpg', '1'),
('FORTYNINE', 'fortynine', 'fortynine', 'fortynine', '', '', 'fortynine', 'mess minister', '1', 'v.jpg', '0'),
('FORTYSEVEN', 'fortyseven', 'fortyseven', 'fortyseven', '', '', 'fortyseven', 'clubs prefect', '1', 'zz.jpg', '1'),
('FORTYSIX', 'fortysix', 'fortysix', 'fortysix', '', '', 'fortysix', 'clubs prefect', '1', 'h.jpg', '1'),
('FOUR', 'four', 'four', 'four', '', '', 'four', 'nsubuga house prefect', '1', 'f.jpg', '2'),
('FOURTEEN', 'fourteen', 'fourteen', 'fourteen', '', '', 'fourteen', 'protocol prefect', '1', 'q.jpg', '1'),
('NINE', 'nine', 'nine', 'nine', '', '', 'nine', 'george house prefect', '1', 'k.jpg', '2'),
('NINETEEN', 'nineteen', 'nineteen', 'nineteen', '', '', 'nineteen', 'chapel prefect', '1', 'v.jpg', '3'),
('ONE', 'one', 'Albert', 'Einstein', 'Senior Five', '', 'one', '--select position--', '1', 'a.jpg', '0'),
('SEVEN', 'seven', 'seven', 'seven', '', '', 'seven', 'george house prefect', '1', 'l.jpg', '1'),
('SEVENTEEN', 'seventeen', 'seventeen', 'seventeen', '', '', 'seventeen', 'time keeper', '1', 't.jpg', '3'),
('SIX', 'six', 'six', 'six', '', '', 'six', 'george house prefect', '1', 'g.jpg', '1'),
('SIXTEEN', 'sixteen', 'sixteen', 'sixteen', '', '', 'sixteen', 'time keeper', '1', 's.jpg', '1'),
('SIXTY', 'sixty', 'albert', 'einstein', '', '', 'please vote', 'head prefect', '1', 'a.jpg', '2'),
('TEN', 'ten', 'ten', 'ten', '', '', 'ten', 'armitage house prefect', '1', 'm.jpg', '0'),
('THIRTEEN', 'thirteen', 'thirteen', 'thirteen', '', '', 'thirteen', 'education minister', '1', 'p.jpg', '4'),
('THREE', 'three', 'three', 'three', '', '', 'three', 'nsubuga house prefect', '1', 'i.jpg', '0'),
('TWELVE', 'twelve', 'twelve', 'twelve', '', '', 'twelve', 'education minister', '1', 'o.jpg', '0'),
('TWENTY', 'twenty', 'twenty', 'twenty', '', '', 'twenty', 'chapel prefect', '1', 'w.jpg', '0'),
('TWENTYONE', 'twentyone', 'twentyone', 'twentyone', '', '', 'twentyone', 'clubs prefect', '1', 'e.jpg', '1'),
('TWENTYTWO', 'twentytwo', 'twentytwo', 'twentytwo', '', '', 'twentytwo', 'clubs prefect', '1', 'f.jpg', '1'),
('TWO', 'two', 'two', 'two', 'www', '', 'two', '--select position--', '1', 'e.jpg', '12'),
('W', 'w', 'w', 'w', 'w', '', 'w', 'nsubuga house prefect', '1', 'messi.PNG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE IF NOT EXISTS `counts` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(222) NOT NULL,
  `cand_id` varchar(222) NOT NULL,
  `position` varchar(222) NOT NULL,
  `rank` varchar(222) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`id`, `voter_id`, `cand_id`, `position`, `rank`) VALUES
(67, 'SIXTY', 'b', 'head_prefect', '0'),
(68, 'SIXTY', 'four', 'nsubuga_house_prefect', '0'),
(69, 'SIXTY', 'six', 'george_house_prefect', '0'),
(70, 'SIXTY', 'eight', 'armitage_house_prefect', '0'),
(71, 'SIXTY', 'thirteen', 'education_minister', '0'),
(72, 'SIXTY', 'fifteen', 'protocol_prefect', '0'),
(73, 'SIXTY', 'seventeen', 'time_keeper', '0'),
(74, 'SIXTY', 'eighteen', 'chapel_prefect', '0'),
(75, 'SIXTY', 'twentyone', 'clubs_prefect', '0'),
(76, 'SIXTY', 'fifty', 'mess_minister', '0'),
(77, 'SIXTY', 'fiftytwo', 'entertainment_minister', '0'),
(78, 'SIXTY', 'fiftyfive', 'sempa_house_prefect', '0'),
(79, 'SIXTY', '', 'submited', '0'),
(80, 'FIFTY', 'b', 'head_prefect', '0'),
(81, 'FIFTY', 'w', 'nsubuga_house_prefect', '0'),
(82, 'FIFTY', 'nine', 'george_house_prefect', '0'),
(83, 'FIFTY', 'eleven', 'armitage_house_prefect', '0'),
(84, 'FIFTY', 'thirteen', 'education_minister', '0'),
(85, 'FIFTY', 'fourteen', 'protocol_prefect', '0'),
(86, 'FIFTY', 'sixteen', 'time_keeper', '0'),
(87, 'FIFTY', 'nineteen', 'chapel_prefect', '0'),
(88, 'FIFTY', 'fortyseven', 'clubs_prefect', '0'),
(89, 'FIFTY', 'fifty', 'mess_minister', '0'),
(90, 'FIFTY', 'fiftyone', 'entertainment_minister', '0'),
(91, 'FIFTY', 'fiftyfour', 'sempa_house_prefect', '0'),
(92, 'FIFTY', '', 'submited', '0'),
(93, 'FIFTYFIVE', 'sixty', 'head_prefect', '0'),
(94, 'FIFTYFIVE', 'five', 'nsubuga_house_prefect', '0'),
(95, 'FIFTYFIVE', 'nine', 'george_house_prefect', '0'),
(96, 'FIFTYFIVE', 'eight', 'armitage_house_prefect', '0'),
(97, 'FIFTYFIVE', 'thirteen', 'education_minister', '0'),
(98, 'FIFTYFIVE', 'fifteen', 'protocol_prefect', '0'),
(99, 'FIFTYFIVE', 'seventeen', 'time_keeper', '0'),
(100, 'FIFTYFIVE', 'nineteen', 'chapel_prefect', '0'),
(101, 'FIFTYFIVE', 'fortysix', 'clubs_prefect', '0'),
(102, 'FIFTYFIVE', 'fifty', 'mess_minister', '0'),
(103, 'FIFTYFIVE', 'fiftysix', 'entertainment_minister', '0'),
(104, 'FIFTYFIVE', 'fiftyfour', 'sempa_house_prefect', '0'),
(105, 'FIFTYFIVE', '', 'submited', '0'),
(106, 'Z', 'sixty', 'head_prefect', '0'),
(107, 'Z', 'four', 'nsubuga_house_prefect', '0'),
(108, 'Z', 'seven', 'george_house_prefect', '0'),
(109, 'Z', 'eleven', 'armitage_house_prefect', '0'),
(110, 'Z', 'thirteen', 'education_minister', '0'),
(111, 'Z', 'fifteen', 'protocol_prefect', '0'),
(112, 'Z', 'seventeen', 'time_keeper', '0'),
(113, 'Z', 'nineteen', 'chapel_prefect', '0'),
(114, 'Z', 'twentytwo', 'clubs_prefect', '0'),
(115, 'Z', 'fortyeight', 'mess_minister', '0'),
(116, 'Z', 'fiftyone', 'entertainment_minister', '0'),
(117, 'Z', 'fiftyfive', 'sempa_house_prefect', '0'),
(118, 'Z', '', 'submited', '0');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `priority` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`, `priority`) VALUES
(7, 'Head Prefect', '1'),
(8, 'Education Minister', '2'),
(9, 'Protocol Prefect', '3'),
(10, 'Time Keeper', '4'),
(11, 'Chapel Prefect', '5'),
(12, 'Clubs Prefect', '6'),
(13, 'mess minister', '7'),
(14, 'entertainment minister', '8'),
(15, 'sempa house prefect', '9'),
(16, 'nsubuga house prefect', '10'),
(17, 'george house prefect', '11'),
(18, 'armitage house prefect', '12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `voter_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rank` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`voter_id`, `username`, `password`, `rank`) VALUES
('A', 'a', 'a', '1'),
('B', 'b', 'b', '1'),
('EIGHT', 'eight', 'eight', '1'),
('EIGHTEEN', 'eighteen', 'eighteen', '1'),
('ELEVEN', 'eleven', 'eleven', '1'),
('FIFTEEN', 'fifteen', 'fifteen', '1'),
('FIFTY', 'fifty', 'fifty', '1'),
('FIFTYFIVE', 'fiftyfive', 'fiftyfive', '1'),
('FIFTYFOUR', 'fiftyfour', 'fiftyfour', '1'),
('FIFTYONE', 'fiftyone', 'fiftyone', '1'),
('FIFTYSIX', 'fiftysix', 'fiftysix', '1'),
('FIFTYTHREE', 'fiftythree', 'fiftythree', '1'),
('FIFTYTWO', 'fiftytwo', 'fiftytwo', '1'),
('FIVE', 'five', 'five', '1'),
('FORTYEIGHT', 'fortyeight', 'fortyeight', '1'),
('FORTYNINE', 'fortynine', 'fortynine', '1'),
('FORTYSEVEN', 'fortyseven', 'fortyseven', '1'),
('FORTYSIX', 'fortysix', 'fortysix', '1'),
('FOUR', 'four', 'four', '1'),
('FOURTEEN', 'fourteen', 'fourteen', '1'),
('NINE', 'nine', 'nine', '1'),
('NINETEEN', 'nineteen', 'nineteen', '1'),
('ONE', 'one', 'one', '1'),
('S', 's', 's', '0'),
('SEVEN', 'seven', 'seven', '1'),
('SEVENTEEN', 'seventeen', 'seventeen', '1'),
('SIX', 'six', 'six', '1'),
('SIXTEEN', 'sixteen', 'sixteen', '1'),
('SIXTY', 'sixty', 'sixty', '1'),
('TEN', 'ten', 'ten', '1'),
('THIRTEEN', 'thirteen', 'thirteen', '1'),
('THREE', 'three', 'three', '1'),
('TWELVE', 'twelve', 'twelve', '1'),
('TWENTY', 'twenty', 'twenty', '1'),
('TWENTYONE', 'twentyone', 'twentyone', '1'),
('TWENTYTWO', 'twentytwo', 'twentytwo', '1'),
('TWO', 'two', 'two', '1'),
('W', 'w', 'w', '1'),
('XX', 'x', 'x', '0'),
('Z', 'z', 'z', '0');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `voter_id` varchar(20) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `class` varchar(222) NOT NULL,
  `stream` varchar(222) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rank` varchar(222) NOT NULL,
  `photo` varchar(555) NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `firstname`, `lastname`, `class`, `stream`, `username`, `password`, `rank`, `photo`, `status`) VALUES
('A', 'a', 'a', '', '', 'a', 'a', '1', '', 'voted'),
('B', 'b', 'b', '', '', 'b', 'b', '1', 'x.PNG', 'voted'),
('EIGHT', 'Candidate', 'Eight', '', '', 'eight', 'eight', '1', 'j.jpg', 'voted'),
('EIGHTEEN', 'eighteen', 'eighteen', '', '', 'eighteen', 'eighteen', '1', 'u.jpg', 'voted'),
('ELEVEN', 'eleven', 'eleven', '', '', 'eleven', 'eleven', '1', 'n.jpg', 'voted'),
('FIFTEEN', 'fifteen', 'fifteen', '', '', 'fifteen', 'fifteen', '1', 'r.jpg', 'voted'),
('FIFTY', 'fifty', 'fifty', '', '', 'fifty', 'fifty', '1', 'i.jpg', 'voted'),
('FIFTYFIVE', 'fiftyfive', 'fiftyfive', '', '', 'fiftyfive', 'fiftyfive', '1', 'zz.jpg', 'voted'),
('FIFTYFOUR', 'fiftyfour', 'fiftyfour', '', '', 'fiftyfour', 'fiftyfour', '1', 'q.jpg', ''),
('FIFTYONE', 'fiftyone', 'fiftyone', '', '', 'fiftyone', 'fiftyone', '1', 'y.jpg', ''),
('FIFTYSIX', 'fiftysix', 'fiftysix', '', '', 'fiftysix', 'fiftysix', '1', 'h.jpg', ''),
('FIFTYTHREE', 'fiftythree', 'fiftythree', '', '', 'fiftythree', 'fiftythree', '1', 'u.jpg', ''),
('FIFTYTWO', 'fiftytwo', 'fiftytwo', '', '', 'fiftytwo', 'fiftytwo', '1', 'index.jpg', ''),
('FIVE', 'five', 'five', '', '', 'five', 'five', '1', 'index.jpg', 'voted'),
('FORTYEIGHT', 'fortyeight', 'fortyeight', '', '', 'fortyeight', 'fortyeight', '1', 'z.jpg', 'voted'),
('FORTYNINE', 'fortynine', 'fortynine', '', '', 'fortynine', 'fortynine', '1', 'v.jpg', 'voted'),
('FORTYSEVEN', 'fortyseven', 'fortyseven', '', '', 'fortyseven', 'fortyseven', '1', 'zz.jpg', 'voted'),
('FORTYSIX', 'fortysix', 'fortysix', '', '', 'fortysix', 'fortysix', '1', 'h.jpg', ''),
('FOUR', 'four', 'four', '', '', 'four', 'four', '1', 'f.jpg', 'voted'),
('FOURTEEN', 'fourteen', 'fourteen', '', '', 'fourteen', 'fourteen', '1', 'q.jpg', 'voted'),
('NINE', 'nine', 'nine', '', '', 'nine', 'nine', '1', 'k.jpg', 'voted'),
('NINETEEN', 'nineteen', 'nineteen', '', '', 'nineteen', 'nineteen', '1', 'v.jpg', 'voted'),
('ONE', 'Albert', 'Einstein', '', '', 'one', 'one', '1', 'a.jpg', 'voted'),
('S', 's', 's', '', '', 's', 's', '0', '', ''),
('SEVEN', 'seven', 'seven', '', '', 'seven', 'seven', '1', 'l.jpg', 'voted'),
('SEVENTEEN', 'seventeen', 'seventeen', '', '', 'seventeen', 'seventeen', '1', 't.jpg', 'voted'),
('SIX', 'six', 'six', '', '', 'six', 'six', '1', 'g.jpg', 'voted'),
('SIXTEEN', 'sixteen', 'sixteen', '', '', 'sixteen', 'sixteen', '1', 's.jpg', 'voted'),
('SIXTY', 'albert', 'einstein', '', '', 'sixty', 'sixty', '1', 'a.jpg', 'voted'),
('TEN', 'ten', 'ten', '', '', 'ten', 'ten', '1', 'm.jpg', 'voted'),
('THIRTEEN', 'thirteen', 'thirteen', '', '', 'thirteen', 'thirteen', '1', 'p.jpg', 'voted'),
('THREE', 'three', 'three', '', '', 'three', 'three', '1', 'i.jpg', 'voted'),
('TWELVE', 'twelve', 'twelve', '', '', 'twelve', 'twelve', '1', 'o.jpg', 'voted'),
('TWENTY', 'twenty', 'twenty', '', '', 'twenty', 'twenty', '1', 'w.jpg', 'voted'),
('TWENTYONE', 'twentyone', 'twentyone', '', '', 'twentyone', 'twentyone', '1', 'e.jpg', 'voted'),
('TWENTYTWO', 'twentytwo', 'twentytwo', '', '', 'twentytwo', 'twentytwo', '1', 'f.jpg', ''),
('TWO', 'two', 'two', '', '', 'two', 'two', '1', 'e.jpg', 'voted'),
('W', 'w', 'w', '', '', 'w', 'w', '1', 'messi.PNG', ''),
('XX', 'x', 'x', '', '', 'x', 'x', '0', '', ''),
('Z', 'z', 'z', '', '', 'z', 'z', '0', '', 'voted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`voter_id`);

--
-- Indexes for table `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `counts`
--
ALTER TABLE `counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
