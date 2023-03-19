-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 02:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siredignew`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_login`
--

CREATE TABLE `log_login` (
  `id_login` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `nomor`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, 'Available', NULL, NULL, '2023-03-17 16:14:28', '2023-03-17 16:14:28'),
(2, 6, 'Available', NULL, NULL, '2023-03-17 16:51:57', '2023-03-17 16:51:57'),
(3, 1, 'Available', NULL, NULL, '2023-03-17 16:59:02', '2023-03-17 16:59:02'),
(4, 9, 'Available', NULL, NULL, '2023-03-17 17:22:58', '2023-03-17 17:22:58'),
(5, 4, 'Available', NULL, NULL, '2023-03-17 17:24:32', '2023-03-17 17:24:32'),
(6, 0, 'Available', NULL, NULL, '2023-03-17 17:39:25', '2023-03-17 17:39:25'),
(7, 34, 'Available', NULL, NULL, '2023-03-17 17:39:56', '2023-03-17 17:39:56'),
(8, 123, 'Available', NULL, NULL, '2023-03-17 17:42:41', '2023-03-17 17:42:41'),
(9, 3421, 'Available', NULL, NULL, '2023-03-17 19:00:54', '2023-03-17 19:00:54'),
(10, 12345, 'Available', NULL, NULL, '2023-03-19 11:48:24', '2023-03-19 11:48:24'),
(11, 89712, 'Available', NULL, NULL, '2023-03-19 12:15:37', '2023-03-19 12:15:37'),
(12, 90, 'Available', NULL, NULL, '2023-03-19 12:25:47', '2023-03-19 12:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `deskripsi`, `gambar`, `tipe`, `harga`, `stok`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Es Jeruk', 'Ini description', 'esjeruk.png', 'minuman', 3000, 100, NULL, NULL, '2023-02-17 19:27:58', '2023-02-17 19:28:17'),
(3, 'es teh', 'tes', '', 'Minuman', 0, 2, NULL, NULL, '2023-03-14 16:09:17', '2023-03-14 16:09:17'),
(4, 'ini menu', 'ini dscription', 'menu-20230314171530.png', 'fsdfd', 0, 30000, NULL, NULL, '2023-03-14 16:46:31', '2023-03-14 17:16:07'),
(5, 'tes', 'ini tes', 'menu-20230317133439.jpeg', 'Minuman', 3000, 10, NULL, NULL, '2023-03-17 13:34:39', '2023-03-17 13:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `meja_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `nama`, `kelamin`, `tanggal_lahir`, `telepon`, `alamat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'dicky ananta', 'Laki-Laki', '2023-03-14', 62989890000, 'krasak', NULL, NULL, '2023-03-14 14:53:03', '2023-03-14 14:53:03'),
(2, 5, 'aasdadasdasds', 'asdsad', '2023-03-14', 6299808908, 'krasak', NULL, NULL, '2023-03-14 14:57:49', '2023-03-14 14:57:49'),
(3, 6, 'ashdhoahdisoa', 'osdaoodsa', '2023-03-14', 629888, 'krasak', NULL, NULL, '2023-03-14 14:59:00', '2023-03-14 14:59:00'),
(4, 7, 'asdadas', 'asdasdaad', '2023-03-14', 62928930829, 'krasak', NULL, NULL, '2023-03-14 15:03:10', '2023-03-14 15:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `struk`
--

CREATE TABLE `struk` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `tipe_pembayaran` varchar(255) NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `status`, `role`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(1, 'dickyananta', '$2y$10$gDR3YO4P/z862aKI2bHfz.hso9z3Pu11VQTtlUYrRm2itGr/..Q16', 'dicky@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(2, 'asdasdasda', '$2y$10$QfGF/ChFpSQT2yZ77E0i8e/BgkosYM5aliqOV3wI0YfFHilEUfFTi', 'admin@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(3, 'ivanTa 26', '$2y$10$.HDZa3iXWpkK7UmvM3ih/ePlOgGVrDOg7TgMazuksmyjBTcw.3zdW', 'dicky@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(4, 'dickyananta123', '$2y$10$7ekxEQS9y2aMKZ2RhWxqO.LykMOCmIuKTGv1xBfNIEZudUWcc/Yeu', 'asdads@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(5, 'ashdoahd', '$2y$10$dIim7p6XkLkkMIApn8ZgT.8cO3Ud.oOFuziOngJz9KEFGtT.FX.8i', 'a@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(6, 'alsd;ladjpoa', '$2y$10$Jw8.MEBwKOlp3uVgJN.ht.HfNNMZG0mHxS.zNT70v6qDtPJ2gJkM2', '3@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(7, 'asdsadasda', '$2y$10$nuIR0OZCES5V.810xb1yDuJiZy2oFUCFoACAUPR./ulSp4OVP5JSa', '1@gmail.com', '', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `log_login`
--
ALTER TABLE `log_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_login`
--
ALTER TABLE `log_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_login`
--
ALTER TABLE `log_login`
  ADD CONSTRAINT `log_login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `struk`
--
ALTER TABLE `struk`
  ADD CONSTRAINT `struk_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
