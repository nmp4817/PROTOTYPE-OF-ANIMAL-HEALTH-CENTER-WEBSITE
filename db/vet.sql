-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 04:21 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `address`, `email`, `phone`, `password`) VALUES
(1, 'Nabilahmed Patel', '612 wd lane', 'nabil@patel.com', '8874748383', '$2y$12$Tq.6Ds6Mr'),
(2, 'Abu Ayub Ansari', '603 c ave', 'ayub@ansari.com', '6744566745', '$2y$12$0gSGXufRK'),
(3, 'Deepit Sparu', '404 Border', 'deepit.sparu@gmail.com', '8765432109', '$2y$12$n49EP3bcp'),
(4, 'Manu Gupta', '610 Cent', 'manu@gupta.com', '7383747383', '$2y$12$i6QH9O0Pb'),
(5, 'Cristiano Ronaldo', '213 madrid', 'ronaldo@madrid.com', '7878787878', '$2y$12$Z3vCM2vuW'),
(6, 'NMP', '812 samson', 'nmp@pa.com', '7878787878', '$2y$12$5ot/KglFh');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `comments` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('Nabilahmed Patel', 'nabilpatel1107@gmail.com', 'Our dog, Sparky, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolate? '),
('Abu Ayub Ansari', 'ansari@gmail.com', 'How can I subscribe ?'),
('Deepit Sparu', 'deepit.sparu@gmail.com', 'What is the address of hospital? '),
('Manu Gupta', 'manu@gupta.com', 'What kind of services you provide? '),
('Cristiano Ronaldo', 'cris@ron.com', 'Hi How do I subscribe? ');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(11) NOT NULL,
  `petname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `petname`) VALUES
(2, 'pet_the_cat'),
(3, 'pet_the_dog'),
(4, 'pet_the_lion'),
(5, 'pet_the_sheep');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(11) NOT NULL,
  `question` varchar(1023) NOT NULL,
  `answer` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `question`, `answer`) VALUES
(1, 'Our dog, Sparky, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolate?', 'Chocolate is toxic to dogs. Please do not feed your dog chocolate. Try playing game with your childeren - when you feed them people treats, they can feed Sparky dog treats.'),
(2, 'How can I subscribe?', 'Please go to subscribe page feel out your information and click on button. Thank You.'),
(3, 'What kind of services do you provide?', 'Please check out our service page.'),
(4, 'What is the address of your hospital?', 'Please check out home page, it is mentioned there.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceid` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `servicedescription` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceid`, `servicename`, `servicedescription`) VALUES
(1, 'Medical Services', 'We offer state-of-the-art equipment and technology.'),
(2, 'Surgical Services', 'Full range of surgical procedures including orthopedics and emergency surgeries.'),
(3, 'Dental Care', 'A dental exam can determine whether your pet needs preventive dental care such as scaling and polishing.'),
(4, 'House Calls', 'An elderly, physically challanged, and multiple pet households often find our in-home veterinary service helpful and convenient.'),
(5, 'Emergencies', 'At least one of our doctors is on call every day and night.');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `clientid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `petid` int(11) NOT NULL,
  `susbscribed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`clientid`, `serviceid`, `petid`, `susbscribed_date`) VALUES
(1, 1, 2, '2017-11-22'),
(2, 2, 3, '2017-11-22'),
(3, 3, 4, '2017-11-22'),
(4, 4, 5, '2017-11-22'),
(1, 4, 2, '2017-11-22'),
(1, 4, 2, '2017-11-22'),
(1, 5, 2, '2017-11-22'),
(5, 2, 5, '2017-11-22'),
(5, 2, 5, '2017-11-22'),
(6, 1, 2, '2017-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD KEY `fk_clientid_idx` (`clientid`),
  ADD KEY `fk_serviceid_idx` (`serviceid`),
  ADD KEY `fk_petif_idx` (`petid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `fk_clientid` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_petif` FOREIGN KEY (`petid`) REFERENCES `pet` (`petid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serviceid` FOREIGN KEY (`serviceid`) REFERENCES `service` (`serviceid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
