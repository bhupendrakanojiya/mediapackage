-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2015 at 04:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `virginmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `active` int(1) NOT NULL COMMENT '0=active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `active`) VALUES
(1, 'ESPN', 0),
(2, 'Star Sports', 0),
(3, 'Set Max', 0),
(4, 'BBC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `channel_mapping`
--

CREATE TABLE IF NOT EXISTS `channel_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `package_abc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `channel_mapping`
--

INSERT INTO `channel_mapping` (`id`, `channel_id`, `package_abc`) VALUES
(1, 1, 'L'),
(2, 2, 'L'),
(3, 3, 'L'),
(4, 4, 'L'),
(5, 1, 'M'),
(6, 2, 'M'),
(7, 3, 'M'),
(8, 1, 'S'),
(9, 2, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package` varchar(255) NOT NULL,
  `abr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `abr`) VALUES
(1, 'Small', 'S'),
(2, 'Medium', 'M'),
(3, 'Large', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`) VALUES
(1, 'South East'),
(2, 'London'),
(3, 'North West'),
(4, 'East of England	'),
(5, 'West Midlands'),
(6, 'South West'),
(7, 'Yorkshire and the Humber'),
(8, 'East Midlands'),
(9, 'North East');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=''Active''',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `created`) VALUES
(1, 'admin', 'admin', 0, '2015-03-09 13:36:28');
