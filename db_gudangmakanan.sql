-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 12:20 PM
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
-- Database: `db_gudangmakanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int NOT NULL,
  `Nama_Admin` varchar(20) NOT NULL,
  `No_telepon` int NOT NULL,
  `Alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_Barang` int NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `Harga_Barang` int NOT NULL,
  `Berat_Barang` int NOT NULL,
  `Id_Gudang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `Id_Gudang` int NOT NULL,
  `Jenis_Gudang` varchar(20) NOT NULL,
  `Alamat_Gudang` varchar(20) NOT NULL,
  `Harga_Barang` int NOT NULL,
  `Id_Stok_Barang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Id_Jadwal` int NOT NULL,
  `Id_Pengirman` int NOT NULL,
  `Jumlah_Barang` int NOT NULL,
  `Lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `Id_Outlet` int NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `No_Telepon` int NOT NULL,
  `Id_Barang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Id_Pegawai` int NOT NULL,
  `Nama_Pegawai` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `No_Telepon` int NOT NULL,
  `Id_Supir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `Id_Pengiriman` int NOT NULL,
  `Berat_Muatan` int NOT NULL,
  `Id_Truk` int NOT NULL,
  `Id_Pegawai` int NOT NULL,
  `Id_Barang` int NOT NULL,
  `Id_Jadwal` int NOT NULL,
  `Id_Rute` int NOT NULL,
  `Id_Supir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `Id_Rute` int NOT NULL,
  `Jarak` int NOT NULL,
  `Id_Pengiriman` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `Id_Stok_Barang` int NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `Jumlah_Barang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `Id_Supir` int NOT NULL,
  `Nama_Supir` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `No_Telepon` varchar(20) NOT NULL,
  `Id_Pegawai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `truk`
--

CREATE TABLE `truk` (
  `Id_Truk` int NOT NULL,
  `Merek_Truk` varchar(20) NOT NULL,
  `No_Polisi` int NOT NULL,
  `Berat_Muatan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int NOT NULL,
  `Id_Outlet` int NOT NULL,
  `Id_Pegawai` int NOT NULL,
  `Id_Admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_Barang`),
  ADD KEY `Id_Gudang` (`Id_Gudang`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`Id_Gudang`),
  ADD KEY `Id_Stok_Barang` (`Id_Stok_Barang`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `Id_Pengirman` (`Id_Pengirman`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`Id_Outlet`),
  ADD KEY `Id_Barang` (`Id_Barang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`Id_Pegawai`),
  ADD KEY `Id_Supir` (`Id_Supir`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`Id_Pengiriman`),
  ADD KEY `Id_Truk` (`Id_Truk`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`),
  ADD KEY `Id_Barang` (`Id_Barang`),
  ADD KEY `Id_Jadwal` (`Id_Jadwal`),
  ADD KEY `Id_Rute` (`Id_Rute`),
  ADD KEY `Id_Supir` (`Id_Supir`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`Id_Rute`),
  ADD KEY `Id_Pengiriman` (`Id_Pengiriman`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`Id_Stok_Barang`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`Id_Supir`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`);

--
-- Indexes for table `truk`
--
ALTER TABLE `truk`
  ADD PRIMARY KEY (`Id_Truk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `Id_Outlet` (`Id_Outlet`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`),
  ADD KEY `Id_Admin` (`Id_Admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Id_Gudang`) REFERENCES `gudang` (`Id_Gudang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `gudang_ibfk_1` FOREIGN KEY (`Id_Stok_Barang`) REFERENCES `stok_barang` (`Id_Stok_Barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`Id_Pengirman`) REFERENCES `pengiriman` (`Id_Pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outlet`
--
ALTER TABLE `outlet`
  ADD CONSTRAINT `outlet_ibfk_1` FOREIGN KEY (`Id_Barang`) REFERENCES `barang` (`Id_Barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`Id_Supir`) REFERENCES `supir` (`Id_Supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`Id_Truk`) REFERENCES `truk` (`Id_Truk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`Id_Pegawai`) REFERENCES `pegawai` (`Id_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_3` FOREIGN KEY (`Id_Barang`) REFERENCES `barang` (`Id_Barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_4` FOREIGN KEY (`Id_Jadwal`) REFERENCES `jadwal` (`Id_Jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_5` FOREIGN KEY (`Id_Rute`) REFERENCES `rute` (`Id_Rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_6` FOREIGN KEY (`Id_Supir`) REFERENCES `supir` (`Id_Supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`Id_Pengiriman`) REFERENCES `pengiriman` (`Id_Pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supir`
--
ALTER TABLE `supir`
  ADD CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`Id_Pegawai`) REFERENCES `pegawai` (`Id_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Id_Outlet`) REFERENCES `outlet` (`Id_Outlet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`Id_Pegawai`) REFERENCES `pegawai` (`Id_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
