-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 11:28 PM
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

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `menu_id`, `pesanan_id`, `harga`, `jumlah`, `sub_total`, `catatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 23, 1, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:21', '2023-03-20 21:18:21'),
(2, 6, 1, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:21', '2023-03-20 21:18:21'),
(3, 23, 2, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:27', '2023-03-20 21:18:27'),
(4, 6, 2, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:27', '2023-03-20 21:18:27'),
(5, 23, 3, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(6, 6, 3, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(7, 23, 4, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(8, 6, 4, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(9, 23, 5, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(10, 6, 5, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(11, 23, 6, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(12, 6, 6, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(13, 23, 7, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(14, 6, 7, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(15, 23, 8, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:18:33', '2023-03-20 21:18:33'),
(16, 6, 8, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:18:33', '2023-03-20 21:18:33'),
(17, 23, 9, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:19:14', '2023-03-20 21:19:14'),
(18, 6, 9, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:19:14', '2023-03-20 21:19:14'),
(19, 23, 10, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(20, 6, 10, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(21, 23, 11, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(22, 6, 11, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(23, 23, 12, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(24, 6, 12, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(25, 23, 13, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(26, 6, 13, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(27, 23, 14, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:20:01', '2023-03-20 21:20:01'),
(28, 6, 14, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:20:01', '2023-03-20 21:20:01'),
(29, 23, 15, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:20:05', '2023-03-20 21:20:05'),
(30, 6, 15, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:20:05', '2023-03-20 21:20:05'),
(31, 23, 16, 10000, 2, 20000, '', NULL, NULL, '2023-03-20 21:20:05', '2023-03-20 21:20:05'),
(32, 6, 16, 25000, 1, 25000, '', NULL, NULL, '2023-03-20 21:20:05', '2023-03-20 21:20:05'),
(33, 11, 17, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:27:59', '2023-03-20 21:27:59'),
(34, 23, 18, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:41', '2023-03-20 21:32:41'),
(35, 23, 19, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:44', '2023-03-20 21:32:44'),
(36, 23, 20, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:44', '2023-03-20 21:32:44'),
(37, 23, 21, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:45', '2023-03-20 21:32:45'),
(38, 23, 22, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:45', '2023-03-20 21:32:45'),
(39, 23, 23, 10000, 1, 10000, '', NULL, NULL, '2023-03-20 21:32:47', '2023-03-20 21:32:47');

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
(6, 'Burger Special', 'Ini merupakan varian yang paling diminati masyarakat Indonesia.', 'menu-20230320155818.jpg', 'Makanan', 25000, 11, NULL, NULL, '2023-03-19 18:41:42', '2023-03-20 15:58:18'),
(7, 'Pizza', 'Pizza adalah roti berbentuk bulat pipih dengan diameter 30 cm yang dipanggang dalam oven dan biasanya disiram saus tomat serta keju dan dengan makanan tambahan lainnya (topping) yang sesuai selera penikmatnya.', 'menu-20230320160051.jpg', 'Makanan', 50000, 15, NULL, NULL, '2023-03-19 18:44:20', '2023-03-20 16:00:51'),
(8, 'Churros', 'Cemilan untuk penggurih mulutmu', 'menu-20230320160605.jpg', 'Cemilan', 10000, 16, NULL, NULL, '2023-03-19 18:46:13', '2023-03-20 16:06:05'),
(9, 'Chocolate Cake ', 'Pemanis mulut setelah makanan beratmu.', 'menu-20230320160551.jpg', 'Cemilan', 15000, 20, NULL, NULL, '2023-03-19 18:47:46', '2023-03-20 16:05:51'),
(10, 'Lemon Tea', 'Penyegar mulutmu', 'menu-20230320160500.jpg', 'Minuman', 8000, 100, NULL, NULL, '2023-03-19 18:49:20', '2023-03-20 16:05:00'),
(11, 'Coffee Latte', 'Menu ini merupakan perpaduan antara kopi espresso dan susu yang dapat dinikmati kapan saja, baik dalam keadaan dingin ataupun panas.', 'menu-20230320160248.jpg', 'Minuman', 10000, 40, NULL, NULL, '2023-03-19 18:51:41', '2023-03-20 16:02:48'),
(12, 'Coffee Milk', 'Kopi dengan campuran susu.', 'menu-20230320160226.jpg', 'Minuman', 15000, 30, NULL, NULL, '2023-03-19 18:54:10', '2023-03-20 16:02:26'),
(13, 'Ice Matcha Latte', 'atcha latte atau kerap disebut green tea latte adalah minuman yang terbuat dari matcha bubuk dicampur dengan susu cair. Matcha latte maupun green tea latte tidak mengandung kopi. Kata latte berasal dari Bahasa Italia yang artinya susu.', 'menu-20230320160410.jpg', 'Minuman', 15000, 20, NULL, NULL, '2023-03-19 18:55:40', '2023-03-20 16:04:10'),
(14, 'Macaroni Schotel', 'ini deskripsi', 'menu-20230320160625.jpg', 'Cemilan', 15000, 10, NULL, NULL, '2023-03-19 19:20:21', '2023-03-20 16:06:25'),
(15, 'Pasta', 'ini deskripsi', 'menu-20230320160024.jpg', 'Makanan', 20000, 10, NULL, NULL, '2023-03-19 19:22:03', '2023-03-20 16:00:24'),
(16, 'Es Chocolate', 'Ini deskripsi', 'menu-20230320160309.jpg', 'Minuman', 15000, 10, NULL, NULL, '2023-03-19 19:28:34', '2023-03-20 16:03:09'),
(17, 'Sefood', 'Ini deskrpsi', 'menu-20230320160149.jpg', 'Makanan', 20000, 10, NULL, NULL, '2023-03-19 19:29:32', '2023-03-20 16:01:49'),
(18, 'Mozarella Stick', 'Ini deskripsi', 'menu-20230320160654.jpg', 'Cemilan', 15000, 10, NULL, NULL, '2023-03-19 19:32:35', '2023-03-20 16:06:54'),
(19, 'Nugget', 'Ini deskrpsi', 'menu-20230320160728.jpg', 'Cemilan', 10000, 11, NULL, NULL, '2023-03-20 14:57:16', '2023-03-20 16:07:28'),
(20, 'Es Jeruk', 'Ini deskripsi', 'menu-20230320160329.jpg', 'Minuman', 3000, 11, NULL, NULL, '2023-03-20 14:58:17', '2023-03-20 16:03:29'),
(21, 'Es Stowberi', 'Ini Deskripsi', 'menu-20230320160349.jpg', 'Minuman', 5000, 11, NULL, NULL, '2023-03-20 15:00:18', '2023-03-20 16:03:49'),
(22, 'Cherry Cocktail', 'Ini Deskripsi', 'menu-20230320155917.jpg', 'Minuman', 15000, 11, NULL, NULL, '2023-03-20 15:01:29', '2023-03-20 15:59:17'),
(23, 'Bakso', 'Ini Deskripsi', 'menu-20230320155957.jpg', 'Makanan', 10000, 11, NULL, NULL, '2023-03-20 15:02:22', '2023-03-20 15:59:57'),
(24, 'Kopi Hitam', 'Ini deskripsi', 'menu-20230320160434.jpg', 'Minuman', 4000, 11, NULL, NULL, '2023-03-20 15:03:01', '2023-03-20 16:04:34'),
(25, 'Soda Gembira', 'Ini Deskripsi', 'menu-20230320160524.jpg', 'Minuman', 5000, 11, NULL, NULL, '2023-03-20 15:03:57', '2023-03-20 16:05:24'),
(26, 'Wafel', 'Ini deskripsi', 'menu-20230320160801.jpg', 'Cemilan', 8000, 11, NULL, NULL, '2023-03-20 15:05:05', '2023-03-20 16:08:01');

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

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `telepon`, `created_at`) VALUES
(1, 'dicky ananta', 453535344535, '2023-03-20 21:18:21'),
(2, 'dicky ananta', 121314134135, '2023-03-20 21:27:59'),
(3, 'dicky ananta', 81229502605, '2023-03-20 21:32:41');

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

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `meja_id`, `pelanggan_id`, `nomor`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:21', '2023-03-20 21:18:21'),
(2, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:27', '2023-03-20 21:18:27'),
(3, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(4, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(5, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:28', '2023-03-20 21:18:28'),
(6, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(7, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:29', '2023-03-20 21:18:29'),
(8, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:18:32', '2023-03-20 21:18:32'),
(9, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:19:14', '2023-03-20 21:19:14'),
(10, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(11, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:19:15', '2023-03-20 21:19:15'),
(12, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(13, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:19:16', '2023-03-20 21:19:16'),
(14, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:20:00', '2023-03-20 21:20:00'),
(15, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:20:04', '2023-03-20 21:20:04'),
(16, 1, 1, '1', 'WAITING', 1, NULL, '2023-03-20 21:20:05', '2023-03-20 21:20:05'),
(17, 1, 2, '1', 'WAITING', 2, NULL, '2023-03-20 21:27:59', '2023-03-20 21:27:59'),
(18, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:41', '2023-03-20 21:32:41'),
(19, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:44', '2023-03-20 21:32:44'),
(20, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:44', '2023-03-20 21:32:44'),
(21, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:45', '2023-03-20 21:32:45'),
(22, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:45', '2023-03-20 21:32:45'),
(23, 1, 3, '1', 'WAITING', 3, NULL, '2023-03-20 21:32:47', '2023-03-20 21:32:47');

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
(2, 1, 'dickyananta', 'Laki-Laki', '2004-10-14', 6281229502605, 'Krasak Bangsri', NULL, NULL, '2023-03-20 06:59:05', '2023-03-20 06:59:52');

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
(1, 'dickyananta', '$2y$10$DWioEPYnmDs/v7ju0BTYiOt9.AejvMWHMOYofdFbmSE1EAy4ma4vC', 'dicky@gmail.com', '', 0, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
