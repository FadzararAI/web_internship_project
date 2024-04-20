-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2024 at 08:22 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `logo_fname` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `logo_fname`) VALUES
(1, 'Microsoft', 'microsoft.png'),
(2, 'PayPal', 'paypal.png'),
(3, 'Apple', 'apple.png'),
(4, 'Asus', 'asus.png'),
(5, 'Huawei', 'huawei.png'),
(6, 'IBM', 'ibm.png'),
(7, 'Intel', 'intel.png'),
(8, 'Nestle', 'nestle.png'),
(9, 'Netflix', 'netflix.png'),
(10, 'Oracle', 'oracle.png'),
(11, 'Siemens', 'siemens.png'),
(12, 'TikTok', 'tiktok.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

DROP TABLE IF EXISTS `job_details`;
CREATE TABLE IF NOT EXISTS `job_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `job_kind` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `salary` int NOT NULL,
  `bonuses` text NOT NULL,
  `responsibilities` text NOT NULL,
  `qualifications` text NOT NULL,
  `duration` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `company_name`, `title`, `location`, `job_kind`, `type`, `salary`, `bonuses`, `responsibilities`, `qualifications`, `duration`) VALUES
(1, 'Microsoft', 'Senior Software Engineer', 'Jakarta', 'Work From Office', 'Technology', 8000000, 'Health Insurance;Bonus Allowance', 'Designing, coding, and debugging software applications;Collaborating with cross-functional teams to define, design, and ship new features;Participating in code reviews and providing constructive feedback.', 'Bachelor\'s degree in Computer Science or related field;Strong problem-solving skills and attention to detail;Proficiency in at least one programming language (e.g., Java, Python, C++).', 6),
(2, 'Nestle', 'Marketing Manager', 'Bandung', 'Work From Home', 'Marketing', 7000000, 'THR;Health Insurance', 'Developing and implementing strategic marketing plans;Conducting market research and analyzing consumer behavior;Managing advertising campaigns and promotional activities.', 'Bachelor\'s degree in Marketing or related field;Minimum of 5 years of experience in marketing roles;Strong communication and leadership skills.', 9),
(3, 'IBM', 'Financial Analyst', 'Surabaya', 'Work From Office', 'Finance', 6000000, 'Bonus Allowance;Catering', 'Analyzing financial data and creating financial models;Forecasting future financial trends and presenting reports;Providing recommendations to improve financial performance.', 'Bachelor\'s degree in Finance, Accounting, or related field;Proficiency in financial software and MS Excel;Strong analytical and problem-solving skills.', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
