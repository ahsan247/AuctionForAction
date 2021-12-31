-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 11:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auctionforaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE IF NOT EXISTS `addproducts` (
`pid` int(11) NOT NULL,
  `title` text NOT NULL,
  `descri` text NOT NULL,
  `price` int(20) NOT NULL,
  `btime` datetime NOT NULL,
  `cid` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mob` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`pid`, `title`, `descri`, `price`, `btime`, `cid`, `image`, `name`, `email`, `mob`) VALUES
(1, 'Mobile Phone', 'Selling mobile phone to help the poor. ', 12000, '2022-01-07 00:00:00', 1, 'uploads/gsmarena_007.jpg', 'Md. Shifatul Ahsan Apurba', 'apurba', '01717508415'),
(2, 'Muffler', 'Selling ancient muffler. ', 18000, '2022-01-07 00:00:00', 2, 'uploads/61IvE2ecwNL._UL1500_.jpg', 'Rolando B Kennedy', 'apurba', '3612869091'),
(3, 'Pen from 1971', 'Selling for a humanitarian cause.', 100000, '0000-00-00 00:00:00', 3, 'uploads/51FWstH043L._SL1000_.jpg', 'Md. Shifatul Ahsan Apurba', 'apurba', '01717508415'),
(4, 'à¦ªà§à¦°à¦¾à¦šà§€à¦¨ à¦¹à¦¾à¦°à¦¿à¦•à§‡à¦¨', 'à¦¹à¦¾à¦°à¦¿à¦•à§‡à¦¨à¦Ÿà¦¿ à§§à§®à§¯à§¦ à¦à¦° à¦¸à¦®à§Ÿà§‡à¦°à¥¤ ', 200000, '0000-00-00 00:00:00', 2, 'uploads/15995291_1192791564168206_6009612832945011649_o.jpg', 'Md. Shifatul Ahsan Apurba', 'apurba', '01717508415');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`uid` int(11) NOT NULL,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `Email`, `FirstName`, `LastName`, `Mob`, `password`) VALUES
(1, 'ahsan', 'Shifatul', 'Apurba', '01717508415', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `Name`, `Price`, `pid`) VALUES
(1, 'apurba', 10500, 70),
(2, 'apurba', 18001, 71),
(3, 'apurba', 18010, 71),
(4, 'md.shifatul.ahsan.apurba@g.bracu.ac.bd', 7000, 84),
(5, 'md.shifatul.ahsan.apurba@g.bracu.ac.bd', 20000, 85),
(6, 'apurba', 20050, 85),
(7, 'apurba', 19000, 86),
(8, 'apurba', 20000, 86),
(9, 'apurba', 12000, 1),
(10, 'apurba', 14000, 1),
(11, 'apurba', 19000, 2),
(12, 'apurba', 19500, 2),
(13, 'apurba', 20000, 2),
(14, 'apurba', 21000, 2),
(15, 'apurba', 21050, 2),
(16, 'apurba', 21200, 2),
(17, 'apurba', 22000, 2),
(18, 'apurba', 23000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
`uid` int(11) NOT NULL,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`uid`, `Email`, `FirstName`, `LastName`, `Mob`, `password`) VALUES
(13, 'apurba', 'Shifatul', 'Ahsan', '0171750841', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'Help for Poor', '#', 0, NULL),
(2, 'Jaago Foundation', '#', 0, NULL),
(3, 'à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦œà¦¨à§à¦¯', '#', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
 ADD PRIMARY KEY (`pid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproducts`
--
ALTER TABLE `addproducts`
ADD CONSTRAINT `parent` FOREIGN KEY (`cid`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
