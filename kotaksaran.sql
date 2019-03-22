-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2019 pada 05.17
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kotaksaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `password`, `saran`) VALUES
(1, 'Bagus', 'bagus@gmail.com', '$2y$10$EqgRIb/XhpVcOUfjpiz7f.EyPJsZQymtrg/fwyjxJSW9kdVFCQJWe', 'Aku Ingin Rumah'),
(2, 'Alif', 'alif@gmail.com', '$2y$10$10oXQaGf74p4nlKCrwpjiOIJSNKBBCz8k7DAqzE2MLEBq63WmylYm', 'Aku Ingin Laptop'),
(3, 'Ilham', 'ilham@gmail.com', '$2y$10$ZCi1AkGEQ9pKp8v7zuOFee.aPCfgMyuZAxc7hMNxUMGQd3tSaD5mC', 'Aku Ingin HP'),
(4, 'Irvan', 'irvan@gmail.com', '$2y$10$SlEfrWWU1yzEIN.xUtM.nuaqZl2y/iezOGRy/9dXfk3O9/b5WWgEi', 'Aku Ingin Uang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
