-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 04:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `fullname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `skill1` varchar(30) NOT NULL,
  `skill2` varchar(30) NOT NULL,
  `skill3` varchar(30) NOT NULL,
  `skill4` varchar(30) NOT NULL,
  `skill5` varchar(30) NOT NULL,
  `exp1` varchar(30) NOT NULL,
  `exp2` varchar(30) NOT NULL,
  `exp3` varchar(30) NOT NULL,
  `exp4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`fullname`, `address`, `phone`, `email`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `exp1`, `exp2`, `exp3`, `exp4`) VALUES
('[Althea Karyl Lengga]', '[Andress Cmpd, Sta.Cruz, Angat', '[09777815850', '[202020066@btech.educ.ph]', '[UI/UX Design]', '[Digital Design]', '[Idea Generation]', '[Graphic Design]', '[Business Identity]', '[Digital Product Creation]', '[Website Design]', '[Graphic Design]', '[Business Identity]'),
('Althea Karyl Lengga', 'Andress Cmpd, Angat Bul.', '09777815850', 'alyrak792@gmail.com ', 'UI/UX Design', 'Digital Design', 'Idea Generation', 'Graphic Design', 'Business Identity', 'Digital Product Creation', 'Website Design', 'Graphic Design', 'Business Identity');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
