-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 08:06 AM
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
-- Table structure for table `Contacts`
--

CREATE TABLE `Contacts` (
  `Entry_ID` bigint(20) NOT NULL,
  `Prefix` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `First_Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` bigint(20) NOT NULL,
  `College` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Current_Status` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `LinkedIn` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Workplace` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Notes` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contacts`
--

INSERT INTO `Contacts` (`Entry_ID`, `Prefix`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `College`, `Current_Status`, `LinkedIn`, `Workplace`, `Title`, `Notes`, `Timestamp`) VALUES
(1000, 'Mr', 'Sai', 'Raj', 'adshisd@asd.com', 1234567890, 'Wichita State University', 'Employed', 'nope', 'Apple', 'Google', 'Happy bro', '2020-11-04 02:33:21'),
(1070, 'Mr', 'subash', 'karki', 'acharya@kar.com', 1233211231, 'wsu', 'ahha', 'ahhaha', 'ahdhahdh', 'danajsdnj', 'ajsnjasndjd', '2020-11-05 06:43:43'),
(1082, 'Ms', 'Jhin', 'Khada', 'khada@jhin.com', 44444444444, 'Ionia High', 'Nope', 'Virtuoso444', 'Summoner\'s Rift', 'Marksman', 'HAHAHHAHAHHAHA', '2020-11-05 07:03:25'),
(1084, 'Ms', 'Priyanka', 'Limbu', 'limbupriyanka8@gmail.com', 3168714592, 'Wichita state university ', 'Unemployed ', 'Priya', 'Pti', 'Manager', 'Abdudjdb', '2020-11-05 14:02:33'),
(1123, 'Ms', 'priya', 'limbu', 'abc@gmail.com', 2222222222, 'wichita', 'employed', 'abv', 'abc', 'abc', 'sajfbslfslr', '2020-11-06 20:13:06'),
(1128, 'Ms', 'jhin', 'khada', 'j@k.com', 4444444444, 'ionia high', 'nope', 'sniper', 'lol', 'sniper', 'Music lacks the cruelty of Art', '2020-11-07 01:37:56'),
(1146, 'Mr', 'Sailesh', 'Rajanala', 'sailesh777@live.com', 3167774444, 'Wichita State University', 'Employed', 'batsy777', 'Apple', 'Senior Chief Design Officer', 'I love myself.', '2020-11-08 01:02:54'),
(1161, 'Mr', 'Arthur', 'Penn', 'apen@drcity.com', 9787663211, 'Dragon City High', 'Employed', '', 'Dragon City ', 'Street Racer', 'This form is so easy to use. I especially like the Visual effects. I also appreciate having a dark mode to work on during the night.', '2020-11-08 22:05:48'),
(1166, 'Mr', 'Sailesh', 'Rajanala', 'sailesh@rajanala.com', 1234567890, 'Sailesgr Nor University', 'Employed', 'SaileshRajanala', 'Sailesh Constructions', 'CEO', 'Hi! I would like to get involved with university events and help recruit new employees for my business. I do have many projects that are suitable for Seniors majoring in Architecture to learn real life experience. I am looking forward to be involving in with the university. \r\n\r\nThank you.', '2020-11-10 23:17:14'),
(1168, 'Ms', 'Sophia', 'Johnson', 'sophia@gmail.com', 3164138790, 'Wichita State University', 'Employed', 'Sophia13', 'Sophia Industries', 'Manager', 'We have a project where we like to involve your students.', '2020-11-11 00:54:22'),
(1169, 'Mr', 'Shiva ', 'Karki', 'ShivaKarki1724@gmail.com', 3162089646, 'Wichita State University', 'Student', 'Shiva1724', 'Ncell', 'Developer', 'Friendly entry for Industry Partner Database.', '2020-11-11 00:54:09'),
(1257, 'Ms', 'Laura', 'Vercetti', 'shock@shocker.com', 1234567890, 'Shocker University', 'Employed', 'shock2shocker', 'Shock Inc.', 'Chief Design Officer', 'Hello, I would like to get involved with your institution. By doing so, I would like to share or provide sponsored projects for students to work on and get meaningful experience. Thank you.', '2020-11-12 06:43:20'),
(1258, 'Mr', 'Sailesh', 'Rajanala', 'saileshrajanala@email.com', 7744777444, 'Sailesh Rajanala\'s Academy', 'Employed', 'srajanala777', 'Sailesh Rajanala Industries', 'CEO', 'I am very much interested in getting involved with future innovators, inventors, and achievers. Therefore, I would love to get involved with on campus activities and would also like to provide students valuable work and innovation experience. I can\'t wait to get started. Thank you.', '2020-11-12 06:43:43'),
(1266, 'Mr', 'Shiva', 'Karki', 'shivakarki@gmail.com', 1234567890, 'Shiva Academy of Mathematics', 'Employed', 'Shiva1724', 'Shiva Industries', 'Software Developer', 'I love coding and I would like to get involved with your institution to help provide current achievers some valuable real life experience in developing software tools that enrich people\'s life. Please contact me if with my phone number listed in this form. I can\'t wait to get started. Thank you.', '2020-11-13 02:56:26'),
(1267, 'Mr', 'Arthur', 'Penn', 'am321@gmail.com', 1234567880, 'Shiva Academy of Mathematics', 'Employed', 'Arthurforreal', 'Shiva Industries', 'UI Developer', 'I love coding and I would like to get involved with your institution to help provide current achievers some valuable real life experience in developing software tools that enrich people\'s life. Please contact me if with my phone number listed in this form. I can\'t wait to get started. Thank you.', '2020-11-13 03:03:33'),
(1271, 'Mr', 'Tommy', 'Townley', 'tomtownley@email.com', 1234557880, 'Shiva Academy of Mathematics', 'Employed', 'tommy7', 'Shiva Industries', 'AR Developer', 'I love coding and I would like to get involved with your institution to help provide current achievers some valuable real life experience in developing software tools that enrich people\'s life. Please contact me if with my phone number listed in this form. I can\'t wait to get started. Thank you.', '2020-11-13 03:02:56'),
(1299, 'Mr', 'Sailesh', 'Rajanala', 'saileshrajanala@email.com', 1234567890, 'Sailesh Academy of Logic and Magic', 'Employed', 'srajanala777', 'Sailesh Constructions', 'CEO', 'I would love to get involved with the university. I would love to share my passion and provide meaningful work experience to current students. Thank you.', '2020-11-13 07:46:25'),
(1301, 'Mr', 'Eivor', 'Jora', 'eivor@email.com', 1231212123, 'Ravens High School', 'Employed', 'raven22', 'MerciaDemercia', 'Software Developer', 'I am a Viking and I love to teach Martial Arts to Students.', '2020-11-30 04:28:51'),
(1320, 'Mr', 'Kevin', 'Driscoll', 'KevinDriscoll@gmail.com', 2345678911, 'Wichita State University', 'Employed', 'KDriscoll', 'Good Food company', 'Product Manager', 'I am Interested to work with the Industry Department.', '2020-12-06 00:20:30'),
(1321, 'Mr', 'Shiva', 'Karki', 'cvakark1724@gmail.com', 3169285726, 'Wichita State University', 'Employed', 'Karki2908', 'Ncell', 'MD', '\"Its now or never.\"', '2020-12-06 00:18:52'),
(1322, 'Mr', 'Laura', 'Rajar', 'lr74@email.com', 1233321221, 'HomeTown State University', 'Employed', 'lr3434', 'GameX', 'Tester', 'I am interested in teaching students and getting involved with the university. ', '2020-12-06 00:22:23'),
(1349, 'Miss', 'Hela', 'Dark', 'h@d.com', 1112221112, '', '', '', '', '', '', '2021-01-28 06:17:26'),
(1351, 'Mr', 'Shiva', 'Karki', 'sxkarki6@gmail.com', 9804186091, 'Wichita State University ', 'Employed', 'Shiva1995', 'Microsoft', 'Developer', 'Thank you', '2021-02-12 19:42:37'),
(1352, 'Ms', 'Priyanka', 'Limbu', 'p@gmail.com', 3152345678, 'Wichita State University', 'employed', 'priyanka', 'WSU', 'Student worker', 'I am really excited to work on this project.', '2021-02-12 19:42:47'),
(1353, 'Mr', 'Sailesh', 'Rajanala', 'sai@rajanala.com', 1231231231, 'Sailesh University', 'Employed', 'sr4444', 'SR Constructions', 'CEO', 'This is a &lttest&gt; &lt/&gt;.', '2021-02-17 05:15:03'),
(1354, 'Dr', 'Ben', 'Watkins', 'ben@gmail.com', 1234567890, 'Wichita University', 'employed', 'ben11', 'Wichita University', 'Recruiter', 'I am excited to work on this project\r\n', '2021-02-23 21:24:44'),
(1355, 'Mr', 'Sailesh', 'Rajanala', 'sailesh7744@icloud.com', 1231231231, '', '', '', '', '', '', '2021-03-04 21:41:09'),
(1356, 'Mr', 'Sailesh', 'Rajanala', 'saileshRajanala@live.com', 1212121231, '', '', '', '', '', '', '2021-03-05 03:35:37'),
(1357, 'Mr', 'Sailesh', 'Rajanala', 'saileshRajanala@live.com', 1212121231, '', '', '', '', '', '', '2021-03-05 03:37:35'),
(1358, 'Mr', 'Sailesh', 'Rajanala', 'saileshRajanala@live.com', 1212121231, '', '', '', '', '', '', '2021-03-05 03:37:44'),
(1359, 'Mr', 'Sailesh', 'Rajanala', 'saileshRajanala@live.com', 1212121231, '', '', '', '', '', '', '2021-03-05 03:39:04'),
(1360, 'Mr', 'Sailesh', 'Rajanala', 'saileshRajanala@live.com', 1212121231, '', '', '', '', '', '', '2021-03-05 03:41:01'),
(1361, 'Mr', 'Sai', 'Raj', 'r@r.com', 1231231231, '', '', '', '', '', '', '2021-03-05 22:09:01'),
(1362, 'Mr', 'Sai', 'Raj', 'r@r.com', 1231231231, '', '', '', '', '', '', '2021-03-05 22:09:33'),
(1363, 'Mr', 'Sailesh', 'Rajanala', 'sailesh@r.com', 1231231122, '', '', '', '', '', '', '2021-03-06 01:24:14'),
(1364, 'Ms', 'Sailesg', 'Rajanala', 'sailesh777@live.com', 1231231231, '', '', '', '', '', '', '2021-03-10 19:25:51'),
(1365, 'Ms', 'Sailesg', 'Rajanala', 'sailesh777@live.com', 1231231231, '', '', '', '', '', '', '2021-03-10 19:25:56'),
(1366, 'Ms', 'Sailesg', 'Rajanala', 'sailesh777@live.com', 1231231231, '', '', '', '', '', '', '2021-03-10 19:26:02'),
(1367, 'Ms', 'Sailesg', 'Rajanala', 'sailesh777@live.com', 1231231231, '', '', '', '', '', '', '2021-03-10 19:26:08'),
(1368, 'Mr', 'Shiva', 'Karki', 'sxkarki17@yahoo.com', 3169285726, 'Wichita State University', 'Student', 'Karki1724', 'Facebook', 'QA', 'Thanks for having me .', '2021-03-12 03:02:43'),
(1369, 'Mr', 'Sailesh', 'Rajanala', 'sailesh777@live.com', 1231231213, 'Wichita State', '', '', '', '', 'gfgbf', '2021-03-12 17:48:00'),
(1370, 'Dr', 'Asd', 'Asd', 'asdsa@asd.com', 1232132311, '', '', '', '', '', '', '2021-03-20 13:14:46'),
(1371, 'Mr', 'Asd', 'Asd', '123@sad.pc', 1223213212, '', '', '', '', '', '', '2021-03-20 21:39:49'),
(1372, 'Mrs', 'Asd', 'Asdsad', 'sadasdasd@s.com', 1234123122, '', '', '', '', '', '', '2021-03-20 23:53:28');

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
(157, 'Mr.', 'Jr.', 'Jhin', 'Khada', 'jhink@gmail.com', '1231222211', 'League State University', 'Chief Programming Officer', 'KS', 'Wichita', '5', '', '', '2021', '1', '', '3', '', '1, 3, 4, 7, 8, 14, 16, Other Discipline', 'Mathematics', '2', 'League State university ', '2021', '2', 'hahaha', '', '', '2', 'League State YO university', '2021', 'Mechanics of Sniping and Lotus Traps LOL.!', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '1, 2, 3', '1, 2, 3, 4', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, Other', 'asdasdas', 'I want to perform!!! PERFORMANCE MATTERS!!!!! PERFECTION ISN&#039;t good enough!!!', '2021-04-13 02:59:34'),
(158, 'Mr.', 'Jr.', 'Eivor', 'Jora', 'eivorjora@gmail.com', '22312321212', 'Valhalla Enterprises', 'Chief of the Clan ', 'UT', 'Ravensthorpe', '5', '', '', '2021', '2', 'Norse Universe City', '3', '', '1, 2, 4, 11, Other Discipline', 'Persia Game', '3', '', '', '', '', '', '', '', '', '', 'Game Mechanics', '4, 5, 7, 8, 9, 10', '1, 3', '', '1, 4', '3, 4, 5', '', 'Create games and play.', '2021-04-14 23:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Is_Admin` tinyint(1) NOT NULL,
  `Department` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `Name`, `Email`, `Password`, `Is_Admin`, `Department`) VALUES
(12, 'Sailesh Rajanala', 'sailesh@gmail.com', 'sailesh', 4, 'EECS'),
(13, 'Subash Acharya', 'subash@gmail.com', 'password', 4, 'EECS');

-- --------------------------------------------------------

--
-- Table structure for table `primary_table`
--

CREATE TABLE `primary_table` (
  `First_Name` mediumtext NOT NULL,
  `Last_Name` mediumtext NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `college` text NOT NULL,
  `currentStatus` text NOT NULL,
  `linkedin` text NOT NULL,
  `workplace` text NOT NULL,
  `position` text NOT NULL,
  `notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primary_table`
--

INSERT INTO `primary_table` (`First_Name`, `Last_Name`, `phoneNo`, `college`, `currentStatus`, `linkedin`, `workplace`, `position`, `notes`) VALUES
('Subash', 'Acharya', 3168473407, 'SouthWest', 'Unemployed', 'Secret', 'MyHome', 'Manager', 'I shouldnot have drank so much coffee, which made me wake up all night'),
('Jarvis', 'blah', 123123123, 'WSU bro', 'Conqueror', 'Thanos', 'Space', 'Destroyer', 'I like cup cakes'),
('Jarvis', 'blah', 123123123, 'WSU bro', 'Conqueror', 'Thanos', 'Space', 'Destroyer', 'I like cup cakes'),
('', 'Shiva', 46465454, 'Example college', 'Employed', 'testeste', 'Facebook', 'Ceo', 'Nothing'),
('Shiva', 'Karki', 18561685, 'dgfsa', 'dfgs', 'dfs', 'asdf', 'asdfas', 'asdfas'),
('Sailesh', 'Rajanala', 4447774444, 'Wichita State University', 'Employed', 'Sailesh Rajanala', 'Apple', 'CEO', 'I am happy '),
('Jhin', 'Khada', 4444444444, 'Ionia Four', 'Employed', 'fourWin', 'Whisper.Inc', 'Sniper', 'I love 4. I am wiling to work 4 victory.'),
('Jarvis', 'wow', 1231232123, 'WELL. `2131`', 'NOT EMPLOYED', 'hahhahhaha', 'you know it br', 'CEO', 'hahhaha, nice test'),
('Priya', 'Karki', 1234444133, 'Wakanda High', 'Employed', 'yoyokitna', 'Panther', 'Server(DATABASE)', 'aishdobnsflkasfas sad ansdnksd ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contacts`
--
ALTER TABLE `Contacts`
  ADD PRIMARY KEY (`Entry_ID`);

--
-- Indexes for table `Industry_Partner_Database`
--
ALTER TABLE `Industry_Partner_Database`
  ADD PRIMARY KEY (`Entry_ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contacts`
--
ALTER TABLE `Contacts`
  MODIFY `Entry_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1373;

--
-- AUTO_INCREMENT for table `Industry_Partner_Database`
--
ALTER TABLE `Industry_Partner_Database`
  MODIFY `Entry_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
