-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2022 at 11:12 AM
-- Server version: 5.7.37-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-28+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `size`, `weight`, `height`, `width`, `length`, `name`, `price`, `type`, `status`) VALUES
(1, 'JVC200123', '700 MB', NULL, NULL, NULL, NULL, 'Acme DISC', '1.00', 'DVD-disc', 1),
(2, 'JVC200123', '700 MB', NULL, NULL, NULL, NULL, 'Acme DISC', '1.00', 'DVD-disc', 1),
(3, 'test', 'test 3', NULL, NULL, NULL, NULL, 'test 2', 'test 4', 'furniture', 1),
(4, 'JHHJBJH', '27', NULL, NULL, NULL, NULL, 'PC monitor', '750', 'furniture', 1),
(5, 'test', '121', NULL, NULL, NULL, NULL, 'test', '123', 'dvd-disc', 1),
(6, 'gdsfh', '4', NULL, NULL, NULL, NULL, 'shfhshfsh', '5', 'dvd-disc', 1),
(7, 'სდფსდფ', 'სდფ', NULL, NULL, NULL, NULL, 'სდფსდფ', '46', 'dvd-disc', 1),
(8, 'დფგსჰგს', '4', NULL, NULL, NULL, NULL, 'სჰსფგჰს', 'ე5', 'dvd-disc', 1),
(9, 'Sabar', '6', NULL, NULL, NULL, NULL, 'BaBa', '11', 'book', 1),
(10, 'Sabar', '12', NULL, NULL, NULL, NULL, 'Global Metal', '10', 'book', 1),
(11, 'Sabar', '13', NULL, NULL, NULL, NULL, 'BaBa', '20', 'dvd-disc', 1),
(12, 'Sabar', '14', NULL, NULL, NULL, NULL, 'BaBa', '17', 'book', 1),
(13, 'Sabar', '14', NULL, NULL, NULL, NULL, 'BaBa', '23', 'furniture', 1),
(14, 'Test', '201', '', NULL, NULL, NULL, 'test', '15', 'dvd-disc', 1),
(15, 'Test 2', '', '12.5', NULL, NULL, NULL, 'asdasd', '564', 'book', 1),
(16, 'test123', '', '', '120', '300', '250', 'more test', '2500', 'furniture', 1),
(17, 'sdfsdf', '', '', '565', '12', '12', 'sdfsdf', '45456', 'furniture', 1),
(18, 'AGT123', '45', '0', '0', '0', '0', 'sadkjk', '5456.5', 'dvd-disc', 1),
(19, 'ასდ\'ასდ', '56', '0', '0', '0', '0', 'ასდ', '4564', 'dvd-disc', 1),
(20, 'asdsad', '0', '33', '0', '0', '0', 'asdsad', '123', 'book', 1),
(21, 'sdsdsd', '0', '9', '0', '0', '0', 'sdsadsad', '12', 'book', 1),
(22, 'assfsa', '0', '0', '7', '7', '7', 'adasd', '123', 'furniture', 0),
(23, 'assfsa', '0', '0', '3', '5', '6', 'Global ', '10', 'furniture', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
