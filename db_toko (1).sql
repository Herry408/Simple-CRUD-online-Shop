-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 03:59 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Nama`) VALUES
(7, 'jung', '21232f297a57a5a743894a0e4a801fc3', 'Jung Dipa bongan'),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'herry');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(10) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `isi`, `tanggal`, `gambar`, `judul`) VALUES
(1, 'ude fashion is pretty formulaic. Sneak a peek into the closet of literally any guy you know, and youâ€™ll see some combination of dark-wash denim, plain white tees, comfy hoodies and a handful of button-downs. (Seriously, try itâ€”we dare you.) Thankfully, 2019 menâ€™s fashion trends are hereâ€”and ready to inject a little fresh energy into any dudeâ€™s wardrobe.', '2020-01-02', 'GettyImages-914704910-copy.jpg', '2019 Trends for Himâ€”Chic New Looks the Man in Your Life Will Love'),
(2, 'London the enfant terrible of the show season and the kicking off point Where Pitti goes classic and Milan goes sexy and Paris goes polished, our British capital likes to subvert the norm. After all, this is the hometown of convention breakers at large Alexander McQueen, Vivienne Westwood John Galliano and the like. There a grand tradition of being a bit mad and fun that to be upheld.\r\n', '2020-01-03', 'gettyimages-1197693506.jpg', 'The Best And Maddest Street Style At London Fashion Week Men');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(10) NOT NULL,
  `nm_brg` varchar(100) NOT NULL,
  `kategori` enum('Sepatu','Celana','Tshirt','Jaket') NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nm_brg`, `kategori`, `jumlah`, `keterangan`, `harga`, `gambar`) VALUES
(1, 'Levi''s Jeans', 'Celana', '10', 'bagus ', '150000', 'levi-s-6804-5238291-1.jpg'),
(2, 'T-shirt Red Black Gradation', 'Tshirt', '10', 'good', '100000', '61ybLs5FK4L._UX569_.jpg'),
(3, 'Baseball Jacket White Red', 'Jaket', '5', 'baru', '200000', 'Campus-sutra.jpg'),
(4, 'Running Shoes', 'Sepatu', '10', 'mantap', '350000', '1bb436ce6a18af60f59df7ff5d6c54fe.jpg'),
(5, 'Vans OldSkoll Classic BW', 'Sepatu', '5', 'new', '750000', '964f53c8fcc5887dfe99c674d093beec.jpeg'),
(6, 'Maroon Bomber Jacket', 'Jaket', '5', 'good', '250000', 'hemmeh-3906-9295851-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
