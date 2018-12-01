-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 08:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userName`, `email`, `password`, `createdAt`) VALUES
(1, 'kuddus', 'kuddus', 'a.k.p.abdulkuddus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-04 11:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `description`, `createdAt`) VALUES
(2, 'Truck 5ton', '5ton truck', '2018-11-04 05:58:21'),
(3, 'Truck 10tn', '10ton', '2018-11-04 06:15:40'),
(4, 'Bus', '42 seat bus', '2018-11-10 05:22:13'),
(5, 'Toyota Corolla', 'Private Car', '2018-11-10 05:22:47'),
(6, 'Toyota Hiece', '14 seat laxury Car', '2018-11-16 15:02:43'),
(7, 'Lamborgini', '2seat laxurious racing car', '2018-11-16 15:03:17'),
(8, 'car', 'Hundai', '2018-11-16 15:16:55'),
(9, 'Bike', 'YamahaRx100', '2018-11-16 15:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `location` text NOT NULL,
  `carId` int(11) NOT NULL,
  `title` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `userId`, `location`, `carId`, `title`, `phone`, `description`, `image`, `createdAt`) VALUES
(9, 4, 'Debiddar, Cumilla', 8, 'Car is available', '01234567', '6sit car is available. Available', 'upload/postImages/Hyundai_-40-MPG-Now-50-MPG-by-2025_360_260_80.jpg', '2018-11-16 21:21:45'),
(10, 4, 'Mohipal, Feni', 4, 'Bus is for rent', '01234454', 'NO: Chatta Metro ba-2314\r\nDuble Deck sleppy coach  is ready for rent. You can rent it for any place in bangladesh.', 'upload/postImages/23-2-361x260.jpg', '2018-11-16 21:23:51'),
(11, 4, 'Dhaka', 4, 'SkyBus Is Now Ready For Rent', '01711150162', 'Ac Bus, Business class, ', 'upload/postImages/35323821430_813b59d482_b.jpg', '2018-11-24 23:49:03'),
(12, 4, 'Bogura', 3, 'Tata Ace Is Now Available', '01711216911', 'The Tata Ace is known as \"chhota Hathi \", Payload of 1000 kilogram.', 'upload/postImages/ace-gallery-03.jpg', '2018-11-24 23:59:17'),
(13, 4, 'Dhaka', 8, 'Maruti Suzuki Dzire', '01711470229', 'Comfortable seats, superior engine', 'upload/postImages/kisspng-maruti-suzuki-dzire-suzuki-ciaz-car-buy-suzuki-maruti-ciaz-in-india-virtual-drive-ph-5b782abfc15be8.402908431534601919792.jpg', '2018-11-25 00:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `image` text NOT NULL,
  `password` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `userName`, `email`, `phone`, `image`, `password`, `createdAt`) VALUES
(1, 'bangladesh', 'bangladesh', 'bangladesh@bangladesh.com', '12334325', 'asdasdasa', '123456', '2018-11-03 18:29:58'),
(2, 'Some', 'rahul', 'kuddus3291@diu.edu.bd', '1231224', 'upload/Capture-3.PNG', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-04 06:25:07'),
(3, 'kuddus2', 'kuddus', 'kuddus3291@diu.edu.bd', '12345678', 'upload/Capture-3.PNG', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-10 05:35:41'),
(4, 'Abdul Kader', 'kader', 'kader@gmail.com', '1234567', 'upload/pick.png', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-16 14:54:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `id` (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
