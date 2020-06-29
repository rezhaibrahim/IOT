-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jun 2020 pada 06.28
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aeroponik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sensor`
--

CREATE TABLE `data_sensor` (
  `id` int(11) NOT NULL,
  `suhu` double NOT NULL,
  `kelembapan` double NOT NULL,
  `kualitasudara` double NOT NULL,
  `ph` double NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sensor`
--

INSERT INTO `data_sensor` (`id`, `suhu`, `kelembapan`, `kualitasudara`, `ph`, `timestamp`) VALUES
(1, 27, 80.98, 57, 6.5, '2020-03-20 15:59:04'),
(2, 0, 0, 0, 0, '2020-05-04 11:29:10'),
(3, 0, 0, 0, 0, '2020-05-04 11:29:17'),
(4, 0, 0, 0, 0, '2020-05-04 11:29:23'),
(5, 0, 0, 0, 0, '2020-05-04 11:29:29'),
(6, 0, 0, 0, 0, '2020-05-04 11:29:36'),
(7, 28, 45, 811, 6.64, '2020-05-04 11:30:20'),
(8, 28, 46, 842, 6.61, '2020-05-04 11:30:27'),
(9, 28, 46, 849, 6.65, '2020-05-04 11:30:33'),
(10, 28, 46, 842, 6.64, '2020-05-04 11:30:39'),
(11, 28, 46, 824, 6.62, '2020-05-04 11:30:46'),
(12, 28, 46, 787, 6.61, '2020-05-04 11:30:52'),
(13, 28, 46, 725, 6.61, '2020-05-04 11:30:58'),
(14, 28, 46, 655, 6.62, '2020-05-04 11:31:05'),
(15, 28, 46, 593, 6.62, '2020-05-04 11:31:11'),
(16, 28, 46, 544, 6.62, '2020-05-04 11:31:18'),
(17, 28, 46, 506, 6.62, '2020-05-04 11:31:24'),
(18, 27, 45, 478, 6.61, '2020-05-04 11:31:30'),
(19, 28, 46, 456, 6.61, '2020-05-04 11:31:37'),
(20, 28, 46, 440, 6.6, '2020-05-04 11:31:43'),
(21, 28, 46, 426, 6.61, '2020-05-04 11:31:49'),
(22, 27, 45, 415, 6.62, '2020-05-04 11:31:56'),
(23, 27, 45, 406, 6.62, '2020-05-04 11:32:02'),
(24, 28, 46, 399, 6.61, '2020-05-04 11:32:09'),
(25, 28, 46, 392, 6.62, '2020-05-04 11:32:15'),
(26, 28, 46, 386, 6.61, '2020-05-04 11:32:21'),
(27, 28, 46, 380, 6.61, '2020-05-04 11:32:28'),
(28, 27, 45, 376, 6.61, '2020-05-04 11:32:34'),
(29, 28, 46, 371, 6.61, '2020-05-04 11:32:41'),
(30, 28, 46, 368, 6.61, '2020-05-04 11:32:47'),
(31, 27, 45, 364, 6.6, '2020-05-04 11:32:53'),
(32, 28, 46, 362, 6.62, '2020-05-04 11:33:00'),
(33, 28, 46, 358, 6.6, '2020-05-04 11:33:06'),
(34, 28, 46, 355, 6.61, '2020-05-04 11:33:12'),
(35, 28, 46, 353, 6.61, '2020-05-04 11:33:19'),
(36, 28, 46, 351, 6.6, '2020-05-04 11:33:25'),
(37, 28, 46, 348, 6.6, '2020-05-04 11:33:32'),
(38, 28, 46, 346, 6.61, '2020-05-04 11:33:38'),
(39, 28, 46, 344, 6.59, '2020-05-04 11:33:44'),
(40, 28, 46, 342, 6.6, '2020-05-04 11:33:51'),
(41, 28, 46, 339, 6.6, '2020-05-04 11:33:57'),
(42, 28, 46, 337, 6.59, '2020-05-04 11:34:03'),
(43, 28, 46, 335, 6.61, '2020-05-04 11:34:10'),
(44, 28, 46, 334, 6.59, '2020-05-04 11:34:16'),
(45, 28, 46, 332, 6.59, '2020-05-04 11:34:23'),
(46, 28, 46, 330, 6.59, '2020-05-04 11:34:29'),
(47, 28, 46, 328, 6.6, '2020-05-04 11:34:35'),
(48, 28, 46, 327, 6.6, '2020-05-04 11:34:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_tanaman`
--

CREATE TABLE `foto_tanaman` (
  `id` int(11) NOT NULL,
  `nama_file` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_tanaman`
--

INSERT INTO `foto_tanaman` (`id`, `nama_file`, `timestamp`) VALUES
(1, '2020-06-16-10-33-52-001.jpg', '2020-06-16 10:33:52'),
(2, '2020-06-16-11-09-41-image.jpg', '2020-06-16 11:09:41'),
(3, '2020-06-16-11-13-54-image.jpg', '2020-06-16 11:13:54'),
(4, '2020-06-16-11-14-53-image.jpg', '2020-06-16 11:14:53'),
(5, '2020-06-16-11-15-33-image.jpg', '2020-06-16 11:15:33'),
(6, '2020-06-16-11-15-44-image.jpg', '2020-06-16 11:15:44'),
(7, '2020-06-16-11-15-54-image.jpg', '2020-06-16 11:15:54'),
(8, '2020-06-16-11-17-04-image.jpg', '2020-06-16 11:17:04'),
(9, '2020-06-16-11-17-20-image.jpg', '2020-06-16 11:17:20'),
(10, '2020-06-16-11-17-36-image.jpg', '2020-06-16 11:17:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sprinkler`
--

CREATE TABLE `sprinkler` (
  `id` int(1) NOT NULL,
  `waktu` double NOT NULL,
  `status` int(1) NOT NULL COMMENT '0;1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sprinkler`
--

INSERT INTO `sprinkler` (`id`, `waktu`, `status`) VALUES
(1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_tanaman`
--
ALTER TABLE `foto_tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sprinkler`
--
ALTER TABLE `sprinkler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `foto_tanaman`
--
ALTER TABLE `foto_tanaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sprinkler`
--
ALTER TABLE `sprinkler`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
