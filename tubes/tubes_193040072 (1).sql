-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 04:53 PM
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
-- Database: `tubes_193040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_makanan` varchar(20) NOT NULL,
  `varian_rasa` varchar(50) NOT NULL,
  `kadaluarsa` date NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `img`, `nama_makanan`, `varian_rasa`, `kadaluarsa`, `stok`) VALUES
(1, 'makanan1.jpg', 'Nabati', 'keju, cokelat, vanilla', '2021-08-25', 145),
(2, 'makanan2.jpg', 'Qtela', 'Balado, Keju, Rumput Laut', '2021-07-10', 210),
(3, 'makanan3.jpg', 'Cheetos', 'Jagung Bakar, Keju', '2021-04-03', 190),
(4, 'makanan4.jpg', 'Malkist Roma', 'Keju, Cokelat, Kelapa, Abon', '2021-08-27', 200),
(5, 'makanan5.jpg', 'Taro', 'Original, Rumput Laut', '2022-02-16', 245),
(6, 'makanan6.jpg', 'Kacang Garuda', 'Original', '2021-11-22', 165),
(7, 'makanan7.jpg', 'Pillows', 'Cokelat, Talas', '2021-03-14', 145),
(8, 'makanan8.jpg', 'Kacang Telur Garuda', 'Original', '2021-05-25', 175),
(9, 'makanan9.jpg', 'Keripik Ma Icih', 'Pedas', '2021-10-15', 65),
(10, 'makanan10.jpg', 'Happytos', 'Jagung Bakar', '2021-04-02', 145);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'rofil', '$2y$10$GbhPYAIXcCCpuYoL9vNWPO4XsKDqcr3cVkbQ12VEZbrpXU0DhGm3i'),
(3, 'yantiiputri', '$2y$10$5Fe29swhoMHpTTc10X/2Te9L5jpHdShPGuwXDLp2i2u8e5Cw3gxD6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
