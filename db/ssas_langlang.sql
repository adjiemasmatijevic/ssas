-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2025 at 06:35 AM
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
(15, '0015/WED/VIII/2025', 'PT MATARAMEJA', 'HDR-6068', '2025-08-24', 'Masuk', NULL, '2025-08-24 05:32:36', NULL);

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
(15, '0015/WED/VIII/2025', 'Tanker', 20, '2025-08-24', NULL, 'Masuk', NULL, '2025-08-24 05:32:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ppkb`
--

CREATE TABLE `ppkb` (
  `id` bigint NOT NULL,
  `ppkb_number` varchar(255) NOT NULL,
  `IMO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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
  `cargo_type` varchar(255) DEFAULT NULL,
  `geared` varchar(255) DEFAULT NULL,
  `qty_crane` int DEFAULT NULL,
  `SWL` int DEFAULT NULL,
  `last_port` varchar(255) DEFAULT NULL,
  `next_port` varchar(255) DEFAULT NULL,
  `ETA` datetime DEFAULT NULL,
  `ETD` datetime DEFAULT NULL,
  `cargo_loading` varchar(255) DEFAULT NULL,
  `shipper` varchar(255) DEFAULT NULL,
  `kind_cargo` varchar(255) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `unit` int DEFAULT NULL,
  `stevedoring` varchar(255) DEFAULT NULL,
  `loading_point` varchar(255) DEFAULT NULL,
  `other_service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ppkb`
--

INSERT INTO `ppkb` (`id`, `ppkb_number`, `IMO`, `no_header`, `ship_name`, `call_sign`, `master_name`, `agent_name`, `vessel_movement`, `route`, `port_registry`, `charter`, `ship_file`, `tonnage_certificate`, `cargo_type`, `geared`, `qty_crane`, `SWL`, `last_port`, `next_port`, `ETA`, `ETD`, `cargo_loading`, `shipper`, `kind_cargo`, `qty`, `unit`, `stevedoring`, `loading_point`, `other_service`, `created_at`, `updated_at`) VALUES
(7, '0006/LLL.IDWED/PPKB/VIII/2025', '23133', 'HDR-6068', 'KP Marta Blue', '20', 'FERDIAN', 'MAS TRIA', 'Shifting Out', '3', 'WEDA', 'PT TIKI', '7_+nov,+pt+-+June+2023.pdf', '31-37+Perancangan+Sistem+Aplikasi+Penjualan+dan+Layanan+Jasa+Laundry+Sepatu+Berbasis+Website.pdf', 'Liquid Bulk', 'No', 20, 20, 'FILIPHINE', 'AUSTRIA', '2025-08-31 11:11:00', '2025-08-29 11:11:00', 'Loading', 'PT PNY', 'Liquid Bulk', 2, 2, 'JNE', 'Dock 1', '', '2025-08-24 05:34:16', '2025-08-24 05:34:16');

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
(4, '2313331', 'KP TIRTA AJI', '20', 'SORMAN', 'INDONESIA', '33', '288', 'JAWA', '8', '28', '399', '20', '2025-08-24 04:39:16', '2025-08-24 04:39:16');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IMO` (`IMO`);

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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_transaksi`
--
ALTER TABLE `kategori_transaksi`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ppkb`
--
ALTER TABLE `ppkb`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
