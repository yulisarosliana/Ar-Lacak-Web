-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 08:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ar_pekanbaru`
--

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
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecelakaan`
--

INSERT INTO `tb_kecelakaan` (`id_kecelekaan`, `id_user`, `lokasi`, `foto`, `waktu_pelaporan`, `detail`, `lat`, `lng`) VALUES
(1, 1, 'panamm', 'car-accident-1.png', '2017-09-26 11:22:36', 'jasdjhsab', 1.123213, 0.123213),
(3, 1, 'Kampar', 'dian afrian.JPG', '2017-09-26 11:22:36', 'asasd', 1.123123, 2.1231231),
(4, 1, 'Kulima', 'testschool.sql', '2017-09-26 11:22:36', 'blablablablab', 1.123213, 2.313131),
(5, 1, 'rumah iyan', 'car-accident-1.png', '2017-09-26 11:22:36', 'asdasdsa', 1.1232, 2.123123),
(6, 1, 'haha', 'dian afrian.JPG', '2017-09-26 11:22:36', 'ajksdkja', 1.1232, 2.123213),
(7, 2, 'Jl. garuda sakti', 'car-accident-1.png', '2017-10-03 11:22:36', 'Kecelakaan terjadi antara pengendara sepeda motor dan supir truk pasir. Korban jiwa 1 orang, luka berat 3 orang.', 1.125125, 1.125125);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi_penting`
--

CREATE TABLE `tb_lokasi_penting` (
  `id_lokasi_penting` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `altitude` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi_penting`
--

INSERT INTO `tb_lokasi_penting` (`id_lokasi_penting`, `nama`, `alamat`, `lat`, `lng`, `altitude`, `deskripsi`, `no_telp`, `foto`) VALUES
(1, 'Polsek Tampan', 'Jl. Hr Subrantas, Gg. Keluarga, Simpang Baru, Tampan\r\nKota Pekanbaru, Riau 28293, ', 1.123123, 2.1313143, 0, 'Kantor kepolisian sektor tampan', '0761201254', 'polsek-tampan1.jpg'),
(2, 'Polsek Sukajadi', 'Jl. Rajawali/Ababil Sukajadi, Kp. Melayu, Sukajadi, Kota Pekanbaru, Riau 28122', 0.5140479, 101.433815, 0, 'Kantor kepolisian sektor sukajadi', '076137075', 'polsek-sukajadi1.jpg'),
(3, 'Polsek Tenayan Raya', 'Jl. Lintas Timur, Kulim, Tenayan Raya, Kulim, Kota', 1.123123, 2.123123, 10, 'kjadjhasjkd', '(0761) 4840924', 'polsek-tenayanraya1.jpg'),
(4, 'ajskdvkjn', 'anskjdk', 1.1232, 1.123, 123, '1afasf', '123123', 'polsek-tenayanraya1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nomor_penting`
--

CREATE TABLE `tb_nomor_penting` (
  `id_nomor_penting` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan_saran`
--

CREATE TABLE `tb_pengaduan_saran` (
  `id_pengaduan_saran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_pesan` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaduan_saran`
--

INSERT INTO `tb_pengaduan_saran` (`id_pengaduan_saran`, `id_user`, `judul_pesan`, `isi_pesan`) VALUES
(1, 1, 'review', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(2, 1, 'kritik', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(3, 2, 'saran', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `pekerjaan`, `email`, `agama`) VALUES
(1, 'radinall', 'radinal', '132213', 'radinal aja', 'rengat', '1996-11-29', 'L', 'asjdhsajd', 'ASJDNASJ', 'radinal@google.com', 'islam'),
(2, 'adryan', 'adryan', '1145', 'Adryan Eka', 'tembilahan', '1995-10-02', 'L', 'Jl. Melati', 'Mahasiswa', 'adryan.eka.vandra@yahoo.com', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_web_user`
--

CREATE TABLE `tb_web_user` (
  `id_web_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_web_user`
--

INSERT INTO `tb_web_user` (`id_web_user`, `username`, `password`, `nama_lengkap`, `no_identitas`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'asdasd', '123213', 'asdas@ac.com', 'admin'),
(2, 'admin2', 'admin2', 'admin keren', '12345', 'admin@arlacak.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  ADD PRIMARY KEY (`id_kecelekaan`),
  ADD KEY `fk_userkecelakaan` (`id_user`);

--
-- Indexes for table `tb_lokasi_penting`
--
ALTER TABLE `tb_lokasi_penting`
  ADD PRIMARY KEY (`id_lokasi_penting`);

--
-- Indexes for table `tb_nomor_penting`
--
ALTER TABLE `tb_nomor_penting`
  ADD PRIMARY KEY (`id_nomor_penting`);

--
-- Indexes for table `tb_pengaduan_saran`
--
ALTER TABLE `tb_pengaduan_saran`
  ADD PRIMARY KEY (`id_pengaduan_saran`),
  ADD KEY `fk_userpengaduan_saran` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
  ADD PRIMARY KEY (`id_web_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  MODIFY `id_kecelekaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_lokasi_penting`
--
ALTER TABLE `tb_lokasi_penting`
  MODIFY `id_lokasi_penting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_nomor_penting`
--
ALTER TABLE `tb_nomor_penting`
  MODIFY `id_nomor_penting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pengaduan_saran`
--
ALTER TABLE `tb_pengaduan_saran`
  MODIFY `id_pengaduan_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
  MODIFY `id_web_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  ADD CONSTRAINT `fk_userkecelakaan` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_pengaduan_saran`
--
ALTER TABLE `tb_pengaduan_saran`
  ADD CONSTRAINT `fk_userpengaduan_saran` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
