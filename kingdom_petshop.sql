-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingdom_petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_faktur`
--

CREATE TABLE `detail_faktur` (
  `id` int(11) NOT NULL,
  `id_faktur` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `harga` int(15) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_faktur`
--

INSERT INTO `detail_faktur` (`id`, `id_faktur`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 2, 1, 'Makanan Kucing', 1, 450000, ''),
(2, 2, 15, 'Mainan Anjing', 1, 225000, ''),
(3, 2, 13, 'Tempat Makan Anjing', 1, 370000, '');

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_pembayaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_pembayaran`) VALUES
(2, 'Muhammad Gunawan', 'Cilebut, Bogor, Jawa Barat', '2022-11-22 10:11:29', '2022-11-23 10:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama_hewan` varchar(128) NOT NULL,
  `jenis_kelamin` enum('Jantan','Betina') NOT NULL,
  `kategori_hewan` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nama_hewan`, `jenis_kelamin`, `kategori_hewan`, `tanggal_lahir`, `image`) VALUES
(1, 'Kitty', 'Betina', 'Kucing', '2020-05-12', 'cat.jpg'),
(3, 'Aqil', 'Jantan', 'Kucing', '2021-04-16', 'cat2.jpg'),
(4, 'Yuyu', 'Betina', 'Kucing', '2021-07-21', 'cat3.jpg'),
(5, 'Doggy', 'Jantan', 'Anjing', '2018-12-24', 'dog1.jpg'),
(6, 'Raden', 'Jantan', 'Anjing', '2019-08-07', 'dog2.jpg'),
(7, 'Yusi', 'Betina', 'Anjing', '2020-09-17', 'dog3.jpg'),
(8, 'Jiko', 'Jantan', 'Anjing', '2017-06-22', 'dog4.jpg'),
(11, 'Osas', 'Jantan', 'Kucing', '2022-06-25', 'catt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori_hewan` varchar(128) NOT NULL,
  `teks` text NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_hewan`, `teks`, `image`) VALUES
(1, 'Kucing', 'Kami memiliki Kucing yang siap untuk di Adopsi. Terdapat Kucing ras bersertifikat dan Kucing biasa yang kami selamatkan dari luar.', 'kucing.jpg'),
(2, 'Anjing', 'Kami memiliki Anjing yang siap untuk di Adopsi. Terdapat Anjing ras bersertifikat dan Anjing biasa yang kami selamatkan dari luar.', 'dog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(128) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk`, `keterangan`, `kategori`, `harga`, `stok`, `image`) VALUES
(1, 'Makanan Kucing', 'Wellness Natural Cat Food Grain Free', 'Makanan Kucing', 450000, 100, 'catfood1.jpg'),
(2, 'Makanan Kucing', 'Nature Bridge Beauty Cat Food For All Life Stages', 'Makanan Kucing', 250000, 150, 'catfood2.jpg'),
(3, 'Makanan Kucing', 'Whiskas', 'Makanan Kucing', 70000, 200, 'catfood3.jpg'),
(4, 'Makanan Kucing', 'Royal Canin', 'Makanan Kucing', 400000, 100, 'catfood4.jpg'),
(5, 'Makanan Anjing', 'Pedigree', 'Makanan Anjing', 450000, 120, 'dogfood1.jpg'),
(6, 'Makanan Anjing', 'Royal Canin', 'Makanan Anjing', 420000, 125, 'dogfood2.jpg'),
(7, 'Makanan Anjing', 'Jerhigh', 'Makanan Anjing', 250000, 200, 'dogfood3.jpg'),
(8, 'Makanan Anjing', 'Equilibrio', 'Makanan Anjing', 350000, 150, 'dogfood4.jpg'),
(9, 'Treats', 'Vitakraf Liquid Snack', 'Treats (Camilan Hewan)', 150000, 200, 'treats1.jpg'),
(10, 'Treats', 'Friskies Party Mix Snack', 'Treats (Camilan Hewan)', 250000, 155, 'treats2.jpg'),
(11, 'Treats', 'Mr. Lee Bakery Baby Dog Biscuit', 'Treats (Camilan Hewan)', 350000, 180, 'treats3.jpeg'),
(12, 'Treats', 'Alpha Treats', 'Treats (Camilan Hewan)', 399000, 150, 'treats4.jpeg'),
(13, 'Tempat Makan Anjing', 'Automatic Pet Feeder', 'Aksesoris', 370000, 100, 'aksesoris.jpg'),
(14, 'Tempat Makan Anjing dan Kucing', 'Wood Pet Dining Table', 'Aksesoris', 150000, 300, 'aksesoris1.png'),
(15, 'Mainan Anjing', 'Flavor Frenzy Power Chew Triple Pack', 'Aksesoris', 225000, 360, 'aksesoris2.jpg'),
(16, 'Mainan Anjing', 'Airdog Squeaker Dumbbell', 'Aksesoris', 115000, 400, 'aksesoris3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Gunawan', '12211015@bsi.ac.id', 'pro1669034574.jpg', '$2y$10$/RPNobfLeDctz97Zbdwy1.I4xloLeD60xm5tXZ9mGnLb2Qbjkn9si', 2, 1, 1669031448),
(2, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$WQu3y0yTrrAyL34Fw48JWu.0JCpXot1OBIrEAF4NEppxLRPynCC9O', 1, 1, 1669087073);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_faktur`
--
ALTER TABLE `detail_faktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `detail_faktur`
--
ALTER TABLE `detail_faktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faktur`
--
ALTER TABLE `faktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
