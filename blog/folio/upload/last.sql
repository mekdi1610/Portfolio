-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2019 at 12:43 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `text`) VALUES
(1, 'java'),
(2, 'php\r\n'),
(3, 'programmin'),
(4, 'c#');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `post` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `is_admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post`, `status`, `is_admin`) VALUES
(103, 'kirub', 'yolo\r\n', 1, 1, 0),
(98, 'gdhj', 'done', 1, 1, 1),
(97, 'fanu', 'heyyy', 2, 1, 1),
(96, 'yasir ', 'thanks', 1, 1, 0),
(110, 'kirub', 'oubfrubdfij', 4, 0, 0),
(111, 'cherub', 'hbkdbckbd c ckdbdkc ', 2, 0, 0),
(112, 'tester', 'tested', 7, 1, 0),
(113, 'tester', 'again tested', 8, 0, 0),
(114, 'GVFCD', 'vtcdxsdfrgt', 8, 0, 0),
(115, 'GVFCD', 'works', 2, 0, 0),
(116, 'mee', 'yooo it works\r\n', 1, 0, 0),
(117, 'kira', 'session test', 1, 0, 0),
(118, 'kira', 'and again', 1, 0, 0),
(119, 'kira', 'tester', 4, 0, 0),
(120, '', 'logged out', 4, 0, 0),
(121, 'kira', 'yayyyy', 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hilreg`
--

DROP TABLE IF EXISTS `hilreg`;
CREATE TABLE IF NOT EXISTS `hilreg` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `usname` varchar(30) NOT NULL,
  `sclid` varchar(20) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`sclid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilreg`
--

INSERT INTO `hilreg` (`fname`, `lname`, `usname`, `sclid`, `pwd`) VALUES
('kirubel', 'yilma', 'cherub', 'rd0405', '$2y$10$25D0cJEVI2lKCId215/PBurKPbJ1F/pdPYJ0OASfjpeU8p1qR.A6a'),
('baharu', 'getachew', 'baharu', 'bfkjd', '$2y$10$YFxqv4uLvJpPX5G8rtoUROus/cNMG2kKTg/R3Wxzz5iqJ5Zue9Lla'),
('kirubel', 'yilma', 'kira', '12345', '$2y$10$M3Sk/JX9fs4hlh6GL/Bspe.Cjp6rt.QBzO5M.JvxQcH8HJfyltq5C'),
('baharu', 'getachew', 'bah', 'bah12', '$2y$10$G.HqBAVZUWvfVgy6vbj66ekJ4E7b/xNoyCd3OnryjnSh6WvlUd0/q');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `category` varchar(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `date`, `body`, `author`, `keywords`) VALUES
(1, 'samsple php post', '1', 'june/1/2019', 'Should I buy the full version?\r\nOf course, many of you will be wondering whether or not you should buy the full version of IDM. Once it is\r\nset up, you will need to enter your cracked serial key – but don’t forget that these numbers tend to expire\r\neventually. So, it’s a good idea to buy the full version of IDM at some point to ensure you keep up to date\r\nwith all the latest features and updates.\r\nThere are two versions to choose from – you get the trial version with limited features which expires after\r\n30 days. Then, there is the full version which gives you all the bells and whistles of the IDM experience.\r\nWhat are the pros and cons of the ocial software?\r\nOf course, whether you choose IDM crack or the ocial version is up to you. There are some pros and\r\ncons of doing the latter. For example, most users report that the ocial version of IDM downloads faster,\r\nand as we have discussed, it is very easy to use – and relatively inexpensive.\r\nHowever, not everything is perfect. You can’t use it on non-Windows devices so iMac users will be\r\ndisappointed. And, of course, there is the cost issue. While inexpensive, the reality for many people is that\r\nit might be too much to pay – and it certainly isn’t free. This means that many people turn to the IDM\r\ncrack version.\r\nConclusion\r\nAs you can see, Internet Download Manager serial key is an incredibly powerful tool. And if you are\r\nlooking for a crack for IDM, the latest serial key free download version 6.30 is a brilliant and powerful tool\r\nthat can be used by anyone. If you want to experience download speeds of up to ve times what you\r\nnormally get, it’s a fantastic piece of software. There are plenty of ways of getting the crack version, from\r\nkeygen, patch and activation – and many more.', 'cherub', 'php'),
(10, 'i said test 2', ' 4', 'May, 30, 2019', '2rial version with limited features which expires after 30 days. Then, there is the full version which gives you all the bells and whistles of the IDM experience. What ', 'yang', 'test2'),
(2, 'java', '2', 'may 1 2019', 'IDM serial key– or Internet Download Manager crack is an ingenious piece of software that has a great\r\nway of speeding up your Internet connection and avoiding incredibly slow downloading. And given the\r\nweb these days is pretty much a central part of modern life, it’s no surprise that things like IDM are\r\nbecoming so popular. After all, we all partake in streaming media, many of us use Internet shopping, and\r\nthere are plenty of people who run businesses online – all of which require fast Internet speeds.\r\nThe reality is that with the weak Internet connection and snail-paced download speeds, it can have a huge\r\nimpact on all of our lives. Therefore, an IDM crack is a perfect solution as it keeps the online world fast\r\nenough for us to get what we need in double-quick time, improve our productivity, and save hours of the\r\nday doing more important things.\r\nWith this in mind, let’s take a look at everything you need to know about IDM crack – read on to nd out\r\nmore.\r\nWhat is IDM crack?\r\nIDM stands for Internet Download Manager. It is quite simply one of the best software on the market for\r\nincreasing your Internet speed for downloading or streaming les, with your standard Internet browsers\r\nsuch as Firefox or Chrome. According to the marketing information, IDM is capable of boosting your\r\nhttps://idmcrack.org/idm-serialkey-crack-download.html\r\n1/22\r\n4/23/2019\r\nIDM Serial Number, Crack, Patch Free Download 2019 Serial Keys\r\nspeeds by up to 500% – ve times what you experience right now. This means you will have the ability to\r\ndownload massive les – such as HD movies – in super quick time, as opposed to leaving your PC or\r\nlaptop on overnight downloading at painfully slow speeds.\r\nWhat are the features of IDM?\r\nYou can download pretty much anything you like from the Internet using Internet Download Manager, but\r\nmore importantly, you can download the les directly from your browser, rather than having to use\r\nextensions and magnets – which increases your download speed by a signicant amount.', 'kirubel', 'java'),
(7, 'tesstt', 'javvaa', '10 23 1235', 'rial version with limited features which expires after 30 days. Then, there is the full version which gives you all the bells and whistles of the IDM experience. What ', 'mee', 'version'),
(8, 'tesstt', 'javvaa', '10 23 1235', 'rial version with limited features which expires after 30 days. Then, there is the full version which gives you all the bells and whistles of the IDM experience. What ', 'mee', 'version'),
(9, 'i said test ', ' 1', 'May, 30, 2019', 'trial version with limited features which expires after 30 days. Then, there is the full version which gives you all the bells and whistles of the IDM experience. What ', 'kirubel', 'javaaa'),
(11, 'PROGRAMMIN', ' 3', 'May, 30, 2019', 'PROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMINPROGRAMMIN', 'kirubel', 'programmin'),
(12, 'session test', ' 3', 'June, 7, 2019', 'hope it workks HiLCoE is committed to excellence and continuous improvement. It is being recognized as an innovative, dynamic, and exciting community in which to learn, teach and work. HiLCoE is known for industrious educational quality, a student-centered focus, and service beyond the campus. To achieve its vision and mission, HiLCoE has created core value oriented organizational structure.<br>\r\n				\r\n				<b style=\"font-size: 40px; color: #1c8adb;\">vision</b><br>\r\n				Aspires to be a Centre of Excellence in the area of ICT Education, Research and Development (ER&D).<br>\r\n				To provide innovative undergraduate and graduate education that contributes to the development of society and the individual.<br>\r\n				To conduct research and disseminate research results in ICT that will push the frontiers of knowledge and that are relevant to the development needs of the country.<br>', 'kira', 'session');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
