-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 01:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kursus`
--

CREATE TABLE `kategori_kursus` (
  `id` int(11) NOT NULL,
  `pemrograman` varchar(45) DEFAULT NULL,
  `jaringan` varchar(45) DEFAULT NULL,
  `office` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_kursus`
--

INSERT INTO `kategori_kursus` (`id`, `pemrograman`, `jaringan`, `office`) VALUES
(1, 'PHP', 'Linux', 'Excel'),
(2, 'JS', 'Mikrotik', 'Word');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengajar`
--

CREATE TABLE `kategori_pengajar` (
  `id` int(11) NOT NULL,
  `internal` varchar(45) DEFAULT NULL,
  ` eksternal` varchar(45) DEFAULT NULL,
  ` freelancer` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pengajar`
--

INSERT INTO `kategori_pengajar` (`id`, `internal`, ` eksternal`, ` freelancer`) VALUES
(1, 'guru', 'guru', 'guru'),
(2, 'dosen', 'dosen', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_training`
--

CREATE TABLE `kategori_training` (
  `id` int(11) NOT NULL,
  `public` varchar(45) DEFAULT NULL,
  `in_house` varchar(45) DEFAULT NULL,
  `private` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_training`
--

INSERT INTO `kategori_training` (`id`, `public`, `in_house`, `private`) VALUES
(1, 'promosion', 'pandemi', 'eksklusif');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `PHP` varchar(45) DEFAULT NULL,
  `Linux` varchar(45) DEFAULT NULL,
  `Ms. Office` varchar(45) DEFAULT NULL,
  `kategori_kursus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `PHP`, `Linux`, `Ms. Office`, `kategori_kursus_id`) VALUES
(1, 'Pemograman', 'Jaringan', 'Office', 1),
(2, 'Pemograman', 'Jaringan', 'Office', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `kategori_pengajar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama`, `email`, `kategori_pengajar_id`) VALUES
(1, 'yanto', 'yanto@g.com', 1),
(2, 'wiliam', 'wil@g.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar_has_peserta`
--

CREATE TABLE `pengajar_has_peserta` (
  `pengajar_id` int(11) NOT NULL,
  `peserta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar_has_training`
--

CREATE TABLE `pengajar_has_training` (
  `pengajar_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `email`) VALUES
(1, 'yanto', 'yanto@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `tgl mulai` time NOT NULL,
  `tgl akhir` time NOT NULL,
  `tempat` varchar(45) NOT NULL,
  `kategori_training_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `tgl mulai`, `tgl akhir`, `tempat`, `kategori_training_id`) VALUES
(1, '01:04:54', '02:04:50', 'promosion', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_kursus`
--
ALTER TABLE `kategori_kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pengajar`
--
ALTER TABLE `kategori_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_training`
--
ALTER TABLE `kategori_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kursus_kategori_kursus` (`kategori_kursus_id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_pengajar_kategori_pengajar1` (`kategori_pengajar_id`);

--
-- Indexes for table `pengajar_has_peserta`
--
ALTER TABLE `pengajar_has_peserta`
  ADD PRIMARY KEY (`pengajar_id`,`peserta_id`),
  ADD KEY `fk_pengajar_has_peserta_pengajar1` (`pengajar_id`),
  ADD KEY `fk_pengajar_has_peserta_peserta1` (`peserta_id`);

--
-- Indexes for table `pengajar_has_training`
--
ALTER TABLE `pengajar_has_training`
  ADD PRIMARY KEY (`pengajar_id`,`training_id`),
  ADD KEY `fk_pengajar_has_training_pengajar1` (`pengajar_id`),
  ADD KEY `fk_pengajar_has_training_training1` (`training_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_training_kategori_training1` (`kategori_training_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_kursus`
--
ALTER TABLE `kategori_kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_pengajar`
--
ALTER TABLE `kategori_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_training`
--
ALTER TABLE `kategori_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursus`
--
ALTER TABLE `kursus`
  ADD CONSTRAINT `fk_kursus_kategori_kursus` FOREIGN KEY (`kategori_kursus_id`) REFERENCES `kategori_kursus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `fk_pengajar_kategori_pengajar1` FOREIGN KEY (`kategori_pengajar_id`) REFERENCES `kategori_pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengajar_has_peserta`
--
ALTER TABLE `pengajar_has_peserta`
  ADD CONSTRAINT `fk_pengajar_has_peserta_pengajar1` FOREIGN KEY (`pengajar_id`) REFERENCES `pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengajar_has_peserta_peserta1` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengajar_has_training`
--
ALTER TABLE `pengajar_has_training`
  ADD CONSTRAINT `fk_pengajar_has_training_pengajar1` FOREIGN KEY (`pengajar_id`) REFERENCES `pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengajar_has_training_training1` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `fk_training_kategori_training1` FOREIGN KEY (`kategori_training_id`) REFERENCES `kategori_training` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
