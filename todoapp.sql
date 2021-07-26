-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2021 at 09:52 AM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.3.28-2+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id_employee` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_employee`, `name`, `unit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mehmet Yener', 1, '2021-07-14 08:35:10', NULL, NULL),
(2, 'Esra Bay', 2, '2021-07-14 08:35:10', NULL, NULL),
(3, 'Kerim Aslan', 3, '2021-07-14 08:35:24', NULL, NULL),
(4, 'Ayşe Sert', 4, '2021-07-14 08:35:24', NULL, NULL),
(5, 'Cemil Bayraktepe', 5, '2021-07-14 08:35:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fetch_urls`
--

CREATE TABLE `fetch_urls` (
  `id_fetch` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fetch_urls`
--

INSERT INTO `fetch_urls` (`id_fetch`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa', '2021-07-14 07:50:31', NULL, NULL),
(2, 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa', '2021-07-14 07:50:31', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `fetch_urls`
--
ALTER TABLE `fetch_urls`
  ADD PRIMARY KEY (`id_fetch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fetch_urls`
--
ALTER TABLE `fetch_urls`
  MODIFY `id_fetch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
