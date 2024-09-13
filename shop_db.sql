-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 03:00 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` decimal(10,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('6G54omcDLv2S0KT9PosJ', '', 'lina', 5523666604, 'linaalsawadi@gmail.com', '87, kj, khg, hjlkn, 110022', 'home', 'cash on delivery', '6p1vVFlODths8Oz710Iu', 470, '1', '0000-00-00', ''),
('VGKqB7VIjUY9UuYNsMlK', '', 'lina', 5523666604, 'linaalsawadi@gmail.com', '87, kj, khg, hjlkn, 110022', 'home', 'cash on delivery', 'fCEMwKujMLIJndPXpgnN', 600, '1', '0000-00-00', 'canceled'),
('Vkl9joOc0HRDCbKCOpsm', '', 'lina', 5523666604, 'linaalsawadi@gmail.com', '87, kj, khg, hjlkn, 110022', 'home', 'cash on delivery', 'H4A8c84LZuKoyLA2Oyia', 65, '2', '0000-00-00', ''),
('cVyCKu7WLbd8EJxCAgJx', '', 'lina', 5523666604, 'linaalsawadi@gmail.com', '87, kj, khg, hjlkn, 110022', 'home', 'cash on delivery', 'ofgtNytpsbx4nFbi6OIx', 400, '1', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(100) NOT NULL,
  `product_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `product_detail`) VALUES
('ofgtNytpsbx4nFbi6OIx', 'purpleBag', 400, 'bag.jpg', ''),
('6p1vVFlODths8Oz710Iu', 'grayBag', 470, 'bag1.webp', ''),
('M5KyEIopbJBAQgtismZU', 'pinkBlusher', 50, 'blusher.jpg', ''),
('H4A8c84LZuKoyLA2Oyia', 'beigeBlusher', 65, 'blusher.png', ''),
('LpSG9xFj8AcyHS562JO7', 'sandBlusher', 60, 'blusher.webp', ''),
('iZrDl1XaaBSvhnPX48AL', 'bouder', 80, 'bouder.jpg', ''),
('qcELsBkuzUgl1eRG2ay6', 'concelor', 70, 'concelor.jpg', ''),
('WInp14ZpweeAYMiCCusR', 'concelors', 210, 'concelors.jpg', ''),
('8kUrqXSlwSRPr8LrtUIT', 'eyeGlass', 180, 'eyeglass.webp', ''),
('fCEMwKujMLIJndPXpgnN', 'eyeGlasses', 600, 'eyeglasses.webp', ''),
('jdAhMFl7hzZE1NbTH1sw', 'eyeLiner', 40, 'eyeliner.jpg', ''),
('CY85FQWorTmx77XkeTev', 'eyeLiners', 240, 'eyeliners.webp', ''),
('m1rxMVkZ5cITe6jpRhxR', 'sandBag', 100, 'femaleBag.jpg', ''),
('4L9bARYb2zPjv4K5IkJe', 'skyBag', 150, 'handBag.jpg', ''),
('FJy4T25hI7ukypODn3Oy', 'handCream', 35, 'handcream.webp', ''),
('xDTOBwWlirXiWcaFgq76', 'iShadow', 90, 'ishadow.webp', ''),
('g6vluGFfVZhgPPpWnjoP', 'lipStick', 60, 'lipstick.webp', ''),
('8jTjWJDnTJUrHEf4b02r', 'matLipStick', 60, 'matlipstick.webp', ''),
('gzCtC0lAghAgqCQxeCVI', 'nailPolishBlack', 55, 'nailpolishBlack.jfif', ''),
('mTOKHXEtgfMBhwqxIsW4', 'nailPolishMov', 55, 'nailpolishMov.jpeg', ''),
('FKyLpHZ8ICMKryNv5tHz', 'nailpolishRed', 55, 'nailpolishRed.jpeg', ''),
('dgmJXALfDN15RFB5qsne', 'redlipstick.jpg', 25, 'redlipstick.jpg', ''),
('Qi5ddBZb0IF86cJOdh81', 'rings', 1000, 'rings.jpg', ''),
('KodTqMWkn9H4RfchG3Ue', 'rings', 650, 'rings1.webp', ''),
('DTj6XLrhAPRW4jZ80uB3', 'shampuan', 100, 'shampuan.webp', ''),
('e0SowuZE47KwMxFlUn4G', 'shampuanSoap', 80, 'shampuansoap.webp', ''),
('3ungFAHIeYPJs2qpzz8P', 'tool', 19, 'tool.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
('ZhYEvGKAc32xGwkhLAFE', 'Lina', 'linaawadi01@gmail.com', 'lina', ''),
('AlNUWuErJJwU6criOWY1', 'Lina', 'sinan@sinsert.com', 'sinan', ''),
('j1LyUTI7eWhu1i3FGjtg', 'Lina', 'sinan@ss.com', 'sinan', ''),
('zAFd0SYK08aUffSiDCI5', 'lulu', 'lululili@gmail.com', 'lililili', ''),
('5Q2ctTE5mwZLVTndGPFe', 'lala', 'lala@gmail.com', 'lala', ''),
('2Iq9fUQgJb0L6euWLUa4', 'sinan', 'sinan@gmail.com', 'sino', ''),
('xo3nCPNcL3iWynpwTWX9', 'ola', 'olaSayed@gmail.com', 'ola', ''),
('cUZXAGwRyNsRdkFkC0SI', 'sinan', 'susu@gmail.com', 'susu', ''),
('Moat7LeMCx0bPYxH8Pee', 'lili', 'lili@gmail.com', 'lili', ''),
('LC4yfxUqOFdgQBqVaSo5', 'Lina', 'alsawadi@gmail.com', 'alsawadi', ''),
('pPrU2BwVmEIrcCZP50Ve', 'lilu', 'lilu@gmail.com', 'lilu', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
('GENonJ9oA99y4secNgLN', '', '6p1vVFlODths8Oz710Iu', 470),
('6p5L2UnFZoH0xzVqy8HZ', '', 'CY85FQWorTmx77XkeTev', 240),
('6a3QEXeuo0FoEKmi4yO8', '', 'fCEMwKujMLIJndPXpgnN', 600),
('GpTjiYrWvEUK6KgCB2A0', '', 'qcELsBkuzUgl1eRG2ay6', 70),
('mt81DKdTlb9EQOPYY05A', '', 'ofgtNytpsbx4nFbi6OIx', 400),
('sK6QvLoSZ2ExXH7cxQBN', '', 'H4A8c84LZuKoyLA2Oyia', 65);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
