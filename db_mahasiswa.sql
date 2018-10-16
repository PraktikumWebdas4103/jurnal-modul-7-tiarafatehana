-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 12.00
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
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `mottohidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `nim`, `jeniskelamin`, `programstudi`, `fakultas`, `asal`, `mottohidup`) VALUES
('Fatehana', '2147483647', 'Male', 'KA', 'FKB', 'medan', 'be yourself'),
('Fatehanaa', '6706174021', 'Female', 'MI', 'FIT', 'medan', 'be yourself'),
('Rama', '6706174024', 'Male', 'MI', 'FIT', 'Tangeranggggg', 'Apa yaaaaa duhhhh'),
('TFA', '6706174026', 'Female', 'Tektel', 'FIF', 'Bandung', 'be yourself aja'),
('Adi', '6706174027', 'Male', 'Sismed', 'FEB', 'Tangerang', 'Apa yaaaaa'),
('fthn', '777777', 'cewe', 'mi', 'fit', 'bdg', 'blabla');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
