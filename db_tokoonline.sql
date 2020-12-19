-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Des 2020 pada 17.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokoonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'moondaymood', '1234', 'Admin Moonday Mood');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Stickers'),
(2, 'Stationery'),
(3, 'Books'),
(4, 'Accessoris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Gresik', 20000),
(2, 'Malang', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(2, 'safitri@gmail.com', 'saf', 'Safitri Herdian R', '0888111111929', 'Jalan Bucin No. 1 Malang'),
(3, 'amanda@gmail.com', 'amanda', 'Amanda Rizky R', '089246356643', 'Jalan Gamon No.1 Surabaya'),
(6, 'sima@gmail.com', 'sima', 'sima', '088928012129', 'Jalan happyyy Nomor 1'),
(7, 'shab@gmail.com', 'shab', 'shabrina', '082903913111', 'Jalan ngenez Nomor 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(10, 21, 'Sima', 'BRI', 31000, '2020-12-11', '20201211170942icon_check.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(50) NOT NULL,
  `totalberat` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `distrik` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `ekspedisi` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `estimasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`, `totalberat`, `provinsi`, `distrik`, `tipe`, `kodepos`, `ekspedisi`, `paket`, `ongkir`, `estimasi`) VALUES
(21, 1, '2020-12-11', 31000, 'Jalan Happyyyy Nomor 1', 'sudah kirim pembayaran', '', 20, 'Jawa Timur', 'Gresik', 'Kabupaten', '61115', 'jne', 'REG', 16000, '2-3'),
(22, 6, '2020-12-11', 163500, 'Depan masjid', 'pending', '', 120, 'Jawa Timur', 'Gresik', 'Kabupaten', '61115', 'pos', 'Express Next Day Barang', 43500, '1 HARI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(37, 21, 11, 1, '80 Sheets Daily Sticky Note ', 15000, 20, 20, 15000),
(38, 22, 10, 1, 'Storage Box Office Student Stationery', 105000, 100, 100, 105000),
(39, 22, 11, 1, '80 Sheets Daily Sticky Note ', 15000, 20, 20, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(10, 2, 'Storage Box Office Student Stationery', 105000, 100, 'Jepretan Layar 2020-12-11 pada 22.03.17.png', '          Scrub Pen Holder Desktop Storage Box Office Student Stationery\r\nMaterial : PP        ', 99),
(11, 2, '80 Sheets Daily Sticky Note ', 15000, 20, 'Jepretan Layar 2020-12-11 pada 22.44.09.png', '80 Sheets Daily Sticky Note Simple Sticky Memo DIY Planner BUJO', 98),
(12, 1, '20 Pcs Cute Girl Stickers Cute', 19000, 20, 'Jepretan Layar 2020-12-11 pada 22.49.42.png', '          20 Pcs Cute Girl Stickers Daily Life Clothes Decor Stickers For Journal Gift Diary Decor        ', 100),
(13, 1, 'Smiley Face Stickers Simple', 3200, 10, 'Jepretan Layar 2020-12-11 pada 22.50.20.png', '          Smiley Face Stickers / Stiker untuk Diary / Planner / Notebook / Jurnal / Scrapbook Sticker BUJO Stationery        ', 100),
(14, 2, 'Mini Cutter Knife Art ', 9031, 20, 'Jepretan Layar 2020-12-11 pada 22.52.15.png', '                    Mini Cutter knife Parcel Art Cutter Office School Supplies Cute Art Knife                ', 100),
(15, 2, 'Poster Dinding Perencanaan List ', 29000, 10, 'Jepretan Layar 2020-12-11 pada 22.55.21.png', '2021 Poster Dinding Perencanaan List Time Manage Tahunan Mingguan', 100),
(16, 2, 'Night Light Table Decor Lamp ', 150000, 1000, 'Jepretan Layar 2020-12-11 pada 22.57.22.png', 'Night Light Table Decor Lamp Bed Lamp Photo Props Desktop Decor Gift\r\n', 100),
(17, 1, '25pcs / Set Stiker Kertas Gambar Anak Perempuan', 24000, 10, 'Jepretan Layar 2020-12-11 pada 22.57.58.png', '25pcs / Set Stiker Kertas Gambar Anak Perempuan Lucu Warna-Warni Untuk Dekorasi Scrapbook Diy', 100),
(18, 1, '15pcs Stiker Smiley Lucu ', 5000, 10, 'Jepretan Layar 2020-12-11 pada 22.59.05.png', '          Winzige 15pcs Stiker Smiley Lucu Multi Warna Untuk Dekorasi Jurnal Bujo\r\n        ', 100),
(19, 1, '30 Lembar Kertas Memocat Air ', 26000, 50, 'Jepretan Layar 2020-12-11 pada 23.00.05.png', 'Winzige 30 Lembar Kertas Memocat Air Warnawarni Untuk Dekorasi Jurnalbujo Diy', 100),
(20, 2, 'Washi Tape Cute Masking ', 3900, 10, 'Jepretan Layar 2020-12-11 pada 23.01.52.png', 'Winzige INS Washi Tape Cute Masking Tape DIY Home Decor Journal Scrapbooking', 100),
(21, 2, '80Sheets Colorful Memo Pad ', 30000, 100, 'Jepretan Layar 2020-12-11 pada 23.03.19.png', 'Winzige 80Sheets Colorful Memo Pad List Grid Memo Paper For Diary Note Message Journal Decor', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`) VALUES
(32, 10, 'Jepretan Layar 2020-12-11 pada 22.03.17.png'),
(34, 10, '20201211164253Jepretan Layar 2020-12-11 pada 22.03.26.png'),
(35, 10, '20201211164300pena.png'),
(36, 0, 'Jepretan Layar 2020-12-11 pada 22.44.09.png'),
(37, 11, 'Jepretan Layar 2020-12-11 pada 22.44.09.png'),
(38, 11, '20201211164711Jepretan Layar 2020-12-11 pada 22.44.23.png'),
(39, 11, '20201211164718Jepretan Layar 2020-12-11 pada 22.44.31.png'),
(40, 12, 'Jepretan Layar 2020-12-11 pada 22.49.42.png'),
(41, 13, 'Jepretan Layar 2020-12-11 pada 22.50.20.png'),
(42, 14, 'Jepretan Layar 2020-12-11 pada 22.52.15.png'),
(43, 15, 'Jepretan Layar 2020-12-11 pada 22.55.21.png'),
(44, 16, 'Jepretan Layar 2020-12-11 pada 22.57.22.png'),
(45, 17, 'Jepretan Layar 2020-12-11 pada 22.57.58.png'),
(46, 18, 'Jepretan Layar 2020-12-11 pada 22.59.05.png'),
(47, 19, 'Jepretan Layar 2020-12-11 pada 23.00.05.png'),
(48, 20, 'Jepretan Layar 2020-12-11 pada 23.01.52.png'),
(49, 0, ''),
(50, 21, 'Jepretan Layar 2020-12-11 pada 23.03.19.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
