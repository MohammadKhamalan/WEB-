-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `name` text NOT NULL,
  `password` text NOT NULL,
  `card-id` int(11) NOT NULL,
  `wallet-id` int(11) NOT NULL,
  `USD` int(11) NOT NULL,
  `JOD` int(11) NOT NULL,
  `ILS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`name`, `password`, `card-id`, `wallet-id`, `USD`, `JOD`, `ILS`) VALUES
('raoof', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 12, 2121, 10, 10, 100),
('adnan', 'eaa67f3a93d0acb08d8a5e8ff9866f51983b3c3b', 123, 12042772, 444, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(50) NOT NULL,
  `name` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` text NOT NULL,
  `Birthday` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `persontype` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `name`, `password`, `address`, `email`, `Birthday`, `gender`, `persontype`) VALUES
(11, 'hjhg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 'kjj,', '2022-05-19', 'male', 'jkjhh'),
(111, 'deena', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nablus', 'mohammad.khamalan@gmail.com', '2002-03-17', 'female', 'customer'),
(123, 'laila', '17ba0791499db908433b80f37c5fbc89b870084b', 'nablus', 'mohammad.khamalan@gmail.com', '2022-05-10', 'female', 'customer'),
(222, 'laila', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nablus', 'mohammad.khamalan@gmail.com', NULL, 'male', 'customer'),
(666, 'raoof', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'jenin', 'moa.jj@gmail.com', '2022-03-17', 'male', 'merchant'),
(1020, 'salam', '356a192b7913b04c54574d18c28d46e6395428ab', 'nablus', 'moha.kjj@gmail.com', '2002-03-17', 'female', 'customer'),
(1211, 'mohammad', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'nablus', 'mohammad.khamalan@gmail.com', '2002-03-17', 'male', 'customer'),
(100100, 'adnan', 'cfa1150f1787186742a9a884b73a43d8cf219f9b', 'nablus', 'mohammad.khamalan@gmail.com', '2002-03-17', 'male', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `rejectedtrans`
--

CREATE TABLE `rejectedtrans` (
  `transtype` text NOT NULL,
  `transdate` date NOT NULL,
  `t-walletid` int(11) NOT NULL,
  `t-walletidsender` int(11) NOT NULL,
  `USD` int(11) NOT NULL,
  `JOD` int(11) NOT NULL,
  `ILS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejectedtrans`
--

INSERT INTO `rejectedtrans` (`transtype`, `transdate`, `t-walletid`, `t-walletidsender`, `USD`, `JOD`, `ILS`) VALUES
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('Payment', '2002-03-17', 1204272, 0, 0, 0, 0),
('By from merchant', '2002-03-17', 12042772, 0, 0, 0, 0),
('Payment', '2002-03-17', 2121, 0, 0, 0, 0),
('By from merchant', '2002-03-17', 2121, 0, 0, 0, 0),
('transfer', '2002-03-17', 2121, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 1, 8, 2),
('Payment', '2001-09-26', 1204272, 0, 7777, 0, 0),
('By from merchant', '2001-09-26', 1204272, 0, 20, 1, 0),
('transfer', '2001-09-26', 12042772, 0, 19, 0, 1),
('transfer', '2001-09-26', 12042772, 1204272, 1, 1, 1),
('By from merchant', '2001-09-26', 1204272, 12042772, 1, 1, 1),
('Payment', '2001-09-26', 1204272, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `transtype` text NOT NULL,
  `transdate` date NOT NULL,
  `t-walletid` int(11) NOT NULL,
  `t-walletidre` int(11) NOT NULL,
  `USD` int(11) NOT NULL,
  `JOD` int(11) NOT NULL,
  `ILS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`transtype`, `transdate`, `t-walletid`, `t-walletidre`, `USD`, `JOD`, `ILS`) VALUES
('water', '2022-05-11', 1204272, 0, 0, 0, 0),
('water', '2001-09-26', 1204272, 0, 0, 0, 0),
('water', '2001-09-26', 1204272, 0, 0, 0, 0),
('By from merchant', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 12042772, 0, 0, 0, 0),
('hjh', '2022-05-11', 1204272, 0, 0, 0, 0),
('Charge wallet', '2020-09-30', 12042772, 0, 0, 0, 0),
('war', '2001-09-26', 1204272, 0, 0, 0, 0),
('By from merchant', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('water', '2002-03-17', 1204272, 0, 0, 0, 0),
('water', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 0, 0, 0),
('water', '2001-09-26', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2002-03-17', 1204272, 0, 0, 0, 0),
('transfer', '2022-03-17', 1204272, 0, 0, 0, 0),
('electric', '2002-03-17', 1204272, 0, 0, 0, 0),
('By from merchant', '2002-03-17', 1204272, 0, 0, 0, 0),
('water', '2002-03-17', 2121, 0, 0, 0, 0),
('water', '2002-03-17', 2121, 0, 0, 0, 0),
('By from merchant', '2002-03-17', 2121, 0, 0, 0, 0),
('transfer', '2002-03-17', 2121, 0, 0, 0, 0),
('Charge wallet', '2022-03-12', 2121, 0, 0, 0, 0),
('transfer', '2001-09-26', 1204272, 0, 20, 0, 0),
('Payment', '2001-09-26', 1204272, 0, 20, 20, 20),
('By from merchant', '2001-09-26', 1204272, 0, 80, 0, 0),
('Paymentwater', '2001-09-26', 1204272, 0, 1, 1, 1),
('Payment\"\"water', '2001-09-26', 1204272, 0, 1, 0, 1),
('Payment water', '2001-09-26', 1204272, 0, 1, 0, 0),
('transfer', '2001-09-26', 12042772, 1204272, 2, 0, 0),
('By from merchant', '2001-09-26', 1204272, 12042772, 1, 0, 1),
('Payment water', '2002-03-17', 1204272, 0, 1, 1, 1),
('Payment water', '2001-09-26', 1204272, 0, 1, 0, 0),
('Payment water', '2001-09-26', 1204272, 0, 1, 0, 0),
('transfer', '2001-09-26', 1204272, 12042772, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `password` text NOT NULL,
  `person_name` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `m_number` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `amountj` int(11) NOT NULL,
  `amountil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `password`, `person_name`, `person_id`, `m_number`, `Amount`, `amountj`, `amountil`) VALUES
(444, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'adnan', 100100, 598168640, 90, 150, 77),
(2020, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'salam', 1020, 598168640, 50, 50, 50),
(2121, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'raoof', 666, 598168640, 103, 108, 108),
(1204272, '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'mohammad', 1211, 598168640, 78, 184, 1),
(12042772, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'deena', 111, 598168640, 38, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card-id`),
  ADD KEY `wallet-id` (`wallet-id`),
  ADD KEY `wallet-id_2` (`wallet-id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `rejectedtrans`
--
ALTER TABLE `rejectedtrans`
  ADD KEY `constt` (`t-walletid`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD KEY `const` (`t-walletid`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `const1` (`person_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rejectedtrans`
--
ALTER TABLE `rejectedtrans`
  ADD CONSTRAINT `constt` FOREIGN KEY (`t-walletid`) REFERENCES `wallet` (`wallet_id`);

--
-- Constraints for table `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `const` FOREIGN KEY (`t-walletid`) REFERENCES `wallet` (`wallet_id`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `const1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
