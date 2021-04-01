-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Mar 2021 pada 18.18
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `struk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_struk`
--

CREATE TABLE `data_struk` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `bayar` int(15) NOT NULL,
  `kembalian` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_struk`
--

INSERT INTO `data_struk` (`id`, `tanggal`, `nama_barang`, `jumlah_barang`, `total_pembelian`, `bayar`, `kembalian`) VALUES
(1, '2021-03-31', 'kursi', 3, 600000, 800000, 200000),
(3, '2021-03-31', 'lemari', 5, 3500000, 4000000, 500000),
(4, '2021-03-31', 'kompor', 5, 750000, 1000000, 250000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_struk`
--
ALTER TABLE `data_struk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_struk`
--
ALTER TABLE `data_struk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
