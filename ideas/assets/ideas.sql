-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 14, 2025 at 11:53 AM
-- Server version: 9.0.1
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `idea_id` int UNSIGNED NOT NULL COMMENT 'Gives unique id for each idea',
  `idea_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Adds the initial date of an idea',
  `idea_edit_date` timestamp NULL DEFAULT NULL COMMENT 'Set to current timestamp after every time the idea has been edited',
  `idea_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Required title for the idea',
  `description` text NOT NULL COMMENT 'Required description for the idea',
  `links` json DEFAULT NULL COMMENT 'Allows someone to add multiple links to the idea, server should separate each link',
  `image` json DEFAULT NULL COMMENT 'adds the links of added images, upload is handled by the server'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`idea_id`),
  ADD KEY `TITLE` (`idea_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `idea_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Gives unique id for each idea';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
