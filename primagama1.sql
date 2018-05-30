-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 02:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `primagama1`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `KdJadwal` varchar(8) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `KdBidangStudi` varchar(5) NOT NULL,
  `KdPengajar` varchar(5) NOT NULL,
  `Hari` varchar(8) NOT NULL,
  `Pukul` varchar(11) NOT NULL,
  `Ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`KdJadwal`, `Kelas`, `KdBidangStudi`, `KdPengajar`, `Hari`, `Pukul`, `Ruangan`) VALUES
('JM10-01', '10 IPA - 1', 'BS08', 'PG006', 'Senin', '19.00-21.00', 'Galileo'),
('JM10-02', '10 IPA - 1', 'BS05', 'PG002', 'Rabu', '19.00-21.00', 'Galileo'),
('JM10-03', '10 IPA - 1', 'BS06', 'PG003', 'Rabu', '19.00-21.00', 'Galileo'),
('JM10-04', '10 IPA - 1', 'BS05', 'PG002', 'Jumat', '19.00-21.00', 'Galileo'),
('JM10-05', '10 IPA - 1', 'BS01', 'PG001', 'Jumat', '19.00-21.00', 'Galileo'),
('JM10-06', '10 IPA - 1', 'BS07', 'PG016', 'Senin', '19.00-21.00', 'Galileo'),
('JM11-01', '11 IPA - 1', 'BS06', 'PG003', 'Selasa', '19.00-21.00', 'Galileo'),
('JM11-02', '11 IPA - 1', 'BS05', 'PG002', 'Selasa', '19.00-21.00', 'Galileo'),
('JM11-03', '11 IPA - 1', 'BS06', 'PG003', 'Kamis', '19.00-21.00', 'Galileo'),
('JM11-04', '11 IPA - 1', 'BS08', 'PG006', 'Kamis', '19.00-21.00', 'Galileo'),
('JM11-05', '11 IPA - 1', 'BS01', 'PG001', 'Sabtu', '16.30-18.30', 'Galileo'),
('JM11-06', '11 IPA - 1', 'BS07', 'PG016', 'Sabtu', '16.30-18.30', 'Galileo'),
('JMA12-01', '12 IPA - 1', 'BS06', 'PG003', 'Kamis', '19.00-21.00', 'Rontgent'),
('JMA12-02', '12 IPA - 1', 'BS05', 'PG002', 'Selasa', '19.00-21.00', 'Rontgent'),
('JMA12-03', '12 IPA - 1', 'BS08', 'PG006', 'Kamis', '19.00-21.00', 'Rontgent'),
('JMA12-04', '12 IPA - 1', 'BS07', 'PG016', 'Sabtu', '16.30-18.30', 'Rontgent'),
('JMA12-05', '12 IPA - 1', 'BS01', 'PG001', 'Sabtu', '16.30-18.30', 'Rontgent'),
('JMA12-06', '12 IPA - 1', 'BS02', 'PG004', 'Selasa', '19.00-21.00', 'Rontgent'),
('JMB12-01', '12 IPA - 2', 'BS08', 'PG006', 'Senin', '19.00-21.00', 'Euler'),
('JMB12-02', '12 IPA - 2', 'BS01', 'PG001', 'Senin', '19.00-21.00', 'Euler'),
('JMB12-03', '12 IPA - 2', 'BS05', 'PG002', 'Rabu', '19.00-21.00', 'Euler'),
('JMB12-04', '12 IPA - 2', 'BS07', 'PG016', 'Rabu', '19.00-21.00', 'Euler'),
('JMB12-05', '12 IPA - 2', 'BS02', 'PG004', 'Jumat', '19.00-21.00', 'Euler'),
('JMB12-06', '12 IPA - 2', 'BS06', 'PG003', 'Jumat', '19.00-21.00', 'Euler'),
('JMC12-01', '12 IPS', 'BS12', 'PG017', 'Sabtu', '16.30-18.30', 'Newton'),
('JMC12-02', '12 IPS', 'BS11', 'PG009', 'Selasa', '19.00-21.00', 'Newton'),
('JMC12-03', '12 IPS', 'BS01', 'PG001', 'Selasa', '19.00-21.00', 'Newton'),
('JMC12-04', '12 IPS', 'BS10', 'PG007', 'Kamis', '19.00-21.00', 'Newton'),
('JMC12-05', '12 IPS', 'BS05', 'PG002', 'Sabtu', '16.30-18.30', 'Newton');

-- --------------------------------------------------------

--
-- Table structure for table `paketbimbel`
--

CREATE TABLE IF NOT EXISTS `paketbimbel` (
  `KdPaket` varchar(4) NOT NULL,
  `NamaPaket` varchar(40) NOT NULL,
  `KapasitasKelas` int(2) NOT NULL,
  `JenisSiswa` varchar(20) NOT NULL,
  `HargaAwal` varchar(13) NOT NULL,
  `Angsuran5x` varchar(13) NOT NULL,
  `TunaiDiskon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paketbimbel`
--

INSERT INTO `paketbimbel` (`KdPaket`, `NamaPaket`, `KapasitasKelas`, `JenisSiswa`, `HargaAwal`, `Angsuran5x`, `TunaiDiskon`) VALUES
('PK01', 'Reguler 3, 4 SD', 20, 'Baru', 'Rp4.650.000', 'Rp3.750.000', 'Rp3.250.000'),
('PK02', 'Reguler 3, 4 SD', 20, 'Lanjutan', 'Rp4.650.000', 'Rp3.550.000', 'Rp3.050.000'),
('PK03', 'Reguler 5, 6 SD', 20, 'Baru', 'Rp5.450.000', 'Rp4.550.000', 'Rp4.050.000'),
('PK04', 'Reguler 5, 6 SD', 20, 'Lanjutan', '"Rp5.450.000	', '"Rp3.950.000	', 'Rp3.450.000'),
('PK05', 'Reguler 7, 8 SMP', 20, 'Baru', '"Rp5.550.000	', '"Rp4.650.000	', 'Rp4.150.000'),
('PK06', 'Reguler 7, 8 SMP', 20, 'Lanjutan', '"Rp5.550.000	', '"Rp4.050.000	', 'Rp3.550.000'),
('PK07', 'Reguler 9 SMP - 11 SMA', 20, 'Baru', '"Rp6.450.000	', '"Rp5.550.000	', 'Rp5.050.000'),
('PK08', 'Reguler 9 SMP - 11 SMA', 20, 'Lanjutan', '"Rp6.450.000	', '"Rp4.950.000	', 'Rp4.450.000'),
('PK09', 'Reguler 12 SMA', 20, 'Baru', '"Rp6.350.000	', '"Rp5.450.000	', 'Rp4.950.000'),
('PK10', 'Reguler 12 SMA', 20, 'Lanjutan', '"Rp6.350.000	', '"Rp4.850.000	', 'Rp4.350.000'),
('PK11', 'Reguler + (s/d SBMPTN) 12 SMA/SMK', 20, 'Baru', '"Rp8.200.000	', '"Rp7.300.000	', 'Rp6.800.000'),
('PK12', 'Reguler + (s/d SBMPTN) 12 SMA/SMK', 20, 'Lanjutan', '"Rp8.200.000	', '"Rp6.700.000	', 'Rp6.200.000'),
('PK13', 'Excellent SD - SMP - SMA', 10, 'Baru', '"Rp10.100.000', '"Rp9.200.000	', 'Rp8.700.000'),
('PK14', 'Excellent SD - SMP - SMA', 10, 'Lanjutan', 'Rp10.100.000', '"Rp8.600.000	', '"Rp8.100.000	'),
('PK15', 'Executive SD - SMP - SMA', 5, 'Baru', '"Rp15.200.000', '"Rp14.300.000', 'Rp13.800.000'),
('PK16', 'Executive SD - SMP - SMA', 5, 'Lanjutan', '"Rp15.200.000', '"Rp13.700.000', 'Rp13.200.000'),
('PK17', 'Kelompok SD - SMP - SMA', 10, 'Baru', '"Rp5.550.000	', '"Rp4.650.000	', 'Rp4.150.000'),
('PK18', 'Kelompok SD - SMP - SMA', 10, 'Lanjutan', '"Rp5.550.000	', '"Rp4.050.000	', 'Rp3.550.000'),
('PK19', 'SIAB (Islami) 3 - 6 SD, 7 - 8 SMP', 20, 'Baru', '"Rp5.450.000	', '"Rp4.550.000	', 'Rp4.050.000'),
('PK20', 'SIAB (Islami) 3 - 6 SD, 7 - 8 SMP', 20, 'Lanjutan', '"Rp5.450.000	', '"Rp3.950.000	', 'Rp3.450.000'),
('PK21', 'SIAB (Islami) 9 SMP - 12 SMA', 15, 'Baru', '"Rp6.350.000	', '"Rp5.450.000	', 'Rp4.950.000'),
('PK22', 'SIAB (Islami) 9 SMP - 12 SMA', 15, 'Lanjutan', '"Rp6.350.000	', '"Rp4.850.000	', 'Rp4.350.000'),
('PK23', 'Kedokteran 10 - 12 IPA', 20, 'Baru', '"Rp7.450.000	', '"Rp6.550.000	', 'Rp6.050.000'),
('PK24', 'Kedokteran 10 - 12 IPA', 20, 'Lanjutan', '"Rp7.450.000	', '"Rp5.950.000	', 'Rp5.450.000');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
  `KdPengajar` varchar(5) NOT NULL,
  `NamaPengajar` varchar(40) NOT NULL,
  `KdBidangStudi` varchar(20) NOT NULL,
  `KdGradeSD` varchar(2) NOT NULL,
  `KdGradeSMP` varchar(2) NOT NULL,
  `KdGradeSMA` varchar(2) NOT NULL,
  `NoTelepon` varchar(13) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Pendidikan` varchar(5) NOT NULL,
  `GajiTotal` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`KdPengajar`, `NamaPengajar`, `KdBidangStudi`, `KdGradeSD`, `KdGradeSMP`, `KdGradeSMA`, `NoTelepon`, `Alamat`, `Pendidikan`, `GajiTotal`) VALUES
('PG001', 'Abdul Muis', 'BS01', 'A1', 'A2', 'B3', '0823109917', 'Jalan Indrakila', 'S1', 'Rp800.000'),
('PG002', 'Arie', 'BS05', 'A1', 'A2', '', '081189777662', 'Wonorejo', 'S1', 'Rp1.200.000'),
('PG003', 'Arie Bety', 'BS06', '', 'B2', 'C3', '081293827189', 'Kebun Sayur', 'S1', 'Rp1.000.000'),
('PG004', 'Desy', 'BS02', 'B1', 'B2', 'B3', '081273681920', 'Gn. 4', 'S1', 'Rp1.500.000'),
('PG005', 'Hasan', 'BS09', 'A1', 'A2', 'A3', '081267382910', 'Gn. Polisi', 'S1', 'Rp900.000'),
('PG006', 'Hesti', 'BS08', 'C1', 'C2', 'C3', '081273920192', 'Kilo 2	', 'S1', 'Rp980.000'),
('PG007', 'Inggrid', 'BS10', 'B1', 'B2', 'B3', '085372819281', 'Batu Ampar Lestari', 'S1', 'Rp990.000'),
('PG008', 'Kadek', 'BS05', 'A1', 'A2', 'A3', '082341628192', 'Wonorejo', 'S1', 'Rp1.100.000'),
('PG009', 'Laurensius', 'BS11', 'A1', 'A2', 'A3', '085372819281', 'Kampung Baru', 'S1', 'Rp980.000'),
('PG010', 'Putri', 'BS01', 'A1', 'B2', 'B3', '082341628192', 'Bangun Reksa', 'S1', 'Rp1.050.000'),
('PG011', 'Retno', 'BS08', 'B1', 'C2', 'C3', '081253069942', 'Jalan Indrakila', 'S1', 'Rp1.000.000'),
('PG012', 'Sekar', 'BS02', 'B1', '', '', '085349148477', 'Strat 3', 'S1', 'Rp650.000'),
('PG013', 'Sinta', 'BS04', 'B1', '', '', '082178789009', 'Gn. Polisi', 'S1', 'Rp1.500.000'),
('PG014', 'Sujilah', 'BS03', 'A1', 'A2', '', '085212312345', 'Kebun Sayur', 'S1', 'Rp850.000'),
('PG015', 'Yuli', 'BS13', 'A1', '', '', '085812568990', 'Kampung Baru', 'S1', 'Rp900.000'),
('PG016', 'Berlin', 'BS07', '', '', 'B3', '085372817788', 'Strat 3', 'S1', 'Rp980.000');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NoInduk` varchar(6) NOT NULL,
  `KdJadwal` varchar(8) NOT NULL,
  `KdPaket` varchar(4) NOT NULL,
  `TglDaftar` date NOT NULL,
  `StatusPembayaran` varchar(20) NOT NULL,
  `NamaSiswa` varchar(60) NOT NULL,
  `AsalSekolah` varchar(30) NOT NULL,
  `NoTelepon` varchar(13) NOT NULL,
  `TahunAjaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NoInduk`, `KdJadwal`, `KdPaket`, `TglDaftar`, `StatusPembayaran`, `NamaSiswa`, `AsalSekolah`, `NoTelepon`, `TahunAjaran`) VALUES
('SW0002', 'JM11', 'PK08', '2018-02-28', 'Lunas', 'Andi Sofia Maulida	', 'SMAN 3	', '081251921559', '2017-2018'),
('SW0003', 'JM11', 'PK08', '2018-03-25', 'Lunas', 'Dita Aulia P.	', 'SMAN 6	', '08125515519	', '2017-2018'),
('SW0004', 'JM11', 'PK08', '2018-03-31', 'Lunas', 'Faradillah Putri Ardi	', 'SMAN 6	', '082251135788', '2017-2018'),
('SW0005', 'JM11', 'PK08', '2018-04-13', 'Lunas', 'Fakat Asfa N.	', 'SMAN 6	', '081347058234', '2017-2018'),
('SW0006', 'JM11', 'PK08', '2018-05-29', 'Lunas', 'Heny Yulia Rahmawati	', 'SMAN 6	', '085346876331', '2017-2018'),
('SW0007', 'JMA12', 'PK10', '2018-03-03', 'Lunas', 'Jihan Indah S.	', 'SMAN 2	', '083153351508', '2017-2018'),
('SW0008', 'JMA12', 'PK10', '2018-03-14', 'Lunas', '"Natasha Debora Tho	', 'SMAN 1	', '081354775218', '2017-2018'),
('SW0009', 'JMA12', 'PK10', '2018-03-16', 'Lunas', 'Mahfuzh Yazid	', 'SMAN 2		', '085393889570', '2017-2018'),
('SW0010', 'JMA12', 'PK10', '2018-03-19', 'Lunas', 'Olvega Shaleen T.	', 'SMA Advent		', '08125510099', '2017-2018'),
('SW0011', 'JMA12', 'PK09', '2018-03-21', 'Belum Lunas', 'Khoirunisa	', 'SMAN 1		', '081347557255', '2017-2018'),
('SW0012', 'JMA12', 'PK10', '2018-03-19', 'Lunas', 'Ira Tamara	', 'SMAN 3		', '085246045578', '2017-2018'),
('SW0013', 'JMA12', 'PK10', '2018-03-26', 'Lunas', 'Annisa Nurul H.	', 'SMAN 1		', '089688167488', '2017-2018'),
('SW0014', 'JMA12', 'PK10', '2018-03-26', 'Lunas', 'Rizky Agung N. H.	', 'SMAN 6		', '081255410075', '2017-2018'),
('SW0015', 'JMA12', 'PK09', '2018-03-28', 'Belum Lunas', 'Yusuf Afudin	', 'SMAN 2		', '081545555405', '2017-2018'),
('SW0016', 'JMA12', 'PK09', '2018-03-26', 'Belum Lunas', 'Hani Noviyanti	', 'SMAN 2	', '08125310609', '2017-2018'),
('SW0017', 'JMB12', 'PK09', '2018-04-20', 'Belum Lunas', 'Ray Aditya Rahman	', 'SMAN 2	', '081353211555', '2017-2018'),
('SW0018', 'JMB12', 'PK09', '2018-04-20', 'Belum Lunas', 'Pandu Pratama Putra			', 'SMAN 2', '085390844588', '2017-2018'),
('SW0019', 'JMB12', 'PK10', '2018-04-25', 'Lunas', 'Ikhsan Shodikin		', '"SMAN 2	', '087812028247', '2017-2018'),
('SW0020', 'JMB12', 'PK10', '2018-04-25', 'Lunas', 'Muhammad Rizky Nur K.		', 'SMAN 2	', '081310167352', '2017-2018'),
('SW0021', 'JMB12', 'PK10', '2018-04-25', 'Lunas', 'Indra Fathurahman			', 'SMAN 2', '082354697065', '2017-2018'),
('SW0022', 'JMB12', 'PK10', '2018-04-26', 'Lunas', 'Arief Rahman H.			', 'SMAN 2', '082155514794', '2017-2018'),
('SW0023', 'JMB12', 'PK10', '2018-04-29', 'Lunas', 'Enaya Kafka Garuda N.		', 'SMAN 2	', '082250097660', '2017-2018'),
('SW0024', 'JMB12', 'PK10', '2018-04-29', 'Lunas', 'Melani Putri Indah S. A.			', 'SMAN 2', '', '2017-2018'),
('SW0025', 'JMC12', 'PK09', '2018-03-31', 'Belum Lunas', 'Shafa Alvika		', 'SMAN 2', '081346574007', '2017-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`KdJadwal`);

--
-- Indexes for table `paketbimbel`
--
ALTER TABLE `paketbimbel`
  ADD PRIMARY KEY (`KdPaket`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`KdPengajar`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NoInduk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
