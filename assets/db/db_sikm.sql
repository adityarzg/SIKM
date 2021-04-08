-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 08:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `no_id` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`no_id`, `nama`, `tgl_lahir`, `no_tlp`, `jenis_kelamin`, `tanggal`, `alamat`, `pekerjaan`, `keperluan`) VALUES
('0000000000000001', 'Van De Beak', '1990-05-08', '084645487789', 'Laki-Laki', '2021-03-15 01:54:00', ' Soendastraat 35-2 Amsterdam', 'Mid', 'Main'),
('0000000000000002', 'Radolph Fan De Bert', '2021-03-02', '084578455567', 'Laki-Laki', '2021-03-18 00:17:00', 'World', 'Go Around', 'sidang 2'),
('0000000000000003', 'Guss Hiddink', '1986-12-02', '0845999689', 'Laki-Laki', '2021-03-18 01:41:00', 'Netherland', 'Coach', 'Latihan'),
('1213015906960002', 'Gita Anisa Utami', '1996-06-19', '081346191983', 'Perempuan', '2021-03-16 17:50:00', 'Jakarta', 'PNS', 'Sidang'),
('1218172008960002', 'Aditya Reza Gusnanda', '1996-08-20', '085277644589', 'Laki-Laki', '2021-03-01 23:06:00', 'Medan', 'PNS', 'Sidang'),
('1515115115154545', 'Tamu 1', '2003-03-06', '084555646848', 'Laki-Laki', '2021-04-06 10:12:00', 'Palu', 'PNS', 'Sidang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaiikm`
--

CREATE TABLE `tbl_nilaiikm` (
  `id` int(10) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `tanggal_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilaiikm`
--

INSERT INTO `tbl_nilaiikm` (`id`, `nilai`, `tanggal_input`) VALUES
(1, '87.99', '2021-03-17 23:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satker`
--

CREATE TABLE `tbl_satker` (
  `id` int(11) NOT NULL,
  `nama_satker` varchar(250) NOT NULL,
  `alamat_satker` text NOT NULL,
  `logo_satker` text NOT NULL,
  `jabatan_ttd` varchar(250) NOT NULL,
  `pejabat_ttd` varchar(250) NOT NULL,
  `nip_ttd` varchar(25) NOT NULL,
  `kota_ttd` varchar(250) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `situs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_satker`
--

INSERT INTO `tbl_satker` (`id`, `nama_satker`, `alamat_satker`, `logo_satker`, `jabatan_ttd`, `pejabat_ttd`, `nip_ttd`, `kota_ttd`, `no_tlp`, `no_hp`, `email`, `situs`) VALUES
(1, 'Pengadilan Tata Usaha Negara Palu', 'Jalan Prof. Moh. Yamin, S.H. No.52, Tatura Utara, Kec. Palu Sel., Kota Palu, Sulawesi Tengah', 'logo_ptunpl.png', 'Kepala Sub Bagian Kepegawaian dan Ortala', 'Imelda Christine, SE.', '19800709 200604 2 002', 'Palu', '045-1483385', '', 'ptun.palu@gmail.com', 'https://ptun-palu.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `id_sikm` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `fasilitas_informasi` varchar(15) NOT NULL,
  `fasilitas_toilet` varchar(15) NOT NULL,
  `parkir_kendaraan` varchar(15) NOT NULL,
  `kebersihan` varchar(15) NOT NULL,
  `taman` varchar(15) NOT NULL,
  `sarana_ibadah` varchar(15) NOT NULL,
  `ruang_tunggu` varchar(15) NOT NULL,
  `sistem_pembayaran` varchar(15) NOT NULL,
  `pelayanan_pendaftaran` varchar(15) NOT NULL,
  `persiapan_persidangan` varchar(15) NOT NULL,
  `fasilitas_ruang_sidang` varchar(15) NOT NULL,
  `proses_persidangan` varchar(15) NOT NULL,
  `waktu_pemeriksaan` varchar(15) NOT NULL,
  `pemeriksaan_setempat` varchar(15) NOT NULL,
  `profesionalitas_hakim` varchar(15) NOT NULL,
  `pemberian_salinan_putusan` varchar(15) NOT NULL,
  `pelayanan_informasi` varchar(15) NOT NULL,
  `pelayanan_pengaduan` varchar(15) NOT NULL,
  `pelayanan_persuratan` varchar(15) NOT NULL,
  `psbp` varchar(15) NOT NULL,
  `eksekusi` varchar(15) NOT NULL,
  `sikap_petugas` varchar(15) NOT NULL,
  `kemampuan_petugas` varchar(15) NOT NULL,
  `penampilan_petugas` varchar(15) NOT NULL,
  `kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_survey`
--

INSERT INTO `tbl_survey` (`id_sikm`, `nama`, `no_tlp`, `tanggal`, `fasilitas_informasi`, `fasilitas_toilet`, `parkir_kendaraan`, `kebersihan`, `taman`, `sarana_ibadah`, `ruang_tunggu`, `sistem_pembayaran`, `pelayanan_pendaftaran`, `persiapan_persidangan`, `fasilitas_ruang_sidang`, `proses_persidangan`, `waktu_pemeriksaan`, `pemeriksaan_setempat`, `profesionalitas_hakim`, `pemberian_salinan_putusan`, `pelayanan_informasi`, `pelayanan_pengaduan`, `pelayanan_persuratan`, `psbp`, `eksekusi`, `sikap_petugas`, `kemampuan_petugas`, `penampilan_petugas`, `kritik_saran`) VALUES
(1, 'Van De Beek', '084645487789', '2021-03-23 11:11:00', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas Dengan Pelayanan nya'),
(2, 'Radolph Fan De Bert', '084578455567', '2021-03-23 11:16:00', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Puas', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas', 'Sangat Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Perbaiki Kembali'),
(3, 'Guss Hiddink', '0845999689', '2021-03-23 13:47:00', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Cukup Puas', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas', 'Cukup Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas', 'Puas', 'Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Coba lagi'),
(4, 'Van De Beak', '084645487789', '2021-04-05 00:39:00', 'Sangat Puas', 'Puas', 'Puas', 'Cukup Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Cukup Puas', 'Cukup Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Puas', 'Cukup Puas', 'Cukup Puas', 'Oke lah'),
(5, 'Tamu 1', '084555646848', '2021-04-06 10:15:00', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'Adtya Reza Gusnanda', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'vandebek', 'Van De Beek', '1a1dc91c907325c69271ddf0c944bc72'),
(11, 'system', 'System', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visit`
--

CREATE TABLE `tbl_visit` (
  `id` int(11) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visit`
--

INSERT INTO `tbl_visit` (`id`, `no_id`, `nama`, `tgl_lahir`, `no_tlp`, `jenis_kelamin`, `tanggal`, `alamat`, `pekerjaan`, `keperluan`) VALUES
(1, '1213015906960002', 'Gita Anisa Utami', '1996-06-19', 2147483647, 'Perempuan', '2021-03-17 09:45:00', 'Jakarta', 'PNS', 'Sidang'),
(3, '1218172008960002', 'Aditya Reza Gusnanda', '1996-08-20', 2147483647, 'Laki-Laki', '2021-03-17 23:42:00', 'Medan', 'PNS', 'coba ya'),
(4, '1218172008960002', 'Aditya Reza Gusnanda', '1996-08-20', 2147483647, 'Laki-Laki', '2021-03-01 13:43:00', 'Medan', 'PNS', 'Tes Kedua'),
(5, '0000000000000001', 'Van De Beek', '1990-05-08', 84644788, 'Laki-Laki', '2021-03-16 01:56:00', ' Soendastraat 35-2 Amsterdam', 'Mid', 'sidang'),
(7, '0000000000000002', 'Radolph Fan De bert', '2021-03-02', 2147483647, 'Laki-Laki', '2021-03-16 01:57:00', 'World', 'Go Around', 'Sidang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tbl_nilaiikm`
--
ALTER TABLE `tbl_nilaiikm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_satker`
--
ALTER TABLE `tbl_satker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`id_sikm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visit`
--
ALTER TABLE `tbl_visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nilaiikm`
--
ALTER TABLE `tbl_nilaiikm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_satker`
--
ALTER TABLE `tbl_satker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `id_sikm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_visit`
--
ALTER TABLE `tbl_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
