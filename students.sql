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
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`user_id` mediumint(6) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `admission` char(15) NOT NULL,
  `amountpaid` int(15) NOT NULL,
  `slipno` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `email`, `admission`, `amountpaid`, `slipno`, `fname`) VALUES
(1, 'xcom@p.com', '123456', 2012, 0, ''),
(2, 'kelvin@gmail.com', 'com/01/12', 2750, 2750, ''),
(3, 'marvincollins14@gmail.com', 'com/01/12', 3250, 500012, ''),
(4, 'cmohosea@yahoo.com', 'com/01/12', 210, 5014, ''),
(5, 'xxxxx@xxx.com', 'xxx/11/12', 302, 5000012, ''),
(6, 'marvincollins14@gmail.com', 'cc12555555', 2750, 5000012, ''),
(7, 'marvin@test.com', 'com/001/12', 2750, 5000012, ''),
(8, 'marvin@test.com', '300com', 2754, 500012, ''),
(9, 'marvinten@gmail.com', 'com/11/13', 3250, 2540001, ''),
(10, 'zawadid@gmail.com', 'com/11/13', 3250, 2564110, ''),
(11, 'pauline@yahoo.com', '12222222', 5622, 4522, ''),
(12, 'mutai@gmail.com', 'com/11/13', 2012, 65, '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `student_id` mediumint(6) unsigned NOT NULL,
  `school` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `admission` varchar(20) NOT NULL,
  `phone_no` int(10) unsigned NOT NULL,
  `sex` enum('MALE','FEMALE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`post_id` mediumint(6) unsigned NOT NULL,
  `uname` int(12) NOT NULL,
  `subjet` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `post_date` datetime NOT NULL,
  `solved` enum('NO','YES') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE IF NOT EXISTS `hostels` (
`user_id` mediumint(6) unsigned NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `year` char(40) NOT NULL,
  `sem` char(40) NOT NULL,
  `roomno` char(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`user_id`, `hostel`, `year`, `sem`, `roomno`) VALUES
(1, '30', '2', '2', '395'),
(2, '125', '2', '2', '395'),
(3, '125', '2', '2', '390'),
(4, '125', '3', '1', '10'),
(5, '30', '4', '2', '360'),
(6, '30', '2', '1', '10'),
(7, '125', '2', '2', '302'),
(8, '125', '2', '2', '201'),
(9, '5', '3', '2', '3932'),
(10, '30', '2', '1', '201'),
(11, '30', '2', '2', '60'),
(12, '5', '4', '2', '300'),
(13, '5', '2', '2', '60'),
(14, '125', '1', '2', '32'),
(15, '2', '2', '2', '201');

-- --------------------------------------------------------

--
-- Table structure for table `querries`
--

CREATE TABLE IF NOT EXISTS `querries` (
`user_id` mediumint(6) unsigned NOT NULL,
  `uname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psword` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `user_level` tinyint(3) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `room_no` varchar(15) NOT NULL,
  `solved` enum('NO','YES') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `querries`
--

INSERT INTO `querries` (`user_id`, `uname`, `email`, `psword`, `reg_date`, `user_level`, `hostel`, `room_no`, `solved`) VALUES
(1, 'carter123', 'marvincollins@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '2014-11-15 22:36:34', 0, 'm', '123', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` mediumint(6) unsigned NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psword` char(40) NOT NULL,
  `admmision` char(15) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_level` tinyint(2) unsigned DEFAULT NULL,
  `school` char(20) NOT NULL,
  `haddr` varchar(50) NOT NULL,
  `sex` char(15) NOT NULL,
  `course` varchar(50) NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `check_in` enum('NO','YES') NOT NULL,
  `matress` tinyint(6) DEFAULT NULL,
  `curtain` tinyint(6) DEFAULT NULL,
  `keyy` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `psword`, `admmision`, `registration_date`, `user_level`, `school`, `haddr`, `sex`, `course`, `phone`, `check_in`, `matress`, `curtain`, `keyy`) VALUES
(1, 'Marvin', 'Collins', 'zawadi@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'zzzzzzz', '2014-11-04 18:32:01', 1, '30', 'zzzz', 'f', '0', 201212, 'YES', 1, 2, 1),
(2, 'marvin', 'collins', 'zzzkzen@zz.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'zzzzzzz', '2014-11-04 18:33:30', NULL, '30', 'zzzz', 'f', '0', 201212, 'YES', 7, 7, 7),
(3, 'fyrose', 'zawadi', 'mseti@yahoo.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/11/12', '2014-11-04 18:40:22', NULL, '30', 'kilifi', 'm', '0', 201212, 'YES', 0, 0, 0),
(4, 'Fyrose', 'zawadi', 'mszeti@yahoo.com', 'fd15e5dc45839815c6465b7b7e60728057c5af3f', 'com/11/12', '2014-11-04 18:46:06', NULL, '125', 'kilifi', 'm', '0', 201212, 'NO', 1, 1, 1),
(5, 'marvin', 'zawadi', 'marvincollins14@gmail.com', 'fd15e5dc45839815c6465b7b7e60728057c5af3f', 'com/11/12', '2014-11-04 18:47:20', NULL, '30', 'kilifi', 'm', 'sza', 201212, 'YES', 1, 1, 1),
(6, 'zz', 'zz', 'zzzz@as.com', 'bcf22dfc6fb76b7366b1f1675baf2332a0e6a7ce', 'xxxxxxxx', '2014-11-04 19:33:03', NULL, '30', 'xxxx', 'm', 'xxxx', 626612, 'NO', 0, 0, 0),
(7, 'kelvin', 'kimutai', 'kimutai@gmail.com', '0904ccacdb2b96a9624c38a1e83a454bd439ad4e', 'kiluma', '2014-11-05 01:47:08', NULL, '5', '56. kibwezi', 'm', 'comp', 879, 'YES', 1, 2, 1),
(8, 'gorrety', 'maringo', 'gorrety@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '', '2014-11-05 03:04:50', NULL, '125', '', '', '', NULL, 'YES', 1, 2, 1),
(9, 'marvin', 'carter', 'carterangel@gmail.com', '7cc29662f05b49a0c09f533ef0381270309b6a66', 'com/11/12', '2014-11-10 22:48:17', NULL, '30', '0724957739', 'm', 'computer science', 704407117, 'YES', 0, 0, 0),
(10, 'Marvin', 'hosea', 'marvin@test.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/11/12', '2014-11-11 00:33:43', 1, '30', 'knm', 'm', 'sas', 704407117, 'YES', 1, 2, 1),
(11, 'denis', 'denis', 'denis@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/11/12', '2014-11-11 10:42:47', NULL, '30', '0724958878', 'f', 'computer science', 704407117, 'YES', 0, 0, 0),
(12, 'ccc', 'cccc', 'xxxxxx@xxx.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/11/12', '2014-11-13 01:55:22', NULL, '30', '0704407117', 'm', 'computer science', 704407117, 'YES', 1, 1, 1),
(13, '222', 'ss', 'zz@ss.com', 'a2540a803401bcb9ee8315c7769d74de1da5f55e', 'com/11/12', '2014-11-13 04:13:32', NULL, '125', '070444', 'f', 'hhvh', 0, 'NO', NULL, NULL, NULL),
(14, 'aaa', 'sss', 'ssss@gg.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/01/12', '2014-11-13 04:16:33', NULL, '30', '070444', 'm', 'ddd', 0, 'NO', NULL, NULL, NULL),
(15, 'marvin', 'carter', 'testtest@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com_11_12', '2014-11-15 21:47:59', NULL, '30', 'test', 'm', 'computer science', 201, 'NO', NULL, NULL, NULL),
(16, 'test', 'test', 'mn@mn.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/01/12', '2014-11-16 23:39:58', NULL, '125', '210', 'm', 'computer', 2012, 'NO', NULL, NULL, NULL),
(17, 'xxx', 'xxx', 'xxxxx@xxx.com', 'bcf22dfc6fb76b7366b1f1675baf2332a0e6a7ce', 'xxx/11/12', '2014-11-16 23:52:39', NULL, '30', '2012', 'm', 'xxxxx', 2012, 'NO', NULL, NULL, NULL),
(18, 'marvin', 'hosea', 'hosea@gmail.com', '0f58d5a5515f1a8a9d179aa58858b67b2f8a3388', 'c1222222', '2014-11-17 05:26:05', NULL, '125', '02145', 'f', 'computer', 245694546, 'YES', NULL, NULL, NULL),
(19, 'marvin collins', 'hosea', 'osea@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/01/12', '2014-11-18 23:13:18', NULL, '30', '070444', 'f', 'computer', 7011456, 'NO', NULL, NULL, NULL),
(20, 'kevin', 'mutai', 'mutai@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/001/12', '2014-11-18 23:52:13', NULL, '125', '07200089', 'm', 'computer science', 704407117, 'NO', NULL, NULL, NULL),
(21, 'marvin', 'test', 'test@test.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/001/12', '2014-11-19 00:57:13', NULL, '30', '012', 'm', 'comselect', 124, 'NO', NULL, NULL, NULL),
(22, 'marvin', 'collins', 'marvinten@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/11/13', '2014-11-19 04:31:18', NULL, '125', '0704407117', 'm', 'actuary', 704407117, 'YES', 1, 2, 1),
(23, 'wife', 'zawadi', 'zawadis@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/12/10', '2014-11-19 06:02:23', NULL, '125', '041', 'm', 'ast', 14, 'NO', NULL, NULL, NULL),
(24, 'wife', 'zawadi', 'zawadid@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'com/12/10', '2014-11-19 06:09:11', NULL, '125', '041', 'm', 'ast', 14, 'NO', NULL, NULL, NULL),
(25, 'test', 'pauline', 'pauline@yahoo.com', 'bda4e54569a40487c4bba388633b7a75ce7263d3', 'com/001/12', '2014-11-19 10:12:24', NULL, '30', '01245', 'm', 'maths', 145, 'NO', NULL, NULL, NULL),
(26, 'pussy', 'pussy', 'pussy@gmail.com', '70352f41061eda4ff3c322094af068ba70c3b38b', 'ed/001/12', '2014-11-19 18:54:02', NULL, '125', '0701147774', 'm', 'education', 704407117, 'NO', NULL, NULL, NULL),
(27, 'XXXxxxx', 'XXXX', 'xxx@xxx.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '0210moo', '2014-11-19 21:18:42', NULL, '30', '000000', 'm', '0000', 0, 'NO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
`user_id` mediumint(6) unsigned NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psword` varchar(25) NOT NULL,
  `id_no` int(15) NOT NULL,
  `job_title` varchar(40) NOT NULL,
  `hostel` varchar(40) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_level` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`user_id`, `fname`, `lname`, `email`, `psword`, `id_no`, `job_title`, `hostel`, `phone_no`, `date_reg`, `user_level`) VALUES
(1, 'marvin', 'collins', 'marvincollins14@gmail.com', 'f7c3bc1d808e04732adf67996', 30025422, 'hostel cleaner', '30', 704407117, '2014-11-11 05:54:58', 0),
(2, 'STELLA', 'KOLWA', 'stellachebet@yahoo.com', 'f7c3bc1d808e04732adf67996', 20025422, 'janitor', '125', 704407117, '2014-11-11 06:00:43', 0),
(3, 'xxxxx', 'xxxxx', 'xxxxx@gmail.com', '88ea39439e74fa27c09a4fc0b', 30025422, 'hostel cleaner', '30', 704407117, '2014-11-11 07:43:16', 0),
(4, 'worker', 'worker', 'worker@gmail.com', '88ea39439e74fa27c09a4fc0b', 30025422, 'hostel cleaner', '30', 704407117, '2014-11-11 07:44:05', 0),
(5, 'STELLA', 'worker', 'test@test.com', '70352f41061eda4ff3c322094', 30025422, 'hostel cleaner', '30', 704407117, '2014-11-11 08:04:01', 0),
(6, 'com', 'com', 'stellachebet@yahoo.com', 'f7c3bc1d808e04732adf67996', 30025422, 'hostel cleaner', '30', 704407117, '2014-11-11 08:30:40', NULL),
(7, 'test', 'test', 'denis@gmail.com', 'a642a77abd7d4f51bf9226cea', 52, 'hostel cleaner', '30', 52, '2014-11-11 19:51:35', NULL),
(8, 'marvin', 'marvin', 'marvin@gmail.com', '70352f41061eda4ff3c322094', 52, 'hostel cleaner', '15', 52, '2014-11-11 19:56:31', NULL),
(9, 'cccc', 'cccc', 'cccc@ccc.com', 'cd19ee9e3fe04fdc3fcc0449a', 20122, 'ccccc', '30', 3015, '2014-11-17 08:41:33', NULL),
(10, 'rrrrrrr', 'rrrrrrr', 'zawadid@gmail.com', '70352f41061eda4ff3c322094', 3021121, 'claear', '30', 2021, '2014-11-20 05:05:03', NULL),
(11, 'pppp', 'pppp', 'ppp@ppp.com', '70352f41061eda4ff3c322094', 3000, 'njnbv', '30', 3030, '2014-11-20 05:19:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`post_id`), ADD FULLTEXT KEY `message` (`message`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `querries`
--
ALTER TABLE `querries`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `post_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `querries`
--
ALTER TABLE `querries`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
