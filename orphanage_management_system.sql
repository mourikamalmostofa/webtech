-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphanage_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopter`
--

CREATE TABLE `adopter` (
  `adopter_id` int(11) NOT NULL,
  `adopter_mail` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `adopter_name` varchar(50) NOT NULL,
  `adopter_phone` varchar(50) NOT NULL,
  `adopter_image` varchar(50) DEFAULT NULL,
  `adopter_profession` varchar(50) NOT NULL,
  `adopter_gender` varchar(50) NOT NULL,
  `adopter_address` varchar(50) NOT NULL,
  `adoption_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopter`
--

INSERT INTO `adopter` (`adopter_id`, `adopter_mail`, `password`, `adopter_name`, `adopter_phone`, `adopter_image`, `adopter_profession`, `adopter_gender`, `adopter_address`, `adoption_status`) VALUES
(1, 'dip.kumar020@gmail.com', 'testtest1111@@', 'SUDIPTA KUMAR DAS', '01931117419', '20151216_121924.jpg', 'Engineer', 'Male', '78/4 EAST RAMPURA, DHAKA-1219', 'Not Adopted'),
(2, 'ritu@gmail.com', 'ritu1234@@', 'Ritu Das', '01212112312', 'N/A', 'Doctor', 'Female', 'Badda, Dhaka', 'Pending Appointment'),
(0, 'abu@gmail.com', 'a12345678@', 'abu huryra', '01261652156', 'DSC09923.JPG', 'tcacher', 'Male', 'dsfs', 'Request Pending'),
(0, 'rah@gmail.com', '12345@@@', 'a h', '232324', 'N/A', 'bacha', 'Female', '\r\n       dhaka                                    ', 'Not Adopted');

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `adoption_id` int(11) NOT NULL,
  `orphan_name` varchar(50) NOT NULL,
  `adopter_name` varchar(50) NOT NULL,
  `adopter_phone` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`adoption_id`, `orphan_name`, `adopter_name`, `adopter_phone`, `cost`, `date`) VALUES
(1, 'rahat', 'islam', '01239656', 'cass', '17aug2023');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_request`
--

CREATE TABLE `adoption_request` (
  `request_id` int(11) NOT NULL,
  `orphan_image` varchar(50) DEFAULT NULL,
  `orphan_name` varchar(50) NOT NULL,
  `orphan_gender` varchar(50) NOT NULL,
  `orphan_age` varchar(50) NOT NULL,
  `adopter_image` varchar(50) DEFAULT NULL,
  `adopter_name` varchar(50) NOT NULL,
  `adopter_mail` varchar(50) NOT NULL,
  `adopter_phone` varchar(50) NOT NULL,
  `request_date` varchar(50) NOT NULL,
  `adoption_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption_request`
--

INSERT INTO `adoption_request` (`request_id`, `orphan_image`, `orphan_name`, `orphan_gender`, `orphan_age`, `adopter_image`, `adopter_name`, `adopter_mail`, `adopter_phone`, `request_date`, `adoption_status`) VALUES
(0, 'udoy.jpg', 'Udoy', 'Male', '11', '20151218_141758.jpg', 'abu huryra', 'abu@gmail.com', '01261652156', '27-08-2023', 'Request Pending'),
(0, 'aarian.jpg', 'Aarian', 'Male', '13', '20151218_141758.jpg', 'abu huryra', 'abu@gmail.com', '01261652156', '27-08-2023', 'Request Pending'),
(0, 'shakil.jpg', 'Shakil', 'Male', '12', '20151218_141758.jpg', 'abu huryra', 'abu@gmail.com', '01261652156', '27-08-2023', 'Request Pending');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `orphan_name` varchar(50) NOT NULL,
  `adopter_name` varchar(50) NOT NULL,
  `adopter_phone` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `orphan_name`, `adopter_name`, `adopter_phone`, `date_time`) VALUES
(0, 'Rahat', 'Ritu Das', '01212112312', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `donarinfo`
--

CREATE TABLE `donarinfo` (
  `d_id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donarinfo`
--

INSERT INTO `donarinfo` (`d_id`, `name`, `email`, `pass`, `gender`, `address`) VALUES
(1, 'Ahnaf Hasnain', 'ahnafnahiun@gmail.com', '1234', 'Male', 'Mohora,Chattagram'),
(2, 'Saptanil Ghose', 'saptanilg123@gmail.com', '1234', 'Male', 'Kuril,Dhaka'),
(3, 'Aynan Chy', 'aynan123@gmail.com', '1234', 'Male', 'Mohora,Ctg'),
(4, 'Hasnain', 'hasnain123@gmail.com', '1234', 'Male', 'Kulshi, Ctg'),
(5, 'Hasan Ali', 'hasan123@gmail.com', '1234', 'Male', 'Uttara-6'),
(6, 'Sneha Dhar', 'sneha123@gmail.com', '1234', 'Female', 'Basundhora, R/A, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `do_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`do_id`, `name`, `organization`, `purpose`, `amount`) VALUES
(1, 'Md Faruk', 'Charity', 'Food', 50000),
(2, 'Mr Roy', 'Company', 'Dress', 20000),
(3, 'Ahnaf Hasnain', 'Personal', 'Food', 105000),
(4, 'Sneha Roy', 'Private Company', 'Medicine', 45000),
(5, 'Saptanil Ghose', 'Personal', 'Building', 250000),
(8, '', 'Company', 'Cloth', 115000),
(9, 'Rajib Jaman', 'Charity', 'Food', 40000),
(10, 'Bkash Ghose', 'Personal', 'Medicine', 50000),
(11, 'Hindol Ghose', 'Private Company', 'Water', 25000),
(12, 'Sneha Dhar', 'Personal', 'Food', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(90) DEFAULT NULL,
  `event_date` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`) VALUES
(1, 'Annual Orphanage Fundraiser', '05/15/2023'),
(2, 'Sports Day', '06/17/2023'),
(3, 'Talent Show', '07/22/2023'),
(4, 'Movie Night', '08/05/2023'),
(5, 'Back to School Party', '09/02/2023'),
(6, 'Halloween Costume Party', '10/31/2023'),
(7, 'Thanksgiving Feast', '11/23/2023'),
(8, 'Christmas Gift Exchange', '12/24/2023'),
(9, 'New Year\'s Eve Party', '12/31/2023'),
(10, 'Spring Festival Celebration', '03/21/2024');

-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE `orphan` (
  `orphan_id` int(11) NOT NULL,
  `orphan_image` varchar(90) DEFAULT NULL,
  `orphan_mail` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `orphan_name` varchar(90) NOT NULL,
  `orphan_gender` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` varchar(20) DEFAULT NULL,
  `body_color` varchar(20) NOT NULL,
  `adoption_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`orphan_id`, `orphan_image`, `orphan_mail`, `password`, `orphan_name`, `orphan_gender`, `height`, `date_of_birth`, `age`, `body_color`, `adoption_status`) VALUES
(1, 'udoy.jpg', '15.11342.8.hope.heaven@gmail.com', 'udoyudoy1111@@', 'Udoy', 'Male', '5.1', '24-03-2012', '11', 'White', 'Request Pending'),
(2, 'aarian.jpg', '16.11343.9.hope.heaven@gmail.com', 'aarianaarian1111@@', 'Aarian', 'Male', '5.4', '24-03-2010', '13', 'Light brown', 'Request Pending'),
(3, 'itu.jpg', '17.11344.1.hope.heaven@gmail.com', 'ituitu1111@@', 'Itu', 'Female', '4.10', '24-03-2013', '10', 'White', 'Not Adopted'),
(4, 'shakil.jpg', '18.11345.2.hope.heaven@gmail.com', 'shakilshakil1111@@', 'Shakil', 'Male', '5.1', '24-03-2011', '12', 'Brown Dark Brown', 'Request Pending'),
(5, 'sadia.jpg', '19.11346.3.hope.heaven@gmail.com', 'sadiasadia1111@@', 'Sadia', 'Female', '5', '24-03-2014', '9', 'Light brown', 'Not Adopted'),
(6, 'rupa.jpg', '20.11347.4.hope.heaven@gmail.com', 'ruparupa1111@@', 'Rupa', 'Female', '5.4', '24-03-2013', '10', 'Olive Moderate Brown', 'Not Adopted'),
(7, 'rumana.jpg', '21.11348.5.hope.heaven@gmail.com', 'rumanarumana1111@@', 'Rumana', 'Female', '5.1', '24-03-2010', '13', 'White', 'Not Adopted'),
(8, 'rina.jpg', '22.11349.6.hope.heaven@gmail.com', 'rinarina1111@@', 'Rina', 'Female', '5.3', '24-03-2011', '12', 'Olive Moderate Brown', 'Not Adopted'),
(9, 'ornok.jpg', '23.11350.7.hope.heaven@gmail.com', 'ornokornok1111@@', 'Ornok', 'Female', '5.1', '24-03-2013', '10', 'Moderate Brown', 'Not Adopted'),
(10, 'maria.jpg', '24.11351.8.hope.heaven@gmail.com', 'mariamaria1111@@', 'Maria', 'Female', '5.3', '24-03-2014', '9', 'Moderate Brown', 'Not Adopted'),
(11, 'maisha.jpg', '25.11352.9.hope.heaven@gmail.com', 'maishamaisha1111@@', 'Maisha', 'Female', '4.2', '24-03-2011', '12', 'Olive Moderate Brown', 'Not Adopted'),
(12, 'mahmud.jpg', '26.11353.1.hope.heaven@gmail.com', 'mahmudmahmud1111@@', 'Mahmud', 'Male', '4.6', '24-03-2013', '10', 'White', 'Not Adopted'),
(13, 'kasem.jpg', '27.11354.2.hope.heaven@gmail.com', 'kasemkasem1111@@', 'Kasem', 'Male', '4.8', '24-03-2011', '12', 'Brown Dark Brown', 'Not Adopted'),
(14, 'jannat.jpg', '28.11355.3.hope.heaven@gmail.com', 'jannatjannat1111@@', 'Jannat', 'Female', '4.9', '24-03-2016', '7', 'White', 'Not Adopted'),
(15, 'hossain.jpg', '29.11356.4.hope.heaven@gmail.com', 'hossainhossain1111@@', 'Hossain', 'Male', '4.5', '24-03-2012', '11', 'Brown Dark Brown', 'Not Adopted'),
(16, 'hasan.jpg', '30.11357.5.hope.heaven@gmail.com', 'hasanhasan1111@@', 'Hasan', 'Male', '4.8', '24-03-2013', '10', 'Brown Dark Brown', 'Not Adopted'),
(17, 'faria.jpg', '31.11358.6.hope.heaven@gmail.com', 'fariafaria1111@@', 'Faria', 'Female', '4.6', '24-03-2015', '8', 'Olive Moderate Brown', 'Not Adopted'),
(18, 'bilal.jpg', '32.11359.7.hope.heaven@gmail.com', 'bilalbilal1111@@', 'Bilal', 'Male', '4.8', '24-03-2013', '10', 'Brown Dark Brown', 'Not Adopted'),
(19, 'arif.jpg', '33.11360.8.hope.heaven@gmail.com', 'arifarif1111@@', 'Arif', 'Male', '4.9', '24-03-2012', '11', 'White', 'Not Adopted'),
(20, 'alif.jpg', '34.11361.9.hope.heaven@gmail.com', 'alifalif1111@@', 'Alif', 'Male', '5.6', '24-03-2011', '12', 'Moderate Brown', 'Not Adopted'),
(0, 'temp.png', 'rah@gmail.com', 'BB117694@', 'Rahat', 'male', '5.8', '2010-02-25', '13', 'White', 'Pending Appointment');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `orphan_count` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisor_id` int(11) NOT NULL,
  `supervisor_mail` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `supervisor_name` varchar(50) NOT NULL,
  `supervisor_phone` varchar(50) NOT NULL,
  `supervisor_salary` varchar(50) NOT NULL,
  `supervisor_image` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervisor_id`, `supervisor_mail`, `password`, `supervisor_name`, `supervisor_phone`, `supervisor_salary`, `supervisor_image`) VALUES
(1, 'test.supervisor@gmail.com', 'testtest2222@@', 'Test Supervisor', '01231231231', '50000', 'N/A'),
(2, 'huryra80@gmail.com', '@ab117694@', 'Abu huryra', '01521514508', '60000', 'DSC09916.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donarinfo`
--
ALTER TABLE `donarinfo`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`do_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donarinfo`
--
ALTER TABLE `donarinfo`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `do_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
