-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2024 pada 04.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `kode_admin` varchar(12) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `role` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `password`, `kode_admin`, `no_tlp`, `role`) VALUES
(1, 'bambang subroto', '1234', 'admin1', '085749051409', 'admin'),
(2, 'esti sitanggang', '4321', 'admin2', '085870283409', 'petugas'),
(3, 'admin', '123', '001', '089661252353', 'admin'),
(4, 'like', '123', 'admin09', '213', 'petugas'),
(5, 'wayn', '123', 'admin010', '08973823', 'admin'),
(6, 'rizal', '123', '009', '837463', 'petugas'),
(7, 'admin', '123', 'admin008', '08961273', 'admin'),
(8, 'petugas', '123', 'pertugas008', '0892831923', 'petugas'),
(9, 'kongg', '111', 'admin10', '098908121', 'petugas'),
(10, 'polytron', '999', 'name20', '08916291', 'admin'),
(11, 'dasi', '888', 'name24', '05789356', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `cover` varchar(255) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `buku_deskripsi` text NOT NULL,
  `isi_buku` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`cover`, `id_buku`, `kategori`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `buku_deskripsi`, `isi_buku`) VALUES
('65d76bd6b1662.jpeg', 'KB0001', 'sains', 'SAINS &amp; DUNIA MODERN', 'Alfred North Whitehead', 'Nuansa', '2005-01-08', 235, '&quot;Pernyataan ulang terpenting tentang hubungan antara sains, filsafat dan kehidupan.&quot;', 'Sains dan Dunia Modern.pdf'),
('65d76cbcbf03e.jpeg', 'KB0002', 'bisnis', 'Bisnins ala Nabi', 'Mustafa Kamal Rokan', 'Bunyan', '2013-10-11', 292, '&quot;Buku ini ingin mengatakan bahwa sistem ekonomi yang di bawa oleh nabi muhammad saw.&quot;', 'Buku Bisnis Ala Nabi.pdf'),
('65d76d8aef83a.jpeg', 'KB0003', 'novel', 'berani tidak disukai', 'Ichiro Kishmi and Fumitake Koga', 'PT Gramedia Pustaka Utama', '2019-01-01', 350, '&quot;fenomena dari jepang untuk membebaskan diri, mengubah hidup, dan meraih kebahagiaan.&quot;', 'Berani Tidak Disukai (Ichiro Kishimi, Fumitake Koga) (z-lib.org).pdf'),
('65d76eae97b52.jpeg', 'KB0004', 'informatika', 'TEKNOLOGI INFORMASI', 'Juhriansyah Dalle, A. Karim, Baharuddin', 'PT. RajaGrafindo persada', '2020-02-05', 485, '&quot;teknologi informasi adalah istilah umum untuk teknologi apa pun yang membantu manusia dalam membuat, mengubah, menyimpan, dan menyebarkan informasi.&quot;', 'Buku_Pengantar Teknologi Informasi.pdf'),
('65d76f87254a4.jpeg', 'KB0005', 'novel', 'Novel Sejarah Lingkar Merah Lingkar Putih', 'Dr. Muhamad Arif', 'PARA CITA MADINA', '2001-10-01', 66, '&quot;jalan berliku menuju rekonsiliasi.&quot;', 'Turnitin Novel Sejarah Lingkar Merah Lingkar Putih.pdf'),
('65d7712c57136.jpeg', 'KB0006', 'filsafat', 'Dunia Sophie', 'Jostein Garrder', 'PT. Mizan Pustaka', '2010-02-08', 801, '&quot;anda sudah lama inign tahu apa itu filsafat, tetapi selalu tidak sempat, terlalu kabur, terlalu abstrak, terlalu susah, terlalu bertele - tele?bacalah buku manis ini di mana sophie anak puti berusia 14 tahun, menjadi terpesona karenanya.&quot;', 'dunia-sophie-sebuah-novel-filsafat-1.pdf'),
('65d9bd994ee32.png', 'KB0007', 'filsafat', 'nunchi seni membaca pikiran dan perasaan orang lain', 'atisah', 'Nuansa', '2024-02-24', 90, 'bagus sekali untuk di baca', 'Nunchi Seni Membaca Pikiran dan Perasaan Orang LainÑRahasia Hidup Bahagia dan Sukses dari Korea (Euny Hong) (z-lib.org).pdf'),
('65d9c13e37ff0.jpg', 'KB0008', 'sains', 'LSM SARIAWAN', 'taufiq ismail', 'PT Gramedia', '2024-02-24', 100, '&quot;cerita panduan mencegah sariawan&quot;', 'Rich Dad Poor Dad (Robert T. Kiyosaki) (z-lib.org).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`kategori`) VALUES
('bisnis'),
('filsafat'),
('informatika'),
('novel'),
('sains');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `nisn` int(11) NOT NULL,
  `kode_member` varchar(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tgl_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`nisn`, `kode_member`, `nama`, `password`, `jenis_kelamin`, `kelas`, `jurusan`, `no_tlp`, `tgl_pendaftaran`) VALUES
(1, 'iyaa12', 'hezka', '$2y$10$uCB9ehPJLVSmu1h3G/XnZeovtlksa0MFe44CFwrf4m3Pv20kxRP4e', 'Laki laki', 'XI', 'Rekayasa Perangkat Lunak', '08712', '2024-02-15'),
(8, 'kode01', 'muhammadhezka', '$2y$10$06UK0MjfoqW3abWGlULqW.3Cz/8gtbyh14t.n7EGtgc1K6xdQkcvq', 'Laki laki', 'XII', 'Rekayasa Perangkat Lunak', '089661252353', '2024-02-19'),
(11, '111', 'sambel', '$2y$10$i8cKd.WuIwh6RRFJmc.h5.Qzsmd0xM9KmxDh/06Ce1ItfVNNenfli', 'Laki laki', 'XII', 'Desain Komunikasi Visual', '08973823', '2024-02-17'),
(67, 'r12', 'wendi', '$2y$10$6l6AYUZwN50FhLMTRXgNVe4Ql5BlhxdhriWstLSMmyMh49oKLdeVS', 'Laki laki', 'XI', 'Teknik Otomotif', '12', '2024-02-18'),
(78, '54', 'chell', '$2y$10$wh9nwCi5zVtqpQRt8ILSguARKkRNJ.mCYi.AM/HUEVhTyn9zrSQhO', 'Perempuan', 'XII', 'Teknik Tenaga Listrik', '3242', '2024-02-19'),
(80, 'admin32', 'hez', '$2y$10$tAY9uNw2O4VHkziV9Bbmq.axGI7z0IfYi8r9aFrrID/VIUADfDKfq', 'Laki laki', 'XI', 'Rekayasa Perangkat Lunak', '0927', '2024-02-17'),
(111, 'name09', 'nadiaaa', '$2y$10$PNZrLhzQq9zVU/XB9FIuWuV7uk2VD5.oTDFJAK6gTXQvitI7KClli', 'Perempuan', 'XI', 'Rekayasa Perangkat Lunak', '08768392', '2024-02-22'),
(114, '0975', 'fajar', '$2y$10$OvvR1Of8lfPVQGaFdejqqOH2t..2rXnpE.oRyTlJzzbs7Fgz1jqAu', 'Laki laki', 'XII', 'Teknik Komputer Jaringan', '08973823', '2024-02-10'),
(123, '87', 'hez', '$2y$10$SUSqefYf03g6eAk/zvZdleGz7icoGzlOjaCpZkssQFKrHsZbdkmJm', 'Laki laki', 'XI', 'Rekayasa Perangkat Lunak', '2312', '2009-11-28'),
(321, '45', 'eka', '$2y$10$pHI4B0Ej3apNMkB.pv7jG.KTPFrO5D08YoFm27ebpQeeoJS3MEUua', 'Laki laki', 'XI', 'Teknik Komputer Jaringan', '213', '2024-02-17'),
(987, '006', 'bonangfc', '$2y$10$8o8sf/aYP0jmC1y3K3AkDuKHCwihXe7ivC3G80C67IyuJ1A7ie70K', 'Laki laki', 'XII', 'Desain Gambar Mesin', '123456789', '2024-01-25'),
(5678, '13', 'nadiaa', '$2y$10$/f9hqecw/0hD3.OQ9vRDK.12Q/S0jII3psNGIJI1TL9MscFRk029m', 'Perempuan', 'XII', 'Sistem Informatika Jaringan dan Aplikasi', '0109378', '2024-02-17'),
(27032006, '2706', 'muhammad raihan sanjaya', '$2y$10$wnf6co9SqxYTu1t1bSqNzu8j3x3FaqHCBXoMXnGVf6Bx2YIW7uiuy', 'Laki laki', 'XII', 'Rekayasa Perangkat Lunak', '089699550918', '2006-03-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `nisn` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` varchar(40) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `nisn`, `id_admin`, `tgl_peminjaman`, `tgl_pengembalian`, `status`, `harga`) VALUES
(110, 'KB0006', 111, 6, '2024-02-24', '2024-02-27', 'Sudah kembali', 0),
(111, 'KB0004', 111, 4, '2024-02-24', '2024-03-02', 'Tunggu konfirmasi', 0),
(112, 'KB0001', 111, 2, '2024-02-24', '2024-02-29', 'terkonfirmasi', 0),
(113, 'KB0003', 111, 4, '2024-02-24', '2024-02-27', 'Sudah kembali', 0),
(114, 'KB0005', 111, 6, '2024-02-24', '2024-03-02', 'Sudah kembali', 15000),
(115, 'KB0008', 111, 9, '2024-02-25', '2024-03-03', 'Sudah kembali', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `nisn` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `buku_kembali` date NOT NULL,
  `keterlambatan` enum('YA','TIDAK') NOT NULL,
  `denda` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_admin` (`kode_admin`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`kategori`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `kode_member` (`kode_member`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_buku` (`kategori`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `member` (`nisn`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `member` (`nisn`),
  ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
