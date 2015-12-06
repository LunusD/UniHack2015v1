<?php 
include 'init.php';   // includes the init.php file

/* if (user_exists('sjschofield') === true) {
	echo 'exists';
} */    // this if statement checks to see if the user_exists function works as defined in users.php

if(empty($_POST) === false) {     
	$Username = $_POST['username'];
	$UserPassword = $_POST['UserPassword'];  
	$UserEmail = $_POST['UserEmail'];// if the Username and UserPassword fields are NOT empty 
	
 	// echo $Username, ' ', $UserPassword;      // print whatever was entered into Username and UserPassword - for initial testing purposes


	 if(empty($Username) === true || empty($UserPassword) === true || empty($UserEmail)) {
		$errors[] = 'Please complete all fields'; 
	} else if(user_exists($Username) === true) {
		$errors[] = 'This username is taken';	
	} else { 
		$register = create_user($Username, $UserPassword, $UserEmail); 
		if($register === false) {
			$errors[] = 'Error message to be determined';
			echo output_errors($errors);
		} else { 
			//set the user session and redirect to home 
			$_SESSION['userid'] = $register; 
			header('Location: ../register-interim.php');
			exit();
		}
	}
	
}
echo output_errors($errors); 
	
//outputs the errors to the screen
?>