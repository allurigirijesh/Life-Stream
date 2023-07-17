-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2023 at 07:08 PM
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
-- Database: `lifestream`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `email`, `phone`, `message`) VALUES
('alluri', 'akkuri@gmail.com', 98765, 'jfkljidlknfkdblijf'),
('giri', 'giri@gmail.com', 234567, 'fnihdskjndijd'),
('kugkvkjv', 'hjvjvjv', 98765678, 'hvyfyfvu'),
('girijesh', 'allurigirijesh4@gmail.com', 8391234, 'il need help'),
('njkdhkd', 'jhiudjde', 1235443, 'nbjdhidd'),
('niuhdosodkjhuhsio', 'uhuihidsd', 89234, 'kjhufhosid'),
('RAm', 'jsidjd', 1122334455, 'i need help'),
('Sita ', 'sita@gmail.com', 1122334455, ' i need help'),
('jkjxkkz', 'nxkjnkjx', 1234567890, 'kjhs'),
('jnkjdnkjns', 'nsjsklks', 78928972, 'mnkjsk'),
('', 'diod', 1234567890, 'knkdd'),
('girijesh', 'girjesh@gmail.com', 1234567890, 'heje'),
('giri', 'girijesh@gmail.com', 1234567890, 'hekki'),
('jodjodk', 'kndjiok', 7687902123, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(40) NOT NULL,
  `age` int(2) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `age`, `mobile`, `gender`, `address`, `bloodgroup`, `email`, `pincode`) VALUES
('girijesh', 20, 873768383, 'male', 'jhfindfjboiff', 'O+', 'jhdihsj@gmail.com', 873838),
('anil', 20, 37879833, 'male', 'jjhdide', 'B+', 'jhfiuhdishd@fgna', 899392),
('Alkhdfskjhsbd', 20, 888999989, 'Male', 'cdsjghjsdgfk', 'O+', 'bsakfjbsjkdbfj', 523114),
('AlluriGirijesh', 20, 1234567890, 'male', 'jfhiljhsijidkd', 'B+', 'jhjdkddkhj@gmail.com', 123456),
('alluriprasad', 20, 1298643214, 'male', 'jhididisds', 'B+', 'jisis@gmail.com', 534221),
('Ram', 99, 1122334455, 'Male', 'Ayodhya', 'O+', 'ram@gmail.com', 0),
('Sita', 98, 1122334455, 'Female', 'Ayodhya', 'A+', 'sita@gmail.com', 0),
('Girijesh', 20, 9553421498, 'male', 'ndkjdd', 'A+', 'girijesh@gmail.com', 534222),
('girijesh', 20, 9553421498, 'Female', 'jodjoid', 'O+', 'girjesh@gmail.com', 534266),
('Vamsi', 18, 7287919568, 'Male', 'velpur', 'A+', 'vamsi@gmail.com', 534222),
('tarun', 20, 8746352535, 'Male', 'jjdkdjd', 'O+', 'tarun@gmail.com', 523225),
('Alluri Girijesh Vara Prasad', 20, 9553421498, 'Male', 'velpur, tanuku mandal, west godavari', 'O+', 'allurigirijesh@gmail.com', 534222),
('kdljokd', 100, 1234567890, 'Male', 'jkdnjkdnnd', 'B-', 'kjkjs@gmail.com', 98765),
('kjkjdjks', 100, 987654321, 'Male', 'njkjdhos', 'B-', 'jdn@gmail.com', 678908);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
