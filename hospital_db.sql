-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2018 at 01:49 PM
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
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `ID` int(11) NOT NULL,
  `Patient_CIN` bigint(20) DEFAULT NULL,
  `Room_ID` int(11) NOT NULL,
  `Departement_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Patient_CIN` (`Patient_CIN`),
  KEY `Room_ID` (`Room_ID`),
  KEY `Departement_ID` (`Departement_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Chief_ID` bigint(20) NOT NULL,
  `Label` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Chief_ID` (`Chief_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Chief_ID`, `Label`) VALUES
(1, 1243452, 'médecine générale'),
(2, 1243452, 'radiologie'),
(3, 1243452, 'chirurgie');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Doctor_CIN` bigint(20) NOT NULL,
  `RegistrationNumber` bigint(20) NOT NULL AUTO_INCREMENT,
  `Grade` varchar(256) NOT NULL,
  `Speciality` varchar(256) NOT NULL,
  PRIMARY KEY (`Doctor_CIN`),
  UNIQUE KEY `RegistrationNumber` (`RegistrationNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_CIN`, `RegistrationNumber`, `Grade`, `Speciality`) VALUES
(1243452, 1, '', 'cardiologie');

-- --------------------------------------------------------

--
-- Table structure for table `medical_doc`
--

DROP TABLE IF EXISTS `medical_doc`;
CREATE TABLE IF NOT EXISTS `medical_doc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(64) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_doc`
--

INSERT INTO `medical_doc` (`ID`, `Description`) VALUES
(1, 'C\'est un personne dangereux');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE IF NOT EXISTS `meeting` (
  `Doctor_CIN` bigint(20) NOT NULL,
  `Patient_CIN` bigint(20) NOT NULL,
  `Date` datetime NOT NULL,
  `Description` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`Doctor_CIN`,`Date`),
  KEY `Patient_CIN` (`Patient_CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`Doctor_CIN`, `Patient_CIN`, `Date`, `Description`) VALUES
(1243452, 12838225, '2012-12-12 00:00:00', ''),
(1243452, 12838225, '2018-04-28 00:00:00', ''),
(1243452, 12838225, '2018-04-29 00:00:00', ''),
(1243452, 12838225, '2018-04-29 08:00:00', ' '),
(1243452, 12838225, '2018-04-29 09:00:00', ' '),
(1243452, 12838225, '2018-04-29 11:00:00', ' '),
(1243452, 12838225, '2018-04-29 12:00:00', ' '),
(1243452, 12838225, '2018-04-30 10:00:00', ' '),
(1243452, 12838225, '2018-05-03 08:00:00', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Patient_CIN` bigint(20) NOT NULL,
  `Patient_ID` int(11) NOT NULL AUTO_INCREMENT,
  `isHere` tinyint(1) NOT NULL,
  `Medical_DOC_ID` int(11) NOT NULL,
  PRIMARY KEY (`Patient_CIN`),
  UNIQUE KEY `Patient_ID` (`Patient_ID`),
  KEY `Medical_DOC_ID` (`Medical_DOC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_CIN`, `Patient_ID`, `isHere`, `Medical_DOC_ID`) VALUES
(12838225, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `FirstName` varchar(64) DEFAULT NULL,
  `LastName` varchar(64) DEFAULT NULL,
  `Gender` varchar(64) DEFAULT NULL,
  `CIN` bigint(20) NOT NULL,
  `Passport` bigint(20) DEFAULT NULL,
  `Adress` varchar(64) DEFAULT NULL,
  `PhoneNumber` bigint(20) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`FirstName`, `LastName`, `Gender`, `CIN`, `Passport`, `Adress`, `PhoneNumber`, `Birthday`) VALUES
('Slama', 'Ali', 'homme', 1243452, 452452475, 'kalaa', 545412, '2000-04-08'),
('Sami', 'Belaid', 'homme', 12838225, 7657, 'Cité Olympique', 92545567, '1963-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

DROP TABLE IF EXISTS `receptionist`;
CREATE TABLE IF NOT EXISTS `receptionist` (
  `Receptionist_CIN` bigint(20) NOT NULL,
  `RegistrationNumber` bigint(20) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Username` varchar(64) DEFAULT NULL,
  `Password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`Receptionist_CIN`),
  UNIQUE KEY `RegistrationNumber` (`RegistrationNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `Room_NUM` int(11) NOT NULL,
  `Department_ID` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `isEmpty` tinyint(1) NOT NULL,
  PRIMARY KEY (`Room_NUM`,`Department_ID`),
  KEY `Department_ID` (`Department_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
CREATE TABLE IF NOT EXISTS `visit` (
  `ID` int(11) NOT NULL,
  `Entry_Date` varchar(64) NOT NULL,
  `Exit_Date` varchar(64) NOT NULL,
  `Cost` float NOT NULL,
  `HealthState` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `bed_ibfk_1` FOREIGN KEY (`Patient_CIN`) REFERENCES `patient` (`Patient_CIN`),
  ADD CONSTRAINT `bed_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`Room_NUM`),
  ADD CONSTRAINT `bed_ibfk_3` FOREIGN KEY (`Departement_ID`) REFERENCES `department` (`ID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Chief_ID`) REFERENCES `doctor` (`Doctor_CIN`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`Doctor_CIN`) REFERENCES `person` (`CIN`);

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`Doctor_CIN`) REFERENCES `doctor` (`Doctor_CIN`),
  ADD CONSTRAINT `meeting_ibfk_2` FOREIGN KEY (`Patient_CIN`) REFERENCES `patient` (`Patient_CIN`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Patient_CIN`) REFERENCES `person` (`CIN`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`Medical_DOC_ID`) REFERENCES `medical_doc` (`ID`);

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `receptionist_ibfk_1` FOREIGN KEY (`Receptionist_CIN`) REFERENCES `person` (`CIN`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
