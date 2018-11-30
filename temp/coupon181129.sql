-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 04:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_code` int(6) NOT NULL COMMENT 'Randomly generated unique 6-digit for identifying, PK',
  `email` varchar(30) NOT NULL COMMENT 'Email of the coupon applicant',
  `status` varchar(15) NOT NULL COMMENT 'Current status of the coupon: may be just generated may be redeemed',
  `type` varchar(10) NOT NULL COMMENT 'The type of the coupon when its being redeemed: buy_new or trade_in',
  `time_generated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='For promo campaign "Dec 2018 Coupon Promo"';

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_code`, `email`, `status`, `type`, `time_generated`) VALUES
(195679, 'test1@test.com', 'generated', 'N/A', '2018-11-26 05:07:24'),
(227272, 'jasonzhang5195@gmail.com', 'redeemed', 'trade_in', '2018-11-29 15:02:53'),
(469532, 'aa@aa1.aa', 'redeemed', 'buy_new', '2018-11-25 16:25:15'),
(496392, 'otto.lau@agtecars.com', 'generated', 'N/A', '2018-11-29 11:02:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
