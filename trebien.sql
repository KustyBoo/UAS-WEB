-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 02:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trebien`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `ID_AKUN` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PSW` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`ID_AKUN`, `USERNAME`, `EMAIL`, `PSW`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$sAHKXbN.ZXnUjdtEMxpZIuKeRSDCc7mZQyYFYTW1CumDrO80Luc3m'),
(3, 'lix', 'bknplix@gmail.com', '$2y$10$4aAYTJ4N6wlW.zIFgUh12e3yWcyZV1vyMF53BV4HgBNbp.Sw5k2Pi'),
(6, 'NOTLARRY', 'NOTlarry@gmail.com', '$2y$10$A7ZMCdq5tMg.O5TV6Hs5yOGRK2AMN8zjrLnXhWF0gO4DihCXdFtTq'),
(8, 'gragas', 'gragas@gmail.com', '$2y$10$UBKDqe46G4xms53pqIpH9ehuB7evOkZMmToq5UD3qoBUc6T/Yy436');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID_FEEDBACK` int(11) NOT NULL,
  `USERNAME_AKUN` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `FEEDBACK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID_FEEDBACK`, `USERNAME_AKUN`, `NAME`, `EMAIL`, `SUBJECT`, `FEEDBACK`) VALUES
(2, 'chris', 'chris', 'chris@gmail.com', 'technical issue', 'how do i exit'),
(4, 'bukanfasda', 'fafa', 'fasda@gmail.com', 'logistics issue', 'where is my stuff'),
(5, 'rossnickelson', 'redhead', 'gingerian@gmail.com', 'product not working', 'why is my washing machine broken'),
(6, 'bknplix', 'kania', 'kacansg@gmail.com', 'technical error', 'why is my laptop good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`ID_AKUN`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_FEEDBACK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `ID_AKUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_FEEDBACK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
