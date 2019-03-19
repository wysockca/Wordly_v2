-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2019 at 08:07 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aperspe2_wordly`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookID-userID`
--

CREATE TABLE `bookID-userID` (
  `bookID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pages` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` int(100) NOT NULL,
  `reading` tinyint(1) NOT NULL,
  `want to read` tinyint(1) NOT NULL,
  `completed` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookID-userID`
--

INSERT INTO `bookID-userID` (`bookID`, `userID`, `pages`, `percent`, `reading`, `want to read`, `completed`) VALUES
(1, 1, '61 of 121 pages', 50, 1, 0, 0),
(2, 1, '40', 0, 0, 1, 0),
(3, 1, '216 of 216', 100, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` mediumint(255) NOT NULL,
  `genre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `title`, `author`, `image`, `description`, `pages`, `genre`, `ISBN`) VALUES
(1, 'The Adventures of Captain Underpants', 'Dav Pilkey', 'images/CaptainUnderpants.jpg', 'Fourth graders George Beard and Harold Hutchins are a couple of class clowns. The only thing they enjoy more than playing practical jokes is creating their own comic books. And together they\'ve created the greatest superhero in the history of their elementary school: Captain Underpants! His true identity is SO secret, even HE doesn\'t know who he is!', 121, 'fiction', '978-0439082822'),
(2, 'Scaredy Squirrel', 'Melanie Watt', 'images/scaredysquirrel.jpg', 'Scaredy Squirrel never leaves his nut tree. It\'s way too dangerous out there. He could encounter tarantulas, green Martians or killer bees. But in his tree, every day is the same and if danger comes along, he\'s well-prepared. Scaredy Squirrel\'s emergency kit includes antibacterial soap, Band-Aids and a parachute.\r\n\r\nDay after day he watches and waits, and waits and watches, until one day ... his worst nightmare comes true! Scaredy suddenly finds himself out of his tree, where germs, poison ivy and sharks lurk. \r\n\r\nBut as Scaredy Squirrel leaps into the unknown, he discovers something really uplifting ...', 40, 'fairytale', '978-1554534043'),
(3, 'Guinness World Records: Amazing Animals: Packed full of your Most-Loved Animal Friends', 'Guinness World Records', 'images/guinness.jpg', 'Calling all animal lovers! Guinness World Records: Amazing Animals puts the spotlight on the world’s most fur-nomenal creatures, peculiar pets, wacky wildlife, and cute critters. In this action-packed annual, you’ll meet surfing pigs, talking gorillas, and even the world’s largest elephant orchestra! Ever see a dog who thinks he’s Picasso or a bunny who plays basketball? You will now! From the tallest and smallest animals to the most popular social pet-working stars, they’re all here.\r\n\r\nIf it’s activities you want, you’re in for a treat! Create your very own record-breaking animal with our online game, or try making an origami zoo! Test your wildlife knowledge with fun quizzes and puzzles, plus find out if your pet is a secret Einstein with our exclusive IQ tests.', 216, 'information', '978-1910561904');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `readingAge` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genres` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookBuddy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `badges` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fName`, `email`, `password`, `birthday`, `readingAge`, `genres`, `bookBuddy`, `badges`) VALUES
(1, 'ollie', 'ollie@gmail.com', 'mabel', '2009-03-27', '8 to 12', 'information', 'images/buddy1.jpg', 'images/Badge1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookID-userID`
--
ALTER TABLE `bookID-userID`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookID-userID`
--
ALTER TABLE `bookID-userID`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
