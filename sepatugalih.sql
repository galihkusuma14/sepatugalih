-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 02:39 AM
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
-- Database: `sepatugalih`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(4, 'galeh', 'galeh', 'Galih Kusuma Dinata');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `stok_barang` int(5) NOT NULL,
  `ukuran_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `foto_barang`, `kategori`, `deskripsi_barang`, `stok_barang`, `ukuran_barang`) VALUES
(25, 'Sepatu Nike Air Max 97', 500000, 'galih14.jpg', 'nike', 'Sepatu ini berwarna biru. Sepatu ini mempunyai  keindahan yang cukup mempersona karena terdapat tulisan “HAVE A NIKE DAY”. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 9, '42'),
(27, 'Sepatu Nike Air Max 95', 500000, '9.png', 'nike', 'Sepatu ini berwarna merah. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 0, '42'),
(28, 'Sepatu Nike Air Max 95', 500000, '5.jpg', 'nike', 'Sepatu ini berwarna hijau dan sedikit kuning. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 9, '42'),
(29, 'Sepatu Nike Air Max 97', 500000, 'galih4.png', 'nike', 'Sepatu ini berwarna biru disertai hijau tosca. Sepatu ini mempunyai keindahan yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(30, 'Nike Air Force 1', 500000, '10.png', 'nike', 'Sepatu ini berwarna hitam. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(31, 'Converse 70s', 500000, 'converse2.jpg', 'converse', 'Sepatu ini berwarna hitam dan putih. Sepatu ini mempunyai  keindahan  yang cukup mempersona. Sepatu ini memunyai  manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(32, 'Converse 70s', 500000, 'converse3.jpg', 'converse', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(33, 'Converse 70s', 500000, 'converse4.jpg', 'converse', 'Sepatu ini berwarna merah muda. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(34, 'New Balance 574', 500000, 'step1.jpg', 'nb', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(35, 'New Balance 530 Trainers White', 500000, 'step4.jpg', 'nb', 'Sepatu ini berwarna putih abu-abu. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi diminati banyak orang.', 10, '42'),
(36, 'New Balance 990 V5', 500000, 'step5.jpg', 'nb', 'Sepatu ini berwarna abu-abu. Sepatu ini memunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(37, 'Vans Old Skool', 500000, 'sepatu1.jpg', 'vans', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan  yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(38, 'Vans Old Skool', 500000, 'sepatu2.jpg', 'vans', 'Sepatu ini berwarna hitam dan putih. Sepatu ini mempunyai keindahan  yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(39, 'Vans Sk8', 500000, 'sepatu5.jpg', 'vans', 'Sepatu ini berwarna hitam. Sepatu ini memunyai keindahan yang cukup unik. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(40, 'Puma Suede', 500000, 'p1.png', 'puma', 'Sepatu ini berwarna hitam dengan garis putih. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(41, 'Puma Suede', 500000, 'p2.png', 'puma', 'Sepatu ini berwarna biru dengan garis putih. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '40'),
(62, 'Sepatu Nike Air Max 97', 500000, 'galih2.png', 'nike', 'Sepatu ini hitam disertai hijau tosca. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika  di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 10, '42'),
(63, 'Sepatu Nike Air Max 97', 500000, 'galih3.png', 'nike', 'Sepatu ini berwarna hijau disertai kuning emas. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika  di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 10, '42'),
(64, 'Sepatu Nike Air Max 95', 500000, 'galih6.jpg', 'nike', 'Sepatu ini berwarna biru indah. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 10, '42'),
(65, 'Sepatu Nike Air Max 95', 500000, 'galih7.jpg', 'nike', 'Sepatu ini berwarna biru disertai hitam. Sepatu ini mempunyai keindahan  yang cukup mempersona ketika di tempat gelap. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 10, '42'),
(66, 'Sepatu Nike Air Force 1', 500000, 'galih9.png', 'nike', 'Sepatu ini berwarna putih. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 10, '42'),
(67, 'Sepatu Nike Air Force 1', 500000, 'galih11.png', 'nike', 'Sepatu ini berwarna hitam dengan logo nike warna biru. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 100, '42'),
(68, 'Sepatu Nike Air Force 1', 500000, 'galih12.png', 'nike', 'Sepatu ini berwarna putih dengan logo nike warna hitam. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 20, '42'),
(70, 'Puma Suede', 500000, 'puma1.jpg', 'puma', 'Sepatu ini berwarna orange. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '42'),
(71, 'Puma Suede', 500000, 'puma2.jpg', 'puma', 'Sepatu ini berwarna merah. Sepatu ini mempunyai keindahan  yang cukup mempesona. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 50, '38'),
(72, 'Puma Suede', 500000, 'puma3.jpg', 'puma', 'Sepatu ini berwarna biru. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 11, '38'),
(73, 'Puma Suede', 500000, 'puma4.jpg', 'puma', 'Sepatu ini berwarna biru. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 11, '38'),
(74, 'Puma Suede', 500000, 'puma5.jpg', 'puma', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '39'),
(75, 'Puma Suede', 500000, 'puma6.jpg', 'puma', 'Sepatu ini berwarna hitam dengang garis warna hijau tosca. Sepatu ini mempunyai keindahan  yang cukup mempesona. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 14, '41'),
(80, 'Converse 70s', 500000, 'converse1.jpg', 'converse', 'Sepatu ini berwarna biru. Sepatu ini mempunyai  keindahan  yang cukup mempesona. Sepatu ini bertali dan memunyai  manfaat yang banyak. Sepatu ini juga lagi trend  di zaman sekarang atau diminati banyak orang.', 18, '39'),
(81, 'Converse 70s', 500000, 'converse5.jpg', 'converse', 'Sepatu ini berwarna merah maroon. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 17, '39'),
(82, 'Vans Sk8', 500000, 'sepatu6.jpg', 'vans', 'Sepatu ini berwarna biru. Sepatu ini mempunyai  keindahan yang cukup unik. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 11, '40'),
(83, 'Vans Sk8', 500000, 'sepatu8.jpg', 'vans', 'Sepatu ini berwarna hitam dan putih. Sepatu ini mempunyai keindahan  yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 19, '40'),
(84, 'Vans Slip On', 500000, 'sepatu3.jpg', 'vans', 'Sepatu ini berwarna hitam dan putih. Sepatu ini memunyai keindahan  yang cukup mempesona dikarenakan terdapat motif catur. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang.', 15, '41'),
(85, 'Vans Slip On', 500000, 'sepatu4.jpg', 'vans', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 11, '42'),
(86, 'Vans Slip On', 500000, 'sepatu7.jpg', 'vans', 'Sepatu ini berwarna putih. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 125, '39'),
(87, 'New Balance', 500000, 'step2.jpg', 'nb', 'Sepatu ini berwarna hitam. Sepatu ini mempunyai keindahan yang cukup mempesona. Sepatu ini bertali dan mempunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '41'),
(88, 'New Balance 850 OG Reissue', 500000, 'step3.jpg', 'nb', 'Sepatu ini berwarna biru putih. Sepatu ini mempunyai keindahan  yang cukup mempesona ketika di tempat gelap. Sepatu ini bertali dan memunyai manfaat yang banyak. Sepatu ini juga lagi trend di zaman sekarang atau diminati banyak orang.', 10, '41'),
(89, 'New Balance MR530 Unisex Sneakers ', 500000, 'step8.jpg', 'nb', '', 10, '42'),
(90, 'New Balance 530 Unisex Sneakers- Grey', 500000, 'step6.jpg', 'nb', '', 11, '44');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(111) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 1, 'galih', 'bca', 100000, '2022-11-02', '20221102165615WhatsApp Image 2022-11-02 at 10.59.11.jpeg'),
(2, 2, 'Galih Kusuma Dinata', 'bca', 123123, '2022-11-03', '20221103113030WhatsApp Image 2022-11-02 at 10.59.11.jpeg'),
(3, 5, 'Galih Kusuma Dinata', 'bca', 12321312, '2022-11-07', '20221107130253step1.jpg'),
(4, 6, 'Galih Kusuma Dinata', 'bca', 12, '2022-11-07', '20221107135141step5.jpg'),
(5, 7, 'Galih Kusuma Dinata', 'bca', 1, '2022-11-09', '20221109102139step1.jpg'),
(6, 8, 'Galih Kusuma Dinata', 'bca', 1, '2022-11-09', '20221109102332step1.jpg'),
(7, 9, 'Galih', 'bca', 123, '2022-11-11', '20221111123959step7.jpg'),
(8, 11, 'Galih Kusuma Dinata', 'bca', 12, '2022-11-11', '20221111125232step8.jpg'),
(9, 12, 'da', 'bca', 1, '2022-11-14', '20221114063945WhatsApp Image 2022-11-09 at 08.35.43.jpeg'),
(10, 15, 'Galih Kusuma Dinata', 'bca', 4500000, '2022-11-14', '20221114070125WhatsApp Image 2022-11-09 at 08.35.43.jpeg'),
(11, 16, 'Galih Kusuma Dinata', 'bca', 500000, '2022-11-14', '20221114080814baju.png'),
(12, 22, 'rajwa', 'bca', 5000000, '2022-11-18', '20221118064207'),
(13, 23, 'Galih Kusuma Dinata', 'bca', 500000, '2022-11-18', '20221118070309transaksi user .jpg'),
(14, 24, 'Galih Kusuma Dinata', 'bca', 1500000, '2022-11-19', '20221119010013Untitled Diagram-Page-4.jpg'),
(15, 31, 'Galih Kusuma Dinata', 'bca', 0, '2022-11-21', '20221121035915'),
(16, 33, 'Galih Kusuma Dinata', 'bca', 500000, '2022-11-21', '20221121065358baju.png'),
(17, 34, 'Galih Kusuma Dinata', 'BCA', 500000, '2022-11-22', '20221122032252Bukti.png'),
(18, 35, 'Galih Kusuma Dinata', 'bca', 500000, '2022-11-22', '20221122041600'),
(19, 38, 'Galih Kusuma Dinata', 'BCA', 500000, '2022-11-23', '20221123042550BUKTI.jpg'),
(20, 39, 'Galih Kusuma Dinata', 'BCA', 500000, '2022-11-23', '20221123152630BUKTI.jpg'),
(21, 40, 'Galih Kusuma Dinata', 'BCA', 500000, '2022-11-26', '20221126132938'),
(22, 41, 'Galih Kusuma Dinata', 'BCA', 123, '2022-11-28', '20221128121149'),
(23, 43, 'Galih Kusuma Dinata', 'BCA', 5000000, '2022-12-03', '20221203053335avatar.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_transaksi`, `id_barang`, `jumlah`, `nama`, `ukuran`, `harga`, `total`) VALUES
(3, 4, 28, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(4, 4, 29, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(5, 5, 28, 2, 'Sepatu Nike Air Max 95', '', 500000, 1000000),
(6, 6, 27, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(7, 7, 25, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(8, 8, 28, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(9, 9, 29, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(10, 10, 25, 2, 'Sepatu Nike Air Max 97', '', 500000, 1000000),
(11, 11, 29, 2, 'Sepatu Nike Air Max 97', '', 500000, 1000000),
(12, 12, 28, 3, 'Sepatu Nike Air Max 95', '', 500000, 1500000),
(13, 13, 35, 1, 'New Balance 530 Trainers White', '', 500000, 500000),
(14, 14, 35, 1, 'New Balance 530 Trainers White', '', 500000, 500000),
(15, 15, 27, 9, 'Sepatu Nike Air Max 95', '', 500000, 4500000),
(16, 16, 28, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(17, 17, 25, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(18, 18, 29, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(19, 19, 29, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(20, 20, 25, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(21, 21, 29, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(22, 22, 28, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(23, 23, 28, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(24, 24, 29, 3, 'Sepatu Nike Air Max 97', '', 500000, 1500000),
(25, 0, 41, 1, 'Puma Suede', '', 500000, 500000),
(26, 26, 41, 1, 'Puma Suede', '', 500000, 500000),
(27, 27, 41, 1, 'Puma Suede', '', 500000, 500000),
(28, 27, 67, 1, 'Sepatu Nike Air Force 1', '', 500000, 500000),
(29, 28, 27, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(30, 29, 41, 1, 'Puma Suede', '', 500000, 500000),
(31, 29, 37, 1, 'Vans Old Skool', '', 500000, 500000),
(32, 30, 37, 1, 'Vans Old Skool', '', 500000, 500000),
(33, 31, 36, 1, 'New Balance 990 V5', '', 500000, 500000),
(34, 32, 37, 1, 'Vans Old Skool', '', 500000, 500000),
(35, 33, 35, 1, 'New Balance 530 Trainers White', '', 500000, 500000),
(36, 34, 35, 1, 'New Balance 530 Trainers White', '', 500000, 500000),
(37, 35, 25, 1, 'Sepatu Nike Air Max 97', '', 500000, 500000),
(38, 36, 27, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(39, 37, 27, 1, 'Sepatu Nike Air Max 95', '', 500000, 500000),
(40, 38, 34, 2, 'New Balance 574', '', 500000, 1000000),
(41, 39, 35, 1, 'New Balance 530 Trainers White', '', 500000, 500000),
(42, 40, 37, 1, 'Vans Old Skool', '', 500000, 500000),
(43, 41, 28, 1, 'Sepatu Nike Air Max 95', '42', 500000, 500000),
(44, 42, 25, 1, 'Sepatu Nike Air Max 97', '42', 500000, 500000),
(45, 43, 27, 10, 'Sepatu Nike Air Max 95', '42', 500000, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal_transaksi`, `total_transaksi`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(1, 1, '2022-11-02', 100000, 'klayatan', 'lunas', 'jp'),
(13, 9, '2022-11-14', 500000, '', 'pending', ''),
(14, 9, '2022-11-14', 500000, 'g', 'pending', ''),
(15, 11, '2022-11-14', 4500000, 'basoo', 'lunas', '7788787878787'),
(17, 12, '2022-11-17', 500000, 'klayatan', 'pending', ''),
(33, 14, '2022-11-21', 500000, 'klayatan is real\r\n', 'lunas', '2008'),
(34, 14, '2022-11-22', 500000, 'klayatanwaseverywhere', 'barang dikirim', '12345678910'),
(35, 14, '2022-11-22', 500000, 'klayatan', 'sudah kirim pembayaran', ''),
(36, 14, '2022-11-22', 500000, 'klayatan', 'pending', ''),
(37, 14, '2022-11-22', 500000, 'klayatan', 'pending', ''),
(38, 15, '2022-11-23', 1000000, 'Klayatan Gang 3\r\n', 'lunas', '12345678910'),
(43, 19, '2022-12-03', 5000000, 'Klayatan Gang 3', 'barang dikirim', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(19, 'Galih', '123', 'galihganteng@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
