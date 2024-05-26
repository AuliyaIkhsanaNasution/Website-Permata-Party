-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 01:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permataparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `saran` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `nama`, `email`, `saran`) VALUES
(1, 'grace taylor', 'grace.taylor@example.com', 'sudah dipenuhi'),
(2, 'david miller', 'david.miller@example.com', 'sudah terpenuhi!'),
(3, 'Olivia Moore', 'olivia.moore@gmail.com', 'Saya berharap ada lebih banyak variasi dalam dekorasi, terutama dalam penggunaan bunga dan elemen-elemen alami lainnya'),
(4, 'muhammad oktavioano', 'muhammaddarkworlf@gmail.com', 'Sentuhan-sentuhan kreatif seperti hiasan-hiasan khusus atau ornamen yang menyampaikan cerita pernikahan akan menambahkan nilai sentimental pada dekorasi'),
(5, 'sela', 'selaagustinasrg@gmail.com', 'saya suka dekorasi yang bertema glamour'),
(6, 'sela', 'selaagustina@gmail.com', 'pelayanannya sangat memuaskan'),
(7, 'muhammad bobby', 'bobby30@gmail.com', 'sudah terpenuhi');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `layanan` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nama`, `email`, `alamat`, `no_hp`, `layanan`, `paket`, `harga`, `tanggal_pemesanan`) VALUES
(3, 'sela', 'nadiyahhikmahbutarbutar@gmail.com', 'sunggal', '08454545454', 'Decor', 'diamond', 18000000, '2023-12-12'),
(6, 'auliya ikhsana', 'auliyanasti06@gmail.com', 'Jalan EFG No. 808, Kota P', '085159968152', 'Decor', 'sapphire', 13000000, '2023-12-13'),
(7, 'auliya ikhsana', 'auliyanasti06@gmail.com', 'patumbak', '085159968153', 'make up', 'Royal Family Special', 4000000, '2024-01-01'),
(8, 'muhammad bobby', 'bobby30@gmail.com', 'ringroad', '081234563456', 'Gaun', 'mewah', 5500000, '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `layanan` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `desk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `nama`, `email`, `alamat`, `no_hp`, `layanan`, `paket`, `harga`, `tanggal_pemesanan`, `desk`) VALUES
(1, 'nadiyah', 'nadiyahhikmahbutarbutar@gmail.com', 'garu 2', '081243567654', 'Decor', 'emerald', 15000000, '2023-12-14', 'Pesanan Telah Dikonfirmasi'),
(3, 'sela', 'nadiyahhikmahbutarbutar@gmail.com', 'sunggal', '08454545454', 'Decor', 'diamond', 18000000, '2023-12-12', 'Pesanan Telah Dikonfirmasi'),
(6, 'auliya ikhsana', 'auliyanasti06@gmail.com', 'Jalan EFG No. 808, Kota P', '085159968152', 'Decor', 'sapphire', 13000000, '2023-12-13', 'Pesanan Telah Dikonfirmasi'),
(7, 'auliya ikhsana', 'auliyanasti06@gmail.com', 'patumbak', '085159968153', 'make up', 'Royal Family Special', 4000000, '2024-01-01', 'Pesanan Telah Dikonfirmasi'),
(8, 'muhammad bobby', 'bobby30@gmail.com', 'ringroad', '081234563456', 'Gaun', 'mewah', 5500000, '2024-01-01', 'Pesanan Telah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(4, 'auliyanasti06@gmail.com', '$2y$10$rDnEOCCwBFOsq/9WE1xY1.THToJvHAlrRFi1htEY2P4klhYJDxDVK'),
(5, 'muhammaddarkwolf@gmail.com', '$2y$10$Aiug1ng9qfcPD.EYUCr7feM1vZOOafCFVw80NA.o7R56RZhk0Q.ZS'),
(8, 'selaagustina@gmail.com', '$2y$10$hk5lXhjiamlmCM6zo7qfhuSggdkBNXK8SYG1g1tG7pyECA0TEYo62'),
(9, 'bobby30@gmail.com', '$2y$10$KOK1yswjkijfBGeb1Yp0u.q8Qp31SWyr5NIsgwP1MTW9JD65BtvD6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
