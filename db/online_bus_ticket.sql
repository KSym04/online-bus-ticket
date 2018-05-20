-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 08:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `obt_booking`
--

CREATE TABLE `obt_booking` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_date` date DEFAULT NULL,
  `fare` int(11) NOT NULL,
  `seat_num` varchar(120) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obt_booking`
--

INSERT INTO `obt_booking` (`ticket_id`, `user_id`, `book_date`, `fare`, `seat_num`, `status`) VALUES
(143, 3, '2018-05-31', 560, 'S1,S25,S26,S33', 'On Hold'),
(144, 3, '2018-05-21', 1260, 'S1,S3,S5,S10,S17,S24,S29,S30,S32', 'On Hold');

-- --------------------------------------------------------

--
-- Table structure for table `obt_users`
--

CREATE TABLE `obt_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(33) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_permission` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obt_users`
--

INSERT INTO `obt_users` (`user_id`, `user_name`, `user_fname`, `user_lname`, `user_password`, `user_email`, `date_created`, `user_permission`) VALUES
(3, 'roy', 'Roydan', 'Saludo', '4297f44b13955235245', 'kahitano@gmail.com', '2018-05-14 23:15:52', 0),
(4, 'kevin', 'Kevine', 'Pogi', '4297f44b13955235245', 'test@mail.com', '2018-05-15 00:56:24', 0),
(5, 'admin', 'Administrator', 'Bossing', '4297f44b13955235245', 'bossabos@mail.com', '2018-05-14 23:15:52', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obt_booking`
--
ALTER TABLE `obt_booking`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `obt_users`
--
ALTER TABLE `obt_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obt_booking`
--
ALTER TABLE `obt_booking`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `obt_users`
--
ALTER TABLE `obt_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
