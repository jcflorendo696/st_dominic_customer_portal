-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 10:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ynai_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `js_account_approval`
--

DROP TABLE IF EXISTS `js_account_approval`;
CREATE TABLE `js_account_approval` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js_account_approval`
--

INSERT INTO `js_account_approval` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `position`) VALUES
(1, 'dummyaccount_0001', 'thisisasamplepassword', 'Maricar', 'Something', 'msomething@sdca.edu.ph', 'Professor'),
(2, 'letty_0123', 'fastandfurious2016', 'Dominic', 'Toretto', 'dtoretto@sdca.edu.ph', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `js_student_info`
--

DROP TABLE IF EXISTS `js_student_info`;
CREATE TABLE `js_student_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `cp_no` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `major` varchar(255) NOT NULL DEFAULT 'n/a'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js_student_info`
--

INSERT INTO `js_student_info` (`id`, `student_id`, `firstname`, `middlename`, `lastname`, `age`, `email`, `gender`, `birthdate`, `tel_no`, `cp_no`, `course`, `address`, `yearlevel`, `nationality`, `major`) VALUES
(1, 20160001, 'John', 'Emerald', 'Doe', 55, 'jemerald@sdca.edu.ph', 'Male', 'January 1, 1950', '112-22-33', '212-23-44', 'Nursing', 'Molino V, Bacoor, Cavite', '4th Year', 'Filipino', 'n/a'),
(2, 20160002, 'Mary', 'Cruz', 'Mendoza', 25, 'mmendoza@sdca.edu.ph', 'Female', 'December 1, 1950', '515-55-55', '0911-223-4412', 'Tourism', 'Sta. Mesa, Manila', '1st Year', 'Filipino', 'n/a'),
(3, 20160003, 'Stacey', 'Yap', 'Co', 22, 'sco@sdca.edu.ph', 'Female', 'February 23, 1990', '471-11-22', '0933-441-22-11', 'Culinary Arts', 'Tagaytay City, Cavite', '2nd Year', 'Chinese', 'n/a'),
(4, 20160004, 'Dianne', 'Dan', 'Diaz', 26, 'ddiaz@sdca.edu.ph', 'Female', 'September 13, 1985', '505-23-44', '0917-312-44-75', 'Information Technology', 'Cebu City', '3rd Year', 'Spanish', 'n/a'),
(5, 20160005, 'Chastity', 'Elise', 'Mercado', 20, 'cmercado@sdca.edu.ph', 'Female', 'June 7, 1996', '818-22-34', '0922-456-14-78', 'Information Technology', 'Mambog 2, Bacoor, Cavite', '3rd Year', 'American', 'n/a'),
(6, 20160006, 'Frezel', 'Ty', 'Enriquez', 25, 'fenriquez@sdca.edu.ph', 'Female', 'August 11, 2016', '515-44-00', '0911-147-55-41', 'Information Technology', 'Pampanga', '4th Year', 'Filipino', 'n/a'),
(7, 20160007, 'Virginia', 'Tersera', 'Yugenio', 21, 'vyugenio@sdca.edu.ph', 'Female', 'April 28, 1999', '505-23-44', '0978-478-48-48', 'Nursing', 'Davao City', '4th Year', 'Filipino', 'n/a'),
(8, 20160008, 'Gerry', 'Chan', 'Marquez', 25, 'gmarquez@sdca.edu.ph', 'Male', 'May 25, 1995', '515-11-11', '0919-223-24-11', 'Political Science', 'Makati City', '3rd Year', 'Filipino', 'n/a'),
(9, 20160009, 'Alvin', 'Gil', 'Mario', 23, 'amario@sdca.edu.ph', 'Male', 'February 2, 1995', '515-44-78', '0978-441-15-87', 'Chemistry', 'San Pablo, Laguna', '2nd Year', 'Filipino', 'n/a'),
(10, 20160009, 'Rachelle', 'Almaden', 'Estancia', 19, 'restancia@edu.com.ph', 'Female', 'March 14, 1994', '111-23-31', '0931-442-31-23', 'Multimedia Arts', 'Dasmarinas, Cavite', '4th Year', 'Filipino', 'n/a'),
(11, 20160010, 'Benedict', 'Francisco', 'Perez', 25, 'bperez@sdca.edu.ph', 'Male', 'January 23, 1994', '111-11-11', '0932-332-24-12', 'Information Technology', 'Carsadang Bago, Imus, Cavite', '4th Year', 'Filipino', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `js_users`
--

DROP TABLE IF EXISTS `js_users`;
CREATE TABLE `js_users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js_users`
--

INSERT INTO `js_users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `position`) VALUES
(0, 'juandelacruz', 'anggaling', 'juan@gmail.com', 'Juan', 'Dela Cruz', 'Supreme Teacher'),
(1, 'admin', 'amazing', 'admin@gmail.com', 'John', 'Doe', 'Administrator'),
(2, 'ynah_v', 'neety', 'ynah@gmail.com', 'Serina', 'Velasquez', 'Vice Chancellor of Academics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `js_account_approval`
--
ALTER TABLE `js_account_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js_student_info`
--
ALTER TABLE `js_student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js_users`
--
ALTER TABLE `js_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `js_account_approval`
--
ALTER TABLE `js_account_approval`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `js_student_info`
--
ALTER TABLE `js_student_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
