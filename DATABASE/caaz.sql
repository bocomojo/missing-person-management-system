-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 08:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `prostet` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `cloth` varchar(100) NOT NULL,
  `accessory` varchar(100) NOT NULL,
  `defect` varchar(100) NOT NULL,
  `dentalfinger` varchar(100) NOT NULL,
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
  `received_by` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `received_date` varchar(100) NOT NULL,
  `status` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `accepted_by` varchar(255) NOT NULL,
  `accepted_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `fullname`, `alias`, `address`, `bday`, `age`, `smt`, `gender`, `race`, `recentphoto`, `height`, `weight`, `haircolor`, `hairstate`, `eyecolor`, `eyestate`, `prostet`, `blood`, `cloth`, `accessory`, `defect`, `dentalfinger`, `lastloc`, `last_seen_date`, `others`, `case_num`, `filed_date`, `comp_name`, `comp_address`, `phone`, `relation`, `agency`, `received_by`, `position`, `received_date`, `status`, `username`, `accepted_by`, `accepted_date`) VALUES
(84, 'Roseler N. Boco Jr.', 'asdas', 'asdas', '2022-09-24', '', 'asda', 'MALE', 'asdas', 'index.jpg', '23', '23', 'asdas', 'NATURAL', 'asda', 'NATURAL', 'asdas', 'A+', 'asda', 'asda', 'asdas', '', 'asda', '', '<p>asdas</p>', '20220924075316.1634', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', 0, '', '', ''),
(85, 'Roseler Boco', 'bocs, jun', 'Tagaytay, Camalig, Albay', '2022-09-24', '', 'csa', 'MALE', 'Vampires', 'UpclickStudios-05928January 07, 2022.jpg', '34', '34', 'Black', 'NATURAL', 'Black', 'NATURAL', 'none', 'A+', 'Red shirt and black shorts', 'none', 'none', '', 'Camalig Poblacion', '', 'hakdog', '20220924142758.5914', ' 24 Sep 2022 ', 'Deydeen Gabriel', 'Tagaytay, Camalig, Albay', '098293402', 'Uncle', 'no', '', '', '', 0, '', '', ''),
(86, 'gojo satoru', 'sensei', 'jujutsu tech', '2022-10-11', '', 'none', 'MALE', 'fefe', 'satoruGojo3copy.png', '232', '232', 'asdas', 'NATURAL', 'asdasd', 'NATURAL', 'asdasd', 'A+', 'asdasd', 'asdas', 'asdasd', '', 'asdasd', '', 'asdasd', '20221011065953.8587', ' 11 Oct 2022 ', 'asdas', 'asdas', 'asdas', 'asdasd', 'asdasd', '', '', '', 0, '', '', ''),
(87, 'gegege', 'gegege', 'gegeg', '2022-09-28', '', 'gege', 'MALE', 'gegege', 'index.jpg', '2323', '23232', 'asdasd', 'NATURAL', 'gege', 'NATURAL', 'gege', 'A+', 'gege', 'gegeg', 'gege', '', 'gege', '', 'gege', '20220928115159.2962', ' 28 Sep 2022 ', 'gegegege', 'gege', 'egege', 'gege', 'gegeg', '', '', '', 0, '', '', ''),
(88, 'Roseler N. Boco Jr.', 'asdas', 'asdas', '2022-09-24', '', 'asda', 'MALE', 'asdas', 'index.jpg', '23', '23', 'asdas', 'NATURAL', 'asda', 'NATURAL', 'asdas', 'A+', 'asda', 'asda', 'asdas', '', 'asda', '', '<p>asdas</p>', '20220924075316.1634', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', 0, '', '', ''),
(90, 'nmn', 'nmnm', 'nmnm', '2022-10-12', '', 'nmnmn', 'MALE', 'nmnm', 'horyong.png', '676', '67', 'nmn', 'NATURAL', 'nmnm', 'NATURAL', 'nmnm', 'A+', 'nmn', 'mnmnm', 'nmn', '', 'mnmn', '', 'nmnmn', '20221012153117.1607', ' 12 Oct 2022 ', 'nmnmn', 'mnmnm', 'nmnm', 'nmnm', 'nmnm', '', '', '', 1, '', '', ''),
(91, 'asdasd', 'asdasd', 'asdasd', '2022-10-13', '', 'asdasd', 'MALE', 'asdasda', 'horyong.png', '23', '23', 'asdasd', 'NATURAL', 'asdasd', 'NATURAL', 'asdas', 'A+', 'dasdas', 'asdas', 'asda', '', 'asda', '', 'asdasd', '20221013103329.5777', ' 13 Oct 2022 10:33:29am ', 'asdasd', 'asdasd', 'asdas', 'asdasd', 'dasda', '', '', '', 0, '', '', ''),
(92, 'asda', 'dasda', 'asdasd', '2022-10-13', '', 'asdasd', 'MALE', 'asdasd', 'index.jpg', '23', '232', 'asdasdasd', 'NATURAL', 'asdasd', 'NATURAL', 'asdasd', 'A+', 'asdas', 'asdasd', 'asdasd', '', 'dasdasd', '', 'asdasd', '20221013113918.9903', ' Oct 13 2022 ', 'asdasda', 'asdasd', '231231', 'Girlfriend/Boyfriend', 'asdasda', '', '', '', 1, '', '', ''),
(93, 'asda', 'asda', 'asdas', '2022-10-13', '', 'asdasd', 'MALE', 'asdas', 'images.jpg', '232', '23', 'asdasd', 'NATURAL', 'asdasdas', 'NATURAL', 'asda', 'A+', 'asdasd', 'asdas', 'asdasd', '', 'asdasd', '', 'asdas', '20221013114835.6057', ' Oct 13 2022 ', 'asdas', 'asdasd', '23234', 'Relative', 'asdasd', '', '', '', 2, '', '', ''),
(94, 'asdas', 'asdas', 'dasdasd', '2022-10-13', '', 'asdasd', 'MALE', 'asdas', 'index.jpg', '23', '23', 'asdasd', 'NATURAL', 'asdasd', 'NATURAL', 'asda', 'A+', 'asdas', 'sdasda', 'asdasd', '', 'dasdasd', '', 'asdasd', '20221013135938.4235', ' Oct 13 2022 0101:59:38 ', 'asdasd', 'asdasd', '342342', 'Girlfriend/Boyfriend', 'asdasd', '', '', '', 2, '', '', ''),
(95, 'ASDAS', 'ASDASD', 'ASDASD', '2022-10-13', '', 'ASDAS', 'MALE', 'ASDASD', 'samurai.jpg', '23', '23', 'ASDASD', 'NATURAL', 'ASDASD', 'NATURAL', 'ASDASD', 'A+', 'ASDASD', 'DASDASD', 'ASDASD', '', 'ASDASD', '', 'ASDASD', '20221013140736.6618', '2022-10-13 20:07:36', 'ASDAS', 'DASDASD', '231231', 'Parent', 'ASDASD', '', '', '', 0, '', '', ''),
(96, 'asdasda', 'asda', 'dasdasd', '2022-10-13', '', 'asdas', 'MALE', 'asdas', 'index.jpg', '23', '23', 'asdas', 'NATURAL', 'asdasd', 'NATURAL', 'asd', 'A+', 'asdas', 'asda', 'asdas', '', 'dasdas', '', 'asdas', '20221013115719.9732', ' Oct 13 2022 11:10 3131', 'dasdas', 'dasdas', '2323', 'Girlfriend/Boyfriend', 'asedasd', '', '', '', 0, '', '', ''),
(97, 'asdasd', 'asdasd', 'asdas', '2022-10-13', '', 'asdasdasd', 'MALE', 'asdasdas', 'images.jpg', '23', '23', 'asdasd', 'NATURAL', 'asdasd', 'NATURAL', 'asdas', 'A+', 'dasd', 'asdasd', 'asdas', '', 'asdasd', '', 'asdasd', '20221013115927.7157', ' Oct 13 2022 1111:59:2727', 'asdasd', 'asdasd', 'asdasda', 'Girlfriend/Boyfriend', 'asdasd', '', '', '', 0, '', '', ''),
(98, 'asdas', 'asdas', 'asdas', '2022-10-13', '', 'asdasd', 'MALE', 'asdasd', 'index.jpg', '23', '23', 'asdas', 'NATURAL', 'dasdas', 'NATURAL', 'asd', 'A+', 'asda', 'asdasd', 'asdas', '', 'sdasdasd', '', 'asdasd', '20221013120247.5598', ' Oct 13 2022 1212:OctOct:thth XOct', 'asdas', 'asda', '2312', 'Husband', 'asdas', '', '', '', 0, '', '', ''),
(99, 'Kentucky Chicken', 'ken', 'Tagaytay, Camalig, Albay', '1991-07-17', '90', 'gradon tattoo on left arm', 'MALE', 'Amerinoy', 'index.jpg', '12', '12', 'Black', 'NATURAL', 'Blue', 'NATURAL', 'artifical right arm', 'A+', 'black shirt', 'gold watch', 'no hands', '', '7/11 camalig', '', 'inubusan ng ulam tas nag tampo', '20221013170950.3132', ' 13 Oct 2022 ', 'Roseler Boco', 'Tagaytay, nowhere', '09123896970', 'Spouse', 'secret', '', '', '', 0, '', '', ''),
(104, 'asdas', 'asda', 'asdas', '2022-10-21', '', '', 'MALE', 'asdasd', 'missing.jpg', '232', '23', 'zxczx', 'NATURAL', 'xzczxc', 'NATURAL', '', 'Unknown', '', '', '', '', 'zxczxcz', '', '', '20221021054143.8923', '2022-10-21 11:41:43', 'zxczx', 'zxczxc', '2324', 'Parent', '', '', '', '', 0, '', '', ''),
(105, 'julius grajo', 'julius', 'asdasda', '2022-10-21', '', 'asda', 'MALE', 'asdasda', 'missing.jpg', '32', '23', 'dsf', 'NATURAL', 'asda', 'NATURAL', '', 'Unknown', '', '', '', '', 'asdas', '2022-10-21T12:40', '', '20221021064123.7750', '2022-10-21 12:41:23', 'asdas', 'asdasd', '324342', 'Parent', '', '', '', '', 1, '', '', ''),
(106, 'julius grajo', 'julius', 'asdasda', '2022-10-21', '', 'asda', 'MALE', 'asdasda', 'missing.jpg', '32', '23', 'dsf', 'NATURAL', 'asda', 'NATURAL', '', 'Unknown', '', '', '', '', 'asdas', '2022-10-21T12:40', '', '20221021064123.7750', '2022-10-21 12:41:23', 'asdas', 'asdasd', '324342', 'Parent', '', '', '', '', 1, '', '', ''),
(107, 'asda', '232', 'sdasd', '2022-10-21', '', '', 'MALE', 'asda', 'missing.jpg', '232', '23', 'asdas', 'NATURAL', 'asd', 'NATURAL', '', 'Unknown', '', '', '', '', 'asdasd', '2022-10-21T20:27', 'asdasd', '20221021142711.7860', '2022-10-21 20:27:11', 'asdas', 'dasdasd', '23123', 'Parent', '', '', 'Admin', '', 1, '', 'Roseler Boco', '10-22-2022 02:16:38am'),
(108, 'asda', '232', 'sdasd', '2022-10-21', '', '', 'MALE', 'asda', 'missing.jpg', '232', '23', 'asdas', 'NATURAL', 'asd', 'NATURAL', '', 'Unknown', '', '', '', '', 'asdasd', '2022-10-21T20:27', 'asdasd', '20221021142711.7860', '2022-10-21 20:27:11', 'asdas', 'dasdasd', '23123', 'Parent', '', '', '', '', 1, '', '', ''),
(109, 'Julius Albert Grajo', 'boy kalbog', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '123', '123', 'black', 'NATURAL', 'blue', 'NATURAL', '', 'Unknown', 'a', '', '', '', 'lady anne', '2022-10-22T01:30', '', '20221021193044.1043', '2022-10-22 01:30:44', 'asdas', 'asdasd', '132312414134', 'Parent', 'no', '', 'Admin', '', 1, 'tokyo', 'admin', '10-22-2022 02:15:20am'),
(110, 'Julius Albert Grajo', 'boy kalbog', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '123', '123', 'black', 'NATURAL', 'blue', 'NATURAL', '', 'Unknown', 'a', '', '', '', 'lady anne', '2022-10-22T01:30', '', '20221021193044.1043', '2022-10-22 01:30:44', 'asdas', 'asdasd', '132312414134', 'Parent', 'no', '', 'Admin', '', 1, 'tokyo', 'admin', '2022-10-22 02:14:32am'),
(111, 'Julius Albert Grajo', 'dsadsad', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '15', '15', 'black', 'NATURAL', 'blue', 'NATURAL', '', 'Unknown', 'a', '', '', '', 'lady anne', '2022-10-22T01:32', '', '20221021193231.8347', '2022-10-22 01:32:31', 'adsasd', 'dasdasd', '09469851323', 'Parent', 'no', '', 'Admin', '', 1, 'tokyo', 'admin', '2022-10-21 08:08:42pm'),
(112, 'Julius Albert Grajo', 'dsadsad', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '15', '15', 'black', 'NATURAL', 'blue', 'NATURAL', '', 'Unknown', 'a', '', '', '', 'lady anne', '2022-10-22T01:32', '', '20221021193231.8347', '2022-10-22 01:32:31', 'adsasd', 'dasdasd', '09469851323', 'Parent', 'no', '', 'Admin', '', 1, 'tokyo', 'admin', '08:07:33pm'),
(113, 'Julius Albert Grajo', 'boy kalbog', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '15', '15', 'black', 'NATURAL', 'blue', 'NATURAL', '', 'Unknown', 'a', '', '', '', 'lady anne', '2022-10-22T06:35', '', '20221021193529.1520', '2022-10-22 01:35:29', 'bahog bilat', '620, White Street, Sunrise Subdivision', '09469851323', 'Parent', 'no', '', '', '', 1, 'tokyo', '', ''),
(114, 'Julius Albert Grajo', 'boy kalbog', '620, White Street, Sunrise Subdivision', '2022-10-22', '', '', 'MALE', 'latino', 'aVBY4Djb_700w_0.jpg', '15', '15', 'black', 'NATURAL', 'blue', 'NATURAL', 'penis extender', 'Unknown', 'a', '', 'a', '', 'lady anne', '2022-10-22T02:19', '', '20221021201941.4197', '2022-10-22 02:19:41', 'bahog bilat', '620, White Street, Sunrise Subdivision', '09469851323', 'Parent', 'Albay', '', 'Admin', '', 1, 'tokyo tokyo', 'Roseler Boco', '10-22-2022 02:20:25am');

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
(18, 'try', 'try', 'try', 'try@gmail.com', 'try', '080f651e3fcca17df3a47c2cecfcb880', ' 22 Sep 2022 ', 'user', '1', 'F', '26309215162543', '5470', ''),
(22, 'tokyo', 'tokyo', 'tokyo', 'tokyo@gmail.com', 'tokyo', 'ef0cc10ff462af3af3e15f592c4ec8da', ' 22 Sep 2022 ', 'user', '3', 'F', '+63 09898989898', '8671', ''),
(42, 'men', 'men', 'tagaytay', 'asdasd@gmail.com', 'men', 'd2fc17cc2feffa1de5217a3fd29e91e8', ' 16 Oct 2022 ', 'user', '3', 'F', '09876765656', '', 'missing.jpg'),
(43, 'asdasd', 'asdasd', 'asdasd', 'asdas@gmail.com', 'asdasd', '962012d09b8170d912f0669f6d7d9d07', ' 17 Oct 2022 ', 'user', '3', 'F', '+63 09998777651', '1493', ''),
(44, 'saasda', 'asdas', 'asdasd', 'asdas@gmail.cm', 'asdas', '962012d09b8170d912f0669f6d7d9d07', ' 20 Oct 2022 ', 'user', '2', 'F', '+63 09998789871', '3546', ''),
(45, 'roseler', 'boco', 'roseler', 'roseler@gmail.com', 'roseler', '962012d09b8170d912f0669f6d7d9d07', ' 20 Oct 2022 ', 'user', '3', 'M', '+63 05666666666', '9052', '');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `request_archives`
--
ALTER TABLE `request_archives`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
