-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 11:57 AM
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
-- Database: `bp_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Lenovo Ideapad Gaming 3 (Lama)', 'Spek Dewa', '2023-10-24_11-09-13_Lenovo Ideapad Gaming 3 (Lama).png'),
(2, 'HP Victus', 'asdadasd', '2023-10-29_08-47-56_HP Victus.png'),
(3, 'ASUS TUF', 'Blue Arciv', '2023-10-29_08-48-13_ASUS TUF.png'),
(5, 'bla', 'test', '2023-10-29_10-08-55_bla.png'),
(6, 'plcaholder7', 'adadssd', '2023-10-29_10-09-09_plcaholder7.png'),
(7, 'placeholder 8', 'asddasdasd', '2023-10-29_10-10-23_placeholder 8.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `akses`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$Tz5XnCuXY0CuDyd/T9dzFOZmscapfrNrkkHg37F74g.i3YKcOr/L2', 'admin'),
(2, 'bima', 'bima', 'bima@gmail.com', '$2y$10$siesbVei4sDAk1GFGOyDqeRcPQVs8iOgvWCNZL2OQlo/hzMtZjhWy', ''),
(3, 'reja', 'reja', 'reja@gmail.com', '$2y$10$Dxaj/jFoGpiABceRMqoCn./FbI1UyP6wbJFOnq00PuQy1di8td57C', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
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
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
