-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2025 at 06:04 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schhol_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_tbl`
--

CREATE TABLE `about_us_tbl` (
  `about_us_tbl_pr_at_iddd` int NOT NULL,
  `about_full_titlesss` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `about_image_srccc` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `about_full_des_cription_ssss` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `about_creating_timingsss` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `about_creating_datessss` varchar(80) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `cr_insrt_times` varchar(80) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_list_s`
--

CREATE TABLE `class_list_s` (
  `class_list_s_unq_idsa` int NOT NULL,
  `class_names` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `class_no` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `class_details` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_setting`
--

CREATE TABLE `home_page_setting` (
  `home_page_id` int NOT NULL,
  `school_name` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `school_phone_no` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `school_address_full` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `start_times` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `end_times` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `school_email_addressss` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `school_phone_02` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `principle_speach_full` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `prince_name` varchar(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `another_person_name` varchar(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `another_person_speach` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `campus_google_location_full` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `campus_maps_lat_lan` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_panel`
--

CREATE TABLE `login_panel` (
  `login_panel_uniq_iddddd` int NOT NULL,
  `user_names` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `pass_word_s` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `full_names_info` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `create_timing` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_campus`
--

CREATE TABLE `our_campus` (
  `our_campus_ato_unq_iddds` int NOT NULL,
  `sidebar_tabss_idd` varchar(5) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `campus_image_srcc` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `campus_commentsss` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_campus_tabsss`
--

CREATE TABLE `our_campus_tabsss` (
  `our_campus_tabsss_auto_iddd` int NOT NULL,
  `tabs_namesss` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `tabs_descssss` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_lists`
--

CREATE TABLE `student_lists` (
  `student_lists_iddas` int NOT NULL,
  `student_names` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `std_father` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `std_mother` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `std_class_autunq_id` int DEFAULT NULL,
  `std_full_address` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `std_roll_no` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `std_birth_reg_no` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `std_date_of_birth` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `gardian_mobile_no` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `insrt_timess` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_list`
--

CREATE TABLE `tbl_slider_list` (
  `tbl_slider_list_auto_iddd` int NOT NULL,
  `slider_names` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `slider_desc` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `slider_imagess` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `slider_serialss` varchar(5) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_list`
--

CREATE TABLE `teacher_list` (
  `teacher_list_unq_iddds` int NOT NULL,
  `teacher_full_names` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_designation` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_imagesss` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_department` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_subjectss` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_education` varchar(220) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `teacher_join_date` varchar(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `create_timess` varchar(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_tbl`
--
ALTER TABLE `about_us_tbl`
  ADD PRIMARY KEY (`about_us_tbl_pr_at_iddd`);

--
-- Indexes for table `class_list_s`
--
ALTER TABLE `class_list_s`
  ADD PRIMARY KEY (`class_list_s_unq_idsa`);

--
-- Indexes for table `home_page_setting`
--
ALTER TABLE `home_page_setting`
  ADD PRIMARY KEY (`home_page_id`);

--
-- Indexes for table `login_panel`
--
ALTER TABLE `login_panel`
  ADD PRIMARY KEY (`login_panel_uniq_iddddd`);

--
-- Indexes for table `our_campus`
--
ALTER TABLE `our_campus`
  ADD PRIMARY KEY (`our_campus_ato_unq_iddds`);

--
-- Indexes for table `our_campus_tabsss`
--
ALTER TABLE `our_campus_tabsss`
  ADD PRIMARY KEY (`our_campus_tabsss_auto_iddd`);

--
-- Indexes for table `student_lists`
--
ALTER TABLE `student_lists`
  ADD PRIMARY KEY (`student_lists_iddas`);

--
-- Indexes for table `tbl_slider_list`
--
ALTER TABLE `tbl_slider_list`
  ADD PRIMARY KEY (`tbl_slider_list_auto_iddd`);

--
-- Indexes for table `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`teacher_list_unq_iddds`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_tbl`
--
ALTER TABLE `about_us_tbl`
  MODIFY `about_us_tbl_pr_at_iddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_list_s`
--
ALTER TABLE `class_list_s`
  MODIFY `class_list_s_unq_idsa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_setting`
--
ALTER TABLE `home_page_setting`
  MODIFY `home_page_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_panel`
--
ALTER TABLE `login_panel`
  MODIFY `login_panel_uniq_iddddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_campus`
--
ALTER TABLE `our_campus`
  MODIFY `our_campus_ato_unq_iddds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_campus_tabsss`
--
ALTER TABLE `our_campus_tabsss`
  MODIFY `our_campus_tabsss_auto_iddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_lists`
--
ALTER TABLE `student_lists`
  MODIFY `student_lists_iddas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_slider_list`
--
ALTER TABLE `tbl_slider_list`
  MODIFY `tbl_slider_list_auto_iddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `teacher_list_unq_iddds` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
