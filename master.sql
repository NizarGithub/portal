-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 05:53 AM
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
(1, 'jabar'),
(2, 'jateng');

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
  `kodeapp` int(5) DEFAULT NULL,
  `namagi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gi`
--

INSERT INTO `gi` (`kodegi`, `kodeapp`, `namagi`) VALUES
(1, 2, 'GI 150KV BANDUNG SELATAN'),
(2, 2, 'GI 70KV BANDUNG TIMUR'),
(3, 2, 'GI 150KV BANDUNG UTARA'),
(4, 2, 'GI 70KV BENGKOK'),
(5, 2, 'GI 150KV CIANJUR'),
(6, 2, 'GI 150KV CIBEUREUM BARU'),
(7, 2, 'GI 150KV CIGERELENG'),
(8, 2, 'GI 70KV CIKALONG'),
(9, 2, 'GI 150KV CIKASUNGKA'),
(10, 2, 'GI 150KV DAGOPAKAR'),
(11, 2, 'GI 150KV LAGADAR'),
(12, 2, 'GI 70KV LAMAJAN'),
(13, 2, 'GI 70KV MAJALAYA'),
(14, 2, 'GI 150KV PADALARANGBARU'),
(15, 2, 'GI 150KV PANASIA'),
(16, 2, 'GI 30KV PLENGAN'),
(17, 2, 'GI 150KV RANCAEKEK'),
(18, 2, 'GI 150KV RANCAKASUMBA'),
(19, 2, 'GI 70KV SANTOSA'),
(20, 2, 'GI 70KV SUMEDANG'),
(21, 2, 'GI 150KV UJUNGBERUNG'),
(22, 2, 'GI 150KV WAYANGWINDU'),
(23, 2, 'GIS 150KV CIBABAT'),
(24, 2, 'GIS 150KV KIARACONDONG'),
(25, 2, 'GI 150KV PATUHA'),
(26, 2, 'GIS 150KV CIBABAT BARU'),
(27, 2, 'GI 150KV NEW RANCAKASUMBA'),
(28, 2, 'GIS 150KV BRAGA'),
(29, 2, 'GI 150KV PANASIA'),
(32, 1, 'Bogor Baru'),
(33, 1, 'Cibinong'),
(34, 1, 'Cileungsi 70 kV'),
(35, 1, 'Kedung Badak'),
(36, 1, 'Bunar'),
(37, 1, 'Kracak'),
(38, 1, 'Ciawi'),
(39, 1, 'Cibadak Baru'),
(40, 1, 'Lembur Situ'),
(41, 1, 'Pelabuhan Ratu'),
(42, 1, 'GIS Pelabuhan Ratu'),
(43, 1, 'Sentul'),
(44, 1, 'Semen Baru'),
(45, 1, 'ITP'),
(46, 1, 'ASPEK 70kV'),
(47, 1, 'Semen Baru 150kV '),
(48, 1, 'Semen Lama 70kV');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(100) DEFAULT NULL,
  `kodelogin` int(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `tgldaftar` date DEFAULT NULL,
  `kodebidang` int(5) DEFAULT NULL,
  `kodeapp` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nama`, `kodelogin`, `email`, `password`, `userid`, `tgldaftar`, `kodebidang`, `kodeapp`) VALUES
('Administrator', 1, 'admin@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', 'admingi', NULL, 1, 2),
('Administrator 1', 2, 'admin1@pln.co.id', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 1, 1);

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
(39, 1, 3, '2017-08-08 13:17:59');

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
(4, 1, 4, NULL),
(5, 1, 5, NULL),
(6, 1, 6, NULL),
(7, 2, 1, 'aktif'),
(8, 2, 2, NULL),
(9, 2, 3, 'aktif'),
(10, 2, 4, NULL),
(11, 2, 5, NULL),
(12, 2, 6, NULL);

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
  MODIFY `kodelogin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loglogin`
--
ALTER TABLE `loglogin`
  MODIFY `kodelog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `userakses`
--
ALTER TABLE `userakses`
  MODIFY `kodeakses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
