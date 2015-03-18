-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2014 at 03:42 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qstns`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('admin', 'admin'),
('Divya', 'sorry');

-- --------------------------------------------------------

--
-- Table structure for table `qstns`
--

CREATE TABLE IF NOT EXISTS `qstns` (
  `qname` text NOT NULL,
  `opta` text NOT NULL,
  `optb` text NOT NULL,
  `optc` text NOT NULL,
  `optd` text NOT NULL,
  `c_a` text NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qstns`
--

INSERT INTO `qstns` (`qname`, `opta`, `optb`, `optc`, `optd`, `c_a`, `qid`) VALUES
('What is (void*)0?', 'Representation of NULL pointer', 'Representation of void pointer', 'Error', 'None of above', 'A', 0),
('In which header file is the NULL macro defined?', 'stdio.h', 'stddef.h', 'stdio.h and stddef.h', 'math.h', 'C', 1),
(' If a variable is a pointer to the structure, then hich of the folloing operator is used to access data members of the structure through the pointer variable ?', '.', '*', '->', '&', 'c', 2),
('The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', 'd', 3),
('Which of the following cannot be checked in a switch-case statement?', 'character', 'integer', 'float', 'enum', 'c', 4),
('Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1);', 'rem = fmod(3.14, 2.1);', 'Remainder cannot be obtain in floating point division.', 'c', 5),
('Which of the following special symbol allowed in a variable name?', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', 'd', 6),
('What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'The element will be set to 0.', 'The compiler would report an error.', 'The program may crash if some important data gets overwritten.', 'The array size would appropriately grow.', 'c', 7),
('In C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array', 'Base address of the array', 'Address of the last element of array', 'c', 8),
('What does the following declaration mean?', 'ptr is array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', 'ptr is an array of 10 integers', 'ptr is an pointer to array', 'b', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` text NOT NULL,
  `rln` int(11) NOT NULL,
  `scr` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `rln`, `scr`) VALUES
('ddi', 1452, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
