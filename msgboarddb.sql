-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2014 at 08:32 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msgboarddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`post_id` int(8) unsigned NOT NULL,
  `uname` varchar(12) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `post_date` datetime NOT NULL,
  `solved` enum('NO','YES') DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`post_id`, `uname`, `hostel`, `room_no`, `subject`, `message`, `post_date`, `solved`) VALUES
(37, 'com/11/12', 'hostel m', '395', 'Students Queries', 'my room is on fire', '2014-11-17 03:08:48', NULL),
(38, 'com/11/12', '', '', 'Students Queries', 'lala', '2014-11-17 03:09:07', NULL),
(39, 'com/11/12', '', '', 'Workers Query', 'lala', '2014-11-17 03:09:32', NULL),
(40, 'com/11/12', '', '', 'Students Queries', 'test', '2014-11-17 03:10:44', NULL),
(41, 'com/11/12', '', '', 'Workers Query', 'workers', '2014-11-17 03:16:00', NULL),
(42, 'com/11/12', '', '', 'Students Queries', 'we don''t have stima hostel', '2014-11-17 05:11:00', NULL),
(43, 'com/11/13', '', '', 'Students Queries', 'marvin', '2014-11-19 05:34:54', NULL),
(44, 'com/11/13', '', '', 'Workers Query', 'hey there im locked in the room', '2014-11-19 18:20:58', NULL),
(45, 'com/11/13', '', '', 'Students Queries', 'erfx', '2014-11-19 23:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`member_id` int(8) unsigned NOT NULL,
  `uname` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `psword` char(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `member_level` tinyint(2) NOT NULL,
  `hostel` varchar(40) NOT NULL,
  `room_no` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `uname`, `email`, `psword`, `reg_date`, `member_level`, `hostel`, `room_no`) VALUES
(8, 'marvincollin', 'marvin@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2014-11-15 09:47:59', 0, '', ''),
(9, 'marvin32', 'mn@mn.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '2014-11-16 17:11:53', 0, '', ''),
(10, 'com/11/12', 'marvincollins14@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '2014-11-17 03:08:09', 0, '', ''),
(11, 'com/11/13', 'marvinten@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '2014-11-19 05:33:58', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`member_id`), ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `post_id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `member_id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
