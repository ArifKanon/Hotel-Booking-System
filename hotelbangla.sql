-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(5) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `details1` varchar(200) NOT NULL,
  `details2` varchar(200) NOT NULL,
  `cost_a1` int(30) NOT NULL,
  `cost_a2` int(30) NOT NULL,
  `cost_a3` int(30) NOT NULL,
  `cost_b1` int(30) NOT NULL,
  `cost_b2` int(30) NOT NULL,
  `cost_b3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `img1`, `img2`, `name1`, `name2`, `details1`, `details2`, `cost_a1`, `cost_a2`, `cost_a3`, `cost_b1`, `cost_b2`, `cost_b3`) VALUES
(1, '../images/places/Dhaka/lm1.jpg', '../images/places/Dhaka/gh1.jpg', 'Le Meridien', 'Dhaka Gulshan Hotel', 'Nikunja-2,Khilkhet,Dhaka <br><br>\r\nOne person room rent: 100$<br>\r\nTwo person room rent: 120$<br>\r\nFamily room rent: 150$<br><br>', 'Gulshan,Dhaka <br><br>\r\nOne person room rent: 80$<br>\r\nTwo person room rent: 100$<br>\r\nFamily room rent: 130$<br><br>', 100, 120, 150, 80, 100, 130),
(2, '../images/places/chattogram/rb1.jpg', '../images/places/chattogram/pc1.jpg', 'The Radisson Blu Chattogram', 'The Peninsula Chittagong', 'Shahid Saifuddin Khaled Rd, Lalkhan Bazar Cir, Chattogram<br><br>One person room rent: 90$<br>Two person room rent: 110$<br>Family room rent: 130<br><br>', 'CDA Avenue, O.R. Nizam Road, Bulbul Center, Chattogram<br><br>One person room rent: 60$<br>Two person room rent: 80$<br>Family room rent: 100$<br><br>', 90, 110, 130, 60, 80, 100),
(3, '../images/places/sylhet/sp1.jpg', '../images/places/sylhet/rs1.jpg', 'Hotel Star Pacific', 'Rose View Hotel', 'East Dargah Gate, Sylhet<br><br>One person room rent: 70$<br>Two person room rent: 80$<br>Family room rent: 90$<br><br>', 'Shahjalal Upashahar Main Rd, Sylhet<br><br>One person room rent: 90$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 70, 80, 90, 90, 100, 110),
(4, '../images/places/cox\'s_bazar/sbr1.jpg', '../images/places/cox\'s_bazar/lbh1.jpg', 'Sayeman Beach Resort', 'Long Beach Hotel', 'Marine Drive, Road, Cox\'s Bazar<br><br>One person room rent: 100$<br>Two person room rent: 120$<br>Family room rent: 140$<br><br>', 'Kalatoli, Hotel-Motel Zone, Cox\'s Bazar<br><br>One person room rent: 90$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 100, 120, 140, 90, 100, 110),
(5, '../images/places/sundarban/r1.jpg', '../images/places/sundarban/amb1.jpg', 'Hotel Royal International', 'Hotel Ambassador', 'KDA Avenue Khan Jahan Ali Road, Royal Mor, Khulna<br><br>One person room rent: 80$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 'Ghos Road, Helatala Rd, Khulna<br><br>One person room rent: 60$<br>Two person room rent: 70$<br>Family room rent: 80$<br><br>', 80, 100, 110, 60, 70, 80),
(6, '../images/places/bandarban/rv1.jpg', '../images/places/bandarban/nl1.jpg', 'Hotel River View Bandarban', 'Nilachol Nilambori Resort', 'Nilachal Porjoton Complex, Bandarban<br><br>One person room rent: 80$<br>Two person room rent: 90$<br>Family room rent: 110$<br><br>', 'Sodok O Jonopod Rd, Bandarban<br><br>One person room rent: 85$<br>Two person room rent: 100$<br>Family room rent: 120$<br><br>', 85, 100, 120, 80, 90, 110);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empId` varchar(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empId`, `firstName`, `lastName`, `gender`, `address`, `email`, `phone`, `salary`) VALUES
('311', 'Abir', 'Rahman', 'Male', 'Banani', 'ab@gmail.com', '01761206455', '50000'),
('997', 'Kirat', 'Mamun', 'Male', 'Mohammadpur', 'kirat@gmail.com', '01744319424', '60000'),
('999', 'Tareq', 'Ahmed', 'Male', 'bas', 'b@a.com', '12345`', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `status` int(5) NOT NULL,
  `id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`status`, `id`, `password`) VALUES
(0, '111', '111'),
(2, '123', '123'),
(2, '1234', '1234'),
(2, '222', '222'),
(1, '311', '311'),
(2, '333', '333'),
(2, '444', '444'),
(1, '456', '456'),
(2, '666', '666'),
(2, '878', '878'),
(2, '888', '888'),
(2, '987', '987'),
(2, '997', '997'),
(1, '999', '999');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `gender`, `address`, `email`, `phone`) VALUES
('123', 'Zerin', 'Khatun', 'Female', 'Mirpur', 'zeh@oulook.com', '0185467832'),
('1234', 'Ashik', 'Talukdar', 'Male', 'Gaibandha', 'ashik@gmail.com', '0152199999'),
('222', 'Soumik', 'Khondokar', ' Male', 'Thanapara', 'soumik@oulook.com', '015792347912'),
('333', 'Faruk', 'Abdullah', 'Male', 'Gulshan', 'fa@gmail.com', '0176555555'),
('444', 'Fahmida', 'Khatu', 'Female', 'Mirpur', 'fah@oulook.com', '0185467832'),
('666', 'Fatima', 'Khanam', 'Female', 'Kuril', 'ak@outlook.com', '0176800000'),
('878', 'asdf', 'asdf', ' Female', 'adf', 'adf', 'adf'),
('888', 'Atif', 'Aslam', 'Male', 'Pakistan', 'atif@gmail.com', '08888882342'),
('987', 'Aftab', 'Ahmed', 'Male', 'Dhaka', 'af@gmail.com', '016233333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
