-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 05:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siredig`
--

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `nomor` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `nomor`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'PRIME2', 'Available', 0, 0, '2023-03-17 15:27:52', '2023-03-17 16:03:04');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `deskripsi`, `gambar`, `tipe`, `harga`, `stok`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Es Jeruk', 'Ini description', 'menu-20230316173036.jpg', 'minuman', 3000, 100, NULL, NULL, '2023-02-17 19:27:58', '2023-03-16 17:30:36'),
(3, 'es teh', 'tes', '', 'Minuman', 0, 2, NULL, NULL, '2023-03-14 16:09:17', '2023-03-14 16:09:17'),
(4, 'ini menu', 'ini dscription', 'menu-20230314171530.png', 'fsdfd', 0, 30000, NULL, NULL, '2023-03-14 16:46:31', '2023-03-14 17:16:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `nama`, `kelamin`, `tanggal_lahir`, `telepon`, `alamat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'dicky ananta', 'Laki-Laki', '2023-03-14', 62989890000, 'krasak', NULL, NULL, '2023-03-14 14:53:03', '2023-03-14 14:53:03'),
(2, 5, 'Bagus Guest', 'Laki-laki', '2001-12-07', 87899676309, 'Jambu RT24 RW05, Kembang, Jepara, Jawa Tengah', NULL, NULL, '2023-03-14 14:57:49', '2023-03-15 18:15:21'),
(3, 6, 'ashdhoahdisoa', 'osdaoodsa', '2023-03-14', 629888, 'krasak', NULL, NULL, '2023-03-14 14:59:00', '2023-03-14 14:59:00'),
(4, 7, 'asdadas', 'asdasdaad', '2023-03-14', 62928930829, 'krasak', NULL, NULL, '2023-03-14 15:03:10', '2023-03-14 15:03:10');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `status`, `role`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(1, 'dickyananta', '$2y$10$gDR3YO4P/z862aKI2bHfz.hso9z3Pu11VQTtlUYrRm2itGr/..Q16', 'dicky@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(2, 'asdasdasda', '$2y$10$QfGF/ChFpSQT2yZ77E0i8e/BgkosYM5aliqOV3wI0YfFHilEUfFTi', 'admin@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(3, 'ivanTa 26', '$2y$10$.HDZa3iXWpkK7UmvM3ih/ePlOgGVrDOg7TgMazuksmyjBTcw.3zdW', 'dicky@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(4, 'dickyananta123', '$2y$10$7ekxEQS9y2aMKZ2RhWxqO.LykMOCmIuKTGv1xBfNIEZudUWcc/Yeu', 'asdads@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(5, '@adaaja', '$2y$10$dIim7p6XkLkkMIApn8ZgT.8cO3Ud.oOFuziOngJz9KEFGtT.FX.8i', 'bprods7@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(6, 'alsd;ladjpoa', '$2y$10$Jw8.MEBwKOlp3uVgJN.ht.HfNNMZG0mHxS.zNT70v6qDtPJ2gJkM2', '3@gmail.com', '', 0, NULL, NULL, NULL, NULL),
(7, 'asdsadasda', '$2y$10$nuIR0OZCES5V.810xb1yDuJiZy2oFUCFoACAUPR./ulSp4OVP5JSa', '1@gmail.com', '', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
