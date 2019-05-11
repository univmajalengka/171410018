-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 07:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi_kepri_mitra_sejahtera`
--

-- --------------------------------------------------------

--
-- Table structure for table `ang`
--

CREATE TABLE `ang` (
  `date_ang` date NOT NULL COMMENT 'Tanggal Angsuran',
  `nota_ang` int(6) NOT NULL,
  `id_p` int(11) NOT NULL COMMENT 'No. Pinjaman',
  `pokok_ang` decimal(50,0) NOT NULL COMMENT 'pokok/Besaran pinjaman',
  `ang` decimal(50,0) NOT NULL COMMENT 'Angsuran',
  `prov_ang` decimal(50,0) NOT NULL COMMENT 'Provisi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ang`
--

INSERT INTO `ang` (`date_ang`, `nota_ang`, `id_p`, `pokok_ang`, `ang`, `prov_ang`) VALUES
('2019-04-17', 1022, 3331468, '750000', '50000', '5000'),
('2019-03-13', 2236, 3334512, '2000000', '100000', '5000'),
('2019-03-21', 2342, 3334578, '500000', '50000', '5000'),
('2019-04-19', 3876, 3337659, '1000000', '100000', '5000'),
('2019-03-09', 4443, 3337778, '450000', '45000', '5000'),
('2019-03-07', 5590, 3337913, '1000000', '100000', '5000'),
('2019-04-01', 6557, 3338298, '750000', '50000', '5000'),
('2019-06-03', 7998, 3339077, '200000', '20000', '5000'),
('2019-04-18', 8142, 3339946, '450000', '50000', '5000'),
('2019-05-23', 9346, 3339992, '500000', '50000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_a` int(7) NOT NULL COMMENT 'No.Anggota',
  `id_user` int(6) NOT NULL,
  `tgl_d` date NOT NULL COMMENT 'Tanggal pendaftaran',
  `nama_anggota` varchar(50) NOT NULL COMMENT 'Nama Lengkap',
  `alamat_anggota` text NOT NULL COMMENT 'Alamat',
  `jk_anggota` char(1) NOT NULL COMMENT 'Jenis kelamin',
  `tgl_l_anggota` date NOT NULL COMMENT 'Tanggal lahir',
  `hp_anggota` varchar(20) NOT NULL COMMENT 'No.Telepon'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_a`, `id_user`, `tgl_d`, `nama_anggota`, `alamat_anggota`, `jk_anggota`, `tgl_l_anggota`, `hp_anggota`) VALUES
(1111211, 691377, '2019-05-08', 'Oktaviani', 'desa ranji', 'p', '2019-05-23', '034030545'),
(1111245, 593887, '2019-03-01', 'Ahmad sukri', 'Desa Palasah', 'L', '2001-10-03', '08122245676'),
(1112259, 339821, '2019-04-04', 'Susi Susanti', 'Desa Lame', 'P', '1999-09-10', '081223245678'),
(1112436, 991155, '2019-03-13', 'Wawan Nur Cahyo', 'Desa Mirat', 'L', '1999-05-11', '081333479469'),
(1112999, 691377, '2019-03-02', 'Tika oktavia', 'Desa Bongas', 'P', '1999-04-13', '082222348976'),
(1115671, 317896, '2019-03-01', 'Maman Abdurahman', 'Desa Leuwimunding', 'L', '1999-04-09', '089299872345'),
(1116694, 902888, '2019-03-18', 'Tia Rahmawati', 'Desa Tanjungsari', 'P', '1999-01-07', '081222229876'),
(1117401, 111198, '2019-05-10', 'Joko Driyono', 'Desa Leuwikujang', 'L', '1999-04-19', '082222341111'),
(1118811, 567239, '2019-04-04', 'Alfin Bastian', 'Desa Palasah', 'L', '1999-09-11', '085278786597'),
(1119457, 502682, '2019-05-14', 'Didin Badarudin', 'Desa Sindanghaji', 'L', '1997-04-22', '089236788899'),
(1119829, 229118, '2019-04-10', 'Rita Amalia', 'Desa Ciborelang', 'P', '1999-08-09', '081222422222');

-- --------------------------------------------------------

--
-- Table structure for table `pinj`
--

CREATE TABLE `pinj` (
  `id_a` int(7) NOT NULL COMMENT 'No.Anggota',
  `id_p` int(11) NOT NULL COMMENT 'No.Pinjaman',
  `date_pinj` date NOT NULL COMMENT 'tanggal pinjam',
  `jangka_pinj` varchar(10) NOT NULL COMMENT 'jangka waktu',
  `nom_pinj` decimal(10,0) NOT NULL COMMENT 'besar pinjaman',
  `ket_pinj` text NOT NULL COMMENT 'keterangan',
  `lunas_pinj` varchar(1) NOT NULL COMMENT 'Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinj`
--

INSERT INTO `pinj` (`id_a`, `id_p`, `date_pinj`, `jangka_pinj`, `nom_pinj`, `ket_pinj`, `lunas_pinj`) VALUES
(1111245, 3331468, '2019-03-20', '2 Bulan', '500000', '-', 'B'),
(1119829, 3334512, '2019-04-25', '1 Minggu', '200000', '-', 'L'),
(1112259, 3334578, '2019-03-29', '3 Bulan', '1000000', '-', 'L'),
(1115671, 3337659, '2019-03-20', '1 Minggu', '150000', '-', 'L'),
(1119457, 3337778, '2019-05-30', '3 Bulan', '1000000', '-', 'B'),
(1117401, 3337913, '2019-06-13', '3 Bulan', '1000000', '-', 'B'),
(1112436, 3338298, '2019-04-25', '3 Minggu', '350000', '-', 'L'),
(1116694, 3339077, '2019-04-06', '2 Minggu', '200000', '-', 'L'),
(1118811, 3339946, '2019-04-26', '1 Bulan', '400000', '-', 'L'),
(1112999, 3339992, '2019-03-15', '5 Minggu', '450000', '-', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `simp`
--

CREATE TABLE `simp` (
  `id_a` int(7) NOT NULL COMMENT 'No.Anggota',
  `date_simp` date NOT NULL COMMENT 'Tanggal simpanan',
  `jenis_simp` varchar(50) NOT NULL COMMENT 'Jenis simpanan',
  `jml_simp` decimal(50,0) NOT NULL COMMENT 'jumlah',
  `ket_simp` text NOT NULL COMMENT 'keterangan',
  `id_simp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simp`
--

INSERT INTO `simp` (`id_a`, `date_simp`, `jenis_simp`, `jml_simp`, `ket_simp`, `id_simp`) VALUES
(1111245, '2019-03-20', 'pokok', '100000', '-', 1),
(1112259, '2019-03-28', 'pokok', '100000', '-', 2),
(1112436, '2019-04-30', 'pokok', '100000', '-', 3),
(1112999, '2019-03-28', 'pokok', '100000', '-', 4),
(1115671, '2019-03-02', 'pokok', '100000', '-', 5),
(1116694, '2019-04-27', 'pokok', '100000', '-', 6),
(1117401, '2019-06-22', 'pokok', '100000', '-', 7),
(1118811, '2019-04-26', 'pokok', '100000', '-', 8),
(1119457, '2019-06-04', 'pokok', '100000', '-', 9),
(1111211, '2019-05-07', 'pokok', '1000000', '11111', 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Username`, `password`) VALUES
(111198, 'driyonoM', '843f36ee62308cebf78d424c48c013be'),
(229118, 'Rita2', 'e7edbd8afc34be62bc2e0d53405302e9'),
(317896, 'Memendurahmen99', '04fbae4903327c63d7f5b0554eed90da'),
(339821, 'susantiS', 'b455f684ef0e23dc478f6062de196e9a'),
(502682, 'Dins96', '3db6c19b073ce6a509547140fc79660a'),
(567239, 'Alfinmustache', '27e79f9a60a3d8627e09ba555aae387f'),
(593887, 'sukri11', 'ee823e66b2c69861b8a3e333d3d8acc8'),
(691377, 'oktavia22', '9881e409a7f4299ee267bd775d18f1fd'),
(902888, 'tiaChan', '5e0a47156df4f53f8b29071aff122713'),
(991155, 'Wcahyo', '5cb68f0b06a9606a6063177a20ebca86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ang`
--
ALTER TABLE `ang`
  ADD PRIMARY KEY (`nota_ang`),
  ADD KEY `id_a` (`id_p`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pinj`
--
ALTER TABLE `pinj`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_a` (`id_a`);

--
-- Indexes for table `simp`
--
ALTER TABLE `simp`
  ADD PRIMARY KEY (`id_simp`),
  ADD KEY `id_a` (`id_a`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ang`
--
ALTER TABLE `ang`
  MODIFY `nota_ang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9347;

--
-- AUTO_INCREMENT for table `pinj`
--
ALTER TABLE `pinj`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT COMMENT 'No.Pinjaman', AUTO_INCREMENT=3339994;

--
-- AUTO_INCREMENT for table `simp`
--
ALTER TABLE `simp`
  MODIFY `id_simp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=991157;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ang`
--
ALTER TABLE `ang`
  ADD CONSTRAINT `ang_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `pinj` (`id_p`);

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pinj`
--
ALTER TABLE `pinj`
  ADD CONSTRAINT `pinj_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `anggota` (`id_a`);

--
-- Constraints for table `simp`
--
ALTER TABLE `simp`
  ADD CONSTRAINT `simp_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `anggota` (`id_a`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
