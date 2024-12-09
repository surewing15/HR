-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 06:44 PM
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
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `employee_id` int(11) NOT NULL,
  `emp_first_name` varchar(255) NOT NULL,
  `emp_last_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_phone_number` varchar(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`employee_id`, `emp_first_name`, `emp_last_name`, `emp_email`, `emp_phone_number`, `department_id`, `created_at`, `updated_at`, `role`) VALUES
(9, 'pabs', 'test', 'pabs@gmail.com', '23232', 3, '2024-10-28 20:46:45', '2024-11-20 05:16:21', 'staff'),
(10, ' sherwin', 'aleonar', 'sherwin@gmail.com', '23232', 10, '2024-10-28 20:47:39', '2024-10-28 20:47:39', 'staff'),
(11, 'sherwin', 'aleonar', 'test@gmail.com', '00999', 8, '2024-10-28 12:54:24', '2024-10-28 12:54:24', 'faculty'),
(12, 'sherwin', 'aleonar', 'sherwin3@gmail.com', '0992992', 7, '2024-10-28 13:01:53', '2024-10-28 13:01:53', 'faculty'),
(13, 'sherwin', 'aleonar2', 'crim@gmail.com', '0992992', 16, '2024-10-28 13:02:57', '2024-10-28 13:02:57', 'staff'),
(14, 'test', 'sherwina', 'hm@gmail.com', '00999', 7, '2024-10-28 13:12:26', '2024-10-28 13:12:26', 'faculty'),
(15, 'aernest', 'babano', 'sad@gma', '00999', 14, '2024-10-28 20:09:51', '2024-10-28 20:09:51', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0855149d6f8538a9baad0f9226ad2b75', 'i:1;', 1733332755),
('0855149d6f8538a9baad0f9226ad2b75:timer', 'i:1733332755;', 1733332755),
('b6c25029ca112fcc46b2420e1ab3dc8f', 'i:1;', 1732247609),
('b6c25029ca112fcc46b2420e1ab3dc8f:timer', 'i:1732247609;', 1732247609),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1733750382),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1733750382;', 1733750382),
('rey123@gmail.com|127.0.0.1', 'i:1;', 1732247609),
('rey123@gmail.com|127.0.0.1:timer', 'i:1732247609;', 1732247609);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `personal_informations_id`, `name`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(55, 73, 'Lincolncel Compas Garcia', '2024-12-02', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(56, 74, 'John Rey Pabualan', '2024-12-06', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(57, 75, 'John Rey Pabualan', '2024-12-06', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(58, 76, 'John Rey Pabualan', '2024-12-06', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(59, 77, 'John Rey Pabualan', '2024-12-06', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `civil_service_eligibilities`
--

CREATE TABLE `civil_service_eligibilities` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `eligibility` varchar(255) NOT NULL,
  `rating` varchar(50) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_place` varchar(255) DEFAULT NULL,
  `license_number` varchar(50) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_service_eligibilities`
--

INSERT INTO `civil_service_eligibilities` (`id`, `personal_informations_id`, `eligibility`, `rating`, `exam_date`, `exam_place`, `license_number`, `release_date`, `created_at`, `updated_at`) VALUES
(55, 73, 'Professional', '89', '2024-12-03', 'Likod Ketkai', '012', '2024-12-04', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(56, 74, 'professional', '21', '2024-12-03', 'cagayan ketkai', '12344', '2024-12-09', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(57, 75, 'professional', '21', '2024-12-03', 'cagayan ketkai', '12344', '2024-12-09', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(58, 76, 'professional', '21', '2024-12-03', 'cagayan ketkai', '12344', '2024-12-09', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(59, 77, 'professional', '21', '2024-12-03', 'cagayan ketkai', '12344', '2024-12-09', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `educational_backgrounds`
--

CREATE TABLE `educational_backgrounds` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `level` enum('Elementary','Secondary','Vocational','College','Graduate') NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `degree_course` varchar(255) DEFAULT NULL,
  `period_from` year(4) DEFAULT NULL,
  `period_to` year(4) DEFAULT NULL,
  `highest_level_earned` varchar(255) DEFAULT NULL,
  `year_graduated` year(4) DEFAULT NULL,
  `academic_honors` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_backgrounds`
--

INSERT INTO `educational_backgrounds` (`id`, `personal_informations_id`, `level`, `school_name`, `degree_course`, `period_from`, `period_to`, `highest_level_earned`, `year_graduated`, `academic_honors`, `created_at`, `updated_at`) VALUES
(217, NULL, 'Elementary', 'VNMCS', 'N/A', '2006', '2012', 'N/A', '2012', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(218, NULL, 'Secondary', 'VNHS', 'N/A', '2013', '2016', 'N/A', '2017', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(219, NULL, 'Vocational', 'SITC', 'N/A', '2010', '2019', 'N/A', '2019', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(220, NULL, 'College', 'TCC', 'Bachelor Science of Information Technology', '2007', '2002', '4th yr', '2015', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(221, NULL, 'Elementary', 'VNMCS', 'e', '2006', '2012', 'N/A', '2012', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(222, NULL, 'Secondary', 'VNHS', 'N/A', '2013', '2016', 'N/A', '2017', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(223, NULL, 'Vocational', 'SITC', 'N/A', '2017', '2019', 'N/A', '2019', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(224, NULL, 'College', 'TCC', 'Bachelor Science of Information Technology', '2019', '2026', 'N/A', '2025', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(225, NULL, 'Elementary', 'VNMCS', 'e', '2006', '2012', 'N/A', '2012', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(226, NULL, 'Secondary', 'VNHS', 'N/A', '2013', '2016', 'N/A', '2017', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(227, NULL, 'Vocational', 'SITC', 'N/A', '2017', '2019', 'N/A', '2019', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(228, NULL, 'College', 'TCC', 'Bachelor Science of Information Technology', '2019', '2026', 'N/A', '2025', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(229, NULL, 'Elementary', 'VNMCS', 'e', '2006', '2012', 'N/A', '2012', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(230, NULL, 'Secondary', 'VNHS', 'N/A', '2013', '2016', 'N/A', '2017', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(231, NULL, 'Vocational', 'SITC', 'N/A', '2017', '2019', 'N/A', '2019', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(232, NULL, 'College', 'TCC', 'Bachelor Science of Information Technology', '2019', '2026', 'N/A', '2025', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(233, NULL, 'Elementary', 'VNMCS', 'e', '2006', '2012', 'N/A', '2012', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25'),
(234, NULL, 'Secondary', 'VNHS', 'N/A', '2013', '2016', 'N/A', '2017', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25'),
(235, NULL, 'Vocational', 'SITC', 'N/A', '2017', '2019', 'N/A', '2019', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25'),
(236, NULL, 'College', 'TCC', 'Bachelor Science of Information Technology', '2019', '2026', 'N/A', '2025', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_backgrounds`
--

CREATE TABLE `family_backgrounds` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `spouse_surname` varchar(100) DEFAULT NULL,
  `spouse_first_name` varchar(100) DEFAULT NULL,
  `spouse_middle_name` varchar(100) DEFAULT NULL,
  `spouse_name_extension` varchar(10) DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `spouse_employer` varchar(255) DEFAULT NULL,
  `spouse_business_address` text DEFAULT NULL,
  `spouse_telephone` varchar(50) DEFAULT NULL,
  `father_surname` varchar(100) NOT NULL,
  `father_first_name` varchar(100) NOT NULL,
  `father_middle_name` varchar(100) DEFAULT NULL,
  `father_name_extension` varchar(10) DEFAULT NULL,
  `mother_surname` varchar(100) NOT NULL,
  `mother_first_name` varchar(100) NOT NULL,
  `mother_middle_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_backgrounds`
--

INSERT INTO `family_backgrounds` (`id`, `personal_informations_id`, `spouse_surname`, `spouse_first_name`, `spouse_middle_name`, `spouse_name_extension`, `spouse_occupation`, `spouse_employer`, `spouse_business_address`, `spouse_telephone`, `father_surname`, `father_first_name`, `father_middle_name`, `father_name_extension`, `mother_surname`, `mother_first_name`, `mother_middle_name`, `created_at`, `updated_at`) VALUES
(67, 73, 'Garcia', 'Kline', 'Aleonar', 'Sr.', 'IT', 'SherwinTech', 'likodTCC', 'N/A', 'Garcia', 'Kline', 'Aleonar', 'Sr.', 'Compas', 'Armalyn', 'Maape', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(68, 74, 'aleonar', 'Enrique', 'Daclison', 'Jr.', 'Machinest', 'Rebisco Employee', 'Ala\'e Bukidnon', 'N/A', 'Pabualan', 'Enrique', 'Garcia', 'Sr', 'Pabate', 'Lilybeth', 'Nodalo', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(69, 75, 'aleonar', 'Enrique', 'Daclison', 'Jr.', 'Machinest', 'Rebisco Employee', 'Ala\'e Bukidnon', 'N/A', 'Pabualan', 'Enrique', 'Garcia', 'Sr', 'Pabate', 'Lilybeth', 'Nodalo', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(70, 76, 'aleonar', 'Enrique', 'Daclison', 'Jr.', 'Machinest', 'Rebisco Employee', 'Ala\'e Bukidnon', 'N/A', 'Pabualan', 'Enrique', 'Garcia', 'Sr', 'Pabate', 'Lilybeth', 'Nodalo', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(71, 77, 'aleonar', 'Enrique', 'Daclison', 'Jr.', 'Machinest', 'Rebisco Employee', 'Ala\'e Bukidnon', 'N/A', 'Pabualan', 'Enrique', 'Garcia', 'Sr', 'Pabate', 'Lilybeth', 'Nodalo', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learning_developments`
--

CREATE TABLE `learning_developments` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `hours` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `conducted_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learning_developments`
--

INSERT INTO `learning_developments` (`id`, `personal_informations_id`, `title`, `from_date`, `to_date`, `hours`, `type`, `conducted_by`, `created_at`, `updated_at`) VALUES
(5, 73, 'IT', '2024-12-20', '2024-12-26', 12, 'N/A', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(6, 74, 'IT', '2024-12-06', '2024-12-09', 22, 'Techtech', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(7, 75, 'IT', '2024-12-06', '2024-12-09', 22, 'Techtech', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(8, 76, 'IT', '2024-12-06', '2024-12-09', 22, 'Techtech', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(9, 77, 'IT', '2024-12-06', '2024-12-09', 22, 'Techtech', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `masterlist`
--

CREATE TABLE `masterlist` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL COMMENT '\r\n',
  `first_name` varchar(100) NOT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `contact_information` varchar(50) NOT NULL,
  `employment_status` enum('Job Order','Permanent','Contract of Service') NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `job_type` enum('faculty','Staff') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterlist`
--

INSERT INTO `masterlist` (`id`, `employee_id`, `full_name`, `last_name`, `first_name`, `middle_initial`, `contact_information`, `employment_status`, `job_title`, `department`, `job_type`, `created_at`, `updated_at`) VALUES
(306, 'F202412001', 'John P. Pabualaan', 'Pabualaan', 'John', 'P', 'Pabualan@gmail.com', 'Job Order', 'Manager', 'College of Information Technology', 'faculty', '2024-12-09 07:58:13', '2024-12-09 07:58:13'),
(307, 'F202412002', 'Ernest A. Adane', 'Adane', 'Ernest', 'A', 'adane@gmail.com', 'Job Order', 'It', 'College of Criminal Justice & Public Safety', 'faculty', '2024-12-09 08:03:52', '2024-12-09 08:03:52'),
(308, 'S202412001', 'Kline Q. Garcia', 'Garcia', 'Kline', 'Q', 'Kline@gmail.com', 'Permanent', 'It', 'College of Library Information Science', 'Staff', '2024-12-09 08:04:19', '2024-12-09 08:04:19'),
(309, 'S202412002', 'Armalyn C. Compas', 'Compas', 'Armalyn', 'C', 'Armalyn@gmail.com', 'Permanent', 'Designer', 'College of Midwifery', 'Staff', '2024-12-09 08:04:59', '2024-12-09 08:04:59'),
(310, 'F202412003', 'Aleonar P. Test', 'Test', 'Aleonar', 'P', 'sherwin.aleonar@gmail.com', 'Permanent', 'Manager', 'College of Criminal Justice & Public Safety', 'faculty', '2024-12-09 08:16:15', '2024-12-09 08:16:15'),
(311, 'F202412004', 'John Rey P. Test', 'Test', 'John Rey', 'P', 'Pabualan.johnrey@gmail.com', 'Contract of Service', 'It', 'College of Information Technology', 'faculty', '2024-12-09 08:16:46', '2024-12-09 08:16:46'),
(312, 'F2024120022', 'Juan Z. Dela Cruz', 'Dela Cruz', 'Juan', 'Z', 'tes1t@gmail.com', 'Job Order', 'Maintenance', 'Engineering', 'faculty', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(313, 'F202412005', 'Rosa H. Torres', 'Torres', 'Rosa', 'H', 'tes1t@gmail.com', 'Permanent', 'Office Staff', 'Engineering', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(314, 'F202412006', 'Carlos X. Morales', 'Morales', 'Carlos', 'X', 'tes1t@gmail.com', 'Job Order', 'Instructor', 'Transport', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(315, 'F202412007', 'Pedro R. Gutierrez', 'Gutierrez', 'Pedro', 'R', 'tes1t@gmail.com', 'Permanent', 'Architect', 'Education', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(316, 'F202412008', 'Maria W. Rivera', 'Rivera', 'Maria', 'W', 'tes1t@gmail.com', 'Job Order', 'Librarian', 'Administration', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(317, 'F202412009', 'Ramon O. Santos', 'Santos', 'Ramon', 'O', 'tes1t@gmail.com', 'Job Order', 'Architect', 'Security', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09'),
(318, 'F202412010', 'Carmen M. Dela Cruz', 'Dela Cruz', 'Carmen', 'M', 'tes1t@gmail.com', 'Permanent', 'Utility', 'Education', 'Staff', '2024-12-09 08:25:09', '2024-12-09 08:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_21_065349_add_two_factor_columns_to_users_table', 1),
(5, '2024_10_21_065441_create_personal_access_tokens_table', 1),
(6, '2024_10_11_113404_create_personal_information_table', 2),
(7, '2024_10_11_115434_create_parent_information_table', 2),
(8, '2024_10_11_115720_create_children_information_table', 2),
(9, '2024_10_11_115818_create_education_background_table', 2),
(10, '2024_10_11_115936_create_civil_service_eligibility_table', 2),
(11, '2024_10_11_120058_create_work_experience_table', 2),
(12, '2024_10_11_120227_create_voluntary_work_table', 2),
(13, '2024_10_11_122116_create_other_information_table', 2),
(14, '2024_10_11_122155_create_spouse_information_table', 2),
(15, '2024_10_11_122257_create_training_programs_attended_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE `other_information` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `special_skills` text DEFAULT NULL,
  `distinctions` text DEFAULT NULL,
  `membership` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_information`
--

INSERT INTO `other_information` (`id`, `personal_informations_id`, `special_skills`, `distinctions`, `membership`, `created_at`, `updated_at`) VALUES
(5, NULL, 'N/A', 'N/A', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(6, NULL, 'N/A', 'N/A', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(7, NULL, 'N/A', 'N/A', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(8, NULL, 'N/A', 'N/A', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(9, NULL, 'N/A', 'N/A', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_informations`
--

CREATE TABLE `personal_informations` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(10) DEFAULT NULL,
  `surname` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `name_extension` varchar(10) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `civil_status` enum('Single','Married','Widowed','Separated') NOT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `gsis_no` varchar(50) DEFAULT NULL,
  `pagibig_no` varchar(50) DEFAULT NULL,
  `philhealth_no` varchar(50) DEFAULT NULL,
  `sss_no` varchar(50) DEFAULT NULL,
  `tin_no` varchar(50) DEFAULT NULL,
  `agency_employee_no` varchar(50) DEFAULT NULL,
  `citizenship` enum('Filipino','Dual Citizenship') NOT NULL,
  `citizenship_type` enum('by birth','by naturalization') DEFAULT NULL,
  `residential_address` text NOT NULL,
  `residential_zip_code` varchar(10) DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `permanent_zip_code` varchar(10) DEFAULT NULL,
  `telephone_no` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_informations`
--

INSERT INTO `personal_informations` (`id`, `employee_id`, `surname`, `first_name`, `middle_name`, `name_extension`, `date_of_birth`, `place_of_birth`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_no`, `pagibig_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_employee_no`, `citizenship`, `citizenship_type`, `residential_address`, `residential_zip_code`, `permanent_address`, `permanent_zip_code`, `telephone_no`, `mobile_no`, `email`, `created_at`, `updated_at`) VALUES
(73, '', 'garcia', 'kleon', 'compas', 'jr.', '2024-12-01', 'likod SBC', 'Male', 'Single', 2.00, 4.00, 'Z+', '1231', '1233', '1232', '1234', '1235', '12', 'Filipino', 'by birth', 'SBC', '0001', 'SBCS', '0001', 'N/A', '0909090923', 'judyway27@gmail.com', '2024-12-06 06:24:52', '2024-12-09 16:27:35'),
(74, 'EMP001', 'pabualan', 'john rey', 'pabate', 'N/A', '2024-12-09', 'cagayan de oro', 'Male', 'Single', 2.00, 3.00, 'b+', '1234', '34534', '123345', '8777', '12343', '8777', 'Filipino', NULL, 'seaside poblacion Uno, Villanueva Misamis Oriental', '9001', 'Seaside Poblacion 1, Villanueva Misamis Oriental', '9002', '22222', '09558230992', 'ampalayohanjudy12@gmail.com', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(75, 'EMP001', 'pabualan', 'john rey', 'pabate', 'N/A', '2024-12-09', 'cagayan de oro', 'Male', 'Single', 2.00, 3.00, 'b+', '1234', '34534', '123345', '8777', '12343', '8777', 'Filipino', NULL, 'seaside poblacion Uno, Villanueva Misamis Oriental', '9001', 'Seaside Poblacion 1, Villanueva Misamis Oriental', '9002', '22222', '09558230992', 'ampalayohanjudy12@gmail.com', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(76, 'EMP001', 'pabualan', 'john rey', 'pabate', 'N/A', '2024-12-09', 'cagayan de oro', 'Male', 'Single', 2.00, 3.00, 'b+', '1234', '34534', '123345', '8777', '12343', '8777', 'Filipino', NULL, 'seaside poblacion Uno, Villanueva Misamis Oriental', '9001', 'Seaside Poblacion 1, Villanueva Misamis Oriental', '9002', '22222', '09558230992', 'ampalayohanjudy12@gmail.com', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(77, 'EMP001', 'pabualan', 'john rey', 'pabate', 'N/A', '2024-12-09', 'cagayan de oro', 'Male', 'Single', 2.00, 3.00, 'b+', '1234', '34534', '123345', '8777', '12343', '8777', 'Filipino', NULL, 'seaside poblacion Uno, Villanueva Misamis Oriental', '9001', 'Seaside Poblacion 1, Villanueva Misamis Oriental', '9002', '22222', '09558230992', 'ampalayohanjudy12@gmail.com', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c16sCxhXLKZsdeT2wZPWLyrkfc7Stqff36HxDKhm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNDdXOGUxOHZxalBYR1JqUk9hekZWWmpKVkYxdW1uaGQyaG5qTnRjVyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcmFua3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJE9YMlo4NWp0bXE3SVRLVjA4eTZ3emVBNGZGU1Z4Q1dyU1pudTByRkRHZW52MWp1QkRaeE5LIjt9', 1733765140);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coe_req`
--

CREATE TABLE `tbl_coe_req` (
  `coe_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `DateStarted` date DEFAULT NULL,
  `MonthlyCompensationText` varchar(100) DEFAULT NULL,
  `MonthlyCompensationDigits` decimal(10,2) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_coe_req`
--

INSERT INTO `tbl_coe_req` (`coe_id`, `FirstName`, `LastName`, `Email`, `Position`, `DateStarted`, `MonthlyCompensationText`, `MonthlyCompensationDigits`, `updated_at`, `created_at`) VALUES
(1, 'John Smith', 'aleonar', 'sherwin@gmail.com', 'ss', '2024-11-06', 'ssd', 33.00, '2024-11-15 23:25:44', '2024-11-15 23:25:44'),
(3, 'John', 'Smith', 'sherwin1@gmail.com', 'Manage', '2024-11-16', 'Thousandsmoney', 1000.00, '2024-11-16 08:06:40', '2024-11-16 00:01:54'),
(4, 'sherwin Victor', 'Aleonar', 'test@gmail.com', 'Manage', '2024-11-18', 'Thousandsssssss', 1000.00, '2024-11-16 20:24:06', '2024-11-16 20:24:06'),
(5, 'john', 'pabualan rey', 'johnreypabualan@gmail.com', 'Driver', '2003-03-01', 'one hundred thousands', 100.00, '2024-11-19 20:58:59', '2024-11-19 20:58:59'),
(9, 'john ernest', 'adane', 'ernest@gmail.com', 'Biker', '2005-05-01', 'one piso', 1.00, '2024-11-19 21:01:41', '2024-11-19 21:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `department_id` int(11) NOT NULL,
  `depart_name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('staff','faculty') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`department_id`, `depart_name`, `updated_at`, `created_at`, `role`) VALUES
(1, 'College of Information Technology', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(2, 'College of Criminal Justice & Public Safety', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(3, 'College of Library Information Science', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(4, 'College of Midwifery', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(5, 'College of Engineering Technology', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(6, 'College of Education', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(7, 'College of Hospitality Management', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(8, 'College of Arts and Science', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(9, 'College of Business Administration', '2024-10-29 02:00:00', '2024-10-29 00:00:00', 'faculty'),
(10, 'UTILITY', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(11, 'WATCH MAN', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(12, 'DRIVER', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(13, 'OFFICE STAFF', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(14, 'PROFESSIONALS', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(15, 'ARCHITECT', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(16, 'MAINTENANCE', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(17, 'LIBRARIAN', '2024-10-29 00:00:00', '2024-10-29 00:00:00', 'staff'),
(18, 'Select Staff', '2024-10-28 20:05:50', '2024-10-28 20:05:24', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_acc`
--

CREATE TABLE `tbl_employee_acc` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `id` int(11) NOT NULL,
  `masterlist_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `current_qua` varchar(225) NOT NULL,
  `current_rank` varchar(255) NOT NULL,
  `updated_field` varchar(255) DEFAULT NULL,
  `updated_qua` varchar(255) DEFAULT NULL,
  `updated_rank` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id`, `masterlist_id`, `field`, `current_qua`, `current_rank`, `updated_field`, `updated_qua`, `updated_rank`, `created_at`, `updated_at`) VALUES
(10, 306, '', '', '', 'test01', 'test022', 'Assistant Professor I', '2024-12-09 17:20:51', '2024-12-09 09:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `training_programs_attended`
--

CREATE TABLE `training_programs_attended` (
  `training_programs_id` bigint(20) NOT NULL,
  `training_programs` varchar(100) NOT NULL,
  `number_of_hours` varchar(10) NOT NULL,
  `conducted_sponsored_by` varchar(100) NOT NULL,
  `inclusive_date_of_attendance` varchar(20) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$OX2Z85jtmq7ITKV08y6wzeA4fFSVxCWrSZnu0rFDGenv1juBDZxNK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 00:41:25', '2024-10-21 00:41:25'),
(2, 'employee', 'employee@gmail.com', 'user', NULL, '$2y$12$CQIqC9f8Noxul6U4ogWXGeUq.r3Ki.31ZKJJ8.egIF0SlWHGPuPYW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-21 00:42:27', '2024-10-21 00:42:27'),
(4, 'Admin', 'admin@gmail.comss', 'user', NULL, '$2y$12$09BsecQkDuYRzGLuCXb/c.A7Z31GZmNLbzW.kqZmHQvJ0tp6dHM6u', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-29 11:05:34', '2024-10-29 11:05:34'),
(5, 'employee', 'employee@gmail.comss', 'user', NULL, '$2y$12$2VTU7ZJ/LEXDFPEkKWA3fOuoCW6XEDbnFYzGC.oPE1lbDrAuT/TCi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-29 11:05:34', '2024-10-29 11:05:34'),
(6, 'testpabs1', 'testpabs1@gmail.com', 'user', NULL, '$2y$12$UgSD9Qq5jS3jjSoacMbaGuU7nn.CwOLXJzj6Uji5wg0vRRcCLR5R6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-19 20:46:14', '2024-11-19 20:46:14'),
(7, 'janrey1234', 'pabstest@gmail.com', 'user', NULL, '$2y$12$49TfhIFal/G65tTDa96.O.MqNDdhkNw778YGmK807RPpUIkcXhW0i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-21 05:10:43', '2024-11-21 05:10:43'),
(8, 'testestest', 'testest123@gmail.com', 'user', NULL, '$2y$12$h5ZJCawvNrr3nge4nkn8xePk.MguBBIEBI6rsoZLeFRZQ.TTLBREi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-21 20:02:41', '2024-11-21 20:02:41'),
(9, 'clowny', 'clowny123@gmail.com', 'user', NULL, '$2y$12$J2VSCrVyZVmMOhRkd.DnVOCx.2nI23tJ9dM1Uovm2K2cDhbRRA.oi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-24 22:54:40', '2024-11-24 22:54:40'),
(10, 'john mark', 'johmamamark@gmail.com', 'user', NULL, '$2y$12$NoWSD5ogdFg0gJeyyvBr6eJ0yOHmK1S/bnJL.hdyjT55tZGtknC3i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-27 22:29:22', '2024-11-27 22:29:22'),
(11, 'janjanjan', 'john@gmail.com', 'user', NULL, '$2y$12$AcP0ngZT1sno.MaUmELWaOWSwAYYcAEFwF/i2U/JyfNPBxkRguzUy', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-03 22:15:40', '2024-12-03 22:15:40'),
(12, 'sherwin', 'sherwin@gmail.com', 'user', NULL, '$2y$12$ZBaMRY8ypKMLBiBo7cszV.RB/gxTub6TAxG3lp/eSTfN6cLK6pyL6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-04 09:05:02', '2024-12-04 09:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_works`
--

CREATE TABLE `voluntary_works` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `organization_address` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `hours` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voluntary_works`
--

INSERT INTO `voluntary_works` (`id`, `personal_informations_id`, `organization_name`, `organization_address`, `from_date`, `to_date`, `hours`, `position`, `created_at`, `updated_at`) VALUES
(11, 73, 'IT', 'N/A', '2024-12-09', '2024-12-12', 12, 'Top', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(12, 74, 'Ambot sa kaha', 'N/A', '2024-12-04', '2024-12-09', 22, 'Top', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(13, 75, 'Ambot sa kaha', 'N/A', '2024-12-04', '2024-12-09', 22, 'Top', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(14, 76, 'Ambot sa kaha', 'N/A', '2024-12-04', '2024-12-09', 22, 'Top', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(15, 77, 'Ambot sa kaha', 'N/A', '2024-12-04', '2024-12-09', 22, 'Top', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` int(11) NOT NULL,
  `personal_informations_id` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `position_title` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `monthly_salary` decimal(10,2) NOT NULL,
  `salary_grade` varchar(50) DEFAULT NULL,
  `status_of_appointment` varchar(100) DEFAULT NULL,
  `govt_service` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `personal_informations_id`, `from_date`, `to_date`, `position_title`, `department`, `monthly_salary`, `salary_grade`, `status_of_appointment`, `govt_service`, `created_at`, `updated_at`) VALUES
(39, 73, '2024-12-06', '2024-12-06', 'N/A', 'N/A', 0.00, 'N/A', 'N/A', 'N/A', '2024-12-06 06:24:52', '2024-12-06 06:24:52'),
(40, 74, '2024-12-09', '2024-12-09', 'N/A', 'N/A', 0.00, 'N/A', 'N/A', 'N/A', '2024-12-09 05:32:06', '2024-12-09 05:32:06'),
(41, 75, '2024-12-09', '2024-12-09', 'N/A', 'N/A', 0.00, 'N/A', 'N/A', 'N/A', '2024-12-09 05:32:46', '2024-12-09 05:32:46'),
(42, 76, '2024-12-09', '2024-12-09', 'N/A', 'N/A', 0.00, 'N/A', 'N/A', 'N/A', '2024-12-09 05:35:36', '2024-12-09 05:35:36'),
(43, 77, '2024-12-09', '2024-12-09', 'N/A', 'N/A', 0.00, 'N/A', 'N/A', 'N/A', '2024-12-09 05:37:25', '2024-12-09 05:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `emp_email` (`emp_email`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `civil_service_eligibilities`
--
ALTER TABLE `civil_service_eligibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_developments`
--
ALTER TABLE `learning_developments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `masterlist`
--
ALTER TABLE `masterlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD KEY `idx_employee_id` (`employee_id`),
  ADD KEY `idx_department` (`department`),
  ADD KEY `idx_employment_status` (`employment_status`),
  ADD KEY `idx_job_title` (`job_title`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_information`
--
ALTER TABLE `other_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_informations`
--
ALTER TABLE `personal_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_coe_req`
--
ALTER TABLE `tbl_coe_req`
  ADD PRIMARY KEY (`coe_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_employee_acc`
--
ALTER TABLE `tbl_employee_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masterlist_id` (`masterlist_id`);

--
-- Indexes for table `training_programs_attended`
--
ALTER TABLE `training_programs_attended`
  ADD PRIMARY KEY (`training_programs_id`),
  ADD KEY `training_programs_attended_person_id_foreign` (`person_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voluntary_works`
--
ALTER TABLE `voluntary_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_informations_id` (`personal_informations_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `civil_service_eligibilities`
--
ALTER TABLE `civil_service_eligibilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_developments`
--
ALTER TABLE `learning_developments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masterlist`
--
ALTER TABLE `masterlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `other_information`
--
ALTER TABLE `other_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_informations`
--
ALTER TABLE `personal_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_coe_req`
--
ALTER TABLE `tbl_coe_req`
  MODIFY `coe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_employee_acc`
--
ALTER TABLE `tbl_employee_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `voluntary_works`
--
ALTER TABLE `voluntary_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD CONSTRAINT `add_employee_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `tbl_departments` (`department_id`);

--
-- Constraints for table `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `children_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `civil_service_eligibilities`
--
ALTER TABLE `civil_service_eligibilities`
  ADD CONSTRAINT `civil_service_eligibilities_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  ADD CONSTRAINT `educational_backgrounds_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  ADD CONSTRAINT `family_backgrounds_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `learning_developments`
--
ALTER TABLE `learning_developments`
  ADD CONSTRAINT `learning_developments_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `other_information`
--
ALTER TABLE `other_information`
  ADD CONSTRAINT `other_information_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD CONSTRAINT `tbl_ranking_ibfk_1` FOREIGN KEY (`masterlist_id`) REFERENCES `masterlist` (`id`);

--
-- Constraints for table `training_programs_attended`
--
ALTER TABLE `training_programs_attended`
  ADD CONSTRAINT `training_programs_attended_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `personal_information` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `voluntary_works`
--
ALTER TABLE `voluntary_works`
  ADD CONSTRAINT `voluntary_works_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);

--
-- Constraints for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD CONSTRAINT `work_experiences_ibfk_1` FOREIGN KEY (`personal_informations_id`) REFERENCES `personal_informations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
