-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 07.21
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040028`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Silvi Fitriawati', '193040028', 'silvifitriawati29@gmail.com', 'Teknik Informatika', 'hihi.png'),
(2, 'Anjara Darojatun Nisa', '193040006', 'anjaradarojatun@gmail.com', 'Teknik Informatika', 'hihi.png'),
(3, 'Yanida Nur Nabila', '193040022', 'yanidabila@gmail.com', 'Teknik informatika', 'hihi.png'),
(4, 'Putri Nur Meida ', '193040157', 'putri@gmail.com', 'Teknik Informatika', 'hihi.png'),
(5, 'Kareena Kardin', '193040035', 'key@gmail.com', 'Teknik Informatika', 'hihi.png'),
(6, 'Salsa Dwi Salma', '193030165', 'salsaaa@gmail.com', 'Teknologi Pangan', 'hihi.png'),
(7, 'Silviyani Wijaya ', '193030167', 'silviw@gmail.com', 'Teknologi Pangan', 'hihi.png'),
(8, 'Seli Suhaeli', '193040025', 'selisehueli2gmail.com', 'Teknik Informatika', 'hihi.png'),
(9, 'Salma Dwi', '193020167', 'salmaaja@gmail.com', 'Teknik industri', 'hihi.png'),
(10, 'Yuni Setiawati', '193040027', 'yunni@gmail.com', 'Teknik Informatika', 'hihi.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
