-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 06:51 AM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(150) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_descriptions` varchar(100) NOT NULL,
  `slider_about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_descriptions`, `slider_about`) VALUES
(1, 'slider_images/slider122.png', 'Enterprise Solution', 'We thrive to satisfy  your organizational needs by delivering robust, scalable business-oriented          solutions'),
(2, 'slider_images/slider2.png', 'Corporate Solutions', '\r\nPower up the true\r\n										potential of your business and industry!'),
(3, 'slider_images/slider3.png', 'Mobile App & IoT Services', 'Transform your business\r\n										processes with Mobile App & IoT Services.'),
(4, 'slider_images/slider4.png', 'Digital Marketing', 'We take your business to\r\n										the next level by incorporating a result driven digital marketing strategy with\r\n										a custom designed website and mobile application, tailored for your busin'),
(5, 'slider_images/slider5.png', 'QA & Test Automation', 'Rest assured on the\r\n										smoothness of functionality, also saving time, money, vastly increasing test\r\n										coverage and software accuracy.\r\n										Team morale improves too!'),
(6, 'slider_images/slider6_.png', 'web Development', 'Power up the true\r\n										potential of your business and industry!'),
(10, 'slider_images/slider12.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(11, 'slider_images/slider13.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(12, 'slider_images/slider14.png', 'sas', 'sa'),
(13, 'slider_images/slider15.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(14, 'slider_images/slider52.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(15, 'slider_images/slider53.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(16, 'slider_images/slider54.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(17, 'slider_images/slider16.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(18, 'slider_images/slider17.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(19, 'slider_images/slider31.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(20, 'slider_images/slider18.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(21, 'slider_images/slider19.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(22, 'slider_images/slider110.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(23, 'slider_images/slider111.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(24, 'slider_images/slider6_1.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(25, 'slider_images/slider112.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(26, 'slider_images/slider113.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(27, 'slider_images/slider114.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(28, 'slider_images/slider115.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(29, 'slider_images/slider116.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(30, 'slider_images/slider117.png', 'shaownit solution', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas');

-- --------------------------------------------------------

--
-- Table structure for table `slides_item`
--

CREATE TABLE `slides_item` (
  `slides_id` int(100) NOT NULL,
  `slides_title` varchar(100) NOT NULL,
  `slides_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides_item`
--

INSERT INTO `slides_item` (`slides_id`, `slides_title`, `slides_number`) VALUES
(4, 'ENTERPRISE SOLUTION', 1),
(5, 'Corporate Solution', 2),
(6, 'Mobile & IOT Service', 3),
(7, 'Digital Marketing', 4),
(8, 'QA & Test Automation', 5),
(9, 'Web Development', 6),
(72, 'fghdfh', 1),
(73, 'fghdfh', 1),
(74, 'fghdfh', 3),
(75, 'fghdfh', 1),
(76, 'fghdfh', 1),
(77, 'fghdfh', 1),
(78, 'fghdfh', 1),
(79, 'fghdfh', 1),
(80, 'fghdfh', 5),
(81, 'fghdfh', 5),
(82, 'fghdfh', 5),
(83, 'fghdfh', 5),
(84, 'fghdfh', 5),
(85, 'fghdfh', 5),
(86, 'fghdfh', 5),
(87, 'fghdfh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'saon', 'md', 'admin', 'admin'),
(2, 'saon', 'loin', 'admin', 'admin'),
(3, 'saon', 'md', 'admin', 'admin'),
(4, 'rtsoft', 'bd', 'rtsoftbd', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `slides_item`
--
ALTER TABLE `slides_item`
  ADD PRIMARY KEY (`slides_id`);

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
  MODIFY `slider_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `slides_item`
--
ALTER TABLE `slides_item`
  MODIFY `slides_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
