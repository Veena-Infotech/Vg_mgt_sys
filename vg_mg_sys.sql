-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 09:13 AM
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
(1, 'Bugs', '2025-04-29'),
(2, 'Changes', '2025-04-29'),
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
-- Table structure for table `tbl_landlord`
--

CREATE TABLE `tbl_landlord` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `landlord_name` varchar(255) NOT NULL,
  `landlord_email` varchar(255) NOT NULL,
  `landlord_phone` varchar(20) NOT NULL,
  `district` varchar(255) NOT NULL,
  `taluka` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `structure_type` varchar(100) NOT NULL,
  `private_floors` int(11) NOT NULL,
  `private_units` int(11) NOT NULL,
  `public_wings` int(11) NOT NULL,
  `public_floors` int(11) NOT NULL,
  `society_units` int(11) NOT NULL,
  `society_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_landlord`
--

INSERT INTO `tbl_landlord` (`id`, `uid`, `landlord_name`, `landlord_email`, `landlord_phone`, `district`, `taluka`, `village`, `property_type`, `structure_type`, `private_floors`, `private_units`, `public_wings`, `public_floors`, `society_units`, `society_address`) VALUES
(1, NULL, 'Aryan', 'aryanshirodkar03@gmail.com', '07304680494', 'Aurangabad', 'Kannad', 'Hadiwara', 'structure', 'private', 5, 25, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `id` int(11) NOT NULL,
  `lead_id` varchar(20) NOT NULL,
  `salutation` varchar(10) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `current_lead_profile` varchar(50) DEFAULT NULL,
  `pmc_name` varchar(100) DEFAULT NULL,
  `agent_name` varchar(100) DEFAULT NULL,
  `agency_name` varchar(100) DEFAULT NULL,
  `developer_name` varchar(100) DEFAULT NULL,
  `developer_company` varchar(100) DEFAULT NULL,
  `society_name` varchar(100) DEFAULT NULL,
  `is_contacted` enum('yes','no') DEFAULT 'no',
  `reference_source_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_leads`
--

INSERT INTO `tbl_leads` (`id`, `lead_id`, `salutation`, `first_name`, `last_name`, `email`, `phone`, `current_lead_profile`, `pmc_name`, `agent_name`, `agency_name`, `developer_name`, `developer_company`, `society_name`, `is_contacted`, `reference_source_id`, `created_at`) VALUES
(1, 'PMSL_1', 'Miss.', 'Aryannnnnn', 'Shirodkar', 'aryanshirodkar03@gmail.com', '07304680494', 'pmc', 'ans4', NULL, NULL, NULL, NULL, '', 'yes', 1, '2025-01-09 14:47:50'),
(2, 'PMSL_2', 'Mr.', 'Aryan', 'Shirodkar', 'aryanshirodkar03@gmail.com', '07304680494', '', '', 'Dex', 'dexshot', '', '', '', 'yes', 1, '2025-01-09 14:48:47'),
(3, 'PMSL_3', '', 'des', 'kjandndck', 'lksmdc@lksdf', '07304680494', '', '', '', '', '', '', 'sclkcsldkmc dw', 'no', 0, '2025-01-09 14:50:52'),
(4, 'PMSL_4', 'Miss', 'kdjfbjkwed', 'm,d ', 'aryanshirodkar03@gmail.com', '07304680494', 'developer', '', '', '', 'dfwecacdae', 'dcqwdweq', '', 'no', 0, '2025-01-09 14:52:15'),
(5, 'PMSL_5', 'Mr.', 'ksjd cnkd c', 'sm,c ksnd c', 'aryanshirodkar03@gmail.com', '07304680494', 'pmc', 'scmlsdlkc kdc', '', '', '', '', '', 'no', 0, '2025-01-09 14:54:57'),
(6, 'PMSL_6', 'Mr.', 'rnrn', 'anan', 'aryanshirodkar03@gmail.com', '07304680494', 'pmc', '', '', '', '', '', '', 'yes', 2, '2025-01-10 13:57:20'),
(7, 'PMSL_7', 'Mr.', 'ans2', 'asn2', 'aryanshirodkar03@gmail.com', '7304680494', 'society', NULL, NULL, NULL, NULL, NULL, 'ans bldg', 'no', 0, '2025-01-22 07:51:44'),
(8, 'PMSL_8', 'Mr.', 'Aryan', 'Shirodkar', 'aryanshirodkar03@gmail.com', '07304680494', 'society', '', '', '', '', '', 'ans soc', 'no', 0, '2025-01-22 08:08:37'),
(9, 'PMSL_9', 'Mr.', 'Aryan', 'Shirodkar', 'ans@gmail.com', '7304680494', 'society', '', '', '', '', '', 'Ans Blddg', 'no', 0, '2025-05-05 07:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE `tbl_leaves` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `leave_type` enum('casual','sick','emergency','earned') NOT NULL,
  `earned_for` date DEFAULT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('approved','rejected','in_review') NOT NULL,
  `reject_reason` varchar(255) NOT NULL,
  `action_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`id`, `uid`, `applied_by`, `leave_type`, `earned_for`, `from_date`, `to_date`, `reason`, `document_name`, `applied_on`, `status`, `reject_reason`, `action_date`, `timestamp`) VALUES
(1, 'leave_68284d475f8e67.22527171', 1, 'casual', NULL, '2025-05-24', '0000-00-00', 'Testing', '', '2025-05-17 08:48:07', 'in_review', '', '0000-00-00', '2025-05-17 08:48:07'),
(2, 'leave_68284def6aadd4.88937778', 3, 'casual', NULL, '2025-05-23', '0000-00-00', 'test for date', '', '2025-05-17 08:50:55', 'in_review', '', '0000-00-00', '2025-05-17 08:50:55'),
(3, 'leave_68284e6cd22325.90289893', 1, 'sick', NULL, '2025-05-16', '2025-05-16', 'not well', '', '2025-05-17 08:53:00', 'in_review', '', '0000-00-00', '2025-05-17 08:53:00'),
(4, 'leave_68284f62f04357.13712869', 1, 'emergency', NULL, '2025-05-01', '2025-05-03', 'test for  files uplaod', '20250517_1_Unit-12.pdf', '2025-05-17 08:57:06', 'in_review', '', '0000-00-00', '2025-05-17 08:57:06'),
(6, 'leave_68284f62f04357.1371268', 1, 'emergency', NULL, '2025-05-01', '2025-05-03', 'test for  files uplaod', '20250517_1_Unit-12.pdf', '2025-05-17 08:57:06', 'in_review', '', '0000-00-00', '2025-05-17 08:57:06'),
(7, 'leave_68284f62f04357.137268', 1, 'emergency', NULL, '2025-05-01', '2025-05-03', 'test for  files uplaod', '20250517_1_Unit-12.pdf', '2025-05-17 08:57:06', 'in_review', '', '0000-00-00', '2025-05-17 08:57:06');

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
(29, 1, 'login_request', 'completed', '2025-05-04 09:10:46', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(30, 1, 'login_request', 'completed', '2025-05-14 11:58:24', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_agencies`
--

CREATE TABLE `tbl_manage_agencies` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `agencies_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `person_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_builders`
--

CREATE TABLE `tbl_manage_builders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `builder_name` varchar(255) NOT NULL,
  `builder_contact` int(11) NOT NULL,
  `builder_email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_manage_builders`
--

INSERT INTO `tbl_manage_builders` (`id`, `uid`, `created_at`, `builder_name`, `builder_contact`, `builder_email`, `company_name`, `is_active`) VALUES
(1, 0, '2025-05-24 11:09:41', '    avc25', 1234567890, 'abc@gmail.com', '    vvcs3455    ', 'Yes'),
(19, 14, '2025-05-16 15:10:05', 'abc23', 1234567098, 'abc@gmail.com', 'vvcs3455', 'Yes'),
(43, 15, '2025-05-16 13:59:42', 'jbjfkbjf', 1234567096, 'abc@gmail.com', 'vvcs3455', 'Yes'),
(44, 16, '2025-05-16 12:29:56', 'jfjfwdf', 1234567096, 'abc@gmail.com', 'vvcs3455', 'Yes'),
(45, 17, '2025-05-16 14:02:33', 'hjfc', 1234567096, 'abctwdf@gmail.com', 'avcv', 'Yes'),
(46, 18, '2025-05-20 15:00:44', 'abc', 1234567096, 'abctwdf@gmail.com', 'avcv', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_competitors`
--

CREATE TABLE `tbl_manage_competitors` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `competitor_name` text NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_manage_competitors`
--

INSERT INTO `tbl_manage_competitors` (`id`, `uid`, `created_at`, `competitor_name`, `contact`, `email`, `company_name`, `is_active`) VALUES
(1, NULL, '2025-05-18 10:39:35', ' abc', 1234567891, 'abc@gmail.com', ' xyz', 'Yes'),
(3, 'competitor_6829a2727de0b1.68044309', '2025-05-18 10:27:44', '   abc2 ', 1234567892, 'abc2@gmail.com', '   xyz2 ', 'No'),
(4, 'competitor_6829b0948246b9.02878487', '2025-05-18 10:28:06', '  abc3', 1234567893, 'abc3@gmail.com', '  xyz3', 'No'),
(5, 'competitor_6829b88b44a142.76906855', '2025-05-18 10:39:17', 'abc4', 1234567894, 'abc4@gmail.com', 'xyz4', 'No'),
(6, 'competitor_6829b89e0832f0.06704787', '2025-05-18 10:38:22', 'abc4', 1234567894, 'abc4@gmail.com', 'xyz4', 'Yes'),
(7, 'competitor_6829b8caf06bd5.96056545', '2025-05-18 10:39:06', 'abc5', 1234567895, 'abc45@gmail.com', 'xyz5', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_landlord`
--

CREATE TABLE `tbl_manage_landlord` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `landlord_name` text NOT NULL,
  `contact_number` int(10) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_manage_landlord`
--

INSERT INTO `tbl_manage_landlord` (`id`, `uid`, `created_at`, `landlord_name`, `contact_number`, `is_active`, `email`) VALUES
(5, 5, '2025-05-17 08:53:27', 'angel', 1234567890, 'Yes', 'ghhr@gmail.com'),
(6, 19, '2025-05-17 08:57:31', 'abc', 2147483647, 'Yes', 'abc1@gmail.com'),
(20, 20, '2025-05-20 15:09:34', 'abc3', 2147483647, 'No', 'abc1@gmail.com'),
(21, 21, '2025-05-17 09:14:37', 'abc1', 2147483647, 'Yes', 'abc1@gmail.com'),
(22, 22, '2025-05-17 09:14:45', 'abc2', 2147483647, 'Yes', 'abc1@gmail.com'),
(23, 23, '2025-05-17 09:14:54', 'abc4', 2147483647, 'Yes', 'abc1@gmail.com'),
(24, 24, '2025-05-20 15:09:10', 'abc', 2147483647, 'Yes', 'aryanshirodkar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_property_type`
--

CREATE TABLE `tbl_manage_property_type` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `property_type_name` varchar(255) NOT NULL,
  `client_type` enum('Buyer','Seller') NOT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_reservation`
--

CREATE TABLE `tbl_manage_reservation` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reservation_name` text DEFAULT NULL,
  `status` enum('Pending','Cancelled','On-going','Completed') DEFAULT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_manage_reservation`
--

INSERT INTO `tbl_manage_reservation` (`id`, `uid`, `created_at`, `reservation_name`, `status`, `is_active`) VALUES
(18, 'reservation683979ab65a470.53695837', '2025-05-30 09:26:03', 'ABC', NULL, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting_history`
--

CREATE TABLE `tbl_meeting_history` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
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
(8, 'meet_683d47258c20c', '2025-06-02', '08:39:33', 4, 3, 'wdccc', NULL, NULL, NULL, NULL, NULL, NULL, 'Scheduled', '2025-06-02 06:39:33');

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
  `id` int(11) NOT NULL,
  `pinboard_id` int(11) NOT NULL,
  `pin_headline` varchar(255) NOT NULL,
  `pin_content` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `archive` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pin_board`
--

INSERT INTO `tbl_pin_board` (`id`, `pinboard_id`, `pin_headline`, `pin_content`, `created_on`, `archive`) VALUES
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
(21, 'prj_680f77ed89734', 'infotech', 1, 0, 2, 1, 'test', '2020-04-20', '2020-05-20', 'admin', '2025-04-28'),
(22, 'prj_680f780d1cc70', 'infotech2', 2, 1, 1, 1, 'm, ff msd fk', '2025-04-28', '2025-05-11', 'admin', '2025-04-28'),
(24, 'prj_68113dc2705e7', 'test 2', 3, 1, 2, 2, 'sdfgsfdgsdg', '2025-04-30', '2025-05-11', 'admin', '2025-04-30'),
(25, 'prj_68113ed38894b', 'test 3', 2, 0, 1, 2, 'asdcasdc', '2025-04-30', '2025-05-11', 'admin', '2025-04-30'),
(26, 'prj_6816093886f8f', 'Maitri Park', 3, 3, 2, 3, 'hdivdocaspovmsd', '2025-05-03', '2025-06-08', 'admin', '2025-05-03'),
(27, 'prj_68170d04d7144', 'New Project Dims', 1, 0, 1, 2, 'testing for new location in dims', '2025-05-04', '2025-05-11', 'admin', '2025-05-04'),
(28, 'prj_68170ec7c809e', 'dims x pms', 2, 3, 2, 1, 'lknscjksdno', '2025-05-04', '2025-05-11', 'admin', '2025-05-04'),
(29, 'prj_68397c96662a9', 'infotech5', 1, 0, 1, 1, 'xyz', '2025-05-15', '2025-05-17', 'admin', '2025-05-30'),
(30, 'prj_68397cea3bc09', 'abc', 1, 0, 1, 1, 'xyz', '2025-05-15', '2025-05-17', 'admin', '2025-05-30');

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
(21, 0, 28, '2025-05-04'),
(22, 3, 29, '2025-05-30'),
(23, 1, 29, '2025-05-30'),
(24, 3, 30, '2025-05-30'),
(25, 1, 30, '2025-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_status`
--

CREATE TABLE `tbl_project_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL,
  `bagde_color` enum('blue','black','yellow','green','red') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_status`
--

INSERT INTO `tbl_project_status` (`id`, `status_name`, `bagde_color`, `created_at`) VALUES
(1, 'On-Going', 'yellow', '2025-04-28 21:15:30'),
(2, 'Waiting', 'red', '2025-04-28 21:15:41'),
(3, 'Completed', 'green', '2025-04-28 21:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_task_status`
--

CREATE TABLE `tbl_project_task_status` (
  `id` int(100) NOT NULL,
  `project_id` int(100) DEFAULT NULL,
  `task_status_id` int(100) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_task_status`
--

INSERT INTO `tbl_project_task_status` (`id`, `project_id`, `task_status_id`, `creation_date`) VALUES
(1, 21, 1, '2025-05-14'),
(2, 21, 2, '2025-05-14'),
(3, 24, 3, '2025-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_type`
--

CREATE TABLE `tbl_project_type` (
  `id` int(100) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `type` varchar(256) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_type`
--

INSERT INTO `tbl_project_type` (`id`, `uid`, `type`, `created_at`) VALUES
(1, '1', 'Society website ', '2025-05-29'),
(2, '2', '79A\r\n', '2025-05-29'),
(3, '3', 'Internal Software', '2025-05-29');

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
-- Table structure for table `tbl_society`
--

CREATE TABLE `tbl_society` (
  `soc_id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `soc_name` varchar(255) DEFAULT NULL,
  `cts_no` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `taluka` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `holding_type` varchar(255) DEFAULT NULL,
  `total_units` int(11) DEFAULT NULL,
  `total_tenants` int(11) DEFAULT NULL,
  `as_per_physical` int(11) DEFAULT NULL,
  `as_per_card` int(11) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `scheme` varchar(255) DEFAULT NULL,
  `plot_holding_type` varchar(255) DEFAULT NULL,
  `reservation` varchar(255) DEFAULT NULL,
  `lead_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_details`
--

CREATE TABLE `tbl_society_details` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `society_name` varchar(255) NOT NULL,
  `ward` int(11) DEFAULT NULL,
  `unit` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soc_committee_details`
--

CREATE TABLE `tbl_soc_committee_details` (
  `committee_member_id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `soc_id` int(11) NOT NULL,
  `committee_member_name` varchar(255) NOT NULL,
  `committee_memeber_role` varchar(255) NOT NULL,
  `committee_member_phone` varchar(255) NOT NULL,
  `committee_member_email` varchar(255) NOT NULL,
  `term_start_date` date NOT NULL,
  `term_end_date` date NOT NULL,
  `reminder` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soc_members`
--

CREATE TABLE `tbl_soc_members` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `soc_id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `freehold` varchar(255) NOT NULL,
  `leasehold` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_source_details`
--

CREATE TABLE `tbl_source_details` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `source_name` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_source_details`
--

INSERT INTO `tbl_source_details` (`id`, `uid`, `created_at`, `source_name`, `is_active`) VALUES
(1, '12', '2025-05-21 13:43:36', 'abc', 'Yes'),
(2, '13', '2025-05-21 14:32:56', 'abc1ddg', 'Yes'),
(3, 'ward682dd8dcb64527.88729695', '2025-05-21 14:32:59', 'abc1', 'Yes'),
(4, 'ward682dd9aeb60d99.68008231', '2025-05-21 13:48:44', 'ererre', 'No');

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
  `project_id` int(11) DEFAULT NULL,
  `project_name` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `assigned_employee` int(100) DEFAULT NULL,
  `task_category` int(11) DEFAULT NULL,
  `status_id` int(100) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `tags` int(11) DEFAULT NULL,
  `image_path` varchar(256) DEFAULT NULL,
  `file_path` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tasks`
--

INSERT INTO `tbl_tasks` (`id`, `uid`, `title`, `description`, `project_id`, `project_name`, `start_date`, `end_date`, `assigned_employee`, `task_category`, `status_id`, `priority`, `tags`, `image_path`, `file_path`) VALUES
(1, '123', 'Sample Task 1', 'This is a test task', 28, 'dims x pms', NULL, NULL, 0, 1, 3, 1, NULL, NULL, NULL),
(2, NULL, 'Sample Task 2', 'This is another task', 28, 'dims x pms', NULL, NULL, 3, 2, 1, 2, NULL, NULL, NULL),
(3, NULL, 'Sample Task 3', 'This is also another task', 21, 'infotech', NULL, NULL, 0, 2, 1, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_emp`
--

CREATE TABLE `tbl_task_emp` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_status`
--

CREATE TABLE `tbl_task_status` (
  `id` int(100) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task_status`
--

INSERT INTO `tbl_task_status` (`id`, `name`, `creation_date`) VALUES
(1, 'Todo', '2025-05-14'),
(2, 'Progress', '2025-05-14'),
(3, 'Waiting', '2025-05-14'),
(4, 'Complete', '2025-05-14');

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
  `phone_no` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `registered_date` date DEFAULT NULL,
  `soc_company_name` varchar(255) DEFAULT NULL,
  `visitor_type` enum('Guest','Client','Vendor','Society Member') DEFAULT NULL,
  `designation` enum('Chairman','Secretary','Treasurer','Member') DEFAULT NULL,
  `number_accompanying_guests` int(11) DEFAULT NULL,
  `visit_purpose` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `uid`, `f_name`, `m_name`, `l_name`, `phone_no`, `email`, `address`, `img`, `registered_date`, `soc_company_name`, `visitor_type`, `designation`, `number_accompanying_guests`, `visit_purpose`, `timestamp`) VALUES
(1, 'visitor_6814e4b888426', 'Aryan', 'Nitin', 'Shirodkar', 2147483647, 'ans@gmail.com', '', 'visitor_1.jpg', '2025-05-02', NULL, NULL, NULL, NULL, NULL, '2025-05-02 15:28:56'),
(2, 'visitor_6815f2052cdfb', 'om', 'Pandey', 'Pandey', 2147483647, 'om@gmail.com', '', 'visitor_2.jpg', '2025-05-03', NULL, NULL, NULL, NULL, NULL, '2025-05-14 13:02:35'),
(3, 'visitor_68270285e0a88', 'Aryan', 'Nitin', 'Shirodkar', 2147483647, 'aryanshirodkar03@gmail.com', '', 'visitor_3.jpg', '2025-05-16', NULL, NULL, NULL, NULL, NULL, '2025-05-16 09:16:53'),
(4, 'visitor_683d47258a6d0', '', '', '', 1234567891, 'manya.veenagroup@gmail.com', '', 'visitor_4.jpg', '2025-06-02', NULL, NULL, NULL, NULL, NULL, '2025-06-02 06:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ward_details`
--

CREATE TABLE `tbl_ward_details` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ward_name` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ward_details`
--

INSERT INTO `tbl_ward_details` (`id`, `uid`, `created_at`, `ward_name`, `is_active`) VALUES
(11, 'ward682dccb8c20e04.98813824', '2025-05-21 12:56:37', 'abc456', 'Yes'),
(12, 'ward682dcd2fce5817.20579138', '2025-05-21 12:55:11', 'dbfbf', 'Yes'),
(13, 'ward682dcf03c023e5.03904259', '2025-05-21 13:07:00', 'jdjd', 'Yes'),
(14, 'ward682dd002cfd443.90485536', '2025-05-21 13:07:58', 'dddd', 'No'),
(15, 'ward682dd01c13b368.54016824', '2025-05-21 13:08:02', 'dfdfd', 'No'),
(16, 'ward682dd08d3d68d9.28000368', '2025-05-21 13:09:46', 'seses', 'Yes'),
(17, 'ward682dd0c72e5f35.09899529', '2025-05-21 13:12:31', 'dafa', 'Yes'),
(18, 'ward682dd135842da6.33886565', '2025-05-21 13:12:21', 'swsws', 'Yes'),
(19, 'ward682dd175a43059.06693459', '2025-05-21 13:13:42', 'hjhjjhj2356', 'No');

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
-- Indexes for table `tbl_landlord`
--
ALTER TABLE `tbl_landlord`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `tbl_leaves_emp_ref` (`applied_by`);

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
-- Indexes for table `tbl_manage_agencies`
--
ALTER TABLE `tbl_manage_agencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_manage_builders`
--
ALTER TABLE `tbl_manage_builders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_manage_competitors`
--
ALTER TABLE `tbl_manage_competitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_manage_landlord`
--
ALTER TABLE `tbl_manage_landlord`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_manage_property_type`
--
ALTER TABLE `tbl_manage_property_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_manage_reservation`
--
ALTER TABLE `tbl_manage_reservation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
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
  ADD PRIMARY KEY (`id`),
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
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `tbl_project_fk_tbl_client_id` (`project_client`),
  ADD KEY `tbl_project_fk_tbl_project_status` (`project_status`),
  ADD KEY `tbl_escape_pm` (`project_manager`) USING BTREE,
  ADD KEY `tbl_project_fk_tbl_project_type` (`project_type`);

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
-- Indexes for table `tbl_project_task_status`
--
ALTER TABLE `tbl_project_task_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_project_id` (`project_id`),
  ADD KEY `fk_task_status_id` (`task_status_id`);

--
-- Indexes for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_society`
--
ALTER TABLE `tbl_society`
  ADD PRIMARY KEY (`soc_id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `cts_no` (`cts_no`);

--
-- Indexes for table `tbl_society_details`
--
ALTER TABLE `tbl_society_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_soc_committee_details`
--
ALTER TABLE `tbl_soc_committee_details`
  ADD PRIMARY KEY (`committee_member_id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `soc_id` (`soc_id`);

--
-- Indexes for table `tbl_soc_members`
--
ALTER TABLE `tbl_soc_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_source_details`
--
ALTER TABLE `tbl_source_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

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
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `task_category` (`task_category`),
  ADD KEY `priority` (`priority`),
  ADD KEY `fk_task_emp_name` (`assigned_employee`);

--
-- Indexes for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_task_emp_fk_emp` (`emp_id`),
  ADD KEY `tbl_task_emp_fk_task` (`task_id`);

--
-- Indexes for table `tbl_task_status`
--
ALTER TABLE `tbl_task_status`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_ward_details`
--
ALTER TABLE `tbl_ward_details`
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
-- AUTO_INCREMENT for table `tbl_landlord`
--
ALTER TABLE `tbl_landlord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_manage_agencies`
--
ALTER TABLE `tbl_manage_agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_manage_builders`
--
ALTER TABLE `tbl_manage_builders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_manage_competitors`
--
ALTER TABLE `tbl_manage_competitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_manage_landlord`
--
ALTER TABLE `tbl_manage_landlord`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_manage_property_type`
--
ALTER TABLE `tbl_manage_property_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_manage_reservation`
--
ALTER TABLE `tbl_manage_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `tbl_pin_board`
--
ALTER TABLE `tbl_pin_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_project_status`
--
ALTER TABLE `tbl_project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_project_task_status`
--
ALTER TABLE `tbl_project_task_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_society`
--
ALTER TABLE `tbl_society`
  MODIFY `soc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_society_details`
--
ALTER TABLE `tbl_society_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_soc_committee_details`
--
ALTER TABLE `tbl_soc_committee_details`
  MODIFY `committee_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_soc_members`
--
ALTER TABLE `tbl_soc_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_source_details`
--
ALTER TABLE `tbl_source_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_status`
--
ALTER TABLE `tbl_task_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ward_details`
--
ALTER TABLE `tbl_ward_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD CONSTRAINT `tbl_files_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `tbl_folders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD CONSTRAINT `tbl_leaves_emp_ref` FOREIGN KEY (`applied_by`) REFERENCES `tbl_emp` (`id`);

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
  ADD CONSTRAINT `tbl_project_fk_tbl_client_id` FOREIGN KEY (`project_client`) REFERENCES `tbl_client` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_fk_tbl_project_status` FOREIGN KEY (`project_status`) REFERENCES `tbl_project_status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_fk_tbl_project_type` FOREIGN KEY (`project_type`) REFERENCES `tbl_project_type` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  ADD CONSTRAINT `tbl_project_emp_fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_emp_fk_project` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project_task_status`
--
ALTER TABLE `tbl_project_task_status`
  ADD CONSTRAINT `fk_project_id` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_task_status_id` FOREIGN KEY (`task_status_id`) REFERENCES `tbl_task_status` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`task_category`) REFERENCES `tbl_category` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_priority` FOREIGN KEY (`priority`) REFERENCES `tbl_priority` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_task_emp_name` FOREIGN KEY (`assigned_employee`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tasks_project` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_task_emp`
--
ALTER TABLE `tbl_task_emp`
  ADD CONSTRAINT `fk_emp_id` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_task_id` FOREIGN KEY (`task_id`) REFERENCES `tbl_tasks` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_task_tag`
--
ALTER TABLE `tbl_task_tag`
  ADD CONSTRAINT `fk_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tbl_tags` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tbl_task_id` FOREIGN KEY (`task_id`) REFERENCES `tbl_tasks` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
