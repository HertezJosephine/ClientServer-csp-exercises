-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 02:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sjtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE `baptism` (
  `baptism_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `m_fname` varchar(200) NOT NULL,
  `m_mname` varchar(200) NOT NULL,
  `m_lname` varchar(200) NOT NULL,
  `f_fname` varchar(200) NOT NULL,
  `f_mname` varchar(200) NOT NULL,
  `f_lname` varchar(200) NOT NULL,
  `birthplace` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `baptism_dt` varchar(200) NOT NULL,
  `appointment_dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `confirmation_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `m_fname` varchar(200) NOT NULL,
  `m_mname` varchar(200) NOT NULL,
  `m_lname` varchar(200) NOT NULL,
  `f_fname` varchar(200) NOT NULL,
  `f_mname` varchar(200) NOT NULL,
  `f_lname` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `confirmation_dt` varchar(200) NOT NULL,
  `appointment_dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email_add` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requiem`
--

CREATE TABLE `requiem` (
  `requiem_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `m_fname` varchar(200) NOT NULL,
  `m_mname` varchar(200) NOT NULL,
  `m_lname` varchar(200) NOT NULL,
  `f_fname` varchar(200) NOT NULL,
  `f_mname` varchar(200) NOT NULL,
  `f_lname` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `deathdate` varchar(200) NOT NULL,
  `requiem_dt` varchar(200) NOT NULL,
  `appointment_dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `wedding_id` int(11) NOT NULL,
  `g_fname` varchar(200) NOT NULL,
  `g_mname` varchar(200) NOT NULL,
  `g_lname` varchar(200) NOT NULL,
  `gm_fname` varchar(200) NOT NULL,
  `gm_mname` varchar(200) NOT NULL,
  `gm_lname` varchar(200) NOT NULL,
  `gf_fname` varchar(200) NOT NULL,
  `gf_mname` varchar(200) NOT NULL,
  `gf_lname` varchar(200) NOT NULL,
  `g_birthdate` varchar(200) NOT NULL,
  `b_fname` varchar(200) NOT NULL,
  `b_mname` varchar(200) NOT NULL,
  `b_lname` varchar(200) NOT NULL,
  `bm_fname` varchar(200) NOT NULL,
  `bm_mname` varchar(200) NOT NULL,
  `bm_lname` varchar(200) NOT NULL,
  `bf_fname` varchar(200) NOT NULL,
  `bf_mname` varchar(200) NOT NULL,
  `bf_lname` varchar(200) NOT NULL,
  `b_birthdate` varchar(200) NOT NULL,
  `wedding_dt` varchar(200) NOT NULL,
  `appointment_dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptism`
--
ALTER TABLE `baptism`
  ADD PRIMARY KEY (`baptism_id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`confirmation_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `requiem`
--
ALTER TABLE `requiem`
  ADD PRIMARY KEY (`requiem_id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`wedding_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptism`
--
ALTER TABLE `baptism`
  MODIFY `baptism_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `confirmation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requiem`
--
ALTER TABLE `requiem`
  MODIFY `requiem_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `wedding_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
