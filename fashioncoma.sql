-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 08:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashioncoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `blogTitle` varchar(55) NOT NULL,
  `blogDesc` text NOT NULL,
  `blogIMG` varchar(255) NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  `specID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `blogTitle`, `blogDesc`, `blogIMG`, `addDate`, `userID`, `specID`) VALUES
(1, 'How to Get From Ataturk Airport to Istanbul City Centre', '<p>\r\nIstanbul is the top visited destination in Turkey. So imagine the millions of foreign tourists that it receives every year! There are two airports in Istanbul but Ataturk airport is the busiest and most tourists will arrive via that route.</p>', 'turkey.jpg', '2019-02-10 20:49:26', 2, 2),
(2, 'La dolce vita', '<p>those three words sum up so well the picture that most people have of this wonderful country called Italy. It\'s all about the sweet life there, from the food to the fashion, the villas to the vineyards, the piazzas to the Piaggios</p>', 'italy.jpg', '2019-02-10 20:53:23', 1, 2),
(3, 'Beethoven', '<p> The Moonlight Sonata is not only the most famous of the Beethoven Sonatas, but is a candidate for the most famous piece of serious art music</p>', 'sonata.jpg', '2019-02-10 21:00:10', 1, 1),
(4, 'Fashion Advices', '<p>1-Balance proportions. Jessica Antola. ...\r\n2-Wear trends in an age-appropriate way. ...\r\n3-The right bra makes you look slimmer. ...\r\n4-Don\'t be too matchy matchy. ...\r\n5-Show skin selectively. ...\r\n6-Spend as much as you can afford on staples. ...\r\n7-Develop a signature style. ...\r\n8-Everyone should own a classic white shirt.</p>', 'advicefashion.jpg', '2019-02-11 07:41:22', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `catName` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `catName`) VALUES
(1, 'Music'),
(2, 'Travel'),
(3, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `userID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `addDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`ID`, `blogID`, `userID`) VALUES
(1, 2, 1),
(2, 2, 1),
(3, 1, 2),
(4, 1, 2),
(5, 1, 2),
(6, 3, 1),
(7, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `favoriteQuote` text NOT NULL,
  `workfield` varchar(75) NOT NULL,
  `bio` text NOT NULL,
  `userIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `UserName`, `Password`, `email`, `favoriteQuote`, `workfield`, `bio`, `userIMG`) VALUES
(1, 'Enass Gashout', 'enassgashout', 'password', 'enassgashout@gmail.com', 'create happeness if u can\'t find it', 'still student', 'nothing to be shown', 'enass.jpg'),
(2, 'AnisaAlmejrese', 'anisa99', '123', 'anisa@gmail.com', 'be strong', 'studying', 'nothing', 'defult.jpg'),
(3, 'ReamBenMahmoud', 'ream', '123', 'ream@gmail.com', 'nothing', 'student', 'bio', ''),
(4, 'tester', 'tester', '123', 'test@gmail.com', 'nothing', 'nothing', 'nothing', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `specID` (`specID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blogID` (`blogID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blogID` (`blogID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`specID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `blogs_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`ID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`ID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
