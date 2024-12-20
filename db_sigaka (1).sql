-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_absen`
--

CREATE TABLE `sigaka_absen` (
  `absen_id` varchar(20) NOT NULL,
  `absen_karyawan_id` varchar(20) NOT NULL,
  `absen_hari` varchar(20) NOT NULL,
  `absen_status` enum('lembur','normal') NOT NULL DEFAULT 'normal',
  `absen_date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_absen`
--

INSERT INTO `sigaka_absen` (`absen_id`, `absen_karyawan_id`, `absen_hari`, `absen_status`, `absen_date_created`) VALUES
('ABS-21233', 'PEG-36035', 'Jumat', 'normal', '2022-09-30 14:00:33'),
('ABS-41323', 'PEG-35659', 'Selasa', 'lembur', '2022-09-20 09:35:23'),
('ABS-41345', 'PEG-35539', 'Selasa', 'normal', '2022-09-20 09:35:46'),
('ABS-41363', 'PEG-35755', 'Selasa', 'normal', '2022-09-20 09:36:03'),
('ABS-41375', 'PEG-35845', 'Selasa', 'lembur', '2022-09-20 09:36:15'),
('ABS-41386', 'PEG-35978', 'Selasa', 'lembur', '2022-09-20 09:36:27'),
('ABS-41402', 'PEG-36035', 'Selasa', 'normal', '2022-09-20 09:36:42'),
('ABS-41412', 'PEG-35911', 'Selasa', 'lembur', '2022-09-20 09:36:53'),
('ABS-67249', 'PEG-87052', 'Kamis', 'normal', '2022-09-29 23:00:49'),
('ABS-69834', 'PEG-62413', 'Senin', 'normal', '2022-09-19 13:43:54'),
('ABS-69846', 'PEG-62364', 'Senin', 'normal', '2022-09-19 13:44:06'),
('ABS-69856', 'PEG-62470', 'Senin', 'normal', '2022-09-19 13:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_gaji`
--

CREATE TABLE `sigaka_gaji` (
  `gaji_id` varchar(20) NOT NULL,
  `gaji_karyawan_id` varchar(20) NOT NULL,
  `gaji_lembur` int(20) DEFAULT '0',
  `gaji_total` int(20) NOT NULL,
  `gaji_bayar_pinjaman` int(20) NOT NULL,
  `gaji_tanggal` date DEFAULT NULL,
  `gaji_bulan_ke` int(11) DEFAULT NULL,
  `gaji_status` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `gaji_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_gaji`
--

INSERT INTO `sigaka_gaji` (`gaji_id`, `gaji_karyawan_id`, `gaji_lembur`, `gaji_total`, `gaji_bayar_pinjaman`, `gaji_tanggal`, `gaji_bulan_ke`, `gaji_status`, `gaji_date_created`) VALUES
('GJI-05496', 'PEG-05376', 0, 2000000, 200000, '2022-09-18', 1, 'sudah', '2022-09-09 13:38:16'),
('GJI-05508', 'PEG-05413', 0, 2000000, 0, '2022-09-18', 1, 'sudah', '2022-09-09 13:38:28'),
('GJI-05520', 'PEG-05452', 1000000, 2000000, 0, '2022-09-18', 1, 'sudah', '2022-09-09 13:38:40'),
('GJI-16858', 'PEG-16833', 0, 2000000, 100000, '2022-09-18', 1, 'sudah', '2022-09-07 09:14:18'),
('GJI-41323', 'PEG-35659', 3500000, 3500000, 500000, '2022-09-20', 1, 'sudah', '2022-09-20 09:35:23'),
('GJI-41346', 'PEG-35539', 0, 3500000, 500000, '2022-09-20', 1, 'sudah', '2022-09-20 09:35:46'),
('GJI-41363', 'PEG-35755', 0, 2500000, 0, '2022-09-20', 1, 'sudah', '2022-09-20 09:36:03'),
('GJI-41375', 'PEG-35845', 5000000, 5000000, 0, '2022-09-20', 1, 'belum', '2022-09-20 09:36:15'),
('GJI-41386', 'PEG-35978', 2000000, 2000000, 0, '2022-09-20', 1, 'belum', '2022-09-20 09:36:26'),
('GJI-41402', 'PEG-36035', 0, 10000000, 0, '2022-09-30', 1, 'belum', '2022-09-20 09:36:42'),
('GJI-41412', 'PEG-35911', 5000000, 5000000, 0, '2022-09-20', 1, 'belum', '2022-09-20 09:36:52'),
('GJI-60389', 'PEG-60246', 0, 2000000, 0, '2022-09-19', 1, 'belum', '2022-09-19 11:06:29'),
('GJI-69834', 'PEG-62413', 0, 3500000, 500000, '2022-09-19', 1, 'sudah', '2022-09-19 13:43:54'),
('GJI-69846', 'PEG-62364', 0, 5000000, 0, '2022-09-19', 1, 'sudah', '2022-09-19 13:44:06'),
('GJI-69856', 'PEG-62470', 0, 5000000, 0, '2022-09-19', 1, 'sudah', '2022-09-19 13:44:16'),
('GJI-74757', 'PEG-74722', 35000, 35000, 0, '2019-07-15', 1, 'sudah', '2019-07-15 14:12:37'),
('GJI-76293', 'PEG-76226', 35000, 70000, 30000, '2019-08-03', 1, 'sudah', '2019-07-15 14:38:13'),
('GJI-86794', 'PEG-84403', 0, 35000, 0, '2022-09-07', 1, 'belum', '2022-09-07 00:53:14'),
('GJI-87071', 'PEG-87052', 1000000, 13000000, 0, '2022-09-29', 1, 'sudah', '2022-09-07 00:57:51'),
('GJI-89296', 'PEG-89280', 1000000, 2000000, 0, '2022-09-18', 1, 'sudah', '2022-09-07 01:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_jabatan`
--

CREATE TABLE `sigaka_jabatan` (
  `jabatan_id` varchar(20) NOT NULL,
  `jabatan_nama` varchar(255) DEFAULT NULL,
  `jabatan_gaji` int(20) DEFAULT NULL,
  `jabatan_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_jabatan`
--

INSERT INTO `sigaka_jabatan` (`jabatan_id`, `jabatan_nama`, `jabatan_gaji`, `jabatan_date_created`) VALUES
('JAB-47249', 'satpam', 2000000, '2022-09-19 07:27:29'),
('JAB-47451', 'TEKNISI', 2500000, '2022-09-19 07:30:51'),
('JAB-47477', 'OPERATOR', 2000000, '2022-09-19 07:31:17'),
('JAB-47533', 'KOORDINATOR', 3000000, '2022-09-19 07:32:13'),
('JAB-47652', 'PIMPINAN', 5000000, '2022-09-19 07:34:12'),
('JAB-86993', 'programmer', 3500000, '2022-09-07 00:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_karyawan`
--

CREATE TABLE `sigaka_karyawan` (
  `karyawan_id` varchar(20) NOT NULL,
  `karyawan_jabatan_id` varchar(20) DEFAULT NULL,
  `karyawan_nama` varchar(255) DEFAULT NULL,
  `karyawan_tempat_lahir` varchar(255) DEFAULT NULL,
  `karyawan_tanggal_lahir` date DEFAULT NULL,
  `karyawan_alamat` text,
  `karyawan_tanggal_gabung` date DEFAULT NULL,
  `karyawan_nomor_hp` varchar(255) DEFAULT NULL,
  `karyawan_no_rekening` varchar(30) DEFAULT NULL,
  `karyawan_date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_karyawan`
--

INSERT INTO `sigaka_karyawan` (`karyawan_id`, `karyawan_jabatan_id`, `karyawan_nama`, `karyawan_tempat_lahir`, `karyawan_tanggal_lahir`, `karyawan_alamat`, `karyawan_tanggal_gabung`, `karyawan_nomor_hp`, `karyawan_no_rekening`, `karyawan_date_created`) VALUES
('PEG-05376', 'JAB-86993', 'mila', 'banjar', '2022-09-09', 'banjar', '2022-09-09', '082367542345/mila@gmail.com', '12345', '2022-09-09 13:36:16'),
('PEG-21180', 'JAB-47249', 'ari ngep ngep', 'vvmdv', '2022-09-30', 'djfkahj', '2022-09-30', '9689582548', '5354754954', '2022-09-30 13:59:40'),
('PEG-35539', 'JAB-86993', 'idden', 'banjar', '2022-09-20', 'banjar', '2022-09-20', '082367840974/idden@gmail.com', '56797559749', '2022-09-20 07:58:59'),
('PEG-35659', 'JAB-86993', 'ari', 'banjar', '2022-09-20', 'banjar', '2022-09-20', '085467857326/ari@gmail.com', '8764599866', '2022-09-20 08:00:59'),
('PEG-35755', 'JAB-47451', 'audina', 'banjar', '2022-09-20', 'banjar', '2022-09-20', '087456782315/audina@gmail.com', '858757756785', '2022-09-20 08:02:35'),
('PEG-35845', 'JAB-47652', 'gamar', 'bandung', '2022-09-08', 'bandung', '2022-09-20', '098234564534/gamar@gmail.com', '57597569759', '2022-09-20 08:04:05'),
('PEG-35911', 'JAB-47652', 'aldy', 'bandung', '2022-09-20', 'bandung', '2022-09-20', '085345678761/aldy@gmail.com', '454854848747', '2022-09-20 08:05:11'),
('PEG-35978', 'JAB-47477', 'irsam', 'bandung', '2022-09-20', 'bandung', '2022-09-20', '086576543245/irsam@gmail.com', '775447466444868', '2022-09-20 08:06:18'),
('PEG-36035', 'JAB-47652', 'gifari', 'bandung', '2022-09-20', 'bandung', '2022-09-20', '086456782341/gifari@gmail.com', '65756747467', '2022-09-20 08:07:15'),
('PEG-62364', 'JAB-47652', 'dalfa', 'banjar', '2022-09-19', 'banjar', '2022-09-19', '082378765462/dalfa@gmail.com', '76545678', '2022-09-19 11:39:24'),
('PEG-87052', 'JAB-47652', 'gani', 'banjar', '2022-09-07', 'banjar', '2022-09-07', '082317330549/maulanag980@gmail.com', '87654321', '2022-09-07 00:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_pengguna`
--

CREATE TABLE `sigaka_pengguna` (
  `pengguna_id` int(20) NOT NULL,
  `pengguna_username` varchar(255) DEFAULT NULL,
  `pengguna_password` varchar(255) DEFAULT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_foto` text,
  `pengguna_hak_akses` enum('manajer','owner') DEFAULT NULL,
  `pengguna_date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_pengguna`
--

INSERT INTO `sigaka_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_foto`, `pengguna_hak_akses`, `pengguna_date_created`) VALUES
(1, 'gani', '202cb962ac59075b964b07152d234b70', 'gani maulana', NULL, 'manajer', '2019-06-28 21:06:43'),
(2, 'owner', '202cb962ac59075b964b07152d234b70', 'gani maulana', NULL, 'owner', '2019-07-15 12:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `sigaka_pinjam`
--

CREATE TABLE `sigaka_pinjam` (
  `pinjam_id` varchar(20) NOT NULL,
  `pinjam_karyawan_id` varchar(20) NOT NULL,
  `pinjam_jumlah` int(20) NOT NULL,
  `pinjam_bayar` int(20) NOT NULL DEFAULT '0',
  `pinjam_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigaka_pinjam`
--

INSERT INTO `sigaka_pinjam` (`pinjam_id`, `pinjam_karyawan_id`, `pinjam_jumlah`, `pinjam_bayar`, `pinjam_date_created`) VALUES
('PJM-53532', 'PEG-35659', 1000000, 0, '2022-09-27 11:38:52'),
('PJM-53563', 'PEG-35539', 1256465, 0, '2022-09-27 11:39:23'),
('PJM-53593', 'PEG-62364', 500000, 0, '2022-09-27 11:39:53'),
('PJM-53610', 'PEG-05376', 400000, 0, '2022-09-27 11:40:10'),
('PJM-53629', 'PEG-35755', 300000, 0, '2022-09-27 11:40:29'),
('PJM-53646', 'PEG-87052', 700000, 0, '2022-09-27 11:40:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sigaka_absen`
--
ALTER TABLE `sigaka_absen`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `sigaka_gaji`
--
ALTER TABLE `sigaka_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indexes for table `sigaka_jabatan`
--
ALTER TABLE `sigaka_jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `sigaka_karyawan`
--
ALTER TABLE `sigaka_karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indexes for table `sigaka_pengguna`
--
ALTER TABLE `sigaka_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `sigaka_pinjam`
--
ALTER TABLE `sigaka_pinjam`
  ADD PRIMARY KEY (`pinjam_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sigaka_pengguna`
--
ALTER TABLE `sigaka_pengguna`
  MODIFY `pengguna_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
