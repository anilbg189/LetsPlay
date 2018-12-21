-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 09:12 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsromp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `btime` time NOT NULL,
  `hours` varchar(6) NOT NULL,
  `courts` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `uid`, `fid`, `bdate`, `btime`, `hours`, `courts`, `cost`) VALUES
(1, 3, 4, '2018-11-16', '17:00:00', '2', 1, 1200),
(2, 3, 4, '2018-11-16', '16:00:00', '2', 9, 10800),
(4, 3, 1, '2018-11-16', '17:00:00', '2', 4, 2400),
(5, 3, 1, '2018-11-16', '16:01:00', '2', 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `game` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `costperhour` int(10) NOT NULL,
  `courts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`fid`, `name`, `game`, `address`, `phno`, `costperhour`, `courts`) VALUES
(1, 'Golden Racquets', 'Badminton', 'near rmz galaria,yelahanka,banglore', '9234567890', 300, 5),
(2, 'Baddies Zone', 'Badminton', 'Thanisandra,sahakar nagar,banglore', '9884567890', 300, 4),
(3, 'A1 Sports', 'Badminton', '2nd main, baba nagar, baglur cross, yelahanka, banglore', '9236654987', 200, 5),
(4, 'White Peacock', 'Badminton', 'No 92/2, Shabari Nagar, Near Ayyappa Swamy Temple, Ragiv Gandhi Nagar, Sahakarnagar', '8236145789', 600, 10),
(5, 'OvalNet', 'Badminton', 'No 3/1, Kodigehalli Main Road, Adjacent to Cauvery College, 60 feet road, Sahakarnagar', '7365491375', 100, 8),
(6, 'Padukone-Dravid Center for Sport Excellence', 'Football', 'Tarahunise Post, Jala Hobli', '9236517564', 5000, 7),
(7, 'Stadium Arena', 'Football', 'Avalahalli, Dodaballapur road, Yelahanka', '7854123495', 2000, 3),
(8, 'FSV Arena', 'Football', 'Hennur-Baglur road, Chagalatti Village, Jala Hobli, Bharappa layout, Mitganahalli', '8457968749', 1000, 10),
(9, 'The Bullring Fever Pitch', 'Football', '6/3 Tumkur Main road, Near Goraguntepallya Metro Station, Yeshwantpur', '9878987897', 1500, 6),
(10, 'Soccer Village', 'Football', '60 Feet road, Behind People Showroom, Near Forture Icon Apartment, Banglore', '7324651236', 600, 4),
(12, 'The Bullring Fever Pitch', 'Cricket', '6/3 Tumkur Main road, Near Goraguntepallya Metro Station, Yeshwantpur', '9878987897', 1500, 2),
(13, 'Inplay', 'Cricket', 'Vidya Nagar Cross road, Chikkajala', '9754687123', 850, 7),
(14, 'Sports X', 'Cricket', 'No 91/4, Veeranna Palya, Nagawara Ring road, Near Manyata Tech Park, Nagawara', '8599874562', 1200, 4),
(15, 'Turfs Up', 'Cricket', 'HBR Layout 2nd Block, Stage 1, HBR Layout', '9875641897', 3000, 3),
(16, 'Match Point', 'Cricket', 'No 2, South End Street, Kumara Park East, Behind Shivananda Stores', '9465812222', 2300, 8),
(17, 'Sol Sports Academy', 'Tennis', 'Near Wipro, Opposite Radha Reddy Layout, Doddakannali, Off Sarjapur Road', '7845691248', 300, 6),
(18, 'Elite Tennis Academy', 'Tennis', '51/6, Halanayakanahalli, Opposite to Rainbow Retreat Layout, Sarjapur', '7845697518', 500, 6),
(19, 'Flybounce Sports', 'Tennis', 'Hilalige road, Glass Factory Layout, Electronic City', '7845126985', 400, 7),
(20, 'Kim\'s Tennis Academy', 'Tennis', 'Cox Town, MM road', '8753321569', 400, 5),
(21, 'Karnataka State Lawn Tennis Association', 'Tennis', 'Cyween Park, Cubbon Park', '9845659144', 1000, 4),
(22, 'DHI Sports Center', 'Table Tennis', 'Innovation Park, Near Honeywell, Arekera, Bannerghatta road, Banglore', '8756498712', 360, 9),
(23, 'Vission Sports Club', 'Table Tennis', 'No 198, Rajanna farm, Narayana Nagar 2nd Stage, Doddakalasandra post, Behind Rahul Dravid Cricket Stadium, Kanakpura road', '9832156421', 200, 3),
(24, 'Lakeside Sports Center', 'Table Tennis', 'Aralimara Bus Stop, Next to PK Kalyan Mantap, Behind RN Palace, Begur Road', '8754698711', 600, 12),
(25, 'Fiton Sports', 'Table Tennis', '10/5, kembathalli road, Opposite to Bayalu Anjaneya temple, Gottigere, Banarghatta road', '9321232221', 350, 5),
(26, 'Citi Nest Sports Center', 'Table Tennis', '91/72, 7th Cross Road, Eshwar Layout, Indiranagar', '7111222331', 550, 3);

-- --------------------------------------------------------

--
-- Table structure for table `matchsenrolled`
--

CREATE TABLE `matchsenrolled` (
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table letsromp.matchsenrolled: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `letsromp`.`matchsenrolled`' at line 1

--
-- Triggers `matchsenrolled`
--
DELIMITER $$
CREATE TRIGGER `duplicatecheck` BEFORE INSERT ON `matchsenrolled` FOR EACH ROW BEGIN
IF(EXISTS (SELECT * FROM matchsenrolled WHERE uid=NEW.uid AND mid=NEW.mid))
THEN
CALL cancleinsert();
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `matchtable`
--

CREATE TABLE `matchtable` (
  `mid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `game` varchar(50) DEFAULT NULL,
  `mdate` date DEFAULT NULL,
  `mtime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table letsromp.matchtable: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `letsromp`.`matchtable`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tournmentsenrolled`
--

CREATE TABLE `tournmentsenrolled` (
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournmentsenrolled`
--

INSERT INTO `tournmentsenrolled` (`uid`, `tid`) VALUES
(3, 7),
(9, 7);

--
-- Triggers `tournmentsenrolled`
--
DELIMITER $$
CREATE TRIGGER `duplicatecheck2` BEFORE INSERT ON `tournmentsenrolled` FOR EACH ROW BEGIN
IF(EXISTS (SELECT * FROM tournmentsenrolled WHERE uid=NEW.uid AND tid=NEW.tid))
THEN
CALL cancleinsert();
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tournmenttable`
--

CREATE TABLE `tournmenttable` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `game` varchar(50) NOT NULL,
  `tdate` date NOT NULL,
  `ttime` time NOT NULL,
  `entryfee` int(11) DEFAULT NULL,
  `prize1` varchar(50) DEFAULT NULL,
  `prize2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournmenttable`
--

INSERT INTO `tournmenttable` (`tid`, `uid`, `fid`, `game`, `tdate`, `ttime`, `entryfee`, `prize1`, `prize2`) VALUES
(7, 3, 1, 'Badminton', '2018-11-12', '10:10:00', 400, '800', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `fullname`, `dob`, `gender`, `email`, `phno`) VALUES
(3, 'anil', '2436', 'B. G. Anil', '1998-07-06', 'male', 'anilbg189@gmail.com', '2147483647'),
(4, 'gurunath', 'gurunath', 'g.i.badiger', '1962-07-07', 'male', 'gurunathb521@gmail.com', '2147483647'),
(5, 'xyz', 'xyz', 'xyz', '1998-07-06', 'male', 'gurunathb521@gmail.com', '2147483647'),
(6, 'abc', 'abc', 'abc', '1998-07-06', 'male', 'gurunathb521@gmail.com', '2147483647'),
(7, 'Guy', 'guy', 'Guy', '1998-07-06', '', 'ani@gmail.com', '8975462135'),
(8, 'Shivu', '123456', 'Shivani Bhonsle', '0000-00-00', '', 'shravsbhonsle18@gmail.com', '9902376681'),
(9, 'ani', '1234', 'anil', '1998-07-06', '', 'gurunathb521@gmail.com', '08722672564');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `matchsenrolled`
--
ALTER TABLE `matchsenrolled`
  ADD KEY `user` (`uid`),
  ADD KEY `match` (`mid`);

--
-- Indexes for table `matchtable`
--
ALTER TABLE `matchtable`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `tournmentsenrolled`
--
ALTER TABLE `tournmentsenrolled`
  ADD KEY `referenc` (`uid`),
  ADD KEY `treference` (`tid`);

--
-- Indexes for table `tournmenttable`
--
ALTER TABLE `tournmenttable`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `references` (`uid`),
  ADD KEY `reference` (`fid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `matchtable`
--
ALTER TABLE `matchtable`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tournmenttable`
--
ALTER TABLE `tournmenttable`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matchsenrolled`
--
ALTER TABLE `matchsenrolled`
  ADD CONSTRAINT `match` FOREIGN KEY (`mid`) REFERENCES `matchtable` (`mid`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `matchtable`
--
ALTER TABLE `matchtable`
  ADD CONSTRAINT `fid` FOREIGN KEY (`fid`) REFERENCES `field` (`fid`) ON DELETE CASCADE,
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `tournmentsenrolled`
--
ALTER TABLE `tournmentsenrolled`
  ADD CONSTRAINT `referenc` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `treference` FOREIGN KEY (`tid`) REFERENCES `tournmenttable` (`tid`) ON DELETE CASCADE;

--
-- Constraints for table `tournmenttable`
--
ALTER TABLE `tournmenttable`
  ADD CONSTRAINT `reference` FOREIGN KEY (`fid`) REFERENCES `field` (`fid`) ON DELETE CASCADE,
  ADD CONSTRAINT `references` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
