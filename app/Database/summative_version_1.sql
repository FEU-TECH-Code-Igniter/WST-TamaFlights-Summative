-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 03:51 AM
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
-- Database: `summative`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_promotional`
--

CREATE TABLE `tb_promotional` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_promotional`
--

INSERT INTO `tb_promotional` (`id`, `title`, `content`) VALUES
(1, 'Global Flight to Epstein Island', 'Little Saint James is a small private island in the United States Virgin Islands, southeast of Saint Thomas. It was owned by American financier and sex offender Jeffrey Epstein.'),
(2, 'Global Flight to Tokyo', 'Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples.'),
(3, 'Global Flight to Maldives', 'Historically known as the Maldive Islands, is a country and archipelagic state in South Asia in the Indian Ocean.'),
(4, 'Domestic Flight to Cebu', 'A province of the Philippines located in the Central Visayas region, and consists of a main island and 167 surrounding islands and islets.'),
(5, 'Universal Flight to Jarilo-VI', 'A planet that is frosted over due to the Eternal Freeze as a product of the Stellaron\'s effect on the planet.'),
(6, 'Global Flight to Kanto Region', 'Located east of Johto, which together form a joint landmass that is south of Sinnoh. Kanto is the setting of the first generation of games.'),
(7, 'Hex Travel to Piltover', 'Also known as the City of Progress, is a thriving, progressive city whose power and influence is on the rise.'),
(8, 'Universal Travel to Petrichor V', 'A diverse world, with a wide array of environments that includes deserts, tundras, fungal jungles, and islands floating freely in the sky.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_promotional`
--
ALTER TABLE `tb_promotional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_promotional`
--
ALTER TABLE `tb_promotional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
