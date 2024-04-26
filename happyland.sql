-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happyland`
--

-- --------------------------------------------------------

--
-- Table structure for table `typeplayer`
--

CREATE TABLE `typeplayer` (
  `id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_price` float NOT NULL,
  `t_qty` int(11) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typeplayer`
--

INSERT INTO `typeplayer` (`id`, `t_name`, `t_price`, `t_qty`, `t_image`, `t_discription`) VALUES
(1, 'เครื่องเล่นไวกิ้ง', 50, 1, '1.jpg', 'สนุกสุดเสียว ล่องลอยไปมา โต้คลื่นกลางเวหากับเรือโจรสลัดลำใหญ่'),
(2, 'เครื่องเล่นล่องแก่ง', 60, 1, '2.jpg', 'ล่องซุงมหาสนุก เครื่องเล่นทางน้ำยอดฮิตของสยามอะเมซิ่งพาร์ค'),
(3, 'เครื่องเล่นเฮอริเคน', 80, 1, '3.jpg', 'เร้าใจกับการเหินเวหา ตีลังกากลางอากาศกับจ้าวพายุเฮอริเคน'),
(4, 'เครื่องเล่นชิงช้าสวรรค์', 30, 1, '4.jpg', '-'),
(5, 'เครื่องเล่นม้าหมุน', 20, 1, '5.jpg', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typeplayer`
--
ALTER TABLE `typeplayer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typeplayer`
--
ALTER TABLE `typeplayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
