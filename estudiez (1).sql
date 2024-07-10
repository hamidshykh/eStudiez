-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 08:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudiez`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeclass`
--

CREATE TABLE `activeclass` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `VDesc` varchar(50) NOT NULL,
  `video` text NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activeclass`
--

INSERT INTO `activeclass` (`ID`, `Title`, `VDesc`, `video`, `CategoryID`, `TeacherID`) VALUES
(2, 'Today Class Video', 'Watch full video', 'study-lab9233.mp4', 10, 0),
(3, 'today class leacture', 'Watch full leacture', 'study-lab3968.mp4', 8, 0),
(5, 'today work', 'watch full video', 'study-lab8465.mp4', 9, 0),
(7, 'cdsfsdf', '', 'study-lab2396.mp4', 8, 0),
(9, 'title', 'description', 'study-lab6096.jpg', 7, 0),
(10, 'today class work', 'watch this full video', 'study-lab7411.mp4', 11, 7);

-- --------------------------------------------------------

--
-- Table structure for table `activelink`
--

CREATE TABLE `activelink` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `LDesc` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activelink`
--

INSERT INTO `activelink` (`ID`, `Title`, `LDesc`, `Link`, `CategoryID`, `TeacherID`) VALUES
(5, 'YouTube  Video Link', 'watch this video for your knowleadge', 'https://youtu.be/y7e-GC6oGhg', 11, 7);

-- --------------------------------------------------------

--
-- Table structure for table `addadmin`
--

CREATE TABLE `addadmin` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `pPassword` varchar(50) NOT NULL,
  `Roletype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addadmin`
--

INSERT INTO `addadmin` (`ID`, `Name`, `Email`, `pPassword`, `Roletype`) VALUES
(1, 'abc', 'abc@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `ID` int(11) NOT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`ID`, `CName`) VALUES
(7, 'Software engineer'),
(8, 'Software'),
(9, 'Graphic Designing'),
(10, 'Music'),
(11, 'Voice Artist');

-- --------------------------------------------------------

--
-- Stand-in structure for view `catname`
-- (See below for the actual view)
--
CREATE TABLE `catname` (
`ID` int(11)
,`Name` varchar(55)
,`image_name` varchar(255)
,`Descript` varchar(200)
,`Price` int(11)
,`Active` varchar(9)
,`CName` varchar(50)
,`FullName` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cardholder` varchar(50) NOT NULL,
  `Cardno` int(11) NOT NULL,
  `ApplierID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `MobileNo` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ID`, `Name`, `Email`, `Cardholder`, `Cardno`, `ApplierID`, `CourseID`, `MobileNo`, `TeacherID`, `CategoryID`) VALUES
(13, 'Abdullah', 'abdullah@gmail.com', 'Abdullahkhan', 2147483647, 126, 35, 2147483647, 7, 11),
(0, 'abdullahkhan', 'abdullahkhanstft@gmail.com', 'abdullahkhan', 2147483647, 126, 35, 2147483647, 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `classbook`
--

CREATE TABLE `classbook` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Desc` varchar(255) DEFAULT NULL,
  `Upload` varchar(255) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classtime`
--

CREATE TABLE `classtime` (
  `ID` int(11) NOT NULL,
  `SecTitle` varchar(50) NOT NULL,
  `SecDesc` varchar(255) NOT NULL,
  `time` varchar(50) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classtime`
--

INSERT INTO `classtime` (`ID`, `SecTitle`, `SecDesc`, `time`, `categoryID`, `instructor`, `Date`) VALUES
(1, 'Music Class', 'Best Class ', '15:31', 10, 7, '2022-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `classtimevw`
--

CREATE TABLE `classtimevw` (
  `ID` int(11) DEFAULT NULL,
  `SecTitle` varchar(50) DEFAULT NULL,
  `SecDesc` varchar(255) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL,
  `Fullname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insreqvw`
--

CREATE TABLE `insreqvw` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL,
  `Reason` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instreq`
--

CREATE TABLE `instreq` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instreq`
--

INSERT INTO `instreq` (`ID`, `Name`, `Email`, `Cat_ID`, `Reason`, `message`, `status`) VALUES
(1, 'abdullah', 'abdullah@gmail.com', 10, 'pata khud pata karle', 'streter', 1),
(2, 'Abdullah', 'abdullahkhan@gmail.com', 7, 'For new job', 'now i have new job', 1),
(0, 'abdullah', 'mhamidshaikh@outlook.com', 8, 'pata khud pata karle', 'wdlki;ajdlkjqek;ljdkqew', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monmarks`
--

CREATE TABLE `monmarks` (
  `ID` int(11) NOT NULL,
  `TestID` int(11) NOT NULL,
  `Desc` text NOT NULL,
  `Date` date NOT NULL,
  `Marks` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `RollNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monmarks`
--

INSERT INTO `monmarks` (`ID`, `TestID`, `Desc`, `Date`, `Marks`, `TeacherID`, `CategoryID`, `RollNo`) VALUES
(8, 13, 'best prepration for modular exam', '2022-08-22', 100, 7, 11, '38f6c7');

-- --------------------------------------------------------

--
-- Table structure for table `myclass`
--

CREATE TABLE `myclass` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `VDesc` varchar(50) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myclasslink`
--

CREATE TABLE `myclasslink` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `LDesc` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mycourse`
--

CREATE TABLE `mycourse` (
  `ID` int(11) DEFAULT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `Verify_code` varchar(255) DEFAULT NULL,
  `UpTitle` varchar(55) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `Descript` varchar(200) DEFAULT NULL,
  `Active` varchar(9) DEFAULT NULL,
  `TName` varchar(50) DEFAULT NULL,
  `Timg` varchar(100) DEFAULT NULL,
  `TEmail` varchar(50) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mystud`
--

CREATE TABLE `mystud` (
  `ID` int(11) DEFAULT NULL,
  `tName` varchar(50) DEFAULT NULL,
  `StudName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `Verify_code` varchar(255) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `pPassword` varchar(50) NOT NULL,
  `Roletype` varchar(50) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Fullname`, `Email`, `PhoneNo`, `pPassword`, `Roletype`, `CategoryID`) VALUES
(1, 'abdullahkhan', 'abdullahkhan@gmail.com', 2147483647, '12345', 'Student', 9),
(2, 'alikhan', 'alikhan@gmail.com', 2147483647, '12345', 'Teacher', 9),
(3, 'alisiddqui', 'aliahhmedsiddqui@gmail.com', 1234526510, '12345', 'Parent', NULL),
(4, 'Ahmedkhan', 'Ahmedakhanzai@gmail.com', 2147483647, '12345', 'Student', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studtbl`
--

CREATE TABLE `studtbl` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `mobile_No` varchar(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `RoleType` varchar(50) DEFAULT NULL,
  `Verify_code` varchar(255) DEFAULT NULL,
  `Verification` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studtbl`
--

INSERT INTO `studtbl` (`ID`, `FullName`, `Email`, `image`, `mobile_No`, `Password`, `RoleType`, `Verify_code`, `Verification`) VALUES
(126, 'Abdullahkhan', 'abdullahkhanstft@gmail.com', 'User-profile1056.jpg', '03125214515', '123456789', 'Student', '38f6c7', 1),
(133, 'Alikhan', 'abdullahkhanstft@gmail.com', NULL, '03147828465', '12543', 'Parent', '788b87', 1),
(134, 'Tufail', 'tufail@gamil.com', NULL, '031285888', '12345', 'Student', '6787678', 1),
(0, 'rafy bhai', 'rafy@gmail.com', NULL, '12313423424', 'abc', 'Student', '8aaaf2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `TCode` varchar(10) NOT NULL,
  `TeacherCode` varchar(50) NOT NULL,
  `RoleType` varchar(50) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `PhonoNo` int(11) NOT NULL,
  `Verification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `FullName`, `Email`, `Password`, `TCode`, `TeacherCode`, `RoleType`, `image_name`, `PhonoNo`, `Verification`) VALUES
(2, 'Abdullah Khan', 'abdullah@gmail.com', '12345678', '2147483647', '7', 'Teacher', 'Instructor-profile3464.jpg', 0, 0),
(3, 'Hamid Shaikh', 'hamid@gmail.com', '12345', '2147483647', '10', 'Teacher', 'Instructor-profile3574.jpg', 0, 1),
(6, 'Rumaisa Khan', 'rumaisa@gmail.com', '12345678', 'f618bd', '8', 'Teacher', 'Instructor-profile3524.jpg', 2147483647, 0),
(7, 'Ahsan Jawed', 'ahsan@gmail.com', '12345', 'c55758', '9', 'Teacher', 'Instructor-profile8179.jpg', 2147483647, 1),
(0, 'tufail', 'tufail@gmail.com', '', '', '1236566', 'Teacher', '', 0, 0),
(0, '', '', '', '', '5465465564', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `textbook`
--

CREATE TABLE `textbook` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Desc` varchar(255) NOT NULL,
  `Upload` varchar(255) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `TeacherID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `textbook`
--

INSERT INTO `textbook` (`ID`, `Title`, `Desc`, `Upload`, `CategoryID`, `TeacherID`) VALUES
(3, 'best textBook ', 'read this book for your knowleadge', 'textbook6994.pdf', 11, '7');

-- --------------------------------------------------------

--
-- Table structure for table `upcourse`
--

CREATE TABLE `upcourse` (
  `ID` int(11) NOT NULL,
  `Name` varchar(55) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `Descript` varchar(200) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Active` varchar(9) DEFAULT NULL,
  `Category_Id` int(11) DEFAULT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcourse`
--

INSERT INTO `upcourse` (`ID`, `Name`, `image_name`, `Descript`, `Price`, `Active`, `Category_Id`, `TeacherID`) VALUES
(1, 'Software', 'study-lab8474.jpg', 'Best Software course', 155000, 'Active', 8, 0),
(16, 'Abdullah', 'stydy-lab3144.jpg', 'this is the best course', 544, 'Yes', 5, 0),
(17, 'Rafi khan', 'stydy-lab3064.jpeg', 'best one', 1240, 'Yes', 6, 0),
(19, 'Abdullah6', 'stydy-lab407.jpeg', 'fgh fgh', 1245, '', 5, 0),
(20, 'Software engineering', 'study-lab8541.png', 'This is the best course in the whole website', 1500, 'Active', 7, 0),
(28, 'Web Development', 'study-lab2654.jpg', 'Web Development Course', 15452, 'Active', 7, 0),
(32, 'Graphic Design', 'study-lab5839.jpg', 'World Best Graphic Designing Course', 15000, 'Active', 9, 0),
(34, 'Music', 'study-lab6267.jpg', 'Best Music course ', 15000, 'Feature', 10, 0),
(35, 'Voice Artist Course', 'study-lab9034.webp', 'Best Voice Artist Course In Whole Country', 15000, 'Active', 11, 7),
(36, 'Web Development', 'study-lab1162.jpg', 'best web developer course ', 5000, 'Feature', 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `yermarks`
--

CREATE TABLE `yermarks` (
  `ID` int(11) NOT NULL,
  `Descript` varchar(255) NOT NULL,
  `ObtainMarks` int(11) NOT NULL,
  `TotalMarks` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `RollNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yermarks`
--

INSERT INTO `yermarks` (`ID`, `Descript`, `ObtainMarks`, `TotalMarks`, `TeacherID`, `CategoryID`, `RollNo`) VALUES
(9, 'not bst prepration for exam', 55, 65, 7, 11, '38f6c7');

-- --------------------------------------------------------

--
-- Structure for view `catname`
--
DROP TABLE IF EXISTS `catname`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `catname`  AS SELECT `upcourse`.`ID` AS `ID`, `upcourse`.`Name` AS `Name`, `upcourse`.`image_name` AS `image_name`, `upcourse`.`Descript` AS `Descript`, `upcourse`.`Price` AS `Price`, `upcourse`.`Active` AS `Active`, `addcategory`.`CName` AS `CName`, `teacher`.`FullName` AS `FullName` FROM ((`upcourse` join `addcategory` on(`upcourse`.`Category_Id` = `addcategory`.`ID`)) join `teacher` on(`upcourse`.`TeacherID` = `teacher`.`ID`))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
