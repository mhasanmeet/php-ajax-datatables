-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2024 at 07:24 PM
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
-- Database: `stock`
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
(26, 'Mountain T-shirt', 'Black', 1, 2, 4, 12, 10, 3),
(27, 'Nike T-shirt ', 'Gray', 4, 3, 9, 12, 3, 2),
(28, 'Free Palestine t-shirt', 'Black', 2, 4, 6, 2, 1, 4),
(29, 'Bangladesh Army t-shirt ', 'Turkish Blue', 2, 5, 7, 7, 4, 2),
(30, 'Beautiful New Zealand t-shirt', 'Black', 1, 4, 5, 6, 2, 1),
(31, 'SpaceX t-shirt', 'Turkish Blue', 2, 5, 3, 6, 3, 5),
(32, 'Developer t-shirt', 'Turkish Blue', 2, 5, 3, 6, 3, 4),
(33, 'Samsung t-shirt', 'Gray', 5, 7, 3, 8, 3, 2),
(34, 'Apple t-shirt', 'Black', 3, 45, 56, 34, 12, 3),
(35, 'Sony t-shirt', 'Gray', 5, 12, 34, 23, 56, 12),
(36, 'Solid t-shirt', 'Gray', 6, 3, 6, 7, 8, 2);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
