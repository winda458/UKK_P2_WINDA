-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 10 Apr 2026 pada 10.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukkpaket2_windamarliani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `area_parkir`
--

CREATE TABLE `area_parkir` (
  `id_area` int(55) NOT NULL,
  `nama_area` varchar(55) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `terisi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `area_parkir`
--

INSERT INTO `area_parkir` (`id_area`, `nama_area`, `kapasitas`, `terisi`) VALUES
(1, 'Area Motor', 100, 0),
(2, 'Area Mobil', 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE `db_user` (
  `id` int(55) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL,
  `role` enum('Owner','Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`, `role`) VALUES
(4, 'Asepjegar', '7171', 'Petugas'),
(7, 'genah675', '6767', 'Admin'),
(19, 'ayya', '0511', 'Owner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `jenis_kendaraan` enum('Motor','Mobil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_plat`, `jenis_kendaraan`) VALUES
(1, 'D 1234 G', 'Motor'),
(2, 'D 1234 G', 'Motor'),
(3, 'D 1234 G', 'Motor'),
(4, 'D 1234 G', 'Motor'),
(5, 'D 1234 G', 'Motor'),
(6, 'Z 9999 Z', 'Mobil'),
(7, 'Z 9999 Z', 'Mobil'),
(8, 'D 1233 Y', 'Motor'),
(9, 'D 1233 Y', 'Motor'),
(10, 'D 1233 Y', 'Motor'),
(11, 'D 1234 J', 'Mobil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id_log` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `aktifitas` varchar(15) NOT NULL,
  `waktu_aktivitas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `log_aktivitas`
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
(91, 'genah675', 'LOGIN', '2026-04-10 09:48:32'),
(92, 'genah675', 'LOGOUT', '2026-04-10 09:49:34'),
(93, 'Asepjegar', 'LOGIN', '2026-04-10 09:50:53'),
(94, 'Asepjegar', 'LOGOUT', '2026-04-10 09:51:02'),
(95, 'Asepjegar', 'LOGIN', '2026-04-10 11:57:11'),
(96, 'Asepjegar', 'LOGIN', '2026-04-10 12:26:28'),
(97, 'Asepjegar', 'LOGIN', '2026-04-10 12:39:56'),
(98, 'Asepjegar', 'LOGOUT', '2026-04-10 12:46:12'),
(99, 'genah675', 'LOGIN', '2026-04-10 12:46:30'),
(100, 'genah675', 'LOGOUT', '2026-04-10 13:06:19'),
(101, 'Asepjegar', 'LOGIN', '2026-04-10 13:06:28'),
(102, 'Asepjegar', 'LOGOUT', '2026-04-10 13:07:14'),
(103, 'genah675', 'LOGIN', '2026-04-10 13:07:22'),
(104, 'genah675', 'LOGOUT', '2026-04-10 13:57:17'),
(105, 'Asepjegar', 'LOGIN', '2026-04-10 13:57:24'),
(106, 'Asepjegar', 'LOGOUT', '2026-04-10 14:08:47'),
(107, 'genah675', 'LOGIN', '2026-04-10 14:08:54'),
(108, 'genah675', 'LOGOUT', '2026-04-10 14:09:22'),
(109, 'Asepjegar', 'LOGIN', '2026-04-10 14:09:34'),
(110, 'Asepjegar', 'LOGOUT', '2026-04-10 14:13:36'),
(111, 'genah675', 'LOGIN', '2026-04-10 14:13:43'),
(112, 'genah675', 'LOGOUT', '2026-04-10 14:20:38'),
(113, 'Asepjegar', 'LOGIN', '2026-04-10 14:20:47'),
(114, 'Asepjegar', 'LOGOUT', '2026-04-10 14:34:16'),
(115, 'genah675', 'LOGIN', '2026-04-10 14:34:23'),
(116, 'genah675', 'LOGOUT', '2026-04-10 14:40:22'),
(117, 'Asepjegar', 'LOGIN', '2026-04-10 14:40:33'),
(118, 'Asepjegar', 'LOGOUT', '2026-04-10 14:49:58'),
(119, 'genah675', 'LOGIN', '2026-04-10 14:50:05'),
(120, 'genah675', 'LOGOUT', '2026-04-10 14:55:33'),
(121, 'Asepjegar', 'LOGIN', '2026-04-10 14:55:40'),
(122, 'Asepjegar', 'LOGOUT', '2026-04-10 15:01:29'),
(123, 'genah675', 'LOGIN', '2026-04-10 15:01:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tarif`
--

CREATE TABLE `tb_tarif` (
  `id_tarif` int(55) NOT NULL,
  `jenis_kendaraan` enum('Motor','Mobil') NOT NULL,
  `tarif_per_jam` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `jenis_kendaraan`, `tarif_per_jam`) VALUES
(1, 'Motor', 3000),
(2, 'Mobil', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_parkir` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `no_plat` varchar(15) DEFAULT NULL,
  `jenis_kendaraan` enum('Motor','Mobil') NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime DEFAULT NULL,
  `id_tarif` int(11) DEFAULT NULL,
  `durasi_jam` int(11) DEFAULT NULL,
  `biaya_total` decimal(10,0) DEFAULT NULL,
  `status` enum('masuk','keluar') NOT NULL,
  `id` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_parkir`, `id_kendaraan`, `no_plat`, `jenis_kendaraan`, `waktu_masuk`, `waktu_keluar`, `id_tarif`, `durasi_jam`, `biaya_total`, `status`, `id`, `id_area`) VALUES
(1, 8, NULL, '', '2026-02-24 23:37:08', '2026-02-25 07:09:11', NULL, 8, 24000, 'keluar', 4, NULL),
(2, 11, NULL, '', '2026-02-25 06:39:01', '2026-02-25 07:37:49', NULL, 1, 3000, 'keluar', 4, NULL),
(3, 0, NULL, 'Motor', '2026-04-10 04:50:56', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(4, 0, NULL, 'Motor', '2026-04-10 06:57:17', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(5, 0, NULL, 'Motor', '2026-04-10 07:11:16', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(6, 0, NULL, 'Motor', '2026-04-10 07:13:02', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(7, 0, '-', 'Motor', '2026-04-10 12:20:18', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(8, 0, '-', 'Motor', '2026-04-10 12:35:59', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(9, 0, '-', 'Mobil', '2026-04-10 12:36:06', NULL, NULL, NULL, NULL, 'masuk', 0, 2),
(10, 0, '-', 'Motor', '2026-04-10 12:42:43', NULL, NULL, NULL, NULL, 'masuk', 0, 1),
(11, 0, '-', 'Motor', '2026-04-10 13:06:31', NULL, NULL, NULL, NULL, '', 0, 1),
(12, 0, '-', 'Motor', '2026-04-10 14:02:05', NULL, NULL, NULL, NULL, '', 0, 1),
(13, 0, 'b 6743 w', 'Motor', '2026-04-10 14:08:13', NULL, NULL, NULL, NULL, '', 0, 1),
(14, 0, 'b 1234 d', 'Mobil', '2026-04-10 14:25:39', NULL, NULL, NULL, NULL, '', 0, 2),
(15, 0, 'b1234a', 'Mobil', '2026-04-10 14:56:00', NULL, NULL, NULL, NULL, '', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD PRIMARY KEY (`id_area`);

--
-- Indeks untuk tabel `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_parkir`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `area_parkir`
--
ALTER TABLE `area_parkir`
  MODIFY `id_area` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
