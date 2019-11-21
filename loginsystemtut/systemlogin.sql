-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 03:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpire`) VALUES
(2, 'alungsatrio12@gmail.com', 'bebd42f12e3fff29', '$2y$10$W.qzLh.rZlF7nyVebINDaegiuXQMNGjWnoMU0HE8Ku8sigUQmI0Jq', '1572176023'),
(4, '	 was@gmail.com', '03b321a42530589a', '$2y$10$mNSEWeepIxp8PW61eEiSkOuxh8F0NUJIA43a8y1grauZkbwAx7zKC', '1572237644'),
(5, 'topek@gmail.com', '5c034d21587637e0', '$2y$10$WKafWG9o..SeXQccB6WySeYLCMV4EeMpCzGeCIqkNJIZdAEyL48pK', '1572498614'),
(6, 'alungsatrio21@gmail.com', 'cd63c3155f1a904e', '$2y$10$.yxxiazJb3IAR.xJKTlWLe24Pqn0LXgtgxXfv9CzQmKQNvF7Ggf9S', '1572532288');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwUsers`) VALUES
(1, 'alung', 'alungsatrio12@gmail.com', '$2y$10$18RQFJXzhLxnTADYrDrTC.Ny8tPL.SGgH2r6b2GKpoBwB9znIjlQy'),
(2, 'was', 'was@gmail.com', '1'),
(3, 'wasss', 'w@gmail.com', '$2y$10$.e98Op.ZeqW7r29ytDjbzuLzDA2i/BKTuUL0AOYSs23EHmH5A2W/m'),
(4, 'alungwqewq', 'alungsatrio11112@gmail.com', '123'),
(5, 'aa', 'aa@gmail.com', '$2y$10$p5ZYDLHcBbhS4tuhUhMiZei3WspUOMWsfwn9k38CArrczF3aarBRW'),
(6, 'topek', 'topek@gmail.com', '$2y$10$ivy4SQ3qxb1rRYpd0OM5/e7eu0X2TGqCW329eylGmUDskFB8LF726'),
(7, 'aaa', 'aass@gmail.com', '$2y$10$mOlR2YwroqS1X4Ctu/yu0eLvQSUQMZP09qNTjCqfFOaG8.GOkb9Uq'),
(8, 'wasssa', 'aaaa@gmail.com', '$2y$10$yNpLKkN9SRTJkIGoS3WEzOwxiZsjEm9v0QVnE8z2mead81AOIgdd6'),
(9, 'assa', 'alungsatrio21@gmail.com', '$2y$10$8kkdaFdiOxlK8dcRGZHCOe.v0d7Rpy8lfCooqOhGo67ocZux3CQQG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
