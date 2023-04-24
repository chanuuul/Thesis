-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 03:46 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `status` text,
  `firstname` text,
  `lastname` text,
  `middlename` text,
  `age` text,
  `gender` text,
  `bday` text,
  `bplace` text,
  `citizen` text,
  `civil` text,
  `religion` text,
  `address` text,
  `telnum` text,
  `email` text,
  `fname` text,
  `foccupation` text,
  `freligion` text,
  `fcontact` text,
  `mname` text,
  `moccupation` text,
  `mreligion` text,
  `mcontact` text,
  `gname` text,
  `goccupation` text,
  `greligion` text,
  `gcontact` text,
  `sname` text,
  `soccupation` text,
  `sreligion` text,
  `scontact` text,
  `school` text,
  `graduated` text,
  `saddress` text,
  `reason` text,
  `contact` varchar(2155) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `file6` varchar(255) NOT NULL,
  `file7` varchar(255) NOT NULL,
  `file8` varchar(255) NOT NULL,
  `reason1` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `username`, `status`, `firstname`, `lastname`, `middlename`, `age`, `gender`, `bday`, `bplace`, `citizen`, `civil`, `religion`, `address`, `telnum`, `email`, `fname`, `foccupation`, `freligion`, `fcontact`, `mname`, `moccupation`, `mreligion`, `mcontact`, `gname`, `goccupation`, `greligion`, `gcontact`, `sname`, `soccupation`, `sreligion`, `scontact`, `school`, `graduated`, `saddress`, `reason`, `contact`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `reason1`) VALUES
(4, 'rhenoah_15@hotmail.com', 'Approved', 'sa', 'sa', 'sa', '0', 'Male', '2023-12-31', 'sasa', 'sa', 'sa', 'sa', 'Mabini Batangas', '09974313935', 'rhenoah_15@hotmail.com', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', '09815880526', '', '', '', '', '', '', '', '', ''),
(5, 'cc', 'Approved', 'cc', 'cc', 'cc', '0', 'Male', '2023-12-31', 'sasa', 'Filipino', 'sa', 'sa', 'alitagtag', '09974313935', 'rhenoah15@gmail.com', 'sa', 'None', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'N/a', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'sa', 'sa', 'alitagtag', 'sa', '09974313935', '', '', '', '', '', '', '', '', ''),
(6, 'hh', 'Approved', 'kl', 'kl', 'kl', '0', 'Male', '2023-12-31', 'sasa', 'Filipino', 'sa', 'sa', 'alitagtag', '09974313935', 'rhenoah15@gmail.com', 'sa', 'None', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'N/a', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'sa', 'sa', 'alitagtag', 'sa', '09974313935', '', '', '', '', '', '', '', '', ''),
(7, 'saa', 'Approved', 'sa', 'sa', 'sa', '0', 'Male', '2023-12-31', 'sasa', 'Filipino', 'sa', 'sa', 'alitagtag', '09974313935', 'rhenoah15@gmail.com', 'sa', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'N/a', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'sa', 'sa', 'alitagtag', 'sa', '09974313935', '', '', '', '', '', '', '', '', ''),
(8, 'sa', 'Pending', 'sa', 'sa', 'sa', '-1', 'Male', '2023-12-31', 'sasa', 'Filipino', 'sa', 'sa', 'alitagtag', '09974313935', 'rhenoah15@gmail.com', 'sa', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'N/a', 'sa', 'sa', '09974313935', 'sa', 'sa', 'sa', '09974313935', 'Sta teresa College', 'Sta teresa College', 'alitagtag', 'sa', '09974313935', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attach`
--

CREATE TABLE IF NOT EXISTS `attach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `lesson` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `attach` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `course` text,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `username`, `course`, `type`) VALUES
(17, 'sa', 'Bachelor of Early Childhood Education (BECE)', '1'),
(18, 'sa', 'Bachelor of Elementary Education (BEEd)', '2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `teacherstat` varchar(255) NOT NULL,
  `studentstat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

CREATE TABLE IF NOT EXISTS `inquire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `mage` varchar(255) DEFAULT NULL,
  `moccupation` varchar(255) DEFAULT NULL,
  `mincome` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `fage` varchar(255) DEFAULT NULL,
  `foccupation` varchar(255) DEFAULT NULL,
  `fincome` varchar(255) DEFAULT NULL,
  `science` varchar(255) DEFAULT NULL,
  `math` varchar(255) DEFAULT NULL,
  `english` varchar(255) DEFAULT NULL,
  `filipino` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `school` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `science1` varchar(255) NOT NULL,
  `science2` varchar(255) NOT NULL,
  `math1` varchar(255) NOT NULL,
  `math2` varchar(255) NOT NULL,
  `filipino1` varchar(255) NOT NULL,
  `filipino2` varchar(255) NOT NULL,
  `english1` varchar(255) NOT NULL,
  `english2` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `eaddress` varchar(255) NOT NULL,
  `econtact` varchar(255) NOT NULL,
  `erelation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `lesson` text,
  `date` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `chance` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `name`, `address`, `contact`, `school`, `uname`, `email`, `exam`, `stat`, `chance`, `start`) VALUES
(3, 'guidance', 'guidance', 'admimissionadmin', 'Guidance', '', '', '', '', '', '', '', '', ''),
(4, 'admin', 'admin', 'exam', 'Administrator', '', '09635233073', '', '', '', '', '', '', ''),
(12, 'sa', 'sa', 'admission', 's', 'sa', 'sa', 'sa', '', '', '', '', '', ''),
(14, '2023-12-31', 'stc@2023', 'examination', '', '', '', '', 'hh', '', '', '', '', ''),
(15, 'exam-757586', 'stc@2023', 'examination', '', '', '', '', 'cc', '', '', '', '', ''),
(16, 'exam-706637', 'stc@2023', 'examination', '', '', '', '', 'rhenoah_15@hotmail.com', '', '', '', '', ''),
(17, 'exam-201623', 'stc@2023', 'examination', '', '', '', '', 'sa', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `logs` text,
  `date` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` text,
  `date` varchar(255) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`, `date`, `student`, `status`, `type`) VALUES
(32, 'Congratulations. You are qualified to take the Sta Teresa College Admission. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM', '2023-04-04', 'sa', 'Confirmed', ''),
(33, 'You examination account is username:2023-12-31 and your password is stc@2023', '2023-04-04', 'hh', '', ''),
(35, 'You examination account is username:exam-706637 and your password is stc@2023', '2023-04-04', 'rhenoah_15@hotmail.com', '', ''),
(36, 'Congratulations. You are qualified to take the Sta Teresa College Admission. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM', '2023-04-04', 'sa', '', 'Admission'),
(37, 'You examination account is username:exam-201623 and your password is stc@2023', '2023-04-04', 'sa', '', 'Examination');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `ansa` varchar(255) DEFAULT NULL,
  `ansb` varchar(255) DEFAULT NULL,
  `ansc` varchar(255) DEFAULT NULL,
  `ansd` varchar(255) DEFAULT NULL,
  `corans` varchar(255) DEFAULT NULL,
  `questionid` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ansa`, `ansb`, `ansc`, `ansd`, `corans`, `questionid`, `teacher`, `image`) VALUES
(9, 'Question 1', 'Ans A', 'Ans B', 'Ans C', 'Ans D', '1', '6', 'guidance', '800px-LemeryMunicipalHalChurchljf4526_18.jpeg'),
(10, 'Question 2', 'Ans A', 'Ans B', 'Ans C', 'Ans D', '2', '6', 'guidance', ''),
(11, 'Question 3', 'Ans A', 'Ans B', 'Ans C', 'Ans D', '3', '6', 'guidance', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `datestart` date NOT NULL,
  `dateend` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `minutes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `description`, `date`, `teacher`, `datestart`, `dateend`, `subject`, `minutes`) VALUES
(6, 'Filipino', 'sa', 'Fri, Jan 20, 2023 at 1:05pm', 'guidance', '2023-12-31', '2023-12-31', 'Filipino', '100');

-- --------------------------------------------------------

--
-- Table structure for table `results1`
--

CREATE TABLE IF NOT EXISTS `results1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `quiz` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
