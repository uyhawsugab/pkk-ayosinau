-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 02.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk-ayosinau-v3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_modul`
--

CREATE TABLE `jenis_modul` (
  `id_jenis_modul` int(11) NOT NULL,
  `jenis_modul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_modul`
--

INSERT INTO `jenis_modul` (`id_jenis_modul`, `jenis_modul`) VALUES
(1, 'berbayar'),
(2, 'gratis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'user'),
(2, 'guru'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Pemrograman'),
(5, 'PAI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `nama_modul` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `link_modul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_jenis_modul` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `harga`, `link_modul`, `deskripsi`, `gambar`, `id_jenis_modul`, `id_mapel`) VALUES
(11, 'HTML 5', 'gratis', 'http://html5-modul/723gada', 'Pengenalan dan Fundamental dasar tentang HTML 5', 'icon1.jpg', 2, 4),
(12, 'Codeigniter 3.33', 'gratis', 'http://CI33-modul/757gada', 'Pengenalan dan fundamental dasar Codeigniter 3.3', 'icon2.jpg', 2, 4),
(15, 'Laravel 6 Full', '125000', 'http://Laravel6full-modul/757gada', 'Memmbuat Aplikasi Toko Online Ok', 'icon3.png', 1, 4),
(16, 'Android Zero To Hero', '220000', 'https://drive.google.com/file/d/1l7MgFO0FGaL4OUY2igkyXUCIYKtr-Cvw/view', 'Sebuah Modul yang berisikan panduan-panduan tentang memulai android studio', 'icon4.jpg', 1, 4),
(17, 'Matematika XII 1', '20000', 'https://drive.google.com/file/d/1gWPoIxy1rGTG-NP9sgKVVZCZpYWPZ44d/view', 'Buku Matematika untuk kelas 12', 'icon8.jpg', 1, 1),
(18, 'Pendidikan Agama Islam XII 1', '20000', 'https://classroom.google.com/u/1/c/Njk3NDMwOTY0NFpa', 'Buku Pendidikan Agama Islam untuk Kelas XII', 'pai1.jpg', 1, 5),
(22, 'Bahasa Indonesia XII 1', 'gratis', 'https://classroom.google.com/u/1/c/NDA4ODI5MjM2OTNa/a/NDA5MzU2MDk2NDha/details', 'Modul awal kelas XII untuk pelajaran bahasa indonesia', 'icon981.jpg', 2, 2),
(23, 'Bahasa Inggris XII 1', 'gratis', 'https://drive.google.com/file/d/1nEaTynS86aHCGmNFe2UWPYt_hVqTINrp/view', 'Modul pertama kelas 12 untuk pelajaran bahasa inggris', 'icon991.jpg', 2, 3),
(24, 'Desain Grafis 1', 'gratis', 'https://drive.google.com/file/d/1l7MgFO0FGaL4OUY2igkyXUCIYKtr-Cvw/view', 'A', 'Use_Case_Diagram1.png', 2, 4),
(25, 'Bahasa Indonesia XII 2', '125000', 'https://drive.google.com/file/d/1-5BhUwnthQetrl2dKbJGyRXPrKzcVQh_/view', 'A', 'icon982.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `my_modul`
--

CREATE TABLE `my_modul` (
  `id_storage` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `metode` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) NOT NULL,
  `grandtotal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `id_user`, `tanggal`, `metode`, `bukti`, `grandtotal`) VALUES
(1, 1, '2019-12-01 02:00:00', NULL, 'gatau', '125000'),
(2, 1, '2019-12-02 08:48:05', 'BRI', '18.png', '0'),
(3, 1, '2019-12-02 08:49:31', 'BNI', '181.png', '250000'),
(4, 1, '2019-12-01 17:00:00', NULL, '', ''),
(5, 3, '2019-12-02 10:53:41', 'BRI', '0164ef3201589650268ea9e2495a62d3.jpg', '2430000'),
(6, 4, '2019-12-02 11:03:58', 'BNI', 'icon4.jpg', '250000'),
(7, 1, '2019-12-03 01:02:22', 'BRI', 'ae.jpg', '18500000'),
(8, 1, '2019-12-12 01:48:49', NULL, '', '240000'),
(9, 1, '2019-12-12 01:51:06', 'BNI', 'CCF07042018_0006_page-0001.jpg', '240000'),
(10, 1, '2019-12-11 17:00:00', NULL, '', ''),
(11, 1, '2019-12-11 17:00:00', NULL, '', ''),
(12, 1, '2019-12-11 17:00:00', NULL, '', ''),
(13, 1, '2019-12-11 17:00:00', NULL, '', ''),
(14, 1, '2019-12-12 04:03:09', 'BRI', 'CCE07042018_0003_page-0001.jpg', '345000'),
(15, 1, '2019-12-12 04:04:12', 'BRI', 'CCF07042018_0005_page-0001.jpg', '240000'),
(16, 7, '2019-12-12 04:35:17', 'BRI', 'CCF07042018_0005_page-00011.jpg', '145000'),
(17, 1, '2019-12-13 05:49:19', 'BRI', 'CCE07042018_page-0001.jpg', '125000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_nota`, `id_modul`, `qty`) VALUES
(1, 2, 11, 1),
(2, 3, 15, 2),
(3, 5, 15, 2),
(4, 5, 16, 8),
(5, 5, 17, 21),
(6, 6, 15, 2),
(7, 7, 25, 100),
(8, 7, 18, 300),
(9, 8, 16, 1),
(10, 8, 17, 1),
(11, 9, 16, 1),
(12, 9, 17, 1),
(13, 14, 15, 1),
(14, 14, 16, 1),
(15, 15, 16, 1),
(16, 15, 17, 1),
(17, 16, 12, 1),
(18, 16, 15, 1),
(19, 16, 17, 1),
(20, 17, 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama`, `alamat`, `notelp`, `id_mapel`, `id_level`) VALUES
(1, 'wahyu1', 'cdc49b1a4b4aa35af0bf2a7b20e6cc2f', 'wahyu@mail.com', 'wahyu bagus wicaksono', 'Malang', '087822128829', NULL, 1),
(3, 'guru1', '92afb435ceb16630e9827f54330c59c9', 'guru1@mail.com', 'Pak Arifin', 'Malang', '086419282092', 4, 2),
(4, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1@mail.com', 'Admin', 'Malang', '08282839202', NULL, 3),
(5, 'fasya', '202cb962ac59075b964b07152d234b70', 'aaaa@gmail.com', 'aku', 'ss', '0328428342', NULL, 1),
(6, 'sindu', '202cb962ac59075b964b07152d234b70', 'sindu22@gmail.com', 'Fauzi Dimas', 'Malang OK', '0823174298141', 5, 2),
(7, 'irgiarya', 'a1a590abc8054a243f11d8ce9f4efab8', 'irgiarya.depok@gmail.com', 'Irgi Arya', 'Condet', '0878-2394-2392', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_modul`
--
ALTER TABLE `jenis_modul`
  ADD PRIMARY KEY (`id_jenis_modul`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`),
  ADD KEY `id_jenis_modul` (`id_jenis_modul`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `my_modul`
--
ALTER TABLE `my_modul`
  ADD PRIMARY KEY (`id_storage`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_modul` (`id_modul`),
  ADD KEY `id_nota` (`id_nota`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_modul`
--
ALTER TABLE `jenis_modul`
  MODIFY `id_jenis_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `my_modul`
--
ALTER TABLE `my_modul`
  MODIFY `id_storage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD CONSTRAINT `modul_ibfk_1` FOREIGN KEY (`id_jenis_modul`) REFERENCES `jenis_modul` (`id_jenis_modul`),
  ADD CONSTRAINT `modul_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `my_modul`
--
ALTER TABLE `my_modul`
  ADD CONSTRAINT `my_modul_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `my_modul_ibfk_2` FOREIGN KEY (`id_modul`) REFERENCES `modul` (`id_modul`);

--
-- Ketidakleluasaan untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_modul`) REFERENCES `modul` (`id_modul`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
