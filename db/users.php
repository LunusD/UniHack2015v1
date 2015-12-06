<?php
//ALL TESTED WORKING, NEED TO PASS IN THROUGH $POST
include 'dbconfig.php';
include 'dbopen.php';

	function loggedin() {
		return (isset($_SESSION['userID'])) ? true : false;
	}  // function to check if the user is logged in by checking the session id: returns either true or false 

	function user_exists($Username) {	
		include 'dbconfig.php';
		include 'dbopen.php';
	 
		$sql = "SELECT COUNT('userID') FROM `users` WHERE `Username` = '$Username'";
		if(mysqli_query($conn, $sql)){
				echo "success";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
/*  checks if the user exists, parameter $Username is the Username entered by the user through the login.php form
	the above query is checks the database to see if the usernaem entered is an active user */
	
	function user_id_from_Username($Username) {
		include 'dbconfig.php';
		include 'dbopen.php';

		$sql = "SELECT `userID` FROM `users` WHERE `Username` = '$Username'";
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//return mysql_result(mysql_query("SELECT `userID` FROM `users` WHERE `Username` = '$Username'"), 0, 'userID'); 
	
	}		
	/* this function gets the user's ID from the Username that they enter when they're logging in 
	*/ 
	
	function login($Username, $UserPassword) {
		include 'dbconfig.php';
		include 'dbopen.php';

		$userID = user_id_from_Username($Username); 
		$UserPassword = md5($UserPassword); 
		
		$sql = "SELECT COUNT ('userID') FROM `users` WHERE `Username` = '$Username' AND `UserPassword` = '$UserPassword'";
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	}
	//tested working, need to pass in through $POST
	function create_user($Username, $UserPassword, $UserEmail) {

		//$Username = sanitize($Username); 
		///$UserPassword = sanitize($UserPassword);
		$UserPassword = md5($UserPassword);
		//$UserEmail = sanitize($UserEmail);
		include 'dbconfig.php';
		include 'dbopen.php';
		$sql = "INSERT INTO users (UserID, Username, UserPassword, UserEmail, RankID) VALUES (DEFAULT, '$Username', '$UserPassword', '$UserEmail', '1')";
		if(mysqli_query($conn, $sql)){
			echo "success";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	
	?> 