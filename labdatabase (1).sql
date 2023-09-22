-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2023 at 12:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory1`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_section`
--

CREATE TABLE `table_section` (
  `Section` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_section`
--

INSERT INTO `table_section` (`Section`) VALUES
('F1'),
('F2'),
('F3'),
('F4'),
('F5'),
('F6'),
('F7');

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `StudID` int NOT NULL,
  `StudName` text,
  `StudGender` text,
  `StudCourse` text,
  `StudSection` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `StudYear` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`StudID`, `StudName`, `StudGender`, `StudCourse`, `StudSection`, `StudYear`) VALUES
(3, 'Jessica Mitante Ramos', 'Female', 'Information Management', 'F2', 'Third Year'),
(4, 'Kristia Marie Borbe', 'Female', 'Embedded Systems', 'F2', 'Third Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_section`
--
ALTER TABLE `table_section`
  ADD PRIMARY KEY (`Section`);

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`StudID`),
  ADD KEY `StudSection` (`StudSection`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `StudID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_students`
--
ALTER TABLE `table_students`
  ADD CONSTRAINT `table_students_ibfk_1` FOREIGN KEY (`StudSection`) REFERENCES `table_section` (`Section`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
