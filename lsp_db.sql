-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 12:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(3) NOT NULL,
  `judul_artikel` varchar(50) DEFAULT NULL,
  `isi_artikel` text,
  `id_penulis` int(3) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul_artikel`, `isi_artikel`, `id_penulis`, `tanggal`) VALUES
(1, 'Lorem ipsums', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum explicabo perferendis quos error, eum deleniti reiciendis officiis quibusdam at, sapiente facere quod rem beatae pariatur dolore amet aperiam nulla.', 4, '2019-08-01'),
(2, 'Lorem ipsum', 'ini artikels', 4, '2019-08-01'),
(3, 'berita utama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque reiciendis quod odit! Impedit suscipit corporis deserunt asperiores, rem consequuntur aliquam accusamus molestias repellendus, quidem, sapiente blanditiis eveniet quod quibusdam sit?', 7, '2019-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id` int(3) NOT NULL,
  `id_artikel` int(3) DEFAULT NULL,
  `id_komentar` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `isi_komentar` text,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(3) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL DEFAULT '0',
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_lengkap`, `username`, `password`) VALUES
(2, 'salman', '123', '$2y$10$7irIAOhFtOzsiHLMS8CnVeEJd5pwWiTjnnYwKZ/LXLZcHajeK.et.'),
(4, 'salman', 'salman', '$2y$10$J/RFiKiyiYtzVwDSfKFi8urhnNgINbpSzZI9pF3FedIwGBsgPa8TC'),
(5, 'ari', 'ari', '$2y$10$MRFxRsj1PSjks42zrD1.teSN7l3GmdF.Q5wR6WPAJZsbEHlRFDeSC'),
(6, 'coba', 'cobain', '$2y$10$MgJv0FR0K5sGnK5.H9eLkeeF0RyASH9oxqp/7IaCWe0hUeC7z8FLm'),
(7, 'faris', 'faris', '$2y$10$o7F2HSAEF9zfYETJt1h0X.MMelEEW1xMykbTInv/v9Nz/mO5ly7v2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_artikel` (`id_artikel`,`id_komentar`),
  ADD KEY `id_komentar` (`id_komentar`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `tb_penulis` (`id_penulis`);

--
-- Constraints for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD CONSTRAINT `tb_detail_ibfk_1` FOREIGN KEY (`id_komentar`) REFERENCES `tb_komentar` (`id`),
  ADD CONSTRAINT `tb_detail_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
