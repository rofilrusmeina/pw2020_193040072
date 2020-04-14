-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Rofil Rusmeina', '193040072', 'ropilll25@gmail.com', 'Teknik Informatiika', 'rofil.jpg'),
(2, 'Naufal Hamid', '193040048', 'naufalhamid@gmail.com', 'Teknik Informatika', 'naufal.jpg'),
(3, 'Fauzan', '193040040', 'fauzan@gmail.com', 'Teknik Informatika', 'fauzan.jpg'),
(4, 'Rio Alifian Santoso', '193040068', 'rio@gmail.com', 'Teknik Informatika', 'rio.jpg'),
(5, 'Rifky Maulana', '193040058', 'rifky@gmail.com', 'Teknik Informatika', 'rifky.jpg'),
(6, 'Viqri Febriana', '193040055', 'viqri@gmail.com', 'Teknik Informatika', 'viqri.jpg'),
(7, 'Dimas Nanda Herlambang', '193040041', 'dimas@gmail.com', 'Teknik Informatika', 'dimas.jpg'),
(8, 'Sahid Jafar', '193040062', 'sahid@gmail.com', 'Teknik Informatika', 'sahid.jpg'),
(9, 'Aji Nuansa', '193040052', 'aji@gmail.com', 'Teknik Informatika', 'aji.jpg'),
(10, 'Sulthan Jihad', '193040071', 'sulthan@gmail.com', 'Teknik Informatika', 'sulthan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
