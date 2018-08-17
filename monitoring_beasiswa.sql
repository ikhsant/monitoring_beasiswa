-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 01:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `angkatan` varchar(11) DEFAULT NULL,
  `nilai_akademik` varchar(255) NOT NULL,
  `nilai_menwa` varchar(255) NOT NULL,
  `nilai_vtb` varchar(255) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama`, `jenis_kelamin`, `program_studi`, `angkatan`, `nilai_akademik`, `nilai_menwa`, `nilai_vtb`, `tahun_ajaran`) VALUES
(2, '1423123', 'ikhsan', 'L', 'PGSD', '2014', '', '76', '70', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `organisasi_id` int(11) NOT NULL,
  `organisasi_nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_website`, `logo`, `alamat`, `deskripsi`, `theme`) VALUES
(0, 'Monitoring Beasiswa', 'Logo NSP-1 (Custom) (1).png', 'Jl Raya Ciboalang No 21', 'Monitoring Beasiswa', 'orange');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `telp`, `username`, `password`, `akses_level`, `foto`, `last_login`) VALUES
(7, 'Ikhsan Thohir', 'ikhsan.thohir@gmail.com', '081615399070', 'ikhsan', '67a7872c5aeb341d482f955cd8ff9b951a26e74e', 'admin', '6mxjm9zocykg44g.jpg', '2018-06-21 01:43:35'),
(41, 'Mutiara Islam Hasanah', '', '', 'mutiara', '3678276956b962786b863defa84bbe85519ea5ed', 'kemahasiswaan', '8x6vf01mg1s0gwg.png', '2018-08-17 10:53:13'),
(42, 'admin', 'admin@admin.com', '08512535464', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '62krgygah44kk0o.png', '2018-08-17 11:15:15'),
(43, 'Muslih', '', '', 'kemahasiswaan', '06ae73a1d20112a48492f6b9eae8b5b9ed9cdb27', 'kemahasiswaan', '2w9ut328wce8o4k.png', '2018-08-17 11:17:22'),
(44, 'Iyus', '', '', 'akademik', 'f2a53d8dadeaa7643eb0ae91346e72af3317ac67', 'akademik', '74wh39u6vfs48o8.png', '2018-08-17 11:17:22'),
(45, 'Pembina Menwa', '', '', 'menwa', 'e0c5b991560f0db5380eabf0ae40c164b2d98be3', 'pembimbing_menwa', '3ycb1ubr6k8wgo.png', '2018-08-17 11:17:22'),
(46, 'Pembina VTB', '', '', 'vtb', 'ba847692ce9d4620349012dde15e75442e65e3c9', 'pembimbing_vtb', '416j51u0aog0wck.png', '2018-08-17 11:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`organisasi_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `organisasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
