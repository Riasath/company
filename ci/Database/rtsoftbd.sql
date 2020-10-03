-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtsoftbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `slider_descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_status`, `slider_created_at`, `slider_descriptions`) VALUES
(1, 'slider-image/11.jpg', 0, '2020-10-03 08:58:00', 'wfswd'),
(2, 'slider-image/6.png', 0, '2020-10-03 09:29:19', 'shaownit solution'),
(3, 'slider-image/5.png', 0, '2020-10-03 10:23:34', 'shaownit solution');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL,
  `adminimage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `adminname`, `adminpassword`, `adminimage`) VALUES
(4, 'admin', 'admin', ''),
(13, 'dfg', 'dfg', ''),
(15, 'shaown', '12345', 'images/client1-hover.png'),
(17, 'testadmin', '12345', 'images/client1-hover1.png'),
(18, 'admin', '12345', 'images/54.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `username`, `password`, `status`) VALUES
(3, 'asasas', 'asadadad', '', '', '', 0),
(4, 'asasas', 'asadadad', '', '', '', 0),
(5, 'asasas', 'asadadad', '', '', '', 0),
(6, 'asasas', 'asadadad', '', '', '', 0),
(7, 'asasas', 'asadadad', '', '', '', 0),
(8, 'asasas', 'asadadad', '', '', '', 0),
(9, 'asasas', 'asadadad', '', '', '', 0),
(10, 'asasas', 'asadadad', '', '', '', 0),
(11, 'asasas', 'asadadad', '', '', '', 0),
(12, '111111111', 'asadadad', '', '', '', 0),
(13, 'wef', 'sdfsd', '', 'df', '56465', 0),
(14, 'saon', 'loin', '', 'serwsre', '2412', 0),
(15, 'ads', 'asdsad', '', 'asfdsaf', '123456', 0),
(16, 'shaown', 'mahmub', '', 'shaown', '123456', 0),
(17, 'shaown', 'mahmub', '', 'shaown', '123456', 0),
(18, 'shaown', 'mahmub', '', 'shaown', '123456', 0),
(19, 'mini', 'project', '', 'codeigniter', '123456', 0),
(20, 'rtsoft', 'bd', '', 'rtsoftbd', '123456', 0),
(21, 'alvi', 'md', '', 'alvi', '780099', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

