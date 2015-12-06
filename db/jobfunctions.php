<?php
//ALL TESTED WORKING, NEED TO PASS IN THROUGH $POST
include 'dbconfig.php';
include 'dbopen.php';

	function createJob($jobDescription, $jobStartDate, $jobEndDate, $uploadDate, $jobValue, $jobDistance, $jobDifficulty) {	
		include 'dbconfig.php';
		include 'dbopen.php';
		$sql = "INSERT INTO jobs (JobID, JobDescription, JobActive, JobStartDate, JobEndDate, JobUploadDate, JobValue, JobDist, JobDifficulty) VALUES (DEFAULT, '$jobDescription', '$jobStartDate', '$jobEndDate', '$uploadDate', '$jobValue', '$jobDistance', '$jobDifficulty')";
		if(mysqli_query($conn, $sql)){
				echo "success";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}

	function selectJobFromID($ID) {
		include 'dbconfig.php';
		include 'dbopen.php';

		$sql = "SELECT * FROM `jobs` WHERE `JobID` = '$ID'";
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}		

	
	function updateJobStatus($ID, $jobActive) { //Int, BOOLEAN
		include 'dbconfig.php';
		include 'dbopen.php';
		$sql = "UPDATE `jobs` SET `JobActive` = '$jobActive' WHERE `JobID` = '$ID'";
		
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	}

	function selectViaDistance($dist){
		include 'dbconfig.php';
		include 'dbopen.php';
		$sql = "SELECT * FROM `jobs` WHERE `JobDist` > '$dist'";
		
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//return mysql_result($sql, 1, 1);
	}
	function selectViaDifficult($difficulty) //int 1-3
	{
		include 'dbconfig.php';
		include 'dbopen.php';
		$sql = "SELECT * FROM `jobs` WHERE `JobDifficulty` = '$difficulty'";
		
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	?> 