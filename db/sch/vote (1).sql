-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 04:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(222) NOT NULL,
  `user` varchar(222) NOT NULL,
  `pass` varchar(222) NOT NULL,
  `image` varchar(22) NOT NULL,
  `school` varchar(222) NOT NULL,
  `comm` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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

CREATE TABLE `candidates` (
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
('A', 'a', 'a', 'a', 'a', '', 'a', 'nsubuga house prefect', '1', '', '4'),
('EIGHT', 'eight', 'Candidate', 'Eight', '', '', 'eight', 'armitage house prefect', '1', 'j.jpg', '6'),
('EIGHTEEN', 'eighteen', 'eighteen', 'eighteen', '', '', 'eighteen', 'chapel prefect', '1', 'u.jpg', '5'),
('ELEVEN', 'eleven', 'eleven', 'eleven', '', '', 'eleven', 'armitage house prefect', '1', 'n.jpg', '2'),
('FIFTEEN', 'fifteen', 'fifteen', 'fifteen', '', '', 'fifteen', 'protocol prefect', '1', 'r.jpg', '10'),
('FIFTY', 'fifty', 'fifty', 'fifty', '', '', 'fifty', 'mess minister', '1', 'i.jpg', '3'),
('FIFTYFIVE', 'fiftyfive', 'fiftyfive', 'fiftyfive', '', '', 'fiftyfive', 'sempa house prefect', '1', 'zz.jpg', '5'),
('FIFTYFOUR', 'fiftyfour', 'fiftyfour', 'fiftyfour', '', '', 'fiftyfour', 'sempa house prefect', '1', 'q.jpg', '4'),
('FIFTYONE', 'fiftyone', 'fiftyone', 'fiftyone', '', '', 'fiftyone', 'entertainment minister', '1', 'y.jpg', '2'),
('FIFTYSIX', 'fiftysix', 'fiftysix', 'fiftysix', '', '', 'fiftysix', 'entertainment minister', '1', 'h.jpg', '3'),
('FIFTYTHREE', 'fiftythree', 'fiftythree', 'fiftythree', '', '', 'fiftythree', 'sempa house prefect', '1', 'u.jpg', '3'),
('FIFTYTWO', 'fiftytwo', 'fiftytwo', 'fiftytwo', '', '', 'fiftytwo', 'entertainment minister', '1', 'index.jpg', '7'),
('FIVE', 'five', 'five', 'five', '', '', 'five', 'nsubuga house prefect', '1', 'index.jpg', '2'),
('FORTYEIGHT', 'fortyeight', 'fortyeight', 'fortyeight', '', '', 'fortyeight', 'mess minister', '1', 'z.jpg', '4'),
('FORTYNINE', 'fortynine', 'fortynine', 'fortynine', '', '', 'fortynine', 'mess minister', '1', 'v.jpg', '5'),
('FORTYSEVEN', 'fortyseven', 'fortyseven', 'fortyseven', '', '', 'fortyseven', 'clubs prefect', '1', 'zz.jpg', '5'),
('FORTYSIX', 'fortysix', 'fortysix', 'fortysix', '', '', 'fortysix', 'clubs prefect', '1', 'h.jpg', '3'),
('FOUR', 'four', 'four', 'four', '', '', 'four', 'nsubuga house prefect', '1', 'f.jpg', '1'),
('FOURTEEN', 'fourteen', 'fourteen', 'fourteen', '', '', 'fourteen', 'protocol prefect', '1', 'q.jpg', '2'),
('NINE', 'nine', 'nine', 'nine', '', '', 'nine', 'george house prefect', '1', 'k.jpg', '4'),
('NINETEEN', 'nineteen', 'nineteen', 'nineteen', '', '', 'nineteen', 'chapel prefect', '1', 'v.jpg', '6'),
('ONE', 'one', 'Albert', 'Einstein', 'Senior Five', '', 'one', '--select position--', '1', 'a.jpg', '0'),
('SEVEN', 'seven', 'seven', 'seven', '', '', 'seven', 'george house prefect', '1', 'l.jpg', '5'),
('SEVENTEEN', 'seventeen', 'seventeen', 'seventeen', '', '', 'seventeen', 'time keeper', '1', 't.jpg', '9'),
('SIX', 'six', 'six', 'six', '', '', 'six', 'george house prefect', '1', 'g.jpg', '3'),
('SIXTEEN', 'sixteen', 'sixteen', 'sixteen', '', '', 'sixteen', 'time keeper', '1', 's.jpg', '3'),
('SIXTY', 'sixty', 'albert', 'einstein', '', '', 'please vote', 'head prefect', '1', 'a.jpg', '12'),
('TEN', 'ten', 'ten', 'ten', '', '', 'ten', 'armitage house prefect', '1', 'm.jpg', '4'),
('THIRTEEN', 'thirteen', 'thirteen', 'thirteen', '', '', 'thirteen', 'education minister', '1', 'p.jpg', '7'),
('THREE', 'three', 'three', 'three', '', '', 'three', 'nsubuga house prefect', '1', 'i.jpg', '3'),
('TWELVE', 'twelve', 'twelve', 'twelve', '', '', 'twelve', 'education minister', '1', 'o.jpg', '5'),
('TWENTY', 'twenty', 'twenty', 'twenty', '', '', 'twenty', 'chapel prefect', '1', 'w.jpg', '1'),
('TWENTYONE', 'twentyone', 'twentyone', 'twentyone', '', '', 'twentyone', 'clubs prefect', '1', 'e.jpg', '1'),
('TWENTYTWO', 'twentytwo', 'twentytwo', 'twentytwo', '', '', 'twentytwo', 'clubs prefect', '1', 'f.jpg', '3'),
('TWO', 'two', 'two', 'two', 'www', '', 'two', '--select position--', '1', 'e.jpg', '12'),
('W', 'w', 'w', 'w', 'w', '', 'w', 'nsubuga house prefect', '1', 'messi.PNG', '2');

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE `counts` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(222) NOT NULL,
  `cand_id` varchar(222) NOT NULL,
  `position` varchar(222) NOT NULL,
  `rank` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`id`, `voter_id`, `cand_id`, `position`, `rank`) VALUES
(132, 'FIVE', 'sixty', 'head_prefect', '0'),
(133, 'FIVE', 'four', 'nsubuga_house_prefect', '0'),
(134, 'FIVE', 'nine', 'george_house_prefect', '0'),
(135, 'FIVE', 'ten', 'armitage_house_prefect', '0'),
(136, 'FIVE', 'twelve', 'education_minister', '0'),
(137, 'FIVE', 'fourteen', 'protocol_prefect', '0'),
(138, 'FIVE', 'seventeen', 'time_keeper', '0'),
(139, 'FIVE', 'nineteen', 'chapel_prefect', '0'),
(140, 'FIVE', 'fortyseven', 'clubs_prefect', '0'),
(141, 'FIVE', 'fortynine', 'mess_minister', '0'),
(142, 'FIVE', 'fiftytwo', 'entertainment_minister', '0'),
(143, 'FIVE', 'fiftythree', 'sempa_house_prefect', '0'),
(144, 'FIVE', '', 'submited', '0'),
(145, 'SIX', 'sixty', 'head_prefect', '0'),
(146, 'SIX', 'five', 'nsubuga_house_prefect', '0'),
(147, 'SIX', 'seven', 'george_house_prefect', '0'),
(148, 'SIX', 'eight', 'armitage_house_prefect', '0'),
(149, 'SIX', 'thirteen', 'education_minister', '0'),
(150, 'SIX', 'fifteen', 'protocol_prefect', '0'),
(151, 'SIX', 'seventeen', 'time_keeper', '0'),
(152, 'SIX', 'nineteen', 'chapel_prefect', '0'),
(153, 'SIX', 'fortyseven', 'clubs_prefect', '0'),
(154, 'SIX', 'fortynine', 'mess_minister', '0'),
(155, 'SIX', 'fiftytwo', 'entertainment_minister', '0'),
(156, 'SIX', 'fiftyfive', 'sempa_house_prefect', '0'),
(157, 'SIX', '', 'submited', '0'),
(158, 'TWO', 'sixty', 'head_prefect', '0'),
(159, 'TWO', 'three', 'nsubuga_house_prefect', '0'),
(160, 'TWO', 'six', 'george_house_prefect', '0'),
(161, 'TWO', 'eleven', 'armitage_house_prefect', '0'),
(162, 'TWO', 'thirteen', 'education_minister', '0'),
(163, 'TWO', 'fifteen', 'protocol_prefect', '0'),
(164, 'TWO', 'seventeen', 'time_keeper', '0'),
(165, 'TWO', 'nineteen', 'chapel_prefect', '0'),
(166, 'TWO', 'fortysix', 'clubs_prefect', '0'),
(167, 'TWO', 'fifty', 'mess_minister', '0'),
(168, 'TWO', 'fiftytwo', 'entertainment_minister', '0'),
(169, 'TWO', 'fiftythree', 'sempa_house_prefect', '0'),
(170, 'TWO', '', 'submited', '0'),
(171, 'ONE', 'sixty', 'head_prefect', '0'),
(172, 'ONE', 'a', 'nsubuga_house_prefect', '0'),
(173, 'ONE', 'seven', 'george_house_prefect', '0'),
(174, 'ONE', 'ten', 'armitage_house_prefect', '0'),
(175, 'ONE', 'thirteen', 'education_minister', '0'),
(176, 'ONE', 'fifteen', 'protocol_prefect', '0'),
(177, 'ONE', 'sixteen', 'time_keeper', '0'),
(178, 'ONE', 'nineteen', 'chapel_prefect', '0'),
(179, 'ONE', 'twentytwo', 'clubs_prefect', '0'),
(180, 'ONE', 'fifty', 'mess_minister', '0'),
(181, 'ONE', 'fiftytwo', 'entertainment_minister', '0'),
(182, 'ONE', 'fiftyfour', 'sempa_house_prefect', '0'),
(183, 'ONE', '', 'submited', '0'),
(184, 'FOUR', 'sixty', 'head_prefect', '0'),
(185, 'FOUR', 'three', 'nsubuga_house_prefect', '0'),
(186, 'FOUR', 'six', 'george_house_prefect', '0'),
(187, 'FOUR', 'eight', 'armitage_house_prefect', '0'),
(188, 'FOUR', 'twelve', 'education_minister', '0'),
(189, 'FOUR', 'fifteen', 'protocol_prefect', '0'),
(190, 'FOUR', 'seventeen', 'time_keeper', '0'),
(191, 'FOUR', 'eighteen', 'chapel_prefect', '0'),
(192, 'FOUR', 'twentyone', 'clubs_prefect', '0'),
(193, 'FOUR', 'fortynine', 'mess_minister', '0'),
(194, 'FOUR', 'fiftyone', 'entertainment_minister', '0'),
(195, 'FOUR', 'fiftyfive', 'sempa_house_prefect', '0'),
(196, 'FOUR', '', 'submited', '0'),
(197, 'TEN', 'sixty', 'head_prefect', '0'),
(198, 'TEN', 'w', 'nsubuga_house_prefect', '0'),
(199, 'TEN', 'nine', 'george_house_prefect', '0'),
(200, 'TEN', 'eight', 'armitage_house_prefect', '0'),
(201, 'TEN', 'thirteen', 'education_minister', '0'),
(202, 'TEN', 'fifteen', 'protocol_prefect', '0'),
(203, 'TEN', 'seventeen', 'time_keeper', '0'),
(204, 'TEN', 'eighteen', 'chapel_prefect', '0'),
(205, 'TEN', 'fortyseven', 'clubs_prefect', '0'),
(206, 'TEN', 'fifty', 'mess_minister', '0'),
(207, 'TEN', 'fiftytwo', 'entertainment_minister', '0'),
(208, 'TEN', 'fiftythree', 'sempa_house_prefect', '0'),
(209, 'TEN', '', 'submited', '0'),
(210, 'FIFTEEN', 'sixty', 'head_prefect', '0'),
(211, 'FIFTEEN', 'a', 'nsubuga_house_prefect', '0'),
(212, 'FIFTEEN', 'nine', 'george_house_prefect', '0'),
(213, 'FIFTEEN', 'eight', 'armitage_house_prefect', '0'),
(214, 'FIFTEEN', 'thirteen', 'education_minister', '0'),
(215, 'FIFTEEN', 'fourteen', 'protocol_prefect', '0'),
(216, 'FIFTEEN', 'seventeen', 'time_keeper', '0'),
(217, 'FIFTEEN', 'twenty', 'chapel_prefect', '0'),
(218, 'FIFTEEN', 'twentytwo', 'clubs_prefect', '0'),
(219, 'FIFTEEN', 'fortyeight', 'mess_minister', '0'),
(220, 'FIFTEEN', 'fiftysix', 'entertainment_minister', '0'),
(221, 'FIFTEEN', 'fiftyfour', 'sempa_house_prefect', '0'),
(222, 'FIFTEEN', '', 'submited', '0'),
(223, 'THIRTEEN', 'sixty', 'head_prefect', '0'),
(224, 'THIRTEEN', 'a', 'nsubuga_house_prefect', '0'),
(225, 'THIRTEEN', 'nine', 'george_house_prefect', '0'),
(226, 'THIRTEEN', 'eight', 'armitage_house_prefect', '0'),
(227, 'THIRTEEN', 'thirteen', 'education_minister', '0'),
(228, 'THIRTEEN', 'fifteen', 'protocol_prefect', '0'),
(229, 'THIRTEEN', 'seventeen', 'time_keeper', '0'),
(230, 'THIRTEEN', 'eighteen', 'chapel_prefect', '0'),
(231, 'THIRTEEN', 'fortyseven', 'clubs_prefect', '0'),
(232, 'THIRTEEN', 'fortyeight', 'mess_minister', '0'),
(233, 'THIRTEEN', 'fiftysix', 'entertainment_minister', '0'),
(234, 'THIRTEEN', 'fiftyfour', 'sempa_house_prefect', '0'),
(235, 'THIRTEEN', '', 'submited', '0'),
(236, 'TWELVE', 'sixty', 'head_prefect', '0'),
(237, 'TWELVE', 'three', 'nsubuga_house_prefect', '0'),
(238, 'TWELVE', 'seven', 'george_house_prefect', '0'),
(239, 'TWELVE', 'eight', 'armitage_house_prefect', '0'),
(240, 'TWELVE', 'thirteen', 'education_minister', '0'),
(241, 'TWELVE', 'fifteen', 'protocol_prefect', '0'),
(242, 'TWELVE', 'seventeen', 'time_keeper', '0'),
(243, 'TWELVE', 'eighteen', 'chapel_prefect', '0'),
(244, 'TWELVE', 'fortysix', 'clubs_prefect', '0'),
(245, 'TWELVE', 'fortynine', 'mess_minister', '0'),
(246, 'TWELVE', 'fiftytwo', 'entertainment_minister', '0'),
(247, 'TWELVE', 'fiftyfive', 'sempa_house_prefect', '0'),
(248, 'TWELVE', '', 'submited', '0'),
(249, 'FOURTEEN', 'sixty', 'head_prefect', '0'),
(250, 'FOURTEEN', 'w', 'nsubuga_house_prefect', '0'),
(251, 'FOURTEEN', 'six', 'george_house_prefect', '0'),
(252, 'FOURTEEN', 'ten', 'armitage_house_prefect', '0'),
(253, 'FOURTEEN', 'twelve', 'education_minister', '0'),
(254, 'FOURTEEN', 'fifteen', 'protocol_prefect', '0'),
(255, 'FOURTEEN', 'sixteen', 'time_keeper', '0'),
(256, 'FOURTEEN', 'nineteen', 'chapel_prefect', '0'),
(257, 'FOURTEEN', 'fortyseven', 'clubs_prefect', '0'),
(258, 'FOURTEEN', 'fortynine', 'mess_minister', '0'),
(259, 'FOURTEEN', 'fiftytwo', 'entertainment_minister', '0'),
(260, 'FOURTEEN', 'fiftyfive', 'sempa_house_prefect', '0'),
(261, 'FOURTEEN', '', 'submited', '0'),
(262, 'EIGHT', 'sixty', 'head_prefect', '0'),
(263, 'EIGHT', 'a', 'nsubuga_house_prefect', '0'),
(264, 'EIGHT', 'seven', 'george_house_prefect', '0'),
(265, 'EIGHT', 'ten', 'armitage_house_prefect', '0'),
(266, 'EIGHT', 'twelve', 'education_minister', '0'),
(267, 'EIGHT', 'fifteen', 'protocol_prefect', '0'),
(268, 'EIGHT', 'seventeen', 'time_keeper', '0'),
(269, 'EIGHT', 'eighteen', 'chapel_prefect', '0'),
(270, 'EIGHT', 'fortysix', 'clubs_prefect', '0'),
(271, 'EIGHT', 'fortyeight', 'mess_minister', '0'),
(272, 'EIGHT', 'fiftyone', 'entertainment_minister', '0'),
(273, 'EIGHT', 'fiftyfive', 'sempa_house_prefect', '0'),
(274, 'EIGHT', '', 'submited', '0'),
(275, 'THREE', 'sixty', 'head_prefect', '0'),
(276, 'THREE', 'five', 'nsubuga_house_prefect', '0'),
(277, 'THREE', 'seven', 'george_house_prefect', '0'),
(278, 'THREE', 'eleven', 'armitage_house_prefect', '0'),
(279, 'THREE', 'twelve', 'education_minister', '0'),
(280, 'THREE', 'fifteen', 'protocol_prefect', '0'),
(281, 'THREE', 'sixteen', 'time_keeper', '0'),
(282, 'THREE', 'nineteen', 'chapel_prefect', '0'),
(283, 'THREE', 'twentytwo', 'clubs_prefect', '0'),
(284, 'THREE', 'fortyeight', 'mess_minister', '0'),
(285, 'THREE', 'fiftysix', 'entertainment_minister', '0'),
(286, 'THREE', 'fiftyfour', 'sempa_house_prefect', '0'),
(287, 'THREE', '', 'submited', '0');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `priority` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `voter_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rank` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`voter_id`, `username`, `password`, `rank`) VALUES
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
('FORTYONE', 'fortyone', 'fortyone', '0'),
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
('THIRTY', 'thirty', 'thirty', '0'),
('THIRTYEIGHT', 'thirtyeight', 'thirtyeight', '0'),
('THIRTYFIVE', 'thirtyfive', 'thirtyfive', '0'),
('THIRTYFOUR', 'thirtyfour', 'thirtyfour', '0'),
('THIRTYNINE', 'thirtynine', 'thirtynine', '0'),
('THIRTYSEVEN', 'thirtyseven', 'thirtyseven', '0'),
('THIRTYSIX', 'thirtysix', 'thirtysix', '0'),
('THIRTYTHREE', 'thirtythree', 'thirtythree', '0'),
('THIRTYTWO', 'thirtytwo', 'thirtytwo', '0'),
('THIRYTONE', 'thirytone', 'thirytone', '0'),
('THREE', 'three', 'three', '1'),
('TWELVE', 'twelve', 'twelve', '1'),
('TWENTY', 'twenty', 'twenty', '1'),
('TWENTYEIGHT', 'twentyeight', 'twentyeight', '0'),
('TWENTYFIVE', 'twentyfive', 'twentyfive', '0'),
('TWENTYFOUR', 'twentyfour', 'twentyfour', '0'),
('TWENTYNINE', 'twentynine', 'twentynine', '0'),
('TWENTYONE', 'twentyone', 'twentyone', '1'),
('TWENTYSEVEN', 'twentyseven', 'twentyseven', '0'),
('TWENTYSIX', 'twentysix', 'twentysix', '0'),
('TWENTYTHREE', 'twentythree', 'twentythree', '0'),
('TWENTYTWO', 'twentytwo', 'twentytwo', '1'),
('TWO', 'two', 'two', '1'),
('W', 'w', 'w', '1'),
('XX', 'x', 'x', '0'),
('Z', 'z', 'z', '0');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
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
('EIGHT', 'Candidate', 'Eight', '', '', 'eight', 'eight', '1', 'j.jpg', 'voted'),
('EIGHTEEN', 'eighteen', 'eighteen', '', '', 'eighteen', 'eighteen', '1', 'u.jpg', ''),
('ELEVEN', 'eleven', 'eleven', '', '', 'eleven', 'eleven', '1', 'n.jpg', ''),
('FIFTEEN', 'fifteen', 'fifteen', '', '', 'fifteen', 'fifteen', '1', 'r.jpg', 'voted'),
('FIFTY', 'fifty', 'fifty', '', '', 'fifty', 'fifty', '1', 'i.jpg', ''),
('FIFTYFIVE', 'fiftyfive', 'fiftyfive', '', '', 'fiftyfive', 'fiftyfive', '1', 'zz.jpg', ''),
('FIFTYFOUR', 'fiftyfour', 'fiftyfour', '', '', 'fiftyfour', 'fiftyfour', '1', 'q.jpg', ''),
('FIFTYONE', 'fiftyone', 'fiftyone', '', '', 'fiftyone', 'fiftyone', '1', 'y.jpg', ''),
('FIFTYSIX', 'fiftysix', 'fiftysix', '', '', 'fiftysix', 'fiftysix', '1', 'h.jpg', ''),
('FIFTYTHREE', 'fiftythree', 'fiftythree', '', '', 'fiftythree', 'fiftythree', '1', 'u.jpg', ''),
('FIFTYTWO', 'fiftytwo', 'fiftytwo', '', '', 'fiftytwo', 'fiftytwo', '1', 'index.jpg', ''),
('FIVE', 'five', 'five', '', '', 'five', 'five', '1', 'index.jpg', 'voted'),
('FORTYEIGHT', 'fortyeight', 'fortyeight', '', '', 'fortyeight', 'fortyeight', '1', 'z.jpg', ''),
('FORTYNINE', 'fortynine', 'fortynine', '', '', 'fortynine', 'fortynine', '1', 'v.jpg', ''),
('FORTYONE', 'fortyone', 'fortyone', '', '', 'fortyone', 'fortyone', '0', '', ''),
('FORTYSEVEN', 'fortyseven', 'fortyseven', '', '', 'fortyseven', 'fortyseven', '1', 'zz.jpg', ''),
('FORTYSIX', 'fortysix', 'fortysix', '', '', 'fortysix', 'fortysix', '1', 'h.jpg', ''),
('FOUR', 'four', 'four', '', '', 'four', 'four', '1', 'f.jpg', 'voted'),
('FOURTEEN', 'fourteen', 'fourteen', '', '', 'fourteen', 'fourteen', '1', 'q.jpg', 'voted'),
('NINE', 'nine', 'nine', '', '', 'nine', 'nine', '1', 'k.jpg', ''),
('NINETEEN', 'nineteen', 'nineteen', '', '', 'nineteen', 'nineteen', '1', 'v.jpg', ''),
('ONE', 'Albert', 'Einstein', '', '', 'one', 'one', '1', 'a.jpg', 'voted'),
('SEVEN', 'seven', 'seven', '', '', 'seven', 'seven', '1', 'l.jpg', ''),
('SEVENTEEN', 'seventeen', 'seventeen', '', '', 'seventeen', 'seventeen', '1', 't.jpg', ''),
('SIX', 'six', 'six', '', '', 'six', 'six', '1', 'g.jpg', 'voted'),
('SIXTEEN', 'sixteen', 'sixteen', '', '', 'sixteen', 'sixteen', '1', 's.jpg', ''),
('SIXTY', 'albert', 'einstein', '', '', 'sixty', 'sixty', '1', 'a.jpg', ''),
('TEN', 'ten', 'ten', '', '', 'ten', 'ten', '1', 'm.jpg', 'voted'),
('THIRTEEN', 'thirteen', 'thirteen', '', '', 'thirteen', 'thirteen', '1', 'p.jpg', 'voted'),
('THIRTY', 'thirty', 'thirty', '', '', 'thirty', 'thirty', '0', '', ''),
('THIRTYEIGHT', 'thirtyeight', 'thirtyeight', '', '', 'thirtyeight', 'thirtyeight', '0', '', ''),
('THIRTYFIVE', 'thirtyfive', 'thirtyfive', '', '', 'thirtyfive', 'thirtyfive', '0', '', ''),
('THIRTYFOUR', 'thirtyfour', 'thirtyfour', '', '', 'thirtyfour', 'thirtyfour', '0', '', ''),
('THIRTYNINE', 'thirtynine', 'thirtynine', '', '', 'thirtynine', 'thirtynine', '0', '', ''),
('THIRTYSEVEN', 'thirtyseven', 'thirtyseven', '', '', 'thirtyseven', 'thirtyseven', '0', '', ''),
('THIRTYSIX', 'thirtysix', 'thirtysix', '', '', 'thirtysix', 'thirtysix', '0', '', ''),
('THIRTYTHREE', 'thirtythree', 'thirtythree', '', '', 'thirtythree', 'thirtythree', '0', '', ''),
('THIRTYTWO', 'thirtytwo', 'thirtytwo', '', '', 'thirtytwo', 'thirtytwo', '0', '', ''),
('THIRYTONE', 'thirytone', 'thirytone', '', '', 'thirytone', 'thirytone', '0', '', ''),
('THREE', 'three', 'three', '', '', 'three', 'three', '1', 'i.jpg', 'voted'),
('TWELVE', 'twelve', 'twelve', '', '', 'twelve', 'twelve', '1', 'o.jpg', 'voted'),
('TWENTY', 'twenty', 'twenty', '', '', 'twenty', 'twenty', '1', 'w.jpg', ''),
('TWENTYEIGHT', 'twentyeight', 'twentyeight', '', '', 'twentyeight', 'twentyeight', '0', '', ''),
('TWENTYFIVE', 'twentyfive', 'twentyfive', '', '', 'twentyfive', 'twentyfive', '0', '', ''),
('TWENTYFOUR', 'twentyfour', 'twentyfour', '', '', 'twentyfour', 'twentyfour', '0', '', ''),
('TWENTYNINE', 'twentynine', 'twentynine', '', '', 'twentynine', 'twentynine', '0', '', ''),
('TWENTYONE', 'twentyone', 'twentyone', '', '', 'twentyone', 'twentyone', '1', 'e.jpg', ''),
('TWENTYSEVEN', 'twentyseven', 'twentyseven', '', '', 'twentyseven', 'twentyseven', '0', '', ''),
('TWENTYSIX', 'twentysix', 'twentysix', '', '', 'twentysix', 'twentysix', '0', '', ''),
('TWENTYTHREE', 'twentythree', 'twentythree', '', '', 'twentythree', 'twentythree', '0', '', ''),
('TWENTYTWO', 'twentytwo', 'twentytwo', '', '', 'twentytwo', 'twentytwo', '1', 'f.jpg', ''),
('TWO', 'two', 'two', '', '', 'two', 'two', '1', 'e.jpg', 'voted');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
