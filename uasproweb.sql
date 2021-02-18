-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 04:08 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasproweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemakai`
--

CREATE TABLE `pemakai` (
  `id_user` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakai`
--

INSERT INTO `pemakai` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'zal', '8ca8d2bb791521d8a68025c5af9026993c435399', 'M Novrizal');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(5) NOT NULL,
  `matakul` varchar(32) DEFAULT NULL,
  `judul` varchar(64) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `selesai` int(2) DEFAULT 0 COMMENT '0 = belum selesai, 1 = selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `matakul`, `judul`, `deskripsi`, `deadline`, `selesai`) VALUES
(1, 'Pemrogramman Web', 'JSON Praktik', 'A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options. If you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for cards.', '2021-02-20', 0),
(2, 'Pemrogramman AI', 'JSON Praktikum', 'AS', '2021-02-27', 1),
(3, 'Sistem Operasi', 'UAS Robot', 'Ketika kita bekerja dengan tanggal, jangan lupa untuk selalu menyesuaikan timezone tau zona waktu. Karena pasti ada selisih ketika kita menghitung waktu sekarang.  Hal ini disebabkan secara default php akan menggunakan zona waktu Eropa atau Amerika dengan selisih waktu lebih dari 5 jam.  Untuk mengubah zona waktu dapat menggunakan fungsi date_default_timezone_set(), misal:', '2021-02-28', 0),
(4, 'PA', 'Meresume Peper', 'ah gaje mas', '2021-02-17', 0),
(5, 'Soceng', 'Bikin Konten', 'ah mantap konten mba ati', '2021-03-30', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemakai`
--
ALTER TABLE `pemakai`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemakai`
--
ALTER TABLE `pemakai`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
