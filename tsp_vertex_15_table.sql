-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 03:11 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tsp_data_for_program_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `vertex_15`
--

CREATE TABLE IF NOT EXISTS `vertex_15` (
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `o` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vertex_15`
--

INSERT INTO `vertex_15` (`a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`) VALUES
(0, 29, 82, 46, 68, 52, 72, 42, 51, 55, 29, 74, 23, 72, 46),
(29, 0, 55, 46, 42, 43, 43, 23, 23, 31, 41, 51, 11, 52, 21),
(82, 55, 0, 68, 46, 55, 23, 43, 41, 29, 79, 21, 64, 31, 51),
(46, 46, 68, 0, 82, 15, 72, 31, 62, 42, 21, 51, 51, 43, 64),
(68, 42, 46, 82, 0, 74, 23, 52, 21, 46, 82, 58, 46, 65, 23),
(52, 43, 55, 15, 74, 0, 61, 23, 55, 31, 33, 37, 51, 29, 59),
(72, 43, 23, 72, 23, 61, 0, 42, 23, 31, 77, 37, 51, 46, 33),
(42, 23, 43, 31, 52, 23, 42, 0, 33, 15, 37, 33, 33, 31, 37),
(51, 23, 41, 62, 21, 55, 23, 33, 0, 29, 62, 46, 29, 51, 11),
(55, 31, 29, 42, 46, 31, 31, 15, 29, 0, 51, 21, 41, 23, 37),
(29, 41, 79, 21, 82, 33, 77, 37, 62, 51, 0, 65, 42, 59, 61),
(74, 51, 21, 51, 58, 37, 37, 33, 46, 21, 65, 0, 61, 11, 55),
(23, 11, 64, 51, 46, 51, 51, 33, 29, 41, 42, 61, 0, 62, 23),
(72, 52, 31, 43, 65, 29, 46, 31, 51, 23, 59, 11, 62, 0, 59),
(46, 21, 51, 64, 23, 59, 33, 37, 11, 37, 61, 55, 23, 59, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
