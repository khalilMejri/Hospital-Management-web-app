-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2018 at 10:39 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_CIN`, `RegistrationNumber`, `Grade`, `Speciality`) VALUES
(128, 2, 'gl2', 'dance'),
(1243452, 1, '', 'cardiologie');

-- --------------------------------------------------------

--
-- Table structure for table `medical_doc`
--

DROP TABLE IF EXISTS `medical_doc`;
CREATE TABLE IF NOT EXISTS `medical_doc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description_fich` varchar(64) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_doc`
--

INSERT INTO `medical_doc` (`ID`, `Description_fich`) VALUES
(1, 'C\'est un personne dangereux'),
(2, 'm3allam'),
(3, 'ross'),
(4, 'ross'),
(5, 'dance'),
(6, 'ghjklm'),
(7, 'dance'),
(8, 'hbjk,l;m:'),
(9, 'ghjk,l');

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
(128, 12836970, '2018-04-29 08:59:00', 'lebes aalih'),
(1243452, 12836970, '2018-04-29 02:51:00', 'mestaabrad');

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
  `Groupe_Sanguin` varchar(25) NOT NULL DEFAULT 'non renseigné',
  `Allergie` varchar(25) NOT NULL DEFAULT 'non renseigné',
  `Poids` int(25) NOT NULL DEFAULT '0',
  `Taille` int(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Patient_CIN`),
  UNIQUE KEY `Patient_ID` (`Patient_ID`),
  KEY `Medical_DOC_ID` (`Medical_DOC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_CIN`, `Patient_ID`, `isHere`, `Medical_DOC_ID`, `Groupe_Sanguin`, `Allergie`, `Poids`, `Taille`) VALUES
(45, 3, 1, 3, 'non renseigné', 'non renseigné', 0, 0),
(59, 4, 1, 4, 'non renseigné', 'non renseigné', 0, 0),
(4152, 8, 1, 8, 'non renseigné', 'non renseigné', 0, 0),
(4518, 7, 1, 7, 'non renseigné', 'non renseigné', 0, 0),
(18485, 9, 1, 9, 'A-', '6', 456, 65),
(54895, 6, 1, 6, 'non renseigné', 'non renseigné', 0, 0),
(458485, 5, 1, 5, '', '', 0, 0),
(12836970, 2, 1, 2, 'A-', 'hjk', 151, 4);

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
('slama', 'ali', 'femme', 45, NULL, 'hyjk,l', 485, '0008-12-04'),
('slama', 'ali', 'femme', 59, NULL, 'insat', 526, '0026-05-08'),
('belaid', 'samsoum', 'Homme', 128, 1234567890, '7omét', 94942, '2018-04-01'),
('yalla', 'shoot', 'homme', 4152, NULL, 'yhjklm', 512551, '0548-12-02'),
('belaid', 'sami', 'femme', 4518, NULL, 'sekka', 458451, '0004-04-15'),
('ali', 'lemsaatek', 'femme', 18485, NULL, '5548', 5259841, '2974-09-05'),
('hjkkjk', 'klkljlkjkl', 'homme', 54895, NULL, 'ghjklm', 455485, '0000-00-00'),
('belaid', 'sami', 'femme', 458485, NULL, 'yg', 451, '0051-04-08'),
('chouari', 'hamdi', 'homme', 12836970, NULL, 'insat', 22750801, '1997-03-15');

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
  `Photo` varchar(256) NOT NULL,
  PRIMARY KEY (`Receptionist_CIN`),
  UNIQUE KEY `RegistrationNumber` (`RegistrationNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`Receptionist_CIN`, `RegistrationNumber`, `Email`, `Username`, `Password`, `Photo`) VALUES
(128, 10101010, 'sami.belaid@hotmzil.com', 'samsoum', 'samsoum', '1698.jpg');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
