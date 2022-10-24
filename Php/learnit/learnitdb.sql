-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 02:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnitdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedata`
--

CREATE TABLE `coursedata` (
  `id` int(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedata`
--

INSERT INTO `coursedata` (`id`, `course`, `details`, `img`) VALUES
(11, ' HTML ', ' The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) ', 'upload/2041_HTML-Tutorials.png'),
(12, 'PHP', 'PHP is a general-purpose scripting language geared towards web development.[7] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[8] The PHP reference implementation is no', 'upload/4341_brochure-flyer-paper-poster-logo-trademark-text-building-office-buildi.jpg'),
(13, 'CSS', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wid', 'upload/4270_css.jpg'),
(15, 'javaScript', 'JavaScript ,[10] often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.[11] Over 97% of websites use JavaScript on the clie', 'upload/7797_js.png'),
(16, 'jQuery', 'jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.[3] It is free, open-source software using the permissi', 'upload/1983_guide-jquery.webp'),
(17, 'BootStrap', 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and (optionally) JavaScript-based design templates for typograph', 'upload/7940_images.png');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(200) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `activity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fullName`, `email`, `phone`, `password`, `gender`, `dob`, `image`, `activity`) VALUES
(15, 'Sk Rohan ali', 'skmirajuddin055@gmail.com', 7686944030, '654321', 'female', '2022-03-24', 'upload/4643_2021-03-24.png', 'March 5, 2022, 6:34 pm IST'),
(18, 'Sk das', 'skmirajuddin055@gmail.com', 6290353314, '123456', 'male', '2022-03-23', 'upload/5481_2021-03-24.png', 'March 10, 2022, 6:44 pm IST'),
(19, 'new Rohan', 'suman@gmail.com', 7686944030, '789456', 'not set', 'not set', 'not set', 'March 10, 2022, 6:44 pm IST'),
(20, 'gopal das', 'suman@gmail.com', 6290353314, '456123', 'male', '2022-03-24', 'upload/3118_IMG_0180.JPG', 'March 10, 2022, 6:45 pm IST'),
(21, 'manik  das', 'skmirajuddin055@gmail.com', 6290353314, '789456', 'male', '2022-03-30', 'upload/2987_IMG_0183.JPG', 'March 10, 2022, 6:46 pm IST'),
(22, 'new Rohan', 'suman@gmail.com', 7686944030, '123456', 'not set', 'not set', 'not set', 'March 12, 2022, 8:35 pm IST'),
(23, 'Sk Rohan', 'skrohan0420@gmail.com', 6290353314, '123456', 'male', '2022-03-25', 'upload/3206_Polish_20210311_113747296.jpg', 'March 13, 2022, 12:35 pm IST'),
(24, 'Sk Rohan', 'skmirajuddin055@gmail.com', 6290353314, 'qwerty', 'male', '2022-03-30', 'upload/5646_2021-06-10 (2).png', 'March 13, 2022, 6:14 pm IST');

-- --------------------------------------------------------

--
-- Table structure for table `usermsg`
--

CREATE TABLE `usermsg` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermsg`
--

INSERT INTO `usermsg` (`id`, `name`, `email`, `msg`, `time`) VALUES
(4, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'hello', ''),
(5, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'hi', ''),
(7, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'i am Rohan ', ''),
(8, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'hello', ''),
(9, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'hi', ''),
(10, 'abcd', 'skmirajuddin055@gmail.com', 'hi', ''),
(11, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'i am Rohan ', 'March 13, 2022, 5:23 pm IST'),
(12, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'hello', 'March 13, 2022, 5:28 pm IST'),
(13, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'i am Rohan ', 'March 13, 2022, 5:32 pm IST'),
(14, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'i am Rohan ', 'March 13, 2022, 6:41 pm IST'),
(15, 'Sk Rohan ', 'skmirajuddin055@gmail.com', 'i am Rohan ', 'March 20, 2022, 8:02 pm IST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedata`
--
ALTER TABLE `coursedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursedata`
--
ALTER TABLE `coursedata`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usermsg`
--
ALTER TABLE `usermsg`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
