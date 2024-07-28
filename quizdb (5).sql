-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `a_id` int(5) NOT NULL,
  `adminemail` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`a_id`, `adminemail`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'history'),
(2, 'geography'),
(3, 'polity');

-- --------------------------------------------------------

--
-- Table structure for table `geography`
--

CREATE TABLE `geography` (
  `question_number` int(5) NOT NULL,
  `question_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geography`
--

INSERT INTO `geography` (`question_number`, `question_text`) VALUES
(1, 'Himalayan mountain system originated from which of the following geosynclines?'),
(2, 'India is located in which Continent?'),
(3, 'Which among the following is India’s first Expressway?'),
(4, 'India shares land borders with how many countries?');

-- --------------------------------------------------------

--
-- Table structure for table `ge_options`
--

CREATE TABLE `ge_options` (
  `id` int(5) NOT NULL,
  `question_number` int(5) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `goption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ge_options`
--

INSERT INTO `ge_options` (`id`, `question_number`, `is_correct`, `goption`) VALUES
(1, 1, 1, 'Tethys geosynclines'),
(2, 1, 0, 'Ural geosyncline'),
(3, 1, 0, 'Rocky geosyncline'),
(4, 1, 0, 'None of the above'),
(5, 2, 1, 'Asia'),
(6, 2, 0, 'Europe'),
(7, 2, 0, 'Africa'),
(8, 2, 0, 'North America'),
(9, 3, 1, 'Mumbai-Pune Expressway'),
(10, 3, 0, 'Ahmedabad-Vadodara Expressway'),
(11, 3, 0, ' Delhi-Gurgaon Expressway'),
(12, 3, 0, ' Jaipur-Kishangarh Expressway'),
(13, 4, 0, '6'),
(14, 4, 1, '7'),
(15, 4, 0, '8'),
(16, 4, 0, '9');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coptions`) VALUES
(4, 4, 1, '1757'),
(5, 4, 0, '1764'),
(6, 4, 0, '1778'),
(7, 4, 0, '1750'),
(8, 5, 1, 'Buddhists'),
(9, 5, 0, 'hindu'),
(10, 5, 0, 'muslims'),
(11, 5, 0, 'none'),
(12, 3, 1, 'Narendra Modi'),
(13, 3, 0, 'Amit Shah'),
(14, 3, 0, 'Draupadi Murmu'),
(15, 3, 0, 'S Jaishankar'),
(16, 6, 0, 'Behavior of human beings'),
(17, 6, 1, 'Insects'),
(18, 6, 0, 'words'),
(19, 6, 0, 'The formation of rocks'),
(20, 7, 1, 'nazi party'),
(21, 7, 0, 'labour party'),
(22, 7, 0, 'democratic party'),
(23, 7, 0, 'republic party'),
(24, 1, 0, 'north of Tropic of Cancer'),
(25, 1, 0, 'south of the Equator'),
(26, 1, 0, 'south of the Capricorn'),
(27, 1, 1, 'north of the Equator'),
(28, 2, 0, 'Pondicherrys'),
(29, 2, 0, 'Lakshadweep'),
(30, 2, 1, 'Delhi'),
(31, 2, 0, 'Chandigardh'),
(32, 8, 0, 'Moths and Butterflies '),
(33, 8, 1, 'Snakes '),
(34, 8, 0, 'Whales '),
(35, 8, 0, 'Ants'),
(36, 9, 1, 'Draupadi Murmu'),
(37, 9, 0, 'Amit Shah'),
(38, 9, 0, 'Ramnath Kovind'),
(39, 9, 0, 'Manmohan Singh');

-- --------------------------------------------------------

--
-- Table structure for table `polity`
--

CREATE TABLE `polity` (
  `question_number` int(5) NOT NULL,
  `question_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polity`
--

INSERT INTO `polity` (`question_number`, `question_text`) VALUES
(1, 'First session of Lok Sabha was held in which among the following years?'),
(2, 'Which among the following articles defines the Money Bill?');

-- --------------------------------------------------------

--
-- Table structure for table `po_options`
--

CREATE TABLE `po_options` (
  `id` int(5) NOT NULL,
  `question_number` int(5) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `poption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_options`
--

INSERT INTO `po_options` (`id`, `question_number`, `is_correct`, `poption`) VALUES
(1, 1, 0, '1950'),
(2, 1, 0, '1951'),
(3, 1, 1, '1952'),
(4, 1, 0, '1953'),
(5, 2, 1, ' Article 110'),
(6, 2, 0, ' Article 111'),
(7, 2, 0, ' Article 112'),
(8, 2, 0, ' Article 113');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'The southernmost point of peninsular India, that is, Kanyakumari, is'),
(2, ' Which of the following union territories of India has the highest density of population per sq km?'),
(3, 'Who is Prime Minister of India?'),
(4, 'The Battle of Plassey was fought in'),
(5, 'Tripitakas are sacred books of'),
(6, ' Entomology is the science that studies'),
(7, 'Hitler party which came into power in 1933 is known as'),
(8, '‘Ophiology’ is the study of which of the following animals?'),
(9, 'Who is president of India?');

-- --------------------------------------------------------

--
-- Table structure for table `qus`
--

CREATE TABLE `qus` (
  `id` int(11) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qus`
--

INSERT INTO `qus` (`id`, `questions`, `ans1`, `ans2`, `ans3`, `ans4`, `correct`, `cat_id`) VALUES
(1, 'The Battle of Plassey was fought in which year?', '1757', '1764', '1857', '1831', 0, 1),
(2, 'India is located in which Continent?', 'asia', 'europe', 'africa', 'north america', 0, 2),
(3, 'India shares land borders with how many countries?', '9', '6', '7', '8', 2, 2),
(4, 'Abolition of untouchability is given in which article ? ', '15', '16', '17', '18', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentregist`
--

CREATE TABLE `studentregist` (
  `s_id` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregist`
--

INSERT INTO `studentregist` (`s_id`, `student_name`, `email`, `dob`, `mobile_no`, `gender`, `password`) VALUES
(1, 'ankit prajapati', 'ap@gmail.com', '2002-06-11', '1478523132', 'male', 'ap123'),
(2, 'ayushi singh', 'ay@gmail.com', '2008-09-03', '9874510478', 'female', 'ayu12'),
(3, 'shreyansh singh', 's@gmail.com', '2001-09-20', '9874563210', 'male', 's123'),
(28, 'karan sen', 'karan@gmail.com', '2007-01-10', '6515111780', 'male', 'kk111'),
(31, 'krish prasad', 'krish@gmail.com', '2022-08-26', '1478754120', 'male', 'kr123'),
(32, 'shreya singh', 'shreya@gmail.com', '2008-06-19', '7874541212', 'female', 'shr123'),
(33, 'neetu singh', 'neetu@gmail.com', '1985-06-01', '9723254706', 'female', 'neetu12'),
(35, 'Kunju Singh', 'kunj@gmail.com', '2018-09-21', '9874545780', 'female', 'kunj123'),
(37, 'Hrithikkumar Jaiswal', 'hrithik@gmail.com', '2000-09-22', '9725801343', 'male', 'hrx123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminemail`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geography`
--
ALTER TABLE `geography`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `ge_options`
--
ALTER TABLE `ge_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polity`
--
ALTER TABLE `polity`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `po_options`
--
ALTER TABLE `po_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `qus`
--
ALTER TABLE `qus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentregist`
--
ALTER TABLE `studentregist`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ge_options`
--
ALTER TABLE `ge_options`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `po_options`
--
ALTER TABLE `po_options`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qus`
--
ALTER TABLE `qus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentregist`
--
ALTER TABLE `studentregist`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
