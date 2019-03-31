-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 11:43 AM
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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `words`, `image`) VALUES
(1, 'sadsasdaaaaaaaaaakjasdhaskdhaskldhlkashdjaskldhasjdhaksldhakjsdhakjdhakjsdhjakshdkjashdkjashdkjashdkajsdhkajshdjkashdjahsdjkahsjdhaskjdhakjsdhkasdhjashdkasjhdajksdhjaksdhjashdjasdhasjkdahdjasadkjsadskjdsajhadsadshjdsajashdsajjdajdsasjdkjsajkdhaskhdhadskakjdksajdklajklsdjkladskjl\r\naskldjasdklajsdlakjdlajdlksajdklasjdlakjdkalsjdsasd/\r\n\r\nsadas;djlasdashdskjkjdakjdkjasd', '300px-University_of_Science_and_Technology_of_Southern_Philippines.png'),
(2, 'Holy shhittttttttttttttttttttttttttttttttttttttt oh my goooodd kajqwlekqwkhlbeqbkheqkjwqweeqwkhjqewkqewhjewqhjpejhqhejqwlejqwehqwjehwkqehqwkjehwqklje\r\nqjwelqkwejkqjklejqeqwkejqljekqwjekqwljeqklwjekqwljekljelq\r\nqkwjelqeklqjelqwjelqwjeqlkwjeklqwjelkqwjel', 'Admin Page.PNG'),
(3, 'asdweqhwewghelkjgqwejljwdlh.asdjaiosdhqwgljegjqqwegjlqwgejewgqljqjlhj.sjakjljfhajkjf;ajfdlajflfgdgdfgqwe;lkl;jqlwegqhew.gqwlegqwjcfeuasdasdklasdahsksjdhkasjds vakl', 'Admin Page.PNG'),
(4, 'asdqwjehklqwjgeqwyleugqw', 'Registration.PNG');

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
(1, 'admin1', '12345', 'admin1@gmail.com'),
(2, 'admin2', '12345', 'admin2@gmail.com'),
(3, 'admin3', '12345', 'admin3@gmail.com'),
(4, 'zeand1', '$2y$10$YdKoZ1wJqrVIF8xCCFais.qg8CK0yO0/WD44jLJsqTL1R/2BuHtvW', 'zeand_16@yahoo.com'),
(5, 'zeand2', '$2y$10$4FMrDk96CBnzYX9iVc292upTIT5OjiY9QjyYwkN3BOMQ38bMXXlgW', 'zeand_17@yahoo.com'),
(6, 'mike09', '$2y$10$0.F30scqiA0lZyPGmn7lzeVzHCfq.CR6CIGjUAQ07ZHqR7355i0zS', 'zn@yahoo.com'),
(7, 'mike09', '$2y$10$3IC/PFMc0pJEWGDERxkVGeUoK75G7Kgx6KstzLcHeNHIDkJsVw3Mi', 'zeand_20@yahoo.com'),
(8, 'admin1', '$2y$10$UOrv24vQjKPggtvBUSjd7evPDGn4LDcBwMj3aR1gByva42tHO9ObG', 'myze2016@gmail.com'),
(9, 'mike7', '$2y$10$j04axdeXxLc9uWGkWJWEgu/wYRMmTAiqBVPgte3iRRI.6HKjCXk1i', 'zeand_new@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
