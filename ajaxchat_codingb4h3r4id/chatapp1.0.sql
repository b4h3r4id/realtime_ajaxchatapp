-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2022 at 03:05 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `fromUser` int(255) NOT NULL,
  `toUser` int(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `fromUser`, `toUser`, `message`) VALUES
(1, 2, 1, 'Hi '),
(2, 1, 2, 'Hi, how are you?'),
(3, 1, 3, 'hey'),
(4, 2, 1, 'bro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `sess_id` int(255) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sess_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 202477387, 'Bəhruz', 'Zamanov', 'behruz.zamanov002@gmail.com', '202cb962ac59075b964b07152d234b70', '1642688027Picsart_22-01-10_15-07-38-728.jpg', 'Active now'),
(2, 1317950021, 'Coding', 'B4H3R4İD', 'coding.b4h3r4id@mail.ru', '202cb962ac59075b964b07152d234b70', '1642688114images_1641061594140.png', 'Active now'),
(3, 290514669, 'Edward', 'Johanson', 'Edward12@gmail.com', '202cb962ac59075b964b07152d234b70', '1642688182pexels-emiliano-arano-2127969.jpg', 'Oflline now'),
(4, 468590486, 'Ayxan', 'Elizade', 'Ayxan.veli12@hotmail.ru', '202cb962ac59075b964b07152d234b70', '1643467252images_1641662704440.png', 'Active now'),
(5, 223753471, 'İbrahim', 'Velizade', 'ibrahim@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '1643467295download.jpeg', 'Active now'),
(6, 1150543685, 'Samir', 'Eliyev', 'samie@mail.ru', 'ba6942ca4e2b3d2b47e47ca51aa6a6ad', '1644516480images_1643633221861.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
