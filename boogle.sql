-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 03:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boogle`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `feedback` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `text`, `url`) VALUES
(1, 'Test Link', 'https://test.com'),
(2, 'Test Link 2', 'https://test2.com'),
(3, 'Welcome', 'https://welcome.com'),
(4, 'Jason', 'https://jason.com'),
(5, 'Candle', 'https://candle.com'),
(6, 'Unicode snowman for you', 'http://unicodesnowmanforyou.com/'),
(7, 'The UK, the greatest little country on earth and good friends with', 'http://brexit.de/'),
(8, 'Can I fly a kite', 'https://www.caniflyakite.com/'),
(9, 'Eel slap!', 'http://eelslap.com/'),
(10, 'Ham rocks', 'https://ham.rocks/'),
(11, 'My life is a loop :(', 'http://www.molleindustria.org/everydaythesamedream/everydaythesamedream.html'),
(12, 'Movie in a minute', 'http://www.rinkworks.com/movieaminute/'),
(13, 'Million dollar homepage', 'http://www.milliondollarhomepage.com/'),
(14, 'Cow Spinner', 'http://spinnymeat.com/'),
(15, 'Museum of selfies', 'http://museumofselfies.tumblr.com/'),
(16, 'Chill out and watch some cat gifs', 'http://chilloutandwatchsomecatgifs.com/'),
(17, 'Bouncy balls...', 'https://bouncyballs.org/'),
(18, 'You crazy (cray cray)', 'http://youcraycray.com/'),
(19, 'Flying Opera Pigs', 'http://flyingoperapigs.com/'),
(20, 'Just a bell', 'http://hectorsalamanca.com/'),
(21, 'Leak spin', 'http://leekspin.com/'),
(22, 'D-E-F-I-N-I-T-E-L-Y', 'http://d-e-f-i-n-i-t-e-l-y.com/'),
(23, 'Cat party', 'http://www.catparty.nonuigi.moe/'),
(24, 'Bacon sizzling', 'http://www.baconsizzling.com/'),
(25, 'Chat with yourself or watch...', 'http://www.chatwithyourself.com/'),
(26, 'Pls pet doge', 'http://www.plspetdoge.com/'),
(27, 'How secure is my password', 'https://howsecureismypassword.net/'),
(28, 'Polar bear in a snow storm', 'http://www.polarbearinasnowstorm.com/'),
(29, 'Dotted Lines', 'http://www.dottedlines.com/'),
(30, 'Welcome to the internet setup!', 'https://html.house/jnftbgke.html'),
(31, 'Test lol', 'https://www.testlol.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
