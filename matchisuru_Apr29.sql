-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 06:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchisuru`
--

-- --------------------------------------------------------

--
-- Table structure for table `generalpreferences`
--

CREATE TABLE `generalpreferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `answers` varchar(2500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `generalpreferences`
--

INSERT INTO `generalpreferences` (`id`, `userID`, `answers`) VALUES
(5, 14, '[\"Yellow\",\"Turtle\",\"Coffee\"]');

-- --------------------------------------------------------

--
-- Table structure for table `matchrequests`
--

CREATE TABLE `matchrequests` (
  `id` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matchrequests`
--

INSERT INTO `matchrequests` (`id`, `userID`, `created_at`, `game`, `system`, `data`) VALUES
(10, 14, '2019-04-29 00:16:51', 'Apex Legends', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(11, 1, '2019-04-29 00:16:51', 'Apex Legends', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(12, 14, '2019-04-29 00:19:07', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(13, 14, '2019-04-29 00:19:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Elite\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(14, 14, '2019-04-29 00:19:34', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(15, 14, '2019-04-29 00:19:42', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(16, 14, '2019-04-29 00:19:55', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}'),
(17, 14, '2019-04-29 00:20:19', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"12:00am\",\"endTime\":\"12:00am\",\"timeZone\":\"PST\"}');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profileID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `dispName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `steam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xbox` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nintendo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reddit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(1500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_verif_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`, `email_verif_hash`, `active`) VALUES
(14, 'akritskiy@gmail.com', 'alex', '$2y$10$gQOEZ0PaQl3.VPme48hvvOAKUqWIeQ0yU9TLm67j.I53DjNET5YsK', '2019-04-28 02:46:18', '$2y$10$ejvQPCR7dgOsjM2tgcb3T..fPe7wwYXlJjyjqzrVkJ6T8/rIszEve', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `generalpreferences`
--
ALTER TABLE `generalpreferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foreign key: uid` (`userID`);

--
-- Indexes for table `matchrequests`
--
ALTER TABLE `matchrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profileID`),
  ADD UNIQUE KEY `foreign key: links profile to users table by the uid` (`userID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `generalpreferences`
--
ALTER TABLE `generalpreferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matchrequests`
--
ALTER TABLE `matchrequests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `foreign key: userID in profile table -> id in users table` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
