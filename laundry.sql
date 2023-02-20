-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 03:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`) VALUES
(3, 8, 5, 54),
(4, 9, 5, 40),
(9, 14, 11, 1),
(11, 16, 7, 7),
(12, 17, 5, 3),
(13, 20, 7, 3),
(14, 21, 7, 5),
(15, 22, 7, 5),
(16, 23, 7, 5),
(17, 24, 5, 10),
(19, 26, 11, 1000),
(20, 27, 7, 5),
(21, 28, 11, 10),
(22, 29, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_member`, `gender`, `username`, `password`) VALUES
(7, 'Deva Nanda', 'Laki-Laki', 'Deva', '202cb962ac59075b964b07152d234b70'),
(9, 'Rasyid', 'Laki-Laki', 'rasyid', '202cb962ac59075b964b07152d234b70'),
(11, 'D-2', 'Perempuan', 'D-2', '202cb962ac59075b964b07152d234b70'),
(16, 'Rasyid', 'Laki-Laki', 'rasyidrdh', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Muhammad Rasyid Ridho', 'Laki-Laki', 'rasid', 'd9b1d7db4cd6e70935368a1efb10e377'),
(20, 'Rasyid', 'Laki-Laki', 'mrasyid', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama_paket` enum('Kiloan','Dry Cleaning','Sepatu','Tas') NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `harga`) VALUES
(5, 'Kiloan', 5000),
(7, 'Dry Cleaning', 10000),
(11, 'Sepatu', 25000),
(13, 'Tas', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('admin','petugas','owner') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `alamat`, `role`, `username`, `password`) VALUES
(5, 'Deva', 'Jawa', 'petugas', 'Dv', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Rasyidrdh', 'Jawa Timur', 'admin', 'rasyidrdh05', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'Rasyid', 'Jawa Timur', 'petugas', 'rasyid', '202cb962ac59075b964b07152d234b70'),
(8, 'Rasyid', 'Jakarta', 'petugas', 'rasyd', '202cb962ac59075b964b07152d234b70'),
(10, 'A', 'B', 'admin', 'a1', '202cb962ac59075b964b07152d234b70'),
(16, 'nopal', 'coba', 'admin', 'coba', '202cb962ac59075b964b07152d234b70'),
(17, 'Deva', 'Papua', 'petugas', 'da', '202cb962ac59075b964b07152d234b70'),
(18, 'Rasyid', 'Indonesia', 'owner', 'rasyidrdh05', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `status_pembayaran` enum('lunas','belum_lunas') NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_member`, `tanggal`, `batas_waktu`, `tanggal_pembayaran`, `status`, `status_pembayaran`, `id_petugas`) VALUES
(8, 11, '2022-10-26', '2022-10-07', '2022-10-10', 'selesai', 'lunas', 10),
(9, 9, '2022-10-26', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10),
(14, 7, '2022-10-27', '2022-10-27', '2022-10-27', 'baru', 'belum_lunas', 10),
(16, 17, '2022-10-27', '2022-10-28', '2022-10-27', 'selesai', 'lunas', 10),
(17, 9, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10),
(20, 20, '2022-10-27', '2022-10-28', '2022-10-28', 'baru', 'belum_lunas', 0),
(21, 19, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 0),
(22, 19, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 0),
(23, 19, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 0),
(24, 19, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 0),
(26, 19, '2022-10-28', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10),
(27, 19, '2022-10-27', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10),
(28, 19, '2022-10-29', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10),
(29, 19, '2022-10-31', '2022-10-28', '2022-10-28', 'diambil', 'lunas', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_member` (`id_paket`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `transaksi_ibfk_1` (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
