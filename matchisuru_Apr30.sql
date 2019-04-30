-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 12:26 PM
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
(6, 14, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Manager\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Dog\",\"Fiction\",\"Coffee\",\"Reality\",\"Gryffindor\"]'),
(7, 15, '[\"Quiet\",\"Quiet\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Support\",\"Agree\",\"Hanging out and having fun\",\"A casual gamer\",\"Black\",\"Cat\",\"Fiction\",\"Coffee\",\"Reality\",\"Gryffindor\"]'),
(124, 17, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Purple\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Abstract\",\"Slytherin\"]'),
(125, 18, '[\"Loud\",\"Loud\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Monster\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Yellow\",\"Turtle\",\"Fiction\",\"Coffee\",\"Abstract\",\"Slytherin\"]'),
(126, 19, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"36+ years old\",\"Manager\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Reality\",\"Muggle\"]'),
(127, 20, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"17 - 25 years old\",\"Support\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"White\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Fantasy\",\"Muggle\"]'),
(128, 21, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Green\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Gryffindor\"]'),
(129, 22, '[\"Quiet\",\"Loud\",\"Agree\",\"Agree\",\"12 - 16 years old\",\"Top Fragger\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Orange\",\"Cat\",\"Non-fiction\",\"Soda\",\"Reality\",\"Hufflepuff\"]'),
(130, 23, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"12 - 16 years old\",\"Monster\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Purple\",\"Rabbit\",\"Non-fiction\",\"Soda\",\"Reality\",\"Ravenclaw\"]'),
(131, 24, '[\"Loud\",\"Loud\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Monster\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Rabbit\",\"Non-fiction\",\"Water\",\"Reality\",\"Hufflepuff\"]'),
(132, 25, '[\"Loud\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Monster\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Fantasy\",\"Muggle\"]'),
(133, 26, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"17 - 25 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Orange\",\"Cat\",\"Non-fiction\",\"Tea\",\"Reality\",\"Muggle\"]'),
(134, 27, '[\"Quiet\",\"Quiet\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Orange\",\"Tiger\",\"Non-fiction\",\"Water\",\"Abstract\",\"Muggle\"]'),
(135, 28, '[\"Loud\",\"Quiet\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Blue\",\"Cow\",\"Non-fiction\",\"Water\",\"Fantasy\",\"Gryffindor\"]'),
(136, 29, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Wanderer\",\"Disagree\",\"Exploring the game world\",\"A casual gamer\",\"Purple\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Fantasy\",\"Ravenclaw\"]'),
(137, 30, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Manager\",\"Disagree\",\"Exploring the game world\",\"A casual gamer\",\"Red\",\"Cat\",\"Fiction\",\"Tea\",\"Concrete\",\"Ravenclaw\"]'),
(138, 31, '[\"Loud\",\"Loud\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Support\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Black\",\"Cat\",\"Fiction\",\"Water\",\"Fantasy\",\"Ravenclaw\"]'),
(139, 32, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"36+ years old\",\"Support\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Black\",\"Cow\",\"Fiction\",\"Coffee\",\"Concrete\",\"Gryffindor\"]'),
(140, 33, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Top Fragger\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Dog\",\"Non-fiction\",\"Water\",\"Abstract\",\"Ravenclaw\"]'),
(141, 34, '[\"Quiet\",\"Loud\",\"Agree\",\"Agree\",\"12 - 16 years old\",\"Support\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Orange\",\"Turtle\",\"Fiction\",\"Coffee\",\"Reality\",\"Slytherin\"]'),
(142, 35, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"12 - 16 years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Dog\",\"Non-fiction\",\"Soda\",\"Reality\",\"Gryffindor\"]'),
(143, 36, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"17 - 25 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"White\",\"Cow\",\"Non-fiction\",\"Tea\",\"Abstract\",\"Ravenclaw\"]'),
(144, 37, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Wanderer\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Purple\",\"Dog\",\"Fiction\",\"Water\",\"Reality\",\"Hufflepuff\"]'),
(145, 38, '[\"Loud\",\"Quiet\",\"Agree\",\"Agree\",\"12 - 16 years old\",\"Support\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Black\",\"Turtle\",\"Non-fiction\",\"Coffee\",\"Fantasy\",\"Muggle\"]'),
(146, 39, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Red\",\"Cat\",\"Non-fiction\",\"Tea\",\"Reality\",\"Slytherin\"]'),
(147, 40, '[\"Quiet\",\"Loud\",\"Agree\",\"Agree\",\"36+ years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Rabbit\",\"Fiction\",\"Tea\",\"Reality\",\"Hufflepuff\"]'),
(148, 41, '[\"Loud\",\"Quiet\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Monster\",\"Disagree\",\"Exploring the game world\",\"A casual gamer\",\"Black\",\"Tiger\",\"Fiction\",\"Tea\",\"Abstract\",\"Ravenclaw\"]'),
(149, 42, '[\"Loud\",\"Loud\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A casual gamer\",\"Blue\",\"Tiger\",\"Fiction\",\"Water\",\"Abstract\",\"Ravenclaw\"]'),
(150, 43, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"17 - 25 years old\",\"Manager\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"White\",\"Turtle\",\"Fiction\",\"Coffee\",\"Abstract\",\"Ravenclaw\"]'),
(151, 44, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Support\",\"Agree\",\"Hanging out and having fun\",\"A casual gamer\",\"Blue\",\"Turtle\",\"Non-fiction\",\"Water\",\"Fantasy\",\"Gryffindor\"]'),
(152, 45, '[\"Loud\",\"Loud\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Support\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"White\",\"Cow\",\"Non-fiction\",\"Soda\",\"Fantasy\",\"Ravenclaw\"]'),
(153, 46, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"12 - 16 years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Blue\",\"Tiger\",\"Fiction\",\"Coffee\",\"Abstract\",\"Gryffindor\"]'),
(154, 47, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Manager\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Tiger\",\"Fiction\",\"Coffee\",\"Fantasy\",\"Muggle\"]'),
(155, 48, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Muggle\"]'),
(156, 49, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Monster\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"White\",\"Tiger\",\"Fiction\",\"Tea\",\"Reality\",\"Ravenclaw\"]'),
(157, 50, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"36+ years old\",\"Wanderer\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Orange\",\"Dog\",\"Fiction\",\"Soda\",\"Concrete\",\"Slytherin\"]'),
(158, 51, '[\"Loud\",\"Quiet\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Monster\",\"Agree\",\"Hanging out and having fun\",\"A casual gamer\",\"Red\",\"Dog\",\"Non-fiction\",\"Tea\",\"Abstract\",\"Hufflepuff\"]'),
(159, 52, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Support\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Rabbit\",\"Non-fiction\",\"Water\",\"Abstract\",\"Gryffindor\"]'),
(160, 53, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Dog\",\"Fiction\",\"Tea\",\"Concrete\",\"Slytherin\"]'),
(161, 54, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Monster\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Green\",\"Rabbit\",\"Non-fiction\",\"Water\",\"Concrete\",\"Gryffindor\"]'),
(162, 55, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Purple\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Abstract\",\"Ravenclaw\"]'),
(163, 56, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"17 - 25 years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Orange\",\"Cat\",\"Fiction\",\"Tea\",\"Fantasy\",\"Ravenclaw\"]'),
(164, 57, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"36+ years old\",\"Manager\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Purple\",\"Rabbit\",\"Non-fiction\",\"Soda\",\"Concrete\",\"Gryffindor\"]'),
(165, 58, '[\"Loud\",\"Quiet\",\"Agree\",\"Agree\",\"36+ years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Purple\",\"Dog\",\"Non-fiction\",\"Tea\",\"Reality\",\"Ravenclaw\"]'),
(166, 59, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Monster\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"Green\",\"Turtle\",\"Fiction\",\"Soda\",\"Concrete\",\"Gryffindor\"]'),
(167, 60, '[\"Loud\",\"Quiet\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Purple\",\"Dog\",\"Non-fiction\",\"Soda\",\"Reality\",\"Gryffindor\"]'),
(168, 61, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Manager\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Orange\",\"Cat\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Muggle\"]'),
(169, 62, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"12 - 16 years old\",\"Monster\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Dog\",\"Non-fiction\",\"Water\",\"Abstract\",\"Slytherin\"]'),
(170, 63, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Monster\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Cow\",\"Fiction\",\"Soda\",\"Concrete\",\"Slytherin\"]'),
(171, 64, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Manager\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Red\",\"Rabbit\",\"Fiction\",\"Soda\",\"Concrete\",\"Slytherin\"]'),
(172, 65, '[\"Loud\",\"Loud\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Tiger\",\"Fiction\",\"Soda\",\"Fantasy\",\"Muggle\"]'),
(173, 66, '[\"Loud\",\"Quiet\",\"Agree\",\"Disagree\",\"36+ years old\",\"Wanderer\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"White\",\"Rabbit\",\"Fiction\",\"Water\",\"Fantasy\",\"Ravenclaw\"]'),
(174, 67, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"36+ years old\",\"Manager\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Orange\",\"Turtle\",\"Fiction\",\"Tea\",\"Abstract\",\"Gryffindor\"]'),
(175, 68, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Manager\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Cat\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Slytherin\"]'),
(176, 69, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Monster\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Rabbit\",\"Non-fiction\",\"Tea\",\"Abstract\",\"Gryffindor\"]'),
(177, 70, '[\"Quiet\",\"Quiet\",\"Agree\",\"Disagree\",\"17 - 25 years old\",\"Monster\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"White\",\"Turtle\",\"Non-fiction\",\"Water\",\"Fantasy\",\"Slytherin\"]'),
(178, 71, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Red\",\"Cow\",\"Fiction\",\"Water\",\"Reality\",\"Gryffindor\"]'),
(179, 72, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Wanderer\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Cat\",\"Fiction\",\"Soda\",\"Concrete\",\"Slytherin\"]'),
(180, 73, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Purple\",\"Cow\",\"Fiction\",\"Coffee\",\"Reality\",\"Slytherin\"]'),
(181, 74, '[\"Loud\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Monster\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Purple\",\"Dog\",\"Fiction\",\"Tea\",\"Fantasy\",\"Gryffindor\"]'),
(182, 75, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"Blue\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Fantasy\",\"Ravenclaw\"]'),
(183, 76, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Support\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"White\",\"Tiger\",\"Non-fiction\",\"Tea\",\"Fantasy\",\"Gryffindor\"]'),
(184, 77, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"36+ years old\",\"Support\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"Red\",\"Cat\",\"Non-fiction\",\"Coffee\",\"Concrete\",\"Gryffindor\"]'),
(185, 78, '[\"Loud\",\"Loud\",\"Disagree\",\"Disagree\",\"17 - 25 years old\",\"Wanderer\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Black\",\"Dog\",\"Fiction\",\"Soda\",\"Fantasy\",\"Hufflepuff\"]'),
(186, 79, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Wanderer\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Red\",\"Tiger\",\"Non-fiction\",\"Tea\",\"Abstract\",\"Hufflepuff\"]'),
(187, 80, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"White\",\"Tiger\",\"Fiction\",\"Water\",\"Fantasy\",\"Ravenclaw\"]'),
(188, 81, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"17 - 25 years old\",\"Monster\",\"Agree\",\"Exploring the game world\",\"A serious gamer\",\"Purple\",\"Rabbit\",\"Non-fiction\",\"Tea\",\"Abstract\",\"Gryffindor\"]'),
(189, 82, '[\"Quiet\",\"Quiet\",\"Agree\",\"Agree\",\"17 - 25 years old\",\"Top Fragger\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Yellow\",\"Turtle\",\"Non-fiction\",\"Coffee\",\"Abstract\",\"Hufflepuff\"]'),
(190, 83, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Monster\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"White\",\"Cow\",\"Fiction\",\"Coffee\",\"Abstract\",\"Slytherin\"]'),
(191, 84, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"17 - 25 years old\",\"Top Fragger\",\"Disagree\",\"Exploring the game world\",\"A casual gamer\",\"Yellow\",\"Turtle\",\"Non-fiction\",\"Tea\",\"Reality\",\"Slytherin\"]'),
(192, 85, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"36+ years old\",\"Support\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Yellow\",\"Cow\",\"Fiction\",\"Coffee\",\"Concrete\",\"Hufflepuff\"]'),
(193, 86, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Agree\",\"36+ years old\",\"Manager\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Tiger\",\"Fiction\",\"Tea\",\"Fantasy\",\"Muggle\"]'),
(194, 87, '[\"Loud\",\"Loud\",\"Disagree\",\"Agree\",\"36+ years old\",\"Top Fragger\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Rabbit\",\"Non-fiction\",\"Coffee\",\"Reality\",\"Hufflepuff\"]'),
(195, 88, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"White\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Hufflepuff\"]'),
(196, 89, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Wanderer\",\"Agree\",\"Winning at all costs\",\"A serious gamer\",\"Black\",\"Dog\",\"Fiction\",\"Water\",\"Abstract\",\"Muggle\"]'),
(197, 90, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Manager\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Abstract\",\"Muggle\"]'),
(198, 91, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Monster\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Orange\",\"Turtle\",\"Non-fiction\",\"Coffee\",\"Fantasy\",\"Muggle\"]'),
(199, 92, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"12 - 16 years old\",\"Monster\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"White\",\"Dog\",\"Non-fiction\",\"Water\",\"Abstract\",\"Gryffindor\"]'),
(200, 93, '[\"Loud\",\"Loud\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Manager\",\"Agree\",\"Hanging out and having fun\",\"A casual gamer\",\"Black\",\"Turtle\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Hufflepuff\"]'),
(201, 94, '[\"Quiet\",\"Loud\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Black\",\"Dog\",\"Fiction\",\"Water\",\"Fantasy\",\"Hufflepuff\"]'),
(202, 95, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Support\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Blue\",\"Cat\",\"Fiction\",\"Soda\",\"Concrete\",\"Hufflepuff\"]'),
(203, 96, '[\"Loud\",\"Quiet\",\"Agree\",\"Disagree\",\"36+ years old\",\"Wanderer\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Orange\",\"Dog\",\"Fiction\",\"Tea\",\"Reality\",\"Ravenclaw\"]'),
(204, 97, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Wanderer\",\"Agree\",\"Hanging out and having fun\",\"A serious gamer\",\"Orange\",\"Rabbit\",\"Fiction\",\"Soda\",\"Fantasy\",\"Gryffindor\"]'),
(205, 98, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Purple\",\"Cow\",\"Non-fiction\",\"Tea\",\"Concrete\",\"Gryffindor\"]'),
(206, 99, '[\"Quiet\",\"Loud\",\"Disagree\",\"Agree\",\"26 - 35 years old\",\"Top Fragger\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"White\",\"Dog\",\"Non-fiction\",\"Water\",\"Fantasy\",\"Ravenclaw\"]'),
(207, 100, '[\"Loud\",\"Loud\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Monster\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Orange\",\"Rabbit\",\"Fiction\",\"Coffee\",\"Concrete\",\"Hufflepuff\"]'),
(208, 101, '[\"Loud\",\"Quiet\",\"Agree\",\"Agree\",\"12 - 16 years old\",\"Manager\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Green\",\"Turtle\",\"Non-fiction\",\"Tea\",\"Reality\",\"Hufflepuff\"]'),
(209, 102, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Manager\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Yellow\",\"Cat\",\"Fiction\",\"Water\",\"Reality\",\"Hufflepuff\"]'),
(210, 103, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"17 - 25 years old\",\"Manager\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Yellow\",\"Rabbit\",\"Non-fiction\",\"Soda\",\"Abstract\",\"Slytherin\"]'),
(211, 104, '[\"Loud\",\"Loud\",\"Agree\",\"Disagree\",\"12 - 16 years old\",\"Monster\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Black\",\"Dog\",\"Non-fiction\",\"Coffee\",\"Concrete\",\"Hufflepuff\"]'),
(212, 105, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"17 - 25 years old\",\"Monster\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Yellow\",\"Tiger\",\"Fiction\",\"Soda\",\"Abstract\",\"Slytherin\"]'),
(213, 106, '[\"Loud\",\"Quiet\",\"Agree\",\"Disagree\",\"26 - 35 years old\",\"Top Fragger\",\"Disagree\",\"Hanging out and having fun\",\"A serious gamer\",\"Black\",\"Tiger\",\"Fiction\",\"Coffee\",\"Abstract\",\"Hufflepuff\"]'),
(214, 107, '[\"Loud\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"White\",\"Cow\",\"Non-fiction\",\"Coffee\",\"Concrete\",\"Slytherin\"]'),
(215, 108, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Top Fragger\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Red\",\"Turtle\",\"Fiction\",\"Water\",\"Fantasy\",\"Hufflepuff\"]'),
(216, 109, '[\"Quiet\",\"Loud\",\"Disagree\",\"Disagree\",\"36+ years old\",\"Wanderer\",\"Disagree\",\"Winning at all costs\",\"A casual gamer\",\"Green\",\"Cat\",\"Non-fiction\",\"Water\",\"Fantasy\",\"Hufflepuff\"]'),
(217, 110, '[\"Loud\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Wanderer\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Blue\",\"Dog\",\"Non-fiction\",\"Water\",\"Concrete\",\"Hufflepuff\"]'),
(218, 111, '[\"Quiet\",\"Loud\",\"Agree\",\"Agree\",\"26 - 35 years old\",\"Monster\",\"Disagree\",\"Hanging out and having fun\",\"A casual gamer\",\"Orange\",\"Turtle\",\"Non-fiction\",\"Coffee\",\"Reality\",\"Slytherin\"]'),
(219, 112, '[\"Quiet\",\"Quiet\",\"Disagree\",\"Disagree\",\"12 - 16 years old\",\"Wanderer\",\"Agree\",\"Exploring the game world\",\"A casual gamer\",\"Purple\",\"Dog\",\"Fiction\",\"Coffee\",\"Concrete\",\"Slytherin\"]'),
(220, 113, '[\"Loud\",\"Quiet\",\"Agree\",\"Agree\",\"17 - 25 years old\",\"Monster\",\"Agree\",\"Winning at all costs\",\"A casual gamer\",\"Purple\",\"Dog\",\"Fiction\",\"Water\",\"Abstract\",\"Muggle\"]'),
(221, 114, '[\"Quiet\",\"Quiet\",\"Agree\",\"Disagree\",\"17 - 25 years old\",\"Top Fragger\",\"Disagree\",\"Exploring the game world\",\"A serious gamer\",\"Red\",\"Turtle\",\"Fiction\",\"Coffee\",\"Fantasy\",\"Ravenclaw\"]'),
(222, 115, '[\"Loud\",\"Quiet\",\"Disagree\",\"Agree\",\"36+ years old\",\"Support\",\"Disagree\",\"Winning at all costs\",\"A serious gamer\",\"Purple\",\"Rabbit\",\"Fiction\",\"Tea\",\"Concrete\",\"Hufflepuff\"]');

-- --------------------------------------------------------

--
-- Table structure for table `matchrequests`
--

CREATE TABLE `matchrequests` (
  `id` bigint(20) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matchrequests`
--

INSERT INTO `matchrequests` (`id`, `userID`, `created_at`, `game`, `system`, `data`) VALUES
(20, 15, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"4:00pm\",\"endTime\":\"9:00pm\",\"timeZone\":\"EST\"}'),
(22, 17, '2019-04-30 04:24:23', 'League of Legends', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"11:00pm\",\"endTime\":\"9:00pm\",\"timeZone\":\"CST\"}'),
(23, 18, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"8:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"PST\"}'),
(24, 19, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"EST\"}'),
(25, 20, '2019-04-30 04:24:23', 'League of Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"8:00pm\",\"endTime\":\"6:00pm\",\"timeZone\":\"PST\"}'),
(26, 21, '2019-04-30 04:24:23', 'Dead by Daylight', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"8:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"EST\"}'),
(27, 22, '2019-04-30 04:24:23', 'Apex Legends', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"3:00pm\",\"endTime\":\"11:00am\",\"timeZone\":\"CST\"}'),
(28, 23, '2019-04-30 04:24:23', 'League of Legends', 'PS4', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"2:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"EST\"}'),
(29, 24, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"PST\"}'),
(30, 25, '2019-04-30 04:24:23', 'Rocket League', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"8:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(31, 26, '2019-04-30 04:24:23', 'FIFA', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"9:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"CST\"}'),
(32, 27, '2019-04-30 04:24:23', 'Dead by Daylight', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"6:00pm\",\"endTime\":\"11:00am\",\"timeZone\":\"EST\"}'),
(33, 28, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"11:00am\",\"endTime\":\"2:00pm\",\"timeZone\":\"EST\"}'),
(34, 29, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00pm\",\"endTime\":\"5:00pm\",\"timeZone\":\"EST\"}'),
(35, 30, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"6:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"CST\"}'),
(36, 31, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"7:00pm\",\"timeZone\":\"EST\"}'),
(37, 32, '2019-04-30 04:24:23', 'Rocket League', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"7:00pm\",\"endTime\":\"9:00pm\",\"timeZone\":\"CST\"}'),
(38, 33, '2019-04-30 04:24:23', 'Apex Legends', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"2:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"PST\"}'),
(39, 34, '2019-04-30 04:24:23', 'Fortnite', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"EST\"}'),
(40, 35, '2019-04-30 04:24:23', 'Rocket League', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"EST\"}'),
(41, 36, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'Nintendo Switch', '{\"skillLevel\":\"Elite\",\"startTime\":\"2:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"EST\"}'),
(42, 37, '2019-04-30 04:24:23', 'League of Legends', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"1:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"CST\"}'),
(43, 38, '2019-04-30 04:24:23', 'League of Legends', 'Nintendo Switch', '{\"skillLevel\":\"Elite\",\"startTime\":\"1:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"CST\"}'),
(44, 39, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"7:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"PST\"}'),
(45, 40, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"6:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"PST\"}'),
(46, 41, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"5:00pm\",\"endTime\":\"7:00pm\",\"timeZone\":\"PST\"}'),
(47, 42, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00am\",\"endTime\":\"5:00pm\",\"timeZone\":\"PST\"}'),
(48, 43, '2019-04-30 04:24:23', 'Rocket League', 'Xbox One', '{\"skillLevel\":\"Advanced\",\"startTime\":\"1:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"EST\"}'),
(49, 44, '2019-04-30 04:24:23', 'FIFA', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"7:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"PST\"}'),
(50, 45, '2019-04-30 04:24:23', 'League of Legends', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00am\",\"endTime\":\"8:00pm\",\"timeZone\":\"PST\"}'),
(51, 46, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00am\",\"endTime\":\"7:00pm\",\"timeZone\":\"EST\"}'),
(52, 47, '2019-04-30 04:24:23', 'Dead by Daylight', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"4:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"EST\"}'),
(53, 48, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Advanced\",\"startTime\":\"10:00am\",\"endTime\":\"4:00pm\",\"timeZone\":\"EST\"}'),
(54, 49, '2019-04-30 04:24:23', 'Dead by Daylight', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00am\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(55, 50, '2019-04-30 04:24:23', 'Rocket League', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"10:00am\",\"endTime\":\"8:00pm\",\"timeZone\":\"CST\"}'),
(56, 51, '2019-04-30 04:24:23', 'Dead by Daylight', 'Nintendo Switch', '{\"skillLevel\":\"Elite\",\"startTime\":\"3:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"CST\"}'),
(57, 52, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"3:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(58, 53, '2019-04-30 04:24:23', 'Dead by Daylight', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"11:00am\",\"endTime\":\"12:00pm\",\"timeZone\":\"PST\"}'),
(59, 54, '2019-04-30 04:24:23', 'Apex Legends', 'PC', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"9:00pm\",\"timeZone\":\"EST\"}'),
(60, 55, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"8:00pm\",\"endTime\":\"5:00pm\",\"timeZone\":\"PST\"}'),
(61, 56, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"7:00pm\",\"endTime\":\"7:00pm\",\"timeZone\":\"PST\"}'),
(62, 57, '2019-04-30 04:24:23', 'League of Legends', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"1:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"EST\"}'),
(63, 58, '2019-04-30 04:24:23', 'Rocket League', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"7:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"PST\"}'),
(64, 59, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"8:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"EST\"}'),
(65, 60, '2019-04-30 04:24:23', 'Fortnite', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"4:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"EST\"}'),
(66, 61, '2019-04-30 04:24:23', 'Fortnite', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"10:00pm\",\"endTime\":\"11:00am\",\"timeZone\":\"CST\"}'),
(67, 62, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PS4', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"11:00am\",\"endTime\":\"10:00am\",\"timeZone\":\"CST\"}'),
(68, 63, '2019-04-30 04:24:23', 'Dead by Daylight', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"9:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"CST\"}'),
(69, 64, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Advanced\",\"startTime\":\"10:00am\",\"endTime\":\"11:00am\",\"timeZone\":\"PST\"}'),
(70, 65, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"1:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"EST\"}'),
(71, 66, '2019-04-30 04:24:23', 'Dead by Daylight', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"4:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"PST\"}'),
(72, 67, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"1:00pm\",\"endTime\":\"2:00pm\",\"timeZone\":\"CST\"}'),
(73, 68, '2019-04-30 04:24:23', 'Apex Legends', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"10:00pm\",\"endTime\":\"1:00pm\",\"timeZone\":\"EST\"}'),
(74, 69, '2019-04-30 04:24:23', 'Apex Legends', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"12:00pm\",\"endTime\":\"6:00pm\",\"timeZone\":\"PST\"}'),
(75, 70, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Advanced\",\"startTime\":\"4:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"CST\"}'),
(76, 71, '2019-04-30 04:24:23', 'Dead by Daylight', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"8:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"EST\"}'),
(77, 72, '2019-04-30 04:24:23', 'Apex Legends', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"1:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"EST\"}'),
(78, 73, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00am\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(79, 74, '2019-04-30 04:24:23', 'FIFA', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"11:00pm\",\"endTime\":\"2:00pm\",\"timeZone\":\"CST\"}'),
(80, 75, '2019-04-30 04:24:23', 'Fortnite', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"4:00pm\",\"endTime\":\"6:00pm\",\"timeZone\":\"CST\"}'),
(81, 76, '2019-04-30 04:24:23', 'Fortnite', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"11:00am\",\"endTime\":\"5:00pm\",\"timeZone\":\"CST\"}'),
(82, 77, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00am\",\"endTime\":\"3:00pm\",\"timeZone\":\"EST\"}'),
(83, 78, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"3:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(84, 79, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"3:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"PST\"}'),
(85, 80, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"6:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"EST\"}'),
(86, 81, '2019-04-30 04:24:23', 'League of Legends', 'Xbox One', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"6:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"EST\"}'),
(87, 82, '2019-04-30 04:24:23', 'League of Legends', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"4:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"EST\"}'),
(88, 83, '2019-04-30 04:24:23', 'Rocket League', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00am\",\"endTime\":\"6:00pm\",\"timeZone\":\"CST\"}'),
(89, 84, '2019-04-30 04:24:23', 'Rocket League', 'Nintendo Switch', '{\"skillLevel\":\"Elite\",\"startTime\":\"6:00pm\",\"endTime\":\"8:00pm\",\"timeZone\":\"PST\"}'),
(90, 85, '2019-04-30 04:24:23', 'Apex Legends', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"PST\"}'),
(91, 86, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"12:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(92, 87, '2019-04-30 04:24:23', 'Rocket League', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"6:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"CST\"}'),
(93, 88, '2019-04-30 04:24:23', 'Dead by Daylight', 'PC', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"2:00pm\",\"endTime\":\"10:00pm\",\"timeZone\":\"CST\"}'),
(94, 89, '2019-04-30 04:24:23', 'Rocket League', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"11:00am\",\"endTime\":\"9:00pm\",\"timeZone\":\"CST\"}'),
(95, 90, '2019-04-30 04:24:23', 'League of Legends', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"PST\"}'),
(96, 91, '2019-04-30 04:24:23', 'Apex Legends', 'PS4', '{\"skillLevel\":\"Advanced\",\"startTime\":\"4:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"EST\"}'),
(97, 92, '2019-04-30 04:24:23', 'FIFA', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00am\",\"endTime\":\"11:00am\",\"timeZone\":\"EST\"}'),
(98, 93, '2019-04-30 04:24:23', 'Dead by Daylight', 'PC', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"PST\"}'),
(99, 94, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"3:00pm\",\"endTime\":\"6:00pm\",\"timeZone\":\"CST\"}'),
(100, 95, '2019-04-30 04:24:23', 'Dead by Daylight', 'PS4', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"10:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"CST\"}'),
(101, 96, '2019-04-30 04:24:23', 'FIFA', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"11:00am\",\"endTime\":\"7:00pm\",\"timeZone\":\"CST\"}'),
(102, 97, '2019-04-30 04:24:23', 'Fortnite', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"1:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"PST\"}'),
(103, 98, '2019-04-30 04:24:23', 'League of Legends', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"5:00pm\",\"timeZone\":\"PST\"}'),
(104, 99, '2019-04-30 04:24:23', 'Dead by Daylight', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"11:00am\",\"endTime\":\"10:00am\",\"timeZone\":\"PST\"}'),
(105, 100, '2019-04-30 04:24:23', 'Fortnite', 'PC', '{\"skillLevel\":\"Beginner\",\"startTime\":\"10:00am\",\"endTime\":\"10:00pm\",\"timeZone\":\"EST\"}'),
(106, 101, '2019-04-30 04:24:23', 'Apex Legends', 'Nintendo Switch', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"11:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"CST\"}'),
(107, 102, '2019-04-30 04:24:23', 'FIFA', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"4:00pm\",\"endTime\":\"2:00pm\",\"timeZone\":\"EST\"}'),
(108, 103, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Intermediate\",\"startTime\":\"10:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"EST\"}'),
(109, 104, '2019-04-30 04:24:23', 'Dead by Daylight', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"11:00am\",\"endTime\":\"11:00am\",\"timeZone\":\"CST\"}'),
(110, 105, '2019-04-30 04:24:23', 'League of Legends', 'PS4', '{\"skillLevel\":\"Advanced\",\"startTime\":\"12:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"PST\"}'),
(111, 106, '2019-04-30 04:24:23', 'Fortnite', 'Xbox One', '{\"skillLevel\":\"Beginner\",\"startTime\":\"11:00am\",\"endTime\":\"3:00pm\",\"timeZone\":\"EST\"}'),
(112, 107, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Elite\",\"startTime\":\"12:00pm\",\"endTime\":\"3:00pm\",\"timeZone\":\"EST\"}'),
(113, 108, '2019-04-30 04:24:23', 'Dead by Daylight', 'Xbox One', '{\"skillLevel\":\"Advanced\",\"startTime\":\"10:00pm\",\"endTime\":\"7:00pm\",\"timeZone\":\"EST\"}'),
(114, 109, '2019-04-30 04:24:23', 'League of Legends', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"9:00pm\",\"endTime\":\"11:00pm\",\"timeZone\":\"PST\"}'),
(115, 110, '2019-04-30 04:24:23', 'Rocket League', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"1:00pm\",\"endTime\":\"4:00pm\",\"timeZone\":\"PST\"}'),
(116, 111, '2019-04-30 04:24:23', 'League of Legends', 'PS4', '{\"skillLevel\":\"Beginner\",\"startTime\":\"5:00pm\",\"endTime\":\"11:00am\",\"timeZone\":\"EST\"}'),
(117, 112, '2019-04-30 04:24:23', 'FIFA', 'Xbox One', '{\"skillLevel\":\"Elite\",\"startTime\":\"2:00pm\",\"endTime\":\"2:00pm\",\"timeZone\":\"PST\"}'),
(118, 113, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'PC', '{\"skillLevel\":\"Advanced\",\"startTime\":\"2:00pm\",\"endTime\":\"12:00pm\",\"timeZone\":\"EST\"}'),
(119, 114, '2019-04-30 04:24:23', 'Rocket League', 'PC', '{\"skillLevel\":\"Elite\",\"startTime\":\"11:00am\",\"endTime\":\"3:00pm\",\"timeZone\":\"CST\"}'),
(120, 115, '2019-04-30 04:24:23', 'Call of Duty: Black Ops', 'Nintendo Switch', '{\"skillLevel\":\"Beginner\",\"startTime\":\"7:00pm\",\"endTime\":\"10:00am\",\"timeZone\":\"EST\"}');

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
(14, 'akritskiy@gmail.com', 'alex', '$2y$10$gQOEZ0PaQl3.VPme48hvvOAKUqWIeQ0yU9TLm67j.I53DjNET5YsK', '2019-04-28 02:46:18', '$2y$10$ejvQPCR7dgOsjM2tgcb3T..fPe7wwYXlJjyjqzrVkJ6T8/rIszEve', 1),
(15, 'Tester1@test.com', 'Tester1', '$2y$10$6AjJ8SjJXkLonvGHVXtPOefO1ifXjtDYR2IZnagUtqTn21bbtkdoK', '2019-04-30 03:04:31', '$2y$10$hoM5Msh1bme5JJRkwQYU6.k5kFGbg5kwagNTOrNvUH66EHBpA2FAq', 1),
(17, 'Tester2@test.com', 'Tester2', '$2y$10$wP1WFuR3IaJH0y1nyxiQyuXKcP4HyjLmF9fRq0AWvqbJc1jqKo2OC', '2019-04-30 03:13:44', '$2y$10$vHBu/taYhQ9Sod5eaHl5L.GTUqk7MlLy9xBLokRkt3GFaFDqLLFfO', 1),
(18, 'Tester3@test.com', 'Tester3', '$2y$10$XX6VW3R0EwGGZt4P7pep4exCDJsq..l4nWaASnwAJ56qAacRmKuvW', '2019-04-30 03:13:45', '$2y$10$AlvuWiXpfAi2aVWichu3Jepzr4pr6/dio50j4rzesZuSkFB3isj2O', 1),
(19, 'Tester4@test.com', 'Tester4', '$2y$10$.Ig/mWHpyl99X3TTAPhzaunkIATWt8iCUH/xYgTrEEUb3gl0kz6Jm', '2019-04-30 03:13:45', '$2y$10$EhnDRXN/uxOSANRccdhM8.k3yRqOHbWcc6M79dSB5DeVkDAH/ZAGG', 1),
(20, 'Tester5@test.com', 'Tester5', '$2y$10$Ah/i1lRU7lVVU0wKxV80JuKjBzIUZuLzWwDY/OKfRtVVA7A1MI7iu', '2019-04-30 03:13:45', '$2y$10$wx0bWZmaC3Ij.PfvvQS9HOc2.ou/cMgi1IEBPMhqUuPRJ3OG3p4CO', 1),
(21, 'Tester6@test.com', 'Tester6', '$2y$10$/HgJiuvWc9d1qi4qe1hseOsVXC9uZ6.f2RwEfZ.UBk9on1hImjGX6', '2019-04-30 03:13:45', '$2y$10$r7nh7OHCViVD6nM.vY/KB.vy30OUZnnyddQLXWq.Ht3t7bUmNXEHW', 1),
(22, 'Tester7@test.com', 'Tester7', '$2y$10$uCcKxTtSB3e/iBb8bNQeI.CARSL.GncZltqhDMtKePAM/8t42bB8u', '2019-04-30 03:13:45', '$2y$10$2zlKkSMF8m6ABBxvvE.Aleei8Ph..FJ.0uI5FuH0.4A5hW1UsUGPO', 1),
(23, 'Tester8@test.com', 'Tester8', '$2y$10$dihbQTHTDB5Nct9IjBkOPO2Y8xVNsl.IsDHf2ID9BI4BU7/OKxkzK', '2019-04-30 03:13:45', '$2y$10$IDPq.7pHjauCP89evCdjueofHyWtO6N2vL7t6flU6vRrJB8mtBisi', 1),
(24, 'Tester9@test.com', 'Tester9', '$2y$10$CNk5jm0b1NFVKSvHKrew8OTCqJWIRJbM1PfkZr.unagAjBtbeO1Qe', '2019-04-30 03:13:45', '$2y$10$kD9HHyiSM9FjZU4sgOuifeE.sy.H8IGWMV60W0ACw/QwldnpRvr0C', 1),
(25, 'Tester10@test.com', 'Tester10', '$2y$10$EE6GmriqeKOCSVPxQnf6ZOIQsbJ0vWPkcViQtotuNxfxxEJ12TzGq', '2019-04-30 03:13:45', '$2y$10$Ha2689LsJ7DdduOqNpMWD.G4IEWC.F7lAs72zV6CyUcBrQYOikupa', 1),
(26, 'Tester11@test.com', 'Tester11', '$2y$10$N91q5/JZuoEArpKT7uM6ReVI1iiKIQtc8qJoEvqfuMgG7K7jwPWja', '2019-04-30 03:13:46', '$2y$10$nZvoC0UemhM5J7Vvv0mgrepjoeGIThAaQmCOpestlFG1k5rZcEIgS', 1),
(27, 'Tester12@test.com', 'Tester12', '$2y$10$pHduYlPSHmMyGErlpskbjeSU00m4h.iX7v482qocFtXe91fL5/ef6', '2019-04-30 03:13:46', '$2y$10$jJhJBvi.iu.OV4mofSb2Gu1.3n6gn0VVJ.uKwS0m8t616/v/c40ci', 1),
(28, 'Tester13@test.com', 'Tester13', '$2y$10$yVbWUmMEHq4d.qefghd2jOVVkFVIJmSsn5JPNvRaK4ZIaMjzVpR7a', '2019-04-30 03:13:46', '$2y$10$TqO5J66mvDoP9dQyHAJG9eLH1Lo28kKNEfUVWjm2VNqBF0yx1GoAO', 1),
(29, 'Tester14@test.com', 'Tester14', '$2y$10$1MN7zM14FXQYgiZw8MyfZ.2GF5LfgMupM5zje8RAp758WSUg9xcj6', '2019-04-30 03:13:46', '$2y$10$sX87k63JurO7JIGyCOlcu.YU6exbA.3dNBaz49SqMo17Zsgy8vm5W', 1),
(30, 'Tester15@test.com', 'Tester15', '$2y$10$WQt2/tgGQSpOm2Pa8toMqObDDLMTA54lMzL6G8.RYQwm1T1E8xmL2', '2019-04-30 03:13:46', '$2y$10$MxQNB.rDy0jMgSs2BbYD9On9B9LwSSXsiqFO.85R753OC22RNulgO', 1),
(31, 'Tester16@test.com', 'Tester16', '$2y$10$wgS/LJWwO/n9HxuhrN5xYuHsDVAfq1//hIzd1wvpo7DxsvHOBPCYu', '2019-04-30 03:13:46', '$2y$10$x3LVaq9cUxuSEfavy131/uhON2YZrxISCRaqUxf3wz6ho4Vn/ExLO', 1),
(32, 'Tester17@test.com', 'Tester17', '$2y$10$bLy.qe.cqQwnnZ2ns.Yrf.kqL70vxTDFlw7Vh6SmsTbNyjYwwPKdC', '2019-04-30 03:13:46', '$2y$10$84R9sJAdQF4FZSkQO3R0Iuq66uZmVC1PLuf2yfMhVp/pDMWjrR4uy', 1),
(33, 'Tester18@test.com', 'Tester18', '$2y$10$zx8xjjHPAMnFmTvTH9sGQepSIAUIL45gJEifdnYJbNYq96x5el18e', '2019-04-30 03:13:47', '$2y$10$EcIfwnD9C1B66C9gdAUldeMXZ15tdamohcF58hZcB7ZR.GkAFZiK.', 1),
(34, 'Tester19@test.com', 'Tester19', '$2y$10$Ftml4G7pcULJiZWBnG4WseJVeLFp/wmN7a82Uyqexaj6U1eL9iAmi', '2019-04-30 03:13:47', '$2y$10$rQvxG5I64fSEQzkLU2dNjeqX7rWlgirlQF5452OksO3FZMGx9O/Am', 1),
(35, 'Tester20@test.com', 'Tester20', '$2y$10$nGsurZYhhsE90PDI0TTBC.MKTvMs1ZDFbDIUrAowxMR0x.4E23asy', '2019-04-30 03:13:47', '$2y$10$jkW4Stdju7Cf7BzsmFWl5.UsD3RFCN1hDpSwiadCnMpgj8bmH14V.', 1),
(36, 'Tester21@test.com', 'Tester21', '$2y$10$5/XPvBgv8rJOG7gupdcJjOuMF516pjMGM5uLcZ4wbcmcrTEVeVT8a', '2019-04-30 03:13:47', '$2y$10$hUpcPp4u62JgmgoKLEZ0gOPiKcWDQuuG2x/keUkZckPHjh9InKUfu', 1),
(37, 'Tester22@test.com', 'Tester22', '$2y$10$ScIlk/ShagVk7RlVmPKP2OekJkgXMJQlWzaMA/u75unlT6m1xelKO', '2019-04-30 03:13:47', '$2y$10$OagKguE/fCB.MPZmab2C/uampbMAtvDIl9HRBoJIe5dem519QV.VS', 1),
(38, 'Tester23@test.com', 'Tester23', '$2y$10$LIxvieWrrOsvx1./N5GR5.xBax3m7Rg5LVXgowsjbhxSNGNmfefi.', '2019-04-30 03:13:47', '$2y$10$2q2.OX8e7YTTtcQh6X//EOcVfQ7ZeAi.OWZZYBIKMJMcXuwIKM/Oy', 1),
(39, 'Tester24@test.com', 'Tester24', '$2y$10$AuwI5JkPrTM7IkjI856DK.tPt68NxZybZrKHZ.EO5aOyttSn3r1yq', '2019-04-30 03:13:47', '$2y$10$Kr8lVqPN8ZI47HiwwJTJOOzdwHTMAc73XMRHVpSU8fRBtwVXIsdPq', 1),
(40, 'Tester25@test.com', 'Tester25', '$2y$10$lodDJ3c0/fo5TaSfktWpEu35jZIQRlt4pxA7Hhq8ASZg2/.MQgG4q', '2019-04-30 03:13:47', '$2y$10$aGry8ugFl34E5J77AH8d1ee7YJj7LLO.M00hRiAwHHhA8FPvCEKR6', 1),
(41, 'Tester26@test.com', 'Tester26', '$2y$10$pSuGScaGcCqIJCAJcC4Vd.7a7ul42VNvOJqcXDkSYmCHAqNtIC4bi', '2019-04-30 03:13:48', '$2y$10$BES1dL5vgqTRsIFYjm4gF.evVethhb5PO.VT8JkA/2kIJU6/Pcaj2', 1),
(42, 'Tester27@test.com', 'Tester27', '$2y$10$Acv86hHB4nyb0xj7N.p7ceCCenDlwNIXBhFFuy4NgbBArzN/FPf9m', '2019-04-30 03:13:48', '$2y$10$Bt/FUpF5F379YNKcO4Hc4OzYefedwhAfQIcNcqIWHdZRZQMWcnZ.y', 1),
(43, 'Tester28@test.com', 'Tester28', '$2y$10$0/dkv5ug95ClihBCBxjDGuD9relRHBXz3F5Ql7K5ILWU8LYjb2IkW', '2019-04-30 03:13:48', '$2y$10$8puIIEKnwPMNpG7Tm2Fgo.Nv0RmzYnSpi9fCbgA8qcMzQkbHgmXUm', 1),
(44, 'Tester29@test.com', 'Tester29', '$2y$10$5R0YTUF/NWO95pYBELSjXeiQutd59zoBThZfAYWh2i.UhHLOk9QHy', '2019-04-30 03:13:48', '$2y$10$ehA./V4BeO/lorF6F70hLeOW7A2VUwapgcmF9Q3SykZUZmGF.UEJy', 1),
(45, 'Tester30@test.com', 'Tester30', '$2y$10$jcXtSaevcM7wmmon4NfEhuWoRPBlaIdavAw1L2I/k6P/qOapp956u', '2019-04-30 03:13:48', '$2y$10$EAcUesIUZrRDQLRZsMziY.9Vc3B4llp1MR4PKSS00ooFvFL9sMtJS', 1),
(46, 'Tester31@test.com', 'Tester31', '$2y$10$pbb8XV84oDFei31E5RkLVuTVvtkyOQ4/ts.Y/RXHwIzMuw.gn5z/S', '2019-04-30 03:13:48', '$2y$10$yxy.W/oSH3L.Kd5sACHniuJnR0bK64PqxXDMdaIgkRK9fLPQszhVG', 1),
(47, 'Tester32@test.com', 'Tester32', '$2y$10$EXgaUNu61ABbS14Hve72kuarb62PVaD7upPMDs0rgj0ZR2H1h.9MG', '2019-04-30 03:13:48', '$2y$10$kk/4YjvONkVJXzf2xbpYxOgZIVT3V.afNqaWXJLIhiKYBhdusmhHW', 1),
(48, 'Tester33@test.com', 'Tester33', '$2y$10$SP9b9eFtZIZl8gRa34lL8eizjVxwH19apc9UVnUszwyaan.SBZUhi', '2019-04-30 03:13:48', '$2y$10$RoYUBhnISJkPUxujj45aweieIErKeqgD5GYpkY92UY.P8JnZ5YheC', 1),
(49, 'Tester34@test.com', 'Tester34', '$2y$10$4RUdZWFU7Al.VJAWUV819uFM7tyafgYz6j1jBbWCJyYgdw5h9ERB2', '2019-04-30 03:13:49', '$2y$10$ShpGjZJhgpXg1ghexd9PM..Bkx74DHJ73tjkKhKOyQ8V.goLPzTsW', 1),
(50, 'Tester35@test.com', 'Tester35', '$2y$10$5Za3HA/5TtN1g0F.lH54cuHuFCg9NkFLqDLyRmCMmIosgQJLBpXOC', '2019-04-30 03:13:49', '$2y$10$0nOSQxK3CCxtMWMgjaWh6O4iJhN3TJJW9pYGX37maZLZM5/MpLVVy', 1),
(51, 'Tester36@test.com', 'Tester36', '$2y$10$sy9XaD20zrapoec5lUcAAOOBHAMKlqYnVXWVIpwiqQSGM7E2J6s/e', '2019-04-30 03:13:49', '$2y$10$mGDo31efLq6OxGH7WWCMSu/veaEPlG5yOJfscI0L1rN/t7/v0VIYO', 1),
(52, 'Tester37@test.com', 'Tester37', '$2y$10$bAcVH5m6w6YXaR8nNJi8w.7THPf02j1hmkzHs9LScUVGxT01/l5oW', '2019-04-30 03:13:49', '$2y$10$0qZdu/r76u.TgyDSNGNiteskL6PZo6cYWbKEnFpNlbO0HSFuU.9Iq', 1),
(53, 'Tester38@test.com', 'Tester38', '$2y$10$ESRfqx8NFL2OdGkuLr9hm.wNtprSAtC5x9mbzGzsNmHgy0Bekn0R.', '2019-04-30 03:13:49', '$2y$10$sEzqplScTwI0GQCCZ1T5juEovWeYFEbVcHtnIU4rg6ZGyQ9X.ST7u', 1),
(54, 'Tester39@test.com', 'Tester39', '$2y$10$0C4FnQMEbVyTqnVLbksl/eHh/MkWytNOzasyt2ejdA.uDPX4Ci0hG', '2019-04-30 03:13:49', '$2y$10$9DjVb55X0B43vBsytQ.k4eCP/Qwf0/v8AJj6.eGZMAJJOikliT0mq', 1),
(55, 'Tester40@test.com', 'Tester40', '$2y$10$83uh/cLOeURhBZUpxEeT0uemB/aJK7M1mv1s5EXNn3XUUEr49VDje', '2019-04-30 03:13:49', '$2y$10$hk76eT25ocA8Je3ElLRG7uGfL2PwaqiwWDrNn4/jGj/g3lMOKRSaa', 1),
(56, 'Tester41@test.com', 'Tester41', '$2y$10$91.0rPnqDoK2UKmKxQpx.uuIO1xfK2VgK3WyqR01.FSzo7ZAEtULW', '2019-04-30 03:13:50', '$2y$10$Bpe13zBPTAIMvoF0QdBJje1zH5jA6ZLXP85Vspf1p9pSOvimMBueG', 1),
(57, 'Tester42@test.com', 'Tester42', '$2y$10$wmSvldNIVf03bkUg.jiRZul7Xkx2Uewm.1XCad7TzUJtSuCKRabF.', '2019-04-30 03:13:50', '$2y$10$iwgLACzOst.rGAfOsgoqHOSNUfWuqMdyDCoQLxUwTxlBvTiuxMauW', 1),
(58, 'Tester43@test.com', 'Tester43', '$2y$10$xEW7qDpmTzPyjUljqPQ3lu59WDocoQ/7863/rTPx9oCAB0g19aGB2', '2019-04-30 03:13:50', '$2y$10$FFCOh/XDgzyvA0p408xmsuc090DturjR1LRmeKHPKznTtkh1e/pKW', 1),
(59, 'Tester44@test.com', 'Tester44', '$2y$10$arJ/9C1o86Rp.YJl1SDM0ei3CTIqaP4nJD1zShuMC4VVV8Ym7fVOS', '2019-04-30 03:13:50', '$2y$10$YKyTkIDmGjD6g30V3375PuvAixZmasYBB5Mghz7NG6VYfHl33ajKi', 1),
(60, 'Tester45@test.com', 'Tester45', '$2y$10$aDKWdOcc4pfBXRwHxnOoPOdKZjbh64JovF0MLqgOy.NxlJZ6WPd2q', '2019-04-30 03:13:50', '$2y$10$Jt3qA20VnL1OHbwmYisBPujpmz9Tq0aLIErLMFLjsKb0deCCItLuu', 1),
(61, 'Tester46@test.com', 'Tester46', '$2y$10$yCxC7B/PbJsiO6QPZ/a9Hub6BXp3Pv3bk2GCMDBl8X6Ln2fQDodci', '2019-04-30 03:13:50', '$2y$10$2FuLj8oQESHS68ZDxlswmeU4QJ1r8YJ/I44pI6YCqkJmKmpJlxtH2', 1),
(62, 'Tester47@test.com', 'Tester47', '$2y$10$F9eHaI8trzey06k69VBFQeNX4EYnhO5dtNGEhop.2nWCPfvCUSBz6', '2019-04-30 03:13:50', '$2y$10$sdYfNpp2gE7PiqjXDuO/zO60QKmWECZoT1lX01pZMOUWNOrjnNjki', 1),
(63, 'Tester48@test.com', 'Tester48', '$2y$10$ihdIJhtT3U3zyL1PoY1l6e4zDy8L0GOg1.l3YUV5mhB3tCg3VWpwC', '2019-04-30 03:13:50', '$2y$10$Dnjsn17x5S4ZiDR4lLi0Hu5ML.MDL.3ROPppUZqpDscqRXu2b7UWa', 1),
(64, 'Tester49@test.com', 'Tester49', '$2y$10$KED2u5cxaoozTXce4cn3HePEHxoulgAEDzO0uLI7xXF8xDvrYRz6u', '2019-04-30 03:13:51', '$2y$10$RT5YmyDK2rAPpg.GVycpTumegSr7NXNdS4.kvJyRtW.QHGJVyIqFW', 1),
(65, 'Tester50@test.com', 'Tester50', '$2y$10$SpTizxr02Fd5SWOftnimvO0r.LHiQup7st9i9oGWI3.w/.BbO3uWm', '2019-04-30 03:13:51', '$2y$10$2MEyIFR3RWbXivejHE5gl.OMgBj366CEJceusFXcWbWBEfaH9bXJ2', 1),
(66, 'Tester51@test.com', 'Tester51', '$2y$10$K8QTEEPUXd2.RHPufHMcGOwDUPtWCdOxnLEgyLB1zlcafKzIa.Rya', '2019-04-30 03:13:51', '$2y$10$uY/hfScWORuJyqbpTsgbNOMlsvsm1aj1W7Iq6NSh.MGD0TkJxRq.y', 1),
(67, 'Tester52@test.com', 'Tester52', '$2y$10$.u0rOvSK4xvGa9ljKF/AyeqfJqQ3uLzx62kxIHsp5r8vBbo04Kg.a', '2019-04-30 03:13:51', '$2y$10$1zED0wil.UHbCo.qAzj4iOcD93t5KQWkgP/mFRZcti7sQTTavLMda', 1),
(68, 'Tester53@test.com', 'Tester53', '$2y$10$GEAu71DwJDpojBaMnmpO8ertVB0cj2rOaxJPfYgZa9sjzvwCU5EXC', '2019-04-30 03:13:51', '$2y$10$B2qWeHPSrc.ZrTGo7cvOP.GswzgiOrTN.ffKLu77GjheDj.R5wC1G', 1),
(69, 'Tester54@test.com', 'Tester54', '$2y$10$HepIKBiV4LnWLjxj8C1vcuqtiE59g0T1TPARUYUaZ4UY.TbyZ6OC.', '2019-04-30 03:13:51', '$2y$10$VQrz/7z8olPThD/ubUOiduVFZtSxJMhBxAmzNS0Q1bZl./nOih542', 1),
(70, 'Tester55@test.com', 'Tester55', '$2y$10$KBNdnOF6X7/BxSJWx1cu/.6U7bYuioqgIB8oaDW6aqdhUWaX2zfLy', '2019-04-30 03:13:51', '$2y$10$o00Z/ulPFIdUmW/dmUlexOJdMAWbv6HgjCP6.VPogNMGmQuSRF1he', 1),
(71, 'Tester56@test.com', 'Tester56', '$2y$10$lTsdJ1NOoQargElmubl7L.ZtOakP02e0tSKy8z67dnRHMkKBzUghi', '2019-04-30 03:13:51', '$2y$10$5sRgKTh.5diaoEXBHTBciuiAh1rcwSUes1a.hxcSV1IiDCPr7f8Ou', 1),
(72, 'Tester57@test.com', 'Tester57', '$2y$10$pK2G7/lIN0bFr7FozeauX.v3tsRYzVrbsVkWZ3WgCe8Il.FSWQuLO', '2019-04-30 03:13:52', '$2y$10$7u4aKrCPT3nc4aDIse5pDen9SSmgW9vNRy9MIC1y./pvEhuU2/7X6', 1),
(73, 'Tester58@test.com', 'Tester58', '$2y$10$jE2/B/o88E7g1GwkJktN2OT/RharmYqZrYjRe9Pxs6MkdUl.ELGlm', '2019-04-30 03:13:52', '$2y$10$DNoEWfqUsM0s3hLRKTrbbevXCLuuvnrWbTUBmOeAmmRMC9I4pxnHq', 1),
(74, 'Tester59@test.com', 'Tester59', '$2y$10$2YJBZZmdA/ue0AMsZT1oWuquVGcPL6/LCIvTk8jQo.G7Qw0/3dHn6', '2019-04-30 03:13:52', '$2y$10$ZgSUKevX0oONQwqKtiBZkOy8CNtq3wuQsi9VJNzh8kdkCN2C2RwHC', 1),
(75, 'Tester60@test.com', 'Tester60', '$2y$10$NQtziU9Z/NnazOo0wn5j2O/A2weUR5Qluaopj.lEltQcCBSq7q99q', '2019-04-30 03:13:52', '$2y$10$F6qQSajme9VIr1RU9U0BlOC1yZiu55HeeSfzKCBvjpTIlhi.lyL4S', 1),
(76, 'Tester61@test.com', 'Tester61', '$2y$10$1cc9M.2n.C8AjBq40lXz2eecX4IqcgbLes6oAmjB/WOGRKvJ1lw6.', '2019-04-30 03:13:52', '$2y$10$jx2eqN.l0vEeSjiW3AGjJO.5zSf9hHHnE3hjq.TmvQcrHeRbnPHp6', 1),
(77, 'Tester62@test.com', 'Tester62', '$2y$10$/Dhdys97m6wddz20LGKqFuR0tpFMDDLiErG4.qQn0KNaIH6TdGGL2', '2019-04-30 03:13:52', '$2y$10$UHUO3jg3D4hk0Y7gy2tRc.V9ejvdrb1NRaSBcR.PTZKQfnngwzmgG', 1),
(78, 'Tester63@test.com', 'Tester63', '$2y$10$SMdlPtH89ddRl18kWEWGYOAhLTBqwTeTe54gktLIs3/xC0q/YCLRu', '2019-04-30 03:13:52', '$2y$10$UYZMD00ptV6FoKbpHjrFpONnI38.Y/Fn5EROBxlTPufHq2Zg307.K', 1),
(79, 'Tester64@test.com', 'Tester64', '$2y$10$mGaw/H7WUgAtGCUkDTBN6uxRe9erQlkb8pow/7HFlAoSY4jz/J98a', '2019-04-30 03:13:53', '$2y$10$wiGNL8qrdnzUUXy1Yiu6NOTa0tEtDijv0MSQIPHK1I2LDL4HinYvW', 1),
(80, 'Tester65@test.com', 'Tester65', '$2y$10$cKZvk5KpSYhkqUi5dVdHB.qbA45ND1WCEPY/bHhAiJx1H.O3r86e.', '2019-04-30 03:13:53', '$2y$10$EGppIm93A4B09syChYTzBOWAkc9OMUw7498L9lo4UVg6k/yT6FIq6', 1),
(81, 'Tester66@test.com', 'Tester66', '$2y$10$eHOfrzfbL5xi/fyMrm4FN.7GegnHWMtufZnzko.xnN2II4f.wmR6a', '2019-04-30 03:13:53', '$2y$10$5wgDtXXXDvjStbAaSIy1ee1MKpka4doggFworhaV7OJfsODNpA9si', 1),
(82, 'Tester67@test.com', 'Tester67', '$2y$10$E.DxJYfV3rvYU8BV10q9KuEjqn3mcmrrUbS1D94AhrdFBW.rP8FZm', '2019-04-30 03:13:53', '$2y$10$jGESbn/7MzlsOIrUcsKpOOriGwEacaKLOG/nlLondcmBxRFJ6h2/K', 1),
(83, 'Tester68@test.com', 'Tester68', '$2y$10$NZvFFf9rR7xai8.apBspVOkP6woordk4bmpGBs496mY3noK5dr2q2', '2019-04-30 03:13:53', '$2y$10$P95s2QTeFMgp40kK2uMHHeRJzElGO52g2etPXkUgVz1hm3NNt5Jya', 1),
(84, 'Tester69@test.com', 'Tester69', '$2y$10$pFPOHAge5gVKUF/bF8sWuOZ4iThcYyfTJKjJ8QnmdHcU0QQflJSeK', '2019-04-30 03:13:53', '$2y$10$r0yLHqfqHUdhp1wt4MInhe29.4jD7NTrUEFCcAZLuHIsaG4hVTyBG', 1),
(85, 'Tester70@test.com', 'Tester70', '$2y$10$GwseZs3lJDH9ulrG8tbb1ujQB3r0WAf89lSdwa20Zi2uGhTb9GewW', '2019-04-30 03:13:53', '$2y$10$FU7eopg.cORWYjBamFovmuwI0wAiqByXA8yuP1oKe0lGHA9CLSkUi', 1),
(86, 'Tester71@test.com', 'Tester71', '$2y$10$NY.sE3dAxSdek9MgdDknyu0p0C2FR0hBUoTDUrK3MyIM.6Wde3BAu', '2019-04-30 03:13:53', '$2y$10$p11xNj76iRW5If1pmkcT6OmYukPDfmD9LRmD0zGCZyyk2tAb7XG0a', 1),
(87, 'Tester72@test.com', 'Tester72', '$2y$10$X0P/poYD/JTSA1Z.USLyo.Uo0EZElWbTbrTVpE2DE5jZQW3JMOd96', '2019-04-30 03:13:54', '$2y$10$ARe5mSTyqLFJCFSdQMDJuOQpDvIrWASOPF4rMWGyDHG1kFidvnzMG', 1),
(88, 'Tester73@test.com', 'Tester73', '$2y$10$TKCM7jTGBfZYY1POljnkaeUN9TlfXi772vDQvZm3DYT8EtTfTgqrW', '2019-04-30 03:13:54', '$2y$10$kmyoLgjhzJXL9hAyuWM8g.93MVExuobLdU3vVPYlLOc1NF8OGdkSi', 1),
(89, 'Tester74@test.com', 'Tester74', '$2y$10$hsEFO3pe2MDIsymU9qYMo.lAepL6SXwlvz1E5r7nWYFvVmDb6d2ge', '2019-04-30 03:13:54', '$2y$10$8ATc/3DUP8ZicRt3wvFAjOQOR3hOMx7RQDwrNjmfDlGYWNqqvbs9e', 1),
(90, 'Tester75@test.com', 'Tester75', '$2y$10$YcSQQkbS2InmX2FZmvSEVeAWVhhkIh4RN3./2GVWCMH4K5qdYwf.S', '2019-04-30 03:13:54', '$2y$10$V26YRrLzN8JTFMQLVPEsauec/elwMG5CspLo/ora7l6zENzb/v7cO', 1),
(91, 'Tester76@test.com', 'Tester76', '$2y$10$RrAeTFJShq.6gTY/3DoPt.2B3HDGIMhOvJG4KjUHGnGVnuqrfLFRu', '2019-04-30 03:13:54', '$2y$10$QdyXTCDtAJ3JMPRucYokj.QprRFsoNqoh9rqjOmswWcyPPYwFtHJy', 1),
(92, 'Tester77@test.com', 'Tester77', '$2y$10$dUerHVdxmZHd/UkKjrfufOYAyyhyCsLQMiB3BvJXEQRL6/xyHMtjq', '2019-04-30 03:13:54', '$2y$10$2zfwfMjtc.jCGFcHkCuLU.6jZ5fqSpC1AW47FTJxME3QwWXiPvEiy', 1),
(93, 'Tester78@test.com', 'Tester78', '$2y$10$5.GGhLWibRgevIpDs4UgFeKvBBmZGMX8gCb.erdVfohgyN24uPt/e', '2019-04-30 03:13:54', '$2y$10$uiTExjVjVQlJe/XD8XhxCuaXcVFZDZGbmaclALU4eIAb2ynesbxcO', 1),
(94, 'Tester79@test.com', 'Tester79', '$2y$10$ISYFF0iMwT2Gu9y3o.yqMOWUprpp6UXYOwNXLeHcjHfNfHP9AcIWC', '2019-04-30 03:13:54', '$2y$10$KTcab8WD6./1JIEtIoMlRuREXHCoGAjJCbgwpJm8bzXz2mwECirlC', 1),
(95, 'Tester80@test.com', 'Tester80', '$2y$10$x9h87eFVdP2ziUOYM3ws9O.gqW4H98Th7UHjTwLUIHeMQGI9Ukwve', '2019-04-30 03:13:55', '$2y$10$MTZTgFkkbLmi4HmvUc8dL.z5/pFK72qwG9qzVb8NJUcWq9an4jn5a', 1),
(96, 'Tester81@test.com', 'Tester81', '$2y$10$PVJuHIpfYNnDuNQK2vyPJehyuApERapl4Rnod54SthX4R0jLx7S5G', '2019-04-30 03:13:55', '$2y$10$BPJSguBqTZpjPaDrVn9JV.itU6NER8uNGR0B7BGsqcJTc9M4zKmZO', 1),
(97, 'Tester82@test.com', 'Tester82', '$2y$10$irwAY2zpqABEkOlScHGApuqMnXFcqWD5FEFayBNbj8/4jsQerGonS', '2019-04-30 03:13:55', '$2y$10$VL7zp5QKJQVJ4wQ29zpG9urrbw7LJYgoS/bpsFHeRaYNxV3tOGyvS', 1),
(98, 'Tester83@test.com', 'Tester83', '$2y$10$siJpPxl7de88CPRUWNtyx.tACRMiNXavFJ1hEynX3YNUgJEDHgoQG', '2019-04-30 03:13:55', '$2y$10$0W9VNapUAYdETLdzcECGOe2SUtKUyhjaBNMfjujnSqBw6NSKmKqu6', 1),
(99, 'Tester84@test.com', 'Tester84', '$2y$10$SJwZlB2uJhB6hN0T6LwiXuBodp1kEmpTYlgaXNSU/1HHtgBgIMqJe', '2019-04-30 03:13:55', '$2y$10$FXMePax1g7N4/dcO7IdY8uZcW2/GLgsF9xQK7/Hefzb3HQJGZF4ZW', 1),
(100, 'Tester85@test.com', 'Tester85', '$2y$10$FLUNr4ZPrIuBivbhwiindO5WmE2.aY.S.Q2SSZhOkkC/JEC85EcAi', '2019-04-30 03:13:55', '$2y$10$ABcc01uZf14kTueL/ccXVe58yi3n1wPLutLk5ajAV8Ee.2c6Rk2Oq', 1),
(101, 'Tester86@test.com', 'Tester86', '$2y$10$2v9PQPTXUutE3Oa4lI4lyea49y0q/dKH.IdrvacG5dNHGgUPC.oIC', '2019-04-30 03:13:55', '$2y$10$wG1NRolmpOPwFpxcltHKh.4arxk7CLMMc5X6WnLsZWIV9cvs.kUr6', 1),
(102, 'Tester87@test.com', 'Tester87', '$2y$10$ZcYSDSmArhmXjlpi1dxdk.y.0O.sc.0g4nrnN0m49jSjmN2rku5UG', '2019-04-30 03:13:56', '$2y$10$P4zyBQocwBBqhK2zeO.aiehcDbOyzoPWRNNzvL4.WzWxjnRdgrkjy', 1),
(103, 'Tester88@test.com', 'Tester88', '$2y$10$.rpkFuW55q2/FDwO81vwLuzxhrFJFITiTgTD2ZgQS7QNCPiKoGWgC', '2019-04-30 03:13:56', '$2y$10$i0XrFsUHzeaiH.7ZGclMguXX8..uVlE9feSVeERsamF5kJ1J6TtN6', 1),
(104, 'Tester89@test.com', 'Tester89', '$2y$10$igJe.0LdEsY0q1ZuEVfDqOsoJwyMlyF5HJr79SL3ouRjZwN2m1IFK', '2019-04-30 03:13:56', '$2y$10$qHtz3riVa7l5HbKpIcgD8uwRyCV97MdWfNg.7jYbks1y1/9KE0JSO', 1),
(105, 'Tester90@test.com', 'Tester90', '$2y$10$8k2Xj4ZtDlGdf6ouhtLPNe6BJG6TGYRXycj1h4hydtpsRmzh7STzm', '2019-04-30 03:13:56', '$2y$10$9nQG9x1gAsxlBj9TBZew5uanzrVXjNuWi2Rf3tgrBV2RN/9glfmTa', 1),
(106, 'Tester91@test.com', 'Tester91', '$2y$10$YuunkAirgA7JHHOTw8JB9eF13RKk33HO85MlkQFGgvMRV7/w25m4S', '2019-04-30 03:13:56', '$2y$10$PXZMAuc4r4vQWTsqhbh6WuxrIxY2GoKPkK0s2fcpyXW7hdTYOtPxO', 1),
(107, 'Tester92@test.com', 'Tester92', '$2y$10$GywmnCJ45MQC9.t/39ahu.EoKy3.YAu8q8Gz0TxKKhMJD2DPkvtNu', '2019-04-30 03:13:56', '$2y$10$WUSTokNn9sM5fnvIecgFOeBqJgAUrVeM5Ghyq1b1p2kh9B78EGQay', 1),
(108, 'Tester93@test.com', 'Tester93', '$2y$10$fAPYKsFpx0US7.bL4LIsb./Q8IYti2oIDjHso3zcbRexZb4UGJwYW', '2019-04-30 03:13:56', '$2y$10$TMtck8xWxFSxtatypTCf3.Jd.6zdMsfqebRkJncKWi6rb23sYM1FC', 1),
(109, 'Tester94@test.com', 'Tester94', '$2y$10$oLrPDSz0iyw1bBS6N5ziEeKm12qjlut3YcdxN68XzsNTciDkpPFXu', '2019-04-30 03:13:56', '$2y$10$hk5kkEy0z7vc7Wolm6pP.uiIvyljh4s9ol8EwibvEhoo0I.e5Z2Ia', 1),
(110, 'Tester95@test.com', 'Tester95', '$2y$10$yPfmkogNOrlrSwGpZNFtLuC7BGnilMLoC/1DO1RKgr1rICGTy1NUy', '2019-04-30 03:13:57', '$2y$10$mTU2jk782pHw0WKj8J.C6.gpuSbYj.dtKF/3FZWu1cxmZHqABaNaq', 1),
(111, 'Tester96@test.com', 'Tester96', '$2y$10$8XJV3E0606fh5AMCu2DSvOOwrqgmMZhbFA3Ix.eTzNRldFkZXyGUO', '2019-04-30 03:13:57', '$2y$10$Ff.5is.1FnnvXX0yB593V.WC4Q/RzIuGXQg6./LaKksSiajBMGeta', 1),
(112, 'Tester97@test.com', 'Tester97', '$2y$10$kIZglXl5l/r.7dvwiY7.tOO0SyQBN/tJC8JNq1lF7qcjbJ0.RRTou', '2019-04-30 03:13:57', '$2y$10$CjbWRGxdV68qY8yACgv8EutKtINKPBWGzbgV/4VR/IkecHPtJkKUC', 1),
(113, 'Tester98@test.com', 'Tester98', '$2y$10$8LhfFNvBMzBUATo65RYkQ.VNCeF8pjYEDE3wv0atylhXlukvnvDsS', '2019-04-30 03:13:57', '$2y$10$g0Rj5r.ik3ueJTpT1.M1Ge3P3g86yyqjODiYIpPsSKHgRHLvFX4fq', 1),
(114, 'Tester99@test.com', 'Tester99', '$2y$10$fm7NA3GfmT4PsnVR.AYANeS0jqGU6mzfrQvXAUuCUSDgIDFp/LL1q', '2019-04-30 03:13:57', '$2y$10$/WRwI9MW65BMzxxMIixzNugpHDuMQDJNCLMlBrW92iZ1Cy3Ye3loi', 1),
(115, 'Tester100@test.com', 'Tester100', '$2y$10$Tj5juvAtDDaaI4fSDyJxgecakK3PK50g48OrJLu8kObYko3axxGsi', '2019-04-30 03:13:57', '$2y$10$VCSyvRdELT4Sr3JV3qy.W.jo2SMpoYADQ0cBhC9PJoSPrQ3o.VnrG', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key: userID in matchreq table -> id in users table` (`userID`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `matchrequests`
--
ALTER TABLE `matchrequests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `generalpreferences`
--
ALTER TABLE `generalpreferences`
  ADD CONSTRAINT `foreign key: userID in genpref table -> id in users table` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matchrequests`
--
ALTER TABLE `matchrequests`
  ADD CONSTRAINT `foreign key: userID in matchreq table -> id in users table` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `foreign key: userID in profile table -> id in users table` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
