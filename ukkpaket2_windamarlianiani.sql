-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 08:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukkpaket2_windamarlianiani`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_parkir`
--

CREATE TABLE `area_parkir` (
  `id_area` int(55) NOT NULL,
  `nama_area` varchar(55) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `terisi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `area_parkir`
--

INSERT INTO `area_parkir` (`id_area`, `nama_area`, `kapasitas`, `terisi`) VALUES
(1, 'Area Motor', 100, 7),
(2, 'Area Mobil', 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(55) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL,
  `role` enum('Owner','Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`, `role`) VALUES
(4, 'Asepjegar', '7171', 'Petugas'),
(7, 'genah675', '6767', 'Admin'),
(19, 'ayya', '0511', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_plat`, `jenis_kendaraan`) VALUES
(1, 'D 1234 G', 'motor'),
(2, 'D 1234 G', 'motor'),
(3, 'D 1234 G', 'motor'),
(4, 'D 1234 G', 'motor'),
(5, 'D 1234 G', 'motor'),
(6, 'Z 9999 Z', 'mobil'),
(7, 'Z 9999 Z', 'mobil'),
(8, 'D 1233 Y', 'motor'),
(9, 'D 1233 Y', 'motor'),
(10, 'D 1233 Y', 'motor'),
(11, 'D 1234 J', 'mobil');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id_log` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `aktifitas` varchar(15) NOT NULL,
  `waktu_aktivitas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id_log`, `id`, `aktifitas`, `waktu_aktivitas`) VALUES
(1, '7', 'Login', '2026-02-24 16:28:58'),
(2, '7', 'Login', '2026-02-24 16:29:35'),
(3, '7', 'Login', '2026-02-24 17:22:57'),
(4, '7', 'Logout', '2026-02-24 17:28:14'),
(5, '7', 'Login', '2026-02-24 17:29:51'),
(6, '7', 'Login', '2026-02-24 19:24:23'),
(7, '7', 'Logout', '2026-02-24 20:39:15'),
(8, '4', 'Login', '2026-02-24 20:39:23'),
(9, '4', 'Login', '2026-02-24 20:41:15'),
(10, '4', 'Logout', '2026-02-24 21:15:54'),
(11, '7', 'Login', '2026-02-24 21:16:01'),
(12, '7', 'Logout', '2026-02-24 21:53:03'),
(13, '4', 'Login', '2026-02-24 21:58:47'),
(14, '7', 'Login', '2026-02-24 21:59:31'),
(15, '7', 'Logout', '2026-02-24 21:59:42'),
(16, '4', 'Login', '2026-02-24 21:59:50'),
(17, '4', 'Login', '2026-02-24 22:05:27'),
(18, '4', 'Login', '2026-02-24 22:09:02'),
(19, '4', 'Login', '2026-02-24 22:11:47'),
(20, '4', 'Login', '2026-02-24 22:13:36'),
(21, '4', 'Login', '2026-02-24 22:13:39'),
(22, '4', 'Login', '2026-02-24 22:15:02'),
(23, '4', 'Login', '2026-02-24 22:15:02'),
(24, '4', 'Login', '2026-02-25 04:04:53'),
(25, '4', 'Login', '2026-02-25 04:04:53'),
(26, '4', 'Logout', '2026-02-25 07:47:33'),
(27, '7', 'Login', '2026-02-25 07:51:24'),
(28, '7', 'Login', '2026-02-25 07:51:24'),
(29, '7', 'Logout', '2026-02-25 07:52:53'),
(30, '18', 'Login', '2026-02-25 07:53:03'),
(31, '18', 'Login', '2026-02-25 07:53:03'),
(32, '7', 'Login', '2026-03-11 21:17:20'),
(33, '7', 'Login', '2026-03-11 21:17:20'),
(34, '7', 'Login', '2026-04-01 12:37:16'),
(35, '7', 'Login', '2026-04-01 12:37:16'),
(36, '7', 'Logout', '2026-04-01 12:46:46'),
(37, '7', 'Login', '2026-04-01 12:47:25'),
(38, '7', 'Login', '2026-04-01 12:47:25'),
(39, '7', 'Logout', '2026-04-01 12:54:49'),
(40, '7', 'Login', '2026-04-01 12:54:58'),
(41, '7', 'Login', '2026-04-01 12:54:58'),
(42, '7', 'Login', '2026-04-01 12:58:45'),
(43, '7', 'Login', '2026-04-01 12:58:45'),
(44, '7', 'Login', '2026-04-01 14:15:37'),
(45, '7', 'Login', '2026-04-01 14:15:37'),
(46, '4', 'Login', '2026-04-01 14:17:27'),
(47, '4', 'Login', '2026-04-01 14:17:27'),
(48, '7', 'Login', '2026-04-05 19:59:31'),
(49, '7', 'Login', '2026-04-05 19:59:31'),
(50, '7', 'Login', '2026-04-06 01:15:46'),
(51, '7', 'Login', '2026-04-06 01:15:46'),
(52, '7', 'Login', '2026-04-06 01:17:28'),
(53, '7', 'Login', '2026-04-06 01:17:28'),
(54, '7', 'Login', '2026-04-06 01:18:06'),
(55, '7', 'Login', '2026-04-06 01:18:06'),
(56, '4', 'Login', '2026-04-06 01:22:12'),
(57, '4', 'Login', '2026-04-06 01:22:12'),
(58, '4', 'Login', '2026-04-06 01:30:56'),
(59, '4', 'Login', '2026-04-06 01:30:56'),
(60, '7', 'Login', '2026-04-06 01:31:08'),
(61, '7', 'Login', '2026-04-06 01:31:08'),
(62, '7', 'Login', '2026-04-07 07:49:11'),
(63, '7', 'Login', '2026-04-07 07:49:11'),
(64, '4', 'Login', '2026-04-07 07:52:08'),
(65, '4', 'Login', '2026-04-07 07:52:08'),
(66, '19', 'Login', '2026-04-07 07:52:26'),
(67, '19', 'Login', '2026-04-07 07:52:26'),
(68, '4', 'Login', '2026-04-07 08:25:30'),
(69, '4', 'Login', '2026-04-07 08:25:30'),
(70, '7', 'Login', '2026-04-07 08:47:54'),
(71, '7', 'Login', '2026-04-07 08:47:54'),
(72, '4', 'Login', '2026-04-07 08:48:27'),
(73, '4', 'Login', '2026-04-07 08:48:27'),
(74, '7', 'Login', '2026-04-07 08:49:11'),
(75, '7', 'Login', '2026-04-07 08:49:11'),
(76, '7', 'Login', '2026-04-07 11:08:12'),
(77, '7', 'Login', '2026-04-07 11:08:12'),
(78, 'genah675', 'LOGOUT', '2026-04-08 08:44:35'),
(79, 'genah675', 'LOGIN', '2026-04-08 08:44:41'),
(80, 'genah675', 'LOGIN', '2026-04-09 06:59:50'),
(81, 'genah675', 'LOGIN', '2026-04-09 08:07:10'),
(82, 'genah675', 'LOGIN', '2026-04-09 08:29:14'),
(83, 'genah675', 'LOGOUT', '2026-04-09 11:51:29'),
(84, 'genah675', 'LOGIN', '2026-04-09 11:52:17'),
(85, 'genah675', 'LOGOUT', '2026-04-09 11:52:21'),
(86, 'genah675', 'LOGIN', '2026-04-09 12:08:51'),
(87, 'genah675', 'LOGIN', '2026-04-09 12:17:35'),
(88, 'genah675', 'LOGIN', '2026-04-09 22:10:15'),
(89, 'genah675', 'LOGOUT', '2026-04-10 04:29:04'),
(90, 'Asepjegar', 'LOGIN', '2026-04-10 04:29:11'),
(91, 'genah675', 'LOGIN', '2026-04-10 08:37:51'),
(92, 'genah675', 'LOGOUT', '2026-04-10 09:06:14'),
(93, 'Asepjegar', 'LOGIN', '2026-04-10 09:06:26'),
(94, 'Asepjegar', 'LOGOUT', '2026-04-10 09:14:57'),
(95, 'genah675', 'LOGIN', '2026-04-10 09:15:04'),
(96, 'genah675', 'LOGOUT', '2026-04-10 09:15:16'),
(97, 'Asepjegar', 'LOGIN', '2026-04-10 09:15:40'),
(98, 'Asepjegar', 'LOGIN', '2026-04-10 11:54:06'),
(99, 'Asepjegar', 'LOGIN', '2026-04-12 15:26:47'),
(100, 'Asepjegar', 'LOGOUT', '2026-04-12 15:32:53'),
(101, 'genah675', 'LOGIN', '2026-04-12 15:33:01'),
(102, 'genah675', 'LOGOUT', '2026-04-12 15:37:35'),
(103, 'Asepjegar', 'LOGIN', '2026-04-12 15:37:42'),
(104, 'Asepjegar', 'LOGIN', '2026-04-12 20:16:38'),
(105, 'Asepjegar', 'LOGOUT', '2026-04-12 20:29:24'),
(106, 'genah675', 'LOGIN', '2026-04-12 20:29:30'),
(107, 'genah675', 'LOGOUT', '2026-04-12 20:33:34'),
(108, 'Asepjegar', 'LOGIN', '2026-04-12 20:33:47'),
(109, 'Asepjegar', 'LOGOUT', '2026-04-12 20:40:47'),
(110, 'genah675', 'LOGIN', '2026-04-12 20:40:53'),
(111, 'genah675', 'LOGOUT', '2026-04-12 20:42:11'),
(112, 'Asepjegar', 'LOGIN', '2026-04-12 20:42:23'),
(113, 'Asepjegar', 'LOGOUT', '2026-04-12 20:43:05'),
(114, 'genah675', 'LOGIN', '2026-04-12 20:43:11'),
(115, 'genah675', 'LOGOUT', '2026-04-12 20:43:24'),
(116, 'Asepjegar', 'LOGIN', '2026-04-12 20:43:36'),
(117, 'Asepjegar', 'LOGOUT', '2026-04-12 21:06:46'),
(118, 'genah675', 'LOGIN', '2026-04-12 21:06:54'),
(119, 'genah675', 'LOGOUT', '2026-04-12 21:08:43'),
(120, 'Asepjegar', 'LOGIN', '2026-04-12 21:08:51'),
(121, 'Asepjegar', 'LOGOUT', '2026-04-12 21:09:36'),
(122, 'genah675', 'LOGIN', '2026-04-12 21:09:43'),
(123, 'genah675', 'LOGOUT', '2026-04-12 21:10:04'),
(124, 'genah675', 'LOGIN', '2026-04-12 21:18:20'),
(125, 'genah675', 'LOGOUT', '2026-04-12 21:18:32'),
(126, 'ayya', 'LOGIN', '2026-04-12 21:18:41'),
(127, 'ayya', 'LOGOUT', '2026-04-12 21:41:53'),
(128, 'genah675', 'LOGIN', '2026-04-12 21:42:01'),
(129, 'genah675', 'LOGOUT', '2026-04-12 21:42:17'),
(130, 'Asepjegar', 'LOGIN', '2026-04-12 21:42:25'),
(131, 'Asepjegar', 'LOGOUT', '2026-04-12 21:44:19'),
(132, 'genah675', 'LOGIN', '2026-04-12 21:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tarif`
--

CREATE TABLE `tb_tarif` (
  `id_tarif` int(55) NOT NULL,
  `jenis_kendaraan` enum('motor','mobil') NOT NULL,
  `tarif_per_jam` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `jenis_kendaraan`, `tarif_per_jam`) VALUES
(1, 'motor', 3000),
(2, 'mobil', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_parkir` int(11) NOT NULL,
  `id_kendaraan` int(11) DEFAULT NULL,
  `no_plat` varchar(15) DEFAULT NULL,
  `jenis_kendaraan` enum('motor','mobil') DEFAULT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime DEFAULT NULL,
  `id_tarif` int(11) DEFAULT NULL,
  `durasi_jam` int(11) DEFAULT NULL,
  `biaya_total` decimal(10,0) DEFAULT NULL,
  `status` enum('masuk','keluar') NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_parkir`, `id_kendaraan`, `no_plat`, `jenis_kendaraan`, `waktu_masuk`, `waktu_keluar`, `id_tarif`, `durasi_jam`, `biaya_total`, `status`, `id`, `id_area`) VALUES
(1, 8, NULL, NULL, '2026-02-24 23:37:08', '2026-02-25 07:09:11', NULL, 8, 24000, 'keluar', 4, NULL),
(2, 11, NULL, NULL, '2026-02-25 06:39:01', '2026-02-25 07:37:49', NULL, 1, 3000, 'keluar', 4, NULL),
(3, 0, '-', 'motor', '2026-04-10 02:12:19', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(4, 0, '-', 'motor', '2026-04-10 02:12:23', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(5, 0, '-', 'motor', '2026-04-10 02:15:45', '2026-04-12 21:09:22', NULL, NULL, NULL, 'keluar', 0, 1),
(6, 0, '-', 'motor', '2026-04-10 02:15:47', '2026-04-12 21:09:16', NULL, NULL, NULL, 'keluar', 0, 1),
(7, 0, '-', 'mobil', '2026-04-10 02:22:06', '2026-04-12 21:09:09', NULL, NULL, NULL, 'keluar', 0, 2),
(8, 0, '-', 'mobil', '2026-04-10 02:27:13', '2026-04-12 21:09:03', NULL, NULL, NULL, 'keluar', 0, 2),
(9, 0, '-', 'motor', '2026-04-12 08:32:33', '2026-04-12 21:08:56', NULL, NULL, NULL, 'keluar', 0, 1),
(10, 0, 'B 1234 CVH', 'motor', '2026-04-12 08:45:33', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(11, 0, 'B 1234 CVH', 'motor', '2026-04-12 08:48:29', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(12, 0, 'B 1234 CVH', 'mobil', '2026-04-12 09:00:28', NULL, NULL, NULL, NULL, 'masuk', 0, 2),
(13, 0, 'B 1234 CVH', 'motor', '2026-04-12 09:00:33', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(14, 0, 'B 1234 CVH', 'motor', '2026-04-12 09:00:40', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(15, 0, 'B 1234 CVH', 'motor', '2026-04-12 09:03:33', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(16, 0, 'B 1234 CVH', 'motor', '2026-04-12 09:18:06', '2026-04-12 21:05:13', NULL, NULL, NULL, 'keluar', 0, 1),
(17, 0, 'B 1234 vc', 'motor', '2026-04-12 13:19:18', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(18, 0, 'B 1234 vc', 'motor', '2026-04-12 13:21:42', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(19, 0, 'B 1234 vc', 'mobil', '2026-04-12 13:21:44', NULL, NULL, NULL, NULL, 'masuk', 0, 2),
(20, NULL, 'B 1234 UW', 'motor', '2026-04-12 13:24:40', NULL, NULL, NULL, NULL, 'masuk', NULL, 1),
(21, NULL, 'B 1234 UW', 'motor', '2026-04-12 13:27:39', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(22, NULL, 'B 1234 BB', 'mobil', '2026-04-12 13:33:58', NULL, NULL, NULL, NULL, 'masuk', 0, 2),
(23, NULL, 'B 1234 BB', 'mobil', '2026-04-12 13:36:28', NULL, NULL, NULL, NULL, 'masuk', 0, 2),
(24, NULL, 'A 1234 ASA', 'motor', '2026-04-12 20:42:54', NULL, NULL, NULL, NULL, 'masuk', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_parkir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_parkir`
--
ALTER TABLE `area_parkir`
  MODIFY `id_area` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
