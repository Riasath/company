-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 01:03 PM
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
(6, 'RTSOFTBD WEB TEAM ', '0Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'first'),
(7, 'Meet with Our Best Experts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'second'),
(8, 'Our Vision', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'third'),
(9, 'Keyword Research', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'fourth'),
(10, 'We Work for Your Profit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'fifth'),
(11, 'Awesome Team', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'sixth');

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
(1, 'Full Services of Our Digital Agency', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(9, '0000-00-00', 'WELCOME TO RTSOFTBD', 'Why do compromises when RTSOFTBD can make your website the way you want?Just sit and relax, we are here to take care your virtual appearance the best way', 'assets/blog_avatar/avatar6.png', 'RTSOFTBD'),
(10, '0000-00-00', 'Web Application', 'Awesome applocation made by RTSOFTBD Web Application TEAM.Visit our website gather information.', 'assets/blog_avatar/download_(1).png', 'shaown'),
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
(1, 'Professional Tools for Your Business', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(7, 'RTSOFTBD WEB TEAM ', 'RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM RTSOFTBD WEB TEAM ', 99);

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
(14, 'assets/client_images/download_(1).png'),
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
(1, 'Tell Us About Your Project', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(1, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore wisi enim ad minim veniam;', 'Mirum est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum formas duis dolore.');

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
(1, 'assets/dservice_images/marketing1.png', 'The Best Digital Service Strategy', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(7, 'assets/eservice_images/services13.png', 'RTSOFTBD WEB TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
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
(1, 'Meet with Our Best Experts', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.');

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
(4, 'assets/feature_images/features12.png', 'RTSOFTBD Awesome', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
(5, 'assets/feature_images/features2.png', 'RTSOFTBD WEB TEAM ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.'),
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
(3, 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'assets/feedback_images/avatar3.png', 'Sohel', 'Envato'),
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
(6, 'RTSOFTBD Company', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut al');

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
(1, 'RTSOFTBD WEB TEAM ', 'www.google.com');

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
(4, '01832780099', 'rtsoftbd@gmail.com', '132,jahanara garden,dhaka');

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
(24, 'assets/footer_images/202.png'),
(25, 'assets/footer_images/211.png'),
(26, 'assets/footer_images/221.png'),
(27, 'assets/footer_images/231.png'),
(28, 'assets/footer_images/241.png');

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
(3, 'assets/foundation_images/book3.png', '2020-11-05', 'Foundation2020 of the Company', 'Investigationes2020 demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit l');

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
(1, 'Unrivalled Levels of Service', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(1, 'Our Valueable Partner', '         Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima       ');

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
(6, 'assets/partner_images/31.png'),
(7, 'assets/partner_images/basis1.png'),
(8, 'assets/partner_images/analysis.jpg'),
(9, 'assets/partner_images/30.png'),
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
(6, 'Our Product Based Services', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore wisi enim ad minim veniam.', 'Mirum est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum formas duis dolore te feugait nulla facilisi.');

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
(6, 'Our Vision', 90);

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
(1, 'Short1 Story About Our Company', 'Investigationes1 demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', 'Lorem1 ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Ut wisi enim ad minim veniam, quis nostrud exerci tation.', 'Mirum1 est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum formas.');

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
(1, 'Get In Touch', '                           RTSOFTBD is an incredibly SOFTWARE Farm for corporate and creative\r\nprofessionals.Focused on helping clients to build a successful business on web and mobile application.\r\nIt works on all major software sector.             ', 'assets/sidebar_images/rtsoftbd_logo1.png', '+88017000000', 'rtsoftbd@gmail.com', '132,Jahanara garden,green road,dhaka-1205');

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
(5, 'Enayet', 'Mazhar', 'admin@gmail.com', 'admin', 'Male', 'Accept Terms');

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
(38, 'assets/slider_images/11slide.png', 'RTSOFTBD.', 'rtsoftbd rtsoftbdrtsoftbdrtsoftbdrtsoftbd'),
(41, 'assets/slider_images/21slidee.png', 'RTSOFTBD', 'jdhgasdhasilkud ASKIUJDHFAsiklhjikl asijkhdfLSAJKHFDs asjkhdfliajkSHFDLJKsad jkaSHDLisajhlik asJDBJUKHLas'),
(42, 'assets/slider_images/slider123.png', 'Digital Marketing', 'We thrive to satisfy 1         your organizational needs by delivering robust, scalable business-oriented          solutions'),
(43, 'assets/slider_images/slider21.png', 'Corporate Solutions', 'We thrive to satisfy 1         your organizational needs by delivering robust, scalable business-oriented          solutions'),
(44, 'assets/slider_images/slider32.png', 'Corporate Solutions', 'We thrive to satisfy 1         your organizational needs by delivering robust, scalable business-oriented          solutions'),
(45, 'assets/slider_images/slider56.png', 'Mobile App & IoT Services', 'We thrive to satisfy  your organizational needs by delivering robust, scalable business-oriented          solutions'),
(46, 'assets/slider_images/21slidee1.png', 'RTSOFTBD', 'We thrive to satisfy 1         your organizational needs by delivering robust, scalable business-oriented          solutions');

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
(17, 'ytrfty');

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
  `timage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`, `image`, `fbimage`, `yimage`, `gimage`, `timage`) VALUES
(1, 'Ariful Haque ', 'Intern', 'assets/team_member_img/teammember1.png', 'assets/team_member_img/43.png', 'assets/team_member_img/22.png', 'assets/team_member_img/52.png', 'assets/team_member_img/31.png'),
(3, 'Ariful Haque', 'Intern', 'assets/team_member_img/slider-photo1.jpg', 'assets/team_member_img/44.png', 'assets/team_member_img/download.png', 'assets/team_member_img/53.png', 'assets/team_member_img/32.png'),
(4, 'Tonmoy', 'Web Developer', 'assets/team_member_img/slider-photo4.jpg', 'assets/team_member_img/45.png', 'assets/team_member_img/23.png', 'assets/team_member_img/54.png', 'assets/team_member_img/33.png'),
(5, 'Sohel', 'System Analyst', 'assets/team_member_img/testimonial-author1.jpg', 'assets/team_member_img/46.png', 'assets/team_member_img/24.png', 'assets/team_member_img/55.png', 'assets/team_member_img/34.png'),
(6, 'Minhaz', 'Software Engineer', 'assets/team_member_img/slider-photo2.jpg', 'assets/team_member_img/47.png', 'assets/team_member_img/25.png', 'assets/team_member_img/56.png', 'assets/team_member_img/35.png'),
(7, 'Emam', 'Android Developer', 'assets/team_member_img/teammember11.png', 'assets/team_member_img/48.png', 'assets/team_member_img/26.png', 'assets/team_member_img/57.png', 'assets/team_member_img/36.png'),
(8, 'nayan', 'Software Engineer', 'assets/team_member_img/teammember31.png', 'assets/team_member_img/49.png', 'assets/team_member_img/27.png', 'assets/team_member_img/58.png', 'assets/team_member_img/37.png'),
(9, 'Dixon', ' Administrator', 'assets/team_member_img/teammember12.png', 'assets/team_member_img/410.png', 'assets/team_member_img/28.png', 'assets/team_member_img/59.png', 'assets/team_member_img/38.png'),
(10, 'Sazal', 'Web Developer', 'assets/team_member_img/teammember2.png', 'assets/team_member_img/411.png', 'assets/team_member_img/29.png', 'assets/team_member_img/510.png', 'assets/team_member_img/39.png');

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
(1, '1Unrivalled Levels of Service', '1Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(54, 'RTSOFTBD AWESOME', 'SHAOWN', 'NONAME');

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
(1, 'Professional Tools for Your Business', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.');

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
(1, 'Our Vision', 'Mirum est notare quam littera gothica, quam nunc putamus parum          claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta          decima.', 'assets/vision_images/elements1.png', 'assets/vision_images/eye1.png');

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
(1, 'RTSOFTBD->We Work for Your Profit', 'RTSOFTBD-> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'assets/work_images/profit.png'),
(2, '2We Work for Your Profit', '2Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'assets/work_images/bg-boxed-red.jpg'),
(3, '3We Work for Your Profit', '3Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'assets/work_images/client4-hover.png'),
(4, '4We Work for Your Profit', '4Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy      nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'assets/work_images/client6-hover.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accordon`
--
ALTER TABLE `accordon`
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
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
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
-- Indexes for table `foundation`
--
ALTER TABLE `foundation`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brandbox`
--
ALTER TABLE `brandbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_bottom`
--
ALTER TABLE `footer_bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_img`
--
ALTER TABLE `footer_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `foundation`
--
ALTER TABLE `foundation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner_image`
--
ALTER TABLE `partner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tell`
--
ALTER TABLE `tell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
