-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 10.42
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kata_bombastis`
--

CREATE TABLE `kata_bombastis` (
  `id_bombastis` int(11) NOT NULL,
  `kata_bombastis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kata_bombastis`
--

INSERT INTO `kata_bombastis` (`id_bombastis`, `kata_bombastis`) VALUES
(1, 'PROMO!!!'),
(2, 'DISKON!!!'),
(3, 'SALE!!!'),
(4, 'CUCI GUDANG!!!'),
(5, 'OBRAL!!!'),
(6, 'TERLARIS!!!'),
(7, 'TERMURAH!!!'),
(8, 'TERBARU!!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkulb`
--

CREATE TABLE `kkulb` (
  `id_kkulb` int(11) NOT NULL,
  `ulb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kkulb`
--

INSERT INTO `kkulb` (`id_kkulb`, `ulb`) VALUES
(1, 'Produsen'),
(2, 'Pabrik'),
(3, 'Pusat'),
(4, 'Grosir'),
(5, 'Distibutor'),
(6, 'Agen'),
(7, 'Toko'),
(8, 'Supplier'),
(9, 'Kulakan'),
(10, 'Reseller');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kata_bombastis`
--
ALTER TABLE `kata_bombastis`
  ADD PRIMARY KEY (`id_bombastis`);

--
-- Indeks untuk tabel `kkulb`
--
ALTER TABLE `kkulb`
  ADD PRIMARY KEY (`id_kkulb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kata_bombastis`
--
ALTER TABLE `kata_bombastis`
  MODIFY `id_bombastis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kkulb`
--
ALTER TABLE `kkulb`
  MODIFY `id_kkulb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
