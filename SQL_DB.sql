
CREATE DATABASE IF NOT EXISTS DocOffice;
USE DocOffice;

--
-- Definition of table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `PersonID` int(10) NOT NULL,
  `LastName` varchar(50) default NULL,
  `FirstName` varchar(50) default NULL,
  `StreetAddress` varchar(50) default NULL,
  `city` varchar(50) default NULL,
  `state` varchar(2) default NULL,
  `zip` varchar(9) default NULL,
  `PhoneNumber` varchar(10) default NULL,
  `SSN` varchar(10) default NULL,

/* ---------------------------------------- */
  PRIMARY KEY  (`PersonID`),
  KEY `PersonID` (`PersonID`),
  KEY `PhoneNumber` (`PhoneNumber`)
) ENGINE=InnoDB;

--
-- Dumping data for table `person`
--

/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` (`PersonID`,`LastName`,`FirstName`,`StreetAddress`,`city`,`state`,`zip`,`PhoneNumber`, 'SSN') VALUES
111,'Apple','Amanda','345 Randolph Circle','Apopka','CA','30458','7141147258',’111222333’),
(222,'Berry','Beatrice','3230 Dade St.','Dade City','FL','30555','3.4700',’7141852963’,’222333444’),
(333,'Celery','Cecilia','103 Landis Hall','Bratt','CA','30457','7141123456’,’333444555’'),
(444,'Duck','Donald','76 Main St.','Apopka','CA','30458','7141456789',’444555666’),
(555,'Eggs','Erin','9501 Lafayette St.','Houma','CA','44099','7147894563',’555666777’),
(666,'Fajita','Fabian','123 Main St.','Apopka','CA','30458','7141334679',’666777888’),
(777,'Garden','Gail','14325 N. Bankside St.','Godfrey','CA','43580','7142225579',’777888999’),
(888,'Ham','Holly','Cawthon Dorm, room 642','Tallahassee','FL','32306','7145554499’,'888999000’),
(999,'Ice','Izzy','101 Thanet St.','London','CA','33333','7147779456',’123456789’),
(101,'Jam','Joseph','101 Thanet St.','London','CA','33333','7143334169',’987654321’);


/*!40000 ALTER TABLE `person` ENABLE KEYS */;


--
-- Definition of table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `PatientID` int(10) NOT NULL,
  `PhoneNumber` varchar(50) default NULL,
  `DOB` date() default NULL,
  `PersonID` int(10) NOT NULL,

  PRIMARY KEY  (`PatientID`)
  KEY `PhoneNumber` (`PhoneNumber`)
  KEY `PersonID` (`PersonID`)
  KEY `PatientID` (`PatientID`)


) ENGINE=InnoDB;

--
-- Dumping data for table `patient`
--

/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`PatientID`,`PhoneNumber`,`DOB`,`PersonID`) VALUES
(101,'7141147258','05-03-1992',111),
(102,'7141852963','01-12-1990',222),
(103,'7147894563','12-24-1985',555),
(114,'7143334169','06-06-1997',101),
(115,'7145554499','02-29-1990',888);

/*!40000 ALTER TABLE `employee` ENABLE KEYS */;


--
-- Definition of table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `DoctorID` int(10) NOT NULL,
  `MedicalDegrees` varchar(60) default NULL,
  `PersonID` int(10) default NOT NULL,

  PRIMARY KEY  (`DoctorID`),
  KEY `DoctorID` (`DoctorID`)
  KEY `PersonID` (`PersonID`)

  /*UNIQUE KEY `{CC921662-F1CE-40BD-B451-CD5052` (`ssn`)*/
) ENGINE=InnoDB;

--
-- Dumping data for table `doctor`
--

/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` (`DoctorID`,`MedicalDegrees`,`PersonID`) VALUES
(202, 'M.D.' , 888),
(204, 'M.D.', 555),
(206, 'M.D.', 222);

/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;


--
-- Definition of table `PatientVisit`
--

DROP TABLE IF EXISTS `patientVisit`;
CREATE TABLE `patientVisit` (
  `VisitID` int(10) NOT NULL,
  `PatientID` int(10) NOT NULL,
  `DoctorID` int(10) NOT NULL,
  `VisitDate` int(10) default NULL,
  `DocNote` text(50) default NULL,

  PRIMARY KEY  (`VisitID`),
  KEY `PatientID` (`PatientID`)
  KEY `DoctorID` (`DoctorID`)
) ENGINE=InnoDB;

--
-- Dumping data for table `PatientVisit`
--

/*!40000 ALTER TABLE `patientVisit` DISABLE KEYS */;
INSERT INTO `patientVisit` (`VisitID`,`PatientID`,`DoctorID`,`VisitDate`,`DocNote`) VALUES
(111, 101, 202, '04-24-2020', 'Drink pills every 12 hours'),
(222, 102, 202, '04-23-2020', 'We try our best…' ),
(333, 103, 204, '02-25-2019', 'Please excuse him from school'),
(444, 114, 204, '01-31-2020', 'Stay in the hospital for another week'),
(555, 115, 206, '03-15-2020', 'Drink pills every 6 hours');

/*!40000 ALTER TABLE `movie` ENABLE KEYS */;


--
-- Definition of table `Speciality`
--

DROP TABLE IF EXISTS `speciality`;
CREATE TABLE `speciality` (
  `SpecialityID` int(10) NOT NULL,
  `SpecialityName` varchar(50) NOT NULL,
  PRIMARY KEY  (`SpecialityID`,`SpecialityName`),
  KEY `SpecialityID` (`SpecialityID`)

  /*
  KEY `{CE5D3D35-8BD6-4174-B922-FDEE2B` (`accountId`),
  KEY `accountId` (`accountId`) */

) ENGINE=InnoDB;

--
-- Dumping data for table `otherusers`
--

/*!40000 ALTER TABLE `Speciality` DISABLE KEYS */;
INSERT INTO `speciality` (`SpecialityID`,`SpecialityName`) VALUES
(234, 'Diagnostic Imaging'),
(509, 'Physical and Visual Examination' ),
(576, 'Cellular & Chemical Analysis');

/*!40000 ALTER TABLE `otherusers` ENABLE KEYS */;


--
-- Definition of table `DoctorSpeciality`
--

DROP TABLE IF EXISTS `doctorSpeciality`;
CREATE TABLE `doctorSpeciality` (
  `DoctorID` int(10) NOT NULL,
  `SpecialityID` int(10) NOT NULL,

  PRIMARY KEY  (`DoctorID`,`SpecialityID`),
  KEY `DoctorID` (`DoctorID`),
  KEY `SpecialityID` (`SpecialityID`),
  ) ENGINE=InnoDB;

--
-- Dumping data for table `doctorSpeciality`
--

/*!40000 ALTER TABLE `DoctorSpeciality` DISABLE KEYS */;
INSERT INTO `doctorSpeciality` (`DoctorID`,`SpecialityID`) VALUES
(202, 234),
(204, 509),
(206, 576);
/*!40000 ALTER TABLE `paystatement` ENABLE KEYS */;


--
-- Definition of table `PVisitPrescription`
--

DROP TABLE IF EXISTS `PVisitPrescription`;
CREATE TABLE `PVisitPrescription` (
  `VisitID` int(10) NOT NULL,
  `PrescriptionID` int(10) NOT NULL,

  PRIMARY KEY  (`VisitID`,`PrescriptionID`),
/*
  KEY `{EC9DB354-14CF-4055-8C03-FEBD3C` (`accountId`),
  KEY `{F8FB5EF8-A80D-401A-9DD2-E9FF64` (`videoId`), */
  KEY `VisitID` (`VisitID`),
  KEY `PrescriptionID` (`PrescriptionID`)

) ENGINE=InnoDB;

--
-- Dumping data for table `PVisitPrescription`
--

/*!40000 ALTER TABLE `PVisitPrescription` DISABLE KEYS */;
INSERT INTO `PVisitPrescription` (`VisitID`,`PrescriptionID`) VALUES
(123, 901),
(234, 902),
(345, 903),
(456, 904),
(567, 905);

/*!40000 ALTER TABLE `previousrental` ENABLE KEYS */;


--
-- Definition of table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE `prescription` (
  `PrescriptionID` int(10) NOT NULL,
  `PrescriptionName` varchar(50) default NULL,

  PRIMARY KEY  (`PrescriptionID`),
  /*KEY `{B2E00A44-11D2-446B-8500-570CDC` (`supplierId`), */
  KEY `PrescriptionID` (`PrescriptionID`),

) ENGINE=InnoDB;

--
-- Dumping data for table `prescription`
--

/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
INSERT INTO `prescription` (`PrescriptionID`,`PrescriptionName`) VALUES
(901, 'Doxycycline'),
(902, 'Ibuprofen'),
(903, 'Metoprolol'),
(904, 'Ciprofloxacin'),
(905, 'Lyrica');

/*!40000 ALTER TABLE `purchaseorder` ENABLE KEYS */;


--
-- Definition of table `PVisitTest`
--

DROP TABLE IF EXISTS `PVisitTest`;
CREATE TABLE `PVisitTest` (
  `VisitID` int(10) NOT NULL,
  `TestID` int(10) NOT NULL,
  PRIMARY KEY  (`VisitID`,`TestID`),

  /*KEY `{72967CAA-B6BB-44C4-B6F9-718C51` (`purchaseOrderId`),
  KEY `{F17E7BC1-43A2-4E07-A035-CB448E` (`movieId`),*/
  KEY `VisitID` (`VisitID`),
  KEY `TestID` (`TestID`)
) ENGINE=InnoDB;

--
-- Dumping data for table `PVisitTest`
--

/*!40000 ALTER TABLE `PVisitTest` DISABLE KEYS */;
INSERT INTO `PVisitTest` (`VisitID`,`TestID`) VALUES
 (99001,450,3,'25.0000'),
 (99001,987,1,'25.0000');
/*!40000 ALTER TABLE `PVisitTest` ENABLE KEYS */;


--
-- Definition of table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `TestID` int(10) default NULL,
  `TestName` varchar(10) NOT NULL,

  PRIMARY KEY  (`TestID`),

  /*UNIQUE KEY `{0CF92969-0A44-4FD2-BA9B-B234C1` (`videoId`),
  UNIQUE KEY `videotapeId` (`videoId`),
  KEY `{21C9A279-E5B4-458A-9F10-8FCB0B` (`accountId`),
  */

  KEY `TestID` (`TestID`)
) ENGINE=InnoDB;

--
-- Dumping data for table `rental`
--

/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`TestID`,`TestName`) VALUES
(909, 'Biopsy'),
(143, 'Echocardiography'),
(682, 'Toxicology'),
(238, 'Angiography'),
(350, 'Ultrasound');


/*!40000 ALTER TABLE `test` ENABLE KEYS */;





-- /*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
