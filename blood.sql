-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2020 at 02:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `age`, `blood`, `city`, `pin`, `mobile`, `email`, `password`) VALUES
('madhuri', 'F', 23, 'AB-', 'BVRM', 230640, '0236589741', 'xyz@gmail.com', '123'),
('madhuri', 'M', 23, 'B+', 'BVRM', 230640, '0236589752', 'xyz@gmail.com', '456'),
('HIMAJA NIMMALA', 'M', 23, 'O+', 'BVRM', 230640, '5698742300', 'himaja@gmail.com', '789'),
('madhri Bolla', 'M', 23, 'B+', 'BVRM', 230640, '023658956551', 'xyz@gmail.com', '89000'),
('madhri Bolla', 'M', 23, 'B+', 'BVRM', 230640, '6958632541', 'xyz@gmail.com', 'BOLLA'),
('Madhuri', 'F', 20, 'B+', 'Bhimavaram', 534201, '7801000000', 'madhuri@gmail.com', '123'),
('Prasanna Kommisetti', 'F', 25, 'A+', 'bvrm', 534201, '9696969696', 'prasu@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
