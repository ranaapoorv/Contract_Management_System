-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 11:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prac`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontract`
--

CREATE TABLE `addcontract` (
  `Contract Id` varchar(50) NOT NULL,
  `Contract Name` varchar(255) NOT NULL,
  `Status` text NOT NULL,
  `Contract Type` varchar(255) NOT NULL,
  `Start Date` date NOT NULL,
  `End Date` date NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcontract`
--

INSERT INTO `addcontract` (`Contract Id`, `Contract Name`, `Status`, `Contract Type`, `Start Date`, `End Date`, `Description`) VALUES
('1', 'Tata', 'Active', 'AMC', '2023-07-20', '2024-06-06', 'Annual Contract'),
('2', 'Intel', 'Active', 'Server', '2023-07-23', '2024-07-26', 'Monthly'),
('3', 'BSNL', 'Active', 'Revenue Expenditure', '2023-07-08', '2023-07-14', 'Internet'),
('4', 'JIO', 'Active', 'Capital Expenditure', '2023-07-08', '2023-07-14', 'Telecommunication'),
('5', 'Ascending', 'Active', 'Server', '2023-07-23', '2023-11-18', 'Test'),
('6', 'Email', 'Active', 'Daily', '2023-07-25', '2023-08-25', 'Reminder'),
('7', 'AMC', 'Active', 'Revenue Expenditure', '2023-07-25', '2023-07-27', 'Tata'),
('8', 'Server', 'Active', 'Capital expenditure', '2023-07-25', '2023-07-27', 'Idea');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
