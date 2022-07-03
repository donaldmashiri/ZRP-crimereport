-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 11:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_alert`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE `crimes` (
  `crime_id` int(11) NOT NULL,
  `type_of_crime` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `res_id` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `noti_id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`noti_id`, `notice`, `date`) VALUES
(1, 'The Zimbabwe Republic Police’sCriminal Investigation Department (CID) Chipinge Minerals, Flora and Fauna Unit, has arrested three suspects for unlawful possession of two live pangolins. The three suspects areLovemore Dheya, aged 39 years, not employed, Justice Faya, aged 42 years , employed as a teacher and Pinias Chauke, aged 31 years, a nurse, all of Checheche, Chipinge.', '0000-00-00'),
(2, 'Acting on the information, police quickly reacted to the call and mounted a roadblock together with the Chipinge Safari crew. They searched all vehicles that passed through the roadblock and they recovered two live pangolins from one of the vehicles leading to the arrest of the three.', '0000-00-00'),
(3, 'The Zimbabwe Republic Police’sCriminal Investigation Department (CID) Chipinge Minerals, Flora and Fauna Unit, has arrested three suspects for unlawful possession of two live pangolins. The three suspects areLovemore Dheya, aged 39 years, not employed, Justice Faya, aged 42 years , employed as a teacher and Pinias Chauke, aged 31 years, a nurse, all of Checheche, Chipinge.', '0000-00-00'),
(4, 'Acting on the information, police quickly reacted to the call and mounted a roadblock together with the Chipinge Safari crew. They searched all vehicles that passed through the roadblock and they recovered two live pangolins from one of the vehicles leading to the arrest of the three.', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `res_id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`res_id`, `names`, `email`, `gender`, `address`, `location`, `password`, `date`) VALUES
(1, 'Donnie Angel', 'donnie@gmail.com', 'Male', '6692', 'Kopje', 'donnie', '2022-06-20'),
(2, 'Uebert Angel', 'angel@gmail.com', 'Male', '3481', 'CBD', 'angel', '2022-06-24'),
(3, 'Mike', 'mike@gmail.com', 'Female', '6692', 'South downs', 'mike', '2022-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `talks`
--

CREATE TABLE `talks` (
  `talk_id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `reply` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talks`
--

INSERT INTO `talks` (`talk_id`, `names`, `message`, `reply`, `date`) VALUES
(1, 'Uebert Angel', 'Hie guyz', '', '2022-06-28'),
(2, 'Uebert Angel', 'test 2', NULL, '2022-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimes`
--
ALTER TABLE `crimes`
  ADD PRIMARY KEY (`crime_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `talks`
--
ALTER TABLE `talks`
  ADD PRIMARY KEY (`talk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crimes`
--
ALTER TABLE `crimes`
  MODIFY `crime_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `talks`
--
ALTER TABLE `talks`
  MODIFY `talk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
