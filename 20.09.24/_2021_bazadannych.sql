-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 01:10 PM
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
-- Database: `_2021_bazadannych`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresy`
--

CREATE TABLE `adresy` (
  `id` int(11) NOT NULL,
  `id.id` int(11) DEFAULT NULL,
  `third` varchar(20) DEFAULT NULL,
  `fourth` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stanowiska`
--

CREATE TABLE `stanowiska` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stanowiska`
--

INSERT INTO `stanowiska` (`id`, `nazwa`) VALUES
(1, 'Kociara');

-- --------------------------------------------------------

--
-- Table structure for table `tabela`
--

CREATE TABLE `tabela` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(100) DEFAULT NULL,
  `stanowisko` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabela`
--

INSERT INTO `tabela` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Ala', 'Makota', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresy`
--
ALTER TABLE `adresy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stanowiska`
--
ALTER TABLE `stanowiska`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stanowisko` (`stanowisko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresy`
--
ALTER TABLE `adresy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stanowiska`
--
ALTER TABLE `stanowiska`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabela`
--
ALTER TABLE `tabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabela`
--
ALTER TABLE `tabela`
  ADD CONSTRAINT `tabela_ibfk_1` FOREIGN KEY (`stanowisko`) REFERENCES `stanowiska` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
