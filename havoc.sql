-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2013 at 11:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `havoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(2) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `page_id`, `creator`, `img`, `title`, `content`, `date_created`, `date_updated`, `status`, `is_active`) VALUES
(1, 1, 1, 'http://eofdreams.com/data_images/dreams/car/car-02.jpg', 'HAVOC Website Construction is ongoing! ', 'Test article on the fly.', '2013-06-29 08:45:02', '0000-00-00 00:00:00', 'p', 'y'),
(2, 1, 1, 'http://4.bp.blogspot.com/-ZBMbjRGkcQQ/T6zH9zD4KkI/AAAAAAAAAJ8/o0Cbuu38Fhw/s1600/rainy-day-window.png', 'Nakaraan', 'Bumuhos ang malakas na ulan. Agad na nagsipagtakbuhan ang mga tao upang humanap ng pansamantalang masisilungan hanggang sa tumila ang ulan. Ako nama\\''y patuloy lang sa paglalakad. Hindi ko alintana ang malamig na mga patak ng ulan sa aking katawan bagkus ramdam ko ang sakit mula sa kaibuturan ng aking puso. Hindi ko lubos maisip kung bakit mo ako iniwan gayong alam naman nating pareho kung gano natin kamahal ang isa\\''t isa. Hanggang ngayo\\''y hindi pa rin ako makapaniwala na mag-isa nalang ako.\n\nNaalala ko ang mga masasayang sandali na tayo\\''y magkasama. Masayang masaya ka lalo na kapag naglalakad tayo sa ilalim ng mga bituin. At sa mga pagkakataong iyon ay unti-unti na nating binubuo ang ating mga pangarap at nangako sa isa\\''t isa na tayo pa rin hanggang sa huli. \n\nLumipas ang mga araw, naramdaman ko nalang na lumamig ang iyong pakikitungo sa akin. Hindi ko alam kung bakit pero ramdam ko ako\\''y iyong iniiwasan. Ilang beses kong tinanong kung bakit ngunit sa tuwing tinatanong kita ay iniiba mo ang usapan. Naging maingat ako sa aking mga galaw. Bawat kilos ko\\''y pinag-iisipan ko kung magagalit ka o magiging masaya ka sa pinapakita ko. Ngunit sadyang hindi mo makita ang aking pagpupursige para ibalik ang dati.\n\nKaya nama\\''y ngayon ay mag-isa. Naglalakad sa gitna ng malakas na buhos ng ulan. Nagpatuloy ako hanggang sa ibaling ko ang aking pansin sa isang malaking puno. Hindi ko inaasahan na makikita kita. Nagsimula akong lumapit sa iyong kinaroroonan. Ngunit bago pa man ako makalapit ng tuluyan ay may dumating upang ika\\''y sunduin. Yumakap ka at nakita kong muli ang mga ngiti sa iyong labi. Sa oras na iyon ay pakiramdam ko na sinakluban ako ng langit. Pakiramdam ko ay nawasak ang aking puso sa aking nakita. Kaya naman pala ganun ka nalang sa akin dahil may iba ka na palang mahal. Nagpakatanga ako, nagpakagago. Pero anong magagawa ko, minahal kita ngunit sinaktan mo lang ako.', '2013-06-29 09:08:26', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  `is_active` char(1) NOT NULL DEFAULT 'y',
  PRIMARY KEY (`member_id`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `email`, `password`, `fname`, `lname`, `mname`, `address`, `mobile`, `phone`, `type`, `is_active`) VALUES
(1, 'xerenader@gmail.com', 'pass', 'Jason', 'Burgos', 'Macero', 'Rimos # 2, Luna, La Union', '09073598614', '', 'admin', 'y'),
(2, 'marjay@gmail.com', 'pass', 'Mar Jay', 'Laconsay', NULL, '', NULL, NULL, 'user', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT 'y',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `url`, `is_active`) VALUES
(1, 'Home', '', 'y'),
(2, 'Plans and Programs', '', 'y'),
(3, 'Core Values', '', 'y'),
(4, 'Gallery', '', 'y'),
(5, 'About', '', 'y'),
(6, 'Financial Statement', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` double NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `member_id`, `payment_date`, `amount`, `comment`) VALUES
(0, 1, '2013-06-14 16:00:00', 5000, 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
