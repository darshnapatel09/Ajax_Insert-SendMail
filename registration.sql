-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
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
  `isactive` tinyint(1) NOT NULL DEFAULT 0,
  `files` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`, `cpassword`, `address`, `gender`, `city`, `hobbies`, `isactive`, `files`) VALUES
(19, 'Drashti', 'Patel', 'drishurang2010@gmail.com', 'f5bb0c8de146c67', 'f5bb0c8de146c67', 'Shreeji Nagar              				', 'Female', 'Vadodra', 'Singing,Reading', 1, ''),
(22, 'Radhika', 'Gohel', 'radhiabcabc@gmail.com', '8ce87b8ec346ff4', '8ce87b8ec346ff4', 'Kamati Bag              				', 'Female', 'Vadodra', 'Singing,Reading', 1, ''),
(27, 'Rahul', 'Jani', 'jani@gmail.com', '7ff2af0c05b01ec', '7ff2af0c05b01ec', 'Shree nagar	              				', 'Male', 'Vadodra', 'playing,Singing', 0, ''),
(28, 'Darshna', 'Rangani', 'ranganidarshna09@gmail.com', '062e058bab47122', '062e058bab47122', 'gondal road	              				', 'Female', 'Rajkot', 'Singing', 1, ''),
(29, 'jbfnsm', 'nmsnf', 'ravibagariya@gmail.com', '', '', '', 'Male', '', '', 0, ''),
(30, 'shbd', 'kjasnfj', 'ravibagariya@gmail.com', '', '', '', 'Male', '', '', 0, ''),
(31, 'ravi', 'bagariya', 'ravibagariya@gmail.com', '', '', '', 'Male', '', '', 0, ''),
(32, 'bdsanb', 'snfbMABD', 'SANBD@gmail.com', '', '', '', 'Male', '', '', 0, '1644251396_Screenshot (1).png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
