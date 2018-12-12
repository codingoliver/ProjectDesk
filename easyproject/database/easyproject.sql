-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 09:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12`
--

CREATE TABLE `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-05-16 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `done_project`
--

CREATE TABLE `done_project` (
  `d_p_id` int(11) NOT NULL,
  `p_i_id` int(11) NOT NULL COMMENT 'project idea',
  `u_id` int(11) NOT NULL COMMENT 'supervisor',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `done_project_member`
--

CREATE TABLE `done_project_member` (
  `d_p_m_id` int(11) NOT NULL,
  `d_p_id` int(11) NOT NULL COMMENT 'done project',
  `u_id` int(11) NOT NULL COMMENT 'project members(students)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL COMMENT 'supervisor_id',
  `o_p_id` int(11) NOT NULL,
  `message_table_name` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`g_id`, `u_id`, `o_p_id`, `message_table_name`, `datetime`) VALUES
(14, 2, 3, 'jZWVJSRTUaSBxlDdVngKPvqnLvgutPXZiFqUakqouvvEkWIHaVIs3', '2018-03-21 14:47:08'),
(15, 28, 9, 'tWkcFyYFDGRTSbaXjtSyGPmmdesqGUpEDKXjJzKvLdeCvgwbWFfB9', '2018-03-21 23:13:40'),
(16, 28, 10, 'QTdNQYDSpSRClyxObcijcOLgBQqSLggpahTUSZShGthkZodBFYwL10', '2018-03-22 00:21:14'),
(17, 28, 11, 'VSdlQGRtlePGiHLeAvsPhsiAVCbtBTDPoploaxvxlaRcGukoxIhG11', '2018-03-22 00:25:59'),
(18, 2, 5, 'XqoESWYoVeVUiCbexlbsOtvrzALMKTRRYAUzzcfMaqVJVJjuJsYz5', '2018-03-22 00:31:44'),
(19, 33, 12, 'dAsinHasumpUgENliXLuztwHJOcMdIDHZrJhygjiugEThFDowwlx12', '2018-05-16 11:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
--

CREATE TABLE `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-03-21 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
--

INSERT INTO `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3` (`m_id`, `g_id`, `u_id`, `message`, `datetime`) VALUES
(1, 14, 2, 'sup guys', '2018-03-21 00:00:00'),
(2, 14, 1, 'Yh we are great', '2018-03-21 00:00:00'),
(3, 14, 5, 'We fine sir!', '2018-03-21 00:00:00'),
(4, 14, 2, 'great!', '0000-00-00 00:00:00'),
(5, 14, 2, 'am very glad', '2018-03-22 04:19:06'),
(6, 14, 2, 'Just sent this one in!', '2018-03-21 08:00:00'),
(7, 14, 5, 'So when should we report?', '2018-03-21 08:05:00'),
(8, 14, 5, 'So when?', '2018-03-21 08:15:00'),
(9, 14, 5, 'Another message', '2018-03-21 08:25:00'),
(10, 14, 5, 'I took a nap', '2018-03-21 08:26:00'),
(11, 14, 5, 'lol', '2018-03-21 08:26:00'),
(12, 14, 5, 'shit', '2018-03-21 08:26:00'),
(13, 14, 5, 'so what up?', '2018-03-21 08:26:00'),
(14, 14, 2, 'oh am great, u?', '2018-03-22 05:28:24'),
(15, 14, 5, 'I am good too', '2018-03-21 08:26:00'),
(16, 14, 5, 'I am good', '2018-03-21 08:40:00'),
(17, 14, 5, 'facebook', '2018-03-21 08:50:00'),
(18, 14, 5, 'snapchat', '2018-03-21 08:50:00'),
(19, 14, 5, 'android', '2018-03-21 08:50:00'),
(20, 14, 5, 'nokia', '2018-03-21 08:52:00'),
(21, 14, 5, 'oh exciting', '2018-03-21 08:55:00'),
(22, 14, 5, 'oh gla', '2018-03-21 08:55:00'),
(23, 14, 5, 'yhhh', '2018-03-21 08:55:00'),
(24, 14, 5, 'noo', '2018-03-21 08:55:00'),
(25, 14, 5, 'mmmmm', '2018-03-21 08:55:00'),
(26, 14, 5, 'it all good man', '2018-03-21 08:55:00'),
(27, 14, 2, 'u sure about that?', '2018-03-22 05:52:23'),
(28, 14, 5, 'ofcourse', '2018-03-21 08:55:00'),
(29, 14, 2, 'huh?', '2018-03-22 05:53:18'),
(30, 14, 5, 'aha', '2018-03-21 08:56:00'),
(31, 14, 2, 'exams moroo?', '2018-03-22 06:02:47'),
(32, 14, 5, 'I think so', '2018-03-21 09:06:00'),
(33, 14, 2, 'alryd, come for apor ...ok?', '2018-03-22 06:03:34'),
(34, 14, 5, 'sure sir', '2018-03-21 09:06:00'),
(35, 14, 2, 'I had fun', '2018-03-22 06:15:56'),
(36, 14, 2, 'chat you later... ayt?', '2018-03-22 06:16:08'),
(37, 14, 5, 'vhim', '2018-03-21 09:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_project`
--

CREATE TABLE `ongoing_project` (
  `o_p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL COMMENT 'supervisor_id',
  `title` varchar(150) NOT NULL,
  `detail` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hod_id` int(11) NOT NULL COMMENT 'hod_id',
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing_project`
--

INSERT INTO `ongoing_project` (`o_p_id`, `u_id`, `title`, `detail`, `datetime`, `hod_id`, `department`) VALUES
(3, 2, 'Project Desk', 'The ultimate web based solution for final year projects', '2018-03-20 07:50:15', 3, 'Computer Science & IT'),
(9, 28, 'Madrid App', 'This is the sport news app for the madridstas', '2018-03-21 23:03:34', 3, 'Computer Science & IT'),
(10, 28, 'ManUtd App', 'This is a sport news app for the great manchester united fans', '2018-03-21 23:20:36', 3, 'Computer Science & IT'),
(11, 28, 'The Great App', 'This is the greatest application ever', '2018-03-22 00:25:12', 3, 'Computer Science & IT'),
(12, 33, 'Moving the bats', 'This project is aimed at moving the bats to the dormaa campus', '2018-05-16 11:19:54', 3, 'Computer Science & IT');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_project_document`
--

CREATE TABLE `ongoing_project_document` (
  `o_p_d_id` int(11) NOT NULL,
  `o_p_id` int(11) NOT NULL COMMENT 'ongoing project',
  `url` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'provisional' COMMENT 'provisional or final',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_removed` varchar(5) NOT NULL DEFAULT 'no',
  `is_approved` varchar(5) NOT NULL DEFAULT 'no',
  `is_approved_coordinator` varchar(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing_project_document`
--

INSERT INTO `ongoing_project_document` (`o_p_d_id`, `o_p_id`, `url`, `status`, `datetime`, `title`, `size`, `file_type`, `user_id`, `is_removed`, `is_approved`, `is_approved_coordinator`) VALUES
(1, 3, 'proj_docs/2616d38edceba307837ef76f79dbfeeb.docx', 'provisional', '2018-03-15 18:12:06', 'Street Address', 35, '.docx', 1, 'yes', 'no', 'no'),
(2, 3, 'proj_docs/5944f9e98ca00ce2028415c32c44793a.docx', 'provisional', '2018-03-15 18:32:51', 'Career Doc', 36, '.docx', 1, 'no', 'yes', 'no'),
(3, 3, 'proj_docs/a7406bc61ba323603cf751bd886c8cd2.docx', 'provisional', '2018-03-15 20:18:40', 'Streeet', 35, '.docx', 1, 'yes', 'no', 'no'),
(4, 1, 'proj_docs/87cfebf84f2d055cbf29de987c55e743.docx', 'provisional', '2018-03-21 11:14:51', 'something', 36, '.docx', 1, 'no', 'no', 'no'),
(5, 1, 'proj_docs/dfa9f4e47b75a4625ed42440e25465d6.rtf', 'provisional', '2018-03-21 11:26:37', 'real', 1, '.rtf', 1, 'no', 'no', 'no'),
(6, 1, 'proj_docs/592799d42ef5b9a44a135bcdc89fff0f.docx', 'provisional', '2018-03-21 11:29:42', 'xczxc', 36, '.docx', 1, 'yes', 'no', 'no'),
(7, 3, 'proj_docs/5150f23fb2f3f24ac2ee4adba952ee58.docx', 'provisional', '2018-03-22 00:36:10', 'document', 36, '.docx', 1, 'no', 'no', 'no'),
(8, 3, 'proj_docs/86d09bcbd37cc11341815921b6076ae1.docx', 'provisional', '2018-05-04 02:24:18', 'Chapter 1', 36, '.docx', 5, 'no', 'yes', 'no'),
(9, 5, 'proj_docs/c165ee98f81e26af8896fe569f271e7b.rtf', 'provisional', '2018-03-21 03:05:34', 'chapt 2', 1, '.rtf', 7, 'no', 'no', 'no'),
(10, 11, 'proj_docs/d3caabea64f3bd23d10771cb8bd004b8.docx', 'provisional', '2018-03-22 00:29:32', 'Chapter 1', 36, '.docx', 32, 'no', 'no', 'yes'),
(11, 12, 'proj_docs/9b1d4148ea98d49188f2b9b035bcf948.docx', 'provisional', '2018-05-16 11:29:43', 'chapter 1', 36, '.docx', 35, 'no', 'no', 'no'),
(12, 3, 'proj_docs/0b470a88893d350a57410f7308693dba.docx', 'provisional', '2018-03-21 14:55:49', 'Chapter 1', 36, '.docx', 1, 'no', 'yes', 'yes'),
(13, 3, 'proj_docs/d4767a68a30f0ff86446f1110930d238.rtf', 'provisional', '2018-03-21 14:56:35', 'Complete Project Document', 1, '.rtf', 1, 'no', 'yes', 'yes'),
(14, 12, 'proj_docs/b578d4754d8e8774b4bb27200112d3ae.docx', 'provisional', '2018-05-18 13:51:13', 'Chapter 1', 36, '.docx', 34, 'no', 'yes', 'no'),
(15, 3, 'proj_docs/33e6d5f7b91396b65e4f95d3d29d3013.rtf', 'provisional', '2018-05-19 00:57:10', 'Chapter 1, 2 and 3', 1, '.rtf', 1, 'no', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_project_member`
--

CREATE TABLE `ongoing_project_member` (
  `o_p_m_id` int(11) NOT NULL,
  `o_p_id` int(11) NOT NULL COMMENT 'ongoing project',
  `u_id` int(11) NOT NULL COMMENT 'project members(students)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing_project_member`
--

INSERT INTO `ongoing_project_member` (`o_p_m_id`, `o_p_id`, `u_id`) VALUES
(3, 3, 1),
(4, 3, 5),
(14, 9, 26),
(15, 9, 27),
(16, 10, 29),
(17, 10, 30),
(18, 11, 31),
(19, 11, 32),
(20, 12, 34),
(21, 12, 35);

-- --------------------------------------------------------

--
-- Table structure for table `project_idea`
--

CREATE TABLE `project_idea` (
  `p_i_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'vacant',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visibility` varchar(30) NOT NULL DEFAULT 'unapproved',
  `adder_type` varchar(20) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_idea`
--

INSERT INTO `project_idea` (`p_i_id`, `u_id`, `title`, `detail`, `department`, `status`, `datetime`, `visibility`, `adder_type`) VALUES
(52, 2, 'ForestView', 'The view of the forest ', 'Electrical & Comp Eng', 'vacant', '2018-03-21 11:54:52', 'approved', 'supervisor'),
(53, 1, 'Collapse', 'A case study about collapsing people ', 'Computer Science & IT', 'vacant', '2018-03-21 12:03:50', 'unapproved', 'student'),
(55, 5, 'Counseling App', 'This is for the drug addicts ', 'Computer Science & IT', 'vacant', '2018-05-04 02:23:26', 'unapproved', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10`
--

CREATE TABLE `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-03-22 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reviewed_ongoing_project_document`
--

CREATE TABLE `reviewed_ongoing_project_document` (
  `r_o_p_d_id` int(11) NOT NULL,
  `o_p_d_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewed_ongoing_project_document`
--

INSERT INTO `reviewed_ongoing_project_document` (`r_o_p_d_id`, `o_p_d_id`, `url`, `message`, `datetime`) VALUES
(1, 2, 'proj_docs/6cfa3719eadfa55c293ec5b783664bbb.docx', 'marked the errors in the document', '2018-03-21 07:21:22'),
(2, 2, 'proj_docs/d19fe8954bac4a2ae7a0e7ab941ae337.docx', 'marked the errors in the document', '2018-03-21 07:23:45'),
(3, 2, 'proj_docs/756d1e592aaf90369fc0f522b5e25123.docx', 'marked the errors in the document', '2018-03-21 07:31:31'),
(4, 8, 'proj_docs/ca874930ba12520017331af9dc5150fd.docx', 'reviewed', '2018-03-21 07:44:36'),
(5, 2, 'proj_docs/ecd8f2ac2f446ebd554de9bac3b902bb.docx', 'cv', '2018-03-21 07:51:08'),
(6, 2, 'proj_docs/a72f1a1275795c5d8044bf1e76c8149b.docx', 'marked the errors in the document', '2018-03-21 08:40:10'),
(7, 2, 'proj_docs/f1376dbe026340e7e40bded4b5e8808b.docx', 'the few errors are marked', '2018-03-21 08:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
--

CREATE TABLE `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-03-22 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
--

INSERT INTO `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9` (`m_id`, `g_id`, `u_id`, `message`, `datetime`) VALUES
(1, 15, 28, 'sup', '2018-05-16 17:56:03'),
(2, 15, 26, 'we are good', '2018-03-22 00:00:00'),
(3, 15, 28, 'great!', '2018-05-16 17:59:42'),
(4, 15, 26, 'A pleasure to chat you sir', '2018-03-22 00:00:00'),
(5, 15, 26, 'I\'m thrilled', '2018-03-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT 'uploads/194935.png',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `department` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `index_no` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `email`, `password`, `type`, `image`, `datetime`, `department`, `fullname`, `index_no`) VALUES
(1, 'teddy@gmail.com', 'admin', 'student', 'uploads/0rM8w13PRLFWMvKDPHSeVdf0dFRtHbNHi131t7KbsLx4YF2haCvIUEV5zqE51M.jpg', '2018-03-04 06:45:04', 'Computer Science & IT', 'Teddyman', 'UE20002715'),
(2, 'obed@gmail.com', 'obed', 'supervisor', 'uploads/194935.png', '2018-03-04 07:54:06', 'Computer Science & IT', 'Obed Appiah', '9003450'),
(3, 'hod@gmail.com', 'hod', 'hod', 'uploads/194935.png', '2018-03-04 08:01:10', 'Computer Science & IT', 'Benjamin Weyori', ''),
(5, 'john@gmail.com', 'john', 'student', 'uploads/194935.png', '2018-03-12 11:59:10', 'Computer Science & IT', 'John Legend', 'UE20002815'),
(9, 'sf@gmail.cmo', 'hit', '', 'uploads/194935.png', '2018-03-21 20:33:57', NULL, 'Peter Pryme', '004'),
(10, 'sf@gmail.cmo', 'hit', '', 'uploads/194935.png', '2018-03-21 20:34:00', NULL, 'Peter Pryme', '004'),
(11, 'eddles5@hotmail.com', 'admin', '', 'uploads/194935.png', '2018-03-21 20:37:17', NULL, 'John Luke', '004'),
(12, 'oliverboamah@gmail.com', 'admin', '', 'uploads/194935.png', '2018-03-21 20:43:34', 'Computer Science & IT', 'xx', '004'),
(13, 'oliverboamah@gmail.com', 'admin', '', 'uploads/194935.png', '2018-03-21 20:43:34', 'Computer Science & IT', 'xx', '004'),
(14, 'oliverboamah@gmail.com', 'admin', '', 'uploads/194935.png', '2018-03-21 20:44:57', 'Computer Science & IT', 'John Max', '005'),
(15, 'eddles5@hotmail.com', 'dd', '', 'uploads/194935.png', '2018-03-21 20:47:02', 'Computer Science & IT', 'xxv', 'sfsdd'),
(16, 'eddles5.ob@gmail.com', 'admin', '', 'uploads/194935.png', '2018-03-21 20:47:56', 'Computer Science & IT', 'sfs', 'dd'),
(26, 'ronaldo@gmail.com', 'ronaldo', 'student', 'uploads/194935.png', '2018-03-21 22:34:34', 'Computer Science & IT', 'Cristiano Ronaldo', '000454'),
(27, 'bale@gmail.com', 'bale', 'student', 'uploads/194935.png', '2018-03-21 22:35:35', 'Computer Science & IT', 'Gareth Bale', '890343433'),
(28, 'bombie@gmail.com', 'admin', 'supervisor', 'uploads/JGK8UqOGUHY5URKzoI3Q1RvR7onSzVB38l67ub9Qspu2yKnvzmWJkYc8IKD1T0.jpg', '2018-03-21 23:02:39', 'Computer Science & IT', 'Chis Bombie', '0003434'),
(29, 'paul@gmail.com', 'paul', 'student', 'uploads/194935.png', '2018-03-21 23:18:16', 'Computer Science & IT', 'Paul Pogba', '000343434'),
(30, 'anthony@gmail.com', 'anthony', 'student', 'uploads/194935.png', '2018-03-21 23:19:12', 'Computer Science & IT', 'Anthony Marshall', '339399434'),
(31, 'jesse@gmail.com', 'jesse', 'student', 'uploads/194935.png', '2018-03-22 00:23:18', 'Computer Science & IT', 'Jesse Linegard', '1234300'),
(32, 'rashford@gmail.com', 'rashford', 'student', 'uploads/194935.png', '2018-03-22 00:24:00', 'Computer Science & IT', 'George Rashford', '0345798'),
(33, 'peter@gmail.com', 'peter', 'supervisor', 'uploads/194935.png', '2018-05-16 11:06:30', 'Computer Science & IT', 'Peter Appiahene', '3450003433000'),
(34, 'theresa@gmail.com', 'theresa', 'student', 'uploads/194935.png', '2018-05-16 11:14:11', 'Computer Science & IT', 'Theresa Pormaa', '37598375978'),
(35, 'ansu@gmail.com', 'ansu', 'student', 'uploads/194935.png', '2018-05-16 11:15:03', 'Computer Science & IT', 'Ansu Gyeabour', '888990865'),
(36, 'coordinator@gmail.com', 'admin', 'coordinator', 'uploads/NJ5K9RfXbYjTdJ9cDu8UR2cNu73CZ1SY5DNWLaR6mXGpkDhf2OdChK9DZrMhcX.jpg', '2018-03-21 15:53:19', 'Computer Science & IT', 'Owusu Takyi', '09783545433333');

-- --------------------------------------------------------

--
-- Table structure for table `user_message_last_count`
--

CREATE TABLE `user_message_last_count` (
  `u_m_l_c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11`
--

CREATE TABLE `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-03-22 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5`
--

CREATE TABLE `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5` (
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '2018-03-22 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12`
--
ALTER TABLE `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `done_project`
--
ALTER TABLE `done_project`
  ADD PRIMARY KEY (`d_p_id`),
  ADD KEY `done_project_ref_project_idea` (`p_i_id`),
  ADD KEY `done_project_ref_user` (`u_id`);

--
-- Indexes for table `done_project_member`
--
ALTER TABLE `done_project_member`
  ADD PRIMARY KEY (`d_p_m_id`),
  ADD KEY `done_project_member_ref_done_project` (`d_p_id`),
  ADD KEY `done_project_member_ref_user` (`u_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
--
ALTER TABLE `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `ongoing_project`
--
ALTER TABLE `ongoing_project`
  ADD PRIMARY KEY (`o_p_id`);

--
-- Indexes for table `ongoing_project_document`
--
ALTER TABLE `ongoing_project_document`
  ADD PRIMARY KEY (`o_p_d_id`);

--
-- Indexes for table `ongoing_project_member`
--
ALTER TABLE `ongoing_project_member`
  ADD PRIMARY KEY (`o_p_m_id`),
  ADD KEY `ongoing_project_member_ref_ongoing_project` (`o_p_id`),
  ADD KEY `ongoing_project_member_ref_user` (`u_id`);

--
-- Indexes for table `project_idea`
--
ALTER TABLE `project_idea`
  ADD PRIMARY KEY (`p_i_id`),
  ADD KEY `project_idea_ref_user` (`u_id`) USING BTREE;

--
-- Indexes for table `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10`
--
ALTER TABLE `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `reviewed_ongoing_project_document`
--
ALTER TABLE `reviewed_ongoing_project_document`
  ADD PRIMARY KEY (`r_o_p_d_id`);

--
-- Indexes for table `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
--
ALTER TABLE `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_message_last_count`
--
ALTER TABLE `user_message_last_count`
  ADD PRIMARY KEY (`u_m_l_c_id`);

--
-- Indexes for table `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11`
--
ALTER TABLE `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5`
--
ALTER TABLE `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12`
--
ALTER TABLE `dasinhasumpugenlixluztwhjocmdidhzrjhygjiugethfdowwlx12`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `done_project`
--
ALTER TABLE `done_project`
  MODIFY `d_p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `done_project_member`
--
ALTER TABLE `done_project_member`
  MODIFY `d_p_m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
--
ALTER TABLE `jzwvjsrtuasbxlddvngkpvqnlvgutpxzifquakqouvvekwihavis3`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ongoing_project`
--
ALTER TABLE `ongoing_project`
  MODIFY `o_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ongoing_project_document`
--
ALTER TABLE `ongoing_project_document`
  MODIFY `o_p_d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ongoing_project_member`
--
ALTER TABLE `ongoing_project_member`
  MODIFY `o_p_m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_idea`
--
ALTER TABLE `project_idea`
  MODIFY `p_i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10`
--
ALTER TABLE `qtdnqydspsrclyxobcijcolgbqqslggpahtuszshgthkzodbfywl10`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewed_ongoing_project_document`
--
ALTER TABLE `reviewed_ongoing_project_document`
  MODIFY `r_o_p_d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
--
ALTER TABLE `twkcfyyfdgrtsbaxjtsygpmmdesqgupedkxjjzkvldecvgwbwffb9`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_message_last_count`
--
ALTER TABLE `user_message_last_count`
  MODIFY `u_m_l_c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11`
--
ALTER TABLE `vsdlqgrtlepgihleavsphsiavcbtbtdpoploaxvxlarcgukoxihg11`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5`
--
ALTER TABLE `xqoeswyovevuicbexlbsotvrzalmktrryauzzcfmaqvjvjjujsyz5`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `done_project`
--
ALTER TABLE `done_project`
  ADD CONSTRAINT `done_project_ref_project_idea` FOREIGN KEY (`p_i_id`) REFERENCES `project_idea` (`p_i_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `done_project_ref_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `done_project_member`
--
ALTER TABLE `done_project_member`
  ADD CONSTRAINT `done_project_member_ref_done_project` FOREIGN KEY (`d_p_id`) REFERENCES `done_project` (`d_p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `done_project_member_ref_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ongoing_project_member`
--
ALTER TABLE `ongoing_project_member`
  ADD CONSTRAINT `ongoing_project_member_ref_ongoing_project` FOREIGN KEY (`o_p_id`) REFERENCES `ongoing_project` (`o_p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ongoing_project_member_ref_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_idea`
--
ALTER TABLE `project_idea`
  ADD CONSTRAINT `project_idea_ref_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
