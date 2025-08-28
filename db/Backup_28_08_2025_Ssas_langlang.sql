-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2025 at 02:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssas_langlang`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint NOT NULL,
  `agent_code` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `office_phone` varchar(255) NOT NULL,
  `PIC` varchar(255) NOT NULL,
  `NPWP` varchar(255) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent_code`, `name`, `phone`, `office_phone`, `PIC`, `NPWP`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'SHPA-4018', 'MAS TRIA', '094888', '094888', '233', '12030', 'tirta@mail.com', 'Tegal', '2025-08-24 04:13:31', '2025-08-24 04:13:31'),
(2, 'SHPA-4803', 'PT MANDIRI', '0484882', '0484882', '3001', '2000', 'diri@mail.com', 'BORNEO', '2025-08-24 04:22:34', '2025-08-24 04:22:34'),
(3, 'SHPA-1589', 'PT MAS SORM', '03982809233', '03982809233', '32341', '4103049', 'sor@mail.com', 'Tegal', '2025-08-24 04:39:16', '2025-08-24 04:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint NOT NULL,
  `customer_code` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id` bigint NOT NULL,
  `kategori_trx_id` varchar(255) NOT NULL,
  `agent_id` varchar(255) NOT NULL,
  `no_header` varchar(60) NOT NULL,
  `header_date` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'DRAFT',
  `remarks` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id`, `kategori_trx_id`, `agent_id`, `no_header`, `header_date`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(15, '0015/WED/VIII/2025', 'PT MATARAMEJA', 'HDR-6068', '2025-08-24', 'Masuk', NULL, '2025-08-24 05:32:36', NULL),
(18, '0002/WED/VIII/2025', 'PT MAS TIRTA', 'HDR-9046', '2025-08-25', 'Masuk', NULL, '2025-08-24 17:00:09', NULL),
(23, '0003/WED/VIII/2025', 'PT MAS TIRTA', 'HDR-1551', '2025-08-27', 'Masuk', NULL, '2025-08-27 13:06:57', NULL),
(25, '0004/WED/VIII/2025', 'PT Hadar', 'HDR-5542', '2025-08-28', 'Masuk', NULL, '2025-08-28 01:45:49', NULL),
(26, '0005/WED/VIII/2025', 'PT ISMAIL MAEL', 'HDR-8097', '2025-08-28', 'Masuk', NULL, '2025-08-28 02:09:46', NULL),
(28, '0006/WED/VIII/2025', 'PT MAS TIRTA', 'HDR-1592', '2025-08-28', 'Masuk', NULL, '2025-08-28 02:27:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint NOT NULL,
  `header_transaksi_id` bigint NOT NULL,
  `invoice_no` varchar(60) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `subtotal` decimal(16,2) NOT NULL DEFAULT '0.00',
  `tax_amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(10) NOT NULL DEFAULT 'IDR',
  `status` varchar(30) NOT NULL DEFAULT 'UNPAID',
  `notes` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_transaksi`
--

CREATE TABLE `kategori_transaksi` (
  `id` bigint NOT NULL,
  `kd_trx` varchar(50) NOT NULL,
  `tipe_kapal` varchar(255) NOT NULL,
  `customer_id` bigint NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'OPEN',
  `notes` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori_transaksi`
--

INSERT INTO `kategori_transaksi` (`id`, `kd_trx`, `tipe_kapal`, `customer_id`, `start_date`, `end_date`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(15, '0015/WED/VIII/2025', 'Tanker', 20, '2025-08-24', NULL, 'Masuk', NULL, '2025-08-24 05:32:36', NULL),
(18, '0002/WED/VIII/2025', '', 20, '2025-08-25', NULL, 'Masuk', NULL, '2025-08-24 17:00:09', NULL),
(23, '0003/WED/VIII/2025', 'Tanker', 20, '2025-08-27', NULL, 'Masuk', NULL, '2025-08-27 13:06:57', NULL),
(25, '0004/WED/VIII/2025', 'Tug & Barge', 20, '2025-08-28', NULL, 'Masuk', NULL, '2025-08-28 01:45:49', NULL),
(26, '0005/WED/VIII/2025', 'Tug & Barge', 20, '2025-08-28', NULL, 'Masuk', NULL, '2025-08-28 02:09:46', NULL),
(28, '0006/WED/VIII/2025', 'Tug & Barge', 20, '2025-08-28', NULL, 'Masuk', NULL, '2025-08-28 02:27:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ppkb`
--

CREATE TABLE `ppkb` (
  `id` bigint NOT NULL,
  `ppkb_number` varchar(255) NOT NULL,
  `IMO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `IMO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `no_header` varchar(255) NOT NULL,
  `ship_name` varchar(255) DEFAULT NULL,
  `call_sign` varchar(255) DEFAULT NULL,
  `master_name` varchar(255) DEFAULT NULL,
  `agent_name` varchar(255) DEFAULT NULL,
  `vessel_movement` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `port_registry` varchar(255) DEFAULT NULL,
  `charter` varchar(255) DEFAULT NULL,
  `ship_file` varchar(255) DEFAULT NULL,
  `tonnage_certificate` varchar(255) DEFAULT NULL,
  `tonnage_certificate2` varchar(255) DEFAULT NULL,
  `ship_file2` varchar(255) DEFAULT NULL,
  `cargo_type` varchar(255) DEFAULT NULL,
  `geared` varchar(255) DEFAULT NULL,
  `qty_crane` int DEFAULT NULL,
  `SWL` int DEFAULT NULL,
  `last_port` varchar(255) DEFAULT NULL,
  `next_port` varchar(255) DEFAULT NULL,
  `ETA` datetime DEFAULT NULL,
  `ETD` datetime DEFAULT NULL,
  `cargo_loading` varchar(255) DEFAULT NULL,
  `vsl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `consignee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `shipper` varchar(255) DEFAULT NULL,
  `kind_cargo` varchar(255) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `unit` int DEFAULT NULL,
  `stevedoring` varchar(255) DEFAULT NULL,
  `loading_point` varchar(255) DEFAULT NULL,
  `other_service` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ppkb`
--

INSERT INTO `ppkb` (`id`, `ppkb_number`, `IMO`, `IMO2`, `no_header`, `ship_name`, `call_sign`, `master_name`, `agent_name`, `vessel_movement`, `route`, `port_registry`, `charter`, `ship_file`, `tonnage_certificate`, `tonnage_certificate2`, `ship_file2`, `cargo_type`, `geared`, `qty_crane`, `SWL`, `last_port`, `next_port`, `ETA`, `ETD`, `cargo_loading`, `vsl`, `consignee`, `shipper`, `kind_cargo`, `qty`, `unit`, `stevedoring`, `loading_point`, `other_service`, `status`, `created_at`, `updated_at`) VALUES
(7, '0006/LLL.IDWED/PPKB/VIII/2025', '23133', '', 'HDR-6068', 'KP Marta Blue', '20', 'FERDIAN', 'MAS TRIA', 'Shifting Out', '3', 'WEDA', 'PT TIKI', '7_+nov,+pt+-+June+2023.pdf', '31-37+Perancangan+Sistem+Aplikasi+Penjualan+dan+Layanan+Jasa+Laundry+Sepatu+Berbasis+Website.pdf', NULL, NULL, 'Liquid Bulk', 'No', 20, 20, 'FILIPHINE', 'AUSTRIA', '2025-08-31 11:11:00', '2025-08-29 11:11:00', 'Loading', '', '', 'PT PNY', 'Liquid Bulk', 2, 2, 'JNE', 'Dock 1', '', 0, '2025-08-24 05:34:16', '2025-08-24 05:34:16'),
(8, '0002/LLL.IDWED/PPKB/VIII/2025', '23133', '', 'HDR-7178', 'KP TIRTA AJI', '123', 'FERDIAN', 'MAS TRIA', 'IN', '1', 'WEDA', 'PT JNEWE', 'Aplikasi_Pelayanan_Jasa_Laundry_Berbasis1.pdf', '03+edited+Pembangunan+Aplikasi+Pencarian+dan+Pelayanan+Laundry+Berbasis+Mobile.pdf', NULL, NULL, 'Liquid Bulk', 'Yes', 20, 2, 'FILIPHINE', 'AUSTRIA', '2025-07-30 11:11:00', '2025-08-06 11:11:00', 'Loading', '', '', 'PT PNY', 'Dry Bulk', 3, 3, '3', 'Dock 1', '', 0, '2025-08-24 16:56:15', '2025-08-24 16:56:15'),
(9, '0003/LLL.IDWED/PPKB/VIII/2025', '23133', '', 'HDR-9046', 'KP Marta Blue', '20', 'FERDIAN', 'MAS TRIA', 'Shifting Out', '2', 'WEDA', 'PT JNEWE', '653-1586-1-PB5.pdf', '31-37+Perancangan+Sistem+Aplikasi+Penjualan+dan+Layanan+Jasa+Laundry+Sepatu+Berbasis+Website5.pdf', NULL, NULL, 'Liquid Bulk', 'Yes', 20, 20, 'BANTEN', 'TANJUNG RATU', '2025-08-27 11:11:00', '2025-08-27 11:11:00', 'Unloading', '', '', 'PT PNY', 'Dry Bulk', 22, 1, '22', 'Dock 2', '', 0, '2025-08-24 17:06:11', '2025-08-24 17:06:11'),
(10, '0004/LLL.IDWED/PPKB/VIII/2025', '23133', '', 'HDR-1551', 'KP Marta Blue', '20', 'FERDIAN', 'PT MANDIRI', 'Shifting Out', '1', 'BAHAMAS', 'PT JNEWE', 'sensor_213.pdf', 'PROPOSAL_TA_GilandDwiP12.pdf', NULL, NULL, 'Liquid Bulk', 'Yes', 20, 2, 'BANTEN', 'AUSTRIA', '2025-08-29 12:11:00', '2025-09-05 11:11:00', 'Unloading', '', '', 'JNE', 'Dry Bulk', 3, 3, 'JNE', 'Dock 1', '', 0, '2025-08-27 13:35:15', '2025-08-27 13:35:15'),
(11, '0005/LLL.IDWED/PPKB/VIII/2025', '99', '29918', 'HDR-5542', 'KP. Mongolia UT', '230', 'BENY ORTEGA', 'MAS TRIA', 'Shifting IN', '2', 'JAPAN', 'PT TIKI', '21040025_dns_35.pdf', 'Turnitin5.pdf', NULL, NULL, 'Liquid Bulk', 'Yes', 4, 20, 'HAWAII', 'SAN JUAN', '2025-08-29 11:11:00', '2025-09-02 12:11:00', 'Loading', NULL, 'PT.MORING', 'PT PNY', 'Dry Bulk', 12, 2, 'PT SS', 'Dock 1', '', 0, '2025-08-28 02:00:29', '2025-08-28 02:00:29'),
(12, '0006/LLL.IDWED/PPKB/VIII/2025', '928', '8989', 'HDR-8097', 'BROSIED KP', '230', 'BENY', 'MAS TRIA', 'IN', '3', 'WEDA', 'PT JNEWE', 'BAB_I.pdf', 'BAB_II.pdf', NULL, NULL, 'Dry Bulk', 'Yes', 4, 20, 'BANTEN', 'AUSTRIA', '2025-08-28 11:11:00', '2025-09-04 12:22:00', 'Unloading', NULL, 'PT.MORING', 'PT PNY', 'Dry Bulk', 12, 2, 'PT SS', 'Dock 2', '', 0, '2025-08-28 02:13:22', '2025-08-28 02:13:22'),
(13, '0007/LLL.IDWED/PPKB/VIII/2025', '4918299', '8989', 'HDR-8133', 'KP Marta Blue', '20', 'BENY', 'MAS TRIA', 'Shifting Out', '1', 'BAHAMAS', 'PT JNEWE', 'Laporan_Stok_Seluruh_Barang.pdf', 'astuti,+728_+JPT_Pendekatan+Penelitian+Pendidik+2896-2910.pdf', NULL, NULL, 'Liquid Bulk', 'Yes', 20, 20, 'FILIPHINE', 'AUSTRIA', '2025-08-28 11:01:00', '2025-09-04 12:22:00', 'Unloading', NULL, 'PT.MORING', 'PT PNY', 'Dry Bulk', 12, 2, 'PT SS', 'Dock 1', '', 0, '2025-08-28 02:18:45', '2025-08-28 02:18:45'),
(14, '0008/LLL.IDWED/PPKB/VIII/2025', '12', '29918', 'HDR-1592', 'KP Marta Blue', '22', 'ben', 'MAS TRIA', 'IN', '1', 'WEDA', 'ben', '5116-11113-1-PB.pdf', '5871-21898-1-PB.pdf', 'Tutorial_Instalasi_SEB_2024.pdf', 'Laporan_Stok_Seluruh_Barang1.pdf', 'Liquid Bulk', 'Yes', 20, 20, 'FILIPHINE', 'AUSTRIA', '2025-08-29 11:11:00', '2025-08-31 11:11:00', 'Loading', NULL, 'PT.MORING', 'PT PNY', 'Dry Bulk', 12, 2, 'JNE', 'Dock 1', '', 0, '2025-08-28 02:30:05', '2025-08-28 02:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `pranota`
--

CREATE TABLE `pranota` (
  `id` bigint NOT NULL,
  `header_transaksi_id` bigint NOT NULL,
  `pranota_no` varchar(60) NOT NULL,
  `issue_date` date NOT NULL,
  `subtotal` decimal(16,2) NOT NULL DEFAULT '0.00',
  `tax_amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(10) NOT NULL DEFAULT 'IDR',
  `status` varchar(30) NOT NULL DEFAULT 'ISSUED',
  `notes` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `service_code` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `id` bigint NOT NULL,
  `IMO` varchar(255) DEFAULT NULL,
  `ship_name` varchar(255) DEFAULT NULL,
  `call_sign` varchar(255) DEFAULT NULL,
  `ship_owner` varchar(255) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `GT` varchar(255) DEFAULT NULL,
  `LOA` varchar(255) DEFAULT NULL,
  `anchor_point` varchar(255) DEFAULT NULL,
  `breadth` varchar(255) DEFAULT NULL,
  `DWT` varchar(255) DEFAULT NULL,
  `air_craft` varchar(255) DEFAULT NULL,
  `max_craft` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`id`, `IMO`, `ship_name`, `call_sign`, `ship_owner`, `flag`, `GT`, `LOA`, `anchor_point`, `breadth`, `DWT`, `air_craft`, `max_craft`, `created_at`, `updated_at`) VALUES
(1, '23133', 'MAS TIRTA', '123', 'BENY', 'INDONESIA', '33', '33', 'WEDA', '8', '33', '220', '333', '2025-08-24 03:55:51', '2025-08-24 03:55:51'),
(2, '4918299', 'KP Marta Blue', '282', 'MAX LIVER', 'PANAMA', '83', '288', 'BAHAMAS', '839', '28', '399', '199', '2025-08-24 04:05:05', '2025-08-24 04:05:05'),
(3, '56884', 'KP TIRTA AJI', '20', 'OWEN BROTHERS', 'INDONESIA', '20', '20', 'JAWA', '40', '20', '20', '20', '2025-08-24 04:22:34', '2025-08-24 04:22:34'),
(4, '2313331', 'KP TIRTA AJI', '20', 'SORMAN', 'INDONESIA', '33', '288', 'JAWA', '8', '28', '399', '20', '2025-08-24 04:39:16', '2025-08-24 04:39:16'),
(5, '99', 'KP. Mongolia UT', '230', 'OLIVER SYIIE', 'INDONESIA', '20', '200', 'HAWAII', '2093', '100', '100', '100', '2025-08-28 01:58:03', '2025-08-28 01:58:03'),
(6, '29918', 'KP ALUL', '200', 'MIZUHARA ', 'INDONESIA', '20', '200', 'JAPAN', '299', '200', '200', '200', '2025-08-28 01:58:03', '2025-08-28 01:58:03'),
(7, '928', 'BROSIED KP', '230', 'SORMAN', 'PANAMA', '33', '20', 'JAWA', '40', '28', '100', '199', '2025-08-28 02:13:22', '2025-08-28 02:13:22'),
(8, '8989', 'KP ALUL', '200', 'MIZUHARA', 'INDONESIA', '202', '200', 'JAPAN', '299', '200', '233', '233', '2025-08-28 02:13:22', '2025-08-28 02:13:22'),
(11, '12', 'KP Marta Blue', '22', 'ber', 'PANAMA', '332', '22', 'pan', '40', '22', '22', '22', '2025-08-28 02:30:05', '2025-08-28 02:30:05'),
(12, '29918', 'KP ALUL', '200', 'MIZUHARA', 'INDONESIA', '20', '200', 'JAPAN', '299', '200', '233', '233', '2025-08-28 02:30:05', '2025-08-28 02:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama_user`, `password`, `phone`, `jabatan`, `cabang`, `image`, `role_id`, `status`) VALUES
(5, 'andi', 'Andi Saputra', '$2y$10$.6/kcLjV8e1efcKamvpg1uz88uQCdQQ16trctW/vsD9ntQFK3A4Zu', '081234567890', 'Admin Operasi', 'Cabang Tarakan', '', 1, 1),
(6, 'siti', 'Siti Rahma', '$2y$10$z0Tw/PjE.HbNCfRkg4M93evRAFPKjMeBx0XUFwcN8qsT0ezrAClTe', '082145678901', 'Admin Operasi', 'Cabang Weda', '', 1, 1),
(7, 'budi', 'Budi Pratama', '$2y$10$NSsizFvIZ0rQw9AlslFBweTXPA3tHbSRz4N8vTeVdti2M3TWAh0na', '085678901234', 'User OPC', 'Cabang Tarakan', '', 2, 1),
(8, 'rina', 'Rina Amelia', '$2y$10$rmM4GzUeUmroqef4r.Hnu./mSkFDzRw5hqX8OoVGHqvFRamqjP55G', '087654321098', 'User OPC', 'Cabang Weda', '', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agent_code` (`agent_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_code` (`customer_code`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_header` (`no_header`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `header_transaksi_id` (`header_transaksi_id`),
  ADD UNIQUE KEY `invoice_no` (`invoice_no`);

--
-- Indexes for table `kategori_transaksi`
--
ALTER TABLE `kategori_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_trx` (`kd_trx`);

--
-- Indexes for table `ppkb`
--
ALTER TABLE `ppkb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pranota`
--
ALTER TABLE `pranota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `header_transaksi_id` (`header_transaksi_id`),
  ADD UNIQUE KEY `pranota_no` (`pranota_no`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_code` (`service_code`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_transaksi`
--
ALTER TABLE `kategori_transaksi`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ppkb`
--
ALTER TABLE `ppkb`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pranota`
--
ALTER TABLE `pranota`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
