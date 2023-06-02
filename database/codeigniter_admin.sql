-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `list1` varchar(255) NOT NULL,
  `list2` varchar(255) NOT NULL,
  `list3` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `headline`, `subtitle`, `list1`, `list2`, `list3`, `detail`) VALUES
(1, 'WE ARE HERE TO TRANSFORM THE LANDSCAPE OF CONSULTANCY', 'Our vision is to become the preferred partner in providing value-focused, sustainable management solutions through innovation & agility.', 'Offer best in class management solutions through strategic partnership, linking executional roadmaps to long-term goals', 'Unleash the potential of your organization and leaders through transformation and change inculcating operational excellence', 'Partner with your organization for result achievement in defined parameters', 'With a combined experience of over 120 years, we offer solutions in the areas of setting up business, mergers and acquisitions, organizational development, executive search, corporate governance, human resources, transformation & leadership with end-to-end support in delivering manufacturing and supply-chain excellence. ');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `photo`) VALUES
(1, 'client-1.png'),
(2, 'client-2.png'),
(3, 'client-3.png'),
(4, 'client-4.png'),
(5, 'client-5.png'),
(6, 'client-6.png'),
(7, 'client-7.png'),
(9, 'client-81.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `map` varchar(500) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `map`, `location`, `email`, `phone`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38980.06636812974!2d90.39327919772549!3d23.809466352226213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c759b97d33b9%3A0x8352c9524000affc!2sKohinoor%20Villa!5e0!3m2!1sen!2sbd!4v1678855368304!5m2!1sen!2sbd', 'House # 25, Road # 02, Lane # 1,West Vatara, Wazuddin Road, Dhaka 1212', 'rezatawhid@gmail.com', '01317267219');

-- --------------------------------------------------------

--
-- Table structure for table `contactmsg`
--

CREATE TABLE `contactmsg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmsg`
--

INSERT INTO `contactmsg` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Tauhid Ahmad', 'rezatawhid@gmail.com', 'This is a subject.', 'This is a message.'),
(2, 'Monzurul Karim Khan', 'tareza@gmail.com', 'An Objection', 'This is a Message'),
(3, 'Kazi Abu Hayat Mohammad Ali', 'mhsohel017@gmail.com', 'This is a subject.', 'This is a Message.'),
(4, 'Nasir Uddin', 'admin@email.com', 'This is a subject.', 'Thi si a Message'),
(6, 'Monzurul Karim Khan', 'rezatawhid@gmail.com', 'This is a subject.', 'This is a Message');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `boxicon` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `boxicon`, `headline`, `subtitle`) VALUES
(1, 'bx bx-receipt', 'Punctuality', 'We are good at what we do and we get results, and we want to add value.'),
(2, 'bx bx-cube-alt', 'Effectivity', 'We put a lot of effort into developing relationships with our clients so we can provide meaningful advice.'),
(3, 'bx bx-images', 'Veracity', 'We work on a ‘no surprises’ policy. No unexpected bills. No budget blow-outs. No missed deadlines.'),
(4, 'bx bx-shield', 'Punctuality', 'We are good at what we do and we get results, and we want to add value.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `target1` varchar(255) NOT NULL,
  `target2` varchar(255) NOT NULL,
  `target3` varchar(255) NOT NULL,
  `target4` varchar(255) NOT NULL,
  `target5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `headline`, `subtitle`, `target1`, `target2`, `target3`, `target4`, `target5`) VALUES
(1, 'Welcome to REZACORPORATE', 'We are team of talented employees making relations with Technology', 'STRATEGIC INTERVENTIONS', 'HUMAN RESOURCES', 'GAMIFIED RECRUITMENT', 'EXECUTIVE COACHING', 'SHARED SERVICES');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `boxicon` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `boxicon`, `headline`, `subtitle`) VALUES
(1, 'bx bxl-dribbble', 'Financial Sector', 'Diversified Solutions Offering,Financial Inclusion, Increasing Efficiency, Innovation at the Core, Enhanced Security. '),
(2, 'bx bx-file', 'Health Sector', 'Integrated Solution,  HealthTech,  Increasing Efficiency,  Innovation at the Core. '),
(3, 'bx bx-tachometer', 'Industrial Automation', 'Integrated Automation,  Increasing Efficiency,  Service Enhancement,  Optimization. '),
(4, 'bx bx-world', 'Research & Development', 'Invest & Innovate,  Proudly Made in Bangladesh,  Technologies: AI, ML, NLP, RPA,  Concept, Prototype, Pilot, Test, Product. '),
(5, 'bx bx-slideshow', 'Digitization & Archiving', 'Document Digitization & Archiving,  Eased Accessibility & Usage,  Confidentiality & Security Ensured,  Convenient & Robust. '),
(7, 'bx bx-arch', 'Financial Sector', 'Diversified Solutions Offering, Financial Inclusion,  Increasing Efficiency,  Innovation at the Core,  Enhanced Security. ');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `photo`, `name`, `position`) VALUES
(1, 'team-1.jpg', 'Monzurul Karim Khan', 'Junior Programmer'),
(2, 'team-2.jpg', 'Kashfia Bashar', 'Company Secretary and Head of Accounts'),
(3, 'team-3.jpg', 'Kazi Abu Hayat Mohammad Ali', 'Head of Division – Process, Performance & People'),
(4, 'team-4.jpg', 'Samira Zuberi Himika', 'Managing Director ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Morshed', 'mor@tmail.com', '356456'),
(2, 'Habib', 'hab@kmail.com', '6789867'),
(3, 'Tauhid Ahmad', 'super@email.com', '12345'),
(5, 'Kazi Abu Hayat Mohammad Ali', 'mhsohel017@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmsg`
--
ALTER TABLE `contactmsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactmsg`
--
ALTER TABLE `contactmsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
