
CREATE TABLE Ranks(
RankID int(10) PRIMARY KEY,
RankName varchar(25) NOT NULL,
RankDescription varchar(75) NOT NULL); 

CREATE TABLE Companies( 
CompanyID int(10) PRIMARY KEY,
CompanyName varchar(25) NOT NULL,
CONSTRAINT CompanyName_U UNIQUE (CompanyName),
CompanyAddress varchar(75),
CompanyCountry varchar(25)); 


CREATE TABLE Users(
UserID int(10) PRIMARY KEY,
Username varchar(25), 
CONSTRAINT Username_U UNIQUE (Username), 
UserPassword varchar(32) NOT NULL,
UserEmail varchar(25) NOT NULL,
CONSTRAINT UserEmail_U UNIQUE (UserEmail), 
RankID int(10),
CONSTRAINT RankID_FK FOREIGN KEY (RankID) REFERENCES Ranks(RankID)
); 

CREATE TABLE Jobs(
JobID int(10) PRIMARY KEY,
JobDescription varchar(75) NOT NULL, 
JobActive tinyint(1) NOT NULL,
CONSTRAINT IsJobActive CHECK ((JobActive = 1) || (JobActive = 0)),
JobStartDate date,
JobEndDate date,
JobUploadDate date,
JobValue int(10) NOT NULL
); 

CREATE TABLE UserOnJob(
JobID int(10),
CONSTRAINT JobID_FK FOREIGN KEY (JobID) REFERENCES Jobs(JobID), 
UserID int(10), 
CONSTRAINT UserID_FK FOREIGN KEY (UserID) REFERENCES Users(UserID), 
DateJoined date,
DateLeft date
); 
