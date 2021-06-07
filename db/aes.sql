-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 01:21 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(2, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL,
  `school_code` varchar(50) NOT NULL,
  `classes` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_ids`
--

CREATE TABLE IF NOT EXISTS `class_ids` (
  `id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_ids`
--

INSERT INTO `class_ids` (`id`, `class`) VALUES
(1, 'JSS 1'),
(2, 'JSS 2'),
(3, 'JSS 3'),
(4, 'SSS 1'),
(5, 'SSS 2'),
(6, 'SSS 3');

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE IF NOT EXISTS `examiner` (
  `id` int(11) NOT NULL,
  `examiner_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_answer`
--

CREATE TABLE IF NOT EXISTS `obj_answer` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `answer_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=290 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_exam`
--

CREATE TABLE IF NOT EXISTS `obj_exam` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(500) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `exam_time` varchar(100) NOT NULL,
  `exam_instructions` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_exam_audit`
--

CREATE TABLE IF NOT EXISTS `obj_exam_audit` (
  `id` int(11) NOT NULL,
  `examiner_id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `action_performed` varchar(100) NOT NULL,
  `date_performed` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_exam_submitted`
--

CREATE TABLE IF NOT EXISTS `obj_exam_submitted` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `send_options` varchar(100) NOT NULL,
  `answer_id` varchar(100) NOT NULL,
  `correct_answer_id` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=450 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_options`
--

CREATE TABLE IF NOT EXISTS `obj_options` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `options` varchar(100) NOT NULL,
  `option_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1151 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_questions`
--

CREATE TABLE IF NOT EXISTS `obj_questions` (
  `id` int(11) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `question_imagepath` varchar(500) NOT NULL,
  `no_of_choices` int(11) NOT NULL,
  `question_no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obj_student_result`
--

CREATE TABLE IF NOT EXISTS `obj_student_result` (
  `id` int(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result_aggregate`
--

CREATE TABLE IF NOT EXISTS `result_aggregate` (
  `id` int(100) NOT NULL,
  `exam_id` varchar(200) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL,
  `school_code` varchar(20) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `class_id` varchar(11) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_ids`
--

CREATE TABLE IF NOT EXISTS `subject_ids` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_ids`
--

INSERT INTO `subject_ids` (`id`, `subject`) VALUES
(1, 'English Language'),
(2, 'Mathematics'),
(3, 'Integrated/Basic Science'),
(4, 'Introductory/Basic Technology'),
(5, 'Social Studies'),
(6, 'Computer Studies'),
(7, 'French Language'),
(8, 'Yoruba Language'),
(9, 'Ibo Language'),
(10, 'Hausa Language'),
(11, 'Home Economics'),
(12, 'Agricultural Science'),
(13, 'Physical & Health Education (PHE)'),
(14, 'Business Studies'),
(15, 'Christian Religious Studies/Islamic Religious Studies'),
(16, 'Chemistry'),
(17, 'Technical Drawing (TD)'),
(18, 'Further Mathematics'),
(19, 'Biology'),
(20, 'Physics'),
(21, 'Agricultural Science'),
(22, 'Geography'),
(23, 'Economics'),
(24, 'Civic Education'),
(25, 'Catering Craft'),
(26, 'Commerce'),
(27, 'Accounting'),
(28, 'Government'),
(29, 'Food and Nutrition'),
(30, 'Literature in English'),
(31, 'Literature');

-- --------------------------------------------------------

--
-- Table structure for table `theory_exam`
--

CREATE TABLE IF NOT EXISTS `theory_exam` (
  `id` int(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `exam_time` varchar(100) NOT NULL,
  `exam_instructions` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theory_exam_audit`
--

CREATE TABLE IF NOT EXISTS `theory_exam_audit` (
  `id` int(11) NOT NULL,
  `examiner_id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `action_performed` varchar(100) NOT NULL,
  `date_performed` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theory_exam_submitted`
--

CREATE TABLE IF NOT EXISTS `theory_exam_submitted` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `answer_imagepath` varchar(200) NOT NULL,
  `score` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Ungraded'
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theory_questions`
--

CREATE TABLE IF NOT EXISTS `theory_questions` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `question_imagepath` varchar(500) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `answer_imagepath` varchar(200) NOT NULL,
  `mark` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theory_student_result`
--

CREATE TABLE IF NOT EXISTS `theory_student_result` (
  `id` int(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_ids`
--
ALTER TABLE `class_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_answer`
--
ALTER TABLE `obj_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_exam`
--
ALTER TABLE `obj_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_exam_audit`
--
ALTER TABLE `obj_exam_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_exam_submitted`
--
ALTER TABLE `obj_exam_submitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_options`
--
ALTER TABLE `obj_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_questions`
--
ALTER TABLE `obj_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_student_result`
--
ALTER TABLE `obj_student_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_aggregate`
--
ALTER TABLE `result_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `school_code` (`school_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_ids`
--
ALTER TABLE `subject_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_exam`
--
ALTER TABLE `theory_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_exam_audit`
--
ALTER TABLE `theory_exam_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_exam_submitted`
--
ALTER TABLE `theory_exam_submitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_questions`
--
ALTER TABLE `theory_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_student_result`
--
ALTER TABLE `theory_student_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `class_ids`
--
ALTER TABLE `class_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `obj_answer`
--
ALTER TABLE `obj_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=290;
--
-- AUTO_INCREMENT for table `obj_exam`
--
ALTER TABLE `obj_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `obj_exam_audit`
--
ALTER TABLE `obj_exam_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `obj_exam_submitted`
--
ALTER TABLE `obj_exam_submitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=450;
--
-- AUTO_INCREMENT for table `obj_options`
--
ALTER TABLE `obj_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1151;
--
-- AUTO_INCREMENT for table `obj_questions`
--
ALTER TABLE `obj_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `obj_student_result`
--
ALTER TABLE `obj_student_result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `result_aggregate`
--
ALTER TABLE `result_aggregate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subject_ids`
--
ALTER TABLE `subject_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `theory_exam`
--
ALTER TABLE `theory_exam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `theory_exam_audit`
--
ALTER TABLE `theory_exam_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `theory_exam_submitted`
--
ALTER TABLE `theory_exam_submitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `theory_questions`
--
ALTER TABLE `theory_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `theory_student_result`
--
ALTER TABLE `theory_student_result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
