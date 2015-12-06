-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
use halsalla;

-- Dumping structure for table guh15.companies
DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `CompanyID` int(10) NOT NULL,
  `CompanyName` varchar(25) NOT NULL,
  `CompanyAddress` varchar(75) DEFAULT NULL,
  `CompanyCountry` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`CompanyID`),
  UNIQUE KEY `CompanyName_U` (`CompanyName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table guh15.companies: ~0 rows (approximately)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;


-- Dumping structure for table guh15.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `JobID` int(10) NOT NULL,
  `JobDescription` varchar(75) NOT NULL,
  `JobActive` tinyint(1) NOT NULL,
  `JobStartDate` date DEFAULT NULL,
  `JobEndDate` date DEFAULT NULL,
  `JobUploadDate` date DEFAULT NULL,
  `JobValue` int(10) DEFAULT NULL,
  `JobDist` smallint(10) DEFAULT NULL,
  `JobDifficulty` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`JobID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table guh15.jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
REPLACE INTO `jobs` (`JobID`, `JobDescription`, `JobActive`,
 `JobStartDate`, `JobEndDate`, `JobUploadDate`, `JobValue`,
 `JobDist`, `JobDifficulty`) VALUES
(1, 'Dummy one', 1, null, null, null, null, 5, 1),
(2, 'Dummy two', 1, null, null, null, null, 10, 2),
(3, 'Dummy three', 1, null, null, null, null, 15, 3);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;


-- Dumping structure for table guh15.jobs_completed
DROP TABLE IF EXISTS `jobs_completed`;
CREATE TABLE IF NOT EXISTS `jobs_completed` (
  `JobID` int(10) NOT NULL AUTO_INCREMENT,
  `JobDescription` varchar(75) DEFAULT NULL,
  `JobStartDate` date DEFAULT NULL,
  `JobEndDate` date DEFAULT NULL,
  `JobUploadDate` date DEFAULT NULL,
  `JobValue` int(10) DEFAULT NULL,
  `JobCompleteDate` date DEFAULT NULL,
  `JobDist` smallint(10) DEFAULT NULL,
  `JobDifficulty` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`JobID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table guh15.jobs_completed: ~0 rows (approximately)
/*!40000 ALTER TABLE `jobs_completed` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs_completed` ENABLE KEYS */;


-- Dumping structure for table guh15.ranks
DROP TABLE IF EXISTS `ranks`;
CREATE TABLE IF NOT EXISTS `ranks` (
  `RankID` int(10) NOT NULL,
  `RankName` varchar(25) NOT NULL,
  `RankDescription` varchar(75) NOT NULL,
  PRIMARY KEY (`RankID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table guh15.ranks: ~9 rows (approximately)
/*!40000 ALTER TABLE `ranks` DISABLE KEYS */;
REPLACE INTO `ranks` (`RankID`, `RankName`, `RankDescription`) VALUES
	(1, 'Newbie', 'Beginner'),
	(2, 'Clonetrooper', 'Beginner+1'),
	(3, 'Padawan', ''),
	(4, 'Clonetrooper', ''),
	(5, 'Jedi', ''),
	(6, 'Jedi Knight', ''),
	(7, 'Jedi Master', ''),
	(8, 'Jedi Sage', ''),
	(9, 'Skywalker', '');
/*!40000 ALTER TABLE `ranks` ENABLE KEYS */;


-- Dumping structure for table guh15.useronjob
DROP TABLE IF EXISTS `useronjob`;
CREATE TABLE IF NOT EXISTS `useronjob` (
  `JobID` int(10) DEFAULT NULL,
  `UserID` int(10) DEFAULT NULL,
  `DateJoined` date DEFAULT NULL,
  `DateLeft` date DEFAULT NULL,
  KEY `JobID_FK` (`JobID`),
  KEY `UserID_FK` (`UserID`),
  CONSTRAINT `JobID_FK` FOREIGN KEY (`JobID`) REFERENCES `jobs` (`JobID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table guh15.useronjob: ~0 rows (approximately)
/*!40000 ALTER TABLE `useronjob` DISABLE KEYS */;
/*!40000 ALTER TABLE `useronjob` ENABLE KEYS */;


-- Dumping structure for table guh15.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) DEFAULT NULL,
  `UserPassword` varchar(32) DEFAULT NULL,
  `UserEmail` varchar(25) DEFAULT NULL,
  `RankID` int(10) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserEmail_U` (`UserEmail`),
  UNIQUE KEY `Username_U` (`Username`),
  KEY `RankID_FK` (`RankID`),
  CONSTRAINT `RankID_FK` FOREIGN KEY (`RankID`) REFERENCES `ranks` (`RankID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table guh15.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`UserID`, `Username`, `UserPassword`, `UserEmail`, `RankID`) VALUES
	(1, 'Theo', '5f17dd871dacc61834234a9cd5aa375d', 'theo-c@live.co.uk', 1),
	(4, 'Theoc', '5f17dd871dacc61834234a9cd5aa375d', 'theo-cc@live.co.uk', 1),
	(5, 'Theocc', '5f17dd871dacc61834234a9cd5aa375d', 'theo-dcc@live.co.uk', 1),
	(6, 'theo3', '5f17dd871dacc61834234a9cd5aa375d', 'theo3@test.com', 1),
	(7, 'josh', '5f4dcc3b5aa765d61d8327deb882cf99', 'josh@josh.net', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
