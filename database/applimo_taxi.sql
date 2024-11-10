-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2024 at 07:04 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u973196481_taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_taxi_req`
--

CREATE TABLE `tbl_book_taxi_req` (
  `ReqID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Persons` varchar(255) NOT NULL,
  `StartDestination` varchar(255) NOT NULL,
  `EndDestinaion` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(255) NOT NULL,
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book_taxi_req`
--

INSERT INTO `tbl_book_taxi_req` (`ReqID`, `Name`, `Mobile`, `Email`, `Type`, `Persons`, `StartDestination`, `EndDestinaion`, `Date`, `Time`, `CreatedOn`) VALUES
(1, 'test', '+448200540714', 'ramizmg@gmail.com', 'Party & Executive Bus', '1', 'junagadh', 'Rajkot', '1970-01-01', '22:50', '2023-12-01 16:54:57'),
(2, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Luxury SUV', '1', 's', 'Rajkot', '1970-01-01', '22:45', '2023-12-01 16:57:12'),
(3, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Luxury SUV', '1', 's', 'asd', '1970-01-01', '22:25', '2023-12-01 16:58:17'),
(4, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Luxury SUV', '1', 'asd', 'asd', '2023-12-12', '22:50', '2023-12-01 16:59:54'),
(5, 'asd', 'asd', 'asd@gmail.com', 'Luxury SUV', '1', 'sad', 'asd', '1970-01-01', '22:50', '2023-12-01 17:00:36'),
(6, 'test', '+448200540714', 'ramizmg@gmail.com', 'Stretch Limousine', '1', 'test', 'Rajkot', '1970-01-01', '22:55', '2023-12-01 17:04:01'),
(7, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Stretch Limousine', '1', 'sad', 'sad', '1970-01-01', '22:55', '2023-12-01 17:05:01'),
(8, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Luxury SUV', '1', '12', '12', '1970-01-01', '23:00', '2023-12-01 17:06:08'),
(9, 'Ramiz Girach', '+919624049054', 'ramizmg@gmail.com', 'Luxury SUV', '5', 'Mumbai', 'Hyderabad', '1970-01-01', '23:05', '2023-12-01 17:09:01'),
(10, 'Ramiz', '9624049054', 'ramiz@gmail.com', 'Party & Executive Bus', '1', 'Mumbai', 'Hyderabad', '1970-01-01', '23:00', '2023-12-01 17:10:24'),
(11, 'Ramiz Shipping', '+448200540714', 'ramizmg@gmail.com', 'Luxury Sedan', '1', 'Mumbai', 'Hyderabad', '2023-12-26', '23:10', '2023-12-01 17:19:09'),
(12, 'sad', '+449624049054', 'ramizg.aipl@gmail.com', 'Luxury Sedan', '1', 'asd', 'asd', '2023-12-25', '23:15', '2023-12-01 17:20:28'),
(13, 'Ramiz', '9624049054', 'ramizmg@gmail.com', 'Party & Executive Bus', '5', 'Mumbai', 'Hyderabad', '2023-12-19', '23:25', '2023-12-01 17:33:18'),
(14, 'Ramiz Girach', '9624049054', 'ramizmg@gmail.com', 'Stretch Limousine', '4', 'Mumbai', 'Hyderabad', '2023-12-27', '23:25', '2023-12-01 17:34:25'),
(15, 'test', '123456465465', 'ramiz@gmail.com', 'Stretch Limousine', '4', 'junagadh', 'rajkot', '2023-12-31', '19:25', '2023-12-02 13:32:35'),
(16, 'Muzaffar', '2245780598', 'fastykhan786@gmail.com', 'Luxury Sedan', '1', '1715 Park Ave, hanover park, IL 60133', 'O’Hare Airport ', '2024-03-05', '13:35', '2024-03-02 07:07:18'),
(17, 'Adam', '2245780598', 'test@gmail.com', 'Luxury Sedan', '1', 'Home', 'Airport', '2024-03-05', '10:00', '2024-03-02 15:35:24'),
(18, 'Mohammed Faraz with 4 girls ', '6463463810', 'mohammed890faraz@gmail.com', 'Luxury Sedan', '1', 'Ord', 'Trump tower ', '2024-07-11', '16:20', '2024-07-10 21:15:06'),
(19, 'Abdul Safwan', '8722719936', 'abdulsafwanblack@gmail.com', 'Luxury Sedan', '1', 'O\'Hare ', 'London house', '2024-07-17', '12:05', '2024-07-16 12:04:53'),
(20, 'Faraz with 4 girls ', '646 346 3810', 'mohammed17faraz@gmail.com', 'Stretch Limousine', '1', 'Ord', 'Trump tower ', '2024-07-17', '07:20', '2024-07-16 12:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conctact_us`
--

CREATE TABLE `tbl_conctact_us` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_conctact_us`
--

INSERT INTO `tbl_conctact_us` (`ID`, `FirstName`, `LastName`, `Email`, `Mobile`, `Message`, `CreatedOn`) VALUES
(1, 'Ramiz', 'Girach', 'ramizmg@gmail.com', '+448200540714', 'This is Test This is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is TestThis is Test', '2023-12-01 17:32:31'),
(2, 'syed', 'hafeezullah', 'syedhafeezullah@amtechitsolutions.com', '+917287860138', 'Test Email Dated 02-03-2024', '2024-03-02 09:56:05'),
(3, 'Stacey', 'Franklin', 'drsfranklin@yahoo.com', '6304080427', 'I am interested in pricing to ohare from Mchenry, just my husband and myself. thank you', '2024-04-29 17:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(25) NOT NULL,
  `InstituteID` int(11) DEFAULT NULL,
  `BillingID` int(11) NOT NULL,
  `ShipingID` int(11) NOT NULL,
  `address` text NOT NULL,
  `CityID` int(11) NOT NULL,
  `DealerID` int(11) NOT NULL,
  `OTP` varchar(55) NOT NULL,
  `device_token` text DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) DEFAULT NULL,
  `new_password_key` varchar(50) DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) DEFAULT NULL,
  `new_email_key` varchar(50) DEFAULT NULL,
  `last_ip` varchar(40) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `username`, `name`, `password`, `email`, `mobile`, `InstituteID`, `BillingID`, `ShipingID`, `address`, `CityID`, `DealerID`, `OTP`, `device_token`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 1, '', '', 'admin', '', '$2a$08$H3MtPhVzEdRaTx9gebCNS.e4z1CJcNGQv.A/IrfAiKmeI4u5hXVsO', 'admin@taxi.com', '9624049054', NULL, 0, 0, '', 0, 0, '', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2023-02-07 01:09:07', '2019-08-22 06:27:03', '2023-11-15 14:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 81, NULL, NULL),
(2, 82, NULL, NULL),
(3, 83, NULL, NULL),
(4, 84, NULL, NULL),
(5, 85, NULL, NULL),
(6, 86, NULL, NULL),
(7, 87, NULL, NULL),
(8, 88, NULL, NULL),
(9, 89, NULL, NULL),
(10, 90, NULL, NULL),
(11, 91, NULL, NULL),
(12, 92, NULL, NULL),
(13, 93, NULL, NULL),
(14, 94, NULL, NULL),
(15, 95, NULL, NULL),
(16, 96, NULL, NULL),
(17, 97, NULL, NULL),
(18, 98, NULL, NULL),
(19, 99, NULL, NULL),
(20, 100, NULL, NULL),
(21, 101, NULL, NULL),
(22, 102, NULL, NULL),
(23, 103, NULL, NULL),
(24, 104, NULL, NULL),
(25, 105, NULL, NULL),
(26, 106, NULL, NULL),
(27, 107, NULL, NULL),
(28, 108, NULL, NULL),
(29, 109, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book_taxi_req`
--
ALTER TABLE `tbl_book_taxi_req`
  ADD PRIMARY KEY (`ReqID`);

--
-- Indexes for table `tbl_conctact_us`
--
ALTER TABLE `tbl_conctact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_book_taxi_req`
--
ALTER TABLE `tbl_book_taxi_req`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_conctact_us`
--
ALTER TABLE `tbl_conctact_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
