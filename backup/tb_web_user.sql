-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 12:50 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ar_pekanbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_web_user`
--

CREATE TABLE IF NOT EXISTS `tb_web_user` (
`id_web_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_web_user`
--

INSERT INTO `tb_web_user` (`id_web_user`, `username`, `password`, `nama_lengkap`, `no_identitas`, `email`, `kategori`) VALUES
(15, 'root', '$2a$10$Lj.fEfo8Q7oBjKDCGloy7eD3vwZH3ruPYT6VgpzyLihfWP0adDkTK', 'Akun Root', '123', 'root@arlacak.com', '-1'),
(14, 'reja', '$2a$10$QNqpagnfkLxsAUdp6gn4E./qtttqj1padS6S/X1zJKdeoTaEs9KCG', 'rejaldi', '2', 'reja@arlacak.com', 'kriminal'),
(13, 'jajan', '$2a$10$CcUsXDdaTHFoQoSNdZ..ueghJgCv1v3aZwIlAxHi0BkB8oJfv/asW', 'jajan jajan', '321', 'jajan@arlacak.com', 'kriminal'),
(12, 'jejen', '$2a$10$hVfrVgJGnktb1f5y71gMmecXgz4Y74FChkUJwyfhiPfWjs8.ysL7u', 'jejen jejen', '12345', 'jejen@arlacak.com', 'laka'),
(11, 'admin', '$2a$10$mMRM9XHo0elZoD/S.WGNSeWy48nzemUUfj4iRYnMPLZs5hi/ws1cu', 'Administratori', '12345', 'johndoe@arlacak.com', 'laka'),
(10, 'john', '$2a$10$54nMFrCj31INQzPpvXTWFexH/lYe7Fb3IOSBNzsE.kGhyAVj.66ze', 'john doe', '12345', 'johndoe@arlacak.com', 'laka'),
(9, 'tyo', '$2a$10$zACoGFrVoFDf3ozIVqjjhOCELzvZUZ37sP8qsaxTiRQx2gb4x6mty', 'prasetyo nugroho', '111', 'tyo@nugroho.com', 'laka'),
(8, 'dian', '$2a$10$2peWEGCrPj3OyzyHsWkyV.LOtE395gcTiM7AxtU5W.Sw1XO0VCxfu', 'dian afrian', '123', 'dian@afrian.com', 'laka'),
(7, 'wira', '$2a$10$hz09ORxLCwpqVaWpBcH2YeDLnQ53PJIkLN22EuJsZzymjVfAZeLau', 'agus prawira', '1145', 'agus@gmail.com', 'laka'),
(6, 'dwiki', '$2a$10$TjyKTIyIRhjhRecki6hfte79IrXFI2wqsvohIFp72LiKZxu9blT4a', 'dwiki n', '114', 'dinal@dinal.com', 'laka'),
(2, 'admin2', '$2a$10$ic2FWo.Vf.lO2OKFpcQT8OFR8az1RIo6LyqmU427bo8HAnKmsxOZ.', 'admin keren', '12345', 'admin@arlacak.com', 'laka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
 ADD PRIMARY KEY (`id_web_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_web_user`
--
ALTER TABLE `tb_web_user`
MODIFY `id_web_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
