-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 11:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fut_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `staff_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `first_name`, `last_name`, `staff_id`, `email`, `password`, `dept`, `phone`, `pic`, `date`) VALUES
(1, 'mike nec', '', 'staff/uni/23', 'g@gmail.com', 'qwer', 'maths', '', '', '2021-09-27 20:29:27'),
(2, 'John', 'Doe', 'staff/fut/4', 'meyana', 'word', 'def', '1209323201', '', '2021-09-27 20:29:27'),
(3, 'Mike', 'epps', 'staff/fut/1', 'mes@gmail.com', 'qwer', 'mond', '34948938923', '', '2021-09-27 20:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `audio_table`
--

CREATE TABLE `audio_table` (
  `id` int(11) NOT NULL,
  `audio_name` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `audio_link` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books_table`
--

CREATE TABLE `books_table` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `f_name`, `l_name`, `student_id`, `email`, `password`, `dept`, `phone`, `pic`, `date`) VALUES
(1, 'flan stone', '', 'meyana', 'g@gmail.com', '1234', 'english', '982314353', '0', '2021-09-27 20:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `videos_table`
--

CREATE TABLE `videos_table` (
  `id` int(11) NOT NULL,
  `video_name` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_table`
--
ALTER TABLE `audio_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_table`
--
ALTER TABLE `books_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos_table`
--
ALTER TABLE `videos_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `audio_table`
--
ALTER TABLE `audio_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books_table`
--
ALTER TABLE `books_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos_table`
--
ALTER TABLE `videos_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
