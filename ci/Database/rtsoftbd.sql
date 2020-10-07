-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 02:37 PM
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
  `image` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `username`, `password`, `status`) VALUES
(47, 'wef', 'dfghdf', 'users_images/5.png', 'dfg', 'dfgfd', 0),
(48, 'shaown', 'md', 'users_images/6.png', 'shaown', '12345', 0),
(49, 'ikbal ', 'ahmed', 'users_images/avatar.png', 'ikbal', '12345', 0),
(50, 'Abid', 'abid', 'users_images/avatar1.png', 'abid', '12345', 0),
(51, 'sajal', 'mazumder', 'users_images/avatar2.png', 'sazal', '12345', 0),
(52, 'mustofa', 'md', 'users_images/avatar4.png', 'mustofa', '12345', 0),
(53, 'sharmin', 'akter', 'users_images/avatar7.png', 'sharmin', '12345', 0),
(56, 'manik', 'das', 'users_images/post-author3.png', 'manik', '12345', 0),
(57, 'kallol', 'dey', 'users_images/blog-details-author.png', 'kallol', '12345', 0),
(58, 'rakhi', 'anushua', 'users_images/avatar9.png', 'rakhi', '12345', 0),
(59, 'sohel', 'md', 'users_images/avatar21.png', 'sohel', '12345', 0),
(60, 'muhib', 'khan', 'users_images/51.png', 'muhib', '12345', 0),
(61, 'sagor', 'md', 'users_images/61.png', 'sagor', '12345', 0),
(62, 'kawsar', 'md', 'users_images/amex.png', 'kawsar', '12345', 0),
(63, 'ershad', 'md', 'users_images/avatar11.png', 'ershad', '12345', 0),
(64, 'tuhin', 'khan', 'users_images/avatar22.png', 'tuhin', '12345', 0),
(65, 'kalam', 'kalam', 'users_images/avatar3.png', 'kalam', '12345', 0),
(66, 'nayan', 'md', 'users_images/avatar71.png', 'nayan', '12345', 0),
(67, 'musa', 'ashari', 'users_images/client1-hover1.png', 'musa', '12345', 0),
(68, 'saon', 'md', 'users_images/post-author1.png', 'rtsoftbd', '12345', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
