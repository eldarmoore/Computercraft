-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2016 at 04:44 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
(5, 'Processors', '', 'processors', 'processors.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(6, 'Motherboards', '', 'motherboards', 'motherboards.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(7, 'Memory', '', 'memory', 'memory.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(8, 'Storage', '', 'storage', 'storage.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(9, 'Graphics Cards', '', 'graphics_cards', 'graphics_cards.png', '2016-10-17 00:00:00', '2016-10-10 00:00:00', 2),
(10, 'Cases', '', 'cases', 'cases.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(11, 'Fans and Cooling', '', 'fans_and_cooling', 'fans_and_cooling.png', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 2),
(31, 'Notebooks', 'Notebooks:<p><br></p>', 'notebooks', 'default.png', '2016-10-26 22:14:08', '2016-10-26 22:14:08', 0),
(32, 'Macbook Pro', '', 'macbook-pro', 'default.png', '2016-10-26 22:14:32', '2016-10-26 22:14:32', 31),
(33, 'Macbook Air', '', 'macbook air', 'default.png', '2016-10-26 22:14:47', '2016-10-26 22:14:47', 31),
(34, 'Dell Alienware', '', 'dell-alienware', 'default.png', '2016-10-26 22:18:59', '2016-10-26 22:18:59', 31),
(35, 'Tablets', '', 'tablets', 'default.png', '2016-10-26 22:19:27', '2016-10-26 22:19:27', 0),
(36, 'Monitors', '', 'monitors', 'default.png', '2016-10-26 22:21:46', '2016-10-26 22:21:46', 0),
(43, 'iPad Air', '', 'ipad-air', 'default.png', '2016-10-26 23:39:14', '2016-10-26 23:39:14', 35),
(44, 'Samsung', '', 'samsung', 'default.png', '2016-10-26 23:42:04', '2016-10-26 23:42:04', 36),
(45, 'Keyboards', '', 'keyboards', 'default.png', '2016-10-26 23:42:27', '2016-10-26 23:42:27', 37);

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
(1, 1, 'About our company', 'Good Company<br>', '2016-10-27 12:08:47', '2016-10-23 00:00:00');

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
(3, 'Contact us', 'contact-us', 'Contact us 2', '2016-10-27 14:47:17', '2016-10-23 00:00:00');

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
(2, 5, '{"3":{"id":"3","name":"Carbide Series\\u00ae Clear 600C Inverse ATX Full-Tower Case","price":189.99,"quantity":1,"attributes":[],"conditions":[]},"4":{"id":"4","name":"Dominator\\u00ae Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)","price":274.99,"quantity":2,"attributes":[],"conditions":[]}}', '739.97', '2016-10-23 06:55:26', '2016-10-23 06:55:26'),
(3, 4, '{"1":{"id":"1","name":"Thermaltake Versa N25 ATX Mid Tower Gaming Computer Case Cases CA-1G2-00M1WN-00","price":69.99,"quantity":1,"attributes":[],"conditions":[]},"4":{"id":"4","name":"Dominator\\u00ae Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)","price":274.99,"quantity":1,"attributes":[],"conditions":[]},"2":{"id":"2","name":"Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00","price":54.99,"quantity":1,"attributes":[],"conditions":[]},"3":{"id":"3","name":"Carbide Series\\u00ae Clear 600C Inverse ATX Full-Tower Case","price":189.99,"quantity":1,"attributes":[],"conditions":[]}}', '589.96', '2016-10-27 00:12:13', '2016-10-27 00:12:13'),
(4, 4, '{"5":{"id":"5","name":"VENGEANCE\\u00ae LED 64GB (4 x 16GB) DDR4 DRAM 3200MHz C16 Memory Kit - Red LED (CMU64GX4M4C3200C16R)","price":484.99,"quantity":5,"attributes":[],"conditions":[]}}', '2424.95', '2016-10-27 12:39:00', '2016-10-27 12:39:00'),
(5, 4, '{"1":{"id":"1","name":"Thermaltake Versa N25 ATX Mid Tower Gaming Computer Case Cases CA-1G2-00M1WN-00","price":69.99,"quantity":1,"attributes":[],"conditions":[]},"7":{"id":"7","name":"Graphite Series\\u2122 760T Full-Tower Windowed Case","price":179.99,"quantity":1,"attributes":[],"conditions":[]},"8":{"id":"8","name":"Graphite Series\\u2122 780T Full-Tower PC Case","price":179.99,"quantity":1,"attributes":[],"conditions":[]},"3":{"id":"3","name":"Carbide Series\\u00ae Clear 600C Inverse ATX Full-Tower Case","price":189.99,"quantity":3,"attributes":[],"conditions":[]}}', '999.94', '2016-10-29 10:14:46', '2016-10-29 10:14:46'),
(6, 4, '{"12":{"id":"12","name":"GEFORCE\\u00ae GTX 1080 30TH ANNIVERSARY","price":799.99,"quantity":3,"attributes":[],"conditions":[]},"2":{"id":"2","name":"Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00","price":54.99,"quantity":4,"attributes":[],"conditions":[]},"4":{"id":"4","name":"Dominator\\u00ae Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)","price":274.99,"quantity":2,"attributes":[],"conditions":[]},"5":{"id":"5","name":"VENGEANCE\\u00ae LED 64GB (4 x 16GB) DDR4 DRAM 3200MHz C16 Memory Kit - Red LED (CMU64GX4M4C3200C16R)","price":484.99,"quantity":5,"attributes":[],"conditions":[]}}', '5594.86', '2016-10-29 13:54:30', '2016-10-29 13:54:30'),
(7, 4, '{"5":{"id":"5","name":"VENGEANCE\\u00ae LED 64GB (4 x 16GB) DDR4 DRAM 3200MHz C16 Memory Kit - Red LED (CMU64GX4M4C3200C16R)","price":484.99,"quantity":1,"attributes":[],"conditions":[]}}', '484.99', '2016-10-29 13:59:50', '2016-10-29 13:59:50'),
(8, 4, '{"2":{"id":"2","name":"Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00","price":54.99,"quantity":1,"attributes":[],"conditions":[]},"9":{"id":"9","name":"Carbide Series\\u00ae Air 740 High Airflow ATX Cube Case","price":149.99,"quantity":1,"attributes":[],"conditions":[]}}', '204.98', '2016-10-29 14:39:58', '2016-10-29 14:39:58');

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
(1, 'Thermaltake Versa N25 ATX Mid Tower Gaming Computer Case Cases CA-1G2-00M1WN-00', 'Designed with transparent top and front panel sections, see the difference in cooling presentation fit for gamers.\r\nUpgrade your solution: support up to 240mm radiator liquid cooling for ideal CPU cooling application, up to 360mm Long graphic card (without HDD cage)\r\nCooling options (Air and liquid): x 240mm radiator). 1 x 120mm radiator (rear), 2 x 120mm fans locations (top/front)\r\nFeatures 1x USB 3.0 data transfer port + 2 standard USB 2.0 Ports + HD Microphone and headset jacks, and\r\n3 year Warranty with excellent customer service team support', 'Versa_N25', '2016.10.27.19.10.31-51LbxNdwyHL.jpg', '69.99', 10, '2016-10-27 19:51:31', '2016-10-17 00:00:00', 7),
(2, 'Thermaltake Versa N21 Translucent Panel ATX Mid Tower Window Gaming Computer Case Cases CA-1D9-00M1WN-00', 'Translucent Panel and Concept: Designed for gamer, the glossy black front/top panels deliver stylish images. The heightened foot-stands at the bottom help enhance airflow, and a triangular transparent side window offers a direct view of the inner system.\r\nTool-free Design: The innovative 5.25" & 3.5" tool-free drive bay design minimized the hassles of installation/removal. The trio drive bay concept of "1 + 4 + 1" offers a good ratio for accessories and storage devices.\r\nHidden I/O Ports: The top-front panel features one USB 3.0 data transfer port along with two standard USB 2.0 ports as well as HD microphone and headset jacks to grant direct access when needed.\r\nOptimized Ventilation: A pre-installed 120mm rear exhaust fan and 2 optional 120mm intake fans with an integrated dust filter optimize system ventilation.\r\nMore: Pre-mounted holes support motherboards up to standard ATX. CPU cooler installations with up to 160mm radiator at the top and 250mm long graphic cards are supported.\r\nWarranty: 3 Years.', 'Versa_N21', '2016.10.27.19.10.21-816qQtG-BdL._SL1500_.jpg', '54.99', 10, '2016-10-27 19:52:21', '2016-10-17 00:00:00', 7),
(3, 'Carbide Series® Clear 600C Inverse ATX Full-Tower Case', 'Quiet. Cool. Gorgeous. A massive panoramic window panel gives you a wide view of your high-powered components. The entire door panel opens with one effortless touch, for complete access to all your hardware.', 'Carbide_600C', '2016.10.27.19.10.58-Carbide_600C_01.png', '189.99', 10, '2016-10-27 19:52:58', '2016-10-17 00:00:00', 1),
(4, 'Dominator® Platinum Series 16GB (4 x 4GB) DDR4 DRAM 3333MHz C16 Memory Kit (CMD16GX4M4B3333C16)', 'Dominator Platinum modules work with the Corsair Link system for temperature monitoring, and you can even enhance the subtle white LED lighting by adding a light bar kit to match or contrast it with your system.', 'DOM_DDR4', '2016.10.27.19.10.40-DOM_DDR4_4up.png', '274.99', 7, '2016-10-27 19:53:40', '2016-10-17 00:00:00', 1),
(5, 'VENGEANCE® LED 64GB (4 x 16GB) DDR4 DRAM 3200MHz C16 Memory Kit - Red LED (CMU64GX4M4C3200C16R)', 'Whether you\'re upgrading a system, building an ultra fast gaming rig, or attempting to break overclocking world records, CORSAIR memory will exceed your expectations. Welcome VENGEANCE LED to the family.\r\n\r\nCorsair VENGEANCE LED Series DDR4 memory modules are designed to provide a unique look with vibrant LEDs and a precision engineered light bar, created specifically to pair with the design themes of most motherboards and PC gaming components. With VENGEANCE LED memory, even simple system builds can look like one-of-a-kind.', 'Veng_LED_BLK-RED', '2016.10.27.19.10.01-Veng_LED_BLK-RED_4up.png', '484.99', 7, '2016-10-27 19:54:01', '2016-10-17 00:00:00', 1),
(7, 'Graphite Series™ 760T Full-Tower Windowed Case', '<p>\r\n    <br></p><div style="height: 540px; width: 380px; float: left;">\r\n      <div style="margin-top: 10px;">\r\n        <h1>Industry-leading design and a fully windowed door.</h1>\r\n      </div>\r\n      <div style="margin-top: 15px;">\r\n        <p>The Graphite Series 760T full-tower PC case starts with a \r\nvisually stunning design that’s a match for its stunning performance \r\npotential. </p>\r\n        <p>The beauty begins on the outside with its sculpted shapes and\r\n ingenious, full windowed hinged side panel with flush-mount latches. \r\nThe front panel has two massive 140mm intake fans bathed in soft LED \r\nlight, and there’s a dual-speed fan selector for performance or silence.\r\n  Inside, there’s ample cooling potential, with eight fan mounting \r\nlocations and room for multiple radiators for self-contained liquid CPU \r\ncoolers, or even custom liquid cooling. And, clever touches like modular\r\n drive cages and laterally mounted SSD bays maximize interior volume to \r\nhelp your high-performance dreams come true. </p>\r\n      </div>\r\n    </div><p><br></p>', 'graphite-series™-760t-full-tower-windowed-case', '2016.10.29.14.10.33-2016.10.27.19.10.56-760T_three_quarter_hero_low_blk.png', '179.99', 10, '2016-10-29 14:53:33', '2016-10-27 17:48:43', 0),
(8, 'Graphite Series™ 780T Full-Tower PC Case', '<p><b>Premium looks, premium space, premium cooling.</b><br>The stunning Graphite Series 780T Full-Tower PC case can satisfy the most hardcore gamer or overclocker with ample room for nine drives and nearly a dozen large cooling fans. Into water cooling? You’ll appreciate the generous space for dual 360mm radiators. And, you’ll get everything done faster: the 780T offers easy maintenance shortcuts like tool-free removal of side panels, hard drives, and graphics cards. A three-speed fan control button and generous options for peripheral connections make the front-panel a true time saver.</p><p><br></p><p>Premium looks, premium space, premium cooling.<br>The stunning Graphite Series 780T Full-Tower PC case can satisfy the most hardcore gamer or overclocker with ample room for nine drives and nearly a dozen large cooling fans. Into water cooling? You’ll appreciate the generous space for dual 360mm radiators. And, you’ll get everything done faster: the 780T offers easy maintenance shortcuts like tool-free removal of side panels, hard drives, and graphics cards. A three-speed fan control button and generous options for peripheral connections make the front-panel a true time saver.<br><br><br>Rounded corners and a sleek, cohesive design<br>A nicely built high performance PC can be a thing of beauty, and this is truer than ever with the artfully crafted exterior.<br><br><br>Latched side panels for easy access<br>No tools or twisting are necessary to get at your components for maintenance and upgrades. You’ll get in, get out, and get on with your work or play.<br><br><br>Dual 360mm radiator support<br>Does your next dream build demand state of the art cooling? The 780T has you covered. Of course, if your heat transfer needs are a little more down-to-earth, 120mm and 240mm cooling goes in just as easily.<br><br><br>Dual 140mm intake fans and a 140mm exhaust fan<br>The 780T gives you ample airflow right out of the package. Large diameter front intake fans deliver plenty of cool air to your high performance components.<br><br><br>Front-panel three-mode fan controller and four USB ports<br>Power is nothing without control. You can be the judge of the optimal noise and cooling ratio. The three-step LED gauge tells you exactly where you’re at: one bar for surfing the web, and three when you’re pushing your GPUs hard.<br><br>The front panel also has two USB 3.0 and two USB 2.0 ports, so device management is easy.<br><br><br>Smart storage configuration<br>Modular hard drive cages and space-saving side-mounted SSD bays make the most of interior volume. You can remove the cages you don’t need, and your solid-state storage tucks out of sight and out of the airflow path.<br><br><br><br></p>', 'graphite-series™-780t-full-tower-pc-case', '2016.10.27.20.10.31-780T_Black_001.png', '179.99', 10, '2016-10-27 20:13:31', '2016-10-27 20:13:21', 0),
(9, 'Carbide Series® Air 740 High Airflow ATX Cube Case', '<p><b>BIGGER IS BETTER</b><br>CORSAIR Carbide Series PC cases have the high-end features you need, and nothing you don’t. Designed to be the foundation of awesome, yet approachable PCs, they combine the latest case technologies and ergonomic innovations with amazing cooling potential, and plenty of room to build and expand.<br><br><br>Room to Breathe<br>The unique design of Carbide Series Air 740 utilizes dual chambers to deliver cooler air to your CPU, graphics cards, motherboard, and memory without your drives or power supply getting in the way.<br><br><br>Cool it your way<br>The included Air Series AF140L intake and exhaust fans deliver superior ventilation with less noise. The Air 740 features expansion room for advanced air cooling and water cooling setups.<br><br><br>Industrial-style ergonomics and space-optimized internal design<br>Offers massive internal volume by moving the power supply, SSD and optical drives into a separate chamber.<br><br><br>Expansion room<br>For up to eight 120mm or seven 140mm fans, a 240mm or 280mm top radiator, and a 240mm, 280mm, or 360mm radiator on the front panel.<br><br><br><br></p>', 'carbide-series®-air-740-high-airflow-atx-cube-case', '2016.10.27.20.10.52-AIR740_01.png', '149.99', 10, '2016-10-27 20:33:52', '2016-10-27 20:33:38', 0),
(10, 'GEFORCE® GTX 1080 GAMING X 8G', '<p><b>Core/Memory</b><br>Boost Clock / Base Clock / Memory Frequency<br>1847 MHz / 1708 MHz / 10108 MHz (OC Mode)<br>1822 MHz / 1683 MHz / 10010 MHz (Gaming Mode)<br>1733 MHz / 1607 MHz / 10010 MHz (Silent Mode)<br>8192 MB GDDR5X<br><b><br>Video Output Function</b><br>DisplayPort x 3<br>HDMI x 1<br>Dual-link DVI-D x 1<br><br><b>Features</b><br>Virtual Reality Ready 　<br>DirectX 12 Ready 　<br>Great for 4K<br>Gamestream to NVIDIA SHIELD<br></p>', 'geforce®-gtx-1080-gaming-x-8g', '2016.10.27.20.10.02-product_2_20160715161637_57889be5d19b6.png', '699.99', 9, '2016-10-27 20:57:02', '2016-10-27 20:56:54', 0),
(11, 'GEFORCE® GTX 1080 ARMOR 8G OC', '<p><b>Core/Memory</b><br>Boost Clock / Base Clock<br>1797 MHz / 1657 MHz<br>8192 MB GDDR5X / 10010 MHz Memory<br><br><b>Video Output Function</b><br>DisplayPort x 3<br>HDMI x 1<br>Dual-link DVI-D x 1<br><br><b>Features</b><br>Virtual Reality Ready<br>DirectX 12 Ready<br>Great for 4K<br>Gamestream to NVIDIA SHIELD<br></p>', 'geforce®-gtx-1080-armor-8g-oc', '2016.10.27.21.10.21-product_8_20160527170659_57480e330a594.png', '699.99', 9, '2016-10-27 21:05:21', '2016-10-27 21:05:11', 0),
(12, 'GEFORCE® GTX 1080 30TH ANNIVERSARY', '<p>Core/Memory<br>Boost Clock / Base Clock / Memory Frequency<br>1860 MHz / 1721 MHz / 10108 MHz (OC Mode)<br>1835 MHz / 1695 MHz / 10008 MHz (Gaming Mode)<br>1733 MHz / 1607 MHz / 10008 MHz (Silent Mode)<br>8192 MB GDDR5X<br><br>Video Output Function<br>DisplayPort x 3<br>HDMI x 1<br>Dual-link DVI-D x 1<br><br>Features<br>Virtual Reality Ready 　<br>DirectX 12 Ready 　<br>Great for 4K<br>Gamestream to NVIDIA SHIELD<br></p>', 'geforce®-gtx-1080-30th-anniversary', '2016.10.27.21.10.19-product_1_20160913181545_57d7d1d124356.png', '799.99', 9, '2016-10-27 21:08:19', '2016-10-27 21:08:09', 0),
(13, 'Intel® Core™ i7 6700 Processor', '<p>6th gen Intel® Core™ i7 processor<br>From $299.99<br><br>Cores/Threads: 4Cache: 8 MBRelease date: September 2015</p><p>In our Skylake review, we determined that Intel\'s new flagship Core i7-6700K for mainstream desktops is a tremendous performer but does not offer much in the way of value compared to its Haswell-E predecessors. Not only is the chip itself fairly expensive (currently US$370) compared to the performance it delivers, but as it uses a different socket (LGA1151), a new motherboard is required, and switching to DDR4 memory is recommended for additional future-proofing. There\'s a small early adopter premium for each of these, making the price of this new platform higher than the move from Sandy Bridge to Ivy Bridge and Ivy Bridge to Haswell. The i7-6700 (non-K) may be slightly better in this regard as it can be purchased for a US$45 less and its TDP is just 65W compared to the i7-6700K\'s 91W, suggesting that the vanilla version of the 6700 is more energy efficient. This is of great interest to us as the less power it consumes, the lower the thermal demands, and the greater potential for quiet operation. It\'s also a significant factor for compact builds which can\'t offer as much cooling as big towers.<br></p>', 'intel®-core™-i7-6700-processor', '2016.10.27.21.10.43-i7 6700 Processor.jpg', '299.99', 5, '2016-10-27 21:16:43', '2016-10-27 21:16:35', 0),
(14, 'Intel® Xeon® E5-2609V4 1.7GHz 20MB Smart Cache Box', '<p>Intel® Xeon® processor<br>From $313.93<br><br>Cores/Threads: 8Cache: 20 MBRelease date: June 2016</p><p><br>Intel Xeon E5-2609 v4 Broadwell-EP Linux Benchmarks<br>Written by Michael Larabel in Processors on 9 September 2016. Page 1 of 7. 17 Comments<br>Recently I purchased a Xeon E5-2609 v4 Broadwell-EP processor as a $300 Xeon with eight physical cores but clocked at just 1.7GHz and without any Turbo Boost while the TDP is 85 Watts. Here are some benchmarks compared to other LGA-2011 v3 CPUs in my possession under Linux along with an AMD FX reference point too and followed by some Skylake Xeon benchmarks.<br><br>The Xeon E5-2609 v4 has eight physical cores (no HT), 1.7GHz base frequency (no Turbo), 20MB of Smart Cache, DDR4-1600/1866MHz support with ECC UDIMM compatible, 40 PCI-E 3.0 lanes, no integrated graphics, and is an 85 Watt TDP. I\'ve been testing this Broadwell-EP CPU, which retails for about $300 USD, in conjunction with a MSI X99A WORKSTATION motherboard. MSI kindly sent over the new X99A WORKSTATION and it\'s been going great in my Linux/BSD tests. I\'ll have my review of it next week on Phoronix.<br><br>The LGA-2011 v3 CPUs tested for this benchmarking comparison included the others I had available: Xeon E5-2587W v3 Haswell (10 cores + HT, 3.1GHz base, 3.5GHz turbo, 25MB cache, 160 Watt TDP), Core i7 5960X Haswell-E (8 cores + HT, 3.0GHz base, 3.5GHz turbo, 20MB cache, 140 Watt TDP), and the E5-2609 v4 itself. These Haswell CPUs are higher-end, but is all I had available for LGA-2011 v3. All of the CPUs were tested on the same MSI X99A WORKSTATION + 16GB DDR4 RAM + OCZ TRION 150 120GB SSD + NVIDIA GeForce GTX TITAN X configuration. Ubuntu 16.04 LTS was used during all tests with the Linux 4.8 Git kernel and GCC 5.4.0 compiler.<br>For an additional reference point I also ran the CPU tests with an AMD FX-8370 system too. The FX-8370 for those that don\'t remember is a Vishera part with eight cores at 4.0GHz with a 4.3GHz turbo, 8MB L3 cache, and 125 Watt TDP. The FX-8370 currently retails for around $190.<br><br>As some additional tests, I also compared the E5-2609 v4 performance to some Xeon Skylakes as well: E3-1220 v5, E3-1230 v4, E3-1235L v5, E3-1240 v5, E3-1240L v4, E3-1245 v5, E3-1260L, E3-1270 v5, and E3-1280 v5.<br><br>With the CPU tests done on the MSI X99A WORKSTATION motherboard, additional performance-per-Watt metrics were carried out via the Phoronix Test Suite in conjunction with a WattsUp power meter.</p>', 'intel®-xeon®-e5-2609v4-1.7ghz-20mb-smart-cache-box', '2016.10.27.22.10.25-Intel® Xeon® E5-2609V4 1.7GHz 20MB Smart Cache Box.jpg', '319.99', 5, '2016-10-27 22:02:25', '2016-10-27 21:19:42', 0),
(15, 'Intel® Core™ i5-6402P 2.8GHz 6MB Smart Cache', '<p>6th gen Intel® Core™ i5 processor<br>From $202.48<br><br>Cores/Threads: 4Cache: 6 MBRelease date: July 2016</p><p><br></p>', 'intel®-core™-i5-6402p-2.8ghz-6mb-smart-cache', '2016.10.27.21.10.32-Intel® Core™ i5-6402P 2.8GHz 6MB Smart Cache.jpg', '202.48', 5, '2016-10-27 21:22:32', '2016-10-27 21:22:22', 0),
(16, 'Hydro Series™ H110i 280mm Extreme Performance Liquid CPU Cooler', '<p><b>A 280mm radiator and dual SP140L PWM fans provide the excellent heat dissipation you need for highly overclocked CPUs</b><br><br><br>The Hydro Series H110i is an extreme performance, all-in-one liquid CPU cooler for cases with 280mm radiator mounts. The 280mm radiator and dual SP140L PWM fans provide the excellent heat dissipation you need for highly overclocked CPUs. It’s Corsair Link compatible, so you can customize cooling performance, monitor system temperature, and change the color of the RGB LED lighting.<br><br><b>280mm radiator</b><br>The secret to fast, efficient cooling is maximizing cooling surface area. If your PC case has dual 140mm fan mounts spaced for a 280mm radiator, the H110i lets you take advantage of your case’s full cooling potential.<br><br><b>Advanced SP140L PWM fans</b><br>The included 140mm fans are custom-designed for high static pressure air delivery with minimum turbulence and noise. They’re PWM controlled, so you can customize the fan speed to find the optimal balance of cooling and noise.<br><br><br><b>Built-in Corsair Link</b><br>Attach the included Corsair Link cable to a USB header on your motherboard and download the free Corsair Link software to unlock even more power. You can customize cooling performance, monitor coolant and CPU temperatures, and change the color of the RGB LED lighting from the default white to match your system, or to change color based on temperature readings and other inputs.<br><br><br><b>High-performance CPU cooling made simple</b><br>The H110i is a closed loop design that comes pre-filled. It includes a modular, tool-free mounting bracket for faster installation, and it features improved coldplate and pump designs for highly tuned efficiency.<br><br><br><b><br>About Hydro Series Liquid CPU Coolers</b><br>Corsair Hydro Series CPU coolers give you the power of liquid cooling in a compact, easy-to-install package. They offer superior cooling for higher overclocking performance, without the complexity of traditional water cooling kits.<br></p>', 'hydro-series™-h110i-280mm-extreme-performance-liquid-cpu-cooler', '2016.10.27.21.10.35-H110i_02.png', '164.99', 11, '2016-10-27 21:36:35', '2016-10-27 21:26:48', 0),
(17, 'Hydro Series™ H115i 280mm Extreme Performance Liquid CPU Cooler', '<p><b>A 280mm radiator and dual SP140L PWM fans provide the extreme cooling you need for highly overclocked CPUs</b><br><br>The Hydro Series H115i is an extreme performance, factory sealed, all-in-one liquid CPU cooler for cases with 280mm radiator mounts. The 280mm radiator and dual SP140L PWM fans provide the excellent cooling you need for highly overclocked CPUs. Corsair Link software control is built in, so you can monitor temperatures, adjust cooling performance and customize LED lighting directly from your desktop.<br><br><b>280mm dual-fan radiator</b><br>The key to fast, efficient cooling is maximizing cooling surface area. If your PC case has dual 140mm fan mounts spaced for a 280mm radiator, the H115i lets you take advantage of your case’s full cooling potential.<br><br><b>Improved coldplate and pump design</b><br>Everything’s been tweaked to make the v2 line our best yet. The new design operates more efficiency for both lower temperatures and less noise.<br><br><br><b>Dual SP140L PWM fans</b><br>The included 140mm fans are custom-designed for high static pressure air delivery with minimum turbulence and noise. They’re PWM controlled, so you can customize the fan speed to find the optimal balance of cooling and noise.<br><br><br><b>Built-in Corsair Link for monitoring, customization and control</b><br>Attach the included Corsair Link cable to a USB header on your motherboard and download the free Corsair Link software to unlock even more power.<br>You can customize cooling performance, monitor coolant and CPU temperatures, and change the color of the RGB LED lighting from the default white to match your system, or to change color based on temperature readings and other inputs.<br><br><b><br>High performance CPU cooling made simple</b><br>Gone are the days when watercooling required lots of work. The H115i is a closed loop, factory sealed design that comes pre-filled, and it comes with a modular, tool-free mounting bracket for faster installation.<br><br><b><br>About Hydro Series Liquid CPU Coolers</b><br>Corsair Hydro Series CPU coolers give you the power of liquid cooling in a compact, easy-to-install package. They offer superior cooling for higher overclocking performance, without the complexity of traditional water cooling kits.<br></p>', 'hydro-series™-h115i-280mm-extreme-performance-liquid-cpu-cooler', '2016.10.27.21.10.48-H115i_02.png', '174.99', 11, '2016-10-27 21:33:48', '2016-10-27 21:31:04', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
