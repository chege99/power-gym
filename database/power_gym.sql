-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 05:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config_contact_info`
--

CREATE TABLE `tbl_config_contact_info` (
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_config_contact_info`
--

INSERT INTO `tbl_config_contact_info` (`id`, `title`, `value`) VALUES
(1, 'phone_number', '2+254714750345'),
(2, 'email', '2lee@gmail.com'),
(3, 'city', '2Thika'),
(4, 'street', '2Section B'),
(5, 'facebook', 'xhttp://facebook.com/power-gym'),
(6, 'twitter', 'xhttp://twitter.com/power-gym'),
(7, 'instagram', 'xhttp://instagram.com/power-gy'),
(8, 'whatsapp', 'xhttp://w.me/245714750345'),
(9, 'website', '2www.powergym.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config_schedules`
--

CREATE TABLE `tbl_config_schedules` (
  `entry_id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `value` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_config_schedules`
--

INSERT INTO `tbl_config_schedules` (`entry_id`, `title`, `value`) VALUES
(1, 'OT_weekday', '09:00:00'),
(2, 'CT_weekday', '18:00:00'),
(3, 'OT_weekend', '09:00:00'),
(4, 'CT_weekend', '18:00:00'),
(5, 'OT_holiday', '08:00:00'),
(6, 'CT_holiday', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `equipment_id` int(10) NOT NULL,
  `eq_name` varchar(30) NOT NULL,
  `eq_description` varchar(150) NOT NULL,
  `eq_image_url` varchar(100) NOT NULL,
  `eq_quality` varchar(20) NOT NULL,
  `eq_date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eq_added_by_uid` int(10) NOT NULL,
  `eq_status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(10) NOT NULL,
  `subcription_start_date` date NOT NULL,
  `subscription_expiry_date` date NOT NULL,
  `person_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `message_id` int(10) NOT NULL,
  `sender_name` varchar(140) NOT NULL,
  `sender_email` varchar(130) NOT NULL,
  `subject` varchar(160) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_people`
--

CREATE TABLE `tbl_people` (
  `person_id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_people`
--

INSERT INTO `tbl_people` (`person_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `date_added`) VALUES
(1, 'Maria ', 'Joe', 'MJ@gmail.com', '+254708049796', '123, Street Name, just demo data', '2020-03-09 16:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainers`
--

CREATE TABLE `tbl_trainers` (
  `trainer_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `added_by_uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  `person_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `password`, `person_id`) VALUES
(1, '12121212', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_config_contact_info`
--
ALTER TABLE `tbl_config_contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_config_schedules`
--
ALTER TABLE `tbl_config_schedules`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_people`
--
ALTER TABLE `tbl_people`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `tbl_trainers`
--
ALTER TABLE `tbl_trainers`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_config_contact_info`
--
ALTER TABLE `tbl_config_contact_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_config_schedules`
--
ALTER TABLE `tbl_config_schedules`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  MODIFY `equipment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_people`
--
ALTER TABLE `tbl_people`
  MODIFY `person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_trainers`
--
ALTER TABLE `tbl_trainers`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
