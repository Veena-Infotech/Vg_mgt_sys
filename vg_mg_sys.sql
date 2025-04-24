-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vg_mg_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `family` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`id`, `uid`, `f_name`, `m_name`, `l_name`, `phone_no`, `email`, `address`, `salary`, `family`, `position`, `branch`, `date_joined`, `password`, `timestamp`) VALUES
(0, 'vms-0000', 'Unauthorised', 'Unauthorised', 'Unauthorised', '1234567890', 'Unauthorised@gmail.com', 'Unauthorised', 1234.00, 'Unauthorised', 'Unauthorised', 'Unauthorised', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-10 09:20:40'),
(1, 'vms-001', 'receptionist', 'receptionist', 'receptionist', '1234567890', 'receptionist@gmail.com', 'receptionist', 1234.00, 'receptionist', 'receptionist', 'receptionist', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-08 20:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(255) NOT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `emp_id`, `action`, `status`, `timestamp`, `ip_address`, `user_agent`) VALUES
(12, 1, 'login_request', 'completed', '2025-04-09 06:55:54', '', NULL),
(13, 1, 'login_request', 'completed', '2025-04-09 13:24:31', '', NULL),
(14, 1, 'login_request', 'completed', '2025-04-10 06:30:21', '', NULL),
(15, 1, 'login_request', 'completed', '2025-04-10 06:37:46', '::1', NULL),
(16, 1, 'login_request', 'completed', '2025-04-10 06:44:13', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(17, 1, 'login_request', 'failed', '2025-04-10 08:44:37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(18, 1, 'login_request', 'failed', '2025-04-10 08:44:44', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(21, 0, 'login_request', 'failed', '2025-04-10 09:21:00', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(22, 1, 'login_request', 'completed', '2025-04-10 10:27:18', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(23, 1, 'login_request', 'completed', '2025-04-10 10:27:45', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting_history`
--

CREATE TABLE `tbl_meeting_history` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `visitor_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `payment_status` enum('Paid','Unpaid') DEFAULT NULL,
  `payment_mode` enum('Cash','Card','Online') DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `meeting_status` enum('Scheduled','Completed','Cancelled') DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting_notes`
--

CREATE TABLE `tbl_meeting_notes` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `meeting_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`files`)),
  `reminders` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reminders`)),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` enum('Cash','Card','Online','Cheque') DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `proof` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`proof`)),
  `payment_date` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `registered_date` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `tbl_meeting_history_ibfk_1` (`visitor_id`);

--
-- Indexes for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD CONSTRAINT `tbl_logs_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`);

--
-- Constraints for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  ADD CONSTRAINT `tbl_meeting_history_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `tbl_visitor` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_meeting_history_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  ADD CONSTRAINT `tbl_meeting_notes_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `tbl_meeting_history` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
