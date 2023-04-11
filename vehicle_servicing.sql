-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 02:08 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle_servicing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(212) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `location` varchar(110) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `location`, `image`) VALUES
(17, 'Electrical Services', '', 'new cs619.PNG'),
(18, 'Plumbing Services', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employee_no` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `speciality` varchar(32) NOT NULL,
  `fee` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL DEFAULT '12345',
  `contact_no` varchar(32) NOT NULL,
  PRIMARY KEY (`employee_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_no`, `name`, `speciality`, `fee`, `email`, `password`, `contact_no`) VALUES
('255', 'Mohsin', 'Plumber', 500, 'mohsin@gmail.com', '12345', '03214632223');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `model` varchar(32) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `manufactor` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `price` varchar(110) NOT NULL,
  `stock` varchar(32) NOT NULL,
  `category` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `model`, `brand`, `manufactor`, `color`, `price`, `stock`, `category`, `image`) VALUES
(22, 'Honda City', '2005', 'Honda GLI', 'Pakistan', 'Brown', '1500000', '', 'Ali Car Show Room', '1_0x0_1632x1224_0x520_tyre_pressure_check_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `city` varchar(213) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `email`, `password`, `mobile`, `city`) VALUES
(12, 'Ali', 'user@vu.com', '12345', '0300123456789', 'Car Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_type` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `required_date` date NOT NULL,
  `required_hours` int(11) NOT NULL,
  `job_details` varchar(64) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bill` varchar(50) NOT NULL,
  `assigned_to` varchar(50) NOT NULL,
  `image1` varchar(32) NOT NULL,
  `completion_status` varchar(32) NOT NULL,
  `payment_voucher` varchar(32) NOT NULL,
  `deadline` date NOT NULL,
  `voucher_image` varchar(32) NOT NULL,
  `service_provider` varchar(32) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `user_name`, `contact_no`, `order_date`, `order_type`, `status`, `required_date`, `required_hours`, `job_details`, `address`, `bill`, `assigned_to`, `image1`, `completion_status`, `payment_voucher`, `deadline`, `voucher_image`, `service_provider`) VALUES
(25449, 18, ' Qusin Zahra', '03002526530', '2023-02-15 12:42:59', 'Water Wiring', 'Confirm', '2023-02-17', 3, 'Tab Installation\r\nGyzer Installation', 'H No.25 DHA Attock', '4500', 'Mohsin', 'images.jpeg', 'incomplete', '', '2023-02-17', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `type` varchar(32) NOT NULL,
  `price` int(50) NOT NULL,
  `image` text NOT NULL,
  `user` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `city` varchar(213) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'Confirm',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `city`, `date`, `status`) VALUES
(5, 'Usman Ali', 'usman@gmail.com', 'user', '123456789', 'Multan', '0000-00-00', ''),
(14, 'Saba', 'saba@vu.com', '12345', '300123456789', 'Lahore', '0000-00-00', 'Rejected'),
(15, 'umar', 'umar@gmail.com', '12345', '0325665656', 'Lahore', '0000-00-00', 'Confirm'),
(18, 'Qusin Zahra', 'qusin@gmail.com', '12345', '03002526530', 'Attock', '0000-00-00', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `location` varchar(110) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `location`, `image`) VALUES
(17, 'Electrical Services', '', 'new cs619.PNG'),
(18, 'Plumbing Services', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
