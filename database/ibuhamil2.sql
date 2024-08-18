-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 01:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibuhamil2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasilakhir`
--

CREATE TABLE `hasilakhir` (
  `id_hasilakhir` int(11) NOT NULL,
  `id_ih` varchar(100) NOT NULL,
  `id_pmt` varchar(100) NOT NULL,
  `lila_sesudah` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilakhir`
--

INSERT INTO `hasilakhir` (`id_hasilakhir`, `id_ih`, `id_pmt`, `lila_sesudah`, `keterangan`) VALUES
(14, '7', 'pmt001', '25', 'Normal'),
(17, '045', '03', '23', 'Kurang Energi Kronis (KEK)'),
(18, '130', '03', '23,5', 'Normal'),
(19, '002', '02', '24 cm', 'Normal'),
(20, '005', '04', '24 cm', 'Normal'),
(21, '016', '03', '25 cm', 'Normal'),
(22, '020', '01', '30 cm', 'Normal'),
(23, '026', '03', '27', 'Normal'),
(24, '038', '02', '26 cm', 'Normal'),
(25, '044', '05', '22 cm', 'Kurang Energi Kronis (KEK)'),
(26, '072', '03', '33 cm', 'Normal'),
(27, '076', '05', '21 cm', 'Kurang Energi Kronis (KEK)'),
(28, '085', '03', '25 cm', 'Normal'),
(29, '091', '04', '26 cm', 'Normal'),
(30, '092', '05', '23 cm', 'Kurang Energi Kronis (KEK)'),
(31, '098', '03', '25 cm', 'Normal'),
(32, '107', '03', '27 cm', 'Normal'),
(33, '111', '02', '30 cm', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `ibuhamil`
--

CREATE TABLE `ibuhamil` (
  `id_ih` varchar(100) NOT NULL,
  `nama_ih` varchar(100) NOT NULL,
  `usia_ih` varchar(100) NOT NULL,
  `ukur_lila` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `tb` varchar(100) NOT NULL,
  `id_posyandu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibuhamil`
--

INSERT INTO `ibuhamil` (`id_ih`, `nama_ih`, `usia_ih`, `ukur_lila`, `bb`, `tb`, `id_posyandu`, `alamat`, `tgl`) VALUES
('ih001', 'nurul', '25', '23', '60', '170', 'pos001', 'Rt.02', '2024-01-24'),
('ih002', 'fitri', '24', '24', '65', '170', 'pos001', 'kapuas', '2024-05-07'),
('ih003', 'husnul', '17', '22', '40', '155', 'pos001', 'Martapura', '2024-05-07'),
('ih004', 'Samiah', '25', '30', '65', '160', 'pos001', 'Banjarmasin', '2024-05-16'),
('002', 'Amah', '43', '24', '45', '146', '05', 'Rt.06', '2022-05-21'),
('003', 'Amah', '43', '24', '47', '146', '05', 'Rt.06', '2022-06-18'),
('005', 'Arbayah', '33', '24', '42', '151', '05', 'Rt.06', '2022-02-21'),
('006', 'Arbayah', '33', '24', '46', '151', '05', 'Rt.06', '2021-03-21'),
('007', 'Arbayah', '33', '24', '45', '151', 'Pilih Posyandu', 'Rt.06', '2022-05-22'),
('008', 'Arbayah', '33', '24', '45', '151', '05', 'Rt.06', '2022-06-18'),
('009', 'Arbayah', '33', '24', '48', '151', '05', 'Rt.06', '2022-08-27'),
('012', 'Sam ah', '24', '27', '55', '152', '01', 'Rt.01', '2022-04-25'),
('013', 'Sam ah', '24', '27', '59', '152', '01', 'Rt.01', '2022-07-13'),
('014', 'Sam ah', '24', '27', '61', '152', '01', 'Rt.01', '2022-08-12'),
('015', 'Sam ah', '24', '27', '61', '152', '01', 'Rt.01', '2022-09-07'),
('016', 'Kamsiah', '38', '25', '45', '149', '02', 'Rt.02', '2022-06-18'),
('017', 'Kamsiah', '38', '25', '45', '149', '02', 'Rt.02', '2022-07-27'),
('018', 'Kamsiah', '38', '25', '47', '149', '02', 'Rt.02', '2022-08-21'),
('019', 'Kamsiah', '38', '25', '48', '149', '02', 'Rt.02', '2022-10-21'),
('020', 'Ratih', '33', '30', '63', '151', '03', 'Rt.03', '2022-06-18'),
('021', 'Ratih', '33', '30', '64', '151', '03', 'Rt.03', '2022-07-15'),
('022', 'Ratih', '33', '30', '70', '151', '03', 'Rt.03', '2022-10-22'),
('023', 'Ratih', '33', '30', '72', '151', '03', 'Rt.03', '2022-11-23'),
('024', 'Ratih', '33', '30', '73', '151', '03', 'Rt.03', '2022-12-24'),
('025', 'Ratih', '33', '30', '74', '151', '03', 'Rt.03', '2023-01-10'),
('026', 'Misdawati', '31', '27', '54', '151', '06', 'Rt.09', '2022-06-18'),
('027', 'Misdawati', '31', '27', '50', '151', '06', 'Rt.09', '2022-08-21'),
('028', 'Misdawati', '31', '27', '52', '151', '06', 'Rt.09', '2022-09-21'),
('029', 'Misdawati', '31', '27', '59', '151', '06', 'Rt.09', '2022-11-23'),
('030', 'Misdawati', '31', '27', '61', '151', '06', 'Rt.09', '2022-12-24'),
('031', 'Misdawati', '31', '27', '60', '151', '06', 'Rt.09', '2023-01-22'),
('032', 'Nurhasanah Namira', '22', '29', '59', '152', '06', 'Rt.10', '2022-04-04'),
('033', 'Nurhasanah Namira', '22', '29', '65', '152', '06', 'Rt.10', '2022-05-05'),
('034', 'Nurhasanah Namira', '22', '29', '70', '152', '06', 'Rt.10', '2022-06-18'),
('035', 'Nurhasanah Namira', '22', '29', '72', '152', '06', 'Rt.10', '2022-07-17'),
('036', 'Nurhasanah Namira', '22', '29', '73', '152', '06', 'Rt.10', '2022-08-15'),
('037', 'Nurhasanah Namira', '22', '29', '73', '152', '06', 'Rt.10', '2022-09-10'),
('038', 'Ayu Astuti', '16', '26', '53', '158', '05', 'Rt.06', '2022-04-04'),
('039', 'Ayu Astuti', '16', '26', '54', '158', '05', 'Rt.06', '2022-05-20'),
('040', 'Ayu Astuti', '16', '26', '58', '158', '05', 'Rt.06', '2022-07-14'),
('041', 'Ayu Astuti', '16', '26', '60', '158', '05', 'Rt.06', '2022-09-07'),
('042', 'Ayu Astuti', '16', '26', '60', '158', '05', 'Rt.06', '2022-09-21'),
('043', 'Ayu Astuti', '16', '26', '61', '158', '05', 'Rt.06', '2022-10-15'),
('044', 'Halimah', '28', '22', '34', '148', '01', 'Rt.01', '2022-04-04'),
('045', 'Halimah', '28', '22', '34', '148', '01', 'Rt.01', '2022-05-08'),
('046', 'Halimah', '28', '22', '40', '148', '01', 'Rt.01', '2022-07-08'),
('047', 'Halimah', '28', '22', '42', '148', '01', 'Rt.01', '2022-08-17'),
('048', 'Halimah', '28', '22', '44', '148', '01', 'Rt.01', '2022-10-14'),
('049', 'Halimah', '28', '22', '45', '148', '01', 'Rt.01', '2022-11-13'),
('050', 'Siti Fatimah', '22', '26', '52', '151', '01', 'Rt.01', '2022-07-29'),
('051', 'Siti Fatimah', '22', '26', '54', '151', '01', 'Rt.01', '2022-08-19'),
('052', 'Siti Fatimah', '22', '26', '54', '151', '01', 'Rt.01', '2022-09-22'),
('053', 'Siti Fatimah', '22', '26', '62', '151', '01', 'Rt.01', '2023-01-22'),
('054', 'Mega wati', '28', '24', '49', '155', '05', 'Rt.07', '2022-06-15'),
('055', 'Raihanah', '19', '24', '42', '148', '05', 'Rt.06', '2022-08-08'),
('056', 'Raihanah', '19', '24', '44', '148', '05', 'Rt.06', '2022-10-08'),
('057', 'Raihanah', '19', '24', '45', '148', '05', 'Rt.06', '2022-12-01'),
('058', 'Raihanah', '19', '24', '49', '148', '05', 'Rt.06', '2023-01-12'),
('059', 'Raihanah', '19', '24', '50', '148', '05', 'Rt.06', '2023-01-22'),
('060', 'Raihanah', '19', '24', '51', '148', '05', 'Rt.06', '2023-02-24'),
('061', 'Yati Oktavia', '28', '25', '61', '154', '03', 'Rt.03', '2022-08-10'),
('062', 'Yati Oktavia', '28', '25', '61', '154', '03', 'Rt.03', '2022-09-21'),
('063', 'Yati Oktavia', '28', '25', '63', '154', '03', 'Rt.03', '2022-10-24'),
('064', 'Yati Oktavia', '28', '25', '68', '154', '03', 'Rt.03', '2022-12-25'),
('065', 'Yati Oktavia', '28', '25', '68', '154', '03', 'Rt.03', '2023-01-25'),
('066', 'Salamiah', '21', '28', '55', '156', '01', 'Rt.11', '2022-08-12'),
('067', 'Salamiah', '21', '28', '57', '156', '01', 'Rt.11', '2022-09-22'),
('068', 'Salamiah', '21', '28', '60', '156', '01', 'Rt.11', '2022-11-29'),
('069', 'Salamiah', '21', '28', '62', '156', '01', 'Rt.11', '2022-12-24'),
('070', 'Salamiah', '21', '28', '64', '156', '01', 'Rt.11', '2023-01-02'),
('071', 'Salamiah', '21', '28', '65', '156', '01', 'Rt.11', '2023-01-24'),
('072', 'Wati', '36', '33', '65', '147', '03', 'Rt.03', '2022-09-01'),
('073', 'Wati', '36', '33', '67', '147', '03', 'Rt.03', '2022-10-22'),
('074', 'Wati', '36', '33', '68', '147', '03', 'Rt.03', '2022-11-25'),
('075', 'Wati', '36', '33', '67', '147', '03', 'Rt.03', '2023-01-25'),
('076', 'Khairunnisa', '27', '21', '37', '148', '03', 'Rt.03', '2022-09-01'),
('077', 'Khairunnisa', '27', '21', '42', '148', '03', 'Rt.03', '2022-10-22'),
('078', 'Khairunnisa', '27', '21', '44', '148', '03', 'Rt.03', '2022-11-23'),
('079', 'Khairunnisa', '27', '21', '44', '148', '03', 'Rt.03', '2022-12-24'),
('080', 'Khairunnisa', '27', '21', '45', '148', '03', 'Rt.03', '2023-01-15'),
('081', 'Nurhalisah', '24', '27', '55', '150', '06', 'Rt.09', '2022-09-01'),
('082', 'Nurhalisah', '24', '27', '53', '150', '06', 'Rt.09', '2022-10-22'),
('083', 'Nurhalisah', '24', '27', '56', '150', '06', 'Rt.09', '2022-12-24'),
('084', 'Nurhalisah', '24', '27', '56', '150', '06', 'Rt.09', '2023-01-25'),
('085', 'Siti Aisyah', '33', '25', '49', '158', '06', 'Rt.09', '2022-06-18'),
('086', 'Siti Aisyah', '33', '25', '53', '158', '06', 'Rt.09', '2022-08-21'),
('087', 'Siti Aisyah', '33', '25', '59', '158', '06', 'Rt.09', '2022-09-21'),
('088', 'Siti Aisyah', '33', '25', '57', '158', '06', 'Rt.09', '2022-10-22'),
('089', 'Siti Aisyah', '33', '25', '59', '158', '06', 'Rt.09', '2022-11-23'),
('090', 'Siti Aisyah', '33', '25', '60', '158', '06', 'Rt.09', '2022-12-05'),
('091', 'Mahyuna', '33', '26', '60', '162', '04', 'Rt.05', '2022-07-02'),
('092', 'Annisa', '21', '22', '37', '155', '04', 'Rt.08', '2022-07-12'),
('093', 'Annisa', '21', '22', '38', '155', '04', 'Rt.08', '2022-08-12'),
('094', 'Annisa', '21', '22', '41', '155', '04', 'Rt.08', '2021-10-22'),
('095', 'Annisa', '21', '22', '44', '155', '04', 'Rt.08', '2022-11-24'),
('096', 'Annisa', '21', '23', '46', '155', '04', 'Rt.08', '2022-12-24'),
('097', 'Annisa', '21', '23', '49', '155', '04', 'Rt.08', '2023-02-06'),
('098', 'Arbainah', '36', '25', '43', '148', '04', 'Rt.08', '2022-08-22'),
('099', 'Arbainah', '36', '25', '445', '148', '04', 'Rt.08', '2022-09-22'),
('100', 'Arbainah', '36', '25', '45', '148', '04', 'Rt.08', '2022-10-22'),
('101', 'Arbainah', '36', '25', '47', '148', '04', 'Rt.08', '2022-12-02'),
('102', 'Arbainah', '36', '25', '49', '148', '04', 'Rt.08', '2023-01-25'),
('103', 'Ayda', '25', '25', '45', '148', '04', 'Rt.05', '2022-08-31'),
('104', 'Ayda', '25', '25', '44', '148', '04', 'Rt.05', '2022-09-22'),
('105', 'Ayda', '25', '25', '45', '148', '04', 'Rt.05', '2022-11-24'),
('106', 'Ayda', '25', '25', '48', '148', '04', 'Rt.05', '2023-01-25'),
('107', 'Rahmi', '32', '27', '52', '153', '02', 'Rt.02', '2022-08-31'),
('108', 'Rahmi', '32', '27', '56', '153', '02', 'Rt.02', '2022-12-01'),
('109', 'Rahmi', '32', '27', '58', '153', '02', 'Rt.02', '2023-01-22'),
('110', 'Rahmi', '32', '27', '60', '153', '02', 'Rt.02', '2023-02-23'),
('111', 'Saniah', '34', '30', '71', '160', '03', 'Rt.03', '2022-05-10'),
('112', 'Saniah', '34', '30', '70', '160', '03', 'Rt.03', '2022-05-26'),
('113', 'Saniah', '34', '30', '71', '160', '03', 'Rt.03', '2022-06-18'),
('114', 'Saniah', '34', '30', '72', '160', '03', 'Rt.03', '2022-07-17'),
('115', 'Saniah', '34', '30', '75', '160', '03', 'Rt.03', '2022-08-21'),
('116', 'Saniah', '34', '30', '75', '160', '03', 'Rt.03', '2022-09-22'),
('117', 'Dinda', '24', '25', '43', '151', '03', 'Rt.03', '2022-05-23'),
('118', 'Dinda', '24', '25', '44', '151', '03', 'Rt.03', '2022-06-18'),
('119', 'Dinda', '24', '25', '47', '151', '03', 'Rt.03', '2022-07-17'),
('120', 'Dinda', '24', '25', '48', '151', '03', 'Rt.03', '2022-09-21'),
('121', 'Dinda', '24', '25', '48', '151', '03', 'Rt.03', '2021-10-22'),
('122', 'Dinda', '24', '25', '48', '151', '03', 'Rt.03', '2022-11-03'),
('123', 'Nurasanah', '24', '24', '47', '150', '03', 'Rt.03', '2022-05-22'),
('124', 'Nurasanah', '24', '24', '49', '150', '03', 'Rt.03', '2022-10-06'),
('125', 'Nurasanah', '24', '24', '52', '150', '03', 'Rt.03', '2022-06-24'),
('126', 'Nurasanah', '24', '24', '54', '150', '03', 'Rt.03', '2022-08-01'),
('127', 'Nor Liati', '19', '23', '47', '153', '02', 'Rt.02', '2022-06-04'),
('128', 'Nor Liati', '19', '23', '47', '153', '02', 'Rt.02', '2022-06-18'),
('129', 'Nor Liati', '19', '23', '50', '153', '02', 'Rt.02', '2022-07-17'),
('130', 'Nor Liati', '19', '23', '53', '153', '02', 'Rt.02', '2022-08-19'),
('131', 'Nor Liati', '19', '24', '55', '153', '02', 'Rt.02', '2022-09-21'),
('132', 'Nor Liati', '19', '24', '56', '153', '02', 'Rt.02', '2022-09-28'),
('133', '', '19', '24', '56', '153', 'Pilih Posyandu', 'Rt.02', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_akhir`
--

CREATE TABLE `pemeriksaan_akhir` (
  `id_pemeriksaan_akhir` varchar(100) NOT NULL,
  `id_ih` varchar(100) NOT NULL,
  `usia_pemeriksaan_akhir` varchar(100) NOT NULL,
  `ukur_lila_pemeriksaan_akhir` varchar(100) NOT NULL,
  `bb_pemeriksaan_akhir` varchar(100) NOT NULL,
  `tb_pemeriksaan_akhir` varchar(100) NOT NULL,
  `imt_pemeriksaan_akhir` varchar(100) NOT NULL,
  `id_posyandu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_pemeriksaan_akhir` varchar(100) NOT NULL,
  `status_pemeriksaan_akhir` varchar(100) NOT NULL,
  `penanganan_pemeriksaan_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan_akhir`
--

INSERT INTO `pemeriksaan_akhir` (`id_pemeriksaan_akhir`, `id_ih`, `usia_pemeriksaan_akhir`, `ukur_lila_pemeriksaan_akhir`, `bb_pemeriksaan_akhir`, `tb_pemeriksaan_akhir`, `imt_pemeriksaan_akhir`, `id_posyandu`, `alamat`, `tgl_pemeriksaan_akhir`, `status_pemeriksaan_akhir`, `penanganan_pemeriksaan_akhir`) VALUES
('pa001', '1', '30', '50', '60', '160', '55', '01', 'Rt.01', '2024-07-29', 'Normal', '-'),
('pa002', '002', '55', '55', '55', '55', '55', '05', 'Rt.07', '2024-07-29', 'Kurang Energi Kronis (KEK)', '55');

-- --------------------------------------------------------

--
-- Table structure for table `pmt`
--

CREATE TABLE `pmt` (
  `id_pmt` varchar(100) NOT NULL,
  `pmt1` varchar(100) NOT NULL,
  `pmt2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmt`
--

INSERT INTO `pmt` (`id_pmt`, `pmt1`, `pmt2`) VALUES
('01', 'Vitamin tambah darah', '3 keping biskuit setiap hari'),
('02', 'Vitamin ibu hamil', '3 keping biskuit setiap hari'),
('03', 'Susu Ibu Hamil', '3 keping biskuit setiap hari'),
('04', 'Susu ibu hamil', '3 keping biskuit setiap hari'),
('05', '2 keping biskuit setiap hari', 'Bubur dan telur'),
('06', '2 keping biskuit setiap hari', 'Makanan Tambahan 4 Sehat 5 Sempurna');

-- --------------------------------------------------------

--
-- Table structure for table `posyandu`
--

CREATE TABLE `posyandu` (
  `id_posyandu` varchar(100) NOT NULL,
  `nama_posyandu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posyandu`
--

INSERT INTO `posyandu` (`id_posyandu`, `nama_posyandu`, `alamat`) VALUES
('01', 'Posyandu Bunga Cempaka ', 'Rt.01'),
('02', 'Posyandu Bunga Mawar', 'Rt.02'),
('03', 'Posyandu Bunga Melati', 'Rt.03'),
('04', 'Posyandu Bunga Anggrek', 'Rt.05'),
('05', 'Posyandu Bunga Dahlia', 'Rt.07'),
('06', 'Posyandu Bunga Seroja', 'Rt.09');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` varchar(100) NOT NULL,
  `nama_training` varchar(100) NOT NULL,
  `usia_training` varchar(100) NOT NULL,
  `ukur_lila` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `tb` varchar(100) NOT NULL,
  `id_posyandu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `usia_training`, `ukur_lila`, `bb`, `tb`, `id_posyandu`, `alamat`, `tgl`) VALUES
('1', 'wati', '27', '31', '70', '153', '03', 'Rt.04', '2022-06-04'),
('2', 'wati', '27', '31', '70', '159', '03', 'Rt.04', '2022-07-17'),
('3', 'wati', '27', '31', '70', '159', '03', 'Rt.04', '2022-09-17'),
('4', 'wati', '27', '31', '70', '159', '03', 'Rt.04', '2022-10-22'),
('5', 'wati', '27', '31', '70', '159', '03', 'Rt.04', '2022-11-23'),
('6', 'wati', '27', '31', '73', '159', '03', 'Rt.04', '2022-12-24'),
('7', 'halimah', '24', '29', '65', '156', '06', 'Rt.09', '2022-03-21'),
('8', 'halimah', '24', '29', '62', '156', '06', 'Rt.09', '2022-04-21'),
('9', 'halimah', '24', '29', '68', '156', '06', 'Rt.09', '2022-07-17'),
('10', 'halimah', '24', '29', '73', '156', '06', 'Rt.09', '2022-09-23'),
('11', 'halimah', '24', '29', '72', '156', '06', 'Rt.09', '2022-10-17'),
('12', 'halimah', '24', '29', '73', '156', '06', 'Rt.09', '2022-11-03'),
('13', 'nadewi', '18', '24', '40', '148', '01', 'Rt.01', '2022-01-20'),
('14', 'nadewi', '18', '24', '40', '148', '01', 'Rt.01', '2022-02-21'),
('15', 'nadewi', '18', '24', '47', '148', '01', 'Rt.01', '2022-03-21'),
('16', 'nadewi', '18', '24', '47', '148', '01', 'Rt.01', '2022-07-13'),
('17', 'nadewi', '18', '24', '48', '148', '01', 'Rt.01', '2022-08-13'),
('18', 'hulyawati', '27', '25', '48', '149', '02', 'Rt.02', '2022-01-20'),
('19', 'hulyawati', '27', '25', '48', '149', '02', 'Rt.02', '2022-02-21'),
('20', 'hulyawati', '27', '25', '60', '149', '02', 'Rt.02', '2022-05-08'),
('21', 'siti khadijah', '17', '24', '50', '160', '01', 'Rt.01', '2022-09-04'),
('22', 'siti khadijah', '17', '24', '51', '160', '01', 'Rt.01', '2022-10-22'),
('23', 'siti khadijah', '17', '24', '58', '160', '01', 'Rt.01', '2022-12-19'),
('24', 'masdinah', '21', '23', '42', '154', '03', 'Rt.04', '2022-05-17'),
('25', 'masdinah', '21', '23', '39', '154', '03', 'Rt.04', '2022-06-15'),
('26', 'masdinah', '21', '23', '49', '154', '03', 'Rt.04', '2022-09-01'),
('27', 'masdinah', '21', '23', '50', '154', '03', 'Rt.04', '2022-10-22'),
('28', 'masdinah', '21', '24', '50', '154', '03', 'Rt.04', '2022-11-23'),
('29', 'masdinah', '21', '24', '52', '154', '03', 'Rt.04', '2022-12-21'),
('30', 'patmawati', '31', '27', '52', '148', '03', 'Rt.03', '2022-09-17'),
('31', 'patmawati', '31', '27', '58', '148', '03', 'Rt.03', '2022-11-23'),
('32', 'patmawati', '31', '27', '62', '148', '03', 'Rt.03', '2023-01-25'),
('33', 'patmawati', '31', '27', '62', '148', '03', 'Rt.03', '2023-02-22'),
('34', 'ana', '25', '25', '48', '156', '03', 'Rt.03', '2022-11-23'),
('35', 'hamidah', '23', '25', '45', '147', '03', 'Rt.03', '2022-10-23'),
('36', 'hamidah', '23', '25', '45', '147', '03', 'Rt.03', '2022-11-23'),
('37', 'hamidah', '23', '25', '45', '147', '03', 'Rt.03', '2023-01-22'),
('38', 'faridah', '35', '28', '58', '153', '03', 'Rt.04', '2022-12-14'),
('39', 'faridah', '35', '28', '58', '153', '03', 'Rt.04', '2022-12-20'),
('40', 'Fatmawati', '30', '23', '40', '150', '04', 'Rt.08', '2022-10-14'),
('41', 'Fatmawati', '30', '23', '40', '150', '04', 'Rt.08', '2023-11-24'),
('42', 'Fatmawati', '30', '23', '43', '150', '04', 'Rt.08', '2023-01-25'),
('43', 'Fatmawati', '30', '23', '43', '150', '04', 'Rt.08', '2023-02-22'),
('44', 'norliana', '23', '27', '56', '152', '04', 'Rt.08', '2022-10-14'),
('45', 'norliana', '23', '27', '56', '152', '04', 'Rt.08', '2022-11-24'),
('46', 'salabiah', '24', '21', '40', '152', '06', 'Rt.10', '2022-10-17'),
('47', 'salabiah', '24', '21', '41', '152', '06', 'Rt.10', '2022-11-23'),
('48', 'salabiah', '24', '21', '42', '152', '06', 'Rt.10', '2022-12-24'),
('49', 'salabiah', '24', '22', '43', '152', '06', 'Rt.10', '2023-01-25'),
('50', 'salabiah', '24', '22', '46', '152', '06', 'Rt.10', '2022-02-19'),
('51', 'fitriyah', '20', '27', '58', '163', '03', 'Rt.03', '2022-10-22'),
('52', 'fitriyah', '20', '27', '62', '163', '03', 'Rt.03', '2022-12-24'),
('53', 'sasmita', '30', '27', '60', '158', '01', 'Rt.11', '2022-12-24'),
('54', 'sasmita', '30', '27', '53', '158', '01', 'Rt.11', '2023-01-25'),
('55', 'sasmita', '30', '27', '65', '158', '01', 'Rt.11', '2023-06-12'),
('56', 'sasmita', '30', '27', '66', '158', '01', 'Rt.11', '2023-07-15'),
('57', 'risda', '27', '23', '44', '153', '06', 'Rt.10', '2023-01-17'),
('58', 'risda', '27', '23', '44', '153', '06', 'Rt.10', '2023-02-15'),
('59', 'risda', '27', '23', '45', '153', '06', 'Rt.10', '2023-03-16'),
('60', 'risda', '27', '24', '50', '153', '06', 'Rt.10', '2023-06-15'),
('61', 'risda', '27', '24', '50', '153', '06', 'Rt.10', '2023-07-20'),
('62', 'halidiyah', '18', '24', '45', '153', '06', 'Rt.10', '2023-01-17'),
('63', 'halidiyah', '18', '24', '48', '153', '06', 'Rt.10', '2023-02-15'),
('64', 'halidiyah', '18', '24', '50', '153', '06', 'Rt.10', '2023-03-16'),
('65', 'halidiyah', '18', '24', '50', '153', '06', 'Rt.10', '2023-04-19'),
('66', 'halidiyah', '18', '24', '57', '153', '06', 'Rt.10', '2023-06-15'),
('67', 'nadia', '19', '24', '51', '160', '01', 'Rt.01', '2023-02-13'),
('68', 'nadia', '19', '24', '52', '160', '01', 'Rt.01', '2023-03-13'),
('69', 'nadia', '19', '24', '62', '160', '01', 'Rt.01', '2023-05-14'),
('70', 'nadia', '19', '24', '65', '160', '01', 'Rt.01', '2023-06-12'),
('71', 'nadia', '19', '24', '70', '160', '01', 'Rt.01', '2023-07-15'),
('72', 'nadia', '19', '24', '76', '160', '01', 'Rt.01', '2023-08-12'),
('73', 'jumiati', '35', '28', '47', '145', '06', 'Rt.09', '2023-02-15'),
('74', 'jumiati', '35', '28', '48', '145', '06', 'Rt.09', '2022-03-16'),
('75', 'jumiati', '35', '28', '49', '145', '06', 'Rt.09', '2023-06-19'),
('76', 'jumiati', '35', '28', '48', '145', '06', 'Rt.09', '2023-07-20'),
('77', 'nor jamiah', '19', '22', '42', '151', '01', 'Rt.01', '2023-02-13'),
('78', 'nor jamiah', '19', '22', '42', '151', '01', 'Rt.01', '2023-04-13'),
('79', 'nor jamiah', '19', '22', '46', '151', '01', 'Rt.01', '2023-06-12'),
('80', 'nor jamiah', '19', '23', '49', '151', '01', 'Rt.01', '2023-07-15'),
('81', 'nor jamiah', '19', '24', '53', '151', '01', 'Rt.01', '2023-08-12'),
('82', 'rahimah', '20', '22', '43', '157', '04', 'Rt.08', '2023-02-16'),
('83', 'rahimah', '20', '22', '43', '157', '04', 'Rt.08', '2023-03-18'),
('84', 'rahimah', '20', '22', '42', '157', '04', 'Rt.08', '2023-04-20'),
('85', 'rahimah', '20', '23', '49', '157', '04', 'Rt.08', '2023-06-17'),
('86', 'rahimah', '20', '24', '52', '157', '06', 'Rt.08', '2023-07-22'),
('87', 'Aiysah', '20', '21', '35', '149', '06', 'Rt.10', '2023-03-16'),
('88', 'Aiysah', '20', '21', '44', '149', '06', 'Rt.10', '2023-07-20'),
('89', 'Aiysah', '20', '22', '45', '149', '06', 'Rt.10', '2022-08-16'),
('90', 'Aiysah', '20', '22', '46', '149', '06', 'Rt.10', '2023-09-17'),
('91', 'samiah', '24', '30', '62', '152', '02', 'Rt.02', '2023-03-16'),
('92', 'samiah', '24', '30', '68', '152', '02', 'Rt.02', '2023-06-13'),
('93', 'samiah', '24', '30', '63', '152', '02', 'Rt.02', '2023-07-17'),
('94', 'samiah', '24', '30', '64', '152', '02', 'Rt.02', '2023-09-14'),
('95', 'aisyah', '25', '28', '50', '152', '06', 'Rt.10', '2023-04-19'),
('96', 'aisyah', '25', '28', '52', '152', '06', 'Rt.10', '2023-06-15'),
('97', 'aisyah', '25', '28', '55', '152', '06', 'Rt.10', '2023-07-20'),
('98', 'aisyah', '25', '28', '57', '152', '06', 'Rt.10', '2023-08-16'),
('99', 'aisyah', '25', '28', '56', '152', '06', 'Rt.10', '2023-09-17'),
('100', 'aisyah', '25', '28', '57', '152', '06', 'Rt.10', '2023-10-20'),
('101', 'fatimah', '26', '24', '40', '148', '01', 'Rt.01', '2023-04-15'),
('102', 'fatimah', '26', '24', '43', '148', '01', 'Rt.01', '2023-06-12'),
('103', 'fatimah', '26', '24', '46', '148', '01', 'Rt.01', '2023-07-15'),
('104', 'fatimah', '26', '24', '47', '148', '01', 'Rt.01', '2023-09-13'),
('105', 'hamidah', '24', '28', '45', '148', '02', 'Rt.02', '2023-04-17'),
('106', 'hamidah', '24', '28', '43', '148', '02', 'Rt.02', '2023-06-13'),
('107', 'hamidah', '24', '28', '46', '148', '02', 'Rt.02', '2023-07-17'),
('108', 'hamidah', '24', '28', '47', '148', '02', 'Rt.02', '2023-09-14'),
('109', 'laila sari', '24', '33', '80', '158', '01', 'Rt.11', '2023-05-14'),
('110', 'laila sari', '24', '33', '80', '158', '01', 'Rt.11', '2023-06-12'),
('111', 'laila sari', '24', '33', '77', '158', '01', 'Rt.11', '2023-07-15'),
('112', 'laila sari', '24', '33', '77', '158', '01', 'Rt.11', '2023-08-12'),
('113', 'laila sari', '24', '33', '77', '158', '01', 'Rt.11', '2023-09-13'),
('114', 'laila sari', '24', '33', '78', '158', '01', 'Rt.11', '2023-10-12'),
('115', 'laila sari', '24', '33', '80', '158', '01', 'Rt.11', '2023-11-13'),
('116', 'laila sari', '24', '33', '83', '158', '01', 'Rt.11', '2023-12-11'),
('117', 'siti patimah', '32', '28', '60', '157', '01', 'Rt.11', '2023-05-14'),
('118', 'siti aminah', '29', '25', '49', '151', '03', 'Rt.04', '2023-06-14'),
('119', 'siti aminah', '29', '25', '49', '151', '03', 'Rt.04', '2023-07-18'),
('120', 'siti aminah', '29', '25', '53', '151', '03', 'Rt.04', '2023-11-15'),
('121', 'siti aminah', '29', '25', '55', '151', '03', 'Rt.04', '2023-12-13'),
('122', 'hasanah', '21', '24', '45', '142', '01', 'Rt.11', '2023-06-12'),
('123', 'hasanah', '21', '24', '50', '142', '01', 'Rt.11', '2023-07-15'),
('124', 'hasanah', '21', '24', '54', '142', '01', 'Rt.11', '2023-08-12'),
('125', 'hasanah', '21', '24', '58', '142', '01', 'Rt.11', '2023-09-13'),
('126', 'febrianty islami', '30', '18', '36', '155', '05', 'Rt.07', '2023-06-19'),
('127', 'febrianty islami', '30', '18', '38', '155', '05', 'Rt.07', '2023-07-24'),
('128', 'febrianty islami', '30', '18', '40', '155', '05', 'Rt.07', '2023-08-21'),
('129', 'febrianty islami', '30', '18', '40', '155', '05', 'Rt.07', '2023-09-20'),
('130', 'febrianty islami', '30', '18', '43', '155', '05', 'Rt.07', '2023-10-19'),
('131', 'febrianty islami', '30', '18', '44', '155', '05', 'Rt.07', '2023-12-18'),
('132', 'safnah', '20', '25', '48', '158', '02', 'Rt.02', '2023-06-13'),
('133', 'safnah', '20', '25', '49', '158', '02', 'Rt.02', '2023-07-17'),
('134', 'safnah', '20', '25', '53', '158', '02', 'Rt.02', '2023-08-23'),
('135', 'safnah', '20', '25', '53', '158', '02', 'Rt.02', '2023-09-23'),
('136', 'safnah', '20', '25', '57', '158', '02', 'Rt.02', '2023-11-19'),
('137', 'safnah', '20', '25', '58', '158', '02', 'Rt.02', '2023-12-19'),
('138', 'salamah ', '38', '27', '52', '150', '01', 'Rt.11', '2023-06-12'),
('139', 'salamah ', '38', '27', '57', '150', '01', 'Rt.11', '2023-08-19'),
('140', 'salamah ', '38', '27', '55', '150', '01', 'Rt.11', '2023-09-23'),
('141', 'salamah ', '38', '27', '56', '150', '01', 'Rt.11', '2023-10-22'),
('142', 'salamah ', '38', '27', '58', '150', '01', 'Rt.11', '2023-11-19'),
('143', 'salamah ', '38', '27', '57', '150', '01', 'Rt.11', '2023-12-19'),
('144', 'arbayah', '22', '25', '53', '154', '06', 'Rt.09', '2023-07-12'),
('145', 'arbayah', '22', '25', '53', '154', '06', 'Rt.09', '2023-08-19'),
('146', 'arbayah', '22', '25', '54', '154', '06', 'Rt.09', '2023-09-21'),
('147', 'arbayah', '22', '25', '57', '154', '06', 'Rt.09', '2023-10-23'),
('148', 'arbayah', '22', '25', '57', '154', '06', 'Rt.09', '2023-11-19'),
('149', 'arbayah', '22', '25', '57', '154', '06', 'Rt.09', '2023-12-24'),
('150', 'purwati', '33', '27', '58', '153', '01', 'Rt.11', '2023-07-21'),
('151', 'purwati', '33', '27', '58', '153', '01', 'Rt.11', '2023-08-19'),
('152', 'purwati', '33', '27', '60', '153', '01', 'Rt.11', '2023-09-23'),
('153', 'purwati', '33', '27', '62', '153', '01', 'Rt.11', '2023-12-19'),
('154', 'ida damayanti', '36', '27', '55', '147', '04', 'Rt.05', '2023-07-04'),
('155', 'ida damayanti', '36', '27', '57', '147', '04', 'Rt.05', '2023-10-22'),
('156', 'ida damayanti', '36', '27', '59', '147', '04', 'Rt.05', '2023-11-19'),
('157', 'ida damayanti', '36', '27', '59', '147', '04', 'Rt.05', '2023-12-24'),
('158', 'ikrimah safitri', '20', '25', '45', '147', '02', 'Rt.02', '2023-08-15'),
('159', 'ikrimah safitri', '20', '25', '48', '147', '02', 'Rt.02', '2023-10-22'),
('160', 'ikrimah safitri', '20', '25', '50', '147', '02', 'Rt.02', '2023-11-19'),
('161', 'ikrimah safitri', '20', '25', '53', '147', '02', 'Rt.02', '2023-12-19'),
('162', 'anti', '30', '22', '45', '149', '03', 'Rt.04', '2023-09-27'),
('163', 'anti', '30', '22', '44', '149', '03', 'Rt.04', '2023-10-24'),
('164', 'anti', '30', '23', '48', '149', '03', 'Rt.04', '2023-11-19'),
('165', 'anti', '30', '23', '50', '149', '03', 'Rt.04', '2023-12-19'),
('166', 'anti', '35', '24', '52', '148', '01', 'Rt.09', '2023-09-08'),
('167', 'raudatul jannah', '34', '29', '58', '158', '01', 'Rt.10', '2023-10-05'),
('168', 'raudatul jannah', '34', '29', '59', '158', '01', 'Rt.10', '2023-11-19'),
('169', 'noryati', '18', '23', '48', '153', '05', 'Rt.03', '2022-11-19'),
('170', 'noryati', '18', '23', '47', '153', '05', 'Rt.03', '2023-12-24'),
('171', 'dira', '20', '21', '40', '151', '01', 'Rt.09', '2023-11-22'),
('172', 'rabiatul hidayah', '23', '26', '45', '149', '03', 'Rt.03', '2023-11-20'),
('173', 'rabiatul hidayah', '23', '26', '44', '149', '03', 'Rt.03', '2023-12-19'),
('174', 'rabiatul hidayah', '23', '26', '45', '149', '03', 'Rt.03', '2024-01-24'),
('175', 'rabiatul hidayah', '23', '26', '48', '149', '03', 'Rt.03', '2023-02-18'),
('176', 'rabiatul hidayah', '23', '26', '52', '149', '03', 'Rt.03', '2024-03-17'),
('177', 'rabiatul hidayah', '23', '26', '56', '149', '03', 'Rt.03', '2024-04-23'),
('178', 'rabiatul hidayah', '23', '26', '58', '149', '03', 'Rt.03', '2024-05-08'),
('179', 'marlina', '18', '26', '43', '143', '04', 'Rt.05', '2023-11-27'),
('180', 'marlina', '18', '26', '43', '143', '04', 'Rt.05', '2023-12-24'),
('181', 'marlina', '18', '26', '42', '143', '04', 'Rt.05', '2024-01-24'),
('182', 'marlina', '18', '26', '41', '143', '04', 'Rt.05', '2024-02-17'),
('183', 'marlina', '18', '26', '41', '143', '04', 'Rt.05', '2024-03-17'),
('184', 'marlina', '18', '26', '42', '143', '04', 'Rt.05', '2024-04-22'),
('185', 'marlina', '18', '26', '44', '143', '04', 'Rt.05', '2024-05-18'),
('186', 'anggriani', '24', '24', '51', '153', '01', 'Rt.01', '2023-12-19'),
('187', 'anggriani', '24', '24', '48', '153', '01', 'Rt.01', '2024-01-13'),
('188', 'anggriani', '24', '24', '51', '153', '01', 'Rt.01', '2024-03-17'),
('189', 'anggriani', '24', '24', '54', '153', '01', 'Rt.01', '2024-04-20'),
('190', 'wardaniah', '26', '22', '35', '148', '03', 'Rt.03', '2024-01-24'),
('191', 'wardaniah', '26', '22', '36', '148', '03', 'Rt.03', '2024-02-18'),
('192', 'wardaniah', '26', '22', '40', '148', '03', 'Rt.03', '2024-03-17'),
('193', 'wardaniah', '26', '23', '44', '148', '03', 'Rt.03', '2024-04-25'),
('194', 'timah', '22', '22', '40', '149', '03', 'Rt.04', '2024-03-11'),
('195', 'timah', '22', '22', '41', '149', '03', 'Rt.04', '2024-04-08'),
('196', 'rahma sarita', '18', '26', '56', '159', '06', 'Rt.10', '2024-01-26'),
('197', 'rahma sarita', '18', '26', '55', '159', '06', 'Rt.10', '2024-02-18'),
('198', 'rahma sarita', '18', '26', '55', '159', '06', 'Rt.10', '2024-03-17'),
('199', 'rahma sarita', '18', '26', '60', '159', '06', 'Rt.10', '2024-04-25'),
('200', 'salasiah', '28', '24', '35', '145', '02', 'Rt.02', '2024-01-12'),
('202', 'Myala', '22', '25', '55', '156', '02', 'Rt.02', '2024-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma', 'adira1.png'),
(2, 3, 'user', '$2y$10$8XUmLss7.uugsteCr8/.UejwM/2U6iRFq4mmi24oQU8x4LENrIylO', 'ids.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(3, 'Pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasilakhir`
--
ALTER TABLE `hasilakhir`
  ADD PRIMARY KEY (`id_hasilakhir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `FK_user_usergroup` (`Id_Usergroup_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasilakhir`
--
ALTER TABLE `hasilakhir`
  MODIFY `id_hasilakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;