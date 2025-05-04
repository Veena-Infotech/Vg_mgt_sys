-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 06:45 PM
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
-- Table structure for table `shelfs_cubboards`
--

CREATE TABLE `shelfs_cubboards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shelfs_cubboards`
--

INSERT INTO `shelfs_cubboards` (`id`, `name`, `room_name`) VALUES
(1, 'shelf1', 'Conference room'),
(2, 'shelf 2', '\nPrivate Cabin 1'),
(3, 'shelf 3', 'Conference room'),
(4, 'shelf 3', 'Conference room');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(256) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `created_at`) VALUES
(1, 'Massachusetts Institute of Technology', '2025-04-29'),
(2, 'University of Chicago', '2025-04-29'),
(3, 'GSAS Open Labs At Harvard', '2025-04-29'),
(4, 'California Institute of Technology', '2025-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `uid`, `f_name`, `l_name`, `created_at`) VALUES
(1, 'cli_0001', 'John', 'Doe', '2025-04-28 21:02:46'),
(2, 'cli_0002', 'Martin', 'Garix', '2025-04-28 21:03:06'),
(3, 'cli_0003', 'Simon', 'Roy', '2025-04-28 21:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `salutation` varchar(256) DEFAULT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `father's_name` varchar(256) DEFAULT NULL,
  `mother's_name` varchar(256) DEFAULT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `spouse_name` varchar(256) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other','') DEFAULT NULL,
  `primary_phone_no` varchar(11) DEFAULT NULL,
  `alternative_phone_no` varchar(15) DEFAULT NULL,
  `personal_email` varchar(100) NOT NULL,
  `official_email` varchar(100) DEFAULT NULL,
  `current_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `aadharcard_no` varchar(12) DEFAULT NULL,
  `pancard_no` varchar(10) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_acc_no` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(12) DEFAULT NULL,
  `branch_name` varchar(256) DEFAULT NULL,
  `branch_address` varchar(256) DEFAULT NULL,
  `is_upi_id` enum('Yes','No') DEFAULT NULL,
  `upi_id` varchar(100) DEFAULT NULL,
  `emergency_name` varchar(256) DEFAULT NULL,
  `emergency_relationship` enum('Father','Mother','Spouse','Other') DEFAULT NULL,
  `emergency_phone_no` varchar(100) NOT NULL,
  `nominee_name` varchar(256) DEFAULT NULL,
  `nominee_relationship` enum('Spouse','Parent','Child','Other') DEFAULT NULL,
  `high_education_qualification` enum('10th','12th','Diploma','Bachelor''s','Master''s','PhD') DEFAULT NULL,
  `institute_name` varchar(256) DEFAULT NULL,
  `passing_year` varchar(100) DEFAULT NULL,
  `education_certificate_path` varchar(256) DEFAULT NULL,
  `have_worked_previously` enum('Yes','No') DEFAULT NULL,
  `previous_employer_name` varchar(100) DEFAULT NULL,
  `previous_job_role` varchar(256) DEFAULT NULL,
  `emp_period_start_date` date DEFAULT NULL,
  `emp_period_end_date` date DEFAULT NULL,
  `reason_leaving` text DEFAULT NULL,
  `document_path` varchar(256) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `current_job_role` varchar(100) DEFAULT NULL,
  `current_salary_ctc` decimal(10,2) DEFAULT NULL,
  `in_hand_salary` decimal(10,2) DEFAULT NULL,
  `conveyance` decimal(10,2) DEFAULT NULL,
  `company_loan_advance` enum('Yes','No') DEFAULT NULL,
  `loan_amt_repayment` varchar(256) DEFAULT NULL,
  `official_work_timing` varchar(256) DEFAULT NULL,
  `weekly_off_day` enum('Sunday','Saturday','Rotational') DEFAULT NULL,
  `annual_leave_entitlement` varchar(256) DEFAULT NULL,
  `leave_application_process` text DEFAULT NULL,
  `is_policy_agree` enum('Yes','No') DEFAULT NULL,
  `willing_for_docs` enum('Yes','No') DEFAULT NULL,
  `additional_comments` text DEFAULT NULL,
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

INSERT INTO `tbl_emp` (`id`, `uid`, `salutation`, `f_name`, `m_name`, `l_name`, `father's_name`, `mother's_name`, `marital_status`, `spouse_name`, `date_of_birth`, `gender`, `primary_phone_no`, `alternative_phone_no`, `personal_email`, `official_email`, `current_address`, `permanent_address`, `aadharcard_no`, `pancard_no`, `bank_name`, `bank_acc_no`, `ifsc_code`, `branch_name`, `branch_address`, `is_upi_id`, `upi_id`, `emergency_name`, `emergency_relationship`, `emergency_phone_no`, `nominee_name`, `nominee_relationship`, `high_education_qualification`, `institute_name`, `passing_year`, `education_certificate_path`, `have_worked_previously`, `previous_employer_name`, `previous_job_role`, `emp_period_start_date`, `emp_period_end_date`, `reason_leaving`, `document_path`, `joining_date`, `current_job_role`, `current_salary_ctc`, `in_hand_salary`, `conveyance`, `company_loan_advance`, `loan_amt_repayment`, `official_work_timing`, `weekly_off_day`, `annual_leave_entitlement`, `leave_application_process`, `is_policy_agree`, `willing_for_docs`, `additional_comments`, `family`, `position`, `branch`, `date_joined`, `password`, `timestamp`) VALUES
(0, 'vms-0000', '', 'Unauthorised', 'Unauthorised', 'Unauthorised', '', '', 'Single', '', NULL, 'Male', '0', '1234567890', '', 'Unauthorised@gmail.com', 'Unauthorised', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1234.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unauthorised', 'Unauthorised', 'Unauthorised', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-10 09:20:40'),
(1, 'vms-001', '', 'receptionist', 'receptionist', 'receptionist', '', '', 'Single', '', NULL, 'Male', '0', '1234567890', '', 'receptionist@gmail.com', 'receptionist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1234.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'receptionist', 'receptionist', 'receptionist', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-08 20:12:59'),
(3, 'vi-101', 'mr', 'Om', 'RK', 'Pandey', 'RK', 'Archana', 'Single', '', '2005-07-22', 'Male', NULL, NULL, 'email@email.com', 'email@email.com', 'infotech office ', 'Aryan sir\'s heart', '987667893278', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2a$12$M2gJn5kRLDVmYMaVt/3KP.jddbP2MVNcSB6fpDXc3LtluJmkBt8.q', '2025-05-03 07:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `is_archived` tinyint(1) DEFAULT 0,
  `uploaded_by` int(11) DEFAULT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fms`
--

CREATE TABLE `tbl_fms` (
  `id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `cubboard_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fms`
--

INSERT INTO `tbl_fms` (`id`, `room_name`, `cubboard_name`, `file_name`, `time`, `added_by`) VALUES
(1, 'Conference room', 'dr-1', 'personal test file 📂', '2025-05-04 04:15:05', 'receptionist'),
(3, 'Conference room', 'shelf 3', 'addd', '2025-05-04 04:12:54', 'receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_folders`
--

CREATE TABLE `tbl_folders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_archived` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_folders`
--

INSERT INTO `tbl_folders` (`id`, `name`, `parent_id`, `is_archived`, `created_at`, `updated_at`) VALUES
(4, 'sdcsdc', 1, 0, '2025-05-01 00:47:19', '2025-05-01 00:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loans`
--

CREATE TABLE `tbl_loans` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reason` text DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `status` enum('Approved','Rejected') DEFAULT NULL,
  `date` date NOT NULL,
  `feedback` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_status`
--

CREATE TABLE `tbl_loan_status` (
  `id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `months` int(11) NOT NULL,
  `emi_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) DEFAULT 0.00,
  `pending_amount` decimal(10,2) DEFAULT 0.00,
  `status` enum('Ongoing','Completed') DEFAULT 'Ongoing',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(23, 1, 'login_request', 'completed', '2025-04-10 10:27:45', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(24, 1, 'login_request', 'completed', '2025-05-01 17:17:18', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(25, 3, 'login_request', 'failed', '2025-05-03 07:54:49', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(26, 3, 'login_request', 'failed', '2025-05-03 07:55:21', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(27, 1, 'login_request', 'completed', '2025-05-03 07:55:51', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(28, 1, 'login_request', 'completed', '2025-05-03 10:35:39', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(29, 1, 'login_request', 'completed', '2025-05-04 09:10:46', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36');

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
  `meeting_status` enum('Scheduled','Completed','InProgress','Rescheduled') DEFAULT 'Scheduled',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_meeting_history`
--

INSERT INTO `tbl_meeting_history` (`id`, `uid`, `date`, `time`, `visitor_id`, `emp_id`, `reason`, `location`, `in_time`, `out_time`, `payment_status`, `payment_mode`, `amount`, `meeting_status`, `timestamp`) VALUES
(2, 'meet_6814e4b88a182', '2025-05-02', '17:28:56', 1, 1, 'testing for images', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', '2025-05-03 10:39:31'),
(3, 'meet_6814e813400eb', '2025-05-02', '17:43:15', 2, 1, 'testing with redirection ', NULL, NULL, NULL, NULL, NULL, NULL, 'Rescheduled', '2025-05-04 09:21:16'),
(4, 'meet_6815f2052ed34', '2025-05-03', '12:37:57', 2, 3, 'Aaron and ', NULL, NULL, NULL, NULL, NULL, NULL, 'InProgress', '2025-05-03 10:38:11'),
(5, 'meet_681731fa35c7b', '2025-05-04', '11:23:06', 2, 1, 'testing for today date query', NULL, NULL, NULL, NULL, NULL, NULL, 'Scheduled', '2025-05-04 09:23:06');

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
-- Table structure for table `tbl_misc`
--

CREATE TABLE `tbl_misc` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `proof` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` enum('Approved','Rejected') DEFAULT NULL,
  `feedback` text DEFAULT NULL,
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
-- Table structure for table `tbl_pin_board`
--

CREATE TABLE `tbl_pin_board` (
  `srno` int(11) NOT NULL,
  `pinboard_id` int(11) NOT NULL,
  `pin_headline` varchar(255) NOT NULL,
  `pin_content` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `archive` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pin_board`
--

INSERT INTO `tbl_pin_board` (`srno`, `pinboard_id`, `pin_headline`, `pin_content`, `created_on`, `archive`) VALUES
(1, 24, 'JAVA', 'STARTED', '2025-05-02 14:51:28', 'No'),
(2, 21, 'veena Infotech', 'project', '2025-05-02 14:48:24', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priority`
--

CREATE TABLE `tbl_priority` (
  `id` int(11) NOT NULL,
  `priority` varchar(256) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_priority`
--

INSERT INTO `tbl_priority` (`id`, `priority`, `created_at`) VALUES
(1, 'Low', '2025-04-29'),
(2, 'High', '2025-04-29'),
(3, 'Medium', '2025-04-29'),
(4, 'Semi Urgent', '2025-04-29'),
(5, 'Urgent', '2025-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `uid` varchar(256) DEFAULT NULL,
  `project_title` varchar(256) DEFAULT NULL,
  `project_type` int(255) DEFAULT NULL,
  `project_manager` int(11) DEFAULT NULL,
  `project_client` int(255) DEFAULT NULL,
  `project_status` int(255) DEFAULT NULL,
  `project_description` varchar(256) DEFAULT NULL,
  `project_start_date` date DEFAULT NULL,
  `project_end_date` date DEFAULT NULL,
  `project_created_by` varchar(256) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `uid`, `project_title`, `project_type`, `project_manager`, `project_client`, `project_status`, `project_description`, `project_start_date`, `project_end_date`, `project_created_by`, `timestamp`) VALUES
(21, 'prj_680f77ed89734', 'infotech', 2, 0, 2, 1, 'test', '2020-04-20', '2020-05-20', 'admin', '2025-04-28'),
(22, 'prj_680f780d1cc70', 'infotech2', 1, 1, 1, 1, 'm, ff msd fk', '2025-04-28', '2025-05-11', 'admin', '2025-04-28'),
(24, 'prj_68113dc2705e7', 'test 2', 2, 1, 2, 1, 'sdfgsfdgsdg', '2025-04-30', '2025-05-11', 'admin', '2025-04-30'),
(25, 'prj_68113ed38894b', 'test 3', 1, 0, 1, 1, 'asdcasdc', '2025-04-30', '2025-05-11', 'admin', '2025-04-30'),
(26, 'prj_6816093886f8f', 'Maitri Park', 1, 3, 2, 1, 'hdivdocaspovmsd', '2025-05-03', '2025-06-08', 'admin', '2025-05-03'),
(27, 'prj_68170d04d7144', 'New Project Dims', 1, 0, 1, 1, 'testing for new location in dims', '2025-05-04', '2025-05-11', 'admin', '2025-05-04'),
(28, 'prj_68170ec7c809e', 'dims x pms', 1, 3, 2, 1, 'lknscjksdno', '2025-05-04', '2025-05-11', 'admin', '2025-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_emp`
--

CREATE TABLE `tbl_project_emp` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_emp`
--

INSERT INTO `tbl_project_emp` (`id`, `emp_id`, `project_id`, `timestamp`) VALUES
(9, 1, 21, '2025-04-28'),
(10, 1, 22, '2025-04-28'),
(13, 1, 24, '2025-04-30'),
(14, 1, 25, '2025-04-30'),
(15, 1, 26, '2025-05-03'),
(16, 3, 26, '2025-05-03'),
(17, 0, 26, '2025-05-03'),
(18, 3, 27, '2025-05-04'),
(19, 3, 28, '2025-05-04'),
(20, 1, 28, '2025-05-04'),
(21, 0, 28, '2025-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_status`
--

CREATE TABLE `tbl_project_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_status`
--

INSERT INTO `tbl_project_status` (`id`, `status_name`, `created_at`) VALUES
(1, 'On-Going', '2025-04-28 21:15:30'),
(2, 'Waiting', '2025-04-28 21:15:41'),
(3, 'Completed', '2025-04-28 21:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_type`
--

CREATE TABLE `tbl_project_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_type`
--

INSERT INTO `tbl_project_type` (`id`, `type`, `created_at`) VALUES
(1, 'Society', '2025-04-28 20:52:05'),
(2, 'In-House', '2025-04-28 20:52:20'),
(3, 'Lottery', '2025-04-28 20:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `room_name`) VALUES
(1, 'Conference room'),
(2, 'Private Cabin 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

CREATE TABLE `tbl_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(256) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks`
--

CREATE TABLE `tbl_tasks` (
  `id` int(11) NOT NULL,
  `uid` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `project_name` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `assigned_employee` varchar(256) DEFAULT NULL,
  `task_category` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `tags` int(11) DEFAULT NULL,
  `image_path` varchar(256) DEFAULT NULL,
  `file_path` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_emp`
--

CREATE TABLE `tbl_task_emp` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_tag`
--

CREATE TABLE `tbl_task_tag` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `isCompleted` tinyint(1) DEFAULT 0,
  `isArchived` tinyint(1) DEFAULT 0,
  `created_by` int(11) NOT NULL,
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
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `uid`, `f_name`, `m_name`, `l_name`, `phone_no`, `email`, `address`, `img`, `registered_date`, `timestamp`) VALUES
(1, 'visitor_6814e4b888426', 'Aryan', 'Nitin', 'Shirodkar', '7304680494', 'ans@gmail.com', '', 'visitor_1.jpg', '2025-05-02', '2025-05-02 15:28:56'),
(2, 'visitor_6815f2052cdfb', 'om', '', '', '9321871957', 'om@gmail.com', '', 'visitor_2.jpg', '2025-05-03', '2025-05-03 10:37:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shelfs_cubboards`
--
ALTER TABLE `shelfs_cubboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_id` (`folder_id`);

--
-- Indexes for table `tbl_fms`
--
ALTER TABLE `tbl_fms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_folders`
--
ALTER TABLE `tbl_folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_folders_ibfk_1` (`parent_id`);

--
-- Indexes for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `applied_by` (`applied_by`);

--
-- Indexes for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_id` (`loan_id`),
  ADD KEY `emp_id` (`emp_id`);

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
  ADD KEY `tbl_meeting_history_ibfk_1` (`visitor_id`),
  ADD KEY `tbl_meeting_history_ibfk_2` (`emp_id`);

--
-- Indexes for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- Indexes for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `applied_by` (`applied_by`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_pin_board`
--
ALTER TABLE `tbl_pin_board`
  ADD UNIQUE KEY `srno` (`srno`),
  ADD KEY `fk_srno` (`pinboard_id`);

--
-- Indexes for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_escape_pm` (`project_manager`),
  ADD KEY `tbl_project_fk_project_type_id` (`project_type`),
  ADD KEY `tbl_project_fk_tbl_client_id` (`project_client`),
  ADD KEY `tbl_project_fk_tbl_project_status` (`project_status`);

--
-- Indexes for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_project_emp_fk_emp` (`emp_id`),
  ADD KEY `tbl_project_emp_fk_project` (`project_id`);

--
-- Indexes for table `tbl_project_status`
--
ALTER TABLE `tbl_project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`task_category`),
  ADD KEY `fk_priority` (`priority`);

--
-- Indexes for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_task_emp_fk_emp` (`emp_id`),
  ADD KEY `tbl_task_emp_fk_task` (`task_id`);

--
-- Indexes for table `tbl_task_tag`
--
ALTER TABLE `tbl_task_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_tash_tag_fk_task` (`task_id`),
  ADD KEY `tbl_tash_tag_fk_tags` (`tag_id`);

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `created_by` (`created_by`);

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
-- AUTO_INCREMENT for table `shelfs_cubboards`
--
ALTER TABLE `shelfs_cubboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fms`
--
ALTER TABLE `tbl_fms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_folders`
--
ALTER TABLE `tbl_folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_project_status`
--
ALTER TABLE `tbl_project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_tag`
--
ALTER TABLE `tbl_task_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD CONSTRAINT `tbl_files_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `tbl_folders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD CONSTRAINT `tbl_loans_ibfk_1` FOREIGN KEY (`applied_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  ADD CONSTRAINT `tbl_loan_status_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `tbl_loans` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_loan_status_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

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

--
-- Constraints for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  ADD CONSTRAINT `tbl_misc_ibfk_1` FOREIGN KEY (`applied_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pin_board`
--
ALTER TABLE `tbl_pin_board`
  ADD CONSTRAINT `fk_srno` FOREIGN KEY (`pinboard_id`) REFERENCES `tbl_project` (`id`);

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_escape_pm` FOREIGN KEY (`project_manager`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_fk_project_type_id` FOREIGN KEY (`project_type`) REFERENCES `tbl_project_type` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_fk_tbl_client_id` FOREIGN KEY (`project_client`) REFERENCES `tbl_client` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_fk_tbl_project_status` FOREIGN KEY (`project_status`) REFERENCES `tbl_project_status` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  ADD CONSTRAINT `tbl_project_emp_fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_emp_fk_project` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`task_category`) REFERENCES `tbl_category` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_priority` FOREIGN KEY (`priority`) REFERENCES `tbl_priority` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  ADD CONSTRAINT `tbl_task_emp_fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_task_emp_fk_task` FOREIGN KEY (`task_id`) REFERENCES `tbl_tasks` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_task_tag`
--
ALTER TABLE `tbl_task_tag`
  ADD CONSTRAINT `tbl_tash_tag_fk_tags` FOREIGN KEY (`tag_id`) REFERENCES `tbl_tags` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tash_tag_fk_task` FOREIGN KEY (`task_id`) REFERENCES `tbl_tasks` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD CONSTRAINT `tbl_todo_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
