-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 12:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_dashboard`
--

CREATE TABLE `users_dashboard` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `cphone` varchar(80) NOT NULL,
  `caddress` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_dashboard`
--

INSERT INTO `users_dashboard` (`id`, `customer_id`, `fullname`, `email`, `cphone`, `caddress`, `password`, `date`) VALUES
(1, '1930', 'Mary Ilo', 'adaclare22@gmail.com', '07034422384', 'Egbeda', '9246386b4b7720c0631fa8e6ed3adbb9baf2f5cd', '2020-11-19'),
(13, '53673', 'Mary Mary', 'hello@gmail.com', '07034422384', 'jos', '44a07a1c8cc71de0e980dba3aca732b752fa1df5', '2020-11-19'),
(15, '21725', 'Mary mars', 'mary@fluxtechafrica.com', '07034422384', 'Abuja', '7fd297e23f0ea1d8ae8e47f41fc56166399d0abe', '2020-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_dashboard`
--
ALTER TABLE `users_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_dashboard`
--
ALTER TABLE `users_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
