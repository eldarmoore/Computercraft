-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 04:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computercraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `sub_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`, `sub_category`) VALUES
(2, 'Computer Parts', 'Build your own computer setup.', 'computer_parts', 'computer_parts.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 0),
(3, 'Laptops', 'Purchase laptop suit to your demands.', 'laptops', 'laptops.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 0),
(4, 'Tablets', 'Variety of light mobile devices.', 'tablets', 'tablets.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 0),
(5, 'Processors', '', 'processors', 'processors.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(6, 'Motherboards', '', 'motherboards', 'motherboards.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(7, 'Memory', '', 'memory', 'memory.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(8, 'Storage', '', 'storage', 'storage.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(9, 'Graphics Cards', '', 'graphics_cards', 'graphics_cards.png', '2016-10-17 00:00:00', '2016-10-10 00:00:00', 2),
(10, 'Cases', '', 'cases', 'cases.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(11, 'Fans and Cooling', '', 'fans_and_cooling', 'fans_and_cooling.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(12, 'Gadgets', '', 'gadgets', 'gadgets.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About our company', 'About our company text demo', '2016-10-23 00:00:00', '2016-10-23 00:00:00'),
(2, 1, 'Company in Israel', 'Company in Israel demo text', '2016-10-23 00:00:00', '2016-10-23 00:00:00'),
(3, 2, 'Services page', 'Our Services are the best ever', '2016-10-23 00:00:00', '2016-10-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(6, 'AMD'),
(2, 'Asus'),
(1, 'Corsair'),
(4, 'Intel'),
(5, 'Nvidia'),
(3, 'Samsung'),
(7, 'Thermaltake');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About', 'about', 'About us', '2016-10-23 00:00:00', '2016-10-23 00:00:00'),
(2, 'Services', 'services', 'Our service', '2016-10-23 00:00:00', '2016-10-23 00:00:00'),
(3, 'Contact us', 'contact-us', 'Contact us', '2016-10-23 00:00:00', '2016-10-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 4, '{"3":{"id":"3","name":"Carbide Series\\u00ae Clear 600C Inverse ATX Full-Tower Case","price":189.99,"quantity":1,"attributes":[],"conditions":[]},"1":{"id":"1","name":"Thermaltake Versa N25 ATX Mid Tower Gaming Computer Case Cases CA-1G2-00M1WN-00","price":69.99,"quantity":1,"attributes":[],"conditions":[]},"2":{"id":"2","name":"Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00","price":54.99,"quantity":1,"attributes":[],"conditions":[]}}', '314.97', '2016-10-23 06:52:25', '2016-10-23 06:52:25'),
(2, 5, '{"3":{"id":"3","name":"Carbide Series\\u00ae Clear 600C Inverse ATX Full-Tower Case","price":189.99,"quantity":1,"attributes":[],"conditions":[]},"4":{"id":"4","name":"Dominator\\u00ae Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)","price":274.99,"quantity":2,"attributes":[],"conditions":[]}}', '739.97', '2016-10-23 06:55:26', '2016-10-23 06:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `manufacturer` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `article`, `url`, `image`, `price`, `categorie_id`, `updated_at`, `created_at`, `manufacturer`) VALUES
(1, 'Thermaltake Versa N25 ATX Mid Tower Gaming Computer Case Cases CA-1G2-00M1WN-00', 'Designed with transparent top and front panel sections, see the difference in cooling presentation fit for gamers.\r\nUpgrade your solution: support up to 240mm radiator liquid cooling for ideal CPU cooling application, up to 360mm Long graphic card (without HDD cage)\r\nCooling options (Air and liquid): x 240mm radiator). 1 x 120mm radiator (rear), 2 x 120mm fans locations (top/front)\r\nFeatures 1x USB 3.0 data transfer port + 2 standard USB 2.0 Ports + HD Microphone and headset jacks, and\r\n3 year Warranty with excellent customer service team support', 'Versa_N25', '51LbxNdwyHL.jpg', '69.99', 10, '2016-10-17 00:00:00', '2016-10-17 00:00:00', 7),
(2, 'Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00', 'Translucent Panel and Concept: Designed for gamer, the glossy black front/top panels deliver stylish images. The heightened foot-stands at the bottom help enhance airflow, and a triangular transparent side window offers a direct view of the inner system.\r\nTool-free Design: The innovative 5.25" & 3.5" tool-free drive bay design minimized the hassles of installation/removal. The trio drive bay concept of "1 + 4 + 1" offers a good ratio for accessories and storage devices.\r\nHidden I/O Ports: The top-front panel features one USB 3.0 data transfer port along with two standard USB 2.0 ports as well as HD microphone and headset jacks to grant direct access when needed.\r\nOptimized Ventilation: A pre-installed 120mm rear exhaust fan and 2 optional 120mm intake fans with an integrated dust filter optimize system ventilation.\r\nMore: Pre-mounted holes support motherboards up to standard ATX. CPU cooler installations with up to 160mm radiator at the top and 250mm long graphic cards are supported.\r\nWarranty: 3 Years.', 'Versa_N21', '816qQtG-BdL._SL1500_.jpg', '54.99', 10, '2016-10-17 00:00:00', '2016-10-17 00:00:00', 7),
(3, 'Carbide Series® Clear 600C Inverse ATX Full-Tower Case', 'Quiet. Cool. Gorgeous. A massive panoramic window panel gives you a wide view of your high-powered components. The entire door panel opens with one effortless touch, for complete access to all your hardware.', 'Carbide_600C', 'Carbide_600C_01.png', '189.99', 10, '2016-10-17 00:00:00', '2016-10-17 00:00:00', 1),
(4, 'Dominator® Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)', 'Dominator Platinum modules work with the Corsair Link system for temperature monitoring, and you can even enhance the subtle white LED lighting by adding a light bar kit to match or contrast it with your system.', 'DOM_DDR4', 'DOM_DDR4_01.png', '274.99', 7, '2016-10-17 00:00:00', '2016-10-17 00:00:00', 1),
(5, 'VENGEANCE® LED 64GB (4 x 16GB) DDR4 DRAM 3200MHz C16 Memory Kit - Red LED (CMU64GX4M4C3200C16R)', 'Whether you''re upgrading a system, building an ultra fast gaming rig, or attempting to break overclocking world records, CORSAIR memory will exceed your expectations. Welcome VENGEANCE LED to the family.\r\n\r\nCorsair VENGEANCE LED Series DDR4 memory modules are designed to provide a unique look with vibrant LEDs and a precision engineered light bar, created specifically to pair with the design themes of most motherboards and PC gaming components. With VENGEANCE LED memory, even simple system builds can look like one-of-a-kind.', 'Veng_LED_BLK-RED', 'Veng_LED_BLK-RED_02.png', '484.99', 7, '2016-10-17 00:00:00', '2016-10-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2016-10-22 00:00:00', '2016-10-22 00:00:00'),
(2, '--', '--', '--', '2016-10-22 00:00:00', '2016-10-22 00:00:00'),
(3, '---', '---', '---', '2016-10-22 00:00:00', '2016-10-22 00:00:00'),
(4, 'Admin', 'admin@gmail.com', '$2y$10$q/I7iHRkWJcbcRziu/iZ4eKVd3MDleNxYgcbEONxbQ9VajMq8TeMa', '2016-10-22 00:00:00', '2016-10-22 00:00:00'),
(5, 'Eldar Moore', 'eldar.moore@gmail.com', '$2y$10$q/I7iHRkWJcbcRziu/iZ4eKVd3MDleNxYgcbEONxbQ9VajMq8TeMa', '2016-10-22 00:00:00', '2016-10-22 00:00:00'),
(6, 'Shimi', 'shimi@gmail.com', '$2y$10$q/I7iHRkWJcbcRziu/iZ4eKVd3MDleNxYgcbEONxbQ9VajMq8TeMa', '2016-10-22 00:00:00', '2016-10-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role`) VALUES
(4, 3),
(5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
