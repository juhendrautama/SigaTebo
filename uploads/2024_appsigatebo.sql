-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 19, 2024 at 05:02 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_appsigatebo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(7) NOT NULL,
  `idUnitKerja` int(7) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `pass_samaran` varchar(50) NOT NULL,
  `alamat` text,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `KodeLogin` int(5) NOT NULL,
  `tgl` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `idUnitKerja`, `nama_admin`, `user`, `pass`, `pass_samaran`, `alamat`, `no_tlpn`, `level`, `KodeLogin`, `tgl`) VALUES
(1, 1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', '123', NULL, '081371', 1, 1, '2021-01-23'),
(15, 5, 'hendra', 'userbps', '202cb962ac59075b964b07152d234b70', '123', '-', '-', 2, 1, '2024-05-17'),
(16, 4, 'hendinkes', 'userdinkes', '202cb962ac59075b964b07152d234b70', '123', '-', '-', 2, 1, '2024-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataDasarMaster`
--

CREATE TABLE `tbl_dataDasarMaster` (
  `idDataDasar` int(7) NOT NULL,
  `idUnitKerja` int(7) NOT NULL,
  `idKategoriData` int(7) NOT NULL,
  `idJudulData` int(7) NOT NULL,
  `idElemenData` int(7) NOT NULL,
  `nilaiData` int(55) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `tgl_Input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dataDasarMaster`
--

INSERT INTO `tbl_dataDasarMaster` (`idDataDasar`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `idElemenData`, `nilaiData`, `satuan`, `tgl`, `tgl_Input`) VALUES
(12, 5, 1, 10, 11, 10, 'Angka', '2024-05-18', '2024-05-18'),
(13, 5, 1, 10, 12, 10, 'Angka', '2024-05-18', '2024-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_elemenData`
--

CREATE TABLE `tbl_elemenData` (
  `idElemenData` int(7) NOT NULL,
  `idUnitKerja` int(7) NOT NULL,
  `idKategoriData` int(7) NOT NULL,
  `idJudulData` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_elemenData`
--

INSERT INTO `tbl_elemenData` (`idElemenData`, `idUnitKerja`, `idKategoriData`, `idJudulData`, `nama`, `tgl`) VALUES
(11, 5, 1, 10, 'P', '2024-05-18'),
(12, 5, 1, 10, 'L', '2024-05-18'),
(14, 5, 1, 11, 'asas', '2024-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_judulData`
--

CREATE TABLE `tbl_judulData` (
  `idJudulData` int(7) NOT NULL,
  `idKategoriData` int(7) NOT NULL,
  `idUnitKerja` int(7) NOT NULL,
  `id_admin` int(7) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_judulData`
--

INSERT INTO `tbl_judulData` (`idJudulData`, `idKategoriData`, `idUnitKerja`, `id_admin`, `judul`, `tgl`) VALUES
(10, 1, 5, 15, 'Indeks Pembangunan Manusia (IPM)', '2024-05-17'),
(11, 1, 5, 15, 'Indeks Pembangunan Gender (IPG)', '2024-05-17'),
(12, 1, 5, 15, 'Indek Pemberdayaan Gender (IDG)', '2024-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoriData`
--

CREATE TABLE `tbl_kategoriData` (
  `idKategoriData` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Ket` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kategoriData`
--

INSERT INTO `tbl_kategoriData` (`idKategoriData`, `nama`, `Ket`, `tgl`) VALUES
(1, 'Makro', 'Menyajikan data Indeks Pembangunan Manusia (IPM), Indeks Pembangunan Gender (IPG) dan Indeks Pemberdayaan Gender (IDG) Penduduk Kota Jambi.', '2024-05-13'),
(4, 'Pendidikan', 'Menyajikan data pelaksanaan pendidikan di Kota Jambi seperti Angka Partisipasi Sekolah (APS), Angka Partisipasi Murni (APM), Angka Partisipasi Kasar (APK) dan Angka Melek Huruf Penduduk Kota Jambi.', '2024-05-13'),
(5, 'Kesehatan', 'Menyajikan data seperti Data Jaminan Kesehatan, Angka Harapan Hidup, Penderita HIV/ AIDS, Penduduk terpapar Covid-19', '2024-05-13'),
(6, 'Kependudukan dan Keluarga Berencana', 'Menyajikan data seperti Jumlah Penduduk Berdasarkan Jenis Kelamin, Penduduk Berdasarkan Kelompok Umur dan Jenis Kelamin, Penduduk Produktif,  Usia Perkawinan Pertama dan data Pemakaian Alat Kontrasepsi.', '2024-05-13'),
(7, 'Ekonomi dan Ketenagakerjaan', 'Menggambarkan situasi ekonomi dan pencarian kerja seperti data penduduk usia kerja, pencari kerja terdaftar, tenaga kerja migran, Tingkat Pengangguran Terbuka (TPT) dan Tingkat Partisipasi Angkatan Kerja (TPAK).', '2024-05-13'),
(8, 'Hukum dan Sosial Budaya', 'Menyajikan data Penghuni Lembaga Pemasyarakatan, Penduduk Lanjut Usia, Perempuan Kepala Rumah Tangga.', '2024-05-13'),
(9, 'Politik dan Pengambilan Keputusan', 'Menyajikan data Partisipasi Perempuan di Lembaga Legislatif, Persentase Perempuan di Lembaga Eksekutif, Organisasi Perempuan.', '2024-05-13'),
(10, 'Pemberdayaan Perempuan dan Perlindungan Anak', 'Menyajikan data kekerasan terhadap perempuan dan anak yang dilaporkan dan ditangani oleh UPTD PPA Kota Jambi.', '2024-05-13'),
(11, 'Data Anak', 'Menyajikan data seperti sekolah ramah anak, taman ramah anak, pemanfaatan waktu luang, ruang bermain ramah anak (RBRA).', '2024-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publikasi`
--

CREATE TABLE `tbl_publikasi` (
  `id_publikasi` int(7) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_admin` int(7) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settingapp`
--

CREATE TABLE `tbl_settingapp` (
  `idSetting` int(7) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `judulUtama` varchar(85) NOT NULL,
  `gambarUtama` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unitKerja`
--

CREATE TABLE `tbl_unitKerja` (
  `idUnitKerja` int(7) NOT NULL,
  `namaUnit` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_unitKerja`
--

INSERT INTO `tbl_unitKerja` (`idUnitKerja`, `namaUnit`, `alamat`, `lat`, `long`, `tgl`) VALUES
(1, 'dinsosp2pa', ' Komplek Perkantoran Bumi Seentak Galah Serengkuh Dayung KM. 12 Muara Tebo', '-1.4638698268076764', '102.35914978464488', '2024-05-07'),
(4, 'Dinkes ', 'jln maju mundur', '-', '-', '2024-05-12'),
(5, 'Badan Pusat Statistik', 'Jl. A Yani No.4, Telanaipura, Kec. Telanaipura, Kota Jambi, Jambi 36122', '1.6056834795716863', '103.58295708465852', '2024-05-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_dataDasarMaster`
--
ALTER TABLE `tbl_dataDasarMaster`
  ADD PRIMARY KEY (`idDataDasar`);

--
-- Indexes for table `tbl_elemenData`
--
ALTER TABLE `tbl_elemenData`
  ADD PRIMARY KEY (`idElemenData`);

--
-- Indexes for table `tbl_judulData`
--
ALTER TABLE `tbl_judulData`
  ADD PRIMARY KEY (`idJudulData`);

--
-- Indexes for table `tbl_kategoriData`
--
ALTER TABLE `tbl_kategoriData`
  ADD PRIMARY KEY (`idKategoriData`);

--
-- Indexes for table `tbl_publikasi`
--
ALTER TABLE `tbl_publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `tbl_settingapp`
--
ALTER TABLE `tbl_settingapp`
  ADD PRIMARY KEY (`idSetting`);

--
-- Indexes for table `tbl_unitKerja`
--
ALTER TABLE `tbl_unitKerja`
  ADD PRIMARY KEY (`idUnitKerja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_dataDasarMaster`
--
ALTER TABLE `tbl_dataDasarMaster`
  MODIFY `idDataDasar` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_elemenData`
--
ALTER TABLE `tbl_elemenData`
  MODIFY `idElemenData` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_judulData`
--
ALTER TABLE `tbl_judulData`
  MODIFY `idJudulData` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kategoriData`
--
ALTER TABLE `tbl_kategoriData`
  MODIFY `idKategoriData` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_publikasi`
--
ALTER TABLE `tbl_publikasi`
  MODIFY `id_publikasi` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_settingapp`
--
ALTER TABLE `tbl_settingapp`
  MODIFY `idSetting` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_unitKerja`
--
ALTER TABLE `tbl_unitKerja`
  MODIFY `idUnitKerja` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
