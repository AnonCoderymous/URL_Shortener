-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 01:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url_shortner`
--

-- --------------------------------------------------------

--
-- Table structure for table `routings`
--

CREATE TABLE `routings` (
  `id` bigint(15) DEFAULT NULL,
  `short_url` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT NULL,
  `created_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routings`
--

INSERT INTO `routings` (`id`, `short_url`, `redirect_url`, `created_time`) VALUES
(7099, '78a2x6b9j6', 'https://www.google.com', '04/04/23 16:58 pm'),
(7057, '6y8wWtR1rA', 'https://paiza.io/projects/BN1_CqbEbhtxv1PDX7RbPA', '05/04/23 17:09 pm'),
(5714, '3wliWv0DtM', 'http://instagram.com/', '05/04/23 17:10 pm'),
(3046, 'SyrbSUOm6O', 'https://www.youtube.com', '05/04/23 17:11 pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
