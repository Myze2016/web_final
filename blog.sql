-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 12:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `words` longtext,
  `image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `words`, `image`, `Title`) VALUES
(2, 'Holy shhittttttttttttttttttttttttttttttttttttttt oh my goooodd kajqwlekqwkhlbeqbkheqkjwqweeqwkhjqewkqewhjewqhjpejhqhejqwlejqwehqwjehwkqehqwkjehwqklje\r\nqjwelqkwejkqjklejqeqwkejqljekqwjekqwljeqklwjekqwljekljelq\r\nqkwjelqeklqjelqwjelqwjeqlkwjeklqwjelkqwjel', 'Admin Page.PNG', 'Titlelelteltletletlel'),
(3, 'asdweqhwewghelkjgqwejljwdlh.asdjaiosdhqwgljegjqqwegjlqwgejewgqljqjlhj.sjakjljfhajkjf;ajfdlajflfgdgdfgqwe;lkl;jqlwegqhew.gqwlegqwjcfeuasdasdklasdahsksjdhkasjds vakl', 'Admin Page.PNG', 'qweqwkjeqwlejhqwkhle'),
(4, 'asdqwjehklqwjgeqwyleugqw', 'Registration.PNG', 'qwekjqwheqwelqhjewjqekww'),
(5, 'wqeqhwjhekqewjhwehqwehqwkjelhqwkjehqwkehqwjle', 'Admin Page.PNG', 'Lower Iponan'),
(6, 'Christian', '', 'VAL'),
(7, 'Christian Panget', '', 'VAL'),
(8, '', 'Admin Page.PNG', 'Dota 2 Title'),
(9, '', '', 'Dota 2 Title'),
(10, 'This post is Okay', 'Admin Page.PNG', 'Dota 2 Title'),
(11, 'dasdasd', '', 'Dota 2 Title'),
(12, '11111', '', '1111'),
(13, 'Opol, CDO', 'Admin Page.PNG', 'Foods'),
(14, 'AKDKASD', 'Admin Page.PNG', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` longtext,
  `userid` int(11) DEFAULT NULL,
  `blogid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `userid`, `blogid`) VALUES
(2, 'asdads', 8, 5),
(14, 'Comment test', 8, 2),
(15, '', 8, 2),
(16, '', 8, 2),
(17, NULL, NULL, NULL),
(21, 'Comment 1', 8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` longtext,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` char(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(5, 'zeand2', '$2y$10$4FMrDk96CBnzYX9iVc292upTIT5OjiY9QjyYwkN3BOMQ38bMXXlgW', 'zeand_17@yahoo.com'),
(8, 'admin1', '$2y$10$UOrv24vQjKPggtvBUSjd7evPDGn4LDcBwMj3aR1gByva42tHO9ObG', 'myze2016@gmail.com'),
(9, 'mike7', '$2y$10$j04axdeXxLc9uWGkWJWEgu/wYRMmTAiqBVPgte3iRRI.6HKjCXk1i', 'zeand_new@gmail.com'),
(10, 'Shainah2', '$2y$10$FtePpMbNJGtc9EqasKnWIOOSVZ56Pi0sUy.2MwgL/wzqUfsicWdd6', 'Shainah@gmail.com'),
(11, 'zeand16', '$2y$10$9K/FY4a62gJp2j6SkOQEXeWfcZs7YqCGor66xTXSzsaigeMxeWFV2', 'zeand_16@yahoo.com'),
(12, '2015100247', '$2y$10$TYyZxGNLuNEHnfY9X/CICeWzUcqX9zwAaX7mbpUFLCRzHtDS1sopC', 'zeand2@gmail.com'),
(13, '2015100247', '$2y$10$RaQrKgJvy.PzLuUjbDLcTu9iDuXiNbIoY67zJmiI6rye5Q9RnZitu', 'zeand_xx@yahoo.com'),
(14, 'val', '$2y$10$LWZ9BqeCoCo7I2ZLSOYZrOQsok9.mT0RU1SG53mUN82mdlw3WfDm.', 'val@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `blogid` (`blogid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`blogid`) REFERENCES `blog` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
