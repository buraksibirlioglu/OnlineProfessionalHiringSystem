-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 08:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpme`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbak?r'),
(22, 'Edirne'),
(23, 'Elâz??'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eski?ehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümü?hane'),
(30, 'Hakkâri'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, '?stanbul'),
(35, '?zmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'K?rklareli'),
(40, 'K?r?ehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmara?'),
(47, 'Mardin'),
(48, 'Mu?la'),
(49, 'Mu?'),
(50, 'Nev?ehir'),
(51, 'Ni?de'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirda?'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, '?anl?urfa'),
(64, 'U?ak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'K?r?kkale'),
(72, 'Batman'),
(73, '??rnak'),
(74, 'Bart?n'),
(75, 'Ardahan'),
(76, 'I?d?r'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `professional_id` int(11) NOT NULL,
  `comment_text` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `offer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `consumer_id`, `professional_id`, `comment_text`, `date`, `rate`, `offer_id`) VALUES
(1, 34, 38, 'Offer1_was a good job _ 1', '0000-00-00 00:00:00', '0', 10),
(2, 34, 38, 'Offer2_was a good job _ 1', '0000-00-00 00:00:00', '0', 11),
(3, 34, 38, 'ssssss', '0000-00-00 00:00:00', '0', 10),
(4, 37, 39, 'commentOndsad', '0000-00-00 00:00:00', '0', 12),
(5, 34, 38, 'dsadas', '0000-00-00 00:00:00', '0', 18);

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `consumer_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`consumer_id`, `name`, `surname`, `date_of_birth`) VALUES
(30, 'Yusuf', 'Tan', '1985-01-02'),
(33, 'Burak', 'SibirlioÄ?lu', '1995-01-01'),
(34, 'user1 ', 's1', '2018-05-02'),
(37, 'user2', 's2', '2018-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_from` int(11) NOT NULL,
  `message_to` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(280) NOT NULL,
  `isView` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `professional_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `information` varchar(300) NOT NULL,
  `isAccepted` tinyint(1) NOT NULL,
  `isDone` tinyint(1) NOT NULL,
  `isCommented` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `professional_id`, `request_id`, `price`, `information`, `isAccepted`, `isDone`, `isCommented`) VALUES
(6, 31, 46, 100, 'yusufa ', 1, 0, 0),
(8, 32, 50, 100, 'Hocam sana 100 olur', 0, 0, 0),
(9, 32, 51, 50, '50', 0, 0, 0),
(10, 38, 52, 10, 'offer1_to_user1', 1, 0, 1),
(11, 38, 53, 50, 'offer1_to_user1_2', 1, 0, 0),
(12, 39, 54, 70, 'offer1_to_user2', 1, 0, 1),
(13, 38, 55, 78, 'dddd', 1, 0, 0),
(14, 38, 55, 44, 'sdad', 0, 0, 0),
(15, 38, 55, 555, 're', 0, 0, 0),
(16, 38, 55, 66, 'dsd', 0, 0, 0),
(17, 38, 56, 77, 'sadsad', 1, 0, 0),
(18, 38, 57, 66, 'tttt', 1, 0, 1),
(19, 38, 57, 444, 'tt', 0, 0, 0),
(20, 38, 57, 55, 'terwr', 0, 0, 0),
(21, 38, 57, 555555, 'dsadds', 0, 0, 0),
(22, 38, 57, 78, 'yyy', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `user_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `information` varchar(255) NOT NULL,
  `rate` decimal(10,0) DEFAULT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`user_id`, `company_name`, `information`, `rate`, `subcategory_id`) VALUES
(31, 'yunus balÄ±klarÄ±', 'yunusss', NULL, 1),
(32, 'Ahmet Å?ahin', 'HalÄ± Kilim', NULL, 12),
(38, 'prof1_company', 'p1_info', NULL, 1),
(39, 'prof2_company', 'p2_info', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_interval` int(11) NOT NULL,
  `information` varchar(300) NOT NULL,
  `isTaken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `consumer_id`, `subcategory_id`, `date`, `time_interval`, `information`, `isTaken`) VALUES
(46, 30, 1, '0000-00-00', 0, 'yunusa', 1),
(47, 30, 2, '0000-00-00', 154, 'yusuftan installation (2)', 0),
(48, 30, 3, '0000-00-00', 164, 'yusuftan decoration (3)', 0),
(49, 30, 1, '0000-00-00', 111, 'yunus 1', 0),
(50, 33, 12, '0000-00-00', 10, 'Ahmet Å?ahin 6 metre kare dokuyanÄ±n kÃ¶r olduÄ?u halÄ±', 0),
(51, 33, 12, '0000-00-00', 60, 'req2', 0),
(52, 34, 1, '0000-00-00', 10, 'ColoringOne_from_user1', 1),
(53, 34, 1, '0000-00-00', 58, 'ColoringTwo_from_user1', 1),
(54, 37, 7, '0000-00-00', 24, 'CodingOne_from_user2', 1),
(55, 34, 1, '0000-00-00', 44444, 'dddddddd', 1),
(56, 34, 1, '0000-00-00', 44, 'dddd', 1),
(57, 34, 1, '0000-00-00', 55, 'dddasda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `usage_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `usage_count`) VALUES
(1, 'colloring', 0),
(2, 'installation', 0),
(3, 'decoration', 0),
(4, 'roof renovation', 0),
(5, 'math', 0),
(6, 'physics', 0),
(7, 'coding', 0),
(8, 'english', 0),
(9, 'home', 0),
(10, 'office', 0),
(11, 'garden', 0),
(12, 'carpet washing', 0),
(13, 'home to home', 0),
(14, 'intercity', 0),
(15, 'international', 0),
(16, 'vehicle transport', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sign_up_date` date DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `address`, `sign_up_date`, `image_id`, `city_id`) VALUES
(30, 'yusuf', 'dd2eb170076a5dec97cdbbbbff9a4405', 'yusuf@gmail.com', 'yusuf', '17', '2018-05-14', NULL, 17),
(31, 'yunus', 'a2c9a5d635f96695f809ce5272736ec5', 'yunus@gmail.com', 'yunus', '17', '2018-05-14', NULL, 17),
(32, 'ahmet', 'cdb5efc9c72196c1bd8b7a594b46b44f', 'ahmet@gmail.com', 'ahmet', '6', '2018-05-14', NULL, 6),
(33, 'burak', '39109a5bb10ccb7aff1313d369804b74', 'burak@gmail.com', 'burak', '6', '2018-05-14', NULL, 6),
(34, 'user1', '81dc9bdb52d04dc20036dbd8313ed055', 'hooo@gmail.com', '123456', 'adres1', NULL, NULL, 1),
(37, 'user2', '81dc9bdb52d04dc20036dbd8313ed055', 'hooo1@gmail.com', '123456', 'adres2', NULL, NULL, 1),
(38, 'prof1', '81dc9bdb52d04dc20036dbd8313ed055', 'hooo2@gmail.com', '123456', 'adres3', NULL, NULL, 1),
(39, 'prof2', '81dc9bdb52d04dc20036dbd8313ed055', 'hooo4@gmail.com', '123456', 'adres4', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `consumer_id` (`consumer_id`),
  ADD KEY `professional_id` (`professional_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD UNIQUE KEY `consumer_id` (`consumer_id`),
  ADD KEY `consumer_ibfk_1` (`consumer_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_ibfk_1` (`message_from`),
  ADD KEY `message_to` (`message_to`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `user_id` (`professional_id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`consumer_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`consumer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`professional_id`) REFERENCES `professional` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`offer_id`);

--
-- Constraints for table `consumer`
--
ALTER TABLE `consumer`
  ADD CONSTRAINT `consumer_ibfk_1` FOREIGN KEY (`consumer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`message_from`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`message_to`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`professional_id`) REFERENCES `professional` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professional`
--
ALTER TABLE `professional`
  ADD CONSTRAINT `professional_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professional_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`consumer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
