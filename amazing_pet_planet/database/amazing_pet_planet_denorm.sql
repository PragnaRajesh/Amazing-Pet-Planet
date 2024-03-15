-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 01:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazing_pet_planet_denorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_gender` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `basic_salary` varchar(20) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_name`, `employee_gender`, `date_of_birth`, `employee_address`, `e_mail`, `basic_salary`, `contact_no`) VALUES
(1, 'Vikas', 'male', '1997-01-03', 'Sirsi', 'hegde@gmail.com', '25000  ', 9426351478),
(3, 'Keshav', 'male', '1995-03-29', 'Sirsi', 'keshav@gmail.com', '30000 ', 6325147898),
(4, 'Sandesh', 'male', '1997-09-27', 'Yallapur', 'sandesh@gmail.com', '25000', 7348902263),
(5, 'Adarsh', 'male', '1999-12-24', 'Sagar', 'adarsh@gmail.com', '15000', 9423121316),
(6, 'Smita', 'female', '1997-07-18', 'Shivamogga', 'smita@gmail', '18000', 8432265589);

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `food_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`food_id`, `food_name`, `food_type`, `food_description`) VALUES
(3, 'Pedigree ', 'Animal food', 'All time food'),
(4, 'Fruits', 'Birds food', 'All time food for birds'),
(6, 'Grains', 'Bird food', 'Summer season food\r\n'),
(7, 'Grass', 'Animal food', 'All season food'),
(8, 'Wheat', 'Birds food', 'Winter season food\r\n'),
(9, 'Cattle feed', 'Animal food', 'All season food');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_answer` varchar(100) NOT NULL,
  `login_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`, `type`, `security_question`, `security_answer`, `login_status`) VALUES
(1, 'hegde7202@gmail.com', '123123', 'admin', 'who i am', 'admin', 'Active'),
(18, 'sandeephegde7348@gmail.com', '123123', 'user', 'Enter Your Email Id', 'sandeephegde7348@gmail.com', 'Active'),
(19, 'hegdevinayak008@gmail.com', '123123', 'user', 'Enter Your Email Id', 'hegdevinayak008@gmail.com', 'Active'),
(20, 'sandesh@gmail.com', '123123', 'user', 'Enter Your Email Id', 'sandesh@gmail.com', 'Active'),
(21, 'rahul@gmail.com', '123123', 'user', 'Enter Your Email Id', 'rahul@gmail.com', 'Active'),
(22, 'ananya@gmail.com', '123123', 'user', 'Enter Your Email Id', 'ananya@gmail.com', 'Active'),
(23, 'yamini@gmail.com', '123123', 'user', 'Enter Your Email Id', 'yamini@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `pet_categories`
--

CREATE TABLE `pet_categories_details` (
  `pet_category_id` int(11) NOT NULL,`pet_details_id` int(11) NOT NULL,
  `pet_category_name` varchar(50) NOT NULL,`pet_category_id` int(11) NOT NULL,
  `pet_icons` varchar(100) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_categories`
--

INSERT INTO `pet_categories_details` (`pet_category_id`, `pet_category_name`, `pet_icons`) VALUES
(14, 'German shepherd', 'German_Shepherd_Dog.jpg',8, 14, 'Charlie'),
(15, 'Pomeranian', 'Pomeranians.jpg',9, 16, 'Rocky'),
(16, 'Husky', 'Husky.jpg',10, 22, 'Rosie');

-- --------------------------------------------------------

--
-- Table structure for table `pet_details`
--

--
-- Dumping data for table `pet_details`
--



-- --------------------------------------------------------

--
-- Table structure for table `pet_request`
--

CREATE TABLE `pet_request` (
  `pet_request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pet_details_id` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `request_date` date NOT NULL,
  `request_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_request`
--

INSERT INTO `pet_request` (`pet_request_id`, `user_id`, `pet_details_id`, `reason`, `request_date`, `request_status`) VALUES
(18, 23, 8, 'I need this Dog', '2022-08-17', 'PAID'),
(19, 24, 9, 'I want to buy this pet\r\n', '2022-08-17', 'PAID'),
(20, 27, 12, 'I wanna buy this ', '2022-08-17', 'PAID'),
(21, 23, 11, 'Just beautiful ', '2022-08-17', 'PAID'),
(22, 28, 10, 'I love birds so i want to buy this', '2022-08-17', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_animal`
--

CREATE TABLE `rescue_animal` (
  `rescue_animal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_description` varchar(100) NOT NULL,
  `rescue_description` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `rescue_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_booking`
--

CREATE TABLE `ticket_booking` (
  `ticket_booking_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` varchar(25) NOT NULL,
  `ticket_booking_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_booking`
--

INSERT INTO `ticket_booking` (`ticket_booking_id`, `user_id`, `no_of_adults`, `no_of_children`, `booking_date`, `booking_time`, `ticket_booking_status`) VALUES
(1, '2', 5, 5, '2022-06-03', '12:20', 'hhhhhhhhhhhhhhhhhhhh'),
(3, '3', 10, 10, '2022-06-10', '2.30pm', 'dddddddddd\r\n\r\n'),
(4, '3', 456, 3313, '2022-06-02', '2.30pm', 'kkkkkkkkkkkkkkkk'),
(5, '3', 456, 22, '2022-05-31', '2.30pm', 'ddddddddddd'),
(6, '5', 25, 22, '2022-06-05', '2.45', 'kkkkkkk'),
(7, '6', 7, 8, '2022-06-12', '3.21', 'admim'),
(9, '8', 2, 2, '2022-07-21', '02:24', 'Confirmed'),
(10, '12', 1, 0, '2022-07-31', '12:20', 'Not Confirmed'),
(11, '8', 5, 0, '2022-07-30', '15:33', 'Not Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_first_name`, `user_last_name`, `user_address`, `gender`, `email_id`, `contact_no`) VALUES
(23, 'Sandeep', 'Hegde', 'Sirsi', 'male', 'sandeephegde7348@gmail.com', 8431138839),
(24, 'Vinayak', 'Hegde', 'Sirsi', 'male', 'hegdevinayak008@gmail.com', 9449790125),
(25, 'Sandesh', 'Naik', 'Yellapura', 'male', 'sandesh@gmail.com', 9457632182),
(26, 'Rahul', 'Bhat', 'Siddapura', 'male', 'rahul@gmail.com', 7345621896),
(27, 'Ananya', 'Gowda', 'Sagara', 'female', 'ananya@gmail.com', 9345654785),
(28, 'Yamini', 'Dwivedi', 'Dharwad', 'female', 'yamini@gmail.com', 9455778866);

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `user_payment_id` int(11) NOT NULL,
  `pet_request_id` int(11) NOT NULL,
  `paid_amount` varchar(50) NOT NULL,
  `paid_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`user_payment_id`, `pet_request_id`, `paid_amount`, `paid_date`) VALUES
(12, 18, '18000', '2022-06-25'),
(13, 19, '15000', '2022-06-30'),
(14, 20, '8000', '2022-07-04'),
(15, 21, '3000', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `veterinary_details`
--

CREATE TABLE `veterinary_details` (
  `veterinary_id` int(11) NOT NULL,
  `veterinary_name` varchar(100) NOT NULL,
  `veterinary_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veterinary_details`
--

INSERT INTO `veterinary_details` (`veterinary_id`, `veterinary_name`, `veterinary_description`) VALUES
(4, 'Liv.52', 'Herbal composition that improves liver efficiency and protects the liver from toxins, drugs, and chemicals'),
(6, 'Erina-EP', 'Shampoo is a blend of natural actives for management of ticks, fleas and lice infestation (ectoparasites) among pets'),
(8, 'Spectrin', 'For cats'),
(9, 'Fiprofort plus', 'For cats'),
(10, 'ORO-DIGEST', 'For birds\r\n'),
(11, 'Beaphar Bird Wormer', 'For parrots'),
(14, 'Acetaminophen', 'Dog fever medicine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `pet_categories`
--
ALTER TABLE `pet_categories`
  ADD PRIMARY KEY (`pet_category_id`);

--
-- Indexes for table `pet_details`
--
ALTER TABLE `pet_details`
  ADD PRIMARY KEY (`pet_details_id`);

--
-- Indexes for table `pet_request`
--
ALTER TABLE `pet_request`
  ADD PRIMARY KEY (`pet_request_id`);

--
-- Indexes for table `rescue_animal`
--
ALTER TABLE `rescue_animal`
  ADD PRIMARY KEY (`rescue_animal_id`);

--
-- Indexes for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD PRIMARY KEY (`ticket_booking_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`user_payment_id`);

--
-- Indexes for table `veterinary_details`
--
ALTER TABLE `veterinary_details`
  ADD PRIMARY KEY (`veterinary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pet_categories`
--
ALTER TABLE `pet_categories`
  MODIFY `pet_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pet_details`
--
ALTER TABLE `pet_details`
  MODIFY `pet_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pet_request`
--
ALTER TABLE `pet_request`
  MODIFY `pet_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rescue_animal`
--
ALTER TABLE `rescue_animal`
  MODIFY `rescue_animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  MODIFY `ticket_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `user_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `veterinary_details`
--
ALTER TABLE `veterinary_details`
  MODIFY `veterinary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
