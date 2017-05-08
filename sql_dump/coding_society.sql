-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 01:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding_society`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`) VALUES
(1, 'Java'),
(2, 'Html & Css'),
(3, 'MySql'),
(4, 'C'),
(5, 'C#'),
(6, 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent-on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fanswer`
--

CREATE TABLE `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fanswer`
--

INSERT INTO `fanswer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(1, 1, 'Divia Denniis', 'divia.deidre@gmail.com', 'A class is nothing but a blueprint or a template for creating different objects which defines its properties and behaviors. ', '25/03/17 04:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE `fquestions` (
  `id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'Java', 'What is a class?', 'Divia Dennis', 'divia.deidre@gmail.com', '24/03/17 10:55:23', 40, 1),
(2, 'PHP', 'How do you redirect to another page?', 'Divia Dennis', 'divia.deidre@gmail.com', '24/03/17 10:58:58', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `topic` varchar(120) NOT NULL,
  `details` text NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `fk_category_id`, `topic`, `details`, `fk_user_id`, `timestamp`) VALUES
(1, 1, 'What is Java?', '<p>bbvb</p>', 1, '2017-05-08 19:29:00'),
(2, 1, 'Yanik', '<ol><li><em><strong>fggfhghgg</strong></em></li></ol>', 1, '2017-05-08 23:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `psw` varchar(1000) NOT NULL,
  `uname` varchar(70) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `birthdate` varchar(75) DEFAULT NULL,
  `skills` varchar(75) DEFAULT NULL,
  `bio` varchar(300) DEFAULT NULL,
  `photo` varchar(2000) DEFAULT NULL,
  `name` varchar(75) DEFAULT NULL,
  `admin_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `psw`, `uname`, `salt`, `birthdate`, `skills`, `bio`, `photo`, `name`, `admin_level`) VALUES
(1, 'divia.deidre@gmail.com', '50667c4647b5bf531bcfdfb366fa62744e0c4b054f972468cb92cf7ef5b96960', 'Divia', '834be48cc8', 'August 28, 1996', 'Web Development, PHP', 'The best way to predict the future is to create it.', 'divia.png', 'Divia Dennis', 1),
(2, 'forbes.denton2020@gmail.com', '09a9993b6b6966afe92899a1ff8fb3e1917ef4322cde965a4f604f7f99303f5e', 'Abbz_Star', '415629e9ab', 'september 11,', 'Programming, Graphics Design, Communication, Interpersonal,  ', 'I am Awesome, Cute, Caring,loving,', 'abi.png', 'Abbigaye', 2),
(4, 'ricardo.m.coleman@gmail.com', 'b876a3335474bc45b7aac478e3de70af57bf30614dccdf4f7c21da94f0e7562c', 'C4UT1ON', 'ac734ed196', '28/06/1996', 'Programming, sleeping, gaming, idling', 'im just a regular guy', 'ricardo.png', 'Ricardo Coleman', 2),
(7, 'kirlizwell17@gmail.com', '66e8a957bff6261c4e83af8020bb69bac5cac2a1a7ec00bba39644a58f510d11', 'kirlizwell', '2b44323bd2', 'November 23, 1999', 'programming, web, typing, talking', 'im very crazy, creative and fun to be around ', 'kirdeen.png', 'Kirdeen Powell', 2),
(8, 'divia.deidre@gmail.com', '8e8c687d47b5e7a57c5c28dfa4c98d186279e1ff73514788fe370dfe669db1b0', 'Divia ', '9ba5e3ce3a', NULL, NULL, NULL, NULL, NULL, 2),
(9, 'test@test.com', 'aa899e94d8f7052c3eb0a2d1ec8358f96c577cbb840538679f5797084c303257', 'Test', 'b062412b7b', NULL, NULL, NULL, NULL, NULL, 2),
(10, 'example@example.com', '22ee51a3343ed8d06a18f6e04c637bcf914b29da8ee41abf98b930554cdefc01', 'Tester', '1b9ba0fbf7', NULL, NULL, NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fanswer`
--
ALTER TABLE `fanswer`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `fquestions`
--
ALTER TABLE `fquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`fk_category_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fquestions`
--
ALTER TABLE `fquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
