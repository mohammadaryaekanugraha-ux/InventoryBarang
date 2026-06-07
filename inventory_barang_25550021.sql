-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2026 at 04:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_barang_25550021`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `kd_kat` varchar(50) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `kd_kat`, `category_name`) VALUES
(1, 'K001', 'Alat Tulis & Perlengkapan Kantor'),
(2, 'K002', 'Fashion & Merchandising'),
(3, 'K003', 'Perlengkapan Rumah Tangga'),
(4, 'K004', 'Peralatan Medis & Laboratorium'),
(5, 'K005', 'Bahan Pangan & Sembako');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(50) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `min_stock` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `PRODUCT_CODE`, `product_name`, `stock`, `min_stock`, `price`, `gambar`, `created_at`, `update_at`) VALUES
(1, 1, 'P001', 'Kertas HVS A4 80gr', 40, 5, 40000.00, '8810cd0eed8138c3e4be6fb818ea952a.jpg', '2026-05-28 12:25:42', '2026-05-28 12:25:42'),
(2, 1, 'P002', 'Pensil 2B', 16, 6, 16000.00, '000d7bdd46c83d70054e6a6075a647ab.jpg', '2026-05-28 12:25:42', '2026-05-30 12:58:09'),
(3, 1, 'P003', 'Penggaris Besi 30cm', 4, 5, 15000.00, '2950c4056d32fa4846336482dc106103.jpg', '2026-05-28 12:25:42', '2026-05-30 13:21:29'),
(4, 1, 'P004', 'Spidol Whiteboard Hitam', 23, 0, 30000.00, 'c148b30b928f3d33e42a8c78983c8eac.jpg', '2026-05-28 12:25:42', '2026-06-05 02:32:41'),
(21, 2, 'P005', 'Jaket Hoodie Polos', 12, 6, 65000.00, '6fdb71d1b7838162b380b9e2aaf54e96.jpg', '2026-05-29 02:23:46', '2026-05-29 02:23:46'),
(22, 2, 'P006', 'Dompet Kulit Pria Lipat', 20, 15, 76000.00, 'b26663a77a43db842b99ecb78d00cae1.jpg', '2026-05-29 02:24:43', '2026-05-29 02:24:43'),
(23, 2, 'P007', 'Ikat Pinggang Kulit', 30, 20, 50000.00, '7efda5e36249884807a520355baa4808.jpg', '2026-05-29 02:25:43', '2026-05-29 02:25:43'),
(24, 2, 'P008', 'Jam Tangan Analog Kasual', 50, 25, 80000.00, '9f917ff9b1bd089325966c852f5dcb29.jpg', '2026-05-29 02:32:53', '2026-05-29 02:32:53'),
(25, 3, 'P009', 'Sapu Lantai Nilon', 20, 11, 15000.00, '9e4fafc34794b3b5b033bbd2dd5df05c.jpg', '2026-05-29 02:33:42', '2026-05-29 02:33:42'),
(26, 3, 'P010', 'Dispenser Air Minum Portable', 35, 17, 45000.00, 'c78a2abc4d4f8deefef27e872d3644d3.jpg', '2026-05-29 02:34:25', '2026-05-29 02:34:25'),
(27, 3, 'P011', 'Jemuran Baju Lipat ', 20, 0, 35000.00, 'be369e49e3d73820bd60ec023f415482.jpg', '2026-05-29 02:41:08', '2026-05-29 03:00:03'),
(28, 1, 'P012', 'Botol Minum Tumbler ', 40, 0, 24000.00, 'cf67fc983cf966a646750059bcfc10ac.jpg', '2026-05-29 03:01:28', '2026-06-02 12:53:41'),
(29, 4, 'P013', 'Sarung Tangan Latex', 27, 16, 30000.00, '7b547c9f3a00075459ca6b02216677b2.jpg', '2026-05-29 03:02:23', '2026-05-29 03:02:23'),
(30, 4, 'P014', 'Tabung Reaksi Kaca', 40, 25, 25000.00, '526be05fafe07c70c1e21a18e62a40c5.jpg', '2026-05-29 03:09:12', '2026-05-29 03:09:12'),
(31, 4, 'P015', 'Gelas Ukur Plastik', 25, 14, 20000.00, '404852056a214ef0b42b99ef36b411ff.jpg', '2026-05-29 03:10:03', '2026-05-29 03:10:03'),
(32, 4, 'P016', 'Masker Medis 3-Ply', 20, 10, 17000.00, 'd25334ae0961c8a64999e3755d54ff84.jpg', '2026-05-29 03:11:05', '2026-05-29 03:11:05'),
(33, 5, 'P017', 'Minyak Goreng Sawit ', 60, 30, 30000.00, 'a1ead154bd8105990f376a80b8650e6c.jpg', '2026-05-29 03:21:41', '2026-05-29 03:21:41'),
(34, 5, 'P018', 'Kecap Manis', 30, 20, 17000.00, 'fe18ccbe618c14325714843e77f4f06d.jpg', '2026-05-29 03:22:51', '2026-05-29 03:22:51'),
(35, 5, 'P019', 'Sarden Kaleng ', 28, 15, 20000.00, 'b443b8d4d8cfc5443a42370efa6dbd2a.jpg', '2026-05-29 03:27:12', '2026-05-29 03:27:12'),
(36, 5, 'P020', 'Beras Pandan Wangi', 60, 30, 45000.00, '11cd6f8ea3293f76c654caafdcd01bd7.jpg', '2026-05-29 03:58:01', '2026-05-29 03:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `stock_logs`
--

CREATE TABLE `stock_logs` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `change_type` enum('ADD','EDIT','REDUCE') NOT NULL,
  `qty` int(11) NOT NULL,
  `stock_before` int(11) NOT NULL,
  `stock_after` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_logs`
--

INSERT INTO `stock_logs` (`id`, `product_id`, `change_type`, `qty`, `stock_before`, `stock_after`, `note`, `created_at`, `created_by`) VALUES
(1, 1, 'ADD', 10, 0, 10, 'penambahan stok', '2026-05-28 12:26:13', 1),
(2, 1, 'REDUCE', 2, 10, 8, 'pengurangan stok', '2026-05-28 12:26:13', 1),
(3, 1, 'ADD', 5, 8, 13, 'penambahan produk', '2026-05-28 12:26:13', 1),
(4, 1, 'REDUCE', 3, 13, 10, 'pengurangan stok', '2026-05-28 12:26:13', 1),
(5, 1, 'ADD', 2, 10, 12, 'penambahan', '2026-05-28 12:26:13', 1),
(6, 1, 'ADD', 3, 12, 15, 'penambahan stok', '2026-05-28 12:26:13', 1),
(7, 1, 'ADD', 25, 15, 40, 'penambahan stok', '2026-05-28 12:26:13', 1),
(8, 2, 'REDUCE', 3, 15, 12, 'pengurangan stok', '2026-05-28 12:26:13', 1),
(9, 3, 'REDUCE', 5, 12, 7, 'pengurangan produk', '2026-05-29 02:00:21', 1),
(10, 3, 'REDUCE', 3, 7, 4, 'pengurangan produk', '2026-05-30 12:33:49', 1),
(11, 3, 'REDUCE', 2, 4, 2, 'pengurangan produk penggaris', '2026-05-30 12:34:35', 1),
(12, 3, 'REDUCE', 1, 2, 1, 'pengurangan produk', '2026-05-30 12:35:12', 1),
(13, 3, 'ADD', 11, 1, 12, 'penambahan produk', '2026-05-30 12:36:31', 1),
(14, 3, 'REDUCE', 8, 12, 4, 'pengurangan stok', '2026-05-30 13:21:29', 1),
(15, 4, 'ADD', 8, 15, 23, 'penambahan produk', '2026-06-05 02:32:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff') NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_active`, `created_at`) VALUES
(1, 'Mohammad Arya Eka Nugraha', 'mohammadaryaekanugraha@gmail.com', '$2y$10$LC2zHzdavD9Xb/Qum8oBc.L5Ti1g77ZA7z0XQXYlhD.aaYj/L4jIu', 'admin', 1, '2026-05-28 12:25:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_kat` (`kd_kat`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PRODUCT_CODE` (`PRODUCT_CODE`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `stock_logs`
--
ALTER TABLE `stock_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD CONSTRAINT `stock_logs_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_logs_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
