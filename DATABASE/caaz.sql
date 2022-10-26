-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 07:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `smt` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `recentphoto` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `haircolor` varchar(100) NOT NULL,
  `hairstate` varchar(100) NOT NULL,
  `eyecolor` varchar(100) NOT NULL,
  `eyestate` varchar(100) NOT NULL,
  `prostet` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `cloth` varchar(100) NOT NULL,
  `accessory` varchar(100) NOT NULL,
  `defect` varchar(100) NOT NULL,
  `dentalfinger` varchar(100) NOT NULL,
  `lastloc` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `case_num` varchar(100) NOT NULL,
  `filed_date` varchar(200) NOT NULL,
  `comp_name` varchar(90) NOT NULL,
  `comp_address` varchar(90) NOT NULL,
  `phone` varchar(90) NOT NULL,
  `relation` varchar(90) NOT NULL,
  `agency` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `fullname`, `alias`, `address`, `bday`, `age`, `smt`, `gender`, `race`, `recentphoto`, `height`, `weight`, `haircolor`, `hairstate`, `eyecolor`, `eyestate`, `prostet`, `blood`, `cloth`, `accessory`, `defect`, `dentalfinger`, `lastloc`, `others`, `case_num`, `filed_date`, `comp_name`, `comp_address`, `phone`, `relation`, `agency`) VALUES
(6, 'Roseler N. Boco Jr.', 'asdas', 'asdas', '2022-09-24', '', 'asda', 'MALE', 'asdas', 'index.jpg', '23', '23', 'asdas', 'NATURAL', 'asda', 'NATURAL', 'asdas', 'A+', 'asda', 'asda', 'asdas', '', 'asda', '<p>asdas</p>', '20220924075316.1634', '0000-00-00 00:00:00', '', '', '', '', ''),
(24, 'Roseler Boco', 'bocs, jun', 'Tagaytay, Camalig, Albay', '2022-09-24', '', 'csa', 'MALE', 'Vampires', 'UpclickStudios-05928January 07, 2022.jpg', '34', '34', 'Black', 'NATURAL', 'Black', 'NATURAL', 'none', 'A+', 'Red shirt and black shorts', 'none', 'none', '', 'Camalig Poblacion', 'hakdog', '20220924142758.5914', ' 24 Sep 2022 ', 'Deydeen Gabriel', 'Tagaytay, Camalig, Albay', '098293402', 'Uncle', 'no'),
(26, 'daryl balino', 'dah', 'st. domingo', '2022-10-13', '23', 'dragon tattoo', 'MALE', 'filipino', 'horyong.png', '165', '45', 'black', 'NATURAL', 'black', 'NATURAL', 'none', 'A+', 'black tshirt', 'none', 'none', '', 'divine word college of legazpi', 'long hair', '20221013071235.3320', ' 13 Oct 2022 ', 'roseler boco', 'Tagaytay, Camalig, Albay', '09123896970', 'classmate', 'no'),
(27, 'jp', 'jp', 'sdfs', '2022-10-14', '', 'sfssd', 'MALE', 'sdfs', 'images.jpg', '1234', '234', 'dfs', 'NATURAL', 'sfdsd', 'NATURAL', '', 'A+', 'dfds', '', '', '', 'sdfs', '', '20221014085240.3737', '2022-10-14 14:52:40', 'asads', 'sdfs', '97097777999', 'Parent', 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `severity` varchar(30) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `case_num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `severity`, `notes`, `case_num`) VALUES
(7, '3440737', 'Normal', '<p>sdasdasd</p>', '20220827042847.1551'),
(8, '3440737', 'Normal', '<p>asdasdas</p>', '20220827042851.4400'),
(9, '3440737', 'Normal', '<p>asdasdasd</p>', '20220827042854.4636'),
(10, '3440737', 'Normal', '<p>&nbsp;</p>', '20220827042855.1932'),
(13, '3440737', 'Normal', '<p>ghgfhg</p>', '20220905092620.5139'),
(14, '3440737', 'Normal', '<p>asdas</p>', '20220923073959.2370'),
(21, 'asdasd', '', '', '20220923173441.3224'),
(22, 'asdasd', '', '', '20220923173505.3712'),
(23, 'asdasd', '', '', '20220923173517.9469'),
(24, 'asdasd', '', '', '20220923173542.3665');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `tmp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name`, `surname`, `phone`, `email`, `gender`, `joined`, `tmp`) VALUES
(7, '3440737', 'roseler', 'boco', '263773452120', 'roseler@gmail.com', 'M', ' 30 May 2022 ', '4208'),
(11, '1587645', 'vedan', 'vedan', '26309875847381', 'vedan@gmail.com', 'F', ' 22 Sep 2022 ', '616');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(200) NOT NULL,
  `request_id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(100) NOT NULL,
  `viewed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `request_id`, `username`, `name`, `status`, `viewed`) VALUES
(16, 69, 'tokyo', 'asdas', 0, 0),
(17, 105, 'tokyo', 'julius grajo', 1, 0),
(18, 107, 'admin', 'asda', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `tmp` varchar(90) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `tmp`, `name`) VALUES
(6, '4208', 'user4208.jpg'),
(7, '616', 'user616.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `smt` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `recentphoto` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `haircolor` varchar(100) NOT NULL,
  `hairstate` varchar(100) NOT NULL,
  `eyecolor` varchar(100) NOT NULL,
  `eyestate` varchar(100) NOT NULL,
  `complexion` varchar(255) NOT NULL,
  `build` varchar(255) NOT NULL,
  `peculiarity` varchar(255) NOT NULL,
  `prostet` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `cloth` varchar(100) NOT NULL,
  `accessory` varchar(100) NOT NULL,
  `defect` varchar(100) NOT NULL,
  `lastloc` varchar(100) NOT NULL,
  `last_seen_date` varchar(50) NOT NULL,
  `others` varchar(100) NOT NULL,
  `case_num` varchar(100) NOT NULL,
  `filed_date` varchar(200) NOT NULL,
  `comp_name` varchar(90) NOT NULL,
  `comp_address` varchar(90) NOT NULL,
  `phone` varchar(90) NOT NULL,
  `relation` varchar(90) NOT NULL,
  `agency` varchar(90) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `accepted_by` varchar(255) NOT NULL,
  `accepted_date` varchar(255) NOT NULL,
  `issue_alarm_req_by` varchar(255) NOT NULL,
  `issue_alarm_req_date` varchar(255) NOT NULL,
  `issue_alarm_req_position` varchar(255) NOT NULL,
  `alarm_issue_by` varchar(255) NOT NULL,
  `alarm_issue_date` varchar(255) NOT NULL,
  `alarm_issue_position` varchar(255) NOT NULL,
  `lift_alarm_req_by` varchar(255) NOT NULL,
  `lift_alarm_req_date` varchar(255) NOT NULL,
  `lift_alarm_req_position` varchar(255) NOT NULL,
  `alarm_lifted_by` varchar(255) NOT NULL,
  `alarm_lifted_date` varchar(255) NOT NULL,
  `alarm_lifted_position` varchar(255) NOT NULL,
  `reason_lift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `fullname`, `alias`, `address`, `bday`, `age`, `smt`, `gender`, `race`, `recentphoto`, `height`, `weight`, `haircolor`, `hairstate`, `eyecolor`, `eyestate`, `complexion`, `build`, `peculiarity`, `prostet`, `blood`, `cloth`, `accessory`, `defect`, `lastloc`, `last_seen_date`, `others`, `case_num`, `filed_date`, `comp_name`, `comp_address`, `phone`, `relation`, `agency`, `position`, `status`, `username`, `accepted_by`, `accepted_date`, `issue_alarm_req_by`, `issue_alarm_req_date`, `issue_alarm_req_position`, `alarm_issue_by`, `alarm_issue_date`, `alarm_issue_position`, `lift_alarm_req_by`, `lift_alarm_req_date`, `lift_alarm_req_position`, `alarm_lifted_by`, `alarm_lifted_date`, `alarm_lifted_position`, `reason_lift`) VALUES
(115, 'Jp Remar Serrano', 'Jp', 'Daraga, Albay', '2022-10-24', '26', 'bragon tattoo on left arm', 'MALE', 'Filipino', 'missing.jpg', '165', '80', 'Black', 'NATURAL', 'Black', 'NATURAL', '', '', '', 'none', 'Unknown', 'blue tshirt with i love rice print', 'none', 'none', 'Jollibee Daraga', '2022-10-24T11:55', '', '20221024055716.8279', '2022-10-24 11:57:16', 'Roseler Boco', 'Tagaytay, Camalig, Albay', '09123896970', 'Co-worker', 'No', 'Admin', 2, 'desk desk', 'Roseler Boco', 'October 26, 2022 11:01:08pm', 'asdasd', '2022-10-27T00:59', 'asdasd', '', '', '', '', '', '', '', '', '', ''),
(116, 'Nicky Palero', 'oni-chan', 'Bacacay, Albay', '2022-10-24', '21', '', 'MALE', 'Filipino', 'nicky.jpg', '175', '80', 'Black', 'NATURAL', 'Black', 'NATURAL', '', '', '', '', 'Unknown', '', '', '', 'Jollibee Legazpi', '2022-10-24T12:41', '', '20221024064209.4656', '2022-10-24 12:42:09', 'Roseler Boco', 'Tagaytay, Camalig, Albay', '09123896970', 'Classmate', '', 'Admin', 1, 'Roseler Boco', 'Roseler Boco', '10-24-2022 12:53:28pm', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 'Julius Grajo', 'Julius', 'Washington DC', '2022-10-24', '27', '', 'MALE', 'Filipino', 'julius.jpg', '165', '100', 'Black', 'NATURAL', 'Black', 'NATURAL', '', '', '', '', 'Unknown', '', '', '', 'Lady Ann', '2022-10-24T12:49', '', '20221024064936.9099', '2022-10-24 12:49:36', 'Roseler Boco', 'Tagyatay, Camalig, Albay', '09123896970', 'Friend', '', 'Admin', 1, 'Roseler Boco', 'Roseler Boco', '10-24-2022 12:53:37pm', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'Nicky Palero', 'Niks', 'Bacacay, Albay', '2001-02-12', '21', '', 'MALE', 'Filipino', 'nicky.jpg', '175', '80', 'Black', 'NATURAL', 'Black', 'NATURAL', '', '', '', '', 'Unknown', '', '', '', 'Jollibee, Albay', '2022-10-25T11:43', '', '20221025054517.9880', '2022-10-25 11:45:17', 'Roseler Boco', 'Tagaytay, Camalig, Albay', '09123896970', 'Parent', 'no', 'Admin', 1, 'Roseler Boco', 'Roseler Boco', 'October 25, 2022 11:45:28am', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request_archives`
--

CREATE TABLE `request_archives` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `smt` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `recentphoto` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `haircolor` varchar(100) NOT NULL,
  `hairstate` varchar(100) NOT NULL,
  `eyecolor` varchar(100) NOT NULL,
  `eyestate` varchar(100) NOT NULL,
  `prostet` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `cloth` varchar(100) NOT NULL,
  `accessory` varchar(100) NOT NULL,
  `defect` varchar(100) NOT NULL,
  `dentalfinger` varchar(100) NOT NULL,
  `lastloc` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `case_num` varchar(100) NOT NULL,
  `filed_date` varchar(200) NOT NULL,
  `comp_name` varchar(90) NOT NULL,
  `comp_address` varchar(90) NOT NULL,
  `phone` varchar(90) NOT NULL,
  `relation` varchar(90) NOT NULL,
  `agency` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `permission` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tmp` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `address`, `email`, `username`, `password`, `joined`, `type`, `permission`, `gender`, `phone`, `tmp`, `image`) VALUES
(9, 'Roseler', 'Boco', '', 'bocoroseler@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', ' 20 Jul 2022 ', 'user', '1', 'M', '263773452120', '', ''),
(49, 'desk', 'desk', 'desk', 'desk@gmail.com', 'desk', 'b506e098cf253ce028b8ba0a5fc7d473', ' 24 Oct 2022 ', 'user', '2', 'F', '+63 09999999999', '757', ''),
(50, 'Roseler', 'Boco', 'Tagaytay, Camalig, Albay', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', ' 24 Oct 2022 ', 'user', '3', 'M', '09123896970', '', 'index.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_archives`
--
ALTER TABLE `request_archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `request_archives`
--
ALTER TABLE `request_archives`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
