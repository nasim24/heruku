-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `bh` varchar(200) NOT NULL,
  `bc` varchar(50) NOT NULL,
  `bimg` varchar(200) NOT NULL,
  `bd` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isverify` int(11) NOT NULL DEFAULT '0',
  `uid` int(30) NOT NULL,
  `ccount` varchar(500) NOT NULL DEFAULT '0',
  `views` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `bh`, `bc`, `bimg`, `bd`, `date`, `isverify`, `uid`, `ccount`, `views`) VALUES
(4, 'Samsung Galaxy A71 5G Variant Spotted on Geekbench', 'Technology', 'img/work.jpg', 'Samsung recently launched the Galaxy A71 in India earlier this week. The new smartphone was priced at Rs. 29,999 in India and is powered by a Qualcomm Snapdragon 730 SoC. It was previously reported that the South Korean smartphone maker is also working on a 5G variant of the same smartphone for the China market, and now it has been spotted on Geekbench sporting a different processor. ', '2020-02-20 18:51:05', 0, 1, '1', '4'),
(5, 'India Gains a Spot in Fixed Broadband Speed Rankings Globally in January 2020: Ookla', 'Technology', 'img/pexels-photo-248528-1.jpeg', 'India has been ranked 128th for mobile broadband and 66th (up from 67th) for fixed broadband while mean download speeds on fixed broadband has slipped to 41.48Mbps in January 2020 with minuscule improvement in mobile broadband to 11.58Mbps, Ookla said in its Speedtest Global Index.', '2020-02-20 18:10:25', 0, 1, '0', '0'),
(9, 'APPLE MIGHT FINALLY LET YOU PICK CHROME OVER SAFARI IN', 'Technology', 'img/Fd.jpg', 'If thereâ€™s one Android feature iPhone users have universally longed to have, itâ€™s the ability to pick new default apps. On iOS, itâ€™s Appleâ€™s way or the highway when it comes to apps like Safari and Mail, but a new report from Bloomberg offers hope that Apple might be softening its stance.', '2020-02-21 03:06:03', 0, 1, '0', '0'),
(10, 'THE BEST LAPTOPS: PREMIUM LAPTOPS, BUDGET LAPTOPS, 2-IN-1S, AND MORE', 'Technology', 'img/centimeter-master-pistol-wallpaper.jpg', '2020 looks like itâ€™s going to be a great year for laptops. We have AMD and Intel battling it out on the CPU front, new mobile discrete GPUs enabling thinner, lighter, and faster gaming laptops, and battery life that wonâ€™t quit. Check out the latest reviews below. \r\n\r\n', '2020-02-21 03:19:13', 0, 1, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `uid` int(50) NOT NULL,
  `bid` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `comment`, `uid`, `bid`, `date`) VALUES
(1, 'good', 13, 8, '2020-02-20 18:32:33'),
(2, 'very good', 13, 8, '2020-02-20 18:32:44'),
(3, 'good', 13, 7, '2020-02-20 18:34:03'),
(4, 'nice', 13, 7, '2020-02-20 18:34:11'),
(5, 'nice work', 1, 7, '2020-02-20 18:35:45'),
(6, 'good', 1, 4, '2020-02-20 18:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `isverify` int(11) NOT NULL DEFAULT '0',
  `suspend` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `image`, `role`, `isverify`, `suspend`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', ' 876567899  ', 'img/Screenshot_2019-10-24-22-35-19-915_com.miui.gallery.png', 'admin', 1, 0),
(7, 'manish', 'manish@gmail.com', 'manish', '8787987898', '', 'user', 1, 1),
(9, 'simran', 'simran@gmail.com', 'simran', '7489868578', '', 'user', 1, 0),
(11, 'guri', 'guri@gmail.com', 'guri', '7489868578', '', 'user', 1, 0),
(12, 'gaurav kumar', 'gaurav@gmail.com', '123456', '7489860915', '', 'user', 0, 0),
(13, 'user', 'user45@gmail.com', 'user', '7474787878', 'img/2274_Cute_2_2.jpg', 'user', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
