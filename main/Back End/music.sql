-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2015 at 03:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp3songs`
--

CREATE TABLE IF NOT EXISTS `mp3songs` (
  `ALBUM_NAME` varchar(150) NOT NULL,
  `MOVIE_NAME` varchar(30) NOT NULL,
  `SONG_NAME` varchar(60) NOT NULL,
  `ARTISTS` varchar(100) NOT NULL,
  `DATE_OF_UPLOADING` date NOT NULL,
  `CATEGORY` varchar(100) NOT NULL,
  `DATE_OF_RELSEING` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp3songs`
--

INSERT INTO `mp3songs` (`ALBUM_NAME`, `MOVIE_NAME`, `SONG_NAME`, `ARTISTS`, `DATE_OF_UPLOADING`, `CATEGORY`, `DATE_OF_RELSEING`) VALUES
('', 'ashquie2', 'is.jpg', 'palak muchhal', '0000-00-00', '', '0000-00-00'),
('', 'ash', 'ash', 'ash', '2015-10-19', '', '0000-00-00'),
('', 'ZFFG', 'HGJKGF', 'CJKIUTD', '2015-10-22', '', '0000-00-00'),
('CUYJV', '', 'GFYYT', 'PCUI', '2015-10-22', 'ROCK', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `pass`) VALUES
('ashish@gmail.com', 'ashish'),
('dhruva@gmail.com', 'dhruva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
