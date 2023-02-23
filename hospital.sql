-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2022 at 04:35 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `Name` varchar(20) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Telephone`, `Email`, `Message`) VALUES
('lasitha', '12343211', 'lasithaheenkenda23@gmail.com', 'qweewq'),
('lasitha', '12343211', 'lasithaheenkenda23@gmail.com', 'qweewq'),
('lasitha', '12343211', 'lasithaheenkenda23@gmail.com', 'qweewq'),
('lasi', '12343211', 'lasithaheenkenda24@gmail.com', 'qwe'),
('lasi', '12343211', 'lasithaheenkenda24@gmail.com', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` varchar(20) NOT NULL,
  `decease` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `addres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name1`, `age`, `decease`, `gender`, `contact`, `addres`) VALUES
(10, 'as', '21', 'dengu', 'male', '0715906668', 'kotuwegedara'),
(9, 'bimba', '122', '21', 'qwe', '123321', 'kotuwegedara'),
(8, 'lasitha', '12', '12', '12', '121', 'kotu'),
(11, 'kamal', '21', 'hembirisswa', 'male', '071590066', 'matale');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
