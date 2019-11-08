-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2017 at 02:51 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'revo'),
(2, 1, 0, 'bit'),
(3, 1, 0, 'bort'),
(4, 1, 0, 'nettttt'),
(5, 2, 0, 'ayam'),
(6, 2, 0, 'ular'),
(7, 2, 0, 'bekicot'),
(8, 2, 1, 'antik'),
(9, 3, 0, 'cari gesek'),
(10, 3, 0, 'ngusir hantu'),
(11, 3, 0, 'cari uang'),
(12, 3, 1, 'tambah ilmu');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'apa kah motor anda ?'),
(2, 'apa yang anda temukan pada saat anda masuk ke rumah kosong?'),
(3, 'anda kuliah untuk apa?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
