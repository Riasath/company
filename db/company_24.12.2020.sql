-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 07:35 AM
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
-- Table structure for table `accordon`
--

CREATE TABLE `accordon` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `idname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accordon`
--

INSERT INTO `accordon` (`id`, `title`, `details`, `idname`) VALUES
(6, 'RTSOFTBD WEB TEAM ', '                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                        ', 'first'),
(7, 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'second'),
(8, 'Our Vision', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'third'),
(9, 'Keyword Research', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'fourth'),
(10, 'We Work for Your Profit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'fifth'),
(11, 'Awesome Team', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'sixth'),
(13, 'RTSOFTBD Software Application', 'RTSOFTBD Software ApplicationRTSOFTBD Software ApplicationRTSOFTBD Software ApplicationRTSOFTBD Software Application', '1');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `house` varchar(250) NOT NULL,
  `cellnum` varchar(250) NOT NULL,
  `officenum` varchar(250) NOT NULL,
  `supportnum` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `title`, `house`, `cellnum`, `officenum`, `supportnum`, `gmail`, `address`) VALUES
(2, 'RTSOFTBD', '   # 132,Jahanara garden,green road,dhaka-1205                                ', '(+880) 1775-373737', '(+880) 1680-666888', '(+880) 1791-919197', 'rtsoftbd@gmail.com', 'www.rtsoftbd.us');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `title`, `details`) VALUES
(1, 'Full Services of Our Digital Agency', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                             ');

-- --------------------------------------------------------

--
-- Table structure for table `android`
--

CREATE TABLE `android` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `android`
--

INSERT INTO `android` (`id`, `title`, `details`, `image`) VALUES
(1, 'Client Managment System', 'Developed by RTsoftBD Android devlopment Team', 'assets/android_images/32.png'),
(2, 'Blood Bank Application', '                  Developed by RTsoftBD Android devlopment Team              ', 'assets/android_images/901.png'),
(3, 'Awaaz Pakistan', 'Developed by RTsoftBD Android devlopment Team', 'assets/android_images/91.png'),
(6, 'Zajira (জাজিরা) ', 'Developed by RTsoftBD Android devlopment Team', 'assets/android_images/34.png');

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
(9, '2020-12-07', 'WELCOME TO RTSOFTBD', 'Why do compromises when RTSOFTBD can make your website the way you want?Just sit and relax, we are here to take care your virtual appearance the best way', 'assets/blog_avatar/avatar6.png', 'RTSOFTBD'),
(10, '2020-12-16', 'Web Application', 'Awesome applocation made by RTSOFTBD Web Application TEAM.Visit our website gather information.', 'assets/blog_avatar/avatar51.png', 'shaown'),
(11, '2020-10-29', 'think positive', 'Awesome applocation made by RTSOFTBD Web Application TEAM.', 'assets/blog_avatar/avatar32.png', 'admin'),
(12, '2020-10-29', 'Another blog12', '12 Awesome applocation made by RTSOFTBD Web Application TEAM.', 'assets/blog_avatar/avatar231.png', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `title`, `details`) VALUES
(1, 'Professional Tools for Your Business', ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                  ');

-- --------------------------------------------------------

--
-- Table structure for table `brandbox`
--

CREATE TABLE `brandbox` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `value` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandbox`
--

INSERT INTO `brandbox` (`id`, `title`, `details`, `value`) VALUES
(1, 'Brand Monitoring', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 10),
(2, 'Social Media Contests', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 40),
(3, 'Social Media Management', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 50),
(4, 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 90),
(5, 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 70),
(7, 'RTSOFTBD WEB TEAM ', 'RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM ', 99),
(8, 'Software Team', 'SOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAMSOFTWARE TEAM', 97);

-- --------------------------------------------------------

--
-- Table structure for table `client_head`
--

CREATE TABLE `client_head` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_head`
--

INSERT INTO `client_head` (`id`, `title`, `details`) VALUES
(1, 'Our Valueable Partners', '                                  \r\n       Get Excellent Unique ENTERPRISE SOLUTION with RTsoftBD                       ');

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
(15, 'assets/client_images/21.png'),
(16, 'assets/client_images/31.png'),
(17, 'assets/client_images/41.png'),
(18, 'assets/client_images/42.png'),
(19, 'assets/client_images/111.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `details`) VALUES
(1, 'Tell Us About Your Project', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `gmail`, `phone`, `message`) VALUES
(1, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(2, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(3, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(4, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(5, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(6, 'fdghfh', 'admin@gmail.com', '425424', 'fhfgh'),
(7, 'fdghfh', 'admin@gmail.com', '425424', 'fghfgh');

-- --------------------------------------------------------

--
-- Table structure for table `contact_head`
--

CREATE TABLE `contact_head` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_head`
--

INSERT INTO `contact_head` (`id`, `title`, `details`) VALUES
(1, 'Get In Touch', '                           \r\n      Eodem modo typi, qui nunc nobis videntur parum clari,\r\n      fiant sollemnes in futurum. Claritas est etiam processus dynamicus,\r\n      qui sequitur mutationem consuetudium lectorum. ');

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
(1, '2021-22', 'RTSOFTBD', 'RTSOFTBD_WEB TEAM', 'RTSOFTBD_APPLICATION TEAM', 'RTSOFTBD');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `units` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title`, `data`, `value`, `units`) VALUES
(8, 'CLIENT RETENTION', '96', '96', '%'),
(9, 'Years of Service', '10', '10', ''),
(10, 'Professionals', '230', '230', '+'),
(11, 'Satisfied Clients', '690', '690', '+');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `title`, `details`, `image`) VALUES
(2, 'প্রকৌশলী মোহাম্মদ মোমিনুল হক ', '                 Developed by RTsoftBD Web devlopment Team              ', 'assets/demo_images/1061.png'),
(3, 'প্রকৌশলী মোহাম্মদ হোসাইন ', 'Developed by RTsoftBD Web devlopment Team', 'assets/demo_images/39.png'),
(4, 'Bangladesh Volunteers ', 'Developed by RTsoftBD Web devlopment Team', 'assets/demo_images/108.png'),
(5, 'PURAN BAZAR DEGREE COLLEGE ', 'Developed by RTsoftBD Web devlopment Team', 'assets/demo_images/94.png');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details1` varchar(250) NOT NULL,
  `details2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `title`, `details1`, `details2`) VALUES
(1, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', '                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore wisi enim ad minim veniam;                                ', '                                  Mirum est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum formas duis dolore.                                ');

-- --------------------------------------------------------

--
-- Table structure for table `dservice`
--

CREATE TABLE `dservice` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dservice`
--

INSERT INTO `dservice` (`id`, `image`, `title`, `details`) VALUES
(1, 'assets/dservice_images/marketing1.png', 'The Best Digital Service Strategy', '                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                ');

-- --------------------------------------------------------

--
-- Table structure for table `eservice`
--

CREATE TABLE `eservice` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eservice`
--

INSERT INTO `eservice` (`id`, `image`, `title`, `details`) VALUES
(7, 'assets/eservice_images/services14.png', 'RTSOFTBD WEB TEAM ', '                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                    '),
(9, 'assets/eservice_images/services2.png', 'RTSOFTBD WEB SERVICE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(10, 'assets/eservice_images/services3.png', 'RTSOFTBD SOFTWARE SERVICE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(11, 'assets/eservice_images/services4.png', 'RTSOFTBD Android Application', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(12, 'assets/eservice_images/services5.png', 'RTSOFTBD SOFTWARE TESTING', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `title`, `details`) VALUES
(1, 'Meet with Our Best Experts', '                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.   Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `image`, `title`, `details`) VALUES
(4, 'assets/feature_images/features14.png', 'RTSOFTBD Awesome', '                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                                '),
(5, 'assets/feature_images/features2.png', 'RTSOFTBD WEB TEAM ', '            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.            '),
(6, 'assets/feature_images/features3.png', 'RTSOFTBD APPLICATION TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(7, 'assets/feature_images/features4.png', 'RTSOFTBD TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(8, 'assets/feature_images/features51.png', 'CodeIgniter', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `market` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `description`, `image`, `author`, `market`) VALUES
(1, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'assets/feedback_images/avatar.png', 'Ariful', 'RTSOFTBD'),
(2, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'assets/feedback_images/avatar2.png', 'Shaown', 'RTSOFTBD'),
(3, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'assets/feedback_images/avatar3.png', 'Sohel', 'Envato market'),
(4, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'assets/feedback_images/avatar6.png', 'Mizan', 'RTSOFTBD');

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
(6, 'RTSOFTBD Company', ' Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lob       ');

-- --------------------------------------------------------

--
-- Table structure for table `footermenu`
--

CREATE TABLE `footermenu` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footermenu`
--

INSERT INTO `footermenu` (`id`, `title`, `link`) VALUES
(1, 'RTSOFTBD WEB TEAM ', 'https://www.google.com'),
(3, 'Pay-per-click', 'https://www.google.com'),
(4, 'Social Media', 'https://www.google.com'),
(5, 'Web Analytics', 'https://www.google.com'),
(6, 'Web Development', 'https://www.google.com'),
(7, 'Content Management', 'https://www.google.com'),
(8, 'Blog Management', 'https://www.google.com'),
(9, 'Virtual Marketing', 'https://www.google.com'),
(10, 'Email Marketing', 'https://www.google.com'),
(11, 'Keyword Analytics', 'https://www.google.com');

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
(4, '01832780099', 'rtsoftbd@gmail.com', ' 132,jahanara garden,dhaka                           ');

-- --------------------------------------------------------

--
-- Table structure for table `footer_img`
--

CREATE TABLE `footer_img` (
  `id` int(11) NOT NULL,
  `footer_images` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_img`
--

INSERT INTO `footer_img` (`id`, `footer_images`, `link`) VALUES
(24, 'assets/footer_images/5.png', 'http://facebook.com'),
(25, 'assets/footer_images/102.png', 'http://twitter.com'),
(26, 'assets/footer_images/8.png', 'http://google.com'),
(27, 'assets/footer_images/7.png', 'http://youtube.com'),
(28, 'assets/footer_images/ghjgjh.png', 'http://rss.com'),
(34, 'assets/footer_images/6.png', 'http://whatsapp.com');

-- --------------------------------------------------------

--
-- Table structure for table `form_head`
--

CREATE TABLE `form_head` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_head`
--

INSERT INTO `form_head` (`id`, `title`, `details`) VALUES
(1, 'Have You Any Questions?', '                           \r\n       Please contact us using the form and we’ll get back to you as soon as possible.              ');

-- --------------------------------------------------------

--
-- Table structure for table `foundation`
--

CREATE TABLE `foundation` (
  `id` int(11) NOT NULL,
  `foundation_image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `foundation_title` varchar(250) NOT NULL,
  `foundation_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foundation`
--

INSERT INTO `foundation` (`id`, `foundation_image`, `date`, `foundation_title`, `foundation_details`) VALUES
(3, 'assets/foundation_images/book3.png', '2020-11-05', 'Foundation2020 of the Company', '                           Investigationes2020 demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Ut wisi enim ad minim veniam, quis nostrud exerci ta');

-- --------------------------------------------------------

--
-- Table structure for table `infobox1`
--

CREATE TABLE `infobox1` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infobox1`
--

INSERT INTO `infobox1` (`id`, `title`, `details`, `image`) VALUES
(2, 'RTSOFTBD', 'with designed complex dataset, and then experiment at scale to deploy optimized large database models.', 'assets/infobox1_images/info-box7.png');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `permalink` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `permalink`, `name`, `phone`, `email`, `company`, `message`) VALUES
(1, 'http://www.rtsoftbd.us/', 'shaown', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', 'TEST'),
(2, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', '54', '65'),
(3, 'http://www.rtsoftbd.us/', 'admin', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '1323'),
(4, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '45'),
(5, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '45'),
(6, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '45'),
(7, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '45'),
(8, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', '45'),
(9, 'http://www.rtsoftbd.us/', 'arifulhaquecse', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', 'gj'),
(10, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', 'fhfgh'),
(11, '', '', '', '', '', ''),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', 'edtgd'),
(15, 'http://www.rtsoftbd.us/', 'arifulhaquecse2016@gmail.com', '01641698269', 'arifulhaquecse2016@gmail.com', 'RTSOFTBD', 'ett');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `title`, `details`) VALUES
(1, 'Unrivalled Levels of Service', ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                ');

-- --------------------------------------------------------

--
-- Table structure for table `levelsbox`
--

CREATE TABLE `levelsbox` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levelsbox`
--

INSERT INTO `levelsbox` (`id`, `image`, `title`, `details`) VALUES
(1, 'assets/levelsbox_images/info-box25.png', 'The Best Email Marketing Strategy', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy qui nunc nobis videntur parum clari.'),
(2, 'assets/levelsbox_images/info-box23.png', 'RTSOFTBD WEB DEVELOPMENT', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(3, 'assets/levelsbox_images/info-box24.png', 'RTSOFTBD WEB TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(4, 'assets/levelsbox_images/info-box17.png', 'RTSOFTBD APPLICATION TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(5, 'assets/levelsbox_images/info-box22.png', 'RTSOFTBD TEAM WORK', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(6, 'assets/levelsbox_images/info-box27.png', 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'assets/logo_images/rtsoftbd_logo11.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `m_url` varchar(250) NOT NULL,
  `m_desc` varchar(250) NOT NULL,
  `m_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `m_name`, `m_url`, `m_desc`, `m_created_at`) VALUES
(1, 'Home', 'http://localhost/company/home', 'BLANK', '2020-12-24 06:30:01'),
(2, 'About', 'http://localhost/company/about', '', '2020-12-24 06:30:18'),
(3, 'Software Development', '', '', '2020-12-09 07:54:49'),
(4, 'Digital Marketing', '', '', '2020-12-09 07:55:07'),
(14, 'Portfolio', 'http://localhost/company/portfolio', 'desc', '2020-12-24 06:31:10'),
(17, 'Contact', 'http://localhost/company/contact', 'contact page', '2020-12-24 06:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `m_item_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `m_item_name` varchar(250) NOT NULL,
  `m_item_url` varchar(250) NOT NULL,
  `m_item_desc` varchar(250) NOT NULL,
  `m_item_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`m_item_id`, `m_id`, `m_item_name`, `m_item_url`, `m_item_desc`, `m_item_created_at`) VALUES
(3, 3, 'Software Service', 'http://localhost/company/service', '23:13', '2020-12-24 06:32:15'),
(6, 4, 'Digital Service', 'http://localhost/company/digital-service', '', '2020-12-24 06:32:52'),
(7, 4, 'SEO', 'blank', 'blank', '2020-12-12 10:25:46'),
(8, 4, 'Email Marketing', 'test', 'blank', '2020-12-12 10:25:37'),
(10, 3, 'portfolio', 'http://localhost/company/portfolio', '', '2020-12-24 06:34:08'),
(12, 3, 'Enterprise Solution', 'digital-service', 'blank', '2020-12-18 09:34:50'),
(13, 3, 'Corporate Solution', '', 'blank', '2020-12-12 10:30:49'),
(14, 3, 'Mobile App & IOT Solution', '', 'blank', '2020-12-12 10:30:59'),
(15, 3, 'Micro Finance Solution', '', 'blank', '2020-12-12 10:31:08'),
(16, 3, 'Media and Storage', '', 'blank', '2020-12-12 10:31:18'),
(17, 4, 'Social Media Marketing', 'blank', 'blank', '2020-12-12 09:10:51'),
(18, 4, 'Pay Per Click Management', 'blank', 'blank', '2020-12-12 09:11:42'),
(19, 4, 'Search Engine Optimization', 'blank', 'blank', '2020-12-12 09:12:19'),
(20, 3, 'ERP Solutions', 'service', 'description', '2020-12-12 10:29:43'),
(24, 0, 'uii', 'about', 'blank', '2020-12-18 16:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `title`, `details`) VALUES
(1, 'Our Valueable Partner', '                       Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima                         ');

-- --------------------------------------------------------

--
-- Table structure for table `partner_image`
--

CREATE TABLE `partner_image` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_image`
--

INSERT INTO `partner_image` (`id`, `image`) VALUES
(1, 'assets/partner_images/client1-hover.png'),
(3, 'assets/partner_images/client3-hover.png'),
(4, 'assets/partner_images/client4-hover.png'),
(5, 'assets/partner_images/client5-hover.png'),
(7, 'assets/partner_images/basis1.png'),
(10, 'assets/partner_images/iso-header-logo.png'),
(11, 'assets/partner_images/4.png');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `day` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `mobile`, `gmail`, `day`, `time`) VALUES
(1, '01832780099', 'shaown@gmail.com', 'Monday-Saturday', '10am-6pm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `section1` varchar(250) NOT NULL,
  `section2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `details`, `section1`, `section2`) VALUES
(6, 'Our Product Based Services', ' RTSOFTBD develops standards and set goals that help contribute to our success and your satisfaction. These are the goals that we have set for ourselves:\r\n\r\nDeveloping your needs on the web.\r\nCustomized Mobile Application Development.\r\nSEO, Social Me', '                                                          RTSOFTBD develops standards and set goals that help contribute to our success and your satisfaction. These are the goals that we have set for ourselves:\r\n\r\nDeveloping your needs on the web.\r\nC', '                                                   RTSOFTBD develops standards and set goals that help contribute to our success and your satisfaction. These are the goals that we have set for ourselves:\r\n\r\nDeveloping your needs on the web.\r\nCustomiz');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `image`, `title`, `details`) VALUES
(1, 'assets/promo_images/info-box13.png', 'Excellent Support', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,          sed diam nonummy nibh euismod tincidunt laoreet dolore magna.'),
(3, 'assets/promo_images/info-box21.png', 'Awesome Team', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(4, 'assets/promo_images/info-box23.png', 'RTSOFTBD', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(5, 'assets/promo_images/info-box8.png', 'RTSOFTBD WEB TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(6, 'assets/promo_images/features5.png', 'Mobile Application', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(8, 'assets/promo_images/eye.png', 'Meet with Our Best Experts', '4Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `title`, `details`) VALUES
(1, 'Quality Skills', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `qualityitem`
--

CREATE TABLE `qualityitem` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `value` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualityitem`
--

INSERT INTO `qualityitem` (`id`, `title`, `value`) VALUES
(1, 'Content Marketing Strategy', 62),
(2, 'RTSOFTBD WEB TEAM ', 50),
(3, 'Our Vision', 62),
(4, 'Meet with Our Best Experts', 70),
(5, 'We Work for Your Profit', 80),
(6, 'Our Vision', 90),
(8, 'RTSOFTBD Software Application', 85);

-- --------------------------------------------------------

--
-- Table structure for table `short_story`
--

CREATE TABLE `short_story` (
  `id` int(11) NOT NULL,
  `short_story_heading` varchar(200) NOT NULL,
  `short_story_title` varchar(200) NOT NULL,
  `short_story_subtitle1` varchar(200) NOT NULL,
  `short_story_subtitle2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `short_story`
--

INSERT INTO `short_story` (`id`, `short_story_heading`, `short_story_title`, `short_story_subtitle1`, `short_story_subtitle2`) VALUES
(1, 'Short Story About Our Company', '       RTSOFTBD develops standards and set goals that help contribute to our success and your satisfaction. These are the goals that we have set for ourselves:\r\n\r\nDeveloping your needs on the web.\r\nCu', '            E-commerce solution with payment gateway integration.\r\nOnline Streaming and Live Web Casting.\r\nInspiring people for web presence.\r\nTo be a part of Digital Bangladesh.\r\nTo develop and parti', '       RTsoftBD is an incredibly SOFTWARE Farm for corporate and creative professionals.Focused on helping clients to build a successful business on web and mobile application. It works on all major s');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `title`, `details`, `image`, `mobile`, `gmail`, `address`) VALUES
(1, 'RTsoftBD', '                                                                                                                                                  RTSOFTBD is an incredibly SOFTWARE Farm for corporate and creative\r\nprofessionals.Focused on helping cli', 'assets/sidebar_images/rtsoftbd_logo2.png', '+88017000000', 'rtsoftbd@gmail.com', '                                                                                                                       132,Jahanara garden,green road,dhaka-1205                                                                                          ');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `terms` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `gmail`, `password`, `gender`, `terms`) VALUES
(4, 'ariful ', 'haque', 'admin@gmail.com', 'admin', 'Male', 'Accept Terms'),
(5, 'Enayet', 'Mazhar', 'admin@gmail.com', 'admin', 'Male', 'Accept Terms'),
(6, 'Dixon', 'Halder', 'dixon@gmail.com', '12345', 'Male', 'Accept Terms'),
(7, 'Gelani', 'rana', 'rana@gmail.com', '12345', 'Male', 'Accept Terms'),
(8, 'Riaz ', 'fahad', 'fahad@gmail.com', '12345', 'Male', 'Accept Terms'),
(9, 'Tuhin', 'Khan', 'tuhin@gmail.com', '12345', 'Male', 'Accept Terms'),
(10, 'Imrul', 'niloy', 'niloy@gmail.com', '12345', 'Male', 'Accept Terms');

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
(38, 'assets/slider_images/11slide.png', 'Mobile Application', 'Welcome to RTsoftBD '),
(41, 'assets/slider_images/21slidee.png', 'Web Development', 'Welcome to RTsoftBD'),
(42, 'assets/slider_images/slider123.png', 'Digital Marketing', 'Welcome to RTsoftBD  '),
(43, 'assets/slider_images/slider21.png', 'Corporate Solutions', 'Welcome to RTsoftBD'),
(44, 'assets/slider_images/slider32.png', 'Enterprise Solutions', 'Welcome to RTsoftBD'),
(45, 'assets/slider_images/slider56.png', 'Mobile App & IoT Services', 'Welcome to RTsoftBD'),
(46, 'assets/slider_images/21slidee1.png', 'Software Development', 'Welcome to RTsoftBD       ');

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
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `title`, `details`, `image`) VALUES
(1, 'Client Managment', '                   Developed by RTsoftBD Software devlopment Team              ', 'assets/software_images/371.png'),
(2, 'Lottery BD ', 'Developed by RTsoftBD Software devlopment Team', 'assets/software_images/102.png'),
(3, 'TopUp 2 You ', 'Developed by RTsoftBD Software devlopment Team', 'assets/software_images/40.png'),
(5, 'Eman-Tel ', 'Developed by RTsoftBD Software devlopment Team', 'assets/software_images/35.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `gmail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `gmail`) VALUES
(1, 'rtsoftbd@gmail.com'),
(2, 'rtsoftbd@gmail.com'),
(3, 'rtsoftbd@gmail.com'),
(4, 'rtsoftbd@gmail.com'),
(5, 'rtsoftbd@gmail.com'),
(6, 'rtsoftbd@gmail.com'),
(7, 'rtsoftbd@gmail.com'),
(8, 'rtsoftbd@gmail.com'),
(9, 'contact-form'),
(10, 'rtsoftbd@gmail.com'),
(11, 'rtsoftbd@gmail.com'),
(12, 'rtsoftbd@gmail.com'),
(13, 'rtsoftbd@gmail.com'),
(14, 'rtsoftbd@gmail.com'),
(15, 'arifulhaquecse2016@gmail.com'),
(16, 'rtsoftbd@gmail.com'),
(17, 'ytrfty'),
(18, 'admin@gmail.com'),
(19, 'admin@gmail.com'),
(20, 'shaown@gmail.com'),
(21, 'admin@gmail.com'),
(22, 'admin@gmail.com'),
(23, 'rtsoftbd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `fbimage` varchar(250) NOT NULL,
  `yimage` varchar(250) NOT NULL,
  `gimage` varchar(250) NOT NULL,
  `timage` varchar(250) NOT NULL,
  `fblink` varchar(250) NOT NULL,
  `ylink` varchar(250) NOT NULL,
  `glink` varchar(250) NOT NULL,
  `tlink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`, `image`, `fbimage`, `yimage`, `gimage`, `timage`, `fblink`, `ylink`, `glink`, `tlink`) VALUES
(1, 'Ariful Haque ', '', 'assets/team_member_img/teammember1.png', 'assets/team_member_img/43.png', 'assets/team_member_img/22.png', 'assets/team_member_img/52.png', 'assets/team_member_img/31.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(7, 'Emam', '', 'assets/team_member_img/teammember11.png', 'assets/team_member_img/48.png', 'assets/team_member_img/26.png', 'assets/team_member_img/57.png', 'assets/team_member_img/36.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(8, 'nayan', '', 'assets/team_member_img/teammember31.png', 'assets/team_member_img/49.png', 'assets/team_member_img/27.png', 'assets/team_member_img/58.png', 'assets/team_member_img/37.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(9, 'Dixon', '', 'assets/team_member_img/teammember12.png', 'assets/team_member_img/410.png', 'assets/team_member_img/28.png', 'assets/team_member_img/59.png', 'assets/team_member_img/38.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(10, 'Sazal', '', 'assets/team_member_img/teammember2.png', 'assets/team_member_img/411.png', 'assets/team_member_img/29.png', 'assets/team_member_img/510.png', 'assets/team_member_img/39.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(12, 'nayan', 'Software Engineer', 'assets/team_member_img/teammember31.png', 'assets/team_member_img/49.png', 'assets/team_member_img/27.png', 'assets/team_member_img/58.png', 'assets/team_member_img/37.png', 'http://localhost/company/home', 'http://localhost/company/home', 'http://localhost/company/home', 'http://localhost/company/home'),
(15, 'Ariful haque', 'Intern', 'assets/team_member_img/teammember32.png', 'assets/team_member_img/412.png', 'assets/team_member_img/211.png', 'assets/team_member_img/511.png', 'assets/team_member_img/310.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(16, 'shaown', 'intern', 'assets/team_member_img/teammember41.png', 'assets/team_member_img/413.png', 'assets/team_member_img/212.png', 'assets/team_member_img/512.png', 'assets/team_member_img/312.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(17, 'Shaown', 'intern', 'assets/team_member_img/teammember13.png', 'assets/team_member_img/414.png', 'assets/team_member_img/213.png', 'assets/team_member_img/513.png', 'assets/team_member_img/313.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(18, 'Riaz', 'web programmer', 'assets/team_member_img/teammember33.png', 'assets/team_member_img/415.png', 'assets/team_member_img/214.png', 'assets/team_member_img/514.png', 'assets/team_member_img/314.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(19, 'Fahad', 'intern', 'assets/team_member_img/teammember42.png', 'assets/team_member_img/416.png', 'assets/team_member_img/215.png', 'assets/team_member_img/515.png', 'assets/team_member_img/315.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com'),
(20, 'mokit', 'web programmer', 'assets/team_member_img/teammember331.png', 'assets/team_member_img/417.png', 'assets/team_member_img/216.png', 'assets/team_member_img/516.png', 'assets/team_member_img/316.png', 'http://facebook.com', 'http://youtube.com', 'http://google.com', 'http://twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `tell`
--

CREATE TABLE `tell` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tell`
--

INSERT INTO `tell` (`id`, `title`, `details`) VALUES
(1, 'Unrivalled Levels of Service', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                       ');

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
(42, 'We help people make the most out of their business by offering custom software development accordin', 'RTSOFTBD_WEB_TEAM', 'RTSOFTBD'),
(54, 'RTSOFTBD AWESOME', 'SHAOWN1', 'NONAME');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_head`
--

CREATE TABLE `testimonial_head` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_head`
--

INSERT INTO `testimonial_head` (`id`, `title`, `details`) VALUES
(1, 'Happy Clients   About Us', '                           \r\n    Get Excellent Unique ENTERPRISE SOLUTION with RTsoftBD              ');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `title`, `details`) VALUES
(1, 'Professional Tools for Your Business', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                  ');

-- --------------------------------------------------------

--
-- Table structure for table `tools_box`
--

CREATE TABLE `tools_box` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools_box`
--

INSERT INTO `tools_box` (`id`, `image`, `title`, `details`) VALUES
(1, 'assets/tools_box_images/info-box13.png', 'Keyword Research', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(2, 'assets/tools_box_images/info-box24.png', 'Awesome Team', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(3, 'assets/tools_box_images/info-box25.png', 'RTSOFTBD WEB TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(4, 'assets/tools_box_images/info-box26.png', 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(5, 'assets/tools_box_images/info-box27.png', 'Our Vision', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(6, 'assets/tools_box_images/info-box28.png', 'We Work for Your Profit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `title`, `details`, `image1`, `image2`) VALUES
(1, 'Our Vision', '                        Mirum est notare quam littera gothica, quam nunc putamus parum          claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta          decima.                        ', 'assets/vision_images/elements1.png', 'assets/vision_images/eye1.png');

-- --------------------------------------------------------

--
-- Table structure for table `web_design`
--

CREATE TABLE `web_design` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_design`
--

INSERT INTO `web_design` (`id`, `title`, `details`, `image`) VALUES
(1, 'E-martbd', '                  Developed by RTsoftBD Web devlopment Team\r\n              ', 'assets/web_design_images/381.png'),
(2, 'EasyPaid ', 'Developed by RTsoftBD Web devlopment Team', 'assets/web_design_images/93.png'),
(3, 'Fashion Asia ', 'Developed by RTsoftBD Web devlopment Team', 'assets/web_design_images/101.png'),
(7, 'The Blood Bank ', 'Developed by RTsoftBD Web Design Team', 'assets/web_design_images/96.png');

-- --------------------------------------------------------

--
-- Table structure for table `web_development`
--

CREATE TABLE `web_development` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_development`
--

INSERT INTO `web_development` (`id`, `title`, `details`, `image`) VALUES
(2, '136th IPU ASSEMBLY, Bangladesh', 'Developed by RTsoftBD Web devlopment Team', 'assets/web_development_images/31.png'),
(3, '62nd CPC Conference', 'Developed by RTsoftBD Web devlopment Team              ', 'assets/web_development_images/301.png'),
(4, 'Barisal City Corporation ', 'Developed by RTsoftBD Web devlopment Team', 'assets/web_development_images/33.png'),
(5, 'Bakila Union ', 'Developed by RTsoftBD Web devlopment Team', 'assets/web_development_images/361.png');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `title`, `details`, `image`) VALUES
(1, 'RTSOFTBD We Work for Your Profit', '                                                            RTSOFTBD  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.           ', 'assets/work_images/321.png'),
(2, '2We Work for Your Profit', '            2Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.            ', 'assets/work_images/30.png'),
(3, 'We Work for Your Profit', '    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.                                                ', 'assets/work_images/90.png'),
(4, 'We Work for Your Profit', '                                                                                                                                                                        sfsdfFDSAFSDA                        3Lorem ipsum dolor sit amet, consectetuer adi', 'assets/work_images/36.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accordon`
--
ALTER TABLE `accordon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `android`
--
ALTER TABLE `android`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandbox`
--
ALTER TABLE `brandbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_head`
--
ALTER TABLE `client_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_img`
--
ALTER TABLE `client_img`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_head`
--
ALTER TABLE `contact_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dservice`
--
ALTER TABLE `dservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eservice`
--
ALTER TABLE `eservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `footermenu`
--
ALTER TABLE `footermenu`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `form_head`
--
ALTER TABLE `form_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foundation`
--
ALTER TABLE `foundation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infobox1`
--
ALTER TABLE `infobox1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levelsbox`
--
ALTER TABLE `levelsbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`m_item_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_image`
--
ALTER TABLE `partner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualityitem`
--
ALTER TABLE `qualityitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_story`
--
ALTER TABLE `short_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
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
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tell`
--
ALTER TABLE `tell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testi_id`);

--
-- Indexes for table `testimonial_head`
--
ALTER TABLE `testimonial_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools_box`
--
ALTER TABLE `tools_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_design`
--
ALTER TABLE `web_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_development`
--
ALTER TABLE `web_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accordon`
--
ALTER TABLE `accordon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `android`
--
ALTER TABLE `android`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brandbox`
--
ALTER TABLE `brandbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_head`
--
ALTER TABLE `client_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_img`
--
ALTER TABLE `client_img`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_head`
--
ALTER TABLE `contact_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dservice`
--
ALTER TABLE `dservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eservice`
--
ALTER TABLE `eservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `footermenu`
--
ALTER TABLE `footermenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `footer_bottom`
--
ALTER TABLE `footer_bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_img`
--
ALTER TABLE `footer_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `form_head`
--
ALTER TABLE `form_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foundation`
--
ALTER TABLE `foundation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infobox1`
--
ALTER TABLE `infobox1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `levelsbox`
--
ALTER TABLE `levelsbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `m_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner_image`
--
ALTER TABLE `partner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualityitem`
--
ALTER TABLE `qualityitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `short_story`
--
ALTER TABLE `short_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `slides_item`
--
ALTER TABLE `slides_item`
  MODIFY `slides_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tell`
--
ALTER TABLE `tell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `testimonial_head`
--
ALTER TABLE `testimonial_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tools_box`
--
ALTER TABLE `tools_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_design`
--
ALTER TABLE `web_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `web_development`
--
ALTER TABLE `web_development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
