-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 04:54 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` bigint NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('N','Y') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `phone`, `password`, `dob`, `gender`, `address`, `course`, `image`, `status`) VALUES
(96, 'Rohan', 'hi@gmail.com', 6290353314, '16fcb1091f8a0cc70c96e2ff97fdd213', '16-6-1971', 'male', 'kolkata', 'html,css,JavaScript', 'uploads/word-demo-appearing-behind-torn-260nw-1782295403.webp', 'N'),
(97, 'Rohan', 'rohan@gmail.com', 6290353314, '25d55ad283aa400af464c76d713c07ad', '16-6-1971', 'male', 'kolkata', 'html', 'uploads/concept-words-live-demo-on-260nw-1855958839.webp', 'N'),
(98, 'Rohan', 'akrohan@gmail.com', 6290353314, 'e10adc3949ba59abbe56e057f20f883e', '14-9-1972', 'male', 'kolkata', 'html,css,JavaScript', 'uploads/concept-words-live-demo-on-260nw-1855958839.webp', 'N'),
(99, 'Rohan', 'akrohan@gmail.com', 6290353314, '6537e99af2c2223642df9f70a0b5afca', '14-9-1972', 'male', 'kolkata', 'html,css,JavaScript', 'uploads/depositphotos_9803930-stock-photo-demo-cubes.jpg', 'N'),
(118, 'Rohan', 'akrohan@gmail.com', 6290353314, 'e10adc3949ba59abbe56e057f20f883e', '17-2-1973', 'male', 'ads', 'html,css,JavaScript', 'uploads/images.jpeg', 'N'),
(119, 'Rohan', 'akrohan@gmail.com', 6290353314, 'd8578edf8458ce06fbc5bb76a58c5ca4', '17-2-1973', 'male', 'ads', 'html,css,JavaScript', 'uploads/concept-words-live-demo-on-260nw-1855958839.webp', 'N'),
(120, 'Rohan', 'akrohan@gmail.com', 6290353314, '8abde6212f0d44c1ec9308228ec27be3', '9-5-1970', 'female', '+64\r\n85\r\n', 'html,css,JavaScript', 'uploads/beautiful-rain-forest-ang-ka-nature-trail-doi-inthanon-national-park-thailand-36703721.jpg', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
