-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2017 at 03:00 AM
-- Server version: 10.1.26-MariaDB-1
-- PHP Version: 7.0.22-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minutegen`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `minute_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `minute_id`, `member_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `external_board`
--

CREATE TABLE `external_board` (
  `id` int(11) NOT NULL,
  `lower_board_active` bit(1) DEFAULT NULL,
  `lower_board_name` varchar(45) DEFAULT NULL,
  `lower_board_domain` varchar(45) DEFAULT NULL,
  `higher_board_active` bit(1) DEFAULT NULL,
  `higher_board_name` varchar(45) DEFAULT NULL,
  `higher_board_domain` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `external_log`
--

CREATE TABLE `external_log` (
  `id` int(11) NOT NULL,
  `external_matter_id` int(11) DEFAULT NULL,
  `log_message` varchar(1000) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `is_sent` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `external_matter`
--

CREATE TABLE `external_matter` (
  `id` int(11) NOT NULL,
  `board_id` int(11) DEFAULT NULL,
  `external_matter_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `matter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `matter`
--

CREATE TABLE `matter` (
  `id` int(11) NOT NULL,
  `matter_index` varchar(45) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `minute_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `matter_state_id` int(11) DEFAULT NULL,
  `is_external` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matter`
--

INSERT INTO `matter` (`id`, `matter_index`, `title`, `content`, `minute_id`, `section_id`, `matter_state_id`, `is_external`) VALUES
(1, '129.2.1', 'Title of the matter 129.2.1', 'Here is the content of the matter 129.2.1', 1, 1, 2, b'0'),
(2, '129.2.2', 'Title of the matter 129.2.2', 'Here is the content of the matter 129.2.2', 2, 2, 3, b'0'),
(3, '129.2.3', 'Title of the matter 129.2.3', 'Here is the content of the matter 129.2.3', 2, 2, 4, b'0'),
(4, '129.2.4', 'Title of the matter 129.2.4', 'Here is the content of the matter 129.2.4', 1, 1, 1, b'1'),
(5, '130.4.5', 'Title of the matter 130.4.5', 'Here is the content of the matter 130.4.5', 1, 1, 2, b'1'),
(6, '130.4.6', 'Title of the matter 130.4.6', 'Here is the content of the matter 130.4.6', 1, 1, 3, b'1'),
(7, '130.4.7', 'Title of the matter 130.4.7', 'Here is the content of the matter 130.4.7', 1, 1, 4, b'1'),
(8, '130.4.8', 'Title of the matter 130.4.8', 'Here is the content of the matter 130.4.8', 1, 1, 1, b'1'),
(9, '130.4.9', 'Title of the matter 130.4.9', 'Here is the content of the matter 130.4.9', 1, 1, 2, b'1'),
(10, '130.4.10', 'Title of the matter 130.4.10', 'Here is the content of the matter 130.4.10', 1, 1, 3, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `matter_log`
--

CREATE TABLE `matter_log` (
  `id` int(11) NOT NULL,
  `matter_id` int(11) DEFAULT NULL,
  `log_message` varchar(1000) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matter_log`
--

INSERT INTO `matter_log` (`id`, `matter_id`, `log_message`, `datetime`) VALUES
(13, 4, 'log msg', '2018-01-01 00:24:00'),
(14, 5, 'log msg', '2018-01-01 00:24:00'),
(15, 5, 'log msg', '2016-01-01 00:24:00'),
(16, 3, 'log msg', '2016-01-01 00:24:00'),
(17, 6, 'log msg', '2016-01-01 00:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `matter_state`
--

CREATE TABLE `matter_state` (
  `id` int(11) NOT NULL,
  `state` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matter_state`
--

INSERT INTO `matter_state` (`id`, `state`) VALUES
(1, 'DEFAULT'),
(2, 'APPROVED'),
(3, 'REJECTED'),
(4, 'HOLD');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `registration_no` varchar(45) DEFAULT NULL,
  `member_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `first_name`, `last_name`, `username`, `password`, `nic`, `gender`, `address`, `email`, `phone`, `registration_no`, `member_type_id`) VALUES
(1, 'Member', '01', 'member01', 'm1', '123123123V', 'M', 'No. 100, Rohana', 'abs@gmail.com', '123465897', 'xxxx', 1),
(2, 'Member', '02', 'member02', '02', '234234234V', 'F', '43, Colombo', 'bb@gmail.com', '98764312', 'yyyy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member_type`
--

CREATE TABLE `member_type` (
  `id` int(11) NOT NULL,
  `member_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_type`
--

INSERT INTO `member_type` (`id`, `member_type_name`) VALUES
(1, 'Admin'),
(2, 'Lecturer'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `attachment` varchar(45) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `matter_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `minute`
--

CREATE TABLE `minute` (
  `id` int(11) NOT NULL,
  `minute_index` varchar(45) DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minute`
--

INSERT INTO `minute` (`id`, `minute_index`, `state`, `datetime`, `start_time`, `end_time`) VALUES
(1, '129', 1, '2016-01-01 00:00:00', '2017-01-01 11:55:00', '2017-01-01 12:55:00'),
(2, '130', 0, '2016-02-05 00:00:00', '2016-02-05 15:00:00', '2016-02-05 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(45) DEFAULT NULL,
  `section_index` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `section_index`) VALUES
(1, 'Sec 01', 1),
(2, 'Sec 02', 2),
(3, 'Any Other Business I', 3),
(4, 'Any Other Business II', 4);

-- --------------------------------------------------------

--
-- Table structure for table `section_privilage`
--

CREATE TABLE `section_privilage` (
  `id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `member_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `id` int(11) NOT NULL,
  `system_log_type_id` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `log_user` varchar(45) DEFAULT NULL,
  `is_success` bit(1) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system_log_type`
--

CREATE TABLE `system_log_type` (
  `id` int(11) NOT NULL,
  `text` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_attendance_minute1_idx` (`minute_id`),
  ADD KEY `fk_attendance_member1_idx` (`member_id`);

--
-- Indexes for table `external_board`
--
ALTER TABLE `external_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_log`
--
ALTER TABLE `external_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_external_log_external_matter1_idx` (`external_matter_id`);

--
-- Indexes for table `external_matter`
--
ALTER TABLE `external_matter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matter_in_board1_idx` (`board_id`);

--
-- Indexes for table `matter`
--
ALTER TABLE `matter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matter_matter_state1_idx` (`matter_state_id`),
  ADD KEY `fk_matter_section1_idx` (`section_id`),
  ADD KEY `fk_matter_minute1_idx` (`minute_id`);

--
-- Indexes for table `matter_log`
--
ALTER TABLE `matter_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matter_log_matter1_idx` (`matter_id`);

--
-- Indexes for table `matter_state`
--
ALTER TABLE `matter_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_member_member_type_idx` (`member_type_id`);

--
-- Indexes for table `member_type`
--
ALTER TABLE `member_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_memo_member1_idx` (`member_id`);

--
-- Indexes for table `minute`
--
ALTER TABLE `minute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_privilage`
--
ALTER TABLE `section_privilage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_section_privilages_section1_idx` (`section_id`),
  ADD KEY `fk_section_privilages_member_type1_idx` (`member_type_id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_system_log_system_log_type1_idx` (`system_log_type_id`);

--
-- Indexes for table `system_log_type`
--
ALTER TABLE `system_log_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `external_board`
--
ALTER TABLE `external_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external_log`
--
ALTER TABLE `external_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external_matter`
--
ALTER TABLE `external_matter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matter`
--
ALTER TABLE `matter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `matter_log`
--
ALTER TABLE `matter_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `minute`
--
ALTER TABLE `minute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section_privilage`
--
ALTER TABLE `section_privilage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `system_log_type`
--
ALTER TABLE `system_log_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_attendance_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attendance_minute1` FOREIGN KEY (`minute_id`) REFERENCES `minute` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `external_log`
--
ALTER TABLE `external_log`
  ADD CONSTRAINT `fk_external_log_external_matter1` FOREIGN KEY (`external_matter_id`) REFERENCES `external_matter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `external_matter`
--
ALTER TABLE `external_matter`
  ADD CONSTRAINT `fk_matter_in_board1` FOREIGN KEY (`board_id`) REFERENCES `external_board` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matter`
--
ALTER TABLE `matter`
  ADD CONSTRAINT `fk_matter_matter_state1` FOREIGN KEY (`matter_state_id`) REFERENCES `matter_state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matter_minute1` FOREIGN KEY (`minute_id`) REFERENCES `minute` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matter_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matter_log`
--
ALTER TABLE `matter_log`
  ADD CONSTRAINT `fk_matter_log_matter1` FOREIGN KEY (`matter_id`) REFERENCES `matter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_member_type` FOREIGN KEY (`member_type_id`) REFERENCES `member_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `memo`
--
ALTER TABLE `memo`
  ADD CONSTRAINT `fk_memo_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `section_privilage`
--
ALTER TABLE `section_privilage`
  ADD CONSTRAINT `fk_section_privilages_member_type1` FOREIGN KEY (`member_type_id`) REFERENCES `member_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_section_privilages_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `system_log`
--
ALTER TABLE `system_log`
  ADD CONSTRAINT `fk_system_log_system_log_type1` FOREIGN KEY (`system_log_type_id`) REFERENCES `system_log_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
