-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 05:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `react` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmt_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `img`, `react`, `date`, `author`, `cmt_num`) VALUES
(1, '15 years of health and fitness', 'Richard and Judy Fleming remember, like it was yesterday, the day they signed up to join Millennium Institute of Sport and Health. On their way to Taupo for a family holiday they decided to divert their journey for a swim and to inspect the new facility they had heard so much about. And that was it, they were sold. On 16th December 2001, Richard and Judy Fleming became Original Gym Members.\r\n\r\nLike most Originals they signed their membership contracts in a temporary building situated at the entrance to the athletics track. With construction still underway, Richard recalls how the couple did not quite manage a swim that day. \r\n\r\nYou will find them chatting to members, staff and athletes. Always with a smile and a clear drive to be the best they can be.\r\n', 'images/blog/1.jpg', 5, '2017-05-08', 'admin', 1),
(2, 'Bedford Personal Trainers Wanted', 'The Gym Bedford is currently looking for REPs Level 3 Certified Personal Trainers to join our successful team.\r\n\r\nWe are looking for a driven, business minded, team player that wants to operate as a Freelance Personal Trainer whilst offering high value service to our members whilst on the gym floor to ensure they have a comfortable and enjoyable experience. \r\n\r\nTherefore if you are REPs Level 3 certified and eager to work as a Freelance Personal Trainer, we would like to hear from you.', 'images/blog/2.jpg', 13, '2017-05-03', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmt_id`, `blog_id`, `comment`, `username`, `date`) VALUES
(1, 1, 'That is great!', 'Raymond', '2017-05-05'),
(2, 2, 'Contact at Gemma.williams@thegymgroup.com', 'Quinn', '2017-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(1000) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `role`) VALUES
(1, 'Raymond', '123456', 'Phu', 'Nguyen', '8 Mount Street, Auckland.', 'phu.nguyen09995@gmail.com', 2),
(2, 'Quinn', '123456', 'Quynh', 'Tran', '10 Mount Street, Auckland. ', 'trannhuquynh.acc01@gmail.com', 2),
(3, 'admin', '123456', 'admin', 'tran', '10 Mount St., Auckland 1010.', 'ccd1724@autuni.ac.nz', 1),
(5, 'Adam', '123456', 'Adam', 'Smith', '12 Mount St., Auckland.', 'adam-smith@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `colour`, `description`, `img`) VALUES
('0001', 'Incredible by Victoria Sport Bra', 55.54, 'Almost Nude', 'Tackle high-intensity workouts in a truly Incredible maximum-support sport bra with breathable padding and a flexible underwire you cannot feel, plus fully adjustable straps and stay-cool Body Wick fabric.', 'images/products/0001.jpg'),
('0002', 'Caged Racerback Sport Bra', 36.97, 'Black', 'Strong is clearly sexy in a sport bra combining light, removable padding and breathable mesh with an ultra-strappy caged back.', 'images/products/0002.jpg'),
('0003', 'The Player Racerback Sport Bra', 30.55, 'White', 'Join Team VS in a medium-support sport bra with a logo band and a comfy racerback in smooth Body-Wick fabric to keep you cool, from cycling to circuit training.', 'images/products/0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `trainer_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_password` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name`, `trainer_password`, `trainer_class`, `qualification`, `speciality`, `description`, `img`, `img2`) VALUES
(1, 'Raymond Ng.', '123456', 'Fitness', 'Bachelor of Sport and Recreation at AUT\r\nDiploma in Fitness Centre Training at AUT\r\nPost Graduate Diploma in Secondary Teaching ', 'Core Conditioning Weight Loss \r\nGroup Fitness\r\nWeight Loss\r\nMobility and Flexibility\r\nFunctional Movement', 'My sessions are dynamic, interesting and fun-filled!', 'images/trainer/raymond.jpg', 'images/trainer/raymond2.jpg'),
(2, 'Nick Jury', '123456', 'Spinning', 'Sport and Exercise Science degree\r\nSkills REPs Registered \r\nREPs Registered Personal Trainer\r\n', 'Injury prevention\r\nCore Conditioning\r\nWeight Loss\r\nFitness\r\nGroup Fitness\r\nNutrition\r\nDeep Tissue Sports Massage\r\nFlexibility Functional ', 'Make your life, your mind, body and spirit more active.', 'images/trainer/nick.jpg', 'images/trainer/nick2.jpg'),
(3, 'Quinn Tran', '123456', 'Yoga', 'Fitness Instructor/Exercise Consultant Foundation Skills REPs Registered', 'Group Fitness\r\nCore Strength\r\nWeight Loss\r\nNutrition\r\nInjury Prevention\r\nIncreased Fitness', 'Keep you on track while staying accountable to your goals.', 'images/trainer/quinn.jpg', 'images/trainer/quinn2.jpg'),
(4, 'Mia Garcia', '123456', 'Pilates', 'Fitness Instructor/Exercise Consultant\r\nFoundation Skills\r\nREPs Registered', 'Injury rehabilitation/prevention\r\nCore Conditioning\r\nFitness\r\nNutrition\r\nDeep Tissue Sports Massage', 'Make it fun, keep it fundamental, and ensure it is functional.', 'images/trainer/mia.jpg', 'images/trainer/mia2.jpg'),
(5, 'Rebecca J.', '123456', 'Kik Boxing', 'New Zealand Professional Boxing Association\r\nFitness Instructor/Exercise  ', 'Group Fitness\r\nFitness\r\nCore Strength\r\nWeight Loss\r\n', 'Make it fun, keep it fundamental, and ensure it is functional.', 'images/trainer/rebecca.jpg', 'images/trainer/rebecca2.jpg'),
(6, 'James Smith', '123456', 'Aerobics', 'Fitness Instructor/Exercise Consultant\r\nFoundation Skills\r\nREPs Registered ', 'Mobility and Flexibility\r\nFunctional Movement\r\nNutrition\r\nHigh Intensity Interval Training', 'How simple mind shifts can make dramatic life changes!', 'images/trainer/james.jpg', 'images/trainer/james2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
