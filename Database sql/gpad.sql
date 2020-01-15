-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 05:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpad`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `FirstPara` varchar(2000) NOT NULL,
  `SecondPara` varchar(2000) NOT NULL,
  `ThirdPara` varchar(2000) NOT NULL,
  `FourthPara` varchar(2000) NOT NULL,
  `FifthPara` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `FirstPara`, `SecondPara`, `ThirdPara`, `FourthPara`, `FifthPara`) VALUES
(1, 'GPAD Training Center ( A unit of Geo-Planning for Advanced Development ) located at Banashree, Rampura, Dhaka with full training facilities.', 'It has been arranging specialized training on Geographic Information System (GIS), and application on different fields (Land Management, Disaster Management, Agriculture, Network Analysis, Water Management, Transport, Urban Planning, Landscape Design, Private Residential Area Planning, Mapping form Open Source Data like google map, google image, bing image, ASTER Image etc.', 'Open Source GIS software like QGIS, MapWindow GIS, GPS Survey Techniques, Spatial Data Management, Statistical Package for Social Science (SPSS), AutoCAD 2D/3D, Google Sketchup etc.', 'Beside our regular public training programs, we provide outstanding Customized Training for different organizations to address their specific training needs on the following topics.', 'We have a wide panel of highly experienced trainers with extensive practical experience in their related fields and have conducted high quality training.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'gpad', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `adminhome`
--

CREATE TABLE `adminhome` (
  `id` int(11) NOT NULL,
  `pageName` varchar(50) NOT NULL,
  `CompanyDescription` varchar(2000) NOT NULL,
  `whyChooseUsLeftSide` varchar(1000) NOT NULL,
  `whyChooseUsRightSide` varchar(1000) NOT NULL,
  `WhatWeDoFirstLine` varchar(400) NOT NULL,
  `WhatWeDoPoints` varchar(400) NOT NULL,
  `OfferServices` varchar(2000) NOT NULL,
  `ProfessionalCoursesDescription` varchar(1000) NOT NULL,
  `ExperiencedInstructorDescription` varchar(1000) NOT NULL,
  `PracticalTrainingDescription` varchar(1000) NOT NULL,
  `ValidateCertificateDescription` varchar(1000) NOT NULL,
  `trainingNumber` int(255) NOT NULL,
  `studentNumber` int(255) NOT NULL,
  `trainersNumber` int(255) NOT NULL,
  `countryPriority` int(255) NOT NULL,
  `ourClassesDescription` varchar(2000) NOT NULL,
  `experiencedtrainerDescription` varchar(2000) NOT NULL,
  `upcomingeventsDescription` varchar(2000) NOT NULL,
  `RecentNewsDescription` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminhome`
--

INSERT INTO `adminhome` (`id`, `pageName`, `CompanyDescription`, `whyChooseUsLeftSide`, `whyChooseUsRightSide`, `WhatWeDoFirstLine`, `WhatWeDoPoints`, `OfferServices`, `ProfessionalCoursesDescription`, `ExperiencedInstructorDescription`, `PracticalTrainingDescription`, `ValidateCertificateDescription`, `trainingNumber`, `studentNumber`, `trainersNumber`, `countryPriority`, `ourClassesDescription`, `experiencedtrainerDescription`, `upcomingeventsDescription`, `RecentNewsDescription`) VALUES
(1, '', 'GPAD Training Center ( A unit of Geo-Planning for Advanced Development ) located at Banashree, Rampura, Dhaka 1219\r\nNear the Meradia Bazar with full training facilities. It has been arranging specialized training on Geographic Information System (GIS), and application on different fields (Land Management, Disaster Management, Agriculture, Network Analysis, Water Management, Transport, Urban Planning, Landscape Design, Private Residential Area Planning, Mapping form Open Source Data like google map, google image, bing image, ASTER Image etc.), Open Source GIS software like QGIS, MapWindow GIS, GPS Survey Techniques, Spatial Data Management, Statistical Package for Social Science (SPSS), AutoCAD 2D/3D, Google Sketchup etc. Beside our regular public training programs, we provide outstanding Customized Training for different organizations to address their specific training needs on the following topics. We have a wide panel of highly experienced trainers with extensive practical experience in their related fields and have conducted high quality training.', 'GPAD, Training Center giving you full professional training facilities like Training Venue with 12 Seat Capacity, Projector, Desktop and Laptop Computers, Wifi Internet Facilities, Waiting room, Printing facilities etc.', 'We have a wide panel of highly experienced trainers with extensive practical experience in their related fields and have conducted high quality training.', 'Training Center giving you full professional training facilities like ', 'we provide outstanding Customized Training for different organizations to address their specific training needs on the following topics.', 'GPAD provides various training offer like GIS Training, Remote Sensing Training, Customized GIS and RS Training, SPSS Training, GPS Training, Database Management Training, TAB based Data Collection Training, QGIS/MapWindowGIS (Open Source GIS Training) etc.', 'Professional Courses Description..........', 'Experienced Instructor Description.........', 'Practical Training Description...........', 'Validate Certificate Description..........', 42, 500, 50, 1, 'Our Classes Description..........', 'Experienced Trainer Short Description.....', 'upcoming events Description..........', 'Recent News Description........');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessage`
--

CREATE TABLE `contactmessage` (
  `id` int(255) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `EventName` varchar(500) NOT NULL,
  `OrganizedBy` varchar(400) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `VanueName` varchar(400) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `everypagefrontimage`
--

CREATE TABLE `everypagefrontimage` (
  `id` int(255) NOT NULL,
  `CourseImage` varchar(500) NOT NULL,
  `AboutImage` varchar(500) NOT NULL,
  `EventImage` varchar(500) NOT NULL,
  `NewsImage` varchar(500) NOT NULL,
  `ContactImage` varchar(500) NOT NULL,
  `RegistrationImage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `everypagefrontimage`
--

INSERT INTO `everypagefrontimage` (`id`, `CourseImage`, `AboutImage`, `EventImage`, `NewsImage`, `ContactImage`, `RegistrationImage`) VALUES
(1, 'eventgpad.jpg', 'eventgpad.jpg', 'eventgpad.jpg', 'eventgpad.jpg', 'eventgpad.jpg', 'eventgpad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `firsthighlightednews`
--

CREATE TABLE `firsthighlightednews` (
  `id` int(255) NOT NULL,
  `newsHeadline` varchar(500) NOT NULL,
  `postedby` varchar(100) NOT NULL,
  `shortDescription` varchar(2000) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `firsthighlightednews`
--

INSERT INTO `firsthighlightednews` (`id`, `newsHeadline`, `postedby`, `shortDescription`, `Day`, `Month`, `image`) VALUES
(1, '', '', '', '', '', 'eventgpad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepageslider`
--

CREATE TABLE `homepageslider` (
  `id` int(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `titlename` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepageslider`
--

INSERT INTO `homepageslider` (`id`, `image`, `titlename`) VALUES
(1, 'IMG_0665.JPG', 'BEST Training Center for GIS'),
(2, 'P1390152.JPG', 'BEST Training Center for RIS'),
(3, 'IMG_0573.JPG', 'BEST Training Center in BD'),
(4, 'eventgpad.jpg', 'Best Training Center for Remote Sensing Training');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `NewsHeadline` varchar(1000) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(255) NOT NULL,
  `ParticipantName` varchar(100) NOT NULL,
  `Feedback` varchar(2000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `ParticipantName`, `Feedback`, `image`) VALUES
(2, 'Litu Rahman', 'Best Training center for student, professionals to learning GIS, Remote sensing, open source data collection etc and has good learning environment and qualified trainer.', '67513703_2317785801796306_6906326430083186688_o.jpg'),
(3, 'Muhammad Hafiz', 'One of the best training center based on GIS and great environment.\r\n', '74588513_2904220249588702_4320602345177088000_o.jpg'),
(4, 'Sabina Sharmin', 'Good Institute for GIS an Remote Sensing Training.', '26814650_10214593707506685_2570061847934605654_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE `registrationdetails` (
  `id` int(255) NOT NULL,
  `pageName` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Designation` varchar(400) NOT NULL,
  `InstitutionName` varchar(500) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `DesiredTraining` varchar(400) NOT NULL,
  `TrainingNews` varchar(400) NOT NULL,
  `transactionNumber` varchar(400) NOT NULL,
  `RefenceName` varchar(100) NOT NULL,
  `Feedback` varchar(2000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(255) NOT NULL,
  `TrainerName` varchar(100) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `TrainerName`, `ShortDescription`, `image`) VALUES
(1, 'Md. Rejaur Rahman', 'BURP (Khulna University)\r\nSC in GIS & RS (ITC, The Netherlands)\r\nPGD in Disaster Management (IDVS, Dhaka University)\r\nMSDM (Dhaka University), Master of Science in GIS for Environment and Development (MSGED), Jahangirnagar University\r\n12 Yearsâ€™ Experience in GIS and Remote Sensing (RS) Application in Disaster Risk and Hazard Mapping, Base Database Preparation, Transport Planning, Landuse Mapping.', 'IMG_0341.jpg'),
(2, 'Md. Murad Billah', 'BURP (Khulna University), Master of Science in GIS for Environment and Development (MSGED), Jahangirnagar University.\r\nSr. GIS Coordinator\r\nADPC, Thailand\r\n14 Yearsâ€™ Experience in GIS Application and Training\r\n', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png'),
(3, 'S. S. Biddya Baron Sarker', 'MS in GIS for Environment and Development (MSGED), Department of Geography and Environment, JU, M.Sc. in Disaster Management of Geography and Environmental Science Department, DU, Bachelor of Urban & Rural Planning (BURP), KU', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png'),
(4, 'S.M.Mostafigur Rahman', 'MS in GIS for Environment and Development, Jahangirnagar University ,2017, MS in Disaster Management, University of Dhaka, 2015, Bachelor of Urban and Rural Planning, Khulna University, 2010\r\nSr. GIS Specialist\r\nDGHS, Dhaka\r\n09 Yearsâ€™ Experience in GIS Application and Training\r\n', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png'),
(5, 'Md. Rakibul Islam', 'BURP (Khulna University)\r\nPGD in IT (Dhaka University), Master of Science in GIS for Environment and Development (MSGED), Jahangirnagar University.\r\nGIS Specialist,\r\nNRECA International, USA\r\n08 Yearsâ€™ Experience in GIS Application\r\n', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png'),
(6, 'Molla Safayet Hossan Mim', 'Bachelor of Urban and Regional Planning, CUET, 2018.\r\nAssist. GIS Specialist\r\nGPAD, Dhaka\r\n', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png'),
(7, 'Md. Moklasar Rahman Litu', 'Bachelor of Urban and Regional Planning, CUET, 2018\r\nAssist. GIS Specialist\r\nGPAD, Dhaka\r\n', 'man-finance-online-svg-person-icon-woman-11562870600emg9xrufv6.png');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(255) NOT NULL,
  `TrainingName` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `registrationTime` varchar(100) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `TrainingName`, `image`, `amount`, `registrationTime`, `ShortDescription`) VALUES
(1, 'GIS', '67311794_1396577143840471_1579245636354572288_o.jpg', '10,000', 'Registration Time out', 'You Missed It. Better Luck Next Time. For More Information visit our official facebook page');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminhome`
--
ALTER TABLE `adminhome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmessage`
--
ALTER TABLE `contactmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `everypagefrontimage`
--
ALTER TABLE `everypagefrontimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firsthighlightednews`
--
ALTER TABLE `firsthighlightednews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepageslider`
--
ALTER TABLE `homepageslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adminhome`
--
ALTER TABLE `adminhome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactmessage`
--
ALTER TABLE `contactmessage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `everypagefrontimage`
--
ALTER TABLE `everypagefrontimage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `firsthighlightednews`
--
ALTER TABLE `firsthighlightednews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homepageslider`
--
ALTER TABLE `homepageslider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
