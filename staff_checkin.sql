-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 05:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_att`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_checkin`
--

CREATE TABLE `staff_checkin` (
  `วันที่เข้าเวร` date NOT NULL,
  `ชื่อเจ้าหน้าที่` varchar(50) NOT NULL,
  `เวลาเข้าเวร` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_checkin`
--

INSERT INTO `staff_checkin` (`วันที่เข้าเวร`, `ชื่อเจ้าหน้าที่`, `เวลาเข้าเวร`) VALUES
('2021-09-27', 'xxx', '2021-09-27 03:12:51'),
('2021-09-27', 'Frame', '2021-09-27 03:13:05'),
('2021-10-03', 'ีีีuuu', '2021-10-03 03:57:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
