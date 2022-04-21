-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 09:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebariobari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-08 14:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `From_Name` varchar(255) NOT NULL,
  `To_Name` varchar(20) NOT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `From_Contact_No` text NOT NULL,
  `To_Contact_No` text NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `From_Address` varchar(200) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_Type` varchar(10) DEFAULT NULL,
  `Payment_Category` varchar(20) DEFAULT NULL,
  `Payment_ID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `From_Name`, `To_Name`, `FromDate`, `ToDate`, `From_Contact_No`, `To_Contact_No`, `message`, `Status`, `From_Address`, `PostingDate`, `payment_Type`, `Payment_Category`, `Payment_ID`) VALUES
(1, 'test@gmail.com', 2, '', '', '22/06/2017', '25/06/2017', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '', '2017-06-19 20:15:43', '', '', ''),
(2, 'test@gmail.com', 3, '', '', '30/06/2017', '02/07/2017', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '', '2017-06-26 20:15:43', '', '', ''),
(3, 'test@gmail.com', 4, '', '', '02/07/2017', '07/07/2017', '', '', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ', 2, '', '2017-06-26 21:10:06', '', '', ''),
(4, 'arifulhasan107@gmail.com', 1, '', '', '12/02/2021', '20/-2/2022', '', '', 'i need this bike.', 1, '', '2021-02-08 15:05:22', '', '', ''),
(5, 'arifulhasan107@gmail.com', 4, '', '', '12/02/2021', '20/-2/2022', '', '', 'need this\r\n', 1, '', '2021-02-08 18:40:51', '', '', ''),
(6, 'faiza68@gmail.com', 6, '', '', '12/02/2021', '20/-2/2022', '', '', 'I need this product Emergency.', 1, '', '2021-02-09 18:02:25', '', '', ''),
(7, 'ariful12@gmail.com', 7, '', '', '10/02/21', '15/02/24', '', '', 'give this', 1, '', '2021-02-10 09:52:26', '', '', ''),
(8, 'ariful12@gmail.com', 7, '', '', '10/02/21', '15/02/24', '', '', 'give this', 1, '', '2021-02-10 09:52:39', '', '', ''),
(9, 'arifulhasan107@gmail.com', 8, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'Quickly delivar this product.', 0, '', '2021-02-10 21:57:17', '', '', ''),
(10, 'arifulhasan107@gmail.com', 6, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'need fast', 0, '', '2021-02-10 23:32:25', '', '', ''),
(11, 'arifulhasan107@gmail.com', 6, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'need fast', 1, '', '2021-02-10 23:32:52', '', '', ''),
(12, 'arifulhasan107@gmail.com', 6, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'need fast', 0, '', '2021-02-11 00:03:35', '', '', ''),
(13, 'arifulhasan107@gmail.com', 7, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'need this timely', 0, '', '2021-02-11 00:04:57', '', '', ''),
(14, 'arifulhasan107@gmail.com', 7, '', '', 'Payment', '12343644', '', '', 'need this emergency', 0, '', '2021-02-11 01:08:37', '', '', ''),
(15, 'arifulhasan107@gmail.com', 9, '', '', 'Akhuya,Mymosing', '0130-3828739', '', '', 'please give carefully', 1, '', '2021-02-11 01:16:36', '', '', ''),
(16, 'arifulhasan107@gmail.com', 7, '', 'Sakib', 'Cash On Delivary', '12343644', '', '', 'need', 0, '', '2021-02-11 11:23:29', 'Khandar,bo', '01632510196', 'Cash On Delivary'),
(17, 'arifulhasan107@gmail.com', 8, '', 'Maisha', 'Rocket', '12343644', '', '', 'need this\r\n', 0, '', '2021-02-11 11:27:08', 'Akhuya,Mym', '0130-382873', 'Payment'),
(18, 'arifulhasan107@gmail.com', 8, '', 'Maisha', 'Rocket', '12343644', '', '', 'need this\r\n', 0, '', '2021-02-11 12:14:17', 'Akhuya,Mym', '0130-382873', 'Payment'),
(19, 'arifulhasan107@gmail.com', 8, '', 'Maisha', 'Akhuya,Mymosing', '0130-382873', '', '', 'need this\r\n', 0, '', '2021-02-11 12:17:43', 'Payment', 'Rocket', '12343644'),
(20, 'arifulhasan107@gmail.com', 8, '', 'Maisha', 'Akhuya,Mymosing', '0130-382873', '', '', 'need this\r\n', 0, '', '2021-02-11 12:17:49', 'Payment', 'Rocket', '12343644'),
(21, 'arifulhasan107@gmail.com', 12, '', 'Sakib', 'Khandar,bogura', '01632510196', '', '', 'safly', 0, '', '2021-02-11 12:18:47', 'Payment', 'Doutch Bangla Bank', '12343644'),
(22, 'arifulhasan107@gmail.com', 12, '', 'Faiza', 'Akhuya,Mymosing', '0130-382873', '', '', 'perfect time', 1, '', '2021-02-11 12:19:54', 'Payment', 'Rocket', '12343644'),
(23, 'arifulhasan107@gmail.com', 12, '', 'Faiza', 'Akhuya,Mymosing', '0130-382873', '', '', 'perfect time', 0, '', '2021-02-11 12:20:38', 'Payment', 'Rocket', '12343644'),
(24, 'arifulhasan107@gmail.com', 13, '', 'Faiza', 'Akhuya,Mymosing', '0130-382873', '', '', 'need emergency', 1, '', '2021-02-11 12:54:34', 'Payment', 'Bkash', '96934707503'),
(25, 'faiza68@gmail.com', 6, '', 'Ariful', 'Khandar', '01745367286', '', '', 'need safty', 0, '', '2021-02-11 13:09:31', 'Cash On De', 'Cash On Delivary', ''),
(26, 'ariful10@gmail.com', 13, '', 'Maisha', 'Akhuya,Mymosing', '01632510196', '', '', 'i need this product.', 0, '', '2021-02-11 16:37:20', 'Payment', 'Bkash', '96934707503'),
(27, 'arifulhasan107@gmail.com', 16, '', 'Sakib', 'Khandar,bogura', '01632510196', '', '', 'shxzhbzdxbzd', 1, '', '2021-02-11 16:44:56', 'Payment', 'Bkash', '12343644'),
(28, 'arifulhasan107@gmail.com', 14, '', 'Sakib', 'Khandar,bogura', '01632510196', '', '', 'dxzbnzcnbzcxbn cz', 1, '', '2021-02-11 17:40:11', 'Cash On De', 'Cash On Delivary', ''),
(29, 'arifulhasan107@gmail.com', 16, '', 'Sakib', 'Akhuya,Mymosing', '01632510196', '', '', 'need this\r\n', 1, '', '2021-02-13 07:26:00', 'Payment', 'Bkash', '12343644'),
(30, 'arifulhasan107@gmail.com', 13, '', 'Khandar,Bogura', 'Akhuya,Mymosing', '01632510196', '', '', 'need safty', 1, 'Khandar,Bogura', '2021-03-13 17:29:46', 'Cash On De', 'Cash On Delivary', ''),
(31, 'arifulhasan107@gmail.com', 13, '', 'Khandar,Bogura', 'Khandar,bogura', '0130-382873', '', '', 'need', 0, 'Khandar,Bogura', '2021-03-14 20:01:16', 'Payment', 'Bkash', '96934707503'),
(32, 'arifulhasan107@gmail.com', 13, '', 'Khandar,Bogura', 'Khandar,bogura', '0130-382873', '', '', 'need', 0, 'Khandar,Bogura', '2021-03-14 20:02:03', 'Payment', 'Bkash', '96934707503'),
(33, 'arifulhasan107@gmail.com', 13, '', 'Khandar,Bogura', 'Khandar,bogura', '0130-382873', '', '', 'need', 2, 'Khandar,Bogura', '2021-03-14 20:02:20', 'Payment', 'Bkash', '96934707503'),
(34, 'arifulhasan107@gmail.com', 13, '', 'Khandar,Bogura', 'Akhuya,Mymosing', '01632510196', '', '', 'need this', 0, 'Khandar,Bogura', '2021-03-19 13:49:12', 'Payment', 'Bkash', '96934707503'),
(35, 'arifulhasan107@gmail.com', 13, '', 'Maisha', 'Khandar,bogura', '0130-382873', '', '', 'safly', 0, 'Maisha', '2021-03-19 14:27:49', 'Payment', 'Rocket', '96934707503'),
(36, 'arifulhasan107@gmail.com', 14, '', 'Faiza', 'Khandar,bogura', '0130-382873', '', '', 'okk\r\n', 0, 'Khandar,Bogura', '2021-03-19 14:31:24', 'Payment', 'Rocket', '12343644'),
(37, 'arifulhasan107@gmail.com', 16, '', 'Sakib', 'Akhuya,Mymosing', '01632510196', '', '', 'need\r\n', 1, 'Khandar,Bogura', '2021-03-19 14:36:48', 'Payment', 'Doutch Bangla Bank', '12343644'),
(38, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:30:58', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(39, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:33:05', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(40, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:36:03', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(41, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:38:56', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(42, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:42:06', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(43, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:42:50', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(44, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 0, 'Koloni,Bogura ', '2021-03-19 15:43:09', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(45, 'arifulhasan107@gmail.com', 13, 'Ariful', 'Maisha', 'Akhuya,Mymosing', NULL, '01745367286', '01632510196', '', 1, 'Koloni,Bogura ', '2021-03-19 15:43:33', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(46, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:03:42', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(47, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:04:29', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(48, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:04:52', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(49, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:05:03', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(50, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:05:34', 'Payment', 'Doutch Bangla Bank', '96934707503'),
(51, 'arifulhasan107@gmail.com', 14, 'Tushar', 'Sakib', 'Gabtoli, Dhaka ', NULL, '01745367286', '01632510196', 'Emergency need this product', 0, 'Majhira,Bogura', '2021-03-19 17:05:51', 'Payment', 'Doutch Bangla Bank', '96934707503');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(14, 'Koloni,Bogura To Akuya,Mymenshingh', '2021-02-11 12:41:57', '2021-02-11 12:42:47'),
(15, 'Gabtoli, Dhaka To Magihira, Bogura', '2021-02-11 13:14:55', '2021-02-11 13:17:33'),
(16, 'Majhira, Bogura To Gabtoli, Dhaka', '2021-02-11 14:59:08', NULL),
(17, 'Majhira, Bogura  to New Market,Dhaka', '2021-02-11 16:39:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Majhira, Shajahanpur, Bogura.', 'ebariobari@gmail.com', '01779206002');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1),
(2, 'Ariful', 'arifulhasan107@gmail.com', '01632510196', 'some problem', '2021-02-09 08:35:47', 1),
(3, 'Ariful Hassan', '017465694674', 'arifulhasan', 'koi amar product', '2021-02-09 13:10:27', 1),
(4, 'Ariful', '0174536728', 'arifulhasan', 'I have some problem', '2021-02-11 16:49:47', 1),
(5, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:16:02', NULL),
(6, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:18:16', NULL),
(7, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:19:34', NULL),
(8, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:20:55', NULL),
(9, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:22:53', NULL),
(10, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id...please solve it', '2021-02-12 09:26:44', NULL),
(11, 'Ariful', '01632510196', 'arifulhasan', 'some problem my id', '2021-02-12 09:27:06', NULL),
(12, 'Olied', '0174536728', 'arifulhasan', 'hey, some PB. solve it my delivery.', '2021-02-12 09:28:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Last updated: December 05, 2017\nPlease read these Terms and Conditions (\"Terms\", \"Terms and Conditions\") carefully before using the ->code-projects.org/ website (the \"Service\") operated by Code Projects (\"us\", \"we\", or \"our\").\nYour access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.\nBy accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. Terms and Conditions from TermsFeed for Code Projects. Links To Other Web Sites\nOur Service may contain links to third-party web sites or services that are not owned or controlled by Code Projects.\nCode Projects has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Code Projects shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.\nWe strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit. Governing Law\nThese Terms shall be governed and construed in accordance with the laws of New York, United States, without regard to its conflict of law provisions.\nOur failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service. Changes\nWe reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.\nBy continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service. Contact Us\nIf you have any questions about these Terms, please contact us. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At OBC eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. we are very carefully delivary</span>\r\n										\r\n										'),
(3, 'About Us ', 'aboutus', '																																								<h4><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">WE ARE THE Ebari ObariL MANAGER. The only 100% dedicated Delivery booking website. The first&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Ebari ObariL</span><span style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">&nbsp;Manager (EOM) shop was our own kind of shop. Ever Since it has been our aim to make Delivaryeasier for everyone, everywhere. We focus on making All Kinds Delivery easier for you. Your rental business has a unique set of challenges. We are the only dedicated kind of Delivery site </span><span style=\"font-family: impact; font-size: medium;\">and will be able to offer you a solution to match your needs. Get in touch with us today! We provide affordable bike rates, we have lost of Satisfied customers feedback, you can have a look at our home page too!!</span></span><img style=\"font-size: 1em;\"></h4>\r\n										\r\n										'),
(11, 'Service Area', 'servicearea', '																																																																						<div style=\"text-align: justify;\"><span style=\"font-size: 1em; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1 . <span style=\"font-weight: bold;\">Bogura&nbsp;</span></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1em; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">2 . <span style=\"font-weight: bold;\">Dhaka</span></span></div>\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(4, 'arifulhasan107@gmail.com', '2021-02-08 18:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'This is amazing! I mean really such great bike for rent at affordable price. oh this is crazy man!', '2017-06-18 07:44:31', 0),
(2, 'demo@gmail.com', '\nI think this is the one and only top bike rental site in the world. 5-Stars from me - Full satisfaction, no complain at all', '2017-06-18 07:46:05', 0),
(3, 'arifulhasan107@gmail.com', 'kobe bike pabo vai?\r\n', '2021-02-08 18:03:24', 0),
(4, 'arifulhasan107@gmail.com', 'vai\r\n', '2021-02-08 18:07:17', 1),
(5, 'arifulhasan107@gmail.com', 'amazing service', '2021-02-08 18:44:45', 1),
(6, 'arifulhasan107@gmail.com', 'amazing service', '2021-02-08 18:46:53', 1),
(7, 'ariful12@gmail.com', 'That\'s a good survice ', '2021-02-09 13:24:03', 1),
(8, 'faiza68@gmail.com', 'great survice', '2021-02-09 18:05:35', 1),
(9, 'arifulhasan107@gmail.com', 'You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best Courier Delivary with best deals', '2021-02-10 15:30:08', 0),
(10, 'arifulhasan107@gmail.com', 'You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best Courier Delivary with best deals', '2021-02-10 15:30:23', NULL),
(11, 'arifulhasan107@gmail.com', 'You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best Courier Delivary with best deals', '2021-02-10 15:33:02', NULL),
(12, 'arifulhasan107@gmail.com', 'You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! We have best Courier Delivary with best deals', '2021-02-10 15:43:46', NULL),
(13, 'arifulhasan107@gmail.com', 'You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! We have best Courier Delivary with best deals', '2021-02-10 15:44:10', 1),
(14, 'arifulhasan107@gmail.com', 'Great service', '2021-02-11 16:55:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `Business_Name` varchar(255) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Pickup_Location` varchar(255) NOT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `Business_Name`, `FullName`, `Pickup_Location`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, '', 'Harry Den', '', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2147483647', NULL, NULL, NULL, NULL, '2017-06-17 19:59:27', '2017-06-26 21:02:58'),
(2, '', 'AK', '', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '8285703354', NULL, NULL, NULL, NULL, '2017-06-17 20:00:49', '2017-06-26 21:03:09'),
(3, '', 'Mark K', '', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', '09999857868', '03/02/1990', 'PKL', 'PKL', 'PKL', '2017-06-17 20:01:43', '2017-06-17 21:07:41'),
(4, '', 'Tom K', '', 'test@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '9999857868', '', 'PKL', 'XYZ', 'XYZ', '2017-06-17 20:03:36', '2017-06-26 19:18:14'),
(5, '', 'Ariful Hassan', '', 'arifulhasan107@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01745367286', '1998/01/2021', 'Khandar,Bogura', 'Bogura', 'Bogura', '2021-02-08 15:04:16', '2021-02-12 09:35:01'),
(6, '', 'Maisha Ferdoushi', '', 'maisha35-468@diu.edu.bd', 'e10adc3949ba59abbe56e057f20f883e', '0130588333', NULL, NULL, NULL, NULL, '2021-02-09 12:32:23', NULL),
(7, '', 'Olied', '', 'ariful12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0135353537', '1996/12/15', 'Mirpur 12, Dhaka', 'Dhaka', 'Bangladesh', '2021-02-09 13:17:35', '2021-02-09 13:22:05'),
(8, '', 'Maisha Ferdoushi', '', 'faiza68@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1305883338', '1998/01/2021', 'Akuya, Mymonshing', 'Mymonshing', 'Bangladesh', '2021-02-09 17:58:08', '2021-02-09 18:03:10'),
(9, '', 'Ariful', '', 'ariful10@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '01745367286', NULL, NULL, NULL, NULL, '2021-02-11 16:35:49', NULL),
(10, 'AHT', 'Ariful', 'Khandar,Bogura', 'ariful108@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01745367286', NULL, NULL, NULL, NULL, '2021-03-24 11:20:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'SS400', 2, 'Slowly spreading its cards this year, the Ace of Bajaj Autos is still not on the table. With the expectations like Pulsar 400SS or Pulsar SS400, the Ace (400SS) would be the commander of the Pulsar series. It would be a benchmark for the other motorcycle manufacturers as the competition for more performance oriented bikes will definitely rise this year.', 345345, 'Petrol', 3453, 2, 'knowledges_base_bg.jpg', '20170523_145633.jpg', 'codepro.png', 'social-icons.png', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-19 11:46:23', '2017-06-20 18:38:13'),
(2, 'RS200', 2, 'The Pulsar is by far the most successful brand Bajaj has managed to create in the recent past.It is also fast, no doubt. But, its true highlight is its easy to ride nature. ', 859, 'Petrol', 2015, 2, 'bike_755x430.png', 'looking-used-bike.png', 'front-image.jpg', 'about_services_faq_bg.jpg', '', 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, '2017-06-19 16:16:17', '2017-06-21 16:57:11'),
(3, 'R1', 4, ' The Suzuki GSX-R1000 is a sport bike from Suzuki GSX-R series of motorcycles.It was introduced in 2001 to replace the GSX-R1100 and is powered by a liquid-cooled 999 cc (61.0 cu in) inline four-cylinder, four-stroke engine.', 563, 'Petrol', 2012, 2, 'featured-img-300.jpg', 'dealer-logos.jpg', 'img_390x3900.jpg', 'listing_img303.jpg', '', 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:20', '2017-06-20 18:40:11'),
(4, 'Duke390', 1, ' The KTM 390 DUKE breathes life into values that have made motorcycling so amazing for decades. It combines maximum riding pleasure with optimum user value and comes out on top wherever nimble handling counts. Light as a feather, powerful and packed with state-of-the-art technology, it guarantees a thrilling ride, whether youre in the urban jungle or a forest of bends. 390 DUKE – nowhere you will find more motorcycle per euro.', 5636, 'Petrol', 2012, 2, 'featured-img-3000.jpg', 'featured-img-1000.png', 'featured-img-1000.png', 'featured-img-1000.png', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:43', '2017-06-20 18:44:12'),
(5, 'R1', 5, 'The YZF-R1® features a lightweight and compact crossplane crankshaft, inline-four-cylinder, 998cc high output engine. Featuring titanium fracture-split connecting rods, an offset cylinder block and magnesium covers, the motor delivers extremely high horsepower and a strong pulse of linear torque for outstanding performance, all wrapped in aerodynamic MotoGP®-style bodywork.', 345345, 'Petrol', 3453, 2, 'bikes_755x430.png', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-20 17:57:09', '2017-06-21 16:56:43'),
(6, 'fxjhfzjhzfjhz', 9, 'kdfxjxfjxfj', 350, 'Emergency Delivary', 2021, 242, 'front page.PNG', 'front page2.PNG', 'front page 3.PNG', 'parcel.PNG', 'parcell list details.PNG', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-09 18:01:18', '2021-02-10 23:32:47'),
(7, 'Birthday', 8, 'great', 1000, 'Emergency Delivary', 2021, 10, 'dlv-man.png', 'The-Importance-of-Delivery-Services-during-COVID-19.jpg', 'Ebari Obari2.jpg', 'courier-services.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-02-09 20:04:56', '2021-02-11 00:04:07'),
(8, 'Emergency', 9, 'we try our best service', 200, 'Normal ', 2022, 5, 'old bd.PNG', 'Colorful Freestyle Art Artists and Illustrators Collection YouTube Outro .gif', 'Colorful Freestyle Art Artists and Illustrators Collection YouTube Outro  3.png', 'Colorful Freestyle Art Artists and Illustrators Collection YouTube Outro  3.png', '', 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, '2021-02-10 16:03:22', '2021-02-10 22:38:02'),
(9, 'Morning', 8, '60:00-12:00pm', 1000, 'Emergency Delivary', 60, 5, 'front-image2.jpg', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 00:37:00', NULL),
(10, 'Morning', 8, '60:00-12:00pm', 200, 'Normal Delivary', 60, 5, 'front-image2.jpg', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 00:45:14', '2021-02-11 11:07:13'),
(11, 'Morning', 8, '60:00-12:00pm', 1000, 'Normal Delivary', 60, 5, 'front-image2.jpg', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 00:48:27', '2021-02-11 11:07:34'),
(12, 'Korotoya Corier Service', 12, 'We get Softly.', 350, 'Emergency Delivary', 60, 50, 'corier.jpg', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 10:27:11', '2021-02-11 14:55:27'),
(13, 'Rongdhu', 14, '6:30 to 7:30', 200, 'Emergency Delivary', 6, 50, 'Subscribe to my channel! 3.jpg', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-11 12:51:29', NULL),
(14, 'Suvo EnterPrize', 16, '10:30 am - 5:00 pm', 350, 'Normal Delivary', 10, 50, 'dlv-man.png', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 15:04:24', NULL),
(15, 'Suvo EnterPrize', 16, '10:30 am - 5:00 pm', 350, 'Normal Delivary', 10, 50, 'dlv-man.png', '', '', '', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-02-11 15:33:38', NULL),
(16, 'Korootoya Service', 14, '8:30 - 9:00 am', 200, 'Normal Delivary', 6, 50, 'delivary.jpg', 'logo.PNG', 'front-image3.jpg', 'The-Importance-of-Delivery-Services-during-COVID-19.jpg', '', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-11 16:43:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
