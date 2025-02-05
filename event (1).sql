-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2025 at 02:44 PM
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
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `about_id` int(11) NOT NULL,
  `about_titile` varchar(100) NOT NULL,
  `about_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`about_id`, `about_titile`, `about_des`) VALUES
(1, 'About Us', '<p style=\"line-height: 1.8;\"><i>At IIP456 Academy, students always had the access to Major & Minor Projects in Website Development (PHP / MySQL)\r\n\r\nIIP Academy Provide best training in .NET & PHP. So that students themselves can be able to develop projects and launch them LIVE on IIP Academy Online Servers.\r\n\r\nOur Students had developed several projects like wscubetech.com. Many students get easy job placements due to their online Projects on the IIP Academy. We are only institute in Jodhpur which provides free Web Hosting to our students on our servers.Engineering & MCA students can develop any small minor projects in .NET or PHP and could extend as their Major Projects in further years. Minor Projects are really not hard to develop, as also the colleges generally are not strict in accepting the minor projects.\r\n\r\nMinor Projects can be small but it must be remarkable. Because details of Minor Projects are required to put in your Resume. And students with good minor projects can be easily placed in good companies during Campus Placements.\r\n\r\nIIP Academy Provides 45 Days Industrial Training for Engineering (B.E. / B.TECH.) Students\r\n</i></p><p><b><i>\r\nWhy IIP Academy :-</i></b></p><p style=\"text-align: center;\"><i>(1)Live industrial projects.</i></p><p style=\"text-align: center;\"><i>(2)Expert Developers.\r\n</i></p><p style=\"text-align: center;\"><i>(3) Placement assistanc</i></p><p style=\"text-align: center;\"><i style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);\">(4)100% Practical.</i></p><p style=\"text-align: center;\"><i> </i>     <i>(5) Interview preparation sessions.</i></p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`admin_id`, `admin_name`, `admin_pass`, `admin_email`, `admin_phone`, `admin_address`) VALUES
(1, 'mayank', 'mayank', 'mayank@gmail.com', 946445152, 'House No. 56 , GKV ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cp_id` double NOT NULL,
  `cp_phone` varchar(20) NOT NULL,
  `cp_mobile` varchar(20) NOT NULL,
  `cp_email` varchar(50) NOT NULL,
  `cp_web` varchar(50) NOT NULL,
  `cp_adddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cp_id`, `cp_phone`, `cp_mobile`, `cp_email`, `cp_web`, `cp_adddress`) VALUES
(1, '+91-9462730048', '7665542548', 'event@gmail.com', 'bookyourevent.com', '100 , jaipur\r\nRajasthan India');

-- --------------------------------------------------------

--
-- Table structure for table `eventi_info`
--

CREATE TABLE `eventi_info` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_image` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_city` varchar(20) NOT NULL,
  `event_state` varchar(20) NOT NULL,
  `event_country` varchar(20) NOT NULL,
  `event_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventi_info`
--

INSERT INTO `eventi_info` (`event_id`, `event_title`, `event_image`, `event_date`, `event_time`, `event_city`, `event_state`, `event_country`, `event_price`) VALUES
(1, 'Biggest Musical Event', '.2.image.png', '2025-03-22', '21:30:00', 'Jaipur', 'Rajasthan', 'INDIA', 165);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` text NOT NULL,
  `gallery_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`, `gallery_status`) VALUES
(2, '1.event-grid.jpg', 1),
(3, '1.image.png', 1),
(4, '2.image.jpg', 1),
(5, '4.image.png', 1),
(6, 'big-ebent2.jpg', 1),
(7, 'about-video-bg.jpg', 1),
(8, 'about-thumb-03.jpg', 1),
(9, '4.4.image.png', 1),
(10, 'big-ebent1.jpg', 1),
(11, 'clayton-hotel-leopardstown-meeting-room-1.jpg', 1),
(12, 'RCJAKPP_00016_coddddnversion.jpg', 1),
(14, '.2.image.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `iipreg`
--

CREATE TABLE `iipreg` (
  `reg_id` int(11) NOT NULL,
  `reg_username` varchar(100) NOT NULL,
  `reg_fname` varchar(100) NOT NULL,
  `reg_lname` varchar(100) NOT NULL,
  `reg_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iipreg`
--

INSERT INTO `iipreg` (`reg_id`, `reg_username`, `reg_fname`, `reg_lname`, `reg_password`) VALUES
(1, 'mayank@gmail.com', 'mayank', 'jh', 'mayank'),
(2, 'gangwanikeshav2005@gmail.com', 'Keshav', 'Gangwani', 'gangwani123');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_status`) VALUES
(1, ' 50% Off in Nov~Jan for  Birthday Events   ', '2023-05-05', 1),
(2, 'Business meeting', '2023-05-02', 0),
(3, 'Wedding Party', '2023-04-20', 1),
(4, 'Food Event', '2023-04-20', 1),
(5, 'Conference', '2023-04-17', 1),
(6, 'Musical Event', '2023-04-17', 1),
(7, 'more 30% off', '2024-10-30', 1),
(8, ' extra discounted ', '2024-10-23', 1),
(9, '  new offer come fast', '2024-10-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_email` varchar(50) NOT NULL,
  `res_phone` double NOT NULL,
  `res_guests` int(11) NOT NULL,
  `res_date` date NOT NULL,
  `res_time` varchar(11) NOT NULL,
  `res_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `res_name`, `res_email`, `res_phone`, `res_guests`, `res_date`, `res_time`, `res_message`) VALUES
(1, 'keshav', '', 0, 0, '0000-00-00', '', ''),
(2, 'Keshav Gangwani', 'gangwanikeshav2005@gmail.com', 2147483647, 5, '2024-11-21', 'Lunch', 'Please make it clear and respond quickly'),
(3, 'dfdfaa', '@', 2147483647, 10, '2024-10-03', 'Breakfast', 'sdfsafsfsdfsd'),
(4, 'dffgfdfg', '@', 2147483647, 10, '2024-10-17', 'Breakfast', 'dgdgdfdfsgsdg\r\n\r\n'),
(5, 'keshav', '@', 9462730048, 5, '2004-02-06', 'Breakfast', '4sdfdsfsdfsdfddfsgg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `eventi_info`
--
ALTER TABLE `eventi_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `iipreg`
--
ALTER TABLE `iipreg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cp_id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventi_info`
--
ALTER TABLE `eventi_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `iipreg`
--
ALTER TABLE `iipreg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
