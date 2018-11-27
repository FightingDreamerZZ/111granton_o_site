-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2018 at 06:23 PM
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
-- Database: `agtecar1_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `comment` text NOT NULL,
  `consent` int(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `company`, `fname`, `lname`, `email`, `phone`, `comment`, `consent`, `date_created`) VALUES
(5, 'Channel Lee Media', 'Channel', 'Li', 'howardl@sps101.com', '9055370707', 'This is another test, please disregard', 0, '2018-07-06 02:26:29'),
(4, 'AutoHotline.com Corporation', 'Howard', 'Lee', 'chlee1986@gmail.com', '9055370707', 'This is just a test, please disregard.', 1, '2018-07-06 02:16:29'),
(6, 'SynergyPro Solutions', 'Howie', 'Lee', 'test@sps101.com', '', 'This is a test, please disregard again. Thank you very much.', 0, '2018-07-06 02:39:41'),
(7, 'AVJ MP', 'Aaron', 'Jao', 'aaron.jao@gmail.com', '4167979111', 'Testing Database :D', 1, '2018-07-06 08:07:42'),
(8, '', 'Vincent', 'aron', 'gold_aaron@yahoo.com', '', 'test', 0, '2018-07-11 14:02:45'),
(9, 'parc Jean-Drapeau', 'Julie', 'Coupal', 'jcoupal@parcjeandrapeau.com', '514-868-5831', 'Hi, I am looking to rent an argo 14 and i would like to know somme dealer how would do renting in the Montreal area.\r\nAlso, is there any passenger trailers that can be attached to it ?  So it could become a 25-30 passengers vehicule.\r\n\r\nThank you for contacting me by mail.\r\nHave a nice day,\r\nJulie C.', 0, '2018-07-30 06:55:24'),
(10, '', 'Tom', 'Vermeltfoort', 'tom.vermeltfoort@boschrexroth.ca', '905-536-1188', 'I have a six seater AGT Golf Cart, five years old.  While I am driving the speed seems to hesitate.  I pump the accelerator and it seems to go away.  Is there anything I can do to update/maintian the regulator.  Do I need to replace it.\r\nThanks,\r\nTom\r\n', 0, '2018-08-01 07:31:56'),
(11, 'Oil Springs Sales and Rental Inc ', 'Kayle ', 'McDonald', 'kayle663@outlook.com', '5193304354', 'Hello. Iâ€™m looking for a replacement seat cushion for the bottom of a rear facing hobbit 6 seater we purchased from you. It is tan in colour. There is nothing wrong with the cushion but unfortunately the wood base has rotted out of it. Please include shipping cost in quote to:\r\n\r\nOil Springs Sales and Rental Inc. \r\n1844 Oil Heritage Rd. \r\nR.R. #2 \r\nOil Springs, ON\r\nN0N1P0 \r\n\r\nThank you. ', 0, '2018-09-08 08:52:50'),
(12, '', 'Jessica', 'Liang', 'liangyue310704@hotmail.com', '(86)13915066547', 'Dear sir,\r\nWe are a professional manufacturer of electric sightseeing cars located in China and exporting vehicles to the US every weekâ€¦If your company is also interested in cost reduction via. Importing from China, I\\\'m always here for further discussion.', 0, '2018-09-27 01:38:22'),
(13, 'North World Industry Inc.', 'Basiliano', 'Galvez', 'basil@northworldindustry.com', '53-5-2156466', 'Dear Sirs,\r\nNorth World Industry Inc. is a Canadian company with operative office in Montreal and we deal mainly with the Cuban market having an office in Havana a Licence from the Cuban Chamber of Commerce to operate a wide range of products. We keep good contacts and relationships with main Cuban importers. I have been selling intern transport, cargo handling and other types of equipment for many years, previously from Dutch companies, and now frrom NWI. We have a client interested in electric cars for hotels, and I wish to receive a your pdf brochures andf/or digital catalogues, so that I can introduce your products to my client (Comercializadora ITH, which is the the biggest importer for the tourism sector of the country). You may also contact our manager in our office in Montreal, Ms. Julie Mazorra, at:\r\n1418 Rue Victoria,suite 125, \r\nGreenfield Park,  QuÃ©bec, Canada. J4V 1M1. \r\nCell.: +1 514 758 7110  TÃ©l : +1 450 812 7497 \r\nFax: +1 450 812 7497     \r\nBest regards,\r\nBasiliano\r\n', 1, '2018-10-19 08:06:29'),
(14, '', 'Sandra', 'Retzer', 'sandrafox@rogers.com', '519-474-7221', 'Where can I purchase a winter cover for the Zephr 2+2?\r\n', 0, '2018-10-25 11:53:00'),
(15, '', 'Jason', 'Zhang', 'jason.zhang@agtecars.com', '', 'Hi this is a testing msg sent by Jason through AGTOfficialSite\\\'s ContactUs Form...', 0, '2018-11-01 09:48:02'),
(16, '', 'Jason', 'Zhang', 'jason.zhang@agtecars.com', '', 'Hi this is another testing msg sent by Jason through AGTOfficialSite\\\'s ContactUs Form...', 0, '2018-11-01 09:53:26'),
(17, '', 'Jason', 'Zhang', 'ziyi19850202@aliyun.com', '', 'Hi this is the 3rd testing msg sent by Jason through AGTOfficialSite\\\'s ContactUs Form...', 0, '2018-11-01 10:03:12'),
(18, '', 'Jason', 'Zhang', 'ziyi19850202@aliyun.com', '', 'Hi this is the 4th testing msg sent by Jason through AGTOfficialSite\\\'s ContactUs Form...', 0, '2018-11-01 10:03:46'),
(19, '', 'Jason', 'Zhang', 'ziyi19850202@aliyun.com', '', 'Hi this is the 5th testing msg sent by Jason through AGTOfficialSite\\\'s ContactUs Form...', 0, '2018-11-01 11:37:31'),
(20, 'Natheer Technical Services', 'Savio', 'Martin', 'savio@ntsuae.com', '+971505517460', 'Hi,\r\n\r\nWould like to know if you have a distributor/dealer in the UAE.\r\n\r\nWe would be interested i your products. \r\n\r\nOur website is www.ntsuae.com', 0, '2018-11-16 11:42:47'),
(21, 'Natheer Technical Services', 'Savio', 'Martin', 'savio@ntsuae.com', '971505517460', 'We had sent a request sometime time ago, we did receive a call today from a gentleman, however the line got disconnected during the conversation and we did not have the contact. Appreciate if you could email me the persons name and contact details and we could call him.', 0, '2018-11-21 15:00:56'),
(22, 'Duggies buggies', 'Sheldon', 'Dyck', 'sheldond1970@gmail.com', '4033605456', 'What is all involved in becoming a dealer. Would like some info', 1, '2018-11-24 15:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_successful_login` datetime NOT NULL,
  `last_logged_ip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date_created`, `last_successful_login`, `last_logged_ip`) VALUES
(1, 'agtecars', 'admin1', '2018-07-06 00:23:54', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
