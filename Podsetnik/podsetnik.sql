-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 03:37 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `podsetnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL,
  `user` varchar(21) NOT NULL,
  `pass` varchar(21) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `user`, `pass`, `admin`) VALUES
(1, 'milija', '123', 1),
(2, 'marko', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `obaveze`
--

CREATE TABLE IF NOT EXISTS `obaveze` (
  `id` int(11) NOT NULL,
  `obaveza` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obaveze`
--

INSERT INTO `obaveze` (`id`, `obaveza`) VALUES
(1, 'Nauciti matematiku'),
(2, 'Poloziti ispit iz matematike');

-- --------------------------------------------------------

--
-- Table structure for table `obaveze2`
--

CREATE TABLE IF NOT EXISTS `obaveze2` (
  `id` int(11) NOT NULL,
  `obaveza` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obaveze2`
--

INSERT INTO `obaveze2` (`id`, `obaveza`) VALUES
(1, 'nauciti PHP i SQL'),
(2, 'uraditi projekat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obaveze`
--
ALTER TABLE `obaveze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obaveze2`
--
ALTER TABLE `obaveze2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `obaveze`
--
ALTER TABLE `obaveze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `obaveze2`
--
ALTER TABLE `obaveze2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
