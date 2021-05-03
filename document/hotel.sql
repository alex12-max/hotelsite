-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2021 at 04:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bok`
--

CREATE TABLE `bok` (
  `i` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `ch_in` date NOT NULL,
  `ch_out` date NOT NULL,
  `adult` decimal(65,0) NOT NULL,
  `child` decimal(65,0) NOT NULL,
  `nu_room` decimal(65,0) NOT NULL,
  `room` varchar(255) NOT NULL,
  `rom_pr` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bok`
--

INSERT INTO `bok` (`i`, `user`, `ch_in`, `ch_out`, `adult`, `child`, `nu_room`, `room`, `rom_pr`) VALUES
(7, 'test', '2021-05-13', '2021-05-11', '12', '21', '1', 'Family Room, Pool View', '1000'),
(8, 'test', '2021-05-10', '2021-05-20', '1', '16', '16', 'Suite, Ocean View (Mazagan)', '650'),
(9, 'test', '2021-05-21', '2021-05-28', '1', '1', '1', 'Family Room, Pool View', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_price` decimal(65,0) NOT NULL,
  `room_des1` varchar(255) NOT NULL,
  `room_des2` varchar(255) NOT NULL,
  `room_des3` varchar(255) NOT NULL,
  `room_des4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `image`, `room_name`, `room_price`, `room_des1`, `room_des2`, `room_des3`, `room_des4`) VALUES
(1, 'img1.jpeg', 'Family Room, Pool View', '1000', ' Free WiFi and wired Internet access. ', ' CD television with premium channels and pay movies. ', ' Coffee/tea maker, minibar, 24-hour room service, and free bottled water. ', ' Private bathroom, separate bathtub and shower, slippers, and a hair dryer. '),
(2, 'Suite.jpeg', 'Deluxe Room, (Prime)', '700', ' Free WiFi and wired Internet access. ', ' CD television with premium channels and pay movies. ', ' Safe, phone, and iron/ironing board (on request); rollaway/extra beds available on request. ', ' Climate-controlled air conditioning and daily housekeeping Smoking And Non-Smoking. '),
(3, 'Deluxe Room.jpeg', 'Suite, Ocean View (Mazagan)', '650', ' Free WiFi and wired Internet access. ', ' Sleep - Linens. ', ' Safe, phone, and iron/ironing board (on request); rollaway/extra beds available on request. ', ' Climate-controlled air conditioning and daily housekeeping Smoking And Non-Smoking. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `i` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`i`, `user_name`, `user_email`, `password`) VALUES
(1, 'test', 'test@gmail.com', '1234'),
(3, 'tet', 'te@gm.co', '123'),
(4, 'adm', '@', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bok`
--
ALTER TABLE `bok`
  ADD PRIMARY KEY (`i`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`i`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bok`
--
ALTER TABLE `bok`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
