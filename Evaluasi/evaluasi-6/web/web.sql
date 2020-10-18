-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2020 pada 12.03
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` text NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `deksripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `library`
--

INSERT INTO `library` (`id`, `nama`, `judul`, `jenis`, `deksripsi`) VALUES
(9, 'Arif', 'Blogger Pemula di Indonesia', 'motivasi', 'Berbicara tentang dunia blogger memang tidak ada habisnya, akan selalu ada teknik baru dan akan selalu ada orang baru yang ingin menjadi seorang blogger, orang baru inilah yang di sebuat sebagai seorang blogger pemula, para blogger pemula ini biasanya semangatnya begitu besar, tapi sayang cuma bertahan sebentar saja, palingan sekita beberapa bulan saja.  Oleh karena itulah di butuhkan motivasi untuk blogger pemula di Indonesia agar tidak menyerah sebelum mencapai goals yang diinginkan, semangat memang kadang naik dan kadang turun, seperti halnya trafik blog yang kita miliki, tapi itu wajar mengingat kita adalah seorang manusia biasa dan pembaca juga adalah manusia yang tidak setiap saat melihat artikel yang kita buat, mereka pasti punya kesibukan masing-masing.  Jika artikel yang anda buat berkualitas, bukan tidak mungkin blog yang anda buat akan kebanjiran visitor, entah itu ratusan orang bahkan ribuan orang perharinya. Intinya adalah sabar dan selalu berusaha membuat artikel sebaik mungkin, karena menurut s');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Anonymously', '123456', 'anonymous@gmail.com'),
(3, 'admin', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
