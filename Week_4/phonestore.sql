-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 05:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonestore`
--
CREATE DATABASE IF NOT EXISTS `phonestore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phonestore`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `bid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`bid`, `name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Huawei'),
(4, 'HTC'),
(5, 'BlackBerry'),
(6, 'OnePlus'),
(7, 'LG'),
(8, 'Google'),
(9, 'Xiaomi'),
(10, 'Honor'),
(11, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `displaysize` float NOT NULL,
  `resolution` varchar(9) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `battery` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `photo1` varchar(40) NOT NULL,
  `photo2` varchar(30) DEFAULT NULL,
  `photo3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`pid`, `bid`, `name`, `displaysize`, `resolution`, `cpu`, `ram`, `storage`, `camera`, `battery`, `color`, `price`, `photo1`, `photo2`, `photo3`) VALUES
(1, 1, 'Iphone 11 Pro Max', 6.5, '1242x2688', 'A13', 4, 256, 12, 3900, 'gold', 1099, 'iphone11promax-831109.jpg', NULL, NULL),
(2, 1, 'APPLE iPhone 11 Pro', 5.8, '1125x2436', 'A13 Bionic', 4, 64, 12, 3190, 'gold', 1100, 'iphone11pro-254227.jpg', NULL, NULL),
(3, 1, 'APPLE iPhone 11', 6.1, '828x1792', 'A13 Bionic', 3, 64, 12, 3110, 'gray', 780, 'iphone11-22752.jpg', NULL, NULL),
(4, 1, 'APPLE iPhone XR', 6.1, '828x1792', 'A12 Bionic', 3, 64, 12, 2942, 'blue', 610, 'iphonexr-844564.jpg', NULL, NULL),
(5, 1, 'APPLE iPhone 8 Plus', 5.5, '1080x1920', 'A11 Bionic', 3, 64, 12, 2691, 'black', 600, 'iphone8plus-24645.jpg', NULL, NULL),
(6, 1, 'APPLE iPhone 8', 4.7, '750x1334', 'A11 Bionic', 2, 64, 12, 1821, 'black', 510, 'iphone8-212419.jpg', NULL, NULL),
(7, 2, 'SAMSUNG Galaxy A50s', 6.4, '1080x2340', 'Exynos9611', 6, 128, 48, 4000, 'black', 300, 'galaxya50s-879985.jpg', NULL, NULL),
(8, 2, 'SAMSUNG Galaxy A10s', 6.2, '720x1520', 'MT6762 Helio P2', 2, 32, 13, 4000, 'blue', 130, 'galaxya10s-101196.jpg', NULL, NULL),
(9, 2, 'SAMSUNG Galaxy Note10+', 6.8, '1440x3040', 'Exynos 9825', 12, 256, 12, 4300, 'blue', 870, 'galaxynote10-106664.jpg', NULL, NULL),
(10, 2, 'SAMSUNG Galaxy Note10', 6.3, '1080x2280', 'Exynos 9825', 8, 256, 12, 3500, 'blue', 780, 'galaxynote10-283622.jpg', NULL, NULL),
(11, 2, 'SAMSUNG Galaxy A80', 6.7, '1080x2400', 'Snapdragon 730', 8, 128, 48, 3700, 'black', 500, 'galaxya80-810861.jpg', NULL, NULL),
(12, 2, 'SAMSUNG Galaxy A60', 6.3, '1080x2340', 'Snapdragon 675', 6, 128, 32, 3500, 'blue', 300, 'galaxya60-1003735.jpg', NULL, NULL),
(13, 2, 'SAMSUNG Galaxy A70', 6.7, '1080x2400', 'Snapdragon 675', 6, 128, 32, 4500, 'orange', 320, 'galaxya70-129038.jpg', NULL, NULL),
(14, 2, 'SAMSUNG Galaxy A40', 5.9, '1080x2340', 'Exynos 7885', 4, 64, 16, 3100, 'blue', 200, 'galaxya40-773045.jpg', NULL, NULL),
(15, 2, 'SAMSUNG Galaxy S10+', 6.4, '1440x3040', 'Exynos 9820 Octa', 8, 128, 12, 4100, 'blue', 699, 'galaxys10-403031.jpg', NULL, NULL),
(16, 2, 'SAMSUNG Galaxy S9+', 6.2, '1440x2960', 'Exynos 9810 Octa', 6, 64, 12, 3500, 'gray', 460, 'samsunggalaxys9plus3-553818.jpg', NULL, NULL),
(17, 3, 'HUAWEI nova 4e', 6.15, '1080x2312', 'Hisilicon Kirin 710', 6, 128, 24, 3340, 'blue', 290, 'nova4e-564002.jpg', NULL, NULL),
(18, 3, 'HUAWEI nova 5T', 6.26, '1080x2340', 'HiSilicon Kirin 980', 8, 128, 48, 3750, 'blue-purple', 450, 'nova5t-796478.jpg', NULL, NULL),
(19, 3, 'HUAWEI nova 3i', 6.3, '1080x2340', 'Hisilicon Kirin 710', 4, 128, 16, 3340, 'blue', 220, 'nova3i-790854.jpg', NULL, NULL),
(20, 3, 'HUAWEI P30', 6.1, '1080x2340', 'HiSilicon Kirin 980', 6, 128, 40, 3650, 'blue', 520, 'p30-558561.jpg', NULL, NULL),
(21, 3, 'HUAWEI P30 lite', 6.15, '1080x2312', 'Hisilicon Kirin 710', 4, 128, 24, 3340, 'gray', 250, 'p30lite-977430.jpg', NULL, NULL),
(22, 3, 'HUAWEI Mate 20 Pro', 6.39, '1440x3120', 'HiSilicon Kirin 980', 6, 128, 40, 4200, 'green', 600, 'mate20pro-872041.jpg', NULL, NULL),
(23, 6, 'ONEPLUS 7 Pro', 6.67, '1440x3120', 'Snapdragon 855', 8, 256, 48, 4000, 'blue', 600, '7pro-521989.jpg', NULL, NULL),
(24, 6, 'ONEPLUS 6T McLaren', 6.41, '1080x2340', 'Snapdragon 845', 10, 128, 16, 3700, 'black', 600, '6tmclaren-163550.jpg', NULL, NULL),
(25, 6, 'ONEPLUS 6T', 6.41, '1080x2340', 'Snapdragon 845', 8, 128, 16, 3700, 'purple', 400, '6t-702649.jpg', NULL, NULL),
(26, 9, 'XIAOMI Redmi Note 8 Pro', 6.53, '1080x2340', 'Helio G90T', 6, 64, 12, 4500, 'white', 260, 'redminote8pro-296079.jpg', NULL, NULL),
(27, 9, 'XIAOMI Mi 9T Pro', 6.39, '1080x2340', 'Snapdragon 855', 6, 64, 48, 4000, 'black', 360, 'mi9tpro-393872.jpg', NULL, NULL),
(28, 9, 'XIAOMI Mi A3', 6.01, '720x1560', 'Snapdragon 665', 3, 64, 48, 4030, 'white', 160, 'mia3-706031.jpg', NULL, NULL),
(29, 9, 'XIAOMI Mi 9', 6.39, '1080x2340', 'Snapdragon 855', 6, 64, 48, 3300, 'blue', 390, 'mi9-503080.jpg', NULL, NULL),
(30, 9, 'XIAOMI Pocophone F1', 6.18, '1080x2246', 'Snapdragon 845', 6, 64, 12, 4000, 'red', 260, 'pocophonef1-382532.jpg', NULL, NULL),
(31, 10, 'HONOR 8S', 5.71, '720x1520', 'MT6761 Helio A22', 2, 32, 13, 3202, 'gold', 120, '8s-711902.jpg', NULL, NULL),
(32, 10, 'HONOR 8X Max', 7.12, '1080x2244', 'Snapdragon 636', 4, 128, 16, 5000, 'blue', 290, '8xmax-673581.jpg', NULL, NULL),
(33, 10, 'HONOR 10 Lite', 6.21, '1080x2340', 'Hisilicon Kirin 710', 3, 64, 13, 3400, 'blue', 180, '10lite-141229.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
