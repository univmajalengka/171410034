-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 08:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_dan_persediaan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `Kode_Barang` varchar(5) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Harga_Barang` int(15) NOT NULL,
  `Jumlah_Barang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`Kode_Barang`, `Nama_Barang`, `Harga_Barang`, `Jumlah_Barang`) VALUES
('00001', 'samsung s1', 2100000, 20),
('00002', 'samsung s2', 2200000, 20),
('00003', 'samsung s3', 2300000, 20),
('00004', 'samsung s4', 2400000, 20),
('00005', 'samsung s5', 2500000, 20),
('00006', 'samsung s6', 2600000, 20),
('00007', 'samsung s7', 2700000, 20),
('00008', 'samsung s8', 2800000, 20),
('00009', 'samsung s9', 2900000, 20),
('00010', 'samsung j1', 1200000, 20),
('1', '2', 3, 4),
('2', 'test', 34000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detailjual`
--

CREATE TABLE `tabel_detailjual` (
  `Faktur` varchar(10) NOT NULL,
  `Kode_Barang` varchar(5) NOT NULL,
  `Jml_Jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_detailjual`
--

INSERT INTO `tabel_detailjual` (`Faktur`, `Kode_Barang`, `Jml_Jual`) VALUES
('1', '2', 3),
('903190001', '00003', 4),
('903190002', '00005', 1),
('903190003', '00007', 3),
('903190004', '00005', 2),
('903190005', '00002', 5),
('903190006', '00001', 2),
('903190007', '00002', 3),
('903190008', '00003', 2),
('903190009', '00008', 1),
('903190010', '00009', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kasir`
--

CREATE TABLE `tabel_kasir` (
  `Kode_Kasir` varchar(5) NOT NULL,
  `Nama_Kasir` varchar(50) NOT NULL,
  `Password_Kasir` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kasir`
--

INSERT INTO `tabel_kasir` (`Kode_Kasir`, `Nama_Kasir`, `Password_Kasir`) VALUES
('', '', ''),
('ks001', 'citra', '654321'),
('ks002', 'devi', '654321'),
('ks003', 'nur', '654321'),
('ks004', 'mala', '654321'),
('ks005', 'firman', '654321'),
('ks006', 'prayoga', '654321'),
('ks007', 'yoga', '654321'),
('ks008', 'aku', '654321'),
('ks009', 'kamu', '654321'),
('ks010', 'kita', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `no_penjualan` varchar(5) NOT NULL,
  `Faktur` varchar(10) NOT NULL,
  `Tanggal_jam` datetime NOT NULL,
  `Jml_Harga` int(11) NOT NULL,
  `Kode_Kasir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`no_penjualan`, `Faktur`, `Tanggal_jam`, `Jml_Harga`, `Kode_Kasir`) VALUES
('12002', '903190002', '2019-03-09 05:21:24', 5300000, 'ks001'),
('12003', '903190002', '2019-03-09 05:21:24', 5300000, 'ks002'),
('12004', '903190002', '2019-03-09 05:21:24', 5300000, 'ks003'),
('12005', '903190002', '2019-03-09 05:21:24', 5300000, 'ks004'),
('12006', '903190002', '2019-03-09 05:21:24', 5300000, 'ks005'),
('12007', '903190002', '2019-03-09 05:21:24', 5300000, 'ks006'),
('12008', '903190002', '2019-03-09 05:21:24', 5300000, 'ks007'),
('12009', '903190002', '2019-03-09 05:21:24', 5300000, 'ks008'),
('12010', '903190002', '2019-03-09 05:21:24', 5300000, 'ks009'),
('12011', '903190002', '2019-03-09 05:21:24', 5300000, 'ks010');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksidetailjual`
--

CREATE TABLE `tabel_transaksidetailjual` (
  `no_transaksi` int(11) NOT NULL,
  `Kode_Barang` varchar(5) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total_harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_transaksidetailjual`
--

INSERT INTO `tabel_transaksidetailjual` (`no_transaksi`, `Kode_Barang`, `jumlah_barang`, `total_harga`) VALUES
(1, '00008', 5, 4000000),
(2, '00003', 5, 5000000),
(3, '00004', 6, 6000000),
(4, '00005', 6, 7000000),
(5, '00006', 7, 3000000),
(6, '00007', 3, 5000000),
(7, '00008', 5, 2000000),
(8, '00009', 5, 5000000),
(9, '00010', 5, 6000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- Indexes for table `tabel_detailjual`
--
ALTER TABLE `tabel_detailjual`
  ADD PRIMARY KEY (`Faktur`),
  ADD KEY `Kode_Barang` (`Kode_Barang`);

--
-- Indexes for table `tabel_kasir`
--
ALTER TABLE `tabel_kasir`
  ADD PRIMARY KEY (`Kode_Kasir`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`no_penjualan`),
  ADD KEY `Faktur` (`Faktur`),
  ADD KEY `Kode_Kasir` (`Kode_Kasir`),
  ADD KEY `Kode_Kasir_2` (`Kode_Kasir`),
  ADD KEY `Kode_Kasir_3` (`Kode_Kasir`),
  ADD KEY `Kode_Kasir_4` (`Kode_Kasir`);

--
-- Indexes for table `tabel_transaksidetailjual`
--
ALTER TABLE `tabel_transaksidetailjual`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `Kode_Barang` (`Kode_Barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_detailjual`
--
ALTER TABLE `tabel_detailjual`
  ADD CONSTRAINT `tabel_detailjual_ibfk_1` FOREIGN KEY (`Kode_Barang`) REFERENCES `tabel_barang` (`Kode_Barang`);

--
-- Constraints for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD CONSTRAINT `fk2_penjualan` FOREIGN KEY (`Kode_Kasir`) REFERENCES `tabel_kasir` (`Kode_Kasir`),
  ADD CONSTRAINT `tabel_penjualan_ibfk_1` FOREIGN KEY (`Faktur`) REFERENCES `tabel_detailjual` (`Faktur`);

--
-- Constraints for table `tabel_transaksidetailjual`
--
ALTER TABLE `tabel_transaksidetailjual`
  ADD CONSTRAINT `tabel_transaksidetailjual_ibfk_1` FOREIGN KEY (`Kode_Barang`) REFERENCES `tabel_barang` (`Kode_Barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
