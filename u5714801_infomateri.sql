-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2020 at 06:34 PM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5714801_infomateri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nidn` int(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nidn`, `pass`, `name`, `role`) VALUES
(1, 1114019201, '1114019201', 'Riza Hadi Saputra, S.T., M.T', 1),
(2, 1, '476', 'RIzal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buka_kelas`
--

CREATE TABLE `buka_kelas` (
  `id` int(11) NOT NULL,
  `id_matkul` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buka_kelas`
--

INSERT INTO `buka_kelas` (`id`, `id_matkul`, `id_kelas`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `detail`, `link`) VALUES
(1, 'ABC', 'KEREN BANGETSSSSSSS', 'www.google.com'),
(2, 'TOP', 'KEREN', 'www.google.com'),
(3, '12312', '123', 'qasd'),
(4, '123', 'asd', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `jumlah`) VALUES
(1, 'IF-41-09', 39),
(2, 'IF-41-10', 40);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(7) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`) VALUES
(1, '1702012', 'Muhammad Ashar Ramadhan');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `matkul`, `judul`, `detail`, `link`) VALUES
(1, 'DCS Engineering', 'A', 'ini keren', 'www.google.com'),
(2, 'DCS Engineering', 'B', 'ini keren', 'www.google.com'),
(3, 'DCS Engineering', 'C', 'ini keren', 'www.google.com'),
(4, 'DCS Engineering', 'D', 'ini keren', 'www.google.com'),
(5, 'DCS Engineering', 'E', 'ini keren', 'www.google.com'),
(6, 'Mikroprosesor', 'A', 'ini keren', 'www.google.com'),
(7, 'Mikroprosesor', 'ABC', 'KEREN BANGETSSSSSSS', 'www.google.com'),
(8, 'Mikroprosesor', 'TOP', 'KEREN', 'www.google.com'),
(9, 'DCS Engineering', '232343', '234234', ''),
(10, 'DCS Engineering', 'q', 'q', 'drive.google.com/drive/u/0/folders/1egCgDYm9h7AfAMLnk4JJLe8btRGLAY5_');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `kode`) VALUES
(1, 'DCS Engineering', '1'),
(2, 'Mikroprosesor', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id` int(11) NOT NULL,
  `nidn` varchar(10) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `kode_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id`, `nidn`, `kode_mk`, `kode_kelas`) VALUES
(1, '1', '1', 1),
(2, '1', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mengampu`
--

CREATE TABLE `mengampu` (
  `id` int(11) NOT NULL,
  `id_matkul` int(3) NOT NULL,
  `nidn` varchar(10) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nim` char(10) NOT NULL,
  `tp` int(11) NOT NULL,
  `tm1` int(11) NOT NULL,
  `tm2` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `kuis1` int(11) NOT NULL,
  `kuis2` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `presentasi` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `pembicara` int(11) NOT NULL,
  `diskusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengampu`
--

INSERT INTO `mengampu` (`id`, `id_matkul`, `nidn`, `id_kelas`, `id_mhs`, `nim`, `tp`, `tm1`, `tm2`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `kuis1`, `kuis2`, `kehadiran`, `presentasi`, `uts`, `uas`, `pembicara`, `diskusi`) VALUES
(1, 1, '1', 1, 1, '1702012', 100, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `terdiri`
--

CREATE TABLE `terdiri` (
  `id` int(11) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_mhs` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `matkul`, `judul`, `detail`, `link`) VALUES
(1, 'DCS Engineering', 'ABC', 'KEREN BANGETSSSSSSS', 'www.google.com'),
(2, 'Mikroprosesor', '12312', 'KEREN BANGETSSSSSSS', 'www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buka_kelas`
--
ALTER TABLE `buka_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mengampu`
--
ALTER TABLE `mengampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terdiri`
--
ALTER TABLE `terdiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buka_kelas`
--
ALTER TABLE `buka_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mengampu`
--
ALTER TABLE `mengampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terdiri`
--
ALTER TABLE `terdiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
