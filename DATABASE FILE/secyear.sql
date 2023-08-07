-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 05:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `announcement` varchar(50) NOT NULL,
  `bloodneed` varchar(3) NOT NULL,
  `organ` varchar(15) DEFAULT NULL,
  `dat` date NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `organ`, `dat`, `organizer`, `requirements`) VALUES
(1, 'Indian Organ Donation Day', 'B+', 'eyes', '2022-11-30', 'Helping People', 'Weight at least 50kg, No alcohol intake in 24hrs prior to donation, light meal should be taken before donation, be in good health, must be 18 years old and must have at least 3 month interval than the last donation.'),
(2, 'URGENT CASE: Serious Accident Condition', 'B-', 'liver', '2022-11-11', 'City Hospital', 'Must be in good health and feeling very well. Must weigh at least 110 lbs.'),
(4, 'New World', 'A+', 'Heart', '2002-12-02', 'Aditya Jha', 'Fully functional working heart');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `organ` varchar(15) DEFAULT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bloodqty` int(11) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `organ`, `address`, `contact`, `bloodqty`, `collection`) VALUES
(3, 'Ishanvi', 'M', '1997-05-26', 60, 'B-', 'Heart', 'Street 5, Los Angele', '8521479633', 310, '2022-02-16'),
(8, 'Helly', 'M', '1991-05-26', 88, 'O+', 'Heart', 'Geeta Vihar', '8555555545', 360, '2022-05-27'),
(9, 'Dilith', 'M', '1988-06-14', 69, 'AB+', 'Liver', 'Jawahar Nagar', '7854447854', 312, '2022-10-12'),
(10, 'Lakshaya', 'F', '1990-02-12', 59, 'AB-', 'Eyes', 'Civil Lines', '8555554585', 310, '2022-07-13'),
(11, 'Sita', 'F', '1996-02-02', 60, 'B+', 'Heart', 'Judicial Complex', '7878787850', 360, '2023-04-13'),
(12, 'Aditya', 'M', '1997-01-05', 70, 'B+', 'Pancreas', 'Gandhi Colony', '8521112450', 310, '2022-07-13'),
(13, 'Gaurav', 'M', '1980-03-03', 79, 'B+', 'Liver', 'Sector-8, MD Area', '8547778500', 312, '2023-07-12'),
(14, 'Abhishek', 'M', '1990-12-24', 69, 'O+', 'Pancreas', 'MG Road', '8545554700', 310, '2022-11-01'),
(15, 'Geeta', 'M', '1995-06-15', 75, 'O-', 'Kidney', 'H-55, Naidu Road', '7454447410', 311, '2022-01-28'),
(16, 'Martha', 'M', '1986-11-11', 85, 'AB+', 'Kidney', 'Patel Colony', '8545557854', 310, '2022-05-31'),
(17, 'Parth', 'M', '1975-05-05', 80, 'O-', 'Heart', '50, Ram Nagar', '7454447854', 360, '2022-03-27'),
(20, 'Sanjeevni', 'F', '2002-02-06', 50, 'AB+', 'Pancreas', '98 gokhale marg', '1112223336', 550, '2022-11-24'),
(21, 'Prajjwal Chamaria', 'M', '2022-11-04', 44, 'B+', 'Eyes', '40 Laxman PAth, shya', '0966015867', 100, '2022-11-28'),
(23, 'Aarti', 'F', '2002-08-02', 65, 'B+', 'Liver', 'aarti@gmail.com', '9328928392', 0, '2022-07-05'),
(24, 'Aarti', 'F', '2002-08-02', 65, 'B+', 'Pancreas', 'aarti@gmail.com', '9328928392', 0, '2023-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `campaigndb`
--

CREATE TABLE `campaigndb` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `phn` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigndb`
--

INSERT INTO `campaigndb` (`id`, `cname`, `oname`, `phn`, `cdate`, `descp`) VALUES
(8, 'Saving Lives Together', 'Ishanvi Foundation', 1597534560, '2022-07-23', 'Lorem ipsum'),
(30, 'Live Life', 'aasha foundation', 2147483647, '2022-10-23', 'organ donation drive'),
(31, 'Lets Share Our Life', 'Sagar Foundation', 2147483647, '2022-11-16', 'We encourage people to donate organs ');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `organ` varchar(15) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `organ`, `email`, `address`, `contact`, `username`, `password`) VALUES
(21, 'Prajjwal', 'Manish', 'M', '1991-12-09', 69, 'AB+', 'Kidney', 'prajjchamp@gmail.com', '905  Chand Nagar', '7854445470', 'prajjwal', 'password'),
(26, 'Abhishek Agarwal', 'Prajjwal Chamaria', 'M', '2002-10-15', 80, 'AB-', 'Eyes', 'abhi@gmail.com', '12,Kanyakumari', '9997774445', 'admin', 'admin'),
(27, 'Prajjwal Chamaria', 'Lakshaya', 'M', '2222-12-12', 45, 'B+', 'eyes', 'prajjchamp@gmail.com', '40 Laxman PAth', '7878787878', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `organ_requests`
--

CREATE TABLE `organ_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `organtype` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ_requests`
--

INSERT INTO `organ_requests` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `organtype`, `message`) VALUES
(1, 'Aditya Jha', 'Male', '2002-02-01', 80, 'AB+', '40 Laxman PAth', '9667251799', 'Lungs', 'Yes'),
(3, 'Prajjwal Chamaria', 'Male', '2022-11-08', 66, 'B+', '40 Laxman PAth', '9299812457', 'Hearts', 'I want organ.'),
(5, 'Aarti', 'Female', '2010-09-05', 45, 'A+', '12,aqwsde,Delhi', '1283921983', 'Liver', 'Urgent need of organ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `donorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `donorname`) VALUES
(1, 'user', 'pass', 'harryden'),
(31, 'prajj', 'password', 'Prajjwal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndb`
--
ALTER TABLE `campaigndb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organ_requests`
--
ALTER TABLE `organ_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `campaigndb`
--
ALTER TABLE `campaigndb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `organ_requests`
--
ALTER TABLE `organ_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
