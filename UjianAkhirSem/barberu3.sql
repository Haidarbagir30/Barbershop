-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 05:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barberu3`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_pegawai`
--

CREATE TABLE `calon_pegawai` (
  `id` int(5) NOT NULL,
  `nim` varchar(29) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_model_potong`
--

CREATE TABLE `data_model_potong` (
  `id` int(5) NOT NULL,
  `gambar` varchar(29) NOT NULL,
  `model` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_model_potong`
--

INSERT INTO `data_model_potong` (`id`, `gambar`, `model`, `harga`) VALUES
(2, 'Brushed on top.jpg', 'Brushed on top', '10000'),
(3, 'Buzz cut.jpg', 'Buzz cut', '7000'),
(4, 'Front puff.jpg', 'Front puff', '9000'),
(5, 'Pompadour.jpg', 'Pompadour', '12500'),
(6, 'Short and spiky.jpg', 'Short and spiky', '20000'),
(8, 'Soft side parting.jpg', 'Soft side parting', '12000'),
(9, 'Top Knot.jpg', 'Top Knot', '15000'),
(10, 'undercut1.jpg', 'undercut', '12000'),
(11, 'Afro fade.jpg', 'Afro fade', '10000'),
(12, 'fringe.jpg', 'fringe', '16000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(5) NOT NULL,
  `nama` varchar(29) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `model` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `whatsapp`, `model`, `harga`, `gambar`) VALUES
(18, 'siraj hammam ahmad', '081364568350', 'Buzz cut', 'Rp. 7000', 'Buzz cut.jpg'),
(19, 'dimas eka', '081354568920', 'Front puff', 'Rp. 9000', 'Front puff.jpg'),
(20, 'Wahid Alfaridzi', '1234', 'Buzz cut', 'Rp. 7000', 'Buzz cut.jpg'),
(21, 'Ahmad Ghozali dong', '081364568350', 'Afro fade', 'Rp. 10000', 'Afro fade.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(5) NOT NULL,
  `nama` varchar(29) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `keterangan`) VALUES
(2, 'Ahmad Alim bocil', 'jelek baget'),
(3, 'jordan nasuha', 'bagus kok'),
(4, 'syam', 'paan nih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_pegawai`
--
ALTER TABLE `calon_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_model_potong`
--
ALTER TABLE `data_model_potong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_pegawai`
--
ALTER TABLE `calon_pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_model_potong`
--
ALTER TABLE `data_model_potong`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
