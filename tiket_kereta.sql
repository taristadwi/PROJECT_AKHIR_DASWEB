-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Des 2022 pada 15.17
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_kereta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`username`, `password`) VALUES
('peldua', '67890'),
('pelsatu', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` varchar(10) NOT NULL,
  `nama_kereta` varchar(25) NOT NULL,
  `kelas_kereta` varchar(25) NOT NULL,
  `gerbong` int NOT NULL,
  `no_kursi` varchar(50) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `harga_tiket` int NOT NULL,
  `stasiun_asal` varchar(30) NOT NULL,
  `stasiun_tujuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_kereta`, `kelas_kereta`, `gerbong`, `no_kursi`, `jam_berangkat`, `harga_tiket`, `stasiun_asal`, `stasiun_tujuan`) VALUES
('GAJ71', 'Gajayana', 'Eksekutif', 4, '9B', '14:32:00', 490000, 'Malang Kota Lama', 'Yogyakarta'),
('JAY102', 'Jayabaya', 'Ekonomi', 3, '10B', '13:50:00', 230000, 'Pasar Senen', 'Gubeng'),
('LOG247', 'Logawa', 'Ekonomi', 2, '20E', '15:20:00', 190000, 'Klakah', 'Madiun'),
('MUT104', 'Mutiara Selatan', 'Eksekutif', 6, '8C', '10:00:00', 280000, 'Mojokerto', 'Malang'),
('PAS286', 'Pasundan', 'Ekonomi', 5, '11C', '10:10:00', 210000, 'Kiaracondong', 'Yogyakarta'),
('TUR100', 'Turangga', 'Eksekutif', 1, '15A', '14:00:00', 520000, 'Gubeng', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int NOT NULL,
  `nama_penumpang` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama_penumpang`, `alamat`, `jenis_kelamin`, `no_telp`) VALUES
(2345121, 'Adinda Wahyu', 'Denpasar', 'Perempuan', '089534268621'),
(6753759, 'Tarista Dwi ', 'Malang', 'Perempuan', '081524735100'),
(7689034, 'Farhan Ramazain', 'Surabaya', 'Laki-Laki', '085346378090'),
(8885310, 'Sabilar Rosyad', 'Madiun', 'Laki-Laki', '087456123907');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` varchar(10) NOT NULL,
  `id_penumpang` int NOT NULL,
  `id_kereta` varchar(10) NOT NULL,
  `tgl_berangkat` datetime NOT NULL,
  `tgl_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_penumpang`, `id_kereta`, `tgl_berangkat`, `tgl_pemesanan`) VALUES
('9IU5CX6', 2345121, 'PAS286', '2022-12-12 10:10:00', '2022-12-11'),
('E4B5OIY', 6753759, 'LOG247', '2022-10-15 15:26:00', '2022-10-14'),
('VQP501S', 7689034, 'MUT104', '2022-12-10 10:00:00', '2022-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `jumlah_tiket` int NOT NULL,
  `harga_tiket` int NOT NULL,
  `total_bayar` int NOT NULL,
  `id_reservasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_bayar`, `jumlah_tiket`, `harga_tiket`, `total_bayar`, `id_reservasi`) VALUES
('104SUKSES', '2022-12-05 12:15:00', 1, 280000, 280000, 'VQP501S'),
('247SUKSES', '2022-10-14 08:08:00', 3, 190000, 570000, 'E4B5OIY'),
('286SUKSES', '2022-12-11 15:00:00', 2, 210000, 420000, '9IU5CX6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indeks untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_reservasi` (`id_reservasi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`),
  ADD CONSTRAINT `reservasi_ibfk_4` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id_reservasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
