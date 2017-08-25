-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 11:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master`
--

-- --------------------------------------------------------

--
-- Table structure for table `apd`
--

CREATE TABLE `apd` (
  `kodeapd` int(5) NOT NULL,
  `namaapd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apd`
--

INSERT INTO `apd` (`kodeapd`, `namaapd`) VALUES
(1, 'APD JABAR'),
(2, 'APD JATENG');

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `kodeaplikasi` int(5) NOT NULL,
  `namaaplikasi` varchar(100) DEFAULT NULL,
  `alamataplikasi` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`kodeaplikasi`, `namaaplikasi`, `alamataplikasi`, `images`) VALUES
(1, 'SIAPP', 'http://localhost/siapp/index.php?dashboard', 'thumb7.jpg'),
(2, 'Arsip Online', 'http://localhost/arsip-online/index.php?dashboard', 'thumb7.jpg'),
(3, 'TSA', 'http://localhost/tsa', 'thumb7.jpg'),
(4, 'APAR', 'http://localhost/apar', 'thumb7.jpg'),
(5, 'Kebakaran', 'http://localhost/kebakaran', 'thumb7.jpg'),
(6, 'Anggaran', 'http://localhost/anggaran', 'thumb7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `kodeapp` int(5) NOT NULL,
  `kodeapd` int(5) DEFAULT NULL,
  `namaapp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`kodeapp`, `kodeapd`, `namaapp`) VALUES
(1, 1, 'APP Bogor'),
(2, 1, 'APP Bandung'),
(3, 1, 'APP Karawang'),
(4, 2, 'APP Purwokerto'),
(5, 2, 'APP Salatiga'),
(6, 2, 'APP Semarang'),
(7, 1, 'APP Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `kodebidang` int(5) NOT NULL,
  `namabidang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`kodebidang`, `namabidang`) VALUES
(1, 'PERENCANAAN PENGUSAHAAN & IT'),
(2, 'ENJINEERING'),
(3, 'MANAJEMEN ASET'),
(4, 'LK2');

-- --------------------------------------------------------

--
-- Table structure for table `gi`
--

CREATE TABLE `gi` (
  `kodegi` int(5) NOT NULL,
  `kodeapd` int(5) DEFAULT NULL,
  `kodeapp` int(5) DEFAULT NULL,
  `namagi` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gi`
--

INSERT INTO `gi` (`kodegi`, `kodeapd`, `kodeapp`, `namagi`, `alamat`) VALUES
(1, 1, 2, '150KV BANDUNG SELATAN', NULL),
(2, 1, 2, '70KV BANDUNG TIMUR', NULL),
(3, 1, 2, '150KV BANDUNG UTARA', NULL),
(4, 1, 2, '70KV BENGKOK', NULL),
(5, 1, 2, '150KV CIANJUR', NULL),
(6, 1, 2, '150KV CIBEUREUM BARU', NULL),
(7, 1, 2, '150KV CIGERELENG', NULL),
(8, 1, 2, '70KV CIKALONG', NULL),
(9, 1, 2, '150KV CIKASUNGKA', NULL),
(10, 1, 2, '150KV DAGOPAKAR', NULL),
(11, 1, 2, '150KV LAGADAR', NULL),
(12, 1, 2, '70KV LAMAJAN', NULL),
(13, 1, 2, '70KV MAJALAYA', NULL),
(14, 1, 2, '150KV PADALARANGBARU', NULL),
(15, 1, 2, '150KV PANASIA', NULL),
(16, 1, 2, '30KV PLENGAN', NULL),
(17, 1, 2, '150KV RANCAEKEK', NULL),
(18, 1, 2, '150KV RANCAKASUMBA', NULL),
(19, 1, 2, '70KV SANTOSA', NULL),
(20, 1, 2, '70KV SUMEDANG', NULL),
(21, 1, 2, '150KV UJUNGBERUNG', NULL),
(22, 1, 2, '150KV WAYANGWINDU', NULL),
(23, 1, 2, '150KV CIBABAT', NULL),
(24, 1, 2, '150KV KIARACONDONG', NULL),
(25, 1, 2, '150KV PATUHA', NULL),
(26, 1, 2, '150KV CIBABAT BARU', NULL),
(27, 1, 2, '150KV NEW RANCAKASUMBA', NULL),
(28, 1, 2, '150KV BRAGA', NULL),
(29, 1, 2, '150KV PANASIA', NULL),
(32, 1, 1, 'Bogor Baru', NULL),
(33, 1, 1, 'Cibinong', NULL),
(34, 1, 1, 'Cileungsi 70 kV', NULL),
(35, 1, 1, 'Kedung Badak', NULL),
(36, 1, 1, 'Bunar', NULL),
(37, 1, 1, 'Kracak', NULL),
(38, 1, 1, 'Ciawi', NULL),
(39, 1, 1, 'Cibadak Baru', NULL),
(40, 1, 1, 'Lembur Situ', NULL),
(41, 1, 1, 'Pelabuhan Ratu', NULL),
(42, 1, 1, 'GIS Pelabuhan Ratu', NULL),
(43, 1, 1, 'Sentul', NULL),
(44, 1, 1, 'Semen Baru', NULL),
(45, 1, 1, 'ITP', NULL),
(46, 1, 1, 'ASPEK 70kV', NULL),
(47, 1, 1, 'Semen Baru 150kV ', NULL),
(48, 1, 1, 'Semen Lama 70kV', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kodelogin` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `jenisuser` varchar(100) DEFAULT NULL,
  `tgldaftar` date DEFAULT NULL,
  `kodeapd` int(5) DEFAULT NULL,
  `kodeapp` int(5) DEFAULT NULL,
  `kodegi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kodelogin`, `nama`, `email`, `password`, `level`, `jenisuser`, `tgldaftar`, `kodeapd`, `kodeapp`, `kodegi`) VALUES
(1, 'Administrator', 'admin@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', 'administrator', NULL, NULL, 2, NULL),
(2, 'Admin GI', 'admin.gi@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'user', 'gi', NULL, 1, 2, 1),
(3, 'Admin APP', 'admin.app@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'user', 'app', NULL, 1, 2, NULL),
(4, 'Admin APD', 'admin.apd@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'user', 'apd', NULL, 1, NULL, NULL),
(5, 'Admin KI', 'admin.ki@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'user', 'ki', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loglogin`
--

CREATE TABLE `loglogin` (
  `kodelog` int(5) NOT NULL,
  `kodelogin` int(5) DEFAULT NULL,
  `kodeaplikasi` int(5) DEFAULT NULL,
  `tgllogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loglogin`
--

INSERT INTO `loglogin` (`kodelog`, `kodelogin`, `kodeaplikasi`, `tgllogin`) VALUES
(11, 1, 1, '2017-07-18 15:17:25'),
(12, 1, 1, '2017-07-18 15:19:45'),
(13, 1, 2, '2017-07-18 15:20:00'),
(14, 1, 1, '2017-07-19 09:34:42'),
(15, 2, 1, '2017-07-19 09:45:00'),
(16, 2, 1, '2017-07-19 09:45:04'),
(17, 2, 1, '2017-07-19 10:00:40'),
(18, 1, 0, '0000-00-00 00:00:00'),
(19, 1, 0, '0000-00-00 00:00:00'),
(20, 1, 1, '2017-07-19 16:34:16'),
(21, 1, 2, '2017-07-19 17:28:13'),
(22, 1, 1, '2017-07-19 17:28:18'),
(23, 1, 2, '2017-07-19 17:28:23'),
(24, 1, 2, '2017-07-19 17:29:01'),
(25, 1, 3, '2017-07-31 10:51:08'),
(26, 1, 3, '2017-08-01 09:29:43'),
(27, 1, 3, '2017-08-01 09:30:23'),
(28, 1, 3, '2017-08-01 09:30:48'),
(29, 1, 3, '2017-08-07 12:00:19'),
(30, 1, 3, '2017-08-07 14:17:29'),
(31, 1, 3, '2017-08-07 14:20:48'),
(32, 1, 3, '2017-08-07 14:34:54'),
(33, 1, 3, '2017-08-07 15:03:21'),
(34, 1, 3, '2017-08-07 16:18:24'),
(35, 1, 3, '2017-08-07 17:15:50'),
(36, 1, 3, '2017-08-08 09:08:33'),
(37, 1, 3, '2017-08-08 10:08:32'),
(38, 1, 3, '2017-08-08 12:00:25'),
(39, 1, 3, '2017-08-08 13:17:59'),
(40, 1, 3, '2017-08-09 14:21:42'),
(41, 2, 3, '2017-08-11 14:59:04'),
(42, 2, 3, '2017-08-11 15:49:17'),
(43, 3, 3, '2017-08-14 08:54:21'),
(44, 3, 3, '2017-08-14 09:01:49'),
(45, 3, 3, '2017-08-14 09:03:30'),
(46, 2, 3, '2017-08-14 09:11:28'),
(47, 2, 3, '2017-08-14 09:13:11'),
(48, 3, 3, '2017-08-14 09:20:50'),
(49, 2, 3, '2017-08-14 09:21:39'),
(50, 2, 3, '2017-08-14 10:01:28'),
(51, 3, 3, '2017-08-14 10:01:55'),
(52, 2, 3, '2017-08-14 10:17:15'),
(53, 2, 3, '2017-08-14 10:29:46'),
(54, 3, 3, '2017-08-14 10:30:37'),
(55, 2, 3, '2017-08-15 08:38:48'),
(56, 3, 3, '2017-08-15 09:55:07'),
(57, 3, 3, '2017-08-15 09:56:43'),
(58, 2, 3, '2017-08-15 11:40:13'),
(59, 3, 3, '2017-08-15 11:44:02'),
(60, 2, 3, '2017-08-16 10:52:57'),
(61, 3, 3, '2017-08-16 10:53:11'),
(62, 4, 3, '2017-08-25 08:28:52'),
(63, 2, 3, '2017-08-25 09:32:32'),
(64, 3, 3, '2017-08-25 09:33:12'),
(65, 3, 3, '2017-08-25 09:50:38'),
(66, 4, 3, '2017-08-25 10:20:27'),
(67, 2, 3, '2017-08-25 10:31:00'),
(68, 4, 3, '2017-08-25 11:31:22'),
(69, 2, 3, '2017-08-25 14:50:42'),
(70, 2, 3, '2017-08-25 14:53:49'),
(71, 3, 3, '2017-08-25 14:54:00'),
(72, 5, 3, '2017-08-25 16:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `trafo`
--

CREATE TABLE `trafo` (
  `kodetrafo` int(5) NOT NULL,
  `kodeapd` int(5) DEFAULT NULL,
  `kodeapp` int(5) DEFAULT NULL,
  `kodegi` int(5) DEFAULT NULL,
  `nomortrafo` varchar(100) DEFAULT NULL,
  `mvaterpasang` varchar(100) DEFAULT NULL,
  `mvadeklarasi` varchar(100) DEFAULT NULL,
  `realisasimvadeklarasi` varchar(100) DEFAULT NULL,
  `statustrafo` varchar(100) DEFAULT NULL,
  `statusapprove` int(5) DEFAULT NULL,
  `bulanapprove` varchar(100) DEFAULT NULL,
  `tahunapprove` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trafo`
--

INSERT INTO `trafo` (`kodetrafo`, `kodeapd`, `kodeapp`, `kodegi`, `nomortrafo`, `mvaterpasang`, `mvadeklarasi`, `realisasimvadeklarasi`, `statustrafo`, `statusapprove`, `bulanapprove`, `tahunapprove`) VALUES
(1, 1, 2, 1, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(2, 1, 2, 1, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(3, 1, 2, 1, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(4, 1, 2, 1, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(5, 1, 2, 2, '1', '30.00', '13.80', NULL, 'aktif', NULL, NULL, NULL),
(6, 1, 2, 2, '2', '30.00', '13.80', NULL, 'aktif', NULL, NULL, NULL),
(7, 1, 2, 2, '3', '30.00', '30.00', NULL, 'aktif', NULL, NULL, NULL),
(8, 1, 2, 3, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(9, 1, 2, 3, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(10, 1, 2, 3, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(11, 1, 2, 3, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(12, 1, 2, 3, '5', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(13, 1, 2, 4, '1', '5.00', '5.00', NULL, 'aktif', NULL, NULL, NULL),
(14, 1, 2, 4, '2', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(15, 1, 2, 5, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(16, 1, 2, 5, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(17, 1, 2, 5, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(18, 1, 2, 5, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(19, 1, 2, 5, '5', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(20, 1, 2, 6, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(21, 1, 2, 6, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(22, 1, 2, 7, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(23, 1, 2, 7, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(24, 1, 2, 7, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(25, 1, 2, 7, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(26, 1, 2, 7, '5', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(27, 1, 2, 7, '6', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(28, 1, 2, 7, '7', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(29, 1, 2, 7, '8', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(30, 1, 2, 7, '9', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(31, 1, 2, 7, '10', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(32, 1, 2, 8, '1', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(33, 1, 2, 8, '2', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(34, 1, 2, 9, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(35, 1, 2, 9, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(36, 1, 2, 9, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(37, 1, 2, 10, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(38, 1, 2, 10, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(39, 1, 2, 11, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(40, 1, 2, 11, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(41, 1, 2, 11, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(42, 1, 2, 11, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(43, 1, 2, 12, '1', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(44, 1, 2, 12, '2', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(45, 1, 2, 12, '3', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(46, 1, 2, 12, '4', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(47, 1, 2, 13, '1', '20.00', '20.00', NULL, 'aktif', NULL, NULL, NULL),
(48, 1, 2, 13, '2', '20.00', '20.00', NULL, 'aktif', NULL, NULL, NULL),
(49, 1, 2, 13, '3', '30.00', '30.00', NULL, 'aktif', NULL, NULL, NULL),
(50, 1, 2, 14, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(51, 1, 2, 14, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(52, 1, 2, 14, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(53, 1, 2, 14, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(54, 1, 2, 15, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(55, 1, 2, 16, '1', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(56, 1, 2, 16, '2', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(57, 1, 2, 16, '3', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(58, 1, 2, 16, '4', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(59, 1, 2, 16, '5', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(60, 1, 2, 16, '6', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL),
(61, 1, 2, 17, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(62, 1, 2, 17, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(63, 1, 2, 17, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(64, 1, 2, 17, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(65, 1, 2, 18, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(66, 1, 2, 18, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(67, 1, 2, 18, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(68, 1, 2, 19, '1', '20.00', '20.00', NULL, 'aktif', NULL, NULL, NULL),
(69, 1, 2, 20, '1', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(70, 1, 2, 20, '2', '10.00', '10.00', NULL, 'aktif', NULL, NULL, NULL),
(71, 1, 2, 20, '3', '30.00', '30.00', NULL, 'aktif', NULL, NULL, NULL),
(72, 1, 2, 20, '4', '30.00', '30.00', NULL, 'aktif', NULL, NULL, NULL),
(73, 1, 2, 21, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(74, 1, 2, 21, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(75, 1, 2, 21, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(76, 1, 2, 21, '4', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(77, 1, 2, 21, '5', '60.00', '48.40', NULL, 'aktif', NULL, NULL, NULL),
(78, 1, 2, 21, '6', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(79, 1, 2, 22, '1', '100.00', '100.00', NULL, 'aktif', NULL, NULL, NULL),
(80, 1, 2, 23, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(81, 1, 2, 23, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(82, 1, 2, 23, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(83, 1, 2, 24, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(84, 1, 2, 24, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(85, 1, 2, 24, '3', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(86, 1, 2, 25, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(87, 1, 2, 26, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(88, 1, 2, 26, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(89, 1, 2, 27, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(90, 1, 2, 27, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(91, 1, 2, 28, '1', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(92, 1, 2, 28, '2', '60.00', '60.00', NULL, 'aktif', NULL, NULL, NULL),
(93, 1, 2, 29, 'KTT', NULL, NULL, NULL, 'aktif', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userakses`
--

CREATE TABLE `userakses` (
  `kodeakses` int(5) NOT NULL,
  `kodelogin` int(5) DEFAULT NULL,
  `kodeaplikasi` int(5) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userakses`
--

INSERT INTO `userakses` (`kodeakses`, `kodelogin`, `kodeaplikasi`, `status`) VALUES
(1, 1, 1, 'aktif'),
(2, 1, 2, 'aktif'),
(3, 1, 3, 'aktif'),
(4, 1, 4, 'nonaktif'),
(5, 1, 5, 'nonaktif'),
(6, 1, 6, 'nonaktif'),
(7, 2, 1, 'aktif'),
(8, 2, 2, 'nonaktif'),
(9, 2, 3, 'aktif'),
(10, 2, 4, 'nonaktif'),
(11, 2, 5, 'nonaktif'),
(12, 2, 6, 'nonaktif'),
(13, 3, 1, 'nonaktif'),
(14, 3, 2, 'nonaktif'),
(15, 3, 3, 'aktif'),
(16, 3, 4, 'nonaktif'),
(17, 3, 5, 'nonaktif'),
(18, 3, 6, 'nonaktif'),
(19, 3, 7, 'nonaktif'),
(20, 4, 1, 'aktif'),
(21, 4, 2, 'aktif'),
(22, 4, 3, 'aktif'),
(23, 4, 4, 'nonaktif'),
(24, 4, 5, 'nonaktif'),
(25, 4, 6, 'nonaktif'),
(26, 5, 1, 'aktif'),
(27, 5, 2, 'aktif'),
(28, 5, 3, 'aktif'),
(29, 5, 4, 'nonaktif'),
(30, 5, 5, 'nonaktif'),
(31, 5, 6, 'nonaktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apd`
--
ALTER TABLE `apd`
  ADD PRIMARY KEY (`kodeapd`);

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`kodeaplikasi`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`kodeapp`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`kodebidang`);

--
-- Indexes for table `gi`
--
ALTER TABLE `gi`
  ADD PRIMARY KEY (`kodegi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kodelogin`);

--
-- Indexes for table `loglogin`
--
ALTER TABLE `loglogin`
  ADD PRIMARY KEY (`kodelog`);

--
-- Indexes for table `trafo`
--
ALTER TABLE `trafo`
  ADD PRIMARY KEY (`kodetrafo`);

--
-- Indexes for table `userakses`
--
ALTER TABLE `userakses`
  ADD PRIMARY KEY (`kodeakses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apd`
--
ALTER TABLE `apd`
  MODIFY `kodeapd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `kodeaplikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `kodeapp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `kodebidang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gi`
--
ALTER TABLE `gi`
  MODIFY `kodegi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kodelogin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loglogin`
--
ALTER TABLE `loglogin`
  MODIFY `kodelog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `trafo`
--
ALTER TABLE `trafo`
  MODIFY `kodetrafo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `userakses`
--
ALTER TABLE `userakses`
  MODIFY `kodeakses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
