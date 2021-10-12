-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 03:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitowork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin_digito', 'admin@digitowork.com', 'digito-admin');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `description1` text NOT NULL,
  `description2` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `description4` varchar(255) NOT NULL,
  `one` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `heading`, `description`, `description1`, `description2`, `description3`, `description4`, `one`, `two`, `status`) VALUES
(27, '  Java Developer', '  Responsibilities\r\nContribute in all phases of the development lifecycle\r\nWrite well designed, testable, efficient code\r\nEnsure designs are in compliance with specifications\r\nPrepare and produce releases of software components\r\nSupport continuous improvement by investigating alternatives and technologies and presenting these for architectural review\r\nRequirements\r\nBS/MS degree in Computer Science, Engineering or a related subject\r\nProven hands-on Software Development experience\r\nProven working experience in Java development\r\nHands on experience in designing and developing applications using Java EE platforms\r\nObject Oriented analysis and design using common design patterns.\r\nProfound insight of Java and JEE internals (Classloading, Memory Management, Transaction management etc)\r\nExcellent knowledge of Relational Databases, SQL and ORM technologies (JPA2, Hibernate)\r\nExperience in the Spring Framework\r\nExperience as a Sun Certified Java Developer\r\nExperience in developing web applications using at least one popular web framework (JSF, Wicket, GWT, Spring MVC)\r\nExperience with test-driven development', '  Mysql, data base knowledge', '  Team player', '  Java fullstrack developer ', '  6yrs', 'heading28', 'collapse29', 'Enable'),
(28, 'Python Developer ', 'Responsibilities\r\nWrite effective, scalable code\r\nDevelop back-end components to improve responsiveness and overall performance\r\nIntegrate user-facing elements into applications\r\nTest and debug programs\r\nImprove functionality of existing systems\r\nImplement security and data protection solutions\r\nAssess and prioritize feature requests\r\nCoordinate with internal teams to understand user requirements and provide technical solutions\r\nRequirements\r\nWork experience as a Python Developer\r\nExpertise in at least one popular Python framework (like Django, Flask or Pyramid)\r\nKnowledge of object-relational mapping (ORM)\r\nFamiliarity with front-end technologies (like JavaScript and HTML5)\r\nTeam spirit\r\nGood problem-solving skills\r\nBSc in Computer Science, Engineering or relevant field', 'Writing effective, scalable code\r\nDeveloping back-end components to improve responsiveness and overall performance\r\nIntegrating user-facing elements into applications', 'Responsibilities\r\nWrite effective, scalable code\r\nDevelop back-end components to improve responsiveness and overall performance\r\nIntegrate user-facing elements into applications\r\nTest and debug programs\r\nImprove functionality of existing systems\r\nImplemen', 'Requirements\r\nWork experience as a Python Developer\r\nExpertise in at least one popular Python framework (like Django, Flask or Pyramid)\r\nKnowledge of object-relational mapping (ORM)\r\nFamiliarity with front-end technologies (like JavaScript and HTML5)', '4to6 Yrs', 'heading29', 'collapse30', 'Enable'),
(29, 'Salesforce Developer', 'Experience 2-4 years', 'We have openings for Salesforce developer with basic knowledge on database We have openings for Salesforce developer with basic knowledge on database', 'SOQL', 'Apex, Trigger', '2-4 years minimum', 'heading30', 'collapse31', 'Enable'),
(30, 'SAP HR', 'Need to have experience on Organizational and Personnel Administration modules.\r\nNeed to have experience on CATS (Cross Application Time Sheet) and knowledge or experience on FIORI application Expense\r\nNeed to have experience on Travel Management module.', '\r\nSAP HR', 'Should have experience in Payroll & Time Management, OM and PA, Payroll (Multiple Country including Indian Payroll), ESS/MSS, Compensation and Benefits.\r\nAbility to communicate and work well in a cross - functional team environment and also in the offshor', 'SAP HR', '2 - 5 years', 'heading31', 'collapse32', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `career_form`
--

CREATE TABLE `career_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `yop` varchar(255) NOT NULL,
  `per` varchar(255) NOT NULL,
  `cl` varchar(255) NOT NULL,
  `aoi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_form`
--

INSERT INTO `career_form` (`id`, `name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`, `coursename`, `yop`, `per`, `cl`, `aoi`, `file`, `upload_date`) VALUES
(1, 'aaa', '', 'ddd', '2020-06-18', 'male', 'abc@gmail.com', '8888888888', 'inter', 'ssc', '2014', '89', 'Karnataka', 'Data_Migration', 'resume_test.docx', '2020-06-18 21:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `experienceform`
--

CREATE TABLE `experienceform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `yop` varchar(255) NOT NULL,
  `per` varchar(255) NOT NULL,
  `critical` varchar(500) NOT NULL,
  `primarys` varchar(500) NOT NULL,
  `cl` varchar(255) NOT NULL,
  `pl` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `start` varchar(50) NOT NULL,
  `tmend` varchar(50) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `domain_experiece` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experienceform`
--

INSERT INTO `experienceform` (`id`, `name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`, `coursename`, `yop`, `per`, `critical`, `primarys`, `cl`, `pl`, `company_name`, `start`, `tmend`, `skills`, `domain_experiece`, `file`, `upload_date`) VALUES
(1, 'ddd', '', 'fff', '2020-06-20', 'male', 'abc@gmail.com', 2147483647, 'tenth, inter, Bachelor', 'jhkj, tttt, tttt', '2011, 2013, 2017', '5, 4, 6', 'fqwefrqewfewqfwe', 'fqwefwefwedf', 'Karnataka', 'Hyderabad', 'fwdfsd, dvcads', '1112, 12/12', '111, 12/31', 'nvjsdnvns, fvnwdjfnj', 'svn sdn vjsn , adsnfslknkl', 'resume_test.docx', '2020-06-19 01:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `intertform`
--

CREATE TABLE `intertform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `yop` varchar(255) NOT NULL,
  `per` varchar(255) NOT NULL,
  `cl` varchar(255) NOT NULL,
  `aoi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intertform`
--

INSERT INTO `intertform` (`id`, `name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`, `coursename`, `yop`, `per`, `cl`, `aoi`, `file`, `upload_date`) VALUES
(1, 'bbbb', '', 'hhhhh', '2020-06-18', 'male', 'dummy1@gmail.com', '9999999999', 'tenth, inter, Bachelor', 'SSC, HSE, BTech', '2011, 2013, 2017', '98, 89, 77', 'Bihar', 'Data_Sciences', 'resume_test.docx', '2020-06-18 21:13:55'),
(2, 'payment_re', '', 'aaa', '1995-04-04', 'male', 'bujji@gmail.com', '9700711506', 'Bachelor', 'aaa', '2019', '90', 'Karnataka', 'Data_Sciences', 'call-us.png', '2020-07-22 12:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `phone`, `email`, `upload_date`) VALUES
(1, 'banala', '9533802082', 'sunseaznaga@gmail.com', '2020-07-22 15:12:14'),
(2, 'banala', '9533802082', 'sunseaznaga@gmail.com', '2020-07-22 15:14:05'),
(3, 'payment_receipt.php', '9700711506', 'bujji@gmail.com', '2020-07-22 15:39:09'),
(4, 'payment_receipt.php', '9700711506', 'navaneethas26@gmail.com', '2020-07-22 15:44:12'),
(5, 'payment_receipt.php', '9700711506', 'bujji@gmail.com', '2020-07-22 15:54:07'),
(6, 'Prith', '9989488019', 'prith@digitowork.com', '2020-07-22 16:11:39'),
(7, 'Prabhala Siva Krishna', '9700315211', 'prabala.siva12@gmail.com', '2020-07-23 10:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_form`
--
ALTER TABLE `career_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experienceform`
--
ALTER TABLE `experienceform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intertform`
--
ALTER TABLE `intertform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `career_form`
--
ALTER TABLE `career_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experienceform`
--
ALTER TABLE `experienceform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intertform`
--
ALTER TABLE `intertform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
