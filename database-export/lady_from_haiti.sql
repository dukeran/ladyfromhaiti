-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2016 at 01:19 PM
-- Server version: 5.1.73
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lady_from_haiti`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `pic_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cat` varchar(255) DEFAULT NULL,
  `size` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pic_name`, `title`, `cat`, `size`, `price`) VALUES
(1, 'unp_2', NULL, 'unpainted', '', ''),
(2, 'unp_1', NULL, 'unpainted', '', ''),
(3, 'unp_3', NULL, 'unpainted', '', ''),
(4, 'unp_4', NULL, 'unpainted', '', ''),
(5, 'unp_5', NULL, 'unpainted', '', ''),
(6, 'paint_1', NULL, 'painted', '', ''),
(7, 'paint_2', NULL, 'painted', '', ''),
(8, 'paint_3', NULL, 'painted', '', ''),
(9, 'paint_5', NULL, 'painted', '', ''),
(10, 'paint_4', NULL, 'painted', '', ''),
(11, 'paint_9', NULL, 'painted', '', ''),
(12, 'paint_7', NULL, 'painted', '', ''),
(13, 'paint_6', NULL, 'painted', '', ''),
(14, 'haitian_3', 'Claude Dambreville', '', '16" x 20"', '$600'),
(15, 'haitian_20', 'Pierre Louis', '', '24” x 30”', '$600'),
(16, 'haitian_21', 'Pierre Maxo', '', '24” x 32”', '$640'),
(17, 'haitian_22', 'Claude Dambreville', '', '20” x 24”', '$850'),
(18, 'haitian_23', 'Claude Dambreville', '', '20” x 24”', '$850'),
(19, 'haitian_24', 'Claude Dambreville', '', '16” x 20”', '$600'),
(20, 'haitian_25', 'Claude Dambreville', '', '16” x 20”', '$600'),
(21, 'mache_1', NULL, 'mache', '', ''),
(22, 'mache_2', NULL, 'mache', '', ''),
(23, 'mache_3', NULL, 'mache', '', ''),
(24, 'mache_4', NULL, 'mache', '', ''),
(25, 'mache_5', NULL, 'mache', '', ''),
(26, 'funky_1', NULL, 'funky', '', ''),
(27, 'funky_2', NULL, 'funky', '', ''),
(28, 'funky_3', NULL, 'funky', '', ''),
(29, 'funky_4', NULL, 'funky', '', ''),
(30, 'funky_5', NULL, 'funky', '', ''),
(31, 'funky_6', NULL, 'funky', '', ''),
(32, 'funky_7', NULL, 'funky', '', ''),
(33, 'funky_8', NULL, 'funky', '', ''),
(34, 'creature_1', NULL, 'creature', '', ''),
(35, 'creature_2', NULL, 'creature', '', ''),
(36, 'creature_3', NULL, 'creature', '', ''),
(37, 'creature_4', NULL, 'creature', '', ''),
(38, 'greeting_1', NULL, 'greeting', '', ''),
(39, 'greeting_2', NULL, 'greeting', '', ''),
(40, 'greeting_3', NULL, 'greeting', '', ''),
(41, 'greeting_4', NULL, 'greeting', '', ''),
(42, 'greeting_5', NULL, 'greeting', '', ''),
(43, 'haitian_5', 'Saincilius Ismael', '', '16" x 20"', '$875'),
(44, 'haitian_26', 'Claude Dambreville', '', '16” x 20”', '$600'),
(45, 'paint_8', NULL, 'painted', '', ''),
(82, 'haitan_02', 'Mauve Market, Clark Constant', 'haitian', '12x16', ''),
(81, 'haitan_01', 'Little Market, Clark Constant', 'haitian', '8x10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
