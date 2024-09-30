-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 04:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `bookID` int(11) NOT NULL,
  `book_title` text NOT NULL,
  `Author` varchar(100) NOT NULL,
  `SiNO` int(11) NOT NULL,
  `SbNO` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`bookID`, `book_title`, `Author`, `SiNO`, `SbNO`, `catID`, `description`, `qty`) VALUES
(1, 'Fundamentals of Programming', 'Me Kynlee', 12, 11011, 1, 'Book for Programming 1', 10),
(2, 'Object-Oriented Programming', 'Bertrand Meyer', 7, 10121, 3, 'Book for OOP Programming Approach', 15),
(3, 'Business Plan', 'Mortron Blee', 50, 12001, 5, 'Start up for business planning', 25),
(4, 'Introduction in Culinary ', 'Victoria Malos', 1, 14572, 4, 'Culinary book for Hospitality Management', 11),
(5, 'Introduction in Law Enforcement ', 'Mike Salazar', 77, 17002, 2, 'Book for Criminal Justice', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrowers`
--

CREATE TABLE `tbl_borrowers` (
  `brID` int(11) NOT NULL,
  `studentNo` varchar(50) NOT NULL,
  `bookID` int(11) NOT NULL,
  `visitorID` int(11) NOT NULL,
  `date_Br` datetime NOT NULL,
  `date_return` datetime NOT NULL,
  `expected_due` date NOT NULL,
  `processIN_by` int(11) NOT NULL,
  `processOUT_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_borrowers`
--

INSERT INTO `tbl_borrowers` (`brID`, `studentNo`, `bookID`, `visitorID`, `date_Br`, `date_return`, `expected_due`, `processIN_by`, `processOUT_by`) VALUES
(1, '23-1556', 1, 6, '2024-08-17 11:50:24', '2024-08-15 16:50:24', '2024-08-21', 4, 4),
(2, '24-1457', 5, 5, '2024-08-14 08:52:16', '2024-08-16 14:52:16', '2024-08-24', 3, 4),
(3, '24-0010', 2, 1, '2024-08-17 11:52:16', '2024-08-17 12:52:16', '2024-08-19', 4, 2),
(4, '23-1100', 3, 4, '2024-08-23 14:52:16', '2024-08-23 14:52:16', '2024-08-25', 1, 2),
(5, '24-1001', 4, 2, '2024-08-01 14:52:16', '2024-08-05 11:52:16', '2024-08-06', 1, 3),
(6, '23-1325', 3, 3, '2024-08-23 14:52:16', '2024-08-23 14:52:16', '2024-08-24', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `catID` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Rack` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`catID`, `Category`, `Rack`) VALUES
(1, 'Computing', 2),
(2, 'Criminal Studies', 1),
(3, 'Programming', 2),
(4, 'Hospitality', 3),
(5, 'Business Management', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleID` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleID`, `Role`) VALUES
(1, 'ADMIN'),
(2, 'Librarian'),
(3, 'Assistant'),
(4, 'Custodian'),
(5, 'SECRETARY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_system_logs`
--

CREATE TABLE `tbl_system_logs` (
  `logID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `activity` text NOT NULL,
  `process_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mi` varchar(50) NOT NULL,
  `Bdate` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `ContantNo` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `Fname`, `Lname`, `Mi`, `Bdate`, `Gender`, `Address`, `ContantNo`, `Email`, `Username`, `Password`, `Role`, `STATUS`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN', '2024-08-10', 'FEMALE', 'Sta Ana Pampanga', '099878676', 'admin@gmail.com', 'ADMIN', 'ADMIN', 1, 1),
(2, 'Juan', 'Dela Cruz', 'Santiago', '2014-08-10', 'MALE', 'Sta Lucia Pampanga ', '0987545542', 'jdc@gmail.com', 'Juan123', 'pass1234', 2, 1),
(3, 'Lyn', 'Guo', 'Tiu', '2001-08-01', 'FEMALE', 'Sta Ana Pampanga', '0913354556', 'lyn@gmail.com', 'lyn123', 'pass2', 3, 0),
(4, 'Luis', 'Estacio', 'Martin', '2004-07-31', 'MALE', 'San Nicolas Pampanga', '092425251', 'LE@gmail.com', 'Luis^_^', 'pass123', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

CREATE TABLE `tbl_visitors` (
  `visitorID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mi` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `StudentNO` varchar(50) NOT NULL,
  `timeIN` datetime NOT NULL,
  `timeOUT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`visitorID`, `Fname`, `Lname`, `Mi`, `Course`, `StudentNO`, `timeIN`, `timeOUT`) VALUES
(1, 'Julius', 'Marin', 'Narciso', 'BSIT', '24-0010', '2024-08-17 08:35:15', '2024-08-23 09:30:31'),
(2, 'Grace', 'De Ala', 'Santos', 'BSHM', '24-1001', '2024-08-12 10:06:29', '2024-08-12 08:11:39'),
(3, 'John Christopher', 'Malang ', 'Fernando', 'BSBA', '23-1325', '2024-08-13 10:06:29', '2024-08-13 11:06:29'),
(4, 'Jerome', 'Capili', 'David', 'BSIT', '23-1100', '2024-08-12 10:05:42', '2024-08-12 11:11:42'),
(5, 'Manuel', 'Mariano', 'Due', 'BSCrim', '24-1457', '2024-08-14 10:10:42', '2024-08-14 12:10:42'),
(6, 'Lourdes', 'Garcia', 'Sanchez', 'BSIT', '23-1556', '2024-08-14 08:15:12', '2024-08-14 10:15:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `tbl_borrowers`
--
ALTER TABLE `tbl_borrowers`
  ADD PRIMARY KEY (`brID`),
  ADD KEY `bookID` (`bookID`),
  ADD KEY `visitorID` (`visitorID`),
  ADD KEY `processIN_by` (`processIN_by`),
  ADD KEY `processOUT_by` (`processOUT_by`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `tbl_system_logs`
--
ALTER TABLE `tbl_system_logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `Role` (`Role`);

--
-- Indexes for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  ADD PRIMARY KEY (`visitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_borrowers`
--
ALTER TABLE `tbl_borrowers`
  MODIFY `brID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_system_logs`
--
ALTER TABLE `tbl_system_logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  MODIFY `visitorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD CONSTRAINT `tbl_books_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `tbl_categories` (`catID`);

--
-- Constraints for table `tbl_borrowers`
--
ALTER TABLE `tbl_borrowers`
  ADD CONSTRAINT `tbl_borrowers_ibfk_1` FOREIGN KEY (`bookID`) REFERENCES `tbl_books` (`bookID`),
  ADD CONSTRAINT `tbl_borrowers_ibfk_2` FOREIGN KEY (`visitorID`) REFERENCES `tbl_visitors` (`visitorID`),
  ADD CONSTRAINT `tbl_borrowers_ibfk_3` FOREIGN KEY (`processIN_by`) REFERENCES `tbl_users` (`userID`),
  ADD CONSTRAINT `tbl_borrowers_ibfk_4` FOREIGN KEY (`processOUT_by`) REFERENCES `tbl_users` (`userID`);

--
-- Constraints for table `tbl_system_logs`
--
ALTER TABLE `tbl_system_logs`
  ADD CONSTRAINT `tbl_system_logs_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_users` (`userID`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `tbl_roles` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
