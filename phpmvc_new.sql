-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 08:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(3, 'Alif Rachmad Kurniawan', '151911513016', 'kurnia335@gmail.com', 'Teknik Informatika'),
(4, 'Raihan Abdul Qoshid', '151911513015', 'kurnia336@gmail.com', 'Teknik Informatika'),
(5, 'Ridwan Abdul Azzis', '151911513022', 'kurnia330@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(10) DEFAULT NULL,
  `matkul` varchar(75) DEFAULT NULL,
  `sks` decimal(2,0) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `kode_matkul`, `matkul`, `sks`, `semester`) VALUES
(1, 'PWD', 'Pemprograman Website Dasar', '3', 6),
(2, 'DBD', 'Desain Basis Data', '4', 6),
(3, 'DTS', 'Dasar Testing Sistem', '2', 6),
(4, 'TJCC', 'Teknik Jaringan dan Cloud Computing', '4', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_matkul`
--

CREATE TABLE `mhs_matkul` (
  `id_mhs_matkul` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nilai` decimal(2,0) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs_matkul`
--

INSERT INTO `mhs_matkul` (`id_mhs_matkul`, `id`, `id_matkul`, `nilai`, `status`) VALUES
(1, 3, 1, '0', 0),
(2, 3, 2, '0', 0),
(3, 4, 3, '0', 0),
(4, 4, 4, '0', 0),
(5, 5, 4, '0', 0),
(6, 5, 1, '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `mhs_matkul`
--
ALTER TABLE `mhs_matkul`
  ADD PRIMARY KEY (`id_mhs_matkul`),
  ADD KEY `FK_MATKUL_DIAMBIL_OLEH` (`id`),
  ADD KEY `FK_MAHASISWA_MENGAMBIL_MATKUL` (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mhs_matkul`
--
ALTER TABLE `mhs_matkul`
  MODIFY `id_mhs_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mhs_matkul`
--
ALTER TABLE `mhs_matkul`
  ADD CONSTRAINT `FK_MAHASISWA_MENGAMBIL_MATKUL` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`),
  ADD CONSTRAINT `FK_MATKUL_DIAMBIL_OLEH` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
