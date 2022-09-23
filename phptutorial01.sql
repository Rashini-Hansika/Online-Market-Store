-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 02:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptutorial01`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FName`, `LName`, `Email`, `Password`) VALUES
('heshani', 'withanachchi', 'gggggggggggggggg@g.com', '1234'),
('heshani', 'withanachchi', 'gggggggggggggggg@g.com', '1234'),
('heshani', 'withanachchi', 'gggggggggggggggg@g.com', '1234'),
('nayana', 'herath', 'hh.gmail@com', '1234'),
('nayana', 'herath', 'hh.gmail@com', ''),
('nayana', 'herath', 'hh.gmail@com', '1234'),
('255', 'herath', 'hh.gmail@com', '1234'),
('sadu', 'asd', 'hh.gmail@com', '1234'),
('heshani', 'withanachchi', 'gggggggggggggggg@g.com', '12345'),
('', '', '', ''),
('', '', '', ''),
('g', 'g', 'hh.gmail@com', '1234'),
('hhhhhh', 'rrrrrr', 'hh.gmail@com', '1'),
('r', 't', 'hh.gmail@com', '1234'),
('', '', '', ''),
('y', '6', 'hh.gmail@com', '12'),
('h', 'j', 'hh.gmail@com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
