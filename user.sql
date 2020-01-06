-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 01:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobiotics`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USER NAME` varchar(100) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `COUNTRY` varchar(50) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `CONTACT NO` varchar(13) NOT NULL,
  `CREATED DATE` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `USER NAME`, `CITY`, `COUNTRY`, `DOB`, `CONTACT NO`, `CREATED DATE`) VALUES
(1, 'admin', 'Jamshedpur', 'India', '1993-03-03', '7896564123', '01/04/2020'),
(2, 'admin1', 'Kolkata', 'India', '1996-01-01', '9216549870', '01/04/2020'),
(3, 'Sonu Kumar', 'Patna', 'India', '1995-06-05', '7896564125', '01/04/2020'),
(4, 'Piyush Ranjan', 'Bokaro', 'India', '1996-02-05', '9564871244', '01/04/2020'),
(5, 'Bablu Murmu', 'Jamshedpur', 'India', '1994-04-07', '9614512451', '01/04/2020'),
(6, 'Abhishek Kumar', 'Allahabad', 'India', '1996-07-15', '7614515632', '01/04/2020'),
(7, 'Shubham Bordia', 'Indore', 'India', '1996-11-14', '8541297851', '01/05/2020'),
(8, 'Gulshan Baraik', 'Ranchi', 'India', '1995-09-08', '9693946884', '01/05/2020'),
(9, 'Rohita Tandi', 'Bhubaneswar', 'India', '1994-08-24', '8645781245', '01/05/2020'),
(10, 'Akshay Kumar Patel', 'Jaunpur', 'India', '1995-11-13', '8314526381', '01/05/2020'),
(11, 'Bruce Lee', 'California', 'United States', '1940-09-27', '7845262315', '01/05/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
