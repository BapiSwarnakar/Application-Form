-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2022 at 05:09 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mimtedu_application_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin_type` varchar(20) NOT NULL,
  `admin_flag` int(11) NOT NULL,
  `admin_date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `admin_type`, `admin_flag`, `admin_date`) VALUES
(2, 'Admin', '123', 'SA', 1, '2022-02-10 12:44:42.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Reg_Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `school` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `addmission` varchar(50) NOT NULL,
  `Reg_Flag` int(2) NOT NULL,
  `Reg_Date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Reg_Id`, `name`, `father`, `mother`, `guardian`, `dob`, `school`, `nationality`, `cast`, `aadhar`, `mobile1`, `mobile2`, `address`, `addmission`, `Reg_Flag`, `Reg_Date`) VALUES
(20, 'Bapi Swarnakar', 'NANDALAL SWARNAKAR', 'SOMA SWARNAKAR', 'Nandalal swarnakar', '1999-11-02', 'Raiganj University', 'Hindu', 'OBC-B', '921182565872', '6295283474', '6295283474', 'Kushgram', 'eleven(xi)', 1, '2022-02-11 16:39:18.039239');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`Reg_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Reg_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
