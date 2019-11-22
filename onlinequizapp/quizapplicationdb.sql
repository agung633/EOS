-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 10:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizapplicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `mcqid` int(11) NOT NULL,
  `statement` varchar(500) NOT NULL,
  `answer1` varchar(256) NOT NULL,
  `answer2` varchar(256) NOT NULL,
  `answer3` varchar(256) NOT NULL,
  `answer4` varchar(256) NOT NULL,
  `correctanswer` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`mcqid`, `statement`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`) VALUES
(1, 'What is the capital of Pakistan?', 'Lahore', 'Karachi', 'Islamabad', 'Quetta', 3),
(4, 'What is the capital of Punjab?', 'Lahore', 'Karachi', 'Islamabad', 'Quetta', 1),
(5, 'Pakistan is situated at the __________ of India', 'North', 'East', 'South', 'West', 4),
(6, 'How many provinces are there in Pakistan?', '5', '6', '4', '3', 1),
(7, 'HTML stands for ___________ ?', 'Hyper Text Markup Language', 'Hyper Transmission Markup Language', 'Hyper Text Markup Logics', 'Hyper Text Making Language', 1),
(8, 'JavaScript is a ___________ language ?', 'server side', 'client side', 'neither server side nor client side', 'both server side and client side', 2),
(9, 'MVC stands for ______ ?', 'Model vs Controller', 'Meta vs Controller', 'Model View Controller', 'Mesh View Control', 3),
(10, 'Loop are used for ______ ?', 'Repeating tasks', 'Single task', 'Many similar tasks', 'none is correct', 1),
(11, 'DO WHILE executes at least ______ times ?', '5', '3', '2', '1', 4),
(12, 'echo in PHP is used for ______ ?', 'adding', 'multiplying', 'dividing', 'printing', 4),
(13, 'i++ is referred to as ______ ?', 'parallel increment', 'post increment', 'post decrement', 'pre increment', 2),
(14, '--i is referred to as ______ ?', 'parallel increment', 'pre decrement', 'post decrement', 'pre increment', 2),
(15, '% is used for getting ______ ?', 'addition', 'subtraction', 'remainder', 'quotient', 3),
(16, 'array is used for storing collections of ______ ?', 'intergers', 'strings', 'objects', 'all are correct', 4);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marks_obtained` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `date`, `marks_obtained`, `mobile_no`) VALUES
(1, '2017-02-20 23:23:41', 5, '03334444444'),
(2, '2017-02-21 21:29:26', 7, '03334444444'),
(3, '2017-02-21 21:30:33', 7, '03334444444'),
(4, '2017-02-21 21:31:17', 7, '03334444444'),
(5, '2017-02-21 21:38:16', 7, '03334444444'),
(6, '2017-02-21 21:46:52', 2, '03334444444'),
(7, '2017-02-21 21:53:29', 2, '03334444444'),
(8, '2017-02-21 23:39:32', 6, '03334444444'),
(9, '2017-03-08 21:15:10', 7, '03334444444');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mobile_no` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mobile_no`, `password`, `full_name`, `email`, `role`) VALUES
('03331111111', 'oqa', 'Full Namee', 'abc@gmail.comm', 'admin'),
('03334444444', 'oqa', 'Nadeem Khan', 'nadeem@gmail.com', 'user'),
('03335555555', 'oqa', 'Nadeem', 'nadeem123@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`mcqid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`),
  ADD KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `mcqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`mobile_no`) REFERENCES `users` (`mobile_no`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
