-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 08:56 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `priority` int(225) NOT NULL,
  `dueDate` date NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `lastmodified_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `priority`, `dueDate`, `description`, `status`, `created_at`, `lastmodified_at`) VALUES
(11, 'School Managment System', 1, '0000-00-00', '<p><strong>School Managment system</strong></p>', 'complete', '2019-03-08 11:53:55.000000', '2019-03-08 11:53:55.000000'),
(14, 'ERP', 1, '0000-00-00', '<p style=\"text-align: center;\"><strong>ERP System is complete now ..</strong></p>\n<p style=\"text-align: center;\"><strong>and its good to see you here</strong></p>\n<p style=\"text-align: center;\"><strong>Erp System is design with ASP.NET MVC , ANGULARJS , ANGULAR MATERIAL DESIGN AND ANGULAR WITH TOOLS</strong></p>\n<p style=\"text-align: center;\"><strong>ITS GOOD IF YOU ARE HERE TO BE </strong></p>', 'complete', '2019-03-08 01:40:08.000000', '2019-03-08 01:40:08.000000'),
(16, 'hello world', 1, '0000-00-00', '<p>Hello world this is my new task application</p>', 'complete', '2019-03-09 05:58:57.000000', '2019-03-09 05:58:57.000000'),
(28, 'ERP', 1, '0000-00-00', '<p>Maximum</p>', 'expire', '2019-03-09 06:48:40.000000', '2019-03-09 06:48:40.000000'),
(29, 'SMS', 0, '0000-00-00', '<p>Maximum</p>', 'expire', '2019-03-09 06:48:59.000000', '2019-03-09 06:48:59.000000'),
(30, 'TASK APPLICATION', 3, '0000-00-00', '<p>Normal</p>', 'expire', '2019-03-09 06:49:21.000000', '2019-03-09 06:49:21.000000'),
(31, 'ERP', 1, '0000-00-00', '<p>New task</p>', 'expire', '2019-03-09 07:53:32.000000', '2019-03-09 07:53:32.000000'),
(32, 'hjkjdfa', 1, '0000-00-00', '<p>Hello world</p>', 'expire', '2019-03-09 07:55:57.000000', '2019-03-09 07:55:57.000000'),
(33, 'asd', 1, '0000-00-00', '<p>dfasdfad</p>', 'expire', '2019-03-09 07:57:34.000000', '2019-03-09 07:57:34.000000'),
(38, 'adsf', 1, '0000-00-00', '<p>Hello world</p>', 'expire', '2019-03-09 08:05:27.000000', '2019-03-09 08:05:27.000000'),
(43, '', 0, '2019-03-06', '<p>Task Description</p>', 'expire', '2019-03-09 08:25:20.000000', '2019-03-09 08:25:20.000000'),
(44, 'ERP System', 1, '2019-03-10', '<p>Hello world</p>', 'continue', '2019-03-09 08:44:20.000000', '2019-03-09 08:44:20.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
