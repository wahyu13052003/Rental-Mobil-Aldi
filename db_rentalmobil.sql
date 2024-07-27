-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 04:27 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `tlp_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` enum('admin','pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`kd_admin`, `nama_admin`, `tlp_admin`, `username`, `password`, `level`) VALUES
('1', 'Rizky Fathurahman', '085659456197', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('2', 'bule', '08283753257', 'pemilik', '58399557dae3c60e23c78606771dfa3d', 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `tbcostumer`
--

CREATE TABLE `tbcostumer` (
  `kd_cs` int(10) NOT NULL,
  `nama_cs` varchar(50) NOT NULL,
  `kelamin_cs` varchar(20) NOT NULL,
  `alamat_cs` varchar(20) NOT NULL,
  `tlp_cs` varchar(20) NOT NULL,
  `username_cs` varchar(20) NOT NULL,
  `password_cs` varchar(300) NOT NULL,
  `level_cs` enum('user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcostumer`
--

INSERT INTO `tbcostumer` (`kd_cs`, `nama_cs`, `kelamin_cs`, `alamat_cs`, `tlp_cs`, `username_cs`, `password_cs`, `level_cs`) VALUES
(1, 'rizky', 'Laki-Laki', 'Kp. Karajeun II', '085659456197', 'rizky', '49d8712dd6ac9c3745d53cd4be48284c', 'user'),
(2, 'bule', 'Laki-Laki', 'kaswari', '989829352', 'bule', '90043f6fdf95e16dc1c5d43cb4f501e7', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailsewa`
--

CREATE TABLE `tbdetailsewa` (
  `kd_detail` varchar(20) NOT NULL,
  `kd_cs` varchar(20) NOT NULL,
  `kd_sewa` varchar(20) NOT NULL,
  `kd_sopir` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdetailsewa`
--

INSERT INTO `tbdetailsewa` (`kd_detail`, `kd_cs`, `kd_sewa`, `kd_sopir`, `total_harga`, `ket`) VALUES
('D01', '1', 'W01', 'S01', '1000000', 'Sudah di Konfirmasi'),
('D02', '2', 'W02', 'S03', '1470000', 'Belum di Konfirmasi'),
('D03', '1', 'W03', 'S02', '1150000', 'Belum di Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbmerk`
--

CREATE TABLE `tbmerk` (
  `kd_merk` varchar(10) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmerk`
--

INSERT INTO `tbmerk` (`kd_merk`, `merk_mobil`, `jenis_mobil`) VALUES
('K01', 'Toyota', 'Avanza'),
('K02', 'Honda', 'CRV'),
('K03', 'Honda', 'HRV'),
('K04', 'Toyota', 'Alphard'),
('K05', 'Toyota', 'Fortuner'),
('K06', 'Toyota', 'Rush'),
('K07', 'honda', 'hrv'),
('K08', 'Daihatsu', 'Xenia');

-- --------------------------------------------------------

--
-- Table structure for table `tbmobil`
--

CREATE TABLE `tbmobil` (
  `no_polisi` varchar(20) NOT NULL,
  `kd_merk` varchar(10) NOT NULL,
  `foto_mobil` varchar(300) NOT NULL,
  `tarif_mobil` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmobil`
--

INSERT INTO `tbmobil` (`no_polisi`, `kd_merk`, `foto_mobil`, `tarif_mobil`, `keterangan`, `status`) VALUES
('F 12345 OP', 'K01', '2018-02-17-toyota avanza.jpg', '300000', 'Bagus', 'Tersedia'),
('F 2300 MN', 'K06', '2018-02-17-toyota rush.jpg', '500000', 'Bagus', 'Tersedia'),
('F 7543 LA', 'K04', '2018-02-17-toyota alphard.jpg', '700000', 'Bagus', 'Tidak Tersedia'),
('F 7591 AB', 'K05', '2018-02-17-toyota fortuner.jpg', '550000', 'Bagus', 'Tidak Tersedia'),
('F 7629 KI', 'K02', '2018-02-17-honda crv.jpg', '450000', 'Bagus', 'Tidak Tersedia'),
('F 9021 BI', 'K03', '2018-02-17-honda hrv.jpg', '500000', 'Bagus', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbsewa`
--

CREATE TABLE `tbsewa` (
  `kd_sewa` varchar(10) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsewa`
--

INSERT INTO `tbsewa` (`kd_sewa`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `total_sewa`) VALUES
('W01', 'F 7629 KI', '2018-02-01', '2018-02-03', '900000'),
('W02', 'F 7543 LA', '2018-03-01', '2018-03-03', '1400000'),
('W03', 'F 7591 AB', '2018-02-20', '2018-02-22', '1100000');

-- --------------------------------------------------------

--
-- Table structure for table `tbsopir`
--

CREATE TABLE `tbsopir` (
  `kd_sopir` varchar(20) NOT NULL,
  `nama_sopir` varchar(20) NOT NULL,
  `kelamin_sopir` varchar(20) NOT NULL,
  `umur_sopir` varchar(10) NOT NULL,
  `tlp_sopir` varchar(30) NOT NULL,
  `alamat_sopir` varchar(100) NOT NULL,
  `tarif_sopir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsopir`
--

INSERT INTO `tbsopir` (`kd_sopir`, `nama_sopir`, `kelamin_sopir`, `umur_sopir`, `tlp_sopir`, `alamat_sopir`, `tarif_sopir`) VALUES
('S01', 'Qodir', 'Laki - Laki', '25 Tahun', '085676548091', 'Kp. Rambutan Aceh Tapi Manis', '100000'),
('S02', 'Wan Qodir', 'Laki - Laki', '30 Tahun', '089076543287', 'Kp. Tipar Gede', '50000'),
('S03', 'Dewi Yuli Dew', 'Perempuan', '26', '098056743021', 'Kp. Legok Hangser', '70000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tbcostumer`
--
ALTER TABLE `tbcostumer`
  ADD PRIMARY KEY (`kd_cs`);

--
-- Indexes for table `tbmobil`
--
ALTER TABLE `tbmobil`
  ADD PRIMARY KEY (`no_polisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcostumer`
--
ALTER TABLE `tbcostumer`
  MODIFY `kd_cs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
