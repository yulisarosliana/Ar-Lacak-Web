-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 12:44 AM
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
-- Table structure for table `tb_kecelakaan`
--

CREATE TABLE IF NOT EXISTS `tb_kecelakaan` (
`id_kecelekaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu_pelaporan` datetime NOT NULL,
  `detail` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `deskripsi` text,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=219 ;

--
-- Dumping data for table `tb_kecelakaan`
--

INSERT INTO `tb_kecelakaan` (`id_kecelekaan`, `id_user`, `lokasi`, `foto`, `waktu_pelaporan`, `detail`, `lat`, `lng`, `deskripsi`, `kategori`) VALUES
(218, 1, 'local', '1.jgp', '2017-12-07 17:20:00', 'testing laka', 1, 2, 'terjadi\nsekitar 2 menit yang lalu', 'kriminal'),
(217, 1, 'local', '1.jgp', '2017-12-07 17:20:00', 'testing laka', 1, 2, 'terjadi sekitar 2 menit yang lalu', 'kriminal'),
(216, 1, 'local', '1.jgp', '2017-12-07 17:20:00', 'testing laka', 1, 2, 'terjadi sekitar 2 menit yang lalu', 'kriminal'),
(215, 1, 'local', '1.jgp', '2017-12-07 17:20:00', 'testing laka', 1, 2, 'terjadi sekitar 2 menit yang lalu', 'laka'),
(213, 41, 'local', 'laka8835.png', '2017-12-05 13:41:53', 'tes laka', 0.4597091, 101.3545563, '', ''),
(212, 2, 'panam', 'asd', '2017-12-05 03:10:13', 'judul', 123, 321, NULL, 'kriminal'),
(211, 41, 'local', 'laka2096.png', '2017-12-04 10:55:40', 'tes kriminal', 0.4597101, 101.3545566, '', 'kriminal'),
(210, 1, 'local', 'laka1783.png', '2017-12-05 10:09:22', 'setelah tambah atribut deskripsi dan lokasi', 0.4597091, 101.3545563, '', ''),
(209, 1, 'asd', 'img.png', '2017-12-05 00:00:00', 'asd', 123, 321, '', 'laka'),
(208, 1, 'rumah rio', 'lakaSample.jpg', '2017-11-11 10:10:10', 'detail', 12, 231, 'askldj', 'laka'),
(207, 39, 'lab rpl', 'laka1122.png', '2017-12-04 15:20:48', 'bimbingan', 0.4627439, 101.3528486, '', ''),
(206, 39, 'jl pangeran hidayat', 'laka5994.png', '2017-12-02 13:59:24', 'kedai kaza', 0.52440781, 101.44463424, '', ''),
(205, 35, 'jl.sudirman', 'laka2983.png', '2017-12-02 12:04:39', 'tes bug', 0.5165688049965675, 101.44658401976851, '', ''),
(204, 35, 'jl sudirman', 'laka2549.png', '2017-12-02 12:03:42', 'tabrakan becanda', 0.5164503354772216, 101.4466934050966, '', ''),
(203, 35, 'sudirman', 'laka816.png', '2017-12-02 12:03:09', 'terciduk', 0.5167312939502383, 101.44715498574199, '', 'krimina'),
(202, 37, 'jln.binakarya', 'laka9758.png', '2017-12-01 22:55:37', 'tercyduk', 0.45572132, 101.3599586, '', ''),
(201, 37, 'jln.binakarya', 'laka6112.png', '2017-12-01 22:55:00', 'tercyduk', 0.45577245, 101.35994247, '', 'kriminal'),
(200, 37, 'jln.binakarya', 'laka8065.png', '2017-12-01 22:54:41', 'tercyduk', 0.4542382, 101.3603126, '', 'kriminal'),
(199, 36, 'jl garuda sakti', 'laka5431.png', '2017-12-01 22:20:54', 'galaxy juice', 0.46756448, 101.36732332, '', ''),
(198, 34, 'jalani aja dulu', 'laka6800.png', '2017-12-01 19:21:21', 'susah move on', 0.4510109, 101.3664536, '', ''),
(197, 22, 'jl nangka', 'laka5054.png', '2017-11-30 21:39:33', 'bongkar pasang atop ', 0.5108316666666667, 101.44070666666667, '', ''),
(196, 22, 'jl nangka', 'laka4624.png', '2017-11-30 21:24:48', 'atm mandiri', 0.5037666666666667, 101.42783, '', ''),
(195, 22, 'simp ska', 'laka3460.png', '2017-11-30 21:21:47', 'simpang macet', 0.50018, 101.41929833333333, '', ''),
(194, 22, 'lobak', 'laka1784.png', '2017-11-30 21:17:00', 'sambal api', 0.4807133333333333, 101.41839333333334, '', ''),
(193, 22, 'jl lobak', 'laka7192.png', '2017-11-30 21:13:49', 'jalan jalan', 0.4795716666666667, 101.40861333333332, '', ''),
(192, 22, 'sebelah koro-koro', 'laka2573.png', '2017-11-30 21:05:16', 'central panam elektronik', 0.4641733333333333, 101.40291666666666, '', ''),
(191, 22, 'depan riau pos', 'laka6131.png', '2017-11-30 21:03:51', 'avanza hitam', 0.4641966666666667, 101.40019333333333, '', ''),
(190, 22, 'simp tabek', 'laka5761.png', '2017-11-30 21:01:14', 'mobil itam', 0.46419166666666667, 101.39532333333334, '', ''),
(189, 22, 'perum darko', 'laka9089.png', '2017-11-30 20:35:00', 'besuk', 0.45371833333333333, 101.35774666666666, '', ''),
(188, 22, 'mustamindo', 'laka3626.png', '2017-11-30 19:26:37', 'elegant', 0.4601837, 101.3542551, '', ''),
(187, 22, 'mustamindo', 'laka7945.png', '2017-11-30 17:53:41', 'network provider', 0.4591281, 101.3545654, '', ''),
(186, 35, 'gb', 'laka6464.png', '2017-11-30 14:26:23', 'parkiran motor', 0.46855118228769177, 101.3556979988336, '', ''),
(185, 34, 'apid', 'laka3503.png', '2017-11-30 14:24:56', 'kdbdb', 0.46852515, 101.35575121, '', ''),
(184, 22, 'depan fst', 'laka6945.png', '2017-11-30 13:35:52', 'jupiter mx', 0.4680683333333333, 101.35533833333332, '', ''),
(183, 22, 'uin', 'laka2608.png', '2017-11-30 13:32:37', 'islamic center', 0.4663833333333333, 101.35626833333332, '', ''),
(182, 22, 'uin', 'laka957.png', '2017-11-30 13:32:08', 'mesjid uin', 0.465325, 101.35612666666665, '', ''),
(181, 22, 'uin', 'laka8732.png', '2017-11-30 13:31:19', 'rektorat', 0.4631433333333333, 101.35659499999998, '', ''),
(180, 22, 'depan uin', 'laka4404.png', '2017-11-30 13:30:36', 'tmp', 0.4605866666666667, 101.35806666666667, '', ''),
(179, 22, 'jl subrantas', 'laka2520.png', '2017-11-30 13:29:51', 'avanza', 0.4587233333333333, 101.35711666666666, '', ''),
(178, 22, 'jl subrantas', 'laka2520.png', '2017-11-30 13:29:51', 'avanza', 0.45867833333333335, 101.35704166666667, '', ''),
(177, 35, 'psi uin suska', 'laka1230.png', '2017-11-30 10:26:53', 'abang ganteng', 0.46744771861995615, 101.35510465227735, '', ''),
(176, 22, 'mustamindo', 'laka1964.png', '2017-11-29 22:23:09', 'gelas', 0.45958499999999997, 101.35418499999999, '', ''),
(175, 3, 'bdndnsj', 'laka2698.png', '2017-11-29 21:35:18', 'bsjsnzb', 0.45324528, 101.36255225, '', ''),
(174, 32, 'perumahan jati mandiri', 'laka3955.png', '2017-11-29 21:26:36', 'mau makan kebab', 0.47326787, 101.35571197, '', ''),
(173, 22, 'mustamindo', 'laka9651.png', '2017-11-29 20:52:24', 'laptop', 0.45959333333333335, 101.354175, '', ''),
(172, 3, 'perum mustamindo', 'laka8206.png', '2017-11-29 18:38:43', 'genderuwo', 0.459615, 101.35417333333335, '', ''),
(171, 3, 'mustamindo', 'laka9584.png', '2017-11-28 17:54:38', 'beras', 0.4601837, 101.3542551, '', ''),
(170, 3, 'hshshs', 'laka566.png', '2017-11-28 09:30:32', 'hshs', 0.4594633333333333, 101.35433499999999, '', ''),
(169, 30, 'mustamindo', 'laka2065.png', '2017-11-28 07:31:44', 'kecelakkan pejalan kaki', 0.4595222, 101.3547614, '', ''),
(168, 33, 'Rimbo Panjang', 'laka1900.png', '2017-11-27 22:15:00', 'Insiden', 0.4498433333333333, 101.35561000000001, '', ''),
(167, 31, 'jalan merpati sakti', 'lakaSample.jpg', '2017-11-27 20:36:26', 'Tabrakan mobil balap', 0.5087231, 101.4647784, '', ''),
(166, 31, 'Jalan Cinta Nomer 10', 'laka351.png', '2017-11-27 20:34:06', 'Tabrakan 2 hati yang kasmaran', 0.5082652, 101.4653733, '', ''),
(165, 3, 'Athaya', 'laka5736.png', '2017-11-27 18:22:53', 'Kecelakaan', 0.4540324, 101.358436, '', ''),
(164, 3, 'Athaya', 'laka5736.png', '2017-11-27 18:22:52', 'Kecelakaan', 0.4540324, 101.358436, '', ''),
(163, 18, 'panam', 'laka5767.png', '2017-11-27 13:11:59', 'abang ganteng ', 0.4698966, 101.3606582, '', ''),
(162, 18, 'perumahan trilogi', 'laka7393.png', '2017-11-27 13:05:41', 'makan siang', 0.4698966, 101.3606582, '', ''),
(161, 3, 'perum trilogi', 'laka4733.png', '2017-11-27 12:06:18', 'genderuwo', 0.4698966, 101.3606582, '', ''),
(160, 28, 'trilogi', 'laka7647.png', '2017-11-27 10:56:09', 'tes permissjon grup', 0.4698966, 101.3606582, '', ''),
(159, 28, 'perum trilogi ', 'laka3424.png', '2017-11-27 09:56:08', 'seram', 0.4698966, 101.3606582, '', ''),
(158, 28, 'unri', 'laka9105.png', '2017-11-26 21:33:23', 'atm', 0.4597087, 101.3545057, '', ''),
(157, 4, 'kfc panam', 'laka8821.png', '2017-11-26 17:04:13', 'ngoding', 0.4637584, 101.3993264, '', ''),
(156, 3, 'jl. subrantas panam', 'laka8516.png', '2017-11-26 10:46:14', 'karpet kotor ', 0.4548515, 101.3649137, '', ''),
(155, 28, 'mustamindo', 'laka7111.png', '2017-11-26 10:35:47', 'ipon', 0.459709, 101.3545073, '', ''),
(154, 28, 'as', 'laka7669.png', '2017-11-26 10:09:04', 'as', 0.4597077, 101.354507, '', ''),
(153, 28, 'mutamindo', 'laka1260.png', '2017-11-26 09:46:07', 'kecelaka', 0.4597074, 101.3545092, '', ''),
(152, 28, 'jwjeiw', 'laka4063.png', '2017-11-26 09:31:20', 'bsbxb', 0.4597077, 101.354507, '', ''),
(151, 28, 'mustamindo', 'laka2717.png', '2017-11-26 09:04:04', 'lukisan', 0.4597074, 101.3545092, '', ''),
(150, 28, 'mustamindo', 'laka4056.png', '2017-11-26 07:41:02', 'retro cell', 0.4597087, 101.3545069, '', ''),
(149, 28, 'mustamindo', 'laka7673.png', '2017-11-26 07:40:08', 'mobil', 0.4597085, 101.3545073, '', ''),
(148, 28, 'mustamindo', 'laka2320.png', '2017-11-26 07:31:17', 'ampera maya', 0.4597104, 101.3545076, '', ''),
(147, 28, 'mustamindo', 'laka1186.png', '2017-11-26 07:16:20', 'genteng', 0.4597077, 101.354507, '', ''),
(146, 28, 'Mustamindo', 'laka1412.png', '2017-11-26 06:29:33', 'backend', 0.4597077, 101.354507, '', ''),
(145, 27, 'Mustamindo', 'laka7032.png', '2017-11-26 05:55:26', 'pagi minggu', 0.4601837, 101.3542551, '', ''),
(144, 3, 'Depan manunggal', 'laka2089.png', '2017-11-24 17:44:19', 'bakso', 0.4583309, 101.3558092, '', ''),
(143, 3, 'Lab', 'laka5003.png', '2017-11-24 15:23:32', 'bimbingan', 0.4677313, 101.355775, '', ''),
(142, 3, 'Daerah e', 'laka5938.png', '2017-11-24 15:13:18', 'lab', 0.4667508, 101.3561787, '', ''),
(141, 3, 'Bxbd', 'laka9002.png', '2017-11-24 14:56:42', 'gxhdh', 0.4625574, 101.3540643, '', ''),
(140, 3, 'Mustamindo ', 'laka7436.png', '2017-11-24 14:52:36', 'primata', 0.4591962, 101.3603035, '', ''),
(139, 3, 'Shhe', 'laka1827.png', '2017-11-24 14:41:35', 'shhs', 0.4589076, 101.3599489, '', ''),
(138, 3, 'Mustamindo', 'laka4008.png', '2017-11-24 12:47:05', 'buron', 0.4597281, 101.356208, '', ''),
(137, 3, 'Mustamindo', 'laka2508.png', '2017-11-24 10:08:14', 'tawanan', 0.4597281, 101.356208, '', ''),
(136, 22, 'mustamindo', 'laka5159.png', '2017-11-23 19:07:37', 'kasur', 0.4631368, 101.3541876, '', ''),
(135, 19, 'jalan manunggal', 'laka263.png', '2017-11-21 09:25:08', 'kecelakaan motor dan truk', 0.4542368, 101.3589459, '', ''),
(134, 4, 'perumahan gmp jl melati', 'laka38.png', '2017-11-21 07:40:34', 'dinding', 0.4792569, 101.4020127, '', ''),
(133, 3, 'perym gmp', 'laka7345.png', '2017-11-21 07:07:11', 'tes apk baru', 0.4789293, 101.4017797, '', ''),
(132, 1, 'panam', 'laka8123.png', '2017-11-20 09:53:00', 'testing dari url', 0.4594854, 101.3603035, '', ''),
(131, 1, 'Mustamindo', 'laka7719.png', '2017-11-20 10:12:44', 'map', 0.4589071, 101.3603035, '', ''),
(130, 1, 'Mustanbdi', 'laka4979.png', '2017-11-20 10:12:20', 'printer', 0.4589071, 101.3603035, '', ''),
(129, 1, 'Mustanundk', 'laka6481.png', '2017-11-20 10:12:04', 'tes tes', 0.4589071, 101.3603035, '', ''),
(128, 1, 'Mustanundi', 'laka7322.png', '2017-11-20 10:11:25', 'testing lagi', 0.4594854, 101.3603035, '', ''),
(127, 1, 'Mudtamindi', 'laka7825.png', '2017-11-20 09:44:20', 'testing dari android stelah hosting ulang', 0.4571755, 101.3581758, '', ''),
(124, 1, 'panam', 'laka8123.png', '2017-11-20 09:53:00', 'testing dari url', 0.4594854, 101.3603035, '', ''),
(121, 17, 'Mustamindo', 'laka9213.png', '2017-11-19 14:48:32', 'testing insert notif', 0.4591281, 101.3545654, '', ''),
(108, 3, 'Gmp', 'laka7619.png', '2017-11-11 20:20:01', 'haha', 0.4798174, 101.3996522, '', ''),
(106, 3, 'Shsh', 'laka1673.png', '2017-11-11 20:14:31', 'bzbzh', 0.4798174, 101.3996522, '', ''),
(105, 3, 'Zhhs', 'laka1712.png', '2017-11-11 20:12:59', 'hshs', 0.4798174, 101.3996522, '', ''),
(103, 3, 'Gmp', 'laka918.png', '2017-11-11 20:10:13', 'bersihkan ar2', 0.4798174, 101.3996522, '', ''),
(102, 11, 'Gmp', 'laka3457.png', '2017-11-10 20:03:32', 'dope', 0.474499, 101.3762628, '', ''),
(101, 11, 'Jl a', 'laka1813.png', '2017-11-10 19:55:53', 'koding ccd', 0.4798174, 101.3996522, '', ''),
(100, 3, 'Mustamindo', 'laka7213.png', '2017-11-10 17:48:55', 'controller', 0.4601769, 101.3542565, '', ''),
(99, 4, 'Perumahan mustamindo', 'laka2971.png', '2017-11-10 07:39:39', 'Bus terbakar', 0.4591281, 101.3545654, '', ''),
(98, 4, 'Mustamindo', 'laka2753.png', '2017-11-07 16:10:26', 'bus meledak', 0.4601769, 101.3542565, '', ''),
(97, 4, 'Mustamindo', 'laka2202.png', '2017-11-07 16:09:54', 'seram', 0.4591281, 101.3545654, '', ''),
(96, 3, 'A', 'laka4108.png', '2017-10-27 14:49:21', 'bimbingan', 0.4675086, 101.3562366, '', ''),
(95, 3, 'Faste', '', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(94, 3, 'Jl cipta karya', 'laka8336.png', '2017-10-26 23:00:41', 'bus terbalik', 0.4593781, 101.3952657, '', ''),
(93, 4, 'Tes', 'laka2531.png', '2017-10-26 19:12:40', 'menu', 0.4591281, 101.3545654, '', ''),
(92, 4, 'Jl Raya pku bkn', 'laka2692.png', '2017-10-26 19:11:28', 'selamat datang', 0.4629457, 101.3541542, '', ''),
(91, 9, 'Gsgs', 'laka3309.png', '2017-10-26 17:47:27', 'laptop', 0.4631179, 101.3542003, '', ''),
(89, 9, 'Dhhx', 'laka370.png', '2017-10-26 17:41:55', 'twt', 0.4629457, 101.3541542, '', ''),
(82, 7, 'Jl. Mustamindo', 'laka5374.png', '2017-10-23 13:05:17', 'korban kecelakaan kapal oleng', 0.460169, 101.3542592, '', ''),
(81, 7, 'Jl. Raya pku-bkn', 'laka6969.png', '2017-10-23 08:32:46', 'Keluarkan motor', 0.4591169, 101.3545515, '', ''),
(80, 3, 'Jl. Melati', 'laka7901.png', '2017-10-22 09:29:12', 'oke', 0.480063, 101.4046451, '', ''),
(79, 4, 'Jl melati', 'laka5837.png', '2017-10-22 08:56:54', 'sukses', 0.4844166, 101.4076563, '', ''),
(78, 1, 'Jl. Melati', 'laka137.png', '2017-10-22 08:49:29', 'jempol', 0.4844166, 101.4076563, '', ''),
(77, 4, 'Jl melati', 'laka144.png', '2017-10-22 07:38:12', 'ajaib.', 0.4844166, 101.4076563, '', ''),
(76, 3, 'V', 'laka6588.png', '2017-10-22 07:33:26', 'b', 0.4844166, 101.4076563, '', ''),
(69, 1, 'Jl. Melati', 'laka46.png', '2017-10-22 01:31:19', 'tercyduk', 0.4786641, 101.402323, '', ''),
(68, 1, 'Jl. Melati', 'laka7366.png', '2017-10-21 22:10:55', 'tabrakan keyboard', 0.4786641, 101.402323, '', ''),
(67, 1, 'Mustamindo', 'laka478.png', '2017-10-20 09:52:04', 'tabrak lari', 0.4588611, 101.3548604, '', ''),
(66, 1, 'Uin', 'laka2924.png', '2017-10-19 14:44:51', 'dosen pembimbing', 0.4675267, 101.3562144, '', ''),
(65, 1, 'I', 'laka2649.png', '2017-10-19 14:02:52', 'i', 0.4591169, 101.3545515, '', ''),
(64, 1, 'W', 'laka2983.png', '2017-10-19 14:02:16', 'w', 0.4591169, 101.3545515, '', ''),
(63, 1, 'W', 'laka2983.png', '2017-10-19 14:02:16', 'w', 0.4591169, 101.3545515, '', ''),
(62, 1, 'Q', 'laka9131.png', '2017-10-19 14:01:53', 'q', 0.459178, 101.354796, '', ''),
(61, 1, 'Q', 'laka9131.png', '2017-10-19 14:01:49', 'q', 0.459178, 101.354796, '', ''),
(60, 1, 'Jl raya pku bkn perum mustamindo', 'laka6253.png', '2017-10-19 13:48:01', 'tabrakan maut', 0.4590877, 101.3547738, '', ''),
(59, 1, 'Jl raya pku bkn perum mustamindo', 'laka6253.png', '2017-10-19 13:47:58', 'tabrakan maut', 0.4590877, 101.3547738, '', ''),
(58, 1, 'Jl. Raya pku bkn', 'laka9388.png', '2017-10-19 10:28:43', 'truk galon nyemplung', 0.45955833333333335, 101.3542, '', ''),
(57, 1, 'Jl raya pku bkn', 'laka8129.png', '2017-10-18 17:08:59', 'Tertabrak lagi', 0.4591169, 101.3545515, '', ''),
(56, 1, 'Jl. Melati', 'laka5305.png', '2017-10-17 23:17:00', 'tabrakan bus', 0.4791681, 101.4021595, '', ''),
(55, 1, 'Q', 'laka6431.png', '2017-10-17 14:47:53', 'q', 0.4792753, 101.402029, '', ''),
(54, 1, 'Jl. Melati indah', 'laka3440.png', '2017-10-17 13:34:10', 'tabrakan jari dan keyboard', 0.4792753, 101.402029, '', ''),
(53, 1, 'Jl. Raya pku-bkn', 'laka1066.png', '2017-10-17 05:17:07', 'bus terbakar', 0.45957166666666666, 101.35422833333332, '', ''),
(52, 1, 'Jl.  Raya pku-bkn', 'laka2618.png', '2017-10-17 04:45:50', 'Kecelakaan berat', 0.4596016666666667, 101.35420166666667, '', ''),
(51, 1, 'Jl.  Raya pku-bkn', 'laka2618.png', '2017-10-17 04:45:45', 'kecelakaan berat', 0.4596016666666667, 101.35420166666667, '', ''),
(50, 1, 'Jl. Raya pku-bkn', 'laka2199.png', '2017-10-17 04:24:19', 'bus terbalik', 0.4596166666666667, 101.35418333333334, '', ''),
(49, 1, 'Jl. Raya pku-bkn', 'laka9314.png', '2017-10-17 04:20:48', 'tabrakan motor dan bus', 0.4595783333333333, 101.354235, '', ''),
(48, 1, 'Jl. Melati', 'laka300.png', '2017-10-16 21:33:49', 'truk terbalik', 0.4791681, 101.4021595, '', ''),
(47, 1, 'Jl. Melati', 'laka8485.png', '2017-10-16 21:23:41', 'bus terbalik', 0.4791681, 101.4021595, '', ''),
(46, 1, 'Jl. Melati', 'q.jpg', '2017-10-16 21:04:25', 'tabrak lari', 0.4789065, 101.4017962, '', ''),
(45, 1, 'Jl. Hr subrantas', '.jpg', '2017-10-16 16:16:11', 'tabrakan motor', 0.47849141992628574, 101.40200497582555, '', ''),
(44, 1, 'No gps', '.jpg', '2017-10-16 03:03:35', 'no gps', 0.4592597, 101.3545633, '', ''),
(43, 1, 'No gps', '', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(42, 1, 'W', 'w', '2017-10-16 02:43:06', 'w', 0, 0, '', ''),
(41, 1, 'Mustamindo', 'm.jpg', '2017-10-15 22:25:39', 'Truk sampah nabrak truk galon', 0.45955, 101.35413833333332, '', ''),
(40, 1, 'Mustamindo', 'm.', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(39, 1, 'Mustamindo', 'kecelakaan.', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(38, 1, 'Lat', 'lat', '2017-10-15 21:24:06', 'lat', 0.45961166666666664, 101.354035, '', ''),
(37, 1, 'R', 'r', '2017-10-14 04:25:28', 'r', 1, 2, '', ''),
(36, 1, 'Uin', '.png', '2017-10-12 11:43:19', 'kecelakaan motor', 1, 2, '', ''),
(35, 1, 'Uin', '.jpg', '2017-10-12 11:42:16', 'kecelakan 2 motor', 1, 2, '', ''),
(34, 1, 'Tata', 'ixjxj', '2017-10-12 10:29:51', 'yyy', 1, 2, '', ''),
(33, 1, 'Reborn', 'ndo', '2017-10-12 08:41:18', 'undo', 1, 2, '', ''),
(32, 1, 'Ta', 'ha', '2017-10-12 07:20:17', 'o', 1.111, 2.2223, '', ''),
(31, 1, 'Tt', 'y', '2017-10-12 07:18:12', 'r', 1.111, 2.2223, '', ''),
(30, 1, 'Uin suska', '.jpg', '2017-10-11 13:50:01', 'kecelakaan 2 motor', 1.111, 2.2223, '', ''),
(29, 1, 'Haha', 'haha', '2017-10-10 23:34:04', '2334', 1.111, 2.2223, '', ''),
(28, 1, 'Jalan 23', '28', '2017-10-10 23:28:09', 'mixare', 1.111, 2.2223, '', ''),
(27, 1, 'Joko', 'Gkliat', '2017-10-10 21:57:18', 'Mati', 1.111, 2.2223, '', ''),
(26, 1, 'Dian', 'Gak', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(25, 1, 'Jl mustamindo', 'kec.jpg', '2017-10-10 16:18:47', 'kecelakan antara 2 mobil', 1.1111, 2.2223, '', ''),
(24, 1, 'Jdj', 'j', '2017-10-10 16:04:45', 'i', 1.1111, 2.2223, '', ''),
(23, 1, 'Gg', '', '2017-10-10 15:51:53', '', 1.1111, 2.2223, '', ''),
(22, 1, 'Qqw', '', '2017-10-10 15:49:51', '', 1.1111, 2.2223, '', ''),
(21, 1, '', '', '2017-10-10 14:39:48', '', 1.1111, 2.2223, '', ''),
(20, 1, 'Jzzh', 'yys.jpg', '2017-10-10 14:06:42', '14:06', 1.1111, 2.2223, '', ''),
(19, 1, 'Mustamindi', '.jpg', '2017-10-10 13:20:34', 'detail 13.20', 1.1111, 2.2223, '', ''),
(18, 1, 'Haha', 'haha', '2017-10-10 10:28:09', 'haha', 1.1111, 2.2223, '', ''),
(17, 1, '', '', '2017-10-10 10:20:11', '', 1.1111, 2.2223, '', ''),
(16, 1, 'Gf', '', '2017-10-10 10:19:33', '', 1.1111, 2.2223, '', ''),
(15, 1, 'Jl garuda', 'gg.png', '2017-10-10 10:17:17', 'mantap', 1.1111, 2.2223, '', ''),
(14, 1, 'Rumah ty', 'jpg', '2017-10-09 09:12:23', 'jshshshs', 1.1111, 2.2223, '', ''),
(13, 1, ' R y m a h ', '', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(12, 1, 'Ala', 'tpu', '0000-00-00 00:00:00', '', 0, 0, '', ''),
(11, 1, 'Rdn', 'rrrr', '2017-01-11 00:00:00', 'Rdn', 1.1111, 2.2223, '', ''),
(10, 1, 'G', 'nj', '2017-01-11 00:00:00', 'G', 1.1111, 2.2223, '', ''),
(9, 1, 'Als', 'as', '2017-01-11 00:00:00', 'Als', 1.1111, 2.2223, '', ''),
(8, 1, 'panam', 'tes.jpg', '2017-09-26 00:00:00', 'inidetail', 1.1111, 2.2222, '', ''),
(6, 1, 'haha', 'dian afrian.JPG', '2017-09-26 11:22:36', 'ajksdkja', 1.1232, 2.123213, '', ''),
(5, 1, 'rumah iyan', 'car-accident-1.png', '2017-09-26 11:22:36', 'asdasdsa', 1.1232, 2.123123, '', ''),
(4, 1, 'Kulima', 'testschool.sql', '2017-09-26 11:22:36', 'blablablablab', 1.123213, 2.313131, '', ''),
(3, 1, 'Kampar', 'dian afrian.JPG', '2017-09-26 11:22:36', 'asasd', 1.123123, 2.1231231, '', ''),
(1, 1, 'panamm', 'car-accident-1.png', '2017-09-26 11:22:36', 'jasdjhsab', 0.464375, 101.368031, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
 ADD PRIMARY KEY (`id_kecelekaan`), ADD KEY `fk_userkecelakaan` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
MODIFY `id_kecelekaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=219;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
ADD CONSTRAINT `tb_kecelakaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_kecelakaan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_kecelakaan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_kecelakaan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
