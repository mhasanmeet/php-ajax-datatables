-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2024 at 11:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devshopbd-stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `all_products` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `S` int NOT NULL,
  `M` int NOT NULL,
  `L` int NOT NULL,
  `XL` int NOT NULL,
  `XXL` int NOT NULL,
  `3XL` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `all_products`, `color`, `S`, `M`, `L`, `XL`, `XXL`, `3XL`) VALUES
(37, 'JS Developer', 'Black', 0, 4, 1, 5, 0, 3),
(38, 'Shirt.JS (JavaScript)', 'Black', 0, 1, 12, 9, 1, 0),
(39, 'React Developer', 'Black', 0, 0, 17, 0, 0, 4),
(40, 'React (Logo)', 'Black', 0, 0, 0, 1, 2, 0),
(41, 'Shirt.jsx (React)', 'Black', 0, 1, 12, 16, 3, 0),
(42, 'Code ', 'Black', 1, 7, 11, 8, 0, 0),
(43, 'Code', 'Gray', 0, 17, 11, 4, 0, 0),
(44, 'Node JS', 'Black', 0, 4, 13, 10, 0, 0),
(45, 'Stack Overflow ', 'Black', 2, 14, 4, 7, 0, 1),
(46, 'Python', 'Black', 0, 9, 12, 4, 3, 5),
(47, 'Stack Overflow', 'Turkish Blue', 6, 6, 0, 0, 0, 0),
(48, 'GitHub ', 'Black', 0, 9, 3, 12, 0, 1),
(49, 'GitHub', 'Turkish Blue', 6, 3, 0, 0, 0, 0),
(50, 'SpaceX', 'Black', 1, 15, 8, 8, 1, 1),
(51, 'SpaceX', 'Gray', 9, 36, 33, 22, 5, 3),
(52, 'SpaceX', 'Turkish Blue', 1, 0, 0, 0, 0, 0),
(53, 'Mountain ', 'Gray', 5, 13, 7, 12, 5, 1),
(54, 'LWS (Learn With Sumit)', '', 3, 0, 1, 5, 8, 0),
(55, 'LWS (Learn With Sumit)', 'Navy Blue', 2, 2, 0, 1, 0, 0),
(56, 'WordPress (Logo)', 'Black', 0, 0, 0, 2, 0, 0),
(57, 'Solid ', 'Black', 3, 2, 2, 0, 0, 0),
(58, 'Solid', 'Gray', 0, 9, 9, 1, 0, 0),
(59, 'Solid', 'Turkish Blue', 0, 6, 3, 5, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
