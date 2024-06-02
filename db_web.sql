-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2024 pada 09.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_confirm` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`username`, `email`, `email_confirm`, `password`, `password_confirm`) VALUES
('sayangkamoe', 'sayang@gmail.com', 'sayang@gmail.com', 'koplo098', 'koplo098');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mlbb`
--

CREATE TABLE `tb_mlbb` (
  `user_id` int(32) NOT NULL,
  `zone_id` int(32) NOT NULL,
  `username` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(32) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mlbb`
--

INSERT INTO `tb_mlbb` (`user_id`, `zone_id`, `username`, `item_name`, `price`, `payment_method`) VALUES
(343434, 12, 'bima000', '1450 diamonds', 180180, 'Shopee'),
(734324, 988, 'SUPER JEYYY', '1450 diamonds', 180180, 'Shopee'),
(1233232, 2669, 'KING PIGGY.', '720 diamonds', 90090, 'Gopay'),
(3452116, 987, 'SUPER JEYYY', '1450 diamonds', 180180, 'Shopee'),
(132890697, 2669, 'SUPER JEYYY.', '1450 diamonds', 180180, 'Shopee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mlbb`
--
ALTER TABLE `tb_mlbb`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`zone_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
