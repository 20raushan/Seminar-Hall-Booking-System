-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 04:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_hall`
--

CREATE TABLE `booked_hall` (
  `hall_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_name` varchar(50) NOT NULL,
  `projector` varchar(50) NOT NULL,
  `type_of_desk` varchar(20) NOT NULL,
  `no_of_desk` int(11) NOT NULL,
  `room_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_name`, `projector`, `type_of_desk`, `no_of_desk`, `room_type`) VALUES
('auditorium', 'YES', 'Aeron Chair', 660, 'NON AC'),
('bhaskra hall', 'YES', 'Chaise A bureau', 547, 'AC'),
('csed seminar hall', 'YES', 'Aeron Chair', 50, 'AC'),
('mba seminar hall', 'YES', 'Plastic Chair', 300, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `hall_admin`
--

CREATE TABLE `hall_admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hall_admin`
--

INSERT INTO `hall_admin` (`name`, `password`, `gmail`, `contact`) VALUES
('pankaj kumar', 'Pankaj', 'nitianpk07@gmail.com', '8804523092');

-- --------------------------------------------------------

--
-- Table structure for table `hall_user`
--

CREATE TABLE `hall_user` (
  `name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `hall_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hall_user`
--

INSERT INTO `hall_user` (`name`, `gmail`, `password`, `phone`, `hall_name`) VALUES
('pankaj singh yadav', 'kumarpankajraj011@gmail.com', 'yadav', '8804523092', 'auditorium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_hall`
--
ALTER TABLE `booked_hall`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `hall_name` (`hall_name`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_name`);

--
-- Indexes for table `hall_admin`
--
ALTER TABLE `hall_admin`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `hall_user`
--
ALTER TABLE `hall_user`
  ADD PRIMARY KEY (`gmail`),
  ADD KEY `hall_name` (`hall_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_hall`
--
ALTER TABLE `booked_hall`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_hall`
--
ALTER TABLE `booked_hall`
  ADD CONSTRAINT `booked_hall_ibfk_1` FOREIGN KEY (`hall_name`) REFERENCES `hall` (`hall_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall_user`
--
ALTER TABLE `hall_user`
  ADD CONSTRAINT `hall_user_ibfk_1` FOREIGN KEY (`hall_name`) REFERENCES `hall` (`hall_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
