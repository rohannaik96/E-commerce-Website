-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 06:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(3) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `offer` varchar(11) NOT NULL,
  `img` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `offer`, `img`) VALUES
('', 'The Handmai', '199.99', '', '1'),
('1', 'The Handmai', '199.99', '', '1'),
('2', 'A Game of T', '249.99', '', '2'),
('4', 'The Alchemi', '199.99', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gift gallery`
--

CREATE TABLE `gift gallery` (
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `picid` int(11) NOT NULL,
  `description` varchar(40) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interior`
--

CREATE TABLE `interior` (
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jwellery`
--

CREATE TABLE `jwellery` (
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jwellery`
--

INSERT INTO `jwellery` (`name`, `price`, `offer`, `img`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_address` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`first_name`, `last_name`, `email_address`) VALUES
('Rohan', 'Naik', 'RO@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `novels`
--

CREATE TABLE `novels` (
  `id` int(3) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `offer` varchar(11) NOT NULL,
  `img` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `novels`
--

INSERT INTO `novels` (`id`, `name`, `price`, `offer`, `img`) VALUES
(1, 'The Handmai', '199.99', '', '1'),
(2, 'A Game of T', '249.99', '', '2'),
(3, 'To Kill a M', '149.99', '', '3'),
(4, 'The Alchemi', '199.99', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `details`, `category`, `subcategory`) VALUES
(1, 'timex Watch', 200, 'incodnscnsdcnsjdncsd\r\ncnscnjsdcnj\r\ncsdncjnscjsn', 'watch', 'cxdcdcdcdcd'),
(2, 'timex Watch', 200, 'incodnscnsdcnsjdncsd\r\ncnscnjsdcnj\r\ncsdncjnscjsn', 'watch', 'cxdcdcdcdcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`picid`);

--
-- Indexes for table `novels`
--
ALTER TABLE `novels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `picid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `novels`
--
ALTER TABLE `novels`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
