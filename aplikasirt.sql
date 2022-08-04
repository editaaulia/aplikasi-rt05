-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 05:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(10, '', 'admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `published` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `published`) VALUES
(28, 'covid', 'Kasus positif Corona di Indonesia terus melonjak di tengah kemunculan Omicron. Hari ini, ada 533 kasus baru positif Corona yang dilaporkan pemerintah.\r\n\r\nBaca artikel detiknews, \"Makin Melonjak, Kasus Aktif Corona di RI Naik Jadi 5.195\" selengkapnya https://news.detik.com/berita/d-5886725/makin-melonjak-kasus-aktif-corona-di-ri-naik-jadi-5195.\r\n\r\nTambahan kasus tersebut membuat total positif Corona di Indonesia berjumlah 4.264.669 kasus. Dari jumlah itu, 5.195 merupakan kasus aktif.\r\n\r\nBaca artikel detiknews, \"Makin Melonjak, Kasus Aktif Corona di RI Naik Jadi 5.195\" selengkapnya https://news.detik.com/berita/d-5886725/makin-melonjak-kasus-aktif-corona-di-ri-naik-jadi-5195.\r\n\r\nJumlah kasus aktif tersebut naik 317 kasus dari kemarin. Kasus aktif artinya pasien Corona belum sembuh atau meninggal.\r\n\r\nPemerintah juga melaporkan kasus sembuh dari Corona sebanyak 209 pasien, sehingga total pasien Corona yang sembuh 4.115.358 orang.\r\n\r\nSelain itu, ada tujuh kasus kematian akibat Corona yang dilaporkan dalam 24 jam terakhir. Total kematian akibat virus Corona di Indonesia berjumlah 144.116 kasus.\r\n\r\nPemerintah juga melaporkan ada 5.088 suspek yang dipantau hari ini. Sedangkan jumlah spesimen yang diuji hari ini sebanyak 274.727.\r\n\r\nPemerintah terus mengimbau warga mematuhi protokol kesehatan demi mencegah COVID-19, yakni mengenakan masker, mencuci tangan menggunakan sabun dengan air yang mengalir, serta menjaga jarak.\r\n\r\nBaca artikel detiknews, \"Makin Melonjak, Kasus Aktif Corona di RI Naik Jadi 5.195\" selengkapnya https://news.detik.com/berita/d-5886725/makin-melonjak-kasus-aktif-corona-di-ri-naik-jadi-5195.\r\n\r\nPemerintah telah menerapkan pemberlakuan pembatasan kegiatan masyarakat (PPKM) level 1 hingga 4 untuk menekan laju penyebaran Corona. Warga diminta mematuhi aturan yang diberlakukan selama PPKM agar pandemi virus Corona dapat teratasi.\r\n\r\nSelain itu, pemerintah menggencarkan vaksinasi Corona bagi warga. Ada 167.999.777 penduduk yang telah disuntik vaksin Corona dosis pertama dan 115.554.584 penduduk telah disuntik vaksin Corona dosis kedua. Total target vaksinasi Corona di RI ialah 208.265.720.\r\n', '2022-01-07 03:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(40) NOT NULL,
  `level` enum('admin','warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Edita Aulia', 'edita1', 'edita1', 'warga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
