-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql200.byetcluster.com
-- Generation Time: Mar 08, 2018 at 06:40 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: ``
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `name` text NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Profile` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`name`, `Phone`, `Profile`) VALUES
('John Ripper', '+44', 'Facebook.com'),
('Kali Killer', '+33', 'twitter.com'),
('pee', '+11', 'hipter'),
('jah had', '+44', 'india.com'),
('Hacker', '+777', 'null'),
('HELLO', 'hello', 'hello'),
('boob', '+88', 'boobs'),
('momo', '+55', 'linkin'),
('killer hiter', '+33', 'hot'),
('usman hafeez awan', '+92 302 9861775', 'https://www.facebook.com/malikusman.hafeez'),
('fff', '+54', 'fibd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
