-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 06:20 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_details` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `posted_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `blog_title`, `blog_details`, `avatar`, `posted_by`) VALUES
(9, '2020-10-17', 'WELCOME TO RTSOFTBD1', '1Why do compromises when RTSOFTBD can make your website the way you want?\r\nJust sit and relax, we are here to take care your virtual appearance the best way', 'blog_avatar/avatar1.png', 'RTSOFTBD1'),
(10, '2020-10-15', 'Web Application', 'Awesome applocation made by RTSOFTBD Web Application TEAM.\r\nVisit our website gather information.', 'blog_avatar/avatar2.png', 'shaown'),
(11, '2020-10-08', 'think positive', 'Awesome applocation made by RTSOFTBD Web Application TEAM.', 'blog_avatar/avatar3.png', 'admin'),
(12, '2020-10-12', 'Another blog12', '12 Awesome applocation made by RTSOFTBD Web Application TEAM.', 'blog_avatar/avatar212.png', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `client_img`
--

CREATE TABLE `client_img` (
  `client_id` int(11) NOT NULL,
  `client_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_img`
--

INSERT INTO `client_img` (`client_id`, `client_image`) VALUES
(4, 'client_images/1.png'),
(5, 'client_images/2.png'),
(6, 'client_images/amex1.png'),
(7, 'client_images/4.png'),
(8, 'client_images/mastercard.png'),
(9, 'client_images/rocket.png');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `design` varchar(30) NOT NULL,
  `developed` varchar(30) NOT NULL,
  `only_on` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `year`, `company_name`, `design`, `developed`, `only_on`) VALUES
(1, '2020-21', 'RTSOFTBD', 'RTSOFTBD_WEB TEAM', 'RTSOFTBD_APPLICATION TEAM', 'RTSOFTBD');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_heading` varchar(100) NOT NULL,
  `footer_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_heading`, `footer_details`) VALUES
(6, 'RTSOFTBD Company', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut al');

-- --------------------------------------------------------

--
-- Table structure for table `footer_bottom`
--

CREATE TABLE `footer_bottom` (
  `id` int(11) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_bottom`
--

INSERT INTO `footer_bottom` (`id`, `mobile`, `gmail`, `address`) VALUES
(4, '01700001', 'rtsoftbd@gmail.com', '132,jahanara garden,dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `footer_img`
--

CREATE TABLE `footer_img` (
  `id` int(11) NOT NULL,
  `footer_images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_img`
--

INSERT INTO `footer_img` (`id`, `footer_images`) VALUES
(13, 'footer_images/visa.png'),
(14, 'footer_images/21.png'),
(15, 'footer_images/22.png'),
(16, 'footer_images/23.png'),
(17, 'footer_images/24.png');

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
(2, 'slider_images/slider2.png', 'Corporate Solution', 'Power up the true potential of your business and industry!'),
(3, 'slider_images/slider3.png', 'Mobile App & IoT Services', 'Transform your business\r\n										processes with Mobile App & IoT Services.'),
(4, 'slider_images/slider4.png', 'Digital Marketing', 'We take your business to\r\n										the next level by incorporating a result driven digital marketing strategy with\r\n										a custom designed website and mobile application, tailored for your busin'),
(5, 'slider_images/slider5.png', 'QA & Test Automation', 'Rest assured on the\r\n										smoothness of functionality, also saving time, money, vastly increasing test\r\n										coverage and software accuracy.\r\n										Team morale improves too!'),
(10, 'slider_images/slider12.png', 'RTSOFTBD', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas');

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
(88, 'fghdfh', 1),
(89, 'fghdfh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testi_id` int(100) NOT NULL,
  `testi_text` varchar(100) NOT NULL,
  `testi_author` varchar(100) NOT NULL,
  `testi_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testi_id`, `testi_text`, `testi_author`, `testi_company`) VALUES
(1, 'We help people make the most out of their business by offering custom software development according', 'RTSOFTBD_WEB_TEAM1', 'RTSOFTBD1'),
(8, 'We help people make the most out of their business by offering custom software development according', 'RTSOFTBD_WEB_TEAM', 'RTSOFTBD');

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_img`
--
ALTER TABLE `client_img`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `footer_bottom`
--
ALTER TABLE `footer_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_img`
--
ALTER TABLE `footer_img`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_img`
--
ALTER TABLE `client_img`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `footer_bottom`
--
ALTER TABLE `footer_bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_img`
--
ALTER TABLE `footer_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `slides_item`
--
ALTER TABLE `slides_item`
  MODIFY `slides_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
