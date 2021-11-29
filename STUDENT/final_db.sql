-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 11:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `age`, `info`) VALUES
(3, 'Hortense', 96, 'Revision of Infusion Device in Right Lung, Percutaneous Approach'),
(4, 'Augusto', 63, 'Removal of Extraluminal Device from Upper Intestinal Tract, Open Approach'),
(5, 'Fidole', 46, 'Fusion of Right Metacarpophalangeal Joint with Nonautologous Tissue Substitute, Percutaneous Approach'),
(7, 'Ranna', 28, 'Dilation of Right Femoral Artery, Percutaneous Approach'),
(8, 'Johannah', 29, 'Supplement Left Atrium with Synthetic Substitute, Percutaneous Approach'),
(10, 'Tess', 78, 'Removal of Drainage Device from Left Metatarsal-Phalangeal Joint, Percutaneous Endoscopic Approach'),
(11, 'Lacy', 33, 'Removal of Autologous Tissue Substitute from Right Extraocular Muscle, Percutaneous Approach'),
(25, 'Tarik Bruce', 81, 'Quisquam eos eaque'),
(30, 'lyden', 21, 'Everyone say hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
