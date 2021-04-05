-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2021 at 12:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `img`) VALUES
(1, 'Officials', 'Find fault with a man who chooses to enjoy a pleasure that has no annoying.', 'ref.jpg'),
(2, 'Tournaments', 'Take an insight into our Tournaments.', 'h_7.jfif'),
(3, 'Our Referee', 'Meet our coolest team of referees.', 'AD_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_executive`
--

DROP TABLE IF EXISTS `tbl_executive`;
CREATE TABLE IF NOT EXISTS `tbl_executive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `role` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_executive`
--

INSERT INTO `tbl_executive` (`id`, `name`, `role`, `email`, `avatar`) VALUES
(1, 'Josh Ackworth', 'President', 'president@londonrefereesgroup.com', 'profile.png'),
(2, 'Joe Masse', 'Vice President', 'vp@londonrefereesgroup.com', 'profile.png'),
(3, 'Mark Lemieux', 'Secretary', 'secretary@londonrefereesgroup.com', 'profile.png'),
(4, 'Rob Neable', 'Treasurer', 'treasurer@londonrefereesgroup.com', 'profile.png'),
(5, 'Bobby Wright', 'Referee In Chief', 'ric@londonrefereesgroup.com', 'profile.png'),
(6, 'Paul Raes', 'Rep 1', 'rep1@londonrefereesgroup.com', 'profile.png'),
(7, 'Melanie Alexander', 'Rep 2', 'rep2@londonrefereesgroup.com', 'profile.png'),
(8, 'Marc Giroux', 'Assignor 1', 'assignor1@londonrefereesgroup.com', 'profile.png'),
(9, 'Jamie Dewar', 'Assignor 2', 'assignor2@londonrefereesgroup.com', 'profile.png'),
(10, 'Paul Schofield', 'Scheduler', 'scheduler@londonrefereesgroup.com', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL,
  `user_current_login` timestamp NULL DEFAULT NULL,
  `user_last_login` timestamp NULL DEFAULT NULL,
  `user_attempts` varchar(2) DEFAULT NULL,
  `user_level` int(2) NOT NULL DEFAULT '0',
  `user_new` varchar(4) DEFAULT NULL,
  `user_suspended` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_current_login`, `user_last_login`, `user_attempts`, `user_level`, `user_new`, `user_suspended`) VALUES
(1, 'Ackworth', 'Josh', '123', 'president@londonrefereesgroup.com', '2021-03-30 20:27:06', '127.0.0.1', '2021-03-30 20:25:46', NULL, '0', 0, 'N', NULL),
(2, 'Masse', 'Joe_', '123', 'vp@londonrefereesgroup.com', '2021-03-30 20:27:06', '::1', '2021-04-01 19:55:53', '2021-04-01 02:57:40', '0', 1, 'O', 'NO'),
(3, 'Lemieux', 'Mark', '123', 'secretary@londonrefereesgroup.com', '2021-03-30 20:28:04', '::1', '2021-03-30 21:08:29', NULL, '0', 0, 'N', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
