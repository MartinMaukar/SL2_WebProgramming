-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `namaDepan` varchar(20) NOT NULL,
  `namaTengah` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `wargaNegara` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHP` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodePOS` int(5) NOT NULL,
  `fotoProfil` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `NIK`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePOS`, `fotoProfil`, `username`, `password1`) VALUES
('Martin', 'marvelino', 'Maukar', 'bali', '2022-04-02', '10293821093', 'Indonesian', 'martinmaukar@gmail.com', '087860961919', 'BaliBali', 80119, 'assets/sam-fischer-330.jpg', 'martinmaukar', '123'),
('bidu', 'bidu', 'bidu', 'jawaa', '2022-04-01', '12345678910', 'Javanesee', 'bidu@yahoo.com', '087860961921', 'jawaa', 80220, 'assets/sam-fischer-330.jpg', 'budi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
