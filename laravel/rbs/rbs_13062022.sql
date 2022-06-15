-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 06.32
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_ruangan`
--

CREATE TABLE `fasilitas_ruangan` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(64) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `ruangan_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_ruangan_fasilitas`
--

CREATE TABLE `fasilitas_ruangan_fasilitas` (
  `id` bigint(20) NOT NULL,
  `fasilitasruangan_id` bigint(20) NOT NULL,
  `fasilitas_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` longtext NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id`, `kode`, `nama`, `alamat`, `created_at`, `updated_at`, `created_by`, `updated_by`, `foto`) VALUES
(7, 'G0001', 'Gedung 1', 'Depok', NULL, NULL, NULL, NULL, '13.jpg'),
(8, 'G0002', 'Gedung 2', 'Lenteng Agung', NULL, NULL, NULL, NULL, '14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_ruangan`
--

CREATE TABLE `kategori_ruangan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) NOT NULL,
  `no_peminjaman` varchar(25) NOT NULL,
  `keperluan` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `ruangan_id` bigint(20) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `foto1` varchar(128) DEFAULT NULL,
  `foto2` varchar(128) DEFAULT NULL,
  `foto3` varchar(128) DEFAULT NULL,
  `foto4` varchar(128) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `gedung_id` bigint(20) NOT NULL,
  `kategori_ruangan_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu_peminjaman`
--

CREATE TABLE `waktu_peminjaman` (
  `id` bigint(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `peminjaman_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_ruangan_ruangan_id_f3769782_fk_ruangan_id` (`ruangan_id`);

--
-- Indeks untuk tabel `fasilitas_ruangan_fasilitas`
--
ALTER TABLE `fasilitas_ruangan_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fasilitas_ruangan_fasili_fasilitasruangan_id_fasi_66efe516_uniq` (`fasilitasruangan_id`,`fasilitas_id`),
  ADD KEY `fasilitas_ruangan_fa_fasilitas_id_73d4d025_fk_fasilitas` (`fasilitas_id`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_peminjaman` (`no_peminjaman`),
  ADD KEY `peminjaman_ruangan_id_e0a7eee6_fk_ruangan_id` (`ruangan_id`),
  ADD KEY `peminjaman_updated_by_4f88e5b1_fk_auth_user_id` (`updated_by`),
  ADD KEY `peminjaman_created_by_62ee3595_fk_auth_user_id` (`created_by`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `ruangan_gedung_id_9714c41b_fk_gedung_id` (`gedung_id`),
  ADD KEY `ruangan_kategori_ruangan_id_4f36068f_fk_kategori_ruangan_id` (`kategori_ruangan_id`);

--
-- Indeks untuk tabel `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waktu_peminjaman_peminjaman_id_c82e4d39_fk_peminjaman_id` (`peminjaman_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_ruangan_fasilitas`
--
ALTER TABLE `fasilitas_ruangan_fasilitas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD CONSTRAINT `fasilitas_ruangan_ruangan_id_f3769782_fk_ruangan_id` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`);

--
-- Ketidakleluasaan untuk tabel `fasilitas_ruangan_fasilitas`
--
ALTER TABLE `fasilitas_ruangan_fasilitas`
  ADD CONSTRAINT `fasilitas_ruangan_fa_fasilitas_id_73d4d025_fk_fasilitas` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`),
  ADD CONSTRAINT `fasilitas_ruangan_fa_fasilitasruangan_id_280e4218_fk_fasilitas` FOREIGN KEY (`fasilitasruangan_id`) REFERENCES `fasilitas_ruangan` (`id`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_created_by_62ee3595_fk_auth_user_id` FOREIGN KEY (`created_by`) REFERENCES `auth_user` (`id`),
  ADD CONSTRAINT `peminjaman_ruangan_id_e0a7eee6_fk_ruangan_id` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`),
  ADD CONSTRAINT `peminjaman_updated_by_4f88e5b1_fk_auth_user_id` FOREIGN KEY (`updated_by`) REFERENCES `auth_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_gedung_id_9714c41b_fk_gedung_id` FOREIGN KEY (`gedung_id`) REFERENCES `gedung` (`id`),
  ADD CONSTRAINT `ruangan_kategori_ruangan_id_4f36068f_fk_kategori_ruangan_id` FOREIGN KEY (`kategori_ruangan_id`) REFERENCES `kategori_ruangan` (`id`);

--
-- Ketidakleluasaan untuk tabel `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  ADD CONSTRAINT `waktu_peminjaman_peminjaman_id_c82e4d39_fk_peminjaman_id` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
