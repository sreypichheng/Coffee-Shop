-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 05:39 PM
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
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `user_id`) VALUES
(1, 'Khmer', 1),
(2, 'Thai', 1),
(3, 'USA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `coffee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffee_id`, `name`, `price`, `description`, `date`, `user_id`, `brand_id`, `image`) VALUES
(30, 'Coffee and Tea', 20, 'love coffee and tea', '2021-08-19 20:36:32', 1, 1, 'coffee-tea.jpg '),
(31, 'Coffee Love', 20, 'Good', '2021-08-19 21:22:57', 1, 1, 'green-tea.jpg'),
(32, 'Tea and coffee', 20, ' Tea and coffee Can you drink coffee and tea together? There is no scientific evidence that drinking coffee and tea together is dangerous. ', '2021-08-19 21:25:11', 1, 1, 'e9he-hero.jpg '),
(33, 'Coffee', 5, 'hello', '2021-08-19 22:21:26', 1, 1, 'k-p-157-rung-5807.jpg  '),
(36, 'Tea', 10, 'Good', '2021-08-20 12:41:42', 1, 1, 'sassafras-tea.jpg'),
(37, 'Coffee Love', 10, 'good', '2021-08-20 16:02:05', 1, 1, 'Latte+Art.jpg '),
(38, 'Tea and coffee', 20, 'love coffe', '2021-08-20 16:06:39', 1, 1, 'bubble tea.jpg '),
(39, 'KiKo', 20, 'Good', '2021-08-20 18:27:05', 1, 1, 'Tea.jpg '),
(40, 'Coffee Kito', 4, 'Every bean comes from high-altitude', '2021-08-20 21:47:17', 1, 1, 'photo-1582529025304-19ec497ffcbc.jpg '),
(42, 'Coffee ', 7, 'Kito selects high-quality single-origin arabica coffees. ', '2021-08-21 23:09:31', 1, 1, 'download.jpg      ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'SREYPICH', 'HENG', 'sreypich@gamil.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`coffee_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `coffee_ibfk_1` (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `coffee`
--
ALTER TABLE `coffee`
  ADD CONSTRAINT `coffee_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
