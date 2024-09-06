-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2021 pada 13.22
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hantaranratna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `status`) VALUES
(2, 'hantaranjmp', '19127e62d47dcc97149e14d5b8d1b6f3', 1),
(4, 'feriandika', 'a8c580937868fb72b53706017b8e0e00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `grab_data`
--

CREATE TABLE `grab_data` (
  `grab_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `grab_data`
--

INSERT INTO `grab_data` (`grab_id`, `name`, `whatsapp`, `date`) VALUES
(1, 'Feri Andriyanto Sandika', '089668730345', '2020-10-14 10:10:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` varchar(9) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `detail` longtext NOT NULL,
  `shopee_link` varchar(100) NOT NULL,
  `bukalapak_link` varchar(100) NOT NULL,
  `tokopedia_link` varchar(100) NOT NULL,
  `lazada_link` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `detail`, `shopee_link`, `bukalapak_link`, `tokopedia_link`, `lazada_link`, `metadata`) VALUES
('hap6sW1Ng', 'Hantaran Logam Mulia', 2000000, '<p>dicoba</p>\r\n', '#', '#', '#', '#', 'Hantaran emas, Hantaran logam mulia, emas, hantaran, lamaran, nikah'),
('moKvNg15d', 'Hantaran Angsulan', 2000000, '<p>test 2&nbsp;</p>\r\n', '', '', '', '', 'Hantaran emas, Hantaran logam mulia, emas, hantaran, lamaran, nikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_photo`
--

CREATE TABLE `product_photo` (
  `photo_id` int(11) NOT NULL,
  `product_id` varchar(9) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_photo`
--

INSERT INTO `product_photo` (`photo_id`, `product_id`, `file_name`, `status`) VALUES
(4, 'hap6sW1Ng', 'EKXU2H47G.jpeg', 1),
(12, 'moKvNg15d', '8ZCKPGN7O.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `script_digitalmarketing`
--

CREATE TABLE `script_digitalmarketing` (
  `idscript` int(11) NOT NULL,
  `script_name` varchar(50) NOT NULL,
  `code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `script_digitalmarketing`
--

INSERT INTO `script_digitalmarketing` (`idscript`, `script_name`, `code`) VALUES
(1, 'fb_pixel', ''),
(2, 'google_ads', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE `slideshow` (
  `slideshow_id` int(11) NOT NULL,
  `file_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `grab_data`
--
ALTER TABLE `grab_data`
  ADD PRIMARY KEY (`grab_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indeks untuk tabel `script_digitalmarketing`
--
ALTER TABLE `script_digitalmarketing`
  ADD PRIMARY KEY (`idscript`);

--
-- Indeks untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `grab_data`
--
ALTER TABLE `grab_data`
  MODIFY `grab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `script_digitalmarketing`
--
ALTER TABLE `script_digitalmarketing`
  MODIFY `idscript` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
