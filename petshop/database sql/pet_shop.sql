-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `cart_id` int(11) NOT NULL,
  `pet_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `catname`) VALUES
(1, 'rabbit'),
(2, 'dog'),
(3, 'cat'),
(4, 'parrot');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `feed_img` varchar(100) NOT NULL,
  `feed_desc` varchar(300) NOT NULL,
  `pet_id` int(20) NOT NULL,
  `rating` int(1) NOT NULL,
  `feed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_reply`
--

CREATE TABLE `feedback_reply` (
  `reply_id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `feedback_id` int(30) NOT NULL,
  `reply_desc` varchar(1000) NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(35) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `user_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`id`, `username`, `password`, `phoneno`, `address`, `email`, `city`, `pincode`, `user_img`) VALUES
(6, 'jirapat', '123123', '0656062938', 'Asgard', 'D@gmail.com', 'Karaland', '46666', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_placed`
--

CREATE TABLE `order_placed` (
  `order_id` int(11) NOT NULL,
  `pet_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `user_id` int(20) NOT NULL,
  `order_cancel` int(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_placed`
--

INSERT INTO `order_placed` (`order_id`, `pet_id`, `qty`, `user_id`, `order_cancel`, `order_date`) VALUES
(15, 6, 5, 1, 0, '2020-07-12 10:43:23'),
(16, 35, 3, 4, 0, '2022-04-20 14:23:33'),
(17, 35, 1, 4, 0, '2022-04-20 14:26:31'),
(18, 35, 1, 4, 0, '2022-04-20 14:30:58'),
(19, 36, 1, 4, 0, '2022-04-20 14:33:18'),
(20, 33, 1, 6, 0, '2022-04-20 15:38:30'),
(21, 26, 1, 6, 0, '2022-04-20 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `petdetails`
--

CREATE TABLE `petdetails` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_rate` varchar(10) NOT NULL,
  `pet_keywords` varchar(200) NOT NULL,
  `pet_features1` varchar(50) NOT NULL,
  `pet_features2` varchar(50) NOT NULL,
  `pet_img1` varchar(50) NOT NULL,
  `pet_img2` varchar(50) NOT NULL,
  `pet_img3` varchar(50) NOT NULL,
  `pet_img4` varchar(50) NOT NULL,
  `pet_foods` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petdetails`
--

INSERT INTO `petdetails` (`pet_id`, `pet_name`, `pet_type`, `pet_color`, `pet_rate`, `pet_keywords`, `pet_features1`, `pet_features2`, `pet_img1`, `pet_img2`, `pet_img3`, `pet_img4`, `pet_foods`) VALUES
(26, 'Breeze', 'washimg powder', '', '25', 'WASHING POWDER', 'powder', '', 'Bitch_F.jpeg', '', '', '', ''),
(27, 'Breeze', 'fabric softener', '', '25', 'FABRIC SOFTENER', 'water', '', 'Bitch_P.jpeg', '', '', '', ''),
(28, 'Dawny', 'washimg powder', '', '10', 'WASHING POWDER', 'water', '', 'Dawny_F.jpg', '', '', '', ''),
(29, 'Dawny', 'fabric softener', '', '10', 'FABRIC SOFTENER', 'water', '', 'Dawny_P.jpg', '', '', '', ''),
(30, 'Easy', 'washimg powder', '', '10', 'WASHING POWDER', 'powder', '', 'EZ_F.jpg', '', '', '', ''),
(31, 'Easy', 'fabric softener', '', '25', 'FABRIC SOFTENER', 'water', '', 'EZ_P.jpg', '', '', '', ''),
(32, 'Poa', 'washimg powder', '', '25', 'WASHING POWDER', 'powder', '', 'Poaw_F.jpg', '', '', '', ''),
(33, 'Poa', 'fabric softener', '', '10', 'FABRIC SOFTENER', 'water', '', 'Poaw_P.jpg', '', '', '', ''),
(35, 'Omo', 'washimg powder', '', '10', 'WASHING POWDER', 'powder', '', 'OMO_F.jpg', '', '', '', ''),
(36, 'Omo', 'fabric softener', '', '15', 'FABRIC SOFTENER', 'water', '', 'OWO_P.jpg', '', '', '', ''),
(37, 'Lotus', 'chips', '', '30', 'CHIPS', '', '', 'lotes.jpg', '', '', '', ''),
(38, 'Lays', 'chips', '', '20', 'CHIPS', '', '', 'lai.jpg', '', '', '', ''),
(39, 'Party', 'chips', '', '20', 'CHIPS', '', '', 'pati.jpg', '', '', '', ''),
(40, 'Phothai', 'chips', '', '20', 'CHIPS', '', '', 'puthai.jpg', '', '', '', ''),
(41, 'Sun', 'chips', '', '20', 'CHIPS', '', '', 'tawan.jpg', '', '', '', ''),
(42, 'Cola', 'drink', '', '20', 'DRINK', '', '', 'cola.jpg', '', '', '', ''),
(43, 'Crytal', 'drink', '', '15', 'DRINK', '', '', 'crytal.jpg', '', '', '', ''),
(44, 'Oishi', 'drink', '', '20', 'DRINK', '', '', 'oishi.jpg', '', '', '', ''),
(45, 'Pepsi', 'drink', '', '20', 'DRINK', '', '', 'pasee.jpg', '', '', '', ''),
(46, 'Singha Lemon soda', 'drink', '', '20', 'DRINK', '', '', 'singha.jpg', '', '', '', ''),
(47, 'Sing water', 'drink', '', '15', 'DRINK', '', '', 'sing.jpg', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `feedback_reply`
--
ALTER TABLE `feedback_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_placed`
--
ALTER TABLE `order_placed`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `petdetails`
--
ALTER TABLE `petdetails`
  ADD PRIMARY KEY (`pet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback_reply`
--
ALTER TABLE `feedback_reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_placed`
--
ALTER TABLE `order_placed`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `petdetails`
--
ALTER TABLE `petdetails`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
