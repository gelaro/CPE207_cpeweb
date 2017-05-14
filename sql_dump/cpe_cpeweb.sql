-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 11:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpe_cpeweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `config_parse`
--

CREATE TABLE `config_parse` (
  `name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `config_parse`
--

INSERT INTO `config_parse` (`name`) VALUES
('bbbbb'),
('table');

-- --------------------------------------------------------

--
-- Table structure for table `std_img_list`
--

CREATE TABLE `std_img_list` (
  `sid` varchar(9) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `std_img_list`
--

INSERT INTO `std_img_list` (`sid`, `url`) VALUES
('580610688', '6533e6f77562c18e949639d8c3f02e70');

-- --------------------------------------------------------

--
-- Table structure for table `std_listname`
--

CREATE TABLE `std_listname` (
  `sid` int(11) NOT NULL,
  `firstname_th` text COLLATE utf8_bin NOT NULL,
  `lastname_th` text COLLATE utf8_bin NOT NULL,
  `firstname_en` text COLLATE utf8_bin NOT NULL,
  `lastname_en` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `std_listname`
--

INSERT INTO `std_listname` (`sid`, `firstname_th`, `lastname_th`, `firstname_en`, `lastname_en`) VALUES
(590610621, 'ธีรยุทธ', 'ปัญโญเหียงยุทธ', 'TEERAYUT', 'asdasdasdasdasd\r'),
(590610627, 'ธีรยุทธ', 'ปัญโญเหียงยุทธ', 'TEERAYUT', 'ssssssss\r'),
(600610627, 'ธีรsss', 'dddddเหียงยุทธ', 'ffff', 'gggggg\r');

-- --------------------------------------------------------

--
-- Table structure for table `tech_listname`
--

CREATE TABLE `tech_listname` (
  `sid` int(11) NOT NULL,
  `firstname_th` text COLLATE utf8_bin NOT NULL,
  `lastname_th` text COLLATE utf8_bin NOT NULL,
  `firstname_en` text COLLATE utf8_bin NOT NULL,
  `lastname_en` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tech_listname`
--

INSERT INTO `tech_listname` (`sid`, `firstname_th`, `lastname_th`, `firstname_en`, `lastname_en`) VALUES
(590610627, 'ธีรยุทธ', 'ปัญโญเหียงยุทธ', 'TEERAYUT', 'ssssssss\r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config_parse`
--
ALTER TABLE `config_parse`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `std_img_list`
--
ALTER TABLE `std_img_list`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `std_listname`
--
ALTER TABLE `std_listname`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tech_listname`
--
ALTER TABLE `tech_listname`
  ADD PRIMARY KEY (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
