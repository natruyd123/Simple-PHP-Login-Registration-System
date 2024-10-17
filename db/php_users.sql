-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 05:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybersimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_users`
--

CREATE TABLE `php_users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `php_users`
--

INSERT INTO `php_users` (`id`, `firstName`, `lastName`, `email`, `password_hash`, `salt`) VALUES
(15, 'luwes', 'yap', 'luwesyap@gmail.com', '6a10e0bd7380818d39798a9cc48e954cde351448b4ffd277344136c9df85b1ed', 'eadf53fece080da8dc84d55479f334448fea6db812a195ca0d85140f11f2ef71'),
(16, 'natruyd', 'yap', 'yapnat@gmail.com', '6c7d8d9a7737a203d09ff92c84e5838447fc7392fc35d1adbf72c8ee364d5b29', '77c8c6770c72f3e0a3384b4fa82506884560e6f3e70dcd6168074d76ef1e65e0'),
(17, 'Lu', 'wegy', 'Luwegy@gmail.com', 'b2de9742bab2c854b9107897b14975f4f467cd6715fc93fb907856cd07225f45', 'b1b00f5ccb4365c01f45d965245c7ff4f6eddd0b2cb7bb178f9cb407b88389c9'),
(18, 'marty', 'fox', 'martyfox@gmail.com', '06e939b943dda732fd6040886729218701bf5a463491fd42976a8edf71949563', '4d38ac8e8ec26477a43d27d02e2f80f7a74ad1d2c8093bd30ba163663b7263bc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_users`
--
ALTER TABLE `php_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_users`
--
ALTER TABLE `php_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
