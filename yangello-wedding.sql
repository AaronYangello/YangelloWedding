-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2018 at 06:56 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yangello-wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery-photos`
--

CREATE TABLE IF NOT EXISTS `gallery-photos` (
  `id` int(11) NOT NULL,
  `imagepath` text NOT NULL,
  `title` text NOT NULL,
  `datetaken` date NOT NULL,
  `gallery` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery-photos`
--

INSERT INTO `gallery-photos` (`id`, `imagepath`, `title`, `datetaken`, `gallery`) VALUES
(0, 'img\\galleries\\Through_The_Years\\KelseasBirthday_May2018.jpg', 'May 2018: Kelsea''s birthday weekend extravaganza in Baltimore, MD!', '2018-05-05', 'through_the_years'),
(2, 'img\\galleries\\Through_The_Years\\applebees_Sept2010.jpg', 'August 2010: Aaron and Kelsea at Applebees after the meet at Footloose the musical, where Aaron played Ren', '2010-08-29', 'through_the_years'),
(3, 'img\\galleries\\Through_The_Years\\Septemberfest_Sept2010.jpg', 'September 2010: Kelsea says yes to dating Aaron at Pennsville''s annual Septemberfest celebration.', '2010-09-11', 'through_the_years'),
(4, 'img\\galleries\\Through_The_Years\\Homecoming_Oct2010.jpg', 'October 2010: Homecoming 2010', '2010-10-10', 'through_the_years'),
(5, 'img\\galleries\\Through_The_Years\\AfterHomecoming_Oct2010.jpg', 'October 2010: After homecoming at Applebees.', '2010-10-11', 'through_the_years'),
(6, 'img\\galleries\\Through_The_Years\\Halloween_Oct2010.jpg', 'October 2010: Aaron and Kelsea''s first halloween as Raggedy Ann and Andy.', '2010-10-31', 'through_the_years'),
(7, 'img\\galleries\\Through_The_Years\\ILoveYou_Dec2010.jpg', 'December 2010: Aaron and Kelsea say \\"I Love You\\" for the first time.', '2010-12-13', 'through_the_years'),
(8, 'img\\galleries\\Through_The_Years\\Dennys_Jan2011.jpg', 'January 2011: Making New Year promises.', '2011-01-05', 'through_the_years'),
(9, 'img\\galleries\\Through_The_Years\\Misc_Jan2011.jpg', 'January 2011: Reaching new heights in the new year!', '2011-01-15', 'through_the_years'),
(10, 'img\\galleries\\Through_The_Years\\NewYearsEve_Dec2011.jpg', 'December 2011: Goodbye, 2011. Hello, 2012 and all of the adventures you come with!', '2011-12-31', 'through_the_years'),
(11, 'img\\galleries\\Through_The_Years\\Hop_Apr2011.jpg', 'April 2011: PMHS Soph Hop. Theme - Neon', '2011-04-05', 'through_the_years'),
(12, 'img\\galleries\\Through_The_Years\\Suessical_Mar2011.jpg', 'March 2011: Aaron plays The Cat in the Hat in Seussical the Musical.', '2011-03-15', 'through_the_years'),
(13, 'img\\galleries\\Through_The_Years\\Prom_May2011.jpg', 'May 2011: Kelsea''s Senior Prom!', '2011-05-05', 'through_the_years'),
(14, 'img\\galleries\\Through_The_Years\\Meet_May2011.jpg', 'May 2011: State and Regional gymnastics meet in Wildwood, NJ.', '2011-05-15', 'through_the_years'),
(15, 'img\\galleries\\Through_The_Years\\Misc_Jun2011.jpg', 'June 2011: ... What?', '2011-06-06', 'through_the_years'),
(16, 'img\\galleries\\Through_The_Years\\Misc_Aug2011.jpg', 'August 2011: Summer fun at a local lake!', '2011-08-08', 'through_the_years'),
(17, 'img\\galleries\\Through_The_Years\\PajamaGame_Aug2011.jpg', 'August 2011: Aaron and Kelsea do a musical together, Pajama Game! Backstage before the show.', '2011-08-15', 'through_the_years'),
(18, 'img\\galleries\\Through_The_Years\\PajamaGame_Aug2011_2.jpg', 'August 2011: Meeting our friends and family after the show...and apparently Kelsea needed to be held...', '2011-08-16', 'through_the_years'),
(19, 'img\\galleries\\Through_The_Years\\FirstAnniversary_Sept2011.jpg', 'September 2011: Septemberfest - A whole year later and still going strong!', '2011-09-10', 'through_the_years'),
(20, 'img\\galleries\\Through_The_Years\\CheerComp_Nov2011.jpg', 'Novemeber 2011: Aaron helps Kelsea down off of the car after a cheer competition...why does she have to climb on things...', '2011-11-11', 'through_the_years'),
(21, 'img\\galleries\\Through_The_Years\\Christmas_Dec2011.jpg', 'December 2011: Bringing in the Christmas season with a comfy day at home.', '2011-12-25', 'through_the_years'),
(22, 'img\\galleries\\Through_The_Years\\NYC_Jan2012.jpg', 'January 2012: NYC in the winter is beautiful! Almost as beautiful as Kelsea <3', '2012-01-15', 'through_the_years'),
(23, 'img\\galleries\\Through_The_Years\\Prom_May2012.jpg', 'May 2012: Aaron''s Junior Prom!', '2012-05-05', 'through_the_years'),
(24, 'img\\galleries\\Through_The_Years\\Prom_May2012_2.jpg', 'May 2012: Anther one of Aaron''s Junior Prom.', '2012-05-06', 'through_the_years'),
(25, 'img\\galleries\\Through_The_Years\\Prom_May2012_3.jpg', 'May 2012: ...a lot of pictures were taken for prom...', '2012-05-07', 'through_the_years'),
(26, 'img\\galleries\\Through_The_Years\\Prom_May2012_4.jpg', 'May 2012: P R O M', '2012-05-08', 'through_the_years'),
(27, 'img\\galleries\\Through_The_Years\\LittleMermaid_Aug2012.jpg', 'August 2012: Aaron plays Sebastian the Crab in the Little Mermaid!', '2012-08-05', 'through_the_years'),
(28, 'img\\galleries\\Through_The_Years\\Misc_Nov2012.jpg', 'November 2012: A beautiful night for a photo.', '2012-11-11', 'through_the_years'),
(29, 'img\\galleries\\Through_The_Years\\Misc_Dec2012.jpg', 'December 2012: After Aaron''s winter choral concert, never to be taken too seriously.', '2012-12-12', 'through_the_years'),
(30, 'img\\galleries\\Through_The_Years\\Prom_May2013.jpg', 'May 2013: Aaron''s senior prom!', '2013-05-05', 'through_the_years'),
(31, 'img\\galleries\\Through_The_Years\\Prom_May2013_2.jpg', 'May 2013: What do ya know... another prom picture...', '2013-05-06', 'through_the_years'),
(32, 'img\\galleries\\Through_The_Years\\Fourth_July2013.jpg', 'July 2013: Happy 4th of July!', '2013-07-04', 'through_the_years'),
(33, 'img\\galleries\\Through_The_Years\\Fourth_July2013_2.jpg', 'July 2013: Happy 4th again because ''Merica.', '2013-07-05', 'through_the_years'),
(34, 'img\\galleries\\Through_The_Years\\Alice_Aug2013.jpg', 'August 2013: Aaron plays The Mad Hatter in Alice in Wonderland!', '2013-08-08', 'through_the_years'),
(35, 'img\\galleries\\Through_The_Years\\Christmas_Dec2013.jpg', 'December 2013: "It''s the most wonderful time of the year!" #filter', '2013-12-15', 'through_the_years'),
(36, 'img\\galleries\\Through_The_Years\\Christmas_Dec2013_2.jpg', 'December 2013: Merry Christmas Eve!', '2013-12-24', 'through_the_years'),
(37, 'img\\galleries\\Through_The_Years\\NewYears_Jan2014.jpg', 'December 2013: A good year and great memories, but time stops for no one. Happy New Year!', '2014-01-01', 'through_the_years'),
(38, 'img\\galleries\\Through_The_Years\\KelseaGraduation_Jun2014.jpg', 'June 2014: Kelsea Graduates from Cosmetology School! So proud.', '2014-06-06', 'through_the_years'),
(39, 'img\\galleries\\Through_The_Years\\Misc_Aug2014.jpg', 'August 2014: You think its a kiss, until you see that she''s just being her strange self.', '2014-08-08', 'through_the_years'),
(40, 'img\\galleries\\Through_The_Years\\Halloween_Oct2014.jpg', 'October 2014: Aaron pushing Kelsea''s buttons...The year of the iPods. ', '2014-10-31', 'through_the_years'),
(41, 'img\\galleries\\Through_The_Years\\TinaWedding_Dec2014.jpg', 'December 2014: Celebrating Tina''s wedding in beautiful Solvang, CA', '2014-12-13', 'through_the_years'),
(42, 'img\\galleries\\Through_The_Years\\Halloween_Oct2015.jpg', 'October 2015: Nailing the roles of Cosmo and Wanda for Halloween.', '2015-10-31', 'through_the_years'),
(43, 'img\\galleries\\Through_The_Years\\ChristmasEve_Dec2015.jpg', 'December 2015: Goofing around before our annual Christmas Eve Breakfest Double Date with our Moms.', '2015-12-24', 'through_the_years'),
(44, 'img\\galleries\\Through_The_Years\\Misc_Sept2016.jpg', 'September 2016: Obligatory selfie with non-descript background :-)', '2016-09-09', 'through_the_years'),
(45, 'img\\galleries\\Through_The_Years\\Halloween_Oct2016.jpg', 'October 2016: Halloween as our idols, Micky and Minnie!', '2016-10-31', 'through_the_years'),
(46, 'img\\galleries\\Through_The_Years\\Halloween_Oct2017.jpg', 'October 2017: We''re off to eat some candy as Dorothy and The Scarecrow this Halloween!', '2017-10-31', 'through_the_years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery-photos`
--
ALTER TABLE `gallery-photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery-photos`
--
ALTER TABLE `gallery-photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
