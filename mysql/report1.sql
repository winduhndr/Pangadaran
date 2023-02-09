-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 07:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report1`
--

-- --------------------------------------------------------

--
-- Table structure for table `report2`
--

CREATE TABLE `report2` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `pesan` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `report2`
--

INSERT INTO `report2` (`id`, `name`, `email`, `phone`, `pesan`) VALUES
(1, 'Ikhwan F', 'ikhwanfauzan.mif@gma', '081398452522', 'cukup membantu informasi yang ada disini, terimakasih telah memberikan informasi tentang wisata yang ada di kabupaten indramayu'),
(2, 'Afif Naufal', 'afifnaufal@gmail.com', '082183367564', 'membantu sekali memberikan informasi tentang kuliner khas beserta restoran yang menyediakan menu tersebut'),
(3, 'fauzi muslim', 'fauzihaqmuslim@gmail', '085718753367', 'saya merekomendasikan pantai karangsong untuk di datangi, karena disana kita juga dapat berjalan jalan di taman hutan mangrove yang cukup bagus dan sangat photogenic'),
(4, 'Rolan Fransiskus', 'rolanf77@gmail.com', '087877638056', 'saya pikir makanan burbacek agak aneh untuk dimakan karena perpaduan bubur di tambah ecek/kikil dan disiram dengan rumbah itu agak aneh untuk dibayangkan. Ternyata saya salah setelah mencobanya, makanan ini sangat layak dicoba karna mempunyai cita rasa ya'),
(5, 'Ahmad Dimyati', 'aditjev87@gmail.com', '089613738695', 'informasi tentang kuliner khas nya sangat membantu para wisatawan yang akan pergi melewati Indramayu untuk mengisi perut karena lelah mengendarai kendaraan bermotor. Terimakasih');

-- --------------------------------------------------------

--
-- Table structure for table `tblartikel`
--

CREATE TABLE `tblartikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) COLLATE utf8_bin NOT NULL,
  `isi_artikel` text COLLATE utf8_bin NOT NULL,
  `tgl_artikel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblartikel`
--

INSERT INTO `tblartikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_artikel`) VALUES
(1, ' Mengajarkan Pentingnya Mangrove lewat Buku untuk Siswa SD Indramayu', 'PT Pertamina (Persero) Refinery Unit VI Balongan menyerahkan bantuan buku Pendidikan Lingkungan Hidup (PLH) tematik Mangrove kepada 26 Sekolah Dasar (SD) di kabupaten Indramayu. Bantuan diserahkan secara simbolis oleh Officer Communication & Relation RU VI Balongan Agustiawan, kepada guru SDN Majakerta 1.\r\nSebanyak 26 sekolah dasar yang menerima bantuan buku pendidikan lingkungan hidup tematik mangrove tersebut tersebar di 6 kecamatan yang berada di wilayah pesisir Kabupaten Indramayu, di antaranya di Kecamatan Balongan, Indramayu, Cantigi, Pasekan, Karangampel, dan Juntinyuat.\r\nOfficer Communication & Relation RU VI Balongan Agustiawan mengatakan, bantuan buku ini merupakan langkah Pertamina RU VI Balongan dalam melestarikan mangrove guna menjaga keseimbangan alam.\r\n\"Buku pendidikan mangrove ini diharapkan bisa menjadi media pembelajaran bagi guru-guru kepada siswa tentang pentingnya manfaat tanaman mangrove bagi kehidupan manusia dan biota laut,\" kata Agustiawan dalam keterangannya, Kamis (17/1/2019).\r\nAgustiawan menambahkan, penyerahan bantuan buku lingkungan hidup tematik mangrove ini juga merupakan salah satu bentuk kepedulian perusahaan terhadap lingkungan. Hal ini dikarenakan potensi mangrove di Indramayu sangat besar, disamping untuk konservasi lingkungan, mangrove juga bisa dikembangkan ke berbagai macam industri yang bisa memberikan pemasukan masyarakat, seperti membuat produk olahan makanan dan minuman berbahan dasar mangrove. \r\nMujahidin, guru SDN Majakerta 1 saat menerima bantuan dari RU VI mengatakan, dengan adanya kurikulum tematik mangrove menyatakan siswa menjadi mengerti jenis-jenis mangrove dan paham manfaat dari tanaman mangrove.', '2019-02-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'cbf764f66df48c1370f038d404331b7f'),
(2, '', ''),
(3, 'admin', 'cbf764f66df48c1370f038d404331b7f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report2`
--
ALTER TABLE `report2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblartikel`
--
ALTER TABLE `tblartikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report2`
--
ALTER TABLE `report2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblartikel`
--
ALTER TABLE `tblartikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
