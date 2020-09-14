-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 02:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travello`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_lastname`, `user_firstname`, `user_role`, `user_email`, `user_password`, `user_date`) VALUES
(1, 'rico', 'Love', 'Maryam', 'subscriber', 'ricosuave@gmail.com', '$2y$10$iusesomeamazingstringec15MfAavQQ0si/8XqSu0TaENYAT0OmO', '2020-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `adnin_users`
--

CREATE TABLE `adnin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_role` varchar(25) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `m_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(800) NOT NULL,
  `m_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `m_date`, `email`, `subject`, `message`, `m_time`) VALUES
(1, 'Mashood Taofeek', '2020-09-11', 'mashoodtaofeek@gmail.com', 'Business word of wisdom', '“Success is not final; failure is not fatal: it is the courage to continue that counts.” – Winston Churchill', '2020-09-11 00:00:00'),
(2, 'Lizzy', '2020-09-11', 'lizzy@gmail.com', 'Business word of wisdom', '“Play by the rules, but be ferocious.” – Phil Knight\r\n\r\nThe brand that gave us “Just do it!” qualifies that tagline, which always felt a bit broad, to include boundaries. You can’t “just do it” without regard to the rules, as Knight clearly states. Those ', '2020-09-11 00:00:00'),
(3, 'Busari Ahmad ', '2020-09-11', 'ahamadbusari@gmail.com', 'Amazing Qoute', ' “Business opportunities are like buses, there’s always another one coming.” – Richard Branson\r\n\r\nBranson’s Virgin has proven that from record labels to airlines, where there is a will there is a way. The door isn’t always open, but sometimes it’s ajar or', '2020-09-11 00:00:00'),
(4, 'Friday Temitope ', '2020-09-11', 'ola@gmail.com', 'Business word of wisdom', ' “Every problem is a gift—without problems we would not grow.” – Anthony Robbins\r\n\r\nThe idea that one can go through life without conflict or issues arising is unrealistic. Some might dream of a frictionless ride through the world as the ideal journey, bu', '2020-09-11 00:00:00'),
(5, 'Friday Temitope ', '2020-09-11', 'ola@gmail.com', 'Business word of wisdom', ' “Every problem is a gift—without problems we would not grow.” – Anthony Robbins\r\n\r\nThe idea that one can go through life without conflict or issues arising is unrealistic. Some might dream of a frictionless ride through the world as the ideal journey, but without some form of pushback, growth is impossible. It is these problems that we face which build our character, engage our creativity and build humility.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(100) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_price` int(11) NOT NULL,
  `place_image` text NOT NULL,
  `place_content` varchar(255) NOT NULL,
  `place_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `place_name`, `place_price`, `place_image`, `place_content`, `place_status`) VALUES
(1, 'Bali', 257, 'destination_1.jpg', 'province of Indonesia and the westernmost of the Lesser Sunda Islands.', 'draft'),
(2, 'Indonisia', 450, 'destination_2.jpg', 'province of Indonesia and the westernmost of the Lesser Sunda Islands', 'draft'),
(3, ' Paris', 999, 'destination_4.jpg', 'Paris is the capital and most populous city of France and populous city of France.', 'draft'),
(4, ' Nigeria', 568, 'destination_7.jpg', 'are an island group in Thailand between the large island of Phuket', 'draft'),
(5, '  Abuja', 455, 'destination_9.jpg', ' We took some time to compile a list of tourist attractions in Nigeria', 'published'),
(6, ' Lagos', 679, 'destination_3.jpg', ' We took some time to compile a list of tourist attractions in Nigeria', 'draft'),
(7, 'Mykonos', 450, 'destination_5.jpg', 'Mykonos is a Greek island, part of the Cyclades, lying between Tinos, Syros, Paros and Naxos', 'draft'),
(8, 'Phi Phi Island', 780, 'destination_6.jpg', 'The Phi Phi island is some of the loveliest in Southeast Asia.', 'draft'),
(9, 'Ilorin', 350, 'destination_7.jpg', 'A city which has grown in population and investments has been blessed', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_country` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_date` date NOT NULL,
  `user_image` text NOT NULL,
  `user_number` int(19) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_country`, `user_password`, `user_date`, `user_image`, `user_number`, `user_code`, `user_city`) VALUES
(1, 'Love', 'Doe', 'rico', 'ricosuave@gmail.com', 'France', '$2y$10$iusesomeamazingstringec15MfAavQQ0si/8XqSu0TaENYAT0OmO', '2020-09-11', 'team_2.jpg', 2147483647, 240243, 'Bali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adnin_users`
--
ALTER TABLE `adnin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adnin_users`
--
ALTER TABLE `adnin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
