-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2018 at 08:10 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `tanggal`, `isi`, `gambar`) VALUES
(1, 'Laporan AR - Selalu bawa gadget anda kemanapun kapanpun!', '2018-07-13 14:54:55', '\\t\\tDi Indonesia kecelakaan lalu lintas merupakan hal yang membutuhkan perhatian serius. Selain rendahnya kesadaran hukum pengguna jalan dalam berlalu lintas, rendahnya pengetahuan masyarakat mengenai prosedur pelaporan suatu kejadian perkara ketika terjadi kecelakaan juga menjadi kendala tersendiri bagi pihak kepolisian.\r\n\r\n\\t\\tTak jarang pihak kepolisian kesulitan untuk melakukan olah tempat kejadian perkara (TKP) yang meliputi pencarian saksi dan reka ulang kejadian. Hal tersebut juga berdampak pada korban kecelakaan yang pada akhirnya kesulitan untuk memperoleh pelayanan asuransi kecelakaan dari Jasa Raharja. Untuk itu dirancang sebuah Aplikasi Smart Lapor Kecelakaan. Aplikasi yang dibangun  terdiri dari aplikasi Android untuk pengguna dan Sistem web yang akan dioperasikan oleh administrator. Dalam melakukan perancangan aplikasi dilakukan analisa dengan alat bantu skema yaitu Unified Modeling of Language (UML) yang meliputi Use Case Diagram, Activity Diagram, dan Sequence Diagram.\r\n\r\n\\t\\tAplikasi yang telah dibangun diharapkan dapat mempercepat dan memudahkan proses pelaporan kecelakaan sehingga mendapatkan hasil yang lebih baik dan akurat.\r\n\r\nBest regards,\r\nAR Lacak-admin', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `keterangan`) VALUES
(-1, 'root', 'root'),
(1, 'laka', 'Kecelakaan'),
(2, 'kriminal', 'Kriminal'),
(4, 'penemuan', 'Penemuan'),
(6, 'bakar', 'Kebakaran'),
(7, 'macet', 'Kemacetan'),
(9, 'Lampu Rusak', 'Lampu Rusak'),
(10, 'asik', 'asik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecelakaan`
--

CREATE TABLE `tb_kecelakaan` (
  `id_kecelekaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu_pelaporan` datetime NOT NULL,
  `detail` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `deskripsi` text,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi_penting`
--

CREATE TABLE `tb_lokasi_penting` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `streetAddress` varchar(255) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `altitude` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi_penting`
--

INSERT INTO `tb_lokasi_penting` (`id`, `title`, `streetAddress`, `lat`, `lng`, `altitude`, `deskripsi`, `number`, `image`) VALUES
(2, 'Polsek Sukajadi', 'Jl. Rajawali/Ababil Sukajadi, Kp. Melayu, Sukajadi, Kota Pekanbaru, Riau 28122', '0.5140479', '101.433815', 0, 'Kantor kepolisian sektor sukajadi', '076137075', 'polsek/2.jpg'),
(3, 'Polsek Tenayan Raya', 'Jl. Lintas Timur, Kulim, Tenayan Raya, Kulim, Kota', '0.475182', '101.515852', 10, 'Kantor kepolisian sektor tenan raya', '07614840924', 'polsek/3.jpg'),
(5, 'Polsek Bukit Raya', 'Jl. Jend Sudirman No.101', '0.499733', '101.454098', 0, 'Polisi Sektor Kota Bukit Raya', '0761101454098', 'polsek/5.jpg'),
(6, 'Polsek Pekanbaru Kota', 'Tanah Datar, Pekanbaru Kota, Kota Pekanbaru, Riau 28115', '0.5222099', '101.44683', 0, 'Kantor kepolisan sektor pekanbaru kota.', '0811752110', 'polsek/6.jpg'),
(7, 'Pos Gurindam 02', 'Jl. Jend Sudirman - T. Tambusai', '0.51045517', '101.44945845', 0, 'Pos Gurindam', '0761', 'polsek/7.jpg'),
(29, 'Pos Gurindam 5', 'Labuh Baru Barat, Payung Sekaki, Pekanbaru City, Riau 28292, Indonesia', '0.50076607', '101.4189557', 10, 'Pos Polisi Simpang SKA', '0761', 'polsek/29.jpg'),
(30, 'Polsek Tampan', 'Jl. HR Subrantas Gg. Keluarga, Simpang Baru, Tampan, Kota Pekanbaru, Riau 28293', '0.4651159', '101.3879237', 0, 'Kantor Kepolisian Sektor Kampar', '076164110', 'polsek/30.jpg'),
(34, 'Eka Hospital Pekanbaru', 'Jalan Soekarno - Hatta KM 6.5, Tengkerang Barat, Marpoyan Damai, Pekanbaru, Riau 28292', '0.4823295', '101.4202668', 10, 'Eka Hospital Pekanbaru adalah rumah sakit swasta umum yang berkomitmen memberikan pelayanan kesehatan berkualitas dari staf berdedikasi dan profesional, didukung teknologi terkini dan standar fasilitas kesehatan tinggi.', '21', 'polsek/34.jpg'),
(35, 'Rumah Sakit Syafira Pekanbaru', 'Jl. Jenderal Sudirman No.134, Tengkerang Tengah, Marpoyan Damai, Kota Pekanbaru, Riau 28128', '0.4983803', '101.4525751', 10, 'Salam Sehat Sahabat Syafira\r\nDifteri adalah infeksi bakteri yang umumnya menyerang selaput lendir pada hidung dan tenggorokan, serta terkadang dapat memengaruhi kulit. Penyakit ini sangat menular dan termasuk infeksi serius yang berpotensi mengancam jiwa.', '21', 'polsek/34.jpg'),
(36, 'RSI Ibnu Sina', 'Jl. Melati No.60, Harjosari, Sukajadi, Kota Pekanbaru, Riau 28122', '0.4983803', '101.4525751', 10, '1', '1', 'polsek/36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notifikasi`
--

CREATE TABLE `tb_notifikasi` (
  `id_kecelakaan` int(11) NOT NULL,
  `sudah_dibaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `pekerjaan`, `email`, `agama`, `no_hp`, `foto`) VALUES
(1, '1', '356a192b7913b04c54574d18c28d46e6395428ab', '979497997', '162w6', '1', '1995-05-05', 'L', '1', 'afafag', 'gagaava', 'aggava', 'ahbaha', ''),
(2, '1', '356a192b7913b04c54574d18c28d46e6395428ab', '1', '1', '1', '2015-05-05', 'L', '1', '1', 'fauzi@gmail.com', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_web_user`
--

CREATE TABLE `tb_web_user` (
  `id_web_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_web_user`
--

INSERT INTO `tb_web_user` (`id_web_user`, `username`, `password`, `nama_lengkap`, `no_identitas`, `email`, `id_kategori`) VALUES
(15, 'root', '$2a$10$OB5wk1Vbd7n15N3H2stpAuDrtaYd8RJSrPxd/bEbpT/9xbQmNmRba', 'passwordnya : \"root\"', '123', 'root@arlacak.com', -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  ADD PRIMARY KEY (`id_kecelekaan`),
  ADD KEY `fk_userkecelakaan` (`id_user`),
  ADD KEY `FK_KategoriKecelakaan` (`id_kategori`);

--
-- Indexes for table `tb_lokasi_penting`
--
ALTER TABLE `tb_lokasi_penting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD PRIMARY KEY (`id_kecelakaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
  ADD PRIMARY KEY (`id_web_user`),
  ADD KEY `FK_KategoriWebuser` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  MODIFY `id_kecelekaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lokasi_penting`
--
ALTER TABLE `tb_lokasi_penting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
  MODIFY `id_web_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  ADD CONSTRAINT `FK_KategoriKecelakaan` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kecelakaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kecelakaan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kecelakaan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kecelakaan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD CONSTRAINT `tb_notifikasi_ibfk_1` FOREIGN KEY (`id_kecelakaan`) REFERENCES `tb_kecelakaan` (`id_kecelekaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_notifikasi_ibfk_2` FOREIGN KEY (`id_kecelakaan`) REFERENCES `tb_kecelakaan` (`id_kecelekaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
  ADD CONSTRAINT `FK_KategoriWebuser` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
