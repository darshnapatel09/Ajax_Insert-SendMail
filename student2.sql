-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 12:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student2`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `files` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`, `cpassword`, `address`, `gender`, `city`, `hobbies`, `files`) VALUES
(184, 'Darshna', 'Rangani', 'ranganidarshna09@gmail.com', 'abc123123', 'abc123123', 'c g  road', 'Female', 'Ahemdabad', 'playing,Singing', 'uploads/world.jpeg'),
(185, 'Drashti ', 'Patel', 'drishurang2010@gmail.com', 'abc123123', 'abc123123', 'Jyotinagar main road', 'Female', 'Rajkot', 'playing,Singing,Reading', 'uploads/World.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
