-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2021 at 05:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15084806_main_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Industry_Partner_Database`
--

CREATE TABLE `Industry_Partner_Database` (
  `Entry_ID` int(11) NOT NULL,
  `Prefix` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Suffix` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `First_Name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Employer` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Job_Title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `College_Education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Associates_Degree` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Technical_Degree` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `College_Degree_Year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BS_school` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BS_other_school` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `BS_field` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_BS_field` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `BS_Eng_Discipline` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `other_BS_Eng_Discipline` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `have_MS_degree` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MS_other_school` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MS_year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MS_field` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `other_MS_field` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MS_Eng_Discipline` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `other_MS_Eng_Discipline` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `have_PHD_degree` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHD_other_school` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `PHD_year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `special_degree` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Involvement` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Involvement_Level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Recruitment_Level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mentor_Age` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Role_Model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_Role_Model` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Involvement_Notes` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Industry_Partner_Database`
--

INSERT INTO `Industry_Partner_Database` (`Entry_ID`, `Prefix`, `Suffix`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Employer`, `Job_Title`, `State`, `City`, `College_Education`, `Associates_Degree`, `Technical_Degree`, `College_Degree_Year`, `BS_school`, `BS_other_school`, `BS_field`, `other_BS_field`, `BS_Eng_Discipline`, `other_BS_Eng_Discipline`, `have_MS_degree`, `MS_other_school`, `MS_year`, `MS_field`, `other_MS_field`, `MS_Eng_Discipline`, `other_MS_Eng_Discipline`, `have_PHD_degree`, `PHD_other_school`, `PHD_year`, `special_degree`, `Involvement`, `Involvement_Level`, `Recruitment_Level`, `Mentor_Age`, `Role_Model`, `other_Role_Model`, `Involvement_Notes`, `Timestamp`) VALUES
(119, 'Mr.', 'Jr.', 'Sailesh', 'Rajanala', 'sailesh555@live.com', '1231231123', 'WSU', 'Supplemental Instruction Leader', 'KS', 'Wichita', '5', '', '', '2021', '1', '', 'Other Degree', 'Web Designing', '', '', '2', 'Kansas State University', '2022', '3', '', '2, 4, 5, 6, 7, Other Discipline', 'don&#039;t know lol', '1', '', '2024', 'Web Development', '1, 3, 4, 5', '1', '', '', '1', '', 'noised asd', '2021-04-02 00:58:11'),
(135, 'Mr.', 'Jr.', 'Jhin', 'Khada', 'jhin@khada.com', '4444774444', 'League of FOUR Inc.', 'Marksman', 'AR', 'Ionia', '5', '', '', '2017', '1', '', '3', '', '1, 2, 3, 6, 7, 8, 12, 16, Other Discipline', 'Web Design and Development', '2', 'Wakanda State University', '2019', '3', '', '1, 11, Other Discipline', 'Robotics', '1', '', '2021', 'Sniping', '1, 2, 3, 4, 5, 9', '2, 3', '', '', '2, 4, Other', 'Support', 'I am a fictional character and I love 4!', '2021-04-02 02:47:54'),
(137, 'Mr.', 'Mastrreert', 'Jake Dragon', 'Lake', 'j@d.com', '12312312312', '', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dragon Taming', '5, 6', '2', '1, 2, 3, 4', '', '1, 4, 5, Other', 'Dragons', 'YEA!', '2021-04-02 04:04:26'),
(144, 'Mr.', 'Jr.', 'Eivor', 'Jora', 'bayek@ac.com', '1231231121', 'Origins &amp; Odyssey', 'Game Designer', 'CO', 'Montreal', '5', '', '', '2021', '1', '', 'Other Degree', 'haha', '', '', '1', '', '2021', '3', '', 'Other Discipline', 'yoyo', '3', '', '', 'no idea', '4, 8', '1', '', '2', 'Other', 'Canadians', 'LOL', '2021-04-02 05:52:31'),
(147, 'Mr.', 'Jr.', 'Von', 'L&#039;Presidente', 's@e.com', '12221312111', 'Yara Inc.', 'MVP', '', 'Nora Island', '5', '', '', '2000', '2', 'Yara University', '7', '', '', '', '2', 'Yara University', '2002', '4', '', '', '', '3', '', '', 'Hunting', '5, 10', '2', '', '', '2, 5', '', 'Yara', '2021-04-02 17:58:47'),
(148, 'Ms.', 'Jr.', 'Linda Mary', 'Powell', 'powell@gmail.com', '1230984567', 'Horizon Architects', 'Coordinator', 'MN', 'St. Cloud', '5', '', '', '1995', '1', '', '3', '', '5, Other Discipline', 'management', '1', '', '2000', '6', '', '', '', '1', '', '2005', 'Computer Science', '5, 10', '3', '', '', '1, 3', '', 'I want to offer a senior design project.', '2021-04-02 18:18:00'),
(149, 'Mr.', '', 'Von Kong Dan', 'Don &#039;Declan', 's@g.edu', '1231231121', '', '', '', '', '5', '', '', '2020', '1', '', '7', '', '', '', '3', '', '', '', '', '', '', '', '', '', 'Web Designing', '3, 5, 7, 8, 10', '1, 2', '', '1', '5', '', 'I like to propose a Senior Design Project.', '2021-04-02 19:13:19'),
(150, 'Mr.', '', 'Mira', 'Thapa', 'mirs.thapa25@gmail.com', '316789877', 'MedicalScience', 'Nurse', 'ID', 'Pokhara', '5', '', '', '2018', '2', 'University of Pokhara', '4', '', '', '', '3', '', '', '', '', '', '', '', '', '', 'Health and Science', '9', '1, 3', '', '', '2, Other', 'Asian', 'Directly and Indirectly. ', '2021-04-02 19:27:09'),
(151, 'Dr.', '', 'Nancy', 'Kumari Karki ', 'nancy.karki@gmail.com', '316789987', 'IndustryPartner', 'Research Analyst', 'GA', 'Centreville', '5', '', '', '2014', '1', '', '3', '', '3, 4', '', '1', '', '2018', '3', '', '3, 4', '', '2', 'Virginia Tech', '2020', 'medical Science', '1', '1', '', '', '2', '', 'Thanks ', '2021-04-03 19:13:25'),
(152, 'Mr.', '', 'Sailesh', 'Rajanala', 'sailesh4444@gmail.com', '4444777777', 'Sailesh Rajanala Industries', 'Chief Executive Officer', 'KS', 'Wichita', '5', '', '', '2021', '1', '', '3', '', '7, Other Discipline', 'Web Designing', '3', '', '', '', '', '', '', '', '', '', 'Web Design/Development, UI/UX Development', '1, 2, 4, 5, 8, 9, 10', '1, 2, 3', '', '3, 4', 'Other', 'Web Designers', 'I want to perform.', '2021-04-04 20:48:05'),
(153, 'Ms.', '', 'A', 'A', 'a@h.com', '', '', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11', '1', '', '', 'Other', '-', 'nope', '2021-04-04 20:53:34'),
(154, 'Mr.', '', 'Jhin', 'Khada', 'jk@m.com', '2213112311', 'League Of Magic', 'Marksman', 'CO', 'Albama', '5', '', '', '2021', '2', 'University of Chicago', '3', '', '2, 4, 6', '', '2', 'Wichita State University', '2021', '6', '', '', '', '1', '', '2021', 'Nope', '2, 5, 10', '1', '', '', '1, 3', '', 'haha', '2021-04-12 05:00:24'),
(155, 'Mr.', 'Jr.', 'Jhin', 'Khada', 'jhink@gmail.com', '1231222211', 'League State University', 'Chief Programming Officer', 'KS', 'Wichita', '5', '', '', '2021', '1', '', '3', '', '1, 3, 4, 7, 8, 14, 16, Other Discipline', 'Mathematics', '2', 'League State university ', '2021', '2', 'hahaha', '', '', '2', 'League State YO university', '2021', 'Mechanics of Sniping and Lotus Traps LOL.!', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '1, 2, 3', '1, 2, 3, 4', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, Other', 'asdasdas', 'I want to perform!!! PERFORMANCE MATTERS!!!!! PERFECTION ISN&#039;t good enough!!!', '2021-04-13 02:57:49'),
(156, 'Mr.', 'Jr.', 'Jhin', 'Khada', 'jhink@gmail.com', '1231222211', 'League State University', 'Chief Programming Officer', 'KS', 'Wichita', '5', '', '', '2021', '1', '', '3', '', '1, 3, 4, 7, 8, 14, 16, Other Discipline', 'Mathematics', '2', 'League State university ', '2021', '2', 'hahaha', '', '', '2', 'League State YO university', '2021', 'Mechanics of Sniping and Lotus Traps LOL.!', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '1, 2, 3', '1, 2, 3, 4', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, Other', 'asdasdas', 'I want to perform!!! PERFORMANCE MATTERS!!!!! PERFECTION ISN&#039;t good enough!!!', '2021-04-13 02:59:30'),
(157, 'Mr.', 'Jr.', 'Jhin', 'Khada', 'jhink@gmail.com', '1231222211', 'League State University', 'Chief Programming Officer', 'KS', 'Wichita', '5', '', '', '2021', '1', '', '3', '', '1, 3, 4, 7, 8, 14, 16, Other Discipline', 'Mathematics', '2', 'League State university ', '2021', '2', 'hahaha', '', '', '2', 'League State YO university', '2021', 'Mechanics of Sniping and Lotus Traps LOL.!', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '1, 2, 3', '1, 2, 3, 4', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, Other', 'asdasdas', 'I want to perform!!! PERFORMANCE MATTERS!!!!! PERFECTION ISN&#039;t good enough!!!', '2021-04-13 02:59:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Industry_Partner_Database`
--
ALTER TABLE `Industry_Partner_Database`
  ADD PRIMARY KEY (`Entry_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Industry_Partner_Database`
--
ALTER TABLE `Industry_Partner_Database`
  MODIFY `Entry_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
