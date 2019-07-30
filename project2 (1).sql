-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2019 pada 05.19
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `alasan`, `komentar`) VALUES
('lnsa', 'jibrangifahri01@gmail.com', 'saiojld', 'Kirim'),
('jopsx', 'jibrangifahri04@gmail.com', '', 'Kirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '', 0),
(321, 'jibran', 123),
(1234567890, 'aa', 12345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_lengkap`, `jurusan`, `asal_sekolah`, `ibu`, `ayah`, `gambar`) VALUES
(123, 'dd', 'bjknkd', '0000-00-00', 'L', 'Islam', 'wefbkj', 'RPL', 'd.sds', 'l;mfd', 'mld', ''),
(321, ';lmlscx', 'lckxz', '0000-00-00', 'L', 'Islam', 'lkcnckxz', 'TAV', 'lkasm', ';zmlcmx ', 'klmxcz', ''),
(587, 'gjh', 'lknkn', '2019-12-20', 'L', 'Islam', 'kjb', 'TITL', 'lk', 'lknk', ';jlllkm', ' 2.jpg'),
(3213, 'adad', 'fwwef', '0000-00-00', 'L', 'Islam', 'ewfw', 'TKR', 'fdsffs', 'adsd', 'dsa', ' background.jfif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
