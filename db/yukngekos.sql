-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 11:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yukngekos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`, `email`, `alamat`, `no_telp`) VALUES
('Sarwan Muharram', 'DaengSM', '123', 'DaengSM@gmail.com', 'Jl. Merdeka Barat No 6', '082217213319'),
('Rizki Luthfan ', 'Kilut', '123', 'kilut@gmail.com', 'Jl. Raya Bogor Km 22', '082217213322'),
('Muhammad Ade A', 'MadeA', '123', 'Madea@gmail.com', 'Jl. Yos Sudarso 23-24', '082217213321'),
('Rizki Ramadhan A', 'MamangRa', '123', 'mamang@gmail.com', 'Jl. DI Panjaitan Kav. 42', '082217213318'),
('Muhammad Rizal M', 'Mrizal', '123', 'Mrizal@gmail.com', 'Jl. S. Parman Kav. 8', '082217213320');

-- --------------------------------------------------------

--
-- Table structure for table `kosan`
--

CREATE TABLE `kosan` (
  `idkos` int(10) NOT NULL,
  `namakos` varchar(20) NOT NULL,
  `alamatkos` text NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kamartersedia` int(2) NOT NULL,
  `genderkos` varchar(6) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosan`
--

INSERT INTO `kosan` (`idkos`, `namakos`, `alamatkos`, `fasilitas`, `harga`, `kamartersedia`, `genderkos`, `username`) VALUES
(12345, 'Pesona Asep', 'Jl. Graha Angkasa Pura I Blok B/12', '- Wc dalem\r\n- Ada Kolamnya\r\n- Listrik gratis', '10.000.000', 6, 'Campur', 'asepaja'),
(12346, 'Rumah Udeng', 'Jl. Percetakan Negara No 17', '- ada playgorund\r\n- dekat dengan TPU\r\n- free whiskas', '12.000.000', 3, 'Wanita', 'udengaja'),
(12347, 'Pesona Asep 2', 'Jl. Graha Angkasa Pura I Blok B/12', '- Ada tempat kafe indie\r\n- Konser Mawang tiap malam jumat', '13.000.000', 2, 'Campur', 'asepaja'),
(12348, 'Danang Indah', 'Jl. Roa Malaka No 1', '- Gratis pelatihan militer\r\n- Layar tancep tiap malam minggu\r\n- Ada Kolam ikan cupang', '9.000.000', 10, 'Pria', 'danangaja'),
(12349, 'Jajang\'s Kos', 'Jl. Balap Sepeda No 3', '- Sarapan gratis tiap pagi\r\n- Listrik gratis\r\n- Wifi gratis\r\n- gratis kaos dan jaket Jajang\'s Kos sebagai loyalty member', '20.000.000', 8, 'Wanita', 'jajangaja');

-- --------------------------------------------------------

--
-- Table structure for table `kustomer`
--

CREATE TABLE `kustomer` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kustomer`
--

INSERT INTO `kustomer` (`nama`, `username`, `password`, `email`, `alamat`, `no_telp`) VALUES
('Aafi Saepuloh', 'Aafiaja', '123', 'aafiaja@gmail.com', 'Jl. Siliwangi, Ptk Griya Jakarta SH-19/4', '082217213331'),
('Aditya Jaguar', 'ajeaye', '123', 'ajeaye@gmail.com', 'Jl. Pembangunan II No 57', '082217213329'),
('Farish Pautan', 'michin', '123', 'michin@gmail.com', 'Jl. RS Fatmawati No 165', '082217213330'),
('Tatang Dereded', 'tatangkalan', '123', 'tatangkalan@gmail.com', 'Jl. Raya Cinere No 8', '082217213332'),
('M. N. Zahid', 'zuhed', '123', 'zuhed@gmail.com', 'Jl. Letnan Jidun No 5 Serang', '082217213333');

-- --------------------------------------------------------

--
-- Table structure for table `pemilikkos`
--

CREATE TABLE `pemilikkos` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `namakos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilikkos`
--

INSERT INTO `pemilikkos` (`nama`, `username`, `password`, `email`, `alamat`, `no_telp`, `namakos`) VALUES
('Asep', 'asepaja', '123', 'asepaja@gmail.com', 'Jl. Graha Angkasa Pura I Blok B/12', '082217213327', 'Pesona Asep'),
('Danang', 'danangaja', '123', 'danangaja@gmail.com', 'Jl. Roa Malaka No 1', '082217213326', 'Danang Indah'),
('Jajang', 'jajangaja', '123', 'jajangaja@gmail.com', 'Jl. Balap Sepeda No 3', '082217213323', 'Jajang\'s Kos'),
('Udeng', 'udengaja', '123', 'udengaja@gmail.com', 'Jl. Percetakan Negara No 17', '082217213324', 'Rumah Udeng'),
('Udin', 'udinaja', '123', 'udinaja@gmail.com', 'Jl. Bungus Besar No 49', '082217213325', 'Puri Udin');

-- --------------------------------------------------------

--
-- Table structure for table `reputasi`
--

CREATE TABLE `reputasi` (
  `id_reputasi` int(255) NOT NULL,
  `id_kosan` int(10) NOT NULL,
  `username_kustomer` varchar(20) NOT NULL,
  `Terverifikasi_oleh` varchar(20) NOT NULL,
  `Disukai` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reputasi`
--

INSERT INTO `reputasi` (`id_reputasi`, `id_kosan`, `username_kustomer`, `Terverifikasi_oleh`, `Disukai`) VALUES
(1, 12348, 'zuhed', 'MadeA', 20),
(2, 12349, 'Aafiaja', 'Mrizal', 19),
(3, 12345, 'tatangkalan', 'Kilut', 32),
(4, 12346, 'michin', 'MamangRa', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`idkos`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pemilikkos`
--
ALTER TABLE `pemilikkos`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `reputasi`
--
ALTER TABLE `reputasi`
  ADD PRIMARY KEY (`id_reputasi`),
  ADD KEY `id_kosan` (`id_kosan`),
  ADD KEY `username_kustomer` (`username_kustomer`),
  ADD KEY `Terverifikasi_oleh` (`Terverifikasi_oleh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kosan`
--
ALTER TABLE `kosan`
  MODIFY `idkos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kosan`
--
ALTER TABLE `kosan`
  ADD CONSTRAINT `kosan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pemilikkos` (`username`);

--
-- Constraints for table `reputasi`
--
ALTER TABLE `reputasi`
  ADD CONSTRAINT `reputasi_ibfk_1` FOREIGN KEY (`id_kosan`) REFERENCES `kosan` (`idkos`),
  ADD CONSTRAINT `reputasi_ibfk_2` FOREIGN KEY (`username_kustomer`) REFERENCES `kustomer` (`username`),
  ADD CONSTRAINT `reputasi_ibfk_3` FOREIGN KEY (`Terverifikasi_oleh`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
